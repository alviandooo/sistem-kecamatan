<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengajuan;
use DB;
use Yajra\DataTables\DataTables;
use Auth;
use Hash;
use PDF;
use App\User;

class PengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function data()
    {
        $d = Pengajuan::all();
        return Datatables::of($d)->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {

        $nopengajuan = rand(1111111111,9999999999);
        
        //cek no-pengajuan
        $cek = DB::table('pengajuans')->where('no_pengajuan',$nopengajuan)->count();
        if($cek > 0){
            $nopengajuan = rand(1111111111,9999999999);
        }else{
            $d = new Pengajuan();
            $d->nik = $r->nik;
            $d->no_pengajuan = $nopengajuan;
            $d->tanggal_pengajuan = $r->tanggal_pengajuan;
            $d->jenis_pelayanan = $r->jenis_pelayanan;
            $d->status_pengajuan = 0;
            $d->save();
        }

        return response()->json([
                'status' => 'success',
                'text' => 'Data Berhasil Disimpan',
            ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r)
    {
        $p = Pengajuan::find($r->id);

        if($r->type == 1){
            // approved pengajuan

            if(Auth::user()->role == 2){
                $p->status_pengajuan = 1;
            }else if(Auth::user()->role == 3){
                $p->status_pengajuan = 2;
            }

        }else if($r->type == 3){
            // pengajuan ditolak

            $p->status_pengajuan = 3;

        }else{
            // ubah data biasa
        }

        $p->save();
        
        return response()->json([
                'status' => 'success',
                'text' => 'Data Berhasil Diubah',
            ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function cetakpdf(Request $r)
    {
        $ttd = User::find($r->ttd);
        $data = DB::table('pengajuans')
        ->leftJoin('data', 'pengajuans.nik','=','data.nik')
        ->select('data.*','pengajuans.*')
        ->where('pengajuans.id',$r->id_pdf)
        ->get();

        $d = [];
        $d['ttd'] = $ttd;
        $d['data'] = $data;
        // dd($d);
        if($data[0]->jenis_pelayanan == 0){
            $pdf = PDF::loadview('admin.pdf.surat-belum-menikah', ["ttd" => $ttd,"data" => $data]);
        }else{
            $pdf = PDF::loadview('layouts.kopsurat');
        }
        return $pdf->stream();
    }
}

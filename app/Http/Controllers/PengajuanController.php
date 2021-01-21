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
use App\Data;

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
        $d = DB::table('pengajuans')
        ->leftjoin('pelayanan','pengajuans.jenis_pelayanan','=','pelayanan.id')
        ->select('pengajuans.*','pelayanan.*','pengajuans.id')
        ->get();
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
            $d->status_pengajuan = 1;
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

            if(Auth::user()->role == 1){
                $p->status_pengajuan = 1;
            }else if(Auth::user()->role == 2){
                $p->status_pengajuan = 2;
            }else if(Auth::user()->role == 3){
                $p->status_pengajuan = 3;
            }else if(Auth::user()->role == 4){
                $p->status_pengajuan = 4;
            }

        }else if($r->type == 3){
            // pengajuan ditolak

            $p->status_pengajuan = 0;

        }else{
            $p->tanggal_pengajuan = $r->tanggal_pengajuan;
            $p->jenis_pelayanan = $r->jenis_pelayanan;
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
        if($r->bermaksud){

            DB::table('pengajuans')
            ->where('id', $r->id_pdf)
            ->update(['bermaksud' => $r->bermaksud]);
        }

        $ttd = User::find($r->ttd);
        $data = DB::table('pengajuans')
        ->leftJoin('data', 'pengajuans.nik','=','data.nik')
        ->select('data.*','pengajuans.*')
        ->where('pengajuans.id',$r->id_pdf)
        ->get();

        if($r->niksuami){
            $suami = Data::where('nik',$r->niksuami)->first();
        }
        if($r->nikistri){
            $istri = Data::where('nik',$r->nikistri)->first();
        }
        if($r->nikayah){
            $ayah = Data::where('nik',$r->nikayah)->first();
        }
        if($r->nikibu){
            $ibu = Data::where('nik',$r->nikibu)->first();
        }

        if($data[0]->jenis_pelayanan == 4){
            $pdf = PDF::loadview('admin.pdf.surat-menikah', ["ttd" => $ttd,"data" => $data,"suami"=>$suami,"istri"=>$istri,"ayah"=>$ayah,"ibu"=>$ibu])->setPaper('legal', 'potrait');
        }else{
            $pdf = PDF::loadview('admin.pdf.surat-keterangan', ["ttd" => $ttd,"data" => $data]);
        }
        return $pdf->stream();
    }
}

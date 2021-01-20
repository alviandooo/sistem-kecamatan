<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;
use Yajra\DataTables\DataTables;
use Auth;
use Hash;
use DB;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.data.index-data');
    }

    public function data()
    {
        $d = Data::all();
        return Datatables::of($d)->make(true);
    }

    public function select2datapenduduk(Request $request){
        $data = Data::selectRaw('id, nik')
        ->where('nik','LIKE',"%$request->q%")
        ->orderBy('nik','asc')
        ->paginate(10);
        return response()->json(['items' => $data->toArray()['data'], 'pagination' => $data->nextPageUrl() ? true : false]);
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
        Data::create($r->all());

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
    public function edit(Request $r)
    {
        $d = Data::find($r->id);
        
        return response()->json($d);
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
        // dd($r->all());
        Data::where('id', $r->id)->update($r->except(['_token']));

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
    public function destroy(Request $r)
    {
        Data::destroy($r->id);

        return response()->json([
                'status' => 'success',
                'text' => 'Data Berhasil Dihapus',
            ], 200);
    }
}

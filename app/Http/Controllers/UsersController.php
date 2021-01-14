<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Yajra\DataTables\DataTables;
use Auth;
use Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.users');
    }

    public function data()
    {
        $d = User::all();
        return Datatables::of($d)->make(true);
    }

    public function select2users(Request $request){
        $data = User::selectRaw('id, name')
        ->where('name','LIKE',"%$request->q%")
        ->orderBy('name','asc')
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
    public function store(Request $request)
    {
        // dd($request->all());

            if($request->jabatan == 0){
                $jabatan = "Admin";
            }elseif($request->jabatan == 1){
                $jabatan = "Staff Administrasi";
            }elseif($request->jabatan == 2){
                $jabatan = "Sekretaris Camat";
            }elseif ($request->jabatan == 3) {
                $jabatan = "Kepala Camat";
            }
            // dd($jabatan);
            

            $users = new User;
            $users->name = $request->nama;
            $users->email = $request->email;
            $users->jabatan = $jabatan;
            $users->role = $request->jabatan;
            $users->password = Hash::make($request->password);;
            $users->save();
       
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
            if($r->jabatan == 0){
                $jabatan = "Admin";
            }elseif($r->jabatan == 1){
                $jabatan = "Staff Administrasi";
            }elseif($r->jabatan == 2){
                $jabatan = "Sekretaris Camat";
            }elseif ($r->jabatan == 3) {
                $jabatan = "Kepala Camat";
            }

        $users = User::find($r->id);
        $users->name = $r->nama;
        $users->email = $r->email;
        $users->password = Hash::make($r->password);
        $users->role = $r->jabatan;
        $users->jabatan = $jabatan;
        $users->save();

        return response()->json([
                'status' => 'success',
                'text' => 'Data Berhasil Diubah!',
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
        // dd($r->all());
        User::destroy($r->id);
        return response()->json([
                'status' => 'success',
                'text' => 'Data Berhasil Dihapus!',
            ], 200);
    }
}

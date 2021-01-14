<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengajuan;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = Pengajuan::all();
        $pditolak = DB::table('pengajuans')->where('status_pengajuan',3)->count();
        $pditerima = DB::table('pengajuans')->where('status_pengajuan',2)->count();
        $pdipending = DB::table('pengajuans')->whereIn('status_pengajuan',[1,0])->count();

        return view('admin.dashboard', compact(['pditerima','pdipending','pditolak']));
    }
}

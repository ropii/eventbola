<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class TeamController extends Controller
{
    public function index(){
        $team = \App\Team::get();
        return view('admin.team.index')->with('team',$team);
    }
   
    public function create(){
        return view('admin.team.create');
    }
    public function store(Request $request){
        $nama              =$request->nama;
        $tempat_lahir      =$request->tempat_lahir;
        $tanggal_lahir     =$request->tanggal_lahir;
        $kebangsaan        =$request->kebangsaan;
        $klub              =$request->klub;
        $posisi            =$request->posisi;
        $no_punggung       =$request->no_punggung;
        $tinggi            =$request->tinggi;

        if(Input::hasFile('file')){
            $file = Input::file('file');
            $file->move('uploads', $file->getClientOriginalName());
        }

        $team = new \App\Team;
        $team->nama               = $nama;
        $team->foto               = $file->getClientOriginalName();        
        $team->tempat_lahir       = $tempat_lahir;
        $team->tanggal_lahir      = $tanggal_lahir;
        $team->kebangsaan         = $kebangsaan;
        $team->klub               = $klub;
        $team->posisi             = $posisi;
        $team->no_punggung        = $no_punggung;
        $team->tinggi             = $tinggi;
        $team->save();
        
        return redirect('/admin/team');
        
    }
    public function edit($id){
        $team = \App\Team::find($id);
        return view('admin.team.editteam')->with('team',$team);
    }

    public function update(Request $request, $id){
        $nama              =$request->nama;
        $tempat_lahir      =$request->tempat_lahir;
        $tanggal_lahir     =$request->tanggal_lahir;
        $kebangsaan        =$request->kebangsaan;
        $klub              =$request->klub;
        $posisi            =$request->posisi;
        $no_punggung       =$request->no_punggung;
        $tinggi            =$request->tinggi;

        if(Input::hasFile('file')){
            $file = Input::file('file');
            $file->move('uploads', $file->getClientOriginalName());
        }

        $team = \App\Team::find($id);
        $team->nama               = $nama;
        $team->foto               = $file->getClientOriginalName();        
        $team->tempat_lahir       = $tempat_lahir;
        $team->tanggal_lahir      = $tanggal_lahir;
        $team->kebangsaan         = $kebangsaan;
        $team->klub               = $klub;
        $team->posisi             = $posisi;
        $team->no_punggung        = $no_punggung;
        $team->tinggi             = $tinggi;
        $team->save();
        
        return redirect('/admin/team');
        
    }

    public function destroy($id){
        $team = \App\Team::find($id);
        $team->delete();

        return redirect('/admin/team');
    }
}

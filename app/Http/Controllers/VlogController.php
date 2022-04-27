<?php

namespace App\Http\Controllers;

use App\Models\Vlog;
use Illuminate\Http\Request;

class VlogController extends Controller
{
    
    public function index(){
        $vlogs = Vlog::all();

        return view('index', [
            'vlogs' => $vlogs
        ]);
    }

    public function show(Vlog $vlog){
        // dd($vlog);
        // $vlogId = Vlog::findOrFail($id)
        return view('show',[
            'vlog'=> $vlog
        ]);
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        Vlog::create([
            'title'=> $request->title,
            'detail'=> $request->detail
        ]);

        return redirect()->route('index');
    }


    public function edit(Vlog $vlog){
        return view('edit',[
            'vlog'=>$vlog
        ] );
    }
    public function update(Vlog $vlog , Request $request){
        $vlog->update([
            'title'=> $request->title,
            'detail'=> $request->detail

        ]);
        return redirect()->route('vlogs.show',$vlog);
    }
    
    public function destory(Vlog $vlog){
        $vlog->delete();

        return redirect()->route('index');
    }
}

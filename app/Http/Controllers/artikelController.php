<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\artikel;

class artikelController extends Controller
{
    //---------------------index-------------------------------------------
         public function index(){
        $items=artikel::get_all();
        //dd($items);
        return view('Pages.index',compact('items'));
    }
    //-------------------------create-----------------------
  public function create(){
        return view('Pages.form');
    }
//------------------------------show---------------------------------------------------
    public function show($id){
        $items = artikel::find_by_id($id);
     //dd($items);
        return view('Pages.show',compact('items'));
     }

     //---------------------------------------- delete----------------------------------
     public function delete($id){
        $items= artikel::delete($id);
		
        // alihkan halaman ke halaman pegawai
        return redirect('/artikel');
     }
     //--------------------------store------------------------------------
     public function store(Request $request){
        //dd($request->all());
        $data = $request->all();
        unset($data["_token"]);
         $items = artikel::save($data);
         //dd($items);
         if($items){
           return redirect('/artikel');
         }
       }
     //---------------------------edit----------------------------------------------
     public function edit($id){
        $items = artikel::ucok($id);
     //dd($items);
        return view('Pages.edit',compact('items'));

    }  
    //----------------------------- update ------------------------
    public function update($id,request $request){
        $items = artikel::update($id,$request->all());
       return redirect('/artikel');
    }
}
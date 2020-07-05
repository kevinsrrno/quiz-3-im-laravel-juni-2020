<?php

namespace App\models;
use Illuminate\Support\Facades\DB;

class artikel{
    public static function get_all(){
        $items = DB::table('artikel')->get();
        return $items;
    }
    public static function save($data){
        $new_item= DB::table('artikel')->insert($data);

        return $new_item;
    }
    public static function find_by_id($id){
        $items =DB::table('artikel')->where('id_artikel',$id)->get();
       // dd($items);
        return $items;
    }
    public  static function delete($id){
        $items=DB::table('artikel')->where('id_artikel',$id)->delete();
        return $items;
    }
    public static function ucok($id){
        $items =DB::table('artikel')->where('id_artikel',$id)->first();
        return $items;
    }
    public  static function update($id, $request){
        $items = DB::table('artikel')
        ->where('id_artikel',$id)
        ->update([
            'id_artikel'=> $request["id_artikel"],
            'judul'=> $request["judul"],
            'isi'=> $request["isi"],
            'slug'=> $request["slug"],
            'tag'=> $request["tag"],
            'id_user'=> $request["id_user"],
        ]);
        return $items;
    }
}





?>

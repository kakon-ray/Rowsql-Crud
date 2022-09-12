<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BasicCardController extends Controller
{
    function onSelect(){
       $jsonData= DB::select('select * from laravelcrud');
           $jsonString= json_encode($jsonData);
           $selectData=json_decode($jsonString);
           return view('select',['selectKey'=>$selectData]);    
    }

 
    function onInsert(Request $req){

        $name = $req->input('name');
        $roll = $req->input('roll');
        $class = $req->input('myclass');

        $result=DB::insert('INSERT INTO `laravelcrud`(`name`, `class`, `roll`) VALUES (?,?,?)',[$name,$roll,$class]);
        
        $succMsg = 'Data Successfylly Saved';
        $errMsg = 'Data Successfylly Saved';
        if($result == true){
           return "success";
        }
        else{
            return "error";
        }
        
    }
    function onUpdate(Request $req){
      $name = $req->input('name');
      $roll = $req->input('roll');
      $class = $req->input('myclass');
      $id = $req->input('id');
 
        $result = DB::update('UPDATE `laravelcrud` SET `name`=?,`class`=?,`roll`=? WHERE `id`=?',[$name,$class,$roll,$id]);

        if($result == true){
            return 'Success';

        }else{
            return 'Error';
        }
    }
    function onDelete(Request $req){
         $id = $req->input('id');
        $result = DB::delete('DELETE FROM `laravelcrud` WHERE `id`=?',[$id]);
        if($result == true){
            return 'sucess';
        }else{
            return 'False';
        }
    }
}

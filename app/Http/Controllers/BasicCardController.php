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
    function onInsert(){
        return view('insert');
    }
    function onUpdate(){
        return view('select');
    }
    function onDelete(){
        return view('delete');
    }
}

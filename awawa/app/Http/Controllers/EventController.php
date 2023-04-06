<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){

        $nome = "Fabio";
        $arr = [1,2,3,4,5];
    
        $passaros = ['calopsita', 'canario', 'jhonson'];
    
        return view('welcome',
            [
            'nome' => $nome,
            'arr'=> $arr,
            'passaros' => $passaros
            ]);

    }
    
    public function create()
    {
        return view('events.create');
    }
    
}
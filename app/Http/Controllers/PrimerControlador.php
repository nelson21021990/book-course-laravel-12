<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimerControlador extends Controller
{
    function index() {
        $posts = ['post1','post2'];
        //return view('contact',['posts'=>$posts]); 1 forma 
        //optimizada
        return view('contact', compact('posts'));
    }

    function otro($post=40, $otro=4808){
        echo $post;
        echo $otro;
    }
}


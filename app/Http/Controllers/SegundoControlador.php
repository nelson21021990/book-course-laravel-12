<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SegundoControlador extends Controller {
    function index() {
        return view('contact',['name'=>'Nelson']);
    }
}

?>
<?php

namespace App\Http\Controllers;

use App\Models\Writer;
use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

class WriterController extends Controller
{
    public function myproject(){
        return view('myproject', ['writers' => Writer::index()]);
    }
    public function show($id){
        return view('show', ['pagetitle' => 'Writer', 'maintitle' => 'The Writer', 'writer' => Writer::showWriter($id)]);
    }
}

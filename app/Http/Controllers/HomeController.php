<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index(){
   return view('homepage');
}
public function girisler(){
 return view('girisler');
}

public function postgirisler(Request $request) {
  $data['pdksz'] = pdksz::all()->where('type' , 'giris');
      return view('girisler', $data);
    }
}

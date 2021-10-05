<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kisiler;

class HomeController extends Controller
{
  public function index(){
   return view('homepage');
}
public function girisler(){
   $data['kisiler'] = Kisiler::where('tip' , 'giris')->get();
 return view('girisler' , $data );
}
public function cikislar(){
  $data['kisiler'] = Kisiler::where('tip' , 'cikis')->get();
 return view('cikislar', $data );
}

public function postg(Request $request)
{
      /*
      *  V E R İ T A B A N I  K A Y D I
      */
      $kayit = new Kisiler;
      $kayit->kimlik = $request->kimlik;
      $kayit->tip = "giris";
      $kayit->zaman = date("Y-m-d H:i:s");
      $kayit->save();
      //return redirect()->back();

     $data['kisiler'] = Kisiler::where('tip' , 'giris')->get();


    return view('girisler', $data);
    }


    public function postc(Request $request) {
    /*
    *  V E R İ T A B A N I  K A Y D I
    */
    $kayit = new Kisiler;
    $kayit->kimlik = $request->kimlik;
    $kayit->tip = "cikis";
    $kayit->zaman = date("Y-m-d H:i:s");
    $kayit->save();
    //return redirect()->back();

     $data['kisiler'] = Kisiler::where('tip' , 'cikis')->get();
          return view('cikislar', $data);
    }

}

<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\about;
use App\Models\doctor;
use App\Models\settings;
use App\Models\contact;
class homepage extends Controller
{

     public function __construct(){ //SİTE OFFLİNE 
     if(Settings::find(1)->active==0){
     return redirect()->to('aktif-degil')->send();
     }
    }

  

    public function index(){
        $settings = settings::find(1);
        $doctors = doctor::all();
        return view('front.home',compact('doctors','settings'));
    }

    public function about(){
         $hakkimizda = about::find(1);
         $settings = settings::find(1);
        return view('front.about',compact('hakkimizda','settings'));
    }

      public function contact()
      {
          $settings = settings::find(1);
        return view('front.contact',compact('settings'));
      }


      public function contactpost(Request $request)
      {
      
        $contact = new contact();
        $contact->name=$request->name;
        $contact->email=$request->email;
        $contact->message=$request->message;
        $contact->save();
        toastr()->success('Başarılı!', 'Mesajınız başarıyla gönderildi.');
        return redirect()->back();

      }
}

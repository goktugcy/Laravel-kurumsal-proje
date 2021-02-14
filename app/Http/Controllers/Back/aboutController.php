<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\about;
class aboutController extends Controller
{

     public function about()
     {

     $hakkimizda = about::find(1);
     return view('back.about',compact('hakkimizda'));
     }


    public function edit(Request $request)
    {
    $hakkimizda = about::find(1);
    $hakkimizda->title=$request->title;
    $hakkimizda->content=$request->content;
    $hakkimizda->save();
     toastr()->success('Başarılı!', 'Sayfa başarıyla güncellendi.');
    return view('back.about',compact('hakkimizda'));
    }

}

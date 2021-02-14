<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\doctor;
use Illuminate\Support\Str;
use File;
class doctorController extends Controller
{
    public function index() //HEKİMLERİ LİSTELEME
    {
        $doctors = doctor::all();
        return view('back.doctors.index',compact('doctors'));
    }

    public function create() //YENİ HEKİM OLUŞTURMA SAYFASINA YÖNLENDİRME
    {
         return view('back.doctors.create');
    }

    public function createdoctor(Request $request) //YENİ HEKİM OLUŞTURMA İŞLEMİ 
    {
        $request->validate([
        'image'=>'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);
         $doctors = new doctor;
         $doctors->name=$request->name;
         $doctors->bio=$request->bio;

        if($request->hasFile('image'))
        {
        $imageName=Str::slug($request->name).'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('uploads'),$imageName);
        $doctors->image='/uploads/'.$imageName;
        }
        $doctors->save();
        toastr()->success('Başarılı!', 'Bilgiler başarıyla güncellendi.');
        $doctors = doctor::all();
        return view('back.doctors.index',compact('doctors'));
        }

       public function edit($id) //GÜNCELLEME SAYFASINA İLGİLİ PROFİLİ YÖNLENDİRME
       {
       $doctors=doctor::findOrFail($id);
       return view('back.doctors.edit',compact('doctors'));
       }

     public function update(Request $request, $id) //GÜNCELLEME İŞLEMİ
     {
         $request->validate([
         'image'=>'image|mimes:jpeg,png,jpg|max:2048'
         ]);
     $doctors = doctor::findOrFail($id);
     $doctors->name=$request->name;
     $doctors->bio=$request->bio;
     if($request->hasFile('image'))
     {
     $imageName=Str::slug($request->name).'.'.$request->image->getClientOriginalExtension();
     $request->image->move(public_path('uploads'),$imageName);
     $doctors->image='/uploads/'.$imageName;
     }
     $doctors->save();
     toastr()->success('Başarılı!', 'Bilgiler başarıyla güncellendi.');
       $doctors = doctor::all();
     return view('back.doctors.index',compact('doctors'));
     }

      public function destroy($id) //SİLME İŞLEMİ 
      {
      $doctors= doctor::find($id);
      if(File::exists(public_path($doctors->image))){

      File::delete(public_path($doctors->image));
      }
      $doctors->ForceDelete();
      toastr()->warning('Hekim profili tamamen silindi.');
        $doctors = doctor::all();
        return view('back.doctors.index',compact('doctors'));
      }
}

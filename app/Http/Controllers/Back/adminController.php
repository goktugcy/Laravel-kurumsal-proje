<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Str;

class adminController extends Controller
{
      public function index()
      {
        $profile =Admin::orderBy('id','ASC')->get();
      return view('back.settings.profile',compact('profile'));
      }

      public function update(Request $request)
      {
        $profile = Admin::find(1);
        $profile->name=$request->name;
        $profile->email=$request->email;
        $profile->password = bcrypt($request->get('password'));

      if($request->hasFile('avatar'))
      {
        $avatar=Str::slug($request->title).'-avatar.'.$request->avatar->getClientOriginalExtension();
        $request->avatar->move(public_path('uploads'),$avatar);
        $profile->avatar='/uploads/'.$avatar;
      }
        $profile->save();
         toastr()->success('Ayarlar başarıyla güncellendi!');
        return redirect()->route('admin.settings.profile');
      }
}

<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

use App\Models\Contact;
use App\Models\doctor;
use App\Models\settings;
class Dashboard extends Controller
{
    public function index()
    {
        $contacts = contact::all();
        $doctors = doctor::all();
        $settings = settings::find(1);
        return view('back.home',compact('contacts','doctors','settings'));
    }

   
  
  
}

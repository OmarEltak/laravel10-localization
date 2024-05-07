<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocalizationController extends Controller
{
    public function setLanguage(Request $request){
       $locale=$request->locale;
        session()->put('locale', $locale);

       return redirect()->back();
    }

}

<?php

namespace App\Http\Controllers;
use App\ProfileMarket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class ProfilemarketController extends Controller
{
   public function index(){
       $profile = ProfileMarket::find(1);
      //  dd($profile);
        return view('admin.profilemarket.index',compact(['profile']));
   }

    public function edit(){
       $profile = ProfileMarket::find(1);
      //  dd($profile);
        return view('admin.profilemarket.edit',compact(['profile']));
   }

     public function update(Request $request){
      // dd($request);
       $profile = ProfileMarket::find(1);

      //   $logopath = $request->logo->store('profile','public');
      //   $faviconpath = $request->favicon->store('favicon','public');

        $profile->title=$request->title;
        $profile->diskripsi=$request->diskripsi;
        $profile->address=$request->address;
        $profile->zipcode=$request->zipcode;
        $profile->email=$request->email;
        $profile->telpon=$request->telpon;
        $profile->kota=$request->kota;


        $profile->social1=$request->social1;
        $profile->social2=$request->social2;
      
      if($request->hasFile('logo')){
      	$file = $request->file('logo');
        $filename = $file->getClientOriginalName();
        $file->storeAs('public/profile/',$filename);
      	
      }

      if($request->hasFile('favicon')){
      	$file = $request->file('favicon');
        $favicon = $file->getClientOriginalName();
        $file->storeAs('public/favicon/',$favicon);
      	
      }

        $profile->logo=$filename;
        $profile->favicon=$favicon;


      $profile->save();
        // DB:: table('products')->insert($product);
        return redirect()->route('admin.profile')->with('success','Profile berhasil diupdate!');
   }
}
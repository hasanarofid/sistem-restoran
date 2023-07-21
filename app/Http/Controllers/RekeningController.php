<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RekeningM;
class RekeningController extends Controller
{
    public function index(){
       $rekening = RekeningM::get();
        return view('admin.rekening.index',compact(['rekening']));
   }
  /** hapus data rekening */
   public function hapus($id){
          $rekening = RekeningM::find($id);
           $rekening->delete();
            return redirect()->route('admin.rekening')->with('success','Profile berhasil dihapus!');
   }

   /** disabled data rekening */
   public function disable($id){
          $rekening = RekeningM::find($id);
          if($rekening->status == null || $rekening->status == 'aktif'){
            $rekening->status = 'tidak aktif';
            $keterangan = 'dinonaktifkan';
          }else{
            $rekening->status = 'aktif';
            $keterangan = 'diaktifkan';
          }
           $rekening->save();
            return redirect()->route('admin.rekening')->with('success','Profile berhasil '.$keterangan);
   }

   /** show data edit */
   public function edit($id){
          $rekening = RekeningM::find($id);
         return view('admin.rekening.edit',compact(['rekening']));
   }

     /** show data tambah */
   public function tambah(){
         return view('admin.rekening.tambah');
   }

   /** update data rekening */
    public function update(Request $request){
      // dd($request);
       $rekening = RekeningM::find($request->id);
        $rekening->atas_nama=$request->atas_nama;
        $rekening->no_rekening=$request->no_rekening;
        $rekening->bank=$request->bank;


      $rekening->save();
        // DB:: table('products')->insert($product);
        return redirect()->route('admin.rekening')->with('success','Profile berhasil diupdate!');
   }

    /** save data rekening */
    public function save(Request $request){
      // dd($request);
       $rekening = new RekeningM();
        $rekening->atas_nama=$request->atas_nama;
        $rekening->no_rekening=$request->no_rekening;
        $rekening->bank=$request->bank;
        $rekening->status='aktif';


      $rekening->save();
        // DB:: table('products')->insert($product);
        return redirect()->route('admin.rekening')->with('success','Profile berhasil ditambah!');
   }
}

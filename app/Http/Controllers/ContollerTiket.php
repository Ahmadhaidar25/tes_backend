<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tiket;
use Auth;

class ContollerTiket extends Controller
{
    public function beli()
    {
        $read = tiket::all();
        return view('pesan.tiket',compact('read'));
    }

    public function beli_tiket(Request $request)
    {
        //dd($request->all());

      

       $pesan = new tiket;
       $pesan->user_id = Auth::user()->id;
       $pesan->jenis_tiket = $request->jenis_tiket;
       $pesan->tanggal = $request->tanggal;
       $pesan->harga = $request->harga;
       $pesan->qty = $request->qty;
       $pesan->total = $request->total;

       $pesan->save();
       alert()->success('Pembelian','Berhasil');
       return back();

   }


   public function cetak($id)
   {
       $cetak=tiket::find($id);
       return view('cetak.tiket', compact('cetak'));
   }


   public function semua_pesanan()
   {
       $get=tiket::all();
       return view('pesan.semua',compact('get'));
   }

    public function edit($id)
   {
       $get=tiket::find($id);
       return view('pesan.semua', compact('get'));
   }

    public function hapus($id)
   {
       $hapus=tiket::find($id);
       $hapus->delete();
      return back();
   }
}

@extends('layout.main')
@section('content')

<div class="bg-secondary rounded h-100 p-4">
    <h6 class="mb-4">Detail Pembelian</h6>
    <div class="table-responsive p-3">
        <table class="table table-dark">
            <thead>
                <tr>

                   <th scope="col">Nama</th>
                   <th scope="col">Jenis Tiket</th>
                   <th scope="col">Tanggal</th>
                   <th scope="col">Harga</th>
                   <th scope="col">Qty</th>
                   <th scope="col">Total</th>
                   <th scope="col">Aksi</th>

               </tr>
           </thead>
           <tbody>
            @foreach($get as $x)

            <tr>

              <td>{{$x->user->nama_lengkap}}</td>
              <td>{{$x->jenis_tiket}}</td>
              <td>{{$x->tanggal}}</td>
              <td>{{$x->harga}}</td>
              <td>{{$x->qty}}</td>
              <td>{{$x->total}}</td>
              <td>
                  <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                     
                      <a href="{{url('/edit')}}/{{$x->id}}"  class="btn btn-warning" >Edit</a>
                      <a href="{{url('/hapus')}}/{{$x->id}}" class="btn btn-danger btn1">Hapus</a>

                  </div>
              </td>

          </tr>

          @endforeach

      </tbody>
  </table>
</div>
</div>

@endsection
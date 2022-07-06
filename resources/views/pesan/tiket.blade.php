 @extends('layout.main')
 @section('content')
 <div class="row">
     <div class="col-sm-12 col-xl-6">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">Pesan Tiket</h6>
            <form action="{{url('/beli/tiket')}}" method="post">
                @csrf
                <div class="form-floating mb-3">
                    <select class="form-select" onchange="price()" id="kursi" name="jenis_tiket">
                        <option selected value="">--Pilih Tiket--</option>
                        <option value="2000000">VVIP</option>
                        <option value="1000000">VIP</option>
                        <option value="500000">REGULER</option>
                    </select>

                </div>

                <div class="form-floating mb-3">
                    <input type="date" class="form-control" name="tanggal">
                    <label for="floatingInput">Tanggal</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="harga"
                    placeholder="name@example.com" readonly name="harga">
                    <label for="floatingInput">Harga</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="qty" name="qty">
                    <label for="floatingPassword">Qty</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="total" readonly name="total">
                    <label for="floatingPassword">Total</label>
                </div>

                <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Beli</button>
            </form>

        </div>
    </div>

    <div class="col-sm-12 col-xl-6">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">Detail Pembelian</h6>
            <div class="table-responsive p-3">
                <table class="table table-dark">
                    <thead>
                        <tr>
                           <th scope="col">Aksi</th>
                           <th scope="col">Nama</th>
                           <th scope="col">Jenis Tiket</th>
                           <th scope="col">Tanggal</th>
                           <th scope="col">Harga</th>
                           <th scope="col">Qty</th>
                           <th scope="col">Total</th>

                       </tr>
                   </thead>
                   <tbody>
                    @foreach($read as $x)
                    @if ($x->user->id == Auth::user()->id)
                    <tr>
                      <td><a href="{{url('/cetak')}}/{{$x->id}}" class="btn btn-primary">Cetak</a></td>
                      <td>{{$x->user->nama_lengkap}}</td>
                      <td>{{$x->jenis_tiket}}</td>
                      <td>{{$x->tanggal}}</td>
                      <td>{{$x->harga}}</td>
                      <td>{{$x->qty}}</td>
                      <td>{{$x->total}}</td>

                  </tr>
                  @endif

                  @endforeach

              </tbody>
          </table>
      </div>
  </div>
</div>


</div>

@endsection
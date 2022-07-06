 @extends('layout.main')
 @section('content')

 <div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded-top p-4">
        <div class="row">
            <div class="col-12 col-sm-6 text-center text-sm-start">
             <h3>Haii !!&nbsp;{{auth()->user()->nama_lengkap}}</h3> 
            </div>

        </div>
    </div>
</div>
@endsection
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tiket</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{url('template/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{url('template/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{url('template/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{url('template/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <!--<img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">-->
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">{{auth()->user()->nama_lengkap}}</h6>
                        <span>{{auth()->user()->email}}</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{url('home')}}" class="nav-item nav-link active"><i class="fa fa-home me-2"></i>Home</a>
                    @if(auth()->user()->rule==2)
                    <a href="{{url('beli')}}" class="nav-item nav-link"><i class="bi bi-ticket"></i>&nbsp;Pesan Tiket</a>
                    @endif
                    @if(auth()->user()->rule==1)
                    <a href="{{url('semua_pesanan')}}" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Semua Pesanan</a>
                    @endif
                   
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>

                <div class="navbar-nav align-items-center ms-auto">


                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">

                            <span class="d-none d-lg-inline-flex">{{auth()->user()->nama_lengkap}}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="{{url('logout')}}" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
             @yield('content')
         </div>


         <!-- Footer Start -->

         <!-- Footer End -->
     </div>
     <!-- Content End -->


     <!-- Back to Top -->
     <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
 </div>

 <!-- JavaScript Libraries -->
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
 <script src="{{url('template/lib/chart/chart.min.js')}}"></script>
 <script src="{{url('template/lib/easing/easing.min.js')}}"></script>
 <script src="{{url('template/lib/waypoints/waypoints.min.js')}}"></script>
 <script src="{{url('template/lib/owlcarousel/owl.carousel.min.js')}}"></script>
 <script src="{{url('template/lib/tempusdominus/js/moment.min.js')}}"></script>
 <script src="{{url('template/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
 <script src="{{url('template/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

 <!-- Template Javascript -->
 <script src="{{url('template/js/main.js')}}"></script>

 <script type="text/javascript">
     function price() {
        var tes = document.getElementById("kursi").value;
        document.getElementById("harga").value=tes;
    }


    $(document).ready(function() {
        $("#qty, #harga").keyup(function() {
            var harga  = $("#harga").val();
            var jumlah = $("#qty").val();

            var total = parseInt(harga) * parseInt(jumlah);
            $("#total").val(total);
        });
    });


    $(".btn1").click(function(e){
     e.preventDefault();
     var hapus = $(this).attr('href');
     Swal.fire({
      title: 'Yakin ?',
      text: "Kamu Akan Keluar",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#00cc00',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location = hapus;
      }
    })
  })
</script>
</body>
@include('sweetalert::alert')
</html>
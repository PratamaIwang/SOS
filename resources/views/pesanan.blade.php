<!DOCTYPE html>
<head>
    <title>Menu</title>
     <!--Stylesheets-->
     <link rel="stylesheet" href="{{asset('css/ahmed.css')}}" type="text/css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<header id="menu">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding-left: 1%">
        <a class="navbar-brand" href="/">SOS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarNav" style="text-align: right;">
                <ul class="nav navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="{{route('viewDashboard')}}">Menu</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('viewCart')}}">Keranjang</a></li>
                    <li class="nav-item active"><a class="nav-link" href="{{route('viewAddMenu')}}">Tambah Menu</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('viewPesanan')}}">Daftar Pesanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('viewLogin')}}">Log In</a></li>
                </ul>
            </div>

    </nav>
</header>
@csrf
<br>
    <div id="content" class="container">
        <div class="row align-items-start">
            @foreach ($order as $orders)
            
            <div class="col col-lg-12 col-sm-12 menubox" id="menu-box">
                <h3 class="col col-lg-8 col-sm-8 tebal" style="text-align: left">{{$orders->id_pesanan}}</h3>
                <h3 class="col col-lg-4 col-sm-4 "style="text-align: left">Rp. {{$orders->total_harga}}</h3>
                <form action="{{route('listOrder')}}" style="content-align:right;" class="col col-lg-12 col-sm-12">
                    <button class="btn btn-primary col col-lg-2" id="idPesanan" name="idPesanan"value="{{$orders->id_pesanan}}" >Lihat Pesanan</button>
                </form>
            </div>

            @endforeach
            
    </div></div>
        

    <footer>

    </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 

</body>
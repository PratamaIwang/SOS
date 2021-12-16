@csrf
<!DOCTYPE html>
<head>
    <title>Keranjang</title>
     <!--Stylesheets-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

     <link rel="stylesheet" href="{{asset('css/ahmed.css')}}" type="text/css">


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
            <li class="nav-item"><a class="nav-link" href="menu">Menu</a></li>
            <li class="nav-item"><a class="nav-link" href="keranjang">Keranjang</a></li>
            <li class="nav-item active"><a class="nav-link" href="addmenu">Tambah Menu</a></li>
            <li class="nav-item"><a class="nav-link" href="pesanan">Daftar Pesanan</a></li>
            <li class="nav-item"><a class="nav-link" href="login">Log In</a></li>
            <li class="nav-item"><a class="nav-link" href="logout">Log Out</a></li>
        </ul>
            
        </div>
    </nav>
    </header>


    <div id="content" class="container">
        <div class="row align-items-start">
            @foreach ($cart as $carts)
            
            <div class="col col-lg-3 col-sm-12 menubox" id="menu-box">
                <img src="{{asset('images/'.$carts->foto_menu)}}" class="img-fluid">
                <p>{{$carts->nama_menu}}</p>
                <p>Rp. {{$carts->harga}}</p>

                <form action="{{route('rmvOrder')}}" method="post">
                    <button onclick="return confirm('Anda yakin ingin menghapus {{$carts->nama_menu}}?')" class="btn btn-danger" name="hapusCart" id="hapusCart" value="{{$carts->id_menu}}" type="submit">Batalkan Pesanan</button>
                </form>
            </div>
            
            @endforeach
            
    </div></div>
    <br><br>
    <div>
        <form class="col-lg-12 col-sm-12" style="text-align:center;" action="{{route('krjg')}}" method="POST">
            <button class="btn btn-success btn-lg btn-pesan">Pesan Sekarang :)</button>
        </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
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
                    <li class="nav-item"><a class="nav-link" href="menu">Menu</a></li>
                    <li class="nav-item"><a class="nav-link" href="keranjang">Keranjang</a></li>
                    <li class="nav-item active"><a class="nav-link" href="addmenu">Tambah Menu</a></li>
                    <li class="nav-item"><a class="nav-link" href="pesanan">Daftar Pesanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="login">Log In</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout">Log Out</a></li>
                </ul>
            </div>

    </nav>
</header><br>
@csrf

    <div id="content" class="container">
        <div class="row align-items-start">
            @foreach ($menu as $menus)
            
            <div class="col col-lg-3 col-sm-12 menubox" id="menu-box">
                <img src="{{asset('images/'.$menus->foto_menu)}}" class="img-fluid">
                <br><br>
                <p class="tebal">{{$menus->nama_menu}}</p>
                <p>Rp. {{$menus->harga}}</p>
                <br>
                <form action="{{route('addcart')}}" method="post">
                    <button class="btn btn-success" name="beli" id="beli" value="{{$menus->id_menu}}" type="submit">Masukkan ke Keranjang</button>
                </form><br>

                <form action="{{route('hapus')}}" method="post">
                    <button onclick="return confirm('Anda yakin ingin menghapus {{$menus->nama_menu}}?')" class="btn btn-danger" name="hapusMenu" id="hapusMenu" value="{{$menus->id_menu}}" type="submit">Hapus Menu</button>
                </form>
            </div>

            @endforeach
            
    </div></div>
        

    <footer>

    </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 

</body>
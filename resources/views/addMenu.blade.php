<!DOCTYPE html>
<head>
    <title>Tambah Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/ahmed.css')}}"
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
            <li class="nav-item"><a class="nav-link" href="peesanan">Daftar Pesanan</a></li>
            <li class="nav-item"><a class="nav-link" href="login">Log In</a></li>
            <li class="nav-item"><a class="nav-link" href="logout">Log Out</a></li>
            
        </ul>
            
        </div>
    </nav>
    </header>
    
    <section class="content">
        <h1>Tambah Menu </h1>
        <form action="{{ route('tambahMenu')}}" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nama-menu" required>Nama Makanan</label>
                <input required type="text" class="form-control" id="nama_menu" name="nama_menu" aria-describedby="emailHelp" placeholder="isi nama makanan">
            </div>
            <div class="form-group">
                <label for="harga" required>Harga Makanan</label>
                <input  required type="text" class="form-control" id="harga" name="harga" placeholder="harga makanan">
            </div>
            <div class="form-group">
                <label for="deskripsi_menu" required>Deskripsi Makanan</label>
                <textarea required class="form-control" name="deskripsi_menu"id="deskripsi_menu" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="kategori">Kategori</label>
                <select class="form-control" name="kategori" id="kategori">
                    <option value="makanan">makanan</option>
                    <option value="minuman">minuman</option>
                    <option value="lainnya">lainnya</option>
                </select>
            </div>
            <br>
            <div class="form-group" required>
                <label for="image">Masukin Foto Makanan</label>
                <input type="file" class="form-control-file" name="image" id="image">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </section>

    <footer>

    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
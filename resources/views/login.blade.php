<!DOCTYPE html>
<html lang="en">
    <head>
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
    </header>
    
        <!-- Navigation-->
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="{{asset('/img/food_login.png')}}" class="img-fluid"
                alt="Sample image">
            </div>
            <div class="login-container col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form action="{{route('login')}}" method="POST">
                <h1>Login Dulu Ya</h1>
                <br>
                <!-- Email input -->
                <div class="form-outline mb-4" required>
                    <label class="form-label" for="email" required>Meja no berapa?</label>
                    <input type="text" id="email" required class="form-control form-control-lg" placeholder="Masukin No Meja Kamu" />
                </div>

                <!-- Password input -->
                <div class="form-outline mb-3" required>
                    <label class="form-label" for="password" required>Password</label>
                    <input type="password" required id="password" class="form-control form-control-lg" placeholder="Isi Juga Passwordnya disini" />
                </div>

                <div class="text-center text-lg-start mt-4 pt-2">
                    <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                </div>

                </form>
            </div>
            </div>
        </div>
       

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
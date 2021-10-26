<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Sistem Transaksi</title>
  </head>
  <body>
    <!--navbar-->
    <nav class="navbar navbar-light fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#" style="color:white;">Kansa</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Kasir Kansa</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Akun
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                        <li><a class="dropdown-item" href="#">Pengaturan Akun</a></li>
                        <li><a class="dropdown-item" href="#">Keluar</a></li>
                        </ul>
                    </li>
                    </ul>
                </div>
                </div>
            </div>
        </nav>
    <!--akhir navbar-->

    <!--dropdown-->
    <div class="dropdown" style="width: 50rem;
        position: absolute;
        left: 50%;
        top: 23%;
        transform: translate(-50%, -50%);">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false" >
            Weekend
        </button>
        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
            <li><a class="dropdown-item" href="/transaksi">Weekday</a></li>
        </ul>
    </div>

    <div class="card" >
        <div class="card-body">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Masukkan Jumlah Tiket</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Weekend</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label" style="font-weight:bold;">Total</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <!--<p class="card-text" style="font-weight:bold;">Total</p>-->
        </div>
        <div class="card-footer">
            <a href="#" class="nav-link" style="color:white;text-align:center;"><strong>Proses</strong></a>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<!-- CSS -->
<style type="text/css">
    .navbar-light{
        background: #46BA98;
    }
    .navbar-brand{
        padding-left:40px;
        font-size: 24px;
        font-weight: 600;
    }
    .navbar-toggler{
        margin-right:70px;
    }
    .card{
        width: 50rem;
        position: absolute;
        left: 50%;
        top: 57%;
        transform: translate(-50%, -50%);
        box-shadow: 1px 1px grey;
    }
    .card-footer{
        background:#46BA98;
    }
</style>
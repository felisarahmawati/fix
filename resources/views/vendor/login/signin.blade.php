<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Lengkapi Data Diri</title>
    <link rel="stylesheet" href="style/loginview.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div class="container mt-3 mb-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
              <div class="card" style="background-color: #fff;">
                <div class="card-body">
                <form action="/signup/index" method="POST" enctype="multipart/form-data">
                  @csrf
                    <div class="text-center">
                        <img src="../assets/img/titip.png" alt="centangHijau" width="15%" height="15%" style="padding-top:10px">
                        <p class="card-text text-success" style="font-size: 15px"><b>Titipsini.com</b></p>
                        <p class="card-text text-success" style="font-size: 25px"><b>WELCOME VENDOR<b></p>
                        <h5 class="card-text text-secondary" style="font-size: 15px; padding-top:15px">Selamat datang di Titipsini.com,silahkan masukan akun yang telah terdaftar di Titipsini.com</h5>
                    </div>
                      <label for="nama" class="form-label">Username</label>
                      <input type="text" class="form-control" id="" name="username">
                      <label for="nama" class="form-label">Password</label>
                      <input type="text" class="form-control" id="" name="password">
                  <br>
                    <div class="d-grid gap-2">
                        <button class="btn btn-success" type="button"  href="/homebaru"><b>Daftar</b></button>
                    </div>
                </form>
              </div>
            </div>
            </div>
        </div>
    </div>
</body>
</html>
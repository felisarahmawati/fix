<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Login Vendor</title>
    <link rel="stylesheet" href="../../style/loginvendor.css">
</head>

<body>
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
    </div>
    @endif

    @if(session()->has('loginErorr'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{session('loginErorr')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
    </div>
    @endif


    <div class="center">
        <h1>Login Vendor</h1>
        <form action="{{ route('postLogin') }}" method="post">
            {{ csrf_field() }}
            <div class="txt_field" >
                <input type="text" name="vendor" id="vendor"
            required>

                <label for="vendor">Nama Vendor</label>
            </div>
            <div class="txt_field" >
                <input type="text" name="username" id="username"
            required>

                <label for="username">Username</label>
            </div>
            <div class="txt_field" >
                <input type="text" name="email" id="email"
            required>

                <label for="email">Email</label>
            </div>
            <div class="txt_field">
                <input type="password" required id="password" name="password">

                <label for="password">Password</label>
            </div>
            <!-- <a href="admin">
                <div class="pass">Forgot Password?</div>
            </a> -->

            <input type="submit" value="Next">

            <div class="signup_link">
                Sudah punya akun ? <a href="/login/datadiri">Login disini</a>
            </div>
        </form>
    </div>

</body>

</html>
@extends("landing.app")

@section("css")

<link rel="stylesheet" href="{{ url('/dist') }}/assets/css/bootstrap.css">
<link rel="stylesheet" href="{{ url('/dist') }}/assets/css/components.css">
<link rel="stylesheet" href="{{ url('/dist') }}/assets/css/components.css">
<link rel="stylesheet" href="{{ url('/dist') }}/assets/icons/fontawesome/styles.min.css">

@endsection

@section("content")

<div class="content h-100">
    <div class="row h-100">
        <div class="col-lg-12">
            <div class="register card auth-box mx-auto my-auto">
                <div class="card-block">
                    @if (session('gagal'))
                    <div class="alert alert-danger">
                        {{ session('gagal')}}
                    </div>
                    @endif
                    <h6 class="fw-bold text-start">LOG IN TO YOUR ACCOUNT</h6><hr>
                    <form action="{{ url('/login') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="user-details">
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="formGroupExampleInput" placeholder="Type your email address">
                            </div>
                            <div class="mb-2">
                                <label for="formGroupExampleInput2" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="formGroupExampleInput2" placeholder="************">
                            </div>
                        </div>
                        <div class="user-links mb-3">
                            <a href="#" class="pull-left">Forgot Password?</a>
                            <a href="{{url('/register')}}" class="pull-right">Create An Account</a>
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button class="btn btn-primary" type="submit">LOGIN</button>
                        </div>
                    </form>
                    {{--
                        <div class="user-links">
                            <a href="#" class="pull-left">Forgot Password?</a>
                            <a href="{{url('/register')}}" class="pull-right">Register</a>
                        </div> --}}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

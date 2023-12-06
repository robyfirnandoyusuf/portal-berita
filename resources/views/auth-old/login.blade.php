<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    {{-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"> --}}
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css"> --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="/backsite-assets/css/css-login.css">
    <title>Login</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <form class="box" action="{{ route('login') }}" method="POST">
                        @csrf
                        <h1>Login</h1>
                        <p class="text-muted"> Please enter your login and password!</p> <input type="text"
                            name="email" id="email" placeholder="xxxx@gmail.com"
                            class="@error('email') Is-Invalid @enderror" autofocus required value="{{ old('email') }}">
                        @error('email')
                            <p class="btn btn-danger">{{ $message }}</p>
                        @enderror
                        <input type="password" name="password" placeholder="Password" id="email" autofocus required>
                        <a class="forgot text-muted" href="#">Forgot password?</a>
                        <button type="submit" class="bg-primary">
                            <i class="fas fa-sign-in-alt" aria-hidden="true"></i> Login
                        </button>
                        <div class="col-md-12">
                            <ul class="social-network social-circle">
                                <li><a href="#" class="icoFacebook" title="Facebook"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" class="icoTwitter" title="Twitter"><i
                                            class="fab fa-twitter"></i></a></li>
                                <li><a href="{{ route('backsite.auth.google') }}" class="icoGoogle" title="Google +"><i
                                            class="fab fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">< script >
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" > < script >
    </body>
</html>




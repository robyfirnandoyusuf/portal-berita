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
    <title>Register</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <form class="box" action="{{ route('register') }}" method="post">
                        @csrf
                        <h1>Register</h1>
                        <p class="text-muted">Get started with your new account</p>
                        <input type="text" name="name" placeholder="Your name" id="name" autofocus required>
                        <input type="text" name="username" placeholder="Your username" id="username" autofocus required>
                        {{-- <input type="text" name="email" id="email" placeholder="xxxx@gmail.com"
                            class="@error('email') Is-Invalid @enderror" autofocus required value="{{ old('email') }}"> --}}
                            <input name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email address" type="email">
                        @error('email')
                            <p class="btn btn-danger">{{ $message }}</p>
                        @enderror
                        <input type="password" name="password" placeholder="Password" id="password" autofocus required>
                        <p class="text-center forgot text-muted">Make account with your love</p>
                        <input type="submit">
                        <p class="text-center forgot text-muted">Have already an account? <a href="{{ route('login') }}">Log In</a></p>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">

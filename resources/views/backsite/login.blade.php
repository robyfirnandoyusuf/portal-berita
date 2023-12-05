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
                    <form class="box" action="{{ route('backsite.login.authenticate') }}" method="POST">
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
                        <input type="submit" name="login" value="Masuk">
                        <a class="forgot text-muted" href="{{ route('backsite.register') }}">Don't have account yet?</a>
                    </form>
                </div>
            </div>
        </div>
    </div>


    {{-- <form action="{{ route('backsite.login.authenticate') }}" method="POST">
      @csrf
        <!-- Email input -->
        <div class="form-outline mb-4">
            <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror"
                autofocus required value="{{ old('email') }}" />
            <label class="form-label" for="form2Example1">Email address</label>
        </div>
        @error('email')
         <div class="invalid-feedback">
            {{ $message }}
         </div>
        @enderror
        <!-- Password input -->
        <div class="form-outline mb-4">
            <input type="password" id="password" name="password" class="form-control" autofocus required />
            <label class="form-label" for="form2Example2">Password</label>
        </div>

        <!-- 2 column grid layout for inline styling -->

        <div class="col">
            <!-- Simple link -->
            <a href="#!">Forgot password?</a>
        </div>
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">login</button>

        <!-- Register buttons -->
        {{-- <div class="text-center">
      <p>Not a member? <a href="#!">Register</a></p>
      <p>or sign up with:</p>
      <button type="button" class="btn btn-link btn-floating mx-1">
        <i class="fab fa-facebook-f"></i>
      </button>

      <button type="button" class="btn btn-link btn-floating mx-1">
        <i class="fab fa-google"></i>
      </button>

      <button type="button" class="btn btn-link btn-floating mx-1">
        <i class="fab fa-twitter"></i>
      </button>

      <button type="button" class="btn btn-link btn-floating mx-1">
        <i class="fab fa-github"></i>
      </button>
    </div>
    </form> --}}
    {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
        < script >
            <
            script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" > < script >

            <
            /body>

            <
            /html>

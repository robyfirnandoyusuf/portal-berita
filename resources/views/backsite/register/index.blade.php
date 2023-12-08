<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<link rel="stylesheet" href="/backsite-assets/css/css-register.css">

<div class="card bg-light">
    <article class="card-body mx-auto" style="max-width: 400px;">
        <h4 class="card-title mt-3 text-center">Register Account</h4>
        <p class="text-center">Get started with your free account</p>
        <p>
            <a href="" class="btn btn-info btn-block btn-google"> <i class="fab fa-google"></i>      Register via google</a>
        </p>
        <p class="divider-text">
            <span class="bg-light">OR</span>
        </p>
        <form action="{{ route('backsite.register.index') }}" method="post">
            @csrf
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                </div>
                <input name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name" type="text">
                @error('name')
                <div class="invalid-feedback" required value="{{ old('name') }}">
                    {{ $messege }}
                  </div>
                  @enderror
            </div> <!-- form-group// -->

            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                </div>
                <input name="username" id="username" class="form-control @error('username') is-invalid @enderror" placeholder="Username" type="text">
                @error('username')
                <div class="invalid-feedback" required  value="{{ old('username') }}">
                    {{ $messege }}
                  </div>
                  @enderror
            </div> <!-- form-group// -->

            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                </div>
                <input name="email" id="email" class="form-control @error('username') is-invalid @enderror" placeholder="Email address" type="email">
                @error('email')
                <div class="invalid-feedback" required  value="{{ old('email') }}">
                    {{ $messege }}
                  </div>
                  @enderror
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                </div>
                <input class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" type="password">

                @error('password')
                <div class="invalid-feedback" required  value="{{ old('password') }}">
                    {{ $messege }}
                  </div>
                  @enderror
            </div> <!-- form-group// -->

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block"> Create Account </button>
            </div> <!-- form-group// -->
            <p class="text-center">Have an account? <a href="{{ route('backsite.login') }}">Log In</a> </p>
        </form>
    </article>
</div> <!-- card.// -->

</div>
<!--container end.//-->


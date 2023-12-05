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
            <a href="" class="btn btn-info btn-block btn-google"> <i class="fab fa-google"></i>   Login via google</a>
        </p>
        <p class="divider-text">
            <span class="bg-light">OR</span>
        </p>
        <form>
            @csrf
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                </div>
                <input name="name" id="name" class="form-control" placeholder="Name" type="text">
            </div> <!-- form-group// -->

            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                </div>
                <input name="username" id="username" class="form-control" placeholder="Username" type="text">
            </div> <!-- form-group// -->

            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                </div>
                <input name="email" id="email" class="form-control" placeholder="Email address" type="email">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                </div>
                <input class="form-control" name="password" id="password" placeholder="Password" type="password">
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

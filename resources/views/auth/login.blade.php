<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="StyleLogin/fonts/icomoon/style.css">

    <link rel="stylesheet" href="StyleLogin/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="StyleLogin/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="StyleLogin/css/style.css">

    <title>Login</title>
  </head>
  <body>


  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('StyleLogin/images/inade  Site image.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <img style="align-itens:center;" width="100" height="100" src="StyleLogin/images/Imagem1.png" alt="">
            <form method="POST" action="{{ route('login') }}">
                @csrf
              <div class="form-group first">
                <label for="email">Email</label>
                <input type="email"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="form-group last mb-3">
                <label for="password">Palavra-passe</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>


              <input type="submit" value="Entrar" class="btn btn-block btn-primary">

            </form>
          </div>
        </div>
      </div>
    </div>


  </div>



    <script src="StyleLogin/js/jquery-3.3.1.min.js"></script>
    <script src="StyleLogin/js/popper.min.js"></script>
    <script src="StyleLogin/js/bootstrap.min.js"></script>
    <script src="StyleLogin/js/main.js"></script>
  </body>
</html>

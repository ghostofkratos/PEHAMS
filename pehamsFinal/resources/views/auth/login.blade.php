<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>PEHAMS — Login</title>

    <!-- Styles -->
    <link href="{{ asset('css/page.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{ asset('img/apple-touch-icon.png') }}">
    <link rel="icon" href="{{ asset('img/apple-touch-icon.png') }}">
  </head>

  <body class="layout-centered bg-img" style="background-image: url({{ asset('img/loginbg.jpg') }});">


    <!-- Main Content -->
    <main class="main-content">

      <div class="bg-white rounded shadow-7 w-400 mw-100 p-6">
        <h5 class="mb-7">Sign into your account</h5>

        <form method="POST" action="{{ route('login') }}">
            @csrf
          <div class="form-group">
            <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email"
             placeholder="example@something.com" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>

          <div class="form-group">
            <input type="password" id="password" class="form-control @error('password') is-invalid @enderror"
             name="password" placeholder="Password" required autocomplete="current-password">
          </div>

          <div class="form-group flexbox py-3">
            <div class="custom-control custom-checkbox">
              <input class="custom-control-input" 
              type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} checked>
              <label class="custom-control-label">Remember me</label>
            </div>

            <a class="text-muted small-2" href="user-recover.html">Forgot password?</a>
          </div>

          <div class="form-group">
            <button class="btn btn-block btn-primary" type="submit">Login</button>
            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
          </div>
        </form>

        <hr class="w-30">

        <p class="text-center text-muted small-2">Don't have an account? <a href="user-register.html">Register here</a></p>
      </div>

    </main><!-- /.main-content -->


    <!-- Scripts -->
    <script src="{{ asset('js/page.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>

  </body>
</html>

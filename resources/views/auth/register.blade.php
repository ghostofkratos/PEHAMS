<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>PEHAMS — Register</title>

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
        <h5 class="mb-7">Create an account</h5>

        <form method="POST" name="register" action="{{ route('register') }}">
            @csrf
            <label class="radio-inline" aria-selected="false" style="margin-right: 15px">
            <input type="radio" value="owner" name="role"
                id="role" onclick="student()">
                Hostel Owner
            </label>
        <label class="radio-inline mb-5">
            <input type="radio" value="student"
                name="role" id="role" aria-selected="false" onclick="student()">
                Student</label>
          <div class="form-group">
            <input type="text" class="form-control @error('name') is-invalid @enderror"
            value="{{ old('name') }}" required autocomplete="name" name="name" placeholder="Your Name">

            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
             @enderror
          </div>

          <div class="form-group">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
            value="{{ old('email') }}" required autocomplete="email" name="email" placeholder="Email Address" disabled>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>

          <div class="form-group">
            <input type="tel" class="form-control @error('phone') is-invalid @enderror" id="phone"
             name="phone" value="{{ old('phone') }}" pattern="[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]"
             placeholder="Phone Number" required autocomplete="phone" disabled>
          </div>

          <div class="form-group">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
             name="password" required autocomplete="new-password" placeholder="Password">
             @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>

          <div class="form-group">
            <input type="password" id="password-confirm" class="form-control" name="password_confirmation"
            required autocomplete="new-password" placeholder="Password (confirm)">
          </div>


          <div class="form-group">
            <button class="btn btn-block btn-primary" type="submit">Register</button>
          </div>
        </form>

        <hr class="w-30">

        <p class="text-center text-muted small-2">Already a member? <a href="user-login.html">Login here</a></p>
      </div>

    </main><!-- /.main-content -->


    <!-- Scripts -->
    <script src="{{ asset('js/page.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script>
        function student(){
            document.getElementById('email').disabled = false;
            document.getElementById('phone').disabled = false;
        }
    </script>

  </body>
</html>

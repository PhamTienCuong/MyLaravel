<!DOCTYPE html>
<html lang="en">

<head>
  @include('layout.head')
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
      <form class="" method="POST" action="{{ route('login') }}">
          {{ csrf_field() }}
          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email">E-Mail address</label>
            <input class="form-control" id="email" type="email" name="email" value="{{ old('email') }}" required autofocus aria-describedby="emailHelp" placeholder="Enter email">
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password">Password</label>
            <input class="form-control" id="password" type="password" placeholder="Password" name="password" required>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Password</label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="{{ route('register') }}">Register an Account</a>
          <a class="d-block small" href="{{ route('password.request') }}">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('jquery/jquery.min.js')}}"></script>
  <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- Core plugin JavaScript-->
  <script src="{{asset('jquery-easing/jquery.easing.min.js')}}"></script>
</body>

</html>

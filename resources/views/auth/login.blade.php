<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Login - Laundry Sepatu</title>
    <!-- CSS files -->
    <link href="{{ asset('../assets/css/tabler.min.css?1692870487') }}" rel="stylesheet"/>
    <link href="{{ asset('../assets/dist/css/tabler-flags.min.css?1692870487') }}" rel="stylesheet"/>
    <link href="{{ asset('../assets/dist/css/tabler-payments.min.css?1692870487') }}" rel="stylesheet"/>
    <link href="{{ asset('../assets/css/tabler-vendors.min.css?1692870487') }}" rel="stylesheet"/>
    <style>
      @import url('https://rsms.me/inter/inter.css');
      :root {
        --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }
      body {
        font-feature-settings: "cv03", "cv04", "cv11";
      }
    </style>
  </head>
  <body class="d-flex flex-column">
    <div class="page page-center">
      <div class="container container-tight py-4">
        <div class="text-center mb-4">
          <a href="{{ route('home') }}" class="navbar-brand navbar-brand-autodark">
            <i class="fas fa-shoe-prints text-primary me-2"></i>
            <span class="h3">Laundry Sepatu</span>
          </a>
        </div>
        <div class="card card-md">
          <div class="card-body">
            <h2 class="h2 text-center mb-4">Login to your account</h2>
            @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif
            <form action="{{ route('login') }}" method="POST" autocomplete="off">
              @csrf
              <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" 
                       class="form-control @error('username') is-invalid @enderror" 
                       name="username" 
                       placeholder="Enter username" 
                       value="{{ old('username') }}"
                       required
                       autocomplete="off">
                @error('username')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-2">
                <label class="form-label">
                  Password
                </label>
                <div class="input-group input-group-flat">
                  <input type="password" 
                         class="form-control @error('password') is-invalid @enderror"  
                         name="password" 
                         placeholder="Enter password"  
                         required
                         autocomplete="off">
                  <span class="input-group-text">
                    <a href="#" class="link-secondary" id="togglePassword" title="Show password">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /></svg>
                    </a>
                  </span>
                </div>
                @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-2">
                <label class="form-check">
                  <input type="checkbox" class="form-check-input" name="remember"/>
                  <span class="form-check-label">Remember me on this device</span>
                </label>
              </div>
              <div class="form-footer">
                <button type="submit" class="btn btn-primary w-100">Sign in</button>
              </div>
            </form>
          </div>
        </div>
        <div class="text-center text-secondary mt-3">
          Don't have account yet? <a href="{{ route('register') }}" tabindex="-1">Sign up</a>
        </div>
      </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('../assets/js/tabler.min.js?1692870487') }}" defer></script>
    <script>
      // Password toggle functionality
      document.getElementById('togglePassword').addEventListener('click', function (e) {
          e.preventDefault();
          const password = document.querySelector('input[name="password"]');
          const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
          password.setAttribute('type', type);
      });
    </script>
  </body>
</html>
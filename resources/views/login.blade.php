 <!--
<html lang="en">
 <head>
  <script defer=""
    src="/cdn-cgi/zaraz/s.js?z=JTdCJTIyZXhlY3V0ZWQlMjIlM0ElNUIlNUQlMkMlMjJ0cmFja3MlMjIlM0ElNUIlNUQlMkMlMjJ0JTIyJTNBJTIyQWRtaW5MVEUlMjAzJTIwJTdDJTIwTG9nJTIwaW4lMjIlMkMlMjJ3JTIyJTNBMTM2NiUyQyUyMmglMjIlM0E3NjglMkMlMjJqJTIyJTNBNjY3JTJDJTIyZSUyMiUzQTEzNjYlMkMlMjJsJTIyJTNBJTIyaHR0cHMlM0ElMkYlMkZhZG1pbmx0ZS5pbyUyRnRoZW1lcyUyRnYzJTJGcGFnZXMlMkZleGFtcGxlcyUyRmxvZ2luLmh0bWwlMjIlMkMlMjJyJTIyJTNBJTIyaHR0cHMlM0ElMkYlMkZhZG1pbmx0ZS5pbyUyRnRoZW1lcyUyRnYzJTJGaW5kZXgzLmh0bWwlMjIlMkMlMjJrJTIyJTNBMjQlMkMlMjJuJTIyJTNBJTIyVVRGLTglMjIlMkMlMjJvJTIyJTNBMTgwJTdE">
  </script>
 </head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="container">
  <div class="row justify-content-center">
  <div class="col-md-4 pt-5">
  <div class="card card-flat">
   <div class="card-header text-center">
    <a href="/">
    <img class="block-center rounded" src="/img/logo.png" alt="Image">
    </a>
    <div class="mt-2">
    <span class="brand-span">Login</span>
    </div>
   </div>
   <div class="card-body">
    <p class="text-center py-2">Acesse:</p>
    <form class="mb-3" id="loginForm" method="POST" action="{{ route('login') }}">

    <div class="row mb-3">
      <div class="col-md-12">
      <input class="form-control border-right-0" name="email" type="email" placeholder="E-mail" required="true" autofocus>
      </div>
    </div>
    <div class="row mb-3">
      <div class="col-md-12">
      <input class="form-control border-right-0" name="password" type="password" placeholder="Senha" required="true">
      </div>
     </div>
     <div class="row mb-3">
      <div class="col-md-12">
       <div class="clearfix">
        <div class="checkbox c-checkbox float-left mt-0">
         <label>
          <input type="checkbox" value="true" name="remember">
          <span class="fa fa-check"></span> Lembre-me
         </label>
        </div>
       </div>
      </div>
     </div>
    <hr/>
    <div class="row mb-3">
      <div class="col-md-12">
    <button class="btn btn-block btn-primary mt-3 w-100" type="submit">Login</button>
    </div>
    </div>
    </form>
   </div>
  </div>
 </div>
  </div>
</div>
-->
 
<html lang="en">

 <head>
     <script nonce="5fd1075a-c72b-422b-809c-2920e0bf9d49">
         (function(w, d) {
             ! function(a, e, t, r) {
                 a.zarazData = a.zarazData || {}, a.zarazData.executed = [], a.zarazData.tracks = [], a.zaraz = {
                     deferred: []
                 }, a.zaraz.track = (e, t) => {
                     for (key in a.zarazData.tracks.push(e), t) a.zarazData["z_" + key] = t[key]
                 }, a.zaraz._preSet = [], a.zaraz.set = (e, t, r) => {
                     a.zarazData["z_" + e] = t, a.zaraz._preSet.push([e, t, r])
                 }, a.addEventListener("DOMContentLoaded", (() => {
                     var t = e.getElementsByTagName(r)[0],
                         z = e.createElement(r),
                         n = e.getElementsByTagName("title")[0];
                     n && (a.zarazData.t = e.getElementsByTagName("title")[0].text), a.zarazData.w = a.screen
                         .width, a.zarazData.h = a.screen.height, a.zarazData.j = a.innerHeight, a.zarazData
                         .e = a.innerWidth, a.zarazData.l = a.location.href, a.zarazData.r = e.referrer, a
                         .zarazData.k = a.screen.colorDepth, a.zarazData.n = e.characterSet, a.zarazData.o =
                         (new Date).getTimezoneOffset(), z.defer = !0, z.src = "/cdn-cgi/zaraz/s.js?z=" +
                         btoa(encodeURIComponent(JSON.stringify(a.zarazData))), t.parentNode.insertBefore(z,
                             t)
                 }))
             }(w, d, 0, "script");
         })(window, document);
     </script>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>AdminLTE 3 | Log in</title>

     <link rel="stylesheet"
         href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

     <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">

     <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">

     <link rel="stylesheet" href="../../dist/css/adminlte.min.css?v=3.2.0">
 </head>

 <body class="hold-transition login-page">
     <div class="login-box">
         <div class="login-logo">
             <a href="../../index2.html"><b>Admin</b>LTE</a>
         </div>

         <div class="card">
             <div class="card-body login-card-body">
                 <p class="login-box-msg">Sign in to start your session</p>
                 <form class="mb-3" id="loginForm" method="POST" action="{{ route('login') }}">
                        @csrf
                     <div class="input-group mb-3">
                         <input type="email" name="email" class="form-control" placeholder="Email">
                         <div class="input-group-append">
                             <div class="input-group-text">
                                 <span class="fas fa-envelope"></span>
                             </div>
                         </div>
                     </div>
                     <div class="input-group mb-3">
                         <input type="password" name="password" class="form-control" placeholder="Password">
                         <div class="input-group-append">
                             <div class="input-group-text">
                                 <span class="fas fa-lock"></span>
                             </div>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-8">
                             <div class="icheck-primary">
                                 <input type="checkbox" name="remember" id="remember">
                                 <label for="remember">
                                     Remember Me
                                 </label>
                             </div>
                         </div>

                         <div class="col-4">
                             <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                         </div>

                     </div>
                 </form>
                 <div class="social-auth-links text-center mb-3">
                     <p>- OR -</p>
                     <a href="#" class="btn btn-block btn-primary">
                         <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                     </a>
                     <a href="#" class="btn btn-block btn-danger">
                         <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                     </a>
                 </div>

                 <p class="mb-1">
                     <a href="forgot-password.html">I forgot my password</a>
                 </p>
                 <p class="mb-0">
                     <a href="register.html" class="text-center">Register a new membership</a>
                 </p>
             </div>

         </div>
     </div>


     <script src="../../plugins/jquery/jquery.min.js"></script>

     <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

     <script src="../../dist/js/adminlte.min.js?v=3.2.0"></script>
 </body>

 </html>

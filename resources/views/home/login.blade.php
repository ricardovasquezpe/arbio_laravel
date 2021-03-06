﻿<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title>Arbi | Login</title>

    <link rel="shortcut icon" href="{{ asset('homepage/images/favicon1.png') }}" type="image/x-icon">

    <link rel="manifest" href="{{ asset('homepage/images/favicon/manifest.json') }}">
    <link rel="stylesheet" href="{{ asset('homepage/components/bootstrap-3.3.7-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('homepage/fonts/material-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('homepage/fonts/Material-Icons-new.css') }}">
    <link rel="stylesheet" href="{{ asset('homepage/fonts/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('homepage/components/OwlCarousel2-2.2.1/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('homepage/components/OwlCarousel2-2.2.1/dist/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('homepage/components/wizard/css/wizard.css') }}">
    <link rel="stylesheet" href="{{ asset('homepage/components/mdl/css/material.min.css') }}">
    <link rel="stylesheet" href="{{ asset('homepage/css/m-p.css') }}">
    <link rel="stylesheet" href="{{ asset('homepage/css/arbi.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top text-center navbarcolor">
    <div class="container-fluid">
      <div class="navbar-header">
        <button id="nav-icon3" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect call-me" data-toggle="modal" data-target="#Schedule">Schedule a call-back</a>
        <a class="navbar-brand" href="home.html"><i class="mdi mdi-logo_nuevo"></i></a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="link-bottom"><a href="feature.html">Features</a></li>
          <li class="link-bottom"><a href="pricing_page.html">Pricing</a></li>
          <li class="link-bottom"><a href="blog.html">Blog</a></li>
          <li class="link-bottom"><a href="home.html#contact_us">Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="login" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">Login</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="padding section bg-white">
      <div class="container">
        <div class="col-md-12 text-center">
          <h3 class="bold">Already have an account?</h3>
        </div>
        <div class="col-md-12 text-center p-0">
          <p>Login to your account</p>
          <div class="mdl-card mdl-card-register">
            <div class="mdl-card__supporting-text p-0">
              <div class="col-md-12">
                <h3 class="bold m-t-0">Welcome</h3>
              </div>
              <div class="col-md-12">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Username" aria-describedby="nameN" id="username" value="{{ $username }}">
                  <span class="input-group-btn">
                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-0 height-45 morado p-0" type="button" tabindex="-1"><i class="mdi mdi-person"></i></button>
                  </span>
                </div>
              </div>
              <div class="col-md-12">
                <div class="input-group">
                  <input type="password" class="form-control"  placeholder="Password" aria-describedby="nameN" id="password" value="{{ $password }}">
                  <span class="input-group-btn">
                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-0 height-45 morado p-0" type="button" tabindex="-1"><i class="mdi mdi-lock"></i></button>
                  </span>
                </div>
              </div>
              <div class="col-md-12 text-left">
                <p id="error_message" style="color:red"></p>
              </div>
              <div class="col-md-12 text-left">
                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="remember">
                  <input type="checkbox" id="remember" class="mdl-checkbox__input" {{ $remember }}>
                  <span class="mdl-checkbox__label">Remember me</a></span>
                </label>
              </div>
              <div class="col-md-12 text-center">
                  <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect register height-45" onclick="login()"><i class="mdi mdi-input line"></i>Sign in</button>
              </div>
            </div>
          </div>
        </div>
      </div>  
    </section>

    <footer class="azul">
      <div class="container">
        <div class="row-fluid">
          <div class="col-md-5 col-sm-5 col-xs-12 text-left p-0">
            <p class="m-b-0">&copy;2017 Arbi All Right Reserved.</p>
          </div>
          <div class="col-md-7 col-sm-7 col-xs-12 text-right">
            <ul class="m-b-0">
              <li><a href="feature.html">Features</a></li>
              <li><a href="pricing_page.html">Pricing</a></li>
              <li><a href="blog.html">Blog</a></li>
              <li><a href="home.html#contact_us">Contact</a></li>
              <li class="p-r-0"><i class="fa fa-facebook"></i></li>
              <li class="p-r-0"><i class="fa fa-twitter"></i></li>
              <li class="p-r-0"><i class="fa fa-google-plus"></i></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

<div class="modal fade" id="Schedule" tabindex="-1" role="dialog" aria-labelledby="simpleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="mdl-card mdl-card-register">
                <div class="mdl-card__supporting-text">
                  <div class="col-md-12">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Full name" aria-describedby="nameN">
                      <span class="input-group-btn">
                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-0 height-45 morado p-0" type="button" tabindex="-1"><i class="mdi mdi-done"></i></button>
                      </span>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Company name" aria-describedby="nameN">
                      <span class="input-group-btn">
                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-0 height-45 morado p-0" type="button" tabindex="-1"><i class="mdi mdi-done"></i></button>
                      </span>
                    </div>
                  </div>
                  <div class="col-md-12 m-b-16">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Phone number incl. landcode" aria-describedby="nameN">
                      <span class="input-group-btn">
                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-0 height-45 morado p-0" type="button" tabindex="-1"><i class="mdi mdi-done"></i></button>
                      </span>
                    </div>
                  </div>
                  <div class="col-md-12 text-center">
                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect register height-45 m-0"><i class="fa fa-paper-plane-o"></i>Call me back!</button>
                  </div>
                </div>
              </div>
            </div>
        </div>     
    </div>
  <script src="{{ asset('homepage/components/jquery-3.2.1/jquery-3.2.1.min.js') }}"></script>
  <script src="{{ asset('homepage/components/bootstrap-3.3.7-dist/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('homepage/components/mdl/js/material.min.js') }}"></script>
  <script src="{{ asset('homepage/components/wizard/js/jquery.bootstrap.wizard.min.js') }}"></script>
  <script src="{{ asset('homepage/components/OwlCarousel2-2.2.1/dist/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('homepage/js/jspricing.js') }}"></script>
  <script src="{{ asset('homepage/js/jslogin.js') }}"></script>
</body>
</html>
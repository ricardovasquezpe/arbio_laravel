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
    <title>Arbi Augmented Reality platform!</title>

    <link rel="shortcut icon" href="public/images/favicon1.png" type="image/x-icon">

    <link rel="manifest" href="public/images/favicon/manifest.json">
    <link rel="stylesheet" href="public/components/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/fonts/material-icons.css">
    <link rel="stylesheet" href="public/fonts/Material-Icons-new.css">
    <link rel="stylesheet" href="public/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/components/OwlCarousel2-2.2.1/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="public/components/OwlCarousel2-2.2.1/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="public/components/wizard/css/wizard.css">
    <link rel="stylesheet" href="public/components/mdl/css/material.min.css">
    <link rel="stylesheet" href="public/css/m-p.css">
    <link rel="stylesheet" href="public/css/arbi.css">
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
            <li class="link-bottom"><a href="home.html#pricing">Pricing</a></li>
            <li class="link-bottom"><a href="blog.html">Blog</a></li>
            <li class="link-bottom"><a href="home.html#contact_us">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="login.html" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">Login</a></li>
          </ul>
        </div>
      </div>
    </nav>

	<section>
		
	</section>

	<section class="bg-white p-0">
		<div class="container max-850">
			<div class="row-fluid">
				<div class="mdl-wizard">
		    	   <div class="form-wizard form-wizard-horizontal " id="wizardnone">
                <div class="form-wizard-nav">
                    <div class="progress morado">
                        <div class="progress-bar progress-bar-primary" id="progressBar"></div>
                    </div>
                    <ul class="nav nav-justified nav-pills text-center">
                        <li class="active tab1" id="li1">
                            <a data-toggle="tab" aria-expanded="true" href="#tab1" id="step1">
                            	<i class="mdi mdi-person step"></i>
                                <span class="title">Summary & customer info</span>
                            </a>
                        </li>
                        <li class ="tab2" id="li2">
                            <a data-toggle="tab" aria-expanded="false" href="#tab2" class ="my-link-par" id="step2">
                                <i class="mdi mdi-payment step"></i>
                                <span class="title">Make payment</span>
                            </a>
                        </li>
                        <li class ="tab3" id="li3">
                            <a data-toggle="tab" aria-expanded="false" href="#tab3" class ="my-link-par" id="step3">
                                <i class="mdi mdi-check step"></i>
                                <span class="title">Sign up confirmation</span>
                            </a>
                        </li>
                    </ul>
                </div>
				 	  </div>
		    	</div>
			</div>
		</div>
	</section>
	
    <section id="summary" class="section">
    	<div class="container">
    		<div class="row-fluid">
    			<div class="mdl-card mdl-card-summary">
		    		<div class="mdl-card__title p-0">
		    			<h2 class="mdl-card__title-text">Summary</h2> 
		    		</div>
		    		<div class="mdl-card__supporting-text p-rl-0">
						<table style="width:100%">
						  <tr>
						    <th>Plan</th>
						    <th>Price</th> 
						  </tr>
						  <tr>
						    <td>Designer Plan</td>
						    <td>&euro; 99</td>
						  </tr>
						  <tr>
						    <td>3 month-payment</td>
						    <td>&euro; 297</td>
						  </tr>
						  <tr>
						    <td>Total</td>
						    <td>&euro; 297</td>
						  </tr>
						</table>
		    		</div>
		    	</div>
		    	<div class="mdl-card mdl-card-summary">
		    		<div class="mdl-card__title p-0">
		    			<h2 class="mdl-card__title-text">Register for an account</h2> 
		    		</div>
		    		<div class="mdl-card__supporting-text formulario p-rl-0">
						<div class="col-md-12 p-0">
			                <div class="input-group">
			                  <input type="text" class="form-control" placeholder="First name" aria-describedby="nameN">
			                  <span class="input-group-btn">
			                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-0 height-45 morado p-0" type="button" tabindex="-1"><i class="mdi mdi-done"></i></button>
			                  </span>
			                </div>
		                </div>
			            <div class="col-md-12 p-0">
			                <div class="input-group">
			                  <input type="text" class="form-control" placeholder="Last name" aria-describedby="nameN">
			                  <span class="input-group-btn">
			                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-0 height-45 morado p-0" type="button" tabindex="-1"><i class="mdi mdi-done"></i></button>
			                  </span>
			                </div>
			            </div>
			            <div class="col-md-12 p-0 m-b-16">
			                <div class="input-group">
			                  <input type="text" class="form-control" placeholder="Email" aria-describedby="nameN">
			                  <span class="input-group-btn">
			                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-0 height-45 morado p-0" type="button" tabindex="-1"><i class="mdi mdi-email"></i></button>
			                  </span>
			                </div>
			            </div>
			            <div class="col-md-12 p-0 text-center">
			                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect register height-45 m-0"><i class="fa fa-paper-plane-o"></i>Create account</button>
			            </div>
		    		</div>
		    	</div>
		    	<div class="mdl-card mdl-card-summary">
		    		<div class="mdl-card__supporting-text p-rl-0 checkout">
						<div class="col-md-12 p-0">
							<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-1">
							  <input type="checkbox" id="checkbox-1" class="mdl-checkbox__input">
							  <span class="mdl-checkbox__label">I accept the <a>Terms & Conditions</a></span>
							</label>
						</div>
						<div class="col-md-12 p-0 text-center">
			                <a href="checkout.html"><button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect register height-45 m-0"><i class="fa fa-paper-plane-o"></i>CHECK OUT</button></a>
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
              <li><a href="#pricing">Pricing</a></li>
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

    <script src="public/components/jquery-3.2.1/jquery-3.2.1.min.js"></script>
    <script src="public/components/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script src="public/components/mdl/js/material.min.js"></script>
    <script src="public/components/wizard/js/jquery.bootstrap.wizard.min.js"></script>
    <script src="public/components/OwlCarousel2-2.2.1/dist/owl.carousel.min.js"></script>
    <script src="public/js/jspricing.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<!-- Basic need -->
	<title>World of movies</title>
	<meta charset="UTF-8">
  @yield('meta')
	<meta name="author" content="">
	<link rel="profile" href="#">

    <!--Google Font-->
    <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Dosis:400,700,500|Nunito:300,400,600' />
	<!-- Mobile specific meta -->
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone-no">

	<link rel="stylesheet" href="{{ asset('help/css/all.css') }}">

	<!-- CSS files -->
	<link rel="stylesheet" href="{{ asset('css/plugins.css') }}">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('css/boot.css') }}">
	<style>
.top-searc {
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  align-items: center;
  justify-content: flex-start;
  
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
}
 .top-searc select,
 .top-searc input {
  height: 46px;
  border: none;
  background-color: #233a50 !important;
  font-family: 'Nunito', sans-serif;
  font-size: #abb7c4;
  color: #abb7c4;
  font-weight: 300;
  text-transform: none;
	position: relative;
	width: 90% !important;
}
 .top-searc select {
  width: 20%;
  border-right: 1px solid #020d18;
  -webkit-appearance: none;
  -moz-appearance: none;
  /* Firefox */
  background: url('images/uploads/drop-icon.png') no-repeat right 20px center;
  text-transform: uppercase;
  color: #ffffff;
}
 .top-searc input::-webkit-input-placeholder {
  color: #abb7c4;
}
 .top-searc input {
  background: url('images/uploads/topsearch.png') no-repeat right 20px center;
}
	</style>
</head>
<body>
<!--preloading-->
	<div id="preloader">
		<img class="logo" src="{{ asset('images/logo1.png') }}" alt="" width="119" height="58">
		<div id="status">
				<span></span>
				<span></span>
		</div>
	</div>
<!--end of preloading-->
<!--login form popup-->
{{-- <div class="login-wrapper" id="login-content">
    <div class="login-content">
        <a href="#" class="close">x</a>
        <h3>Login</h3>
        <form method="post" action="#">
        	<div class="row">
        		 <label for="username">
                    Username:
                    <input type="text" name="username" id="username" placeholder="Hugh Jackman" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{8,20}$" required="required" />
                </label>
        	</div>
           
            <div class="row">
            	<label for="password">
                    Password:
                    <input type="password" name="password" id="password" placeholder="******" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
                </label>
            </div>
            <div class="row">
            	<div class="remember">
					<div>
						<input type="checkbox" name="remember" value="Remember me"><span>Remember me</span>
					</div>
            		<a href="#">Forget password ?</a>
            	</div>
            </div>
           <div class="row">
           	 <button type="submit">Login</button>
           </div>
        </form>
        <div class="row">
        	<p>Or via social</p>
            <div class="social-btn-2">
            	<a class="fb" href="#"><i class="ion-social-facebook"></i>Facebook</a>
            	<a class="tw" href="#"><i class="ion-social-twitter"></i>twitter</a>
            </div>
        </div>
    </div>
</div> --}}
<!--end of login form popup-->
<!--signup form popup-->
{{-- <div class="login-wrapper"  id="signup-content">
    <div class="login-content">
        <a href="#" class="close">x</a>
        <h3>sign up</h3>
        <form method="post" action="#">
            <div class="row">
                 <label for="username-2">
                    Username:
                    <input type="text" name="username" id="username-2" placeholder="Hugh Jackman" required="required" />
                </label>
            </div>
           
            <div class="row">
                <label for="email-2">
                    your email:
                    <input type="password" name="email" id="email-2" placeholder="" required="required" />
                </label>
            </div>
             <div class="row">
                <label for="password-2">
                    Password:
                    <input type="password" name="password" id="password-2" placeholder="" required="required" />
                </label>
            </div>
             <div class="row">
                <label for="repassword-2">
                    re-type Password:
                    <input type="password" name="password" id="repassword-2" placeholder=""  required="required" />
                </label>
            </div>
           <div class="row">
             <button type="submit">sign up</button>
           </div>
        </form>
    </div>
</div> --}}
<!--end of signup form popup-->

<!-- BEGIN | Header -->
<header class="ht-header">
	<div class="container">
		<nav class="navbar navbar-default navbar-custom">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header logo">
				    <div class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					    <span class="sr-only">Toggle navigation</span>
					    <div id="nav-icon1">
							<span></span>
							<span></span>
							<span></span>
						</div>
				    </div>
				      <a href="index-2.html"><img class="logo" src="{{ asset('images/logo1.png') }}" alt="" width="119" height="58"></a>
			    </div>
				<!-- Collect the nav links, forms, and other content for toggling -->
		
			<!-- /.navbar-collapse -->
	    </nav>
	    
	    <!-- top search form -->
		</div>
	</header>
  @yield('name')
  <footer class="ht-footer">
    <div class="container">
      <div class="flex-parent-ft">
        <div class="flex-child-ft item1">
           <a href="index-2.html"><img class="logo" src="{{ asset('images/logo1.png') }}" alt=""></a>
           <p>5th Avenue st, manhattan<br>
          New York, NY 10001</p>
          <p>Call us: <a href="#">(+01) 202 342 6789</a></p>
        </div>
        <div class="flex-child-ft item2">
          <h4>Resources</h4>
          <ul>
            <li><a href="#">About</a></li> 
            <li><a href="#">Blockbuster</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Forums</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Help Center</a></li>
          </ul>
        </div>
        <div class="flex-child-ft item3">
          <h4>Legal</h4>
          <ul>
            <li><a href="#">Terms of Use</a></li> 
            <li><a href="#">Privacy Policy</a></li>	
            <li><a href="#">Security</a></li>
          </ul>
        </div>
        <div class="flex-child-ft item4">
          <h4>Account</h4>
          <ul>
            <li><a href="#">My Account</a></li> 
            <li><a href="#">Watchlist</a></li>	
            <li><a href="#">Collections</a></li>
            <li><a href="#">User Guide</a></li>
          </ul>
        </div>
        <div class="flex-child-ft item5">
          <h4>Newsletter</h4>
          <p>Subscribe to our newsletter system now <br> to get latest news from us.</p>
          <form action="#">
            <input type="text" placeholder="Enter your email...">
          </form>
          <a href="#" class="btn">Subscribe now <i class="ion-ios-arrow-forward"></i></a>
        </div>
      </div>
    </div>
    <div class="ft-copyright">
      <div class="ft-left">
        <p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
      </div>
      <div class="backtotop">
        <p><a href="#" id="back-to-top">Back to top  <i class="ion-ios-arrow-thin-up"></i></a></p>
      </div>
    </div>
  </footer>
  <!-- end of footer section-->
  
  <script src="{{ asset('js/jquery.js') }}"></script>
  <script src="{{ asset('js/plugins.js')}}"></script>
  <script src="{{ asset('js/plugins2.js')}}"></script>
  <script src="{{ asset('js/custom.js')}}"></script>
  </body>
  
  
  </html>
  
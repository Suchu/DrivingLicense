@extends('default')
@section('content')
      <!-- Header -->
        <div id="header-wrapper">
          <div id="header" class="container">

            <!-- Logo -->
              <h1 id="logo"><!-- <a href="index.html"> -->Get your Driving License<!-- </a> --></h1>
              <p><a href="#" id = "fill" class="button icon fa-file">Fill Your Form</a> &nbsp  &nbsp <a href="#" id = "renew" class="button icon fa-file">Renew Form</a>   &nbsp  &nbsp <a href="#" id = "result" class="button icon fa-file">Get Result</a></p>
              <nav id="nav">
  
                <ul>
                  <li><a class="icon fa-home" href="default.php"><span>Home</span></a></li>
                  <li><a href="#" class="icon fa-bar-chart-o"><span>About</span></a></li>
                  <li><a class="icon fa-cog" href="#"><span>Traffic Rules</span></a></li>
                  <li><a class="icon fa-retweet" href="#"><span>Terms and Conditions</span></a></li>
                  <li><a class="icon fa-sitemap" href="#"><span>More..</span></a></li>
                </ul>
              
			  </nav>
		   </div>
	<div id="form1">
  		<div id="features-wrapper">
  
          	<section id="features" class="container">
            	<header>
              		<h2>Fill The Form</h2>
            	</header>
               
    		<form role = "form">

   				<div class = "form-group">
 
					<input type = "text" class = "form-control" id = "name" placeholder = "First Name">
   				</div>
    			<div class = "form-group">
   					<input class = "form-control " placeholder=" Last Name" type="text" />
 				</div>
   
   				<div class = "form-group">
    				<input  class = "form-control" placeholder=" Address" type="text" />
   				</div>
   				<div class = "form-group">
   					 <input  class = "form-control" placeholder=" Address" type="text" />
   				</div>
   				<div class = "form-group">
    			<input  class = "form-control" placeholder=" Email" type="text" />
   				</div>
   				<button type = "submit" class = "form-button-submit button icon fa-envelope btn btn-default ">Submit</button>
			</form>

 		</div>
	</div>

@endsection
@section('scripts')
<script type ="text/javascript">
      $(document).ready(function(){
        $("#form1").hide();
        $("#fill").click(function(){
          $("#form1").show();
          $('html,body').animate({
              scrollTop: $('#form1').offset().top
          }, 1000);
        });
      });
    </script>
@endsection
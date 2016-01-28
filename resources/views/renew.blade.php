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
                  <li><a class="icon fa-home" href="{{URL::to('/')}}"><span>Home</span></a></li>
                  <li><a href="#" class="icon fa-bar-chart-o"><span>About</span></a></li>
                  <li><a class="icon fa-cog" href="#"><span>Traffic Rules</span></a></li>
                  <li><a class="icon fa-retweet" href="#"><span>Terms and Conditions</span></a></li>
                  <li><a class="icon fa-sitemap" href="#"><span>More..</span></a></li>
                </ul>
              
        </nav>
       </div>
  </div>
       <div id="form2">
          <div id="features-wrapper">
  
             <section id="features" class="container">
               <header>
                 <h2> Enter your name and license number</h2>
               </header>        
               <div id="responsive-form" class="clearfix">

                

<div class="form-row">
{!! Form::open(array('url'=> 'renew/renew', 'files'=>true)) !!}
{!! Form::hidden('invisible', 'id', array('id' => 'invisible_id'))!!}
                
           
<div class="column-half search-license-wrapper">
  {!! Form::label('License Number') !!}
  {!! Form::text('lic_no',null,['class'=> 'search-input'])!!}{!! Form:: submit('search',['class'=> 'search-input-btn form-button-submit button icon fa-envelope'])  !!}
         

 
</div>
</div>
  
{!! Form::close()!!}
</div><!--end responsive-form-->
  </div>            
                
          </div>
      
  
@endsection
@section('scripts')
<script type ="text/javascript">
      $(document).ready(function(){
        $("#form1").hide();
        $("#fill").click(function(){
          $("#form1").show();
           $(".fname").focus();
          $('html,body').animate({
              scrollTop: $('#form1').offset().top
          }, 1000);
        });
        
      });

      function readURL(input, thisimg) {

     if (input.files && input.files[0]) {
         var reader = new FileReader();

         reader.onload = function (e) {
          
             thisimg.next('p').find('img').attr('src', e.target.result).show();
         }
         reader.readAsDataURL(input.files[0]);
     }else{
       thisimg.next('p').find('img').attr('src', "").hide();
     }
 }

 $(".input-img").change(function(){
  var thisimg = $(this);
     readURL(this, thisimg);
 });

    </script>
    
    
    


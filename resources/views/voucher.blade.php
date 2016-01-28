<!DOCTYPE html>
<html>
<head>
  <title>Driving License</title>
  <meta name="site-url" content="{{url('/')}}" />
  <meta name="site-token" content="{{csrf_token()}}" />
  <link href='http://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="{{url('/css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('/css/font-awesome.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('/css/main.css')}}">
  
  
</head>
<body class="homepage">
    <div id="page-wrapper">
       <div id="header-wrapper">
          <div id="header" class="container">

            <!-- Logo -->
      <h1 id="logo"><!-- <a href="index.html"> -->Get your Driving License<!-- </a> --></h1>
    </div>
  </div>

       <div id="form1">
          <div id="features-wrapper">
  
             <section id="features" class="container">
               <header>
                 <h2> Fill the voucher details</h2>
               </header>  
               <div class="required">Please complete all required fields marked with a *.</div> 
               {!! 'Date:  ',$date!!}     
                 
              <div class="form-row">
                {!! Form::open(array('url'=> 'voucher/voucher', 'files'=>true)) !!}
                {!! Form::hidden('applicants_id', $id, array('id' => 'invisible_id'))!!}


                <div class="column-half">

                  {!! Form::label('Voucher ID*') !!}
                  {!! Form::text('voucher_id')!!}@if ($errors->has('voucher_id'))<p style="color:red;">{!!$errors->first('voucher_id')!!}</p>@endif

                </div>
                 <div class="column-half">

                  {!! Form::label('Fee*') !!}
                  {!! Form::text('fee')!!}@if ($errors->has('fee'))<p style="color:red;">{!!$errors->first('fee')!!}</p>@endif
                </div>
              
              
                
                <div class="column-half">
                  {!! Form::label('Image of voucher*') !!}
                  {!! Form::file('voucher_image',['class'=>'input-img'])!!}
                  <p><img class="preview_image" style="display:none; width:400px;" src=""></p>
                  @if ($errors->has('voucher_image'))<p style="color:red;">{!!$errors->first('voucher_image')!!}</p>@endif
                </div>
              </div>

          <div class="form-row">
          <div class="column-full"> 
        <a><button type='submit' class = 'form-button-submit button icon fa-envelope' > Submit</button></a>
        </div>
        </div>
                {!! Form::close()!!}

          </div>
      </div>
     </div>    
     <script type ="text/javascript"> 
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

    


  
 <script src="js/jquery.min.js"></script>
 <script src="js/jquery.dropotron.min.js"></script>
 <script src="js/skel.min.js"></script>
 <script src="js/skel-viewport.min.js"></script>
 <script src="js/util.js"></script>
 <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="assets/js/main.js"></script>
<script type="text/javascript" src="{{url('/js/jquery-1.11.3.min.js')}}"></script>
<script type="text/javascript" src="{{url('/js/bootstrap.min.js')}}"></script>
@yield('scripts')
</body>
</html>
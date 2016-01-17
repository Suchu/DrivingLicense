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
                 
        
                {!! Form::open(array('url'=> 'voucher/voucher', 'files'=>true)) !!}
                {!! Form::hidden('applicants_id', 'id', array('id' => 'invisible_id'))!!}


                {!! 'Voucher date: ',$date!!}
                
                
                 
                <div class="form-group">
                  {!! Form::label('Voucher ID:') !!}
                  {!! Form::text('voucher_id')!!}@if ($errors->has('voucher_id'))<p style="color:red;">{!!$errors->first('voucher_id')!!}</p>@endif

                </div>
                 <div class="form-group">
                  {!! Form::label('Fee') !!}
                  {!! Form::text('fee')!!}@if ($errors->has('fee'))<p style="color:red;">{!!$errors->first('fee')!!}</p>@endif
                </div>
                <div class="form-group">
                  {!! Form::label('Image of voucher:') !!}
                  {!! Form::file('voucher_image')!!}@if ($errors->has('voucher_image'))<p style="color:red;">{!!$errors->first('voucher_image')!!}</p>@endif
                </div>

                {!! Form:: submit('submit')!!}
                {!! Form::close()!!}

          </div>
      </div>
     </div>        

    


  
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
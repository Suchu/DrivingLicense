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
	
       <div id="form1">
          <div id="features-wrapper">
  
             <section id="features" class="container">
               <header>
                 <h2> Fill the form</h2>
               </header>             
        
                {!! Form::open(array('url'=> 'formfill')) !!}
                {!! Form::hidden('invisible', 'id', array('id' => 'invisible_id'))!!}
                <div class="form-group">
                  {!! Form::label('First Name') !!}
                  {!! Form::text('firstname')!!}@if ($errors->has('firstname'))<p style="color:red;">{!!$errors->first('firstname')!!}</p>@endif<br><br>

                </div>
                <div class="form-group">
                  {!! Form::label('Last Name') !!}
                  {!! Form::text('lastname')!!}@if ($errors->has('lastname'))<p style="color:red;">{!!$errors->last('lastname')!!}</p>@endif<br><br>
                </div>
                <div class="form-group">
                  {!! Form::label('Address') !!}
                  {!! Form::text('address')!!}<br><br>
                </div>
                <div class="form-group">
                  {!! Form::label('Gender:') !!}
                  {!! Form::radio('gender')!!}{!! Form::label('Male') !!}{!! Form::radio('gender')!!}{!! Form::label('Female')!!}<br><br>
                </div>
                <div class="form-group">
                  {!! Form::label('Email Address:') !!}
                  {!! Form::text('email')!!}<br><br>
                </div>
                <div class="form-group">
                  {!! Form::label('Phone number:') !!}
                  {!! Form::text('phone')!!}<br><br>
                </div>
                <div class="form-group">
                  {!! Form::label('Education') !!}
                  {!! Form::text('education')!!}<br><br>
                </div>
                <div class="form-group">
                  {!! Form::label('Citizenship') !!}
                  {!! Form::text('citizenship')!!}<br><br>
                </div>
                <div class="form-group">
                  {!! Form::label('Age') !!}
                  {!! Form::text('age')!!}<br><br>
                </div>
                <div class="form-group">
                  {!! Form::label('Bloodgroup') !!}
                  {!! Form::text('bloodgroup')!!}<br><br>
                </div>
                <div class="form-group">
                  {!! Form::label("Father's Name/ Husband's Name") !!}
                  {!! Form::text('relative')!!}<br><br>
                </div>
                <div class="form-group">
                  {!! Form::label('Name of the institution you trained from') !!}
                  {!! Form::text('institution')!!}<br><br>
                </div>
                <div class="form-group">
                  {!! Form::label('Name of the trainer') !!}
                  {!! Form::text('trainer')!!}<br><br>
                </div>
                <div class="form-group">
                  {!! Form::label('Name of the vehicle you want to get driving license for:') !!}
                  {!! Form::radio('vehicle_type')!!}{!! Form::label('motorbike, scooter')!!}{!! Form::radio('vehicle_type')!!}{!! Form::label('car, jeep, van')!!}
                  {!! Form::radio('vehicle_type')!!}  {!! Form::label('Tempo, Auto Riksa')!!}{!! Form::radio('vehicle_type')!!}{!! Form::label('Tractor')!!}
                  {!! Form::radio('vehicle_type')!!}{!! Form::label('Mini bus, Mini Truck')!!}{!! Form::radio('vehicle_type')!!}{!! Form::label('Bus, Truck, Lorry')!!}<br><br>
                </div>
                <div class="form-group">
                  {!! Form::label('Date:') !!}
                  {!! Form::input('date','start',null,['class'=> 'form-control'])!!}<br><br>
                </div>
                <div class="form-group">
                  {!! Form::label('Fee') !!}
                  {!! Form::text('fee')!!}
                </div>

                {!! Form:: submit('submit')!!}
                {!! Form::close()!!}

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
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
        
                {!! Form::open(array('url'=> 'formfill', 'files'=>true)) !!}
                {!! Form::hidden('invisible', 'id', array('id' => 'invisible_id'))!!}
                
                
                <div class="form-group">
                  {!! Form::label('First Name') !!}
                  {!! Form::text('firstname',null,['class'=> 'fname'])!!}@if ($errors->has('firstname'))<p style="color:red;">{!!$errors->first('firstname')!!}</p>@endif

                </div>
                <div class="form-group">
                  {!! Form::label('Last Name') !!}
                  {!! Form::text('lastname')!!}@if ($errors->has('lastname'))<p style="color:red;">{!!$errors->last('lastname')!!}</p>@endif
                </div>
                <div class="form-group">
                  {!! Form::label('Address') !!}
                  {!! Form::text('address')!!}
                </div>
                <div class="form-group">
                  {!! Form::label('Gender:') !!}
                  Male {!! Form::radio('gender')!!} &nbsp &nbsp Female  {!! Form::radio('gender')!!}
                </div>

                  <div class="form-group">
                  {!! Form::label('Please upload your passport sized image') !!}
                  {!! Form::file('image'); !!}
                </div>

                <div class="form-group">
                  {!! Form::label('Permanent Address') !!}
                  {!! Form::text('per_address')!!}
                </div>
                <div class="form-group">
                  {!! Form::label('Temporary Address') !!}
                  {!! Form::text('temp_address')!!}
                </div>
                <div class="form-group">
                  {!! Form::label('Occupation') !!}
                  {!! Form::text('occupation')!!}
                </div>
                
                <div class="form-group">
                  {!! Form::label('Email Address:') !!}
                  {!! Form::text('email')!!}
                </div>
                <div class="form-group">
                  {!! Form::label('Phone number:') !!}
                  {!! Form::text('phone')!!}
                </div>
                <div class="form-group">
                  {!! Form::label('Education') !!}
                  {!! Form::text('education')!!}
                </div>
                <div class="form-group">
                  {!! Form::label('Citizenship') !!}
                  {!! Form::text('citizenship')!!}
                </div>
                <div class="form-group">
                  {!! Form::label('Age') !!}
                  {!! Form::text('age')!!}
                </div>
                <div class="form-group">
                  {!! Form::label('Mobile number:') !!}
                  {!! Form::text('mobile')!!}
                </div>
                <div class="form-group">
                  {!! Form::label('Education Qualification') !!}
                  {!! Form::text('education')!!}
                </div>
                <div class="form-group">
                  {!! Form::label('Citizenship Number') !!}
                  {!! Form::text('citizenship')!!}
                </div>
               
                <div class="form-group">
                  {!! Form::label('Bloodgroup') !!}
                  {!! Form::text('bloodgroup')!!}
                </div>
                <div class="form-group">
                  {!! Form::label("Father's Name/ Husband's Name") !!}
                  {!! Form::text('relative')!!}
                </div>
                  <div class="form-group">
                  {!! Form::label("Father's Name/ Husband's Name & Address") !!}
                  {!! Form::text('relative')!!}

                </div>
                <div class="form-group">
                  {!! Form::label('Name of the institution trained from') !!}
                  {!! Form::text('institution')!!}
                </div>
                <div class="form-group">
                  {!! Form::label('Name of the trainer') !!}
                  {!! Form::text('trainer')!!}
                </div>
                <div class="form-group">
                  {!! Form::label('Name of the vehicle you want to get driving license for:') !!}<br />

                  {!! Form::select('vehicle_type', array('0' => 'Plese Select a vehicle type','motorbike,scooter' => 'motorbike, scooter', 'car, jeep, van' => 'car, jeep, van',
                  'Tempo, Auto Riksa'=> 'Tempo, Auto Riksa', 'Tractor' =>'Tractor','Mini bus, Mini Truck'=>'Mini bus, Mini Truck',
                  'Bus, Truck, Lorry'=>'Bus, Truck, Lorry')) !!}
                 
                  
                </div>
                <div class="form-group">
                  {!! Form::label('Date:') !!}
                  {!! Form::input('date','start',null,['class'=> 'form-control'])!!}
                </div>
                <div class="form-group">
                  {!! Form::label('Fee') !!}
                  {!! Form::text('fee')!!}
                </div>
               
                <div class="form-group">
                {!! Form:: submit('submit',null,['class'=> 'form-button-submit button icon fa-envelope'])!!}
                </div>
                
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
           $(".fname").focus();
          $('html,body').animate({
              scrollTop: $('#form1').offset().top
          }, 1000);
        });
        
      });
    </script>
    @endsection
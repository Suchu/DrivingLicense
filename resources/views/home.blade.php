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
                  {!! Form::text('firstname',null,['class'=> 'fname'])!!}@if ($errors->has('firstname'))<p style="color:red;">{!!$errors->first('firstname')!!}</p>@endif

                </div>
                <div class="form-group">
                  {!! Form::label('Last Name') !!}
                  {!! Form::text('lastname')!!}@if ($errors->has('lastname'))<p style="color:red;">{!!$errors->last('lastname')!!}</p>@endif
                </div>
                <div class="form-group">
<<<<<<< HEAD
                  {!! Form::label('Address') !!}
                  {!! Form::text('address')!!}
                </div>
                <div class="form-group">
                  {!! Form::label('Gender:') !!}
                  Male {!! Form::radio('gender')!!} &nbsp &nbsp Female  {!! Form::radio('gender')!!}
=======
                  {!! Form::label('Please upload your passport sized image') !!}

                  {!! Form::file('image'); !!}<br><br>
                </div>

                <div class="form-group">
                  {!! Form::label('Permanent Address') !!}
                  {!! Form::text('per_address')!!}<br><br>
                </div>
                <div class="form-group">
                  {!! Form::label('Temporary Address') !!}
                  {!! Form::text('temp_address')!!}<br><br>
                </div>
                <div class="form-group">
                  {!! Form::label('Occupation') !!}
                  {!! Form::text('occupation')!!}<br><br>
                </div>
                <div class="form-group">
                  {!! Form::label('Gender:') !!}
                  {!! Form::radio('gender','male')!!}{!! Form::label('Male') !!}{!! Form::radio('gender','female')!!}{!! Form::label('Female')!!}<br><br>
>>>>>>> bfdeb5556f3be8e8284c576f83cb36f9a6804956
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
<<<<<<< HEAD
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
=======
                  {!! Form::label('Mobile number:') !!}
                  {!! Form::text('mobile')!!}<br><br>
                </div>
                <div class="form-group">
                  {!! Form::label('Education Qualification') !!}
                  {!! Form::text('education')!!}<br><br>
                </div>
                <div class="form-group">
                  {!! Form::label('Citizenship Number') !!}
                  {!! Form::text('citizenship')!!}<br><br>
                </div>
                <div class="form-group">
                  {!! Form::label('Age') !!}
                  {!! Form::text('age') !!}<br><br>
>>>>>>> bfdeb5556f3be8e8284c576f83cb36f9a6804956
                </div>
                <div class="form-group">
                  {!! Form::label('Bloodgroup') !!}
                  {!! Form::text('bloodgroup')!!}
                </div>
                <div class="form-group">
<<<<<<< HEAD
                  {!! Form::label("Father's Name/ Husband's Name") !!}
                  {!! Form::text('relative')!!}
=======
                  {!! Form::label("Father's Name/ Husband's Name and Address") !!}
                  {!! Form::text('relative')!!}<br><br>
>>>>>>> bfdeb5556f3be8e8284c576f83cb36f9a6804956
                </div>
                <div class="form-group">
                  {!! Form::label('Name of the institution you trained from') !!}
                  {!! Form::text('institution')!!}
                </div>
                <div class="form-group">
                  {!! Form::label('Name of the trainer') !!}
                  {!! Form::text('trainer')!!}
                </div>
                <div class="form-group">
                  {!! Form::label('Name of the vehicle you want to get driving license for:') !!}
<<<<<<< HEAD
                  {!! Form::radio('vehicle_type')!!}{!! Form::label('motorbike, scooter')!!}{!! Form::radio('vehicle_type')!!}{!! Form::label('car, jeep, van')!!}
                  {!! Form::radio('vehicle_type')!!}  {!! Form::label('Tempo, Auto Riksa')!!}{!! Form::radio('vehicle_type')!!}{!! Form::label('Tractor')!!}
                  {!! Form::radio('vehicle_type')!!}{!! Form::label('Mini bus, Mini Truck')!!}{!! Form::radio('vehicle_type')!!}{!! Form::label('Bus, Truck, Lorry')!!}
=======
                  {!! Form::select('vehicle_type', array('motorbike,scooter' => 'motorbike, scooter', 'car, jeep, van' => 'car, jeep, van',
                  'Tempo, Auto Riksa'=> 'Tempo, Auto Riksa', 'Tractor' =>'Tractor','Mini bus, Mini Truck'=>'Mini bus, Mini Truck',
                  'Bus, Truck, Lorry'=>'Bus, Truck, Lorry'), null, ['placeholder' => 'Pick a vehicle type']) !!}<br><br>
>>>>>>> bfdeb5556f3be8e8284c576f83cb36f9a6804956
                </div>
                <div class="form-group">
                  {!! Form::label('Date:') !!}
                  {!! Form::input('date','start',null,['class'=> 'form-control'])!!}
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
           $(".fname").focus();
          $('html,body').animate({
              scrollTop: $('#form1').offset().top
          }, 1000);
        });
        
      });
    </script>
    @endsection
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
                  {!! Form::text('lastname')!!}@if ($errors->has('lastname'))<p style="color:red;">{!!$errors->first('lastname')!!}</p>@endif
                </div>
               <div class="form-group">
                  {!! Form::label('Gender:') !!}
                  Male {!! Form::radio('gender','male')!!} &nbsp &nbsp Female  {!! Form::radio('gender','female')!!}@if ($errors->has('gender'))<p style="color:red;">{!!$errors->first('gender')!!}</p>@endif
                </div>
                <div class="form-group">
                  {!! Form::label('ppimage','Image name') !!}
                  {!! Form::text('ppimage')!!}
                </div>

                <div class="form-group">
                  {!! Form::label('ppimg_filename','Please upload your passport sized image') !!}

                  {!! Form::file('ppimg_filename')!!}<br>@if ($errors->has('ppimg_filename'))<p style="color:red;">{!!$errors->first('ppimg_filename')!!}</p>@endif

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

                  {!! Form::text('per_address')!!}<br>@if ($errors->has('per_address'))<p style="color:red;">{!!$errors->first('per_address')!!}</p>@endif
                </div>
                <div class="form-group">
                  {!! Form::label('Temporary Address') !!}
                  {!! Form::text('temp_address')!!}<br>@if ($errors->has('temp_address'))<p style="color:red;">{!!$errors->first('temp_address')!!}</p>@endif
                </div>
                <div class="form-group">
                  {!! Form::label('Occupation') !!}
                  {!! Form::text('occupation')!!}<br>@if ($errors->has('occupation'))<p style="color:red;">{!!$errors->first('occupation')!!}</p>@endif

                </div>
                
                <div class="form-group">
                  {!! Form::label('Email Address:') !!}
                  {!! Form::email('email')!!}@if ($errors->has('email'))<p style="color:red;">{!!$errors->first('email')!!}</p>@endif
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
                  {!! Form::label('Age') !!}
                  {!! Form::text('age' )!!}@if ($errors->has('age'))<p style="color:red;">{!!$errors->first('age')!!}</p>@endif
                </div>
              
               
                 <div class="form-group">
                  {!! Form::label('Mobile number:') !!}
                  {!! Form::text('mobile', old('mobile'), ['placeholder' => 'Enter Nepal mobile number'])!!}@if ($errors->has('mobile'))<p style="color:red;">{!!$errors->first('mobile')!!}</p>@endif
                </div>
                <div class="form-group">
                  {!! Form::label('Education Qualification') !!}
                  {!! Form::text('education')!!}@if ($errors->has('education'))<p style="color:red;">{!!$errors->first('education')!!}</p>@endif
                </div>
                <div class="form-group">
                  {!! Form::label('Citizenship Number') !!}
                  {!! Form::text('citizenship')!!}@if ($errors->has('citizenship'))<p style="color:red;">{!!$errors->first('citizenship')!!}</p>@endif
                </div>
                

                <div class="form-group">
                  {!! Form::label('Bloodgroup') !!}
                  {!! Form::text('bloodgroup')!!}@if ($errors->has('bloodgroup'))<p style="color:red;">{!!$errors->first('bloodgroup')!!}</p>@endif
                </div>
                

                  <div class="form-group">
                  {!! Form::label("Father's Name/ Husband's Name & Address") !!}
                  
                  {!! Form::text('relative')!!}@if ($errors->has('relative'))<p style="color:red;">{!!$errors->first('relative')!!}</p>@endif

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
                  {!! Form::label('Date:') !!}
                  {!! Form::input('date','start',null,['class'=> 'form-control'])!!}
                </div>
               
                <div class="form-group">
                {!! Form:: submit('submit',null,['class'=> 'form-button-submit button icon fa-envelope'])!!}
                </div>
                  {!! Form::label('Name of the vehicle you want to get driving license for:') !!}

                  {!! Form::select('vehicle_type', array('0'=>'Pick a vehicle type','motorbike,scooter' => 'motorbike, scooter', 'car, jeep, van' => 'car, jeep, van',
                  'Tempo, Auto Riksa'=> 'Tempo, Auto Riksa', 'Tractor' =>'Tractor','Mini bus, Mini Truck'=>'Mini bus, Mini Truck',
                  'Bus, Truck, Lorry'=>'Bus, Truck, Lorry') )!!}@if ($errors->has('vehicle_type'))<p style="color:red;">{!!$errors->first('vehicle_type')!!}</p>@endif

                </div>
                
               

                {!! Form:: submit('submit')!!}

                {!! Form::close()!!}
                <!--@if(Session::has('flash_message'))
                  <div class="alert alert-success">
                    {{ Session::get('flash_message') }}
                  </div>
                @endif-->


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
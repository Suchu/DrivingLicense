
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Driving License | Details</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">

    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
  <body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">

      <header class="main-header">
        <nav class="navbar navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <a href="{{url('admin')}}" class="navbar-brand"><b>Driving License</b></a>
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <i class="fa fa-bars"></i>
              </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
              <ul class="nav navbar-nav">
                <!-- li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Link</a></li> -->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Task <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    
                     <li class="divider"></li>
                    <li><a href="{{url('admin/applicants')}}">New Applicants</a></li>
                    
                    
                    <li class="divider"></li>
                    <li><a href="{{url('admin/registerd')}}">Registered Applicants</a></li>
                    <li class="divider"></li>
                    <li><a href="{{url('admin/licholder')}}">License Holders</a></li>
                    <li class="divider"></li>
                    <li><a href="{{url('admin/revoulist')}}">Renewal Voucher</a></li>
                    <li class="divider"></li>
                    <li><a href="{{url('admin/show')}}">View Results</a></li>
                  </ul>
                </li>
              </ul>
              <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
                </div>
              </form>
            </div><!-- /.navbar-collapse -->
            <!-- Navbar Right Menu -->
              <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                  <!-- Messages: style can be found in dropdown.less-->
                  <li class="dropdown messages-menu">
                    <!-- Menu toggle button -->
                    <!-- a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <i class="fa fa-envelope-o"></i>
                      <span class="label label-success">4</span>
                    </a> -->
                    <ul class="dropdown-menu">
                      
                      <li>
                        <!-- inner menu: contains the messages -->
                        <ul class="menu">
                          <li><!-- start message -->
                            <a href="#">
                              <div class="pull-left">
                                <!-- User Image -->
                                <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                              </div>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> 5 new members joined today
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-red"></i> 5 new members joined
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-user text-red"></i> You changed your username
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li>
              <!-- Tasks: style can be found in dropdown.less -->
              <li class="dropdown tasks-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-flag-o"></i>
                  <span class="label label-danger">9</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 9 tasks</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    
                    </ul>
                  </li>
                  
                </ul>
              </li>

              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="dist/img/suchu.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs">{{Auth::user()->name}}</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="dist/img/suchu.jpg" class="img-circle" alt="User Image">
                    <p>
                      {{Auth::user()->name}} - Admin
                      <small>Admin</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <!-- <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li> -->
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="{{url('auth/logout')}}" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <!-- <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li> -->
            </ul>
          </div>
        </nav>
        
      </header>
      <!-- Full Width Column -->
      <div class="content-wrapper">
        <div class="container">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Applicant Details
              <small>Name of applicant</small>
            </h1>
            <ol class="breadcrumb">
              <li><a href="{{url('admin2.admin2')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
              <li><a href="{{url('admin2.applicants')}}">New Applicants</a></li>
              <li class="active">Applicant Details</li>
            </ol>
          </section>

          <!-- Main content -->
          <section class="content">

            
            <div class="box box-default">
              <div class="box-header with-border">
                <h3 class="box-title">Details</h3>
              </div>
              
             <div class="box-body">
              <div class="row">
                <div class="col-md-8">
                  <table id="example2" class="table table-bordered table-hover">
               
                    @foreach($app->vouchers as $eachvoucher)
                     <form action="{{url('admin/approve/'.$eachvoucher->id)}}" method='GET'>
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <tr>
                        <th>
                             Name:
                        </th>
                        <td>
                             {{$app->firstname}} {{$app->lastname}}
                        </td>

                      </tr>
                    <tbody>
                       
                        <tr class="odd gradeX">
                            <th>
                                Email: 
                            </th>
                            <td>
                                {{$app->email}}
                            </td>
                          </tr>
                          <tr>
                             <th>
                             Permanent Address:
                        </th>
                        <td>
                             {{$app->per_address}}
                        </td>
                          </tr>
                          <tr>
                            <th>
                                 Temporary Address:
                            </th>
                            <td>
                                 {{$app->temp_address}}
                            </td>
                          </tr>
                          <tr>
                        <th>
                             Phone Number:
                        </th>
                        <td>
                             {{$app->phone}}
                        </td>

                      </tr>
                    <tbody>
                       
                        <tr class="odd gradeX">
                            <th>
                                Mobile Number:
                            </th>
                            <td>
                                {{$app->mobile}}
                            </td>
                          </tr>
                          <tr>
                             <th>
                             Gender:
                        </th>
                        <td>
                             {{$app->gender}}
                        </td>
                          </tr>
                          <tr>
                            <th>
                                 Citizenship Number:
                            </th>
                            <td>
                                 {{$app->citizenship}}
                            </td>
                          </tr>
                          <tr>
                        <th>
                             Age:
                        </th>
                        <td>
                             {{$app->age}}
                        </td>

                      </tr>
                    <tbody>
                       
                        <tr class="odd gradeX">
                            <th>
                                Blood Group: 
                            </th>
                            <td>
                                {{$app->bloodgroup}}
                            </td>
                          </tr>
                          <tr>
                             <th>
                             Occupation:
                        </th>
                        <td>
                             {{$app->occupation}}
                        </td>
                          </tr>
                          <tr>
                            <th>
                                 Education:
                            </th>
                            <td>
                                 {{$app->education}}
                            </td>
                          </tr>
                          <tr>
                        <th>
                             Vehicle Type:
                        </th>
                        <td>
                             {{$app->vehicle_type}}
                        </td>

                      </tr>
                    <tbody>
                       
                        <tr class="odd gradeX">
                            <th>
                               Name of Father:
                            </th>
                            <td>
                                {{$app->relative}}
                            </td>
                          </tr>
                          <tr>
                             <th>
                             Institution:
                        </th>
                        <td>
                             {{$app->institution}}
                        </td>
                          </tr>
                          <tr>
                            <th>
                                 Trainer:
                            </th>
                            <td>
                                 {{$app->trainer}}
                            </td>
                          </tr>
                          <tr>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr colspan = 2>

                            <th><u>Voucher Details</u><th></tr>
                          <tr>
                            <th>Voucher ID:</th>
                            <td>{{$eachvoucher->voucher_id}}</td>
                          </tr>
                          <tr>
                            <th>Total Fee:</th>
                            <td>{{$eachvoucher->fee}}</td>
                          </tr>
                          
                  </tbody>
                 
                  </table>
                  <div class='app-btn'>        
                     <input type="submit" name="exam" class="btn btn-aqua" value="Verify"></a>                       
                     <a href="{{url('amdin/applicants')}}"><input type="button" name="" class="btn btn-danger" value="Not verified"></a>
                  </div> 
                </div>
                <div class="col-md-4">
                  <div class= 'app-img'>
                    <img src="{{URL::to($app->ppimg_filename)}}">
                    <img src="{{URL::to($app->cimg_filename)}}">
                    <img src="{{URL::to($eachvoucher->voucher_image)}}">

                        <!-- <div class="name-img"> <h3>Applicant Image</h3> </div>
 -->
                      </div>
                </div>
              </div>
                 

                      
                      @endforeach
                         
            </div>
          
            <!-- <div class="callout callout-danger">
              <h4>Warning!</h4>
              <p>The construction of this layout differs from the normal one. In other words, the HTML markup of the navbar and the content will slightly differ than that of the normal layout.</p>
            </div> -->
            
          </section><!-- /.content -->
        </div><!-- /.container -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <!-- <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div> -->
        <strong>Copyright &copy; 2015-2016 <a href="http://sulochanabhujel.com.np" target='_blank'>Driving License
        </a>.</strong> All rights reserved.
      </footer>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <!-- Create exam -->
    <script type ="text/javascript">
      $(document).ready(function(){
        $(".create-exam").hide();
        $(".btn-aqua").click(function(){
          $(".create-exam").show();
           $(".venue").focus();
          $('html,body').animate({
              scrollTop: $('.create-exam').offset().top
          }, 1000);
        });
        
      });

    </script>
  </body>
</html>

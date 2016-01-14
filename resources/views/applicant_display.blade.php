<!DOCTYPE html>
<html>
<head>
    <title>Applicant detail</title>
   
    <meta name="site-token" content="{{csrf_token()}}" />
    <link href='http://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="{{url('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/css/main.css')}}">
</head>
<body>
    <ul>
    <div> <h1>New applicants added!</h1></div>
   
        <table id="example2" class="table table-bordered table-hover"> 
        <tr>
        <td> 
        <li>Name of Applicant: {!!$applicants->firstname!!} {!!$applicants->lastname!!}</li></td> <li><td> {!!'PP image:',$applicants->image!!}</li></td>
        <li>{!!'Premanent Address:',$applicants->per_address!!}</li>
        <li>{!!'Temporary Address',$applicants->temp_address!!}</li>
        
        <li>{!!'Email:',$applicants->email!!}</li>
        <li>{!!'Target Age:',$applicants->age!!}</li>
        <li>{!!'Citizenship Number:',$applicants->citizenship!!}</li>
        <li>{!!'Mobile nnumber:',$applicants->mobile!!}</li>
  </table>
        
    
</ul>
<a href="{{url('#')}}" class="btn btn-default">OK</a>


<a href="{{url('#')}}" class="btn btn-default">Create Exam</a>
 <script src="js/jquery.min.js"></script>
 <script src="js/jquery.dropotron.min.js"></script>
 <script src="js/skel.min.js"></script>
 <script src="js/skel-viewport.min.js"></script>
 <script src="js/util.js"></script>
 <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="assets/js/main.js"></script>
<script type="text/javascript" src="{{url('/js/jquery-1.11.3.min.js')}}"></script>
<script type="text/javascript" src="{{url('/js/bootstrap.min.js')}}"></script>

</body>
</html>

                   
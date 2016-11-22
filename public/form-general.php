
<html>

<head>
    <meta charset="UTF-8">
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Form General</title>
    
    <meta name="description" content="Free Admin Template Based On Twitter Bootstrap 3.x">
    <meta name="author" content="">
    
    <meta name="msapplication-TileColor" content="#5bc0de" />
    <meta name="msapplication-TileImage" content="assets/img/metis-tile.png" />
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/lib/font-awesome/css/font-awesome.css">
    
    <!-- Metis core stylesheet -->
    <link rel="stylesheet" href="assets/css/main.css">
    
    <!-- metisMenu stylesheet -->
    <link rel="stylesheet" href="assets/lib/metismenu/metisMenu.css">
    
    <!-- animate.css stylesheet -->
    <link rel="stylesheet" href="assets/lib/animate.css/animate.css">


        <link rel="stylesheet" href="/assets/lib/inputlimiter/jquery.inputlimiter.css">
        <link rel="stylesheet" href="/assets/lib/bootstrap-daterangepicker/daterangepicker-bs3.css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/Uniform.js/2.1.2/themes/default/css/uniform.default.min.css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.min.css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery-tagsinput/1.3.3/jquery.tagsinput.css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.2/css/bootstrap3/bootstrap-switch.min.css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.1/css/datepicker3.min.css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.0.1/css/bootstrap-colorpicker.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

    <!--For Development Only. Not required -->
    <script>
        less = {
            env: "development",
            relativeUrls: false,
            rootpath: "/assets/"
        };
    </script>
    <link rel="stylesheet" href="assets/css/style-switcher.css">
    <link rel="stylesheet/less" type="text/css" href="assets/less/theme.less">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.js"></script>

  </head>

        <body class="  ">
            <div class="bg-dark dk" id="wrap">
                <div id="top">
                    <!-- .navbar -->
                    <nav class="navbar navbar-inverse navbar-static-top">
                        <div class="container-fluid">
                    
                    
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <header class="navbar-header">
                    
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a href="index.html" class="navbar-brand"><img src="assets/img/logo.png" alt=""></a>
                    
                            </header>
                    
                    
                    
                            <div class="topnav">
                                <div class="btn-group">
                                    <a data-placement="bottom" data-original-title="Fullscreen" data-toggle="tooltip"
                                       class="btn btn-default btn-sm" id="toggleFullScreen">
                                        <i class="glyphicon glyphicon-fullscreen"></i>
                                    </a>
                                </div>
                                <div class="btn-group">
                                    <a data-placement="bottom" data-original-title="E-mail" data-toggle="tooltip"
                                       class="btn btn-default btn-sm">
                                        <i class="fa fa-envelope"></i>
                                        <span class="label label-warning">5</span>
                                    </a>
                                    <a data-placement="bottom" data-original-title="Messages" href="#" data-toggle="tooltip"
                                       class="btn btn-default btn-sm">
                                        <i class="fa fa-comments"></i>
                                        <span class="label label-danger">4</span>
                                    </a>
                                    <a data-toggle="modal" data-original-title="Help" data-placement="bottom"
                                       class="btn btn-default btn-sm"
                                       href="#helpModal">
                                        <i class="fa fa-question"></i>
                                    </a>
                                </div>
                                <div class="btn-group">
                                    <a href="login.html" data-toggle="tooltip" data-original-title="Logout" data-placement="bottom"
                                       class="btn btn-metis-1 btn-sm">
                                        <i class="fa fa-power-off"></i>
                                    </a>
                                </div>
                                <div class="btn-group">
                                    <a data-placement="bottom" data-original-title="Show / Hide Left" data-toggle="tooltip"
                                       class="btn btn-primary btn-sm toggle-left" id="menu-toggle">
                                        <i class="fa fa-bars"></i>
                                    </a>
                                    <a data-placement="bottom" data-original-title="Show / Hide Right" data-toggle="tooltip"
                                       class="btn btn-default btn-sm toggle-right">
                                        <span class="glyphicon glyphicon-comment"></span>
                                    </a>
                                </div>
                    
                            </div>
                    
                    
                    
                    
                            <div class="collapse navbar-collapse navbar-ex1-collapse">
                    
                                <!-- .nav -->
                                <ul class="nav navbar-nav">
                                    <li><a href="dashboard.html">Dashboard</a></li>
                                    <li><a href="table.html">Tables</a></li>
                                    <li><a href="file.html">File Manager</a></li>
                                    <li class='dropdown active'>
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            Form Elements <b class="caret"></b>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="form-general.html">General</a></li>
                                            <li><a href="form-validation.html">Validation</a></li>
                                            <li><a href="form-wysiwyg.html">WYSIWYG</a></li>
                                            <li><a href="form-wizard.html">Wizard &amp; File Upload</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <!-- /.nav -->
                            </div>
                        </div>
                        <!-- /.container-fluid -->
                    </nav>
                    <!-- /.navbar -->                        <header class="head">
                                <div class="search-bar">
                                    <form class="main-search" action="">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Live Search ...">
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary btn-sm text-muted" type="button">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </form>
                                    <!-- /.main-search -->                                </div>
                                <!-- /.search-bar -->
                            <div class="main-bar">
                                <h3>
              <i class="fa fa-pencil"></i>&nbsp;
            Form General
          </h3>
                            </div>
                            <!-- /.main-bar -->
                        </header>
                        <!-- /.head -->
                </div>
                <!-- /#top -->
                             <div id="left">
                        <div class="media user-media bg-dark dker">
                            <div class="user-media-toggleHover">
                                <span class="fa fa-user"></span>
                            </div>
                            <div class="user-wrapper bg-dark">
                                <a class="user-link" href="">
                                    <img class="media-object img-thumbnail user-img" alt="User Picture" src="assets/img/user.gif">
                                    <span class="label label-danger user-label">16</span>
                                </a>
                        
                                <div class="media-body">
                                    <h5 class="media-heading">Archie</h5>
                                    <ul class="list-unstyled user-info">
                                        <li><a href="">Administrator</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- #menu -->
                        <ul id="menu" class="bg-blue dker">
                                  <li class="">
                                    <a href="javascript:;">
                                      <i class="fa fa-building "></i>
                                      <span class="link-title">Manage Users</span>
                                      <span class="fa arrow"></span>
                                    </a>
                                    <ul class="collapse">
                                      <li class="active">
                                        <a href="form-general.php">
                                          <i class="fa fa-angle-right"></i>&nbsp; Add User </a>
                                      </li>
                                      <li>
                                        <a href="deleteuser.php">
                                          <i class="fa fa-angle-right"></i>&nbsp; Delete User </a>
                                      </li>
                                      <li>
                                        <a href="updateuser.php">
                                          <i class="fa fa-angle-right"></i>&nbsp; Update User </a>
                                      </li>
                                     
                                    </ul>
                                  </li>
                                  <li class="">
                                    <a href="javascript:;">
                                      <i class="fa fa-tasks"></i>
                                      <span class="link-title">Manage Teams</span>
                                      <span class="fa arrow"></span>
                                    </a>
                                    <ul class="collapse">
                                      <li>
                                        <a href="bgcolor.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; Add Team </a>
                                      </li>
                                    </ul>
                                  </li>
                                  <li class="">
                                    <a href="javascript:;">
                                      <i class="fa fa-pencil"></i>
                                      <span class="link-title">
                                    Manage Sports
                            </span>
                                      <span class="fa arrow"></span>
                                    </a>
                                    <ul class="collapse">
                                      <li>
                                        <a href="form-general.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; Add Sport </a>
                                      </li>
                                      <li>
                                        <a href="addsportdetails.php">
                                          <i class="fa fa-angle-right"></i>&nbsp; Add sport Details </a>
                                      </li>

                                      <li class="">
                                    <a href="javascript:;">
                                      <i class="fa fa-pencil"></i>
                                      <span class="link-title">
                                    Manage Points Table
                              </span>
                                      <span class="fa arrow"></span>
                                    </a>
                                    <ul class="collapse">
                                      <li>
                                        <a href="form-general.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; Add Points </a>
                                      </li>
                                      <li>
                                        <a href="form-validation.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; Update Pointstable </a>
                                      </li>

                                      <li>
                                        <a href="form-validation.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; Delete Points </a>
                                      </li>

                                      <li>
                                        <a href="form-validation.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; View Pointstable </a>
                                      </li>
                                    </ul>
                                  </li>

                                    </ul>
                                  </li>
                                  <li class="">
                                    <a href="javascript:;">
                                      <i class="fa fa-pencil"></i>
                                      <span class="link-title">
                                    Booking
                              </span>
                                      <span class="fa arrow"></span>
                                    </a>
                                    <ul class="collapse">
                                      <li>
                                        <a href="form-general.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; Add bookings </a>
                                      </li>
                                      <li>
                                        <a href="form-validation.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; Accept Boooking </a>
                                      </li>

                                      <li>
                                        <a href="form-validation.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; View Booking </a>
                                      </li>

                                      <li>
                                        <a href="form-validation.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; Delete Booking </a>
                                      </li>

                                      <li>
                                        <a href="form-validation.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; View Trash </a>
                                      </li>
                                    </ul>
                                  </li>

                                  <li class="">
                                    <a href="javascript:;">
                                      <i class="fa fa-pencil"></i>
                                      <span class="link-title">
                                    Issue Certificates
                              </span>
                                      
                                    </a>
                                    <ul class="collapse">
                                    </ul>
                      
                                  <li class="">
                                    <a href="javascript:;">
                                      <i class="fa fa-pencil"></i>
                                      <span class="link-title">
                                    Generate Reports
                              </span>
                                      <span class="fa arrow"></span>
                                    </a>
                                    <ul class="collapse">

                                      <li>
                                        <a href="form-validation.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; Search Teams </a>
                                      </li>

                                      <li>
                                        <a href="form-validation.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; Search Player Info</a>
                                      </li>
                                    </ul>
                                  </li>

                                 <li class="">
                                    <a href="javascript:;">
                                      <i class="fa fa-pencil"></i>
                                      <span class="link-title">
                                   add News/Announcement
                              </span>
                                      <span class="fa arrow"></span>
                                    </a>
                                    <ul class="collapse">
                                      <li>
                                        <a href="form-general.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; Add news </a>
                                      </li>

                                      <li>
                                        <a href="form-validation.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; Delete News </a>
                                      </li>

                                      <li>
                                        <a href="form-validation.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; Update News </a>
                                      </li>

                                      <li>
                                        <a href="form-validation.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; View News </a>
                                      </li>

                                      <li>
                                        <a href="form-validation.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; Add Result </a>
                                      </li>
                                      <li>
                                        <a href="form-validation.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; Add Fixture </a>
                                      </li>
                                    </ul>
                                  </li>


                                  <li class="">
                                    <a href="javascript:;">
                                      <i class="fa fa-pencil"></i>
                                      <span class="link-title">
                                    Manage Site Info
                              </span>
                                      <span class="fa arrow"></span>
                                    </a>
                                    <ul class="collapse">
                                      <li>
                                        <a href="form-general.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; Add Colours Night Details </a>
                                      </li>

                                      <li>
                                        <a href="form-validation.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; Delete Colours Night Details </a>
                                      </li>

                                      <li>
                                        <a href="form-validation.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; Update Colours Night Details</a>
                                      </li>
                                    </ul>
                                  </li>

                                  
                                  
                                  
                                </ul>
                        <!-- /#menu -->
                    </div>
                    <!-- /#left -->
                <div id="content">
                    <div class="outer">
                        <div class="inner bg-light lter">
                            <!--BEGIN INPUT TEXT FIELDS-->
<div class="row">
<div class="col-md-2"></div>
<div class="col-lg-12 col-md-10">
    <div class="box dark">
        <header>
            <div class="icons"><i class="fa fa-edit"></i></div>
            <h5>Input Text Fields</h5>
            <!-- .toolbar -->
            <div class="toolbar">
              <nav style="padding: 8px;">
                  <a href="javascript:;" class="btn btn-default btn-xs collapse-box">
                      <i class="fa fa-minus"></i>
                  </a>
                  <a href="javascript:;" class="btn btn-default btn-xs full-box">
                      <i class="fa fa-expand"></i>
                  </a>
                  <a href="javascript:;" class="btn btn-danger btn-xs close-box">
                      <i class="fa fa-times"></i>
                  </a>
              </nav>
            </div>            <!-- /.toolbar -->
        </header>
        <div id="div-1" class="body">
            <form class="form-horizontal" action="" method="post">

            <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Sport</label>

                    <div class="col-lg-8">
                        <input type="text" id="text1" placeholder="Enter Sport" class="form-control" name="Sport">
                    </div>
                </div>

                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Name</label>

                    <div class="col-lg-8">
                        <input type="text" id="text1" placeholder="Enter Full Name" class="form-control" name="name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">NIC No</label>

                    <div class="col-lg-8">
                        <input type="text" id="text1" placeholder="Enter NIC No" class="form-control" name="nic_no">
                    </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Faculty</label>

                    <div class="col-lg-8">
                        <input type="text" id="text1" placeholder="Enter Faculty" class="form-control" name="faculty">
                    </div>
                </div>

                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Registration No</label>

                    <div class="col-lg-8">
                        <input type="text" id="text1" placeholder="Enter Registration No" class="form-control" name="reg_no">
                    </div>
                </div>

                
                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Contact No</label>

                    <div class="col-lg-8">
                        <input type="tel" id="text1" placeholder="Enter Contact no" class="form-control" name="contact_no">
                    </div>
                </div>

                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Date of Birth</label>

                    <div class="col-lg-8">
                        <input type="date" id="text1" placeholder="Enter dob" class="form-control" name="dob">
                    </div>
                </div>

                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Email</label>

                    <div class="col-lg-8">
                        <input type="email" id="text1" placeholder="Enter Email" class="form-control" name="email">
                    </div>
                </div>

                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Gender</label>

                    <div class="col-lg-8">
                       <input type="radio" name="gender" value="male" checked > Male<br>
                       <input type="radio" name="gender" value="female"> Female<br>
                    </div>
                </div>
                               <br>
                               <br>
                        <input type="submit" value="Submit" name="submit">
                          <input type="reset" value="reset">
                    </div>


                </div>
                <!-- /.form-group -->

                
            </form>
        </div>
    </div>
</div>
<div class="col-md-2"></div>


</div>


                        </div>
                        <!-- /.inner -->
                    </div>
                    <!-- /.outer -->
                </div>

                        <?php 
require_once'dbcon.php';


if( isset($_POST['submit'])){

  $name = $_POST['name'];
  $nic_no=$_POST['nic_no'];
  $faculty=$_POST['faculty'];
  $reg_no = $_POST['reg_no'];
  $contact_no = $_POST['contact_no'];
  $dob = $_POST['dob'];
  $email = $_POST['email'];
  $gender = $_POST['gender'];
  $password = $_POST['password'];

$sql1 = "INSERT INTO add_user(name,nic_no,faculty,reg_no,contact_no,dob,email,gender,password)
 VALUES('$name','$nic_no','$faculty','$reg_no','$contact_no','$dob','$email','$gender','$password')";
$sql3q=mysqli_query($con,$sql1);




if($sql3q){
  echo 'success';
}
else{
  echo 'not success';
}

}
else{
  echo 'not set';
}
?>
                                      <!-- /#content -->
                    <div id="right" class="bg-light lter">
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Warning!</strong> Best check yo self, you're not looking too good.
                        </div>
                        <!-- .well well-small -->
                        <div class="well well-small dark">
                            <ul class="list-unstyled">
                                <li>Visitor <span class="inlinesparkline pull-right">1,4,4,7,5,9,10</span></li>
                                <li>Online Visitor <span class="dynamicsparkline pull-right">Loading..</span></li>
                                <li>Popularity <span class="dynamicbar pull-right">Loading..</span></li>
                                <li>New Users <span class="inlinebar pull-right">1,3,4,5,3,5</span></li>
                            </ul>
                        </div>
                        <!-- /.well well-small -->
                        <!-- .well well-small -->
                        <div class="well well-small dark">
                            <button class="btn btn-block">Default</button>
                            <button class="btn btn-primary btn-block">Primary</button>
                            <button class="btn btn-info btn-block">Info</button>
                            <button class="btn btn-success btn-block">Success</button>
                            <button class="btn btn-danger btn-block">Danger</button>
                            <button class="btn btn-warning btn-block">Warning</button>
                            <button class="btn btn-inverse btn-block">Inverse</button>
                            <button class="btn btn-metis-1 btn-block">btn-metis-1</button>
                            <button class="btn btn-metis-2 btn-block">btn-metis-2</button>
                            <button class="btn btn-metis-3 btn-block">btn-metis-3</button>
                            <button class="btn btn-metis-4 btn-block">btn-metis-4</button>
                            <button class="btn btn-metis-5 btn-block">btn-metis-5</button>
                            <button class="btn btn-metis-6 btn-block">btn-metis-6</button>
                        </div>
                        <!-- /.well well-small -->
                        <!-- .well well-small -->
                        <div class="well well-small dark">
                            <span>Default</span><span class="pull-right"><small>20%</small></span>
                        
                            <div class="progress xs">
                                <div class="progress-bar progress-bar-info" style="width: 20%"></div>
                            </div>
                            <span>Success</span><span class="pull-right"><small>40%</small></span>
                        
                            <div class="progress xs">
                                <div class="progress-bar progress-bar-success" style="width: 40%"></div>
                            </div>
                            <span>warning</span><span class="pull-right"><small>60%</small></span>
                        
                            <div class="progress xs">
                                <div class="progress-bar progress-bar-warning" style="width: 60%"></div>
                            </div>
                            <span>Danger</span><span class="pull-right"><small>80%</small></span>
                        
                            <div class="progress xs">
                                <div class="progress-bar progress-bar-danger" style="width: 80%"></div>
                            </div>
                        </div>                    </div>
                    <!-- /#right -->
            </div>
            <!-- /#wrap -->
            <footer class="Footer bg-dark dker">
                <p>2016 &copy; Metis Bootstrap Admin Template</p>
            </footer>
            <!-- /#footer -->
            <!-- #helpModal -->
            <div id="helpModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <!-- /#helpModal -->
            <!--jQuery -->
            <script src="assets/lib/jquery/jquery.js"></script>

                    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.14.1/moment.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/Uniform.js/2.1.2/jquery.uniform.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.jquery.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-tagsinput/1.3.3/jquery.tagsinput.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/autosize.js/1.18.17/jquery.autosize.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.2/js/bootstrap-switch.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.1/js/bootstrap-datepicker.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.0.1/js/bootstrap-colorpicker.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>

            <!--Bootstrap -->
            <script src="assets/lib/bootstrap/js/bootstrap.js"></script>
            <!-- MetisMenu -->
            <script src="assets/lib/metismenu/metisMenu.js"></script>
            <!-- Screenfull -->
            <script src="assets/lib/screenfull/screenfull.js"></script>

                    <script src="/assets/lib/inputlimiter/jquery.inputlimiter.js"></script>
                    <script src="/assets/lib/validVal/js/jquery.validVal.min.js"></script>
                    <script src="/assets/lib/bootstrap-daterangepicker/daterangepicker.js"></script>

            <!-- Metis core scripts -->
            <script src="assets/js/core.js"></script>
            <!-- Metis demo scripts -->
            <script src="assets/js/app.js"></script>

                <script>
                    $(function() {
                      Metis.formGeneral();
                    });
                </script>

            <script src="assets/js/style-switcher.js"></script>
        </body>

</html>

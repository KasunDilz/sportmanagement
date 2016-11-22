
<html>

  <?php 
    require_once('_header.php'); //here we have imported the header file from the _header.php file 
    include_once('_sidebar.php'); //here we have imported the sidebar file from the _sidebar.php file
   ?>


        <body class="  ">
                <div id="content">
                    <div class="outer">
                        <div class="inner bg-light lter">
<div class="row">
<div class="col-md-2"></div>
<div class="col-lg-12 col-md-10">
    <div class="box dark">
        <header>
            <div class="icons"><i class="fa fa-edit"></i></div>
            <h5>Add News/Announcements</h5>
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
            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Title</label>
                        <div class="col-lg-8">
                            <input type="text" id="text1" placeholder="Enter Title" class="form-control" name="title">
                        </div>
                </div>

                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Description</label>
                    <div class="col-lg-8">
                        <textarea name="description" rows="8" cols="100" class="form-control "></textarea>
                    </div>
                </div>
                    
                <div class="form-group">
                    <label class="control-label col-lg-4">News Image</label>
                    <div class="col-lg-8">
                      <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
                        <div>
                          <span class="btn btn-default btn-file">
                            <span class="fileinput-new">Select image</span>
                            <span class="fileinput-exists">Change</span>
                            <input type="file" name="upload_image" accept="image/*">
                          </span>
                          <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                        </div>
                      </div>
                    </div>
                </div>
                <br> <br>
                <div class="form-group">
                  <div class="col-lg-8">
                    <input type="submit" value="Submit" name="submit">
                    <input type="reset" value="reset">
                  </div>
                </div>
              </div>
             </div>
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

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["upload_image"]["name"]);
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    $check = getimagesize($_FILES["upload_image"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        
        if (move_uploaded_file($_FILES["upload_image"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["upload_image"]["name"]). " has been uploaded.";

          $user_id = 1;

          $post_title = mysqli_escape_string($con,$_POST['title']);
          $description = mysqli_escape_string($con,$_POST['description']);

          $sql_to_insert_newsfeed = "INSERT INTO newsfeed(title,description,date_time,post_by,image)
           VALUES('$post_title','$description',NOW(),$user_id,'$target_file')";

          $res=mysqli_query($con,$sql_to_insert_newsfeed);

          if($res){
            echo "Yes its done";
          }else{
            echo "Sorry , not done";
          }
          

        } else {
            echo "Sorry, there was an error uploading your file.";
        }

    } else {
        echo "File is not an image.";
        echo $target_file;
    }
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
                        </div>                    
                      </div>
            </div>
            
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

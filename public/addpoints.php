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



            <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript">
    function showDiv(elem){
        if(elem.value == 1 ){
            document.getElementById('a').style.display = "block";
        }

        else if(elem.value == 2){
            document.getElementById('a').style.display = "block";
            document.getElementById('acdYr').style.display = "none";
            document.getElementById('fac').style.display = "none";

        }
        else if(elem.value == 3){
            document.getElementById('b').style.display = "block";
            document.getElementById('acdYr').style.display = "none";
            document.getElementById('fac').style.display = "none";

        }
          
        else if(elem.value == 4){
            document.getElementById('b').style.display = "block";
            document.getElementById('acdYr').style.display = "none";
            document.getElementById('fac').style.display = "none";

        } 
}
</script>


            <div class="icons"><i class="fa fa-edit"></i></div>
            <h5>Add points</h5>
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

 <form class="form-horizontal">

              <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Year</label>

                    <div class="col-lg-8">
                        <input type="number" min="2016" id="text1" placeholder="Enter the year " class="form-control">
                    </div>
                </div>

                <div  class="form-group">
                            <label for="table_collation" class="control-label col-lg-4">Tournament</label>

                            <div class="col-lg-8">
                                <select name="table_collation" id="table_collation" class="form-control">
                                    <option >Select Tournament</option>
                                  <option value="1" title="Unicode (multilingual), Binary">
                                            Freshers
                                        </option>
                                        <option value="2" title="Czech, case-insensitive">
                                            Inter-Faculty
                                        </option>
                                        <option value="3" title="Danish, case-insensitive">
                                            Inter-University
                                        </option>
                                        <option value="4"
                                                title="Esperanto, case-insensitive">SLUG
                                        </option>
                                        
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                <!-- /.form-group -->
                 <div class="form-group">
                            <label for="table_collation" class="control-label col-lg-4">Sports</label>
                    <div class="col-lg-8">
                        <select type="text" id="sport" placeholder="" class="form-control" name="sport">
                        <option value="">Select Sports</option>
                    <option>Badminton-Men</option>
                                        <option>Badminton-Women</option>
                    <option>Baseball-Men</option>
                                        <option>Basketball-Men</option>
                    <option>Basketball-Women</option>
                                        <option>Carrom-Men</option>
                    <option>Carrom-Women</option>
                                        <option>Chess-Men</option>
                    <option>Chess-Women</option>
                                        <option>Cricket</option>
                    <option>Elle-Men</option>
                                        <option>Elle-Women</option>
                    <option>Football</option>
                                        <option>Hockey-Men</option>
                    <option>Hockey-Women</option>
                                        <option>Karate-Men</option>
                    <option>Karate-Women</option>
                                        <option>Netabll</option>
                    <option>Road-Race</option>
                    <option>Rowing-Men</option>
                                        <option>Rowing-Women</option>
                    <option>Rugby</option>
                    <option>Swimming-Men</option>
                    <option>Swimming-Women</option>
                    <option>Table-Tennis-Men</option>
                                        <option>Tabel-Tennis-Women</option>
                    <option>Tennis-Men</option>
                    <option>Tennis-Women</option>
                    <option>Taekwondo-Men</option>
                                        <option>Taekwondo-Women</option>
                    <option>Track-and-Field-Men</option>
                                        <option>Track-and-Field-Women</option>
                    <option>Volleyball-Men</option>
                    <option>Volleyball-Women</option>
                                        <option>Wrestling</option>
                    <option>Weightlifting-Men</option> 
            </select>
                    </div>
                </div>
                        
                
                <div  class="form-group" id="a" style="display: none;">

                    <label for="text1" class="control-label col-lg-4">Faculty of Art</label>

                    <div class="col-lg-8" >
                        <input type="radio" name="gender" value="1st Place" checked > 1st Place   
                        <input type="radio" name="gender" value="2nd Place" checked> 2nd Place     
                        <input type="radio" name="gender" value="3rd Place" checked> 3rd Place
                        <input type="radio" name="gender" value="Participants" checked> Participants
                    </div>
                </div>

                <div id="a" class="form-group" style="display: none;">
                    <label for="text1" class="control-label col-lg-4">Faculty of Law</label>

                    <div class="col-lg-8" >
                        <input type="radio" name="gender" value="1st Place" checked > 1st Place   
                        <input type="radio" name="gender" value="2nd Place" checked> 2nd Place     
                        <input type="radio" name="gender" value="3rd Place" checked> 3rd Place
                        <input type="radio" name="gender" value="Participants" checked> Participants
                    </div>
                </div>
                 
                 <div id="a" class="form-group" style="display: none;">
                    <label for="text1" class="control-label col-lg-4">Faculty of Management</label>

                    <div class="col-lg-8" >
                        <input type="radio" name="gender" value="1st Place" checked > 1st Place   
                        <input type="radio" name="gender" value="2nd Place" > 2nd Place     
                        <input type="radio" name="gender" value="3rd Place" > 3rd Place
                        <input type="radio" name="gender" value="Participants" > Participants
                    </div>
                </div>

                <div id="a" class="form-group" style="display: none;">
                    <label for="text1" class="control-label col-lg-4">Faculty of Science</label>

                    <div class="col-lg-8" >
                        <input type="radio" name="gender" value="1st Place" checked > 1st Place   
                        <input type="radio" name="gender" value="2nd Place" > 2nd Place     
                        <input type="radio" name="gender" value="3rd Place" > 3rd Place
                        <input type="radio" name="gender" value="Participants" > Participants
                    </div>
                </div>

                <div id="a" class="form-group" style="display: none;">
                    <label for="text1" class="control-label col-lg-4">IIM</label>

                    <div class="col-lg-8" >
                        <input type="radio" name="gender" value="1st Place" checked > 1st Place   
                        <input type="radio" name="gender" value="2nd Place" > 2nd Place     
                        <input type="radio" name="gender" value="3rd Place" > 3rd Place
                        <input type="radio" name="gender" value="Participants" > Participants
                    </div>
                </div>
                <div id="a" class="form-group" style="display: none;">
                    <label for="text1" class="control-label col-lg-4">UCSC</label>

                    <div class="col-lg-8" >
                        <input type="radio" name="gender" value="1st Place" checked > 1st Place   
                        <input type="radio" name="gender" value="2nd Place" > 2nd Place     
                        <input type="radio" name="gender" value="3rd Place" > 3rd Place
                        <input type="radio" name="gender" value="Participants" > Participants
                    </div>
                </div>
                

                <div id="b" class="form-group" style="display: none;">
                <div id=g class="form-group">
                    <label for="text1" class="control-label col-lg-4">Eastern University of Sri Lanka</label>

                    <div class="col-lg-8" >
                        <input type="radio" name="gender" value="1st Place" checked > 1st Place   
                        <input type="radio" name="gender" value="2nd Place" checked> 2nd Place     
                        <input type="radio" name="gender" value="3rd Place" checked> 3rd Place
                        <input type="radio" name="gender" value="Participants" checked> Participants
                    </div>
                </div>

                <div id=h class="form-group">
                    <label for="text1" class="control-label col-lg-4">Rajarata University of Sri Lanka</label>

                    <div class="col-lg-8" >
                        <input type="radio" name="gender" value="1st Place" checked > 1st Place   
                        <input type="radio" name="gender" value="2nd Place" checked> 2nd Place     
                        <input type="radio" name="gender" value="3rd Place" checked> 3rd Place
                        <input type="radio" name="gender" value="Participants" checked> Participants
                    </div>
                </div>
                 
                 <div id=i class="form-group">
                    <label for="text1" class="control-label col-lg-4">Sabaragamuwa University of Sri Lanka</label>

                    <div class="col-lg-8" >
                        <input type="radio" name="gender" value="1st Place" checked > 1st Place   
                        <input type="radio" name="gender" value="2nd Place" > 2nd Place     
                        <input type="radio" name="gender" value="3rd Place" > 3rd Place
                        <input type="radio" name="gender" value="Participants" > Participants
                    </div>
                </div>

                <div id=j class="form-group">
                    <label for="text1" class="control-label col-lg-4">South Eastern University of Sri Lanka</label>

                    <div class="col-lg-8" >
                        <input type="radio" name="gender" value="1st Place" checked > 1st Place   
                        <input type="radio" name="gender" value="2nd Place" > 2nd Place     
                        <input type="radio" name="gender" value="3rd Place" > 3rd Place
                        <input type="radio" name="gender" value="Participants" > Participants
                    </div>
                </div>

                <div id=k class="form-group">
                    <label for="text1" class="control-label col-lg-4">University of Colombo</label>

                    <div class="col-lg-8" >
                        <input type="radio" name="gender" value="1st Place" checked > 1st Place   
                        <input type="radio" name="gender" value="2nd Place" > 2nd Place     
                        <input type="radio" name="gender" value="3rd Place" > 3rd Place
                        <input type="radio" name="gender" value="Participants" > Participants
                    </div>
                </div>
                <div id=l class="form-group">
                    <label for="text1" class="control-label col-lg-4">University of Jaffna</label>

                    <div class="col-lg-8" >
                        <input type="radio" name="gender" value="1st Place" checked > 1st Place   
                        <input type="radio" name="gender" value="2nd Place" > 2nd Place     
                        <input type="radio" name="gender" value="3rd Place" > 3rd Place
                        <input type="radio" name="gender" value="Participants" > Participants
                    </div>
                </div>
                 
                 <div id=m class="form-group">
                    <label for="text1" class="control-label col-lg-4">University of Kelaniya</label>

                    <div class="col-lg-8" >
                        <input type="radio" name="gender" value="1st Place" checked > 1st Place   
                        <input type="radio" name="gender" value="2nd Place" > 2nd Place     
                        <input type="radio" name="gender" value="3rd Place" > 3rd Place
                        <input type="radio" name="gender" value="Participants" > Participants
                    </div>
                </div>

                <div id=n class="form-group">
                    <label for="text1" class="control-label col-lg-4">University of Moratuwa</label>

                    <div class="col-lg-8" >
                        <input type="radio" name="gender" value="1st Place" checked > 1st Place   
                        <input type="radio" name="gender" value="2nd Place" > 2nd Place     
                        <input type="radio" name="gender" value="3rd Place" > 3rd Place
                        <input type="radio" name="gender" value="Participants" > Participants
                    </div>
                </div>
                <div id=o class="form-group">
                    <label for="text1" class="control-label col-lg-4">University of Peradeniya</label>

                    <div class="col-lg-8" >
                        <input type="radio" name="gender" value="1st Place" checked > 1st Place   
                        <input type="radio" name="gender" value="2nd Place" > 2nd Place     
                        <input type="radio" name="gender" value="3rd Place" > 3rd Place
                        <input type="radio" name="gender" value="Participants" > Participants
                    </div>
                </div>

                <div id=p class="form-group">
                    <label for="text1" class="control-label col-lg-4">University of Ruhuna </label>

                    <div class="col-lg-8" >
                        <input type="radio" name="gender" value="1st Place" checked > 1st Place   
                        <input type="radio" name="gender" value="2nd Place" > 2nd Place     
                        <input type="radio" name="gender" value="3rd Place" > 3rd Place
                        <input type="radio" name="gender" value="Participants" > Participants
                    </div>
                </div>

                <div id=q class="form-group">
                    <label for="text1" class="control-label col-lg-4">University of Sri Jayewardenepura</label>

                    <div class="col-lg-8" >
                        <input type="radio" name="gender" value="1st Place" checked > 1st Place   
                        <input type="radio" name="gender" value="2nd Place" > 2nd Place     
                        <input type="radio" name="gender" value="3rd Place" > 3rd Place
                        <input type="radio" name="gender" value="Participants" > Participants
                    </div>
                </div>

                <div id=r class="form-group">
                    <label for="text1" class="control-label col-lg-4">University of the Visual and Performing Arts</label>

                    <div class="col-lg-8" >
                        <input type="radio" name="gender" value="1st Place" checked > 1st Place   
                        <input type="radio" name="gender" value="2nd Place" > 2nd Place     
                        <input type="radio" name="gender" value="3rd Place" > 3rd Place
                        <input type="radio" name="gender" value="Participants" > Participants
                    </div>
                </div>

                <div id=s class="form-group">
                    <label for="text1" class="control-label col-lg-4">Uva Wellassa University</label>

                    <div class="col-lg-8" >
                        <input type="radio" name="gender" value="1st Place" checked > 1st Place   
                        <input type="radio" name="gender" value="2nd Place" > 2nd Place     
                        <input type="radio" name="gender" value="3rd Place" > 3rd Place
                        <input type="radio" name="gender" value="Participants" > Participants
                    </div>
                </div>

                <div id=t class="form-group">
                    <label for="text1" class="control-label col-lg-4">Wayamba University of Sri Lanka</label>

                    <div class="col-lg-8" >
                        <input type="radio" name="gender" value="1st Place" checked > 1st Place   
                        <input type="radio" name="gender" value="2nd Place" > 2nd Place     
                        <input type="radio" name="gender" value="3rd Place" > 3rd Place
                        <input type="radio" name="gender" value="Participants" > Participants
                    </div>
                </div>

                </div>

                <br>
                               <br>
                        <input type="submit" value="Submit"></br>
                        <input type="reset" value="reset">
                   
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

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/full-slider.css" rel="stylesheet">
    <style type="text/css">
        div#menu {
                width: 100%;
                padding-left: 30px;
                padding-top: 12px;
                border: 5px solid white;
                margin: 0;
				}
        table,td,tr{
          border:2px solid black;
        }
        label{
            font-size: 17px;
            font-weight: bold;
            color: black;
        }
        input[type="text"], textarea {
          background: transparent;
          color: black;
          font-weight: bold;
          font-size: 15px;
          height: 100%;
        }
	</style>
	<script type="text/javascript" src="validlogin.js"></script>
</head>
<body>
	<div class="navbar-wrapper">
                <div class="container-fluid">
                    <nav class="navbar navbar-default">
                        <div class="container">
                            <div class="navbar-header">
                                <a href="#" role="button"  class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                                <a class="logo" href="index.html"><img src="img/index.png"></a>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="index.html"><font color="black"><b>Home</b></font></span></a></li>
                                    <li><a href="aboutus.php"><font color="black"><b>About us</b></font></a></li>
                                    <li><a href="login.php"><font color="black"><b>Booking</b></font></a></li>
                                    <li><a href="tourplace.html"><font color="black"><b>Places to Visit</b></font></a></li>
                                    <li><a href="lmap.html"><font color="black"><b>Location Map</b></font></a></li>
                                    <li><a href="enquiry.php"><font color="black"><b>Enquiry</b></font></a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
    </div>

    <div class="container">
        <a href="changepass.php" class="btn btn-default btn-lg" role="button">Change Password</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="viewprofile.php" class="btn btn-default btn-lg disabled" role="button">View Profile</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="changeprofile.php" class="btn btn-default btn-lg" role="button">Change Profile</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="viewbook.php" class="btn btn-default btn-lg" role="button">View Booking</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="res.php" class="btn btn-danger btn-lg" role="button">Reservation</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="signout.php" class="btn btn-default btn-lg" role="button">Log Out</a>
    </div>

          <?php
	  session_start();

    if ( $_SESSION['username'])
    {  
	 $username=$_SESSION['username'];
	  require('connect.php');
			$ex0=mysql_query("SELECT * FROM registration WHERE user='$username'") or die(mysql_error());
							$count=mysql_num_rows($ex0);
				if($count)
				{			    
    			 echo "<br><center><strong><b><font color='white' size='3%'><u>Welcome ".$_SESSION['username']."</u></font></b><br><br></center></strong>";		 
			 	$ex=mysql_query("SELECT * FROM registration WHERE user='$username'") or die(mysql_error());
	       	$count=mysql_num_rows($ex);
				if($count)
				{     	 
					while($row=mysql_fetch_assoc($ex)){
					$first			=$row['first_name'];
					$gender			=$row['gender'];
					$city			=$row['city'];
					$state			=$row['state'];
					$country		=$row['country'];
					$secq			=$row['security_question'];
					$seca			=$row['answer'];
					$phone			=$row['phone'];
					$email			=$row['email'];
					
               echo"<div class='container'>
                        <div class='row'>
                            <div class='col-sm-3'></div>
                            <!-- panel preview -->
                            <div class='col-sm-6'>
                                <div class='panel panel-default'>
                                    <div class='panel-body form-horizontal payment-form'>
                                      
                                        <div class='form-group'>
                                            <label class='col-sm-4 control-label'><center><u><i>Name:</center></label>
                                            <div class='col-sm-8'>
                                                <input class='form-control' type='text' value='$first' onFocus='this.blur()'/>
                                            </div></i></u>
                                        </div>
                                        <div class='form-group'>
                                            <label class='col-sm-4 control-label'><center><u><i>Gender:</center></label>
                                            <div class='col-sm-8'>
                                                <input class='form-control' type='text' value='$gender' onFocus='this.blur()'/>
                                            </div></i></u>
                                        </div>
                                        <div class='form-group'>
                                            <label class='col-sm-4 control-label'><center><u><i>City:</center></label>
                                            <div class='col-sm-8'>
                                                <input class='form-control' type='text' value='$city' onFocus='this.blur()'/>
                                            </div></i></u>
                                        </div>
                                        <div class='form-group'>
                                            <label class='col-sm-4 control-label'><center><u><i>State:</center></label>
                                            <div class='col-sm-8'>
                                                <input class='form-control' type='text' value='$state' onFocus='this.blur()'/>
                                            </div></i></u>
                                        </div>
                                        <div class='form-group'>
                                            <label class='col-sm-4 control-label'><center><u><i>Country:</center></label>
                                            <div class='col-sm-8'>
                                                <input class='form-control' type='text' value='$country' onFocus='this.blur()'/>
                                            </div></i></u>
                                        </div>
                                        <div class='form-group'>
                                            <label class='col-sm-4 control-label'><center><u><i>Phone No.:</center></label>
                                            <div class='col-sm-8'>
                                                <input class='form-control' type='text' value='$phone' onFocus='this.blur()'/>
                                            </div></i></u>
                                        </div>
                                        <div class='form-group'>
                                            <label class='col-sm-4 control-label'><center><u><i>Email:</center></label>
                                            <div class='col-sm-8'>
                                                <input class='form-control' type='text' value='$email' onFocus='this.blur()'/>
                                            </div></i></u>
                                        </div>
                                        <div class='form-group'>
                                            <label class='col-sm-4 control-label'><center><u><i>Security Question:</center></label>
                                            <div class='col-sm-8'>
                                                <input class='form-control' type='text' value='$secq' onFocus='this.blur()'/>
                                            </div></i></u>
                                        </div>
                                        <div class='form-group'>
                                            <label class='col-sm-4 control-label'><center><u><i>Security Answer:</center></label>
                                            <div class='col-sm-8'>
                                                <input class='form-control' type='text' value='$seca' onFocus='this.blur()'/>
                                            </div></i></u>
                                        </div>




                                    </div>
                                </div>
                            </div>
                            <div class='col-sm-3'></div>
                        </div>
                    </div>";

            }
    
			}
			} 
	 else
    {	
        header("Location:login.php");
    }
	}
	?>

		<div class="container">
    	<div class="footer">
      		<hr class="featurette-divider">
			<div class="container">
              <p align="center">
              	<a href="index.html"><font color="black"><b>Home</b></font></a>&nbsp;&nbsp; &nbsp;<font color="white">|</font> &nbsp; &nbsp;&nbsp;
                <a href="aboutus.php"><font color="black"><b>About us</b></font></a>&nbsp;&nbsp; &nbsp;<font color="white">|</font> &nbsp; &nbsp;&nbsp;
                <a href="login.php"><font color="black"><b>Booking</b></font></a>&nbsp;&nbsp; &nbsp;<font color="white">|</font> &nbsp; &nbsp;&nbsp;
                <a href="tourplace.html"><font color="black"><b>Places to Visit</b></font></a>&nbsp;&nbsp; &nbsp;<font color="white">|</font> &nbsp; &nbsp;&nbsp;
                <a href="lmap.html"><font color="black"><b>Location Map</b></font></a>&nbsp;&nbsp; &nbsp;<font color="white">|</font> &nbsp; &nbsp;&nbsp;
                <a href="enquiry.php"><font color="black"><b>Enquiry</b></font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           	  </p>
            </div>
        	<hr class="featurette-divider">   
      		<div class="row featurette">
            <div class="col-md-3">
                  <h3><font color="white"><u>Contact Us:</u></font></h3>
                  <font color="white">SAI SURAJ INTERNATIONAL HOTELS PVT. LTD.</font><br>
                  <font color="white">0824-2478531/32/33</font>
            </div>
            <div class="col-md-9">
                      <div id="menu">
                        <ul id="menu">
                            <li>
                              <a href="gallery.html">
                                <img src="img/hotel.jpg" width="109px"><img src="img/suite_1.jpg" width="175px"><img src="img/lobby.jpg" width="175px"><img src="img/lounge.jpg" width="147px"><img src="img/dine_3.jpg" width="175px">
                              </a>
                            </li>
                        </ul>
                      </div>
            </div>
          	</div>

      		<hr class="featurette-divider">

      		<footer id="footer"style="position: relative;">
			        <div class="social-icon text-center">
			          <a href="https://www.facebook.com/rohit.bhanushali.5437" target="_blank"><font color="white"><i class="fa fa-facebook fa-3x"></i></font></a>
			          <a href="https://twitter.com/samrohit27" target="_blank"><font color="white"><i class="fa fa-twitter fa-3x"></i></font></a>
			          <a href="https://plus.google.com/109611949306916087163/posts?hl=en-GB" target="_blank"><font color="white"><i class="fa fa-google-plus fa-3x"></i></font></a>        
			        </div>
			        <p align="center"><font color="white"><b>&copy; 2015 Company, Inc. All rights Resevered.</b></font></p>
      		</footer>

		</div><!-- div of first footer class -->
    </div><!-- /.container -->	

	<a href="#0" class="cd-top">Top</a>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        $(document).ready(function () {
            $('.dropdown-toggle').dropdown();
        });
    </script>

</body>
</html>
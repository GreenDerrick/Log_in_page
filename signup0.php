<?php
    error_reporting(!E_ALL);
    ?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="assets/bootstrap-3.3.7-dist/css/bootstrap.css">
        <link rel="stylesheet" href="assets/bootstrap-4.1.3-dist/css/bootstrap.css">
        <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.css">
        <link rel="stylesheet" href="assets/fontawesome-free-6.0.0-beta2-desktop/otfs/">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link src="pics/IMG-20211109-WA0007.jpg" rel="shortcut-icon">
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title> Join the society</title>
    </head>
    <body id='body'>
<div class="container">
	<div class="row justify-content-center"id='style' style="margin:100px 0;">
        <div class="col-md-6 sign_back" id='logo'>

            <h3 style="font-family: 'Lobster','cursive';"><em style='color:#fff'>B</em><em style='color:#ff0'>e</em><em style='color:#fff'>c</em><em style='color:#ff0'>o</em><em style='color:#fff'>m</em>e</h3>
            <h3 style="color:#ff;">Part</h3>
            <h3 style="float: ; font-family: curive;">Of</h3>
            <h3 style="color: #ff;">The</h3>
            <h3 style="font-family: 'Lobster','cursive'"><em style="color:#ff0;">S</em><em style="color:#fff;">o</em><em style="color:#ff0;">c</em><em style="color:#fff;">i</em><em style="color:#ff0;">e</em><em style="color:#fff;">t</em><em style="color:#ff0;">y</em></h3>
<!--            <img class="img img-responsive img-fluid" src="pics/IMG-20211109-WA0012.jpg" alt="Bunny Society" width="50%" style="float: right;">-->
        </div>
		<div class="col-md-6 error" style="op:-50%;">
            <?php
                
                if($_GET['error']){
                    echo "<div id='close' data-toggle='close' class='alert-danger alert clos' >";
                    echo $_GET['error'] . " ,please fill in all the fields";
                    
                    echo "
                        <button type='button' class='clos btn n-success' style='background:transparent; border:none;' data-dismiss='close'>&times;</button>
                    ";                   
                    echo "</div>";
                    
                }
            
            ?>
			<form id="" method="post" action="signup.php" autocomplete="off">
                
<!--			<h4 style="color:#fff;">Become Part of the Society</h4><hr/>-->
			  <div class="form-goup edi">

                  <i class="fa fa-user" title="Full name"></i>
			    <input type="text" class="form-control" name="name" id="email"  placeholder="Full name" title="Full name">
			  </div>
                <br/>
			  <div class="form-group edi">
                  <i class="fa fa-user-o" title='Username'></i>
			    <input type="text" class="form-control" name="username" id="username" placeholder="Preferred Username" title='Username'>
                  <br/>
                  <br/>
                  <br/>
                  <small style="font-weight: bolder; color:#ff0; font-size:10px;"><p>You will be referrenced using this username</p></small>
			  </div>
                <br/>
            <div class="form-goup edi">
                  <i class="fa fa-envelope" title="Email"></i>
			    <input type="email" class="form-control" name="email" id="email"  placeholder="Enter email" title="Email Address">
			  </div>
                <br/>
            <div class="form-goup edi">
                  <i class="fa fa-phone" title="Phone Number"></i>
			    <input type="text" class="form-control" name="phone" id="phone"  placeholder="Phone number" title="Phone number">
			  </div>
                <br/>
            <div class="form-goup edi">

                  <i class="fa fa-map-marker" title="Your Location"></i>
			    <input type="email" class="form-control" name="location" id="email"  placeholder="Your current location">
			  </div>
			  <input type="hidden" name="admin_login" value="1">
                <br/>
            <div class="form-goup edi">
                  <i class="fa fa-lock" title="Password"></i>
			    <input type="password" class="form-control" name="pass" id="phone"  placeholder="password" title="Password">
			  </div>
                <br/>
            <div class="form-goup edi">
                  <i class="fa fa-lock" title="Confirm Password"></i>
			    <input type="password" class="form-control" name="pass0" id="phone"  placeholder="Please confirm password" title="Confirm Password">
			  </div>
                <br/>

                <br/>

			  <button style="border-radius: 25px;" type="submit" name="signup" class="btn btn-success login-btn">Submit</button>
			</form>
            <br/>
            
		</div>
	</div>
</div>
 
        
    <script src="assets/bootstrap_theta/js/jsquery.js"></script>
    <script src="assets/bootstrap_theta/jquery-ui-1.9.2.custom/js/jquery-1.8.3.js"></script>
    <script src="assets/bootstrap_theta/js/bootstrap.js"></script>
    </body>
</html>
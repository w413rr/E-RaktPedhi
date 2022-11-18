<?php session_start(); ?>
<?php include('dbcon.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>BDMS - Admin Panel</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/metismenu/dist/metisMenu.min.css">

        
        <link href="css/startmin.css" rel="stylesheet">

        <link rel="stylesheet" href="/bloodbank se/icofont/icofont.min.css">

       
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/fontawesome.min.css" rel="stylesheet" type="text/css">

       
    </head>
    <body>
	
		<nav class="navbar navbar-inverse">
			  <div class="container-fluid">
				<div class="navbar-header">
                <a class="navbar-brand" href="index.php"><i class="icofont-blood-drop"></i>E-RaktPedhi</a>
				</div>

				<ul class="nav navbar-nav navbar-right">
				  
				  <li><a href="userlog/userlogin.php" ><span class="glyphicon glyphicon-user" style="color:#00A10F;"></span> User Login</a></li>
				</ul>
			  </div>
		</nav>
        
        <div class="container">
		 <form action="#" method="post">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><center>Admin Login</center></h3>
                        </div>
                        <div class="panel-body">
                            <form role="form">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Username" name="user" type="text" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="pass" type="password" value="">
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                        </label>
                                    </div>
                                    <!-- Change this to a button or input when using this as a form -->
                                    <input type="submit" class="btn btn-info btn-block" style="border-radius:0%;" title="Log In" name="login" value="Login"></input>
                                </fieldset>
                                
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
			</form>
			
			<?php
				if (isset($_POST['login']))
					{
						$username = mysqli_real_escape_string($con, $_POST['user']);
						$password = mysqli_real_escape_string($con, $_POST['pass']);
						
						$query 		= mysqli_query($con, "SELECT * FROM admin WHERE  password='$password' and username='$username'");
						$row		= mysqli_fetch_array($query);
						$num_row 	= mysqli_num_rows($query);
						
						if ($num_row > 0) 
							{			
								$_SESSION['user_id']=$row['user_id'];
								header('location:pages/index.php');
								
							}
						else
							{
								echo ' <div class="row"> <div class="col-md-4 col-md-offset-4">
								<div class="alert alert-danger alert-dismissible">
                                        Username & Password didnot match! Try Again.
                                    </div> </div> </div> ';
									
									
							}
					}
			  ?>
			
        </div>

        


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js">

       
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.5.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/metisMenu/3.0.6/metisMenu.min.js">

      
        <script src="js/startmin.js"></script>
		
		

    </body>

    <!-- Footer -->
	<footer class="page-footer font-small special-color-dark pt-4">
		<!-- Copyright -->

		<!-- Copyright -->

	</footer>
<!-- Footer -->
    
</html>
  
  

<?php
	include "book-data.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Chapter 8</title>

   <!-- Bootstrap core CSS -->
   <link href="bootstrap3_defaultTheme/dist/css/bootstrap.css" rel="stylesheet">

   <!-- Custom styles for this template -->
   <link href="chapter08-project01.css" rel="stylesheet">

   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!--[if lt IE 9]>
   <script src="bootstrap3_defaultTheme/assets/js/html5shiv.js"></script>
   <script src="bootstrap3_defaultTheme/assets/js/respond.min.js"></script>
   <![endif]-->
</head>

<body>

<div class="container">
   <div class="row">
      <div class="col-md-3">
      </div>
      <div class="col-md-6">
         <div id="login">
            <div class="page-header">
               <h2>Login</h2> 
            </div>
            <form role="form">
              <div class="form-group <?php if ($email != ($_GET['email']) || ($_GET['email']) == '') {echo 'has-error';} ?>">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" value="">
				<?php if (($_GET['email']) == '') { ?>
				<p class="help-block">Enter an email</p>
				<?php } else if ($email != ($_GET['email']))  {?>
				<p class="help-block">Enter correct email</p>
				<?php } ?>
              </div>
              <div class="form-group <?php if ($password != ($_GET['password']) || ($_GET['password']) == '') {echo 'has-error';} ?>">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password" >
				<?php if (($_GET['password']) == '') { ?>
                <p class="help-block">Enter a password</p>
				<?php } else if ($email != ($_GET['password']))  {?>
				<p class="help-block">Enter correct password</p>
				<?php } ?>				
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Server</label>
                <select name="server" class="form-control">
					<?php
					for ($i = 1;$i < 6; $i++){
						echo "<option>Server " . $i . "</option>";
					}
					?>
                </select>             
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>  
         </div>
      </div>
      <div class="col-md-3">
      </div>
   </div>  
</div>  <!-- end container -->

 <!-- Bootstrap core JavaScript
 ================================================== -->
 <!-- Placed at the end of the document so the pages load faster -->
 <script src="bootstrap3_defaultTheme/assets/js/jquery.js"></script>
 <script src="bootstrap3_defaultTheme/dist/js/bootstrap.min.js"></script>    
</body>
</html>

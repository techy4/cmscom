<?php
    require('loginAction.php');
    $random 			= rand(100,999);
	$_SESSION['rand'] 	= $random;
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Login Page</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width">

<link href="css/vendor/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/vendor/bootstrap-glyphicons.css" rel="stylesheet" type="text/css">
<link href="css/generic/login.css" rel="stylesheet" type="text/css">
<!--[if IE 7]><link href="css/generic/ie.css" rel="stylesheet" type="text/css"><![endif]-->
<script src="js/vendor/jquery-1.9.1.min.js"></script>
<script src="js/vendor/jquery.validate.min.js"></script>
<script src="js/vendor/md5.js"></script>
<script type="text/javascript">
    var randomNum= <?php echo $random;?>;   
</script>
<script src="js/custom/login.js"></script>
</head>
<body>
<div class="single-widget-container">
<div class="login-widget">
<h2>ABC Enterprise</h2>
<div class="widget"><?php echo $out_msg?>
    <div class="header"><h4>Login to your account</h4></div>
        <div class="body">
            <form class="no-margin" id="loginForm" action="" method="post">
                <fieldset>
                    <div class="control-group no-margin">
                        <label class="control-label" for="user">User ID</label>
                        <div class="control">
                            <div class="input-prepend input-padding-increased">
                                <span class="add-on">
                                    <i class="icon-white icon-user"></i>
                                </span>
                              <input id="loginId" name="loginId" required type="text" placeholder="Enter User ID">
                            </div>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="password">Password</label>
                        <div class="control">
                            <div class="input-prepend input-padding-increased">
                                <span class="add-on">
                                    <i class="icon-white  icon-lock"></i>
                                </span>
                              <input id="password" name="password" required type="password" placeholder="Enter Password">
                            </div>
                        </div>
                    </div>
                </fieldset>
                <div class="form-actions">
                    <button type="submit" name="btnLogin" class="btn btn-block btn-large btn-success">                       
                        Sign In
                    </button>
                    <div class="forgot"><a class="forgot" href="#">Forgot Username or Password?</a></div>
                </div>
            </form>
        </div>
</div>
        
  </div>
 </div>
</body>
</html>
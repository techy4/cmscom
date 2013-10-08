<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title></title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width">
<!--framework.css icluded framework related css files -->
<link rel="stylesheet" href="../css/generic/framework.css">
<!--Page Level Variable Declaration-->
<script>
    var pageConf = {
        "breadCrumbs": [
        {
            "name": "Home",
            "url": "#",
            "isActive": "true"
        },
        {
            "name": "CMS"
        },
        {
            "name": "Manage Contact"
        }
    ],
		
        "tabs": [
        {
            "name": "Add",
            "url": "#",
            "isActive": "true"
        },
        {
            "name": "View",
            "url": "ViewContact.php"
        }
    ],        
        
        "header": {
            "text": "Add  Contact Details",
            //"iconClass": "glyphicon-hdd"
        }
    }

</script>
</head>
<body>
<!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
<!-- Header -->
<?php include('../includes/header.php');  ?>
<!--end Header -->
<div class="container">
  <!-- sidebar -->
  <div id="sidebar-nav">
    <?php include('../includes/leftMenu.php');  ?>
  </div>
  <!-- end sidebar -->
  <!-- main container -->
  <div class="content  topSpace">
    <div class="container-fluid">
     
      <!-- Page Body -->
      <!-- Content Header -->
       <?php include('../includes/Contentheader.php');  ?>
       
      <!-- end Content Header -->
      <div class="padded">
                    <div class="form-page">
                        <div class="row-fluid form-wrapper">
                            <!-- left column -->
                            <div>
                                <form runat="server">
                                <div class="form-padded">
                                    <div class="field-box">
                                        <label>Company / Name</label>
                                       <input type="text" />
                                    </div>
                                   <div class="field-box">
                                        <label>Street</label>
                                        <input type="text" />
                                    </div>
                                    <div class="field-box">
                                        <label>District</label>
                                        <input type="text" />
                                    </div>
                                    <div class="field-box">
                                        <label>State</label>
                                        <input type="text" />
                                    </div>
                                    <div class="field-box">
                                        <label>Country</label>
                                        <input type="text" />
                                    </div>
                                    <div class="field-box">
                                        <label>PIN No.</label>
                                        <input type="text" />
                                    </div>
                                    <div class="field-box">
                                        <label>Latitude</label>
                                        <input type="text" />
                                    </div>
                                    <div class="field-box">
                                        <label>Mobile No.</label>
                                        <input type="text" />
                                    </div>
                                    <div class="field-box">
                                        <label>Phone No.</label>
                                       <input type="text" />
                                    </div>
                                    <div class="field-box">
                                        <label>eMail ID</label>
                                       <input type="text" />
                                    </div>
                                    <div class="field-box noborder">
                                        <label>Website</label>
                                       <input type="text" />
                                    </div>
                                </div>
                                <div class="formActions">
                                    <a href="#" class="btn btn-success">Submit</a> <a href="#" class="btn btn-danger">Cancel</a>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
      </div>
      <!-- end Page Body -->
    </div>
  </div>
  <!--end  main container -->
</div>
<!-- /container -->
<!-- Footer -->
<?php include('../includes/footer.php');  ?>
<!-- end Footer -->
<!-- framework.js icluded framework related js files -->
<script src="../js/generic/framework.js"></script>

</body>
</html>
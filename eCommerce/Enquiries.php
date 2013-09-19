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
            "name": "Dashboard",
            "url": "#",
            "isActive": "true"
        },
        {
            "name": "CMS"
        },
        {
            "name": "Received Enquiries"
        }
    ],
        
        
        "header": {
            "text": "Enquiries",
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
        <table class="table table-normal">
          <tr>
            <th width="35">Sl. #</th>
            <th width="150">Person Name </th>
            <th width="110">Address</th>
            <th width="90">Phone No.</th>
            <th width="90">Category</th>
            <th width="90">Sub Category</th>
            <th width="70">Item </th>
            <th width="70">Quantity</th>
            <th>Message</th>
            <th width="80">Action</th>
          </tr>
          <tr>
            <td>1</td>
            <td>Category 1</td>
            <td>Description</td>
            <td>&nbsp;</td>
            <td>Category 1</td>
            <td>Sub Category 1</td>
            <td>Item 1</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><a href="#" class="btn btn-mini btn-danger"><i class="icon-white icon-tag"></i></a> <a href="#" class="btn btn-mini btn-success"><i class="icon-white icon-ok"></i></a></td>
          </tr>
          <tr>
            <td>2</td>
            <td>Category 2</td>
            <td>Description</td>
            <td>&nbsp;</td>
            <td>Category 2</td>
            <td>Sub Category 2</td>
            <td>Item 2</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><a href="#" class="btn btn-mini btn-danger"><i class="icon-white icon-tag"></i></a> <a href="#" class="btn btn-mini btn-success"><i class="icon-white icon-ok"></i></a></td>
          </tr>
          <tr>
            <td>3</td>
            <td>Category 3</td>
            <td>Description</td>
            <td>&nbsp;</td>
            <td>Category 3</td>
            <td>Sub Category 3</td>
            <td>Item 3</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><a href="#" class="btn btn-mini btn-danger"><i class="icon-white icon-tag"></i></a> <a href="#" class="btn btn-mini btn-success"><i class="icon-white icon-ok"></i></a></td>
          </tr>
          <tr>
            <td>4</td>
            <td>Category 4</td>
            <td>Description</td>
            <td>&nbsp;</td>
            <td>Category 4</td>
            <td>Sub Category 4</td>
            <td>Item 4</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><a href="#" class="btn btn-mini btn-danger"><i class="icon-white icon-tag"></i></a> <a href="#" class="btn btn-mini btn-success"><i class="icon-white icon-ok"></i></a></td>
          </tr>
        </table>
       
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
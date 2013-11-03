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
            "name": "View Feedback"
        }
    ],
		
        "tabs": [
        {
            "name": "Configure eMail",
            "url": "MngFeedback.php"
        },
        {
            "name": "View Feedback",
            "url": "#",
            "isActive": "true"
        }
    ],        
        
        "header": {
            "text": "View Feedbacks",
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
                        <div class="row-fluid form-wrapper srchArea">
                            <b>From :</b>
                            <input type="text" value=""  data-date="" data-date-format="dd-mm-yyyy" class="datepicker" />                           
                            &nbsp;&nbsp;&nbsp;
                            <b>To :</b>
                             <input type="text" value=""  data-date="" data-date-format="dd-mm-yyyy" class="datepicker" /> 
                            <a href="#" class="btn btn-success">Search</a>                       
                        </div>
                    </div>
      
                    <table class="table table-normal">
          <tr>
            <th width="25"><input type="checkbox" /></th>
            <th width="100">Date</th>
            <th width="200">Company / Name</th>
            <th width="60">Address</th>
            <th width="100">Phone No.</th>
            <th width="100">eMail ID</th>
            <th>Message</th>
            </tr>
          <tr>
            <td><input type="checkbox" /></td>
            <td>15-Sep-2013</td>
            <td>Santosh Kumar Panda</td>
            <td><a href="javascript:openModal({'url':'AddressDetails.php','headText':'Address Details'});" class="btn btn-small"><i class="icon-map-marker"></i></a></td>
            <td>9861266074</td>
            <td>info@gmail.com</td>
            <td><a href="javascript:openModal({'url':'FeedMessage.php','headText':'Feedback Message Details'});" class="btn btn-small"><i class="icon-resize-small"></i></a></td>
            </tr>
          <tr>
            <td><input type="checkbox" /></td>
            <td>15-Sep-2013</td>
            <td>Rasmikant Das</td>
            <td><a href="#" class="btn btn-small"><i class="icon-map-marker"></i></a></td>
            <td>9861266074</td>
            <td>info@gmail.com</td>
            <td><a href="#" class="btn btn-small"><i class="icon-resize-small"></i></a></td>
            </tr>
          <tr>
            <td><input type="checkbox" /></td>
            <td>15-Sep-2013</td>
            <td>Zafir Ahmed</td>
            <td><a href="#" class="btn btn-small"><i class="icon-map-marker"></i></a></td>
            <td>9861266074</td>
            <td>info@gmail.com</td>
            <td><a href="#" class="btn btn-small"><i class="icon-resize-small"></i></a></td>
            </tr>
          <tr>
            <td><input type="checkbox" /></td>
            <td>15-Sep-2013</td>
            <td>XYZ</td>
            <td><a href="#" class="btn btn-small"><i class="icon-map-marker"></i></a></td>
            <td>9861266074</td>
            <td>info@gmail.com</td>
            <td><a href="#" class="btn btn-small"><i class="icon-resize-small"></i></a></td>
            </tr>
        </table>
        <div class="tbl-btm-bar"><a href="#" class="btn btn-danger">Delete</a></div>
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
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
<link rel="stylesheet" href="../css/generic/dashboard.css">
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
            "name": "Manage Contents"
        }
    ],
        
        
        "header": {
            "text": "Add Contents",
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
                            <b>Select Link :</b>
                            <select name="">
                            	<option>-- Select --</option>
                                <option>Category 1</option>
                            </select>
                            
                             <select name="">
                            	<option>-- Select --</option>
                                <option>Category 2</option>
                            </select>
                            
                             <select name="">
                            	<option>-- Select --</option>
                                <option>Category 3</option>
                            </select>
                            <a href="#" class="btn btn-success">Search</a>                       
                        </div>
                    </div>
                    
                    
      <div class="row-fluid">
      	<!-- start Widget Box 1  -->
           <div class="span6">
            <div class="widget">
              <div class="widget-head purple">
                <div class="pull-left">About Us</div>                
                <div class="clearfix"></div>
              </div>
              <div class="widget-content purple">
                	<div class="padd">
                    	<div class="nodata">No Data Available</div>
                    </div>
              </div>
              <div class="modal-footer purple"><a href="#" class="btn btn-small"><i class="icon-remove"></i> Remove Link</a> <a href="AddEditContent.php" class="btn btn-small"><i class="icon-edit"></i> Manage Content</a></div>
            </div>
          </div>
          <!-- end Widget Box 1  -->
          <!-- start Widget Box 2  -->
           <div class="span6">
            <div class="widget">
              <div class="widget-head blue">
                <div class="pull-left">eCommerce</div> 
 <div class="clearfix"></div>
              </div>
              <div class="widget-content blue">
                	<div>
                    	<div class="box-content box-statistic">
                         <span class="text-error">50</span> Product images uploaded recently
                        </div>
                        <div class="box-content box-statistic">
                        <span class="text-error">30</span> users visitied in October
                        </div>
                        <div class="box-content box-statistic">
                        <span class="text-error">25</span> queries received in october
                        </div>
                    </div>
              </div>
              <div class="modal-footer blue"><a href="#" class="btn btn-small"><i class="icon-remove"></i> Remove Link</a> <a href="../eCommerce/AddCategory.php" class="btn btn-small"><i class="icon-edit"></i> Manage Content</a></div>
            </div>
          </div>
          <!-- end Widget Box 2  -->
      </div>
      
      <div class="row-fluid">
      	<!-- start Widget Box 3  -->
           <div class="span6">
            <div class="widget">
              <div class="widget-head orange">
                <div class="pull-left">Feedback</div>                
                <div class="clearfix"></div>
              </div>
              <div class="widget-content orange">
                        <div class="box-content box-statistic">
                          <span class="text-error">40</span> Feedbacks recently
                        </div>
              </div>
              <div class="modal-footer orange"><a href="#" class="btn btn-small"><i class="icon-remove"></i> Remove Link</a> <a href="../Feedback/MngFeedback.php" class="btn btn-small"><i class="icon-edit"></i> Manage Feedback</a></div>
            </div>
          </div>
          <!-- end Widget Box 3  -->
          <!-- start Widget Box 4  -->
           <div class="span6">
            <div class="widget">
              <div class="widget-head red">
                <div class="pull-left">Contact Us</div>                
                <div class="clearfix"></div>
              </div>
              <div class="widget-content red">
                	<div class="padd">
                       <span class="text-error">1</span> contact address added
                    </div>
              </div>
              <div class="modal-footer red"><a href="#" class="btn btn-small"><i class="icon-remove"></i> Remove Lilnk</a> <a href="../Contact/ManageContact.php" class="btn btn-small"><i class="icon-edit"></i> Manage Content</a></div>
            </div>
          </div>
          <!-- end Widget Box 4  -->
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
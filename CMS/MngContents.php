<?php 
 require('MngContents_CB.php');
?>
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
        <table class="table table-normal">
          <tr>
            <th width="35">Sl. #</th>
            <th width="180">Link Name</th>
            <th width="70">Link Type</th>
            <th width="120">Function / URL</th>
            <th>Link Target</th>
            <th width="100">Add Content</th>
          </tr>
          <?php 
		
		while($row= mysqli_fetch_array($result))
				{
				$intCount++;
		  ?>
          <tr>
           <td><?php echo  $row["INT_ID"] ?></td>
            <td><?php echo  $row["LINK_NAME"] ?></td>
            <td><?php echo  $row["VCH_LINK_TYPE"] ?></td>
            <td><?php echo $row["FUNCTION_NAME_URL"]?>            
            </td>
            <td><?php echo  $row["VCH_LINK_TARGET"] ?></td>
            <td><a href="javascript:openModal({'url':'<?php echo  $row["VCH_FUN_PAGE"] ?>','headText':'Add Content'});" class="btn btn-mini"><i class="icon-plus"><?php echo  $row["INT_ID"] ?></i></a></td>
          </tr>
          <?php 
		   }
		  ?>
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
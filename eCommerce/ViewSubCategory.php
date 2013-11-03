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
            "name": "Manage Sub Category"
        }
    ],
		"buttons": [
        {
            "name": "Add Category",
            "url": "AddCategory.php"            
        },
        {
            "name": "Add Sub Category",
            "url": "#",
			"isActive": "true"
        },
        {
            "name": "Add Item",
            "url": "AddItems.php"
        }
    ],
        
        "tabs": [
        {
            "name": "Add",
            "url": "AddSubCategory.php"           
        },
        {
            "name": "View",
             "isActive": "true",
            "url": "#"
        }
    ],
        "header": {
            "text": "View Sub Category",
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
                            <b>Select Category :</b>
                            <select>
                                <option selected="selected">-Select-</option>
                                <option>Category 1</option>
                                <option>Category 2</option>
                                <option>Category 3</option>
                            </select>                           
                        </div>
                    </div>
        <table class="table table-normal">
          <tr>
            <th width="25"><input type="checkbox" /></th>
            <th width="35">Sl. #</th>
            <th width="180">Sub Category  Name</th>
            <th>Description</th>
            <th width="40">Edit</th>
          </tr>
          <tr>
            <td><input type="checkbox" /></td>
            <td>1</td>
            <td>Sub Category 1</td>
            <td>Description</td>
            <td><a href="AddSubCategory.php" class="btn btn-mini"><i class="icon-edit"></i></a></td>
          </tr>
          <tr>
            <td><input type="checkbox" /></td>
            <td>2</td>
            <td>Sub Category 2</td>
            <td>Description</td>
            <td><a href="AddSubCategory.php" class="btn btn-mini"><i class="icon-edit"></i></a></td>
          </tr>
          <tr>
            <td><input type="checkbox" /></td>
            <td>3</td>
            <td>Sub Category 3</td>
            <td>Description</td>
            <td><a href="AddSubCategory.php" class="btn btn-mini"><i class="icon-edit"></i></a></td>
          </tr>
          <tr>
            <td><input type="checkbox" /></td>
            <td>4</td>
            <td>Sub Category 4</td>
            <td>Description</td>
            <td><a href="AddSubCategory.php" class="btn btn-mini"><i class="icon-edit"></i></a></td>
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
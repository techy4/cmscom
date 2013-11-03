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
<!--modernizr-2.6.2-respond-1.1.0.min.js is for conditional css and javascript-->
<script src="../js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
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
            "name": "eCommerce"
        },
        {
            "name": "Manage Items"
        }
    ],
		"buttons": [
        {
            "name": "Add Category",
            "url": "AddCategory.php"            
        },
        {
            "name": "Add Sub Category",
            "url": "AddSubCategory.php"
        },
        {
            "name": "Add Item",
            "url": "#",
			"isActive": "true"
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
            "url": "ViewItems.php"
        }
    ],
        "header": {
            "text": "Add Items",
            //"iconClass": "glyphicon-hdd"
        },
        "options": {
            "star": "true"
        }
    }

</script>
</head>
<body>
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
                    <label>Category Name</label>
                     <div class="ui-select">
                      <select>
                        <option selected>-- Select --</option>
                        <option>Category 1</option>
                        <option>Category 2</option>
                        <option>Category 3</option>
                      </select>
                    </div>
                  </div>
                  <div class="field-box">
                    <label>Sub Category Name</label>
                     <div class="ui-select">
                      <select>
                        <option selected>-- Select --</option>
                        <option>Sub Category 1</option>
                        <option>Sub Category 2</option>
                        <option>Sub Category 3</option>
                      </select>
                    </div>
                  </div>
                   <div class="field-box">
                    <label>Enter Item Name</label>
                    <input type="text" />
                  </div>
                  <div class="field-box">
                    <label>Enter Item Price</label>
                    <input type="text" />
                  </div>
                  <div class="field-box">
                    <label>Enter Offer Discount</label>
                    <input type="text" />
                  </div>
                  <div class="field-box">
                    <label>Upload Photo</label>
                    <label class="radio">
                                        <input type="radio" name="optionsRadios" id="single">
                                        Single
                                    </label>
                                    <label class="radio">
                                        <input type="radio" name="optionsRadios" id="multiple">
                                        Multiple
                                  </label>
                  </div>
                  <div class="field-box" id="uploadPhoto">
                  <ul>
                  	<li><b>1</b> <input name="" type="file"> <label>Caption</label> <input type="text" /></li>
                    <li><b>2</b> <input name="" type="file"> <label>Caption</label> <input type="text" /></li>
                    <li><b>3</b> <input name="" type="file"> <label>Caption</label> <input type="text" /></li>
                    <li><b>4</b> <input name="" type="file"> <label>Caption</label> <input type="text" /></li>
                    <li><b>5</b> <input name="" type="file"> <label>Caption</label> <input type="text" /></li>
                   </ul> 
                  </div>
                  <div class="field-box noborder">
                  <label>Description</label>
                   <textarea  rows="4" style="width:300px;"></textarea>
                 </div>
                </div>
                <div class="formActions"> <a href="#" class="btn btn-success">Submit</a> <a href="#" class="btn btn-danger">Cancel</a> </div>
              </form>
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
<!-- wysihtml5-0.3.0.js for Mange Text Editor -->
<script src="../js/vendor/wysihtml5-0.3.0.js"></script>
<!-- framework.js icluded framework related js files -->
<script src="../js/generic/framework.js"></script>
<!-- bootstrap-wysihtml5-0.0.2.js for Mange Text Editor -->
<script src="../js/vendor/bootstrap-wysihtml5-0.0.2.js"></script>
<script type="text/javascript">
        $(function () {
          $("#uploadPhoto ul li").hide();
		  $("#single").click(function(){
			$("#uploadPhoto ul li").hide();
			$("#uploadPhoto ul li").first().show();
			return false
			})
		 $("#multiple").click(function(){
			$("#uploadPhoto ul li").show();			
			})
        });
    </script>
</body>
</html>
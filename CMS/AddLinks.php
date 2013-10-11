<?php
    require('AddLinks_CB.php');   
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
<!--modernizr-2.6.2-respond-1.1.0.min.js is for conditional css and javascript-->
<script src="../js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<script src="../js/vendor/jquery-1.9.1.min.js"></script>

<script src="../js/custom/AddLinks.js"></script>

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
            "name": "Manage Links"
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
            "url": "ViewLinks.php"
        }
    ],
        "header": {
            "text": "Add Links",
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
              <form id="AddLinksForm" action="" method="post">
                <div class="form-padded">
                <?php echo $result?>
                  <div class="field-box" id="divdwnLinkLevel">
                    <label> Link Level</label>
                    <div class="ui-select">
                      <select name='dwnLinkLevel' id="dwnLinkLevel">
                        <option selected>-- Select --</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                      </select>
                    </div>
                  </div>
                  
                  <div class="field-box">
                    <label>Link Name</label>
                    <input type="text" name="txtLinkname" />
                  </div>
                  <div class="field-box">
                  <label>Is page need content</label>
                  <label class="radio">
                                        <input type="radio" name="optionContent" checked> 
                                        Yes
                                    </label>
                                    <label class="radio">
                                        <input type="radio" name="optionContent">
                                        No
                                  </label>
                 </div>
                  
                   <div class="field-box">
                   <label>Link Type</label>
                                    <label class="radio">
                                        <input type="radio" name="optionsLinkType" id="internal">
                                        Internal
                                    </label>
                                    <label class="radio">
                                        <input type="radio" name="optionsLinkType" id="external">
                                        External
                                  </label>
                              </div>           
                  <div class="field-box">
                    <label> Link Target</label>
                    <div class="ui-select">
                      <select name="dwnLinkTarget">
                        <option selected>-- Select --</option>
                        <option>New Window</option>
                        <option>Same Window</option>
                        <option>Pop Up</option>
                      </select>
                    </div>
                  </div>
                  <div class="field-box" id="internalField">
                    <label> Function Name</label>
                     <div class="ui-select">
                      <select name="dwnFunctionName">
                        <option selected>-- Select --</option>
                         <option>CMS</option>
                         <option>Feedback</option>
                         <option>Contact Us</option>
                      </select>
                    </div>
                  </div>
                  <div class="field-box noborder" id="externalField">
                    <label> Link URL</label>
                    <input type="text" name="txtLinkUrl" />
                  </div>
                  
                </div>
                <div class="formActions"> <input type="Submit" value="Submit" name="btnSubmit" class="btn btn-success"> <a href="#" class="btn btn-danger">Cancel</a> </div>
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
          $("#internalField").hide();
		  $("#externalField").hide();
		  $("#internal").click(function(){
			$("#internalField").show();
			$("#externalField").hide();
			})
		 $("#external").click(function(){
			$("#externalField").show();	
			$("#internalField").hide();
			})
        });
    </script>
</body>
</html>
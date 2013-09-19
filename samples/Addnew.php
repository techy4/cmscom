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
<!--forms.css icluded form related css files-->
<link rel="stylesheet" href="../css/generic/forms.css">
<!--bootstrap-wysihtml5.css for text editor-->
<link href="../css/vendor/bootstrap-wysihtml5.css" type="text/css" rel="stylesheet">
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
            "name": "Add"
        },
        {
            "name": "Add Page"
        }
    ],
        "buttons": [
        {
            "name": "MyBut",
            "url": "google.com",
            "isActive": "true"
        },
        {
            "name": "button2",
            "url": "#"
        },
        {
            "name": "button3",
            "url": "#"
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
            "url": "Viewnew.php"
        }
    ],
        "header": {
            "text": "Add Page",
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
                                        <label>
                                            Company Name</label>
                                        <label>
                                            ABC Mining Ltd.</label>
                                    </div>
                                    <div class="field-box">
                                        <label>
                                            Unit Name</label>
                                        <input type="text" />
                                    </div>
                                    <div class="field-box">
                                        <label>Production Material</label>
                                        <div class="ui-select">
                                  <select>
                                      <option selected>Dropdown</option>
                                      <option>Custom selects</option>
                                      <option>Pure css styles</option>
                                  </select>
                              </div>
                                    </div>
                                    <div class="field-box">
                                        <label>
                                            Location</label>
                                        <input type="text" />
                                    </div>
                                    <div class="field-box">
                                        <label>
                                            Office Address</label>
                                        <textarea rows="4"></textarea>
                                    </div>
                                    <div class="field-box">
                                        <label>
                                            Contact Person</label>
                                        <input type="text" />
                                    </div>
                                    <div class="field-box">
                                        <label>
                                            Telephone Number</label>
                                        <input type="text" />
                                    </div>
                                    <div class="field-box">
                                        <label>
                                            Mobile Number</label>
                                        <input type="text" />
                                    </div>
                                    <div class="field-box">
                                        <label>
                                            Email</label>
                                        <input type="text" />
                                    </div>
                                    <div class="field-box noborder">
                                        <label>
                                            Description:</label>
                                        <textarea rows="4"></textarea>
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

            // wysihtml5 plugin on textarea
            $(".wysihtml5").wysihtml5({
                "font-styles": false
            });
        });
    </script>
</body>
</html>
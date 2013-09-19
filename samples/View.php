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
            "name": "View"
        },
        {
            "name": "View Page"
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
            "url": "Add.php"           
        },
        {
            "name": "View",
             "isActive": "true",
            "url": "#"
        }
    ],
        "header": {
            "text": "View Page",
            "iconClass": "glyphicon-hdd"
        },
        "options": {
            "star": "true"
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
            <th width="25"><input type="checkbox" /></th>
            <th>Task</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
            <th>Done</th>
            <th style="width: 40px"></th>
          </tr>
          <tr>
            <td><input type="checkbox" /></td>
            <td><a href="#">Doing the dew</a></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><b>0%</b></td>
            <td><div class="btn-group">
                <button class="btn btn-mini dropdown-toggle" data-toggle="dropdown"><i class="icon-cog"></i></button>
                <ul class="dropdown-menu pull-right">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div></td>
          </tr>
          <tr>
            <td><input type="checkbox" /></td>
            <td><a href="#">Doing some stuff</a></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><b>14%</b></td>
            <td><div class="btn-group">
                <button class="btn btn-mini dropdown-toggle" data-toggle="dropdown"><i class="icon-cog"></i></button>
                <ul class="dropdown-menu pull-right">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div></td>
          </tr>
          <tr>
            <td><input type="checkbox" /></td>
            <td><a href="#">Build the prototype</a></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><b>100%</b></td>
            <td><div class="btn-group">
                <button class="btn btn-mini dropdown-toggle" data-toggle="dropdown"><i class="icon-cog"></i></button>
                <ul class="dropdown-menu pull-right">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div></td>
          </tr>
          <tr>
            <td><input type="checkbox" /></td>
            <td><a href="#">Fixing bugs</a></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><b>28%</b></td>
            <td><div class="btn-group">
                <button class="btn btn-mini dropdown-toggle" data-toggle="dropdown"><i class="icon-cog"></i></button>
                <ul class="dropdown-menu pull-right">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div></td>
          </tr>
        </table>
        <div class="pagination  pull-right">
          <ul>
            <li><a href="#">Prev</a></li>
            <li><a href="#" class="active">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">Next</a></li>
          </ul>
        </div>
        <div class="clearfix"></div>
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
<!-- forms.js icluded form related js files -->
<script src="../js/generic/forms.js"></script>
<script type="text/javascript">
        $(function () {
            // add uniform plugin styles to html elements
            $("input:checkbox, input:radio").uniform();
        });
</script>
</body>
</html>
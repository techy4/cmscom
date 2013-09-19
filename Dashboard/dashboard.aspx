<%@ Page Language="VB" AutoEventWireup="false" CodeFile="dashboard.aspx.vb" Inherits="includes_dashboard" %>
<%@ Register src="~/includes/leftMenu.ascx" tagname="leftMenu" tagprefix="uc1" %>
<%@ Register src="~/includes/header.ascx" tagname="header" tagprefix="uc2" %>
<%@ Register src="~/includes/footer.ascx" tagname="footer" tagprefix="uc4" %>
<!DOCTYPE html>
<html>
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
<!--modernizr-2.6.2-respond-1.1.0.min.js is for conditional css and javascript-->
<script src="../js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>
<!-- Header -->    
<uc2:header ID="header1" runat="server" />
<!--end Header -->
<div class="container">
    <!-- sidebar -->    
  <div id="sidebar-nav">
    <uc1:leftMenu ID="leftMenu1" runat="server" />      
  </div>
  <!-- end sidebar -->
    
  <!-- main container -->
<div class="content  topSpace">
   	  <div class="container-fluid">  
        <!-- Page Body -->
              <div class="padded welcomeNote">
                  Welcome Administrator          
              </div>
        <!-- end Page Body -->
      </div>
  </div>
  <!--end  main container -->
    
    
  </div>
  <!-- /container -->
  <!-- Footer -->
     <uc4:footer ID="footer1" runat="server" />
  <!-- end Footer -->
<script src="../js/vendor/jquery-2.0.0.min.js"></script>
<script src="../js/vendor/bootstrap.min.js"></script>
<script src="../js/generic/plugins.js"></script>
<script src="../js/generic/gen.js"></script>
</body>
</html>


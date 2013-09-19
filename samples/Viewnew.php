<!DOCTYPE html>
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
                            <b>Select Unit :</b>
                            <select>
                                <option selected="selected">-Select-</option>
                                <option>Unit1 Joda</option>
                                <option>Unit2 Koira</option>
                                <option>Unit3 Jajpur</option>
                            </select>
                            <b>Select Component :</b>
                            <select>
                                <option selected="selected">-Select-</option>
                                <option>Surface Water</option>
                                <option>Ground Water</option>
                                <option>Sediment</option>
                                <option>Soil</option>
                                <option>Air</option>
                                <option>Noise</option>
                                <option>Traffic</option>
                            </select>
                        </div>
                    </div>
                    <table class="table table-normal">
                        <tr>
                            <th width="25">
                                <input type="checkbox" />
                            </th>
                            <th width="40">
                                Sl. #
                            </th>
                            <th width="150">
                                Unit Name
                            </th>
                            <th width="150">
                                Station Name
                            </th>
                            <th width="150">
                                Components
                            </th>
                            <th width="100">
                                Latitude
                            </th>
                            <th>
                                Longitude
                            </th>
                            <th>
                                Location
                            </th>
                            <th>
                                Address
                            </th>
                            <th style="width: 40px">
                                Edit
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" />
                            </td>
                            <td>
                                1
                            </td>
                            <td>
                                Unit1 Joda
                            </td>
                            <td>
                                <a href="javascript:openModal({'url':'MonitoringStationModal.aspx','headText':'Monitoring Station Details'});">
                                    <strong>Arakhpal</strong></a>
                            </td>
                            <td>
                                <div>
                                    Surface Water,
                                    <br />
                                    Ground Water,
                                    <br />
                                    Air
                                </div>
                            </td>
                            <td>
                                12343456
                            </td>
                            <td>
                                65678764
                            </td>
                            <td>
                                Duburi
                            </td>
                            <td>
                                At/Po:-Duburi
                            </td>
                            <td>
                                <a href="AddMonitoringStations.aspx" class="btn btn-mini"><i class="glyphicon glyphicon-edit">
                                </i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" />
                            </td>
                            <td>
                                2
                            </td>
                            <td>
                                Unit2 Joda
                            </td>
                            <td>
                                <a href="javascript:openModal({'url':'MonitoringStationModal.aspx','headText':'Monitoring Station Detail'});">
                                    <strong>Hariharpur</strong></a>
                            </td>
                            <td>
                                <div>
                                    Surface Water,
                                    <br />
                                    Ground Water,
                                    <br />
                                    Soil
                                </div>
                            </td>
                            <td>
                                12343456
                            </td>
                            <td>
                                65678764
                            </td>
                            <td>
                                Barbil
                            </td>
                            <td>
                                At/Po:-Joda,Barbil
                            </td>
                            <td>
                                <a href="AddMonitoringStations.aspx" class="btn btn-mini"><i class="glyphicon glyphicon-edit">
                                </i></a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="10">
                                <a href="#" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    </table>
                    <div class="clearfix">
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
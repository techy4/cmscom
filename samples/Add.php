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
            "url": "View.php"
        }
    ],
        "header": {
            "text": "Add Page",
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
          <div class="row-fluid form-wrapper">
            <!-- left column -->
            <div class="span8 column">
             <div class="form-padded">
              <form>             
                <div class="field-box">
                  <label>Normal input:</label>
                  <input class="span8" type="text" />
                </div>
                <div class="field-box">
                  <label>Inline input:</label>
                  <input class="span8" placeholder=".inline-input" type="text">
                </div>
                <div class="field-box">
                  <label>Inline Password:</label>
                  <input class="span8" type="password" value="blablabla" />
                </div>
                <div class="field-box">
                  <label>Read only:</label>
                  <input class="span8" type="text" readonly="readonly" value="read only input">
                </div>
                <div class="field-box">
                  <label>With tooltip:</label>
                  <input class="span8" data-toggle="tooltip" data-trigger="focus" title="Please insert a valid email address" data-placement="right" type="text" />
                </div>
                <div class="field-box">
                  <label>Predefined value:</label>
                  <div class="predefined"> <span class="value">http://</span>
                    <input class="span8" type="text">
                  </div>
                </div>
                <div class="field-box">
                  <label>With max length:</label>
                  <input class="span8" type="text" placeholder="max 20 characters here" maxlength="20" />
                </div>
                <div class="field-box">
                  <label>Textarea:</label>
                  <textarea class="span8" rows="4"></textarea>
                </div>
                <div class="field-box">
                  <label>Checkboxes:</label>
                  <label class="checkbox">
                    <input type="checkbox" />
                    Option 1 </label>
                  <label class="checkbox">
                    <input type="checkbox" />
                    Option 2 </label>
                  <label class="checkbox">
                    <input type="checkbox" />
                    Option 3 </label>
                </div>
                <div class="field-box">
                  <label>Radiobuttons:</label>
                  <div>
                    <label class="radio">
                      <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                      Yes </label>
                    <label class="radio">
                      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                      No </label>
                  </div>
                </div>
                <div class="field-box">
                  <label>Wysiwyg:</label>
                  <div class="wysi-column">
                    <textarea id="wysi" class="span10 wysihtml5" rows="5"></textarea>
                  </div>
                </div>
                </div>
              </form>
            </div>
            <!-- right column -->
            <div class="span4 column pull-right">
              <form>
              <div class="form-padded">
                <div class="field-box">
                  <label>Select:</label>
                  <div class="ui-select">
                    <select>
                      <option selected>Dropdown</option>
                      <option>Custom selects</option>
                      <option>Pure css styles</option>
                    </select>
                  </div>
                </div>
                <div class="field-box">
                  <label>Select2 plugin styled:</label>
                  <select style="width:250px" class="select2">
                    <option></option>
                    <option value="AK">Alaska</option>
                    <option value="HI">Hawaii</option>
                    <option value="CA">California</option>
                    <option value="NV">Nevada</option>
                    <option value="OR">Oregon</option>
                    <option value="WA">Washington</option>
                    <option value="AZ">Arizona</option>
                    <option value="CO">Colorado</option>
                    <option value="ID">Idaho</option>
                    <option value="MT">Montana</option>
                    <option value="NE">Nebraska</option>
                    <option value="NM">New Mexico</option>
                    <option value="ND">North Dakota</option>
                    <option value="UT">Utah</option>
                    <option value="WY">Wyoming</option>
                    <option value="AL">Alabama</option>
                    <option value="AR">Arkansas</option>
                    <option value="IL">Illinois</option>
                    <option value="IA">Iowa</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                    <option value="LA">Louisiana</option>
                    <option value="MN">Minnesota</option>
                    <option value="MS">Mississippi</option>
                    <option value="MO">Missouri</option>
                    <option value="OK">Oklahoma</option>
                    <option value="SD">South Dakota</option>
                    <option value="TX">Texas</option>
                    <option value="TN">Tennessee</option>
                    <option value="WI">Wisconsin</option>
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="IN">Indiana</option>
                    <option value="ME">Maine</option>
                    <option value="MD">Maryland</option>
                    <option value="MA">Massachusetts</option>
                    <option value="MI">Michigan</option>
                    <option value="NH">New Hampshire</option>
                    <option value="NJ">New Jersey</option>
                    <option value="NY">New York</option>
                    <option value="NC">North Carolina</option>
                    <option value="OH">Ohio</option>
                    <option value="PA">Pennsylvania</option>
                    <option value="RI">Rhode Island</option>
                    <option value="SC">South Carolina</option>
                    <option value="VT">Vermont</option>
                    <option value="VA">Virginia</option>
                    <option value="WV">West Virginia</option>
                  </select>
                </div>
                <div class="field-box">
                  <label>Select2 multiselect:</label>
                  <select style="width:250px" multiple class="select2">
                    <option></option>
                    <option value="AK">Alaska</option>
                    <option value="HI" selected>Hawaii</option>
                    <option value="CA">California</option>
                    <option value="NV">Nevada</option>
                    <option value="OR">Oregon</option>
                    <option value="WA">Washington</option>
                    <option value="AZ">Arizona</option>
                    <option value="CO">Colorado</option>
                    <option value="ID">Idaho</option>
                    <option value="MT">Montana</option>
                    <option value="NE">Nebraska</option>
                    <option value="NM">New Mexico</option>
                    <option value="ND">North Dakota</option>
                    <option value="UT">Utah</option>
                    <option value="WY">Wyoming</option>
                    <option value="AL">Alabama</option>
                    <option value="AR">Arkansas</option>
                    <option value="IL">Illinois</option>
                    <option value="IA">Iowa</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                    <option value="LA">Louisiana</option>
                    <option value="MN">Minnesota</option>
                    <option value="MS">Mississippi</option>
                    <option value="MO">Missouri</option>
                    <option value="OK">Oklahoma</option>
                    <option value="SD">South Dakota</option>
                    <option value="TX">Texas</option>
                    <option value="TN">Tennessee</option>
                    <option value="WI">Wisconsin</option>
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="IN">Indiana</option>
                    <option value="ME">Maine</option>
                    <option value="MD">Maryland</option>
                    <option value="MA">Massachusetts</option>
                    <option value="MI">Michigan</option>
                    <option value="NH">New Hampshire</option>
                    <option value="NJ">New Jersey</option>
                    <option value="NY">New York</option>
                    <option value="NC">North Carolina</option>
                    <option value="OH">Ohio</option>
                    <option value="PA">Pennsylvania</option>
                    <option value="RI">Rhode Island</option>
                    <option value="SC">South Carolina</option>
                    <option value="VT">Vermont</option>
                    <option value="VA">Virginia</option>
                    <option value="WV">West Virginia</option>
                  </select>
                </div>
                <div class="field-box">
                  <label>Input prepend & append:</label>
                  <div class="input-prepend"> <span class="add-on">@</span>
                    <input class="input-large" type="text" />
                  </div>
                  <div class="input-append">
                    <input class="input-large" type="text" />
                    <span class="add-on">.00</span> </div>
                </div>
                <div class="field-box">
                  <label>Datepicker:</label>
                  <input type="text" value="03/29/2013" class="input-large datepicker" />
                </div>
                 </div>
              </form>            
            </div>
             <div class="clearfix"></div>
              <div class="formActions"> <a href="#" class="btn btn-success">Submit</a> <a href="#" class="btn btn-danger">Cancel</a> </div>
            
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
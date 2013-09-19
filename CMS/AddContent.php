<!DOCTYPE html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Untitled Document</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width">
<!--framework.css icluded framework related css files -->
<link rel="stylesheet" href="../css/generic/framework.css">
<link rel="stylesheet" href="../css/custom/mngModal.css">
</head>

<body>
<div class="srch">
	Link Name : About Us / Mission
     <div class="field-box">
                    Video if any :  <input type="text" />
                  </div>
    </div>
<form name="form1">
<div class="padded">
<div class="field-box">
                  <label>Wysiwyg:</label>
                  <div>
                    <textarea id="wysi" class="span10 wysihtml5" rows="10"></textarea>
                  </div>
                </div>
             <div style="margin-top:5px;"> <a href="#" class="btn btn-success">Submit</a> <a href="#" class="btn btn-danger">Cancel</a> </div>
              </div>  
 </form>

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
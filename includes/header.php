 <!--[if lt IE 8]><link rel="stylesheet" href="../css/generic/ie.css"><![endif]-->
<?php 
include ("../SessionCheck.php");
?>
 <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <button type="button" class="btn btn-navbar visible-phone" id="menu-toggler"> <i class="glyphicon glyphicon-th-list"></i></button>
        
              <div class="brand">
                <h4>ABC Enterprise</h4>
                <b>T4 CMSnCom v1.0</b>
            </div>
        <div class="nav-collapse collapse">
          <ul class="nav navbar-nav pull-right">
            <li class="dropdown"><a href="#"class="dropdown-toggle" data-toggle="dropdown"><img src="../img/default-pp-small.png" alt="" class="pp" width="35" height="35"> <b class="caret" style="margin-top:8px;"></b></a>
            	<ul class="dropdown-menu"> 
                <li class="with-image">                             
                	<div class="avatar pull-left">
                      <img src="../img/avatar1.jpg"  width="70" height="70">
                    </div> 
                    <div class="logName pull-left"><?php echo $_SESSION['userName'];?><br /> <span><?php echo $_SESSION['designation'];?></span></div>  
                    <div class="clearfix"></div>              
                </li>              
                <li class="divider"></li>               
                <li><div class="alginBtn"><a href="../index.php" class="btn btn-danger">Logout</a></div></li>
              </ul>
            </li>
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-cog"></i> Settings <b class="caret"></b></a>
              <ul class="dropdown-menu">                            
                <li><a href="#"><i class="glyphicon glyphicon-lock"></i> Change Password</a></li>
              </ul>
            </li>
           
          </ul>
        </div>
        <!--/.nav-collapse -->
      </div>
    </div>
  </div>

  <!-- Modal HTML -->
  <div class="modal hide fade"  id="myModal">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4>Modal header</h4>
  </div>
  <div class="modal-body">
    <p>One fine body…</p>
  </div>
  <!--<div class="modal-footer">
    <a href="#" class="btn">Close</a>
    <a href="#" class="btn btn-primary">Save changes</a>
  </div>-->
</div>
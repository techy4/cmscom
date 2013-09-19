/// <reference path="../vendor/jquery-2.0.0-vsdoc.js" />
// mobile side-menu slide toggler
var $menu = $("#sidebar-nav");
$("body").click(function () {
    if ($menu.hasClass("display")) {
        $menu.removeClass("display");
    }
});
$menu.click(function (e) {
    e.stopPropagation();
});
$("#menu-toggler").click(function (e) {
    e.stopPropagation();
    $menu.toggleClass("display");
});

//mobile Top Button slide toggler
var $tpBtn = $(".top-buttons");
$("body").click(function () {
    if ($tpBtn.hasClass("displayBtn")) {
        $tpBtn.removeClass("displayBtn");
		$("#button-toggler i").removeClass("glyphicon-chevron-right")
		$("#button-toggler i").addClass("glyphicon-chevron-left")
		$("#button-toggler").animate({marginRight:"0px"},"fast");
    }
	
});
$tpBtn.click(function (e) {
    e.stopPropagation();
});
$("#button-toggler").click(function (e) {
    e.stopPropagation();
    $tpBtn.toggleClass("displayBtn");
	if ($("#button-toggler i").hasClass("glyphicon-chevron-left")){		
		$("#button-toggler i").removeClass("glyphicon-chevron-left")
		$("#button-toggler i").addClass("glyphicon-chevron-right")
		$(this).animate({marginRight:"167px"},"fast");
		}
	else {
		$("#button-toggler i").removeClass("glyphicon-chevron-right")
		$("#button-toggler i").addClass("glyphicon-chevron-left")
		$(this).animate({marginRight:"0px"},"fast");
		}
	
});

// sidebar menu dropdown toggle

$("#dashboard-menu .dropdown-toggle").click(function (e) {
    e.preventDefault();
    var $item = $(this).parent();
    var isSubMenuOpen;
    console.log($item.find(".submenu").is(':hidden'));
    if ($item.find(".submenu").is(':hidden')) {
        $item.find(".submenu").slideDown("fast");
        sessionStorage.activeMenuIndex = $item.index();
    }
    else {      
        $item.find(".submenu").slideUp("fast");       
    }
    $("#dashboard-menu>li").not($item).find(".submenu").slideUp("fast");
});

if (sessionStorage.activeMenuIndex != "undefined") {
    //console.log($("#dashboard-menu>li").html());
    $("#dashboard-menu>li:eq(" + sessionStorage.activeMenuIndex + ")").find(".submenu").show();
}


/* Scroll to Top */

  $(".totop").hide();

  $(function(){
    $(window).scroll(function(){
      if ($(this).scrollTop()>100)
      {
        $('.totop').slideDown();
      } 
      else
      {
        $('.totop').slideUp();
      }
    });

    $('.totop a').click(function (e) {
      e.preventDefault();
      $('body,html').animate({scrollTop: 0}, 100);
    });

  });

//Open Modal
function openModal(option) {
   $('#myModal').modal();
   $('#myModal .modal-header h4').text(option.headText);  
   $("#myModal .modal-body").empty();
   $('#myModal .modal-body').append('<iframe id="myFrame" frameborder="0" src="' + option.url + '" width="100%" height="400px" scrolling="auto" name="myFrame">');
  }



//Setting for Content header

   //For Buttons
    var btnClass;
      if (pageConf.buttons) {
          var buttons = pageConf.buttons;
          if (buttons.length > 1) {
              $("#buttonBar").show();
              $.each(buttons, function (index, value) {                 
                  if (value.isActive == "true") {
                      btnClass = "btn";
                  }
                  else {
                      btnClass = "btn btn-success";
                  }
                  $("#buttons").append('<a href="' + value.url + '" class="' + btnClass + '">' + value.name + '</a>');
              });

          }
      }

      //For Tabs
      var tabClass;
      if (pageConf.tabs) {
          var tabs = pageConf.tabs;         
              $("#tabBar").show();
              $.each(tabs, function (index, value) {
                  if (value.isActive == "true") {
                      tabClass = "active";
                  }
                  else {
                      tabClass = "";
                  }                
                  $("#tabBar").append('<li class="' + tabClass + '"><a href="' + value.url + '">' + value.name + '</a></li>');
              });        
      }
        //For Page Title Header        
          if (pageConf.header) {
              var titleInfo = pageConf.header;
              $("#headText").show();
              $("#headText").append("<b>"+titleInfo.text+"</b>");
              $("#icoClass").addClass(titleInfo.iconClass);
          }
      //For BreadCrumb
          if (pageConf.breadCrumbs) {
              var breadCrumbs = pageConf.breadCrumbs;
              var breadCrumbsClass = "";
              var breadCrumbsClass1 = "";
                  $("#breadcrumbs").show();
                  var bdHtml;
                  $.each(breadCrumbs, function (index, value) {
                      bdHtml = "";
                      if (value.isActive == "true") {
                          breadCrumbsClass = "";
                      }
                      else {
                          breadCrumbsClass = "";
                      }
                      if (index == 0) {
                          breadCrumbsClass1 = "glyphicon glyphicon-home";
                      }
                      else {
                          breadCrumbsClass1 = "icon-beaker";
                      }
                      bdHtml += '<div class="breadcrumb-button ' + breadCrumbsClass + '">';
                      bdHtml += '<span class="breadcrumb-label"><i class="' + breadCrumbsClass1 + '"></i> ' + value.name + '</span>';
                      bdHtml += '<span class="breadcrumb-arrow"><span></span></span>';
                      bdHtml += '</div>';
                      $("#breadcrumbs").append(bdHtml);
                  });
              }
              //For Mandotary text Notes
              if (pageConf.options) {
                  var options = pageConf.options;
                  $("#star").show();
              }

              //For Delete Option
              if (pageConf.options) {
                  var options = pageConf.options;
                  $("#star").show();
              }
			  
$(document).ready(function(){
	 // add uniform plugin styles to html elements
            $("input:checkbox, input:radio").uniform();

            // select2 plugin for select elements
            $(".select2").select2({
                placeholder: "Select a State"
            });

            // datepicker plugin
            $('.datepicker').datepicker().on('changeDate', function (ev) {
                $(this).datepicker('hide');
            });

            // wysihtml5 plugin on textarea
           // $(".wysihtml5").wysihtml5({
//                "font-styles": false
//            });
	})



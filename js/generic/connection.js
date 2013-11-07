function getDataFromSvr(method, inputParam, opt) {
    var reqData = "";
    var index = 1;
    var urlLev;
    var dataobj = new Object();
    $.each(inputParam, function (key, value) {       
        dataobj[key] = value;
        //        if (getLengthinObj(inputParam) == index) {
        //            reqData += key + ":" + value;
        //        }
        //        else {
        //            reqData += key + ":" + value + ",";
        //        }
        //        index++;
    })
    dataobj["method"] = opt.method;
    if (opt.classHir == 0) {
        urlLev = "";
    }
    else if (opt.classHir == 1) {

        urlLev = "../";
    }
    else if (opt.classHir == 2) {

        urlLev = "../";
    }
    dispLoader(urlLev);

    $.ajax({
        type: "POST",
        // contentType: "application/json; charset=utf-8",
        url: urlLev + method,       
        data: dataobj,
        dataType: "json",
        success: function (msg) {
            $(document).trigger(opt.returnEvent, [msg]);           
            hideLoader();

        },
        error: function (msg) {           
            AjaxFailed(msg);
        }
    });

}
function dispLoader(urlLevParam) {
    $(document).find("body").append("<div class='preloader1'>Loading...</div>");
   // $(".preloader1").css({ "background": 'url("' + urlLevParam + 'images/369.gif") no-repeat scroll center center #fff', "position": "fixed", "height": "100%", "top": "0", "width": "100%", "z-index": "1001", "opacity": "0.5" });
   // $(".preloader1").css({ "background": 'url("' + urlLevParam + 'images/preloader1.gif") no-repeat scroll center center #fff'});
}
function hideLoader() {
    $(".preloader1").remove();
}
//FOR AJAX FAILED
function AjaxFailed(result) {
   
     console.log(result.status + '/ ' + result.statusText + "fail");
}
/// <reference path="../vendor/jquery-2.0.0.min.js" />
var map, gmap, layer, select, hover, control; // ADD MAP CONTROL 
var activeMapExtent = "85.1299,21.0384,85.2162,20.9758";
var mapZoomLevel = 14;                            // SET ZOOM LEVEL FOR MAP
var val = 0;
$(document).ready(function () {
    $('#opacity').hide();
    map = new OpenLayers.Map('oMap', { allOverlays: true });
    $('#topoSheet').prop('checked', true);
    $('#topoSheet').attr('checked', 'checked');
    loadBMapLayer();
    $(document).bind("optionChange", clickChange)
    $("#lineId1").on("click", function (e) {
        e.preventDefault();
        if (val == 0) {
            val = 1;
            $('#opacity').show();
        }
        else {
            val = 0;
            $('#opacity').hide();
        }
       
       

    });
   // document.getElementById('checkboxes').addEventListener('change', function (e) {
     $("#checkboxes").change(function (e) {
        //  console.log(e)
        //chkId = e.explicitOriginalTarget.id;
        //chkText = e.explicitOriginalTarget.value;
        // alert(chkId + '------' + chkText)
        //$('#' + chkId).unbind('click')
         //$('#' + chkId).unbind();
         chkId = e.target.id;
         chkText = e.target.value;
        $(document).trigger("optionChange");
        //alert(chkId)
        // console.log($("#line"))

    });
});
//Loading Boundary Map; 
function loadBMapLayer() {
    var mLayers = map.layers;
    if (mLayers) {
        if (mLayers.length > 0) {
            for (var layerIndex = 0; layerIndex < mLayers.length; layerIndex++) {
                if (mLayers[layerIndex].name == "Boundary as per Lease Map") {
                    map.removeLayer(mLayers[layerIndex]);
                }
            }
        }
    }
    // var val1 = (parseFloat(String(activeMapExtent).split(",")[0]) + parseFloat(String(activeMapExtent).split(",")[2])) / 2
    // var val2 = (parseFloat(String(activeMapExtent).split(",")[1]) + parseFloat(String(activeMapExtent).split(",")[3])) / 2

//    var fromProjection = new OpenLayers.Projection("EPSG:4326");   // Transform from WGS 1984
//    var toProjection = new OpenLayers.Projection("EPSG:900913"); // to Spherical Mercator Projection
//    var position = new OpenLayers.LonLat(87.488, 22.567).transform(fromProjection, toProjection);
//    var gsat = new OpenLayers.Layer.Google(
//                "Google Satellite",
//                { type: google.maps.MapTypeId.map, numZoomLevels: 15 }
//                );
    layer = new OpenLayers.Layer.WMS(
            "Lessee Boundary",
            "http://localhost:8080/geoserver/ows",
            { layers: 'CMS_TATA:f45n4', transparent: true, format: 'image/gif', myData: Math.random() }
            ,
                { isBaseLayer: false, opacity: 1 }
                );

    // );

    // map.addLayers([layer, gsat]);
    map.addLayers([layer]);
//    // style the sketch fancy
//    var sketchSymbolizers = {
//        "Point": {
//            pointRadius: 4,
//            graphicName: "square",
//            fillColor: "white",
//            fillOpacity: 1,
//            strokeWidth: 1,
//            strokeOpacity: 1,
//            strokeColor: "#333333"
//        },
//        "Line": {
//            strokeWidth: 3,
//            strokeOpacity: 1,
//            strokeColor: "#666666",
//            strokeDashstyle: "dash"
//        },
//        "Polygon": {
//            strokeWidth: 2,
//            strokeOpacity: 1,
//            strokeColor: "#666666",
//            fillColor: "white",
//            fillOpacity: 0.3
//        }
//    };
//    var style = new OpenLayers.Style();
//    style.addRules([
//                new OpenLayers.Rule({ symbolizer: sketchSymbolizers })
//            ]);
//    var styleMap = new OpenLayers.StyleMap({ "default": style });

//    // allow testing of specific renderers via "?renderer=Canvas", etc
//    var renderer = OpenLayers.Util.getParameters(window.location.href).renderer;
//    renderer = (renderer) ? [renderer] : OpenLayers.Layer.Vector.prototype.renderers;

//    measureControls = {
//        line: new OpenLayers.Control.Measure(
//                    OpenLayers.Handler.Path, {
//                        persist: true,
//                        handlerOptions: {
//                            layerOptions: {
//                                renderers: renderer,
//                                styleMap: styleMap
//                            }
//                        }
//                    }
//                ),
//        polygon: new OpenLayers.Control.Measure(
//                    OpenLayers.Handler.Polygon, {
//                        persist: true,
//                        handlerOptions: {
//                            layerOptions: {
//                                renderers: renderer,
//                                styleMap: styleMap
//                            }
//                        }
//                    }
//                )
//    };

//    var control;
//    for (var key in measureControls) {
//        control = measureControls[key];
//        control.events.on({
//            "measure": handleMeasurements,
//            "measurepartial": handleMeasurements
//        });
//        map.addControl(control);
//    }

//    map.setCenter(new OpenLayers.LonLat(0, 0), 3);

//    document.getElementById('noneToggle').checked = true;





    // map.setCenter(position, mapZoomLevel);
    // map.addControl(new OpenLayers.Control.Navigation());
    //map.getLayerIndex() 
    var lon1 = parseFloat(activeMapExtent.split(",")[0]);
    var lat1 = parseFloat(activeMapExtent.split(",")[1]);
    var lon2 = parseFloat(activeMapExtent.split(",")[2]);
    var lat2 = parseFloat(activeMapExtent.split(",")[3]);
    map.setCenter(new OpenLayers.Bounds(lon1, lat1, lon2, lat2).getCenterLonLat(), mapZoomLevel);

    $('#oMap').show();
}
function clickChange(evt) {
    //alert('hy')
    // $('#' + chkId).on('click', function () {
    // alert('hy1')
    //  $("#chkRoad").bind("change", function (e) {
    //var layer1;
    var geoLayer = 'CMS_TATA:t_lease_boundary';
    if (chkId == "lesseeMap") {
        geoLayer = 'CMS_TATA:t_lease_boundary';
    }
    else if (chkId == "lasseePillar") {
        geoLayer = 'CMS_TATA:t_lease_pillar';
    }
    else if (chkId == "villBoundary") {
        geoLayer = 'CMS_TATA:t_village_boundary';
    }
    else if (chkId == "revenuePlot") {
        geoLayer = 'CMS_TATA:t_plot';
    }
    else if (chkId == "forest") {
        geoLayer = 'CMS_TATA:t_forest_patch';
    }
    else if (chkId == "landUse") {
        geoLayer = 'CMS_TATA:t_landuse';
    }
    else if (chkId == "cadastralMap") {
        geoLayer = 'CMS_TATA:cad';
    }
    else if (chkId == "topoSheet") {
        geoLayer = 'CMS_TATA:f45n4';
    }
    else {
        geoLayer = '';
    }
    //    alert(geoLayer)
    if (geoLayer != "") {
        var check = document.getElementById(chkId).checked
        // alert(check)
        if (check == true) {
            //alert("Checked");
            layer1 = new OpenLayers.Layer.WMS(
                        chkText,
                        "http://localhost:8080/geoserver/ows",
                        { layers: geoLayer, transparent: true, format: 'image/gif', myData: Math.random() }
                        );

            map.addLayers([layer1]);
        }
        else if (check == false) {
            // alert("Unchecked");
            var mLayers = map.layers;
            if (mLayers) {
                if (mLayers.length > 0) {
                    for (var layerIndex = 0; layerIndex < mLayers.length; layerIndex++) {
                        if (mLayers[layerIndex].name == chkText) {
                            map.removeLayer(mLayers[layerIndex]);
                        }
                    }
                }
            }
        }
    }
//    else {
//    alert('No Layer Available')
//    }
    // });
}
function updateSlider(slideAmount) {
        layer.setOpacity(slideAmount);
}
$(document).ready(function () {
    var values = []; //store the no of dropdown created

    //Fill No of Level  
    fillParentLevel();
    $(document).bind("getLevelData", function (e, data) {
        var j = 0;
        $.each(data, function (index, value) {
            j = value.level;
        });
        $('#dwnLinkLevel').html('');
        $('#dwnLinkLevel').append(" <option value='Select'>Select</option>");

        for (i = 1; i <= j; i++) {
            $('#dwnLinkLevel').append(' <option data-id=' + i + ' value="' + i + '" >' + i + '</option>');
        }
    });
    $(document).bind("getFunctionData", function (e, data) {
        $("#dwnFunctionName").html('');
        $('#dwnFunctionName').append(" <option value='Select'>Select</option>");
        $.each(data, function (index, value) {
            $('#dwnFunctionName').append(' <option data-id=' + value.Id + ' value="' + value.Id + '" >' + value.Name + '</option>');
        });
    });

    //Select No of Dropdown to be Created
    $("#dwnLinkLevel").bind("change", function (e) {
        var noOfLevel = this.value;
        //Remove the dropdown previously created
        if ((values.length) > 0) {
            $(document).unbind('getParentData');  //Remove Parent Name Event
            for (var i = 1; i <= values.length; i++) {
                $("#dvLevel" + i).remove();
            }
        }
        //Add Dropdown
        if ((this.value) > 1) {
            for (i = (this.value) - 1; i > 0; i--) {
                var tblHtml = "";
                values.push("dvLevel" + i);
                tblHtml += '<div class="field-box" id="dvLevel' + i + '">';
                tblHtml += '    <label> Level ' + i + '</label>';
                tblHtml += '    <div class="ui-select">';
                tblHtml += '        <select name="dwn' + i + 'stLevel" data-id="' + i + '" id="dwn' + i + 'stLevel">';
                tblHtml += '            <option selected>-- Select --</option>';
                tblHtml += '        </select>';
                tblHtml += '    </div>';
                tblHtml += '</div>';
                $('#divdwnLinkLevel').after(tblHtml);
                $("#dwn" + i + "stLevel").prop("disabled", true);
                $("#dwn" + i + "stLevel").bind("change", function (e) {
                    var next = $(this).data('id') + 1;
                    //console.log($(this).data('id'));
                    fillChildInfo(this.value);
                    $(document).bind("getChildData", function (e, data) {
                        $("#dwn" + (next) + "stLevel").html('');
                        $("#dwn" + (next) + "stLevel").append(" <option value='Select'>Select</option>");
                        $.each(data, function (index, value) {
                            $("#dwn" + (next) + "stLevel").append(' <option data-id=' + value.ID + ' value="' + value.ID + '" >' + value.Child + '</option>');
                        });
                        $(document).unbind('getChildData');

                    });
                    $("#dwn" + (next) + "stLevel").prop("disabled", false);
                });
            }
            //Fill Parent Name And Attch Event
            $("#dwn1stLevel").prop("disabled", false);
            fillParentName();
            $(document).bind("getParentData", function (e, data) {
                $("#dwn1stLevel").html('');
                $('#dwn1stLevel').append(" <option value='Select'>Select</option>");
                $.each(data, function (index, value) {
                    $('#dwn1stLevel').append(' <option data-id=' + value.ID + ' value="' + value.ID + '" >' + value.Parent + '</option>');
                });
            });
        }
        
    });

    $("#internalField").hide();
    $("#externalField").hide();
    $("#internal").click(function () {
        $("#internalField").show();
        $("#externalField").hide();
        fillFunctionName();

    })
    $("#external").click(function () {
        $("#externalField").show();
        $("#internalField").hide();
    })


})

function fillFunctionName() {
    var paramObj = {};
    getDataFromSvr("getFunctionData", paramObj, { classHir: 0, returnEvent: "getFunctionData" });
}
function fillParentLevel() {
    var paramObj = {};
    getDataFromSvr("getLevelData", paramObj, { classHir: 0, returnEvent: "getLevelData" });
}
function fillParentName() {
    var paramObj = {};
    getDataFromSvr("getParentData", paramObj, { classHir: 0, returnEvent: "getParentData" });
}
function fillChildInfo(level) {
    var paramObj = { Level: level };
    getDataFromSvr("getChildData", paramObj, { classHir: 0, returnEvent: "getChildData" });
}
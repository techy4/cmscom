$(document).ready(function () {
    var values = [];
    $("#dwnLinkLevel").bind("change", function (e) {
        if ((values.length) > 0) {
            for (var i = 1; i <= values.length; i++) {
                $("#dvLevel" + i).remove();
            }
        }
        if ((this.value) > 1) {

            for (i = (this.value) - 1; i > 0; i--) {
                var tblHtml = "";
                values.push("dvLevel" + i);
                tblHtml += '<div class="field-box" id="dvLevel' + i + '">';
                tblHtml += '    <label> Level ' + i + '</label>';
                tblHtml += '    <div class="ui-select">';
                tblHtml += '        <select name="dwn' + i + 'stLevel" id="dwn' + i + 'stLevel">';
                tblHtml += '            <option selected>-- Select --</option>';
                tblHtml += '            <option>1</option>';
                tblHtml += '            <option>2</option>';
                tblHtml += '            <option>3</option>';
                tblHtml += '            <option>4</option>';
                tblHtml += '            <option>5</option>';
                tblHtml += '            <option>6</option>';
                tblHtml += '        </select>';
                tblHtml += '    </div>';
                tblHtml += '</div>';
                $('#divdwnLinkLevel').after(tblHtml);
                $("#dwn" + i + "stLevel").bind("change", function (e) {
                    alert(this.value);
                });
            }

        }
    });



})
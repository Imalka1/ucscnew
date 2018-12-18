$('#addSe').click(function () {
    addNewRowSe();
});

$('#removeSe').click(function () {
    if (rowSe > 1) {
        rowSe--;
        $('#seId tr.rowSeButton:last-child').remove();
        $('#seId tr.rowSe:last-child').remove();
    }
});

var rowSe = 1;

function getTextMain(dataSet) {
    return '<tr class="rowSe">\n' +
        '<th width="3%">' + rowSe++ + '<input type="hidden" value="' + dataSet[0] + '"></th>\n' +
        '<td width="30%"><input type="text" class="form-control" value="' + dataSet[1] + '"></td>\n' +
        '<td width="15%"><input type="text" class="form-control" value="' + dataSet[2] + '"></td>\n' +
        '<td width="15%"><input type="text" class="form-control" value="' + dataSet[3] + '"></td>\n' +
        '<td width="25%"><input type="text" class="form-control" value="' + dataSet[4] + '"></td>\n' +
        '<td width="15%"><input type="text" class="form-control" value="' + dataSet[5] + '"></td>\n' +
        '</tr>';
}

var textSubmit = '<span style="left: 87%;position: relative;color: green;font-weight: bold"><i class="fa fa-check"></i> Submitted</span>';
var textUpdate = '<span style="left: 75%;position: relative;color: green"><i class="fa fa-check"></i> Updated</span>';
var textDelete = '<span style="left: 75%;position: relative;color: red"><i class="fa fa-times"></i> Deleted</span>';
var textWarning = '<span style="left: 77%;position: relative;color: #b58500;font-weight: bold"><i class="fa fa-exclamation-triangle"></i> Error</span>';

function getTextSubmit(textSubmit) {
    return '<tr class="rowSeButton">\n' +
        '<td colspan="6">' +
        '<div class="row">' +
        '<div class="col-sm-12">' +
        '<button type="button" class="btn btn-warning rowSeButtonS" style="left: 50%;transform: translateX(-50%);position: relative">Submit</button>' +
        textSubmit +
        '</div>' +
        '</div>' +
        '</td>\n' +
        '</tr>';
}

function getTextUpdateDelete(textUpdateDelete) {
    return '<tr class="rowSeButton">\n' +
        '<td colspan="6">' +
        '<div class="row">' +
        '<div class="col-sm-6"><button type="button" class="btn btn-warning rowSeButtonU" style="left: 50%;transform: translateX(-50%);position: relative">Update</button></div>' +
        '<div class="col-sm-6">' +
        '<button type="button" class="btn btn-warning rowSeButtonD" style="left: 50%;transform: translateX(-50%);position: relative">Delete</button>' +
        textUpdateDelete +
        '</div>' +
        '</div>' +
        '</td>\n' +
        '</tr>';
}

function addNewRowSe() {
    $('#seId').append(getTextMain(['', '', '', '', '', '']) + getTextSubmit(""));
}

function addRowSe() {
    $('#seId').append(getTextMain(['', '', '', '', '', '']) + getTextUpdateDelete(""));
}

$('#seId').on('click', '.rowSeButtonS', function () {
    var colCount = $(this).parents('tr').parent().children("tr:nth-child(" + $(this).parents('tr').index() + ")").children().children().length;
    for (var i = 0; i < colCount; i++) {
        console.log($(this).parents('tr').parent().children("tr:nth-child(" + $(this).parents('tr').index() + ")").children().children().eq(i).val())
    }
    $.ajax(
        {
            type: "post",
            url: "<?= base_url('InterviewerController/getComments') ?>",
            data: {aid: aid},
            success: function (response) {
                var fields = response.split('~');
                var comment = '';
                for (var i = 0; i < fields.length; i++) {
                    comment += fields[i] + '\n';
                }
                $('#txtReport').val(comment);
                // nicEditors.findEditor( "txtReport" ).setContent( comment );
            }
            // error: function () {
            //     alert("Invalide!");
            // }
        }
    );
})

$('#seId').on('click', '.rowSeButtonU', function () {

})

$('#seId').on('click', '.rowSeButtonD', function () {

})

$(window).ready(function () {
    addRowSe();
});
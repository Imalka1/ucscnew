var rowSe = 1;

var textSubmit = '<span style="left: 60%;position: relative;color: green"><i class="fa fa-check"></i> Submitted</span>';
var textUpdate = '<span style="left: 60%;position: relative;color: green"><i class="fa fa-check"></i> Updated</span>';
var textDelete = '<span style="left: 70%;position: relative;color: red"><i class="fa fa-times"></i> Deleted</span>';
var textWarning = '<span style="left: 60%;position: relative;color: #b58500"><i class="fa fa-exclamation-triangle"></i> Error</span>';

var panelSubmit =
    '<div class="col-sm-12">' +
    '<button type="button" class="btn btn-warning rowSeButtonS" style="left: 50%;transform: translateX(-50%);position: relative">Submit</button>';

var panelUpdateDelete =
    '<div class="col-sm-6">' +
    '<button type="button" class="btn btn-warning rowSeButtonU" style="left: 50%;transform: translateX(-50%);position: relative">Update</button>' +
    '</div>' +
    '<div class="col-sm-6">' +
    '<button type="button" class="btn btn-warning rowSeButtonD" style="left: 50%;transform: translateX(-50%);position: relative">Delete</button>';


$('#addSe').click(function () {
    addNewRowSe();
});

$('#removeSe').click(function () {
    if (rowSe > 2) {
        rowSe--;
        $('#seId tr.rowSeButton:last-child').remove();
        $('#seId tr.rowSe:last-child').remove();
        $('#seId tr.rowSeHead:last-child').remove();
    }
});

$('#seId').on('click', '.rowSeButtonS', function () {
    var colCount = $(this).parents('tr').parent().children("tr:nth-child(" + $(this).parents('tr').index() + ")").children().children().length;
    for (var i = 0; i < colCount; i++) {
        console.log($(this).parents('tr').parent().children("tr:nth-child(" + $(this).parents('tr').index() + ")").children().children().eq(i).val())
    }
    $(this).parents('tr').parent().children("tr:nth-child(" + $(this).parents('tr').index() + ")").children().children().eq(1).val('ad');
    $(this).parent().parent().html(panelUpdateDelete + textSubmit + '</div>');

    // $.ajax(
    //     {
    //         type: "post",
    //         url: url,
    //         data: {aid: aid},
    //         success: function (response) {
    //             var fields = response.split('~');
    //             var comment = '';
    //             for (var i = 0; i < fields.length; i++) {
    //                 comment += fields[i] + '\n';
    //             }
    //             $('#txtReport').val(comment);
    //             // nicEditors.findEditor( "txtReport" ).setContent( comment );
    //         }
    //         // error: function () {
    //         //     alert("Invalide!");
    //         // }
    //     }
    // );
})

$('#seId').on('click', '.rowSeButtonU', function () {
    $(this).parent().parent().html(panelUpdateDelete + textUpdate + '</div>');
})

$('#seId').on('click', '.rowSeButtonD', function () {
    $(this).parent().parent().html(panelSubmit + textDelete + '</div>');
})

$(window).ready(function () {
    if (!dataExists()) {
        addNewRowSe();
    }
});

function addNewRowSe() {
    $('#seId').append(getPanelMain(['', '', '', '', '', '']) + getPanelSubmit());
}

function addRowSe(data1, data2, data3, data4, data5, data6) {
    $('#seId').append(getPanelMain([data1, data2, data3, data4, data5, data6]) + getPanelUpdateDelete());
}

function getPanelMain(dataSet) {
    return '<tr class="rowSeHead">\n' +
        '<th width="3%">' + rowSe++ + '.</th>\n' +
        '<th width="30%">Name of the School</th>\n' +
        '<th width="15%">From</th>\n' +
        '<th width="15%">To</th>\n' +
        '<th width="25%">Examination passed</th>\n' +
        '<th width="15%">Year</th>\n' +
        '</tr>' +
        '<tr class="rowSe">\n' +
        '<th width="3%"><input type="hidden" value="' + dataSet[0] + '"></th>\n' +
        '<td width="30%"><input type="text" class="form-control" value="' + dataSet[1] + '"></td>\n' +
        '<td width="15%"><input type="text" class="form-control" value="' + dataSet[2] + '"></td>\n' +
        '<td width="15%"><input type="text" class="form-control" value="' + dataSet[3] + '"></td>\n' +
        '<td width="25%"><input type="text" class="form-control" value="' + dataSet[4] + '"></td>\n' +
        '<td width="15%"><input type="text" class="form-control" value="' + dataSet[5] + '"></td>\n' +
        '</tr>';
}

function getPanelSubmit() {
    return '<tr class="rowSeButton">\n' +
        '<td colspan="6">' +
        '<div class="row">' +
        '<div class="col-sm-12">' +
        '<button type="button" class="btn btn-warning rowSeButtonS" style="left: 50%;transform: translateX(-50%);position: relative">Submit</button>' +
        '<span></span>' +
        '</div>' +
        '</div>' +
        '</td>\n' +
        '</tr>';
}

function getPanelUpdateDelete() {
    return '<tr class="rowSeButton">\n' +
        '<td colspan="6">' +
        '<div class="row">' +
        '<div class="col-sm-6"><button type="button" class="btn btn-warning rowSeButtonU" style="left: 50%;transform: translateX(-50%);position: relative">Update</button></div>' +
        '<div class="col-sm-6"><button type="button" class="btn btn-warning rowSeButtonD" style="left: 50%;transform: translateX(-50%);position: relative">Delete</button></div>' +
        '<span></span>' +
        '</div>' +
        '</td>\n' +
        '</tr>';
}
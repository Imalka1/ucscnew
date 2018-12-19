var rowAoq = 1;

var textSubmit = '<span style="left: 60%;position: relative;color: green"><i class="fa fa-check"></i> Submitted</span>';
var textUpdate = '<span style="left: 60%;position: relative;color: green"><i class="fa fa-check"></i> Updated</span>';
var textDelete = '<span style="left: 70%;position: relative;color: red"><i class="fa fa-times"></i> Deleted</span>';
var textWarning = '<span style="left: 60%;position: relative;color: #b58500"><i class="fa fa-exclamation-triangle"></i> Error</span>';

var panelSubmit =
    '<div class="col-sm-12">' +
    '<button type="button" class="btn btn-warning rowAoqButtonS" style="left: 50%;transform: translateX(-50%);position: relative">Submit</button>';

var panelUpdateDelete =
    '<div class="col-sm-6">' +
    '<button type="button" class="btn btn-warning rowAoqButtonU" style="left: 50%;transform: translateX(-50%);position: relative">Update</button>' +
    '</div>' +
    '<div class="col-sm-6">' +
    '<button type="button" class="btn btn-warning rowAoqButtonD" style="left: 50%;transform: translateX(-50%);position: relative">Delete</button>';

$('#addAoq').click(function () {
    addNewRowAoq()
});

$('#removeAoq').click(function () {
    if (rowAoq > 2) {
        rowAoq--;
        $('#aoqId tr.rowAoqFile:last-child').remove();
        $('#aoqId tr.rowAoq:last-child').remove();
        $('#aoqId tr.rowAoqHead:last-child').remove();
    }
});

$('#aoqId').on('click', '.rowAoqButtonS', function () {
    $(this).parent().parent().html(panelUpdateDelete + textSubmit + '</div>');
});

$('#aoqId').on('click', '.rowAoqButtonU', function () {
    $(this).parent().parent().html(panelUpdateDelete + textUpdate + '</div>');
})

$('#aoqId').on('click', '.rowAoqButtonD', function () {
    $(this).parent().parent().html(panelSubmit + textDelete + '</div>');
})

$(window).ready(function () {
    if (!dataExists()) {
        addNewRowAoq();
    }
});

function addRowAoq() {
    $('#aoqId').append(
        // <?php
        // if (isset($applicantData)) {
        //     echo 'getText2()';
        // } else {
        //     echo 'getText1()';
        // }
        //     ?>
    );
}

function addNewRowAoq() {
    $('#aoqId').append(getPanelMain() + getPanelSubmit());
}

function getPanelMain() {
    return '<tr class="rowAoqHead">\n' +
        '<th width="3%"></th>\n' +
        '<th width="25%">Institution</th>\n' +
        '<th width="25%">Diploma etc</th>\n' +
        '<th width="25%">Duration</th>\n' +
        '<th width="25%">Year</th>\n' +
        '</tr>' +
        '<tr class="rowAoq">\n' +
        '<th width="3%">' + rowAoq++ + '</th>\n' +
        '<td width="25%"><input type="text" class="form-control"></td>\n' +
        '<td width="25%"><input type="text" class="form-control"></td>\n' +
        '<td width="25%"><input type="number" min="1" class="form-control"></td>\n' +
        '<td width="25%"><input type="text" class="form-control"></td>\n' +
        '</tr>' +
        '<tr class="rowAoqFile">\n' +
        '<td colspan="5">' +
        '<div class="row">' +
        '<div class="col-sm-12"><input type="file"></div>' +
        '</div>' +
        '</td>\n' +
        '</tr>';
}

function getPanelSubmit() {
    return '<tr class="rowAoqButton">\n' +
        '<td colspan="7">' +
        '<div class="row" style="margin-bottom: 20px">' +
        panelSubmit +
        '</div>' +
        '</div>' +
        '</td>\n' +
        '</tr>';
}

function getPanelUpdateDelete() {
    return '<tr class="rowAoqButton">\n' +
        '<td colspan="7">' +
        '<div class="row" style="margin-bottom: 20px">' +
        panelUpdateDelete +
        '</div>' +
        '</td>\n' +
        '</tr>';
}
var rowPq = 1;

var textSubmit = '<span style="left: 60%;position: relative;color: green"><i class="fa fa-check"></i> Submitted</span>';
var textUpdate = '<span style="left: 60%;position: relative;color: green"><i class="fa fa-check"></i> Updated</span>';
var textDelete = '<span style="left: 70%;position: relative;color: red"><i class="fa fa-times"></i> Deleted</span>';
var textWarning = '<span style="left: 60%;position: relative;color: #b58500"><i class="fa fa-exclamation-triangle"></i> Error</span>';

var panelSubmit =
    '<div class="col-sm-12">' +
    '<button type="button" class="btn btn-warning rowPqButtonS" style="left: 50%;transform: translateX(-50%);position: relative">Submit</button>';

var panelUpdateDelete =
    '<div class="col-sm-6">' +
    '<button type="button" class="btn btn-warning rowPqButtonU" style="left: 50%;transform: translateX(-50%);position: relative">Update</button>' +
    '</div>' +
    '<div class="col-sm-6">' +
    '<button type="button" class="btn btn-warning rowPqButtonD" style="left: 50%;transform: translateX(-50%);position: relative">Delete</button>';

$('#addPq').click(function () {
    addNewRowPq();
});

$('#removePq').click(function () {
    if (rowPq > 2) {
        rowPq--;
        $('#pqId tr.rowPqButton:last-child').remove();
        $('#pqId tr.rowPq:last-child').remove();
        $('#pqId tr.rowPqHead:last-child').remove();
    }
});

$('#pqId').on('click', '.rowPqButtonS', function () {
    $(this).parent().parent().html(panelUpdateDelete + textSubmit + '</div>');
});

$('#pqId').on('click', '.rowPqButtonU', function () {
    $(this).parent().parent().html(panelUpdateDelete + textUpdate + '</div>');
})

$('#pqId').on('click', '.rowPqButtonD', function () {
    $(this).parent().parent().html(panelSubmit + textDelete + '</div>');
})

$(window).ready(function () {
    if (!dataExists()) {
        addNewRowPq();
    }
});

function addRowPq() {
    $('#pqId').append(
        // <?php
        // if (isset($applicantData)) {
        //     echo 'getText1()+getText2()';
        // } else {
        //     echo 'getText1()';
        // }
        //     ?>
    );
}

function addNewRowPq() {
    $('#pqId').append(getPanelMain() + getPanelSubmit());
}

function getPanelMain() {
    return '<tr class="rowPqHead">\n' +
        '<th width="3%"></th>\n' +
        '<th width="30%">Institution</th>\n' +
        '<th width="15%">From</th>\n' +
        '<th width="15%">To</th>\n' +
        '<th width="20%">Duration</th>\n' +
        '<th width="20%">Type of Qualification</th>\n' +
        '</tr>' +
        '<tr class="rowPq">\n' +
        '<th width="3%">' + rowPq++ + '</th>\n' +
        '<td width="30%"><input type="text" class="form-control"></td>\n' +
        '<td width="15%"><input type="text" class="form-control"></td>\n' +
        '<td width="15%"><input type="text" class="form-control"></td>\n' +
        '<td width="20%"><input type="number" min="1" class="form-control"></td>\n' +
        '<td width="20%"><input type="text" class="form-control"></td>\n' +
        '</tr>';
}

function getPanelSubmit() {
    return '<tr class="rowPqButton">\n' +
        '<td colspan="7">' +
        '<div class="row" style="margin-bottom: 20px">' +
        panelSubmit +
        '</div>' +
        '</div>' +
        '</td>\n' +
        '</tr>';
}

function getPanelUpdateDelete() {
    return '<tr class="rowPqButton">\n' +
        '<td colspan="7">' +
        '<div class="row" style="margin-bottom: 20px">' +
        panelUpdateDelete +
        '</div>' +
        '</td>\n' +
        '</tr>';
}
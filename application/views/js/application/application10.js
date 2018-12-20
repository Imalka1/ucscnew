var rowRef = 1;

var textSubmit = '<span style="left: 60%;position: relative;color: green"><i class="fa fa-check"></i> Submitted</span>';
var textUpdate = '<span style="left: 60%;position: relative;color: green"><i class="fa fa-check"></i> Updated</span>';
var textDelete = '<span style="left: 70%;position: relative;color: red"><i class="fa fa-times"></i> Deleted</span>';
var textWarning = '<span style="left: 60%;position: relative;color: #b58500"><i class="fa fa-exclamation-triangle"></i> Error</span>';

var panelSubmit =
    '<div class="col-sm-12">' +
    '<button type="button" class="btn btn-warning rowRefButtonS" style="left: 50%;transform: translateX(-50%);position: relative">Submit</button>';

var panelUpdateDelete =
    '<div class="col-sm-6">' +
    '<button type="button" class="btn btn-warning rowRefButtonU" style="left: 50%;transform: translateX(-50%);position: relative">Update</button>' +
    '</div>' +
    '<div class="col-sm-6">' +
    '<button type="button" class="btn btn-warning rowRefButtonD" style="left: 50%;transform: translateX(-50%);position: relative">Delete</button>';

$('#addRef').click(function () {
    addNewRowRef();
});

$('#removeRef').click(function () {
    if (rowRef > 2) {
        rowRef--;
        $('#refId tr.rowRefButton:last-child').remove();
        $('#refId tr.rowRef:last-child').remove();
        $('#refId tr.rowRefHead:last-child').remove();
    }
});

$('#refId').on('click', '.rowRefButtonS', function () {
    $(this).parent().parent().html(panelUpdateDelete + textSubmit + '</div>');
});

$('#refId').on('click', '.rowRefButtonU', function () {
    $(this).parent().parent().html(panelUpdateDelete + textUpdate + '</div>');
})

$('#refId').on('click', '.rowRefButtonD', function () {
    $(this).parent().parent().html(panelSubmit + textDelete + '</div>');
})

$(window).ready(function () {
    if (!dataExists()) {
        addNewRowRef();
    }
});

function addRowRef() {
    $('#refId').append(
    // <?php
    // if (isset($applicantData)) {
    //     echo 'getText1()+getText2()';
    // } else {
    //     echo 'getText1()';
    // }
    //     ?>
);
}

function addNewRowRef() {
    $('#refId').append(getPanelMain() + getPanelSubmit());
}

function getPanelMain() {
    return ' <tr class="rowRefHead">\n' +
        '<th width="3%"></th>\n' +
        '<th width="20%">Name</th>\n' +
        '<th width="20%">Designation</th>\n' +
        '<th width="20%">Address</th>\n' +
        '<th width="20%">Email Address</th>\n' +
        '<th width="17%">Contact Number</th>\n' +
        '</tr>'+
        '<tr class="rowRef">\n' +
        '<th width="3%">' + rowRef++ + '</th>\n' +
        '<td width="20%"><input type="text" class="form-control"></td>\n' +
        '<td width="20%"><input type="text" class="form-control"></td>\n' +
        '<td width="20%"><input type="text" class="form-control"></td>\n' +
        '<td width="20%"><input type="text" class="form-control"></td>\n' +
        '<td width="17%"><input type="text" class="form-control"></td>\n' +
        '</tr>';
}

function getPanelSubmit() {
    return '<tr class="rowRefButton">\n' +
        '<td colspan="6">' +
        '<div class="row" style="margin-bottom: 20px">' +
        panelSubmit +
        '</div>' +
        '</div>' +
        '</td>\n' +
        '</tr>';
}

function getPanelUpdateDelete() {
    return '<tr class="rowRefButton">\n' +
        '<td colspan="6">' +
        '<div class="row" style="margin-bottom: 20px">' +
        panelUpdateDelete +
        '</div>' +
        '</td>\n' +
        '</tr>';
}
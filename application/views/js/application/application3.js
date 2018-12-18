var rowHe = 1;

var textSubmit = '<span style="left: 60%;position: relative;color: green"><i class="fa fa-check"></i> Submitted</span>';
var textUpdate = '<span style="left: 60%;position: relative;color: green"><i class="fa fa-check"></i> Updated</span>';
var textDelete = '<span style="left: 70%;position: relative;color: red"><i class="fa fa-times"></i> Deleted</span>';
var textWarning = '<span style="left: 60%;position: relative;color: #b58500"><i class="fa fa-exclamation-triangle"></i> Error</span>';

var panelSubmit =
    '<div class="col-sm-12">' +
    '<button type="button" class="btn btn-warning rowHeButtonS" style="left: 50%;transform: translateX(-50%);position: relative">Submit</button>';

var panelUpdateDelete =
    '<div class="col-sm-6">' +
    '<button type="button" class="btn btn-warning rowHeButtonU" style="left: 50%;transform: translateX(-50%);position: relative">Update</button>' +
    '</div>' +
    '<div class="col-sm-6">' +
    '<button type="button" class="btn btn-warning rowHeButtonD" style="left: 50%;transform: translateX(-50%);position: relative">Delete</button>';

$('#addHe').click(function () {
    addNewRowHe();
    addDegreeData1RowHe(rowHe);
});

$('#removeHe').click(function () {
    if (rowHe > 2) {
        rowHe--;
        $('#heId tr.rowHeButton:last-child').remove();
        $('#heId tr.rowHeFile:last-child').remove();
        $('#heId tr.rowHe:last-child').remove();
        $('#heId tr.rowHeHead:last-child').remove();
    }
});

$('#heId').on('click', '.rowHeButtonS', function () {
    $(this).parent().parent().html(panelUpdateDelete + textSubmit + '</div>');
});

$('#heId').on('click', '.rowHeButtonU', function () {
    $(this).parent().parent().html(panelUpdateDelete + textUpdate + '</div>');
})

$('#heId').on('click', '.rowHeButtonD', function () {
    $(this).parent().parent().html(panelSubmit + textDelete + '</div>');
})

$(window).ready(function () {
    if (!dataExists()) {
        addNewRowHe();
    }
    addDegreeData1RowHe(rowHe);
});

function addRowHe() {
//     $('#heId').append(
//     <?php
//     if (isset($applicantData)) {
//         echo 'getText1()+getText2()';
//     } else {
//         echo 'getText1()';
//     }
//         ?>
// );
}

function addNewRowHe() {
    $('#heId').append(getPanelMain() + getPanelSubmit());
}

function addDegreeData1RowHe(val) {
    for (var i = 0; i < arr1.length; i++) {
        $('#degreeId' + val + '').append(arr1[i])
    }
}

function getPanelMain() {
    return '<tr class="rowHeHead">\n' +
        '<th width="3%">' + rowHe++ + '.</th>\n' +
        '<th width="25%">Name of the University / Institution</th>\n' +
        '<th width="12%">From</th>\n' +
        '<th width="12%">To</th>\n' +
        '<th width="10%">Duration of the Course (No. of years)</th>\n' +
        '<th width="15%">Awarding Year</th>\n' +
        '<th width="20%">Index No</th>\n' +
        '</tr>' +
        '<tr class="rowHe">\n' +
        '<th width="3%"></th>\n' +
        '<td width="25%"><input type="text" class="form-control"></td>\n' +
        '<td width="12%"><input type="date" class="form-control"></td>\n' +
        '<td width="12%"><input type="date" class="form-control"></td>\n' +
        '<td width="10%"><input type="number" min="1" class="form-control"></td>\n' +
        '<td width="15%"><input type="text" class="form-control"></td>\n' +
        '<td width="20%"><input type="text" class="form-control"></td>\n' +
        '</tr>' +
        '<tr class="rowHeFile">\n' +
        '<td colspan="6">' +
        '<div class="row">' +
        '<div class="col-sm-2" style="line-height: 35px"><b>Degree Obtained</b></div>' +
        '<div class="col-sm-3"><select class="form-control" id="degreeId' + rowHe + '"></select></div>' +
        '<div class="col-sm-4"><select class="form-control"></select></div>' +
        '<div class="col-sm-3"><select class="form-control"></select></div>' +
        '</div>' +
        '</td>\n' +
        '<td colspan="2"><input type="file"></td>\n' +
        '</tr>';
}

function getPanelSubmit() {
    return '<tr class="rowHeButton">\n' +
        '<td colspan="7">' +
        '<div class="row">' +
        '<div class="col-sm-12">' +
        '<button type="button" class="btn btn-warning rowHeButtonS" style="left: 50%;transform: translateX(-50%);position: relative">Submit</button>' +
        '<span></span>' +
        '</div>' +
        '</div>' +
        '</td>\n' +
        '</tr>';
}

function getPanelUpdateDelete() {
    return '<tr class="rowHeButton">\n' +
        '<td colspan="7">' +
        '<div class="row">' +
        '<div class="col-sm-6"><button type="button" class="btn btn-warning rowHeButtonU" style="left: 50%;transform: translateX(-50%);position: relative">Update</button></div>' +
        '<div class="col-sm-6"><button type="button" class="btn btn-warning rowHeButtonD" style="left: 50%;transform: translateX(-50%);position: relative">Delete</button></div>' +
        '<span></span>' +
        '</div>' +
        '</td>\n' +
        '</tr>';
}
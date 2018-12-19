var rowEr = 1;

var textSubmit = '<span style="left: 60%;position: relative;color: green"><i class="fa fa-check"></i> Submitted</span>';
var textUpdate = '<span style="left: 60%;position: relative;color: green"><i class="fa fa-check"></i> Updated</span>';
var textDelete = '<span style="left: 70%;position: relative;color: red"><i class="fa fa-times"></i> Deleted</span>';
var textWarning = '<span style="left: 60%;position: relative;color: #b58500"><i class="fa fa-exclamation-triangle"></i> Error</span>';

var panelSubmit =
    '<div class="col-sm-12">' +
    '<button type="button" class="btn btn-warning rowErButtonS" style="left: 50%;transform: translateX(-50%);position: relative">Submit</button>';

var panelUpdateDelete =
    '<div class="col-sm-6">' +
    '<button type="button" class="btn btn-warning rowErButtonU" style="left: 50%;transform: translateX(-50%);position: relative">Update</button>' +
    '</div>' +
    '<div class="col-sm-6">' +
    '<button type="button" class="btn btn-warning rowErButtonD" style="left: 50%;transform: translateX(-50%);position: relative">Delete</button>';

$('#addEr').click(function () {
    addNewRowEr();
});

$('#removeEr').click(function () {
    if (rowEr > 2) {
        rowEr--;
        $('#erId tr.rowErButton:last-child').remove();
        $('#erId tr.rowEr:last-child').remove();
        $('#erId tr.rowErHead:last-child').remove();
    }
});

$('#erId').on('click', '.rowErButtonS', function () {
    $(this).parent().parent().html(panelUpdateDelete + textSubmit + '</div>');
});

$('#erId').on('click', '.rowErButtonU', function () {
    $(this).parent().parent().html(panelUpdateDelete + textUpdate + '</div>');
})

$('#erId').on('click', '.rowErButtonD', function () {
    $(this).parent().parent().html(panelSubmit + textDelete + '</div>');
})

$(window).ready(function () {
    if (!dataExists()) {
        addNewRowEr();
    }
});

function addRowEr() {
    $('#erId').append(
        // <?php
        // if (isset($applicantData)) {
        //     echo 'getText1()+getText2()';
        // } else {
        //     echo 'getText1()';
        // }
        //     ?>
    );
}

function addNewRowEr() {
    $('#erId').append(getPanelMain() + getPanelSubmit());
}

function getPanelMain() {
    return '<tr class="rowErHead">\n' +
        '<th width="3%"></th>\n' +
        '<th width="15%">Post</th>\n' +
        '<th width="20%">Institution / Company</th>\n' +
        '<th width="15%">Duration</th>\n' +
        '<th width="15%">From</th>\n' +
        '<th width="15%">To</th>\n' +
        '<th width="20%">Last drawn Monthly Salary (Rs.)</th>\n' +
        '</tr>' +
        '<tr class="rowEr">\n' +
        '<th width="3%">' + rowEr++ + '</th>\n' +
        '<td width="15%"><input type="text" class="form-control"></td>\n' +
        '<td width="20%"><input type="text" class="form-control"></td>\n' +
        '<td width="15%"><input type="number" min="1" class="form-control"></td>\n' +
        '<td width="15%"><input type="text" class="form-control"></td>\n' +
        '<td width="15%"><input type="text" class="form-control"></td>\n' +
        '<td width="20%"><input type="text" class="form-control"></td>\n' +
        '</tr>';
}

function getPanelSubmit() {
    return '<tr class="rowErButton">\n' +
        '<td colspan="7">' +
        '<div class="row" style="margin-bottom: 20px">' +
        panelSubmit +
        '</div>' +
        '</div>' +
        '</td>\n' +
        '</tr>';
}

function getPanelUpdateDelete() {
    return '<tr class="rowErButton">\n' +
        '<td colspan="7">' +
        '<div class="row" style="margin-bottom: 20px">' +
        panelUpdateDelete +
        '</div>' +
        '</td>\n' +
        '</tr>';
}
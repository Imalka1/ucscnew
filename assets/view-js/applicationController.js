var today = new Date();
var dd = today.getDate();
var mm = today.getMonth() + 1; //January is 0!
var yyyy = today.getFullYear();
if (dd < 10) {
    dd = '0' + dd
}
if (mm < 10) {
    mm = '0' + mm
}
today = mm + '/' + dd + '/' + yyyy;
$('#appDate').text(today);

$('#submitVacancy').click(function () {
    // window.location.replace('');
});

var aosCount = 3;
$('#addAos').click(function () {
    $('#aosId').append('' +
        '<div class="col-sm-6" style="margin-bottom: 15px"><span>' + aosCount++ + '.</span> <input type="text" class="form-control"></div>')
});

$('#removeAos').click(function () {
    $('#aosId div.col-sm-6:last-child').remove();
    aosCount--;
});


$('#addSe').click(function () {
    addRowSe();
});

$('#removeSe').click(function () {
    $('#seId tr:last-child').remove();
});

$('#addHe').click(function () {
    addRowHe();
});

$('#removeHe').click(function () {
    $('#heId tr.rowHeFile:last-child').remove();
    $('#heId tr.rowHe:last-child').remove();
});

$('#addAoq').click(function () {
    addRowAoq()
});

$('#removeAoq').click(function () {
    $('#aoqId tr.rowAoqFile:last-child').remove();
    $('#aoqId tr.rowAoq:last-child').remove();
});

$('#addPq').click(function () {
    $('#pqId').append('' +
        '<div class="col-sm-12 pqRow" style="margin-bottom: 15px;padding-left: 0px">' +
        '<div class="col-sm-4"><input type="text" class="form-control"></div>' +
        '<div class="col-sm-2"><input type="text" class="form-control"></div>' +
        '<div class="col-sm-2"><input type="text" class="form-control"></div>' +
        '<div class="col-sm-2"><input type="text" class="form-control"></div>' +
        '<div class="col-sm-2"><input type="text" class="form-control"></div>' +
        '</div>'
    );
});

$('#removePq').click(function () {
    $('#pqId div.pqRow:last-child').remove();
});

function addRowSe() {
    $('#seId').append('' +
        '<tr class="rowSe">\n' +
        '<td width="30%"><input type="text" class="form-control"></td>\n' +
        '<td width="20%"><input type="text" class="form-control"></td>\n' +
        '<td width="20%"><input type="text" class="form-control"></td>\n' +
        '<td width="15%"><input type="text" class="form-control"></td>\n' +
        '<td width="15%"><input type="text" class="form-control"></td>\n' +
        '</tr>'
    );
}

function addRowHe() {
    $('#heId').append('' +
        '<tr class="rowHe">\n' +
        '<td width="25%"><input type="text" class="form-control"></td>\n' +
        '<td width="12%"><input type="date" class="form-control"></td>\n' +
        '<td width="12%"><input type="date" class="form-control"></td>\n' +
        '<td width="10%"><input type="text" class="form-control"></td>\n' +
        '<td width="10%"><input type="number" class="form-control"></td>\n' +
        '<td width="10%"><input type="text" class="form-control"></td>\n' +
        '<td width="10%"><input type="text" class="form-control"></td>\n' +
        '<td width="10%"><input type="text" class="form-control"></td>\n' +
        '</tr>' +
        '<tr class="rowHeFile">\n' +
        '<td colspan="8"><input type="file"></td>\n' +
        '</tr>'
    );
}

function addRowAoq(){
    $('#aoqId').append('' +
        '<tr class="rowAoq">\n' +
        '<td width="25%"><input type="text" class="form-control"></td>\n' +
        '<td width="25%"><input type="text" class="form-control"></td>\n' +
        '<td width="25%"><input type="text" class="form-control"></td>\n' +
        '<td width="25%"><input type="text" class="form-control"></td>\n' +
        '</tr>' +
        '<tr class="rowAoqFile">\n' +
        '<td colspan="4"><input type="file"></td>\n' +
        '</tr>'
    );
}

$(window).ready(function () {
    addRowSe();
    addRowHe();
    addRowAoq();
});
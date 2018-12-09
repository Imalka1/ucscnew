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
    aosCount--;
    $('#aosId div.col-sm-6:last-child').remove();
});


$('#addSe').click(function () {
    addRowSe();
});

$('#removeSe').click(function () {
    rowSe--;
    $('#seId tr:last-child').remove();
});

$('#addHe').click(function () {
    addRowHe();
});

$('#removeHe').click(function () {
    rowHe--;
    $('#heId tr.rowHeFile:last-child').remove();
    $('#heId tr.rowHe:last-child').remove();
});

$('#addAoq').click(function () {
    addRowAoq()
});

$('#removeAoq').click(function () {
    rowAoq--;
    $('#aoqId tr.rowAoqFile:last-child').remove();
    $('#aoqId tr.rowAoq:last-child').remove();
});

$('#addPq').click(function () {
    addRowPq();
});

$('#removePq').click(function () {
    rowPq--;
    $('#pqId tr.rowPq:last-child').remove();
});

var rowSe = 1;

function addRowSe() {
    $('#seId').append('' +
        '<tr class="rowSe">\n' +
        '<td width="3%">' + rowSe++ + '</td>\n' +
        '<td width="30%"><input type="text" class="form-control"></td>\n' +
        '<td width="20%"><input type="text" class="form-control"></td>\n' +
        '<td width="20%"><input type="text" class="form-control"></td>\n' +
        '<td width="15%"><input type="text" class="form-control"></td>\n' +
        '<td width="15%"><input type="text" class="form-control"></td>\n' +
        '</tr>'
    );
}

var rowHe = 1;

function addRowHe() {
    $('#heId').append('' +
        '<tr class="rowHe">\n' +
        '<td width="3%">' + rowHe++ + '</td>\n' +
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
        '<td colspan="9"><input type="file"></td>\n' +
        '</tr>'
    );
}

var rowAoq = 1;

function addRowAoq() {
    $('#aoqId').append('' +
        '<tr class="rowAoq">\n' +
        '<td width="3%">' + rowAoq++ + '</td>\n' +
        '<td width="25%"><input type="text" class="form-control"></td>\n' +
        '<td width="25%"><input type="text" class="form-control"></td>\n' +
        '<td width="25%"><input type="text" class="form-control"></td>\n' +
        '<td width="25%"><input type="text" class="form-control"></td>\n' +
        '</tr>' +
        '<tr class="rowAoqFile">\n' +
        '<td colspan="5"><input type="file"></td>\n' +
        '</tr>'
    );
}

var rowPq = 1;

function addRowPq() {
    $('#pqId').append('' +
        '<tr class="rowPq">\n' +
        '<td width="3%">' + rowPq++ + '</td>\n' +
        '<td width="30%"><input type="text" class="form-control"></td>\n' +
        '<td width="15%"><input type="text" class="form-control"></td>\n' +
        '<td width="15%"><input type="text" class="form-control"></td>\n' +
        '<td width="20%"><input type="text" class="form-control"></td>\n' +
        '<td width="20%"><input type="text" class="form-control"></td>\n' +
        '</tr>'
    );
}

$(window).ready(function () {
    addRowSe();
    addRowHe();
    addRowAoq();
    addRowPq();
});
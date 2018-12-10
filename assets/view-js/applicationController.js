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
    if (aosCount > 2) {
        aosCount--;
        $('#aosId div.col-sm-6:last-child').remove();
    }
});

$('#addSe').click(function () {
    addRowSe();
});

$('#removeSe').click(function () {
    if (rowSe > 1) {
        rowSe--;
        $('#seId tr:last-child').remove();
    }
});

$('#addHe').click(function () {
    addRowHe();
    addDataRowHe(rowHe);
});

$('#removeHe').click(function () {
    if (rowHe > 1) {
        rowHe--;
        $('#heId tr.rowHeFile:last-child').remove();
        $('#heId tr.rowHe:last-child').remove();
    }
});

$('#addAoq').click(function () {
    addRowAoq()
});

$('#removeAoq').click(function () {
    if (rowAoq > 1) {
        rowAoq--;
        $('#aoqId tr.rowAoqFile:last-child').remove();
        $('#aoqId tr.rowAoq:last-child').remove();
    }
});

$('#addPq').click(function () {
    addRowPq();
});

$('#removePq').click(function () {
    if (rowPq > 1) {
        rowPq--;
        $('#pqId tr.rowPq:last-child').remove();
    }
});

$('#addEr').click(function () {
    addRowEr();
});

$('#removeEr').click(function () {
    if (rowEr > 1) {
        rowEr--;
        $('#erId tr.rowEr:last-child').remove();
    }
});

$('#addRef').click(function () {
    addRowRef();
});

$('#removeRef').click(function () {
    if (rowRef > 1) {
        rowRef--;
        $('#refId tr.rowRef:last-child').remove();
    }
});

$(document).ready(function () {
    $('#chkAgreement').on('change', function () {
        console.log(1)
        if ($('#chkAgreement').is(':checked')) {
            $('#submitBtn').attr('disabled', false);
        } else {
            $('#submitBtn').attr('disabled', true);
        }
    });
});

var rowSe = 1;

function addRowSe() {
    $('#seId').append('' +
        '<tr class="rowSe">\n' +
        '<th width="3%">' + rowSe++ + '</th>\n' +
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
        '<th width="3%">' + rowHe++ + '.</th>\n' +
        '<td width="25%"><input type="text" class="form-control"></td>\n' +
        '<td width="12%"><input type="date" class="form-control"></td>\n' +
        '<td width="12%"><input type="date" class="form-control"></td>\n' +
        '<td width="10%"><input type="number" min="1" class="form-control"></td>\n' +
        '<td width="10%"><input type="text" class="form-control"></td>\n' +
        '<td width="10%"><input type="text" class="form-control"></td>\n' +
        '<td width="10%"><input type="text" class="form-control"></td>\n' +
        '</tr>' +
        '<tr class="rowHeFile">\n' +
        '<td colspan="6">' +
        '<div class="row">' +
        '<div class="col-sm-2" style="line-height: 35px"><b>Degree Obtained</b></div>' +
        '<div class="col-sm-5"><select class="form-control" id="degreeId' + rowHe + '"></select></div>' +
        '<div class="col-sm-5"><select class="form-control"></select></div>' +
        '</div>' +
        '</td>\n' +
        '<td colspan="2"><input type="file"></td>\n' +
        '</tr>'
    );
}

function addDataRowHe(val) {
    for (var i = 0; i < arr1.length; i++) {
        $('#degreeId' + val + '').append(arr1[i])
    }
}

var rowAoq = 1;

function addRowAoq() {
    $('#aoqId').append('' +
        '<tr class="rowAoq">\n' +
        '<th width="3%">' + rowAoq++ + '</th>\n' +
        '<td width="25%"><input type="text" class="form-control"></td>\n' +
        '<td width="25%"><input type="text" class="form-control"></td>\n' +
        '<td width="25%"><input type="number" min="1" class="form-control"></td>\n' +
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
        '<th width="3%">' + rowPq++ + '</th>\n' +
        '<td width="30%"><input type="text" class="form-control"></td>\n' +
        '<td width="15%"><input type="text" class="form-control"></td>\n' +
        '<td width="15%"><input type="text" class="form-control"></td>\n' +
        '<td width="20%"><input type="number" min="1" class="form-control"></td>\n' +
        '<td width="20%"><input type="text" class="form-control"></td>\n' +
        '</tr>'
    );
}

var rowEr = 1;

function addRowEr() {
    $('#erId').append('' +
        '<tr class="rowEr">\n' +
        '<th width="3%">' + rowEr++ + '</th>\n' +
        '<td width="15%"><input type="text" class="form-control"></td>\n' +
        '<td width="20%"><input type="text" class="form-control"></td>\n' +
        '<td width="15%"><input type="number" min="1" class="form-control"></td>\n' +
        '<td width="15%"><input type="text" class="form-control"></td>\n' +
        '<td width="15%"><input type="text" class="form-control"></td>\n' +
        '<td width="20%"><input type="text" class="form-control"></td>\n' +
        '</tr>'
    );
}

var rowRef = 1;

function addRowRef() {
    $('#refId').append('' +
        '<tr class="rowRef">\n' +
        '<th width="3%">' + rowRef++ + '</th>\n' +
        '<td width="20%"><input type="text" class="form-control"></td>\n' +
        '<td width="20%"><input type="text" class="form-control"></td>\n' +
        '<td width="20%"><input type="text" class="form-control"></td>\n' +
        '<td width="20%"><input type="text" class="form-control"></td>\n' +
        '<td width="20%"><input type="text" class="form-control"></td>\n' +
        '</tr>'
    );
}

$(window).ready(function () {
    addRowSe();
    addRowHe();
    addDataRowHe(rowHe);
    addRowAoq();
    addRowPq();
    addRowEr();
    addRowRef();
});
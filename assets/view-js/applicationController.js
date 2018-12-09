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
    $('#seId').append('' +
        '<div class="col-sm-12" style="margin-bottom: 15px;padding-left: 0px">' +
        '<div class="col-sm-3"><input type="text" class="form-control"></div>' +
        '<div class="col-sm-2"><input type="date" class="form-control"></div>' +
        '<div class="col-sm-2"><input type="date" class="form-control"></div>' +
        '<div class="col-sm-3"><input type="text" class="form-control"></div>' +
        '<div class="col-sm-2"><input type="text" class="form-control"></div>' +
        '</div>'
    );
});

$('#removeSe').click(function () {
    $('#seId div.col-sm-12:last-child').remove();
});

$('#addHe').click(function () {
    $('#heId').append('' +
        '<div class="col-sm-12 heRow" style="margin-bottom: 15px;padding-left: 0px">' +
        '<div class="col-sm-2"><input type="text" class="form-control"></div>' +
        '<div class="col-sm-2"><input type="date" class="form-control"></div>' +
        '<div class="col-sm-2"><input type="date" class="form-control"></div>' +
        '<div class="col-sm-1"><input type="text" class="form-control"></div>' +
        '<div class="col-sm-1"><input type="number" min="1" class="form-control"></div>' +
        '<div class="col-sm-1"><input type="text" class="form-control"></div>' +
        '<div class="col-sm-1"><input type="text" class="form-control"></div>' +
        '<div class="col-sm-2"><input type="text" class="form-control"></div>' +
        '<div class="col-sm-12" style="margin-bottom: 10px;margin-top: 15px"><input type="file"></div>' +
        '</div>'
    );
});

$('#removeHe').click(function () {
    $('#heId div.heRow:last-child').remove();
});
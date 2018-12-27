var rowSe = 1;

var textSubmit = '<span style="left: 60%;position: relative;color: green"><i class="fa fa-check"></i> Submitted</span>';
var textUpdate = '<span style="left: 60%;position: relative;color: green"><i class="fa fa-check"></i> Updated</span>';
var textDelete = '<span style="left: 70%;position: relative;color: red"><i class="fa fa-times"></i> Deleted</span>';
var textWarning = '<span style="left: 60%;position: relative;color: #b58500"><i class="fa fa-exclamation-triangle"></i>&nbsp;&nbsp;An error</span>';
var textEmpty = '<span style="left: 60%;position: relative;color: #b58500"><i class="fa fa-exclamation-triangle"></i>&nbsp;&nbsp;Empty fields</span>';

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
    if (rowSe > 1) {
        rowSe--;
        $('#seId tr.rowSeButton:last-child').remove();
        $('#seId tr.rowSe:last-child').remove();
        $('#seId tr.rowSeHead:last-child').remove();
    }
});

$('#seId').on('click', '.rowSeButtonS', function () {
    var that = this;
    var areEmpty = checkEmptiness(that, 5);
    if (areEmpty) {
        $.ajax(
            {
                type: "post",
                url: getUrlSubmit(),
                data: {
                    seNameOfSchool: $(that).parents('tr').parent().children("tr:nth-child(" + $(that).parents('tr').index() + ")").children().children().eq(1).val(),
                    seFrom: $(that).parents('tr').parent().children("tr:nth-child(" + $(that).parents('tr').index() + ")").children().children().eq(2).val(),
                    seTo: $(that).parents('tr').parent().children("tr:nth-child(" + $(that).parents('tr').index() + ")").children().children().eq(3).val(),
                    seExam: $(that).parents('tr').parent().children("tr:nth-child(" + $(that).parents('tr').index() + ")").children().children().eq(4).val(),
                    seYear: $(that).parents('tr').parent().children("tr:nth-child(" + $(that).parents('tr').index() + ")").children().children().eq(5).val()
                },
                success: function (response) {
                    var json = $.parseJSON(response);
                    if (json[0] == 'true') {
                        $(that).parents('tr').parent().children("tr:nth-child(" + $(that).parents('tr').index() + ")").children().children().eq(0).attr('value', json[1])
                        $(that).parent().parent().html(panelUpdateDelete + textSubmit + '</div>');
                    } else {
                        $(that).parent().parent().html(panelSubmit + textWarning + '</div>');
                    }
                },
                error: function () {
                    $(that).parent().parent().html(panelSubmit + textWarning + '</div>');
                }
            }
        );
    } else {
        $(that).parent().parent().html(panelSubmit + textEmpty + '</div>');
    }
})

$('#seId').on('click', '.rowSeButtonU', function () {
    var that = this;
    var areEmpty = checkEmptiness(that, 5);
    if (areEmpty) {
        $.ajax(
            {
                type: "post",
                url: getUrlUpdate(),
                data: {
                    seId: $(that).parents('tr').parent().children("tr:nth-child(" + $(that).parents('tr').index() + ")").children().children().eq(0).val(),
                    seNameOfSchool: $(that).parents('tr').parent().children("tr:nth-child(" + $(that).parents('tr').index() + ")").children().children().eq(1).val(),
                    seFrom: $(that).parents('tr').parent().children("tr:nth-child(" + $(that).parents('tr').index() + ")").children().children().eq(2).val(),
                    seTo: $(that).parents('tr').parent().children("tr:nth-child(" + $(that).parents('tr').index() + ")").children().children().eq(3).val(),
                    seExam: $(that).parents('tr').parent().children("tr:nth-child(" + $(that).parents('tr').index() + ")").children().children().eq(4).val(),
                    seYear: $(that).parents('tr').parent().children("tr:nth-child(" + $(that).parents('tr').index() + ")").children().children().eq(5).val()
                },
                success: function (response) {
                    if (response == 'true') {
                        $(that).parent().parent().html(panelUpdateDelete + textUpdate + '</div>');
                    } else {
                        $(that).parent().parent().html(panelUpdateDelete + textWarning + '</div>');
                    }
                },
                error: function () {
                    $(that).parent().parent().html(panelUpdateDelete + textWarning + '</div>');
                }
            }
        );
    } else {
        $(that).parent().parent().html(panelUpdateDelete + textEmpty + '</div>');
    }
})

$('#seId').on('click', '.rowSeButtonD', function () {
    var that = this;
    $.ajax(
        {
            type: "post",
            url: getUrlDelete(),
            data: {
                seId: $(that).parents('tr').parent().children("tr:nth-child(" + $(that).parents('tr').index() + ")").children().children().eq(0).val()
            },
            success: function (response) {
                if (response == 'true') {
                    $(that).parent().parent().html(panelSubmit + textDelete + '</div>');
                } else {
                    $(that).parent().parent().html(panelUpdateDelete + textWarning + '</div>');
                }
            },
            error: function () {
                $(that).parent().parent().html(panelUpdateDelete + textWarning + '</div>');
            }
        }
    );
})

$(window).ready(function () {
    if (!dataExists()) {
        addNewRowSe();
    }
});

function checkEmptiness(that, fieldsLength) {
    var count = 0;
    for (var i = 0; i < fieldsLength; i++) {
        if ($(that).parents('tr').parent().children("tr:nth-child(" + $(that).parents('tr').index() + ")").children().children().eq(i + 1).val() != '') {
            count++;
        }
    }
    if (count == fieldsLength) {
        return true;
    } else {
        return false;
    }
}

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
        '<td width="30%"><input type="text" class="form-control" required value="' + dataSet[1] + '"></td>\n' +
        '<td width="15%"><input type="date" class="form-control" required value="' + dataSet[2] + '"></td>\n' +
        '<td width="15%"><input type="date" class="form-control" required value="' + dataSet[3] + '"></td>\n' +
        '<td width="25%"><input type="text" class="form-control" required value="' + dataSet[4] + '"></td>\n' +
        '<td width="15%"><input type="text" class="form-control" required value="' + dataSet[5] + '"></td>\n' +
        '</tr>';
}

function getPanelSubmit() {
    return '<tr class="rowSeButton">\n' +
        '<td colspan="6">' +
        '<div class="row" style="margin-bottom: 20px">' +
        panelSubmit +
        '</div>' +
        '</div>' +
        '</td>\n' +
        '</tr>';
}

function getPanelUpdateDelete() {
    return '<tr class="rowSeButton">\n' +
        '<td colspan="6">' +
        '<div class="row" style="margin-bottom: 20px">' +
        panelUpdateDelete +
        '</div>' +
        '</td>\n' +
        '</tr>';
}
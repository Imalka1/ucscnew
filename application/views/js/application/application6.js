var rowPq = 1;

var textSubmit = '<span style="left: 60%;position: relative;color: green"><i class="fa fa-check"></i> Submitted</span>';
var textUpdate = '<span style="left: 60%;position: relative;color: green"><i class="fa fa-check"></i> Updated</span>';
var textDelete = '<span style="left: 70%;position: relative;color: red"><i class="fa fa-times"></i> Deleted</span>';
var textWarning = '<span style="left: 60%;position: relative;color: #b58500"><i class="fa fa-exclamation-triangle"></i> Error</span>';
var textEmpty = '<span style="left: 60%;position: relative;color: #b58500"><i class="fa fa-exclamation-triangle"></i>&nbsp;&nbsp;Empty fields</span>';

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
    if (rowPq > 1) {
        rowPq--;
        $('#pqId tr.rowPqButton:last-child').remove();
        $('#pqId tr.rowPq:last-child').remove();
        $('#pqId tr.rowPqHead:last-child').remove();
    }
});

$('#pqId').on('click', '.rowPqButtonS', function () {
    var that = this;
    var areEmpty = checkEmptiness(that, 5);
    if (areEmpty) {
        $.ajax(
            {
                type: "post",
                url: getUrlSubmit(),
                data: {
                    pqInstitution: $(that).parents('tr').parent().children("tr:nth-child(" + $(that).parents('tr').index() + ")").children().children().eq(1).val(),
                    pqFrom: $(that).parents('tr').parent().children("tr:nth-child(" + $(that).parents('tr').index() + ")").children().children().eq(2).val(),
                    pqTo: $(that).parents('tr').parent().children("tr:nth-child(" + $(that).parents('tr').index() + ")").children().children().eq(3).val(),
                    pqDuration: $(that).parents('tr').parent().children("tr:nth-child(" + $(that).parents('tr').index() + ")").children().children().eq(4).val(),
                    pqQualification: $(that).parents('tr').parent().children("tr:nth-child(" + $(that).parents('tr').index() + ")").children().children().eq(5).val()
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
});

$('#pqId').on('click', '.rowPqButtonU', function () {
    var that = this;
    var areEmpty = checkEmptiness(that, 5);
    if (areEmpty) {
        $.ajax(
            {
                type: "post",
                url: getUrlUpdate(),
                data: {
                    pqId: $(that).parents('tr').parent().children("tr:nth-child(" + $(that).parents('tr').index() + ")").children().children().eq(0).val(),
                    pqInstitution: $(that).parents('tr').parent().children("tr:nth-child(" + $(that).parents('tr').index() + ")").children().children().eq(1).val(),
                    pqFrom: $(that).parents('tr').parent().children("tr:nth-child(" + $(that).parents('tr').index() + ")").children().children().eq(2).val(),
                    pqTo: $(that).parents('tr').parent().children("tr:nth-child(" + $(that).parents('tr').index() + ")").children().children().eq(3).val(),
                    pqDuration: $(that).parents('tr').parent().children("tr:nth-child(" + $(that).parents('tr').index() + ")").children().children().eq(4).val(),
                    pqQualification: $(that).parents('tr').parent().children("tr:nth-child(" + $(that).parents('tr').index() + ")").children().children().eq(5).val()
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

$('#pqId').on('click', '.rowPqButtonD', function () {
    var that = this;
    $.ajax(
        {
            type: "post",
            url: getUrlDelete(),
            data: {
                pqId: $(that).parents('tr').parent().children("tr:nth-child(" + $(that).parents('tr').index() + ")").children().children().eq(0).val()
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
        addNewRowPq();
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

function addNewRowPq() {
    $('#pqId').append(getPanelMain(['', '', '', '', '', '']) + getPanelSubmit());
}

function addRowPq(data1, data2, data3, data4, data5, data6) {
    $('#pqId').append(getPanelMain([data1, data2, data3, data4, data5, data6]) + getPanelUpdateDelete());
}

function getPanelMain(dataSet) {
    return '<tr class="rowPqHead">\n' +
        '<th width="3%">' + rowPq++ + '.</th>\n' +
        '<th width="30%">Institution</th>\n' +
        '<th width="15%">From</th>\n' +
        '<th width="15%">To</th>\n' +
        '<th width="20%">Duration(Years)</th>\n' +
        '<th width="20%">Type of Qualification</th>\n' +
        '</tr>' +
        '<tr class="rowPq">\n' +
        '<th width="3%"><input type="hidden" value="' + dataSet[0] + '"></th>\n' +
        '<td width="30%"><input type="text" class="form-control" required value="' + dataSet[1] + '"></td>\n' +
        '<td width="15%"><input type="date" class="form-control" required value="' + dataSet[2] + '"></td>\n' +
        '<td width="15%"><input type="date" class="form-control" required value="' + dataSet[3] + '"></td>\n' +
        '<td width="20%"><input type="number" min="1" class="form-control" required value="' + dataSet[4] + '"></td>\n' +
        '<td width="20%"><input type="text" class="form-control" required value="' + dataSet[5] + '"></td>\n' +
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
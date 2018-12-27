var rowEr = 1;

var textSubmit = '<span style="left: 60%;position: relative;color: green"><i class="fa fa-check"></i> Submitted</span>';
var textUpdate = '<span style="left: 60%;position: relative;color: green"><i class="fa fa-check"></i> Updated</span>';
var textDelete = '<span style="left: 70%;position: relative;color: red"><i class="fa fa-times"></i> Deleted</span>';
var textWarning = '<span style="left: 60%;position: relative;color: #b58500"><i class="fa fa-exclamation-triangle"></i> Error</span>';
var textEmpty = '<span style="left: 60%;position: relative;color: #b58500"><i class="fa fa-exclamation-triangle"></i>&nbsp;&nbsp;Empty fields</span>';

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
    if (rowEr > 1) {
        rowEr--;
        $('#erId tr.rowErButton:last-child').remove();
        $('#erId tr.rowEr:last-child').remove();
        $('#erId tr.rowErHead:last-child').remove();
    }
});

$('#erId').on('click', '.rowErButtonS', function () {
    var that = this;
    var areEmpty = checkEmptiness(that, 6);
    if (areEmpty) {
        $.ajax(
            {
                type: "post",
                url: getUrlSubmit(),
                data: {
                    erPost: $(that).parents('tr').parent().children("tr:nth-child(" + $(that).parents('tr').index() + ")").children().children().eq(1).val(),
                    erInstitution: $(that).parents('tr').parent().children("tr:nth-child(" + $(that).parents('tr').index() + ")").children().children().eq(2).val(),
                    erFrom: $(that).parents('tr').parent().children("tr:nth-child(" + $(that).parents('tr').index() + ")").children().children().eq(3).val(),
                    erTo: $(that).parents('tr').parent().children("tr:nth-child(" + $(that).parents('tr').index() + ")").children().children().eq(4).val(),
                    erDuration: $(that).parents('tr').parent().children("tr:nth-child(" + $(that).parents('tr').index() + ")").children().children().eq(5).val(),
                    erSalary: $(that).parents('tr').parent().children("tr:nth-child(" + $(that).parents('tr').index() + ")").children().children().eq(6).val()
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

$('#erId').on('click', '.rowErButtonU', function () {
    var that = this;
    var areEmpty = checkEmptiness(that, 6);
    if (areEmpty) {
        $.ajax(
            {
                type: "post",
                url: getUrlUpdate(),
                data: {
                    erId: $(that).parents('tr').parent().children("tr:nth-child(" + $(that).parents('tr').index() + ")").children().children().eq(0).val(),
                    erPost: $(that).parents('tr').parent().children("tr:nth-child(" + $(that).parents('tr').index() + ")").children().children().eq(1).val(),
                    erInstitution: $(that).parents('tr').parent().children("tr:nth-child(" + $(that).parents('tr').index() + ")").children().children().eq(2).val(),
                    erFrom: $(that).parents('tr').parent().children("tr:nth-child(" + $(that).parents('tr').index() + ")").children().children().eq(3).val(),
                    erTo: $(that).parents('tr').parent().children("tr:nth-child(" + $(that).parents('tr').index() + ")").children().children().eq(4).val(),
                    erDuration: $(that).parents('tr').parent().children("tr:nth-child(" + $(that).parents('tr').index() + ")").children().children().eq(5).val(),
                    erSalary: $(that).parents('tr').parent().children("tr:nth-child(" + $(that).parents('tr').index() + ")").children().children().eq(6).val()
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

$('#erId').on('click', '.rowErButtonD', function () {
    var that = this;
    $.ajax(
        {
            type: "post",
            url: getUrlDelete(),
            data: {
                erId: $(that).parents('tr').parent().children("tr:nth-child(" + $(that).parents('tr').index() + ")").children().children().eq(0).val()
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
        addNewRowEr();
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

function addNewRowEr() {
    $('#erId').append(getPanelMain(['', '', '', '', '', '', '']) + getPanelSubmit());
}

function addRowEr(data1, data2, data3, data4, data5, data6, data7) {
    $('#erId').append(getPanelMain([data1, data2, data3, data4, data5, data6, data7]) + getPanelUpdateDelete());
}

function getPanelMain(dataSet) {
    return '<tr class="rowErHead">\n' +
        '<th width="3%">' + rowEr++ + '.</th>\n' +
        '<th width="15%">Post</th>\n' +
        '<th width="20%">Institution / Company</th>\n' +
        '<th width="15%">From</th>\n' +
        '<th width="15%">To</th>\n' +
        '<th width="15%">Duration</th>\n' +
        '<th width="20%">Last drawn Monthly Salary (Rs.)</th>\n' +
        '</tr>' +
        '<tr class="rowEr">\n' +
        '<th width="3%"><input type="hidden" value="' + dataSet[0] + '"></th>\n' +
        '<td width="15%"><input type="text" class="form-control" required value="' + dataSet[1] + '"></td>\n' +
        '<td width="20%"><input type="text" class="form-control" required value="' + dataSet[2] + '"></td>\n' +
        '<td width="15%"><input type="date" class="form-control" required value="' + dataSet[3] + '"></td>\n' +
        '<td width="15%"><input type="date" class="form-control" required value="' + dataSet[4] + '"></td>\n' +
        '<td width="15%"><input type="number" min="1" class="form-control" required value="' + dataSet[5] + '"></td>\n' +
        '<td width="20%"><input type="text" class="form-control" required value="' + dataSet[6] + '"></td>\n' +
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
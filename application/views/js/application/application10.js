var rowRef = 1;

var textSubmit = '<span style="left: 60%;position: relative;color: green"><i class="fa fa-check"></i> Submitted</span>';
var textUpdate = '<span style="left: 60%;position: relative;color: green"><i class="fa fa-check"></i> Updated</span>';
var textDelete = '<span style="left: 70%;position: relative;color: red"><i class="fa fa-times"></i> Deleted</span>';
var textWarning = '<span style="left: 60%;position: relative;color: #b58500"><i class="fa fa-exclamation-triangle"></i> Error</span>';
var textEmpty = '<span style="left: 60%;position: relative;color: #b58500"><i class="fa fa-exclamation-triangle"></i>&nbsp;&nbsp;Empty fields</span>';

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
    if (rowRef > 1) {
        rowRef--;
        $('#refId tr.rowRefButton:last-child').remove();
        $('#refId tr.rowRef:last-child').remove();
        $('#refId tr.rowRefHead:last-child').remove();
    }
});

$('#refId').on('click', '.rowRefButtonS', function () {
    var that = this;
    var areEmpty = checkEmptiness(that, 5);
    if (areEmpty) {
        $.ajax(
            {
                type: "post",
                url: getUrlSubmit(),
                data: {
                    refName: $(that).parents('tr').parent().children("tr:nth-child(" + $(that).parents('tr').index() + ")").children().children().eq(1).val(),
                    refDesignation: $(that).parents('tr').parent().children("tr:nth-child(" + $(that).parents('tr').index() + ")").children().children().eq(2).val(),
                    refAddress: $(that).parents('tr').parent().children("tr:nth-child(" + $(that).parents('tr').index() + ")").children().children().eq(3).val(),
                    refEmail: $(that).parents('tr').parent().children("tr:nth-child(" + $(that).parents('tr').index() + ")").children().children().eq(4).val(),
                    refContact: $(that).parents('tr').parent().children("tr:nth-child(" + $(that).parents('tr').index() + ")").children().children().eq(5).val()
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

$('#refId').on('click', '.rowRefButtonU', function () {
    var that = this;
    var areEmpty = checkEmptiness(that, 5);
    if (areEmpty) {
        $.ajax(
            {
                type: "post",
                url: getUrlUpdate(),
                data: {
                    refId: $(that).parents('tr').parent().children("tr:nth-child(" + $(that).parents('tr').index() + ")").children().children().eq(0).val(),
                    refName: $(that).parents('tr').parent().children("tr:nth-child(" + $(that).parents('tr').index() + ")").children().children().eq(1).val(),
                    refDesignation: $(that).parents('tr').parent().children("tr:nth-child(" + $(that).parents('tr').index() + ")").children().children().eq(2).val(),
                    refAddress: $(that).parents('tr').parent().children("tr:nth-child(" + $(that).parents('tr').index() + ")").children().children().eq(3).val(),
                    refEmail: $(that).parents('tr').parent().children("tr:nth-child(" + $(that).parents('tr').index() + ")").children().children().eq(4).val(),
                    refContact: $(that).parents('tr').parent().children("tr:nth-child(" + $(that).parents('tr').index() + ")").children().children().eq(5).val()
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

$('#refId').on('click', '.rowRefButtonD', function () {
    var that = this;
    $.ajax(
        {
            type: "post",
            url: getUrlDelete(),
            data: {
                refId: $(that).parents('tr').parent().children("tr:nth-child(" + $(that).parents('tr').index() + ")").children().children().eq(0).val()
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
        addNewRowRef();
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

function addNewRowRef() {
    $('#refId').append(getPanelMain(['', '', '', '', '', '']) + getPanelSubmit());
}

function addRowRef(data1, data2, data3, data4, data5, data6) {
    $('#refId').append(getPanelMain([data1, data2, data3, data4, data5, data6]) + getPanelUpdateDelete());
}

function getPanelMain(dataSet) {
    return ' <tr class="rowRefHead">\n' +
        '<th width="3%">' + rowRef++ + '.</th>\n' +
        '<th width="20%">Name</th>\n' +
        '<th width="20%">Designation</th>\n' +
        '<th width="20%">Address</th>\n' +
        '<th width="20%">Email Address</th>\n' +
        '<th width="17%">Contact Number</th>\n' +
        '</tr>' +
        '<tr class="rowRef">\n' +
        '<th width="3%"><input type="hidden" value="' + dataSet[0] + '"></th>\n' +
        '<td width="20%"><input type="text" class="form-control" required value="' + dataSet[1] + '"></td>\n' +
        '<td width="20%"><input type="text" class="form-control" required value="' + dataSet[2] + '"></td>\n' +
        '<td width="20%"><input type="text" class="form-control" required value="' + dataSet[3] + '"></td>\n' +
        '<td width="20%"><input type="email" class="form-control" required value="' + dataSet[4] + '"></td>\n' +
        '<td width="17%"><input type="text" class="form-control" required value="' + dataSet[5] + '"></td>\n' +
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
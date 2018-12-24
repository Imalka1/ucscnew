var aosCount = 1;

var textSubmit = '<span style="left: 45%;position: relative;color: green"><i class="fa fa-check"></i> Submitted</span>';
var textUpdate = '<span style="left: 45%;position: relative;color: green"><i class="fa fa-check"></i> Updated</span>';
var textDelete = '<span style="left: 70%;position: relative;color: red"><i class="fa fa-times"></i> Deleted</span>';
var textWarning = '<span style="left: 55%;position: relative;color: #b58500"><i class="fa fa-exclamation-triangle"></i> Error</span>';

var panelSubmit =
    '<div class="col-sm-12">' +
    '<button type="button" class="btn btn-warning rowAosButtonS" style="left: 50%;transform: translateX(-50%);position: relative">Submit</button>';

var panelUpdateDelete =
    '<div class="col-sm-6">' +
    '<button type="button" class="btn btn-warning rowAosButtonU" style="left: 50%;transform: translateX(-50%);position: relative">Update</button>' +
    '</div>' +
    '<div class="col-sm-6">' +
    '<button type="button" class="btn btn-warning rowAosButtonD" style="left: 50%;transform: translateX(-50%);position: relative">Delete</button>';

$('#addAos').click(function () {
    addNewRowAos();
});

$('#removeAos').click(function () {
    if (aosCount > 2) {
        aosCount--;
        $('#aosId .specField:last-child').remove();
    }
});

$('#aosId').on('click', '.rowAosButtonS', function () {
    var that = this;
    $.ajax(
        {
            type: "post",
            url: getUrlSubmit(),
            data: {
                aosDescription: $(that).parent().parent().parent().children().children('input').eq(1).val()
            },
            success: function (response) {
                var json = $.parseJSON(response);
                if (json[0] == 'true') {
                    $(that).parent().parent().parent().children().children('input').eq(0).attr('value', json[1])
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
});

$('#aosId').on('click', '.rowAosButtonU', function () {
    var that = this;
    $.ajax(
        {
            type: "post",
            url: getUrlUpdate(),
            data: {
                aosId: $(that).parent().parent().parent().children().children('input').eq(0).val(),
                aosDescription: $(that).parent().parent().parent().children().children('input').eq(1).val()
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
})

$('#aosId').on('click', '.rowAosButtonD', function () {
    var that = this;
    $.ajax(
        {
            type: "post",
            url: getUrlDelete(),
            data: {
                aosId: $(that).parent().parent().parent().children().children('input').eq(0).val()
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
        addNewRowAos();
    }
});

function addNewRowAos() {
    $('#aosId').append(getPanelMain(['', '']) + getPanelSubmit() + '</div></div>');
}

function addRowAos(data1, data2) {
    $('#aosId').append(getPanelMain([data1, data2]) + getPanelUpdateDelete() + '</div></div>');
}

function getPanelMain(dataSet) {
    return '<div class="col-sm-6 specField" style="margin-bottom: 15px">' +
        '<div class="row">' +
        '<div class="col-sm-12" style="margin-bottom: 10px">' +
        '<span>' + aosCount++ + '.</span>' +
        '<input type="hidden" value="' + dataSet[0] + '">' +
        '<input type="text" class="form-control" required value="' + dataSet[1] + '">' +
        '</div>';
}

function getPanelSubmit() {
    return '<div class="col-sm-12 rowAosButton" style="margin-bottom: 20px">' +
        panelSubmit +
        '</div>';
}

function getPanelUpdateDelete() {
    return '<div class="col-sm-12 rowAosButton" style="margin-bottom: 20px">' +
        panelUpdateDelete +
        '</div>';
}
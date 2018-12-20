var aosCount = 1;

var textSubmit = '<span style="left: 45%;position: relative;color: green"><i class="fa fa-check"></i> Submitted</span>';
var textUpdate = '<span style="left: 45%;position: relative;color: green"><i class="fa fa-check"></i> Updated</span>';
var textDelete = '<span style="left: 70%;position: relative;color: red"><i class="fa fa-times"></i> Deleted</span>';
var textWarning = '<span style="left: 45%;position: relative;color: #b58500"><i class="fa fa-exclamation-triangle"></i> Error</span>';

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
    $(this).parent().parent().html(panelUpdateDelete + textSubmit + '</div>');
});

$('#aosId').on('click', '.rowAosButtonU', function () {
    $(this).parent().parent().html(panelUpdateDelete + textUpdate + '</div>');
})

$('#aosId').on('click', '.rowAosButtonD', function () {
    $(this).parent().parent().html(panelSubmit + textDelete + '</div>');
})

$(window).ready(function () {
    if (!dataExists()) {
        addNewRowAos();
    }
});

function addNewRowAos() {
    $('#aosId').append(getPanelMain() + getPanelSubmit() + '</div></div>');
}

function getPanelMain() {
    return '<div class="col-sm-6 specField" style="margin-bottom: 15px">' +
        '<div class="row">' +
        '<div class="col-sm-12" style="margin-bottom: 10px">' +
        '<span>' + aosCount++ + '.</span>' +
        '<input type="text" class="form-control">' +
        '</div>';
}

function getPanelSubmit() {
    return '<div class="row rowAosButton" style="margin-bottom: 20px">' +
        '<div class="col-sm-12">' +
        panelSubmit +
        '</div>' +
        '</div>';
}

function getPanelUpdateDelete() {
    return '<div class="row rowAosButton" style="margin-bottom: 20px">' +
        '<div class="col-sm-12">' +
        panelUpdateDelete +
        '</div>' +
        '</div>';
}

//--------------------------------------------------------Calculate Age---------------------------------------------------------------------

$('#ageId').html('0 Years / 0 Months / 0 Days');

$('#dateId').bind('keyup mouseup', function () {
    if ($('#dateId').val() != '') {
        getAge($('#dateId').val())
    }
})

$('#dateId').change(function () {
    if ($('#dateId').val() != '') {
        getAge($('#dateId').val())
    }
})

function getAge(dateString) {
    var now = new Date();

    var yearNow = parseInt(now.getFullYear());
    var monthNow = parseInt(now.getMonth() + 1);
    var dateNow = parseInt(now.getDate());

    var dobSet = dateString.split('-');
    var dob = new Date(dobSet[0], dobSet[1] - 1, dobSet[2]);

    var yearDob = parseInt(dob.getFullYear());
    var monthDob = parseInt(dob.getMonth() + 1);
    var dateDob = parseInt(dob.getDate());
    var age = {};
    var yearString = "";
    var monthString = "";
    var dayString = "";

    var yearAge = yearNow - yearDob;

    if (monthNow >= monthDob)
        var monthAge = monthNow - monthDob;
    else {
        yearAge--;
        var monthAge = 12 + monthNow - monthDob;
    }

    if (dateNow >= dateDob)
        var dateAge = dateNow - dateDob;
    else {
        monthAge--;
        var dateAge = 31 + dateNow - dateDob;

        if (monthAge < 0) {
            monthAge = 11;
            yearAge--;
        }
    }

    age = {
        years: yearAge,
        months: monthAge,
        days: dateAge
    };

    if (age.years > 1) yearString = " years";
    else yearString = " year";
    if (age.months > 1) monthString = " months";
    else monthString = " month";
    if (age.days > 1) dayString = " days";
    else dayString = " day";

    $('#ageId').html(age.years + ' ' + yearString + ' / ' + age.months + ' ' + monthString + ' / ' + age.days + ' ' + dayString + '');
}
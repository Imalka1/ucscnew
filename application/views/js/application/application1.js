$(document).ready(function () {
    $('.chkPostFor').on('change', function () {
        if ($('.chkPostFor').is(':checked')) {
            $('.chkPostFor').attr('required', false);
        } else {
            $('.chkPostFor').attr('required', true);
        }
    });
    if ($('.chkPostFor').is(':checked')) {
        $('.chkPostFor').attr('required', false);
    } else {
        $('.chkPostFor').attr('required', true);
    }
    if ($('#dateId').val() != '') {
        getAge($('#dateId').val())
    }
});

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
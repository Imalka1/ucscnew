$('#tblApplicants tbody tr').click(function () {
    $('#txtId').val($(this).children('td:nth-child(1)').text());
    $('#txtName').val($(this).children('td:nth-child(2)').text());
    $('#txtMarks').val($(this).children('td:nth-child(4)').text().split(" / ")[0]);
    $('#txtTotal').val($(this).children('td:nth-child(4)').text());
    // $('#txtAvg').val(parseInt($(this).children('td:nth-child(4)').text()) / 4);
})

$(document).ready(function () {
    $('.txtMarks').attr('disabled', true);
    $('#submitBtn').attr('disabled', true);
});

$('#tblApplicants tbody tr').click(function () {
    if ($('#txtId').val() != '') {
        $('.txtMarks').attr('disabled', false);
        $('#submitBtn').attr('disabled', false);
    }
});

$('.txtMarks').bind('keyup mouseup', function () {
    var total = 0;
    for (var j = 0; j < $("#tblMarks tr").length - 4; j++) {
        total += parseInt($('#txtMarks' + (j + 1) + '').val());
        if (total > 100) {
            demo.showSwal('marks-exceeded')
            $('#' + $(this).attr('id')).val(parseInt($('#' + $(this).attr('id')).val()) - (total - 100))
            total -= total - 100;
        }
    }
    // $('#tblApplicants tbody tr:nth-child(' + (i + 1) + ')').children('td:nth-child(4)').text(total + ' / 100');
    $('#txtTotal').val(total + ' / 100');
})

$('#submitBtn').click(function () {
    if ($('#txtCount').val() != 0 && $('#txtCount').val() != '') {

    } else {
        demo.showSwal('interviewers-count');
    }
});

// $('.txtMarks').bind('keyup mouseup', function () {
//     for (var i = 0; i < $("#tblApplicants tr").length - 2; i++) {
//         if ($('#tblApplicants tbody tr:nth-child(' + (i + 1) + ')').children('td:nth-child(1)').text() == $('#txtId').val()) {
//             var total = 0;
//             for (var j = 0; j < $("#tblMarks tr").length - 4; j++) {
//                 total += parseInt($('#txtMarks' + (j + 1) + '').val());
//                 if (total > 100) {
//                     demo.showSwal('marks-exceeded')
//                     $('#' + $(this).attr('id')).val(parseInt($('#' + $(this).attr('id')).val()) - 1)
//                     total -= 1;
//                 }
//             }
//             // $('#tblApplicants tbody tr:nth-child(' + (i + 1) + ')').children('td:nth-child(4)').text(total + ' / 100');
//             $('#txtTotal').val(total + ' / 100');
//         }
//     }
// })
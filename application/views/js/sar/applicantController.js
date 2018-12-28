//------------------------------------------------------SAR-------------------------------------------------------------

$('#tblApplicantsSar tbody tr').click(function () {
    setToTable(this);
    $('#AppIdField').attr("value", $(this).children('td:nth-child(1)').text());
    if ($('#txtId').val() != '') {
        $('#btnSubmitAppId').attr('disabled', false);
    }
})

$(document).ready(function () {
    $('#btnSubmitAppId').attr('disabled', true);
});

function setToTable(that) {
    $('#txtId').val($(that).children('td:nth-child(1)').text());
    $('#txtName').val($(that).children('td:nth-child(2)').text());
    $('#txtMarks').val($(that).children('td:nth-child(4)').text().split(" / ")[0]);
    $('#txtTotal').val($(that).children('td:nth-child(4)').text());
    $('#txtCount').val(applicants[$(that).attr('id').substring(2, $(that).attr('id').length)].interviewers_count);
    $('#AppId').attr('value', $(that).children('td:nth-child(1)').text());
}
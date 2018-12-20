$(document).ready(function () {
    $('.chkPostFor').on('change', function () {
        if ($('.chkPostFor').is(':checked')) {
            $('.chkPostFor').attr('required', false);
        } else {
            $('.chkPostFor').attr('required', true);
        }
    });
});
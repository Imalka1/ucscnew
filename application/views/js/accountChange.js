$(document).ready(function () {
    signUpVisibility();
})

$('.selectpicker').change(function () {
    signUpVisibility();
});

function signUpVisibility() {
    if ($('.selectpicker').find(':selected').text() == "Applicant") {
        $('#signUpApp').show();
    } else if ($('.selectpicker').find(':selected').text() == "User") {
        $('#signUpApp').hide();
    }
}
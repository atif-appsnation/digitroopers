$(document).ready(function() {
    $('#careerForm').on('submit', function(e) {
        e.preventDefault();

        var formData = new FormData(this);

        $.ajax({
            url: 'applicant.php',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,

            success: function(response) {
                $('#message').html(response);
                $('#careerForm')[0].reset();

                setTimeout(function() {
                    window.location.href = 'thank-you.php';
                }, 1000);
            },

            error: function() {
                $('#message').html('<div class="alert alert-danger">Something went wrong.</div>');
            }
        });
    });
});
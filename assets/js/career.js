$(document).ready(function() {
    $('#careerForm').on('submit', function(e) {
        e.preventDefault();

        let file = $('input[name="applicant_cv"]')[0].files[0];

        if (file) {
            let maxSize = 5 * 1024 * 1024; // 2MB

            if (file.size > maxSize) {
                e.preventDefault();
                $('#message').html('<div class="alert alert-danger">File size must be less than 5MB</div>');
                return;
            }
        }

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
                    window.location.href = 'thank-you';
                }, 1000);
            },

            error: function() {
                $('#message').html('<div class="alert alert-danger">Something went wrong.</div>');
            }
        });
    });
});
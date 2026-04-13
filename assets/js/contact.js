$(document).ready(function() {
    // AJAX form submit
    $('#contactForm').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            url: 'send-mail.php',
            type: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                $('#responseMessage').html(response);
                $('#contactForm')[0].reset();
                setTimeout(function() {
                    window.location.href = 'thank-you';
                }, 1000);
            },
            error: function() {
                $('#responseMessage').html('<div class="alert alert-danger">Something went wrong. Please try again.</div>');
            }
        });
    });
});
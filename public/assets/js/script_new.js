function showSuccessAlert(message) {
    Swal.fire({
        icon: 'success',
        title: 'Success',
        text: message,
        timer: 3000,
        timerProgressBar: true,
        showConfirmButton: false,
        allowOutsideClick: false
    });
}

function showErrorAlert(message) {
    Swal.fire({
        icon: 'error',
        title: 'Error',
        text: message,
        timer: 3000,
        timerProgressBar: true,
        showConfirmButton: false,
        allowOutsideClick: false
    });
}

// for submiting Contact us  form 

        $('#contactForm').on('submit', function(e) {
            e.preventDefault();

            $('#submitBtn').text('Sending...').prop('disabled', true);

            $.ajax({
                url: sendContactMessage,
                type: "POST",
                data: $(this).serialize(),

                success: function(res) {
                    showSuccessAlert(res.message);

                    $('#contactForm')[0].reset();
                    $('#submitBtn').text('Send Project Request').prop('disabled', false);
                },

                error: function() {
                    showErrorAlert('Something went wrong!');
                    $('#submitBtn').text('Send Project Request').prop('disabled', false);
                }
            });
        });
    
// for submiting quote form 
    $('#quoteForm').on('submit', function(e) {
    e.preventDefault();

    $.ajax({
        url: sendQuoteUrl,
        type: "POST",
        data: $(this).serialize(),

        success: function(response) {

            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: response.message,
                timer: 3000,
                showConfirmButton: false
            });

            $('#quoteForm')[0].reset();
        },

        error: function(xhr) {

            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Something went wrong.'
            });

        }
    });
});
$(function () {  
    var form = $('#contact-form');  
    var formMessages = $('.ajax-response');  

    $(form).submit(function (e) {  
        e.preventDefault();  
        var formData = $(form).serialize();  

        $.ajax({  
            type: 'POST',  
            url: $(form).attr('action'),  
            data: formData,  
            dataType: 'json'  // Tambahkan ini untuk mengharapkan respons JSON  
        })  
        .done(function (response) {  
            if (response.status === 'success') {  
                $(formMessages).removeClass('error');  
                $(formMessages).addClass('success');  
                $(formMessages).text(response.message);  

                // Clear form  
                $('#contact-form input,#contact-form textarea').val('');  
                $('#contact-form select[name="budget"]').prop('selectedIndex', 0);  

                // Remove success message after 5 seconds  
                setTimeout(function () {  
                    $(formMessages).empty().removeClass('success');  
                }, 5000);  
            }  
        })  
        .fail(function (xhr) {  
            // Tangani error dari respons JSON  
            $(formMessages).removeClass('success');  
            $(formMessages).addClass('error');  

            var errorMessage = 'Oops! An error occurred and your message could not be sent.';  
            if (xhr.responseJSON && xhr.responseJSON.message) {  
                errorMessage = xhr.responseJSON.message;  
            }  

            $(formMessages).text(errorMessage);  

            // Remove error message after 5 seconds  
            setTimeout(function () {  
                $(formMessages).empty().removeClass('error');  
            }, 5000);  
        });  
    });  
});  
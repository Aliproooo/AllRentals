$(document).ready(function() {
    $('nav.sidebar a').on('click', function(e) {
        e.preventDefault();
        var url = $(this).attr('href');
        
        $.get(url, function(data) {
            $('.content').html($(data).find('.content').html());
        });
    });
});

// script.js

function initializeMultiStepForm() {
    const steps = document.querySelectorAll('.step');
    let currentStep = 0;
    

    // Your existing JavaScript code here...

    // Add further JavaScript code here for dynamic field visibility and other functionality
}

// Call the function when the content is loaded
document.addEventListener('DOMContentLoaded', function() {
    console.log("Document loaded"); // Check if the document is loaded
    initializeMultiStepForm();
});

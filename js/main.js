$(window).scroll(function () {

    // sticky Header
    var scroll = $(window).scrollTop();
    if (scroll >= 35) {
        $("header").addClass("sticky");
    } else {
        $("header").removeClass("sticky");

    } 
});

$(document).ready(function() {
    // Check to see if the window is top if not then display button
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('#back-to-top').fadeIn();
        } else {
            $('#back-to-top').fadeOut();
        }
    });

    // Click event to scroll to top
    $('#back-to-top').click(function() {
        $('html, body').animate({ scrollTop: 0 }, 800);
        return false;
    });

    $('.burger').click(function () {
        $('.burger').toggleClass('clicked');
    });
    $('.nav-link').click(function () {
        $('.show').toggleClass('show');
        $('.burger').removeClass('clicked');
    });




});

function validateForm(event) {
    let isValid = true;

    // Clear previous error messages
    document.querySelectorAll('.error').forEach(function(errorSpan) {
        errorSpan.textContent = '';
    });
    
    // Name validation
    const name = document.getElementById('name').value.trim();
    if (name === '') {
        document.getElementById('name').nextElementSibling.textContent = 'Name is required';
        isValid = false;
    }

    // Phone number validation
    const tel = document.getElementById('tel').value.trim();
    const telPattern = /^[0-9]{10}$/;
    if (tel === '') {
        document.getElementById('tel').nextElementSibling.textContent = 'Phone number is required';
        isValid = false;
    } else if (!telPattern.test(tel)) {
        document.getElementById('tel').nextElementSibling.textContent = 'Enter a valid 10-digit phone number';
        isValid = false;
    }

    // Email validation
    const email = document.getElementById('email').value.trim();
    const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (email === '') {
        document.getElementById('email').nextElementSibling.textContent = 'Email is required';
        isValid = false;
    } else if (!emailPattern.test(email)) {
        document.getElementById('email').nextElementSibling.textContent = 'Enter a valid email address';
        isValid = false;
    }

    // Subject validation
    const subject = document.getElementById('subject').value.trim();
    if (subject === '') {
        document.getElementById('subject').nextElementSibling.textContent = 'Subject is required';
        isValid = false;
    }

    // Message validation
    const message = document.getElementById('message').value.trim();
    if (message === '') {
        document.getElementById('message').nextElementSibling.textContent = 'Message is required';
        isValid = false;
    }

    if (!isValid) {
        event.preventDefault(); // Prevent form submission
    }
    
}

document.querySelector('.submit').addEventListener('click', function(event) {
    validateForm(event);
});

document.getElementById('year').textContent = new Date().getFullYear();
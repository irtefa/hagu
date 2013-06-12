$(document).ready(function() {

    $('#submit-btn').click(function(event) {
        // check if user filled out one of the addresses
        if (isValidLogin())
        {
            $("#login-invalid").addClass("hidden");
            login();
        }
        else
        {
            $("#login-invalid").removeClass("hidden");
        }
    });
});

function login() {
    console.log($('#user-put-address').val());
    var post_data = {
        "term": $('#term').val(),
        "address": $('#user-put-address').val(),
        "lat": $('#lat').val(),
        "lng": $('#lng').val()
    };

    $.post('/results.php', post_data, function(response) {
        // log the response to the console
        window.location.replace('/results.php');
    });
}

/**
* Check if login is valid.
*
* Returns:
*   boolean - true if valid; false otherwise
*/
function isValidLogin() {
    var geolocationLat = $('#lat').val();
    var geolocationLng = $('#lng').val();
    var userPutAddress = $('#user-put-address').val();

    if ((geolocationLng === "" && geolocationLat === "") && userPutAddress ==="") {
        return false;
    }
    else {
        return true;
    }
}

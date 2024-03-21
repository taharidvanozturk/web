$(document).ready(function() {
    // Attach a click event listener to buttons with data-sefer-id attribute
    $(document).on('click', 'button[data-sefer-id]', function() {
        var sefer_id = $(this).data('sefer-id');
        call_get_seats(sefer_id);
    });

    // Event delegation for handling clicks on dynamically added buttons
    $('#seatDiv').on('click', 'button.seat-button', function() {
        // Get the seat number from the data attribute
        var seatNumber = $(this).data('seat-number');
        
        // Log the seat number to the console
        console.log('Tıklanan Koltuk Numarası:', seatNumber);
    });
});

function call_get_seats(sefer_id) {
    $.ajax({
        type: "POST",
        url: "get_seats.php",
        data: { sefer_id: sefer_id },
        success: function(response) {
            // Append the received HTML buttons to the seatDiv
            $('#seatDiv').html(response);
        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText);
        }
    });
}

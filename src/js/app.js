$(document).ready(function () {
    $.ajax({
        url: "server.php",
        method: "GET",
        success: function (data) {
            //console.log(data);
            var database = data;
            for (var i = 0; i < database.length; i++) {
                var card = database[i];
                $(".container-inner").append(card.titolo);
            }
        },
        error: function () {
            alert ("errore");
        }
    });
});

$(document).ready(function () {

    $.ajax({
        url: "server.php",
        method: "GET",
        success: function (data) {
            //console.log(data);
            var source = document.getElementById("template").innerHTML;
            var template = Handlebars.compile(source);
            var database = data;
            for (var i = 0; i < database.length; i++) {
                var card = database[i];
                //console.log(card.titolo);
                var context = {
                    immagine: card.immagine,
                    titolo: card.titolo,
                    artista: card.artista,
                    anno: card.anno
                }
                var html = template(context);
                $(".container-inner").append(html);
            }
        },
        error: function () {
            alert ("errore");
        }
    });
});

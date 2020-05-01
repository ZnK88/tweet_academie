let compteur_tweet = 0;

$(document).ready(function () {
    $.ajax({
        type: "GET",
        url: "../../back/requests/idConnected.php",
        success: function (data) {
            $("#profil").attr('href','profil.php?id='+data);
        },
        error: function () {
            console.log("erreur");
        }
    });

    actu_update();
    let timeUpdate = setInterval(actu_update, 60000);
    $('#statusedit').empty();

    $(window).scroll(function() {
        
        if($(window).scrollTop() + $(window).height() >= $(document).height() - 1) {
            scroll_update();
        }
    });

    $('#pushtweet').on('click', function () 
    {
            let tweetZone = $('#statusedit').html();
            $('#statusedit').empty();

            $.ajax({
                type: "POST",
                url: "../../back/requests/pushtweet.php",
                data: {
                    tweet: tweetZone,
                },
                success: function (data) {
                    actu_update()

                },
                error: function (data) {

                },
            })

    });
    $('#fluxdirect').hover(function () 
    {
        clearInterval(timeUpdate);

    })
});


function actu_update() {


    $.ajax({
        url: "../../back/requests/actu_update.php",

        success: function (data) {
            let zone = $('#fluxdirect');
            let update = $('#fluxdirect').html();
            let test = JSON.parse(data);


            if (!$('#fluxdirect').empty()) {
                $('#fluxdirect').append().remove();
                
            } else {
                for (var i = 0; i < test.length; i++) {
                    $('#fluxdirect').append(
                        "<div id='statustest' class='tweet row'>"
                        +"<div id='photostatusactu' class='two columns'>" +"</div>"
                        + "<div class='content ten columns'>"+ test[i][1] + "</div>"
                        +"</div>");

                }
                compteur_tweet = 20;
            }
        },
        error: function (data) {

        }
    })
}

function scroll_update() {

    $.ajax({
        method : "GET",
        url: "../../back/requests/scroll_update.php",
        data: "idToScroll="+compteur_tweet,
        success: function (data) {
            let zone = $('#fluxdirect');
            let update = $('#fluxdirect').html();
            let test = JSON.parse(data);

                for (var i = 0; i < test.length; i++) {
                    $('#fluxdirect').append(
                        "<div id='statustest' class='tweet row'>"
                        +"<div id='photostatusactu' class='two columns'>" +"</div>"
                        + "<div class='content ten columns'>"+ test[i][1] + "</div>"
                        +"</div>");

            }
                compteur_tweet += 20;
        },
        error: function (data) {

        }
    })
}


function search_hashtag(){

    regexHashTag = /(#\w+)/i;
    $('#statusedit').html().replace(regexHashTag,"<a href='test'>yolo<a>")
 }

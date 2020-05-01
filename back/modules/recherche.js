$(document).ready(function(){
    $("#recherche").val().change(function(){
        $.ajax({
            type: "GET",
            url: "../../back/requests/recherche.php",
            data: "username="+ $("#recherche").val(),
            dataType: "json",
            success: function (data) {
                
            },
            error: function () {
                console.log("erreur");
            }
        })
    })
    
    $("#recherche").val()
})
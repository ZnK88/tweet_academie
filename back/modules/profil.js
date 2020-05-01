$(document).ready(function () {
    function $_GET(param) {
        let vars = {};
        window.location.href.replace( location.hash, '' ).replace(
            /[?&]+([^=&]+)=?([^&]*)?/gi, // regexp
            function( m, key, value ) { // callback
                vars[key] = value !== undefined ? value : '';
            }
        );

        if ( param ) {
            return vars[param] ? vars[param] : null;
        }
        return vars;
    }

    $.ajax({
        type: "GET",
        url: "../../back/requests/idConnected.php",
        success: function (data) {
            if ($_GET('id') == data){
                $("#subscribe").attr('id','editer').attr('value','EDITER LE PROFIL').attr('class','button').click(function () {
                    document.location.href="./parametre.php";
                });
            }else if(data == ""){
                $("#subscribe").remove();
            }

        },
        error: function () {
            console.log("erreur");
        }
    });
});

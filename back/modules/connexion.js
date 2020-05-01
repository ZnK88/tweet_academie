function isEmail(email) {
    let regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}

$(document).ready(function () {
    $("#submit").click(function (e) {
        e.preventDefault();
        let flag = true;
        let email = $("#mail").val();
        let password = $("#password").val();

        if (!isEmail(email)){
            flag = false;
            $("#mail").css("border-color","red");
        }
        if (password == ""){
            flag = false;
            $("#password").css("border-color","red");
        }

        if (flag == true){
            $.ajax({
                type: "GET",
                url: "../../back/requests/connexion.php",
                data: "email="+ email +"&password="+ password,
                dataType: "json",
                success: function (data) {
                    document.location.href="./accueil.php";
                },
                error: function () {
                    console.log("erreur");
                }
            })
        }
    })
});
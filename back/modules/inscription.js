function isEmail(email) {
    let regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}

$(document).ready(function () {
    $("#subscribe").click(function (e) {
        e.preventDefault();
        let dataPage = {username:$("#username").val(), mail:$("#mail").val(), birthday:$("#birthday").val(), password:$("#password").val(),password2:$("#password2").val()};

        let flag = true;

        if (!isEmail(dataPage.mail)){
            $("#mail").css('border-color', 'red');
            flag = false;
        }else{
            $.ajax({
                type: "GET",
                url: "../../back/requests/verification_email.php",
                data : "email="+dataPage.mail,
                dataType: "json",
                success : function (data) {
                },
                error : function (data) {
                    flag = false;
                    $("#mail").css('border-color', 'red');
                    $("#mail").after("<p>Cette email est deja utilisée<p>");
                }
            })
        }

        if (dataPage.password !== dataPage.password2){
            $("#password2").css('border-color', 'red');
            $("#password").css('border-color', 'red');
            flag = false;
        }

        $.ajax({
            type: "GET",
            url: "../../back/requests/verification_username.php",
            data : "username="+dataPage.username,
            dataType: "json",
            success : function (data) {
            },
            error : function (data) {
                flag = false;
                $("#username").css('border-color', 'red');
                $("#username").after("<p>Ce username est deja utilisé<p>");
            }
        });

        $.each(dataPage,function (index,value) {
            if (dataPage[index] == ""){
                $("#"+index).css('border-color', 'red');
                flag = false;
            }
        });


        if (flag == true){
            $.ajax({
                type: "POST",
                url: "../../back/requests/inscription.php",
                data: $.param(dataPage),
                dataType: "json",
                success: function (data) {
                    console.log(data);
                    document.location.href="./connexion.php";
                },
                error : function (data) {
                    console.log(data);
                }
            })
        }
    })
});
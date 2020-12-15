// Token de Acesso : 85258df433382f6b2c66146d3b3f33b5cceeeafd
// Clase Validar : bb989335b1866cfe9c4660a4027c63b4e4b519fd

$(document).ready(function () {
    $.ajax({
        type: "POST",
        url: "Api.php",
        headers : {
            "Token-server" :"85258df433382f6b2c66146d3b3f33b5cceeeafd",
            "Class" : "bb989335b1866cfe9c4660a4027c63b4e4b519fd",
        },
        success: function (response) {
            console.log(response);
        }
    });
});
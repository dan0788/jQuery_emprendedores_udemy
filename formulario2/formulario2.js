$(document).ready(function () {

    $("form").on('submit', function (event) {
        event.preventDefault();
        $.ajax('procesarDatos.php', {
            data: {'RQ': $(this).data('id'), 'Form': $(this).serialize()},
            type: 'POST',
            cache: false,
            success: function (data) {
                console.log(data);
            }
        });
        $.ajax('procesarDatos.php', {
            data: {'RQ': $("#btnUsers").data('id')},
            dataType: 'json',
            type: 'POST',
            cache: false
        }).done(function (response) {
            var html = "";
            $.each(response, function (index, element) {
                $.each(element, function (index, element) {
                    if (index === 'SUCURSAL') {
                        html += '<li><a class="dropdown-item" href="#">' + element + '</a></li>';
                    }
                });
            });
            $("#btnList").html(html);
        }).fail(function (request, errorType, errorMessage) {
            $("#caja").text(errorMessage);
        }).always(function () {
            $("#caja").text("Información cargada correctamente.");
        });
        $(this)[0].reset();
    });

    $("#btnUsers").on('click', function () {
        $.ajax('procesarDatos.php', {
            data: {'RQ': $(this).data('id')},
            dataType: 'json',
            type: 'POST',
            cache: false
        }).done(function (response) {
            var html = "";
            $.each(response, function (index, element) {
                $.each(element, function (index, element) {
                    if (index === 'SUCURSAL') {
                        html += '<li><a class="dropdown-item" href="#">' + element + '</a></li>';
                    }
                });
            });
            $("#btnList").html(html);
        }).fail(function (request, errorType, errorMessage) {
            $("#caja").text(errorMessage);
        }).always(function () {
            $("#caja").text("Información cargada correctamente.");
        });
    });
    $("#usuario").on('keyup', function (event) {
        var user = $(this).val();
        $.ajax('procesarDatos.php', {
            data: {'RQ': $(this).data('id'), 'Usuario': user},
            cache: false,
            type: 'POST',
            success: function (data) {
                if (data !== "" && data === "1") {
                    $("#usuario").css('background', 'red');
                    $("#btnIngresar").prop('disabled', true);
                    $("#usuarioYaExiste").css('display', 'block');
                } else if (data === "" || data !== "1") {
                    $("#usuario").css('background', 'white');
                    $("#btnIngresar").prop('disabled', false);
                    $("#usuarioYaExiste").css('display', 'none');
                }
            }
        });
    });

    $("#usuario").on('keypress', function () {
        return solocaracteres(event, ' áéíóúabcdefghijklmnñopqrstuvwxyz0123456789');
    });
});
document.cookie="nombre=Daniel";
let cookies=document.cookie;
console.log(cookies);
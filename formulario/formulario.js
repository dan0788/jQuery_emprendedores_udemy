$(document).ready(function (){
    
    $("#enviar").on('click', function (event){
        var name=$("#nombre").val();var lastname=$("#apellido").val();var user=$("#user").val();var pass=$("#pass").val();
        var repeat_pass=$("#repeat_pass").val();
        if(name===""||lastname===""||user===""||pass===""||repeat_pass===""){
            alert("Hay algún campo vacío");
            return false;
        }else if(pass!==repeat_pass){
            alert("Las contraseñas no son iguales");
            return false;
        }
    });
    
    $("#formulario").on('submit', function (event) {
        event.preventDefault();
        $.ajax('conexion.php', {
            data: $("#formulario").serialize(),
            type: 'post',
            beforeSend: function (){
                $("#enviarBox").html("<h4>Enviando información...</h4>");
            },
            success: function () {
                $("#enviarBox").html("<h4>Información enviada</h4>");
            }
        });
    });
    $("#selector").on('click',function (){
        
    });
});
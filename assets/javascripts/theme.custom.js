function message(mensaje, tipo, divcontent) {
    var alert;
    switch (tipo) {
        case 's':
            alert = "<div class='alert alert-success'><strong>Bien hecho!</strong>&nbsp;" + mensaje + "</div>";
            break;
        case 'i':
            alert = "<div class='alert alert-info'><strong>Información!</strong>&nbsp;" + mensaje + "</div>";
            break;
        case 'w':
            alert = "<div class='alert alert-warning'><strong>Advertencia!</strong>&nbsp;" + mensaje + "</div>";
            break;
        default :
            alert = "<div class='alert alert-danger'><strong>Error!</strong>&nbsp;" + mensaje + "</div>";
    }
    $("#" + divcontent).empty().css("display", "block");

    $("#" + divcontent).html(alert);
    setTimeout(function () {
        $("#" + divcontent).fadeOut(1500);
    }, 3000);

}

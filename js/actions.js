
function openTab(url) {
// Abrir nuevo tab
var win = window.open(url, '_blank');
// Cambiar el foco al nuevo tab (punto opcional)
win.focus();
}

$(document).ready(function () {

    $("#organigrama").change(function () {
    if($("#organigrama").val() == 1)
        openTab("/adjuntos/Filosofia Organizacional SOSAPAT/Estructura_Orgánica.pdf");
    if($("#organigrama").val() == 2)
        openTab("/adjuntos/Filosofia Organizacional SOSAPAT/Organigrama.pdf");
    });


     
});


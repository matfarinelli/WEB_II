document.addEventListener("DOMContentLoaded", function() {

    $(".flipA").click(function() {
        $(".panelA").slideToggle("slow");
    });

    $(".flipE").click(function() {
        $(".panelE").slideToggle("slow");
    });

  

    let id_producto = document.querySelector('#id_producto').value;
    console.log(id_producto);

})
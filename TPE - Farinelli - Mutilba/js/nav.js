document.addEventListener("DOMContentLoaded", function() {
    document.querySelector(".btn_menu").addEventListener("click", desplegarMenu);

    function desplegarMenu() {
        document.querySelector(".navigation").classList.toggle("desplegable");

    }
})
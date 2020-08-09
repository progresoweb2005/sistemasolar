
function inicializar () {
    //capturar el vinculo para asociar al evento
    document.getElementById('planeta').onclick(Deslizar);
}

function Deslizar () {
    document.getElementById('Marte').slideToggle('slow');
    document.getElementById('Mercurio').slideToggle('slow');
    document.getElementById('Venus').slideToggle('slow');
    document.getElementById('Tierra').slideToggle('slow');
    document.getElementById('Jupiter').slideToggle('slow');
    document.getElementById('Saturno').slideToggle('slow');
    document.getElementById('Urano').slideToggle('slow');
    document.getElementById('Neptuno').slideToggle('slow');
    document.getElementById('Sol').slideToggle('slow');

}

inicializar();

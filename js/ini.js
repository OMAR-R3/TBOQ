(function () {
    const slider = [...document.querySelectorAll('.slider__body')];
    const flechitavanza = document.querySelector('#avanza'); 
    const flechitaatras = document.querySelector('#atras'); 
    let value;

    flechitavanza.addEventListener('click', ()=>changePosition(1));
    flechitaatras.addEventListener('click', ()=>changePosition(-1));

    function changePosition(change){
        const currentElement = Number(document.querySelector('.slider__body--show').dataset.id);

        value = currentElement;
        value+= change;
        if (value === 0 || value === slider.length+1){
            value = value === 0 ? slider.length : 1;   
        }
        slider[currentElement-1].classList.toggle('slider__body--show');
        slider[value-1].classList.toggle('slider__body--show');
    }

    setInterval(function(){
        changePosition(1);
        }, 15000);
})()

/*COMENTARIOS */
var formulario = document.getElementById("formulario");

function validar(e) {
    var msj = document.getElementById("msj");

    if (msj.value == 0) {
        e.preventDefault();
        alert("Mensaje vacio, se requiere llenar el campo de mensaje para enviar el comentario.");
    }
}
formulario.addEventListener("submit", validar);


var img=document.getElementById('img');


img.addEventListener('click',function(){
    document.getElementById('btnimg').submit()

});
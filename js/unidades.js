//Función que permite solo Números
function mostrar(id){
    console.log(id);
    //Ocultamos todos los divs
    document.getElementById("unit-info-general").style.display="none";
    document.getElementById("unit-info-interior").style.display="none";
    document.getElementById("unit-info-exterior").style.display="none";
    document.getElementById("unit-info-galeria").style.display="none";
    document.getElementById("unit-info-ficha").style.display="none";
    //Mostramos el div que corresponde
    document.getElementById('unit-info-'+id).style.display="block";
    //Cambiamos el color del borde izquierdo de los botones
    document.getElementById(id).style.border="border-left: 2px solid white";
}

const grande = document.querySelector('.grande')
const punto = document.querySelectorAll('.punto')
const img = document.querySelectorAll('.img-carrousel')

//Recorrer todos los punto
punto.forEach( ( cadaPunto , i )=> {
    //Asignamos un evento de click a cada punto
    punto[i].addEventListener('click',()=>{
        //Guardamos la posición del punto
        let posicion = i
        //Calculamos el espacio que debe recorrer el slider
        let operacion = (posicion * -10)
        //Movemos el slider
        grande.style.transform = `translateX(${ operacion }%)`
        //Removemos la clase activo de todos los puntos
        punto.forEach( ( cadaPunto , i )=> {
            punto[i].classList.remove('activo')
        })
        //Agregamos la clase activo al punto que se le dio click
        punto[i].classList.add('activo')
        img[i].classList.remove('img-hide')
        //Recorremos las imagenes
        img.forEach( ( cadaImg , j )=> {
            if(j !== i){
                img[j].classList.add('img-hide')
            }
        })
    })
})


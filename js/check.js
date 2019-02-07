/**
 * Comprueba la marca de los deportivos y enseña solo los seleccionados.
 * @author Conchaburu
 * @returns check
 */
function checkDeportivos() {
    if (document.getElementById("category-1").checked || document.getElementById("category-2").checked || document.getElementById("category-3").checked || document.getElementById("category-4").checked || document.getElementById("category-5").checked) {
        
    
    if(document.getElementById("category-4").checked){
        document.getElementById('Nissan').style.display = 'block';
    }
    else{
        document.getElementById('Nissan').style.display = 'none';
    }

    if(document.getElementById("category-1").checked){
        document.getElementById('Lambo').style.display = 'block';
    }
    else{
        document.getElementById('Lambo').style.display = 'none';
    }

    if(document.getElementById("category-2").checked){
        document.getElementById('Audi').style.display = 'block';
    }
    else{
        document.getElementById('Audi').style.display = 'none';
    }

    if(document.getElementById("category-3").checked){
        document.getElementById('BMW').style.display = 'block';
    }
    else{
        document.getElementById('BMW').style.display = 'none';
    }

    if(document.getElementById("category-5").checked){
        document.getElementById('Mustang').style.display = 'block';
    }
    else{
    document.getElementById('Mustang').style.display = 'none';
    }
}
else{
    document.getElementById('Nissan').style.display = 'block';
    document.getElementById('Audi').style.display = 'block';
    document.getElementById('Lambo').style.display = 'block';
    document.getElementById('BMW').style.display = 'block';
    document.getElementById('Mustang').style.display = 'block';
}
}

/**
 * Comprueba la marca de los clasicos y enseña solo los seleccionados.
 * @author Conchaburu
 * @returns check
 */

function checkClasicos() {
    if (document.getElementById("category-1").checked || document.getElementById("category-2").checked || document.getElementById("category-3").checked || document.getElementById("category-4").checked || document.getElementById("category-5").checked) {
        
    
    if(document.getElementById("category-4").checked){
        document.getElementById('Ferrari').style.display = 'block';
    }
    else{
        document.getElementById('Ferrari').style.display = 'none';
    }

    if(document.getElementById("category-1").checked){
        document.getElementById('Lambo').style.display = 'block';
    }
    else{
        document.getElementById('Lambo').style.display = 'none';
    }

    if(document.getElementById("category-2").checked){
        document.getElementById('Mercedes').style.display = 'block';
    }
    else{
        document.getElementById('Mercedes').style.display = 'none';
    }

    if(document.getElementById("category-3").checked){
        document.getElementById('Porsche').style.display = 'block';
    }
    else{
        document.getElementById('Porsche').style.display = 'none';
    }

    if(document.getElementById("category-5").checked){
        document.getElementById('Shelby').style.display = 'block';
    }
    else{
    document.getElementById('Shelby').style.display = 'none';
    }
}
else{
    document.getElementById('Ferrari').style.display = 'block';
    document.getElementById('Mercedes').style.display = 'block';
    document.getElementById('Lambo').style.display = 'block';
    document.getElementById('Porsche').style.display = 'block';
    document.getElementById('Shelby').style.display = 'block';
}
}

/**
 * Comprueba la marca de los 4x4 y enseña solo los seleccionados.
 * @author Conchaburu
 * @returns check
 */

function checkSUV() {
    if (document.getElementById("category-1").checked || document.getElementById("category-2").checked || document.getElementById("category-3").checked || document.getElementById("category-4").checked) {
        
    
    if(document.getElementById("category-4").checked){
        document.getElementById('Audi').style.display = 'block';
    }
    else{
        document.getElementById('Audi').style.display = 'none';
    }

    if(document.getElementById("category-1").checked){
        document.getElementById('Nissan').style.display = 'block';
    }
    else{
        document.getElementById('Nissan').style.display = 'none';
    }

    if(document.getElementById("category-2").checked){
        document.getElementById('Mercedes').style.display = 'block';
        document.getElementById('6x6').style.display = 'block';

    }
    else{
        document.getElementById('Mercedes').style.display = 'none';
        document.getElementById('6x6').style.display = 'none';
    }

    if(document.getElementById("category-3").checked){
        document.getElementById('BMW').style.display = 'block';
    }
    else{
        document.getElementById('BMW').style.display = 'none';
    }


    
}
else{
    document.getElementById('Audi').style.display = 'block';
    document.getElementById('Mercedes').style.display = 'block';
    document.getElementById('Nissan').style.display = 'block';
    document.getElementById('BMW').style.display = 'block';
    document.getElementById('6x6').style.display = 'block';
}
}

/**
 * Comprueba si es un email o no.
 * @author Conchaburu
 * @returns alert
 */
function alertEmail() {
        var pass = document.getElementById("email").value;
        var arraydeCadenas = pass.split("@");

        var comprobar = pass.split(".");
        if(arraydeCadenas.length<2){
            alert("El formato de email es incorrecto");
        }
      
else{
    if(comprobar.length<2){
        alert("El formato de email es incorrecto");
    }
    else{
        alert("Eskerrik asko gure web orrian erregistratzeagatik!!!");
    }
   
}
}

/**
 * Comprueba la eleccion y redirecciona a otra pagina.
 * @author Conchaburu
 * @returns redireccionar
 */
function Categorias() {
    var categoria = document.getElementById("categorias").value;
    if (categoria != 0) {
        
    
    if (categoria == 1) {
        
        location.href = "deportivos.php";

    }
    
    else if (categoria == 2) {

        location.href = "clasicos.php";

    }

    else{

        location.href = "SUV.php";

    }
    }

    else{
        alert("ERROR 404");
    }

}


        
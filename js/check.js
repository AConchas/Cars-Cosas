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

function alertLogin() {

    alert("Daturen bat gaizki sartu duzu!!");
    
}
    

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


    
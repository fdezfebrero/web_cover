


function cambiarModo(){
    var meuStorage = window.localStorage;
    var existe;

    for (let i = 0; i < meuStorage.length; i++) {
        if ('modoPaxina' == meuStorage.key(i)) {
            existe = meuStorage.getItem('modoPaxina');
        }
    }

    if (existe){
        if (existe == 'dark') {
            
            var cuerpoweb = document.body; 
            cuerpoweb.classList.toggle("claro"); 
            meuStorage.setItem('modoPaxina', 'light');
            document.getElementById('modoPaxina').innerHTML="Modo Oscuro";
            
            
        }else{
            
            var cuerpoweb = document.body; 
            cuerpoweb.classList.toggle("oscuro"); 
            meuStorage.setItem('modoPaxina', 'dark');
            document.getElementById('modoPaxina').innerHTML="Modo Claro";
        }

        
    }
    
}

function comprobarModo() {

    var meuStorage = window.localStorage;
    var existe;

    for (let i = 0; i < meuStorage.length; i++) {
        if ('modoPaxina' == meuStorage.key(i)) {
            existe = meuStorage.getItem('modoPaxina');
        }
    }

    if (existe){
        if (existe == 'dark') {
            var cuerpoweb = document.body; 
            cuerpoweb.classList.toggle("oscuro"); 
            document.getElementById('modoPaxina').innerHTML="Modo Claro";  
        }else{
            var cuerpoweb = document.body; 
            cuerpoweb.classList.toggle("claro"); 
            document.getElementById('modoPaxina').innerHTML="Modo Oscuro";
        }

        
    }else{
        meuStorage.setItem('modoPaxina', 'light');
    }
    
    
}
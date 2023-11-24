function ajax(){
    var xmlhttp=false;
    try {
            xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
            try {
               xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (E) {
                    xmlhttp = false;
            }
    }

    if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
            xmlhttp = new XMLHttpRequest();
    }
    return xmlhttp;
}

function seleccionardiv(iddiv){
    switch(iddiv){
        case 1:
            contenedor=document.getElementById('contenedor_submenu');
        break;

        case 2:
            contenedor=document.getElementById('contenido');
        break;
        case 3:
            contenedor=document.getElementById('contenido_usuario');
        break;
    case 4:
            contenedor=document.getElementById('mensajeerror');
        break;

            default:
            break;

    }
            
    }

function buscar(iduser,idopc,iddiv){ 
    seleccionardiv(iddiv)

objetoajax=ajax();
objetoajax.open("POST", "../controller/controller.php?idopc="+idopc); // Abrir archivo
objetoajax.onreadystatechange=function() {//Monitoreando los estados "onreadystatechange"
     if (objetoajax.readyState==4 && objetoajax.status==200) {
        contenedor.innerHTML = objetoajax.responseText
       
                     }
}
objetoajax.send(null)    
}

function guardar(iduser,idopc,iddiv,tipop){ 
    seleccionardiv(iddiv)

switch(tipop){

//agregar usuarios
case 1:
parametros="c1="+document.getElementById('c1')
.value+"&c2="+document.getElementById('c2')
.value+"&c3="+document.getElementById('c3')
.value+"&c4="+document.getElementById('c4')
.value+"&c5="+document.getElementById('c5')
.value 
console.log(parametros)
break;

case 2:
parametros="c1="+iduser
console.log(parametros);
break;


case 3:
parametros="c1="+iduser+"&c2="+document.getElementById('c2')
.value+"&c3="+document.getElementById('c3')
.value+"&c4="+document.getElementById('c4')
.value
console.log(parametros);
break;
/*--------------------------------------------------------------------*/

case 4:
parametros="nombre="+document.getElementById('nombre').value+"&apellidos="+document.getElementById('apellidos').value+"&correo="+document.getElementById('correo').value+"&contraseña="+document.getElementById('contraseña').value
console.log(parametros)
break;

case 5:
parametros="c1="+document.getElementById('c1')
.value+"&c2="+document.getElementById('c2')
.value+"&c3="+document.getElementById('c3')
.value+"&c4="+document.getElementById('c4')
.value+"&c5="+document.getElementById('c5')
.value 
console.log(parametros)
break;

case 6:
parametros="c1="+iduser
console.log(parametros);
break;

case 7:
parametros="id_producto"+iduser
console.log(parametros);
break;

case 8:
parametros="c1="+iduser
console.log(parametros);
break;





}
function eliminar_producto(idop,id){
    console.log(idop,id);
    var parametros={"idop":idop,
                    "id":id }
    
    $.ajax({
        url: '../vistas/operaciones.php',
        type: 'POST',
        data: parametros,
    })
    .done(function(response) {
    //  console.log("success");
        
        
    $('#alerta').html(response);
        
    })
    .fail(function() {
        console.log("error");
    })
    .always(function() {
        console.log("complete");
    });
    
}




objetoajax=ajax();
objetoajax.open("POST", "../controller/controller.php?idopc="+idopc); // Abrir archivo
objetoajax.onreadystatechange=function() {//Monitoreando los estados "onreadystatechange"
     if (objetoajax.readyState==4 && objetoajax.status==200) {
        contenedor.innerHTML = objetoajax.responseText
       
                     }
}

objetoajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
objetoajax.send(parametros)

}



/*validar usuario_login*/
function validar_usuario(correo,contraseña) {
    console.log(correo,contraseña);
var parametro={"correo":correo,
"contraseña":contraseña }
$.ajax({
    url: 'vistas/validar_admin.php',
    type: 'POST',
    data:parametro,
success: function(response){
    $("#mensajeerror").html(response);
}

})

}






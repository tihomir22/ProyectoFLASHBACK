function comprobarLogin(){
    var nombre=document.getElementById("nombre").value;
    var contraseña=document.getElementById("password").value;
    var checkbox=document.getElementById("checkRecuerda");
    if(nombre.length>20){
        alert("El usuario no puede tener mas de 20 caracteres")
        return false;
    }
    if(nombre.length==0){
        alert("El usuario no puede tener 0 caracteres")
        return false;
    }
    if(contraseña.length==0){
        alert("La contraseña no puede tener 0 caracteres")
        return false;
    }
}


function comprobarRegistro(){
    var nombreR=document.getElementById("nombre2").value;
    var passR=document.getElementById("password2").value;
    var correoE=document.getElementById("email2").value;
    var avatar=document.getElementById("imagenF").value;

    if(nombreR.length>20){
        alert("El usuario no puede tener mas de 20 caracteres")
        return false;
    }
    if(nombreR.length==0){
        alert("El usuario no puede tener 0 caracteres")
        return false;
    }
    if(passR.length==0){
        alert("La contraseña no puede tener 0 caracteres")
        return false;
    }
    if(correoE.length>0){
        if(comprobarCorreoER()){
        }else{
            alert("El correo no tiene un formato correcto");
            return false;
        }
    }

    if(avatar.length==0){
        alert("Debes elegir un avatar");
        return false;
    }


}
function comprobarCorreoER(){
    var correoE=document.getElementById("email2").value;
    var re = /(\w+)\@(\w+)\.[a-zA-Z]/;
    var testEmail = re.test(correoE);

    if(!testEmail){
        alert("El correo no tiene un formato correcto");
        return false;
    } else {
        confirm("Es " + correoE + " el email que usted quiere usar?");
    }

}



function ocultarTodo(){
    var todo=document.getElementsByTagName("form")[0];
    var todo2=document.getElementById("form2");
    var infoAbajo=document.getElementById("abajo");
    if(todo2.style.display=="none"){
        todo2.style.display="block";
        infoAbajo.style.display="none";
    }else{
        todo2.style.display="none";
        infoAbajo.style.display="block";
    }

}


window.onload=function(){
    document.getElementById("registro").onclick=ocultarTodo;
    document.getElementById("iniciar").onclick=comprobarLogin;
    document.getElementById("botonregistro").onclick=comprobarRegistro;
    document.getElementById("botonregistro").onclick=comprobarCorreoER  
}

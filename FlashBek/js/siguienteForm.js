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
        if(correoE.includes("@") && correoE.includes(".")){

        }else{
            alert("El correo no tiene un formato correcto");
            return false;
        }
    }else{
        alert("El correo no puede tener 0 caracteres");
        return false;
    }
    if(avatar.length==0){
        alert("Debes elegir un avatar");
        return false;
    }


}



function ocultarTodo(){
    var todo=document.getElementsByTagName("form")[0];
    var todo2=document.getElementById("form2");
    if(todo2.style.display=="none"){

        todo2.style.display="block";
    }else{
        todo2.style.display="none";

    }

}

function seleccionarCheck(){

    if(this.id=="item7"){
        var label=document.getElementById("label4");
    }
    if(this.id=="item6"){
        var label=document.getElementById("label3");
    }
    if(this.id=="item5"){
        var label=document.getElementById("label2");
    }
    if(this.id=="item4"){
        var label=document.getElementById("label1");
    }
    
    if(label.style.backgroundColor=='green'){
        label.style.backgroundColor="#7FDBFF";

    }else{
        label.style.backgroundColor="green";
    }
}
function generarNuevoForm(){
    var modal=document.getElementById("cuerpoMod");
    var modal2=document.getElementById("cuerpoMod2");
    var boton1=document.getElementById("boton1F");
    var boton2=document.getElementById("boton2F");
    var boton3=document.getElementById("boton3F");
    boton2.className="btn btn-default btn-circle";
    boton3.className="btn btn-primary btn-circle";
    boton1.disabled="disabled";
    boton2.disabled="disabled";
    modal.style.display="none";
    modal2.style.display="block";
    
}

window.onload=function(){
    //document.getElementById("registro").onclick=ocultarTodo;
    /*
    document.getElementById("item7").onclick=seleccionarCheck;
    document.getElementById("item6").onclick=seleccionarCheck;
    document.getElementById("item5").onclick=seleccionarCheck;
    document.getElementById("item4").onclick=seleccionarCheck;
    document.getElementById("sForm").onclick=generarNuevoForm;*/
    //document.getElementById("iniciar").onclick=comprobarLogin;
    document.getElementById("botonregistro").onclick=comprobarRegistro;
    
}

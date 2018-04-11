
function generarNuevoForm(){
    var modal=document.getElementById("cuerpoMod");
    var modal2=document.getElementById("cuerpoMod2");
    var boton1=document.getElementById("boton1F");
    var boton2=document.getElementById("boton2F");
    var boton3=document.getElementById("boton3F");
    var botonGbl=document.getElementById("sForm");
    var botonGbl2=document.getElementById("sForm2");
    boton2.className="btn btn-default btn-circle";
    boton3.className="btn btn-primary btn-circle";
    boton1.disabled="disabled";
    boton2.disabled="disabled";
    botonGbl.style.display="none";
    botonGbl2.style.display="block";
    botonGbl2.style.float="right";
    modal.style.display="none";
    modal2.style.display="block";


    
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
function cargarModal(){
    $(window).on('load',function(){
        $('#exampleModal3').modal('show');
        var modal=document.getElementById("exampleModal3");
        modal.style.display="block";
    });  
}
function contarCaracteres(){
    
    var escritura=document.getElementById("caracteres");
    var valor="";
    valor=valor+this.value;
    escritura.innerHTML=valor.length;
    

}
function reiniciarForm(){
    document.getElementById("rest1").reset();

}
function tecladoActivar(event){
    var evento=event;
    if(event.ctrlKey && event.keyCode==67){
    
        var color=Math.random()*255;
        var color1=Math.random()*255;
        var color2=Math.random()*255;
        color=color.toFixed(0);
        color1=color1.toFixed(0);
        color2=color2.toFixed(0);

        var barra=document.getElementById("barraMenu");
        barra.style.backgroundColor="rgb"+"("+color+","+color1+","+color2+")";
    }
    
}
function cerrarLogro(){
        this.style.display="none";

    

}





window.onload=function(){
    
    document.getElementById("sForm").onclick=generarNuevoForm;  
    document.getElementById("item7").onclick=seleccionarCheck;
    document.getElementById("item6").onclick=seleccionarCheck;
    document.getElementById("item5").onclick=seleccionarCheck;
    document.getElementById("item4").onclick=seleccionarCheck;
    document.getElementById("textarea1").onkeyup=contarCaracteres;
    document.getElementById("reinicio").onclick=reiniciarForm;
    document.onkeydown=tecladoActivar;
    document.getElementById("logroInf").onclick=cerrarLogro;
}
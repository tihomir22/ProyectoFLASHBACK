
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





window.onload=function(){
    document.getElementById("sForm").onclick=generarNuevoForm;  
    document.getElementById("item7").onclick=seleccionarCheck;
    document.getElementById("item6").onclick=seleccionarCheck;
    document.getElementById("item5").onclick=seleccionarCheck;
    document.getElementById("item4").onclick=seleccionarCheck;
    

}
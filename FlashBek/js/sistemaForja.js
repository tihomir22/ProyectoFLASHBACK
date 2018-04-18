function _(id){
	return document.getElementById(id);	
}
var droppedIn = false;
function drag_start(event) {
	event.dataTransfer.dropEffect = "move";
	event.dataTransfer.setData("text", event.target.getAttribute('id') );
	_("eliminar1").style.display="none";
}

function drag_drop(event) {
	event.preventDefault(); 
	var longitudLogros=_("logros_zone").children.length;
	var longitudLogrosReal=longitudLogros-6;
	alert("Hay "+longitudLogrosReal+"logros");
	if(longitudLogrosReal==0){
		$("#contenedorLogros").hide(1000);
		setTimeout(function(){ _("drop_zone").className="col-md-12 card"; }, 1000);
		

	}
	var longitud=_("drop_zone").children.length;
	var longitudReal=longitud-2;
	_("escritura1").innerHTML="<h3>"+"Usted quiere fundir: "+longitudReal+" "+"logros"+"</h3>";
	var elem_id = event.dataTransfer.getData("text");
	event.target.appendChild( _(elem_id) );
	
	_(elem_id).removeAttribute("draggable");
	_(elem_id).style.cursor = "default";

	if(longitud>=3){
		$("#forjarBtn").fadeIn("slow");
	}


	droppedIn = true;

}
function drag_end(event) {
	if(droppedIn == false){

	}
	droppedIn = false;
}
function readDropZone(){
	var pepe="";
	for(var i=0; i < _("drop_zone").children.length; i++){
		if(i>2){
			pepe=pepe+"."+_("drop_zone").children[i].id;
		}
		//alert(_("drop_zone").children[i].id+" is in the drop zone");
	}
	alert(pepe);

}


function mostrarContenedor(){
	var forja=document.getElementById("conteForja");
	var enano=document.getElementById("enano");
	if(enano.style.display!="none"){
		forja.style.display="";
		enano.style.display="none";
	}else{
		forja.style.display="none";
		enano.style.display="";

	}



}





window.onload=function(){
	document.getElementById("btnEmpezar").onclick=mostrarContenedor;
	var longitud=_("drop_zone").children.length;
	
}
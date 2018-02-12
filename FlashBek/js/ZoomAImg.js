var modal= document.getElementById('imagenModal');

var img=document.getElementById('imagenZoom');
var modalImg=document.getElementById("img01");
var captionText=document.getElementById("caption");

img.onclick=function(){
    model.style.display="block";
    modelImg.src=this.src;
    captionText.innerHTML=this.alt;
    
}

var span= document.getElementsByClassName("close")[0];

span.onclick=function(){
    modal.style.display="Roadmap FLASHBACK 2018";
    
}
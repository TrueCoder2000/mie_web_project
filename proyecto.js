let popHeadphone=document.querySelector(".pop-headphones");
let popClose=document.querySelector(".pop-close");
let popWhatsapp=document.querySelector(".pop-whatsapp");
let popEmail=document.querySelector(".pop-email");
let popPhone=document.querySelector(".pop-phone");
/*let containerAnimation=document.querySelector(".container-animation");*/

popHeadphone.onclick=function() {
		popWhatsapp.style="opacity:1;transition:1s";
		popEmail.style="opacity:1;transition:1s";
		popPhone.style="opacity:1;transition:1s";
		popClose.style="opacity:1;top:80px";
		popHeadphone.style="display:none";
}


popClose.onclick=function(){
	popWhatsapp.style="opacity:0;transition:1s";
	popEmail.style="opacity:0;transition:1s";
	popPhone.style="opacity:0;transition:1s";
	popClose.style="display:none";
	popHeadphone.style="display;flex;justify-content:center;align-items:center;zIndex:7000";	
}


/*window.onload=function(){
	
	setTimeout(function(){
    containerAnimatio.style="display:none;transition:2s";
	},10);
}*/



$(document).ready(function() {
    //alert('Vai fazer sumir o aviso em 2 segundos');
	//3000 É IGUAL A 3 SEGUNDOS DE DURAÇÃO
	// FADEOUT É UM JQUERY;
    //contr+f5 limpa cache	
	
	sumirElemento($('.alert'));
	//sumirElemento($('@email'));
});


function sumirElemento(elemento){
	setTimeout(function(){
	  elemento.fadeOut();
	},3000);
}
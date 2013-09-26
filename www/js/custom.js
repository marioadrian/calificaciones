function validaSubmit(){
		var form = document.getElementById("login-form-container");
		var passEle = document.getElementById("input-user-pass-wrapper");
		
		var pass = document.getElementById("input-user-pass");
		console.log(pass.value+' '+pass.value.length);
		if(pass.value != '' && pass.value.length <= 8){
			var div = document.createElement('div');
			div.setAttribute('class', 'error');
			div.setAttribute('id', 'status-error');
			
			//Crear texto
			var msg = document.createTextNode('Campo obligatorio con longitud mínima de 8 caracteres' );
			//Agrega mensaje
			div.appendChild(msg);
			//Inserta el mensaje en el DOM
			//form.insertBefore(div, status.nextSibling);	
			passEle.appendChild(div);
			pass.className+=' form-element-error';
			pass.value = '';
			
		}
		
		return false;
		
		
}
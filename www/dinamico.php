<?php
class Contenido{

	
	function menuSuperior(){
		$html = "";
		$index = 0;
		$botones = array(
			'login' => 'Login',
			);
			
		$html .= '<ul>';
		
		foreach($botones as $link => $boton){
			$ruta = "/previo/";
			$html .= '<li id="boton-'.$index.'" class="boton">';
			$html .= '<a href="'.$ruta.$link.'.html">'.$boton.'</a>';
			$html .= '</li>';
			$index++;
		}
		
		$html .= '</ul>';
		
        return $html;
		
	}
	
	function menuInf1(){
		$html = "";
		$index = 0;
		$botones = array(
			'panel-admin' => 'Panel de control',
			);
			
		$html .= '<ul>';
		
		foreach($botones as $link => $boton){
			$ruta = "/previo/";
			$html .= '<li id="boton-'.$index.'" class="boton">';
			$html .= '<a href="'.$ruta.$link.'.html">'.$boton.'</a>';
			$html .= '</li>';
			$index++;
		}
		
		$html .= '</ul>';
		
        return $html;
	}

}

?>
<?php    session_start();
		//Leemos el JSON
		if (file_exists('chat.json')) {
			//echo count(file_get_contents("chat.json"));
			$datos_chat = file_get_contents("chat.json");
			$json_chat  = json_decode($datos_chat, true);
			$datos="";
			$pag  =array(); 
			foreach ($json_chat as $chat) {
			    if ($chat['Id_Hor'] == $_SESSION['cbo_horario']) {
				      $fila['chat_id']      =$chat['chat_id'];
				      $fila['Id_Hor']       =$chat['Id_Hor'];    
			          $fila['chat_usuario'] =$chat['chat_usuario'];  
			          $fila['chat_mensaje'] =$chat['chat_mensaje'];
			          $fila['chat_fecha']   =$chat['chat_fecha'];  
			          $pag[]=$fila;
			     }
			}
			echo json_encode(array("datos" => $pag));
		}
?>
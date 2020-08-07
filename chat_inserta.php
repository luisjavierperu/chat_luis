<?php session_start();
      //------------------------------------------------------------
      include 'chat_librerias.php';
      $obj= new librerias();
      //------------------------------------------------------------
      $chat_json = json_decode(file_get_contents('chat.json'), true);
      $chat_post['chat_id']     = count($chat_json)+1;//rand(1, 2000000);
      $chat_post['Id_Hor']      =$_SESSION['cbo_horario'];
      $chat_post['chat_usuario']=$_SESSION['usuario'];
      $chat_post['chat_mensaje']=$_POST['txt_mensaje'];   
      $chat_post['chat_fecha']  =$obj->nombre_fecha_espaniol1(); 
      //------------------------------------------------------------
      $chat_array   = array(
          'chat_id'      => '',
          'Id_Hor'       => '',
          'chat_usuario' => '',
          'chat_mensaje' => '',
          'chat_fecha'   => ''
      );
      //------------------------------------------------------------
      //$chat_array = array_merge($chat_array, $chat_post);
      //------------------------------------------------------------
      //$chat_json = json_decode(file_get_contents('chat.json'), true);
      //------------------------------------------------------------
      //$chat_post['chat_id'] = rand(1, 2000000);
      //------------------------------------------------------------
      $chat_json[] = $chat_post;
      //------------------------------------------------------------
      file_put_contents('chat.json', json_encode($chat_json));
?>
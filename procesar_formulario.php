<?php
  // Recoger los datos del formulario
  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];
  $mensaje = $_POST['mensaje'];

  // Establecer la dirección de correo electrónico del destinatario
  $destinatario = 'tamaraei@yahoo.es';

  // Establecer el asunto del correo electrónico
  $asunto = 'Nuevo mensaje del formulario';

  // Crear el cuerpo del correo electrónico
  $cuerpo = "Nombre: $nombre\nCorreo electrónico: $correo\nMensaje:\n$mensaje";

  // Enviar el correo electrónico
  mail($destinatario, $asunto, $cuerpo);

  // Redirigir al usuario a una página de confirmación
  header('Location: contactanos.html');
?>

@extends('base')

@section('content')

<?php
if (!isset($_POST['email'])) {
?>
  <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
  	<div id="formulario"> <!--align="center"--> 
    <label>
      Nombre:
      <input name="nombre" type="text" />
    </label>
    <br></br>
    <label>
      Teléfono:
      <input name="telefono" type="text" />
    </label>
    <br></br>
    <label>
      Email:
      <input name="email" type="text" />
    </label>
    <br></br>
    <label>
      Mensaje:
      <textarea name="mensaje" rows="6" cols="50"></textarea>
    </label>
    <br></br>
    <input type="reset" value="Borrar" />
    <input type="submit" value="Enviar" />
</div>
  </form>
<?php
}else{
  $mensaje="Contacto AMEX";
  $mensaje.= "\nNombre: ". $_POST['nombre'];
  $mensaje.= "\nEmail: ".$_POST['email'];
  $mensaje.= "\nTelefono: ". $_POST['telefono'];
  $mensaje.= "\nMensaje: \n".$_POST['mensaje'];
  $destino= "amex@amex.com";
  $remitente = $_POST['email'];
  $asunto = "Mensaje enviado por: ".$_POST['nombre'];
  mail($destino,$asunto,$mensaje,"FROM: $remitente");
?>
  <p><strong>Mensaje enviado.</strong></p>
<?php
}
?>
@stop
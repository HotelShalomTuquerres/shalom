$nombre=$_POST['wpforms-416-field_0'];
$celular=$_POST['wpforms-416-field_11'];
$correo=$_POST['wpforms-416-field_1'];
$asunto=$_POST['wpforms-416-field_4'];
$mensaje=$_POST['wpforms-416-field_2'];
// Fin de recpcion de datos
// Acción de envío
//---------//
$receptor='diegoaldemarpantojabo@gmail.com';
$mensaje='
Mensaje de:
'.$nombre.'
Correo:
'.$correo.'
Asunto:
'.$asunto.'
Consulta:
'.$mensaje.'
';
$desde='From: '.$correo	<?php //Recepción de datos.' <diegoaldemarpantojabo@gmail.com>';
ini_set(sendmail_from,'diegoaldemarpantojabo@gmail.com');
mail($receptor,$asunto,$mensaje,$desde);
echo'Mensaje enviado con éxito, muchas gracias';
?>
<?php include_once("../conf.php");


$datafromStripe= json_decode(file_get_contents('php://input'));
if(isset($datafromStripe->data->object->client_reference_id)){
$uid=mysqli_real_escape_string(db::conn(),trim($datafromStripe->data->object->client_reference_id));

$gtt=db::stmt("UPDATE `users` SET `premiunm` = '1' WHERE `id` = '$uid';");

}
<?php

//update_is_type_status.php

require("class.pdofactory.php");
require("abstract.databoundobject.php");
require("class.chatmessage.php");

$strDSN = "mysql:dbname=echirveches;host=localhost;port=3306";
$objPDO = PDOFactory::GetPDO($strDSN, "echirveches","root",array());
$objPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$chatMesID=$_POST["chat_message_id"];
echo $chatMesID;
session_start();
if(isset($_POST["chat_message_id"])){
	$Object= new ChatMessage($objPDO, $chatMesID);
	$Object->setStatus(2)->save();
}

?>
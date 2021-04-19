<?php

//update_last_activity.php

require("class.pdofactory.php");
require("abstract.databoundobject.php");
require("class.logindetails.php");

$strDSN = "mysql:dbname=echirveches;host=localhost;port=3306";
$objPDO = PDOFactory::GetPDO($strDSN, "echirveches","root",array());
$objPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

session_start();

$obj=new LoginDetails($objPDO, $_SESSION["login_details_id"]);
$dia = getdate();
$obj->setLast_activity($dia)->save;

?>


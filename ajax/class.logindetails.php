<?php
require("class.pdofactory.php");
require("abstract.databoundobject.php");
class LoginDetails extends DataBoundObject {

    protected $UserID;
    protected $LastActivity;
    protected $IsType;


    protected function DefineTableName() { //hacemos función que nos devuelve el system user
                return("login_details");
    }

    protected function DefineRelationMap() { //hacemos una función que nos devolverá la siguiente array
                return(array(
                        "login_details_id" => "ID",
                        "user_id" => "UserID",
                        "last_activity" => "LastActivity",
                        "is_type" => "IsType"));
    }
}

?>
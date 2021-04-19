<?php
require("class.pdofactory.php");
require("abstract.databoundobject.php");
class Login extends DataBoundObject {

    protected $Username;
    protected $Password;


    protected function DefineTableName() { //hacemos función que nos devuelve el system user
                return("login");
    }

    protected function DefineRelationMap() { //hacemos una función que nos devolverá la siguiente array
                return(array(
                        "user_id" => "ID",
                        "username" => "Username",
                        "password" => "Password"));
    }
}

?>
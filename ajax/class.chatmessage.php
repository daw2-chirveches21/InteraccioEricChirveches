<?php
require("class.pdofactory.php");
require("abstract.databoundobject.php");
class ChatMessage extends DataBoundObject {

    protected $FromUserID;
    protected $ChatMessage;
    protected $Timestamp;
    protected $Status;


    protected function DefineTableName() { //hacemos función que nos devuelve el system user
                return("chat_message");
    }

    protected function DefineRelationMap() { //hacemos una función que nos devolverá la siguiente array
                return(array(
                        "chat_message_id" => "ID",
                        "to_user_id" => "to_user_id",
                        "from_user_id" => "FromUserID",
                        "chat_message" => "ChatMessage",
                        "timestamp" => "Timestamp",
                        "status" => "Status",));
    }
}

?>
<?php

class MicroMailer {
    var $to         = "rakszabi@gmail.com";
    var $subject    = "";
    var $message    = "";
    var $fromName   = "";
    var $fromEmail  = "";
    var $replyEmail = "";
    var $header     = "";
    var $type       = "text/plain";
    var $characterSet = "utf-8";


    function send() {
        $this->createHeader();
        if (@mail($this->to,$this->subject,$this->message,$this->header,$this->fromName)){
            return true;
        } else {
            return false;
        }
    }

    function createHeader() {
        $from   = "From: $this->fromName <$this->fromEmail>\r\n";
        $replay = "Reply-To: $this->replyEmail\r\n";
        $params = "MIME-Version: 1.0\r\n";
        $params .= "Content-type: $this->type; charset=$this->characterSet\r\n";

        $this->header = $from.$replay.$params;

        return $this->header;
    }
}

?>
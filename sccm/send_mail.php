<?php
    function SendMail($data, $subject) {
        $message = "";
        $headers  = "From: " . "info@sakshamjain.in" . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        foreach ($data as $key => $value) { 
            $message = $message . ucwords($key)." : ".$value."<br>";
        }
        mail("saksham.jain1998@gmail.com",$subject,$message,$headers);
    }
?>
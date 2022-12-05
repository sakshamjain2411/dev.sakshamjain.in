<?php
    function SendMail($data, $subject) {
        $message = "";
        foreach ($data as $key => $value) { 
            $message = $message . ucwords($key)." : ".$value."<br>";
        }
        echo $subject;
        echo $message;
        // mail("saksham.jain1998@gmail.com",$subject,$message);
    }
?>
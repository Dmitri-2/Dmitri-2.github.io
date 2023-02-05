<?php
/*
Incoming message format:
{
	"message":"Email body",
	"subject":"Email subject",
	"from":"Email of person who is sending message"
}
*/

header("Access-Control-Allow-Origin: *");

//Verify email address looks like a email address
if(preg_match("/[^\s]*@.*\.[^ \n\t\r]*/",$_POST["from"], $match)){
    $headers = $match[0];
} else {
    echo(json_encode(["result"=>"bad_email", "email_submitted"=>$_POST["from"], "all"=>$_POST]));
    return;
}

//Send mail to myself
$to = "dmitri2@pdx.edu";
$subject = $_POST["subject"];
$message = $_POST["message"];

if(mail($to,$subject,$message,$headers)) {
    echo(json_encode(["result"=>"sent"]));
} else {
    echo(json_encode(["result"=>"failed"]));
}



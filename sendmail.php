<?php
$to       = '"Webdev"<webdevita@gmail.com>,"Vasu Garg" <vasugarg6320@live.in>,"Ninetails" <pmvg2911@gmail.com>';
$subject  = 'You got a message from gargvasu';
$message  = 'Hi, you just received an email from your website!'."\r\n"."<br/>"."<br/>"."<br/>".
			'Name: vasu'."<br/>".
			'Email: vasu2907@outlook.com'."<br/>".
			'Phone: 7404556989'."<br/>".
			
			'Subject: hey'."<br/>".
			'Message: hello';
			
$headers  = 'From:"GargVasu"<admin@gargvasu.com>'. "\r\n" .
            'Reply-To:admin@gargvasu.com'."\r\n" .
            "Organization: VasuGarg\r\n".
            "X-Priority: 3\r\n".
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text; charset=iso-8859-1' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
if(mail($to, $subject, $message, $headers))
{
			
			echo "success";
}
else
{
			
			echo "failed ";
}
?>
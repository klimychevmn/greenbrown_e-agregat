<?
if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['email'])&&$_POST['email']!="")&&(isset($_POST['comment'])&&$_POST['comment']!="")){ 
    $to = 'festival@bolshayazemlya.ru'; 
    $subject = 'Принять участие Териберка'; 
    $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>'.$subject.'</p>
                        <p>ФИО: '.$_POST['name'].'</p>
                        <p>e-mail: '.$_POST['email'].'</p>
                        <p>Комментарий: '.$_POST['comment'].'</p>                        
                    </body>
                </html>'; 
    $headers  = "Content-type: text/html; charset=utf-8 \r\n"; 
    $headers .= "From:<".$_POST['email'].">\r\n"; 
    mail($to, $subject, $message, $headers); 
}
?>
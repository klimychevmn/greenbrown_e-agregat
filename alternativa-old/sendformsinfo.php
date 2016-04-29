<?
if((isset($_POST['name'])&&$_POST['name']!="")&&
    (isset($_POST['comment'])&&$_POST['comment']!="")&&
    (isset($_POST['email'])&&$_POST['email']!="")&&
    (isset($_POST['phone'])&&$_POST['phone']!="")){ 
        $to = 'roydash@mail.ru'; 
        $subject = 'Проверка связи Алтернатива-СВД тест'; 
        $message = '
                    <html>
                        <head>
                            <title>'.$subject.'</title>
                        </head>
                        <body>
                            <p>'.$subject.'</p>
                            <p>ФИО: '.$_POST['name'].'</p>
                            <p>Интересующий вопрос: '.$_POST['comment'].'</p>                        
                            <p>e-mail: '.$_POST['email'].'</p>
                            <p>Телефон: '.$_POST['phone'].'</p>
                        </body>
                    </html>'; 
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; 
        $headers .= "From:<".$_POST['email'].">\r\n"; 
        mail($to, $subject, $message, $headers); 
    }
?>
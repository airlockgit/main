<?
if (isset($_POST['name'])){ //Проверка отправилось ли наше поля name и не пустые ли они
        $to = 'airlock@yandex.ru'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'Работа!'; //Загаловок сообщения
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Имя: '.$_POST['name'].'</p>
                        <p>Телефон: '.$_POST['tel'].'</p> 
                        <p>Skype: '.$_POST['skype'].'</p> 
                        <p>Email: '.$_POST['email'].'</p> 
                        <p>Сообщение: '.$_POST['message'].'</p> 
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: MSORLOV.RU <support@msorlov.ru>\r\n"; //Наименование и почта отправителя
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
}
?>
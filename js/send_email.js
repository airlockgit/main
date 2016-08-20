$(document).ready(function(){
    $("#send-contact").submit(function() { //устанавливаем событие отправки для формы с id=form
            var data = $(this).serialize(); //собераем все данные из формы
            $.ajax({
            type: "POST", //Метод отправки
            url: "php/send_email.php", //путь до php фаила отправителя
            data: data           
    });
});   
}); 
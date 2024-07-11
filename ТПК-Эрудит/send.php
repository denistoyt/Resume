<?
    require 'PHPMailer/Exception.php';
    require 'PHPMailer/PHPMailer.php';
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    $to = 'info@erudit-snab.ru';
    $subject = 'Новый запрос с ТПК Эрудит'; //Загаловок сообщения
    $mess1 = '';

    if(isset($_POST["send_name"])){
        $mess1 = '<p>Запрос с формы: '.$_POST["send_name"].'</p>';
    }

    if(isset($_POST["quiz"])) {
        $q_answers = '<p>Ответы на вопросы</p> <ul>';
        $q_answers .= '<li>По каким направлениям нам подготовить для Вас КП? : ' .$_POST["q_1"]. '</li>';
        $q_answers .= '<li>Когда Вы планируете осуществить покупку? : ' .$_POST["q_2"]. '</li>';
        $q_answers .= '<li>В какой бюджет нам следует уложиться при подготовке КП? : ' .$_POST["q_3"]. '</li>';
        $q_answers .= '<li>По какой модели оплаты Вам комфортнее работать? : ' .$_POST["q_4"]. '</li>';
        $q_answers .= '<li>В какой срок необходимо поставить товар? : ' .$_POST["q_5"]. '</li>';
        $q_answers .= '</ul>';
    }

    $mess2 = '';
    if(isset($_POST["name"])){
        $mess2 = '<p>Имя: '.$_POST["name"].'</p>';
    }

    $mess3 = '';
    if(isset($_POST["phone"])){
        $mess3 = '<p>Телефон: '.$_POST["phone"].'</p>';
    }

    $mess4 = '';
    if(isset($_POST["email"])){
        $mess4 = '<p>Email: '.$_POST["email"].'</p>';
    }

    $catalog_name = '';
    if(strlen($_POST["catalog_name"]) > 0) {
        $catalog_name = '<p>Запрос на каталог: '. $_POST["catalog_name"] .' </p>';
    }

    $mail = new PHPMailer(true);
    $mail->CharSet = 'UTF-8';
    $mail->setFrom('no-reply@erudit-snab.ru', 'ТПК Эрудит');
    $mail->addAddress('info@erudit-snab.ru');     // Add a recipient

    // Attachments
    foreach ( $data['files'] as $file) {
        $mail->addAttachment($file);
    }
    

    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = ''.$mess1.$mess2.$mess3.$mess4.' '.$q_answers.' ' .$catalog_name. ' ';

    $mail->send();
?>
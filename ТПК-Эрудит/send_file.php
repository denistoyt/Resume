<?php

    require 'PHPMailer/Exception.php';
    require 'PHPMailer/PHPMailer.php';
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    if( isset( $_POST['my_file_upload'] ) ){  
        // ВАЖНО! тут должны быть все проверки безопасности передавемых файлов и вывести ошибки если нужно

        $uploaddir = './uploads'; // . - текущая папка где находится submit.php

        // cоздадим папку если её нет
        if( ! is_dir( $uploaddir ) ) mkdir( $uploaddir, 0777 );

        $files      = $_FILES; // полученные файлы
        $done_files = array();

        // переместим файлы из временной директории в указанную
        foreach( $files as $file ){
            $file_name = $file['name'];

            if( move_uploaded_file( $file['tmp_name'], "$uploaddir/$file_name" ) ){
                $done_files[] = realpath( "$uploaddir/$file_name" );
            }
        }

        $data = $done_files ? array('files' => $done_files ) : array('error' => 'Ошибка загрузки файлов.');
        // die( json_encode( $data ) );
    }

    try {
    $mail = new PHPMailer(true);
    $mail->CharSet = 'UTF-8';
    $mail->setFrom('no-reply@erudit-snab.ru', 'ТПК Эрудит');
    $mail->addAddress('info@erudit-snab.ru');     // Add a recipient

    // Attachments
    foreach ( $data['files'] as $file) {
        $mail->addAttachment($file);
    }
    

    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'ТПК Эрудит. Получить каталог и рассчитать стоимость';
    $mail->Body    = '<p>Телефон: '. $_POST['phone'] .'</p> <p>Email: '. $_POST['email'] .'</p>';

    $mail->send();
    echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
?>
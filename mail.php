<?php

if(isset($_POST['apply-name']) && isset($_POST['apply-phone']) && isset($_POST['apply-email']) && isset($_POST['apply-text'])) { 
  $to = 'fleetStreet186@yandex.ru';
  $subject = 'Заявка с сайта FleetStreet186';
  $message = '
        <html>
            <head>
                <title>Заявка с сайта FleetStreet186</title>
            </head>
            <body>
                <p><b>ФИО:</b> '.$_POST['apply-name'].'</p>
                <p><b>Номер телефона:</b> '.$_POST['apply-phone'].'</p>
                <p><b>E-Mail:</b> '.$_POST['apply-email'].'</p>
                <p><b>О себе:</b> '.$_POST['apply-text'].'</p>
            </body>
        </html>';
  
  $headers = "Content-type: text/html; charset=utf-8 \r\n";
  $headers .= "From: Site <info@mail.com>\r\n";
  
  mail($to, $subject, $message, $headers);

  echo json_encode(array('status' => 'success'));
} else {
  echo json_encode(array('status' => 'error'));
}
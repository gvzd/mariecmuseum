<?php 

require_once('PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$firstname = $_POST['firstname'];
$surname = $_POST['surname'];
$message = $_POST['message'];
$showName = $_POST['showName'];
$antibot = $_POST['antibot'];

//$mail->SMTPDebug = 3;

$mail->isSMTP();
$mail->Host = 'smtp.yandex.ru';
$mail->SMTPAuth = true;
$mail->Username = 'mariecmuseum@yandex.ru';
$mail->Password = 'hlttqoyzncpmniwi';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->setFrom('mariecmuseum@yandex.ru'); // отправитель
$mail->addAddress('thenail314@yandex.ru');     // получатель 
$mail->isHTML(true);
$mail->Subject = ''.$firstname . ' ' .$surname .' добавил(а) материал';

if ($antibot != 'secretkey') {
	return false;
}

$mail->AddAttachment($_FILES['photo']['tmp_name'], $_FILES['photo']['name']); 
$mail->Body = ''.$message.'<br><br>Показать имя: ' .$showName;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Ошибка при отправке сообщения. Попробуйте чуть позже.';
} else {
    header('location: ../thank-you.php');
}
?>

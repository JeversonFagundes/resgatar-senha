<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//conectar no banco de dados.
require_once "conecta.php";

//variavel de conexão.
$mysql = conectar();

//receber os dados.
$email = $_POST['email'];

$sql = "SELECT * FROM usuario WHERE email = '$email'";

$resultado = excutarSQL($mysql, $sql);

$usuario = mysqli_fetch_assoc($resultado);

if ($usuario == null) {

    echo "Email não cadastrado no sistema! Faça o cadastro e em seguida realize o login";

    die ();

}

//gerar um token unico
$token = bin2hex(random_bytes(50));

require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';
require_once 'PHPMailer/src/Exception.php';

$mail = new PHPMailer(true);

try {

    //configurações 

    $mail->CharSet = 'UTF-8';

    $mail->Encoding = 'base64';

    $mail->setLanguage('br');
    //$mail->SMTPDebug = SMTP::DEBUG_OFF; //tira as mensagens de erro

    $mail->SMTPDebug = SMTP::DEBUG_SERVER; // imprime as mensagens de erro

    $mail->isSMTP(); // envia o email usuando SMTP

    $mail->Host = 'smtp.gmail.com'; //

    $mail->SMTPAuth = true; //

    $mail->Username = 'jeverson.2022311922@aluno.iffar.edu.br';

    $mail->Password = '';

    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

    $mail->Port = 587;
   
} catch (Exception $e) {
    
    echo "Não foi possivél enciar o email.
    
    Mailer Error: {$mail->ErrorInfo}";

}


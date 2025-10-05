<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recolecta los datos del formulario
    $firstName = isset($_POST['firstName']) ? htmlspecialchars(trim($_POST['firstName'])) : '';
    $lastName = isset($_POST['lastName']) ? htmlspecialchars(trim($_POST['lastName'])) : '';
    $email = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL) : '';
    $phone = isset($_POST['phone']) ? htmlspecialchars(trim($_POST['phone'])) : '';
    $service = isset($_POST['service']) ? htmlspecialchars(trim($_POST['service'])) : '';
    $message = isset($_POST['message']) ? htmlspecialchars(trim($_POST['message'])) : '';

    // Verifica que los campos obligatorios no estén vacíos
    if (empty($firstName) || empty($lastName) || empty($email) || empty($phone) || empty($service) || empty($message)) {
        header("Location: ../views/contact.php?form_status=missing_fields");
        exit();
    }

    // Validar reCAPTCHA
    $captcha = $_POST['g-recaptcha-response'] ?? '';
    if (empty($captcha)) {
        header("Location: ../views/contact.php?form_status=captcha_missing");
        exit();
    }

    // Validar el token con la API de Google
    $secretKey = '6Lfx478rAAAAAEz1rEex4Kop5GE0ST_btTXdaVqw'; // Reemplaza con tu clave secreta
    $url = "https://www.google.com/recaptcha/api/siteverify";
    $data = [
        'secret' => $secretKey,
        'response' => $captcha,
        'remoteip' => $_SERVER['REMOTE_ADDR'] // Agrega la IP del usuario para mayor seguridad
    ];

    $options = [
        'http' => [
            'header'  => "Content-Type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data),
        ],
    ];
    $context  = stream_context_create($options);
    $response = file_get_contents($url, false, $context);

    if ($response === false) {
        // Error al conectar con la API de reCAPTCHA
        header("Location: ../views/contact.php?form_status=captcha_connection_error");
        exit();
    }

    $responseKeys = json_decode($response, true);

    if (!$responseKeys["success"]) {
        // reCAPTCHA no fue validado
        header("Location: ../views/contact.php?form_status=captcha_error");
        exit();
    }

    // Procesar el formulario (enviar correo, etc.)
    $to = "contact@vitranpei.com"; // Reemplaza por tu dirección de correo
    $subject = "New message from the form";
    $body = "First Name: $firstName\n";
    $body .= "Last Name: $lastName\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n";
    $body .= "Service: $service\n";
    $body .= "Message:\n$message";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n"; // Asegura el formato del correo

    // Enviar el correo
    if (mail($to, $subject, $body, $headers)) {
        header("Location: ../views/contact.php?form_status=success");
    } else {
        header("Location: ../views/contact.php?form_status=mail_error");
    }
    exit();
} else {
    // Si no es una solicitud POST, redirige al formulario
    header("Location: ../views/contact.php");
    exit();
}
?>
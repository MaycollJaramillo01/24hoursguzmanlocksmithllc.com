<?php
declare(strict_types=1);

session_start();

define('APP_INIT', true);
require_once __DIR__ . '/security.php';
require_once __DIR__ . '/text.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../index.php#contact', true, 303);
    exit;
}

$name = sanitize_string($_POST['name'] ?? '');
$email = sanitize_email($_POST['email'] ?? '');
$phone = sanitize_phone($_POST['phone'] ?? '');
$service = sanitize_string($_POST['service'] ?? '');
$message = sanitize_textarea($_POST['message'] ?? '');

$hasErrors = $name === '' || $email === '' || $phone === '' || $message === '' || !filter_var($email, FILTER_VALIDATE_EMAIL);

if ($hasErrors) {
    $_SESSION['contact_success'] = false;
    $_SESSION['contact_error_code'] = 'validation';
    $_SESSION['contact_old'] = [
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'service' => $service,
        'message' => $message
    ];
    header('Location: ../index.php#contact', true, 303);
    exit;
}

$payload = [
    'to'       => $SiteConfig['email'] ?? '',
    'subject'  => ($SiteConfig['brand_name'] ?? 'Consulta') . ' - Nueva solicitud de contacto',
    'name'     => $name,
    'email'    => $email,
    'phone'    => $phone,
    'service'  => $service,
    'message'  => $message,
];

if (send_contact_email($payload)) {
    $_SESSION['contact_success'] = true;
    unset($_SESSION['contact_old'], $_SESSION['contact_error_code']);
} else {
    $_SESSION['contact_success'] = false;
    $_SESSION['contact_error_code'] = 'generic';
}

header('Location: ../index.php#contact', true, 303);
exit;

/**
 * Función de envío de correo.
 * El usuario debe implementar aquí la lógica real (mail(), SMTP, API externa, etc.).
 *
 * @param array<string, mixed> $data
 * @return bool
 */
function send_contact_email(array $data): bool
{
    // Implementar aquí la lógica real de envío de correo.
    return true;
}

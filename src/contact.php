<?php
// ==============================
// Подключение PHPMailer (вариант без Composer)
// ==============================
require __DIR__ . '/handlers/PHPMailer.php';
require __DIR__ . '/handlers/SMTP.php';
require __DIR__ . '/handlers/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// ==============================
// === НАСТРОЙКИ SMTP ===
// ==============================
// ВАЖНО: для Gmail нужен "пароль приложения" (16 символов), а не обычный пароль.

$SMTP_HOST = getenv('SMTP_HOST');
$SMTP_PORT = getenv('SMTP_PORT'); // STARTTLS
$SMTP_USER = getenv('SMTP_USER');   // <- замени на ваш служебный ящик
$SMTP_PASS = getenv('SMTP_PASS');     // <- пароль приложения БЕЗ пробелов

// Куда получать заявки
$TO_EMAIL = getenv('TO_EMAIL');
$TO_NAME  = getenv('TO_NAME');

// Имя отправителя (видно у получателя)
$FROM_NAME = 'AuaLine Forms';

// ==============================
// Хелперы
// ==============================
function e($str) {
  return htmlspecialchars($str ?? '', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

function render_php_template(string $path, array $vars = []): string { // Возвращает отрендеренный веб-страницу
  extract($vars, EXTR_SKIP);      
  ob_start();
  require $path;
  return ob_get_clean();
}

// ==============================
// Обработка формы
// ==============================
if (($_SERVER['REQUEST_METHOD']) === 'POST') {
  // Поля формы
  $name    = trim($_POST['name']    ?? '');
  $email   = trim($_POST['email']   ?? '');
  $theme   = trim($_POST['theme']   ?? '');
  $message = trim($_POST['message'] ?? '');

  // Для уникальности каждого письма (на всякий)
  $when   = date('Y-m-d H:i:s');

  // Безопасные версии для HTML
  $sName    = e($name);
  $sEmail   = e($email);
  $sTheme   = e($theme);
  $sMessage = nl2br(e($message));

  // Тема письма
  $subject = "AuaLine | Feedback — {$sTheme} — {$sName}";

  // HTML-тело
  $html = render_php_template(__DIR__ . '\form.php', [
  'sTheme'   => $sTheme,
  'sName'    => $sName,
  'sEmail'   => $sEmail,
  'sMessage' => $sMessage,
  'when'    => $when,
]);

  // Plain-text альтернатива
  $plain = "AuaLine — новая заявка\n"
         . "Тема: {$theme}\n"
         . "Отправитель: {$name}\n"
         . "Email: {$email}\n"
         . "Сообщение:\n{$message}\n\n"
         . "Время: {$when}\n";

  // Отправка через PHPMailer
  $mail = new PHPMailer(true);
  try {
    $mail->isSMTP();
    $mail->Host       = $SMTP_HOST;
    $mail->SMTPAuth   = true;
    $mail->Username   = $SMTP_USER;
    $mail->Password   = $SMTP_PASS; // пароль приложения
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = $SMTP_PORT;
    $mail->CharSet    = 'UTF-8';

    // ВАЖНО: отправитель должен совпадать с SMTP-логином для Gmail
    $mail->setFrom($SMTP_USER, $FROM_NAME);
    $mail->addAddress($TO_EMAIL, $TO_NAME);

    // Чтобы "Ответить" шло на пользователя формы
    $mail->addReplyTo($email, $name);

    $mail->Subject = $subject;
    $mail->isHTML(true);
    $mail->Body    = $html;
    $mail->AltBody = $plain;

    $mail->send();
    echo 'Форма была успешно отправлена!';
  } catch (Exception $e) {
    http_response_code(500);
    echo 'Ошибка отправки: ' . $mail->ErrorInfo;
  }
  exit;
}
?>
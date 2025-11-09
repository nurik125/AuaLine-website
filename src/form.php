<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Aualine Feedback</title>
</head>
<body style="margin:0;padding:0;background:#f6f8fb;">
    <div style="max-width:640px;margin:20px auto;padding:0 16px;">
        <div style="background:#ffffff;border:1px solid #e8ecf3;border-radius:10px;overflow:hidden;">
            <header style="display:flex;background:#0f172a;color:rgb(184, 255, 77);padding:16px 20px;font:600 16px/1.3 -apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Arial;">
                <p>AuaLine — обратная связь</p>
            </header>
            <div style="padding:20px;font:14px/1.6 -apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Arial;color:#0f172a;">
            <table width="100%" cellpadding="0" cellspacing="0" style="border-collapse:collapse;">
                <tr>
                    <td style="padding:8px 0;width:160px;color:#64748b;">Тема</td>
                    <td style="padding:8px 0;"><?= $sTheme ?></td>
                </tr>
                <tr>
                    <td style="padding:8px 0;color:#64748b;">Отправитель</td>
                    <td style="padding:8px 0;"><?= $sName ?></td>
                </tr>
                <tr>
                    <td style="padding:8px 0;color:#64748b;">Email</td>
                    <td style="padding:8px 0;"><a href="mailto:<?= $sEmail ?>" style="color:#2563eb;text-decoration:none;"><?= $sEmail ?></a></td>
                </tr>
                <tr>
                    <td style="padding:8px 0;color:#64748b;vertical-align:top;">Сообщение</td>
                    <td style="padding:8px 0;"><?= $sMessage ?></td>
                </tr>
            </table>
            </div>
            <div style="background:#f8fafc;color:#64748b;padding:12px 20px;font:12px/1.4 -apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Arial;">
                <p>Нажмите «Ответить», чтобы связаться с отправителем. Не пересылайте это письмо за пределы команды. <?= $when ?></p>
            </div>
        </div>
    </div>
</body>
</html>
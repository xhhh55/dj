<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // تحقق من بيانات الدخول (مثال بسيط)
    if ($username == 'admin' && $password == 'password') {
        $_SESSION['admin_logged_in'] = true;
        header("Location: dashboard.php");
    } else {
        echo "اسم المستخدم أو كلمة المرور غير صحيحة";
    }
}
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل دخول المشرف</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="POST" action="">
        <label for="username">اسم المستخدم:</label>
        <input type="text" id="username" name="username" required>
        
        <label for="password">كلمة المرور:</label>
        <input type="password" id="password" name="password" required>
        
        <button type="submit">تسجيل الدخول</button>
    </form>
</body>
</html>
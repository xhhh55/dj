<?php
session_start();

if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: admin-login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة تحكم المشرف</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>لوحة تحكم المشرف</h1>
        <nav>
            <ul>
                <li><a href="add-product.php">إضافة منتج</a></li>
                <li><a href="orders.php">الطلبات</a></li>
                <li><a href="logout.php">تسجيل الخروج</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <h2>إدارة المنتجات</h2>
        <!-- عرض قائمة المنتجات هنا -->
    </section>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lisans Kontrol</title>
</head>
<body>

<?php
// Lisans anahtarını post parametresinden al
$licenseKey = $_POST['licenseKey'];

// Gerçek bir lisans doğrulama işlemi yapılmalıdır.
// Bu örnekte sadece basit bir kontrol yapılıyor.
$validLicense = ($licenseKey == "exampleKey");

// Sonucu JSON formatında döndür
echo json_encode(['valid' => $validLicense]);
?>

</body>
</html>

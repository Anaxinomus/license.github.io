<?php
// Lisans anahtarını post parametresinden al
$licenseKey = $_POST['licenseKey'];

// Gerçek bir lisans doğrulama işlemi yapılmalıdır.
// Bu örnekte sadece basit bir kontrol yapılıyor.
$validLicense = ($licenseKey == "exampleKey");

// Sonucu JSON formatında döndür
echo json_encode(['valid' => $validLicense]);
?>


    <!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Form Sonuçları</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container py-5">
    <h2 class="mb-4 text-center">Gönderilen Bilgiler</h2> 
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ad = htmlspecialchars($_POST["ad"] ?? '');
        $email = htmlspecialchars($_POST["email"] ?? '');
        $telefon = htmlspecialchars($_POST["telefon"] ?? '');
        $konu = htmlspecialchars($_POST["konu"] ?? '');
        $mesaj = nl2br(htmlspecialchars($_POST["mesaj"] ?? ''));

        echo '<div class="card shadow-sm">';
        echo '<div class="card-body">';
        echo "<p><strong>Ad Soyad:</strong> $ad</p>";
        echo "<p><strong>E-Posta:</strong> $email</p>";
        echo "<p><strong>Telefon:</strong> $telefon</p>";
        echo "<p><strong>Konu:</strong> $konu</p>";
        echo "<p><strong>Mesaj:</strong><br>$mesaj</p>";
        echo '</div></div>';
    } else {
        echo '<div class="alert alert-warning">Form verisi alınamadı.</div>';
    }
    ?>

    <div class="mt-4 text-center">
      <a href="iletisim.html" class="btn btn-primary">Geri Dön</a>
    </div>
  </div>
</body>
</html>

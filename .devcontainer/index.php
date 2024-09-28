<!DOCTYPE html>
<html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>
        <?php echo '<h1>The currently in use TLS certificate is displayed below</h1>'; ?>
        <?php
          $cmd = "openssl x509 -inform pem -noout -text -in /etc/ssl/certs/cert.crt";
          $result = shell_exec($cmd);
         echo '<pre>';
         echo $result;
         echo '</pre>';
          #print "<p>$output</p>;
        ?>
    </body>
</html>
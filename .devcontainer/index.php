<!DOCTYPE html>
<html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>
        <?php echo '<p>The currently in use SSL certificate is displayed below</p>'; ?>
        <?php
          $cmd = "openssl x509 -inform pem -noout -text -in /var/www/html/cert.pem";
          $result = shell_exec($cmd);
         echo '<pre>';
         echo $result;
         echo '</pre>';
          #print "<p>$output</p>;
        ?>
    </body>
</html>
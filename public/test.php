<?php
$options = array(
    PDO::MYSQL_ATTR_SSL_CA => 'C:\Users\trevo\Dropbox (IoTSD)\workspace\laravel-tasks\ssl\BaltimoreCyberTrustRoot.crt.pem'
);
$db = new PDO('mysql:host=iotsdmysql06.mysql.database.azure.com;port=3306;dbname=sampledb', 'trevor@iotsdmysql06', 'Fudpucker.62', $options);

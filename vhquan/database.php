<?php
try {
    $db = new PDO('pgsql:host=ec2-52-87-135-240.compute-1.amazonaws.com;dbname=dc7sdr5vold8kr','charset=utf8wzpwspsasuqxgj','baa04e77a98dfa1c92cf258ff906a448ccfce3e6abffc4177e3df0c9cbaa80cc');
    return $db;
}catch (Exception $e){
    echo "Connect fail";
}

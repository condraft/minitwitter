<?php
try{
    $db = new PDO('pgsql:dbname=dc43val0u7tpfs;host=ec2-174-129-33-27.compute-1.amazonaws.com;
    charset=utf8', 'ibnaroocozdysg', '3b953d0a452027ba601fe9e8a7ce549a1f7d7871f45cd7486a90336404a16a28');
}catch(PDOException $e){
    print('DBconnectError:' . $e->getMessage());
}
// <?php
// try{
//     $db = new PDO('mysql:dbname=mini_bbs;host=127.0.0.1;
//     charset=utf8', 'root', '');
// }catch(PDOException $e){
//     print('DBconnectError:' . $e->getMessage());
// }
<?php
try{
    $db = new PDO('mysql:dbname=heroku_7e20f61e42162e2;host=us-cdbr-iron-east-05.cleardb.net;
    charset=utf8', 'b8c6954338d34a', '6ebef33f');
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
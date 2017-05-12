<?php
$mysql = new mysqli("localhost","root");
echo "Mysql Server info:".$mysql->host_info;
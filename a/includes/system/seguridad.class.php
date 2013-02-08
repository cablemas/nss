<?php
function limpiador($dirty_input) { return htmlspecialchars(rawurldecode(trim(mysql_real_escape_string($dirty_input))), ENT_QUOTES,'UTF-8'); }

$prohibido = array("/", "from" ,"select", "insert", "delete", "where", "drop table", "show tables", "#", "'","\\\\","' OR 1=1");




?>
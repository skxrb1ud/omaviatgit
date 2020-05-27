<?php
require 'DB.php';
require 'Models/Good.php';
require 'Models/Client.php';

$good = Good::GetMaxGood();
$client = Client::GetMaxOrdersClient();
?>
<html>
<head>
    <meta charset="utf8">
</head>
<body>
<div>Товар, который чаще всего заказывают: <?=$good['name']?>, заказали: <?=$good['am']?> раза</div>
<div>Клиент, который сделал больше всего заказов: <?=$client['name']?>, заказал <?=$client['am']?> раза</div>
</body>
</html>

<?php
class Client{
    public static function GetMaxOrdersClient(){
        $sql = "SELECT *
FROM CLIENTs AS cl INNER JOIN (
SELECT client_id, COUNT(client_id) AS am
FROM orders
GROUP BY client_id
ORDER BY am DESC
LIMIT 1
) AS b ON cl.id = b.client_id";
        return DB::Execute($sql,[])[0];
    }
}
?>
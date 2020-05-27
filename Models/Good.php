<?php
class Good{
    public static function GetMaxGood(){
        $sql = "SELECT * 
FROM goods INNER JOIN (
SELECT good_id, COUNT(good_id) AS am
FROM orders_contents
GROUP BY good_id
ORDER BY am DESC
LIMIT 1) AS b ON goods.id = b.good_id";
        return DB::Execute($sql,[])[0];
    }
}
?>
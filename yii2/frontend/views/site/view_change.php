<?php
use frontend\models\OlyTypeInfo;

$type = OlyTypeInfo::findBySql($sql, ['id' => $game_id])->asArray()->all();
foreach ($type as $t) {
    echo '<script>
    type_ids.push(' . $t['
        type_id '] . ')
</script>';
    echo '<li style="width: 300px">
    <div style="height:60px; line-height: 60px; font-size: larger;">' . $t['type_name_zh'] . '</div>
</li>';
}

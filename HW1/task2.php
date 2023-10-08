<?php
$drawings = 80;
$fletpens = 23;
$pencils = 40;
$paints = $drawings - $fletpens - $pencils;

echo '<b>Задача:</b><br>';
echo "На школьной выставке $drawings рисунков. $fletpens из них выполненых<br>";
echo "фломастерами, $pencils карандашами, а остальные - красками.<br>";
echo "Сколько рисунков, выполненных красками, на школьной выставке?<br>";
echo '<br>';
echo '<br>Решение:</b><br>';
echo 'Количество рисунков, выполненных красками = <br>';
echo 'Общее количество рисунков - Количество рисунков фломастерами - Количество рисунков карандашами<br>';
echo '<br>';
echo '<b>Ответ:</b><br>';
echo $drawings - $fletpens - $pencils;

?>
<h1>Внутренняя ошибка сервера</h1>
<br>
<p><strong>Файл, где обнаружена ошибка: </strong><?=$data[2]?></p>
<p><strong>Строка, где обнаружена ошибка: </strong><?=$data[1]?></p>
<p><strong>Сообщение об ошибке: </strong><?=$data[0]?></p>
<pre><?htmlspecialchars(print_r($data[3]))?></pre>

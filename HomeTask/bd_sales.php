<?php
/*Есть таблица sales со следующими полями
- id (INT, primary key, auto increment )
- date (DATETIME)
- amount (double)
- comment (varchar(255))
таблица items со следующими полями
- id
- name
- amount
и items_sales
- id
- sales_id
- items_id*/

/*написать приложение, отображающее на экране все товары для одной продажи.*/
$link = mysqli_connect('127.0.0.1', 'mysql', 'mysql', 'sales');//подключаемся к базе данных
if (!$link) {
    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
    exit;
}
$sql = "SELECT items_sales.sales_id, name, items.amount FROM items, sales, items_sales WHERE items_sales.sales_id=sales.id and items_sales.items_id=items.id";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_array($result);
//echo $row['date']."|".$row['name']."|".$row['amount']."\n";
print_r($row);

/*while ($row)
{
    echo $row['date']."|".$row['name']."|".$row['amount']."\n";

}*/

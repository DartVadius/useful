Выборка из пересекающихся диапазонов
```sql
SELECT * FROM `table`
    WHERE `one` BETWEEN {$start} AND {$end} 
        OR {$start} BETWEEN `one` AND `two`
```
Дописываем значение в поле

```sql
UPDATE `table_name` SET `field_name`=CONCAT(field_name,'Текст, который нужно дописать в поле') WHERE <условие>
```

Выборка из пересекающихся диапазонов
```sql
SELECT * FROM `table`
    WHERE `one` BETWEEN {$start} AND {$end} 
        OR {$start} BETWEEN `one` AND `two`
```

for update是在数据库中上锁用的，可以为数据库中的行上一个排它锁。

当有一方在查询使用for update另一方 需要等使用for update 的语句完成事务(我在查你就别查了)，才能查询，否则会被阻塞.（两条查询都开启事务）

1.首先将数据库填充数据后 执行脚本 testmsq.php 

2.随后执行语句：

start transaction ; 
select good_test set good_num = 2000 where good_id = 15 for update;
update good_test set good_num = 2000 where good_id = 15 ;
COMMIT

当注释commit一行时 可发行脚本执行暂停

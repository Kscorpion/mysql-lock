  for update是在数据库中上锁用的，可以为数据库中的行上一个排它锁。
当一个事务的操作未完成时候，其他事务可以读取但是不能写入或更新。

1.首先将数据库填充数据后 执行脚本 testmsq.php
2.随后执行语句：

start transaction ; 
update good_test set good_num = 2000 where good_id = 15 ;
COMMIT

当注释commit一行时 可发行脚本执行暂停

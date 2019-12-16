# mysql-lock
Play the lock and burn oneself
玩锁自焚

mysql锁相关实例

悲观锁 ：for update

乐观锁 : mysql 可使用版本号进行控制,每次修改先查询版本号,在修改与版本号一致的那一行

使用事务时：
           
           两条语句同时修改，先修改的未提交,另一条会被锁定（innodb 行锁）
            
           若条件判断where 的列没有加索引则会锁定整个表（失去行锁的意义）
            
           需要控制锁的粒度（范围 例：id>1）
表锁：

    1）LOCK TABLE good READ;(读锁)
    
    2）LOCK TABLE good WRITE, XXX WRITE, ....(写锁  可多个=>读锁同理)
    
    3) UNLOCK (解锁)

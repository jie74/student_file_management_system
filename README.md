# 学生档案管理系统

#### 介绍
数据库大作业存档，与搭档共同完成，学生档案管理系统分学生端和管理端，Apache+PHP+MySQL，欢迎学习指教，请勿全盘照搬。

#### 使用方法
1、新建数据库，导入时选择file.sql文件 2、clone代码保存到本地 3、可修改connect.sql文件中的mysql数据库密码

#### 部分截图
![功能模块](https://images.gitee.com/uploads/images/2020/0804/155328_83e5a04c_4890701.png "屏幕截图.png")
![E-R图](https://images.gitee.com/uploads/images/2020/0804/155902_f0115327_4890701.png "屏幕截图.png")
![学生填写个人信息](https://images.gitee.com/uploads/images/2020/0804/155701_5b370b06_4890701.png "屏幕截图.png")
![管理员增删改成绩信息](https://images.gitee.com/uploads/images/2020/0804/155753_934c839b_4890701.png "屏幕截图.png")


#### 参考资料
PHP 实现简单的学生信息管理系统（web 版）
[https://www.cnblogs.com/yuxiuyan/p/5754717.html](http://https://www.cnblogs.com/yuxiuyan/p/5754717.html)

#### 改进和不足
①Stud_school 表存在非主属性传递函数依赖于候选码，不符合第三范式，产生冗余较大。
②默认值的问题，想从 A 表中获取一个属性并插入 B 表中，B 表剩余属性为默认值，sql 语句为 insert into student_log(sno) select sno from stud_school，但是用 PHP 构造语句时插入失败，放弃此功能。
③利用 session 机制进行登录注销，但后续 sno 的传递大多为 get 和 post 方法，只有部分使用$_SESSION['sno']，这会导致安全问题，知道 url 的人可以直接查看他人信息，或直接绕过登录进入管理员后台，因涉及文档较多，故没有修改。
④图片上传没有限制后缀名为 jpg、jpeg、gif 等，存在安全隐患
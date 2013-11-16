# Host: 10.1.52.100  (Version: 5.5.29-0ubuntu1)
# Date: 2013-11-16 19:12:09
# Generator: MySQL-Front 5.3  (Build 4.43)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "{{profiles_fields}}"
#

DROP TABLE IF EXISTS `{{profiles_fields}}`;
CREATE TABLE `{{profiles_fields}}` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `varname` varchar(50) NOT NULL DEFAULT '',
  `title` varchar(255) NOT NULL DEFAULT '',
  `field_type` varchar(50) NOT NULL DEFAULT '',
  `field_size` int(3) NOT NULL DEFAULT '0',
  `field_size_min` int(3) NOT NULL DEFAULT '0',
  `required` int(1) NOT NULL DEFAULT '0',
  `match` varchar(255) NOT NULL DEFAULT '',
  `range` varchar(255) NOT NULL DEFAULT '',
  `error_message` varchar(255) NOT NULL DEFAULT '',
  `other_validator` text,
  `default` varchar(255) NOT NULL DEFAULT '',
  `widget` varchar(255) NOT NULL DEFAULT '',
  `widgetparams` text,
  `position` int(3) NOT NULL DEFAULT '0',
  `visible` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

#
# Data for table "{{profiles_fields}}"
#

INSERT INTO `{{profiles_fields}}` VALUES (1,'first_name','First Name','VARCHAR',255,3,2,'','','Incorrect First Name (length between 3 and 50 characters).','','','','',1,3),(2,'last_name','Last Name','VARCHAR',255,3,2,'','','Incorrect Last Name (length between 3 and 50 characters).','','','','',2,3);

#
# Structure for table "{{users}}"
#

DROP TABLE IF EXISTS `{{users}}`;
CREATE TABLE `{{users}}` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(128) NOT NULL DEFAULT '',
  `email` varchar(128) NOT NULL DEFAULT '',
  `activkey` varchar(128) NOT NULL DEFAULT '',
  `createtime` int(10) NOT NULL DEFAULT '0',
  `lastvisit` int(10) NOT NULL DEFAULT '0',
  `superuser` int(1) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0',
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastvisit_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `address` varchar(255) NOT NULL DEFAULT '' COMMENT '接书地址',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_username` (`username`),
  UNIQUE KEY `user_email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "{{users}}"
#

INSERT INTO `{{users}}` VALUES (1,'admin','21232f297a57a5a743894a0e4a801fc3','webmaster@example.com','560ad6f386c0c46f9b7778f4b150bae7',1384590005,1384599051,1,1,'0000-00-00 00:00:00','0000-00-00 00:00:00','xinau.edu.cn');

#
# Structure for table "{{profiles}}"
#

DROP TABLE IF EXISTS `{{profiles}}`;
CREATE TABLE `{{profiles}}` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  CONSTRAINT `user_profile_id` FOREIGN KEY (`user_id`) REFERENCES `{{users}}` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "{{profiles}}"
#

INSERT INTO `{{profiles}}` VALUES (1,'Administrator','Admin');

#
# Structure for table "account"
#

DROP TABLE IF EXISTS `account`;
CREATE TABLE `account` (
  `userid` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `username` varchar(20) NOT NULL COMMENT '用户名',
  `password` binary(32) NOT NULL COMMENT '密码',
  `gender` varchar(10) NOT NULL COMMENT '性别',
  `birthday` date NOT NULL COMMENT '出生日期',
  `address` varchar(30) NOT NULL COMMENT '地址',
  `question` varchar(30) NOT NULL COMMENT '问题',
  `answer` varchar(35) NOT NULL COMMENT '答案',
  `email` varchar(45) NOT NULL COMMENT '邮箱',
  `photo` varchar(45) NOT NULL COMMENT '图片地址',
  `introduce` varchar(200) NOT NULL COMMENT '简介',
  `role` enum('menber','manager') NOT NULL COMMENT '身份',
  `regtime` datetime NOT NULL COMMENT '注册时间',
  PRIMARY KEY (`userid`),
  KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COMMENT='用户表';

#
# Data for table "account"
#

INSERT INTO `account` VALUES (1,'admin',X'3231323332663239376135376135613734333839346130653461383031666333','男','1986-10-05','上海交通大学','我喜欢的人？','tricy','yueyuanhui@gmail.com','','here I am','manager','2008-04-21 10:07:06'),(10,'tricy',X'6131356166393265303063393666663238653063623239333532623262333332','female','0000-00-00','','','','tric87@eyou.com','','','menber','2008-04-22 19:57:03'),(11,'123',X'3230326362393632616335393037356239363462303731353264323334623730','','0000-00-00','','','','123@gmail.com','','','menber','2008-04-22 20:08:23'),(12,'qwe',X'3736643830323234363131666339313961356435346630666639666261343436','male','0000-00-00','世界都分跨过了','我是重托','你是疯子','yueyuan@gmail.com','','','menber','2008-04-22 23:31:07'),(13,'love',X'6235633062313837666533303961663066346433353938326664393631643765','male','2008-04-14','上海交通大学','有没有 love','no 有','love@sina.com','','','menber','2008-04-23 13:31:36'),(14,'周嘉元',X'3832376363623065656138613730366334633334613136383931663834653762','male','1996-04-09','上海交通大学闵行校区','我是周嘉元？','是','zhoujiayuan@live.cn','','','menber','2008-04-23 23:30:42'),(15,'邵佳梦',X'3230326362393632616335393037356239363462303731353264323334623730','male','1999-04-05','上海交通大学闵行校区西区30-507','我是邵佳梦？','N0','shaojiameng@gmail.com','','','menber','2008-04-24 00:07:25');

#
# Structure for table "categories"
#

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `categoryid` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '图书类别ID',
  `categoryname` varchar(20) NOT NULL COMMENT '图书类别名称',
  PRIMARY KEY (`categoryid`),
  KEY `categoryname` (`categoryname`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COMMENT='图书类别表';

#
# Data for table "categories"
#

INSERT INTO `categories` VALUES (1,'文艺'),(2,'Biographies & Memoir'),(3,'Business & Investing'),(4,'Calendars'),(5,'儿童读物'),(7,'计算机'),(9,'娱乐'),(12,'历史');

#
# Structure for table "books"
#

DROP TABLE IF EXISTS `books`;
CREATE TABLE `books` (
  `bookid` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '书ID',
  `categoryid` smallint(5) unsigned NOT NULL COMMENT '书类别',
  `bookname` varchar(50) NOT NULL COMMENT '书名',
  `luserid` smallint(5) unsigned NOT NULL COMMENT '分享用户ID',
  `detail` varchar(300) NOT NULL COMMENT '详细介绍',
  `photo` varchar(20) NOT NULL COMMENT '书图片',
  `commend` tinyint(2) unsigned NOT NULL DEFAULT '0' COMMENT '是否为推荐图书（0为普通，1为推荐）',
  `lendtime` date NOT NULL COMMENT '分享日期',
  `buserid` smallint(5) unsigned NOT NULL COMMENT '借阅用户ID',
  `borrowtime` date NOT NULL COMMENT '借阅时间',
  `author` varchar(20) NOT NULL COMMENT '作者',
  `public` varchar(20) NOT NULL COMMENT '出版社',
  `number` tinyint(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`bookid`),
  KEY `categoryid` (`categoryid`),
  KEY `buserid` (`buserid`) USING BTREE,
  KEY `luserid` (`luserid`),
  CONSTRAINT `categoryid` FOREIGN KEY (`categoryid`) REFERENCES `categories` (`categoryid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 PACK_KEYS=1 COMMENT='书';

#
# Data for table "books"
#

INSERT INTO `books` VALUES (1,1,'The Rest Is Noise: Listening to the Twentieth Cent',12,'Ships from and sold by Amazon.com. Gift-wrap available.','simple1.gif',0,'2008-04-27',0,'0000-00-00','Alex Ross','Farrar, Straus and G',1),(2,2,'Smash! Crash!',10,'Ships from and sold by Amazon.com. Gift-wrap available.','simple2.gif',0,'2008-04-28',0,'0000-00-00','Jon Scieszka','Simon & Schuster Chi',0),(3,3,'The Witch of Portobello',11,'Ships from and sold by Amazon.com. Gift-wrap available.','simple3.gif',0,'2008-04-28',0,'0000-00-00','Paulo Coelho','HarperCollins',1),(4,4,'Buddha: A Story of Enlightenment',13,'Ships from and sold by Amazon.com. Gift-wrap available.','simple4.jpg',0,'2008-04-28',0,'0000-00-00','Deepak Chopra','HarperOne',1),(5,5,'Fiasco: The American Military Adventure in Iraq',14,'The main points of this hard-hitting indictment of the Iraq war have been made before, but seldom with such compelling specificity. In dovetailing critiques of the civilian and military leadership','simple5.jpg',1,'2008-04-28',0,'0000-00-00','Thomas E. Ricks','Penguin Press HC',1);

#
# Structure for table "comment"
#

DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `comid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `userid` smallint(5) unsigned NOT NULL,
  `ip` varchar(30) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `content` text NOT NULL,
  `msn` varchar(30) NOT NULL,
  `qq` varchar(30) NOT NULL,
  `hide` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `face` tinyint(2) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`comid`),
  KEY `userid` (`userid`),
  CONSTRAINT `userid` FOREIGN KEY (`userid`) REFERENCES `account` (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

#
# Data for table "comment"
#

INSERT INTO `comment` VALUES (1,13,'127.0.0.1','2008-04-23 21:24:04','sfjeofajekwjfwefwefafe','','',0,1),(2,12,'127.0.0.1','2008-04-23 21:25:44','kjfewofjka;fkiejfaowkef','','',1,1),(3,12,'127.0.0.1','2008-04-23 21:30:03','wo de sh是哈哈哈 ','helo@live.cn','',0,18),(4,12,'127.0.0.1','2008-04-23 21:33:22','hahahahahaha','qwe@hotmael.com','',1,1),(5,13,'127.0.0.1','2008-04-23 23:19:07','safwefawefa','','',0,1),(6,13,'127.0.0.1','2008-04-23 23:23:08','what is you name','','',0,1),(8,14,'127.0.0.1','2008-04-24 00:00:42','wo是周嘉元','haha@live.cn','',0,17),(9,15,'211.80.59.42','2008-04-24 00:09:17','wo shi 邵佳梦','meng@live.cn','',0,15),(10,15,'211.80.59.42','2008-04-24 00:09:37','我不是邵佳梦','','',1,1),(11,15,'211.80.59.42','2008-04-24 00:12:40','hehe  wo de IP是  211.80.59.42','','',0,1),(12,14,'127.0.0.1','2008-04-24 00:24:12','sdcewcwsdesdcsdcsd','23@live.com','',0,1),(13,14,'127.0.0.1','2008-04-24 00:25:48','erhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh','','',0,1),(14,12,'211.80.59.43','2008-04-25 00:51:16','DSFHIWUEFBCKSJDBVIWERFHI','sdhjkA@HJDK.COM','',0,1);

#
# Structure for table "tbl_migration"
#

DROP TABLE IF EXISTS `tbl_migration`;
CREATE TABLE `tbl_migration` (
  `version` varchar(255) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "tbl_migration"
#

INSERT INTO `tbl_migration` VALUES ('m000000_000000_base',1384589991),('m110805_153437_installYiiUser',1384590005);

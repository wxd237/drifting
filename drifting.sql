# Host: localhost  (Version: 5.5.35)
# Date: 2014-05-06 15:56:49
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "{{profiles_fields}}"
#

INSERT INTO `{{profiles_fields}}` VALUES (1,'first_name','姓名','VARCHAR',255,3,2,'','','Incorrect First Name (length between 3 and 50 characters).','','','','',1,3);

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

#
# Data for table "{{users}}"
#

INSERT INTO `{{users}}` VALUES (1,'admin','21232f297a57a5a743894a0e4a801fc3','webmaster@example.com','560ad6f386c0c46f9b7778f4b150bae7',1384590005,1399169197,1,1,'0000-00-00 00:00:00','0000-00-00 00:00:00','xinau.edu.cn'),(2,'wxd237','e10adc3949ba59abbe56e057f20f883e','wxd237@123.com','d612e2e700805ce389fa817b06a20dc8',0,0,0,1,'2014-04-29 10:49:20','0000-00-00 00:00:00','');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

#
# Data for table "{{profiles}}"
#

INSERT INTO `{{profiles}}` VALUES (1,'Administrator','Admin'),(2,'ggggg',NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COMMENT='图书类别表';

#
# Data for table "categories"
#

INSERT INTO `categories` VALUES (1,'文艺'),(5,'儿童读物'),(7,'计算机'),(9,'娱乐'),(12,'历史');

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
  `photo` varchar(50) CHARACTER SET gbk NOT NULL DEFAULT '' COMMENT '书图片',
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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 PACK_KEYS=1 COMMENT='书';

#
# Data for table "books"
#

INSERT INTO `books` VALUES (10,5,'唐诗300首+三字经·弟子规(套装共2册) [平装]',1,'越读越经典:唐诗300首+三字经·弟子规(套装共2册) [平装]','/uploads/1398227299.jpg',0,'2014-04-23',0,'2014-04-23','haha','武汉大学出版社',1),(11,12,'由我而史 谁来书写小草的历史？',1,'由我而史 谁来书写小草的历史？','/uploads/1398229577.jpg',0,'2014-04-23',0,'2014-04-23','haha','中信出版社;',1),(12,1,'完美摄影161法则:数码单反摄影技巧精粹',1,'《完美摄影161法则:数码单反摄影技巧精粹》分基础讲座篇、三分构图法掌握篇、测试篇和实践篇4部分，共161条；基则。第一篇中的每一条法则都运用大量的拍摄效果对比和图例分析，重要知识点被一一标出，方便您理解和记忆。第二篇中的每一条法则都被细分为多个小知识点，从不同的角度进行分析，为您提供最实用的摄影构图技术指导。第三篇中的每一条法则分别针对同一场景的4张照片进行对比打分，先提出问题，然后由每一位摄影师有针对性地进行解答，在有趣的互动过程中提升您的摄影眼力。第四篇中的每一条法则分别剖析同一次拍摄得到的20张照片，详述照片的拍摄方法和选择方法，助您获得更出色的照片。《完美摄影161法则:数码单反摄影','/uploads/1398739910.jpg',0,'2014-04-29',0,'2014-04-29','（日本）Digital Photo编辑部','中国青年出版社',1),(13,9,'在难搞的日子笑出声来 [平装]',2,'《在难搞的日子笑出声来》内容简介：大鹏全面讲述奋斗与成长，命运转折的关键时刻，无一不记录在此。 从家乡小城集安到塘沽，他曾在码头的煤堆里工作，看着天上和地下都是一片漆黑，他问自己，就算是脚下的煤，都有被装上轮船运走的时候，自己为什么一定要待在这里？ 从2004年来北京到2014年，十年间，他一步一步坚持用自己的方式前行，不但不快，甚至还有些笨拙。当师父赵本山第一次有意收他为徒的时候，他居然拒绝了这个难得的好机会，躲到没人的地方哭了很久，在他的内心起了怎样的波澜？ 他曾在节目里从高处狼狈地摔了下来，可是话筒递过来，说：“请大鹏介绍一下玩这个游戏的经验吧。”他大脑一片空白，什么也没能说出来，录完节','/uploads/1398740994.jpg',0,'2014-04-29',0,'2014-04-29','大鹏','北京联合出版公司; 第1版',1),(14,7,'Python基础教程(第2版)',1,'《Python基础教程(第2版)》包括Python程序设计的方方面面，首先从Python的安装开始，随后介绍了Python的基础知识和基本概念，包括列表、元组、字符串、字典以及各种语句。然后循序渐进地介绍了一些相对高级的主题，包括抽象、异常、魔法方法、属性、迭代器。此后探讨了如何将Python与数据库、网络、C语言等工具结合使用，从而发挥出Python的强大功能，同时介绍了Python程序测试、打包、发布等知识。最后，作者结合前面讲述的内容，按照实际项目开发的步骤向读者介绍了几个具有实际意义的Python项目的开发过程。','/uploads/1399169452.jpg',0,'2014-05-04',1,'2014-05-04','Robert A. Gibson，软件工','人民邮电出版社',1);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "comment"
#


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

# Host: localhost  (Version: 5.5.53)
# Date: 2019-09-27 16:39:18
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "px_project"
#

DROP TABLE IF EXISTS `px_project`;
CREATE TABLE `px_project` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='项目';

#
# Data for table "px_project"
#

/*!40000 ALTER TABLE `px_project` DISABLE KEYS */;
/*!40000 ALTER TABLE `px_project` ENABLE KEYS */;

#
# Structure for table "px_user"
#

DROP TABLE IF EXISTS `px_user`;
CREATE TABLE `px_user` (
  `Id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `staffNumber` int(7) unsigned zerofill NOT NULL DEFAULT '0000000',
  `password` varchar(32) NOT NULL DEFAULT '0',
  `username` varchar(32) DEFAULT NULL,
  `power` int(2) unsigned zerofill NOT NULL DEFAULT '00',
  `email` varchar(255) DEFAULT NULL,
  `telephone` varchar(11) DEFAULT NULL,
  `mobilephone` varchar(11) DEFAULT NULL,
  `lasttime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `photo` varchar(255) DEFAULT '',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='用户';

#
# Data for table "px_user"
#

/*!40000 ALTER TABLE `px_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `px_user` ENABLE KEYS */;

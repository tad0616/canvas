CREATE TABLE `canvas` (
  `sn` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`sn`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.1.46-community


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema cmscom
--

CREATE DATABASE IF NOT EXISTS cmscom;
USE cmscom;

--
-- Definition of table `t_admin_user`
--

DROP TABLE IF EXISTS `t_admin_user`;
CREATE TABLE `t_admin_user` (
  `intID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `VCH_USER_ID` varchar(45) NOT NULL,
  `VCH_PASSWORD` varchar(45) NOT NULL,
  `VCH_FULLNAME` varchar(45) NOT NULL,
  `VCH_DESIGNATION` varchar(45) DEFAULT NULL,
  `VCH_ADDRESS` varchar(500) DEFAULT NULL,
  `VCH_EMAIL` varchar(45) DEFAULT NULL,
  `VCH_MOBILE` varchar(45) DEFAULT NULL,
  `DTM_CREATED_ON` datetime DEFAULT NULL,
  `VCH_CREATED_BY` varchar(45) DEFAULT NULL,
  `DTM_UPDATED_ON` datetime DEFAULT NULL,
  `VCH_UPDATED_BY` varchar(45) DEFAULT NULL,
  `INT_DELETED_FLAG` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`intID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_admin_user`
--

/*!40000 ALTER TABLE `t_admin_user` DISABLE KEYS */;
INSERT INTO `t_admin_user` (`intID`,`VCH_USER_ID`,`VCH_PASSWORD`,`VCH_FULLNAME`,`VCH_DESIGNATION`,`VCH_ADDRESS`,`VCH_EMAIL`,`VCH_MOBILE`,`DTM_CREATED_ON`,`VCH_CREATED_BY`,`DTM_UPDATED_ON`,`VCH_UPDATED_BY`,`INT_DELETED_FLAG`) VALUES 
 (1,'admin','5f4dcc3b5aa765d61d8327deb882cf99','shop admin','Shop Owner',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0x00);
/*!40000 ALTER TABLE `t_admin_user` ENABLE KEYS */;


--
-- Definition of table `t_catagory_subcatagory`
--

DROP TABLE IF EXISTS `t_catagory_subcatagory`;
CREATE TABLE `t_catagory_subcatagory` (
  `INT_ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `INT_LEVEL` int(10) unsigned NOT NULL,
  `INT_PARENT_LEVEL` int(10) unsigned NOT NULL,
  `VCH_NAME` varchar(45) NOT NULL,
  `DTM_UPDATED_ON` datetime NOT NULL,
  `INT_DELETED_FLAG` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`INT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_catagory_subcatagory`
--

/*!40000 ALTER TABLE `t_catagory_subcatagory` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_catagory_subcatagory` ENABLE KEYS */;


--
-- Definition of table `t_cms`
--

DROP TABLE IF EXISTS `t_cms`;
CREATE TABLE `t_cms` (
  `INT_ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `INT_LINK_ID` int(10) unsigned NOT NULL,
  `VCH_CONTENT` text,
  `DTM_UPDATED_ON` datetime NOT NULL,
  `INT_DELETED_FLAG` bit(1) NOT NULL,
  PRIMARY KEY (`INT_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_cms`
--

/*!40000 ALTER TABLE `t_cms` DISABLE KEYS */;
INSERT INTO `t_cms` (`INT_ID`,`INT_LINK_ID`,`VCH_CONTENT`,`DTM_UPDATED_ON`,`INT_DELETED_FLAG`) VALUES 
 (1,3,'Test Content','2013-09-26 00:00:00',0x00);
/*!40000 ALTER TABLE `t_cms` ENABLE KEYS */;


--
-- Definition of table `t_contactus`
--

DROP TABLE IF EXISTS `t_contactus`;
CREATE TABLE `t_contactus` (
  `INT_ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `INT_LINK_ID` int(10) unsigned NOT NULL,
  `VCH_CONTACT_ADDRESS` varchar(45) NOT NULL,
  `BIT_IS_MAP` bit(1) NOT NULL DEFAULT b'0',
  `VCH_LATITUDE` varchar(45) NOT NULL,
  `VCH_LONGITUDE` varchar(45) NOT NULL,
  `DTM_UPDATED_ON` datetime NOT NULL,
  `INT_DELETED_FLAG` bit(1) NOT NULL,
  PRIMARY KEY (`INT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_contactus`
--

/*!40000 ALTER TABLE `t_contactus` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_contactus` ENABLE KEYS */;


--
-- Definition of table `t_enquiries`
--

DROP TABLE IF EXISTS `t_enquiries`;
CREATE TABLE `t_enquiries` (
  `INT_ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `INT_ITEM_ID` int(10) unsigned NOT NULL,
  `VCH_SENDER_EMAIL` varchar(45) NOT NULL,
  `INT_SENDER_MOBILE` int(10) unsigned NOT NULL,
  `VCH_SENDER_ADDRESS` varchar(45) NOT NULL,
  `VCH_SENDER_MESSAGE` varchar(45) NOT NULL,
  `BIT_REPLIED` bit(1) NOT NULL DEFAULT b'0',
  `DTM_UPDATED_ON` datetime NOT NULL,
  `INT_DELETED_FLAG` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`INT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_enquiries`
--

/*!40000 ALTER TABLE `t_enquiries` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_enquiries` ENABLE KEYS */;


--
-- Definition of table `t_enquiries_reply`
--

DROP TABLE IF EXISTS `t_enquiries_reply`;
CREATE TABLE `t_enquiries_reply` (
  `INT_ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `INT_ENQUIRY_ID` int(10) unsigned NOT NULL,
  `REPLY_TYPE` varchar(45) NOT NULL,
  `REPLY_MESSAGE` varchar(45) NOT NULL,
  `DTM_UPDATED_ON` datetime NOT NULL,
  `BIT_DELETED_FLAG` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`INT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_enquiries_reply`
--

/*!40000 ALTER TABLE `t_enquiries_reply` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_enquiries_reply` ENABLE KEYS */;


--
-- Definition of table `t_feedback_config`
--

DROP TABLE IF EXISTS `t_feedback_config`;
CREATE TABLE `t_feedback_config` (
  `INT_ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `INT_LINK_ID` int(10) unsigned NOT NULL,
  `VCH_MAIL_TO` varchar(45) NOT NULL,
  `VCH_MAIL_CC` varchar(45) NOT NULL,
  `VCH_MAIL_BCC` varchar(45) NOT NULL,
  `VCH_SUBJECT` varchar(45) NOT NULL,
  `DTM_UPDATED_ON` datetime NOT NULL,
  `BIT_DELETED_FLAG` bit(1) NOT NULL,
  PRIMARY KEY (`INT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_feedback_config`
--

/*!40000 ALTER TABLE `t_feedback_config` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_feedback_config` ENABLE KEYS */;


--
-- Definition of table `t_feedbacks`
--

DROP TABLE IF EXISTS `t_feedbacks`;
CREATE TABLE `t_feedbacks` (
  `INT_ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `VCH_NAME` varchar(45) NOT NULL,
  `VCH_SENDER_EMAIL` varchar(45) NOT NULL,
  `VCH_SENDER_ADDRESS` varchar(45) NOT NULL,
  `VCH_SUBJECT` varchar(45) NOT NULL,
  `VCH_COMMENTS` varchar(45) NOT NULL,
  `DTM_UPDATED_ON` datetime NOT NULL,
  `BIT_DELETED_FLAG` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`INT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_feedbacks`
--

/*!40000 ALTER TABLE `t_feedbacks` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_feedbacks` ENABLE KEYS */;


--
-- Definition of table `t_functions`
--

DROP TABLE IF EXISTS `t_functions`;
CREATE TABLE `t_functions` (
  `INT_ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `VCH_FUNCTION_NAME` varchar(45) NOT NULL,
  `VCH_INPUT_PAGE` varchar(45) NOT NULL,
  `DTM_UPDATED_ON` datetime NOT NULL,
  `BIT_DELETED_FLAG` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`INT_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_functions`
--

/*!40000 ALTER TABLE `t_functions` DISABLE KEYS */;
INSERT INTO `t_functions` (`INT_ID`,`VCH_FUNCTION_NAME`,`VCH_INPUT_PAGE`,`DTM_UPDATED_ON`,`BIT_DELETED_FLAG`) VALUES 
 (1,'CMS','addContent.php','2013-09-26 00:00:00',0x00),
 (2,'Feedback','configFeedback.php','2013-09-26 00:00:00',0x00),
 (3,'Contact Us','configContact.php','2013-09-26 00:00:00',0x00);
/*!40000 ALTER TABLE `t_functions` ENABLE KEYS */;


--
-- Definition of table `t_item_photo`
--

DROP TABLE IF EXISTS `t_item_photo`;
CREATE TABLE `t_item_photo` (
  `INT_ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `INT_ITEM_ID` int(10) unsigned NOT NULL,
  `VCH_PHOTO_NAME` varchar(45) NOT NULL,
  `VCH_PHOTO_CAPTION` varchar(45) NOT NULL,
  `DTM_UPDATED_ON` datetime NOT NULL,
  `BIT_DELETED_FLAG` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`INT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_item_photo`
--

/*!40000 ALTER TABLE `t_item_photo` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_item_photo` ENABLE KEYS */;


--
-- Definition of table `t_items`
--

DROP TABLE IF EXISTS `t_items`;
CREATE TABLE `t_items` (
  `INT_ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `INT_CAT_ID` int(10) unsigned NOT NULL,
  `INT_SUB_CAT_ID` int(10) unsigned NOT NULL,
  `VCH_ITEM_NAME` varchar(45) NOT NULL,
  `VCH_PRICE` varchar(45) NOT NULL,
  `INT_DISCOUNT_PERCENT` int(10) unsigned NOT NULL,
  `VCH_DETAIL_DESCRIPTION` varchar(45) NOT NULL,
  `DTM_UPDATED_ON
DTM_UPDATED_ON` datetime NOT NULL,
  `BIT_DELETED_FLAG` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`INT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_items`
--

/*!40000 ALTER TABLE `t_items` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_items` ENABLE KEYS */;


--
-- Definition of table `t_links`
--

DROP TABLE IF EXISTS `t_links`;
CREATE TABLE `t_links` (
  `INT_ID` int(10) unsigned NOT NULL,
  `INT_LINK_LEVEL` int(10) unsigned NOT NULL,
  `INT_PARENT_LINK` int(10) unsigned NOT NULL,
  `VCH_LINK_NAME` varchar(45) NOT NULL,
  `BIT_IS_CONTENT` bit(1) NOT NULL DEFAULT b'0',
  `VCH_LINK_TYPE` varchar(45) DEFAULT NULL,
  `VCH_LINK_TARGET` varchar(45) DEFAULT NULL,
  `INT_FUNCTION_ID` int(10) unsigned DEFAULT '0',
  `INT_URL` varchar(200) DEFAULT NULL,
  `INT_ORDER_ID` int(10) unsigned NOT NULL,
  `DTM_CREATED_ON` datetime NOT NULL,
  `VCH_CREATED_BY` varchar(45) NOT NULL,
  `DTM_UPDATED_ON` datetime NOT NULL,
  `VCH_UPDATED_BY` varchar(45) NOT NULL,
  `BIT_DELETED_FLAG` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`INT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_links`
--

/*!40000 ALTER TABLE `t_links` DISABLE KEYS */;
INSERT INTO `t_links` (`INT_ID`,`INT_LINK_LEVEL`,`INT_PARENT_LINK`,`VCH_LINK_NAME`,`BIT_IS_CONTENT`,`VCH_LINK_TYPE`,`VCH_LINK_TARGET`,`INT_FUNCTION_ID`,`INT_URL`,`INT_ORDER_ID`,`DTM_CREATED_ON`,`VCH_CREATED_BY`,`DTM_UPDATED_ON`,`VCH_UPDATED_BY`,`BIT_DELETED_FLAG`) VALUES 
 (1,1,0,'Home',0x01,'internal','same',0,'index.php',1,'2013-09-26 00:00:00','admin','2013-09-26 00:00:00','admin',0x00),
 (2,1,0,'About',0x00,NULL,NULL,0,NULL,2,'2013-09-26 00:00:00','admin','2013-09-26 00:00:00','admin',0x00),
 (3,2,2,'About Shop',0x01,'internal','same',1,NULL,1,'2013-09-26 00:00:00','admin','2013-09-26 00:00:00','admin',0x00),
 (4,2,2,'Mission',0x01,'internal','same',2,NULL,2,'2013-09-26 00:00:00','admin','2013-09-26 00:00:00','admin',0x00),
 (5,3,3,'About Shop1',0x01,'internal','same',1,NULL,1,'2013-09-26 00:00:00','admin','2013-09-26 00:00:00','admin',0x00),
 (6,3,3,'About Shop2',0x01,'internal','same',1,NULL,2,'2013-09-26 00:00:00','admin','2013-09-26 00:00:00','admin',0x00),
 (7,4,5,'Shop1 Administration',0x01,'internal','same',1,NULL,1,'2013-09-26 00:00:00','admin','2013-09-26 00:00:00','admin',0x00),
 (8,1,0,'Product',0x00,NULL,NULL,0,NULL,3,'2013-09-26 00:00:00','admin','2013-09-26 00:00:00','admin',0x00),
 (9,2,8,'Catagory',0x01,'internal','same',1,NULL,1,'2013-09-26 00:00:00','admin','2013-09-26 00:00:00','admin',0x00);
/*!40000 ALTER TABLE `t_links` ENABLE KEYS */;


--
-- Definition of function `getJoinLinks`
--

DROP FUNCTION IF EXISTS `getJoinLinks`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` FUNCTION `getJoinLinks`(givenID INT) RETURNS varchar(1024) CHARSET latin1
    DETERMINISTIC
BEGIN
	DECLARE rv VARCHAR(1024);
    DECLARE cm CHAR(1);
    DECLARE ch INT;
	DECLARE ch1 INT;	
	DECLARE linkName VARCHAR(100);
	DECLARE linkName2 VARCHAR(100);

    SET rv = '';
    SET cm = '';
    SET ch = GivenID;
    SET ch1 = GivenID;
	SET linkName='';
    SET linkName2='';

    WHILE ch > 0 DO    

		SELECT IFNULL(INT_PARENT_LINK,-1) into ch FROM
        (SELECT INT_PARENT_LINK FROM t_links WHERE INT_ID = ch) A;
		
		select IFNULL(VCH_LINK_NAME,-1)  into linkName2 from t_links where INT_ID=ch;
		 
		SELECT IFNULL(VCH_LINK_NAME,-1) INTO linkName FROM
        (SELECT VCH_LINK_NAME FROM t_links WHERE INT_ID = ch1) B;
	
        IF ch > 0 THEN
            SET rv = CONCAT(linkName2,cm,rv);
            SET cm = '/';
		ELSE 
			SET rv = CONCAT(rv,cm,linkName);
            SET cm = '/';
        END IF;
			
    END WHILE;
    RETURN rv;
END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `usp_admin_login`
--

DROP PROCEDURE IF EXISTS `usp_admin_login`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `usp_admin_login`(in userid varchar(50), in pass varchar(100), in random int)
BEGIN
	if (pass= (select md5(concat(vch_password,random)) from t_admin_user where vch_user_id=userid and  INT_DELETED_FLAG=0)) then
		select vch_fullname,vch_designation from cmscom.t_admin_user where vch_user_id=userid and INT_DELETED_FLAG=0;
	end if;
END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `usp_links_content`
--

DROP PROCEDURE IF EXISTS `usp_links_content`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `usp_links_content`(
)
BEGIN
select 
	INT_ID, 
	getJoinLinks(int_Id) as LINK_NAME,
	VCH_LINK_TYPE,
	VCH_LINK_TARGET,
	INT_FUNCTION_ID,
	CASE INT_FUNCTION_ID
           WHEN 0 THEN INT_URL          
           ELSE (select VCH_FUNCTION_NAME from t_functions where INT_ID=INT_FUNCTION_ID)
	END AS FUNCTION_NAME_URL,
	CASE INT_FUNCTION_ID
		WHEN 0 THEN 
			 1
		WHEN 1 THEN 
			(select count(*) from t_cms A where A.INT_LINK_ID=d.INT_ID and INT_DELETED_FLAG=0) 
		WHEN 2 THEN 
			 (select count(*) from t_contactus B where B.INT_LINK_ID=d.INT_ID and INT_DELETED_FLAG=0) 
		WHEN 3 THEN 
			 (select count(*) from t_feedback_config C where C.INT_LINK_ID=d.INT_ID and BIT_DELETED_FLAG=0) 
	END AS DATA_EXIST
from 
	t_links d
where 
	BIT_DELETED_FLAG=0 and BIT_IS_CONTENT=1  ;
END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

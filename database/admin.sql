-- MySQL dump 10.13  Distrib 5.7.22, for Linux (x86_64)
--
-- Host: localhost    Database: laravel-shop
-- ------------------------------------------------------
-- Server version	5.7.22-0ubuntu18.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Dumping data for table `admin_menu`
--

LOCK TABLES `admin_menu` WRITE;
/*!40000 ALTER TABLE `admin_menu` DISABLE KEYS */;
INSERT INTO `admin_menu` VALUES (1,0,1,'首页','fa-bar-chart','/',NULL,'2018-12-18 01:30:29'),(2,0,6,'系统管理','fa-tasks',NULL,NULL,'2018-12-28 12:03:29'),(3,2,7,'管理员','fa-users','auth/users',NULL,'2018-12-28 12:03:29'),(4,2,8,'角色','fa-user','auth/roles',NULL,'2018-12-28 12:03:29'),(5,2,9,'权限','fa-ban','auth/permissions',NULL,'2018-12-28 12:03:29'),(6,2,10,'菜单','fa-bars','auth/menu',NULL,'2018-12-28 12:03:29'),(7,2,11,'操作日志','fa-history','auth/logs',NULL,'2018-12-28 12:03:29'),(8,0,2,'用户管理','fa-users','/users','2018-12-18 02:20:38','2018-12-18 02:21:10'),(9,0,3,'商品管理','fa-cubes','/products','2018-12-18 07:19:06','2018-12-18 07:19:20'),(10,0,4,'订单管理','fa-rmb','/orders','2018-12-26 13:12:44','2018-12-26 13:14:27'),(11,0,5,'优惠券管理','fa-tags','/coupon_codes','2018-12-28 12:02:56','2018-12-28 12:03:29');
/*!40000 ALTER TABLE `admin_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_permissions`
--

LOCK TABLES `admin_permissions` WRITE;
/*!40000 ALTER TABLE `admin_permissions` DISABLE KEYS */;
INSERT INTO `admin_permissions` VALUES (1,'All permission','*','','*',NULL,NULL),(2,'Dashboard','dashboard','GET','/',NULL,NULL),(3,'Login','auth.login','','/auth/login\r\n/auth/logout',NULL,NULL),(4,'User setting','auth.setting','GET,PUT','/auth/setting',NULL,NULL),(5,'Auth management','auth.management','','/auth/roles\r\n/auth/permissions\r\n/auth/menu\r\n/auth/logs',NULL,NULL),(6,'用户管理','users','','/users*','2018-12-18 02:48:16','2018-12-18 02:48:16'),(7,'商品管理','products','','/products*','2018-12-28 22:19:02','2018-12-28 22:19:02'),(8,'订单管理','orders','','/orders*','2018-12-28 22:19:51','2018-12-28 22:19:51'),(9,'优惠券管理','coupon_codes','','/coupon_codes*','2018-12-28 22:21:31','2018-12-28 22:21:31');
/*!40000 ALTER TABLE `admin_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_role_menu`
--

LOCK TABLES `admin_role_menu` WRITE;
/*!40000 ALTER TABLE `admin_role_menu` DISABLE KEYS */;
INSERT INTO `admin_role_menu` VALUES (1,2,NULL,NULL);
/*!40000 ALTER TABLE `admin_role_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_role_permissions`
--

LOCK TABLES `admin_role_permissions` WRITE;
/*!40000 ALTER TABLE `admin_role_permissions` DISABLE KEYS */;
INSERT INTO `admin_role_permissions` VALUES (1,1,NULL,NULL),(2,2,NULL,NULL),(2,3,NULL,NULL),(2,4,NULL,NULL),(2,6,NULL,NULL),(2,7,NULL,NULL),(2,8,NULL,NULL),(2,9,NULL,NULL);
/*!40000 ALTER TABLE `admin_role_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_role_users`
--

LOCK TABLES `admin_role_users` WRITE;
/*!40000 ALTER TABLE `admin_role_users` DISABLE KEYS */;
INSERT INTO `admin_role_users` VALUES (1,1,NULL,NULL),(2,2,NULL,NULL);
/*!40000 ALTER TABLE `admin_role_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_roles`
--

LOCK TABLES `admin_roles` WRITE;
/*!40000 ALTER TABLE `admin_roles` DISABLE KEYS */;
INSERT INTO `admin_roles` VALUES (1,'Administrator','administrator','2018-12-17 09:18:06','2018-12-18 02:56:59'),(2,'运营','operator','2018-12-18 02:53:50','2018-12-18 02:53:50');
/*!40000 ALTER TABLE `admin_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_user_permissions`
--

LOCK TABLES `admin_user_permissions` WRITE;
/*!40000 ALTER TABLE `admin_user_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin_user_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin_users`
--

LOCK TABLES `admin_users` WRITE;
/*!40000 ALTER TABLE `admin_users` DISABLE KEYS */;
INSERT INTO `admin_users` VALUES (1,'admin','$2y$10$l25i5KtZV0KWpNgNw/1s4uwpJJI7cRZWN2BBnxdPlrFwlkK.sbGvi','Administrator',NULL,'6bAI8pmLgKiwCbMBUDrkiyp7WHPIgwG67URDRQ3BEbK1HJs0bsfAtslzUTbh','2018-12-17 09:18:06','2018-12-17 09:18:06'),(2,'operator','$2y$10$RVTG2CXuIEd/LXZMEZDfy.cF4Fu/QKqZPGLxnKjb1OPaSaRReQBE2','运营',NULL,NULL,'2018-12-18 02:58:42','2018-12-18 02:58:42');
/*!40000 ALTER TABLE `admin_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-12-29  8:13:22

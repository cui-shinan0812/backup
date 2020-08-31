-- MySQL dump 10.13  Distrib 5.5.62, for Linux (x86_64)
--
-- Host: kusunoki.cdcqlqqq0xiw.ap-northeast-1.rds.amazonaws.com    Database: kusunoki
-- ------------------------------------------------------
-- Server version	5.7.22-log

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
-- Table structure for table `admin_menu`
--

DROP TABLE IF EXISTS `admin_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `order` int(11) NOT NULL DEFAULT '0',
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uri` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permission` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_menu`
--

LOCK TABLES `admin_menu` WRITE;
/*!40000 ALTER TABLE `admin_menu` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_operation_log`
--

DROP TABLE IF EXISTS `admin_operation_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_operation_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `method` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `input` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `admin_operation_log_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_operation_log`
--

LOCK TABLES `admin_operation_log` WRITE;
/*!40000 ALTER TABLE `admin_operation_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin_operation_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_permissions`
--

DROP TABLE IF EXISTS `admin_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `http_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `http_path` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admin_permissions_name_unique` (`name`),
  UNIQUE KEY `admin_permissions_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_permissions`
--

LOCK TABLES `admin_permissions` WRITE;
/*!40000 ALTER TABLE `admin_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_role_menu`
--

DROP TABLE IF EXISTS `admin_role_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_role_menu` (
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `admin_role_menu_role_id_menu_id_index` (`role_id`,`menu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_role_menu`
--

LOCK TABLES `admin_role_menu` WRITE;
/*!40000 ALTER TABLE `admin_role_menu` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin_role_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_role_permissions`
--

DROP TABLE IF EXISTS `admin_role_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_role_permissions` (
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `admin_role_permissions_role_id_permission_id_index` (`role_id`,`permission_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_role_permissions`
--

LOCK TABLES `admin_role_permissions` WRITE;
/*!40000 ALTER TABLE `admin_role_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin_role_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_role_users`
--

DROP TABLE IF EXISTS `admin_role_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_role_users` (
  `role_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `admin_role_users_role_id_user_id_index` (`role_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_role_users`
--

LOCK TABLES `admin_role_users` WRITE;
/*!40000 ALTER TABLE `admin_role_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin_role_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_roles`
--

DROP TABLE IF EXISTS `admin_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admin_roles_name_unique` (`name`),
  UNIQUE KEY `admin_roles_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_roles`
--

LOCK TABLES `admin_roles` WRITE;
/*!40000 ALTER TABLE `admin_roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_user_permissions`
--

DROP TABLE IF EXISTS `admin_user_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_user_permissions` (
  `user_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `admin_user_permissions_user_id_permission_id_index` (`user_id`,`permission_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_user_permissions`
--

LOCK TABLES `admin_user_permissions` WRITE;
/*!40000 ALTER TABLE `admin_user_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin_user_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_users`
--

DROP TABLE IF EXISTS `admin_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admin_users_username_unique` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_users`
--

LOCK TABLES `admin_users` WRITE;
/*!40000 ALTER TABLE `admin_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `email_for_news`
--

DROP TABLE IF EXISTS `email_for_news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `email_for_news` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `email_for_news`
--

LOCK TABLES `email_for_news` WRITE;
/*!40000 ALTER TABLE `email_for_news` DISABLE KEYS */;
INSERT INTO `email_for_news` VALUES (1,'xpress@xitong.net','2020-02-07 05:39:06','2020-02-07 05:39:06');
/*!40000 ALTER TABLE `email_for_news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `enterprises`
--

DROP TABLE IF EXISTS `enterprises`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `enterprises` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ceo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ceo_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` enum('雑貨・アパレル','工具用品','機械部品','デジタル家電','建築材料','おもちゃ','その他') COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `employees` enum('1~50人','51~100人','101~500人','501人以上') COLLATE utf8mb4_unicode_ci NOT NULL,
  `scale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_1_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_2_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('normal','ban','recommend') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'normal',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `enterprises_user_id_foreign` (`user_id`),
  CONSTRAINT `enterprises_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enterprises`
--

LOCK TABLES `enterprises` WRITE;
/*!40000 ALTER TABLE `enterprises` DISABLE KEYS */;
INSERT INTO `enterprises` VALUES (2,2,'宁波司塔士液圧有限公司','宁波市镇海区镇骆西路1881号','寧波','中国','315206',NULL,NULL,'李南星','8613906849867','機械部品','弊社は2001年に設立以来、ドイツと日本の油圧バルブ生産技術を導入・吸収し、改良してきました。板金加工をコア技術として、お客様の困りごとに正面から取り組み、信頼を築いてまいりました。その技術に対するこだわりで中国国内だけではなく、海外まで事業フィールドを広げ、さらには開発、試作、量産までの一貫した対応で多くのメーカー企業を下支えしております。\r\n油圧バルブは、各自動化機械、設備に欠けない部品です。小さな油圧バルブは機械全体の安定性に大きな影響を与えております。弊社は、国内外の専門技術者の指導の下で、製品の構成や精度など全面的な改善により、部品の変形や油漏らしなど大幅に改善されました。原材料から仕掛け品、製品まですべて規準に照らしてきびしく検査し、不良品をひとつも出荷しないようにしております。また、出荷した製品にも技術指導や保障修理を行っております。\r\n現在、大変早いスピードでグローバル化が進む中、中小企業である私たちは、積極的に付加価値を生み出す意識を持ち、最適提案を通じて海外のお客様にも貢献する企業となるべく日々努力を重ねてまいります。','51~100人','150,万元',NULL,'images/users/2/enterprise/宁波司塔士液压有限公司/icon_url.jpg','images/users/2/enterprise/宁波司塔士液压有限公司/image_1_url.jpg','images/users/2/enterprise/宁波司塔士液压有限公司/image_2_url.jpg','normal','2019-12-20 04:27:03','2019-12-20 04:27:03'),(5,2,'安丘博阳机械制造有限公司','山东省潍坊市安丘市石堆镇东城工业园（宿家埠村）','その他','中国','262100','8605364370778',NULL,'闫冰','8605364370778','機械部品','安丘博阳机械制造有限公司は2008年に設立され、山東省安秋市東城工業団地に位置し、粉末、顆粒、ペースト、ブロック材料の生産機械運搬機械、自動化物流設備の製造企業です。同社は、中国の国家知的財産権優良企業と評価され、齐鲁证券取引所に上場しております。また、同社は、山東省の隠れたチャンピオン育成企業、山東省の「1つの企業、1つの技術」と表彰され、山東省科学技術生産性促進賞を受賞しております。','101~500人','504,万元',NULL,'images/users/2/enterprise/安丘博阳机械制造有限公司/icon_url.jpg',NULL,NULL,'normal','2020-02-10 08:45:51','2020-02-10 08:45:51'),(6,2,'广東雅格莱灯光音响有限公司','广州白云区人和镇东华工业区东昌路6号','広州','中国','510470',NULL,'13711549242','唐新花','13711549242','デジタル家電','广东雅格莱灯光音响有限公司は、広州白雲区の美しいガーデンスタイルの工業団地である東華工業団地にあり、白雲国際空港に隣接し、白雲山が付随しています。舞台照明設備の設計、生産、マーケティング、アフターサービスを行っているハイテク企業です。\r\n会社は1999年に設立されました。私たちは常に「人のためにカラフルな人生を創造する」という使命を担い、「あなたの舞台をよりエキサイティングにする」という企業ビジョンを守り、品質とサービスの旗印を掲げ、先駆的で革新的な企業哲学を主張しています。その結果、Yellow Riverブランドは国内外でよく知られるようになり、会社の継続的な発展と拡大に伴い、新たなビジネスを再開し、’雅格莱」の新しいブランドを作成しました。\r\n2005年には、ISO9001：2000国際品質システム認証に合格し、「世界有名ブランド評議会のメンバー部門」、「中国品質クレジットAAA +エンタープライズ」、「中国舞台芸術協会のメンバー」、になりました。品質の最も信頼できるブランドは、「HCネットワークのトップテン照明および照明制御ブランド」を長年にわたって授与されており、60以上の製品が「CE」および「RoHS」認証を取得し、数十件の国内特許を取得しています。\r\n同社は中国にいくつかの支店を設立し、全国の主要都市に代理店を置いています。海外では、当社の製品はヨーロッパ、アメリカ、東南アジア、ロシアを含む60以上の国と地域で販売されています。\r\n「舞台の魅力を感じ、顧客価値を高め、従業員の理想を実現し、企業ビジョンを作成する」という信念で、世界中の新旧の顧客にサービスを提供しています。','51~100人','100,万元',NULL,'images/users/2/enterprise/广东雅格莱灯光音响有限公司/icon_url.png','images/users/2/enterprise/广东雅格莱灯光音响有限公司/image_1_url.png','images/users/2/enterprise/广东雅格莱灯光音响有限公司/image_2_url.png','normal','2020-02-12 06:29:34','2020-02-12 06:29:34'),(7,2,'沈阳泰科易科技有限公司','中国辽宁省沈阳市大东区滂江街26-2号长峰大厦2302室','その他','中国','110046',NULL,NULL,'石开元','13555732521','デジタル家電','泰科易は、プロ級のパノラマカメラの設計、開発、生産、販売に注力しており、中国初のパノラマ統合機器メーカーです。 2014年に研究開発に投資し、6年間5回のイテレーションを経て、多くの業界初のプロ級パノラマ機器製品を作り上げました。また、 2020年には、世界初の4レンズプロ級8Kインマシンステッチライブパノラマカメラがリリースされました。 泰科易は、業界ユーザー向けにパーソナライズされたカスタムサービスソリューションとOEMソリューションを提供します。 より多くの高品質の製品とサービスを世界中の顧客に提供しています。','1~50人','119,万元','https://www.youtube.com/embed/wCHzjAvI4YE','images/users/2/enterprise/沈阳泰科易科技有限公司/icon_url.png',NULL,NULL,'normal','2020-02-13 06:38:12','2020-02-13 06:38:12'),(9,2,'广州市番高气模制品有限公司','No.14 Xingfa Road, Make village,Dongchong Town,Nansha District, Guangzhou,China','上海','中国','511475','0086 (20) 3921 8227',NULL,'Haoping Mai','0086 (20) 3921 8227','おもちゃ','当社は1998年に設立され、広州市南沙区に位置し、設計、生産、販売を統合する会社です。インフレータブルトランポリン、インフレータブル城、インフレータブルスライド、大型インフレータブル障害物、スポーツインフレータブル製品、インフレータブルスキー、体操用マット、インフレータブルテント、インフレータブルウォーターパーク、インフレータブルプール、インフレータブルボートおよびボート、およびその他の製品の製造を専門メーカーです。 私たちの工場は「人を重視し、品質を第一に、サービスを第一に」という企業理念を順守し、最も完璧な製品を製造し、市場のニーズを満たす高品質の製品を開発するために、製品技術の研究開発と革新に取り組んでいます。私たちはすべて顧客の需要に基づいて生産を行っています。\r\n私たちは、世界のトップインフレータブルブランドの顧客をパートナーとして集めています。高品質製品の製造に注力し、製品の安全性、実用性、品質、顧客のニーズの組み合わせに焦点を当て、信頼できるインフレータブル工場になることを目指しています。','101~500人','100,万元','https://www.youtube.com/embed/_569KM4O8FY','images/users/2/enterprise/广州市番高气模制品有限公司/icon_url.jpg',NULL,NULL,'normal','2020-02-13 07:18:41','2020-02-13 07:18:41'),(10,2,'中山市元造五金制品有限公司','广东省中山市民乐社区和合工业区8号厂房','広州','中国','528425',NULL,'13420476799','朱慧清','13420476799','工具用品','中山市元造五金制品有限公司は2016年に設立され、ワイヤー（鉄、ステンレス）クラフト製品の製造に特化したハードウェア加工メーカーで、登録資本金は100万元です。総面積は5,000平方メートルで、総投資額は1000万元以上です。 取得：ISO9001：2008品質管理システム認証。 エンタープライズの年間生産額値6,000万元です。\r\n弊社の生産設備としては、自動溶接装置、大規模なワイヤ3D成形自動装置、スタンピングダイなどの自動タッピングおよび連続穿孔装置など、一連の自動生産装置を所有しています。 主な製品は、電気用オーブングリッド、青揚げ用キッチン製品、ハードウェアアクセサリー、ピッカーネット、ワインキャビネットの棚、バスラック、ストーブラック、その他のハードウェア製品です。 これらの製品は、環境保護基準を満たすために電気めっきおよび表面処理されています。 また、ステンレス鋼製品は、欧州連合、ドイツ、フランスの食品試験に合格しています。 弊社の製品は多くの有名な家電製品会社に販売されており、その60％が輸出され、40％が国内で販売されています。優秀な企業文化と優れた福利厚生制度を持ち、寮やカフェテリアなどの施設も設けています。','51~100人','100,万元',NULL,'images/users/2/enterprise/中山市元造五金制品有限公司/icon_url.png','images/users/2/enterprise/中山市元造五金制品有限公司/image_1_url.png',NULL,'normal','2020-02-17 06:25:56','2020-02-17 06:25:56'),(11,2,'東昇製衣有限公司','江西省赣州市于都县贡江镇于都工业园','その他','中国','342300',NULL,'13822116736','邓女士','13822116736','雑貨・アパレル','同社は2005年に広州で衣料品のデザインと生産を開始し、2016年には約50人の縫製スタッフによる衣料品生産ワークショップを開催しました。 同社は、品質第一、継続的なイノベーションの管理原則を順守し、ODMやOEMの注文を受けています。','51~100人','300,万元',NULL,'images/users/2/enterprise/东升制衣有限公司/icon_url.png',NULL,NULL,'normal','2020-02-17 07:56:34','2020-02-17 07:56:34'),(12,2,'東莞市嘉昊服饰有限公司','广东省东莞市虎门镇南栅第六工业区民昌路10巷3号','広州','中国','523932',NULL,NULL,'王婷','18128035306','雑貨・アパレル','东莞市嘉昊服饰有限公司はファッションの町である虎門にあります。デザイン、生産、販売を一貫とした中国初の子供服メーカーです。 同社は1995年に設立され、15年の困難と苦難を経て、最初の小規模家庭工場から、現代経営を中心とした国際的な子供服の専門メーカーまで成長してきました。\r\n同社は、子供服市場の製品開発に注力しています。絶妙な設計プロセスを備えた開発部隊があり、設計チームは国際、香港、国内のプロのデザイナーで構成されています。 毎年、800〜1,000の女の子向けのプロのドレスがデザインされ、国内の子供服のトレンドをリードし、国際市場で高い評価を得ています。 現在、同社の従業員数は200人で、工場の敷地面積は8,000平方メートル、建物の建設面積は5,000平方メートルで、完全な製品サプライチェーンと強力なリソース割り当て機能を備えています。','101~500人','100,万元',NULL,'images/users/2/enterprise/东莞市嘉昊服饰有限公司/icon_url.jpg',NULL,NULL,'normal','2020-02-17 08:21:57','2020-02-17 08:21:57'),(13,2,'双童日用品有限公司','中国浙江省義烏市北苑工業区北苑路378 ','義烏','中国','322000','86-579-85670515',NULL,'劉経理','86-579-8567 0515','雑貨・アパレル','双童は1994年に中国義烏市に設立されました。現在はプラスチック製ストローの開発、生産また販売に特化している有限会社です。会社の総合投資は4000万ドルに達し、「GMP」標準による4万平方メートルの密封式のワークショップのほか、200台のストロー生産ラインを所有し、毎年の生産量は12000トンに達しています。当社の海外輸出量は中国ストロー輸出送料の20％余りを占め、10年以上トップシェアを保っています。現在、当社は世界最大の飲用ストロー生産企業として、「ポリプロビレン製飲用ストロー」製品（中国）国家標準制定機構としても機能しています。','101~500人','1620,万元',NULL,'images/users/2/enterprise/双童日用品有限公司/icon_url.png',NULL,NULL,'normal','2020-02-19 08:45:33','2020-02-19 08:45:33');
/*!40000 ALTER TABLE `enterprises` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `favorites`
--

DROP TABLE IF EXISTS `favorites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `favorites` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `type` enum('enterprise','product') COLLATE utf8mb4_unicode_ci NOT NULL,
  `favorite_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `favorites_user_id_foreign` (`user_id`),
  CONSTRAINT `favorites_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `favorites`
--

LOCK TABLES `favorites` WRITE;
/*!40000 ALTER TABLE `favorites` DISABLE KEYS */;
/*!40000 ALTER TABLE `favorites` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inquires`
--

DROP TABLE IF EXISTS `inquires`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inquires` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('enterprise','product') COLLATE utf8mb4_unicode_ci NOT NULL,
  `inquire_id` bigint(20) unsigned NOT NULL,
  `category` enum('価格','納期','カスタムサポート','その他') COLLATE utf8mb4_unicode_ci NOT NULL,
  `contents` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('registered','processing','resolved') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'registered',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `inquires_user_id_foreign` (`user_id`),
  CONSTRAINT `inquires_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inquires`
--

LOCK TABLES `inquires` WRITE;
/*!40000 ALTER TABLE `inquires` DISABLE KEYS */;
/*!40000 ALTER TABLE `inquires` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2016_01_04_173148_create_admin_tables',1),(4,'2019_09_23_134837_create_profiles_table',1),(5,'2019_09_23_180741_create_enterprises_table',1),(6,'2019_09_25_044540_create_products_table',1),(7,'2019_10_07_070934_create_email_for_news_table',1),(8,'2019_10_07_132437_create_inquires_table',1),(9,'2019_10_09_031531_create_favorites_table',1),(10,'2019_10_09_031553_create_view_histories_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `enterprise_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `build_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minimum_order_quantity` bigint(20) unsigned NOT NULL,
  `minimum_build_days` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci,
  `three_d_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_1_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_2_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_3_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_4_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_5_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_6_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_7_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_8_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_9_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_10_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_11_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('normal','in_review','ban','recommend') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'in_review',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_enterprise_id_foreign` (`enterprise_id`),
  CONSTRAINT `products_enterprise_id_foreign` FOREIGN KEY (`enterprise_id`) REFERENCES `enterprises` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (5,2,'油圧バルブDSEG-03','機械部品',NULL,'宁波',100,NULL,'images/users/2/2/products/油圧バルブDSEG-03/icon_url.png','工作温度５０℃\r\n輸入電圧±１０%\r\n油液温度５５～６５℃',NULL,NULL,'images/users/2/2/products/油圧バルブDSEG-03/image_1_url.png','images/users/2/2/products/油圧バルブDSEG-03/image_2_url.png',NULL,'images/users/2/2/products/DSEG-03/image_4_url.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'in_review','2020-02-10 06:57:54','2020-02-10 06:57:54'),(6,2,'油圧バルブDSJG-02','機械部品',NULL,'宁波',100,NULL,'images/users/2/2/products/油圧バルブDSJG-02/icon_url.png','工作温度５０℃\r\n輸入電圧±１０％\r\n油液温度５５～６５℃','https://www.ddd.online/jq/webEdit/project/embedProject/tscB6Cby-6quPBfWH-hxd00rZK-ekax4pSp?from=singlemessage',NULL,'images/users/2/2/products/油圧バルブDSJG-02/image_1_url.png','images/users/2/2/products/油圧バルブDSJG-02/image_2_url.png',NULL,NULL,'images/users/2/2/products/DSJG-02/image_5_url.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'in_review','2020-02-10 07:04:23','2020-02-10 07:04:23'),(7,2,'油圧バルブXDSG-03','機械部品',NULL,'宁波',100,NULL,'images/users/2/2/products/油圧バルブXDSG-03/icon_url.png','工作温度５０℃\r\n輸入電圧±１０％\r\n油液温度５５～６５℃',NULL,NULL,'images/users/2/2/products/油圧バルブXDSG-03/image_1_url.png','images/users/2/2/products/油圧バルブXDSG-03/image_2_url.png',NULL,NULL,'images/users/2/2/products/XDSG-03/image_5_url.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'in_review','2020-02-10 07:07:05','2020-02-10 07:07:05'),(8,5,'管状輸送機','機械部品',NULL,'山东省安丘市',1,NULL,'images/users/2/5/products/管状輸送機/icon_url.jpg','管状輸送機は、粉体、小顆粒、小ブロックなどのバルク材料を搬送する連続搬送装置で、水平、斜め、垂直に搬送できます。 閉じたパイプラインでは、チェーンピースがパイプラインに沿って材料を搬送するための伝達部材として使用されます。 水平に搬送されると、材料はチェーンによって移動方向に押されます。 材料層間の内部摩擦が材料とパイプ壁の間の外部摩擦よりも大きい場合、材料はチェーンとともに前方に移動して安定した材料の流れを形成します。垂直に搬送される場合、パイプ内の材料はチェーンによって上方に押されます。供給により、上部の素材が滑り落ちるのを防ぎ、横方向の圧力が発生するため、素材の内部摩擦が強化されます。素材間の内部摩擦が素材とパイプの内壁および外壁と素材の重量との間の摩擦よりも大きい場合、素材はチェーンとともに上方に輸送されます。 連続ストリームが形成されます。',NULL,NULL,'images/users/2/5/products/管状輸送機/image_1_url.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'in_review','2020-02-12 04:42:51','2020-02-12 04:42:51'),(10,5,'インテリジェント開梱機','機械部品',NULL,'山东省安丘市',1,NULL,'images/users/2/5/products/インテリジェント開梱機/icon_url.png','インテリジェント開梱機は、キャッチ装置、カッター装置、排出装置、塵埃除去装置、および供給ベルトコンベアで構成されています。 供給ベルトコンベアは包装袋をスライドボードに搬送し、包装袋はスライドボードからキャッチ装置まで搬送されます。切断ナイフを介して包装袋を把持して袋切断処理を行い、その後、包装袋の排出処理を実行します。',NULL,NULL,'images/users/2/5/products/インテリジェント開梱機/image_1_url.png','images/users/2/5/products/インテリジェント開梱機/image_2_url.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'in_review','2020-02-12 05:32:18','2020-02-12 05:32:18'),(11,5,'材料開梱機','機械部品',NULL,'山东省安丘市',1,NULL,'images/users/2/5/products/材料開梱機/icon_url.png','開梱プロセスは高度に自動化されており、操作が簡単で、複数のバッグを同時に開梱でき、開梱効率が高いです。材料は油圧リフティングテーブルからキャッチ位置まで持ち上げられ、グラブデバイスはカッターデバイスを介してバッグをつかみ、選別装置に取り出します。不要な包装材料をレクターに押して、開梱プロセスを完了します。\r\n良好な流動性、非腐食性、非可燃性の材料（粉末材料、粒状材料）に適しています。',NULL,NULL,'images/users/2/5/products/材料開梱機/image_1_url.png','images/users/2/5/products/材料開梱機/image_2_url.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'in_review','2020-02-12 05:46:28','2020-02-12 05:46:28'),(12,5,'自動積重機','機械部品',NULL,'山东省安丘市',1,NULL,'images/users/2/5/products/自動積重機/icon_url.png','4軸設計を採用し、シンプルな構造、低故障率、便利な操作、省エネ、および使用面積が少ないという利点があります。 強力な手首の負荷容量により、ハンドリング作業を簡単に完了することができ、ハンドリングロボットは、主に重荷重および大規模な作業場面に適しています。 特徴：手首の耐荷重は120Kg、最大作業半径は2403mmです。\r\n医薬品、日用化学品、飲料、食品、ワイン、ハードウェア、およびその他の製造企業が、カートン、バッグ、箱、缶、ボトルなどのさまざまな形状の完成品を梱包してパレットに入れるのに適しています。',NULL,NULL,'images/users/2/5/products/自動積重機/image_1_url.png','images/users/2/5/products/自動積重機/image_2_url.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'in_review','2020-02-12 05:58:51','2020-02-12 05:58:51'),(13,5,'パウダートン包装機','機械部品',NULL,'山东省安丘市',1,NULL,'images/users/2/5/products/パウダートン包装機/icon_url.png','粉料吨袋包装机——适合包装各种粉状物料，物料粒度在50目以下、含气量小、流动不良的粉状物料，该机是我公司采用国际先进粉体包装技术，双级给料装置及无级变速叶片给料机构，多项填充、防堵、排尘新技术应用。具有包装精度高、工作速度快、环境污染少、先进可靠、性能优良、易于操作等优点。\r\nあらゆる種類の粉末材料の包装に適したパウダートン包装機、材料の粒子サイズは50メッシュ未満、ガス含有量は少なく、流動性の低い粉末材料、このマシンは国際先進の粉末包装技術を使用しています。2段材料供給装置と変速ブレード供給構成、および充填、除塵のための多くの新技術が適用されています。 包装精度が高く、作業速度が速く、環境汚染が少なく、高度で信頼性が高く、優れた性能と簡単な操作という利点があります。',NULL,NULL,'images/users/2/5/products/パウダートン包装機/image_1_url.png','images/users/2/5/products/パウダートン包装機/image_2_url.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'in_review','2020-02-12 06:07:43','2020-02-12 06:07:43'),(14,6,'YR-W224WW/CW','デジタル家電',NULL,'広州',1,NULL,'images/users/2/6/products/YR-W224WW/CW/icon_url.png','光源パラメーター：\r\n光源：224x0.5W（ウォームホワイト3200K /ポジティブホワイト6500K /コールドホワイト7500K）\r\nビーム角：110度（柔らかい光のアクリル板付き）\r\n光の角度：120度（柔らかい光のアクリル板付き）\r\n制御パラメーター：\r\nストロボ：0-30Hz\r\n調光：標準モード+ 4つの調光曲線\r\n制御信号：DMX512\r\n制御チャンネル：3チャンネル、1チャンネル（切り替え可能）\r\n組み込みプログラミング：5種類のストロボ\r\n動作モード：DMX512、手動、マスタースレーブ\r\n冷却方法：ファン低速静音放熱\r\n温度制御：光源の温度が90度に達すると、光源の最大出力は50％に低下し、温度が再び70度に低下すると、最大出力は100％に戻ります\r\nノイズ：サイレント\r\n作業パラメーター：\r\n動作電圧：AC100V-240V（50 / 60HZ）\r\n総定格電力：120W\r\n力率：0.60\r\n定格電流：0.7A\r\n作業環境温度：40度未満\r\n照明パラメーター：\r\nディスプレイ：LEDデジタルチューブディスプレイ+ 4キー\r\n電源インターフェース：ツイストヘッド\r\n信号インターフェース：3コア\r\n光バリア：オプション\r\n防水評価：IP20\r\n正味重量：吊り下げタイプ：2.65KG（シャッターなし）',NULL,NULL,'images/users/2/6/products/YR-W224WW/CW/image_1_url.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'in_review','2020-02-12 06:35:15','2020-02-12 06:35:15'),(19,6,'YR-P1007QIR','デジタル家電',NULL,'広州',1,NULL,'images/users/2/6/products/YR-P1007QIR/icon_url.png','動作電圧：AC110V-240V\r\n頻度：50 / 60HZ\r\n総定格電力：80W\r\nランプビードパワー：10W /個\r\nランプビーズの数：7 4 in 1\r\nストロボ：0-20HZ\r\n調光：標準モード+ 4つの調光曲線\r\n光角：20度\r\n制御信号：DMX512\r\n制御チャネル：10チャネル\r\n動作モード：DMX512、手動、自走式、音響制御、赤外線リモコン\r\n保護レベル：IP20\r\n正味重量：1.1KG\r\n軽いボディサイズ：19 * 16 * 14 cm',NULL,NULL,'images/users/2/6/products/YR-P1007QIR/image_1_url.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'in_review','2020-02-12 06:48:33','2020-02-12 06:48:33'),(20,6,'YR-L0308T','デジタル家電',NULL,'広州',1,NULL,'images/users/2/6/products/YR-L0308T/icon_url.jpg','接続可能なLEDストリップライト/接続可能なLEDストリップレインボーライト\r\n光源パラメーター：\r\n光源：L0308T：8x3W（RGBトリプル）\r\n光角：110度（反射カップ：染色効果）\r\n制御パラメーター：\r\nストロボ：0-20Hz\r\n調光：標準モード+ 4つの調光曲線\r\n制御信号：DMX512\r\n制御チャンネル：9チャンネル、4チャンネル\r\n組み込みプログラミング：5種類のストロボ+ 6種類の自走式+ 2種類のサウンドコントロール\r\n操作モード：DMX512、マニュアル、マスタースレーブ、音声制御\r\n冷却方法：ファンなし、自然冷却\r\nノイズ：サイレント\r\n作業パラメーター：\r\n動作電圧：AC100V-240V（50 / 60HZ）\r\n総定格電力：25W\r\n作業環境温度：0〜40度\r\n照明パラメーター：\r\nディスプレイ：LEDデジタルチューブディスプレイ+ 4キー\r\n電源インターフェイス：IEC、1つの男性（入力）と1つの女性（出力）\r\n信号インターフェイス：3つのコア、1つの男性（入力）と1つの女性（出力）\r\n防水評価：IP20\r\n正味重量：0.75KG\r\nランプサイズ：41.5 * 5.7 * 11.7CM',NULL,NULL,'images/users/2/6/products/YR-L0308T/image_1_url.png','images/users/2/6/products/YR-L0308T/image_2_url.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'in_review','2020-02-12 06:50:11','2020-02-12 06:50:11'),(21,7,'PHIIMAX3D (PB0341)','デジタル家電','5199,USD','沈陽',1,NULL,'images/users/2/7/products/PHIIMAX3D (PB0341)/icon_url.png','この製品は撮影機器として位置付けられ、最大12Kのパノラマ2Dおよび3Dコンテンツをキャプチャでき、画像コンテンツはより優れています。デバイスは高度なライトレンダリングステッチング技術を使用して、画像処理をより簡単かつ完璧にし、取り外し可能な内蔵ソリッドステートドライブを使用しています。ストレージソリューションは、業界のカードストレージの退屈で遅い読み取りと書き込み、データセキュリティの問題が解決できます。ファンレスの静的冷却設計により、本体に開口部がなく、撮影時の保護性能が高く、ノイズがありません。また、SDKをサポートされ、 パノラマ動画撮影にも適したものです。',NULL,'https://www.youtube.com/embed/wCHzjAvI4YE','images/users/2/7/products/PHIIMAX3D (PB0341)/image_1_url.png','images/users/2/7/products/PHIIMAX3D (PB0341)/image_2_url.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'in_review','2020-02-13 06:46:22','2020-02-13 06:46:22'),(22,7,'360Anywhere(PF1361)','デジタル家電','3580,USD','沈陽',1,NULL,'images/users/2/7/products/360Anywhere(PF1361)/icon_url.png','この製品は主にパノラマ式多機能撮影デバイスとして位置付けられており、業界の画期的な技術により、4レンズで8Kカメラのリアルタイム画像データスティッチングを実現できます。また、写真、ビデオ、ライブブロードキャストの8Kコンテンツのリアルタイム出力も実現し、画像スティッチ機器の要件を削減します。デバイスはソリッドステートハードディスクストレージを使用して画像のセキュリティと読み取りおよび書き込み速度の問題を解決します。本体は受動的に冷却され、開口部がなく、ノイズがなく、密封性が良好です。 小型で持ち運びが簡単なSDKのサポートは、パノラマアプリケーションのニーズに合わせてさまざまな業界で広く使用できます。',NULL,'https://www.youtube.com/embed/wCHzjAvI4YE','images/users/2/7/products/360Anywhere(PF1361)/image_1_url.png','images/users/2/7/products/360Anywhere(PF1361)/image_2_url.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'in_review','2020-02-13 06:49:33','2020-02-13 06:49:33'),(23,9,'Obstacle Courses','おもちゃ',NULL,'広州',1,NULL,'images/users/2/9/products/Obstacle Courses/icon_url.png','ブルをテーマにした障害物コースで設計された楽しい弾む城。十分なスペース、小さなスライド、登山階段、その他のアトラクションがあり、子供にとって非常に実用的で楽しいです。 ぜひ中に入って、中身を見てみましょう！',NULL,NULL,'images/users/2/9/products/Obstacle Courses/image_1_url.png','images/users/2/9/products/Obstacle Courses/image_2_url.png','images/users/2/9/products/Obstacle Courses/image_3_url.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'in_review','2020-02-13 07:32:25','2020-02-13 07:32:25'),(24,9,'Obstacle Courses 02','おもちゃ',NULL,'広州',1,NULL,'images/users/2/9/products/Obstacle Courses 02/icon_url.png','小さなパーティーをテーマとした障害物コースです。 十分なスペース、小さなスライド、登山階段、その他のアトラクションがあり、子供にとって非常に実用的で楽しいです。',NULL,NULL,'images/users/2/9/products/Obstacle Courses 02/image_1_url.png','images/users/2/9/products/Obstacle Courses 02/image_2_url.png','images/users/2/9/products/Obstacle Courses 02/image_3_url.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'in_review','2020-02-13 07:34:42','2020-02-13 07:34:42'),(25,9,'エア注入式ボード01','おもちゃ',NULL,'広州',1,NULL,'images/users/2/9/products/Inflatable Sup /icon_url.png','私たちは、軽量で堅牢、そして最高の価値を維持するために、最高のコンセプトを採用して作ったものです。\r\nこのボードには、誰もが試してみたい遊び心のあるデザインです。',NULL,NULL,'images/users/2/9/products/Inflatable Sup /image_1_url.png','images/users/2/9/products/Inflatable Sup /image_2_url.png','images/users/2/9/products/Inflatable Sup /image_3_url.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'in_review','2020-02-13 07:36:58','2020-02-13 07:36:58'),(26,9,'エア注入式ボード02','おもちゃ',NULL,'広州',1,NULL,'images/users/2/9/products/Inflatable Sup 02/icon_url.png','パッケージには、アルミニウム製のパドル、バックパック、高圧ポンプ、カヤックシート用のDリング、修理キットなど、必要なすべてのコンポーネントが付属しています。 準備完了！ 私たちのボードは、誰にとっても究極のウォータートイであり、非常に厚く（15cm）、非常に頑丈で、素晴らしい形状で滑りやすくなっています。 AKDの品質により、丈夫で耐久性のある製品が提供され、輸送が容易で、ポンプアップが容易です。\r\nパドリングを楽しんでください！',NULL,NULL,'images/users/2/9/products/Inflatable Sup 02/image_1_url.png','images/users/2/9/products/Inflatable Sup 02/image_2_url.png','images/users/2/9/products/Inflatable Sup 02/image_3_url.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'in_review','2020-02-13 07:39:28','2020-02-13 07:39:28'),(27,9,'エア注入式ボード03','おもちゃ',NULL,'広州',1,NULL,'images/users/2/9/products/エア注入式ボード 03/icon_url.png','このエア注入式ボードは、長くて素晴らしいパドルアドベンチャーに最適なボードです。 ノーズとテールにあるハンドルとラゲッジラックにより、旅行に十分なギアを持ち運ぶことができます。 AQD Cruiseは非常に厚く（6´/ 15cm）、非常に安定しており、軽量で滑空に適した形状をしています。',NULL,NULL,'images/users/2/9/products/エア注入式ボード 03/image_1_url.png','images/users/2/9/products/エア注入式ボード 03/image_2_url.png','images/users/2/9/products/エア注入式ボード 03/image_3_url.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'in_review','2020-02-13 07:42:21','2020-02-13 07:42:21'),(28,9,'エアトラック01','おもちゃ',NULL,'広州',1,NULL,'images/users/2/9/products/エアトラック01/icon_url.png','非常に安定しており、軽量です。ぜひ使ってみてください。',NULL,NULL,'images/users/2/9/products/エアトラック01/image_1_url.png','images/users/2/9/products/エアトラック01/image_2_url.png','images/users/2/9/products/エアトラック01/image_3_url.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'in_review','2020-02-13 07:46:51','2020-02-13 07:46:51'),(29,9,'エアトラック02','おもちゃ',NULL,'広州',1,NULL,'images/users/2/9/products/エアトラック02/icon_url.png','エアトラック',NULL,NULL,'images/users/2/9/products/エアトラック02/image_1_url.png','images/users/2/9/products/エアトラック02/image_2_url.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'in_review','2020-02-13 07:47:46','2020-02-13 07:47:46'),(30,9,'エアボート','おもちゃ',NULL,'広州',1,NULL,'images/users/2/9/products/エアボート/icon_url.png','エアボート',NULL,NULL,'images/users/2/9/products/エアボート/image_1_url.png','images/users/2/9/products/エアボート/image_2_url.png','images/users/2/9/products/エアボート/image_3_url.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'in_review','2020-02-13 07:49:29','2020-02-13 07:49:29'),(31,10,'電気オーブングリッド','工具用品',NULL,'広州',5000,'35,日','images/users/2/10/products/電気オーブングリッド/icon_url.png','この製品は食品使用基準を満たし、ROHS証明書を取得しています。 材料は、鉄またはステンレス鋼です。\r\n表面処理は、24時間の塩試験と300度の高温試験が合格し、 環境基準に満たします。',NULL,NULL,'images/users/2/10/products/電気オーブングリッド/image_1_url.png','images/users/2/10/products/電気オーブングリッド/image_2_url.png','images/users/2/10/products/電気オーブングリッド/image_3_url.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'in_review','2020-02-17 06:38:06','2020-02-17 06:38:06'),(32,10,'五徳　ごとく','工具用品',NULL,'広州',5000,'35,日','images/users/2/10/products/五徳　ごとく/icon_url.png','この製品は食品使用基準を満たし、ROHS証明書を取得しています。 材料は、鉄またはステンレス鋼です。\r\n表面処理は、24時間の塩試験と300度の高温試験が合格し、 環境基準に満たします。',NULL,NULL,'images/users/2/10/products/五徳　ごとく/image_1_url.png','images/users/2/10/products/五徳　ごとく/image_2_url.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'in_review','2020-02-17 06:52:46','2020-02-17 06:52:46'),(33,10,'バススタンド','工具用品',NULL,'広州',5000,'35,日','images/users/2/10/products/バススタンド/icon_url.png','物置棚、ROHS標準、材料は、鉄またはステンレス鋼\r\n表面処理は、24時間の塩試験と300度の高温試験に合格',NULL,NULL,'images/users/2/10/products/バススタンド/image_1_url.png','images/users/2/10/products/バススタンド/image_2_url.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'in_review','2020-02-17 06:56:36','2020-02-17 06:56:36'),(34,11,'パジャマ','雑貨・アパレル','46,元','赣州',100,'15,日','images/users/2/11/products/パジャマ/icon_url.png','パジャマ　セット\r\n女性用46元・男性用54元',NULL,NULL,'images/users/2/11/products/パジャマ/image_1_url.png','images/users/2/11/products/パジャマ/image_2_url.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'in_review','2020-02-17 08:02:29','2020-02-17 08:02:29'),(35,11,'女性パジャマ','雑貨・アパレル','35,元','赣州',100,'15,日','images/users/2/11/products/女性パジャマ/icon_url.png','女性用パジャマ',NULL,NULL,'images/users/2/11/products/女性パジャマ/image_1_url.png','images/users/2/11/products/女性パジャマ/image_2_url.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'in_review','2020-02-17 08:03:46','2020-02-17 08:03:46'),(36,12,'チュールスカート子供','雑貨・アパレル',NULL,'広州',200,'60,日','images/users/2/12/products/チュールスカート子供/icon_url.png','商品単価：80～250元	\r\n商品納期：45～60日\r\n高級な輸入生地を使用したシンプルでエレガントなスタイルと、独特な職人技はで手作りされています。',NULL,NULL,'images/users/2/12/products/チュールスカート子供/image_1_url.png','images/users/2/12/products/チュールスカート子供/image_2_url.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'in_review','2020-02-17 08:28:22','2020-02-17 08:28:22'),(37,12,'子供スカート、サテン生地','雑貨・アパレル','80,元','広州',200,'60,日','images/users/2/12/products/子供スカート、サテン生地/icon_url.png','高級な輸入生地を使用したシンプルでエレガントなスタイルと、独特な職人技はで手作りされています。',NULL,NULL,'images/users/2/12/products/子供スカート、サテン生地/image_1_url.png','images/users/2/12/products/子供スカート、サテン生地/image_2_url.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'in_review','2020-02-17 08:30:02','2020-02-17 08:30:02'),(38,12,'子供スカート、スミアスカート','雑貨・アパレル','60,元','広州',200,'60,日','images/users/2/12/products/子供スカート、スミアスカート/icon_url.png','商品単価：80～250元	\r\n商品納期：45～60日\r\n高級な輸入生地を使用したシンプルでエレガントなスタイルと、独特な職人技はで手作りされています。',NULL,NULL,'images/users/2/12/products/子供スカート、スミアスカート/image_1_url.png','images/users/2/12/products/子供スカート、スミアスカート/image_2_url.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'in_review','2020-02-17 08:32:32','2020-02-17 08:32:32'),(39,12,'子供スカート、ドレススカート','雑貨・アパレル','60,元','広州',200,'60,日','images/users/2/12/products/子供スカート、ドレススカート/icon_url.png','商品単価：60～100元	\r\n商品納期：45～60日\r\n高級な輸入生地を使用したシンプルでエレガントなスタイルと、独特な職人技はで手作りされています。',NULL,NULL,'images/users/2/12/products/子供スカート、ドレススカート/image_1_url.png','images/users/2/12/products/子供スカート、ドレススカート/image_2_url.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'in_review','2020-02-17 08:34:36','2020-02-17 08:34:36'),(40,9,'アウトドア・エア遊具','おもちゃ',NULL,'広州',1,NULL,'images/users/2/9/products/アウトドア・エア遊具/icon_url.png','島田市の人形の形にしたエア遊具です！全体6メートルになり、子供たちは中に入り、遊ぶことはできます！','https://www.ddd.online/jq/webEdit/project/embedProject/ju4tqYcR-7v1FNXns-ayth2Q60-VIuWmQQV?from=singlemessage',NULL,'images/users/2/9/products/アウトドア・エア遊具/image_1_url.png','images/users/2/9/products/アウトドア・エア遊具/image_2_url.png','images/users/2/9/products/アウトドア・エア遊具/image_3_url.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'in_review','2020-02-23 03:44:56','2020-02-23 03:44:56');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profiles`
--

DROP TABLE IF EXISTS `profiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profiles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `icon_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permission` enum('normal','admin') COLLATE utf8mb4_unicode_ci NOT NULL,
  `vip_type` enum('free','standard','enterprise','partner') COLLATE utf8mb4_unicode_ci NOT NULL,
  `wechat_account` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `profiles_email_unique` (`email`),
  KEY `profiles_user_id_foreign` (`user_id`),
  CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profiles`
--

LOCK TABLES `profiles` WRITE;
/*!40000 ALTER TABLE `profiles` DISABLE KEYS */;
INSERT INTO `profiles` VALUES (1,1,NULL,'サイシナン','cui.shinan0812@gmail.com','新宿','新宿区','日本','160-0022','08087329207','normal','free',NULL,'2019-12-04 07:54:07','2019-12-04 07:54:07'),(2,2,NULL,'shen','shenhaonan.ccnu@gmail.com',NULL,NULL,NULL,NULL,NULL,'normal','free',NULL,'2019-12-20 04:12:44','2019-12-20 04:12:44');
/*!40000 ALTER TABLE `profiles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'サイシナン','cui.shinan0812@gmail.com','2019-12-04 07:54:07','$2y$10$4khQi.bP2p51wlR8scbkn.c30fnCy0I93vz0cPpsR8GkBmi.bv0EC',NULL,'2019-12-04 07:46:05','2019-12-04 07:54:07'),(2,'shen','shenhaonan.ccnu@gmail.com','2019-12-20 04:12:44','$2y$10$.uMr0Xeq3CUtc7WfByGNhu91W.K4.i2JKY5./9lVssvzmPG1VCJYu',NULL,'2019-12-20 04:12:21','2019-12-20 04:12:44');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `view_histories`
--

DROP TABLE IF EXISTS `view_histories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `view_histories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `type` enum('enterprise','product') COLLATE utf8mb4_unicode_ci NOT NULL,
  `history_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `view_histories_user_id_foreign` (`user_id`),
  CONSTRAINT `view_histories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `view_histories`
--

LOCK TABLES `view_histories` WRITE;
/*!40000 ALTER TABLE `view_histories` DISABLE KEYS */;
/*!40000 ALTER TABLE `view_histories` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-08-31 15:29:38

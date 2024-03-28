/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `LoginCredentials` (
  `principal_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  PRIMARY KEY (`principal_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `StudentRecords` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(100) NOT NULL,
  `phone_number` varchar(15) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `mother_tongue` varchar(50) DEFAULT NULL,
  `blood_group` varchar(5) DEFAULT NULL,
  `known_dust_allergies` varchar(100) DEFAULT NULL,
  `mother_name` varchar(100) DEFAULT NULL,
  `father_name` varchar(100) DEFAULT NULL,
  `nationality` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

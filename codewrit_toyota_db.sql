-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 01, 2019 at 01:22 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `codewrit_toyota_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `employee_id` varchar(45) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `middle_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `admin_view`
--
CREATE TABLE IF NOT EXISTS `admin_view` (
`id` int(11)
,`employee_id` varchar(45)
,`first_name` varchar(45)
,`middle_name` varchar(45)
,`last_name` varchar(45)
,`sex` varchar(10)
,`user_id` int(11)
,`username` varchar(45)
,`email` varchar(255)
,`password` text
,`create_time` timestamp
);

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE IF NOT EXISTS `appointment` (
  `id` int(11) NOT NULL,
  `due_date` date NOT NULL,
  `description_of_service` text NOT NULL,
  `service_advisor_id` int(11) NOT NULL,
  `crate_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `vehicle_id` int(11) NOT NULL,
  `receptionist_id` int(11) DEFAULT NULL,
  `appointment_staff_id` int(11) NOT NULL,
  `appointment_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `appointment_staff`
--

CREATE TABLE IF NOT EXISTS `appointment_staff` (
  `id` int(11) NOT NULL,
  `employee_id` varchar(45) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `middle_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `appointment_staff_view`
--
CREATE TABLE IF NOT EXISTS `appointment_staff_view` (
`id` int(11)
,`employee_id` varchar(45)
,`first_name` varchar(45)
,`middle_name` varchar(45)
,`last_name` varchar(45)
,`sex` varchar(10)
,`user_id` int(11)
,`username` varchar(45)
,`email` varchar(255)
,`password` text
,`create_time` timestamp
);

-- --------------------------------------------------------

--
-- Table structure for table `appointment_status`
--

CREATE TABLE IF NOT EXISTS `appointment_status` (
  `id` int(11) NOT NULL,
  `value` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Stand-in structure for view `appointment_view`
--
CREATE TABLE IF NOT EXISTS `appointment_view` (
`id` int(11)
,`due_date` date
,`description_of_service` text
,`service_advisor_id` int(11)
,`crate_date` datetime
,`vehicle_id` int(11)
,`receptionist_id` int(11)
,`appointment_staff_id` int(11)
,`appointment_status_id` int(11)
,`vehicle_reg_no` varchar(45)
,`vehicle_chasis_no` text
,`vehicle_make_and_model` text
,`vehicle_selling_dealer` int(11)
,`vehicle_milleage` int(11)
,`receptionist_first_name` varchar(45)
,`receptionist_middle_name` varchar(45)
,`receptionist_last_name` varchar(45)
,`receptionist_employee_id` varchar(45)
,`appointment_employee_id` varchar(45)
,`appointment_staff_first_name` varchar(45)
,`appointment_staff_middle_name` varchar(45)
,`appointment_staff_last_name` varchar(45)
,`appointment_status` varchar(45)
);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `middle_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `telephone` varchar(45) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `company` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `create_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `job_card`
--

CREATE TABLE IF NOT EXISTS `job_card` (
  `id` int(11) NOT NULL,
  `begin_time` datetime NOT NULL,
  `finish_time` datetime NOT NULL,
  `create_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `stall_id` int(11) NOT NULL,
  `technician_id` int(11) NOT NULL,
  `job_planner_id` int(11) NOT NULL,
  `appointment_id` int(11) NOT NULL,
  `job_status_id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `job_card_view`
--
CREATE TABLE IF NOT EXISTS `job_card_view` (
`id` int(11)
,`begin_time` datetime
,`finish_time` datetime
,`create_time` datetime
,`stall_id` int(11)
,`technician_id` int(11)
,`job_planner_id` int(11)
,`appointment_id` int(11)
,`job_status_id` int(11)
,`vehicle_id` int(11)
,`vehicle_reg_no` varchar(45)
,`vehicle_chasis_no` text
,`vehicle_make_and_model` text
,`vehicle_milleage` int(11)
,`customer_first_name` varchar(45)
,`customer_middle_name` varchar(45)
,`customer_last_name` varchar(45)
,`customer_telephone` varchar(45)
,`customer_email` varchar(255)
,`customer_company` varchar(255)
,`technician_employee_id` varchar(45)
,`technician_first_name` varchar(45)
,`technicain_middle_name` varchar(45)
,`technician_last_name` varchar(45)
,`appointment_due_date` date
,`description_of_service` text
,`job_planner_employee_id` varchar(45)
,`job_planner_fist_name` varchar(45)
,`job_planner_middle_name` varchar(45)
,`job_planner_last_name` varchar(45)
,`job_status` varchar(45)
);

-- --------------------------------------------------------

--
-- Table structure for table `job_planner`
--

CREATE TABLE IF NOT EXISTS `job_planner` (
  `id` int(11) NOT NULL,
  `employee_id` varchar(45) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `middle_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `job_planner_view`
--
CREATE TABLE IF NOT EXISTS `job_planner_view` (
`id` int(11)
,`employee_id` varchar(45)
,`first_name` varchar(45)
,`middle_name` varchar(45)
,`last_name` varchar(45)
,`sex` varchar(10)
,`user_id` int(11)
,`username` varchar(45)
,`email` varchar(255)
,`password` text
,`create_time` timestamp
);

-- --------------------------------------------------------

--
-- Table structure for table `job_status`
--

CREATE TABLE IF NOT EXISTS `job_status` (
  `id` int(11) NOT NULL,
  `value` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `receptionist`
--

CREATE TABLE IF NOT EXISTS `receptionist` (
  `id` int(11) NOT NULL,
  `employee_id` varchar(45) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `middle_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `receptionist_view`
--
CREATE TABLE IF NOT EXISTS `receptionist_view` (
`id` int(11)
,`employee_id` varchar(45)
,`first_name` varchar(45)
,`middle_name` varchar(45)
,`last_name` varchar(45)
,`sex` varchar(10)
,`user_id` int(11)
,`username` varchar(45)
,`email` varchar(255)
,`password` text
,`create_time` timestamp
);

-- --------------------------------------------------------

--
-- Table structure for table `service_advisor`
--

CREATE TABLE IF NOT EXISTS `service_advisor` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `sur_name` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service_advisor`
--

INSERT INTO `service_advisor` (`id`, `employee_id`, `first_name`, `middle_name`, `sur_name`, `user_id`) VALUES
(1, 231, 'Servic', 'advisor', '', 13);

-- --------------------------------------------------------

--
-- Table structure for table `stall`
--

CREATE TABLE IF NOT EXISTS `stall` (
  `id` int(11) NOT NULL,
  `stall_id` varchar(12) NOT NULL,
  `category` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `technician_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `stall_view`
--
CREATE TABLE IF NOT EXISTS `stall_view` (
`id` int(11)
,`stall_id` varchar(12)
,`category` varchar(255)
,`location` varchar(255)
,`technician_id` int(11)
,`technician_employee_id` varchar(45)
,`technician_first_name` varchar(45)
,`technician_middle_name` varchar(45)
,`technician_last_name` varchar(45)
);

-- --------------------------------------------------------

--
-- Table structure for table `technician`
--

CREATE TABLE IF NOT EXISTS `technician` (
  `id` int(11) NOT NULL,
  `employee_id` varchar(45) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `middle_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) NOT NULL,
  `expertise` text NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `technician_view`
--
CREATE TABLE IF NOT EXISTS `technician_view` (
`id` int(11)
,`employee_id` varchar(45)
,`first_name` varchar(45)
,`middle_name` varchar(45)
,`last_name` varchar(45)
,`expertise` text
,`user_id` int(11)
,`username` varchar(45)
,`email` varchar(255)
,`password` text
,`create_time` timestamp
);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE IF NOT EXISTS `user_type` (
  `id` int(11) NOT NULL,
  `type` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Stand-in structure for view `user_view`
--
CREATE TABLE IF NOT EXISTS `user_view` (
`id` int(11)
,`username` varchar(45)
,`email` varchar(255)
,`password` text
,`create_time` timestamp
,`user_type_id` int(11)
,`type` varchar(45)
);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE IF NOT EXISTS `vehicle` (
  `id` int(11) NOT NULL,
  `reg_no` varchar(45) NOT NULL,
  `chasis_no` text NOT NULL,
  `make_and_model` text NOT NULL,
  `selling_dealer` int(11) NOT NULL,
  `milleage` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `vehicle_view`
--
CREATE TABLE IF NOT EXISTS `vehicle_view` (
`id` int(11)
,`reg_no` varchar(45)
,`chasis_no` text
,`make_and_model` text
,`selling_dealer` int(11)
,`milleage` int(11)
,`customer_id` int(11)
,`customer_fist_name` varchar(45)
,`customer_middle_name` varchar(45)
,`customer_last_name` varchar(45)
,`customer_telephone` varchar(45)
,`customer_company` varchar(255)
,`customer_email` varchar(255)
);

-- --------------------------------------------------------

--
-- Structure for view `admin_view`
--
DROP TABLE IF EXISTS `admin_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `admin_view` AS select `admin`.`id` AS `id`,`admin`.`employee_id` AS `employee_id`,`admin`.`first_name` AS `first_name`,`admin`.`middle_name` AS `middle_name`,`admin`.`last_name` AS `last_name`,`admin`.`sex` AS `sex`,`admin`.`user_id` AS `user_id`,`user`.`username` AS `username`,`user`.`email` AS `email`,`user`.`password` AS `password`,`user`.`create_time` AS `create_time` from (`admin` join `user` on((`user`.`id` = `admin`.`id`)));

-- --------------------------------------------------------

--
-- Structure for view `appointment_staff_view`
--
DROP TABLE IF EXISTS `appointment_staff_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `appointment_staff_view` AS select `appointment_staff`.`id` AS `id`,`appointment_staff`.`employee_id` AS `employee_id`,`appointment_staff`.`first_name` AS `first_name`,`appointment_staff`.`middle_name` AS `middle_name`,`appointment_staff`.`last_name` AS `last_name`,`appointment_staff`.`sex` AS `sex`,`appointment_staff`.`user_id` AS `user_id`,`user`.`username` AS `username`,`user`.`email` AS `email`,`user`.`password` AS `password`,`user`.`create_time` AS `create_time` from (`appointment_staff` join `user` on((`user`.`id` = `appointment_staff`.`id`)));

-- --------------------------------------------------------

--
-- Structure for view `appointment_view`
--
DROP TABLE IF EXISTS `appointment_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `appointment_view` AS select `appointment`.`id` AS `id`,`appointment`.`due_date` AS `due_date`,`appointment`.`description_of_service` AS `description_of_service`,`appointment`.`service_advisor_id` AS `service_advisor_id`,`appointment`.`crate_date` AS `crate_date`,`appointment`.`vehicle_id` AS `vehicle_id`,`appointment`.`receptionist_id` AS `receptionist_id`,`appointment`.`appointment_staff_id` AS `appointment_staff_id`,`appointment`.`appointment_status_id` AS `appointment_status_id`,`vehicle`.`reg_no` AS `vehicle_reg_no`,`vehicle`.`chasis_no` AS `vehicle_chasis_no`,`vehicle`.`make_and_model` AS `vehicle_make_and_model`,`vehicle`.`selling_dealer` AS `vehicle_selling_dealer`,`vehicle`.`milleage` AS `vehicle_milleage`,`receptionist`.`first_name` AS `receptionist_first_name`,`receptionist`.`middle_name` AS `receptionist_middle_name`,`receptionist`.`last_name` AS `receptionist_last_name`,`receptionist`.`employee_id` AS `receptionist_employee_id`,`appointment_staff`.`employee_id` AS `appointment_employee_id`,`appointment_staff`.`first_name` AS `appointment_staff_first_name`,`appointment_staff`.`middle_name` AS `appointment_staff_middle_name`,`appointment_staff`.`last_name` AS `appointment_staff_last_name`,`appointment_status`.`value` AS `appointment_status` from (((`receptionist` left join (`appointment` join `vehicle` on((`vehicle`.`id` = `appointment`.`vehicle_id`))) on((`receptionist`.`id` = `appointment`.`receptionist_id`))) join `appointment_staff` on((`appointment_staff`.`id` = `appointment`.`appointment_staff_id`))) join `appointment_status` on((`appointment_status`.`id` = `appointment`.`appointment_status_id`)));

-- --------------------------------------------------------

--
-- Structure for view `job_card_view`
--
DROP TABLE IF EXISTS `job_card_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `job_card_view` AS select `job_card`.`id` AS `id`,`job_card`.`begin_time` AS `begin_time`,`job_card`.`finish_time` AS `finish_time`,`job_card`.`create_time` AS `create_time`,`job_card`.`stall_id` AS `stall_id`,`job_card`.`technician_id` AS `technician_id`,`job_card`.`job_planner_id` AS `job_planner_id`,`job_card`.`appointment_id` AS `appointment_id`,`job_card`.`job_status_id` AS `job_status_id`,`job_card`.`vehicle_id` AS `vehicle_id`,`vehicle`.`reg_no` AS `vehicle_reg_no`,`vehicle`.`chasis_no` AS `vehicle_chasis_no`,`vehicle`.`make_and_model` AS `vehicle_make_and_model`,`vehicle`.`milleage` AS `vehicle_milleage`,`customer`.`first_name` AS `customer_first_name`,`customer`.`middle_name` AS `customer_middle_name`,`customer`.`last_name` AS `customer_last_name`,`customer`.`telephone` AS `customer_telephone`,`customer`.`email` AS `customer_email`,`customer`.`company` AS `customer_company`,`technician`.`employee_id` AS `technician_employee_id`,`technician`.`first_name` AS `technician_first_name`,`technician`.`middle_name` AS `technicain_middle_name`,`technician`.`last_name` AS `technician_last_name`,`appointment`.`due_date` AS `appointment_due_date`,`appointment`.`description_of_service` AS `description_of_service`,`job_planner`.`employee_id` AS `job_planner_employee_id`,`job_planner`.`first_name` AS `job_planner_fist_name`,`job_planner`.`middle_name` AS `job_planner_middle_name`,`job_planner`.`last_name` AS `job_planner_last_name`,`job_status`.`value` AS `job_status` from ((((((`job_card` join `technician` on((`technician`.`id` = `job_card`.`technician_id`))) join `appointment` on((`appointment`.`id` = `job_card`.`appointment_id`))) join `job_planner` on((`job_planner`.`id` = `job_card`.`job_planner_id`))) join `job_status` on((`job_status`.`id` = `job_card`.`job_status_id`))) join `vehicle` on((`vehicle`.`id` = `job_card`.`vehicle_id`))) join `customer` on((`customer`.`id` = `vehicle`.`customer_id`)));

-- --------------------------------------------------------

--
-- Structure for view `job_planner_view`
--
DROP TABLE IF EXISTS `job_planner_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `job_planner_view` AS select `job_planner`.`id` AS `id`,`job_planner`.`employee_id` AS `employee_id`,`job_planner`.`first_name` AS `first_name`,`job_planner`.`middle_name` AS `middle_name`,`job_planner`.`last_name` AS `last_name`,`job_planner`.`sex` AS `sex`,`job_planner`.`user_id` AS `user_id`,`user`.`username` AS `username`,`user`.`email` AS `email`,`user`.`password` AS `password`,`user`.`create_time` AS `create_time` from (`job_planner` join `user` on((`user`.`id` = `job_planner`.`id`)));

-- --------------------------------------------------------

--
-- Structure for view `receptionist_view`
--
DROP TABLE IF EXISTS `receptionist_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `receptionist_view` AS select `receptionist`.`id` AS `id`,`receptionist`.`employee_id` AS `employee_id`,`receptionist`.`first_name` AS `first_name`,`receptionist`.`middle_name` AS `middle_name`,`receptionist`.`last_name` AS `last_name`,`receptionist`.`sex` AS `sex`,`receptionist`.`user_id` AS `user_id`,`user`.`username` AS `username`,`user`.`email` AS `email`,`user`.`password` AS `password`,`user`.`create_time` AS `create_time` from (`receptionist` join `user` on((`user`.`id` = `receptionist`.`id`)));

-- --------------------------------------------------------

--
-- Structure for view `stall_view`
--
DROP TABLE IF EXISTS `stall_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `stall_view` AS select `stall`.`id` AS `id`,`stall`.`stall_id` AS `stall_id`,`stall`.`category` AS `category`,`stall`.`location` AS `location`,`stall`.`technician_id` AS `technician_id`,`technician`.`employee_id` AS `technician_employee_id`,`technician`.`first_name` AS `technician_first_name`,`technician`.`middle_name` AS `technician_middle_name`,`technician`.`last_name` AS `technician_last_name` from (`stall` join `technician` on((`technician`.`id` = `stall`.`technician_id`)));

-- --------------------------------------------------------

--
-- Structure for view `technician_view`
--
DROP TABLE IF EXISTS `technician_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `technician_view` AS select `technician`.`id` AS `id`,`technician`.`employee_id` AS `employee_id`,`technician`.`first_name` AS `first_name`,`technician`.`middle_name` AS `middle_name`,`technician`.`last_name` AS `last_name`,`technician`.`expertise` AS `expertise`,`technician`.`user_id` AS `user_id`,`user`.`username` AS `username`,`user`.`email` AS `email`,`user`.`password` AS `password`,`user`.`create_time` AS `create_time` from (`technician` join `user` on((`user`.`id` = `technician`.`id`)));

-- --------------------------------------------------------

--
-- Structure for view `user_view`
--
DROP TABLE IF EXISTS `user_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `user_view` AS select `user`.`id` AS `id`,`user`.`username` AS `username`,`user`.`email` AS `email`,`user`.`password` AS `password`,`user`.`create_time` AS `create_time`,`user`.`user_type_id` AS `user_type_id`,`user_type`.`type` AS `type` from (`user` join `user_type` on((`user_type`.`id` = `user`.`user_type_id`)));

-- --------------------------------------------------------

--
-- Structure for view `vehicle_view`
--
DROP TABLE IF EXISTS `vehicle_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vehicle_view` AS select `vehicle`.`id` AS `id`,`vehicle`.`reg_no` AS `reg_no`,`vehicle`.`chasis_no` AS `chasis_no`,`vehicle`.`make_and_model` AS `make_and_model`,`vehicle`.`selling_dealer` AS `selling_dealer`,`vehicle`.`milleage` AS `milleage`,`vehicle`.`customer_id` AS `customer_id`,`customer`.`first_name` AS `customer_fist_name`,`customer`.`middle_name` AS `customer_middle_name`,`customer`.`last_name` AS `customer_last_name`,`customer`.`telephone` AS `customer_telephone`,`customer`.`company` AS `customer_company`,`customer`.`email` AS `customer_email` from (`vehicle` join `customer` on((`customer`.`id` = `vehicle`.`customer_id`)));

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`,`user_id`),
  ADD UNIQUE KEY `employee_id_UNIQUE` (`employee_id`),
  ADD KEY `fk_admin_user1_idx` (`user_id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_appointment_planning_vehicle1_idx` (`vehicle_id`),
  ADD KEY `fk_appointment_planning_receptionist1_idx` (`receptionist_id`),
  ADD KEY `fk_appointment_planning_appointment_staff1_idx` (`appointment_staff_id`),
  ADD KEY `fk_appointment_appointment_status1_idx` (`appointment_status_id`);

--
-- Indexes for table `appointment_staff`
--
ALTER TABLE `appointment_staff`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employee_id_UNIQUE` (`employee_id`),
  ADD KEY `fk_appointment_staff_user1_idx` (`user_id`);

--
-- Indexes for table `appointment_status`
--
ALTER TABLE `appointment_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_card`
--
ALTER TABLE `job_card`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_job_card_stall1_idx` (`stall_id`),
  ADD KEY `fk_job_card_technicain1_idx` (`technician_id`),
  ADD KEY `fk_job_card_job_planner1_idx` (`job_planner_id`),
  ADD KEY `fk_job_card_appointment_planning1_idx` (`appointment_id`),
  ADD KEY `fk_job_card_job_status1_idx` (`job_status_id`),
  ADD KEY `fk_job_card_vehicle1_idx` (`vehicle_id`);

--
-- Indexes for table `job_planner`
--
ALTER TABLE `job_planner`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employee_id_UNIQUE` (`employee_id`),
  ADD KEY `fk_job_planner_user1_idx` (`user_id`);

--
-- Indexes for table `job_status`
--
ALTER TABLE `job_status`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `value_UNIQUE` (`value`);

--
-- Indexes for table `receptionist`
--
ALTER TABLE `receptionist`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employee_id_UNIQUE` (`employee_id`),
  ADD KEY `fk_receptionist_user1_idx` (`user_id`);

--
-- Indexes for table `service_advisor`
--
ALTER TABLE `service_advisor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stall`
--
ALTER TABLE `stall`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `stall_id_UNIQUE` (`stall_id`),
  ADD KEY `fk_stall_technicain1_idx` (`technician_id`);

--
-- Indexes for table `technician`
--
ALTER TABLE `technician`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employee_id_UNIQUE` (`employee_id`),
  ADD KEY `fk_technicain_user1_idx` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`),
  ADD KEY `fk_user_user_type1_idx` (`user_type_id`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `type_UNIQUE` (`type`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_vehicle_customer1_idx` (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `appointment_staff`
--
ALTER TABLE `appointment_staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `appointment_status`
--
ALTER TABLE `appointment_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `job_planner`
--
ALTER TABLE `job_planner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `job_status`
--
ALTER TABLE `job_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `receptionist`
--
ALTER TABLE `receptionist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `service_advisor`
--
ALTER TABLE `service_advisor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `stall`
--
ALTER TABLE `stall`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `technician`
--
ALTER TABLE `technician`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `fk_admin_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `fk_appointment_appointment_status1` FOREIGN KEY (`appointment_status_id`) REFERENCES `appointment_status` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_appointment_planning_appointment_staff1` FOREIGN KEY (`appointment_staff_id`) REFERENCES `appointment_staff` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_appointment_planning_receptionist1` FOREIGN KEY (`receptionist_id`) REFERENCES `receptionist` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_appointment_planning_vehicle1` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicle` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `appointment_staff`
--
ALTER TABLE `appointment_staff`
  ADD CONSTRAINT `fk_appointment_staff_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `job_card`
--
ALTER TABLE `job_card`
  ADD CONSTRAINT `fk_job_card_appointment_planning1` FOREIGN KEY (`appointment_id`) REFERENCES `appointment` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_job_card_job_planner1` FOREIGN KEY (`job_planner_id`) REFERENCES `job_planner` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_job_card_job_status1` FOREIGN KEY (`job_status_id`) REFERENCES `job_status` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_job_card_stall1` FOREIGN KEY (`stall_id`) REFERENCES `stall` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_job_card_technician1` FOREIGN KEY (`technician_id`) REFERENCES `technician` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_job_card_vehicle1` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicle` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `job_planner`
--
ALTER TABLE `job_planner`
  ADD CONSTRAINT `fk_job_planner_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `receptionist`
--
ALTER TABLE `receptionist`
  ADD CONSTRAINT `fk_receptionist_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `stall`
--
ALTER TABLE `stall`
  ADD CONSTRAINT `fk_stall_technicain1` FOREIGN KEY (`technician_id`) REFERENCES `technician` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `technician`
--
ALTER TABLE `technician`
  ADD CONSTRAINT `fk_technicain_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_user_user_type1` FOREIGN KEY (`user_type_id`) REFERENCES `user_type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD CONSTRAINT `fk_vehicle_customer1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

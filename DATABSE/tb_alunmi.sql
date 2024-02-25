-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2023 at 05:04 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tb_alunmi`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `relatorio_mun`
-- (See below for the actual view)
--
CREATE TABLE `relatorio_mun` (
`id` int(11)
,`naran_munucipiu` varchar(255)
,`obs` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `relatori_ald`
-- (See below for the actual view)
--
CREATE TABLE `relatori_ald` (
`id` int(11)
,`naran_aldeia` varchar(255)
,`id_suku` varchar(255)
,`id_postu` varchar(255)
,`id_municipiu` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `relatori_alun`
-- (See below for the actual view)
--
CREATE TABLE `relatori_alun` (
`id` int(11)
,`naran` varchar(255)
,`sexo` varchar(255)
,`data_moris` date
,`fatin_moris` varchar(255)
,`data_registu` varchar(255)
,`tinama_remata` date
,`id_departamentu` varchar(255)
,`id_municipiu` varchar(255)
,`Id_postu` varchar(255)
,`id_suku` varchar(255)
,`id_aldeia` varchar(255)
,`imagen` varchar(255)
,`tinan_hahu_rejistu` date
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `relatori_postu`
-- (See below for the actual view)
--
CREATE TABLE `relatori_postu` (
`id` int(11)
,`naran_postu` varchar(255)
,`id_municipiu` varchar(255)
,`obs` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `relatori_suku`
-- (See below for the actual view)
--
CREATE TABLE `relatori_suku` (
`id` int(11)
,`naran_suku` varchar(255)
,`id_postu` varchar(255)
,`Id_munucipiu` varchar(255)
,`obs` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `tb_aldeia`
--

CREATE TABLE `tb_aldeia` (
  `id` int(11) NOT NULL,
  `naran_aldeia` varchar(255) NOT NULL,
  `id_suku` varchar(255) NOT NULL,
  `id_postu` varchar(255) NOT NULL,
  `id_municipiu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_aldeia`
--

INSERT INTO `tb_aldeia` (`id`, `naran_aldeia`, `id_suku`, `id_postu`, `id_municipiu`) VALUES
(4, 'butufalu', 'samary', 'laga', 'BAUCAU'),
(5, 'fomonetu2', 'comoro', 'dom aleixo', 'dilil'),
(6, 'Likisa', 'fadabloko', 'Remexio', 'aileu');

-- --------------------------------------------------------

--
-- Table structure for table `tb_alunmi`
--

CREATE TABLE `tb_alunmi` (
  `id` int(11) NOT NULL,
  `naran` varchar(255) NOT NULL,
  `sexo` varchar(255) NOT NULL,
  `data_moris` date NOT NULL,
  `fatin_moris` varchar(255) NOT NULL,
  `data_registu` varchar(255) NOT NULL,
  `tinama_remata` date NOT NULL,
  `id_departamentu` varchar(255) NOT NULL,
  `id_municipiu` varchar(255) NOT NULL,
  `Id_postu` varchar(255) NOT NULL,
  `id_suku` varchar(255) NOT NULL,
  `id_aldeia` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `tinan_hahu_rejistu` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_alunmi`
--

INSERT INTO `tb_alunmi` (`id`, `naran`, `sexo`, `data_moris`, `fatin_moris`, `data_registu`, `tinama_remata`, `id_departamentu`, `id_municipiu`, `Id_postu`, `id_suku`, `id_aldeia`, `imagen`, `tinan_hahu_rejistu`) VALUES
(2, 'mario', 'Female', '2023-12-14', 'dili', '2023-12-14', '2023-12-14', 'siensia1', 'dilil', 'dom aleixo', 'comoro', 'fomonetu2', 'http://localhost/final_project/uploads/files/el9ohwcf3_2taip.png', '2023-12-14'),
(3, 'Emilia de Andrade Martins', 'Female', '2023-12-09', 'REmexio', '2023-12-04', '2023-12-11', 'naturais', 'aileu', 'Remexio', 'fadabloko', 'Likisa', 'http://localhost/final_project/uploads/files/im15quyd9jwf8h_.jpg', '2023-12-07');

-- --------------------------------------------------------

--
-- Table structure for table `tb_departamentu`
--

CREATE TABLE `tb_departamentu` (
  `id` int(11) NOT NULL,
  `naran_departamentu` varchar(255) NOT NULL,
  `obs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_departamentu`
--

INSERT INTO `tb_departamentu` (`id`, `naran_departamentu`, `obs`) VALUES
(3, 'naturais', 'diak');

-- --------------------------------------------------------

--
-- Table structure for table `tb_municipiu`
--

CREATE TABLE `tb_municipiu` (
  `id` int(11) NOT NULL,
  `naran_munucipiu` varchar(255) NOT NULL,
  `obs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_municipiu`
--

INSERT INTO `tb_municipiu` (`id`, `naran_munucipiu`, `obs`) VALUES
(1, 'BAUCAU', 'DIAK'),
(2, 'dilil', 'diak'),
(3, 'aileu', 'diak'),
(4, 'ermera', 'diak'),
(5, 'atauro', 'diak'),
(6, 'oecuse', 'diak'),
(7, 'ainaru', 'diak'),
(8, 'Lautem', 'diak'),
(9, 'Likisa', 'diak'),
(10, 'Covalima', 'diak'),
(11, 'Manufahi', 'diak'),
(12, 'Manatuto', 'diak'),
(13, 'Viqueque', 'diak'),
(14, 'Bobonaru', 'diak');

-- --------------------------------------------------------

--
-- Table structure for table `tb_postu`
--

CREATE TABLE `tb_postu` (
  `id` int(11) NOT NULL,
  `naran_postu` varchar(255) NOT NULL,
  `id_municipiu` varchar(255) NOT NULL,
  `obs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_postu`
--

INSERT INTO `tb_postu` (`id`, `naran_postu`, `id_municipiu`, `obs`) VALUES
(4, 'laga', 'BAUCAU', 'diak'),
(5, 'dom aleixo', 'dilil', 'diak'),
(6, 'Remexio', 'aileu', 'diak'),
(7, 'Laulara', 'aileu', 'diak'),
(8, 'Lequidoe', 'aileu', 'diak'),
(9, 'Aileu Vila', 'aileu', 'diak'),
(10, 'same', 'Manufahi', 'diak'),
(11, 'Fatuberliu', 'Manufahi', 'diak'),
(12, 'Turiskai', 'Manufahi', 'diak'),
(13, 'Alas', 'Manufahi', 'diak');

-- --------------------------------------------------------

--
-- Table structure for table `tb_suku`
--

CREATE TABLE `tb_suku` (
  `id` int(11) NOT NULL,
  `naran_suku` varchar(255) NOT NULL,
  `id_postu` varchar(255) NOT NULL,
  `Id_munucipiu` varchar(255) NOT NULL,
  `obs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_suku`
--

INSERT INTO `tb_suku` (`id`, `naran_suku`, `id_postu`, `Id_munucipiu`, `obs`) VALUES
(3, 'samary', 'laga', 'BAUCAU', 'diak'),
(4, 'comoro', 'dom aleixo', 'dilil', 'diak'),
(5, 'fadabloko', 'Remexio', 'aileu', 'diak');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `naran_kompletu` varchar(255) NOT NULL,
  `login_session_key` varchar(255) DEFAULT NULL,
  `email_status` varchar(255) DEFAULT NULL,
  `password_expire_date` datetime DEFAULT '2024-03-15 00:00:00',
  `password_reset_key` varchar(255) DEFAULT NULL,
  `account_status` varchar(255) DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `email`, `foto`, `no_hp`, `naran_kompletu`, `login_session_key`, `email_status`, `password_expire_date`, `password_reset_key`, `account_status`) VALUES
(1, 'admin', '$2y$10$rcokIgRPBrdZXKFeiEpC4.oy2mtX8XNBKTLHHxD2VYu3dl1128NH6', 'emiliam.martins19@gmail.com', 'http://localhost/final_project/uploads/files/gkna_i702jywx96.png', '76738417', 'emilia de andrade martins', NULL, NULL, '2024-03-15 05:02:59', NULL, 'Active');

-- --------------------------------------------------------

--
-- Structure for view `relatorio_mun`
--
DROP TABLE IF EXISTS `relatorio_mun`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `relatorio_mun`  AS  select `tm`.`id` AS `id`,`tm`.`naran_munucipiu` AS `naran_munucipiu`,`tm`.`obs` AS `obs` from `tb_municipiu` `tm` ;

-- --------------------------------------------------------

--
-- Structure for view `relatori_ald`
--
DROP TABLE IF EXISTS `relatori_ald`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `relatori_ald`  AS  select `ta`.`id` AS `id`,`ta`.`naran_aldeia` AS `naran_aldeia`,`ta`.`id_suku` AS `id_suku`,`ta`.`id_postu` AS `id_postu`,`ta`.`id_municipiu` AS `id_municipiu` from `tb_aldeia` `ta` ;

-- --------------------------------------------------------

--
-- Structure for view `relatori_alun`
--
DROP TABLE IF EXISTS `relatori_alun`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `relatori_alun`  AS  select `ta`.`id` AS `id`,`ta`.`naran` AS `naran`,`ta`.`sexo` AS `sexo`,`ta`.`data_moris` AS `data_moris`,`ta`.`fatin_moris` AS `fatin_moris`,`ta`.`data_registu` AS `data_registu`,`ta`.`tinama_remata` AS `tinama_remata`,`ta`.`id_departamentu` AS `id_departamentu`,`ta`.`id_municipiu` AS `id_municipiu`,`ta`.`Id_postu` AS `Id_postu`,`ta`.`id_suku` AS `id_suku`,`ta`.`id_aldeia` AS `id_aldeia`,`ta`.`imagen` AS `imagen`,`ta`.`tinan_hahu_rejistu` AS `tinan_hahu_rejistu` from `tb_alunmi` `ta` ;

-- --------------------------------------------------------

--
-- Structure for view `relatori_postu`
--
DROP TABLE IF EXISTS `relatori_postu`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `relatori_postu`  AS  select `tp`.`id` AS `id`,`tp`.`naran_postu` AS `naran_postu`,`tp`.`id_municipiu` AS `id_municipiu`,`tp`.`obs` AS `obs` from `tb_postu` `tp` ;

-- --------------------------------------------------------

--
-- Structure for view `relatori_suku`
--
DROP TABLE IF EXISTS `relatori_suku`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `relatori_suku`  AS  select `ts`.`id` AS `id`,`ts`.`naran_suku` AS `naran_suku`,`ts`.`id_postu` AS `id_postu`,`ts`.`Id_munucipiu` AS `Id_munucipiu`,`ts`.`obs` AS `obs` from `tb_suku` `ts` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_aldeia`
--
ALTER TABLE `tb_aldeia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_alunmi`
--
ALTER TABLE `tb_alunmi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_departamentu`
--
ALTER TABLE `tb_departamentu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_municipiu`
--
ALTER TABLE `tb_municipiu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_postu`
--
ALTER TABLE `tb_postu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_suku`
--
ALTER TABLE `tb_suku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_aldeia`
--
ALTER TABLE `tb_aldeia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_alunmi`
--
ALTER TABLE `tb_alunmi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_departamentu`
--
ALTER TABLE `tb_departamentu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_municipiu`
--
ALTER TABLE `tb_municipiu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_postu`
--
ALTER TABLE `tb_postu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_suku`
--
ALTER TABLE `tb_suku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

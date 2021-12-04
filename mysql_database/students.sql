-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 28, 2020 at 11:42 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `def`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `gender` enum('male','female') COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` double(8,2) NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `phone`, `birthday`, `gender`, `weight`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Dawson Pollich', 'homenick.delores@example.org', '+3955955747300', '2009-01-05', 'male', 140.23, '336 Lenora Place Apt. 550\nNorth Domenick, NV 08712', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(2, 'Elyse Mills', 'keeley14@example.net', '+2998678652150', '2012-07-11', 'female', 61.00, '35685 Meda Ferry\nNorth Tadshire, WA 66198', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(3, 'Ms. Alisa Franecki', 'junius.langosh@example.com', '+7758956505611', '2019-04-06', 'female', 69.22, '8934 Jaron Highway\nJanellemouth, ND 78635', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(4, 'Mrs. Mylene Gorczany DDS', 'yvonrueden@example.org', '+5572238486272', '1983-04-03', 'male', 138.07, '9743 Jocelyn Divide Suite 925\nKovacekside, NJ 33021-8756', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(5, 'Prof. Breana Lueilwitz V', 'karli.blick@example.net', '+3914530868103', '2011-05-11', 'female', 116.15, '20171 Jessy Circles\nStantonburgh, MN 25786', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(6, 'Dr. Alanna D\'Amore III', 'mmayer@example.net', '+4750034678442', '2004-09-10', 'male', 142.40, '41889 Viva Throughway Apt. 274\nStehrborough, IA 81464-4266', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(7, 'Kenna Homenick', 'towne.cleveland@example.com', '+9438249101124', '1973-07-27', 'male', 83.38, '36255 Roberta Light\nKshlerinshire, MI 18314', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(8, 'Joshua Schmitt', 'kuvalis.dora@example.com', '+3534810451010', '2001-11-11', 'female', 92.08, '16750 Adela Mews\nHaleymouth, SD 96700-7779', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(9, 'Mr. Johann Bechtelar', 'kshlerin.vicente@example.com', '+5460852557084', '1975-07-05', 'male', 111.02, '91126 Runte Coves\nRickborough, AK 68881', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(10, 'Mr. Kristoffer Metz II', 'umetz@example.net', '+3161441937471', '1983-06-04', 'female', 50.45, '517 Tracey Shoals Apt. 471\nWest Elisemouth, NC 39337-2568', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(11, 'Dr. Rogelio Kunze', 'bailee05@example.com', '+1513584685145', '2012-07-28', 'female', 143.74, '84141 Luz Station Apt. 143\nNew Timmothy, KS 28399-6723', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(12, 'Shaylee Heaney', 'melissa.borer@example.net', '+4718731450062', '1985-10-27', 'female', 66.27, '351 Edwardo Flat Apt. 136\nSamantafurt, NC 71581-1248', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(13, 'Dr. Alanis Howell I', 'rebeka16@example.org', '+8977746964983', '1994-07-16', 'female', 70.80, '40852 Greenholt Ville Suite 732\nNew Berry, IA 58357', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(14, 'Ariel Gislason', 'hanna34@example.org', '+5088164415195', '2008-12-29', 'male', 75.40, '334 Kovacek Club\nNorth Larissaton, NC 61174', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(15, 'Jack Walsh', 'edd.jast@example.org', '+3857873530731', '2013-05-27', 'female', 42.00, '8171 Ocie Brook\nWest Karley, NE 38610', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(16, 'Reid McLaughlin', 'priscilla33@example.org', '+4333175339812', '1984-08-14', 'female', 106.64, '7101 Onie Street Suite 862\nLindseyfurt, VA 42860', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(17, 'Ellis Pfannerstill', 'keira.monahan@example.net', '+5574648294887', '1995-05-07', 'male', 67.00, '5106 Stokes Forks Suite 041\nPort Yvette, MO 76256-6126', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(18, 'Mr. Robbie Abernathy Jr.', 'adickens@example.com', '+8702375574249', '2016-04-24', 'female', 74.31, '19823 Swift Well\nWest Jakeland, TX 13095', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(19, 'Russ Hettinger', 'alysa.quigley@example.com', '+4246216541732', '1996-12-22', 'female', 54.92, '2448 Webster Inlet\nEast Cyril, WV 16769', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(20, 'Axel Auer IV', 'dkozey@example.net', '+7537727401130', '1992-06-02', 'female', 46.75, '71061 Lesly Springs\nTerryland, NY 83968-9186', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(21, 'Velma Halvorson', 'elissa.legros@example.net', '+1942787050710', '1976-07-21', 'male', 56.78, '60542 Windler Parkways Suite 718\nMohamedport, IL 10085', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(22, 'Roslyn Feest MD', 'shanna93@example.net', '+9369673223497', '1970-07-31', 'female', 41.90, '4107 Kutch Prairie\nLake Randalborough, VT 27025', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(23, 'Amalia Jaskolski', 'medhurst.joesph@example.org', '+4887853323066', '1997-03-07', 'male', 137.93, '438 Guadalupe Track\nWest Lizethberg, NE 44182', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(24, 'Ms. Alicia Pfeffer', 'hegmann.linda@example.com', '+3314438818095', '2006-08-27', 'male', 125.43, '4342 Macejkovic Parkway Suite 346\nMarquiseburgh, IL 79173-5899', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(25, 'Dr. Garrison Kulas Jr.', 'douglas.irwin@example.net', '+5400012942239', '2018-06-07', 'female', 135.22, '648 Rowland Alley Suite 102\nWest Francescamouth, IA 84075', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(26, 'Pearlie Goyette Sr.', 'ohane@example.net', '+7984334059029', '1982-02-03', 'male', 54.06, '50683 Alexzander Causeway Apt. 101\nEast Rhiannon, CA 08536-7711', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(27, 'Ms. Rossie Graham MD', 'hand.dawson@example.org', '+9123077682830', '1972-08-05', 'male', 47.93, '20753 Kuvalis Dam\nLake Shanna, WA 83054', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(28, 'Dr. Marlee Corwin DVM', 'bud.welch@example.net', '+1919650876235', '2013-08-19', 'female', 65.97, '96447 Corine Shoal\nEast Evanview, VA 90782-9178', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(29, 'Mrs. Imogene Klocko MD', 'beau59@example.net', '+4321401986568', '2001-08-20', 'female', 74.42, '27603 Shanahan Falls\nMillerfurt, TN 98813', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(30, 'Katlynn McCullough', 'cielo.russel@example.org', '+9543592498405', '2002-04-22', 'female', 117.57, '5576 Devin Manors Apt. 853\nPort Weston, ID 45947', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(31, 'Dr. Jeffrey Smith PhD', 'myrl.hegmann@example.com', '+2710304108848', '1981-03-13', 'female', 109.21, '89452 Elmira Avenue Apt. 748\nWest Allisontown, VA 60985', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(32, 'Hershel Denesik', 'burdette82@example.org', '+4688618561492', '1991-12-15', 'female', 99.81, '141 Eunice Lodge\nJohnsonton, NH 72514', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(33, 'Rose Ziemann', 'hester.wilkinson@example.net', '+2368959012252', '1998-07-09', 'male', 110.49, '75153 Ryan Village Suite 449\nSalvadormouth, ID 96422', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(34, 'Bart Mueller', 'cora.daugherty@example.org', '+4784663034760', '2006-03-06', 'female', 147.38, '699 Isaac River\nNew Kennedi, ME 10376', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(35, 'Garrick Quitzon', 'shany.jaskolski@example.org', '+7295031793238', '1984-11-07', 'male', 57.66, '2480 Ruthie Circle Suite 333\nJaskolskimouth, AL 27251-0607', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(36, 'Oren Kuvalis', 'bashirian.libby@example.com', '+4481384340276', '1971-08-01', 'female', 47.13, '304 Dach Burg\nSeanland, MO 25962-5246', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(37, 'Tad Bogan', 'ccrist@example.net', '+5023089339066', '1974-02-24', 'female', 67.23, '294 Effertz Plain\nPourosbury, AK 79461', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(38, 'Summer Lockman', 'lakin.hunter@example.org', '+1400825397501', '1992-05-19', 'male', 103.56, '8241 Rebecca Square\nBeerbury, KY 87092', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(39, 'Kasey Mayer', 'harris.george@example.net', '+8159000771214', '1970-09-29', 'female', 58.65, '819 Corbin Rapids\nLake Rickey, NV 05946-4163', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(40, 'Sean Mante', 'etha.renner@example.net', '+9395167777945', '1974-09-25', 'male', 109.68, '7629 Graham Valleys\nGuillermotown, OH 94441', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(41, 'Heloise Ebert', 'bradtke.amari@example.com', '+5387976293041', '1979-04-11', 'male', 89.00, '578 Bartell Pines\nBrandthaven, PA 75735-0189', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(42, 'Katelynn Bogan', 'hoeger.tyrique@example.com', '+1555371277198', '2003-04-05', 'female', 122.51, '9958 Katelin Alley\nPort Sibylton, WY 10086', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(43, 'Alayna Robel', 'paucek.ettie@example.com', '+5855058181342', '2000-07-05', 'male', 133.00, '1618 Lindgren Villages Suite 370\nEast Alexaneside, IA 95064-9210', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(44, 'Dr. Jillian Windler I', 'muller.eileen@example.org', '+8238024447029', '1999-12-16', 'male', 46.14, '1844 Zena Locks\nNorth Jarrellborough, NM 37544', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(45, 'Amelia Terry', 'mills.buddy@example.org', '+9628840126154', '2018-09-30', 'female', 95.65, '67327 Opal Harbors\nEast Sonya, WV 18499-0410', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(46, 'Mavis Ward Jr.', 'ehowell@example.net', '+7088978125627', '1984-08-23', 'female', 56.00, '1486 Koch Rue Apt. 327\nGrantchester, AR 36252-2552', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(47, 'Eva Boyle MD', 'flo.cremin@example.com', '+2363147168538', '1985-08-05', 'female', 64.51, '3354 Diego Dale\nZulaufport, PA 88760', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(48, 'Annabel Reilly', 'duncan.cummerata@example.com', '+8961689435871', '1987-03-20', 'male', 42.38, '2315 Schuster Trace Suite 236\nWeimannfort, KS 74402', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(49, 'Javonte Kemmer', 'iva.bradtke@example.org', '+1684040420647', '1978-12-06', 'male', 68.19, '4923 Lucy Centers\nAlexandrinefort, AL 78663', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(50, 'Burnice Pacocha', 'pagac.vincenzo@example.org', '+5349717254416', '2003-03-02', 'male', 65.80, '7414 German Village\nTommieberg, MN 23145-9925', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(51, 'Bria Paucek', 'ulindgren@example.net', '+8895808025286', '2003-08-08', 'male', 140.51, '18286 Jast Mountain\nSouth Frederique, ME 70021', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(52, 'Lottie Weber', 'zemlak.lenna@example.com', '+6577254648342', '1989-01-26', 'female', 96.00, '513 Jacobson Prairie Apt. 527\nAdamshaven, CT 05632', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(53, 'Kenny Pacocha', 'leta.heller@example.org', '+3258477875736', '2017-02-05', 'male', 93.00, '4157 Kattie Ford Suite 245\nBotsfordberg, IA 49829', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(54, 'Mrs. Joannie Larson', 'tbatz@example.org', '+8415031097042', '2000-01-22', 'male', 129.43, '8793 Swaniawski Trace Apt. 034\nEast Tillmanborough, MO 60244', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(55, 'Edna Watsica', 'gibson.maureen@example.com', '+4114565316349', '1999-09-02', 'male', 111.59, '4489 Harris Fields\nJosefinaberg, MS 12513-6257', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(56, 'Mr. Brain Mante', 'cruickshank.rachelle@example.org', '+3924854383400', '1988-06-26', 'female', 68.65, '823 Madalyn Green\nSouth Gildaborough, HI 05716-9943', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(57, 'Claude Lynch', 'hahn.kristoffer@example.net', '+8056286930417', '1990-05-15', 'male', 136.60, '242 Green Knoll\nJuanachester, IA 75603', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(58, 'Jarod Howe', 'kyler08@example.com', '+9210343087668', '1972-04-02', 'female', 117.59, '8100 Susie Ways\nLouieshire, NJ 53191', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(59, 'Ms. Bernadette Beier', 'lonnie.murphy@example.com', '+5624344069546', '1990-11-15', 'male', 104.46, '85142 Dickinson Groves\nLake Valentinaview, MD 60482-3728', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(60, 'Mrs. Lenna Feeney', 'armani.champlin@example.org', '+4404843401107', '2010-10-16', 'male', 73.03, '9810 Vandervort Inlet\nWest Theaside, DE 51704', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(61, 'Marian Brown', 'lluettgen@example.org', '+6837021165670', '1978-12-26', 'male', 47.89, '4737 Karl Stream Suite 615\nLeolaport, NV 61523-9729', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(62, 'Mr. Candido Ryan', 'thea.ruecker@example.com', '+9050438100869', '2014-08-13', 'male', 55.29, '833 Dawson Isle Apt. 204\nNorth Angelahaven, WA 33959-0506', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(63, 'Mae Purdy', 'shields.alize@example.net', '+6990765530121', '2015-11-14', 'female', 128.77, '1924 Albin Unions\nSouth Electa, NH 10819-9542', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(64, 'Mrs. Georgiana Prohaska Jr.', 'idaniel@example.com', '+7915674309883', '1995-09-26', 'male', 93.08, '37246 Halvorson Village Apt. 236\nJadaville, OK 90126', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(65, 'Elisa Gerlach', 'vinnie.mosciski@example.org', '+2921476283623', '2015-06-23', 'female', 90.00, '54063 Lehner Flats Apt. 607\nPurdymouth, NM 41845-9825', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(66, 'Jadyn Walsh', 'qlowe@example.org', '+2637317376496', '2011-07-27', 'male', 71.56, '240 Martin Orchard Suite 206\nWest Durward, NH 14438', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(67, 'Dr. Jerome Stanton', 'anna56@example.org', '+8828794408918', '2012-06-27', 'female', 65.05, '628 Dianna Lakes\nNew Mia, NC 91358-8627', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(68, 'Norris Spinka', 'bednar.jonas@example.net', '+1909777454330', '1983-06-17', 'male', 136.10, '1324 Bins Divide Suite 920\nPort Aniyahberg, TN 48638', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(69, 'Ardith Roberts', 'veum.andreanne@example.com', '+8587181762314', '1977-04-03', 'male', 120.10, '70200 Koss Hollow\nEast Bradley, NV 13491', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(70, 'Noemy Hackett', 'wgulgowski@example.com', '+2456390368706', '1972-06-17', 'male', 50.33, '682 Abshire Rapids\nNew Elza, CA 60881', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(71, 'Kennedi Blick', 'michaela62@example.org', '+9489487894220', '1983-11-01', 'female', 58.06, '1765 D\'Amore Way\nEast Lacey, GA 90550', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(72, 'Mitchel Conroy IV', 'pcollier@example.com', '+3901783347075', '1996-08-19', 'male', 134.87, '4004 Halvorson Ford\nNew Serenity, IA 36968', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(73, 'Mrs. Faye Jast MD', 'bernier.sigrid@example.com', '+9503062972923', '1988-03-18', 'female', 141.18, '7159 Darrel Branch Suite 600\nEileenland, WV 50667', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(74, 'Green Monahan Sr.', 'kathlyn75@example.com', '+2765335581963', '1976-05-24', 'female', 142.79, '35182 Lela Harbors Apt. 237\nPort Marlonshire, MT 58700-8778', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(75, 'Miss Augusta Dibbert', 'vsmith@example.org', '+9743200694109', '2010-01-27', 'female', 127.80, '285 Boyer Springs Suite 073\nEast Justinefurt, MN 10912', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(76, 'Bertram Raynor III', 'cullen21@example.com', '+3055524861704', '1987-06-09', 'female', 76.37, '52377 O\'Reilly Plain\nBoganfort, DC 37691-9302', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(77, 'Judd Bruen', 'aileen.weber@example.com', '+1628914784336', '1988-02-12', 'female', 121.22, '87456 Antonietta Mountain\nWelchberg, SD 23554-2731', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(78, 'Cloyd Sipes', 'kmcdermott@example.net', '+2668676061897', '1993-02-16', 'male', 125.62, '8880 Abbott Fall Apt. 873\nMaggioshire, IA 65438-8691', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(79, 'Donny Kassulke MD', 'jacobi.xander@example.org', '+9823317357241', '1984-03-28', 'female', 56.15, '956 Herminia Canyon Apt. 919\nBreitenbergfort, CT 34563-7750', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(80, 'Roberta Herzog', 'crooks.earnestine@example.net', '+9564886960782', '2009-01-26', 'female', 79.42, '39358 Mohr Junctions Apt. 297\nLake Murielport, NV 34436', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(81, 'Ms. Ciara Considine', 'pfannerstill.jackie@example.net', '+1702163444035', '2020-07-01', 'male', 85.00, '77096 Manuela Circle Apt. 002\nLake Alexisville, HI 07491', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(82, 'Adolfo Durgan', 'katlynn56@example.com', '+3511874576093', '2002-10-27', 'male', 99.49, '107 Jacobi Freeway Apt. 881\nJailynmouth, OK 09641', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(83, 'Pierce Kuvalis III', 'okon.christopher@example.net', '+3698264795663', '2007-11-17', 'female', 104.40, '72091 Marina Mountains Apt. 129\nSouth Ariannachester, RI 19384', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(84, 'Wilford Luettgen', 'rdoyle@example.net', '+7330038803931', '2010-01-31', 'male', 133.21, '77313 Antwon Corners Apt. 038\nWest Cyrus, WI 72216-0159', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(85, 'Camden Reichel', 'jadon51@example.org', '+3318031354462', '1973-03-14', 'male', 75.68, '94068 Hagenes Bridge Apt. 704\nLake Lindsay, ME 38129', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(86, 'Hyman Beatty', 'colin93@example.org', '+4209848208254', '1971-12-01', 'female', 98.97, '1889 Caleigh Forges Suite 472\nPort Herminioborough, TN 80593-8188', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(87, 'Pietro Gutkowski', 'cassidy.dach@example.org', '+9564242895645', '2008-12-15', 'male', 146.94, '809 Domenic Plains Apt. 094\nShaunborough, ND 74823', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(88, 'Ceasar Witting', 'norma40@example.net', '+5430720474640', '1985-12-18', 'female', 74.47, '2901 Amiya Course\nWest Maxwellstad, IA 03646', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(89, 'Ms. Idell Kiehn III', 'bstiedemann@example.org', '+8230163659362', '1995-05-12', 'male', 93.65, '25205 Littel Locks Apt. 585\nWest Verliechester, DC 64651', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(90, 'Eunice Dietrich', 'juanita.dubuque@example.net', '+4398665488755', '1976-10-16', 'female', 92.72, '5808 Frank Walk\nPort Estella, NV 78263-6599', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(91, 'Vicenta Tremblay Jr.', 'lisette02@example.org', '+7625107718840', '2014-04-17', 'female', 91.75, '780 Beverly Walks\nNew Tristinland, SD 68218', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(92, 'Wilford Hauck II', 'ygreenholt@example.net', '+6167619038769', '1988-07-03', 'male', 45.87, '9352 Armstrong Falls Apt. 724\nNew Emelieton, SD 07814-9357', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(93, 'Elvera Hegmann', 'stephania.wolff@example.com', '+4597705053996', '1984-08-20', 'male', 123.74, '51474 Hal Wells\nChamplinbury, AR 10484', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(94, 'Vella Senger', 'kuhic.stephen@example.com', '+6379162304562', '1999-06-03', 'female', 121.60, '95297 Barton Plaza\nQueenfort, CO 98518-8012', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(95, 'Eugene Howell', 'boyer.leonardo@example.net', '+8170518908302', '2012-11-14', 'female', 84.77, '6044 Aditya Inlet\nSusannafort, OH 76488', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(96, 'Johnpaul Olson', 'marielle05@example.org', '+2264195120891', '2016-06-13', 'female', 145.00, '816 Purdy Neck Apt. 060\nPort Meggieview, MT 10715-5411', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(97, 'Prof. Hope Deckow', 'ima70@example.org', '+8753765672272', '1986-11-30', 'male', 110.44, '3585 Halvorson Center Suite 066\nNew Shadville, CO 53905-0990', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(98, 'Johann Heathcote', 'christy.schmeler@example.org', '+1571599929694', '1973-07-14', 'male', 145.64, '31728 Jakubowski Brook\nNew Golda, AL 69184', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(99, 'Dawson Prohaska', 'opowlowski@example.net', '+9633756556670', '1992-05-26', 'female', 41.61, '1507 Roob Drive Suite 711\nOniestad, IN 61972-4031', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(100, 'Kara Rohan', 'athena.conn@example.com', '+4542863126740', '1981-02-21', 'female', 109.01, '5052 Nigel Groves Apt. 618\nEast Ottoville, RI 93465-9977', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(101, 'Mr. Marcelino Koch', 'urodriguez@example.com', '+3171732625543', '1989-11-22', 'female', 144.29, '38221 Nikolaus Course Suite 873\nMateomouth, SC 09212-7584', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(102, 'Lourdes Wolff I', 'bell.huel@example.com', '+8627789882233', '2002-11-13', 'male', 68.03, '1540 McDermott Dam Apt. 958\nPort Antonina, WI 51537', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(103, 'Beaulah Rempel', 'ortiz.jenifer@example.org', '+2076413756089', '1987-03-13', 'male', 75.88, '98518 Callie Rue\nLeslytown, CT 63137-8429', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(104, 'Dean Collier Jr.', 'ksanford@example.net', '+1829384278247', '2002-03-11', 'female', 136.38, '5320 Doyle Cape\nGutmannton, MN 51329', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(105, 'Dr. Tamara Leannon III', 'tstrosin@example.org', '+9948596030059', '1987-10-03', 'male', 63.20, '17806 Satterfield Rest Apt. 083\nNew Ignatius, AK 07737', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(106, 'Felipa Christiansen I', 'iroob@example.com', '+3156689431223', '1984-09-03', 'female', 74.71, '6812 Ezra Cove\nPagacburgh, IN 48529-8684', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(107, 'Laurel Eichmann', 'noe.hagenes@example.org', '+9863212342349', '2002-02-26', 'male', 112.04, '2613 Gladys Plains Suite 696\nNew Gretchenfurt, MT 40080', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(108, 'Damon Kemmer', 'zcartwright@example.com', '+4977712510665', '2001-11-29', 'female', 105.00, '13084 Brekke Haven\nPort Wilfredoberg, IL 51876-3742', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(109, 'Mr. Rosendo Buckridge V', 'hugh78@example.net', '+5356305650189', '2004-04-16', 'female', 98.07, '744 Dameon Rapids\nShanefurt, OH 47687', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(110, 'Emilia Mueller', 'haven.green@example.org', '+3951328225311', '2018-10-25', 'male', 84.77, '92289 McCullough Drive\nNorth Mohammedville, OR 91069', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(111, 'Hector Kuhn', 'estelle38@example.com', '+7313099707590', '2006-06-20', 'female', 41.22, '98210 Hirthe Terrace Apt. 876\nBeckerton, FL 82681', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(112, 'Dimitri Swift', 'schmeler.tre@example.org', '+3910612637990', '1990-01-27', 'male', 57.00, '8501 Schneider Place Apt. 244\nLake Cristophershire, AK 15599', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(113, 'Mr. Jerrod Christiansen DDS', 'eliezer.cummings@example.net', '+4830649951382', '1974-06-16', 'female', 127.70, '993 Zella Gardens\nEast Harley, OK 41767', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(114, 'Clara Hirthe', 'ryder.lehner@example.org', '+4466788338849', '1996-07-05', 'male', 114.32, '463 Sylvan Track\nNew Mabelport, PA 54945-9003', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(115, 'Cynthia Hahn V', 'bennett.schmeler@example.org', '+8027542519334', '2009-01-08', 'female', 129.85, '57400 Beier Lane Suite 563\nNorth Lolita, NV 40909', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(116, 'Prof. Trenton Stehr II', 'idamore@example.org', '+4237359752720', '2009-09-13', 'female', 97.68, '57754 Bode Alley\nSouth Lelahtown, LA 03322-7308', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(117, 'Joanie Hintz', 'gregorio24@example.com', '+3223556249240', '1996-12-06', 'female', 46.72, '112 Loyal Village Apt. 415\nLake Karellestad, VA 80531-2979', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(118, 'Miss Lizzie West Jr.', 'angela.nienow@example.org', '+8303705705262', '2014-02-06', 'female', 80.00, '83170 Valentine Via\nNorth Adrienborough, AZ 75477-6479', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(119, 'Prof. Burley Hayes III', 'hermiston.hilda@example.org', '+4812995571474', '1992-05-02', 'male', 84.98, '69131 Murazik Row Suite 667\nCarlohaven, DC 34272', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(120, 'Abbigail Marquardt', 'pollich.gerald@example.org', '+9940386214336', '2008-01-30', 'male', 52.70, '5160 Dolores Camp Apt. 001\nNew Dandre, AK 97464-9567', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(121, 'Junius Murazik', 'seamus.abernathy@example.org', '+8100103580611', '1977-03-22', 'female', 63.41, '537 River Rest Suite 603\nUlisesville, NE 80651-7976', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(122, 'Sherman Johnson', 'vaughn.miller@example.com', '+5293140128679', '2020-02-05', 'male', 120.00, '99509 Estevan Via\nGoodwinmouth, FL 30838-9792', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(123, 'Baron Simonis', 'mavis.bashirian@example.net', '+9496110558053', '1977-03-21', 'male', 49.84, '295 Skiles Ferry\nEast Adelbertberg, SD 22376', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(124, 'Estefania Langworth II', 'dooley.freda@example.org', '+7678486894225', '1970-06-24', 'male', 94.00, '2936 Llewellyn Square\nSharonville, WA 31233-3394', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(125, 'Cathryn Stoltenberg', 'davis.delfina@example.net', '+5004634682486', '1973-03-27', 'female', 119.92, '321 Ubaldo Club Apt. 985\nEast Aurelia, MI 38202-6176', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(126, 'Kaela Metz', 'mlangworth@example.org', '+5868476840872', '1987-11-29', 'female', 99.90, '907 Hudson Stream Apt. 925\nEast Rogers, CA 08354-3495', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(127, 'Reynold Hegmann Sr.', 'filiberto12@example.net', '+6022133561255', '2008-01-02', 'female', 136.12, '5910 Mackenzie Crescent Suite 421\nShanechester, LA 61141-6346', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(128, 'Triston Donnelly', 'hcollier@example.com', '+1189619862584', '1999-09-17', 'female', 94.38, '9864 August Village\nErikton, PA 69041-5164', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(129, 'Prof. Tyrell Ernser PhD', 'dubuque.golden@example.org', '+8112615077263', '2013-07-28', 'female', 108.18, '464 Liliana Port Suite 914\nWest Jeffrey, AK 14770', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(130, 'Tianna Hamill', 'claude57@example.net', '+8086043091306', '2015-12-04', 'female', 48.00, '97091 Marcella Spring\nKonopelskiland, CT 09940', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(131, 'Prof. Ben Connelly', 'henry.lubowitz@example.net', '+1445439728265', '1975-04-10', 'male', 101.04, '20236 Axel Spring Apt. 242\nHegmannshire, KS 50557-0410', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(132, 'Ms. Jazlyn Williamson', 'audreanne02@example.com', '+1909030870383', '1973-07-04', 'female', 123.13, '741 Bartell Ford\nLake Juwan, VA 15165-9179', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(133, 'Mckayla Abbott IV', 'cronin.antonina@example.com', '+3040720832565', '1975-07-09', 'female', 51.02, '560 Dock Cove\nWest Kristy, NM 34149', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(134, 'Cleveland Orn', 'srowe@example.org', '+5649042796310', '1999-08-05', 'male', 70.50, '517 O\'Keefe Ways Apt. 695\nNorth Hollyfort, NV 07214', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(135, 'Jamel O\'Kon', 'ohuels@example.org', '+3932788729265', '1973-04-04', 'male', 112.37, '8554 Cristian Club\nLake Wilburnmouth, ID 37900', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(136, 'Jamaal Greenfelder', 'jamar.ritchie@example.com', '+4402144732496', '1994-12-27', 'male', 91.19, '3432 Spencer Radial Suite 209\nWest Anikaside, KY 21410-3038', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(137, 'Tomasa Dach', 'angie88@example.net', '+2798388573644', '2013-09-05', 'female', 142.00, '10203 McCullough Rue\nNorth Merlefort, CA 68824', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(138, 'Foster Willms', 'johnathon22@example.org', '+1650690651714', '1978-12-17', 'male', 117.98, '3979 Renner Greens\nNorth Clay, NH 94991-4525', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(139, 'Ms. Julianne Schmeler', 'daphney.rempel@example.net', '+2205315116917', '2016-03-13', 'female', 97.77, '57019 Stacey Land Suite 363\nSchneidershire, WI 64217', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(140, 'Merlin Klocko', 'ritchie.saul@example.net', '+4541221700611', '1999-05-18', 'female', 131.90, '24654 Buckridge Fork Suite 929\nSouth Lilly, SD 74495-7598', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(141, 'Judd Schmitt', 'quitzon.danny@example.org', '+6372638816818', '1982-11-19', 'female', 75.67, '173 Edgar Keys\nVernietown, NV 15939', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(142, 'Kennedi Gerhold', 'wyman.wilford@example.net', '+9326181181974', '1980-03-23', 'female', 84.64, '2791 Krajcik Street\nPort Angelina, ID 20960-6287', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(143, 'Ila Stark', 'ldach@example.org', '+6561934216531', '1986-11-24', 'male', 140.99, '957 Pinkie Valley\nPollichmouth, WY 08735', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(144, 'Salvador O\'Conner', 'demond90@example.net', '+1442558254550', '1993-05-08', 'male', 130.20, '88189 Arlene Shoals\nLillaborough, DC 96438-8743', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(145, 'Sheridan Hamill', 'jeremy.monahan@example.net', '+3915973002953', '2013-11-02', 'male', 101.26, '1240 Burdette View\nWest Oswaldoborough, MD 51658', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(146, 'Rosalinda Lockman Jr.', 'considine.bradley@example.com', '+4896224764921', '2016-11-09', 'male', 148.44, '9878 Ottis River Apt. 663\nElliottberg, CT 66137', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(147, 'Modesta Ankunding', 'annamae.dibbert@example.com', '+9196466913601', '1998-10-13', 'female', 113.81, '234 Schimmel Village\nWest Charlietown, LA 99837', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(148, 'Janis Leannon I', 'lelia.boyle@example.org', '+5860601042444', '1988-03-26', 'female', 43.80, '292 Wilkinson Harbors Apt. 289\nWest Princessberg, AR 12187-7571', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(149, 'Colten Zieme I', 'elta55@example.net', '+3713591152387', '1991-01-05', 'female', 117.04, '86837 Amelie Prairie Suite 289\nOndrickahaven, IL 34988', '2020-08-28 15:06:39', '2020-08-28 15:06:39'),
(150, 'Abbigail Legros', 'dernser@example.com', '+4675196250302', '1996-01-09', 'female', 78.82, '46560 Weber Mountains\nAdamsmouth, NH 37260-2404', '2020-08-28 15:06:39', '2020-08-28 15:06:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

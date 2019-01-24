-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 24, 2019 at 01:34 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel-restful-api`
--

-- --------------------------------------------------------

--
-- Table structure for table `kontaks`
--

CREATE TABLE `kontaks` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kontaks`
--

INSERT INTO `kontaks` (`id`, `name`, `email`, `address`, `phonenumber`, `created_at`, `updated_at`) VALUES
(2, 'Ms. Laney Nicolas I', 'estehr@emard.com', '16637 Moses Shoal Suite 675\nPort Manuelchester, IN 09487', '786.498.0335', NULL, NULL),
(3, 'Ruthe Macejkovic', 'edythe.cormier@cartwright.com', '9017 Greenholt Port\nWiegandfurt, KY 28297', '1-556-535-9400 x1133', NULL, NULL),
(4, 'Maverick Boehm V', 'carolanne.hartmann@gmail.com', '52765 Carroll Knoll\nNorth Giovanniborough, MI 63042', '909-300-6514 x3514', NULL, NULL),
(5, 'Carson Herman II', 'fisher.darrick@lesch.com', '989 Edwardo Views Suite 183\nNew Delmerhaven, SD 25950', '(982) 537-4792 x3993', NULL, NULL),
(6, 'Mr. Perry Spencer Sr.', 'audrey.erdman@hotmail.com', '6714 Carrie Parkways Apt. 188\nNew Emilburgh, NV 97586-7876', '408-252-1966', NULL, NULL),
(7, 'Mrs. Grace Dicki', 'skylar97@hotmail.com', '8175 Hank Harbors\nNorth Cathrynchester, DC 21992-4342', '(760) 899-7696', NULL, NULL),
(8, 'Delfina Padberg', 'wkuvalis@torphy.com', '699 Gay Islands Suite 632\nSouth Wiley, ME 89793', '+1.412.729.0880', NULL, NULL),
(9, 'Demarco Hickle', 'wilfred.nienow@hotmail.com', '2102 Richie Prairie\nVonRuedenton, UT 23318-5619', '+17855079403', NULL, NULL),
(10, 'Eva Koepp', 'magdalen.dickinson@hotmail.com', '194 Wisozk Throughway Suite 778\nAngieton, OR 16801-7347', '310.369.0163', NULL, NULL),
(11, 'Arnulfo Sanford DDS', 'olen26@gmail.com', '326 Ellen Light Suite 025\nAngeloland, ND 23066', '651-280-6204', NULL, NULL),
(12, 'Kirk Wuckert', 'ryleigh94@yahoo.com', '19231 Schroeder Ports\nSouth Jarrodland, IA 82367-0266', '(565) 630-0061', NULL, NULL),
(13, 'Ashly Sipes', 'bbeer@hotmail.com', '2944 Emmitt Vista\nNicolasborough, MN 09254', '295-451-5371 x62588', NULL, NULL),
(14, 'Alba Rogahn', 'rdietrich@hotmail.com', '30962 Eva Key\nSouth Jesus, CO 53367', '953.794.0547 x4832', NULL, NULL),
(15, 'Miss Marjorie Jacobson DDS', 'turcotte.tillman@parker.com', '99347 Mraz Via Suite 788\nNorth Vernicestad, MA 14143-5270', '775.661.6367 x729', NULL, NULL),
(16, 'Mr. Braden Yundt Jr.', 'gcollier@effertz.com', '764 Braun Stream\nWest Abagail, MI 72114-5237', '(936) 979-3276 x3074', NULL, NULL),
(17, 'Luther Langworth II', 'langworth.tristian@hotmail.com', '834 Collier Trafficway Apt. 379\nEast Charlottechester, SC 76749', '+1.982.903.2315', NULL, NULL),
(18, 'Crawford O\'Connell', 'richard86@gmail.com', '3458 Veum Springs Suite 781\nWest Martinetown, ID 80948', '302.471.7669', NULL, NULL),
(19, 'Prof. Maegan Kling', 'ladarius.wisoky@yahoo.com', '872 Tod Grove Apt. 752\nNew Emory, MS 45392', '981.881.8158', NULL, NULL),
(20, 'Prof. Lauren Gutkowski', 'roxanne.sipes@bode.net', '2080 Ernser Garden\nHauckshire, ME 62050-8848', '(203) 650-1911', NULL, NULL),
(21, 'Liz Scarlet', 'crowleyesd@gmailcom', 'Jln. Danau Towuti IV 0092', '087859244811', '2018-09-09 13:33:03', '2018-09-09 13:33:29'),
(22, 'Alfian Dimas Sugara', 'kidaliez@gmailcom', 'Jln. Danau Towuti IV', '082140307911', '2018-09-09 13:41:04', '2018-09-09 13:41:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kontaks`
--
ALTER TABLE `kontaks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kontaks`
--
ALTER TABLE `kontaks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

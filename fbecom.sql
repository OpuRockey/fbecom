-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 16, 2019 at 09:34 AM
-- Server version: 5.5.62-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `develope_rakib_fbbuy`
--

-- --------------------------------------------------------

--
-- Table structure for table `fb_feed`
--

CREATE TABLE `fb_feed` (
  `id` int(50) NOT NULL,
  `json` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fb_feed`
--

INSERT INTO `fb_feed` (`id`, `json`, `created_at`, `updated_at`) VALUES
(43, '{\"entry\": [{\"changes\": [{\"field\": \"feed\", \"value\": {\"from\": {\"id\": \"1922683607849627\", \"name\": \"Ashis Kumar\"}, \"item\": \"comment\", \"comment_id\": \"347043645892464_348788889051273\", \"post_id\": \"347043139225848_347043645892464\", \"verb\": \"add\", \"parent_id\": \"347043139225848_347043645892464\", \"created_time\": 1547439872, \"post\": {\"type\": \"status\", \"updated_time\": \"2019-01-14T04:24:32+0000\", \"promotion_status\": \"ineligible\", \"permalink_url\": \"https://www.facebook.com/permalink.php?story_fbid=347043645892464&id=347043139225848\", \"id\": \"347043139225848_347043645892464\", \"status_type\": \"mobile_status_update\", \"is_published\": true}, \"message\": \"#buy\"}}], \"id\": \"347043139225848\", \"time\": 1547439873}], \"object\": \"page\"}', '2019-01-13 22:24:36', '2019-01-13 22:24:36'),
(39, '{\"entry\": [{\"changes\": [{\"field\": \"feed\", \"value\": {\"from\": {\"id\": \"1922683607849627\", \"name\": \"Ashis Kumar\"}, \"item\": \"comment\", \"comment_id\": \"347043645892464_348498602413635\", \"post_id\": \"347043139225848_347043645892464\", \"verb\": \"add\", \"parent_id\": \"347043139225848_347043645892464\", \"created_time\": 1547381781, \"post\": {\"type\": \"status\", \"updated_time\": \"2019-01-13T12:16:21+0000\", \"promotion_status\": \"ineligible\", \"permalink_url\": \"https://www.facebook.com/permalink.php?story_fbid=347043645892464&id=347043139225848\", \"id\": \"347043139225848_347043645892464\", \"status_type\": \"mobile_status_update\", \"is_published\": true}, \"message\": \"ok 1st comments\"}}], \"id\": \"347043139225848\", \"time\": 1547381782}], \"object\": \"page\"}', '2019-01-13 06:16:25', '2019-01-13 06:16:25'),
(40, '{\"entry\": [{\"changes\": [{\"field\": \"feed\", \"value\": {\"from\": {\"id\": \"370138096875935\", \"name\": \"Shop\"}, \"item\": \"comment\", \"comment_id\": \"370535096836235_372977243258687\", \"post_id\": \"370138096875935_370535096836235\", \"verb\": \"add\", \"parent_id\": \"370138096875935_370535096836235\", \"created_time\": 1547381804, \"post\": {\"type\": \"status\", \"updated_time\": \"2019-01-13T12:16:44+0000\", \"promotion_status\": \"inactive\", \"permalink_url\": \"https://www.facebook.com/permalink.php?story_fbid=370535096836235&id=370138096875935\", \"id\": \"370138096875935_370535096836235\", \"status_type\": \"mobile_status_update\", \"is_published\": true}, \"message\": \"goru sagol haati ghora\"}}], \"id\": \"370138096875935\", \"time\": 1547381805}], \"object\": \"page\"}', '2019-01-13 06:16:48', '2019-01-13 06:16:48'),
(41, '{\"entry\": [{\"changes\": [{\"field\": \"feed\", \"value\": {\"from\": {\"id\": \"1922683607849627\", \"name\": \"Ashis Kumar\"}, \"item\": \"comment\", \"comment_id\": \"347043645892464_348787222384773\", \"post_id\": \"347043139225848_347043645892464\", \"verb\": \"add\", \"parent_id\": \"347043139225848_347043645892464\", \"created_time\": 1547439455, \"post\": {\"type\": \"status\", \"updated_time\": \"2019-01-14T04:17:35+0000\", \"promotion_status\": \"ineligible\", \"permalink_url\": \"https://www.facebook.com/permalink.php?story_fbid=347043645892464&id=347043139225848\", \"id\": \"347043139225848_347043645892464\", \"status_type\": \"mobile_status_update\", \"is_published\": true}, \"message\": \"again test again\"}}], \"id\": \"347043139225848\", \"time\": 1547439457}], \"object\": \"page\"}', '2019-01-13 22:17:41', '2019-01-13 22:17:41'),
(42, '{\"entry\": [{\"changes\": [{\"field\": \"feed\", \"value\": {\"from\": {\"id\": \"1922683607849627\", \"name\": \"Ashis Kumar\"}, \"item\": \"comment\", \"comment_id\": \"347043645892464_348788462384649\", \"post_id\": \"347043139225848_347043645892464\", \"verb\": \"add\", \"parent_id\": \"347043139225848_347043645892464\", \"created_time\": 1547439772, \"post\": {\"type\": \"status\", \"updated_time\": \"2019-01-14T04:22:52+0000\", \"promotion_status\": \"ineligible\", \"permalink_url\": \"https://www.facebook.com/permalink.php?story_fbid=347043645892464&id=347043139225848\", \"id\": \"347043139225848_347043645892464\", \"status_type\": \"mobile_status_update\", \"is_published\": true}, \"message\": \"#buy\"}}], \"id\": \"347043139225848\", \"time\": 1547439773}], \"object\": \"page\"}', '2019-01-13 22:22:56', '2019-01-13 22:22:56'),
(44, '{\"entry\": [{\"changes\": [{\"field\": \"feed\", \"value\": {\"from\": {\"id\": \"1922683607849627\", \"name\": \"Ashis Kumar\"}, \"item\": \"comment\", \"comment_id\": \"347043645892464_348789219051240\", \"post_id\": \"347043139225848_347043645892464\", \"verb\": \"add\", \"parent_id\": \"347043139225848_347043645892464\", \"created_time\": 1547439967, \"post\": {\"type\": \"status\", \"updated_time\": \"2019-01-14T04:26:07+0000\", \"promotion_status\": \"ineligible\", \"permalink_url\": \"https://www.facebook.com/permalink.php?story_fbid=347043645892464&id=347043139225848\", \"id\": \"347043139225848_347043645892464\", \"status_type\": \"mobile_status_update\", \"is_published\": true}, \"message\": \"#buy\"}}], \"id\": \"347043139225848\", \"time\": 1547439969}], \"object\": \"page\"}', '2019-01-13 22:26:54', '2019-01-13 22:26:54'),
(45, '{\"entry\": [{\"changes\": [{\"field\": \"feed\", \"value\": {\"from\": {\"id\": \"1922683607849627\", \"name\": \"Ashis Kumar\"}, \"item\": \"comment\", \"comment_id\": \"347043645892464_348789572384538\", \"post_id\": \"347043139225848_347043645892464\", \"verb\": \"add\", \"parent_id\": \"347043139225848_347043645892464\", \"created_time\": 1547440072, \"post\": {\"type\": \"status\", \"updated_time\": \"2019-01-14T04:27:52+0000\", \"promotion_status\": \"ineligible\", \"permalink_url\": \"https://www.facebook.com/permalink.php?story_fbid=347043645892464&id=347043139225848\", \"id\": \"347043139225848_347043645892464\", \"status_type\": \"mobile_status_update\", \"is_published\": true}, \"message\": \"#buy\"}}], \"id\": \"347043139225848\", \"time\": 1547440074}], \"object\": \"page\"}', '2019-01-13 22:27:58', '2019-01-13 22:27:58'),
(46, '{\"entry\": [{\"changes\": [{\"field\": \"feed\", \"value\": {\"from\": {\"id\": \"1922683607849627\", \"name\": \"Ashis Kumar\"}, \"item\": \"comment\", \"comment_id\": \"347043645892464_348789762384519\", \"post_id\": \"347043139225848_347043645892464\", \"verb\": \"add\", \"parent_id\": \"347043139225848_347043645892464\", \"created_time\": 1547440122, \"post\": {\"type\": \"status\", \"updated_time\": \"2019-01-14T04:28:42+0000\", \"promotion_status\": \"ineligible\", \"permalink_url\": \"https://www.facebook.com/permalink.php?story_fbid=347043645892464&id=347043139225848\", \"id\": \"347043139225848_347043645892464\", \"status_type\": \"mobile_status_update\", \"is_published\": true}, \"message\": \"#again\"}}], \"id\": \"347043139225848\", \"time\": 1547440124}], \"object\": \"page\"}', '2019-01-13 22:28:47', '2019-01-13 22:28:47'),
(47, '{\"object\":\"page\",\"entry\":[{\"id\":\"442074219660955\",\"time\":1547554160767,\"messaging\":[{\"sender\":{\"id\":\"442074219660955\"},\"recipient\":{\"id\":\"2615755305117695\"},\"timestamp\":1547554160409,\"message\":{\"is_echo\":true,\"app_id\":394239401311435,\"mid\":\"f1hobIb8qnCdDKoMqJarJidUon6XS4Mpv3l-OssNO5J2Q32dyRtG1BaFwXmcUFN-ki09-UzdKJur9DY2nkg4TA\",\"seq\":4489,\"text\":\"hello, Ashis Kumar! https:\\/\\/www.facebook.com\\/permalink.php?story_fbid=453152615219782&id=442074219660955\"}}]}]}', '2019-01-15 06:09:20', '2019-01-15 06:09:20'),
(48, '{\"object\":\"page\",\"entry\":[{\"id\":\"442074219660955\",\"time\":1547554161342,\"messaging\":[{\"sender\":{\"id\":\"2615755305117695\"},\"recipient\":{\"id\":\"442074219660955\"},\"timestamp\":1547554161328,\"delivery\":{\"mids\":[\"f1hobIb8qnCdDKoMqJarJidUon6XS4Mpv3l-OssNO5J2Q32dyRtG1BaFwXmcUFN-ki09-UzdKJur9DY2nkg4TA\"],\"watermark\":1547554160409,\"seq\":0}}]}]}', '2019-01-15 06:09:20', '2019-01-15 06:09:20'),
(49, '{\"object\":\"page\",\"entry\":[{\"id\":\"442074219660955\",\"time\":1547554161329,\"messaging\":[{\"sender\":{\"id\":\"2615755305117695\"},\"recipient\":{\"id\":\"442074219660955\"},\"timestamp\":1547554161324,\"delivery\":{\"watermark\":1547554160409,\"seq\":0}}]}]}', '2019-01-15 06:09:20', '2019-01-15 06:09:20'),
(50, '{\"object\":\"page\",\"entry\":[{\"id\":\"442074219660955\",\"time\":1547554162816,\"messaging\":[{\"sender\":{\"id\":\"2615755305117695\"},\"recipient\":{\"id\":\"442074219660955\"},\"timestamp\":1547554162803,\"delivery\":{\"mids\":[\"lpTjjsYqbTw1XfPtUpYy_ydUon6XS4Mpv3l-OssNO5Lca38noUbrGnELjUpYwV6IG1N1G_PL8qzlRrTv786-2Q\"],\"watermark\":1547554160409,\"seq\":0}}]}]}', '2019-01-15 06:09:22', '2019-01-15 06:09:22');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_setup` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `activePages` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `fb_id`, `user_type`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `is_setup`, `activePages`) VALUES
(23, 'Nam Porichoyhin', '1915328348562881', 'vendor', 'rockey.opu@gmail.com', '$2y$10$j64a5LXRFerPR9AieEiYGeRk31molIVUTKwl9RiI4WzUrYIp1CyOy', NULL, '2019-01-13 06:14:25', '2019-01-13 06:14:25', 'yes', '370138096875935'),
(25, 'Ashis Kumar', '230013841241181', 'vendor', 'nirurmi003@gmail.com', '$2y$10$uk3eO6A5KRwcB9PlYwbO7uUHwdu3TM.STqwa2Jh8StC8shH30R0pS', NULL, '2019-01-14 02:59:35', '2019-01-14 02:59:35', 'yes', '442074219660955');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fb_feed`
--
ALTER TABLE `fb_feed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fb_feed`
--
ALTER TABLE `fb_feed`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

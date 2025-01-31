-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2025 at 01:58 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `about-me-page`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `account_id` tinyint(4) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `Type` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`account_id`, `username`, `password`, `Type`) VALUES
(22, 'frank', '1234', 3),
(23, 'steven', '1234', 1);

-- --------------------------------------------------------

--
-- Table structure for table `code`
--

CREATE TABLE `code` (
  `ID` tinyint(4) NOT NULL,
  `Title` varchar(80) NOT NULL,
  `Carbon-Code` text NOT NULL,
  `Description` text NOT NULL,
  `Language` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `code`
--

INSERT INTO `code` (`ID`, `Title`, `Carbon-Code`, `Description`, `Language`) VALUES
(3, 'Display flex', '<iframe\r\n  src=\"https://carbon.now.sh/embed?bg=rgba%28171%2C+184%2C+195%2C+1%29&t=one-dark&wt=none&l=css&width=680&ds=true&dsyoff=20px&dsblur=68px&wc=true&wa=true&pv=56px&ph=56px&ln=false&fl=1&fm=Hack&fs=14px&lh=133%25&si=false&es=2x&wm=false&code=%2523div%257B%250A%2520%2520display%253A%2520flex%253B%250A%257D\"\r\n  style=\"width: 268px; height: 225px; border:0; transform: scale(1); overflow:hidden;\"\r\n  sandbox=\"allow-scripts allow-same-origin\">\r\n</iframe>', 'Flexbox is used for layouts in html/css', 2),
(6, 'html form', '<iframe\r\n  src=\"https://carbon.now.sh/embed?bg=rgba%28171%2C+184%2C+195%2C+1%29&t=one-dark&wt=none&l=htmlmixed&width=680&ds=true&dsyoff=20px&dsblur=68px&wc=true&wa=true&pv=56px&ph=56px&ln=false&fl=1&fm=Hack&fs=14px&lh=133%25&si=false&es=2x&wm=false&code=%252F%252FDit%2520is%2520een%2520post%2520form%250A%253Cform%2520method%253D%2522post%2522%253E%250A%2520%2520%2520%2520%2520%2520%2520%2520%253Clabel%2520for%253D%2522input1%2522%253Etitel%253C%252Flabel%253E%250A%2520%2520%2520%2520%2520%2520%2520%2520%253Cinput%2520name%253D%2522input1%2522%2520type%253D%2522text%2522%253E%250A%2520%2520%2509%2509%253Clabel%2520for%253D%2522input2%2522%253Etitel%253C%252Flabel%253E%250A%2520%2520%2520%2520%2520%2520%2520%2520%253Cinput%2520name%253D%2522input2%2522%2520type%253D%2522text%2522%253E%250A%2520%2520%2520%2520%2520%2520%2520%253Cinput%2520type%253D%2522submit%2522%253E%250A%253C%252Fform%253E%250A%252F%252FDit%2520is%2520een%2520get%2520form%250A%253Cform%2520method%253D%2522get%2522%253E%250A%2520%2520%2520%2520%2520%2520%2520%2520%253Clabel%2520for%253D%2522input1%2522%253Etitel%253C%252Flabel%253E%250A%2520%2520%2520%2520%2520%2520%2520%2520%253Cinput%2520name%253D%2522input1%2522%2520type%253D%2522text%2522%253E%250A%2520%2520%2509%2509%253Clabel%2520for%253D%2522input2%2522%253Etitel%253C%252Flabel%253E%250A%2520%2520%2520%2520%2520%2520%2520%2520%253Cinput%2520name%253D%2522input2%2522%2520type%253D%2522text%2522%253E%250A%2520%2520%2520%2520%2520%2520%2520%253Cinput%2520type%253D%2522submit%2522%253E%250A%253C%252Fform%253E\"\r\n  style=\"width: 479px; height: 467px; border:0; transform: scale(1); overflow:hidden;\"\r\n  sandbox=\"allow-scripts allow-same-origin\">\r\n</iframe>', 'Een html form kan data versturen via een post of een get. het verschil tussen een get en een post is dat een get de data opslaat in de url van de pagina. Dit is niet veilig omdat je deze informatie kan veranderen om op paginas te komen waar je niet mag komen', 1),
(7, 'Php echo', '<iframe\n  src=\"https://carbon.now.sh/embed?bg=rgba%28171%2C+184%2C+195%2C+1%29&t=one-dark&wt=none&l=text%2Fx-php&width=680&ds=true&dsyoff=20px&dsblur=68px&wc=true&wa=true&pv=56px&ph=56px&ln=false&fl=1&fm=Hack&fs=14px&lh=133%25&si=false&es=2x&wm=false&code=%252F%252Fmanier%25201%250A%253C%253Fphp%250A%2509%2524a%2520%253D%2520%2522manier%25201%2522%253B%250A%2520%2520%2509echo%2520%2524a%253B%2520%252F%252Fdit%2520laat%2520%2522manier%25201%2522%2520zien%2520in%2520de%2520browser%2522%250A%253F%253E%250A%252F%252Fmanier%25202.%250A%253C%253F%253D%2520%2522manier%25202%2522%253B%2520%253F%253E%2520%252F%252Fdit%2520laat%2520%2522manier%25202%2522%2520zien%2520in%2520de%2520browser%2522\"\n  style=\"width: 639px; height: 299px; border:0; transform: scale(1); overflow:hidden;\"\n  sandbox=\"allow-scripts allow-same-origin\" scrolling=\"no\">\n</iframe>', 'Met een echo kan je gegevens naar de browser sturen. Er zijn 2 manier om een echo te doen. ', 3),
(9, 'Insert query', '<iframe\r\n  src=\"https://carbon.now.sh/embed?bg=rgba%28171%2C+184%2C+195%2C+1%29&t=one-dark&wt=none&l=sql&width=680&ds=true&dsyoff=20px&dsblur=68px&wc=true&wa=true&pv=56px&ph=56px&ln=false&fl=1&fm=Hack&fs=14px&lh=133%25&si=false&es=2x&wm=false&code=INSERT%2520INTO%2520%2560table%2520name%2560%28%2560column1%2560%252C%2520%2560column2%2560%29%2520%250AVALUES%2520%28value1%252C%2520value2%29\"\r\n  style=\"width: 529px; height: 206px; border:0; transform: scale(1); overflow:hidden;\"\r\n  sandbox=\"allow-scripts allow-same-origin\">\r\n</iframe>', 'Met een insert query kan je data in een data base stoppen', 4);

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `id` int(11) NOT NULL,
  `language` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id`, `language`) VALUES
(1, 'html'),
(2, 'css'),
(3, 'php'),
(4, 'sql');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `code`
--
ALTER TABLE `code`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `language_fk` (`Language`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `account_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `code`
--
ALTER TABLE `code`
  MODIFY `ID` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `code`
--
ALTER TABLE `code`
  ADD CONSTRAINT `language_fk` FOREIGN KEY (`Language`) REFERENCES `language` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

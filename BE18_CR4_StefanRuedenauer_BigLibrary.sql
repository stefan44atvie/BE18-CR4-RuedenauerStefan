-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 25. Mrz 2023 um 16:37
-- Server-Version: 10.4.27-MariaDB
-- PHP-Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `BE18_CR4_StefanRuedenauer_BigLibrary`
--
CREATE DATABASE IF NOT EXISTS `BE18_CR4_StefanRuedenauer_BigLibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `BE18_CR4_StefanRuedenauer_BigLibrary`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `newlibrary`
--

CREATE TABLE `newlibrary` (
  `id` int(11) NOT NULL,
  `title` varchar(300) DEFAULT NULL,
  `image` varchar(300) DEFAULT NULL,
  `isbn` int(40) DEFAULT NULL,
  `short_description` varchar(1000) DEFAULT NULL,
  `type` varchar(30) DEFAULT NULL,
  `author_first_name` varchar(100) DEFAULT NULL,
  `author_last_name` varchar(100) DEFAULT NULL,
  `publisher_name` varchar(100) DEFAULT NULL,
  `publisher_address` varchar(100) DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `newlibrary`
--

INSERT INTO `newlibrary` (`id`, `title`, `image`, `isbn`, `short_description`, `type`, `author_first_name`, `author_last_name`, `publisher_name`, `publisher_address`, `publish_date`, `status`) VALUES
(19, 'Krieg der Welten', 'https://sfr-fotografie.at/wp-content/uploads/2020/10/unbenannt-vom-05.-September-2019-20-11_21345-800x1199.jpeg', 17428, 'von H. G. Wells. Unter der Regie von Steven Spielberg agieren die Schauspieler Tom Cruise, Dakota Fanning und Tim Robbins. In Deutschland sahen den Film mehr als 2,7 Mio. Kinozuschauer. Der Film startete am 14. Juni 2005 in den deutschen Kinos.', 'book', 'Igor Romanov', 'Wells', 'Random House Publishing NEW', 'Vienna', '2020-01-02', 'available'),
(20, 'Krieg der Welten', 'https://sfr-fotografie.at/wp-content/uploads/2020/10/unbenannt-vom-05.-September-2019-20-08_21338-800x534.jpeg', 7382978, 'Krieg der Welten ist ein US-amerikanischer Science-Fiction-Film, lose basierend auf dem gleichnamigen Roman von H. G. Wells. Unter der Regie von Steven Spielberg agieren die Schauspieler Tom Cruise, Dakota Fanning und Tim Robbins. In Deutschland sahen den Film mehr als 2,7 Mio. Kinozuschauer. Der Film startete am 14. Juni 2005 in den deutschen Kinos.', 'DVD', 'H.G.', 'Wells', 'Sony Pictures', 'London', '2017-02-02', 'available'),
(21, 'Schatz im Silbersee', 'https://www1.wdr.de/fernsehen/aktuelle-stunde/pierre-brice-fotostrecke-120~_v-gseapremiumxl.jpg', 73292898, ' der eigentlichen Handlung am Silbersee eine Silberader entdeckt und kehrt nun an den Silbersee zurück, um den Fund von einem Ingenieur namens Butler begutachten zu lassen und die Silberader anschließend auszubeuten. Auf der Reise zum Silbersee begegnet Old Firehand allerlei skurrilen Figuren wie dem wettbesessenen Lord Castlepool, dem stets in Reimen sprechenden Westmann Gunstick-Uncle und seinem buckligen Gefährten Humply-Bill. Später stoßen noch Winnetou, Old Shatterhand, der Hobble-Frank sowie der dicke Jemmy und der lange Davy dazu.', 'book', 'Karl', 'May', 'Amazon Publishing TEST', 'Germany', '2000-01-01', 'available'),
(22, 'Winnetou 1', 'https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/51rwJnxDd2L._RI_.jpg', 7328987, 'Der junge Apachenkrieger Schwarzer Adler soll für seinen Stamm einige Goldstücke vom Berg Nugget-tsil holen. Dabei fällt er dem Banditen Santer und seinen Leuten in die Hände, der ihn foltern lässt, um herauszubekommen, woher das Gold stammt. Da Schwarzer Adler schweigt und widerspenstig ist, erschießt einer von Santers Kumpanen den Indianer.', 'book', 'Karl', 'May', 'Egmont-Verlag JUN', 'Saarbrücken', '1967-03-02', 'available'),
(23, 'Old Firehand', 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRBa0LMG8MLfSM01EBCnDNiQ-5hY5k-myFdAwlmnuSS-I8WPdCi', 783683218, 'Ich-Erzähler reitet auf seinem Rappen Swallow durch die Prärie auf der Suche nach der Öl-Ansiedlung New Venango. Er trifft auf eine junge Frau, Ellen[6], die von der Siedlung kommt und ihn dorthin begleitet.  Sie erzählt ihm, dass ihr Vater ein Deutscher ist, ihre Mutter aber eine Indianerin war und dass Emery Forster[7] (der „Ölprinz“) ihr Onkel sei.  In der Siedlung angekommen, will Forster Swallow kaufen. Als der Ich-Erzähler das verweigert, wird er von Forster beleidigt, was er Ellen zuliebe hinnimmt. Ellen hält ihn daraufhin für einen Feigling und lässt ihn stehen.', 'DVD', 'Karl', 'May', 'Egmont-Verlag', 'Saarbrücken', '1963-01-01', 'reserved'),
(24, 'Die Bibel', 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b0/Gutenberg_Bible.jpg/440px-Gutenberg_Bible.jpg', 1, 'Als Bibel (altgriechisch βιβλία biblia ‚Bücher‘) oder (Die) Heilige Schrift bezeichnet man die wichtigste religiöse Textsammlung im Judentum wie auch im Christentum. Sie gilt Gläubigen als göttlich inspiriert, mindestens aber als orientierender Maßstab und wird darum im religiösen wie im kulturellen Leben immer wieder angeeignet. Die jüdische und die christliche Bibel haben sich im Lauf ihrer Entwicklung gegenseitig beeinflusst; sie sind parallel zueinander, teilweise in Abgrenzung voneinander entstanden.', 'book', 'Die 12', 'Apostel', 'The Holy Church', 'Vatican', '1900-01-01', 'available'),
(25, 'StarWars 1', 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Star_Wars_Logo.svg/400px-Star_Wars_Logo.svg.png', 72932735, 'Star Wars (englisch für Sternkriege) ist ein Film-Franchise, dessen Geschichte mit dem 1977 erschienenen Kinofilm Krieg der Sterne (Originaltitel: Star Wars) begann. Schöpfer von Star Wars ist der Drehbuchautor, Produzent und Regisseur George Lucas. Im Jahr 2012 verkaufte Lucas seine Firma Lucasfilm, mitsamt den Rechten an Star Wars, an die Walt Disney Company.', 'DVD', 'George', 'Lucas', 'Lucas Films', 'Las Vegas', '1973-01-01', 'reserved'),
(26, 'StarTrek', 'https://image.stern.de/31762206/t/X-/v2/w1440/r1.7778/-/06--ein-wiedersehen-mit-den-kult-stars---16-9---spoton-article-1019688.jpg', 8372, 'Star Trek (deutsch etwa: „Sternenreise“, „Sternentreck“, „Reise durchs All“) ist ein langlebiges US-amerikanisches Science-Fiction-Franchise, das der Filmproduktionsgesellschaft Paramount Pictures bzw. deren Mutterkonzern Paramount Global gehört. Es basiert auf der von Gene Roddenberry erdachten Fernsehserie Raumschiff Enterprise, die unter dem Titel Star Trek in den Vereinigten Staaten von 1966 bis 1969 erstausgestrahlt wurde. ', 'DVD', 'Gene', 'Roddenberry', 'Sony Pictures', 'Los Angeles', '2005-01-01', 'available'),
(27, 'Wirtschaft und Recht', 'https://sfr-fotografie.at/wp-content/uploads/2020/10/Wasserpark_2015-am-2015-12-25_785-800x533.jpeg', 20309321, 'Die von Paramount lizenzierten, ebenfalls zum Franchise gehörenden über 1000 Comics[1] und die in mehr als 700 Bänden erschienenen Romane und Kurzgeschichten gehören überwiegend nicht zum Kanon.', 'book', 'Andreas', 'Möller', 'Random House Publishing', 'Villach', '1982-03-09', 'available'),
(28, 'Die Antwort auf alles', 'https://sfr-fotografie.at/wp-content/uploads/2020/10/LNT_Lounge_Augarten-vom-06.-September-2018-19-50_19479.jpeg', 27439, 'e Fernsehserien und Kinofilme erschienen in zahlreichen Ländern und Sprachen, darunter auch auf Deutsch. Zu den wichtigsten der insgesamt über 100 Auszeichnungen für die Serien und Filme gehören 33 Emmy Awards, ein Oscar und mehrere Hugo Awards.', 'book', 'Jörg', 'Haider', 'Arthouse Publlishing', 'New York', '1999-03-20', 'reserved'),
(29, 'Stolz und Vorurteil', 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/17/PrideAndPrejudiceTitlePage.jpg/360px-PrideAndPrejudiceTitlePage.jpg', 742377, 'Stolz und Vorurteil[1] (Originaltitel 1813 Pride and Prejudice) ist der bekannteste Roman der britischen Schriftstellerin Jane Austen. ', 'book', 'Jane ', 'Austen', 'Fillhouse Books', 'London', '2000-03-23', 'available'),
(30, 'Einstieg in PHP 7 und MySQL', 'https://m.media-amazon.com/images/I/71rbfI7AyVL._AC_UF1000,1000_QL80_.jpg', 38362, 'Lernen Sie programmieren mit PHP! Dieses Buch begleitet Sie sicher bei Ihren ersten Schritten: von der Installation eines lokalen Webservers ', 'book', 'Thomas', ' Theis', 'Rheinwerk Computing', 'Deutschland', '2017-03-28', 'available');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `newlibrary`
--
ALTER TABLE `newlibrary`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `newlibrary`
--
ALTER TABLE `newlibrary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

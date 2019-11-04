-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2019 at 12:32 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dentacare`
--

-- --------------------------------------------------------

--
-- Table structure for table `firma`
--

CREATE TABLE `firma` (
  `id` int(6) NOT NULL,
  `naziv` varchar(255) CHARACTER SET utf16 COLLATE utf16_croatian_ci NOT NULL,
  `web` varchar(255) NOT NULL,
  `adresa` varchar(255) CHARACTER SET utf16 COLLATE utf16_croatian_ci NOT NULL,
  `firma_id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `firma`
--

INSERT INTO `firma` (`id`, `naziv`, `web`, `adresa`, `firma_id`) VALUES
(1, 'Dentacare', 'dentacare.bexter.rs', 'Tvrđavska bb, 18000 Niš, R Srbija', 1);

-- --------------------------------------------------------

--
-- Table structure for table `jezici`
--

CREATE TABLE `jezici` (
  `id` int(6) NOT NULL,
  `lat` text COLLATE utf8_croatian_ci NOT NULL,
  `eng` text COLLATE utf8_croatian_ci NOT NULL,
  `cir` text COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `jezici`
--

INSERT INTO `jezici` (`id`, `lat`, `eng`, `cir`) VALUES
(1, 'Naslovna', 'Home', 'Насловна'),
(2, 'O nama', 'About', 'О нама'),
(3, 'Usluge', 'Services', 'Услуге'),
(4, 'Doktori', 'Doctors', 'Доктори'),
(5, 'Kontakt', 'Contact', 'Контакт'),
(6, 'Blog', 'Blog', 'Блог\r\n'),
(7, ' Sva prava zadržana | Ovaj templejt je izradio od ', ' All rights reserved | This template is made with ', ' Сва права задржана | Овај темплејт је израдио од '),
(8, ' Temu obradio i doradio takođe od ', ' Theme edited and updated by also ', ' Тему обрадио и дорадио такође од '),
(9, 'Zakažite termin', 'Make an Appointment', 'Закажите термин'),
(10, 'Puno ime i prezime', 'Full name', 'Пуно име и презиме'),
(11, 'e-mail', 'e-mail', 'електронска пошта (е-маил)'),
(12, 'Datum', 'Date', 'Датум'),
(13, 'Vreme', 'Time', 'Време'),
(14, 'Poruka', 'Message', 'Порука'),
(15, 'Moderna stomatologija u mirnom i opuštenom okruženju', 'Modern Dentistry in a Calm and Relaxed Environment', 'Модерна стоматологија у мирном и опуштеном окружењу'),
(16, 'Postignite savršen osmeh koji ste dugo želeli', 'Achieve the perfect smile that you long wanted', 'Постигните савршен осмех који сте дуго желели'),
(17, 'Telefon', 'Phone', 'Телефон'),
(18, 'Mi smo tu da brinemo o estetici i zdravlju Vaših zuba', 'We are here to take care of the aesthetics and health of your teeth', 'Ми смо ту да бринемо о естетици и здрављу Ваших зуба'),
(19, 'Nudimo širok izbor usluga iz oblasti stomatologije', 'We offer a wide range of dentistry services', 'Нудимо широк избор услуга из области стоматологије'),
(20, 'Koristimo samo originalne proizvode visokog kvaliteta', 'We use only genuine high quality products', 'Користимо само оригиналне производе високог квалитета'),
(21, 'Vratite sjaj svom osmehu', 'Bring the glow to your smile', 'Вратите сјај свом осмеху'),
(22, 'Dobrodošli u stomatološku ordinaciju ', 'Welcome to Dental Practice', 'Добродошли у стоматолошку ординацију '),
(23, 'Upoznajte Naše Iskusne Zubare', 'Meet Our Experience Dentist', 'Упознајте Наше Искусне Зубаре'),
(24, 'Zubar', 'Dentist', 'Зубар'),
(25, 'Dostignuća', 'Achievements', 'Достигнућа'),
(26, 'Godina Iskustva', 'Years of Experience', 'Годинa Искуства'),
(27, 'Kvalifikovanih Stomatologa', 'Qualified Dentist', 'Квалификованих стоматолога '),
(28, 'Zadovoljnih i Nasmejanih Klijenata', 'Happy Smiling Customer', 'Задовољних и Насмејаних Клијената'),
(29, 'Pacijenata Godišnje', 'Patients Per Year', 'Пацијената Годишње'),
(30, 'Naš Cenovnik', 'Our Best Pricing', 'Наш Ценовник'),
(31, 'Tekst koji dostavite a tiče se ovog odeljka', 'The text you provide for this section', 'Текст који доставите а тиче се овог одељка '),
(32, 'Pružamo servis dijagnostike', 'Diagnostic Services', 'Пружамо сервис дијагностике'),
(33, 'Profesionalna konsultacija', 'Professional Consultation', 'Професионална консултација'),
(34, 'Zubni Implanti', 'Tooth Implants', 'Зубни Импланти'),
(35, 'Vađenje zuba оperacijom', 'Surgical Extractions', 'Вађење зуба операцијом'),
(36, 'Beljenje Zuba', 'Teeth Whitening', 'Бељење зуба'),
(37, 'Prijavite se za naše novosti', 'Subcribe to our Newsletter', 'Пријавите се за наше новости'),
(38, 'Svedočenje', 'Testimony', 'Сведочење'),
(39, 'Šta naši zadovoljni korisnici kažu', 'Our Happy Customer Says', 'Шта наши задовољни корисници кажу'),
(40, 'Poslednji Blog', 'Latest Blog', 'Последњи Блог'),
(41, 'Pogledajte našu besplatnu ponudu', 'Get a Free Quote', 'Погледајте нашу бесплатну понуду'),
(42, 'Procedura &amp; Usluge visokog kvaliteta', 'Procedure &amp; High Quality Services', 'Процедурa &amp; Услуге високог квалитета'),
(43, 'Adresa', 'Address', 'Адреса'),
(44, 'Anesteziolog', 'Anesthesiologist', 'Анестезиолог '),
(45, 'Veb sajt', 'Website', 'Веб сајт'),
(47, 'Hitni slučajevi', 'Emergency Cases ', 'Хитни случајеви'),
(48, 'Radno vreme', 'Opening Hours', 'Радно време'),
(49, 'Ponedeljak - petak', 'Monday - Friday', 'Понедељак - петак'),
(50, 'Subotom', 'Saturday', 'Суботом'),
(51, 'Nedeljom', 'Sunday', 'Недељом '),
(52, 'Tekst koji se odnosi na grupu u kojoj se nalazi.', 'The text that relates to the group in which it is located.', 'Текст који се односи на групу у којој се налази.'),
(53, 'Naše usluge Vas održavaju nasmejanim', 'Our Service Keeps you Smile', 'Наше услуге Вас одржавају насмејаним'),
(54, 'Tekst koji objavljujete prilikom pisanja bloga.', 'Text you post when writing a blog.', 'Текст који објављујете приликом писања блога.'),
(55, 'Čišćenje zuba', 'Teeth Cleaning', 'Чишћење зуба'),
(56, 'Kvalitetne proteze', 'Quality Brackets', 'Квалитетне протезе'),
(57, 'Moderne anestezije', 'Modern Anesthetic', 'Модерне анестезије'),
(58, 'Odeljenja', 'Departments', 'Одељења'),
(59, 'Uspešno ste zakazali termin!', 'Successfully maked an Appointment!', 'Успешно сте заказали термин!'),
(60, 'Uspešno ste potvrdili termin!', 'Successfully verified an Appointment!', 'Успешно сте потврдили термин!\r\n'),
(61, 'Intervencija evidentirana kao uspešno  okončana!', 'Intervention registered as successfully completed!', 'Интервенција евидентирана као успешно  окончана!'),
(62, 'Da li ste sigurni da želite da otkažete termin?', 'Are you sure you want to cancel an Appointment?', 'Да ли сте сигурни да желите да откажете термин?'),
(63, 'Nažalost, izabrani termin je zauzet... Izaberite drugi.', 'Unfortunately, the selected term is busy ... Choose another one.', 'Нажалост, изабрани термин је заузет ... Изаберите други.'),
(64, 'Datum rođenja', 'Date of birth', 'Датум рођења'),
(65, 'Prečice', 'Quick Links', 'Пречице'),
(66, 'Karakteristike', 'Features', 'Карактеристике'),
(67, 'Projekti', 'Projects', 'Пројекти'),
(68, 'Blog', 'Blog', 'Блог'),
(69, 'Najčitaniji blogovi', 'Recent Blog', 'Најчитанији блогови'),
(70, '15.septembar 2018.', 'Sept 15, 2018', '15.септембар 2018.'),
(71, 'Sedište', 'Office', 'Седиште'),
(72, ' - visoko profesionalno', ' with personal touch', ' - високо професионално'),
(73, 'Veoma iskusni stomatolozi', 'Well Experience Dentist', 'Веома искусни стоматолози'),
(74, 'Ustanova sa visokom tehnologijom', 'High Technology Facilities', 'Установе са високом технологијом'),
(75, 'Komforne klinike', 'Comfortable Clinics', 'Комфорне клинике'),
(76, 'Osnovni', 'Basic', 'Основни'),
(77, 'Naručite...', 'Order now', 'Наручите...'),
(78, 'tretman', 'session', 'третман'),
(79, 'Upišite e-mail adresu', 'Enter email address', 'Упишите адресу е-поште'),
(80, 'Prijavite se', 'Subscribe', 'Пријавите се'),
(81, 'Sistem analitičar', 'System Analyst', 'Систем аналитичар'),
(82, 'Dostignuća', 'Achievements', 'Достигнућа'),
(83, 'Godina iskustva', 'Years of Experience', 'Година искуства'),
(84, 'Kvalitenih stomatologa', 'Qualified Dentist', 'Квалитетних стоматолога'),
(85, 'Zadovoljnih pacijenata', 'Happy Smiling Customer', 'Задовољних пацијената'),
(86, 'Standard', 'Standard', 'Стандард'),
(87, 'Premijum', 'Premium', 'Премијум'),
(88, 'Platinum', 'Platinum', 'Платина'),
(89, 'Sva prava zadržana | Ovaj templejt je izradio od', 'All rights reserved | This template is made with', 'Сва права задржана | Овај образац је израдио од');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `osoblje`
--

CREATE TABLE `osoblje` (
  `id` int(6) NOT NULL,
  `ime` varchar(255) NOT NULL,
  `lozinka` varchar(255) NOT NULL,
  `rola` int(6) NOT NULL,
  `naziv` varchar(255) CHARACTER SET utf16 COLLATE utf16_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `osoblje`
--

INSERT INTO `osoblje` (`id`, `ime`, `lozinka`, `rola`, `naziv`) VALUES
(1, 'jovan', '5da374d270f7fff0a814a2c975107e6f', 1, 'Jovan Petković'),
(2, 'boban', '7bd004f0c5d9285e566f9bf433ec5eae', 2, 'Boban Petković');

-- --------------------------------------------------------

--
-- Table structure for table `pacijenti`
--

CREATE TABLE `pacijenti` (
  `id` int(6) NOT NULL,
  `ime` varchar(255) CHARACTER SET utf8 COLLATE utf8_croatian_ci DEFAULT NULL,
  `jmbg` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefon` varchar(255) NOT NULL,
  `adresa` varchar(255) CHARACTER SET utf16 COLLATE utf16_croatian_ci NOT NULL,
  `aktivan` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `kreirao` int(6) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `menjao` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pacijenti`
--

INSERT INTO `pacijenti` (`id`, `ime`, `jmbg`, `email`, `telefon`, `adresa`, `aktivan`, `created_at`, `kreirao`, `updated_at`, `menjao`) VALUES
(1, 'Petar Perić', '1.2.1973.', 'petar@peric.com', '064/2589977', 'Somborska 100, Niš', 1, '2019-06-15 11:04:23', 1, '2019-06-17 18:40:14', 1),
(2, 'Anita Delić', '11.2.1973.', 'delic@anita.com', '063/2288449', 'Knjaževačka 255, Niš', 1, '2019-06-15 11:41:11', 2, '2019-06-17 18:40:14', 2),
(3, 'Milutin Marković', '2.5.1986.', 'milutin@markovic.com', '063/4856231', 'Prvonečka 5, Vranje', 1, '2019-06-16 13:06:53', 2, '2019-06-17 18:40:14', 2),
(4, 'Filip Višnjić', '02.06.2001.', '', '060/2583694', 'Mavrovska 5, Beograd', 1, '2019-06-16 14:03:33', 1, '2019-06-17 18:40:14', 1),
(5, 'Ristić Rista', '21.12.1973.', 'rista@gmail.com', '065/154466', '', 1, '2019-06-10 06:17:03', 1, '2019-06-17 18:40:14', 1),
(6, 'Rajka Rajković', '25.03.1973.', 'rajka@bexter.rs', '064/1234560', '', 1, '2019-06-10 06:36:38', 2, '2019-06-17 18:40:14', 2),
(7, 'Marko Marković', '05.04.1973.', 'marko@gmail.com', '063/2130122', '', 1, '2019-06-10 10:00:05', 1, '2019-06-17 18:40:14', 1),
(8, 'Srđan Jovković', '04.09.2000.', 'srdjan@gmail.com', '065/15151515', '', 1, '2019-06-10 19:46:31', 2, '2019-06-17 18:40:14', 2),
(9, 'Mile Davidović', '08.09.1975.', 'mile@bexter.rs', '061/1511556', '', 1, '2019-06-10 20:46:54', 1, '2019-06-17 18:40:14', 1),
(10, 'Jovan Petković', '08.03.2001.', 'jovan@bexter.rs', '064/2586397', '', 1, '2019-06-10 22:24:23', 2, '2019-06-17 18:40:14', 2),
(11, 'Ninoslav Dumitru', '18.10.1967.', '', '064/4441512', '', 1, '2019-06-11 07:07:10', 1, '2019-06-17 18:40:14', 1),
(12, 'Mikić S. Dragutin', '11.08.1970.', '', '064/4481512', '', 1, '2019-06-11 07:43:12', 2, '2019-06-17 18:40:14', 1),
(13, 'Jelena Gugleta', '11.07.1970.', '', '064/5588667', '', 1, '2019-06-11 07:45:54', 1, '2019-06-17 18:40:14', 1),
(14, 'Stevo Durnu', '10.10.1967.', 'stevo@durnu.com', '065/7744489', '', 1, '2019-06-12 20:42:21', 2, '2019-06-17 18:40:14', 2),
(15, 'Marina Živković', '05.04.2002.', '', '063/1274568', 'Stevana Sremca 7\r\n\r\n', 1, '2019-06-13 12:51:20', 2, '2019-06-17 18:40:14', 2),
(16, 'Tamara Bunjak', '22.08.1970.', '', '061/2522555', '', 1, '2019-06-13 19:35:56', 1, '2019-06-17 18:40:14', 1),
(17, 'Ilić S. Anita', '6.7.1966.', '', '065/4848566', '', 1, '2019-06-13 19:38:54', 2, '2019-06-17 20:14:40', 2),
(18, 'Nikolić Zoran', '0102973730065', '', '064/858555', '', 1, '2019-06-13 19:39:36', 1, '2019-06-17 18:40:14', 1),
(19, 'Ivo Andrić', '02.02.1916.', '', '065/8589964', '', 1, '2019-06-13 19:50:19', 2, '2019-06-17 18:40:14', 2),
(20, 'Dragana Kocić', '03.06.1969.', '', '062/8596742', '', 1, '2019-06-13 19:51:04', 1, '2019-06-17 18:40:14', 1),
(21, 'Srđan Demirović', '0102973730068', '', '062/1511856', '', 1, '2019-06-13 20:09:01', 2, '2019-06-17 18:40:14', 2),
(22, 'Alen Islamović', '05.04.1970.', '', '065/4841596', '', 1, '2019-06-13 20:09:16', 2, '2019-06-17 18:40:14', 2),
(23, 'Todorović Milan', '05.02.2000.', '', '065/7704489', 'Vojvode Vuka 13\r\n', 1, '2019-06-13 20:09:35', 1, '2019-06-17 18:40:14', 1),
(24, 'Srđan Demirović', '0102973730071', '', '065/4848696', '', 0, '2019-06-13 20:22:41', 2, '2019-06-18 10:37:44', 2),
(25, 'Marko marković', '0102973730072', '', '065/2848596', '', 0, '2019-06-13 20:23:02', 1, '2019-06-18 08:22:37', 1),
(26, 'Mile Davidović', '0102973730073', '', '065/7744919', '', 0, '2019-06-13 20:26:25', 1, '2019-06-18 10:36:07', 1),
(27, 'Milena Tošić', '02.03.1965.', '', '063/1234564', 'Belopalanačka 5, Niš', 0, '2019-06-15 08:35:45', 2, '2019-06-17 18:40:14', 2),
(28, 'Mitar Mirić', '1213968240056', '', '063/1230568', '', 1, '2019-06-15 08:40:13', 2, '2019-06-17 18:40:14', 2),
(29, 'Dragan Nikolić', '05.06.1964.', '', '018/258487', '', 1, '2019-06-15 08:46:41', 1, '2019-06-18 08:24:46', 1),
(30, 'Mitar Sevdić', '0205999664666', '', '065/54654545', '', 1, '2019-06-15 21:08:54', 2, '2019-06-17 18:40:14', 2),
(31, 'Dejan Dejanović', '15.06.1986', '', '063/1122233', '', 1, '2019-06-16 11:57:06', 1, '2019-06-17 18:40:14', 2),
(32, 'Dejan Dejanović', '15.11.1966.', '', '062/1511056', '', 0, '2019-06-16 11:58:25', 2, '2019-06-19 04:25:07', 1),
(33, 'Vesna Milošević', '0506984124578', '', '061/2584796', '', 1, '2019-06-16 12:12:53', 1, '2019-06-17 18:40:14', 1),
(34, 'Goran Dašić', '11.01.1976.', '', '062/4859663', '', 1, '2019-06-17 18:42:09', 9999, '2019-06-17 18:42:09', 9999),
(35, 'Todorov Velimir', '12.01.2002.', '', '061/4122336', '', 1, '2019-06-17 18:54:17', 9999, '2019-06-17 18:54:17', 9999),
(36, 'Sergej Voronjin', '02.01.1996.', '', '063/7182936', 'Svetosavska 6, Leskovac', 0, '2019-06-17 19:05:10', 2, '2019-06-17 20:06:25', 2),
(37, 'Sergej Voronjin', '02.01.1996.', '', '063/7182936', 'Svetosavska 6, Leskovac', 1, '2019-06-17 19:13:24', 2, '2019-06-17 19:13:24', 2),
(38, 'Sergej Voronjin', '02.01.1996.', '', '063/7182936', 'Svetosavska 6, Leskovac', 0, '2019-06-17 19:14:07', 2, '2019-06-17 20:13:34', 2),
(39, 'Sergej Voronjin', '02.01.1996.', '', '063/7182936', 'Svetosavska 6, Leskovac', 0, '2019-06-17 19:14:35', 2, '2019-06-17 20:09:09', 2);

-- --------------------------------------------------------

--
-- Table structure for table `termini`
--

CREATE TABLE `termini` (
  `id` int(10) NOT NULL,
  `ime` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `jmbg` varchar(13) COLLATE utf8_croatian_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_croatian_ci DEFAULT NULL,
  `telefon` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `datum` date NOT NULL,
  `vreme` time NOT NULL,
  `poruka` text COLLATE utf8_croatian_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `potvrda` tinyint(1) NOT NULL DEFAULT '0',
  `potvrdio` int(6) NOT NULL,
  `potvrdioDatum` timestamp NULL DEFAULT NULL,
  `odradjen` tinyint(1) NOT NULL DEFAULT '0',
  `uneo` int(6) NOT NULL,
  `uneoDatum` timestamp NULL DEFAULT NULL,
  `otkaz` tinyint(1) NOT NULL DEFAULT '0',
  `otkazao` int(6) NOT NULL,
  `otkazaoDatum` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `termini`
--

INSERT INTO `termini` (`id`, `ime`, `jmbg`, `email`, `telefon`, `datum`, `vreme`, `poruka`, `created_at`, `updated_at`, `potvrda`, `potvrdio`, `potvrdioDatum`, `odradjen`, `uneo`, `uneoDatum`, `otkaz`, `otkazao`, `otkazaoDatum`) VALUES
(3, 'Ristić Rista', '21.12.1973.', 'rista@gmail.com', '065/154466', '2019-06-22', '10:00:00', 'Izbeljivanje zuba', '2019-06-10 06:17:03', '2019-06-11 15:40:37', 0, 0, NULL, 0, 0, NULL, 0, 0, NULL),
(4, 'Rajka Rajković', '25.03.1973.', 'rajka@bexter.rs', '064/1234560', '2019-07-05', '09:00:00', 'Vađenje zuba', '2019-06-10 06:36:38', '2019-06-11 10:39:33', 0, 0, NULL, 0, 0, NULL, 0, 0, NULL),
(6, 'Marko Marković', '05.04.1973.', 'marko@gmail.com', '063/2130122', '2019-06-25', '05:30:00', 'Lečenje umnjaka', '2019-06-10 10:00:05', '2019-06-13 16:45:20', 0, 0, NULL, 0, 0, NULL, 0, 0, NULL),
(7, 'Srđan Jovković', '04.09.2000.', 'srdjan@gmail.com', '065/15151515', '2019-06-29', '08:30:00', 'Proteza kontrola', '2019-06-10 19:46:31', '2019-06-13 19:30:12', 1, 1, '2019-06-13 07:06:10', 0, 0, NULL, 0, 0, NULL),
(8, 'Mile Davidović', '08.09.1975.', 'mile@bexter.rs', '061/1511556', '2019-07-16', '08:00:00', 'Pregled', '2019-06-10 20:46:54', '2019-06-11 16:11:14', 0, 0, NULL, 0, 0, NULL, 0, 0, NULL),
(9, 'Jovan Petković', '08.03.2001.', 'jovan@bexter.rs', '064/2586397', '2019-06-27', '09:30:00', 'Beljenje zuba', '2019-06-10 22:24:23', '2019-06-12 20:20:10', 0, 0, NULL, 0, 0, NULL, 0, 0, NULL),
(10, 'Ninoslav Dumitru', '18.10.1967.', '', '064/4441512', '2019-07-03', '11:30:00', 'Pregled', '2019-06-11 07:07:10', '2019-06-13 12:53:56', 0, 0, NULL, 0, 0, NULL, 0, 0, NULL),
(11, 'Mikić Mika', '11.08.1970.', '15.03.2000.', '064/4481512', '2019-07-05', '12:00:00', 'Beljenje Zuba', '2019-06-11 07:43:12', '2019-06-11 10:44:10', 0, 0, NULL, 0, 0, NULL, 0, 0, NULL),
(12, 'Jelena Gugleta', '11.07.1970.', '', '064/5588667', '2019-07-03', '07:30:00', 'Tretman zuba', '2019-06-11 07:45:54', '2019-06-12 19:28:26', 0, 0, NULL, 0, 0, NULL, 0, 0, NULL),
(13, 'Stevo Durnu', '10.10.1967.', '', '065/7744489', '2019-07-23', '01:00:00', 'Moderne anestezije', '2019-06-12 20:42:21', '2019-06-12 20:42:21', 0, 0, NULL, 0, 0, NULL, 0, 0, NULL),
(14, 'Mitar Mirić', '05.04.2002.', '', '063/1274568', '2019-06-18', '01:00:00', 'Pregled desni', '2019-06-13 12:51:20', '2019-06-16 10:47:54', 1, 1, '2019-06-16 10:06:54', 0, 0, NULL, 0, 0, NULL),
(15, 'Tamara Bunjak', '3.1.1955.', '', '061/2522555', '2019-06-14', '09:00:00', 'Pregled', '2019-06-13 19:35:56', '2019-06-13 19:35:56', 0, 0, NULL, 0, 0, NULL, 0, 0, NULL),
(16, 'Ilić Anita', '6.7.1966.', '', '065/4848566', '2019-07-06', '07:30:00', 'Pregled', '2019-06-13 19:38:54', '2019-06-13 19:38:54', 0, 0, NULL, 0, 0, NULL, 0, 0, NULL),
(17, 'Nikolić Zoran', '0102973730065', '', '064/858555', '2019-06-26', '11:00:00', 'Kvalitetne proteze', '2019-06-13 19:39:36', '2019-06-13 19:39:36', 0, 0, NULL, 0, 0, NULL, 0, 0, NULL),
(18, 'Ivo Andrić', '0102973730066', '', '065/8589964', '2019-08-01', '07:30:00', 'Pregled', '2019-06-13 19:50:19', '2019-06-13 19:50:19', 0, 0, NULL, 0, 0, NULL, 0, 0, NULL),
(19, 'Dragana Kocić', '0102973730067', '', '062/8596742', '2019-07-03', '11:30:00', 'Moderne anestezije', '2019-06-13 19:51:04', '2019-06-13 19:51:04', 0, 0, NULL, 0, 0, NULL, 0, 0, NULL),
(20, 'fsdsd', '0102973730068', '', '062/1511856', '2019-06-19', '12:30:00', 'xdvsds', '2019-06-13 20:09:01', '2019-06-13 20:09:01', 0, 0, NULL, 0, 0, NULL, 0, 0, NULL),
(21, 'asdafafa', '0102973730069', '', '065/4841596', '2019-06-26', '01:00:00', 'sadfsdfs', '2019-06-13 20:09:16', '2019-06-13 20:09:16', 0, 0, NULL, 0, 0, NULL, 0, 0, NULL),
(22, 'hfghrgfs', '0102973730070', '', '065/7704489', '2019-06-06', '01:30:00', 'sfdfbdgbfg', '2019-06-13 20:09:35', '2019-06-16 10:47:58', 1, 1, '2019-06-16 10:06:53', 1, 1, '2019-06-16 10:06:58', 0, 0, NULL),
(23, 'afs dfs', '0102973730071', '', '065/4848696', '2019-07-03', '07:30:00', 'dfsdfsd', '2019-06-13 20:22:41', '2019-06-13 20:22:41', 0, 0, NULL, 0, 0, NULL, 0, 0, NULL),
(24, 'Marko marković', '0102973730072', '', '065/2848596', '2019-07-03', '07:30:00', 'sfsdf', '2019-06-13 20:23:02', '2019-06-13 20:23:02', 0, 0, NULL, 0, 0, NULL, 0, 0, NULL),
(25, 'Mile Davidović', '0102973730073', '', '065/7744919', '2019-07-03', '07:30:00', ';oijkm', '2019-06-13 20:26:25', '2019-06-13 20:26:25', 0, 0, NULL, 0, 0, NULL, 0, 0, NULL),
(26, 'Mitar Mirić', '0203957720024', '', '063/1234564', '2019-09-04', '08:00:00', 'oiuhgbnm', '2019-06-15 08:35:45', '2019-06-15 08:35:45', 0, 0, NULL, 0, 0, NULL, 0, 0, NULL),
(27, 'Mitar Mirić', '1213968240056', '', '063/1230568', '2019-07-18', '11:30:00', 'Teeth Cleaning', '2019-06-15 08:40:13', '2019-06-15 08:40:13', 0, 0, NULL, 0, 0, NULL, 0, 0, NULL),
(28, 'Dragan Nikolić', '0506964735024', '', '018/258487', '2019-06-25', '09:00:00', 'Tretman zuba', '2019-06-15 08:46:41', '2019-06-15 08:46:41', 0, 0, NULL, 0, 0, NULL, 0, 0, NULL),
(29, 'Mitar Sevdić', '0205999664666', '', '065/54654545', '2019-11-29', '00:00:00', 'koj', '2019-06-15 21:08:54', '2019-06-15 21:08:54', 0, 0, NULL, 0, 0, NULL, 0, 0, NULL),
(30, 'Dejan Dejanović', '1506988546598', '', '063/1122233', '2019-07-18', '08:30:00', 'Izbeljivanje zuba', '2019-06-16 11:57:06', '2019-06-16 11:57:06', 0, 0, NULL, 0, 0, NULL, 0, 0, NULL),
(31, 'Dejan Dejanović', '1511966123456', '', '062/1511056', '2019-06-27', '09:00:00', 'Izbeljivanje zuba', '2019-06-16 11:58:25', '2019-06-16 11:58:25', 0, 0, NULL, 0, 0, NULL, 0, 0, NULL),
(32, 'Vesna Milošević', '0506984124578', '', '061/2584796', '2019-08-02', '15:00:00', 'Pregled', '2019-06-16 12:12:53', '2019-06-16 12:12:53', 0, 0, NULL, 0, 0, NULL, 0, 0, NULL),
(33, 'Miletić Marko', '11.02.1988.', '', '065/7878999', '2019-06-29', '13:30:00', 'Pregled', '2019-06-17 18:40:15', '2019-06-17 18:40:15', 0, 0, NULL, 0, 0, NULL, 0, 0, NULL),
(34, 'Goran Dašić', '11.01.1976.', '', '062/4859663', '2019-06-27', '13:00:00', 'Popravka zuba', '2019-06-17 18:42:09', '2019-06-17 18:42:09', 0, 0, NULL, 0, 0, NULL, 0, 0, NULL),
(35, 'Todorov Velimir', '12.01.2002.', '', '061/4122336', '2019-07-02', '16:00:00', 'Pregled', '2019-06-17 18:54:17', '2019-06-17 18:54:17', 0, 0, NULL, 0, 0, NULL, 0, 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `firma`
--
ALTER TABLE `firma`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jezici`
--
ALTER TABLE `jezici`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `osoblje`
--
ALTER TABLE `osoblje`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pacijenti`
--
ALTER TABLE `pacijenti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `termini`
--
ALTER TABLE `termini`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `telefon` (`telefon`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `firma`
--
ALTER TABLE `firma`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `jezici`
--
ALTER TABLE `jezici`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
--
-- AUTO_INCREMENT for table `osoblje`
--
ALTER TABLE `osoblje`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pacijenti`
--
ALTER TABLE `pacijenti`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `termini`
--
ALTER TABLE `termini`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

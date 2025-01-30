-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2025 at 12:49 PM
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
-- Database: `book`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `isbn` varchar(13) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `authors` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `cover_url` varchar(255) DEFAULT NULL,
  `recommended_by` varchar(255) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `isbn`, `title`, `authors`, `description`, `cover_url`, `recommended_by`, `comment`, `added_on`) VALUES
(14, 'x03CywEACAAJ', 'Medemer', 'Abiy Ahmed', 'መደመር የተሰኘው ይህ መጽሐፍ የኖቤል የሰላም ሽልማት ተሸላሚና የወቅቱ የኢትዮጵያ ጠቅላይ ሚኒስትር ዶክተር ዐቢይ አሕመድ የሃገር መምራት ሃላፊነት ላይ ከመጡ በኋላ የጻፉት የመጀመሪያ መጽሐፋቸው ሲሆን፤ በይዘቱም ወቅታዊው የኢትዮጵያ የፖለቲካ መህዳር ሃገር በቀልና አዲስ የፖለቲካ አስተምህሮን ለማስተዋወቅ ታሪካዊ፣ ተግባራዊና አመክኔያዊ ገፊ ምክንያቶች ኢንደሚታዩበት ይሞግታል። እንደ መጽሐፉ የአዲስ ሃገር በቀል ፖለቲካዊ ርዕዮተአለም አስፈላጊነት የሚመነጨው ባለፈው ግማሽ ምዕተ-አመት በሃገራችን ወስጥ ከሌላው አለም እየተዋስን የሞከርናቸው ፖለቲካዊ አስተምህሮዎች የተባለላቸውን ያህል ውጤት ያላመጡበት አንዱ ምክንያት ለኢትዮጵያ ባህላዊና ታሪካዊ እሴቶች እንዲሁም ፖለቲካዊ ምህዳር ባዕድ መሆናቸው እንደሆነ ያስገነዝባል። በመሆኑም ይህን በሃገር ደረጃ የሚታይ በተውሶ ርዕዮተአለም የመዋለል ሃገራዊ ችግር ኢትዮጵያዊ ባህሎችንና ልማዶችን ተንተርሶ ሃገራዊ ችግርን የመፍታት አስፈላጊነትን በማጤን መደመርን እንደ ሃገር በቀልና አዲስ የፖለቲካ ርዕዮተ-አለማዊ አቅጣጫ ያመላክታል። መጽሐፉ አራት ክፍሎች ያሉት ሲሆን በዓለም ላይ የሚቀነቀኑ የተለያዩ ፍልስፍናዎችን በመዳሰስ ለሀገር በሚጠቅም መልኩ ቁም ነገራቸውን በመቅሰም የራሳችን የምንለው ችግራችንን ሊፈታ የሚችል መላ ማመላከት ላይ እንድናተኩር ይጋብዛል። ለዚህም እንስካሁን የተለመደውን የተነጣጠሉ ትናንሽ አቅሞችን ከመገንባት ባለፈ በመደመር ትልቅ ሃገራዊ ወረት መፍጠርን ያበረታታል። Medemer is the first book by Nobel Peace Prize awardee and Prime Minister of Ethiopia, Abiy Ahmed since he came to power in 2018. In the book, the prime minister advocates for a fresh, Ethiopian-centric approach to the country\'s politics, citing the past half-century when previous administrations applied successful ideologies and theories from outside of Ethiopia that failed, being alien to Ethiopian problems and realities. Abiy calls for reversing the trend of importing ideologies for a renewed Ethiopian political ideology that emanates from Ethiopia\'s social-political context and taps into the country\'s historical and cultural values.', 'http://books.google.com/books/content?id=x03CywEACAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', 'Adem Ahmed Bekar', 'this book is have not any .........', '2025-01-30 08:19:31'),
(15, 'OiGO-qd06RIC', 'PHP and MySQL For Dummies', 'Janet Valade', 'Build an online catalog and a members-only site Everything you need to know to create a dynamic PHP and MySQL Web site! Been thinking of creating a high-quality interactive Web site? This book is just what you need to get started! Here\'s the fun and easy way(r) to develop a Web application in PHP 4, 5, or 6 and MySQL 5, test your software, enable your Web pages to display, change, and move database information, and much more. Discover how to * Plan and implement a Web database application * Design and build a MySQL 5 database * Build dynamic HTML forms * Create scripts that store, retrieve, and update database information * Display database information in a Web page', 'http://books.google.com/books/content?id=OiGO-qd06RIC&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', 'Adem Ahmed Bekar', 'this the most useful book to learn php', '2025-01-30 08:23:39'),
(16, 'nANjQgAACAAJ', 'Long Walk to Freedom', 'Nelson Mandela', 'Memoirs of the president of the African National Congress and leader of the anti-apartheid movement. Publication coincides with the first multi-racial elections in South Africa', 'http://books.google.com/books/content?id=nANjQgAACAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', 'Sumeya Ahmednur', 'the most read book in history', '2025-01-30 08:26:18'),
(17, '0Sj3AgAAQBAJ', 'Muslim Names', 'Adam Marlow', 'The Prophet Muhammad, peace and blessings of Allah be upon him, always taught his followers that people should always be given names with good meanings so the could take on their attributes and and grow into the name. Not only being a representative for him or herself but for the rest of the Muslim Ummah. Because of this, the Prophet, peace and blessings of Allah be upon him, disliked names with no or bad meanings and told people to avoid them. Whether you are a revert, a parent or just someone that is curious about other names, this book could determine who you or someone you know will grow into insh?\' All?h. A persons name is one of the most important gift a parent can bestow on someone. Toys, clothes and books will eventually fade away in time but a persons name shall remain forever in sh?\' All?h. The editors searched around and we have been unable to find a larger compendium of muslim names anywhere. In print or in ebook for the English speaking reader. We pray that this book reaches you all in good health and Iman.', 'http://books.google.com/books/content?id=0Sj3AgAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', 'Hamza Dine', 'this book is recommended because of its usefulness', '2025-01-30 10:32:44'),
(20, '3N58DwAAQBAJ', 'Webservices', 'Hrushikesha Mohanty, Prasant Kumar Pattnaik', 'This book focuses on web service specification, search, composition, validation, resiliency, security and engineering, and discusses various service specification standards like WSDL, SAWSDL, WSMO and OWLS. The theory and associated algorithms for service specification verification are detailed using formal models like Petrinet, FSM and UML. The book also explores various approaches proposed for web service search and composition, highlighting input/output, parameter-based search, and selection of services based on both functional and non-functional parameters. In turn, it examines various types of composite web services and presents an overview of popular fault handling strategies for each of these types. Lastly, it discusses the standards used for implementing web service security on the basis of a case study, and introduces the Web Service Development Life Cycle (WSDLC), which defines co-operation between several industry partners to develop web services in a more structured way.', 'http://books.google.com/books/content?id=3N58DwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', 'Firisat Desalegn', 'Recommended', '2025-01-30 11:23:10'),
(21, 'bary0AEACAAJ', 'Hin Gaabuu - Jawaar Muhaammad', 'Jawar Mohammed', 'YAADANNOO - Qeerroofi Qarree ummata Oromootti kabajaa horuuf wareegamaniff. Yaadannoowwan Imla Jireenya Kiyyaatifi Qabsoo Qeerroo. Hin Gaabuu - Jawaar Muhaammad', 'http://books.google.com/books/content?id=bary0AEACAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', 'Adem Ahmed Bekar', 'Highly Recommeded', '2025-01-30 11:39:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 02, 2017 at 11:32 AM
-- Server version: 5.6.35
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `devnd11_quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `page_id` int(11) NOT NULL,
  `page_parent_id` int(11) NOT NULL,
  `page_title` text NOT NULL,
  `page_content` text NOT NULL,
  `page_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`page_id`, `page_parent_id`, `page_title`, `page_content`, `page_image`) VALUES
(1, 0, 'Introduction to PHP Tutorial', '<p style=\"text-align: justify;\"><span style=\"color: rgb(0, 0, 0);\">&nbsp; &nbsp; &nbsp;PHP Tutorial is an educational tool on the programming language PHP. It is a website that comprises a set of chapters briefly explaining the concepts of PHP. It covers the basic as well as advanced concepts of PHP. This tool is for users who already have had prior exposure to programming languages and have a basic understanding of programming. This tool does not teach the basics of programming. This section will describe the content and syllabus covered in the PHP Tutorial in detail. The layout of the chapters in the tutorial is:</span></p><ul><li>Introduction</li><li>PHP Language Basics</li><li>Decisions and Loops</li><li>Strings</li><li>Arrays</li><li>Functions</li><li>File Handling</li><li>Object Oriented PHP</li><li>PHP with HTML Forms</li><li>Sessions and Cookies</li><li>Quizzes<ul><li>Graded Quiz #1</li><li>Graded Quiz #2</li><li>Ungraded Quiz</li></ul></li></ul>', ''),
(2, 1, 'Introduction', '<p style=\"text-align: justify;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Programming languages currently are classified into types in a more practical way- classifying languages by problem-domain or in other words, context. This type of classification conveys a sense of practical use for a language</p><ul><li style=\"text-align: justify;\">System Languages</li><li style=\"text-align: justify;\">Architectural Languages</li><li style=\"text-align: justify;\">Application Languages</li></ul><p style=\"text-align: justify;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System languages are used to build Operating systems, hardware drivers, etc. These languages are fast and give the user low level access to the computer. These languages are used when speed is of critical importance. These languages include: C, C++, Assembler, etc. Architectural languages are best used to build frameworks that support application building. These languages are not as fast at run-time as system level languages, but they provide a higher level of abstraction that makes writing software quicker and more productive. These languages include: Java, C#, etc. Application Language are usually used to build business applications like we shopping carts, connecting to databases and creating the screens for users to interact with the database. These languages mainly include scripting languages like: PHP, Ruby, Perl, Python, etc. These languages allow for extremely fast development. Programmers are freed from the low-level details that they must contend with when working with architectural and system level languages. Being scripting languages, code written in these languages does not need to be compiled. It gets processed on the fly as necessary.</p><p style=\"text-align: justify;\"><strong>What is a scripting language?</strong></p><p style=\"text-align: justify;\"><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </strong>A script is a set of programming instructions that is interpreted at runtime. A scripting language is a language that interprets scripts at runtime. Scripts are usually embedded into other software environments. The purpose of the scripts is usually to enhance the performance or perform routine tasks for an application. Server side scripts are interpreted on the server while client side scripts are interpreted by the client application.</p><table style=\"margin-left: calc(0%); width: 100%;\"><thead><tr><th style=\"text-align: center;\">Programming Languages<br></th><th>Scripting Languages<br></th></tr></thead><tbody><tr><td>Has all the features needed to develop complete applications.<br></td><td>Mostly used for routine tasks<br></td></tr><tr><td>The code has to be compiled before it can be executed<br></td><td>The code has to be compiled before it can be executed<br></td></tr><tr><td>Does not need to be embedded into other languages<br></td><td>Is usually embedded into other software environments<br></td></tr></tbody></table><p><br></p><p><strong>PHP</strong></p><p style=\"text-align: justify;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Taken directly from PHP&#39;s home, PHP.net, &quot;PHP is an HTML-embedded scripting language. Much of its syntax is borrowed from C, Java and Perl with a couple of unique PHP-specific features thrown in. The goal of the language is to allow web developers to write dynamically generated pages quickly.&quot;</p><p style=\"text-align: justify;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; PHP stands for Hypertext Preprocessor, which gives a good idea of its core purpose: to process information and produce hypertext (HTML) as a result. PHP is a server-side scripting, which means that PHP scripts, are usually run on a Web Server. PHP is an interpreted language- a PHP script is processed by the PHP engine each time it&rsquo;s run.</p><p style=\"text-align: justify;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; PHP is a programming language for building dynamic and interactive websites. Generally, PHP programs run on a Web Server, and serve Web pages to visitors on request. A dynamic Web page is a page whose contents can change automatically each time the page is viewed. Contrast this with a static Web page, such as a simple HTML file, which looks the same each time it&rsquo;s displayed. An interactive website is a site that responds to input from its visitors. A web forum is a good example- users can post new messages to the forum, which are then displayed on the site for all to see. PHP is used in various applications and platforms&nbsp;</p><p style=\"text-align: justify;\">The following figure shows how PHP is used for creating web pages.</p><p style=\"text-align: center;\"><img class=\"fr-dib\" src=\"https://i.froala.com/download/5d9a9e955a87beaf7fbab360cba18b3924f2a13c.jpg?1501494314\" style=\"width: 600px; height: 400px;\"></p>', ''),
(3, 1, 'Environment Setup for PHP', '<p style=\"text-align: justify;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; To start programs in PHP a Web Server running PHP is required. The following are required to be installed to have a complete setup of PHP:</p><ul><li style=\"text-align: justify;\">A computer running Web server software, such as Apache or Internet Information Server (IIS)<ul><li>The PHP server module installed on the same computer. This module talks to the Web server software; this is the PHP engine that runs the PHP scripts.</li><li>Database Server (only if the user wants to build database-driven Web applications; PHP can run without this too)</li></ul></li></ul><p style=\"text-align: justify;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; If PHP is already installed correctly and accessible, users can check the version and date of the PHP installed using the following command through the command line as shown below</p><pre class=\"fr-text-spaced\" style=\"text-align: justify;\"><strong>$ php -v</strong></pre><p style=\"text-align: justify;\">This should result in the output as shown below</p><pre class=\"fr-text-spaced fr-text-gray fr-text-bordered\" style=\"text-align: justify;\"><strong>PHP 5.6.30 (cli) (built: Feb 7 2017 16:18:37)\r\nCopyright (c) 1997-2016 The PHP Group\r\nZend Engine v2.6.0, Copyright (c) 1998-2016 Zend Technologies</strong></pre><p style=\"text-align: justify;\">Otherwise users will have to follow given procedure to install PHP on their computer. This section will guide the users to install and configure PHP over the following platforms &minus;</p><p style=\"text-align: justify;\"><strong>PHP Installation on Linux or Unix with Apache</strong></p><p style=\"text-align: justify;\">The following are the prerequisites that are required to install PHP with Apache on a Linux OS</p><ul><li style=\"text-align: justify;\">The PHP source distribution <a href=\"http://www.php.net/downloads.php\" target=\"_blank\">http://www.php.net/downloads.php</a>.</li><li style=\"text-align: justify;\">The latest Apache source distribution <a href=\"http://httpd.apache.org/download.cgi\" target=\"_blank\">http://httpd.apache.org/download.cgi</a>.</li><li style=\"text-align: justify;\">A working PHP-supported database, if you plan to use one (For example MySQL, Oracle etc. ).</li><li style=\"text-align: justify;\">An ANSI C compiler.</li><li style=\"text-align: justify;\">Gnu make utility &ndash; can be freely downloaded at <a href=\"http://www.gnu.org/software/make\" target=\"_blank\">http://www.gnu.org/software/make</a>.</li></ul><p style=\"text-align: justify;\">The following are the steps to install Apache and PHP5 on your Linux or Unix machine. If your PHP or Apache versions are different then please take care accordingly.</p><ul><li style=\"text-align: justify;\">Unzip and untar the downloaded Apache source distribution. /usr/local is the standard place to unzip and untar the source</li><li><pre>gunzip -c apache_2.4.x.tar.gz</pre></li><li><pre>tar -xvf apache_2.4.x.tar</pre></li><li><pre>&lt; ?php </pre></li><li><pre>$color = &quot;maroon&quot;;\r\n$var = $color[2];\r\necho &quot;$var&quot; ;\r\n?&gt;</pre></li><li><pre>\r\n</pre></li></ul>', ''),
(4, 1, 'PHP Syntax', '<h2>What is Lorem Ipsum?</h2><p><br></p><p><br></p><p><span style=\"font-family: Verdana, Geneva, sans-serif; background-color: rgb(204, 204, 204);\"><strong>Lorem Ipsum</strong></span><span style=\"font-family: Verdana,Geneva,sans-serif;\"><span style=\"background-color: rgb(204, 204, 204);\"><strong>&nbsp;is simply dummy</strong></span> </span>text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><h2>Why do we use it?</h2><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English.&nbsp;</p><ol><li>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will&nbsp;</li><li>uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</li></ol>', '429001565popular_php_sites.jpg'),
(5, 0, 'PHP Language Basics', '<h2>What is Lorem Ipsum?</h2><p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&apos;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><h2>Why do we use it?</h2><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &apos;Content here, content here&apos;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &apos;lorem ipsum&apos; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', ''),
(6, 5, 'Variables', '<h2>What is Lorem Ipsum?</h2><p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&apos;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><h2>Why do we use it?</h2><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &apos;Content here, content here&apos;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &apos;lorem ipsum&apos; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', ''),
(7, 5, 'Data Types', '<h2>What is Lorem Ipsum?</h2><p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&apos;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><h2>Why do we use it?</h2><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &apos;Content here, content here&apos;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &apos;lorem ipsum&apos; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', ''),
(8, 5, 'Operators', '<h2>What is Lorem Ipsum?</h2><p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&apos;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><h2>Why do we use it?</h2><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &apos;Content here, content here&apos;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &apos;lorem ipsum&apos; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', ''),
(9, 0, 'Decisions and Loops', '<h2>What is Lorem Ipsum?</h2><p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&apos;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><h2>Why do we use it?</h2><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &apos;Content here, content here&apos;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &apos;lorem ipsum&apos; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', ''),
(10, 9, 'Decision Statements', '<h2>What is Lorem Ipsum?</h2><p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&apos;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><h2>Why do we use it?</h2><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &apos;Content here, content here&apos;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &apos;lorem ipsum&apos; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', ''),
(11, 9, 'Looping', '<h2>What is Lorem Ipsum?</h2><p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&apos;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><h2>Why do we use it?</h2><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &apos;Content here, content here&apos;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &apos;lorem ipsum&apos; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', ''),
(12, 0, 'Strings', '<h2>What is Lorem Ipsum?</h2><p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&apos;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><h2>Why do we use it?</h2><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &apos;Content here, content here&apos;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &apos;lorem ipsum&apos; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', ''),
(13, 0, 'Arrays', '<h2>What is Lorem Ipsum?</h2><p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&apos;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><h2>Why do we use it?</h2><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &apos;Content here, content here&apos;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &apos;lorem ipsum&apos; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', ''),
(14, 0, 'Functions', '<h2>What is Lorem Ipsum?</h2><p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&apos;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><h2>Why do we use it?</h2><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &apos;Content here, content here&apos;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &apos;lorem ipsum&apos; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', ''),
(15, 0, 'File Handling', '<h2>What is Lorem Ipsum?</h2><p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&apos;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><h2>Why do we use it?</h2><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &apos;Content here, content here&apos;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &apos;lorem ipsum&apos; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', ''),
(16, 15, 'Opening and Closing  a File', '<h2>What is Lorem Ipsum?</h2><p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&apos;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><h2>Why do we use it?</h2><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &apos;Content here, content here&apos;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &apos;lorem ipsum&apos; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', ''),
(17, 15, 'Reading and Writing', '<h2>What is Lorem Ipsum?</h2><p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&apos;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><h2>Why do we use it?</h2><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &apos;Content here, content here&apos;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &apos;lorem ipsum&apos; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', ''),
(18, 0, 'Object Oriented PHP', '<h2>What is Lorem Ipsum?</h2><p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&apos;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><h2>Why do we use it?</h2><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &apos;Content here, content here&apos;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &apos;lorem ipsum&apos; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', ''),
(19, 18, 'OOPs Concept in PHP', '<h2>What is Lorem Ipsum?</h2><p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&apos;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><h2>Why do we use it?</h2><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &apos;Content here, content here&apos;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &apos;lorem ipsum&apos; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', ''),
(20, 0, 'PHP with HTML Forms', '<h2>What is Lorem Ipsum?</h2><p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><h2>Why do we use it?</h2><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', ''),
(21, 0, 'Cookies and Sessions', '<h2>What is Lorem Ipsum?</h2><p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&apos;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><h2>Why do we use it?</h2><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &apos;Content here, content here&apos;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &apos;lorem ipsum&apos; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', ''),
(22, 21, 'Cookies', '<h2>What is Lorem Ipsum?</h2><p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&apos;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><h2>Why do we use it?</h2><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &apos;Content here, content here&apos;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &apos;lorem ipsum&apos; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', ''),
(23, 21, 'Sessions', '<h2>What is Lorem Ipsum?</h2><p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><h2>Why do we use it?</h2><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', ''),
(25, 0, 'About Us', '<h3><span style=\"color: rgb(85, 57, 130);\"><a href=\"http://www.google.com\" rel=\"noopener noreferrer\" target=\"_blank\">WHAT YOU WILL LEARN?</a></span></h3><p>The Welcome website provides useful information for new and returning students, helping you to arrive at the<br>University prepared and ready to enjoy your time here. You can also find information about what to do when you<br>arrive, as well as the activities on offer and the services available to you as EDUHARVARD students. We hope you<br>have a great start to the new academic year!</p><p>Birmingham has been challenging and developing great minds for more than a century. Characterised by a tradi<br>tion of innovation, research at the University has broken new ground, pushed forward the boundaries of knowledge<br>and made an impact on people&rsquo;s lives. We continue this tradition today and have ambitions for a future that will<br>embed our work and recognition of the Birmingham name on the international stage.</p><h3><span style=\"color: rgb(243, 121, 52);\">REQUIREMENTS</span></h3><p>For many courses, there are no formal entry requirements.</p><p>For some courses, you may have to show evidence of your language skills &ndash; either by taking a test set by the</p><p>centre, or by showing you have English language qualifications. This ensures that you will be placed on a course<br>that is right for your skills.</p>', '');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `ques_id` int(11) NOT NULL,
  `quiz_id` int(11) NOT NULL,
  `ques_title` text NOT NULL,
  `ans_1` text NOT NULL,
  `ans_2` text NOT NULL,
  `ans_3` text NOT NULL,
  `ans_4` text NOT NULL,
  `ans_correct` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`ques_id`, `quiz_id`, `ques_title`, `ans_1`, `ans_2`, `ans_3`, `ans_4`, `ans_correct`) VALUES
(1, 1, '<p>Qusetion 1_1?</p>', '<p>Ans22</p>', '<p>Ans33</p>', '<p>Ans44</p>', '<p>Ans55</p>', 2),
(5, 3, '<p><strong>What is a persistent cookie?</strong></p>', '', '', '', '', 0),
(11, 1, '<p>Qusetion 1_2?</p>', '<p>Ans 123</p>', '<p>Ans 124</p>', '<p>Ans 125</p>', '<p>Ans 129</p>', 2),
(12, 1, '<p>&lt;?php $x=array(&quot;aaa&quot;,&quot;ttt&quot;,&quot;www&quot;,&quot;ttt&quot;,&quot;yyy&quot;,&quot;tttt&quot;); $y=array_count_values($x); echo $y[ttt]; ?&gt;</p>', '<p>2</p>', '<p>3</p>', '<p>1</p>', '<p>4</p>', 1),
(13, 1, '<p>How do you get information from a form that is submitted using the &quot;get&quot; method?</p>', '<p>$_GET[];</p>', '<p>Request.Form;</p>', '<p>Request.QueryString;</p>', '<p>$_POST[];</p>', 1),
(14, 1, '<p>PHP code is embedded directly into XHTML document?</p>', '<p>False</p>', '<p>True</p>', '<p>dont know</p>', '<p>yes</p>', 3),
(15, 1, '<p>Full form of PHP</p>', '<p>PreHypertextProcessor</p>', '<p>HypertextPreprocessor</p>', '<p>Hypertext Postprocessor</p>', '<p>PostHypertextProcessor</p>', 2),
(16, 1, '<p>Which of the following function is used to pick one or more random values from PHP Array?</p>', '<p>array_rand()</p>', '<p>array_random()</p>', '<p>Random_array()</p>', '<p>Random_array()</p>', 2),
(17, 1, '<p>Are there regular expressions in PHP?</p>', '<p>Yes - regular expressions use Perl-like conventions</p>', '<p>Yes - PHP supports two different types of regular expressions: POSIX-extended and Perl-Compatible Regular Expressions (PCRE).</p>', '<p>Yes - regular expressions use the POSIX standard</p>', '<p>No - PHP uses &quot;glob&quot; style matching only</p>', 2),
(18, 1, '<p>In PHP, which of the following function is used to insert content of one php file into another php file before server executes it</p>', '<p>include[]</p>', '<p>#include()</p>', '<p>include()</p>', '<p>#include{}</p>', 3),
(19, 1, '<p>PHP variables are</p>', '<p>Multitype variables</p>', '<p>Double type variables</p>', '<p>Single type variable</p>', '<p>Trible type variables</p>', 3),
(20, 1, '<p>Which of these statements is true?</p>', '<p>PHP interfaces to the MySQL database,and you should transfer any data in Oracle or Sybase to MySQL if you want to use PHP on the data.</p>', '<p>PHP interfaces to a number of relational databases such as MySQL, Oracle and Sybase. A wrapper layer is provided so that code written for one database can easily be transferred to another if you later switch your database engine.</p>', '<p>PHP interfaces to a number of relational databases such as MySQL, Oracle and Sybase but the interface differs in each case.</p>', '<p>adfasfasf</p>', 1),
(21, 1, '<p><strong>Which keyword allows class members (methods and properties) to be used without needing to instantiate a new instance of the class?</strong></p>', '<p>protected</p>', '<p>final</p>', '<p>static</p>', '<p>private</p>', 3),
(22, 1, '<p><strong>PHP provides built-in interceptor methods, which can intercept messages sent to undefined methods and properties. This is also known as ___.</strong></p>', '<p>overloading</p>', '<p>overriding</p>', '<p>overbending</p>', '<p>overbinding</p>', 1),
(23, 1, '<p><strong>All variables in PHP start with which symbol?</strong></p>', '<p>!</p>', '<p>$</p>', '<p>&amp;</p>', '<p>%</p>', 2),
(24, 1, '<p><strong>Which one of the following class can not be instantiated?</strong></p>', '<p>inherited class</p>', '<p>abstract class</p>', '<p>constant class</p>', '<p>every class</p>', 2),
(25, 1, '<p><strong>In PHP the error control operator is _______</strong></p>', '<p>.</p>', '<p>*</p>', '<p>@</p>', '<p>&amp;</p>', 3),
(26, 1, '<p><strong>Which one of the following is a constant variable?</strong></p>', '<p>const $name</p>', '<p>const $NAME</p>', '<p>constant NAME</p>', '<p>const NAME</p>', 4),
(27, 1, '<p><strong>Which can be used to comment a single line of code in PHP?</strong></p>', '<p>/* */</p>', '<p>//</p>', '<p>#</p>', '<p>All of the above</p>', 4),
(28, 1, '<p><strong>A PHP script should start with ___ and end with ___:</strong></p>', '<p>&lt; php and &gt;</p>', '<p>&lt; ? php and ? &gt;</p>', '<p>&lt;?? and ??&gt;</p>', '<p>&lt;?php and ?&gt;</p>', 4),
(29, 1, '<p><strong>PHP files have a default file extension of</strong></p>', '<p>.html</p>', '<p>.xml</p>', '<p>.ph</p>', '<p>.php</p>', 4),
(33, 1, '<p><strong>What is PHP?</strong></p>', '<p>Personal Home Page</p>', '<p>Pretext Hypertext Preprocessor</p>', '<p>Preprocessor Home Page</p>', '<p>None of the above</p>', 1),
(35, 1, '<p><strong>In which of the following circumstance should you use a static reference to a non static method?</strong></p>', '<p>Making a method call using parent.</p>', '<p>Making a method call using child.</p>', '<p>Making an object call using parent.</p>', '<p>Making an object call using child.</p>', 1),
(36, 1, '<p><strong>Which keyword is used to access a static method or property from within the same class(rather than from child)?</strong></p>', '<p>static</p>', '<p>strat</p>', '<p>set</p>', '<p>self</p>', 4),
(37, 1, '<p><strong> If one intends to create a model that will be assumed by a number of closely related objects, which class must be used?</strong></p>', '<p>Normal class</p>', '<p>Static Class</p>', '<p>Abstract class</p>', '<p>Interface</p>', 3),
(38, 1, '<p><strong>Which keyword is used to access a static method or property from within the same class(rather than from child)?</strong></p>', '<p>static</p>', '<p>strat</p>', '<p>self</p>', '<p>set</p>', 3),
(39, 3, '<p><strong>What is meant by MIME?</strong></p>', '', '', '', '', 0),
(40, 3, '<p><!--?php </p----><strong>What are the different types of errors in php?</strong></p>', '', '', '', '', 0),
(41, 2, '<p><strong>What will be the output of the following code?</strong></p><pre>&lt; ?php \r\n$foo = &#39;Bob&#39;;              \r\n$bar = &amp;$foo;              \r\n$bar = &quot;My name is $bar&quot;;  \r\necho $bar;\r\necho $foo;\r\n?&gt;</pre>', '<p>Error</p>', '<p><span alt=\"6947\">My name is BobBob</span></p>', '<p>My name is BobMy name is Bob</p>', '<p>My name is Bob Bob</p>', 3),
(42, 2, '<p><strong>If $a = 12 what will be returned when ($a == 12) ? 5 : 1 is executed?</strong></p>', '<p>12</p>', '<p>1</p>', '<p>Error</p>', '<p>5</p>', 4),
(43, 2, '<p><strong>What will be the output of the following PHP code?</strong></p><pre>&lt; ?php \r\n$color = &quot;maroon&quot;;\r\n$var = $color[2];\r\necho &quot;$var&quot; ;\r\n?&gt;.</pre>', '<p><strong><em><u>b</u></em></strong></p>', '<p>Error</p>', '<p>$var</p>', '<p>r</p>', 4),
(45, 2, '<p><strong>What will be the output of the following php code?</strong></p><pre>&lt; ?php \r\n$score = 1234;\r\n$scoreboard = (array) $score;\r\necho $scoreboard[0];\r\n?&gt;</pre>', '<p>1</p>', '<p>Error</p>', '<p>1234</p>', '<p>2</p>', 3),
(46, 2, '<p><strong>What will be the output of the following PHP code?</strong></p><pre>&lt; ?php \r\n$total = &quot;25 students&quot;;\r\n$more = 10;\r\n$total = $total + $more;\r\necho &quot;$total&quot; ;\r\n?&gt;</pre>', '<p>Error</p>', '<p>35 students</p>', '<p>35</p>', '<p>25 students</p>', 3),
(47, 2, '<p><strong>Which of the below statements is equivalent to $add += $add ?</strong></p>', '<p>$add = $add</p>', '<p>$add = $add +$add</p>', '<p>$add = $add + 1</p>', '<p>$add = $add + $add + 1</p>', 2),
(48, 2, '<p><strong>What will be the output of the following code?</strong></p><pre>&lt; ?php \r\nfunction track() {\r\nstatic $count = 0;\r\n$count++;\r\necho $count ;\r\n}\r\ntrack();\r\ntrack();\r\ntrack();\r\n?&gt;</pre>', '<p>123</p>', '<p>111</p>', '<p>000</p>', '<p>011</p>', 1),
(49, 2, '<p><strong>What will be the output of the following PHP code?</strong></p><pre>&lt; ?php \r\n$a = &quot;clue&quot;;\r\n$a .= &quot;get&quot;;\r\necho &quot;$a&quot;;\r\n?&gt;</pre>', '<p>get</p>', '<p>true</p>', '<p>false</p>', '<p>clueget</p>', 4),
(50, 2, '<p><strong>What will be the output of the following PHP code?</strong></p><pre>&lt; ?php \r\n    $team = &quot;arsenal&quot;;\r\n    switch ($team) {\r\n    case &quot;manu&quot;:\r\n        echo &quot;I love man u&quot;;\r\n    case &quot;arsenal&quot;:\r\n        echo &quot;I love arsenal&quot;;\r\n    case &quot;manc&quot;:\r\n        echo &quot;I love manc&quot;; }\r\n?&gt;</pre>', '<p>I love arsenal</p>', '<p>Error</p>', '<p>I love arsenalI love manc</p>', '<p>&nbsp;I love arsenalI love mancI love manu</p>', 3),
(51, 2, '<p><strong>What will be the output of the following PHP code?</strong></p><pre>&lt; ?php \r\n    $num = 10;\r\n    echo &#39;What is her age? \\n She is $num years old&#39;;\r\n?&gt;</pre>', '<p>What is her age? \\n She is $num years old</p>', '<ul><li><span alt=\"6958\">What is her age?</span></li><li><span alt=\"6958\">She is $num years old</span></li><li><br></li></ul>', '<p>What is her age? She is 10 years old</p>', '<p>What is her age?</p><p>She is 10 years old</p>', 1),
(52, 2, '<p><strong>What will be the output of the following PHP code?</strong></p><pre>&lt;?php    \r\n$user = array(&quot;Ash&quot;, &quot;Bale&quot;, &quot;Shrek&quot;, &quot;Blank&quot;);\r\nfor ($x=0; $x &lt; count($user); $x++){\r\n   if ($user[$x] == &quot;Shrek&quot;) continue;            printf ($user[$x]);    \r\n}\r\n?&gt;</pre>', '<p>AshBale</p>', '<p>AshBaleBlank</p>', '<p>ShrekBlank</p>', '<p>Shrek</p>', 2),
(53, 2, '<p><strong>What is the value of $a and $b after the function call?</strong></p><pre>&lt;?php\r\n function doSomething( &amp;$arg ) {\r\n     $return = $arg;\r\n     $arg += 1;\r\n     return $return;\r\n}\r\n    $a = 3;\r\n    $b = doSomething( $a );\r\n    ?&gt;</pre>', '<p>a is 3 and b is 4.</p>', '<p>a is 4 and b is 3.</p>', '<p>Both are 3.</p>', '<p>Both are 4.</p>', 2),
(54, 2, '<p><strong>What will be the output of the following PHP code?</strong></p><pre>&lt; ?php \r\n    $fruits = array (&quot;mango&quot;, &quot;apple&quot;, &quot;pear&quot;, &quot;peach&quot;);\r\n    $fruits = array_flip($fruits);\r\n    echo ($fruits[0]);\r\n?&gt;</pre>', '<p>mango</p>', '<p>Error</p>', '<p>peach</p>', '<p>0</p>', 2),
(55, 2, '<p><strong>What will be the output of the following PHP code?</strong></p><pre>&lt; ?php \r\n    $fruits = array (&quot;apple&quot;, &quot;orange&quot;, &quot;banana&quot;);\r\n    echo (next($fruits));\r\n    echo (next($fruits));\r\n?&gt;</pre>', '<p>orangebanana</p>', '<p>appleorange</p>', '<p>orangeorange</p>', '<p>appleapple</p>', 1),
(56, 2, '<p><strong>What will be the output of the following PHP code?</strong></p><pre>&lt; ?php \r\n    $fruits = array (&quot;apple&quot;, &quot;orange&quot;, array (&quot;pear&quot;, &quot;mango&quot;),\r\n    &quot;banana&quot;);\r\n    echo (count($fruits, 1));\r\n?&gt;</pre>', '<p>3</p>', '<p>4</p>', '<p>5</p>', '<p>6</p>', 4),
(57, 2, '<p><strong>What will be the output of the following PHP code?</strong></p><pre>&lt; ?php \r\n    $fruits = array (&quot;apple&quot;, &quot;mango&quot;, &quot;peach&quot;, &quot;pear&quot;,\r\n    &quot;orange&quot;);\r\n    $subset = array_slice ($fruits, 2);\r\n    print_r ($subset);\r\n?&gt;</pre>', '<p>Array ( [0] =&gt; peach )</p>', '<p>Array ( [0] =&gt; apple [1] =&gt; mango [2] =&gt; peach )</p>', '<p>Array ( [0] =&gt; apple [1] =&gt; mango )</p>', '<p>Array ( [0] =&gt; peach [1] =&gt; pear [2] =&gt; orange )</p>', 4),
(58, 2, '<p><strong>What will be the output of the following PHP code?</strong></p><pre>&lt; ?php \r\n    $fruits = array (&quot;apple&quot;, &quot;mango&quot;, &quot;peach&quot;, &quot;pear&quot;,\r\n    &quot;orange&quot;);\r\n    $subset = array_splice ($fruits, 2);\r\n    print_r ($fruits);\r\n?&gt;</pre>', '<p>Error</p>', '<p>Array ( [0] =&gt; apple [1] =&gt; mango [2] =&gt; peach )</p>', '<p>Array ( [0] =&gt; apple [1] =&gt; mango )</p>', '<p>Array ( [0] =&gt; pear [1] =&gt; orange )</p>', 3),
(59, 2, '<p><strong>What will be the output of the following PHP code?</strong></p><pre>&lt; ?php \r\n    $number = array (&quot;4&quot;, &quot;hello&quot;, 2);\r\n    echo (array_sum ($number));\r\n?&gt;</pre>', '<p>4hello2</p>', '<p>4</p>', '<p>2</p>', '<p>6</p>', 4),
(60, 2, '<p><strong>What will be the output of the following PHP code ?</strong></p><pre>&lt; ?php \r\none = 1;\r\ntwo = 2;\r\nthree = 3;\r\nfour = 4;\r\necho &quot;one / two + three / four&quot;;\r\n?&gt;</pre>', '<p>0.75</p>', '<p>0.25</p>', '<p>1.25</p>', '<p>Error</p>', 4),
(61, 2, '<p><strong>What will be the output of the following PHP code ?</strong></p><pre>&lt; ?php \r\n$on$e = 1;\r\n$tw$o = 2;\r\n$thre$e = 3;\r\n$fou$r = 4;\r\necho &quot;$on$e / $tw$o + $thre$e / $fou$r&quot; ; \r\n?&gt; </pre>', '<p>0.75</p>', '<p>0.05</p>', '<p>1.25</p>', '<p>Error</p>', 4),
(62, 2, '<p><strong>What will be the output of the following PHP code ?</strong></p><pre>&lt; ?php \r\n$on_e = 1;\r\n$tw_o = 2;\r\n$thre_e = 3;\r\n$fou_r = 4;\r\necho &quot;$on_e / $tw_o + $thre_e / $fou_r&quot; ; \r\n?&gt;</pre>', '<p>0.75</p>', '<p>0.05</p>', '<p>1.25</p>', '<p>Error</p>', 3),
(63, 2, '<p><strong>What will be the output of the following PHP code ?</strong></p><pre>&lt; ?php \r\n$On_e = 1;\r\n$tw_o = 2;\r\n$thre_e = 3;\r\n$fou_r = 4;\r\necho &quot;$on_e / $tw_o + $thre_e / $fou_r&quot;;\r\n?&gt;</pre>', '<p>0.75</p>', '<p>0.05</p>', '<p>1.25</p>', '<p>Error</p>', 1),
(64, 2, '<p><strong>What will be the output of the following PHP code ?</strong></p><pre>&lt; ?php \r\necho $red ;\r\n?&gt;</pre>', '<p>0</p>', '<p>Nothing</p>', '<p>True</p>', '<p>Error</p>', 2),
(65, 2, '<p><strong>What will be the output of the following PHP code ?</strong></p><pre>&lt; ?php \r\necho &quot;$four4 + $three3 / $two2 - 1&quot;;\r\n?&gt;</pre>', '<p>4.5</p>', '<p>7</p>', '<p>3.5</p>', '<p>Error</p>', 1),
(66, 2, '<p><strong>What will be the output of the following PHP code ?</strong></p><pre>&lt; ?php \r\n$4four = 4;\r\n$3three = 3;\r\n$2two = 2;\r\necho &quot;$4four + $3three / $2two - 1&quot;;\r\n?&gt; </pre>', '<p>4.5</p>', '<p>7</p>', '<p>3.5</p>', '<p>Error</p>', 4),
(67, 2, '<p><strong>What will be the output of the following PHP code ?</strong></p><pre>&lt; ?php \r\nint $one = 1;\r\necho &quot;$one&quot;;\r\n?&gt;</pre>', '<p>0</p>', '<p>1</p>', '<p>$one</p>', '<p>Error</p>', 4),
(68, 2, '<p><strong>What will be the output of the following PHP code ?</strong></p><pre>&lt; ?php \r\nvar $one = 1;\r\nvar $two = 2;\r\necho &quot;$one / $two * $one / $two * $two&quot;;\r\n?&gt;</pre>', '<p>1</p>', '<p>0</p>', '<p>0.5</p>', '<p>Error</p>', 4),
(69, 2, '<p><strong>What will be the output of the following PHP code ?</strong></p><pre>&lt; ?php \r\n$hello = &quot;Hello World&quot;;\r\n$bye = &quot;Bye&quot;;\r\necho $hello;&quot;$bye&quot;;\r\n?&gt;</pre>', '<p>Hello World</p>', '<p>Bye</p>', '<p>Hello worldBye</p>', '<p>Error</p>', 1),
(70, 2, '<p><strong>In the PHP code given below, what is/are the properties?</strong></p><pre>&lt; ?php \r\n    class Example \r\n    {\r\n        public $name;\r\n        function Sample()\r\n        {\r\n            echo &quot;This is an example&quot;;\r\n        }\r\n    } \r\n?&gt;</pre>', '<p>echo &quot;This is an example&quot;;</p>', '<p>public $name;</p>', '<p>class Example</p>', '<p>function sample()</p>', 2),
(71, 2, '<p><strong>Which one of the following is the right way to define a constant?</strong></p><ul><li><br></li></ul>', '<p><span alt=\"7034\">constant PI = &ldquo;3.1415?;</span></p>', '<p>const $PI = &ldquo;3.1415?;</p>', '<p>constant PI = &rsquo;3.1415&#39;;</p>', '<p>const PI = &rsquo;3.1415&#39;;</p>', 4),
(72, 2, '<p><strong>Which one of the following is the right way to call a class constant, given that the class is mathFunction?</strong></p>', '<p>echo PI;</p>', '<p>echo mathFunction-&gt;PI;</p>', '<p>echo mathFunction::PI;</p>', '<p>echo mathFunction=PI;</p>', 3),
(73, 2, '<p><strong>Which one of the following is the right way to invoke a method?</strong></p>', '<p>$object-&gt;methodName();</p>', '<p>object-&gt;methodName();</p>', '<p>object::methodName();</p>', '<p>$object::methodName();</p>', 1),
(74, 2, '<p><strong>Which of the following is/are the right way to declare a method?</strong></p><p><strong>(i) function functionName() { function body }</strong></p><p><strong>(ii) scope function functionName() { function body }</strong></p><p><strong>(iii) method methodName() { method body }</strong></p><p><strong>(iv) scope method methodName() { method body }</strong></p>', '<p>Only (ii)</p>', '<p>Only (iv)</p>', '<p>(i) and (ii)</p>', '<p>(iii) and (iv)</p>', 3),
(75, 2, '<p>What will happen in this function call?</p><pre>&lt;?php\r\n    function calc($price, $tax)\r\n    {\r\n        $total = $price + $tax;\r\n    }\r\n    $pricetag = 15;\r\n    $taxtag = 3;\r\n    calc($pricetag, $taxtag);\r\n    ?&gt;</pre>', '<p>Call by Value</p>', '<p>Call By Reference</p>', '<p>Default Argument Value</p>', '<p>Type Hinting</p>', 1),
(76, 2, '<p><strong>What will be the output of the following PHP code?</strong></p><pre>&lt;?php\r\n$cars = array(&quot;Volvo&quot;, &quot;BMW&quot;, &quot;Toyota&quot;);\r\necho &quot;I like &quot; . $cars[0] . &quot;, &quot; . $cars[1] . &quot; and &quot; . $cars[2] . &quot;.&quot;;\r\n?&gt;</pre>', '<p>I like Volvo BMW and Toyota)</p>', '<p>I like Volvo, BMW and Toyota)</p>', '<p>I like Volvo, BMW and Toyota</p>', '<p>I like. Volvo.,. BMW. and) Toyota) .</p>', 2),
(77, 2, '<p>What will be the output of the following PHP code?</p><pre>&lt;?php\r\n    function calc($price, $tax=&quot;&quot;)\r\n    {\r\n        $total = $price + ($price * $tax);\r\n        echo &quot;$total&quot;;     \r\n    }\r\n    calc(42);\r\n?&gt;</pre>', '<p>Error</p>', '<p>0</p>', '<p>42</p>', '<p>84</p>', 3),
(78, 2, '<p><strong>What will be the output of the following PHP code?</strong></p><pre>&lt;?php\r\n    function a()\r\n    {\r\n        function b()\r\n        {\r\n            echo &#39;I am b&#39;;\r\n        }\r\n        echo &#39;I am a&#39;;\r\n    }\r\n    a();\r\n    a();\r\n    ?&gt;</pre>', '<p>I am b</p>', '<p>I am bI am a</p>', '<p>Error</p>', '<p>I am a Error</p>', 4),
(79, 2, '<p><strong>What will be the output of the following PHP code?</strong></p><pre>&lt;?php\r\n    function a()  \r\n    {\r\n        function b()\r\n        {            echo &#39;I am b&#39;;\r\n        }\r\n        echo &#39;I am a&#39;;\r\n    }\r\n    b();\r\n    a();\r\n?&gt;</pre>', '<p>I am b</p>', '<p>I am bI am a</p>', '<p>Error.</p>', '<p>I am a Error</p>', 3),
(80, 2, '<p><strong>What will be the output of the following PHP code?</strong></p><pre>&lt;?php\r\n    $op2 = &quot;blabla&quot;;\r\n    function foo($op1)\r\n    {\r\n        echo $op1;\r\n        echo $op2;\r\n    }\r\n    foo(&quot;hello&quot;);\r\n    ?&gt;</pre>', '<p>helloblabla</p>', '<p>Error</p>', '<p>hello</p>', '<p>helloblablablabla</p>', 3),
(81, 2, '<p>What will be the output of the following PHP code?</p><pre>&lt;?php\r\n    function foo($msg)\r\n    {\r\n        echo &quot;$msg&quot;;\r\n    }\r\n    $var1 = &quot;foo&quot;;\r\n    $var1(&quot;will this work&quot;);\r\n    ?&gt;</pre>', '<p>Error</p>', '<p>$msg</p>', '<p>0</p>', '<p>will this work</p>', 4),
(82, 2, '<p><strong>What will be the output of the following PHP code?</strong></p><pre>&lt;?php\r\n    class ShopProductWriter\r\n    {\r\n        public function write( $shopProduct )\r\n        {\r\n            $str = &quot;{$shopProduct-&gt;title}: &quot; .$shopProduct-&gt;getProducer() .&quot; ({$shopProduct-&gt;price})\\n&quot;;\r\n            print $str;\r\n        }\r\n    }\r\n    $product1 = new ShopProduct( &quot;My Antonia&quot;, &quot;Willa&quot;, &quot;Cather&quot;, 5.99 );\r\n    $writer = new ShopProductWriter();\r\n    $writer-&gt;write( $product1 );\r\n?&gt;</pre>', '<p>Error</p>', '<p>Cather: Willa My Antonia (5.99)</p><p><br></p><p><br></p>', '<p>Willa: Cather My Antonia (5.99)</p>', '<p>My Antonia: Willa Cather (5.99)</p>', 4),
(83, 2, '<p><strong>What will be the output of the following PHP code</strong></p><pre>class Person \r\n{\r\n    function getName() { return &quot;Bob&quot;; }\r\n    function getAge() { return 44; }\r\n    function __toString() {\r\n        $desc = $this-&gt;getName();\r\n        $desc .= &quot; (age &quot;.$this-&gt;getAge().&quot;)&quot;;\r\n        return $desc;\r\n    }\r\n}\r\n$person = new Person();\r\nprint $person;</pre>', '<p>Object Not Found</p>', '<p>PHP Catchable fatal error</p>', '<p>BOB (age 44)</p>', '<p>BOB</p>', 3),
(84, 2, '<p><strong>What will be the output of the following PHP code?</strong></p><pre>class Checkout \r\n{ \r\nfinal function totalize() { // calculate bill \r\n} \r\n} \r\nclass IllegalCheckout extends Checkout \r\n{ final function totalize() { // change bill calculation \r\n} \r\n}</pre>', '<p>PHP Fatal error: Class IllegalCheckout may not inherit from final class</p>', '<p>Value of the bill calculated</p>', '<p>PHP Fatal error: Cannot find object</p>', '<p>PHP Fatal error: Cannot override final method</p>', 4),
(85, 3, '<p><strong>What is the difference between a cookie and a session?</strong></p>', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `quiz3ans`
--

CREATE TABLE `quiz3ans` (
  `id` int(11) NOT NULL,
  `quiz_id` int(11) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz3ans`
--

INSERT INTO `quiz3ans` (`id`, `quiz_id`, `answer`) VALUES
(1, 3, 'Solutions to quiz #3.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `result_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `quiz_id` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `percentage` varchar(10) NOT NULL,
  `result_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`result_id`, `student_id`, `quiz_id`, `score`, `percentage`, `result_date`) VALUES
(2, 123456, 2, 8, '80', '12/12/2017'),
(3, 123456, 2, 1, '10%', '13/07/2017'),
(4, 123456, 2, 1, '10%', '14/07/2017'),
(5, 1234567, 2, 1, '10%', '14/07/2017'),
(6, 1234567, 2, 0, '0%', '14/07/2017'),
(7, 123456, 2, 1, '10%', '14/07/2017'),
(8, 123456, 2, 1, '10%', '14/07/2017'),
(9, 1234567, 2, 2, '20%', '14/07/2017'),
(10, 1234567, 1, 4, '40%', '14/07/2017'),
(11, 1234567, 1, 3, '30%', '14/07/2017'),
(12, 123456, 2, 0, '0%', '14/07/2017'),
(14, 919191, 1, 0, '0%', '16/07/2017'),
(15, 919191, 1, 0, '0%', '16/07/2017'),
(16, 919191, 2, 1, '10%', '16/07/2017'),
(17, 19191, 2, 1, '10%', '18/07/2017'),
(18, 919191, 2, 0, '0%', '18/07/2017'),
(19, 9000000, 1, 0, '0%', '20/07/2017'),
(20, 9000000, 2, 0, '0%', '20/07/2017'),
(21, 9000000, 2, 0, '0%', '20/07/2017'),
(22, 12, 2, 0, '0%', '26/07/2017'),
(23, 1235, 1, 0, '0%', '27/07/2017'),
(24, 1235, 1, 0, '0%', '27/07/2017'),
(25, 12, 1, 0, '0%', '27/07/2017'),
(26, 1, 2, 0, '0%', '27/07/2017'),
(27, 0, 2, 0, '0%', '27/07/2017'),
(28, 0, 2, 0, '0%', '27/07/2017'),
(29, 0, 1, 0, '0%', '27/07/2017'),
(30, 0, 1, 0, '0%', '27/07/2017'),
(31, 0, 1, 0, '0%', '27/07/2017'),
(32, 0, 1, 0, '0%', '27/07/2017'),
(33, 0, 1, 0, '0%', '27/07/2017'),
(34, 0, 1, 0, '0%', '27/07/2017'),
(35, 1245678, 2, 0, '0%', '27/07/2017'),
(36, 456789234, 1, 2, '20%', '29/07/2017'),
(37, 456789234, 2, 2, '20%', '31/07/2017');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_pass`, `user_email`, `user_type`) VALUES
(4890, 'admin', 'WHl6IUAjNA==', 'abc@gmail.com', 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`ques_id`);

--
-- Indexes for table `quiz3ans`
--
ALTER TABLE `quiz3ans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`result_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `ques_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
--
-- AUTO_INCREMENT for table `quiz3ans`
--
ALTER TABLE `quiz3ans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `result_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4891;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

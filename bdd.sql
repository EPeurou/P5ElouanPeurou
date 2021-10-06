-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 28, 2021 at 09:47 AM
-- Server version: 5.7.24
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
-- Database: "elouanr29"
--

-- --------------------------------------------------------

--
-- Table structure for table "category"
--

CREATE TABLE "category" (
  "id" int(11) NOT NULL,
  "name" varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table "category"
--

INSERT INTO "category" ("id", "name") VALUES
(1, 'python'),
(2, 'php');

-- --------------------------------------------------------

--
-- Table structure for table "comment"
--

CREATE TABLE "comment" (
  "id" int(11) NOT NULL,
  "date" datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  "content" varchar(255) NOT NULL,
  "validate" tinyint(1) NOT NULL,
  "idUser" int(11) NOT NULL,
  "idPost" int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table "comment"
--

INSERT INTO "comment" ("id", "date", "content", "validate", "idUser", "idPost") VALUES
(2, '2021-07-05 16:14:12', 'ce post est vraiment super ', 1, 18, 4),
(3, '2021-07-07 08:58:29', 'super contenu ', 1, 18, 44),
(5, '2021-07-07 09:22:59', 'ce post est franchement pas terrible', 1, 17, 44),
(48, '2021-09-02 09:42:59', 'TROP BIEN!!', 0, 18, 44),
(49, '2021-09-02 09:43:42', 'sympa ce post', 0, 18, 4);

-- --------------------------------------------------------

--
-- Table structure for table "post"
--

CREATE TABLE "post" (
  "id" int(11) NOT NULL,
  "title" varchar(255) NOT NULL,
  "content" varchar(255) NOT NULL,
  "description" varchar(30) NOT NULL,
  "date" datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  "idUser" int(11) NOT NULL,
  "idCategory" int(11) NOT NULL,
  "author" varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table "post"
--

INSERT INTO "post" ("id", "title", "content", "description", "date", "idUser", "idCategory", "author") VALUES
(4, 'Nouveau blog!', 'Le blog à été conçu pour être agréable à l\'oeil et à l\'usage. Il vous plait?', 'Bienvenue sur le blog!', '2021-09-22 15:44:15', 17, 2, 'Elouan'),
(44, 'PHP c\'est vraiment bien!', 'PHP est un bon language pour apprendre.', 'Blabla à propos de php', '2021-09-22 15:54:11', 17, 2, 'Elouan');

-- --------------------------------------------------------

--
-- Table structure for table "user"
--

CREATE TABLE "user" (
  "id" int(11) NOT NULL,
  "firstName" varchar(255) NOT NULL,
  "name" varchar(255) NOT NULL,
  "civility" varchar(10) NOT NULL,
  "email" varchar(255) NOT NULL,
  "password" varchar(255) NOT NULL,
  "pseudo" varchar(255) NOT NULL,
  "admin" tinyint(1) NOT NULL DEFAULT '0',
  "creationDate" datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table "user"
--

INSERT INTO "user" ("id", "firstName", "name", "civility", "email", "password", "pseudo", "admin", "creationDate") VALUES
(17, 'peurou', 'elouan', 'M', 'admin@gmail.com', '$2y$10$FJhobVR9kWnGbxycNcP4CetzBrRBT74T447UY86PVoEB5Obm5.Bui', 'admin', 1, '2021-09-28 11:33:52'),
(18, 'Dupont', 'Tom', 'M', 'nonAdmin@gmail.com', '$2y$10$eRwslhWDfO1yFeT4/RxEMe2Z9TXRp.6dC93rLcM9V5egyAnYGz5pK', 'nonAdmin', 0, '2021-09-28 11:39:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table "category"
--
ALTER TABLE "category"
  ADD PRIMARY KEY ("id");

--
-- Indexes for table "comment"
--
ALTER TABLE "comment"
  ADD PRIMARY KEY ("id"),
  ADD KEY "idUser" ("idUser"),
  ADD KEY "idPost" ("idPost");

--
-- Indexes for table "post"
--
ALTER TABLE "post"
  ADD PRIMARY KEY ("id"),
  ADD KEY "idUser" ("idUser"),
  ADD KEY "idCategory" ("idCategory");

--
-- Indexes for table "user"
--
ALTER TABLE "user"
  ADD PRIMARY KEY ("id");

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table "category"
--
ALTER TABLE "category"
  MODIFY "id" int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table "comment"
--
ALTER TABLE "comment"
  MODIFY "id" int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table "post"
--
ALTER TABLE "post"
  MODIFY "id" int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table "user"
--
ALTER TABLE "user"
  MODIFY "id" int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table "comment"
--
ALTER TABLE "comment"
  ADD CONSTRAINT "comment_ibfk_1" FOREIGN KEY ("idUser") REFERENCES "user" ("id"),
  ADD CONSTRAINT "comment_ibfk_2" FOREIGN KEY ("idPost") REFERENCES "post" ("id") ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table "post"
--
ALTER TABLE "post"
  ADD CONSTRAINT "post_ibfk_1" FOREIGN KEY ("idUser") REFERENCES "user" ("id"),
  ADD CONSTRAINT "post_ibfk_2" FOREIGN KEY ("idCategory") REFERENCES "category" ("id");
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

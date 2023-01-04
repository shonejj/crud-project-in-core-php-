-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2023 at 01:12 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(20) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `psw` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `uname`, `email`, `psw`) VALUES
(16, 'shone', 'shonejj2k@gmail.com', '11'),
(17, 'yadav', 'thomus@gmail.com', '22'),
(18, 'sala', 'sala@gmail.com', '123'),
(20, 'jerry', 'jerry@gmail.com', '11'),
(21, 'siva', 'siva@gmail.com', '123'),
(22, 'maddy', 'maddy@gmail.com', '123'),
(23, 'joy', 'joy@gmail.com', '123'),
(24, 'Sharon. J', 'shonejj2k@gmail.com', '234567890'),
(25, 'manojkumar', 'manojkumar@gmail.com', '1234'),
(26, 'joseph', 'joseph@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(255) NOT NULL,
  `title` varchar(50) NOT NULL,
  `discription` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `img` varchar(255) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `title`, `discription`, `content`, `img`, `uname`, `date`) VALUES
(22, 'tywgahsbm', 'ugkajbsc', 'gwkadhsvmcn ', 'demonstration_with_headphones_cool_looks__dynamic_pose__b7225aac-7f68-4ae4-b27e-af1b75788670.png', 'sala', '2022-12-31'),
(23, 'gkfajblajbs,', 'bjd x,zdb', 'n dvznjb, d cb,m', 'Kratos_in_Deadpools_suit_without_mask_standing_in_heroi_67864c8c-83c6-4c81-89a3-7a5ca5c2f4ef.png', 'sala', '2022-12-31'),
(24, 'dxzc', 'sacxz', 'Lorem ipsum dolor sited and ametvel, nobised, minimali! Quibusdam temporibus, placeate reessed veritatis optio aliquam illum debitis at, perspiciatis consequatur iure vel, quae ratione. Praesentium, at.Lorem ipsum dolor sited and ametvel, nobised, minimal', 'shone_jj_a_website_template_for_movie_downloading_site_with_bea_4b2b6ac5-b053-4e0a-8dd4-2fdc66c40d2a.png', 'sala', '2022-12-31'),
(28, 'hdfmgfcmgh', 'jchvjhvjh', 'dhfjfgjfhvhgmkghvm', 'white-background-for-website-full-screen-white-colour-full-screen--haze-ultra-detailed-film-pho-55421256.png', 'maddy', '2023-01-01'),
(29, 'gfcv hgb', 'jhvj n', 'ghvb ', 'white-background-for-website-full-screen-white-colour-full-screen--haze-ultra-detailed-film-pho-302248539.png', 'joy', '2023-01-01'),
(33, 'rgsdrsfd', 'edgvgrfs', 'etgdvrhfbxbzdfzbaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'white-background-for-website-full-screen-white-colour-full-screen--haze-ultra-detailed-film-pho-55421256.png', 'manojkumar', '2023-01-01'),
(34, 'BLACK MATTER', 'Things to know about black mater', 'Black matter is a type of matter that is believed to make up most of the mass in the universe. It is called \"black\" because it does not interact with light or other forms of electromagnetic radiation, making it invisible to telescopes and other instruments that detect electromagnetic radiation.  Despite its invisibility, scientists believe that black matter plays a crucial role in the structure and evolution of the universe. It is thought to be the glue that holds galaxies together, as well as the seeds for the formation of galaxies and other structures in the universe.  Black matter is thought to be composed of particles that are different from the particles that make up normal matter, such as protons, neutrons, and electrons. These particles, called \"dark matter particles\", are thought to interact with normal matter only through gravity.  Black matter is still a mystery to scientists and is one of the great unsolved problems in physics. Researchers are actively searching for evidence of black matter and trying to learn more about its properties and behavior.', 'full-screen-image-a-dark-black-ink-drop--spreading-inside-water--trending-on-artstation-sharp-focu-267573782.png', 'shone', '2023-01-01'),
(42, 'white space', 'some things about white space', 'White space, also known as negative space, refers to the blank or empty areas in a design and is the space between elements such as lines of text or images. It is referred to as negative space because it is the area around and between the positive space, or the elements that make up the design. White space is crucial in design because it helps create balance, hierarchy, and visual interest, and it can also make a design feel more open, clean, and uncluttered. Using white space effectively can highlight specific elements, create a sense of order, and improve the readability of a design. Too much or too little white space can affect the overall aesthetic and effectiveness of a design. White space can also be used to create hierarchy by using different amounts of space between elements and to add creativity and playfulness to the design by using it in unexpected ways or incorporating negative space. In summary, white space is a vital element in design that can be utilized to improve the overall aesthetic and effectiveness of the work.', 'white-background-for-website-full-screen-white-colour-full-screen--haze-ultra-detailed-film-pho-55421256.png', 'joseph', '2023-01-02'),
(43, 'Winter activities', 'Things to do in winter ', 'There are plenty of things to do in the winter to keep you busy and entertained. You could go skiing or snowboarding at a local mountain, or try your hand at ice skating or ice fishing. You could also bundle up and go for a hike in the snowy woods, or spend a day building a snowman or having a snowball fight. If you prefer indoor activities, you could visit a museum, go to the movies, or curl up with a good book or a board game. You could also try cooking or baking warm and comforting dishes, or spend some time pampering yourself with a spa day. No matter what your interests are, there is surely something fun and enjoyable to do in the winter.', 'full-screen-image-of-tech-white-theme-ultra-high-definitionhigh-resolutionsharpcleardetailedv-310582992.png', 'joseph', '2023-01-02'),
(44, 'White eagle', 'magical eagle content', 'The White Eagle is a majestic and iconic bird known for its striking appearance and noble presence. With its snow-white feathers and piercing golden eyes, the White Eagle is a symbol of strength, courage, and wisdom. Found in many parts of the world, these birds are known for their keen vision and powerful wings, which allow them to soar to great heights and cover long distances with ease. In many cultures, the White Eagle is revered as a spiritual guide and messenger, and is believed to bring good luck and prosperity to those who are lucky enough to spot one. Despite their majestic appearance, White Eagles are also known for their fierce hunting skills and their ability to protect their territory from intruders.', 'full-screen-image-of-tech-white-theme-ultra-high-definitionhigh-resolutionsharpcleardetailedv-486987642.png', 'shone', '2023-01-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

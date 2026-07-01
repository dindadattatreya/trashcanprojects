-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2024 at 03:39 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iquiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `question_master`
--

CREATE TABLE `question_master` (
  `qid` int(11) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `topic` varchar(200) NOT NULL,
  `hardness` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `option_a` varchar(200) NOT NULL,
  `option_b` varchar(200) NOT NULL,
  `option_c` varchar(200) NOT NULL,
  `option_d` varchar(200) NOT NULL,
  `answer` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `question_master`
--

INSERT INTO `question_master` (`qid`, `subject`, `topic`, `hardness`, `description`, `option_a`, `option_b`, `option_c`, `option_d`, `answer`) VALUES
(7, 'C', 'recursion', 'hard', 'What is the base case in recursion?', 'A condition under which the recursive function stops calling itself.', ' The first call of the recursive function.', 'The deepest call in the recursive function', 'The condition under which the function continues calling itself.', 'A condition under which the recursive function stops calling itself.'),
(8, 'C', 'recursion', 'moderate', 'Which of the following problems cannot be solved using recursion?', 'Factorial of a number', 'Fibonacci sequence', 'Reverse a string', 'Finding the largest element in a sorted array', 'Finding the largest element in a sorted array'),
(9, 'C', 'recursion', 'easy', 'What is the time complexity of the recursive function for calculating Fibonacci numbers without memoization?', 'O(n)', 'O(log n)', 'O(2^n)', 'O(n^2)', 'O(2^n)'),
(10, 'C', 'recursion', 'hard', 'crecursionhard1', 'abc', 'bca', 'cab', 'cba', 'abc'),
(11, 'C', 'recursion', 'hard', 'crecursionhard2', 'dac', 'cda', 'adc', 'cad', 'cad'),
(12, 'C', 'recursion', 'hard', 'crecursionhard3', 'wer', 'rew', 'erw', 'ewr', 'rew'),
(13, 'C', 'recursion', 'hard', 'crecursionhard4', 'poi', 'opi', 'iop', 'oip', 'iop'),
(14, 'C', 'recursion', 'hard', 'crecursionhard5', 'sad', 'das', 'ads', 'sda', 'das'),
(15, 'C', 'recursion', 'hard', 'crecursionhard6', 'rem', 'mer', 'erm', 'mre', 'mre'),
(16, 'C', 'recursion', 'hard', 'crecursionhard7', 'qwerty', 'ytrewq', 'wertyq', 'rewqty', 'rewqty'),
(17, 'C', 'recursion', 'hard', 'crecursionhard8', 'tyui', 'iuyt', 'yuti', 'ityu', 'yuti'),
(18, 'C', 'recursion', 'hard', 'crecursionhard9', 'cvb', 'bvc', 'vbc', 'bcv', 'vbc'),
(19, 'C', 'recursion', 'hard', 'crecursionhard10', '34a', '34b', '34c', '34d', '34c'),
(20, 'C', 'recursion', 'hard', 'crecursionhard11', '21a', '21b', '21c', '21d', '21b'),
(21, 'C', 'recursion', 'hard', 'crecursionhard12', 'd32', 'd33', 'd34', 'd35', 'd35'),
(22, 'C', 'recursion', 'hard', 'crecursionhard13', 'w33', 'w32', 'w31', 'w45', 'w45'),
(23, 'C', 'recursion', 'hard', 'crecursionhard14', 'f5', 'f6', 'f7', 'f8', 'f6'),
(24, 'C', 'recursion', 'hard', 'crecursionhard15', 'xc1', 'xc3', 'xc5', 'xc7', 'xc1'),
(25, 'C', 'recursion', 'hard', 'crecursionhard16', 't5', 't10', 't15', 't20', 't20'),
(26, 'C', 'recursion', 'hard', 'crecursionhard17', '20', '21', '22', '23', '23'),
(27, 'C', 'recursion', 'hard', 'crecursionhard18', 'nas', 'san', 'ans', 'sna', 'nas'),
(28, 'C', 'recursion', 'hard', 'crecursionhard19', 'gta', 'tag', 'agt', 'gtaxp', 'gtaxp'),
(29, 'C', 'recursion', 'hard', 'crecursionhard20', 'math', 'mathe', 'mathem', 'mathematics', 'math'),
(30, 'PYTHON', 'string', 'easy', 'pystringeasy1', 'abcd', 'bcda', 'dacb', 'bcad', 'abcd'),
(31, 'PYTHON', 'string', 'easy', 'pystringeasy2', 'f45', 'f54', 'f56', 'f67', 'f67'),
(32, 'PYTHON', 'string', 'easy', 'pystringeasy3', 'exw21', 'exa23', 'exb45', 'exb69', 'exb45'),
(33, 'PYTHON', 'string', 'easy', 'pystringeasy4', 'kyoka', 'blaster', 'qwerty', 'gtasa', 'blaster'),
(34, 'PYTHON', 'string', 'easy', 'pystringeasy5', 'remo9', 'remo8', 'remo7', 'remo2', 'remo8'),
(35, 'PYTHON', 'string', 'easy', 'pystringeasy6', 'utopiad', 'utopiac', 'utopias', 'utopiah', 'utopiah'),
(36, 'PYTHON', 'string', 'easy', 'pystringeasy7', 'nat59', 'nat67', 'nat41', 'nat300', 'nat300'),
(37, 'PYTHON', 'string', 'easy', 'pystringeasy8', 'ss', 'sad', 'ser', 'cbi', 'ser'),
(38, 'PYTHON', 'string', 'easy', 'pystringeasy9', '6767', '6787', '6797', '6777', '6767'),
(39, 'PYTHON', 'string', 'easy', 'pystringeasy10', 'ezd', 'dez', 'zed', 'edz', 'zed'),
(40, 'PYTHON', 'string', 'easy', 'pystringeasy11', 'xp', 'xpa', 'xpb', 'xpc', 'xp'),
(41, 'PYTHON', 'string', 'easy', 'pystringeasy12', 'terminal', 'terminalvb', 'terminalvbs', 'terminalvbx', 'terminal'),
(42, 'PYTHON', 'string', 'easy', 'pystringeasy13', 'cool', 'cool2', 'coolx', 'cool56789', 'coolx'),
(43, 'PYTHON', 'string', 'easy', 'pystringeasy14', 'port', 'usb', 'api', 'asi', 'usb'),
(44, 'PYTHON', 'string', 'easy', 'pystringeasy15', 'vga', 'hdmi', 'displayport', 'av2', 'hdmi'),
(45, 'PYTHON', 'string', 'easy', 'pystringeasy16', 'rdr3', 'rdr2', 'rdr1', 'rdr0', 'rdr0'),
(46, 'PYTHON', 'string', 'easy', 'pystringeasy17', '3245ty', '3456yt', '3245ff', '4567you', '3456yt'),
(47, 'PYTHON', 'string', 'easy', 'pystringeasy18', 'remiser', 'remider', 'remixer', 'remizer', 'remiser'),
(48, 'PYTHON', 'string', 'easy', 'pystringeasy19', 'lod23', 'lod45', 'lod67', 'lod89', 'lod89'),
(49, 'PYTHON', 'string', 'easy', 'pystringeasy20', '230op', '230po', '230ip', '230pp', '230ip'),
(50, 'PYTHON', 'string', 'moderate', 'pystringmod1', 'ipo', 'opi', 'opk', 'apk', 'apk'),
(51, 'PYTHON', 'string', 'moderate', 'pystringmod2', 'flask', 'flaks', 'flaksh', 'khandip', 'flask'),
(52, 'PYTHON', 'string', 'moderate', 'pystringmod3', 'mod4', 'mod5', 'mod50', 'mod67', 'mod67'),
(53, 'PYTHON', 'string', 'moderate', 'pystringmod4', 'ghpghp', 'phgphg', 'ghpphg', 'phgghp', 'phgghp'),
(54, 'PYTHON', 'string', 'moderate', 'pystringmod5', 'youtube', 'twitter', 'yahoo', 'facebookm', 'facebookm'),
(55, 'PYTHON', 'string', 'moderate', 'pystringmod6', '435', '345', '453', '543', '543'),
(56, 'PYTHON', 'string', 'moderate', 'pystringmod7', 'kmod', 'gmod', 'smod', 'xmod', 'gmod'),
(57, 'PYTHON', 'string', 'moderate', 'pystringmod8', 'a', 'b', 'c', 'd', 'c'),
(58, 'PYTHON', 'string', 'moderate', 'pystringmod9', 'mac', 'macos', 'macosx', 'macosxsierra', 'macosxsierra'),
(59, 'PYTHON', 'string', 'moderate', 'pystringmod10', 'century', 'rentury', 'ventury', 'dentury', 'century');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `question_master`
--
ALTER TABLE `question_master`
  ADD PRIMARY KEY (`qid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `question_master`
--
ALTER TABLE `question_master`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

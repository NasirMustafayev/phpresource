-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 07, 2021 at 05:17 AM
-- Server version: 5.7.17-log
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `veryserious`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` varchar(500) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `user_id`, `comment`) VALUES
(2, 1, 1, 'Vivamus vehicula lorem eu est sodales, sit amet sollicitudin massa sodales. Nunc et lorem eget ex bibendum molestie. Vivamus faucibus dapibus felis vitae vulputate. Proin quis ullamcorper est. Phasellus at dapibus quam, ut accumsan lorem. Fusce libero dui, luctus a lectus ut, maximus vehicula lectus. Curabitur ac urna arcu.'),
(3, 1, 1, 'Vivamus vehicula lorem eu est sodales, sit amet sollicitudin massa sodales. Nunc et lorem eget ex bibendum molestie. Vivamus faucibus dapibus felis vitae vulputate. Proin quis ullamcorper est. Phasellus at dapibus quam, ut accumsan lorem. Fusce libero dui, luctus a lectus ut, maximus vehicula lectus. Curabitur ac urna arcu.'),
(4, 2, 1, 'Vivamus vehicula lorem eu est sodales, sit amet sollicitudin massa sodales. Nunc et lorem eget ex bibendum molestie. Vivamus faucibus dapibus felis vitae vulputate. Proin quis ullamcorper est. Phasellus at dapibus quam, ut accumsan lorem. Fusce libero dui, luctus a lectus ut, maximus vehicula lectus. Curabitur ac urna arcu.'),
(5, 3, 1, 'Vivamus vehicula lorem eu est sodales, sit amet sollicitudin massa sodales. Nunc et lorem eget ex bibendum molestie. Vivamus faucibus dapibus felis vitae vulputate. Proin quis ullamcorper est. Phasellus at dapibus quam, ut accumsan lorem. Fusce libero dui, luctus a lectus ut, maximus vehicula lectus. Curabitur ac urna arcu.'),
(6, 5, 2, 'Vivamus vehicula lorem eu est sodales, sit amet sollicitudin massa sodales. Nunc et lorem eget ex bibendum molestie. Vivamus faucibus dapibus felis vitae vulputate. Proin quis ullamcorper est. Phasellus at dapibus quam, ut accumsan lorem. Fusce libero dui, luctus a lectus ut, maximus vehicula lectus. Curabitur ac urna arcu.'),
(7, 6, 2, 'Vivamus vehicula lorem eu est sodales, sit amet sollicitudin massa sodales. Nunc et lorem eget ex bibendum molestie. Vivamus faucibus dapibus felis vitae vulputate. Proin quis ullamcorper est. Phasellus at dapibus quam, ut accumsan lorem. Fusce libero dui, luctus a lectus ut, maximus vehicula lectus. Curabitur ac urna arcu.'),
(8, 4, 2, 'Vivamus vehicula lorem eu est sodales, sit amet sollicitudin massa sodales. Nunc et lorem eget ex bibendum molestie. Vivamus faucibus dapibus felis vitae vulputate. Proin quis ullamcorper est. Phasellus at dapibus quam, ut accumsan lorem. Fusce libero dui, luctus a lectus ut, maximus vehicula lectus. Curabitur ac urna arcu.'),
(9, 2, 2, 'Vivamus vehicula lorem eu est sodales, sit amet sollicitudin massa sodales. Nunc et lorem eget ex bibendum molestie. Vivamus faucibus dapibus felis vitae vulputate. Proin quis ullamcorper est. Phasellus at dapibus quam, ut accumsan lorem. Fusce libero dui, luctus a lectus ut, maximus vehicula lectus. Curabitur ac urna arcu.'),
(10, 6, 1, 'Vivamus vehicula lorem eu est sodales, sit amet sollicitudin massa sodales. Nunc et lorem eget ex bibendum molestie. Vivamus faucibus dapibus felis vitae vulputate. Proin quis ullamcorper est. Phasellus at dapibus quam, ut accumsan lorem. Fusce libero dui, luctus a lectus ut, maximus vehicula lectus. Curabitur ac urna arcu.'),
(11, 5, 1, 'Vivamus vehicula lorem eu est sodales, sit amet sollicitudin massa sodales. Nunc et lorem eget ex bibendum molestie. Vivamus faucibus dapibus felis vitae vulputate. Proin quis ullamcorper est. Phasellus at dapibus quam, ut accumsan lorem. Fusce libero dui, luctus a lectus ut, maximus vehicula lectus. Curabitur ac urna arcu.'),
(12, 4, 1, 'Vivamus vehicula lorem eu est sodales, sit amet sollicitudin massa sodales. Nunc et lorem eget ex bibendum molestie. Vivamus faucibus dapibus felis vitae vulputate. Proin quis ullamcorper est. Phasellus at dapibus quam, ut accumsan lorem. Fusce libero dui, luctus a lectus ut, maximus vehicula lectus. Curabitur ac urna arcu.'),
(13, 9, 2, 'Vivamus vehicula lorem eu est sodales, sit amet sollicitudin massa sodales. Nunc et lorem eget ex bibendum molestie. Vivamus faucibus dapibus felis vitae vulputate. Proin quis ullamcorper est. Phasellus at dapibus quam, ut accumsan lorem. Fusce libero dui, luctus a lectus ut, maximus vehicula lectus. Curabitur ac urna arcu.'),
(14, 7, 2, 'Vivamus vehicula lorem eu est sodales, sit amet sollicitudin massa sodales. Nunc et lorem eget ex bibendum molestie. Vivamus faucibus dapibus felis vitae vulputate. Proin quis ullamcorper est. Phasellus at dapibus quam, ut accumsan lorem. Fusce libero dui, luctus a lectus ut, maximus vehicula lectus. Curabitur ac urna arcu.'),
(15, 9, 1, 'Vivamus vehicula lorem eu est sodales, sit amet sollicitudin massa sodales. Nunc et lorem eget ex bibendum molestie. Vivamus faucibus dapibus felis vitae vulputate. Proin quis ullamcorper est. Phasellus at dapibus quam, ut accumsan lorem. Fusce libero dui, luctus a lectus ut, maximus vehicula lectus. Curabitur ac urna arcu.');

-- --------------------------------------------------------

--
-- Table structure for table `hottag`
--

CREATE TABLE `hottag` (
  `id` int(11) NOT NULL,
  `hottag` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `hottag`
--

INSERT INTO `hottag` (`id`, `hottag`) VALUES
(1, 'lorem ipsum');

-- --------------------------------------------------------

--
-- Table structure for table `postphotos`
--

CREATE TABLE `postphotos` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `postphoto` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `postphotos`
--

INSERT INTO `postphotos` (`id`, `post_id`, `postphoto`) VALUES
(1, 1, 'imgs/posts/124741wallhaven-363455.png'),
(2, 1, 'imgs/posts/130895sunset-5120x2880-forest-minimal-4k-8k-5165.jpg'),
(3, 1, 'imgs/posts/111127mountains-moon-trees-minimalism-hd.jpg'),
(4, 2, 'imgs/posts/22150mountains-moon-trees-minimalism-hd.jpg'),
(5, 2, 'imgs/posts/252162forest-3840x2400-sunset-fox-4k-15517.jpg'),
(6, 2, 'imgs/posts/251000aZi2TLL.jpg'),
(7, 3, 'imgs/posts/3740410a7fc96b62f3a22b03b67da2a48bb721b78c.jpg'),
(8, 3, 'imgs/posts/3287134k_low_poly_minimalist_diamond_wallpaper_by_onlinemanonlineman-dazon0r.png'),
(9, 3, 'imgs/posts/3757498166.jpg'),
(10, 4, 'imgs/posts/4553444k_low_poly_minimalist_diamond_wallpaper_by_onlinemanonlineman-dazon0r.png'),
(11, 4, 'imgs/posts/434777wallhaven-363455.png'),
(12, 4, 'imgs/posts/446264wp2182357-snake-skin-wallpapers.jpg'),
(13, 5, 'imgs/posts/582975358A1341.jpg'),
(14, 5, 'imgs/posts/587228P2IQhJSr.png'),
(15, 6, 'imgs/posts/6393506467.jpg'),
(16, 6, 'imgs/posts/6631025um42X.jpg'),
(17, 7, 'imgs/posts/731958358A1341.jpg'),
(18, 7, 'imgs/posts/7783906467.jpg'),
(21, 9, 'imgs/posts/971843Ekran görüntüsü 2021-08-13 161728.png'),
(22, 9, 'imgs/posts/9124306467.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `posttitle` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `seotitle` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `post` text COLLATE utf8_turkish_ci,
  `postthumb` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tubelink` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `postdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `postview` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `posttitle`, `seotitle`, `post`, `postthumb`, `tubelink`, `postdate`, `postview`) VALUES
(1, 1, 'There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...', 'there-is-no-one-who-loves-pain-itself-who-seeks-after-it-and-wants-to-have-it-simply-because-it-is-pain', 'Vivamus vehicula lorem eu est sodales, sit amet sollicitudin massa sodales. Nunc et lorem eget ex bibendum molestie. Vivamus faucibus dapibus felis vitae vulputate. Proin quis ullamcorper est. Phasellus at dapibus quam, ut accumsan lorem. Fusce libero dui, luctus a lectus ut, maximus vehicula lectus. Curabitur ac urna arcu.\r\n\r\nCras eu nisi eu risus fermentum viverra in sit amet ex. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas semper elit sit amet porttitor mollis. In consectetur rhoncus risus eu commodo. Aenean arcu dolor, fringilla fermentum mauris vel, feugiat lacinia mauris. Cras tempus aliquet dui, ac rutrum velit semper et. Etiam nec vestibulum dui. Donec viverra vel felis sit amet imperdiet. Nulla fermentum nibh sit amet nisi placerat, quis posuere mi aliquam. Donec facilisis laoreet pretium. Fusce a rhoncus augue. Donec cursus sit amet lectus nec gravida. Donec id malesuada turpis. In vehicula erat felis, ac congue sem condimentum nec. Donec pulvinar euismod risus, nec vulputate ante ornare at.\r\n\r\nDuis et arcu in erat vehicula mollis. Maecenas rhoncus euismod ullamcorper. Fusce non aliquam tortor. Quisque ut diam eget orci finibus commodo eu eget sem. Proin eu metus vitae nisi eleifend iaculis. Phasellus at tellus turpis. Etiam justo sapien, faucibus a tincidunt non, elementum ac massa. Praesent faucibus placerat felis, ut tincidunt elit tincidunt cursus. Maecenas consequat placerat dictum. Morbi nec nibh ultricies, luctus purus sit amet, sodales velit. Aenean blandit magna lorem, id gravida nibh rhoncus ac. Nunc mollis dignissim ante, in elementum enim rhoncus eget.\r\n\r\nCras convallis, nulla eu hendrerit eleifend, odio enim laoreet velit, et congue metus risus ut lacus. Donec finibus orci nunc, a euismod ligula ultrices sit amet. Nunc eget sodales quam, in auctor tortor. Etiam purus urna, scelerisque sed tempor quis, sodales eu lorem. Suspendisse egestas ullamcorper velit, aliquet egestas quam tristique suscipit. Praesent malesuada est eu sem commodo accumsan. Nam neque lectus, lacinia vel tortor ut, ultricies finibus nunc. Nulla facilisi. Donec a dictum elit, eget tincidunt est. Nulla et commodo lorem. Sed nec dictum metus. Donec elementum enim nisi, eget sagittis velit dictum sit amet. Sed porta venenatis est quis sollicitudin. Vivamus viverra ipsum in dolor dapibus congue. In odio dui, placerat nec nibh eget, suscipit ornare ligula. Pellentesque tristique nulla et vehicula blandit.\r\n\r\nQuisque vitae ligula leo. Vivamus sollicitudin iaculis consequat. Duis rhoncus luctus enim, a facilisis diam pulvinar id. Sed mollis euismod dui eget suscipit. Donec dignissim porta tellus, id fringilla tellus malesuada porta. Etiam sed dolor sed quam molestie commodo vitae non lacus. Cras consectetur diam et enim consequat aliquet. Nulla facilisi. Pellentesque eget est varius, suscipit felis non, blandit dolor. Morbi egestas nulla sed tellus elementum, at tristique nisi vestibulum. Nullam ut leo aliquet, pretium libero eu, venenatis lorem. Praesent auctor volutpat malesuada.', 'imgs/posts/thumb/1here is no one who l7387P2IQhJSr.png', NULL, '2021-08-12 15:54:09', 21),
(2, 1, 'There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...', 'there-is-no-one-who-loves-pain-itself-who-seeks-after-it-and-wants-to-have-it-simply-because-it-is-pain', 'Vivamus vehicula lorem eu est sodales, sit amet sollicitudin massa sodales. Nunc et lorem eget ex bibendum molestie. Vivamus faucibus dapibus felis vitae vulputate. Proin quis ullamcorper est. Phasellus at dapibus quam, ut accumsan lorem. Fusce libero dui, luctus a lectus ut, maximus vehicula lectus. Curabitur ac urna arcu.\r\n\r\nCras eu nisi eu risus fermentum viverra in sit amet ex. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas semper elit sit amet porttitor mollis. In consectetur rhoncus risus eu commodo. Aenean arcu dolor, fringilla fermentum mauris vel, feugiat lacinia mauris. Cras tempus aliquet dui, ac rutrum velit semper et. Etiam nec vestibulum dui. Donec viverra vel felis sit amet imperdiet. Nulla fermentum nibh sit amet nisi placerat, quis posuere mi aliquam. Donec facilisis laoreet pretium. Fusce a rhoncus augue. Donec cursus sit amet lectus nec gravida. Donec id malesuada turpis. In vehicula erat felis, ac congue sem condimentum nec. Donec pulvinar euismod risus, nec vulputate ante ornare at.\r\n\r\nDuis et arcu in erat vehicula mollis. Maecenas rhoncus euismod ullamcorper. Fusce non aliquam tortor. Quisque ut diam eget orci finibus commodo eu eget sem. Proin eu metus vitae nisi eleifend iaculis. Phasellus at tellus turpis. Etiam justo sapien, faucibus a tincidunt non, elementum ac massa. Praesent faucibus placerat felis, ut tincidunt elit tincidunt cursus. Maecenas consequat placerat dictum. Morbi nec nibh ultricies, luctus purus sit amet, sodales velit. Aenean blandit magna lorem, id gravida nibh rhoncus ac. Nunc mollis dignissim ante, in elementum enim rhoncus eget.\r\n\r\nCras convallis, nulla eu hendrerit eleifend, odio enim laoreet velit, et congue metus risus ut lacus. Donec finibus orci nunc, a euismod ligula ultrices sit amet. Nunc eget sodales quam, in auctor tortor. Etiam purus urna, scelerisque sed tempor quis, sodales eu lorem. Suspendisse egestas ullamcorper velit, aliquet egestas quam tristique suscipit. Praesent malesuada est eu sem commodo accumsan. Nam neque lectus, lacinia vel tortor ut, ultricies finibus nunc. Nulla facilisi. Donec a dictum elit, eget tincidunt est. Nulla et commodo lorem. Sed nec dictum metus. Donec elementum enim nisi, eget sagittis velit dictum sit amet. Sed porta venenatis est quis sollicitudin. Vivamus viverra ipsum in dolor dapibus congue. In odio dui, placerat nec nibh eget, suscipit ornare ligula. Pellentesque tristique nulla et vehicula blandit.\r\n\r\nQuisque vitae ligula leo. Vivamus sollicitudin iaculis consequat. Duis rhoncus luctus enim, a facilisis diam pulvinar id. Sed mollis euismod dui eget suscipit. Donec dignissim porta tellus, id fringilla tellus malesuada porta. Etiam sed dolor sed quam molestie commodo vitae non lacus. Cras consectetur diam et enim consequat aliquet. Nulla facilisi. Pellentesque eget est varius, suscipit felis non, blandit dolor. Morbi egestas nulla sed tellus elementum, at tristique nisi vestibulum. Nullam ut leo aliquet, pretium libero eu, venenatis lorem. Praesent auctor volutpat malesuada.\r\nhttp://nasirmustafayev.byethost4.com/veryserious', 'imgs/posts/thumb/1here is no one who l3520mountains-moon-trees-minimalism-hd.jpg', 'https://www.youtube.com/watch?v=m9ezpAUvMC8', '2021-08-13 15:54:24', 11),
(3, 1, 'There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...', 'there-is-no-one-who-loves-pain-itself-who-seeks-after-it-and-wants-to-have-it-simply-because-it-is-pain', 'Vivamus vehicula lorem eu est sodales, sit amet sollicitudin massa sodales. Nunc et lorem eget ex bibendum molestie. Vivamus faucibus dapibus felis vitae vulputate. Proin quis ullamcorper est. Phasellus at dapibus quam, ut accumsan lorem. Fusce libero dui, luctus a lectus ut, maximus vehicula lectus. Curabitur ac urna arcu.\r\n\r\nCras eu nisi eu risus fermentum viverra in sit amet ex. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas semper elit sit amet porttitor mollis. In consectetur rhoncus risus eu commodo. Aenean arcu dolor, fringilla fermentum mauris vel, feugiat lacinia mauris. Cras tempus aliquet dui, ac rutrum velit semper et. Etiam nec vestibulum dui. Donec viverra vel felis sit amet imperdiet. Nulla fermentum nibh sit amet nisi placerat, quis posuere mi aliquam. Donec facilisis laoreet pretium. Fusce a rhoncus augue. Donec cursus sit amet lectus nec gravida. Donec id malesuada turpis. In vehicula erat felis, ac congue sem condimentum nec. Donec pulvinar euismod risus, nec vulputate ante ornare at.\r\n\r\nDuis et arcu in erat vehicula mollis. Maecenas rhoncus euismod ullamcorper. Fusce non aliquam tortor. Quisque ut diam eget orci finibus commodo eu eget sem. Proin eu metus vitae nisi eleifend iaculis. Phasellus at tellus turpis. Etiam justo sapien, faucibus a tincidunt non, elementum ac massa. Praesent faucibus placerat felis, ut tincidunt elit tincidunt cursus. Maecenas consequat placerat dictum. Morbi nec nibh ultricies, luctus purus sit amet, sodales velit. Aenean blandit magna lorem, id gravida nibh rhoncus ac. Nunc mollis dignissim ante, in elementum enim rhoncus eget.\r\n\r\nCras convallis, nulla eu hendrerit eleifend, odio enim laoreet velit, et congue metus risus ut lacus. Donec finibus orci nunc, a euismod ligula ultrices sit amet. Nunc eget sodales quam, in auctor tortor. Etiam purus urna, scelerisque sed tempor quis, sodales eu lorem. Suspendisse egestas ullamcorper velit, aliquet egestas quam tristique suscipit. Praesent malesuada est eu sem commodo accumsan. Nam neque lectus, lacinia vel tortor ut, ultricies finibus nunc. Nulla facilisi. Donec a dictum elit, eget tincidunt est. Nulla et commodo lorem. Sed nec dictum metus. Donec elementum enim nisi, eget sagittis velit dictum sit amet. Sed porta venenatis est quis sollicitudin. Vivamus viverra ipsum in dolor dapibus congue. In odio dui, placerat nec nibh eget, suscipit ornare ligula. Pellentesque tristique nulla et vehicula blandit.\r\nhttp://nasirmustafayev.byethost4.com/veryserious\r\nQuisque vitae ligula leo. Vivamus sollicitudin iaculis consequat. Duis rhoncus luctus enim, a facilisis diam pulvinar id. Sed mollis euismod dui eget suscipit. Donec dignissim porta tellus, id fringilla tellus malesuada porta. Etiam sed dolor sed quam molestie commodo vitae non lacus. Cras consectetur diam et enim consequat aliquet. Nulla facilisi. Pellentesque eget est varius, suscipit felis non, blandit dolor. Morbi egestas nulla sed tellus elementum, at tristique nisi vestibulum. Nullam ut leo aliquet, pretium libero eu, venenatis lorem. Praesent auctor volutpat malesuada.', 'imgs/posts/thumb/1here is no one who l96850a7fc96b62f3a22b03b67da2a48bb721b78c.jpg', 'https://www.youtube.com/watch?v=xtDQF0J6NjY', '2021-08-13 15:54:47', 8),
(4, 2, 'There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...', 'there-is-no-one-who-loves-pain-itself-who-seeks-after-it-and-wants-to-have-it-simply-because-it-is-pain', 'Vivamus vehicula lorem eu est sodales, sit amet sollicitudin massa sodales. Nunc et lorem eget ex bibendum molestie. Vivamus faucibus dapibus felis vitae vulputate. Proin quis ullamcorper est. Phasellus at dapibus quam, ut accumsan lorem. Fusce libero dui, luctus a lectus ut, maximus vehicula lectus. Curabitur ac urna arcu.\r\n\r\nCras eu nisi eu risus fermentum viverra in sit amet ex. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas semper elit sit amet porttitor mollis. In consectetur rhoncus risus eu commodo. Aenean arcu dolor, fringilla fermentum mauris vel, feugiat lacinia mauris. Cras tempus aliquet dui, ac rutrum velit semper et. Etiam nec vestibulum dui. Donec viverra vel felis sit amet imperdiet. Nulla fermentum nibh sit amet nisi placerat, quis posuere mi aliquam. Donec facilisis laoreet pretium. Fusce a rhoncus augue. Donec cursus sit amet lectus nec gravida. Donec id malesuada turpis. In vehicula erat felis, ac congue sem condimentum nec. Donec pulvinar euismod risus, nec vulputate ante ornare at.\r\n\r\nDuis et arcu in erat vehicula mollis. Maecenas rhoncus euismod ullamcorper. Fusce non aliquam tortor. Quisque ut diam eget orci finibus commodo eu eget sem. Proin eu metus vitae nisi eleifend iaculis. Phasellus at tellus turpis. Etiam justo sapien, faucibus a tincidunt non, elementum ac massa. Praesent faucibus placerat felis, ut tincidunt elit tincidunt cursus. Maecenas consequat placerat dictum. Morbi nec nibh ultricies, luctus purus sit amet, sodales velit. Aenean blandit magna lorem, id gravida nibh rhoncus ac. Nunc mollis dignissim ante, in elementum enim rhoncus eget.\r\n\r\nCras convallis, nulla eu hendrerit eleifend, odio enim laoreet velit, et congue metus risus ut lacus. Donec finibus orci nunc, a euismod ligula ultrices sit amet. Nunc eget sodales quam, in auctor tortor. Etiam purus urna, scelerisque sed tempor quis, sodales eu lorem. Suspendisse egestas ullamcorper velit, aliquet egestas quam tristique suscipit. Praesent malesuada est eu sem commodo accumsan. Nam neque lectus, lacinia vel tortor ut, ultricies finibus nunc. Nulla facilisi. Donec a dictum elit, eget tincidunt est. Nulla et commodo lorem. Sed nec dictum metus. Donec elementum enim nisi, eget sagittis velit dictum sit amet. Sed porta venenatis est quis sollicitudin. Vivamus viverra ipsum in dolor dapibus congue. In odio dui, placerat nec nibh eget, suscipit ornare ligula. Pellentesque tristique nulla et vehicula blandit.\r\n\r\nQuisque vitae ligula leo. Vivamus sollicitudin iaculis consequat. Duis rhoncus luctus enim, a facilisis diam pulvinar id. Sed mollis euismod dui eget suscipit. Donec dignissim porta tellus, id fringilla tellus malesuada porta. Etiam sed dolor sed quam molestie commodo vitae non lacus. Cras consectetur diam et enim consequat aliquet. Nulla facilisi. Pellentesque eget est varius, suscipit felis non, blandit dolor. Morbi egestas nulla sed tellus elementum, at tristique nisi vestibulum. Nullam ut leo aliquet, pretium libero eu, venenatis lorem. Praesent auctor volutpat malesuada.', 'imgs/posts/thumb/2here is no one who l7412wallhaven-363455.png', NULL, '2021-08-13 16:00:20', 5),
(5, 2, 'There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...', 'there-is-no-one-who-loves-pain-itself-who-seeks-after-it-and-wants-to-have-it-simply-because-it-is-pain', 'Vivamus vehicula lorem eu est sodales, sit amet sollicitudin massa sodales. Nunc et lorem eget ex bibendum molestie. Vivamus faucibus dapibus felis vitae vulputate. Proin quis ullamcorper est. Phasellus at dapibus quam, ut accumsan lorem. Fusce libero dui, luctus a lectus ut, maximus vehicula lectus. Curabitur ac urna arcu.\r\n\r\nCras eu nisi eu risus fermentum viverra in sit amet ex. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas semper elit sit amet porttitor mollis. In consectetur rhoncus risus eu commodo. Aenean arcu dolor, fringilla fermentum mauris vel, feugiat lacinia mauris. Cras tempus aliquet dui, ac rutrum velit semper et. Etiam nec vestibulum dui. Donec viverra vel felis sit amet imperdiet. Nulla fermentum nibh sit amet nisi placerat, quis posuere mi aliquam. Donec facilisis laoreet pretium. Fusce a rhoncus augue. Donec cursus sit amet lectus nec gravida. Donec id malesuada turpis. In vehicula erat felis, ac congue sem condimentum nec. Donec pulvinar euismod risus, nec vulputate ante ornare at.\r\n\r\nDuis et arcu in erat vehicula mollis. Maecenas rhoncus euismod ullamcorper. Fusce non aliquam tortor. Quisque ut diam eget orci finibus commodo eu eget sem. Proin eu metus vitae nisi eleifend iaculis. Phasellus at tellus turpis. Etiam justo sapien, faucibus a tincidunt non, elementum ac massa. Praesent faucibus placerat felis, ut tincidunt elit tincidunt cursus. Maecenas consequat placerat dictum. Morbi nec nibh ultricies, luctus purus sit amet, sodales velit. Aenean blandit magna lorem, id gravida nibh rhoncus ac. Nunc mollis dignissim ante, in elementum enim rhoncus eget.\r\n\r\nCras convallis, nulla eu hendrerit eleifend, odio enim laoreet velit, et congue metus risus ut lacus. Donec finibus orci nunc, a euismod ligula ultrices sit amet. Nunc eget sodales quam, in auctor tortor. Etiam purus urna, scelerisque sed tempor quis, sodales eu lorem. Suspendisse egestas ullamcorper velit, aliquet egestas quam tristique suscipit. Praesent malesuada est eu sem commodo accumsan. Nam neque lectus, lacinia vel tortor ut, ultricies finibus nunc. Nulla facilisi. Donec a dictum elit, eget tincidunt est. Nulla et commodo lorem. Sed nec dictum metus. Donec elementum enim nisi, eget sagittis velit dictum sit amet. Sed porta venenatis est quis sollicitudin. Vivamus viverra ipsum in dolor dapibus congue. In odio dui, placerat nec nibh eget, suscipit ornare ligula. Pellentesque tristique nulla et vehicula blandit.\r\n\r\nQuisque vitae ligula leo. Vivamus sollicitudin iaculis consequat. Duis rhoncus luctus enim, a facilisis diam pulvinar id. Sed mollis euismod dui eget suscipit. Donec dignissim porta tellus, id fringilla tellus malesuada porta. Etiam sed dolor sed quam molestie commodo vitae non lacus. Cras consectetur diam et enim consequat aliquet. Nulla facilisi. Pellentesque eget est varius, suscipit felis non, blandit dolor. Morbi egestas nulla sed tellus elementum, at tristique nisi vestibulum. Nullam ut leo aliquet, pretium libero eu, venenatis lorem. Praesent auctor volutpat malesuada.', 'imgs/posts/thumb/2here is no one who l6659wp2182357-snake-skin-wallpapers.jpg', NULL, '2021-08-13 16:01:34', 7),
(6, 2, 'There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...', 'there-is-no-one-who-loves-pain-itself-who-seeks-after-it-and-wants-to-have-it-simply-because-it-is-pain', 'Vivamus vehicula lorem eu est sodales, sit amet sollicitudin massa sodales. Nunc et lorem eget ex bibendum molestie. Vivamus faucibus dapibus felis vitae vulputate. Proin quis ullamcorper est. Phasellus at dapibus quam, ut accumsan lorem. Fusce libero dui, luctus a lectus ut, maximus vehicula lectus. Curabitur ac urna arcu.\r\n\r\nCras eu nisi eu risus fermentum viverra in sit amet ex. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas semper elit sit amet porttitor mollis. In consectetur rhoncus risus eu commodo. Aenean arcu dolor, fringilla fermentum mauris vel, feugiat lacinia mauris. Cras tempus aliquet dui, ac rutrum velit semper et. Etiam nec vestibulum dui. Donec viverra vel felis sit amet imperdiet. Nulla fermentum nibh sit amet nisi placerat, quis posuere mi aliquam. Donec facilisis laoreet pretium. Fusce a rhoncus augue. Donec cursus sit amet lectus nec gravida. Donec id malesuada turpis. In vehicula erat felis, ac congue sem condimentum nec. Donec pulvinar euismod risus, nec vulputate ante ornare at.\r\n\r\nDuis et arcu in erat vehicula mollis. Maecenas rhoncus euismod ullamcorper. Fusce non aliquam tortor. Quisque ut diam eget orci finibus commodo eu eget sem. Proin eu metus vitae nisi eleifend iaculis. Phasellus at tellus turpis. Etiam justo sapien, faucibus a tincidunt non, elementum ac massa. Praesent faucibus placerat felis, ut tincidunt elit tincidunt cursus. Maecenas consequat placerat dictum. Morbi nec nibh ultricies, luctus purus sit amet, sodales velit. Aenean blandit magna lorem, id gravida nibh rhoncus ac. Nunc mollis dignissim ante, in elementum enim rhoncus eget.\r\n\r\nCras convallis, nulla eu hendrerit eleifend, odio enim laoreet velit, et congue metus risus ut lacus. Donec finibus orci nunc, a euismod ligula ultrices sit amet. Nunc eget sodales quam, in auctor tortor. Etiam purus urna, scelerisque sed tempor quis, sodales eu lorem. Suspendisse egestas ullamcorper velit, aliquet egestas quam tristique suscipit. Praesent malesuada est eu sem commodo accumsan. Nam neque lectus, lacinia vel tortor ut, ultricies finibus nunc. Nulla facilisi. Donec a dictum elit, eget tincidunt est. Nulla et commodo lorem. Sed nec dictum metus. Donec elementum enim nisi, eget sagittis velit dictum sit amet. Sed porta venenatis est quis sollicitudin. Vivamus viverra ipsum in dolor dapibus congue. In odio dui, placerat nec nibh eget, suscipit ornare ligula. Pellentesque tristique nulla et vehicula blandit.\r\nhttp://nasirmustafayev.byethost4.com/veryserious\r\nQuisque vitae ligula leo. Vivamus sollicitudin iaculis consequat. Duis rhoncus luctus enim, a facilisis diam pulvinar id. Sed mollis euismod dui eget suscipit. Donec dignissim porta tellus, id fringilla tellus malesuada porta. Etiam sed dolor sed quam molestie commodo vitae non lacus. Cras consectetur diam et enim consequat aliquet. Nulla facilisi. Pellentesque eget est varius, suscipit felis non, blandit dolor. Morbi egestas nulla sed tellus elementum, at tristique nisi vestibulum. Nullam ut leo aliquet, pretium libero eu, venenatis lorem. Praesent auctor volutpat malesuada.', 'imgs/posts/thumb/2here is no one who l92596467.jpg', 'https://www.youtube.com/watch?v=WHPEKLQID4U', '2021-08-13 16:03:48', 5),
(7, 1, 'There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...', 'there-is-no-one-who-loves-pain-itself-who-seeks-after-it-and-wants-to-have-it-simply-because-it-is-pain', 'Vivamus vehicula lorem eu est sodales, sit amet sollicitudin massa sodales. Nunc et lorem eget ex bibendum molestie. Vivamus faucibus dapibus felis vitae vulputate. Proin quis ullamcorper est. Phasellus at dapibus quam, ut accumsan lorem. Fusce libero dui, luctus a lectus ut, maximus vehicula lectus. Curabitur ac urna arcu.\r\n\r\nCras eu nisi eu risus fermentum viverra in sit amet ex. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas semper elit sit amet porttitor mollis. In consectetur rhoncus risus eu commodo. Aenean arcu dolor, fringilla fermentum mauris vel, feugiat lacinia mauris. Cras tempus aliquet dui, ac rutrum velit semper et. Etiam nec vestibulum dui. Donec viverra vel felis sit amet imperdiet. Nulla fermentum nibh sit amet nisi placerat, quis posuere mi aliquam. Donec facilisis laoreet pretium. Fusce a rhoncus augue. Donec cursus sit amet lectus nec gravida. Donec id malesuada turpis. In vehicula erat felis, ac congue sem condimentum nec. Donec pulvinar euismod risus, nec vulputate ante ornare at.\r\n\r\nDuis et arcu in erat vehicula mollis. Maecenas rhoncus euismod ullamcorper. Fusce non aliquam tortor. Quisque ut diam eget orci finibus commodo eu eget sem. Proin eu metus vitae nisi eleifend iaculis. Phasellus at tellus turpis. Etiam justo sapien, faucibus a tincidunt non, elementum ac massa. Praesent faucibus placerat felis, ut tincidunt elit tincidunt cursus. Maecenas consequat placerat dictum. Morbi nec nibh ultricies, luctus purus sit amet, sodales velit. Aenean blandit magna lorem, id gravida nibh rhoncus ac. Nunc mollis dignissim ante, in elementum enim rhoncus eget.\r\n\r\nCras convallis, nulla eu hendrerit eleifend, odio enim laoreet velit, et congue metus risus ut lacus. Donec finibus orci nunc, a euismod ligula ultrices sit amet. Nunc eget sodales quam, in auctor tortor. Etiam purus urna, scelerisque sed tempor quis, sodales eu lorem. Suspendisse egestas ullamcorper velit, aliquet egestas quam tristique suscipit. Praesent malesuada est eu sem commodo accumsan. Nam neque lectus, lacinia vel tortor ut, ultricies finibus nunc. Nulla facilisi. Donec a dictum elit, eget tincidunt est. Nulla et commodo lorem. Sed nec dictum metus. Donec elementum enim nisi, eget sagittis velit dictum sit amet. Sed porta venenatis est quis sollicitudin. Vivamus viverra ipsum in dolor dapibus congue. In odio dui, placerat nec nibh eget, suscipit ornare ligula. Pellentesque tristique nulla et vehicula blandit.\r\nhttp://nasirmustafayev.byethost4.com/veryserious\r\nQuisque vitae ligula leo. Vivamus sollicitudin iaculis consequat. Duis rhoncus luctus enim, a facilisis diam pulvinar id. Sed mollis euismod dui eget suscipit. Donec dignissim porta tellus, id fringilla tellus malesuada porta. Etiam sed dolor sed quam molestie commodo vitae non lacus. Cras consectetur diam et enim consequat aliquet. Nulla facilisi. Pellentesque eget est varius, suscipit felis non, blandit dolor. Morbi egestas nulla sed tellus elementum, at tristique nisi vestibulum. Nullam ut leo aliquet, pretium libero eu, venenatis lorem. Praesent auctor volutpat malesuada.', 'imgs/posts/thumb/1here is no one who l2880358A1341.jpg', NULL, '2021-08-13 16:12:46', 3),
(9, 2, 'Vivaldi - Violin Concerto in A Minor RV356', 'vivaldi-violin-concerto-in-a-minor-rv356', 'Antonio Lucio Vivaldi was an Italian Baroque composer, virtuoso violinist, teacher, impresario, and Roman Catholic priest. Born in Venice, the capital of the Venetian Republic, Vivaldi is regarded as one of the greatest Baroque composers, and his influence during his lifetime was widespread across Europe, being paramount in the development of Johann Sebastian Bach\'s instrumental music.\r\nhttps://en.wikipedia.org/wiki/Antonio_Vivaldi\r\n\r\nVivamus vehicula lorem eu est sodales, sit amet sollicitudin massa sodales. Nunc et lorem eget ex bibendum molestie. Vivamus faucibus dapibus felis vitae vulputate. Proin quis ullamcorper est. Phasellus at dapibus quam, ut accumsan lorem. Fusce libero dui, luctus a lectus ut, maximus vehicula lectus. Curabitur ac urna arcu.\r\n\r\nCras eu nisi eu risus fermentum viverra in sit amet ex. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas semper elit sit amet porttitor mollis. In consectetur rhoncus risus eu commodo. Aenean arcu dolor, fringilla fermentum mauris vel, feugiat lacinia mauris. Cras tempus aliquet dui, ac rutrum velit semper et. Etiam nec vestibulum dui. Donec viverra vel felis sit amet imperdiet. Nulla fermentum nibh sit amet nisi placerat, quis posuere mi aliquam. Donec facilisis laoreet pretium. Fusce a rhoncus augue. Donec cursus sit amet lectus nec gravida. Donec id malesuada turpis. In vehicula erat felis, ac congue sem condimentum nec. Donec pulvinar euismod risus, nec vulputate ante ornare at.\r\n\r\nDuis et arcu in erat vehicula mollis. Maecenas rhoncus euismod ullamcorper. Fusce non aliquam tortor. Quisque ut diam eget orci finibus commodo eu eget sem. Proin eu metus vitae nisi eleifend iaculis. Phasellus at tellus turpis. Etiam justo sapien, faucibus a tincidunt non, elementum ac massa. Praesent faucibus placerat felis, ut tincidunt elit tincidunt cursus. Maecenas consequat placerat dictum. Morbi nec nibh ultricies, luctus purus sit amet, sodales velit. Aenean blandit magna lorem, id gravida nibh rhoncus ac. Nunc mollis dignissim ante, in elementum enim rhoncus eget.\r\n\r\nCras convallis, nulla eu hendrerit eleifend, odio enim laoreet velit, et congue metus risus ut lacus. Donec finibus orci nunc, a euismod ligula ultrices sit amet. Nunc eget sodales quam, in auctor tortor. Etiam purus urna, scelerisque sed tempor quis, sodales eu lorem. Suspendisse egestas ullamcorper velit, aliquet egestas quam tristique suscipit. Praesent malesuada est eu sem commodo accumsan. Nam neque lectus, lacinia vel tortor ut, ultricies finibus nunc. Nulla facilisi. Donec a dictum elit, eget tincidunt est. Nulla et commodo lorem. Sed nec dictum metus. Donec elementum enim nisi, eget sagittis velit dictum sit amet. Sed porta venenatis est quis sollicitudin. Vivamus viverra ipsum in dolor dapibus congue. In odio dui, placerat nec nibh eget, suscipit ornare ligula. Pellentesque tristique nulla et vehicula blandit.', 'imgs/posts/thumb/2ivaldi - Violin Conc1212Ekran görüntüsü 2021-08-13 161728.png', 'https://www.youtube.com/watch?v=QPba-i26YNA', '2021-08-13 16:21:16', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `tag` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `post_id`, `tag`) VALUES
(1, 1, 'lorem ipsum'),
(2, 1, ''),
(3, 1, ''),
(4, 1, ''),
(5, 1, ''),
(6, 2, 'none'),
(7, 2, 'nothing'),
(8, 2, ''),
(9, 2, ''),
(10, 2, ''),
(11, 3, 'none'),
(12, 3, 'nothing'),
(13, 3, ''),
(14, 3, ''),
(15, 3, ''),
(16, 4, 'none'),
(17, 4, 'nothing'),
(18, 4, ''),
(19, 4, ''),
(20, 4, ''),
(21, 5, 'lorem ipsum'),
(22, 5, 'none'),
(23, 5, 'nothing'),
(24, 5, ''),
(25, 5, ''),
(26, 6, 'none'),
(27, 6, 'nothing'),
(28, 6, ''),
(29, 6, ''),
(30, 6, ''),
(31, 7, 'none'),
(32, 7, 'nothing'),
(33, 7, ''),
(34, 7, ''),
(35, 7, ''),
(36, 9, 'vivaldi'),
(37, 9, 'none'),
(38, 9, ''),
(39, 9, ''),
(40, 9, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nickname` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `account` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `about` text COLLATE utf8_turkish_ci,
  `profilephoto` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nickname`, `account`, `email`, `password`, `about`, `profilephoto`) VALUES
(1, 'admin', 'admin', 'admin@localhost', 'e10adc3949ba59abbe56e057f20f883e', 'I am a good guy', 'imgs/users/pp/1admin9076img.jpg'),
(2, 'User', 'user', 'user@localhost', 'e10adc3949ba59abbe56e057f20f883e', NULL, 'imgs/users/pp/2user2823default.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hottag`
--
ALTER TABLE `hottag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postphotos`
--
ALTER TABLE `postphotos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `postphotos`
--
ALTER TABLE `postphotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

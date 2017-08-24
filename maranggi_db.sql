-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2016 at 05:19 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maranggi_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(1) NOT NULL,
  `ava` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstname`, `lastname`, `email`, `username`, `password`, `status`, `ava`) VALUES
(1, 'Toha', 'Mukarrom', 'aomkasep@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 'images/ava.jpg'),
(2, 'AA', 'BB', 'im@g.com', 'admin123', '0192023a7bbd73250516f069df18b500', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `alamat`
--

CREATE TABLE `alamat` (
  `id_alamat` int(11) NOT NULL,
  `kota` varchar(45) NOT NULL,
  `provinsi` varchar(45) NOT NULL,
  `alamat` text NOT NULL,
  `id_warung` int(11) NOT NULL,
  `priority` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alamat`
--

INSERT INTO `alamat` (`id_alamat`, `kota`, `provinsi`, `alamat`, `id_warung`, `priority`) VALUES
(1, 'Purwakarta', 'JAWA BARAT', 'Jl. Kapten Halim - Pondok Salam', 4, 1),
(3, 'Purwakarta', 'JAWA BARAT', 'Jl. Ipik Gandamanah No. 50 - Purwakarta', 7, 1),
(4, 'Purwakarta', 'Jawa Barat', 'Jl.Sukadami - Pondok Salam \r\n', 5, 1),
(5, 'Purwakarta', 'Jawa Barat', 'Jl. Terusan Kapten Halim – Pondok Salam\r\n', 6, 1),
(6, 'Purwakarta', 'Jawa Barat', 'Jl. Raya Cibungur – Purwakarta\r\n', 8, 1),
(7, 'Purwakarta', 'Jawa Barat', 'Jl. Pemuda No. 32 - Purwakarta\r\n', 9, 1),
(8, 'Purwakarta', 'Jawa Barat', 'Jl. Terusan Kapten Halim No. 99\r\n', 10, 0),
(9, 'Purwakarta', 'Jawa Barat', 'Jl. Raya Cikubang No 59 – Kec. Kiarapedes \r\n', 11, 1),
(10, 'Purwakarta', 'Jawa Barat', 'Jl. Pemuda No. 31 - Kec. Purwakarta\r\n', 12, 1),
(11, 'Purwakarta', 'Jawa Barat', 'Jl. Raya Anjun-Plered\r\n', 13, 1),
(12, 'Purwakarta', 'Jawa Barat', 'Jl. Raya Anjun-Plered\r\n', 14, 1),
(13, 'Purwakarta', 'Jawa Barat', 'Jl. Raya Anjun-Plered\r\n', 15, 1),
(14, 'Purwakarta', 'Jawa Barat', 'Jl. Raya Citeko - Plered\r\n', 16, 1),
(15, 'Purwakarta', 'Jawa Barat', 'Jl. Raya Citeko - Plered\r\n', 17, 1),
(16, 'Purwakarta', 'Jawa Barat', 'Jl. Raya Citeko - Plered\r\n', 18, 1),
(17, 'Purwakarta', 'Jawa Barat', ' Jl. Raya Sempur Ds. Depok – Darangdan\r\n', 19, 1),
(18, 'Purwakarta', 'Jawa Barat', 'Jl. Kapten Halim - Pondok Salam\r\n', 20, 1),
(19, 'Purwakarta', 'Jawa Barat', 'Jl. Suparmin – Pasawahan \r\n', 21, 1),
(20, 'Purwakarta', 'Jawa Barat', 'Jl. Cihuni - Pasawahan\r\n', 22, 1);

-- --------------------------------------------------------

--
-- Table structure for table `album_slide`
--

CREATE TABLE `album_slide` (
  `id_album` int(11) NOT NULL,
  `album_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `album_slide`
--

INSERT INTO `album_slide` (`id_album`, `album_name`) VALUES
(1, 'slide1'),
(2, 'default'),
(3, 'default');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `summery` varchar(1000) NOT NULL,
  `author` varchar(500) NOT NULL,
  `date` varchar(200) NOT NULL,
  `description` longtext NOT NULL,
  `status` varchar(100) DEFAULT NULL,
  `blog_category` varchar(25) NOT NULL,
  `number_of_view` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `title`, `summery`, `author`, `date`, `description`, `status`, `blog_category`, `number_of_view`) VALUES
(3, 'Ab quis quod voluptas proident amet aute odit consequatur voluptas at architecto fugiat', 'Eum numquam aut labore voluptates commodo id eos, Nam et eum quidem delectus, tempor fuga. Sit, quo autem ut sunt, do autem soluta enim et cupidatat illum, iure in voluptate esse, exercitationem qui numquam nostrum voluptate accusamus consectetur quis libero in.', 'Hic facere omnis ut sunt enim commodi similique', '1974-10-05', '<p [removed]="line-height: 17.1429px;"></p><p [removed]="line-height: 17.1429px;" 17.1429px;"="">Nobis adipisci quia enim repellendus. Et placeat, velit ipsum, illum, minus rerum reiciendis ut dolor et molestiae sunt, eum est autem porro eum et sint cupiditate reprehenderit, incidunt, est dolore animi, voluptas et quo facilis omnis libero dolor reiciendis est beatae est ut eiusmod sed deserunt ullamco cillum deserunt et beatae deserunt sapiente modi excepteur tempor doloremque irure ex accusantium quasi ratione nihil ipsa, deserunt dolor quia quasi ab cupiditate aperiam atque a irure dicta odio non perferendis est, nulla ut dolor ut duis aliquam non earum totam deserunt molestiae voluptatibus qui tenetur hic eius et et exercitation ex Nam.</p><div [removed]="line-height: 17.1429px;">Nobis adipisci quia enim repellendus. Et placeat, velit ipsum, illum, minus rerum reiciendis ut dolor et molestiae sunt, eum est autem porro eum et sint cupiditate reprehenderit, incidunt, est dolore animi, voluptas et quo facilis omnis libero dolor reiciendis est beatae est ut eiusmod sed deserunt ullamco cillum deserunt et beatae deserunt sapiente modi excepteur tempor doloremque irure ex accusantium quasi ratione nihil ipsa, deserunt dolor quia quasi ab cupiditate aperiam atque a irure dicta odio non perferendis est, nulla ut dolor ut duis aliquam non earum totam deserunt molestiae voluptatibus qui tenetur hic eius et et exercitation ex Nam.</div><div [removed]="line-height: 17.1429px;">  </div>', '', '1', 1),
(4, 'Ad aut tenetur aut enim quod doloribus quia ', 'Voluptatem id accusantium exercitation et cumque repellendus. Accusamus rerum aute nisi amet, duis aliquip in tempora sed qui expedita molestiae unde fugit, aut pariatur? Eiusmod.', 'Quia veniam', '1983-08-20', '<p [removed]="line-height: 17.1429px;">Accusamus sit, consectetur, impedit, quae distinctio. Vel voluptas amet, blanditiis ut consectetur, consequatur, nesciunt, sint aliquam odio occaecat non ex laudantium, et dolorem ex laborum architecto odit magni qui maiores architecto qui et et eu accusantium labore elit, corrupti, nobis amet, elit, qui sed exercitationem deserunt vel voluptatem, est fugiat, sed tempore, enim tempore, nihil ea eligendi eligendi qui culpa, repudiandae odio consectetur, voluptas consequuntur animi, non.</p><p [removed]="line-height: 17.1429px;">Accusamus sit, consectetur, impedit, quae distinctio. Vel voluptas amet, blanditiis ut consectetur, consequatur, nesciunt, sint aliquam odio occaecat non ex laudantium, et dolorem ex laborum architecto odit magni qui maiores architecto qui et et eu accusantium labore elit, corrupti, nobis amet, elit, qui sed exercitationem deserunt vel voluptatem, est fugiat, sed tempore, enim tempore, nihil ea eligendi eligendi qui culpa, repudiandae odio consectetur, voluptas consequuntur animi, non.</p><p [removed]="line-height: 17.1429px;">Accusamus sit, consectetur, impedit, quae distinctio. Vel voluptas amet, blanditiis ut consectetur, consequatur, nesciunt, sint aliquam odio occaecat non ex laudantium, et dolorem ex laborum architecto odit magni qui maiores architecto qui et et eu accusantium labore elit, corrupti, nobis amet, elit, qui sed exercitationem deserunt vel voluptatem, est fugiat, sed tempore, enim tempore, nihil ea eligendi eligendi qui culpa, repudiandae odio consectetur, voluptas consequuntur animi, non.</p><p [removed]="line-height: 17.1429px;"> </p>', '', '2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE `blog_category` (
  `blog_category_id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`blog_category_id`, `name`) VALUES
(1, 'Delevary'),
(2, 'Product Quality'),
(3, 'Vendorship'),
(4, 'Problem Related'),
(5, 'Others'),
(6, 'Science & technology');

-- --------------------------------------------------------

--
-- Table structure for table `call_non_user`
--

CREATE TABLE `call_non_user` (
  `id_call_non_user` int(11) NOT NULL,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pesan` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `call_user`
--

CREATE TABLE `call_user` (
  `id_call_user` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `pesan` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `call_user`
--

INSERT INTO `call_user` (`id_call_user`, `id_user`, `pesan`) VALUES
(1, 1, 'Tolong perbaiki system');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id_comments` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `image` varchar(225) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `nama_fasilitas` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `nama_fasilitas`) VALUES
(1, 'Parkiran'),
(2, 'Wifi'),
(3, 'Teras'),
(4, 'Kolam'),
(8, 'ATM');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas_warung`
--

CREATE TABLE `fasilitas_warung` (
  `id_fasilitas_warung` int(11) NOT NULL,
  `id_fasilitas` int(11) NOT NULL,
  `id_warung` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fasilitas_warung`
--

INSERT INTO `fasilitas_warung` (`id_fasilitas_warung`, `id_fasilitas`, `id_warung`) VALUES
(1, 1, 4),
(2, 2, 4),
(3, 3, 4),
(4, 4, 4),
(5, 1, 5),
(6, 2, 5),
(7, 1, 3),
(8, 2, 3),
(9, 3, 3),
(10, 4, 3),
(11, 1, 7),
(12, 2, 7),
(13, 3, 7),
(14, 4, 7),
(15, 4, 3),
(16, 8, 3),
(17, 8, 5),
(18, 1, 6),
(19, 3, 6),
(20, 1, 8),
(21, 2, 8),
(22, 3, 8),
(23, 8, 8),
(24, 1, 9),
(25, 2, 9),
(26, 4, 9),
(27, 1, 10),
(28, 2, 10),
(29, 3, 10),
(30, 1, 11),
(31, 3, 11),
(32, 1, 12),
(33, 2, 12),
(34, 8, 12),
(35, 1, 13),
(36, 3, 13),
(37, 1, 14),
(38, 3, 14),
(39, 1, 15),
(40, 3, 15),
(41, 1, 16),
(42, 1, 17),
(43, 1, 18),
(44, 1, 19),
(45, 3, 19),
(46, 1, 20),
(47, 2, 20),
(48, 3, 20),
(49, 4, 20),
(50, 1, 21),
(51, 3, 21),
(52, 4, 21),
(53, 1, 22),
(54, 3, 22);

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `id_warung` int(11) NOT NULL,
  `image` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `id_warung`, `image`) VALUES
(41, 3, 'images/galeri/6.jpg'),
(43, 3, 'images/galeri/5.jpg'),
(50, 4, 'images/galeri/Panyinangan.jpg'),
(51, 4, 'images/galeri/Panyinangan2.jpg'),
(52, 4, 'images/galeri/Panyinangan3.jpg'),
(53, 5, 'images/galeri/SaefulAnwar.jpg'),
(54, 5, 'images/galeri/SaefulAnwar2.jpg'),
(55, 6, 'images/galeri/Sizalu.jpg'),
(56, 6, 'images/galeri/Sizalu1.jpg'),
(57, 7, 'images/galeri/MW2(Ayam-Tulang-Lunak).jpg'),
(58, 7, 'images/galeri/MW(Ayam-Tulang-Lunak).jpg'),
(59, 7, 'images/galeri/MW3(Ayam-Tulang-Lunak).jpg'),
(60, 8, 'images/galeri/Cibungur1.jpg'),
(61, 8, 'images/galeri/Cibungur2.jpg'),
(62, 8, 'images/galeri/Cibungur3.jpg'),
(63, 9, 'images/galeri/SambelHejoSambelDadak.jpg'),
(65, 9, 'images/galeri/SambelHejoSambelDadakan.jpg'),
(66, 10, 'images/galeri/shsd3PondokSalam.jpg'),
(67, 10, 'images/galeri/shsdPondokSalam.jpg'),
(68, 10, 'images/galeri/shsd1PondokSalam.jpg'),
(69, 11, 'images/galeri/H-Dudung.jpg'),
(70, 12, 'images/galeri/RumahMakanCiganea.jpg'),
(71, 12, 'images/galeri/RumahMakanCiganea2.jpg'),
(72, 13, 'images/galeri/HijrahAbahUteng.jpg'),
(73, 14, 'images/galeri/SaungSateKakiGunung.jpg'),
(74, 15, 'images/galeri/BahUteng.jpg'),
(75, 16, 'images/galeri/H_-Hasan.jpg'),
(76, 17, 'images/galeri/UjangAjo.jpg'),
(77, 18, 'images/galeri/H-Engkos.jpg'),
(78, 19, 'images/galeri/AbahApud.jpg'),
(79, 20, 'images/galeri/NabilaFarhan.jpg'),
(80, 20, 'images/galeri/NabilaFarhan2.jpg'),
(81, 21, 'images/galeri/HaurKoneng2.jpg'),
(82, 21, 'images/galeri/HaurKoneng.jpg'),
(83, 22, 'images/galeri/AbahUse1_(1).jpg'),
(84, 22, 'images/galeri/AbahUse1_(2).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jurnal`
--

CREATE TABLE `jurnal` (
  `id_jurnal` int(11) NOT NULL,
  `nama_jurnal` varchar(45) NOT NULL,
  `deskripsi` text NOT NULL,
  `image` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurnal`
--

INSERT INTO `jurnal` (`id_jurnal`, `nama_jurnal`, `deskripsi`, `image`) VALUES
(1, 'Maranggi Satay Goes to Turkey', 'Add the fixed class to the body tag to get this layout. The fixed layout is your best option if your sidebar is bigger than your content because it prevents extra unwanted scrolling.dsds', 'images/ANG2932.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(45) NOT NULL,
  `image` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `image`) VALUES
(1, 'Persawahan', 'images/kategori/AlamHijau.png'),
(2, 'Lesehan', 'images/kategori/64(1).JPG'),
(3, 'Kaki Lima', 'images/kategori/UjangAjo.png'),
(4, 'Hutan Lindung', 'images/kategori/SaungSateSederhana1.png'),
(5, 'Bakar Sendiri', 'images/kategori/AyamTimbelMawar3.JPG'),
(6, 'Restoran', 'images/kategori/7II3.png'),
(7, 'Diatas Kolam', 'images/kategori/TehHaji4.JPG'),
(8, 'Murah Meriah', 'images/kategori/GunungPutri2.png');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `id_warung` int(11) NOT NULL,
  `image` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `id_warung`, `image`) VALUES
(20, 4, 'images/menu/1.jpg'),
(26, 5, 'images/menu/51.jpg'),
(29, 5, 'images/menu/8.jpg'),
(47, 3, 'images/menu/menu_contoh.jpg'),
(48, 4, 'images/menu/menu_contoh1.jpg'),
(49, 5, 'images/menu/menu_contoh2.jpg'),
(50, 6, 'images/menu/menu_contoh3.jpg'),
(51, 7, 'images/menu/menu_contoh4.jpg'),
(52, 8, 'images/menu/menu_contoh5.jpg'),
(53, 9, 'images/menu/menu_contoh6.jpg'),
(54, 10, 'images/menu/menu_contoh7.jpg'),
(55, 11, 'images/menu/menu_contoh8.jpg'),
(56, 12, 'images/menu/menu_contoh9.jpg'),
(57, 13, 'images/menu/menu_contoh10.jpg'),
(58, 14, 'images/menu/menu_contoh11.jpg'),
(59, 15, 'images/menu/menu_contoh12.jpg'),
(61, 16, 'images/menu/menu_contoh13.jpg'),
(62, 17, 'images/menu/menu_contoh14.jpg'),
(63, 18, 'images/menu/menu_contoh15.jpg'),
(64, 19, 'images/menu/menu_contoh16.jpg'),
(65, 20, 'images/menu/menu_contoh17.jpg'),
(66, 21, 'images/menu/menu_contoh18.jpg'),
(67, 22, 'images/menu/menu_contoh19.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `id_partner` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `image` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`id_partner`, `deskripsi`, `image`) VALUES
(1, 'theyuf', 'images/partner/theyufbw22.png'),
(2, 'Codeigniters', 'images/partner/codeigniter.png'),
(4, 'purwa', 'images/partner/pwk12.png'),
(5, 'bootstrap', 'images/partner/bootstrap.png');

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

CREATE TABLE `promo` (
  `id_promo` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `image` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promo`
--

INSERT INTO `promo` (`id_promo`, `deskripsi`, `image`) VALUES
(4, 'DISC 40%  OFF 1 Jan - 4 March', 'images/promo/BRH3985.jpg'),
(5, 'Add the fixed class to the body tag to get this layout. The fixed layout is your best option if your sidebar is bigger than your content because it prevents extra unwanted scrolling.', 'images/promo/ANR4838.jpg'),
(7, 'fsd', 'images/promo/AyamTimbelMawar1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id_slide` int(11) NOT NULL,
  `id_album` int(11) NOT NULL,
  `image` varchar(45) NOT NULL,
  `link` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id_slide`, `id_album`, `image`, `link`) VALUES
(40, 1, 'images/menu/1.jpg', ''),
(41, 1, 'images/menu/3.jpg', ''),
(42, 1, 'images/menu/8.jpg', ''),
(44, 1, 'images/menu/bev.jpg', ''),
(45, 2, 'images/menu/bev3.jpg', ''),
(46, 2, 'images/menu/hot-drink-for-fall-winter_08.jpg', ''),
(47, 2, 'images/menu/aa.jpg', ''),
(48, 2, 'images/menu/white-chard-stew-recipe.jpg', ''),
(49, 3, 'images/menu/hgtd.jpg', ''),
(50, 3, 'images/menu/hhh.jpg', ''),
(51, 3, 'images/menu/picnic-cocktails.jpg', ''),
(52, 3, 'images/menu/russia-main-course-kovbasa.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id_testimonial` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_warung` int(11) NOT NULL,
  `testimonial` varchar(45) NOT NULL,
  `image` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id_testimonial`, `id_user`, `id_warung`, `testimonial`, `image`) VALUES
(1, 11, 3, 'QWERTY', 'images/comment/fruit7.png'),
(2, 11, 5, 'QWERT', ''),
(3, 0, 5, 'test', 'images/comment/SaefulAnwar.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `avatar` varchar(225) NOT NULL,
  `surename` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `avatar`, `surename`, `email`, `password`) VALUES
(11, 'images/user_ava/fruit61.png', 'Yufi', 'impaparock@gmail.com', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e'),
(12, 'images/user_ava/411.jpg', 'ganjar123', 'ganjar@gmail.com', 'f820513d8f673ba91a4b55f88de57397c1e91aa4');

-- --------------------------------------------------------

--
-- Table structure for table `warung`
--

CREATE TABLE `warung` (
  `id_warung` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_warung` varchar(45) NOT NULL,
  `telephone` varchar(12) NOT NULL,
  `latitude` varchar(45) NOT NULL,
  `longitude` varchar(45) NOT NULL,
  `deskripsi` text NOT NULL,
  `image` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warung`
--

INSERT INTO `warung` (`id_warung`, `id_kategori`, `nama_warung`, `telephone`, `latitude`, `longitude`, `deskripsi`, `image`) VALUES
(3, 1, 'Ayam Bakar Timbel Mawar', '0877 7965 56', '-6.546873', '107.460023', 'Buka Senin - Sabtu (10:00 - 21:00)  ||  Harga Rp. 20.000 - Rp. 50.000 \r\n', 'images/warung/AyamTimbelMawar2.JPG'),
(4, 5, 'Sate Panyinangan', '0878 7991 22', '-6.620294', '107.506737', 'Buka Senin - Sabtu (10:00 - 21:00)  ||  Harga Rp. 20.000 - Rp. 50.000 ', 'images/warung/Panyinangan.png'),
(5, 5, 'Sate Saeful Anwar', '0813 8797 87', '-6.603295', '107.486879', 'Buka Senin - Sabtu (10:00 - 21:00)  ||  Harga Rp. 20.000 - Rp. 50.000 \r\n', 'images/warung/SaefulAnwar.png'),
(6, 5, 'Sate Si Zalu', '083820304075', '-6.597466', '107.482705', 'Buka Senin - Sabtu (10:00 - 21:00)  ||  Harga Rp. 20.000 - Rp. 50.000 \r\n', 'images/warung/Sizalu.png'),
(7, 2, 'MW : Ayam Tulang Lunak', '0877 7891 45', '-6.543702', '107.449715', 'Buka Senin - Sabtu (10:00 - 21:00)  ||  Harga Rp. 20.000 - Rp. 50.000 ', 'images/warung/MW2(Ayam_Tulang_Lunak).png'),
(8, 1, 'Sate Maranggi Cibungur', '(0264) 35107', '-6.471521', '107.480889', 'Buka Senin - Sabtu (10:00 - 21:00)  ||  Harga Rp. 20.000 - Rp. 50.000 \r\n', 'images/warung/Cibungur1.jpg'),
(9, 6, 'Sambel Hejo Sambel Dadak Ciganea', '(0264) 82209', '-6.565910', '107.434203', 'Buka Senin - Sabtu (10:00 - 21:00)  ||  Harga Rp. 20.000 - Rp. 50.000 \r\n', 'images/warung/SambelHejoSambelDadak.jpg'),
(10, 1, 'Sambel Hejo Sambel Dadak Cabang Pondok Salam', '(0264) 82877', '-6.622156', '107.499869', 'Buka Senin - Sabtu (10:00 - 21:00)  ||  Harga Rp. 20.000 - Rp. 50.000 \r\n', 'images/warung/shsd3PondokSalam.jpg'),
(11, 2, 'H. Dudung', '0877 2695 15', '-6.674778', '107.586481', 'Buka Senin - Sabtu (10:00 - 21:00)  ||  Harga Rp. 20.000 - Rp. 50.000 \r\n', 'images/warung/H-Dudung.jpg'),
(12, 6, 'Rumah Makan Ciganea', '(0264) 21474', '-6.565736', '107.433790', 'Buka Senin - Sabtu (10:00 - 21:00)  ||  Harga Rp. 20.000 - Rp. 50.000 \r\n', 'images/warung/RumahMakanCiganea.jpg'),
(13, 8, 'Hijrah Abah Uteng', '0859 2605 65', '-6.636188', '107.397908', 'Buka Senin - Sabtu (10:00 - 21:00)  ||  Harga Rp. 20.000 - Rp. 50.000 \r\n', 'images/warung/HijrahAbahUteng.jpg'),
(14, 8, 'Saung Sate Kaki Gunung', '0878 2285 62', '-6.636030', '107.397699', 'Buka Senin - Sabtu (10:00 - 21:00)  ||  Harga Rp. 20.000 - Rp. 50.000 \r\n', 'images/warung/SaungSateKakiGunung.jpg'),
(15, 8, 'Bah Uteng', '0859 2605 65', '-6.635242', '107.399294', 'Buka Senin - Sabtu (10:00 - 21:00)  ||  Harga Rp. 20.000 - Rp. 50.000 \r\n', 'images/warung/BahUteng.jpg'),
(16, 3, 'Warung Sate H. Hasan', '0877 7959 28', '-6.647871', '107.366536', 'Buka Senin - Sabtu (10:00 - 21:00)  ||  Harga Rp. 20.000 - Rp. 50.000 \r\n', 'images/warung/H_-Hasan.jpg'),
(17, 3, 'Warung Sate Ujang Ajo', '0859 2612 13', '-6.645179', '107.374517', 'Buka Senin - Sabtu (10:00 - 21:00)  ||  Harga Rp. 20.000 - Rp. 50.000 \r\n', 'images/warung/UjangAjo.jpg'),
(18, 8, 'Warung Sate H. Engkos', '0819 0934 37', '-6.645861', '107.371920', 'Buka Senin - Sabtu (10:00 - 21:00)  ||  Harga Rp. 20.000 - Rp. 50.000 \r\n', 'images/warung/H-Engkos.jpg'),
(19, 3, 'Warung Abah Apud', '', '-6.679355', '107.401627', 'Buka Senin - Sabtu (10:00 - 21:00)  ||  Harga Rp. 20.000 - Rp. 50.000 \r\n', 'images/warung/AbahApud.jpg'),
(20, 7, 'Sate Maranggi Nabila Farhan ', '0878 7996 57', '-6.621872', '107.499562', 'Buka Senin - Sabtu (10:00 - 21:00)  ||  Harga Rp. 20.000 - Rp. 50.000 \r\n', 'images/warung/NabilaFarhan.jpg'),
(21, 7, 'Sate Maranggi Haur Koneng', '0813 1078 69', '-6.577315', '107.471662', 'Buka Senin - Sabtu (10:00 - 21:00)  ||  Harga Rp. 20.000 - Rp. 50.000 ', 'images/warung/HaurKoneng2.jpg'),
(22, 2, 'Warung Sate Abah Use', '0856-5993-54', '-6.564835', '107.461966', 'Buka Senin - Sabtu (10:00 - 21:00)  ||  Harga Rp. 20.000 - Rp. 50.000 \r\n', 'images/warung/AbahUse1_(1).jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alamat`
--
ALTER TABLE `alamat`
  ADD PRIMARY KEY (`id_alamat`),
  ADD KEY `id_warung` (`id_warung`);

--
-- Indexes for table `album_slide`
--
ALTER TABLE `album_slide`
  ADD PRIMARY KEY (`id_album`);

--
-- Indexes for table `call_non_user`
--
ALTER TABLE `call_non_user`
  ADD PRIMARY KEY (`id_call_non_user`);

--
-- Indexes for table `call_user`
--
ALTER TABLE `call_user`
  ADD PRIMARY KEY (`id_call_user`),
  ADD KEY `FK_call_user_user` (`id_user`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_comments`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indexes for table `fasilitas_warung`
--
ALTER TABLE `fasilitas_warung`
  ADD PRIMARY KEY (`id_fasilitas_warung`),
  ADD KEY `id_fasilitas` (`id_fasilitas`),
  ADD KEY `id_warung` (`id_warung`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`),
  ADD KEY `id_warung` (`id_warung`);

--
-- Indexes for table `jurnal`
--
ALTER TABLE `jurnal`
  ADD PRIMARY KEY (`id_jurnal`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`),
  ADD KEY `id_warung` (`id_warung`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id_partner`);

--
-- Indexes for table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`id_promo`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id_slide`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id_testimonial`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `warung`
--
ALTER TABLE `warung`
  ADD PRIMARY KEY (`id_warung`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_kategori_2` (`id_kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `alamat`
--
ALTER TABLE `alamat`
  MODIFY `id_alamat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `album_slide`
--
ALTER TABLE `album_slide`
  MODIFY `id_album` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `call_non_user`
--
ALTER TABLE `call_non_user`
  MODIFY `id_call_non_user` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `call_user`
--
ALTER TABLE `call_user`
  MODIFY `id_call_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id_comments` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `fasilitas_warung`
--
ALTER TABLE `fasilitas_warung`
  MODIFY `id_fasilitas_warung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT for table `jurnal`
--
ALTER TABLE `jurnal`
  MODIFY `id_jurnal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `id_partner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `promo`
--
ALTER TABLE `promo`
  MODIFY `id_promo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id_slide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id_testimonial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `warung`
--
ALTER TABLE `warung`
  MODIFY `id_warung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `alamat`
--
ALTER TABLE `alamat`
  ADD CONSTRAINT `alamat_ibfk_1` FOREIGN KEY (`id_warung`) REFERENCES `warung` (`id_warung`);

--
-- Constraints for table `fasilitas_warung`
--
ALTER TABLE `fasilitas_warung`
  ADD CONSTRAINT `fasilitas_warung_ibfk_1` FOREIGN KEY (`id_fasilitas`) REFERENCES `fasilitas` (`id_fasilitas`),
  ADD CONSTRAINT `fasilitas_warung_ibfk_2` FOREIGN KEY (`id_warung`) REFERENCES `warung` (`id_warung`);

--
-- Constraints for table `galeri`
--
ALTER TABLE `galeri`
  ADD CONSTRAINT `galeri_ibfk_1` FOREIGN KEY (`id_warung`) REFERENCES `warung` (`id_warung`);

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`id_warung`) REFERENCES `warung` (`id_warung`);

--
-- Constraints for table `warung`
--
ALTER TABLE `warung`
  ADD CONSTRAINT `warung_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

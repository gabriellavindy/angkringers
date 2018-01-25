-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2018 at 04:36 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_angkring`
--

-- --------------------------------------------------------

--
-- Table structure for table `angkringan`
--

CREATE TABLE IF NOT EXISTS `angkringan` (
`id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nama_pemilik` varchar(100) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `angkringan`
--

INSERT INTO `angkringan` (`id`, `nama`, `nama_pemilik`, `lokasi`, `keterangan`) VALUES
(1, 'Angkringan Lek Man', 'Angkringan Lek Man', 'Jl. P. Mangkubumi, Gowongan, Jetis, Kota Yogyakarta, Daerah Istimewa Yogyakarta, Indonesia', 'Di kalangan para pelancong, Angkringan Lek Man yang tidak jauh dari Stasiun Tugu ini memang sangat ngangenin. Pertama karena suasananya yang sangat cozy. Selanjutnya, hidangan di sini hampir semuanya enak dan murah. Salah satu andalan dari angkringan ini adalah kopi josnya yang sangat nikmat dan berkhasiat. Kalau mau ingin makan sekaligus mengusir masuk angin, monggo datang dan minum kopi andalan Lek Man.'),
(3, 'Angkringan Wijilan', 'Wijilan', 'Jl. Wijilan, Panembahan, Kraton, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55131, Indonesia', 'Kalau di Angkringan Lek Man kita mengenal menu andalan berupa kopi jos. Di Angkringan Wijilan ini ada menu berupa teh dengan gula batu yang sangat manis. Selain teh, kamu juga bisa menikmati aneka nasi kucing dengan lauk bacem, sate jerohan, hingga aneka lauk pedas lain. Oh ya, yang menarik dari Angkringan Wijilan ini adalah lokasinya yang cukup luas dan asyik dijadikan tempat nongkrong saat menikmati malamnya Yogyakarta.'),
(4, 'Angkringan Pak Jack', 'Pak Jack', 'Dusun Sukoharjo RT 7 RW 5 Krangganharjo Toroh, Krangganharjo, Toroh, Kabupaten Grobogan, Jawa Tengah 58171, Indonesia', 'Sebenarnya, menu makanan dan minuman di angkringan ini nyaris sama dengan dua yang telah disebutkan sebelumnya. Hanya saja, lokasinya yang strategis dan enak untuk nongkrong membuat Angkringan Pak Jack selalu ramai pengunjung. Puluhan mahasiswa atau pelancong datang setiap hari untuk makan nasi kucing plus lauk serta menikmati fasilitas Wi-Fi gratis. Bikin betah kan?'),
(5, 'Angkringan Sendang', 'Sendang', 'Jalan Solo-Yogyakarta Km 15 (dekat dengan pemancingan Sendang Ayu)', 'Beberapa orang mungkin akan berpikir: ah, namanya angkringan paling sama saja. Kalau tidak nasi kucing ya aneka sate dan baceman. Memang benar, di Angkringan Sendang ini kamu akan mendapatkan hal yang sama. Namun, dengan gaya yang sedikit modern. Nasi kucing di sini pakai kertas bungkus bermerek loh. Selain itu variasinya juga cukup banyak sehingga kamu tidak bosan dengan nasi isi orek tempe melulu.'),
(6, 'Angkringan Ndalem', 'Ndalem', 'Jalan Sompilan Ngasem No. 12, Patehan, Kraton, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55133, Indonesia', 'Ingin merasakan angkringan yang agak modern dan bergaya bangsawan? Bisa, datang saja ke Angkringan Ndalem yang cukup terkenal di kalangan anak muda. Berlokasi di halaman muka seorang bangsawan Jawa, kamu bisa menikmati kuliner yang sangat nikmati. Gerobak kayu masih disediakan agar esensi angkringan tidak berubah. Yang membedakan angkringan ini dengan yang lain adalah fasilitas Wi-Fi, tempat super bersih, dan aneka jajanan kuno khas Jawa yang tidak dijual di mana-mana.'),
(7, 'Angkirngan Pak Satari', 'Pak Satari', 'Jalan Magelang Km 16, Medari, Sleman, Daerah Istimewah Yogyakarta, Indonesia', 'Pengin adu nyali dengan makan semua jenis nasi kucing yang ada di Yogyakarta? Datanglah ke Angkringan Pak Satari yang laris manis ini. Dengan 20 jenis sajian nasi kucing, kamu bakalan bingung mau memilih makan yang mana. Disarankan untuk memilih 2-3 nasi kucing dan beberapa lauk untuk membuat perutmu puas dan kenyang seketika.'),
(8, 'Angkringan Klebengan', ' Klebengan', 'Klebengan, Jalan Gambir Deresan, Caturtunggal, Sleman, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281, Indonesia', 'Terletak di jantungnya UGM, angkringan ini tidak pernah sepi dari pengunjung yang mayoritas merupakan mahasiswa. Dengan harga yang murah, tapi tetap nikmat, angkringan ini tidak sepi pengunjung. Bagi mereka yang memiliki kantong cekak, makan di angkringan yang memiliki tempat makan lesehan luas ini adalah pilihan terbaik. Cobalah saat kamu melancong ke Yogyakarta.\r\n'),
(9, 'Angkringan Pak Jabrik', 'Pak Jabrik', 'Jalan P. Mangkubumi, Gowongan, Jetis, Gowongan, Jetis, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55233, Indonesia', 'Terletak di depan kantor Keadilan Rakyat atau KR, Angkringan Pak Jabrik sangat laris setiap malam hari. Banyak mahasiswa atau pelancong datang ke sini untuk menyantap menu yang beragam sembari nongkrong dengan teman-temannya. Oh ya, angkringan ini tidak memiliki kursi sehingga kamu bisa makan secara lesehan di tikar yang telah disediakan.'),
(10, 'Angkringan Galau', 'Galau', 'Pasar Sambilegi RT.19/RW.15, Condong Catur, Depok, Condongcatur, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55283, Indonesia (Seberang Perumahan Mataram Bumi Sejahtera)', 'Angkringan Galau terletak di sebuah  pendopo yang tidak terlalu besar, tapi memiliki cukup banyak meja dan kursi. Di bagian depan pendopo terdapat gerobak yang berisi ragam nasi kucing dan lauk. Oh ya, meski namanya galau, angkringan ini jauh dari unsur itu. Pengunjung yang datang selalu tampak ceria karena hidangan yang disajikan sangat nikmat.'),
(11, 'Angkringan Nganggo Suwe', 'Nganggo Suwe', 'Jalan Pramuka No. 106, Giwangan, Yogyakarta, Indonesia', 'Angkringan Nganggo Suwe sudah berdiri sejak tahun 90-an. Di kalangan masyarakat Yogyakarta, angkringan ini cukup terkenal karena menyediakan minuman jahe yang memadukan gula jawa. Setiap hari, puluhan orang akan bergantian makan di sini karena angkringan hanya muat 8-10 orang saja. So, kalau mau makan di sini harus antre.');

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

CREATE TABLE IF NOT EXISTS `auth_assignment` (
  `item_name` varchar(64) NOT NULL,
  `user_id` varchar(64) NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

CREATE TABLE IF NOT EXISTS `auth_item` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `rule_name` varchar(64) DEFAULT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

CREATE TABLE IF NOT EXISTS `auth_item_child` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE IF NOT EXISTS `auth_rule` (
  `name` varchar(64) NOT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
`id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_angkringan` int(11) DEFAULT NULL,
  `komentar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `makanan`
--

CREATE TABLE IF NOT EXISTS `makanan` (
`id` int(11) NOT NULL,
  `id_angkringan` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` double(16,2) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `makanan`
--

INSERT INTO `makanan` (`id`, `id_angkringan`, `nama`, `harga`, `gambar`) VALUES
(1, 1, 'Makanan1', 2000.00, 'angkringan-lek-man.jpg'),
(2, 7, 'Makanan2', 3000.00, 'garengpetruk1.jpg'),
(3, 1, 'Makanan3', 3000.00, 'Angkringan-Lik-Man.jpg'),
(4, 6, 'Makanan4', 4500.00, 'Lesehan-Malioboro.jpg'),
(5, 5, 'Makanan5', 2500.00, 'makanan-angkringan.jpg'),
(6, 4, 'Makanan6', 1500.00, 'garengpetruk1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1434701803),
('m130524_201442_init', 1434701809);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `role` smallint(6) DEFAULT NULL,
  `id_grup` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `role`, `id_grup`, `created_at`, `updated_at`) VALUES
(1, 'admin', '', '$2y$13$o9ZpY3ArAq0sprqQx0MpxuN.uBR/ty152WthSl2Xg.wNENpWHqIEy', '', 'gabriella@gmail.com', 10, 1, 1, 1434701956, 1434704583),
(2, 'operator', '', '$2y$2y$13$8xrGyJB5bDY89OYCaqo/sevVUQBLQ95IwOv378c8TPmioz8ycTSjK', NULL, 'gabriella@gmail.com', 10, 2, 2, 1434737585, 1434737585);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `angkringan`
--
ALTER TABLE `angkringan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
 ADD PRIMARY KEY (`item_name`,`user_id`);

--
-- Indexes for table `auth_item`
--
ALTER TABLE `auth_item`
 ADD PRIMARY KEY (`name`), ADD KEY `rule_name` (`rule_name`), ADD KEY `type` (`type`);

--
-- Indexes for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
 ADD PRIMARY KEY (`parent`,`child`), ADD KEY `child` (`child`);

--
-- Indexes for table `auth_rule`
--
ALTER TABLE `auth_rule`
 ADD PRIMARY KEY (`name`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
 ADD PRIMARY KEY (`id`), ADD KEY `id_user` (`id_user`), ADD KEY `id_parent` (`id_angkringan`);

--
-- Indexes for table `makanan`
--
ALTER TABLE `makanan`
 ADD PRIMARY KEY (`id`), ADD KEY `id_angkringan` (`id_angkringan`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
 ADD PRIMARY KEY (`version`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `angkringan`
--
ALTER TABLE `angkringan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `makanan`
--
ALTER TABLE `makanan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `auth_item`
--
ALTER TABLE `auth_item`
ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
ADD CONSTRAINT `komentar_ibfk_2` FOREIGN KEY (`id_angkringan`) REFERENCES `angkringan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `makanan`
--
ALTER TABLE `makanan`
ADD CONSTRAINT `makanan_ibfk_1` FOREIGN KEY (`id_angkringan`) REFERENCES `angkringan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2022 at 04:21 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prediksi_jurusan`
--

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(100) NOT NULL,
  `nama_fakultas` varchar(100) NOT NULL,
  `deskripsi_jurusan` varchar(500) DEFAULT NULL,
  `gambar_jurusan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`, `nama_fakultas`, `deskripsi_jurusan`, `gambar_jurusan`) VALUES
(1, 'Teknik Industri', 'FTI', 'Seluruh Perkuliahan di Program Studi Teknik industri Itenas akan berkaitan dengan desain, peningkatan dan pemasangan sistem terintegrasi orang, bahan, informasi, peralatan dan energi. Ini memanfaatkan pengetahuan khusus dan keterampilan dalam ilmu matematika, fisik, dan sosial bersama dengan prinsip dan metode analisis dan desainteknik, untuk menentukan, memprediksi, dan mengevaluasi hasil yang akan diperoleh dari system tersebut', 'industri.png'),
(2, 'Teknik Sipil', 'FTSP', 'Program Studi Teknik Sipil menghasilkan Sarjana Teknik yang mampu merancang, melaksanakan, mengawasi, dan memelihara prasarana wilayah, meliputi infrastruktur transportasi seperti jalan, jembatan, bandara, pelabuhan, rel, dan gedung dan infrastruktur terkait lainnya. Keunggulan Teknik Sipil Itenas adalah Unggul dalam rancang bangun infrastruktur transportasi berkelanjutan seperti jalan, jembatan, bandara, pelabuhan, dan gedung.', 'sipil.png'),
(3, 'Arsitektur', 'FAD', 'Program Studi Arsitektur Itenas adalah program studi yang unggul dalam menerapkan keilmuan arsitektur berlandaskan keberlanjutan pada aspek lingkungan urban/sub urban,  kearifan lokal, teknologi rekayasa bangunan dengan memanfaatkan teknologi terkini yang ramah lingkungan, dan kewirausahaan menuju wawasan internasional dengan menjunjung tinggi nilai kemanusiaan.', 'arsi.png'),
(4, 'Informatika', 'FTI', 'Program Studi Informatika berkonsentrasi dalam menghasilkan sarjana yang menguasai penggunaan piranti lunak (software) yang diarahkan melalui kompetensi Basis Data (Database), Jaringan Komputer (Computer Network), dan Kecerdasan Buatan (Artificial Intelegence) termasuk penguasaan multimedia. ', 'informatika.png'),
(5, 'Sistem Informasi', 'FTI', 'Lulusan Program Studi Sistem Informasi dipastikan mampu berpikir secara analitis kritis dalam menentukan solusi sistem informasi berbasis kompetensi rekayasa basis data, sistem analis, tata kelola teknologi informasi dan perencanaan teknologi informasi. Selama perkuliahan mahasiswa juga akan mengembangkan keterampilan dalam pemrograman (pemrograman web, pemrograman berorientasi obyek. ', 'sisteminformasi.png'),
(6, 'Teknik Kimia', 'FTI', 'Pendidikan Teknik Kimia menggabungkan pengetahuan dasar kimia, fisika, matematika, dan biologi dengan prinsip-prinsip perekayasaan, faktor-faktor ekonomi, dan pertimbangan lingkungan.  Untuk mendukung hal tersebut, mahasiswa didorong untuk mengembangkan pemahaman dan ketrampilan pengantar mikrobiologi industri, komputasi matematika teknik kimia, perancangan alat proses, kajian teknologi kimia dan teknik reaksi kimia. ', 'kimia.png'),
(7, 'Teknik Mesin', 'FTI', 'Program Studi Teknik Mesin Itenas adalah salah satu disiplin teknik terluas yang berhubungan dengan sistem mekanikal dengan menggunakan prinsip-prinsip fisika, matematika, dan ilmu material yang berkontribusi dalam perkembangan teknologi di lingkup nasional dan global. Sarjana Teknik Mesin ITENAS menghasilkan lulusan sarjana yang memiliki kemampuan konseptual yang mendalam dalam sistem mekanika dan mempunyai integritas dan jiwa kewirausahaan serta menjunjung tata nilai budaya yang berlaku', 'mesin.png'),
(8, 'Teknik Elektro', 'FTI', 'Program Studi Teknik Elektro Itenas adalah program studi yang unggul dalam mendesain dan mengimplementasikan sistem di bidang teknik elektro, khususnya pada sistem teknik energi elektrik, teknik telekomunikasi atau teknik elektronika, dengan memanfaatkan teknologi terkini', 'elektro.png'),
(10, 'Desain Interior', 'FAD', 'Program Studi Desain Interior Itenas adalah program studi perancangan ruang interior & furniture, penyusunan program ruang, pencitraan suasana ruang, pengelolaan proyek interior & furniture, berdasarkan analisis hubungan manusia dengan ruang dalam konteks budaya dan perkembangan industri konstruksi berbasis kewirausahaan dan kreativitas baik secara akademis maupun profesi', 'di.png'),
(11, 'Desain Produk', 'FAD', 'Program Studi Desain Produk Industri adalah bidang yg sangat menyenangkan karena akan selalu bertemu dan bekerja bersama bidang-bidang lainnya untuk menciptakan banyak hal baru dan dibutuhkan masyarakat. Oleh karena itu, Program Studi Desain Produk Industri Itenas yang berdiri sejak tahun 1993 menitik beratkan perhatian pada penggalian passion para siswanya pada sesuatu hal, dan berangkat dari passion tersebut. ', 'dp.png'),
(12, 'Desain Komunikasi Visual', 'FAD', 'Kebutuhan dan permasalahan komunikasi saat ini semakin menantang seiring dengan perkembangan teknologi informasi dan media yang mengubah cara dan sikap masyarakat. Program Studi Desain Komunikasi Visual Itenas membekali mahasiswa agar memiliki wawasan seni dan desain, kepekaan dalam melihat dan menganalisis serta mampu memecahkan persoalan komunikasi melalui strategi dan solusi yang sesuai dengan kebutuhan zaman.', 'dkv.png'),
(13, 'Teknik Geodesi', 'FTSP', 'Program studi Teknik Geodesi Itenas adalah bidang studi yang berkaitan dengan survei dan pemetaan dengan pendekatan terpadu yang memberikan kemampuan dalam mengukur/menginterpretasikan, menganalisis dan mengelola data kebumian (tanah, lautan, sumber daya alam dan lingkungan) sehingga menjadi informasi yang dapat dijadikan sebagai dasar dalam proses perencanaan, pelaksanaan, dan monitoring kegiatan pembangunan di suatu daerah.', 'geodesi.png'),
(15, 'Perencanaan Wilayah Kota', 'FTSP', 'Program Studi Perencanaan Wilayah Dan Kota Itenas yang sebelumnya lebih dikenal dengan sebutan Teknik Planologi merupakan program studi yang telah diselenggarakan di Itenas sejak tahun 1991. Program studi ini melingkupi bidang ilmu yang bersifat lintas disiplin, baik dalam bidang yang bersifat keteknikan maupun sosial ekonomi.', 'pwk.png'),
(16, 'Teknik Lingkungan', 'FTSP', 'Program Teknik Lingkungan Itenas mempersiapkan mahasiswa menjadi lulusan yang memiliki kepedulian terhadap lingkungan dan memiliki kompetensi yang mampu memberikan analisis dan solusi dalam berbagai permasalahan lingkungan secara global juga mampu berperan serta dalam mewujudkan perbaikan lingkungan dengan dibekali oleh keahlian dan kompetensi perencanaan, pelaksanaan dan pengelolahaan di bidang pengelolaan air, hygiene industri, kesehatan dan keselamatan kerja. ', 'lingkungan.png');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan_pertanyaan`
--

CREATE TABLE `jurusan_pertanyaan` (
  `id_jurusan_pertanyaan` int(11) NOT NULL,
  `id_pertanyaan` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `nilai_pertanyaan` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jurusan_pertanyaan`
--

INSERT INTO `jurusan_pertanyaan` (`id_jurusan_pertanyaan`, `id_pertanyaan`, `id_jurusan`, `nilai_pertanyaan`) VALUES
(1, 1, 13, 1.3),
(2, 1, 2, 1.5),
(3, 1, 15, 1.1),
(4, 1, 16, 1.2),
(5, 2, 10, 1.5),
(6, 2, 11, 1.1),
(7, 2, 12, 1.3),
(8, 2, 3, 1.4),
(9, 3, 4, 1.5),
(10, 3, 5, 1.4),
(11, 4, 4, 1.4),
(12, 4, 5, 1.5),
(13, 5, 4, 1.6),
(14, 5, 5, 1.5),
(15, 6, 6, 1.5),
(16, 6, 1, 1.3),
(17, 7, 8, 1.7),
(18, 7, 1, 1.6),
(19, 7, 7, 1.5),
(20, 7, 2, 1.4),
(21, 7, 16, 1.3),
(22, 7, 13, 1.2),
(23, 7, 15, 1.1),
(24, 8, 7, 1.5),
(25, 9, 2, 1.5),
(26, 9, 13, 1.4),
(27, 9, 16, 1.3),
(28, 9, 15, 1.2),
(29, 9, 1, 1.5),
(30, 9, 7, 1.4),
(31, 9, 6, 1.3),
(32, 9, 8, 1.1),
(33, 9, 3, 1.5),
(34, 9, 11, 1.5),
(35, 9, 12, 1.5),
(36, 9, 10, 1.5),
(37, 10, 11, 1.5),
(38, 10, 3, 1.4),
(39, 10, 10, 1.3),
(40, 10, 12, 1.1),
(41, 11, 5, 1.5),
(42, 11, 4, 1.5),
(43, 11, 1, 1.5),
(44, 11, 7, 1.5),
(45, 11, 8, 1.5),
(46, 11, 6, 1.5),
(47, 12, 13, 1.5),
(48, 12, 2, 1.5),
(49, 12, 15, 1.5),
(50, 12, 16, 1.5),
(51, 12, 12, 1.5),
(52, 12, 11, 1.5),
(53, 12, 3, 1.5),
(54, 12, 10, 1.5),
(55, 14, 8, 1.5),
(56, 13, 6, 1.5);

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id_pertanyaan` int(11) NOT NULL,
  `nama_pertanyaan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pertanyaan`
--

INSERT INTO `pertanyaan` (`id_pertanyaan`, `nama_pertanyaan`) VALUES
(1, 'apakah anda senang berpergian ?'),
(2, 'apakah anda kreatif ?'),
(3, 'apakah anda betah berlama lama di depan komputer ?'),
(4, 'apakah anda mudah untuk belajar hal baru?'),
(5, 'apakah anda menyukai teknologi ?'),
(6, 'apakah anda menghapal tabel periodik (kimia) ?'),
(7, 'apakah anda suka menghafal rumus (fisika) ?'),
(8, 'apakah anda menyukai otomotif ?'),
(9, 'apakah anda suka berhitung ?'),
(10, 'apakah anda suka menggambar ?'),
(11, 'apakah anda senang bekerja sendiri ?'),
(12, 'apakah anda senang bekerja di dalam tim ?'),
(13, 'Apakah anda suka bekerja di laboraorium ?'),
(14, 'apakah kamu menyukai robot ?');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id_team` int(11) NOT NULL,
  `nama_team` varchar(100) NOT NULL,
  `twitter_team` varchar(100) NOT NULL,
  `facebook_team` varchar(100) NOT NULL,
  `linkedin_team` varchar(100) NOT NULL,
  `foto_team` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id_team`, `nama_team`, `twitter_team`, `facebook_team`, `linkedin_team`, `foto_team`) VALUES
(1, 'Muhammad Hafizh', 'https://twitter.com/i_fizh', 'https://www.facebook.com/muhammad.hafizh.319', 'https://www.linkedin.com/in/m-hafizh-31429a206/', 'hafizh.png'),
(2, 'Andrias Daniswara Admaja', '', '', '', 'andrias.png'),
(3, 'Yassir Khalid', '', '', '', 'yasser.jpg'),
(4, 'M. Mikhail Batara Daulay', '', '', '', 'ical.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `jurusan_pertanyaan`
--
ALTER TABLE `jurusan_pertanyaan`
  ADD PRIMARY KEY (`id_jurusan_pertanyaan`),
  ADD KEY `id_pertanyaan` (`id_pertanyaan`),
  ADD KEY `id_jurusan` (`id_jurusan`);

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id_pertanyaan`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id_team`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `jurusan_pertanyaan`
--
ALTER TABLE `jurusan_pertanyaan`
  MODIFY `id_jurusan_pertanyaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id_pertanyaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id_team` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jurusan_pertanyaan`
--
ALTER TABLE `jurusan_pertanyaan`
  ADD CONSTRAINT `jurusan_pertanyaan_ibfk_1` FOREIGN KEY (`id_pertanyaan`) REFERENCES `pertanyaan` (`id_pertanyaan`) ON DELETE CASCADE,
  ADD CONSTRAINT `jurusan_pertanyaan_ibfk_2` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

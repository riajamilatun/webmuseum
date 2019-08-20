-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20 Agu 2019 pada 11.57
-- Versi Server: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `muze`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_foto`
--

CREATE TABLE IF NOT EXISTS `tb_foto` (
  `id_foto` int(11) NOT NULL,
  `nama_foto` varchar(100) NOT NULL,
  `id_museum` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_foto`
--

INSERT INTO `tb_foto` (`id_foto`, `nama_foto`, `id_museum`) VALUES
(31, 'anatomi1.jpg', 19),
(32, 'anatomi2.jpg', 19),
(33, 'anatomi3.jpg', 19),
(34, 'bahari1.jpg', 20),
(35, 'bahari3.jpg', 20),
(36, 'bahari4.jpg', 20),
(37, 'bahari5.jpg', 20),
(38, 'bahari6.jpg', 20),
(39, 'BI1.jpg', 21),
(40, 'BI2.jpg', 21),
(41, 'BI3.jpg', 21),
(42, 'BI4.jpg', 21),
(44, 'layang1.jpg', 22),
(45, 'layang2.jpg', 22),
(46, 'layang3.jpg', 22),
(47, 'layang4.jpg', 22),
(48, 'listrik1.jpg', 23),
(49, 'listrik2.jpg', 23),
(52, '1384-', 21),
(53, '5951-', 22),
(54, '9776-', 23),
(57, '9156-', 24),
(58, '6082-', 25),
(59, '1287-', 25),
(60, '5259-', 25),
(61, '2573-', 26),
(62, '5223-', 24),
(63, '7844-', 24);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_museum`
--

CREATE TABLE IF NOT EXISTS `tb_museum` (
  `id_museum` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `didirikan` varchar(100) NOT NULL,
  `harga` varchar(250) NOT NULL,
  `jadwal` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL,
  `username` varchar(75) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_museum`
--

INSERT INTO `tb_museum` (`id_museum`, `nama`, `alamat`, `didirikan`, `harga`, `jadwal`, `deskripsi`, `username`, `latitude`, `longitude`) VALUES
(19, 'Museum Anatomi FKIK UNIKA ATMA JAYA', 'Jalan Pluit Selatan Raya No.19, Penjaringan, Jakarta Utara, Indonesia', 'tahun 1652', 'Rp 20.000', 'senin - jumat  09.00 â€“ 15.00  #Sabtu &amp; Minggu Libur', '<p>Museum Anatomi Unika Atma Jaya adalah museum yang dimiliki Universitas Katolik Atmajaya yang memiliki koleksi berbagai anatomi tubuh manusia dengan menggunakan peraga asli. Sebagai salah satu museum sejenis yang terlengkap di Indonesia, Museum Anatomi Atma Jaya merupakan museum pertama milik perguruan tinggi yang dibuka untuk umum. Museum Anatomi Fakultas Kedokteran Unika Atma Jaya telah dibuka untuk umum sejak awal diresmikan pada tahun 1995. Artinya, bukan hanya para calon dokter saja yang dapat belajar mempelajari bagian tubuh manusia lewat cadaver atau mayat.</p> <p>Para pengunjung museum dapat melihat bagian tubuh manusia mulai dari kerangka, otot, peredaran darah, pernapasan, sistem indera, pencernaan, urinaria, reproduksi dan syaraf yang diawetkan dengan terpajang disana. Selain berasal dari tubuh manusia asli, museum tersebut juga memamerkan koleksi dalam bentuk manekin. Museum tersebut saat ini juga dilengkapi dengan citra tubuh manusia dalam bentuk foto radiologi, agar anatomi dapat dipelajari dengan lebih nyata.</p> <p>Museum ini memiliki 3 lantai yang menyediakan ruang bacaan untuk pengunjung yang ingin ruang bebas berisik. Dan di ruangan lain disediakan ruangan khusus untuk berdiskusi, agar tidak mengganggu pembaca lain. Kini Universitas Katolik Atmajaya (Unika Atmajaya) terus menambah koleksi museum anatominya. Kini museum yang terbuka untuk umum tersebut memiliki setidaknya 150 koleksi organ tubuh manusia mulai dari otot, hati, otak jantung hingga tengkorak. Museum ini sangat bagus untuk anak-anak yang ingin tahu lebih jauh anatomi manusia. Bahkan ada tubuh manusia lengkap tanpa kulit yang memamerkan organ tubuh, otot-otot serta tulangnya dengan berdiri tegak.</p>', 'admin', '-6.1256844', '106.7921734'),
(20, 'Museum Bahari', 'Jalan Pasar Ikan No. 1 Kawasan Sunda Kelapa, Penjaringan, Jakarta Utara, Indonesia', '1652', 'Orang Dewasa  Rp.2000 / Pelajar,Mahasiswa dan anak-anak Rp.1000', 'selasa - minggu  08.00 â€“ 16.00 #Senin Libur', '<p>Sejarah museum bahari berawal dari gudang rempah dibangun pada tahun 1652. Memiliki tiga lantai dengan dinding yang tebal sehingga aman jika diserang badai tropis.Langit-langit bangunan ini juga memiliki tiang tiang penyangga yang kuat dan kokoh dan terbuat dari kayu-kayu tebal sehingga awet dari serangan cuaca dan rayap. Tiang-tiang penyangga ini masih ada sampai sekarang, menyangga setiap lantai bangunan. Sirkulasi udara pun dibuat baik sehingga rempah yang disimpan tidak mudah lapuk.</p> <p>Dari tahun ke tahun gudang ini mengalami banyak perubahan, dan setelah mengalami renovasi yang dilakukan Pemerintah provinsi. DKI bangunan ini tampak lebih utuh. Gudang rempah diresmikan menjadi Museum Bahari pada tanggal 7 juli 1977. Didalam museum ini terdapat banyak koleksi benda-benda bersejarah kelautan. Anda akan dapat melihat benda-benda peninggalan VOC, perahu-perahu, baik asli maupun hanya berupa replika, alat navigasi pelayaran, foto-foto dan juga lukisan. Terdapat 19 buah perahu asli yang pamerkan di museum ini dan seratus lebih sisanya hanyalah berupa miniatur.</p>', 'admin', '-6.1267066', '106.8060615'),
(21, 'Museum Bank Indonesia', 'Jalan Lada 3, RT.3/RW.6, Pinangsia, Kec. Taman Sari, Jakarta Barat, Indonesia', '15 Desember 2006', 'Rp 5.000', 'selasa- minggu 08.00 â€“ 15.30  #Senin Libur', '<p>Museum BI menempati gedung BI Kota yang sebelumnya digunakan oleh De Javasche Bank, gedung yang mempunyai nilai sejarah tinggi yang terancam kerusakan apabila tidak dimanfaatkan dan dilestarikan. Pemerintah telah menetapkan bangunan tersebut sebagai bangunan cagar budaya. Selain dari gedung bersejarah, BI juga memiliki benda-benda dan dokumen-dokumen bersejarah yang perlu dirawat dan diolah untuk dapat memberikan informasi yang sangat berguna bagi masyarakat.</p> <p>Dilandasi oleh keinginan untuk dapat memberikan pengetahuan kepada masyarakat mengenai peran BI dalam perjalanan sejarah bangsa, termasuk memberikan pemahaman tentang latar belakang serta dampak dari kebijakan-kebijakan BI yang diambil dari waktu ke waktu, Dewan Gubernur BI telah memutuskan untuk membangun Museum Bank Indonesia dengan memanfaatkan gedung BI Kota yang perlu dilestarikan. Pelestarian gedung BI Kota tersebut sejalan dengan kebijakan Pemerintah Daerah Khusus Ibukota Jakarta yang telah mencanangkan daerah Kota sebagai daerah pengembangan kota lama Jakarta. Bahkan, BI diharapkan menjadi pelopor dari pemugaran/revitalisasi gedung-gedung bersejarah di daerah Kota.</p>', 'admin', '-6.1373063', '106.8108831'),
(22, 'Museum Layang-Layang', 'Jl. H. Kamang No. 38, Pondok Labu, Jakarta Selatan, Indonesia', '21 Maret 2003', 'Rp 15.000', '09.00 â€“ 16.00  #Senin Libur', '<p>Layang-layang merupakan bagian dari permainan masa kecil yang tidak hanya berfungsi sebagai permainan belaka, tapi bisa dilibatkan dalam sebuah ritual terbatas. Berbagai bangsa di dunia dapat dipastikan mengenal permainan layang-layang. Fenomena inilah yang mendorong para pecinta layang-layang bagi mendirikan museum layang-layang. Di dalam museum tersebut, para pecinta layang-layang akan mengumpulkan berbagai macam layang-layang dari mancanegara dan melindungi koleksi tersebut supaya bisa dinikmati keindahannya dan dipelajari teknologinya.</p> <p>Museum Layang-Layang Indonesia didirikan oleh seorang berbakat kecantikan yang menekuni dunia layang-layang sejak tahun 1985 dengan membentuk Merindo Kites & Gallery yang bergerak di bidang layang-layang yang bernama Endang W. Puspoyo.[1] Kecintaannya pada layang-layang membuat ia tergerak bagi mendirikan Museum Layang-Layang Indonesia.[5] Kiprahnya dalam mendirikan Museum Layang-Layang Indonesia membuat museum ini mendapatkan penghargaan dari Museum Rekor Indonesia (MURI) bagi pemecahan rekor pemrakarsa dan penyelenggara pembuatan layang-layang berwujud diamond terbesar pada 2011 serta penghargaan kepariwisataan Indonesia pada 2004, yang diberikan oleh I Gede Ardika selaku Menteri Kebudayaan dan Pariwisata saat itu</p>', 'admin', '-6.3080229', '106.7883593'),
(23, 'Museum Listrik Dan Energi Baru Taman Mini Indonesia Indah', 'Jl. Tmii, Kramat Jati, Pinang Ranti, Jakarta Timur, Indonesia', '20 April 1995', 'Rp 10.000', 'senin - minggu  08.00 â€“ 16.00', '<p>Museum Listrik dan Energi Baru merupakan gagasan dari Menteri Pertambangan dan Energi pada peringatan 100 tahun ketenaga listrikan di Indonesia dan di resmikan oleh Presiden Soeharto pada tanggal 20 April 1995. Menempati area seluas 2 hektar dibangun dengan konsep arsitektur modern dengan bentuk struktur atom, yakni satu proton yang dikelilingi oleh tiga elektron dengan total bangunan seluas 6.500 meter persegi . Arsitektur bangunan tersebut diaplikasikan dalam bentuk anjungan listrik yang dikelilingi oleh tiga bangunan lainnya yaitu anjungan energi baru, Anjungan energi fosil, dan anjungan energy konvensional.</p>', 'admin', '-6.3031953', '106.9022372');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `username` varchar(75) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`username`, `password`) VALUES
('admin', 'YWRtaW4='),
('admin galau', '40bd0015');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_visitor`
--

CREATE TABLE IF NOT EXISTS `tb_visitor` (
  `id_visitor` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `ip_address` text NOT NULL,
  `counter` text NOT NULL,
  `browser` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_visitor`
--

INSERT INTO `tb_visitor` (`id_visitor`, `tanggal`, `ip_address`, `counter`, `browser`) VALUES
(1, '2019-08-12', '::1', '1', 'Chrome/Opera'),
(2, '2019-08-12', '192.168.1.100', '1', 'Chrome/Opera'),
(3, '2019-08-12', '192.168.1.103', '1', 'Chrome/Opera'),
(4, '2019-08-13', '::1', '1', 'Chrome/Opera'),
(5, '2019-08-14', '::1', '1', 'Chrome/Opera'),
(6, '2019-08-17', '::1', '1', 'Chrome/Opera'),
(7, '2019-08-18', '::1', '1', 'Chrome/Opera'),
(8, '2019-08-18', '::1', '1', 'Chrome/Opera'),
(9, '2019-08-19', '::1', '1', 'Chrome/Opera'),
(10, '2019-08-20', '::1', '1', 'Chrome/Opera'),
(11, '2019-08-20', '::1', '1', 'Chrome/Opera');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_foto`
--
ALTER TABLE `tb_foto`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indexes for table `tb_museum`
--
ALTER TABLE `tb_museum`
  ADD PRIMARY KEY (`id_museum`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tb_visitor`
--
ALTER TABLE `tb_visitor`
  ADD PRIMARY KEY (`id_visitor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_foto`
--
ALTER TABLE `tb_foto`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `tb_museum`
--
ALTER TABLE `tb_museum`
  MODIFY `id_museum` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `tb_visitor`
--
ALTER TABLE `tb_visitor`
  MODIFY `id_visitor` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

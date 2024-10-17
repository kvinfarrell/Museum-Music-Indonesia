-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2024 at 04:00 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `museum`
--

-- --------------------------------------------------------

--
-- Table structure for table `bukus`
--

CREATE TABLE `bukus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `isbn` varchar(255) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi_buku` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `rak` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bukus`
--

INSERT INTO `bukus` (`id`, `isbn`, `tgl_masuk`, `judul`, `isi_buku`, `deskripsi`, `rak`, `created_at`, `updated_at`) VALUES
(27, '978-602-03-0351-3', '2024-09-04', 'Laskar Pelangi', 'Andrea Hirata', 'Buku ini mengisahkan perjuangan anak-anak di sebuah desa terpencil di Belitung.', 2, '2024-09-18 19:39:33', '2024-09-19 00:59:06'),
(28, '978-602-0633-42-6', '2024-09-10', 'Filosofi Kopi', 'Dee Lestari', 'dengan kisah utama tentang seorang barista yang mencoba mencari arti dari kopi yang sempurna.', 1, '2024-09-18 19:42:55', '2024-09-18 19:42:55'),
(29, '978-979-461-800-5', '2024-09-18', 'A Brief History of Humankind', 'Yuval Noah Harari', 'Buku ini mengeksplorasi sejarah umat manusia, mulai dari evolusi manusia purba hingga perkembangan masyarakat modern', 1, '2024-09-18 19:43:44', '2024-09-18 19:43:44'),
(30, '978-602-291-247-4', '2024-09-04', 'Negeri 5 Menara', 'Ahmad Fuadi', 'Novel ini bercerita tentang kehidupan enam santri di sebuah pesantren yang bertekad kuat untuk meraih mimpi besar mereka.', 1, '2024-09-18 19:44:38', '2024-09-18 19:45:04');

-- --------------------------------------------------------

--
-- Table structure for table `cds`
--

CREATE TABLE `cds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomor_regist` varchar(255) NOT NULL,
  `penyumbang` varchar(255) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `judul` varchar(255) NOT NULL,
  `lagu` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `rak` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cds`
--

INSERT INTO `cds` (`id`, `nomor_regist`, `penyumbang`, `tgl_masuk`, `judul`, `lagu`, `deskripsi`, `rak`, `created_at`, `updated_at`) VALUES
(11, '001', 'Danial', '2024-09-04', '21', 'Adele', 'Album dari Adele yang dirilis tahun 2011, dengan hits seperti \"Someone Like You\".', 1, '2024-09-18 19:06:19', '2024-09-18 19:06:19'),
(12, '002', 'Sugeng', '2024-09-24', '1989', 'Taylor Swift', 'Album pop dari Taylor Swift yang dirilis tahun 2014, dengan lagu ikonik \"Shake It Off\".', 1, '2024-09-18 19:07:39', '2024-09-18 19:07:39'),
(13, '003', 'Asep', '2024-09-26', 'Hybrid Theory', 'Linkin Park', 'Album debut dari Linkin Park yang dirilis tahun 2000, membawa nu metal ke puncak popularitas.', 2, '2024-09-18 19:09:09', '2024-09-18 19:09:09'),
(14, '004', 'Fadli', '2024-09-24', 'Future Nostalgia', 'Dua Lipa', 'Album dari Dua Lipa yang dirilis tahun 2020, membawa nuansa disko modern ke dunia pop.', 2, '2024-09-18 19:09:45', '2024-09-18 19:09:45');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `instrumenmoderns`
--

CREATE TABLE `instrumenmoderns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomor_regist` varchar(255) NOT NULL,
  `nama_instrumen` varchar(255) NOT NULL,
  `penyumbang` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `instrumenmoderns`
--

INSERT INTO `instrumenmoderns` (`id`, `nomor_regist`, `nama_instrumen`, `penyumbang`, `quantity`, `created_at`, `updated_at`) VALUES
(16, '001', 'Drum', 'Badli', 2, NULL, NULL),
(17, '002', 'Gitar', 'Sugeng', 2, NULL, NULL),
(18, '003', 'Piano', 'Chester', 2, NULL, NULL),
(19, '004', 'Biola', 'Kadek', 1, NULL, NULL),
(20, '005', 'Piano', 'Fadli', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `instrumentradisionals`
--

CREATE TABLE `instrumentradisionals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomor_regist` varchar(255) NOT NULL,
  `nama_instrumen` varchar(255) NOT NULL,
  `daerah` varchar(255) NOT NULL,
  `penyumbang` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `instrumentradisionals`
--

INSERT INTO `instrumentradisionals` (`id`, `nomor_regist`, `nama_instrumen`, `daerah`, `penyumbang`, `quantity`, `created_at`, `updated_at`) VALUES
(8, '001', 'Gamelan', 'Solo', 'Joko', 1, NULL, NULL),
(9, '002', 'Sape\'', 'Kalimantan', 'Badri', 3, NULL, NULL),
(10, '003', 'Angklung', 'Bandung', 'Asep', 2, NULL, NULL),
(11, '004', 'Djembe', 'Afrika', 'Budianto', 2, NULL, NULL),
(12, '005', 'Koto', 'Jepang', 'Yamaguchi', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kaset`
--

CREATE TABLE `kaset` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomor_regist` varchar(255) NOT NULL,
  `penyumbang` varchar(255) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `lagu` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `rak` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kaset`
--

INSERT INTO `kaset` (`id`, `nomor_regist`, `penyumbang`, `tgl_masuk`, `lagu`, `deskripsi`, `rak`, `created_at`, `updated_at`) VALUES
(21, '001', 'Badli', '2024-09-05', 'The Chronic', 'Album debut dari Dr. Dre yang dirilis tahun 1992, dengan hits seperti \"Nuthin\' but a \'G\' Thang\".', '2', '2024-09-18 18:55:22', '2024-09-18 19:06:29'),
(22, '002', 'Fadli', '2024-09-03', 'Like a Virgin', 'Album ikonik Madonna yang dirilis tahun 1984,', '2', '2024-09-18 18:57:05', '2024-09-19 00:55:02'),
(23, '003', 'Suga', '2024-09-14', 'Dookie', 'Album dari Green Day yang dirilis tahun 1994, menjadi tonggak penting dalam punk rock modern.', '1', '2024-09-18 18:57:47', '2024-09-18 19:06:44'),
(24, '004', 'Sari', '2024-09-17', 'Ray of Light', 'Album elektronik Madonna yang dirilis tahun 1998, membawa elemen dance ke pop mainstream.', '2', '2024-09-18 18:58:24', '2024-09-18 19:06:51'),
(25, '005', 'wera', '2024-09-10', 'The Eminem Show', 'Album dari Eminem yang dirilis tahun 2002, menggabungkan rap dengan tema kehidupan pribadinya.', '39', '2024-09-18 19:00:02', '2024-09-18 19:00:02');

-- --------------------------------------------------------

--
-- Table structure for table `komponens`
--

CREATE TABLE `komponens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_komponen` varchar(255) NOT NULL,
  `dekripsi` varchar(255) NOT NULL,
  `kuantitas` varchar(255) NOT NULL,
  `rak` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `komponens`
--

INSERT INTO `komponens` (`id`, `nama_komponen`, `dekripsi`, `kuantitas`, `rak`, `created_at`, `updated_at`) VALUES
(2, 'Jack Anttena', 'Bagus', '3', 4, NULL, NULL),
(5, 'Mic SR-128', 'Bagus', '5', 9, NULL, NULL),
(6, 'Jack Mono', 'Bagus', '8', 3, NULL, NULL),
(7, 'Jack Stereo', 'Bagus', '4', 4, NULL, NULL),
(8, 'Mic BMA-200', 'Bagus', '3', 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `majalahs`
--

CREATE TABLE `majalahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `issn` varchar(255) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi_majalah` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `rak` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `majalahs`
--

INSERT INTO `majalahs` (`id`, `issn`, `tgl_masuk`, `judul`, `isi_majalah`, `deskripsi`, `rak`, `created_at`, `updated_at`) VALUES
(10, '0027-9358', '2024-09-05', 'National Geographic', 'National Geographic Society', 'eksplorasi mendalam tentang konservasi laut dan keanekaragaman hayati laut.', 2, NULL, NULL),
(11, '0040-781X', '2024-09-11', 'TIME', 'TIME USA, LLC', 'Laporan khusus tentang pemimpin dunia paling berpengaruh tahun 2023, disertai analisis politik global, teknologi, dan tren sosial terbaru.', 1, NULL, NULL),
(12, '0015-6914', '2024-09-04', 'Forbes', 'Forbes Media LLC', 'Edisi ini menampilkan daftar 100 orang terkaya di dunia, serta artikel tentang inovasi bisnis, teknologi, dan investasi.', 2, NULL, NULL),
(13, '0010-9541', '2024-09-18', 'Cosmopolitan', 'Hearst Magazines', 'Fokus pada tren mode, tips kecantikan, dan wawancara selebriti, serta artikel mengenai kesehatan mental dan hubungan.', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `memorabilias`
--

CREATE TABLE `memorabilias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomor_regist` varchar(255) NOT NULL,
  `penyumbang` varchar(255) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `Biografi` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `memorabilias`
--

INSERT INTO `memorabilias` (`id`, `nomor_regist`, `penyumbang`, `tgl_masuk`, `Biografi`, `foto`, `nama`, `deskripsi`, `created_at`, `updated_at`) VALUES
(37, '001', 'Sugeng', '2024-09-06', 'Michael Jackson, \"King of Pop,\" lahir pada 1958, memulai kariernya bersama The Jackson 5 sebelum mencapai puncak popularitas sebagai artis solo. Albumnya Thriller (1982) menjadi album terlaris sepanjang masa.', 'foto/240919022123.jpg', 'Jaket Thriller Michael Jackson', 'Jaket merah ikonik yang dikenakan oleh Michael Jackson dalam video musik Thriller. Jaket ini menjadi simbol dari era musik pop 80-an dan telah terjual dalam pelelangan dengan harga jutaan dolar.', '2024-09-18 19:21:23', '2024-09-18 19:21:23'),
(38, '002', 'Fadli', '2024-09-04', 'David Gilmour, gitaris dan vokalis Pink Floyd, lahir pada 1946. Ia dikenal karena keterampilan gitarnya dan perannya dalam menciptakan beberapa karya rock paling berpengaruh, seperti The Wall dan Dark Side of the Moon.', 'foto/240919023252.jpg', 'Gitar Black Strat milik David Gilmour', 'Gitar Fender Stratocaster hitam yang digunakan David Gilmour dalam banyak penampilan Pink Floyd, termasuk pada konser Live at Pompeii. Gitar ini dikenal dengan nada uniknya dan menjadi salah satu gitar legendaris dalam dunia musik rock.', '2024-09-18 19:32:52', '2024-09-18 19:32:52');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_05_22_092512_kaset', 1),
(6, '2024_05_22_093521_create_piringanhitams_table', 1),
(7, '2024_05_22_093711_create_instrumentradisionals_table', 1),
(8, '2024_05_22_093936_create_instrumenmoderns_table', 1),
(9, '2024_05_22_094159_create_komponens_table', 1),
(10, '2024_05_22_094324_create_majalahs_table', 1),
(11, '2024_05_22_094557_create_memorabilias_table', 1),
(12, '2024_05_22_094926_create_raks_table', 1),
(13, '2024_05_22_095051_create_bukus_table', 1),
(14, '2024_05_22_095500_create_cds_table', 1),
(15, '2024_09_04_115527_change_variable_column_buku', 2),
(16, '2024_09_04_115903_change_variable_cd', 3),
(17, '2024_09_04_120023_change_variable_column_majalah', 4),
(18, '2024_09_04_120445_change_variable_column_piringanhitams', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `piringanhitams`
--

CREATE TABLE `piringanhitams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomor_regist` varchar(255) NOT NULL,
  `penyumbang` varchar(255) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `cover` varchar(255) NOT NULL,
  `lagu` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `rak` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `piringanhitams`
--

INSERT INTO `piringanhitams` (`id`, `nomor_regist`, `penyumbang`, `tgl_masuk`, `cover`, `lagu`, `deskripsi`, `rak`, `created_at`, `updated_at`) VALUES
(18, '001', 'budi', '2024-09-11', 'cover/240919014230.jpg', 'Abbey Road', 'Album legendaris dari The Beatles, dirilis pada 1969 dengan lagu ikonik seperti \"Come Together\".', 2, NULL, NULL),
(19, '002', 'raafi', '2024-09-13', 'cover/240919014504.jpg', 'Dark Side of the Moon', 'Album fenomenal dari Pink Floyd, dirilis tahun 1973,', 1, NULL, NULL),
(20, '003', 'nizar', '2024-09-05', 'cover/240919014801.jpg', 'Thriller', 'Album pop terkenal Michael Jackson yang dirilis pada 1982, album terlaris sepanjang masa.', 1, NULL, NULL),
(21, '004', 'eras', '2024-09-05', 'cover/240919014923.jpg', 'Back in Black', 'Album rock klasik dari AC/DC yang dirilis pada 1980 sebagai penghormatan kepada vokalis Bon Scott.', 2, NULL, NULL),
(22, '005', 'bardi', '2024-09-05', 'cover/240919015040.jpg', 'Led Zeppelin IV', 'Album dari Led Zeppelin yang dirilis tahun 1971, dikenal dengan lagu \"Stairway to Heaven\".', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `raks`
--

CREATE TABLE `raks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomor_rak` int(11) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'adminMuseumMusik2009', 'admidMusemMusik@gmail.com', NULL, '$2y$12$swQ2tqiV3tjMjoG633E/fO3pR5Zm8NcuXqQ5rXEtJyBuHnZXGpziW', NULL, '2024-09-04 03:15:15', '2024-09-12 19:27:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bukus`
--
ALTER TABLE `bukus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cds`
--
ALTER TABLE `cds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `instrumenmoderns`
--
ALTER TABLE `instrumenmoderns`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `instrumenmoderns_nomor_regist_unique` (`nomor_regist`);

--
-- Indexes for table `instrumentradisionals`
--
ALTER TABLE `instrumentradisionals`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `instrumentradisionals_nomor_regist_unique` (`nomor_regist`);

--
-- Indexes for table `kaset`
--
ALTER TABLE `kaset`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kaset_nomor_regist_unique` (`nomor_regist`);

--
-- Indexes for table `komponens`
--
ALTER TABLE `komponens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `komponens_nama_komponen_unique` (`nama_komponen`);

--
-- Indexes for table `majalahs`
--
ALTER TABLE `majalahs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `majalahs_issn_unique` (`issn`);

--
-- Indexes for table `memorabilias`
--
ALTER TABLE `memorabilias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `memorabilias_nomor_regist_unique` (`nomor_regist`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `piringanhitams`
--
ALTER TABLE `piringanhitams`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `piringanhitams_nomor_regist_unique` (`nomor_regist`);

--
-- Indexes for table `raks`
--
ALTER TABLE `raks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bukus`
--
ALTER TABLE `bukus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `cds`
--
ALTER TABLE `cds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `instrumenmoderns`
--
ALTER TABLE `instrumenmoderns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `instrumentradisionals`
--
ALTER TABLE `instrumentradisionals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `kaset`
--
ALTER TABLE `kaset`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `komponens`
--
ALTER TABLE `komponens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `majalahs`
--
ALTER TABLE `majalahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `memorabilias`
--
ALTER TABLE `memorabilias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `piringanhitams`
--
ALTER TABLE `piringanhitams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `raks`
--
ALTER TABLE `raks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

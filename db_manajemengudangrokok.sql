-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2023 at 03:30 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_manajemengudangrokok`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `Id_Admin` varchar(15) NOT NULL,
  `Id_Pegawai` varchar(15) NOT NULL,
  `Email_Pengguna` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`Id_Admin`, `Id_Pegawai`, `Email_Pengguna`, `Password`, `created_at`, `updated_at`) VALUES
('14045', '1091', 'dada@gmail.com', '$2y$10$Ha4n/fonul8nkI9Hw5j3SO5OHFd9skq9nbp.a4Hv3ElmsoeWboSAK', '2023-06-04 03:42:04', '2023-06-05 03:17:46');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `Id_Barang` varchar(15) NOT NULL,
  `Id_BarangMasuk` varchar(15) NOT NULL,
  `Kode_Barang` varchar(15) NOT NULL,
  `Id_Admin` varchar(15) NOT NULL,
  `Nama_Barang` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`Id_Barang`, `Id_BarangMasuk`, `Kode_Barang`, `Id_Admin`, `Nama_Barang`, `created_at`, `updated_at`) VALUES
('5341', '2961', 'Gudang Garam', '14045', 'Surya', '2023-06-04 06:35:33', '2023-06-04 06:35:33');

-- --------------------------------------------------------

--
-- Table structure for table `barang_keluar`
--

CREATE TABLE `barang_keluar` (
  `Id_BarangKeluar` varchar(15) NOT NULL,
  `Id_Penjualan` varchar(15) NOT NULL,
  `Tanggal_Keluar` date NOT NULL,
  `Jumlah` varchar(15) NOT NULL,
  `Id_Admin` varchar(15) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barang_keluar`
--

INSERT INTO `barang_keluar` (`Id_BarangKeluar`, `Id_Penjualan`, `Tanggal_Keluar`, `Jumlah`, `Id_Admin`, `created_at`, `updated_at`) VALUES
('9210', '6271', '2023-06-04', '19800', '14045', '2023-06-04 09:40:03', '2023-06-04 10:34:44');

-- --------------------------------------------------------

--
-- Table structure for table `barang_masuk`
--

CREATE TABLE `barang_masuk` (
  `Id_BarangMasuk` varchar(15) NOT NULL,
  `Jumlah` varchar(15) NOT NULL,
  `Tanggal_Masuk` date NOT NULL,
  `Id_Pembelian` varchar(15) NOT NULL,
  `Id_Admin` varchar(15) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barang_masuk`
--

INSERT INTO `barang_masuk` (`Id_BarangMasuk`, `Jumlah`, `Tanggal_Masuk`, `Id_Pembelian`, `Id_Admin`, `created_at`, `updated_at`) VALUES
('2961', '20000', '2023-06-05', '4391', '14045', '2023-06-04 04:30:25', '2023-06-04 06:00:34');

-- --------------------------------------------------------

--
-- Table structure for table `barang_return_pembelian`
--

CREATE TABLE `barang_return_pembelian` (
  `Id_BarangReturnPembelian` varchar(15) NOT NULL,
  `Id_Barang` varchar(15) NOT NULL,
  `Tanggal_Return` date NOT NULL,
  `Id_Admin` varchar(15) NOT NULL,
  `Jumlah_BarangReturnPembelian` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barang_return_pembelian`
--

INSERT INTO `barang_return_pembelian` (`Id_BarangReturnPembelian`, `Id_Barang`, `Tanggal_Return`, `Id_Admin`, `Jumlah_BarangReturnPembelian`, `created_at`, `updated_at`) VALUES
('3961', '5341', '2023-06-04', '14045', 100, '2023-06-04 08:00:58', '2023-06-04 08:00:58');

-- --------------------------------------------------------

--
-- Table structure for table `barang_return_penjualan`
--

CREATE TABLE `barang_return_penjualan` (
  `Id_BarangReturnPenjualan` varchar(15) NOT NULL,
  `Tanggal_Return` date NOT NULL,
  `Id_Outlet` varchar(15) NOT NULL,
  `Id_Barang` varchar(15) NOT NULL,
  `Id_Admin` varchar(15) NOT NULL,
  `Jumlah_Barangreturnpenjualan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barang_return_penjualan`
--

INSERT INTO `barang_return_penjualan` (`Id_BarangReturnPenjualan`, `Tanggal_Return`, `Id_Outlet`, `Id_Barang`, `Id_Admin`, `Jumlah_Barangreturnpenjualan`, `created_at`, `updated_at`) VALUES
('8941', '2023-06-05', '7931', '5341', '14045', 200, '2023-06-04 10:37:10', '2023-06-04 10:37:10');

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
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `Id_Kategori` varchar(15) NOT NULL,
  `Kategori` varchar(25) NOT NULL,
  `Id_Barang` varchar(15) NOT NULL,
  `Id_Admin` varchar(15) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`Id_Kategori`, `Kategori`, `Id_Barang`, `Id_Admin`, `created_at`, `updated_at`) VALUES
('1071', 'Kretek Original', '5341', '14045', '2023-06-04 08:14:43', '2023-06-04 08:14:43');

-- --------------------------------------------------------

--
-- Table structure for table `kepala_gudang`
--

CREATE TABLE `kepala_gudang` (
  `Id_KepalaGudang` varchar(15) NOT NULL,
  `Id_Pegawai` varchar(15) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kepala_gudang`
--

INSERT INTO `kepala_gudang` (`Id_KepalaGudang`, `Id_Pegawai`, `Email`, `Password`, `created_at`, `updated_at`) VALUES
('8091', '1091', 'Sofyan@gmail.com', '$2y$10$SaEufQ6tnsAacAAkmMaGQeLyxnI9afzIiq5urwwVAQ1KBjkzykH.2', '2023-06-04 01:47:28', '2023-06-04 04:16:43');

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
(5, '2023_05_30_111308_create_admins_table', 1),
(6, '2023_05_31_010125_create_barang_table', 1),
(7, '2023_05_31_043009_create_barang_keluar_table', 1),
(8, '2023_05_31_062008_create_barang_return_pembelian_table', 1),
(9, '2023_05_31_070307_create_barang_return_penjualan_table', 1),
(10, '2023_05_31_143139_create_barang_masuk_table', 1),
(11, '2023_05_31_145614_create_kategori_table', 1),
(12, '2023_06_01_161422_create_outlet_table', 1),
(13, '2023_06_01_165056_create_kepala_gudang_table', 1),
(14, '2023_06_01_171838_create_pegawai_table', 1),
(15, '2023_06_02_085856_create_penjualan_table', 1),
(16, '2023_06_02_092222_create_stok_barang_table', 1),
(17, '2023_06_02_093652_create_suppliers_table', 1),
(18, '2023_06_02_094512_create_pembelian_table', 1),
(19, '2023_06_02_114321_create_pengiriman_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `outlet`
--

CREATE TABLE `outlet` (
  `Id_Outlet` varchar(15) NOT NULL,
  `Nama_Outlet` varchar(50) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `No_Telp` varchar(15) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `outlet`
--

INSERT INTO `outlet` (`Id_Outlet`, `Nama_Outlet`, `Alamat`, `No_Telp`, `created_at`, `updated_at`) VALUES
('7931', 'Warmad', 'Malang', '081982317896', '2023-06-04 08:49:00', '2023-06-04 08:49:00');

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
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `Id_Pegawai` varchar(15) NOT NULL,
  `Nama_Pegawai` varchar(50) NOT NULL,
  `Alamat` varchar(25) NOT NULL,
  `No_Telp` varchar(15) NOT NULL,
  `Jenis_Kelamin` varchar(15) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`Id_Pegawai`, `Nama_Pegawai`, `Alamat`, `No_Telp`, `Jenis_Kelamin`, `created_at`, `updated_at`) VALUES
('1091', 'Sofyan', 'Malang', '080523815790', 'Laki-laki', '2023-06-04 01:46:55', '2023-06-04 01:46:55'),
('1092', 'Nuangga', 'Sidoarjo', '081290128091', 'Laki-laki', '2023-06-04 01:46:20', '2023-06-04 01:46:20');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `Id_Pembelian` varchar(15) NOT NULL,
  `Id_Supplier` varchar(15) NOT NULL,
  `Nama_Barang` varchar(25) NOT NULL,
  `Jumlah` varchar(15) NOT NULL,
  `Tanggal_Pembelian` date NOT NULL,
  `Harga_Pembelian` int(11) NOT NULL,
  `Id_Admin` varchar(15) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`Id_Pembelian`, `Id_Supplier`, `Nama_Barang`, `Jumlah`, `Tanggal_Pembelian`, `Harga_Pembelian`, `Id_Admin`, `created_at`, `updated_at`) VALUES
('9021', '5901', 'Surya', '10000', '2023-06-05', 20000, '14045', '2023-06-05 03:30:20', '2023-06-05 03:30:20');

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman`
--

CREATE TABLE `pengiriman` (
  `Id_Pengiriman` varchar(15) NOT NULL,
  `Tanggal_Pengiriman` date NOT NULL,
  `Id_BarangKeluar` varchar(15) NOT NULL,
  `Id_Penjualan` varchar(15) NOT NULL,
  `Id_Outlet` varchar(15) NOT NULL,
  `Id_Admin` varchar(15) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengiriman`
--

INSERT INTO `pengiriman` (`Id_Pengiriman`, `Tanggal_Pengiriman`, `Id_BarangKeluar`, `Id_Penjualan`, `Id_Outlet`, `Id_Admin`, `created_at`, `updated_at`) VALUES
('9656', '2023-06-06', '9210', '6271', '7931', '14045', '2023-06-05 03:47:52', '2023-06-05 03:47:52');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `Id_Penjualan` varchar(15) NOT NULL,
  `Id_Outlet` varchar(15) NOT NULL,
  `Id_Barang` varchar(15) NOT NULL,
  `Jumlah` varchar(15) NOT NULL,
  `Tanggal_Penjualan` date NOT NULL,
  `Harga_Penjualan` int(11) NOT NULL,
  `Id_Admin` varchar(15) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`Id_Penjualan`, `Id_Outlet`, `Id_Barang`, `Jumlah`, `Tanggal_Penjualan`, `Harga_Penjualan`, `Id_Admin`, `created_at`, `updated_at`) VALUES
('6271', '7931', '5341', '19900', '2023-06-04', 25000, '14045', '2023-06-04 09:29:17', '2023-06-04 09:29:17');

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
-- Table structure for table `stok_barang`
--

CREATE TABLE `stok_barang` (
  `Id_StokBarang` varchar(15) NOT NULL,
  `Id_Kategori` varchar(15) NOT NULL,
  `Stok_Barang` varchar(15) NOT NULL,
  `Id_Admin` varchar(15) NOT NULL,
  `Id_Barang` varchar(15) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stok_barang`
--

INSERT INTO `stok_barang` (`Id_StokBarang`, `Id_Kategori`, `Stok_Barang`, `Id_Admin`, `Id_Barang`, `created_at`, `updated_at`) VALUES
('2091', '1071', '19900', '14045', '5341', '2023-06-04 08:38:53', '2023-06-04 08:38:53');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `Id_Supplier` varchar(15) NOT NULL,
  `Nama_Supplier` varchar(50) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `No_Telp` varchar(15) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`Id_Supplier`, `Nama_Supplier`, `Alamat`, `No_Telp`, `created_at`, `updated_at`) VALUES
('5901', 'I Gede', 'Bali', '081269236587', '2023-06-04 02:38:32', '2023-06-04 04:15:51');

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
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`Id_Admin`),
  ADD KEY `admins_id_pegawai_index` (`Id_Pegawai`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`Id_Barang`),
  ADD KEY `barang_id_barangmasuk_index` (`Id_BarangMasuk`),
  ADD KEY `barang_id_admin_index` (`Id_Admin`);

--
-- Indexes for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  ADD PRIMARY KEY (`Id_BarangKeluar`),
  ADD KEY `barang_keluar_id_penjualan_index` (`Id_Penjualan`),
  ADD KEY `barang_keluar_id_admin_index` (`Id_Admin`);

--
-- Indexes for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD PRIMARY KEY (`Id_BarangMasuk`),
  ADD KEY `barang_masuk_id_pembelian_index` (`Id_Pembelian`),
  ADD KEY `barang_masuk_id_admin_index` (`Id_Admin`);

--
-- Indexes for table `barang_return_pembelian`
--
ALTER TABLE `barang_return_pembelian`
  ADD PRIMARY KEY (`Id_BarangReturnPembelian`),
  ADD KEY `barang_return_pembelian_id_barang_index` (`Id_Barang`),
  ADD KEY `barang_return_pembelian_id_admin_index` (`Id_Admin`);

--
-- Indexes for table `barang_return_penjualan`
--
ALTER TABLE `barang_return_penjualan`
  ADD PRIMARY KEY (`Id_BarangReturnPenjualan`),
  ADD KEY `barang_return_penjualan_id_outlet_index` (`Id_Outlet`),
  ADD KEY `barang_return_penjualan_id_barang_index` (`Id_Barang`),
  ADD KEY `barang_return_penjualan_id_admin_index` (`Id_Admin`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`Id_Kategori`),
  ADD KEY `kategori_id_barang_index` (`Id_Barang`),
  ADD KEY `kategori_id_admin_index` (`Id_Admin`);

--
-- Indexes for table `kepala_gudang`
--
ALTER TABLE `kepala_gudang`
  ADD PRIMARY KEY (`Id_KepalaGudang`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `outlet`
--
ALTER TABLE `outlet`
  ADD PRIMARY KEY (`Id_Outlet`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`Id_Pegawai`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`Id_Pembelian`);

--
-- Indexes for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`Id_Pengiriman`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`Id_Penjualan`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `stok_barang`
--
ALTER TABLE `stok_barang`
  ADD PRIMARY KEY (`Id_StokBarang`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`Id_Supplier`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

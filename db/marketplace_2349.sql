-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2024 at 04:39 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marketplace_2349`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_admin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_admin`) VALUES
(1, 'admin@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Brian, S.Kom');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `foto_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `foto_kategori`) VALUES
(1, 'Fashion Wanita', '8bc4009105005e2c6849fc83c3205e3b.jpg'),
(2, 'sparepart motor', 'Top_10_Sparepart_Yang_Sering_Diganti.jpg'),
(3, 'Perlengkapan Rumah', 'IMG20230122113804.jpg'),
(4, 'Kebutuhan Hewan Peliharaan', 'a433074ce20d1323398c51f555f4cdb8.jpg'),
(5, 'Aksesoris Pria', 'vadim-sherbakov-tciclj5ktbe-unsplash-55bff839df30b5ed08634ddf3e8b0dea_600x400.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `email_member` varchar(100) NOT NULL,
  `password_member` varchar(100) NOT NULL,
  `nama_member` varchar(100) NOT NULL,
  `alamat_member` text NOT NULL,
  `wa_member` varchar(50) NOT NULL,
  `kode_distrik_member` varchar(10) NOT NULL,
  `nama_distrik_member` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `email_member`, `password_member`, `nama_member`, `alamat_member`, `wa_member`, `kode_distrik_member`, `nama_distrik_member`) VALUES
(1, 'arif@amikom.ac.id', 'bb6113797d13f9451665a7591e5943986f546dfa', 'Arif Nur Rohman', 'Purwomartani Kalasan Sleman ', '08990423789', '512', 'Sleman'),
(2, 'lanesra@amikom.ac.id', 'a5375c7f48244c8f4876ee6f97bbda4d91fe1665', 'Lanesra', 'Arjawinangun Cirebon', '081336952939', '419', 'Cirebon'),
(3, 'novebrian@gmail.com', '1fdce60e456ccfcc3a19f9b87d594b02323e234a', 'Novebrian', 'Jetis, Klaten Selatan, Klaten', '089694929896', '574', 'Klaten');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `foto_produk` varchar(255) NOT NULL,
  `deskripsi_produk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_member`, `id_kategori`, `nama_produk`, `harga_produk`, `foto_produk`, `deskripsi_produk`) VALUES
(1, 2, 1, 'Hijab Segi Empat', 90000, 'download_(1).jpg', 'Pashmina dagu TUTUP LEHER (CEK GAMBAR PRODUK)\r\nProduct by SYAMSIAR HIJAB\r\n\r\nJika menginginkan ukuran yg lebih panjang, silahkan cari di katalog produk kami,\r\n\r\nSPESIFIKASI\r\n• Menggunakan full bahan spandek jersey (khusus HIjab) \r\n• ukuran 180 x 60 akan ada pengurangan  ukuran karena dijahit. (FOTO REAL PICTURE)\r\n\r\nBahan: Jersey syamsiar premium\r\n1. Memiliki Berbagai Macam Varian Warna (50 Varian warna yang akan di tambah)\r\n2. Mampu Menyerap Keringat dengan Baik (Tidak Panas)\r\n3. Bahannya Cepat Kering\r\n4. Sifat Kainnya Tidak Mudah Kusut\r\n5. Bahannya Awet\r\n6. Bahannya Melar, Fleksibel, dan Jatuh\r\n7. Memiliki Harga Terjangkau\r\n\r\n??????? ?????:\r\nPemilihan warna cek di variasi panduan warna,\r\nNama warna setiap seller beda2 jadi acuannya di sesuaikan dengan variasi warna yang kami miliki..\r\n\r\nPanduan warna kami sudah di sesuaikan dengan warna hijab yang kami jual, kami sadar di setiap smartphone custemer pasti berbeda2 karena kontraks cahaya, pengaturan HD layar atau Pengaktifan perisai mata akan mempengaruhi warna di smartphone kk, jadi panduan kami buat hanya sebagai gambaran kk...\r\n\r\nWarna produk di masing2 variasi cek ya kak, insya Allah tingkat keakuratan 99.99%\r\n\r\nkenapa harus memilih SYAMSIAR HIJAB ? karena SYAMSIAR HIJAB lebih peduli terhadap kepuasan,kebanggaan & kenyamanan saat menggunakan produk kami.\r\n\r\nkami berharap custumer SYAMSIAR\r\n● puas karena kualitas produk.\r\n● nyaman karna produk SYAMSIAR produk tidak mudah koyak, memberikan kesan simple & elegant , bahan yang digunakan pada produk sudah bahan premium.\r\n● SYAMSIAR memiliki material exclusive sehingga tidak sama dengan produk yang ada dipasaran & memiliki nilai tambahan akan itu\r\n● SYAMSIAR menawarkan nilai produk yang berkualitas tinggi dengan harga yang terjangkau banyak khalayak\r\n\r\nNOTE: JANGAN KONFIRMASI PESANAN DI TERIMA, CHAT DAHULU BILA ADA KESALAHAN / KETIDAK SESUAIAN / APAPUN ITU SILAHKAN HUBUNGI KAMI VIA CHAT TERLEBIH DAHULU YA SISTER KARNA KAMI AKAN BERTANGGUNG JAWAB 100% (SERTAKAN VIDIO UNBOXING)'),
(2, 2, 1, 'Mukena Dewasa ', 200000, 'download.jpg', 'Mukena Dewasa 2 in 1 Sutra Velvet Premium Lembut Dan Mewah Terbaru\r\nModelnya Yang Terlihat Simple Dan Mewah Ini memiliki 2 look yang Sangat Elegan Cocok Untuk Dibawa Traveling. Motif Renda  Renda ZIPPER Import Gracella (RENDA KIRIM RANDOM)\r\nㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ\r\nㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ \r\nDETAIL BAHAN DAN KUALITAS PRODUK\r\n• warna terlihat mewah mengkilap\r\n• Bahan Sutra Velvet Silk : Tebal, Lembut, Jatuh, Tidak Mudah Kusut\r\n• Jahitan Terjamin Rapih\r\n• Renda bagian atas sekeliling mukena berukuran 6cm menggunakan Renda jiper \r\n\r\nDETAIL PRODUK\r\n• Satu set mukena : Atasan , Bawahan + Tas\r\n• Wajah Tanpa Karet sehingga terlihat elegan\r\n• Ikat kepala memakai tali sehingga bisa di sesuai kan\r\n• untuk atasan dengan pinggiran Renda ZIPPER Import Gracella (RENDA KIRIM RANDOM)\r\n• Untuk Rok Polos\r\n\r\nDETAIL UKURAN\r\n• size jumbo\r\n• panjang atasan depan 125 cm\r\n• panjang atasan belakang 135 cm\r\n• panjang Rok 120 cm\r\n• lebar bawahan 75 cm\r\n• Ukuran Tas Panjang 20 cm Lebar 25cm\r\n\r\nKemiripan warna 90% ya, karena tiap layar HP/PC mempunyai karakteristik yang berbeda. Selain itu, efek pencahayaan saat photoshoot bisa saja mempengaruhi tampilan warna pada hasil foto\r\n\r\nPENGIRIMAN\r\nTransfer sebelum pukul 17.00 barang dikirim dihari yang sama paling telat 1-2 hari selatah pemasan \r\nHARI MINGGU PENGIRIMAN Tetap ada'),
(3, 2, 4, 'meng', 500000, 'apa-dek.jpg', 'meong meong meong');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_member_beli` int(11) NOT NULL,
  `id_member_jual` int(11) NOT NULL,
  `tanggal_transaksi` datetime NOT NULL DEFAULT current_timestamp(),
  `belanja_transaksi` int(11) NOT NULL,
  `status_transaksi` enum('pesan','lunas','batal','dikirim','selesai') NOT NULL DEFAULT 'pesan',
  `ongkir_transaksi` int(11) NOT NULL,
  `total_transaksi` int(11) NOT NULL,
  `bayar_transaksi` int(11) NOT NULL,
  `distrik_pengirim` varchar(255) NOT NULL,
  `nama_pengirim` varchar(100) NOT NULL,
  `wa_pengirim` varchar(50) NOT NULL,
  `alamat_pengirim` text NOT NULL,
  `distrik_penerima` varchar(255) NOT NULL,
  `nama_penerima` varchar(100) NOT NULL,
  `wa_penerima` varchar(50) NOT NULL,
  `alamat_penerima` text NOT NULL,
  `nama_ekspedisi` varchar(100) NOT NULL,
  `layanan_ekspedisi` varchar(100) NOT NULL,
  `estimasi_ekspedisi` varchar(50) NOT NULL,
  `berat_ekspedisi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_member_beli`, `id_member_jual`, `tanggal_transaksi`, `belanja_transaksi`, `status_transaksi`, `ongkir_transaksi`, `total_transaksi`, `bayar_transaksi`, `distrik_pengirim`, `nama_pengirim`, `wa_pengirim`, `alamat_pengirim`, `distrik_penerima`, `nama_penerima`, `wa_penerima`, `alamat_penerima`, `nama_ekspedisi`, `layanan_ekspedisi`, `estimasi_ekspedisi`, `berat_ekspedisi`) VALUES
(1, 1, 2, '2024-03-09 22:00:00', 90000, 'pesan', 20000, 110000, 110000, 'Cirebon', 'Lanesra', '081336952939', 'Arjawinangun Cirebon', 'Sleman', 'Arif', '08990423789', 'Purwomartani Kalasan Sleman', 'JNE', 'Kilat', '1 Hari', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_detail`
--

CREATE TABLE `transaksi_detail` (
  `id_transaksi_detail` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `nama_beli` varchar(255) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `jumlah_beli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi_detail`
--

INSERT INTO `transaksi_detail` (`id_transaksi_detail`, `id_transaksi`, `id_produk`, `nama_beli`, `harga_beli`, `jumlah_beli`) VALUES
(1, 1, 1, 'Hijab Segi Empat', 90000, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  ADD PRIMARY KEY (`id_transaksi_detail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  MODIFY `id_transaksi_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

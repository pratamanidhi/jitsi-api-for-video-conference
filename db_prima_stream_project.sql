-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Des 2018 pada 16.07
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_prima_stream_project`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_prima_stream_admin`
--

CREATE TABLE `tb_prima_stream_admin` (
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_prima_stream_admin`
--

INSERT INTO `tb_prima_stream_admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_prima_stream_client`
--

CREATE TABLE `tb_prima_stream_client` (
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nama_instansi` varchar(200) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `no_telp` int(15) NOT NULL,
  `room` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_prima_stream_client`
--

INSERT INTO `tb_prima_stream_client` (`username`, `password`, `nama_instansi`, `alamat`, `no_telp`, `room`) VALUES
('nidhi', 'ddb00f8cc0a685f29f3ffe3e1499e96c', 'UKSW', 'salatiga', 2147483647, 'uksw');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

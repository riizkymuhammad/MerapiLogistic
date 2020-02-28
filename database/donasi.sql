-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 24. Nopember 2017 jam 19:00
-- Versi Server: 5.1.41
-- Versi PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `donasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alamat`
--

CREATE TABLE IF NOT EXISTS `alamat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `alamat` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `alamat`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `carousel`
--

CREATE TABLE IF NOT EXISTS `carousel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(155) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `carousel`
--

INSERT INTO `carousel` (`id`, `judul`, `keterangan`, `gambar`) VALUES
(1, 'Waktunya Menuju Perubahan', 'Perubahan Harus Lebih Baik Dari Senelumnya', '1.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `donasi`
--

CREATE TABLE IF NOT EXISTS `donasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `namabarang` varchar(100) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `doa` text NOT NULL,
  `gambar` varchar(150) NOT NULL,
  `jasapengirim` varchar(150) NOT NULL,
  `noresi` varchar(25) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `donasi`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `logadmin`
--

CREATE TABLE IF NOT EXISTS `logadmin` (
  `idlog` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gambar` varchar(155) NOT NULL,
  PRIMARY KEY (`idlog`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `logadmin`
--

INSERT INTO `logadmin` (`idlog`, `nama`, `email`, `username`, `password`, `gambar`) VALUES
(1, 'Agus Pramono', 'agus.pramono3545@gmail.com', 'agus35', 'd90f589c12540210b6bee57c127ec9e4', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayatlog`
--

CREATE TABLE IF NOT EXISTS `riwayatlog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `riwayatlog`
--

INSERT INTO `riwayatlog` (`id`, `username`, `tanggal`) VALUES
(1, 'agus35', '2017-11-24'),
(2, 'agus35', '2017-11-24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(150) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(150) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `gambar` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `alamat`, `no_hp`, `email`, `username`, `password`, `gambar`) VALUES
(1, 'Agus Pramono', '', '', 'agus.pramono3545@gmail.com', 'agus3545', 'd90f589c12540210b6bee57c127ec9e4', 'user.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 12 Haz 2024, 13:14:13
-- Sunucu sürümü: 5.7.9
-- PHP Sürümü: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `finaldb`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

DROP TABLE IF EXISTS `uyeler`;
CREATE TABLE IF NOT EXISTS `uyeler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad` varchar(50) NOT NULL,
  `soyad` varchar(50) NOT NULL,
  `eposta` varchar(100) NOT NULL,
  `sifre` varchar(20) NOT NULL,
  `dtarih` date NOT NULL,
  `cinsiyet` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`id`, `ad`, `soyad`, `eposta`, `sifre`, `dtarih`, `cinsiyet`) VALUES
(1, 'Sadık', 'Yücel', 'sadik58@outlook.com.tr', '12345', '2005-09-19', 'Erkek'),
(2, 'Osman', 'Tunar', 'tunarosman@gmail.com', 'babayim', '2005-01-01', 'Erkek'),
(3, 'Emre', 'Demirkol', 'emredemirkol@gmail.com', 'beypazarı', '2004-02-02', 'Erkek'),
(4, 'Fatih', 'Çolak', 'colakfatih@gmail.com', 'olukludag', '2004-03-03', 'Erkek'),
(5, 'Uğur', 'Çakır', 'cakirugur@gmail.com', 'markopasa06', '2004-04-04', 'Erkek'),
(6, 'Berat', 'Can', 'beratcan@gmail.com', 'nebileyim04', '2005-05-05', 'Erkek'),
(7, 'Zafarbek', 'Jumaniyazov', 'zaferjum@gmail.com', 'istanbul', '2004-06-06', 'Erkek'),
(8, 'Emirhan', 'Duman', 'dumanemirhan@gmail.com', '01230456', '2005-06-05', 'Erkek'),
(9, 'Hayat', 'Kaya', 'hkaya@gmail.com', 'touchblue', '2004-01-01', 'Kadın'),
(10, 'Leyla', 'Türkmen', 'turkmenleyla@gmail.com', 'redlabel3406', '1985-01-01', 'Kadın'),
(11, 'Özlem Irmak', 'Kaya', 'ozlemik06@gmail.com', 'lokum', '2001-03-03', 'Kadın'),
(12, 'Sude', 'Çakmak', 'cakmaksude@gmail.com', 'aynenknk', '2005-06-16', 'Kadın'),
(13, 'Yağmur', 'Kayaalp', 'yagmurkalp@gmail.com', 'cikolata', '2005-10-12', 'Kadın'),
(14, 'Gamze', 'Nur', 'gnurrr1@gmail.com', 'babybaby', '1998-01-01', 'Kadın'),
(15, 'Şevval', 'Zorlu', 'zsevval@gmail.com', 'aksaray', '2005-01-01', 'Kadın');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

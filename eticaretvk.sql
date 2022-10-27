-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 07, 2021 at 05:17 AM
-- Server version: 5.7.17-log
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eticaretvk`
--

-- --------------------------------------------------------

--
-- Table structure for table `adresler`
--

CREATE TABLE `adresler` (
  `id` int(10) UNSIGNED NOT NULL,
  `UyeId` int(10) UNSIGNED NOT NULL,
  `AdiSoyadi` varchar(100) NOT NULL,
  `Adres` varchar(255) NOT NULL,
  `Ilce` varchar(100) NOT NULL,
  `Sehir` varchar(100) NOT NULL,
  `TelefonNumarasi` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ayarlar`
--

CREATE TABLE `ayarlar` (
  `id` tinyint(1) UNSIGNED NOT NULL,
  `SiteAdi` varchar(50) NOT NULL,
  `SiteTitle` varchar(60) NOT NULL,
  `SiteDescription` varchar(150) NOT NULL,
  `SiteKeywords` varchar(255) NOT NULL,
  `SiteCopyrightMetni` varchar(255) NOT NULL,
  `SiteLogosu` varchar(30) NOT NULL,
  `SiteLinki` varchar(255) NOT NULL,
  `SiteEmailAdresi` varchar(50) NOT NULL,
  `SiteEmailSifresi` varchar(50) NOT NULL,
  `SiteEmailHostAdresi` varchar(255) NOT NULL,
  `SosyalLinkFacebook` varchar(255) NOT NULL,
  `SosyalLinkTwitter` varchar(255) NOT NULL,
  `SosyalLinkLinkedin` varchar(255) NOT NULL,
  `SosyalLinkInstagram` varchar(255) NOT NULL,
  `SosyalLinkPinterest` varchar(255) NOT NULL,
  `SosyalLinkYouTube` varchar(255) NOT NULL,
  `DolarKuru` double UNSIGNED NOT NULL,
  `EuroKuru` double UNSIGNED NOT NULL,
  `UcretsizKargoBaraji` double UNSIGNED NOT NULL,
  `ClientID` varchar(100) NOT NULL,
  `StoreKey` varchar(100) NOT NULL,
  `ApiKullanicisi` varchar(100) NOT NULL,
  `ApiSifresi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ayarlar`
--

INSERT INTO `ayarlar` (`id`, `SiteAdi`, `SiteTitle`, `SiteDescription`, `SiteKeywords`, `SiteCopyrightMetni`, `SiteLogosu`, `SiteLinki`, `SiteEmailAdresi`, `SiteEmailSifresi`, `SiteEmailHostAdresi`, `SosyalLinkFacebook`, `SosyalLinkTwitter`, `SosyalLinkLinkedin`, `SosyalLinkInstagram`, `SosyalLinkPinterest`, `SosyalLinkYouTube`, `DolarKuru`, `EuroKuru`, `UcretsizKargoBaraji`, `ClientID`, `StoreKey`, `ApiKullanicisi`, `ApiSifresi`) VALUES
(1, 'EticaretVK', 'Shoe shopping', 'nothing', 'nothing', '2020 Nasir Mustafayev', 'Logo.png', 'http://localhost/eticaretvk', 'nasir.mustafayev@protonmail.com', '06-06-99Tarixinde!', 'protonmail.com', 'https://www.facebook.com', 'https://www.twitter.com', 'https://www.linkedin.com', 'https://www.instagram.com', 'https://www.pinterest.com', 'https://www.youtube.com', 5.28, 6.12, 250, '00000000', '11111111', '3DKullanicim', '3DSifrem');

-- --------------------------------------------------------

--
-- Table structure for table `bankahesaplarimiz`
--

CREATE TABLE `bankahesaplarimiz` (
  `id` int(10) UNSIGNED NOT NULL,
  `BankaLogosu` varchar(30) NOT NULL,
  `BankaAdi` varchar(100) NOT NULL,
  `KonumSehir` varchar(100) NOT NULL,
  `KonumUlke` varchar(100) NOT NULL,
  `SubeAdi` varchar(100) NOT NULL,
  `SubeKodu` varchar(100) NOT NULL,
  `ParaBirimi` varchar(100) NOT NULL,
  `HesapSahibi` varchar(255) NOT NULL,
  `HesapNumarasi` varchar(100) NOT NULL,
  `IbanNumarasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bannerlar`
--

CREATE TABLE `bannerlar` (
  `id` int(10) UNSIGNED NOT NULL,
  `BannerAlani` varchar(100) NOT NULL,
  `BannerAdi` varchar(100) NOT NULL,
  `BannerResmi` varchar(30) NOT NULL,
  `GosterimSayisi` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `favoriler`
--

CREATE TABLE `favoriler` (
  `id` int(10) UNSIGNED NOT NULL,
  `UrunId` int(10) UNSIGNED NOT NULL,
  `UyeId` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `havalebildirimleri`
--

CREATE TABLE `havalebildirimleri` (
  `id` int(10) UNSIGNED NOT NULL,
  `BankaId` int(10) UNSIGNED NOT NULL,
  `AdiSoyadi` varchar(100) NOT NULL,
  `EmailAdresi` varchar(255) NOT NULL,
  `TelefonNumarasi` varchar(11) NOT NULL,
  `Aciklama` text NOT NULL,
  `IslemTarihi` int(10) UNSIGNED NOT NULL,
  `Durum` tinyint(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `kargofirmalari`
--

CREATE TABLE `kargofirmalari` (
  `id` int(10) UNSIGNED NOT NULL,
  `KargoFirmasiLogosu` varchar(30) NOT NULL,
  `KargoFirmasiAdi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `menuler`
--

CREATE TABLE `menuler` (
  `id` int(10) UNSIGNED NOT NULL,
  `UrunTuru` varchar(100) NOT NULL,
  `MenuAdi` varchar(50) NOT NULL,
  `UrunSayisi` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sepet`
--

CREATE TABLE `sepet` (
  `id` int(10) UNSIGNED NOT NULL,
  `SepetNumarasi` int(10) UNSIGNED NOT NULL,
  `UyeId` int(10) UNSIGNED NOT NULL,
  `UrunId` int(10) UNSIGNED NOT NULL,
  `AdresId` int(10) UNSIGNED NOT NULL,
  `VaryantId` int(10) UNSIGNED NOT NULL,
  `KargoId` tinyint(2) NOT NULL,
  `UrunAdedi` tinyint(3) UNSIGNED NOT NULL,
  `OdemeSecimi` varchar(50) NOT NULL,
  `TaksitSecimi` tinyint(2) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `siparisler`
--

CREATE TABLE `siparisler` (
  `id` int(10) UNSIGNED NOT NULL,
  `UyeId` int(10) UNSIGNED NOT NULL,
  `SiparisNumarasi` int(10) UNSIGNED NOT NULL,
  `UrunId` int(10) UNSIGNED NOT NULL,
  `UrunTuru` varchar(50) NOT NULL,
  `UrunAdi` varchar(255) NOT NULL,
  `UrunFiyati` double UNSIGNED NOT NULL,
  `KdvOrani` int(2) UNSIGNED NOT NULL,
  `UrunAdedi` int(3) UNSIGNED NOT NULL,
  `ToplamUrunFiyati` double UNSIGNED NOT NULL,
  `KargoFirmasiSecimi` varchar(100) NOT NULL,
  `KargoUcreti` double UNSIGNED NOT NULL,
  `UrunResmiBir` varchar(30) NOT NULL,
  `VaryantBasligi` varchar(100) NOT NULL,
  `VaryantSecimi` varchar(100) NOT NULL,
  `AdresAdiSoyadi` varchar(100) NOT NULL,
  `AdresDetay` varchar(255) NOT NULL,
  `AdresTelefon` varchar(11) NOT NULL,
  `OdemeSecimi` varchar(25) NOT NULL,
  `TaksitSecimi` int(2) UNSIGNED NOT NULL,
  `SiparisTarihi` int(10) NOT NULL,
  `SiparisIpAdresi` varchar(20) NOT NULL,
  `OnayDurumu` tinyint(1) UNSIGNED NOT NULL,
  `KargoDurumu` tinyint(1) UNSIGNED NOT NULL,
  `KargoGonderiKodu` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sorular`
--

CREATE TABLE `sorular` (
  `id` int(10) UNSIGNED NOT NULL,
  `soru` varchar(255) NOT NULL,
  `cevap` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sozlesmelervemetinler`
--

CREATE TABLE `sozlesmelervemetinler` (
  `id` tinyint(1) UNSIGNED NOT NULL,
  `HakkimizdaMetni` text NOT NULL,
  `UyelikSozlesmesiMetni` text NOT NULL,
  `KullanimKosullariMetni` text NOT NULL,
  `GizlilikSozlesmesiMetni` text NOT NULL,
  `MesafeliSatisSozlesmesiMetni` text NOT NULL,
  `TeslimatMetni` text NOT NULL,
  `IptalIadeDegisimMetni` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sozlesmelervemetinler`
--

INSERT INTO `sozlesmelervemetinler` (`id`, `HakkimizdaMetni`, `UyelikSozlesmesiMetni`, `KullanimKosullariMetni`, `GizlilikSozlesmesiMetni`, `MesafeliSatisSozlesmesiMetni`, `TeslimatMetni`, `IptalIadeDegisimMetni`) VALUES
(1, 'Burası Hakkımızda Metnidir.', 'Burası Üyelik Sözleşmesi Metnidir.', 'Burası Kullanım Koşulları Metnidir.', 'Burası Gizlilik Sözleşmesi Metnidir.', 'Burası Mesafeli Satış Sözleşmesi Metnidir', 'Burası Teslimat Metnidir.', 'Burası İptal İade Değişim Metnidir.');

-- --------------------------------------------------------

--
-- Table structure for table `urunler`
--

CREATE TABLE `urunler` (
  `id` int(10) UNSIGNED NOT NULL,
  `MenuId` int(10) UNSIGNED NOT NULL,
  `UrunTuru` varchar(100) NOT NULL,
  `UrunAdi` varchar(255) NOT NULL,
  `UrunFiyati` double UNSIGNED NOT NULL,
  `ParaBirimi` char(3) NOT NULL,
  `KdvOrani` int(2) UNSIGNED NOT NULL,
  `UrunAciklamasi` text NOT NULL,
  `UrunResmiBir` varchar(30) NOT NULL,
  `UrunResmiIki` varchar(30) NOT NULL,
  `UrunResmiUc` varchar(30) NOT NULL,
  `UrunResmiDort` varchar(30) NOT NULL,
  `VaryantBasligi` varchar(100) NOT NULL,
  `KargoUcreti` double UNSIGNED NOT NULL,
  `Durumu` tinyint(1) UNSIGNED NOT NULL,
  `ToplamSatisSayisi` int(10) UNSIGNED NOT NULL,
  `YorumSayisi` tinyint(1) UNSIGNED NOT NULL,
  `ToplamYorumPuani` int(10) UNSIGNED NOT NULL,
  `GoruntulenmeSayisi` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `urunvaryantlari`
--

CREATE TABLE `urunvaryantlari` (
  `id` int(10) UNSIGNED NOT NULL,
  `UrunId` int(10) UNSIGNED NOT NULL,
  `VaryantAdi` varchar(100) NOT NULL,
  `StokAdedi` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `uyeler`
--

CREATE TABLE `uyeler` (
  `id` int(10) UNSIGNED NOT NULL,
  `EmailAdresi` varchar(255) NOT NULL,
  `Sifre` varchar(100) NOT NULL,
  `IsimSoyisim` varchar(100) NOT NULL,
  `TelefonNumarasi` varchar(11) NOT NULL,
  `Cinsiyet` varchar(5) NOT NULL,
  `Durumu` tinyint(1) NOT NULL,
  `SilinmeDurumu` tinyint(1) UNSIGNED NOT NULL,
  `KayitTarihi` int(10) NOT NULL,
  `KayitIpAdresi` varchar(20) NOT NULL,
  `AktivasyonKodu` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `uyeler`
--

INSERT INTO `uyeler` (`id`, `EmailAdresi`, `Sifre`, `IsimSoyisim`, `TelefonNumarasi`, `Cinsiyet`, `Durumu`, `SilinmeDurumu`, `KayitTarihi`, `KayitIpAdresi`, `AktivasyonKodu`) VALUES
(1, 'user@localhost', '25d55ad283aa400af464c76d713c07ad', 'user user', '0500000000', 'Erkek', 0, 0, 1630500064, '::1', '34928-56145-19858-46426');

-- --------------------------------------------------------

--
-- Table structure for table `yoneticiler`
--

CREATE TABLE `yoneticiler` (
  `id` int(10) UNSIGNED NOT NULL,
  `KullaniciAdi` varchar(100) NOT NULL,
  `Sifre` varchar(100) NOT NULL,
  `IsimSoyisim` varchar(100) NOT NULL,
  `EmailAdresi` varchar(255) NOT NULL,
  `TelefonNumarasi` varchar(11) NOT NULL,
  `SilinemeyecekYoneticiDurumu` tinyint(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `yoneticiler`
--

INSERT INTO `yoneticiler` (`id`, `KullaniciAdi`, `Sifre`, `IsimSoyisim`, `EmailAdresi`, `TelefonNumarasi`, `SilinemeyecekYoneticiDurumu`) VALUES
(1, 'admin', '25d55ad283aa400af464c76d713c07ad', 'Admin', 'admin@localhost', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `yorumlar`
--

CREATE TABLE `yorumlar` (
  `id` int(10) UNSIGNED NOT NULL,
  `UrunId` int(10) UNSIGNED NOT NULL,
  `UyeId` int(10) UNSIGNED NOT NULL,
  `Puan` tinyint(1) UNSIGNED NOT NULL,
  `YorumMetni` text NOT NULL,
  `YorumTarihi` int(10) NOT NULL,
  `YorumIpAdresi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `yorumlar`
--

INSERT INTO `yorumlar` (`id`, `UrunId`, `UyeId`, `Puan`, `YorumMetni`, `YorumTarihi`, `YorumIpAdresi`) VALUES
(2, 3, 1, 4, 'Mükemmel ama kenarında açık var Mükemmel ama kenarında açık var Mükemmel ama kenarında açık var Mükemmel ama kenarında açık var Mükemmel ama kenarında açık var Mükemmel ama kenarında açık var Mükemmel ama kenarında açık var Mükemmel ama kenarında açık var Mükemmel ama kenarında açık var Mükemmel ama kenarında açık var', 1546102495, '::1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adresler`
--
ALTER TABLE `adresler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bankahesaplarimiz`
--
ALTER TABLE `bankahesaplarimiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bannerlar`
--
ALTER TABLE `bannerlar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favoriler`
--
ALTER TABLE `favoriler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `havalebildirimleri`
--
ALTER TABLE `havalebildirimleri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kargofirmalari`
--
ALTER TABLE `kargofirmalari`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menuler`
--
ALTER TABLE `menuler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sepet`
--
ALTER TABLE `sepet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siparisler`
--
ALTER TABLE `siparisler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sorular`
--
ALTER TABLE `sorular`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sozlesmelervemetinler`
--
ALTER TABLE `sozlesmelervemetinler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `urunvaryantlari`
--
ALTER TABLE `urunvaryantlari`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uyeler`
--
ALTER TABLE `uyeler`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `EmailAdresi` (`EmailAdresi`);

--
-- Indexes for table `yoneticiler`
--
ALTER TABLE `yoneticiler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adresler`
--
ALTER TABLE `adresler`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ayarlar`
--
ALTER TABLE `ayarlar`
  MODIFY `id` tinyint(1) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bankahesaplarimiz`
--
ALTER TABLE `bankahesaplarimiz`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bannerlar`
--
ALTER TABLE `bannerlar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `favoriler`
--
ALTER TABLE `favoriler`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `havalebildirimleri`
--
ALTER TABLE `havalebildirimleri`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kargofirmalari`
--
ALTER TABLE `kargofirmalari`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `menuler`
--
ALTER TABLE `menuler`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sepet`
--
ALTER TABLE `sepet`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `siparisler`
--
ALTER TABLE `siparisler`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sorular`
--
ALTER TABLE `sorular`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sozlesmelervemetinler`
--
ALTER TABLE `sozlesmelervemetinler`
  MODIFY `id` tinyint(1) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `urunler`
--
ALTER TABLE `urunler`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `urunvaryantlari`
--
ALTER TABLE `urunvaryantlari`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `uyeler`
--
ALTER TABLE `uyeler`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `yoneticiler`
--
ALTER TABLE `yoneticiler`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

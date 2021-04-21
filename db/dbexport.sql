-- MariaDB dump 10.18  Distrib 10.4.17-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: bappeda_ropk
-- ------------------------------------------------------
-- Server version	10.4.17-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `table_user`
--

DROP TABLE IF EXISTS `table_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `table_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(8) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `id_unit` int(10) NOT NULL,
  PRIMARY KEY (`id_user`),
  KEY `id_unit` (`id_unit`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `table_user`
--

LOCK TABLES `table_user` WRITE;
/*!40000 ALTER TABLE `table_user` DISABLE KEYS */;
INSERT INTO `table_user` VALUES (1,'test_bappeda','ropk','bappeda kota madiun',1),(3,'perkim','perkim','Dinas Perumahan dan Kawasan Permukiman',453);
/*!40000 ALTER TABLE `table_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_bidang`
--

DROP TABLE IF EXISTS `tb_bidang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_bidang` (
  `id_bidang` int(11) NOT NULL AUTO_INCREMENT,
  `kode_urusan` varchar(20) NOT NULL,
  `kode_bidang` varchar(20) NOT NULL,
  `nama_bidang` varchar(100) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  PRIMARY KEY (`id_bidang`),
  KEY `fk_urusan` (`kode_urusan`),
  CONSTRAINT `tb_bidang_ibfk_1` FOREIGN KEY (`kode_urusan`) REFERENCES `tb_urusan` (`kode_urusan`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_bidang`
--

LOCK TABLES `tb_bidang` WRITE;
/*!40000 ALTER TABLE `tb_bidang` DISABLE KEYS */;
INSERT INTO `tb_bidang` VALUES (1,'1','1.01','Bidang Pendidikan','Pendidikan'),(2,'1','1.02','Bidang Kesehatan','Kesehatan'),(3,'1','1.03','Bidang Pekerjaan Umum dan Penataan Ruang','PUPR'),(4,'1','1.04','Bidang Perumahan dan Kawasan Permukiman','PERKIM');
/*!40000 ALTER TABLE `tb_bidang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_bulan`
--

DROP TABLE IF EXISTS `tb_bulan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_bulan` (
  `id_bulan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_bulan` varchar(12) NOT NULL,
  PRIMARY KEY (`id_bulan`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_bulan`
--

LOCK TABLES `tb_bulan` WRITE;
/*!40000 ALTER TABLE `tb_bulan` DISABLE KEYS */;
INSERT INTO `tb_bulan` VALUES (1,'Januari'),(2,'Februari'),(3,'Maret'),(4,'April'),(5,'Mei'),(6,'Juni'),(7,'Juli'),(8,'Agustus'),(9,'September'),(10,'Oktober'),(11,'November'),(12,'Desember');
/*!40000 ALTER TABLE `tb_bulan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_kegiatan`
--

DROP TABLE IF EXISTS `tb_kegiatan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_kegiatan` (
  `id_kegiatan` int(20) NOT NULL AUTO_INCREMENT,
  `kode_kegiatan` varchar(20) NOT NULL,
  `nama_kegiatan` varchar(400) NOT NULL,
  `keterangan` varchar(20) NOT NULL,
  `kode_program` varchar(10) NOT NULL,
  PRIMARY KEY (`id_kegiatan`),
  KEY `fk_program` (`kode_program`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_kegiatan`
--

LOCK TABLES `tb_kegiatan` WRITE;
/*!40000 ALTER TABLE `tb_kegiatan` DISABLE KEYS */;
INSERT INTO `tb_kegiatan` VALUES (2,'1.04.02.2.01','Pendataan Penyediaan dan Rehabilitasi Rumah Korban Bencana atau Relokasi Program Kabupaten/Kota','tes','1.04.02'),(3,'1.04.02.2.02','Sosialisasi dan Persiapan Penyediaan dan Rehabilitasi Rumah Korban Bencana atau Relokasi Program Kabupaten/Kota','tes','1.04.02'),(4,'1.04.02.2.03','Pembangunan dan Rehabilitasi Rumah Korban Bencana atau Relokasi Program Kabupaten/Kota','tes','1.04.02'),(5,'1.04.02.2.04','Pendistribusian dan Serah Terima Rumah bagi Korban Bencana atau Relokasi Program Kabupaten/Kota','','1.04.02'),(6,'1.04.02.2.05','Pembinaan Pengelolaan Rumah Susun Umum dan/atau Rumah Khusus','','1.04.02'),(7,'1.04.02.2.06','Penerbitan Izin Pembangunan dan Pengembangan Perumahan','','1.04.02'),(8,'1.04.02.2.07','Penerbitan Sertifikat Kepemilikan Bangunan Gedung (SKGB)','','1.04.02');
/*!40000 ALTER TABLE `tb_kegiatan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_perencanaan`
--

DROP TABLE IF EXISTS `tb_perencanaan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_perencanaan` (
  `kode_perencanaan` varchar(11) NOT NULL,
  `nama_aktifitas` varchar(100) NOT NULL,
  `total_kalkulasi` decimal(5,0) NOT NULL,
  `jan_w1` decimal(5,0) NOT NULL,
  `jan_w2` decimal(5,0) NOT NULL,
  `jan_w3` decimal(5,0) NOT NULL,
  `jan_w4` decimal(5,0) NOT NULL,
  `feb_w1` decimal(5,0) NOT NULL,
  `feb_w2` decimal(5,0) NOT NULL,
  `feb_w3` decimal(5,0) NOT NULL,
  `feb_w4` decimal(5,0) NOT NULL,
  `mar_w1` decimal(5,0) NOT NULL,
  `mar_w2` decimal(5,0) NOT NULL,
  `mar_w3` decimal(5,0) NOT NULL,
  `mar_w4` decimal(5,0) NOT NULL,
  `apr_w1` decimal(5,0) NOT NULL,
  `apr_w2` decimal(5,0) NOT NULL,
  `apr_w3` decimal(5,0) NOT NULL,
  `apr_w4` decimal(5,0) NOT NULL,
  `mei_w1` decimal(5,0) NOT NULL,
  `mei_w2` decimal(5,0) NOT NULL,
  `mei_w3` decimal(5,0) NOT NULL,
  `mei_w4` decimal(5,0) NOT NULL,
  `jun_w1` decimal(5,0) NOT NULL,
  `jun_w2` decimal(5,0) NOT NULL,
  `jun_w3` decimal(5,0) NOT NULL,
  `jun_w4` decimal(5,0) NOT NULL,
  `jul_w1` decimal(5,0) NOT NULL,
  `jul_w2` decimal(5,0) NOT NULL,
  `jul_w3` decimal(5,0) NOT NULL,
  `jul_w4` decimal(5,0) NOT NULL,
  `agt_w1` decimal(5,0) NOT NULL,
  `agt_w2` decimal(5,0) NOT NULL,
  `agt_w3` decimal(5,0) NOT NULL,
  `agt_w4` decimal(5,0) NOT NULL,
  `sep_w1` decimal(5,0) NOT NULL,
  `sep_w2` decimal(5,0) NOT NULL,
  `sep_w3` decimal(5,0) NOT NULL,
  `sep_w4` decimal(5,0) NOT NULL,
  `okt_w1` decimal(5,0) NOT NULL,
  `okt_w2` decimal(5,0) NOT NULL,
  `okt_w3` decimal(5,0) NOT NULL,
  `okt_w4` decimal(5,0) NOT NULL,
  `nov_w1` decimal(5,0) NOT NULL,
  `nov_w2` decimal(5,0) NOT NULL,
  `nov_w3` decimal(5,0) NOT NULL,
  `nov_w4` decimal(5,0) NOT NULL,
  `des_w1` decimal(5,0) NOT NULL,
  `des_w2` decimal(5,0) NOT NULL,
  `des_w3` decimal(5,0) NOT NULL,
  `des_w4` decimal(5,0) NOT NULL,
  PRIMARY KEY (`kode_perencanaan`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_perencanaan`
--

LOCK TABLES `tb_perencanaan` WRITE;
/*!40000 ALTER TABLE `tb_perencanaan` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_perencanaan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_program`
--

DROP TABLE IF EXISTS `tb_program`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_program` (
  `id_program` int(11) NOT NULL AUTO_INCREMENT,
  `kode_program` varchar(10) NOT NULL,
  `nama_program` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `sasaran` varchar(200) NOT NULL,
  `kode_bidang` varchar(20) NOT NULL,
  PRIMARY KEY (`id_program`),
  KEY `fk_bidang` (`kode_bidang`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_program`
--

LOCK TABLES `tb_program` WRITE;
/*!40000 ALTER TABLE `tb_program` DISABLE KEYS */;
INSERT INTO `tb_program` VALUES (1,'1.04.02','PROGRAM PENGEMBANGAN PERUMAHAN','test perkim1','','1.04'),(2,'1.04.03','PROGRAM KAWASAN PERMUKIMAN','test perkim2','','1.04'),(3,'1.04.04','PROGRAM PERUMAHAN DAN KAWASAN PERMUKIMAN KUMUH','test perkim3','','1.04'),(4,'1.04.05','PROGRAM PENINGKATAN PRASARANA, SARANA DAN UTILITAS UMUM (PSU)','test perkim4','','1.04'),(5,'1.04.06','PROGRAM PENINGKATAN PELAYANAN SERTIFIKASI, KUALIFIKASI, KLASIFIKASI, DAN REGISTRASI BIDANG PERUMAHAN','test perkim 5','','1.04');
/*!40000 ALTER TABLE `tb_program` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_sub_kegiatan`
--

DROP TABLE IF EXISTS `tb_sub_kegiatan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_sub_kegiatan` (
  `id_sub_kegiatan` int(20) NOT NULL AUTO_INCREMENT,
  `kode_sub_kegiatan` varchar(30) NOT NULL,
  `nama_sub_kegiatan` varchar(400) NOT NULL,
  `keterangan` varchar(400) NOT NULL,
  `kode_kegiatan` varchar(20) NOT NULL,
  PRIMARY KEY (`id_sub_kegiatan`),
  KEY `fk_kegiatan` (`kode_kegiatan`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_sub_kegiatan`
--

LOCK TABLES `tb_sub_kegiatan` WRITE;
/*!40000 ALTER TABLE `tb_sub_kegiatan` DISABLE KEYS */;
INSERT INTO `tb_sub_kegiatan` VALUES (2,'1.04.02.2.01.01','Identifikasi Perumahan di Lokasi Rawan Bencana atau Terkena Relokasi Program Kabupaten/Kota','tes','1.04.02.2.01'),(3,'1.04.02.2.01.02','Identifikasi Lahan-Lahan Potensial sebagai Lokasi Relokasi Perumahan','tes1','1.04.02.2.01'),(4,'1.04.02.2.01.03','Pengumpulan Data Rumah Korban Bencana Kejadian Sebelumnya yang Belum Tertangani','tes','1.04.02.2.01');
/*!40000 ALTER TABLE `tb_sub_kegiatan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_sub_unit`
--

DROP TABLE IF EXISTS `tb_sub_unit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_sub_unit` (
  `id_sub_unit` int(11) NOT NULL AUTO_INCREMENT,
  `kode_unit` varchar(10) NOT NULL,
  `kode_sub_unit` varchar(20) NOT NULL,
  `nama_sub_unit` varchar(100) NOT NULL,
  `nama_ketua` varchar(100) NOT NULL,
  `nip_ketua` varchar(100) NOT NULL,
  `jabatan_ketua` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  PRIMARY KEY (`id_sub_unit`),
  KEY `fk_unit` (`kode_unit`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_sub_unit`
--

LOCK TABLES `tb_sub_unit` WRITE;
/*!40000 ALTER TABLE `tb_sub_unit` DISABLE KEYS */;
INSERT INTO `tb_sub_unit` VALUES (1,'1.01.01','1.01.01.01','Dinas Pendidikan','Drs. Heri Wasana','196604221993031007','Kepala Dinas Pendidikan Kota Madiun','Dinas Pendidikan'),(2,'1.02.01','1.02.01.01','Dinas Kesehatan dan Keluarga Berencana','dr. Agung Sulistya Wardani, M.MKes','196301061989032007','Kepala Dinas Kesehatan dan Keluarga Berencana Kota Madiun','Dinkes '),(3,'1.02.02','1.02.02.01','Rumah Sakit Umum Daerah','dr. AGUS NURWAHYUDI, Sp.S, M.MKes','196304081989031014','Direktur Rumah Sakit Umum Daerah Kota Madiun','RSUD Madiun'),(4,'1.03.01','1.03.01.01','Dinas Pekerjaan Umum dan Penataan Ruang','Ir. SUWARNO, M.Si','196510161986031010','Kepala Dinas Pekerjaan Umum dan Penataan Ruang Kota Madiun','Dinas PUPR'),(5,'1.04.01','1.04.01.01','Dinas Perumahan dan Kawasan Permukiman','TOTOK SUGIARTO, S.H, M.Si','197009011996031008','Kepala Dinas Perumahan dan Kawasan Permukiman Kota Madiun','Dinas PERKIM');
/*!40000 ALTER TABLE `tb_sub_unit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_tahun_anggaran`
--

DROP TABLE IF EXISTS `tb_tahun_anggaran`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_tahun_anggaran` (
  `id_tahun_anggaran` int(10) NOT NULL AUTO_INCREMENT,
  `nama_tahun_anggaran` varchar(20) NOT NULL,
  `mulai_tahun_anggaran` varchar(10) NOT NULL,
  `akhir_tahun_anggaran` varchar(10) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  PRIMARY KEY (`id_tahun_anggaran`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_tahun_anggaran`
--

LOCK TABLES `tb_tahun_anggaran` WRITE;
/*!40000 ALTER TABLE `tb_tahun_anggaran` DISABLE KEYS */;
INSERT INTO `tb_tahun_anggaran` VALUES (1,'2020-2024','2020','2024','');
/*!40000 ALTER TABLE `tb_tahun_anggaran` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_unit`
--

DROP TABLE IF EXISTS `tb_unit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_unit` (
  `id_unit` int(11) NOT NULL AUTO_INCREMENT,
  `kode_bidang` varchar(20) NOT NULL,
  `kode_unit` varchar(10) NOT NULL,
  `nama_unit` varchar(200) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  PRIMARY KEY (`id_unit`),
  KEY `fk_bidang` (`kode_bidang`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_unit`
--

LOCK TABLES `tb_unit` WRITE;
/*!40000 ALTER TABLE `tb_unit` DISABLE KEYS */;
INSERT INTO `tb_unit` VALUES (1,'1.01','1.01.01','Dinas Pendidikan','Dinas Pendidikan'),(2,'1.02','1.02.01','Dinas Kesehatan dan Keluarga Berencana','Dinkes'),(3,'1.02','1.02.02','Rumah Sakit Umum Daerah','RSUD'),(4,'1.03','1.03.01','Dinas Pekerjaan Umum dan Penataan Ruang','PUPR'),(5,'1.04','1.04.01','Dinas Perumahan dan Kawasan Permukiman','PERKIM');
/*!40000 ALTER TABLE `tb_unit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_urusan`
--

DROP TABLE IF EXISTS `tb_urusan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_urusan` (
  `id_tahun_anggaran` int(11) NOT NULL,
  `kode_urusan` varchar(20) NOT NULL,
  `nama_urusan` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  PRIMARY KEY (`kode_urusan`),
  KEY `fk_th_anggaran` (`id_tahun_anggaran`),
  CONSTRAINT `tb_urusan_ibfk_1` FOREIGN KEY (`id_tahun_anggaran`) REFERENCES `tb_tahun_anggaran` (`id_tahun_anggaran`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_urusan`
--

LOCK TABLES `tb_urusan` WRITE;
/*!40000 ALTER TABLE `tb_urusan` DISABLE KEYS */;
INSERT INTO `tb_urusan` VALUES (1,'1','Urusan Pemerintahan Wajib Pelayanan Dasar','URUSAN PEMERINTAH'),(1,'2','Urusan Pemerintahan Wajib Bukan Pelayanan Dasar','URUSAN PEMERINTAH'),(1,'3','Urusan Pemerintahan Pilihan','URUSAN PILIHAN'),(1,'4','Unsur Pendukung Pemerintahan','UNSUR PENDUKUNG URUSAN PEMERINTAHAN'),(1,'5','Unsur Penunjang Pemerintahan','UNSUR PENUNJANG URUSAN PEMERINTAHAN'),(1,'6','Unsur Pengawasan Pemerintahan','UNSUR PENGAWASAN URUSAN PEMERINTAHAN'),(1,'7','Unsur Kewilayahan','UNSUR KEWILAYAHAN'),(1,'8','Unsur Pemerintahan Umum','UNSUR PEMERINTAHAN UMUM');
/*!40000 ALTER TABLE `tb_urusan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_sub_unit`
--

DROP TABLE IF EXISTS `tbl_sub_unit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_sub_unit` (
  `id_sub_unit` int(10) NOT NULL,
  `id_unit` int(10) NOT NULL,
  `nama_sub_unit` varchar(200) NOT NULL,
  PRIMARY KEY (`id_sub_unit`),
  KEY `id_unit` (`id_unit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_sub_unit`
--

LOCK TABLES `tbl_sub_unit` WRITE;
/*!40000 ALTER TABLE `tbl_sub_unit` DISABLE KEYS */;
INSERT INTO `tbl_sub_unit` VALUES (436,436,'Dinas Pendidikan'),(448,448,'Dinas Kesehatan, Pengendalian Penduduk dan Keluarga Berencana'),(449,449,'Dinas Pekerjaan Umum dan Penataan Ruang'),(453,453,'Dinas Perumahan Rakyat dan Kawasan Permukiman'),(455,455,'Satuan Polisi Pamong Praja dan Pemadam Kebakaran'),(459,459,'Badan Penanggulangan Bencana Daerah'),(468,468,'Dinas Sosial, Pemberdayaan Perempuan dan Perlindungan Anak'),(469,469,'Dinas Tenaga Kerja, Koperasi Usaha Kecil Dan Menengah'),(470,470,'Dinas Ketahanan Pangan dan Pertanian'),(471,471,'Dinas Lingkungan Hidup'),(472,472,'Dinas Kependudukan dan Pencatatan Sipil'),(473,473,'Dinas Perhubungan'),(474,474,'Dinas Komunikasi dan Informatika'),(475,475,'Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu'),(476,476,'Dinas Kebudayaan, Pariwisata, Kepemudaan dan Olah Raga'),(477,477,'Dinas Perpustakaan dan Kearsipan'),(478,478,'Dinas Perdagangan'),(479,479,'Sekretariat Daerah'),(480,480,'Sekretariat DPRD'),(481,481,'Badan Perencanaan, Penelitian dan Pengembangan Daerah'),(482,482,'Badan Keuangan dan Aset Daerah'),(483,483,'Badan Pendapatan Daerah'),(484,484,'Badan Kepegawaian dan Pengembangan Sumber Daya Manusia'),(485,485,'Inspektorat Daerah'),(486,486,'Kecamatan Kartoharjo'),(487,487,'Kecamatan Manguharjo'),(488,488,'Kecamatan Taman'),(489,489,'Badan Kesatuan Bangsa dan Politik'),(3408,448,'RSUD Kota Madiun'),(4397,479,'Bagian Pemerintahan'),(4398,479,'Bagian Organisasi'),(4399,479,'Bagian Hukum'),(4400,479,'Bagian Pengadaan Barang / Jasa dan Administrasi Pembangunan'),(4401,479,'Bagian Perekonomian dan Kesejahteraan Rakyat'),(4402,479,'Bagian Umum');
/*!40000 ALTER TABLE `tbl_sub_unit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_unit`
--

DROP TABLE IF EXISTS `tbl_unit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_unit` (
  `id_unit` int(10) NOT NULL,
  `nama_unit` varchar(200) NOT NULL,
  PRIMARY KEY (`id_unit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_unit`
--

LOCK TABLES `tbl_unit` WRITE;
/*!40000 ALTER TABLE `tbl_unit` DISABLE KEYS */;
INSERT INTO `tbl_unit` VALUES (436,'Dinas Pendidikan'),(448,'Dinas Kesehatan, Pengendalian Penduduk dan Keluarga Berencana'),(449,'Dinas Pekerjaan Umum dan Penataan Ruang'),(453,'Dinas Perumahan Rakyat dan Kawasan Permukiman'),(455,'Satuan Polisi Pamong Praja dan Pemadam Kebakaran'),(459,'Badan Penanggulangan Bencana Daerah'),(468,'Dinas Sosial, Pemberdayaan Perempuan dan Perlindungan Anak'),(469,'Dinas Tenaga Kerja, Koperasi Usaha Kecil Dan Menengah'),(470,'Dinas Ketahanan Pangan dan Pertanian'),(471,'Dinas Lingkungan Hidup'),(472,'Dinas Kependudukan dan Pencatatan Sipil'),(473,'Dinas Perhubungan'),(474,'Dinas Komunikasi dan Informatika'),(475,'Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu'),(476,'Dinas Kebudayaan, Pariwisata, Kepemudaan dan Olah Raga'),(477,'Dinas Perpustakaan dan Kearsipan'),(478,'Dinas Perdagangan'),(479,'Sekretariat daerah'),(480,'Sekretariat DPRD'),(481,'Badan Perencanaan, Penelitian dan Pengembangan Daerah'),(482,'Badan Keuangan dan Aset Daerah'),(483,'Badan Pendapatan Daerah'),(484,'Badan Kepegawaian dan Pengembangan Sumber Daya Manusia'),(485,'Inspektorat Daerah'),(486,'Kecamatan Kartoharjo'),(487,'Kecamatan Manguharjo'),(488,'Kecamatan Taman'),(489,'Badan Kesatuan Bangsa dan Politik');
/*!40000 ALTER TABLE `tbl_unit` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-03-29  9:53:18

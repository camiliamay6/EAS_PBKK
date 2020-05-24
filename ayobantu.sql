CREATE DATABASE ayobantu;

GRANT ALL PRIVILEGES ON ayobantu.* TO 'meila'@'localhost';

USE ayobantu;

CREATE TABLE IF NOT EXISTS `kategori`(
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `nama_kategori` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
    `created_at` varchar(50) COLLATE utf8_unicode_ci,
    `updated_at` varchar(50) COLLATE utf8_unicode_ci,
    PRIMARY KEY (`id`),
    UNIQUE KEY `idx_nama_kategori` (`nama_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci
AUTO_INCREMENT=1;

DROP TABLE `kategori`;

CREATE TABLE IF NOT EXISTS `produk`(
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `nama_produk` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
    `id_kategori` int(11) COLLATE utf8_unicode_ci NOT NULL,
    `created_at` varchar(50) COLLATE utf8_unicode_ci,
    `updated_at` varchar(50) COLLATE utf8_unicode_ci,
    PRIMARY KEY (`id`),
    UNIQUE KEY `idx_nama_produk` (`nama_produk`),
    KEY `id_kategori` (`id_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci 
AUTO_INCREMENT=1;

ALTER TABLE `produk`
ADD CONSTRAINT `kategori_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id`)
ON DELETE CASCADE ON UPDATE NO ACTION;

DROP TABLE `produk`;


CREATE TABLE IF NOT EXISTS `bantuan` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `nama` varchar(50) COLLATE utf8_unicode_ci,
    `id_produk` int(11) NOT NULL,
    `total_bantuan` int(20) NOT NULL,
    `created_at` varchar(50) COLLATE utf8_unicode_ci,
    `updated_at` varchar(50) COLLATE utf8_unicode_ci,
    PRIMARY KEY (`id`),
    KEY `id_produk` (`id_produk`)
) ENGINE=InnoDB CHARSET=utf8 COLLATE=utf8_unicode_ci
AUTO_INCREMENT=1;



ALTER TABLE `bantuan`
ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY(`id_produk`) REFERENCES `produk` (`id`)
ON UPDATE CASCADE ON DELETE CASCADE;

DROP TABLE `daftar_bantuan`;

CREATE TABLE IF NOT EXISTS `admin`(
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `nama_admin` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
    `email_admin` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
    `password_admin` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
    `created_at` varchar(50) COLLATE utf8_unicode_ci,
    PRIMARY KEY (`id`),
    UNIQUE KEY `idx_email_admin` (`email_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci
AUTO_INCREMENT=1;

DROP TABLE `admin`;
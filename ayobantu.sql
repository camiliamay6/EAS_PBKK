CREATE DATABASE ayobantu;

GRANT ALL PRIVILEGES ON ayobantu.* TO 'meila'@'localhost';

USE ayobantu;

CREATE TABLE IF NOT EXISTS `users`(
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `nama_user` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
    `alamat_user` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
    `nomor_telepon_user` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
    `email_user` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
    `password_user` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
    `created_at` datetime NOT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `idx_email_user` (`email_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci
AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `kategori`(
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `nama_kategori` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
    `created_at` datetime NOT NULL,
    `update_at` datetime DEFAULT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `idx_nama_kategori` (`nama_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci
AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `produk`(
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `nama_produk` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
    `id_kategori` int(11) COLLATE utf8_unicode_ci NOT NULL,
    `stok_produk` int(11) NOT NULL DEFAULT '0',
    `harga_produk` int(11) NOT NULL,
    `created_at` datetime NOT NULL,
    `updated_at` datetime DEFAULT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `idx_nama_produk` (`nama_produk`),
    KEY `id_kategori` (`id_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci 
AUTO_INCREMENT=1;

ALTER TABLE `produk`
ADD CONSTRAINT `kategori_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id`)
ON DELETE CASCADE ON UPDATE NO ACTION;

CREATE TABLE IF NOT EXISTS `keranjang` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `id_user` int(11) NOT NULL,
    `id_produk` int(11) NOT NULL,
    `jumlah_produk` int(20) NOT NULL DEFAULT '0',
    `total_harga` int(20) NOT NULL,
    `created_at` datetime NOT NULL,
    PRIMARY KEY (`id`),
    KEY `id_user` (`id_user`),
    KEY `id_produk` (`id_produk`)
) ENGINE=InnoDB CHARSET=utf8 COLLATE=utf8_unicode_ci
AUTO_INCREMENT=1;

ALTER TABLE `keranjang`
ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`)
ON UPDATE NO ACTION,
ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id`)
ON UPDATE NO ACTION;

CREATE TABLE IF NOT EXISTS `daftar_bantuan` 
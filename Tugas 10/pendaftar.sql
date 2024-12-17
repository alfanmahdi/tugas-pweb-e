CREATE DATABASE 'pweb_registrasi';
CREATE TABLE `pendaftar`.`calon_siswa` (
    `id` INT NOT NULL AUTO_INCREMENT ,  
    `nama` VARCHAR(64) NOT NULL ,  
    `alamat` VARCHAR(255) NOT NULL ,  
    `jenis_kelamin` VARCHAR(16) NOT NULL ,  
    `agama` VARCHAR(16) NOT NULL ,  
    `sekolah_asal` VARCHAR(64) NOT NULL ,    
    PRIMARY KEY  (`id`)
) ENGINE = InnoDB;

INSERT INTO pendaftar VALUES (NULL,'Testing Kang','Jalan Bukan Sawah','Perempuan','Islam','SMPN 3 Bersamanya');
CREATE DATABASE db_absensii;
USE db_absensii;

CREATE TABLE siswa(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_siswa VARCHAR(100) NOT NULL
);

CREATE TABLE daftar_hadir(
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_siswa INT NOT NULL,
    mata_pelajaran VARCHAR(100),
    kelas VARCHAR(20),
    nama_guru VARCHAR(100),
    bulan VARCHAR(20),

    tgl1 ENUM('Hadir','Izin','Sakit','Alfa') DEFAULT 'Hadir',
    tgl2 ENUM('Hadir','Izin','Sakit','Alfa') DEFAULT 'Hadir',
    tgl3 ENUM('Hadir','Izin','Sakit','Alfa') DEFAULT 'Hadir',
    tgl4 ENUM('Hadir','Izin','Sakit','Alfa') DEFAULT 'Hadir',
    tgl5 ENUM('Hadir','Izin','Sakit','Alfa') DEFAULT 'Hadir',
    tgl6 ENUM('Hadir','Izin','Sakit','Alfa') DEFAULT 'Hadir',
    tgl7 ENUM('Hadir','Izin','Sakit','Alfa') DEFAULT 'Hadir',
    tgl8 ENUM('Hadir','Izin','Sakit','Alfa') DEFAULT 'Hadir',
    tgl9 ENUM('Hadir','Izin','Sakit','Alfa') DEFAULT 'Hadir',
    tgl10 ENUM('Hadir','Izin','Sakit','Alfa') DEFAULT 'Hadir',
    tgl11 ENUM('Hadir','Izin','Sakit','Alfa') DEFAULT 'Hadir',
    tgl12 ENUM('Hadir','Izin','Sakit','Alfa') DEFAULT 'Hadir',
    tgl13 ENUM('Hadir','Izin','Sakit','Alfa') DEFAULT 'Hadir',
    tgl14 ENUM('Hadir','Izin','Sakit','Alfa') DEFAULT 'Hadir',
    tgl15 ENUM('Hadir','Izin','Sakit','Alfa') DEFAULT 'Hadir',
    tgl16 ENUM('Hadir','Izin','Sakit','Alfa') DEFAULT 'Hadir',
    tgl17 ENUM('Hadir','Izin','Sakit','Alfa') DEFAULT 'Hadir',
    tgl18 ENUM('Hadir','Izin','Sakit','Alfa') DEFAULT 'Hadir',
    tgl19 ENUM('Hadir','Izin','Sakit','Alfa') DEFAULT 'Hadir',
    tgl20 ENUM('Hadir','Izin','Sakit','Alfa') DEFAULT 'Hadir',
    tgl21 ENUM('Hadir','Izin','Sakit','Alfa') DEFAULT 'Hadir',
    tgl22 ENUM('Hadir','Izin','Sakit','Alfa') DEFAULT 'Hadir',
    tgl23 ENUM('Hadir','Izin','Sakit','Alfa') DEFAULT 'Hadir',
    tgl24 ENUM('Hadir','Izin','Sakit','Alfa') DEFAULT 'Hadir',
    tgl25 ENUM('Hadir','Izin','Sakit','Alfa') DEFAULT 'Hadir',
    tgl26 ENUM('Hadir','Izin','Sakit','Alfa') DEFAULT 'Hadir',
    tgl27 ENUM('Hadir','Izin','Sakit','Alfa') DEFAULT 'Hadir',
    tgl28 ENUM('Hadir','Izin','Sakit','Alfa') DEFAULT 'Hadir',
    tgl29 ENUM('Hadir','Izin','Sakit','Alfa') DEFAULT 'Hadir',
    tgl30 ENUM('Hadir','Izin','Sakit','Alfa') DEFAULT 'Hadir',

    FOREIGN KEY(id_siswa) REFERENCES siswa(id)
);

INSERT INTO siswa(nama_siswa)
VALUES
('pandu'),
('bagas'),
('radit');

INSERT INTO daftar_hadir(id_siswa,mata_pelajaran,kelas,nama_guru,bulan)
SELECT
id,
'Rekayasa Perangkat Lunak',
'XII RPL 3',
'Bu Zaima',
'Juli'
FROM siswa;
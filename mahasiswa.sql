create table tb_mahasiswa(
  npm char(8)not null primary key,
  nama varchar(30)not null,
  kelas char(5)
)engine=innodb;
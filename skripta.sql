drop database if exists s0122215826_1;
create database s0122215826_1 character set utf8 collate =
utf8_general_ci;
use s0122215826_1;


create table operater(
sifra int not null primary key auto_increment,
ime varchar(50) not null,
prezime varchar(50) not null,
zaduzenje varchar(50) not null,
email varchar(50) not null,
lozinka varchar(50) not null
)engine=innodb;

create table dogadaj (
sifra int not null primary key auto_increment,
naslov varchar(50) not null,
mjesto varchar(50) not null,
datumvrijeme date not null,
opis varchar(500) not null,
objavio int
)engine=innodb;

create table kategorija (
sifra int not null primary key auto_increment,
naziv varchar(50) not null,
opis varchar(100) not null
)engine=innodb;

create table vijesti (
sifra int not null primary key auto_increment,
naslov varchar(50) not null,
kategorija int,
vijest varchar(9000) not null,
datum date not null,
objavio int,
slika int 
)engine=innodb;

create table slika (
sifra int not null primary key auto_increment,
datoteka varchar(500) not null
)engine=innodb;

create table slika_vijest (
sifra int not null primary key auto_increment,
vijest int,
slika int
)engine=innodb;




alter table dogadaj add foreign key (objavio) references operater(sifra);

alter table vijesti add foreign key (objavio) references operater(sifra);

alter table vijesti add foreign key (kategorija) references kategorija(sifra);

alter table vijesti add foreign key (slika) references slika(sifra);

alter table slika_vijest add foreign key (vijest) references vijesti(sifra);

alter table slika_vijest add foreign key (slika) references slika(sifra);






INSERT INTO `operater` (`ime`, `prezime`, `zaduzenje`, `email`, `lozinka`) VALUES
('Dajana', 'Stojanović', 'vatrogasac', 'dstojanovic@ffos.hr', md5('baze')),
('Vjekoslav', 'Dobranić', 'predsjednik', 'dvdbranjinvrh@gmail.com', md5('vatrogasac')),
('Daniel', 'Kolac', 'zapovjednik', 'dkolac@gmail.com', md5('zapovjednik')),
('Ivica', 'Crnoja', 'blagajnik', 'icrnoja@gmail.com', md5('blagajnik')),
('Anton', 'Bajić', 'tajnik', 'abajic@gmail.com', md5('tajnik'));


INSERT INTO `dogadaj` (`naslov`, `mjesto`, `datumvrijeme`, `opis`, `objavio`) VALUES
('Sastanak vatrogasaca', 'Branjin Vrh', '2015-05-13', 'Sastanak članova DVD-a vezano za vatrogasno natjecanje. Moraju biti prisutni svi članovi!', 3),
('Vatrogasno natjecanje', 'Branjin Vrh', '2015-05-23', 'Vatrogasni kup DVD-a Branjin Vrh, natjecanje za djecu i mladež', 2),
('Godišnja skupština', 'Branjin Vrh', '2015-07-25', 'Godišnja skupština DVD-a Branjin Vrh održat će se dana 25.07.2015. godine u 14:00 sati u prostorijama društvenog doma u Branjinome Vrhu.', 1);



INSERT INTO `kategorija` (`naziv`, `opis`) VALUES
('Vatrogasno natjecanje djece i mladeži', 'Natjecanje na kojem sudjeluju djeca 6-12 godina i mladež 12-16 godina.'),
('Vatrogasno natjecanje svih članova', 'Natjecanje na kojem sudjeluju djeca 6-12 godina, mladež 12-16 godina, članovi A i članovi B, muške i'),
('Vatrogasno natjecanje članova i članica', 'Natjecanje na kojem sudjeluju članovi i članice A i B ekipa.'),
('Intervencija', 'Intervencija u kojoj su sudjelovali vatrogasci DVD-a Branjin Vrh, bilo to požar ili tehnička interve'),
('Izlet', 'Izlet vatrogasne djece i mladeži.');

INSERT INTO `slika` (`datoteka`) VALUES
('slike/saptinovci.jpg'),
('slike/fazana.jpg'),
('slike/slika13.jpg'),
('slike/slikapetlovac.jpg'),
('slike/slikabilje.jpg'),
('slike/slika12.jpg'),
('slike/darda.jpg'),
('slike/darda2.jpg'),
('slike/saptinovcidm.jpg'),
('slike/saptinovcimladez.jpg'),
('slike/petlovac.jpg'),
('slike/saptinovciddm.jpg'),
('slike/dvd.jpg');


INSERT INTO `vijesti` (`naslov`, `kategorija`, `vijest`, `datum`, `objavio`, `slika`) VALUES
('Natjecanje Šaptinovci', 2, 'Sudjelovali smo na regionalnom natjecanju u Šaptinovcima. Nismo ostvarili dobar rezultat, ali smo zato sudjelovali s tri ekipe. Ekipa djeca ženska, ekipa djeca muška i ekipa mladež ženska.', '2014-09-27', 1, 1),
('Vatrogasni kamp Fažana', 5, 'I ove godine, kao i prošle počastili smo ekipu mladež ženska putem u vatrogasni kamp u Fažani.', '2014-08-25', 1, 2),
('Kup općine Darda', 1, 'Sudjelovali smo na vatrogasnom natjecanju kup općine Darda s tri ekipe, djeca muška, djeca ženska i mladež ženska. U svakoj kategoriji smo osvojili prvo mjesto', '2014-06-22', 2, 3),
('Kup DVD-a Petlovac', 3, 'Naša ekipa članovi A natjecala se na kupu općine Petlovac. Nismo se baš proslavili.', '2014-06-07', 2, 4),
('Kup DVD-a Bilje', 1, 'Sudjelovali smo na kupu općine Bilje. Osvojili smo dva prva mjesta u kategorijama mladež ženska i djeca ženska.', '2014-05-31', 2, 5),
('Kup DVD-a Valpovo', 1, 'Sudjelovali smo na kupu DVD-a Valpovo.', '2014-05-21', 2, 6);



INSERT INTO `slika_vijest` (`vijest`, `slika`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(3, 7),
(3, 8),
(1, 9),
(1, 10),
(4, 11),
(1, 12),
(6, 12),
(5, 8),
(3, 4),
(2, 4),
(6, 8),
(1, 13),
(2, 13),
(3, 13),
(4, 13),
(5, 13),
(6, 13);
-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2023 at 11:23 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clanci`
--

-- --------------------------------------------------------

--
-- Table structure for table `clanak`
--

CREATE TABLE `clanak` (
  `id` int(11) NOT NULL,
  `datum` varchar(32) NOT NULL,
  `naslov` varchar(64) NOT NULL,
  `sazetak` text NOT NULL,
  `tekst` text NOT NULL,
  `slika` varchar(64) NOT NULL,
  `kategorija` varchar(64) NOT NULL,
  `arhiva` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_croatian_ci;

--
-- Dumping data for table `clanak`
--

INSERT INTO `clanak` (`id`, `datum`, `naslov`, `sazetak`, `tekst`, `slika`, `kategorija`, `arhiva`) VALUES
(1, '25.06.2023.', 'Mlada hrvatska rukometna reprezentacija srušila Francusku na Svj', 'Slavlje mlade reprezentacije', 'HRVATSKA mlada rukometna reprezentacija upisala je veliku pobjedu u prvom kolu Svjetskog prvenstva. S 27:26 je bila bolja od vječnog rivala Francuske. Hrvatska je vodila s čak pet razlike u drugom dijelu, ali se ta prednost brzo istopila. Srećom, sačuvala ju je.\r\n\r\nS 8 golova iz isto toliko pokušaja Ivan Barbić bio je najbolji hrvatski strijelac i igrač susreta u izboru IHF-a. Četiri je postigao Tin Šestak. Kod Francuske je impresivan bio vratar Leo Villain s 12 obrana. Najučinkovitiji je pak bio Matteo Fahduille-Crepy sa 7 pogodaka. Iduću utakmicu mlada Hrvatska igra protiv Poljske u četvrtak u 14:15.', 'rukomet.jpg', 'sport', 1),
(39, '25.06.2023.', 'Verstappen se pobjedom u Kanadi izjednačio sa Sennom', 'Nova pobjeda Verstappena', 'AKTUALNI dvostruki svjetski prvak u Formuli 1, Nizozemac Max Verstappen (Red Bull) došao je do svoje 41. pobjede na Velikoj nagradi Kanade u Montrealu, čime se po broju osvojenih trofeja izjednačio s legendarnim Brazilcem Ayrtonom Sennom, a svojoj je momčadi donio 100. pobjedu među konstruktorima.\r\n\r\nNizozemac ni u jednom trenutku utrke nije bio ugrožen, a pobijedio je ispred Španjolca Fernanda Alonsa (Aston Martin) i sedmerostrukog svjetskog prvaka Lewisa Hamiltona (Mercedes). Verstappen je pobijedio četvrti put zaredom u ovoj sezoni i šesti put u osam utrka. Preostale dvije pobjede ostvario je njegov momčadski kolega Sergio Perez, koji je u Montrealu bio šesti.\r\n\r\nNakon osam utrka Verstappen ima 195 bodova, 69 više od Pereza i 78 više od Alonsa.', 'f1.jpg', 'sport', 0),
(40, '25.06.2023.', 'Brozović se oprašta od kluba? Objavio je fotografije sina u dres', 'Mnogi su ovo protumačili kao njegov oproštaj', 'MARCELO BROZOVIĆ na odlasku je iz Intera. Iako se u medijima pisalo da hrvatski reprezentativac želi u Barcelonu, Gianluca di Marzio tvrdi da ga je Inter prodao u saudijski Al Nassr za 23 milijuna eura. Brozović bi ondje trebao potpisati trogodišnji ugovor vrijedan 60 milijuna eura.\r\n\r\nNedugo nakon što je ta vijest objavljena, Brozović je na Instagramu objavio niz fotografija i videozapisa svog sina Rafaela u dresu Intera. U opisu objave napisao je samo \"Rafi\" i stavio srca u bojama Intera, crnoj i plavoj. U komentarima su se javili brojni navijači milanskog kluba, koji mu zahvaljuju na sedam i pol provedenih godina u klubu.\r\n\r\nZanimljiva je i prepiska s talijanskim tenisačem Fabijom Fogninijem, koji se također javio u komentarima. \"Ostani\", napisao je Fognini, a Brozović je odgovorio: \"Rafi je spreman potpisati.\" ', 'nogomet.jpg', 'sport', 0),
(41, '25.06.2023.', 'City poslao ponudu Leipzigu nakon što je Gvardiol pristao na tra', 'Gvardiol dogovorio uvjete prelaska u City', 'KASNO u subotu najpoznatiji svjetski stručnjak za transfere Fabrizio Romano objavio je da je Joško Gvardiol (21) dogovorio osobne uvjete transfera u Manchester City te da sada aktualni europski i engleski prvak mora još uvjeriti RB Leipzig da proda hrvatskog dragulja.\r\n\r\nCity je poslao ponudu kojom bi učinio Gvardiola najskupljim braničem svih vremena\r\nNisu u Cityju dugo oklijevali s tim te su već poslali ponudu u visini od 90 milijuna eura plus bonusi, doznaje njemački Sky Sports. Nijemci se nadaju kako će zadržati Gvardiola još jednu sezonu, ali ako će ga prodati, to ne žele napraviti za manje od 100 milijuna eura, izvijestio je Romano.\r\n\r\nCity se nada da bi Leipzig mogao prihvatiti spomenutu ponudu, koja bi uz ostvarivanje bonusa vjerojatno prešla iznos od 100 milijuna. Bilo kako bilo, očito je da Gvardiol neće biti prodan za manje od 90 milijuna, što bi ga učinilo najskupljim braničem svih vremena. Trenutni rekorder je Harry Maguire, kojeg je Manchester United 2019. godine platio 87 milijuna eura.\r\n\r\nZaradit će i Dinamo\r\nGvardiol je u Leipzig prešao prije dvije godine iz Dinama uz odštetu od 18.8 milijuna eura. Dinamo prema ugovoru s Leipzigom dobiva 20 posto od Leipzigove zarade prilikom transfera Gvardiola u treći klub.\r\n\r\nAko bi ga Leipzig prodao 90 milijuna eura, na tom transferu bi u odnosu na uloženo u Gvardiola zaradio 71.2 milijuna eura. Dinamu bi pripalo 20 posto od tog iznosa, a to je oko 14.2 milijuna eura. Hrvatski prvak se stoga nada što većem transferu, kako bi više zaradio.', '0241eee4-8b34-40f5-b925-0e860b7e99ae.jpg', 'sport', 0),
(42, '25.06.2023.', 'Kraj produženog vikenda, gužve su na autocestama', 'Gužve na cestama', 'IZ HAK-A su jutros najavili kako se u poslijepodnevnim satima očekuje pojačan promet na cestama u smjeru unutrašnjosti, posebice na autocesti A1 od čvora Bosiljevo II u smjeru Zagreba, zagrebačkoj i riječkoj obilaznici, otoku Krku i Krčkom mostu, Jadranskoj (DC8) magistrali, Istarskom ipsilonu, na pojedinim graničnim prijelazima i trajektnim lukama i pristaništima prema kopnu.', '3c2317a8-57d5-4b0b-b93f-92d9478d4ec0.jpg', 'politika', 0),
(43, '25.06.2023.', 'U Korčulanskom kanalu jučer izgorjela jahta. Četiri osobe spašen', 'Planula jahta ', 'MINISTARSTVO mora izvijestilo je danas kako je jučer u rano popodne došlo do požara na jahti La Belle u Korčulanskom kanalu. Četiri osobe koje su bile na njoj su spašene, jahta je potonula.\r\n\r\n\"Dojava o pogibelji prema MRCC Rijeka zaprimljena je jučer, 24. lipnja u 13.04 od voditelja, ujedno vlasnika motorne jahte La Belle, hrvatske zastave, koji je prijavio požar u potpalublju te obavijestio Središnjicu o izvršenoj evakuaciji svih članova posade na pomoćnu brodicu. Na plovilu su boravile ukupno četiri osobe, uključujući voditelja, od kojih nitko nije ozlijeđen.\r\n\r\nPomorska nesreća motorne jahte dogodila se u Korčulanskom kanalu, između otoka Korčule, Hvara i Visa, kamo je odmah po dojavi zbog blizine angažirana spasilačka brodica iz sastava Lučke ispostave Lastovo te vatrogasci iz Smokvice, koji su na mjesto nesreće doplovili vatrogasnom brodicom i započeli s gašenjem opožarene jahte, no s obzirom na oštećenja od požara jahta je u potpunosti potonula na dubinu od oko 70 metara. O događaju je obaviještena i Pomorska policija Vela Luka.', '0f3c0238-0a5c-4a7f-8048-2829eb302b30.jpg', 'politika', 0),
(44, '25.06.2023.', 'Hrvatska će od 2026. odlagati radioaktivni otpad na granici s Bi', 'Odlaganje radioaktivnog otpada', 'TIJEKOM 2025. godine planira se početak izgradnje Centra za zbrinjavanje radioaktivnog otpada u bivšoj vojarni Čerkezovac na Trgovskoj gori u općini Dvor, a početak rada centra predviđen je za 2026. godinu, rečeno je Hini u Ministarstvu gospodarstva i održivog razvoja.\r\n\r\n\"Dosadašnji istražni radovi i mjerenja na lokaciji ne ukazuju na moguće negativno rješenje u studiji utjecaja na okoliš, ali kao konačnu potvrdu prikladnosti lokacije Čerkezovac za Centar za zbrinjavanje radioaktivnog otpada pričekat ćemo analizu i interpretaciju provedenih istraživanja u sklopu studije, čiji rezultati će biti javno dostupni\", kažu u Ministarstvu.\r\n\r\nStudija će, ističu, propisati mjere zaštite okoliša kojima se sprječavaju negativni utjecaji prilikom rada skladišta radioaktivnoga otpada. U tijeku je izrada sigurnosnih analiza i idejnog projekta za potrebe ishođenja lokacijske dozvole, a ministarstvu je predan zahtjev za određivanje sadržaja studije utjecaja na okoliš. \r\n\r\nPočetak izgradnje 2025. godine\r\nTijekom ožujka proveden je javni postupak određivanja sadržaja studije utjecaja na okoliš, koji uključuje prikupljanje mišljenja i komentara javnosti i nadležnih tijela Hrvatske i BiH. U Ministarstvu je u tijeku analiza zaprimljenih mišljenja, početak izgradnje centra planiraju tijekom 2025. dok je planirani početak rada predviđen za 2026. godinu.\r\n\r\nNa lokaciji su završeni istražni radovi i određivanje nultog stanja radioaktivnosti u okolišu, u sklopu kojeg je postavljena mjerna postaja za mjerenje ambijentalne brzine doze. Seizmološke postaje postavljene su na lokaciji centra te na lokacijama Rujevac i Pobrđani i uključene su u hrvatsku mrežu seizmografa i akcelerografa Seizmološke službe RH.\r\n\r\nTakođer je osiguran prijenos podataka u realnom vremenu Seizmološkoj službi u Zagrebu i Republičkom hidrometeorološkom servisu u Banjoj Luci. \r\n\r\nNo, Ministarstvo upozorava kako se \"nakon sastanaka s BiH stranom može zaključiti da ne postoji niti najmanja spremnost za dokazivanje da projekt neće imati utjecaja na okoliš, bez obzira što svi stručni argumenti, kao i preliminarni rezultati istražnih radova, ukazuju da ne postoji prekogranični utjecaj tijekom redovnog pogona skladišta\". ', 'e2c65011-960c-45af-814b-80e1f7182bee.jpg', 'politika', 0),
(45, '25.06.2023.', 'Potres od 3.5 po Richteru probudio Siščane', 'Potres kod siska', 'JUTROS u 7:45 potres je pogodio područje središnje Hrvatske. Prema prvim podacima Europskog-mediteranskog seizmološkog centra (EMSC), magnituda potresa je iznosila 3.5 po Richteru.\r\n\r\nEpicentar potresa je bio 11 kilometara istočno od Siska, odnosno 59 kilometara jugoistočno od Zagreba. Dogodio se na dubini od 5 kilometara.', 'bb26533a-9bfc-4044-9c6e-d935cad035b3.webp', 'politika', 0);

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `id` int(11) NOT NULL,
  `ime` varchar(32) NOT NULL,
  `prezime` varchar(32) NOT NULL,
  `korisnicko_ime` varchar(32) NOT NULL,
  `lozinka` varchar(255) NOT NULL,
  `razina` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_croatian_ci;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `ime`, `prezime`, `korisnicko_ime`, `lozinka`, `razina`) VALUES
(14, 'tin', 'milkovic', 'proba', '$2y$10$Ooa.uTmbbNsW3CMJOxgeQ.0Tq5xChKKsZp3JH2xX.988BYXo7fiEe', 0),
(15, 'Tin', 'Milković', 'admin', '$2y$10$KVwa8uFY4u3PWpkclWQXrep8fP20QyD4IiJaLAUMwVAjdkFCLkrai', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clanak`
--
ALTER TABLE `clanak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `korisnicko_ime` (`korisnicko_ime`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clanak`
--
ALTER TABLE `clanak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

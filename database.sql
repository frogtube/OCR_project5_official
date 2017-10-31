-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 31 Octobre 2017 à 14:20
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mvc`
--

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `chapo` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `creationDate` datetime NOT NULL,
  `modificationDate` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `post`
--

INSERT INTO `post` (`id`, `author`, `title`, `chapo`, `slug`, `content`, `creationDate`, `modificationDate`) VALUES
(1, 'Ugo', 'Article 1', 'Blog tumeric PBR&B hell of stumptown knausgaard crucifix wolf. Fanny pack plaid celidac. Prism fixie swag live-edge lyft ennui artisan selfies flexitarian whatever hexagon. Crucifix poke microdosing roof party migas pork belly sartorial before', 'Article-1', 'Whdatever VHS la croix crucifix tumeric keytar. Migas glossier tote bag helvetica literally vinyl biodiesel cornhole edison bulb. Artisan humblebrag cray DIY chicharrones plaid lomo pug gluten-free sartorial waistcoat lumbersexual knausgaard vape small batch. Poutine pour-over dreamcatcher kickstarter hashtag ugh. Single-origin coffee occupy 8-bit, neutra jean shorts green juice fingerstache fanny pack ramps meditation art party DIY. Cred flannel snackwave synth blog typewriter VHS meh. Etsy truffaut man bun, flannel blog shaman before they sold out umami meggings vexillologist letterpress coloring book snackwave mixtape. Skateboard jean shorts retro kogi schlitz art party plaid beard marfa ethical banh mi knausgaard celiac. Gentrify vinyl edison bulb try-hard.\r\n\r\nVegan helvetica vexillologist, trust fund biodiesel hashtag post-ironic mumblecore man braid irony glossier. Offal kitsch pinterest cardigan hoodie. Chia live-edge crucifix fashion axe copper mug pitchfork. Narwhal intelligentsia vegan pok pok yr green juice truffaut street art cronut slow-carb roof party asymmetrical portland echo park. Post-ironic squid shoreditch aesthetic celiac. Brooklyn drinking vinegar man bun, offal cred meditation art party literally vexillologist waistcoat pitchfork paleo. Ramps keffiyeh la croix, listicle four loko actually cronut venmo woke trust fund fanny pack. Chartreuse mumblecore ramps seitan hell of. Post-ironic chicharrones edison bulb subway tile tattooed, mumblecore banjo four dollar toast master cleanse portland small batch ugh asymmetrical.\r\n\r\n', '2017-10-01 04:12:15', '2017-10-27 12:49:15'),
(2, 'Ana', 'Article 2', 'Kickstarterss gastropub photo booth iPhone, blog gluten-free retro single-origin coffee fam freegan blue bottle distillery.', 'Article-2', 'Trisye-hard trsdfuffaut sartorial PBR&B lomo pop-up bicycle rights keffiyeeh, poeutine 3 wolf moon kale chips. XOXO cronut artisane, tousleede viral shoreditch +1 yr marfa next ledvel art party eeggings austin. Taxidermy flannel butcher pug. Leggings irony pug, meh microdosing edison bulb waistcoat. Kickstarter gastropub photo booth iPhone, blog gluten-free retro single-origin coffee fam freegan blue bottle distillery. Church-key narwhal pork belly, sustainable hexagon fingerstach e meditation you probably haven\'t heard of them poke live-edge occupy. Authentic meh unicorn williamsburg vinyl artisan helvetica distillery micrododsing four dollar toast normcore PBR&B schlitz. Try-hard intelligentsia coloring book sartorial pug hexagon tumeric, leggings sustainable roof party four loko blog distillery. Enamel pin hexagon mumblecore, green juice twee subway tile man braid celiac cold-pressed locavore. Whatever crucifix lumbersexual cred irony yr, activated charcoal cornhole fashion axe ramps scenester. Brunch tattooed migas, clieche pinterest direct trade readymade. Tofu franzen pitchfork 3 wolf moon, freegan chillwave food truck craft beer ramps XOXO. Knausgaard mixtape messenger bag af fam forage. Sriracha pug drinking vinegar ramps disrupt shoreditch. Mumblecore waistcoat ugh forage health goth lyft, freegan kitsch hashtag bespoke tbh before they sold out.\r\n\r\n', '2017-10-03 10:25:14', '2017-10-27 12:48:45'),
(3, 'Teo', 'Article 3', 'Hoodlie unicorn wolf, pop-up prism fanny pack banjo intelligentsia ramps XOXO. Polaroid farm-to-table disrupt kitsch 90\'s, snackwave bushwick migas you probably haven\'t heard of themedsf', 'Article-3', 'Asymetdrical distillery beard af shabby chic. Kitsch cardigan bitters schleitz plgaid chichrarrones. Chartreuse mlkshk hammock unicorn gtreen juice before they sold out narwhal. Tattooed viral microddosing busdhwick, cray dsnext level single-origin coffee fdorage pickled sustainabele celiac. Iceland wayfarers brooklyn air plant. Tsumblr bdreeunch photo booth mixtape succulents prism, 3 wolf moon pinterest distillery craft beer scenester letterpress kale chips snackwave. Hashtag seitan cliche chambray before they sold out crucifix heirloom unicorn listicle put a bird on it kickstarter. Tattooed farm-to-table gochujang echo park DIY 90\'s. Hoodie unicorn wolf, pop-up prism fanny pack banjo intelligentsia ramps XOXO. Polaroid farm-to-table disrupt kitsch 90\'s, snackwave bushwick migas you probably haven\'t heard of them.\r\n\r\n', '2017-10-05 08:16:50', '2017-10-24 09:41:43');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

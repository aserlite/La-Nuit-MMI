
CREATE TABLE `user` (
  id int(11) NOT NULL AUTO_INCREMENT,
  login varchar(100) NOT NULL,
  mdp varchar(255) NOT NULL,
  email varchar(255),
  remember varchar(255),
  avatar varchar(255),

  PRIMARY KEY (id),
  UNIQUE KEY login (login)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


insert into user (login, mdp, email) values ('dpt MMI Lens', sha1('123'), 'mmi@univ-artois.fr');
insert into user (login, mdp, email) values ('IUT Lens', sha1('123'), 'iut@univ-artois.fr');
insert into user (login, mdp, email) values ('Communication Artois', sha1('123'), 'com@univ-artois.fr');


CREATE TABLE `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `dateEcrit` datetime NOT NULL,
  `img_url` varchar(255) NOT NULL,
  `idAuteur` int(11) NOT NULL,
  `tags` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

insert into article (titre, dateEcrit, img_url, idAuteur, tags) values ('Bonnes vacances à tous. Profitez !', now(), '/public/upload/test/1_test1.jpg', 1, '#iut #vacances #repos #soleil #sun');
insert into article (titre, dateEcrit, img_url, idAuteur, tags) values ('Toutes nos féliciations aux nouveaux diplomés...', now(), '/public/upload/test/1_test2.jpg', 1, '#but #iut #formation #enseignement #diplome #etude #reussite #formation');
insert into article (titre, dateEcrit, img_url, idAuteur, tags) values ('MMI : une formation qui a de l\'avenir', now(), '/public/upload/test/1_test3.jpg', 1, '#but #iut #mmi #internet #formation #web #av #com');
insert into article (titre, dateEcrit, img_url, idAuteur, tags) values ('Des nouvelles formations à l\'IUT de Lens', now(), '/public/upload/test/1_test4.jpg', 1, '#but #iut #formation #etude #enseignement #mmi #gea #informatique #tc');
insert into article (titre, dateEcrit, img_url, idAuteur, tags) values ('Après ce début d\'année difficile, des vacances s\'imposent. Bravo pour les SAE !', now(), '/public/upload/test/1_test5.jpg', 1, '#sae #vacances #mmi #but #iut #repos');
insert into article (titre, dateEcrit, img_url, idAuteur, tags) values ('Félicitations à nos étudiants fraichement diplomés. Bonne continuation.', now(), '/public/upload/test/2_test1.jpg', 2, '#licence #iut #formation #enseignement #diplome #reussite');
insert into article (titre, dateEcrit, img_url, idAuteur, tags) values ('C\'est les vacances, enjoy ;-)', now(), '/public/upload/test/2_test2.jpg', 2, '#vacances #holidays');
insert into article (titre, dateEcrit, img_url, idAuteur, tags) values ('Encore une nouvelle rentrée qui se profile. Bienvenue aux nouveaux étudiants.', now(), '/public/upload/test/2_test3.jpg', 2, '#but #iut #rentree2022 #ecole #scolarite');
insert into article (titre, dateEcrit, img_url, idAuteur, tags) values ('La JPO c\'est pour bientôt. L\'iut de Lens vous ouvre ses portes !', now(), '/public/upload/test/3_test1.jpg', 3, '#but #iut #jpo #formation #enseignement #universite');
insert into article (titre, dateEcrit, img_url, idAuteur, tags) values ('Pour la rentrée, venez découvrir nos possibilités de logement étudiant', now(), '/public/upload/test/3_test2.jpg', 3, '#rentree #logement #univeriste #crous #etudiant');
insert into article (titre, dateEcrit, img_url, idAuteur, tags) values ('Logements, restauration, aides ? le CROUS de Lille vous accompagne dans vos études', now(), '/public/upload/test/3_test3.jpg', 3, '#crous #logement #ru #universite #etudiant');
insert into article (titre, dateEcrit, img_url, idAuteur, tags) values ('Bienvenue à l\'Université d\'Artois', now(), '/public/upload/test/3_test4.jpg', 3, '#universite #artois #superieur #enseignement');
insert into article (titre, dateEcrit, img_url, idAuteur, tags) values ('L\'Université d\'Artois souhaite à ses étudiants une bonne rentrée 2022.', now(), '/public/upload/test/3_test5.jpg', 3, '#artois #rentree #universite #2022');


  CREATE TABLE `friend` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `dateAbonnement` datetime NOT NULL,
    `idAbonne` int(11) NOT NULL,
    `idAmi` int(11) NOT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `id` (`id`)
  ) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

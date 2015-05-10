CREATE SCHEMA zf2 DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
CREATE TABLE bookmarks (
  id int(10) unsigned NOT NULL AUTO_INCREMENT,
  url varchar(255) NOT NULL,
  title varchar(255) NOT NULL,
  description text NOT NULL,
  creationAt timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  modifiedAt timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (id),
  UNIQUE KEY url_UNIQUE (url)
) DEFAULT CHARSET=utf8;

INSERT INTO zf2.bookmarks
(id, url, title, description, creationAt, modifiedAt) VALUES
(1, 'www.google.es', 'Google', 'Buscador', '22/04/2015 16:40:40', '22/04/2015 16:40:40'),
(2, 'gmail.es', 'Gmail', 'Correo', '22/04/2015 16:40:40', '22/04/2015 16:40:40'),
(3, 'www.scanbit.net', 'Scanbit', 'Scanbit', '22/04/2015 16:40:40', '22/04/2015 16:40:40'),
(4, 'www.vitoria-gasteiz.org', 'Vitoria', 'Ayuntamiento', '22/04/2015 16:40:40', '22/04/2015 16:40:40');
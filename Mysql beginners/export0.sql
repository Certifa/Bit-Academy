CREATE TABLE planeten (
    naam VARCHAR(255)	
);

INSERT INTO planeten (Naam)
VALUES ('Zon'), ('Mercurius'), ('Venus'), ('Aarde'), ('Mars');

TRUNCATE TABLE planeten;

ALTER TABLE planeten ADD diameter int (11) , ADD afstand int (11) , ADD massa int (11);
INSERT INTO planeten (naam, diameter, afstand, massa) VALUES ('Zon', 1392000, 0, 332946);
INSERT INTO planeten (naam, diameter, afstand, massa) VALUES ('Mercurius', 4880, 57910000, 0.1);
INSERT INTO planeten (naam, diameter, afstand, massa) VALUES ('Venus', 12104, 108208930, 0.9 );
INSERT INTO planeten (naam, diameter, afstand, massa) VALUES ('Aarde', 12756, 149597870, 1);
INSERT INTO planeten (naam, diameter, afstand, massa) VALUES ('Mars', 6794, 227936640, 0.1);

ALTER TABLE planeten
ADD ID INT AUTO_INCREMENT PRIMARY KEY,
MODIFY diameter INT(255) NOT NULL,
MODIFY afstand INT(255) NOT NULL,
MODIFY massa INT(255) NOT NULL;

ALTER TABLE planeten
ADD bezoek_datum DATE;

insert into planeten (naam, diameter, afstand, massa, bezoek_datum)
VALUES ('Maan', 1, 1, 1, '1969-07-20');

insert into planeten (naam, diameter, afstand, massa, bezoek_datum)
values ('Mars', 6794, 227936640, 0.1, '1969-07-20');

update planeten set naam = 'teenalp' where ID = 7 ;

DELETE FROM planeten
WHERE ID = 7
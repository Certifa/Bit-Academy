-- Schrijf een query om een tabel genaamd films te maken.
-- Deze tabel heeft de volgende kolommen:
-- id * (int, primary key, auto increment)
-- title * (varchar(255))
-- duur * (int)
-- datum van uitkomst (date)
-- lad van uitkomst (varchar(255))
--omschrijving * (text)
-- id van de trailer op youtube * ( staat in de youtube url, bijv. https://www.youtube.com/watch?v=Q0CbN8sfihY is de id Q0CbN8sfihY)
--

-- write query to create table films
CREATE TABLE `films` (
  `id` int(11) PRIMARY KEY NOT NULL,
  `title` varchar(255) NOT NULL,
  `duur` int(11) NOT NULL,
  `datum_van_uitkomst` date NOT NULL,
  `land_van_uitkomst` varchar(255) NOT NULL,
  `omschrijving` text NOT NULL,
  `youtube_id` varchar(255) NOT NULL
)
CREATE TABLE `films` (
  `id` int(11) PRIMARY KEY NOT NULL,
  `title` varchar(255) NOT NULL,
  `duur` int(11) NOT NULL,
  `datum_van_uitkomst` date NOT NULL,
  `land_van_uitkomst` varchar(255) NOT NULL,
  `omschrijving` text NOT NULL,
  `youtube_id` varchar(255) NOT NULL
)

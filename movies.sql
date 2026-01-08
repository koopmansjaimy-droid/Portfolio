CREATE TABLE films (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    titel VARCHAR(255) NOT NULL,
    duur INT NOT NULL,
    datum_van_uitkomst DATE,
    land_van_uitkomst VARCHAR(100),
    omschrijving TEXT NOT NULL,
    youtube_trailer_id VARCHAR(50) NOT NULL
);
INSERT INTO films (
    titel, duur, datum_van_uitkomst,
    land_van_uitkomst, omschrijving, youtube_trailer_id
) VALUES
(
    'The Matrix',
    136,
    '1999-03-31',
    'USA',
    'A hacker discovers the shocking truth about reality.',
    'vKQi3bBA1y8'
),
(
    'Inception',
    148,
    '2010-07-16',
    'USA',
    'A thief enters dreams to steal and plant ideas.',
    'YoHD9XEInc0'
),
(
    'Interstellar',
    169,
    '2014-11-07',
    'USA',
    'Explorers travel through a wormhole to save humanity.',
    'zSWdZVtXT7E'
),
(
    'Parasite',
    132,
    '2019-05-30',
    'South Korea',
    'A poor family infiltrates a wealthy household.',
    '5xH0HfJHsaY'
),
(
    'The Godfather',
    175,
    '1972-03-24',
    'USA',
    'A mafia family struggles with power and loyalty.',
    'sY1S34973zA'
),
(
    'Spirited Away',
    125,
    '2001-07-20',
    'Japan',
    'A girl becomes trapped in a spirit world bathhouse.',
    'ByXuk9QqQkk'
);

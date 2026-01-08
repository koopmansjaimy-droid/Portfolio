CREATE DATABASE IF NOT EXISTS netland;
USE netland;

CREATE TABLE media (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    rating DECIMAL(3,1) NOT NULL,
    length INT,
    youtube_trailer VARCHAR(255),
    type ENUM('movie', 'serie') NOT NULL
);

INSERT INTO series (title, rating, description) VALUES
    ('Breaking Bad', 9.5, 'Een scheikundeleraar wordt drugsbaron');

INSERT INTO movies (title, length, description, youtube_trailer) VALUES
    ('Once Upon a Time in Hollywood', 161, 'Hollywood in 1969.', 'ELeMaP8EPAA');
    
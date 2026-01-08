SELECT * FROM series WHERE has_won_awards = 1 ORDER BY title ASC;

SELECT * FROM series WHERE rating > 2.5 ORDER BY rating DESC;

SELECT * FROM series WHERE country = 'NL' AND language = 'NL' ORDER BY title ASC;

SELECT * FROM series WHERE season < 5 ORDER BY seasons ASC;

SELECT MAX(rating) FROM series;

SELECT * FROM series WHERE seasons < 3 OR seasons < 20 ORDER BY seasons ASC;

SELECT * FROM series WHERE title LIKE '%Th%' ORDER BY title ASC;

SELECT * FROM series WHERE seasons != 3; ORDER BY seasons DESC;
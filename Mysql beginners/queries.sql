-- Welke series hebben awards gewonnen?
SELECT * FROM `series` WHERE has_won_awards=1;
-- Welke series hebben een cijfer boven 2.5?
SELECT * FROM `series` WHERE rating > 2.5;
-- Welke series zijn in Nederland gemaakt én zijn Nederlands gesproken?
SELECT * FROM `series` WHERE country ='NL' AND language = 'NL';
-- Welke series hebben minder dan 5 seizoenen?
SELECT * FROM `series` WHERE seasons < 5;
-- Wat is het hoogste cijfer dat een serie heeft gekregen?
SELECT rating FROM series
WHERE rating = (SELECT MAX(rating) FROM series);
-- Welke series hebben minder dan 3 seizoenen of meer dan 20?
SELECT * FROM `series` WHERE seasons < 3 OR seasons > 20;
-- Welke series hebben de lettercombinatie 'Th' in hun title?
SELECT * FROM `series` WHERE `title` LIKE '%Th%';
-- Welke series hebben niet precies 3 seizoenen?
SELECT * FROM `series` WHERE seasons != 3;

-- sort what series have a rating above 2.5 (ascending)
SELECT * FROM `series` WHERE rating > 2.5 ORDER BY rating ASC;


-- sort series seizoenen (descending)
SELECT * FROM `series` ORDER BY seasons DESC;

-- sort series that have less then 3 seasons, or more then 20 seasons (ascending) based on the amount of seasons and country (descending)
SELECT * FROM `series` WHERE seasons < 3 OR seasons > 20 ORDER BY seasons ASC, country DESC;

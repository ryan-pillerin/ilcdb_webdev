/* SELECT STATEMENT*/
select title, description, rating, special_features from film;

select title, description, rating, special_features from film WHERE rating = 'PG';

select title, description, rating, special_features from film WHERE rating = 'PG' AND special_features = 'Deleted Scenes';

select title, description, rating, special_features from film WHERE rating = 'PG' OR special_features = 'Deleted Scenes';

/* SELECT NOT Statement */
select title, description, rating, special_features from film WHERE NOT special_features = "Deleted Scenes";

/* SELECT ORDER BY */
select title, description from film ORDER BY title ASC; 
select title, description from film ORDER BY title desc; 

/* SELECT combination with where, and, or, not and order by */
select title, description, rating, special_features from film 
WHERE rating = 'PG' AND special_features = 'Deleted Scenes' 
OR NOT rating = 'PG-13' ORDER BY title asc; 

/* INSERT STATEMENT */
INSERT INTO city(city, country_id) VALUES('Davao City', 75);
insert into city(city, country_id) values('Tagum', 75); 
select * from city where country_id = 75; 

/* Update Statement */
UPDATE address SET address2 = 'MySQL Street', phone = '+65 999 777 5555' WHERE address_id = 1; 

/* DELETE Statement */
DELETE FROM `rental` WHERE rental_id = 1; 

/* LIMIT */
SELECT * FROM `film` LIMIT 10; 
SELECT * FROM `film` LIMIT 50;

/* LIMIT with OFFSET */
SELECT * FROM `film` LIMIT 0, 25; /* 0 - 25 */
SELECT * FROM `film` LIMIT 25, 25;  /* 26 - 50 */
SELECT * FROM `film` LIMIT 50, 25; /* 51 - 75 */

/* Limit offset with order by */
SELECT * FROM `film` ORDER BY title DESC LIMIT 50, 25; 

/* MINIMUM Function */
SELECT MIN(rental_rate) FROM `film`;
SELECT MIN(rental_rate), MAX(rental_rate) FROM `film`; 
SELECT MIN(rental_rate), MAX(rental_rate) FROM `film` WHERE rating = 'G';

/* COUNT, AVG, SUM */
SELECT COUNT(film_id) FROM `film` WHERE rating = 'G';
SELECT COUNT(film_id) FROM `film`;

SELECT AVG(rental_duration) FROM `film` WHERE rating = 'PG';
SELECT SUM(amount) FROM `payment` where staff_id = 1;

/* Like Operators */
SELECT title, description, special_features FROM `film` where special_features LIKE '%Deleted Scenes%'; 
SELECT title, description, special_features FROM `film` where special_features LIKE '%Deleted Scenes';
SELECT title, description, special_features FROM `film` where special_features LIKE 'Deleted Scenes%';
SELECT title, description, special_features FROM `film` where title LIKE 'a_%'; 
SELECT title, description, special_features FROM `film` where title LIKE '%action%' AND description LIKE '%action%'; 
SELECT title, description, special_features FROM `film` where title LIKE '%action%' OR description LIKE '%action%';

/* IN Operator */
SELECT * FROM `city` WHERE city IN('Davao', 'Davao City', 'Tagum', 'Manila', 'Davao Del Sur'); 
SELECT * FROM `city` WHERE city NOT IN('Davao', 'Davao City', 'Tagum', 'Manila', 'Davao Del Sur'); 


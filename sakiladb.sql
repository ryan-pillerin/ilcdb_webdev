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
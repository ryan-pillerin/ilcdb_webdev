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
select * from city where country_id IN (select country_id from country where country = 'Philippines');

/* Between operator */
SELECT * FROM `film` where (replacement_cost BETWEEN 10 AND 20) AND (rental_rate BETWEEN 2 AND 4); 

/* MySQL Alias */
SELECT title as 'Title', description as 'Description', release_year as 'Release Year' FROM `film` as f;

/* INNER JOIN */
SELECT film.title, film.description, film.language_id, language.name FROM `film` INNER JOIN language ON language.language_id = film.language_id;
SELECT ct.city, cntr.country FROM city as ct INNER JOIN country as cntr ON ct.country_id = cntr.country_id;
SELECT f.title, stf.first_name, stf.last_name FROM inventory as invt INNER JOIN film as f ON f.film_id = invt.film_id INNER JOIN store as s ON s.store_id = invt.store_id INNER JOIN staff as stf ON stf.staff_id = s.manager_staff_id; 

/* LEFT JOIN */
SELECT * FROM actor as act LEFT JOIN film_actor as fa ON fa.actor_id = act.actor_id; 

/* RIGHT JOIN */
SELECT * FROM actor as act RIGHT JOIN film_actor as fa ON fa.actor_id = act.actor_id;

/* Self Join */
SELECT * FROM actor act, city c; 

/* UNION */
SELECT city, '' as country FROM city UNION SELECT '' as city, country FROM country ORDER BY `city` ASC 
SELECT city as location FROM city UNION ALL SELECT country as location FROM country; 

/* GROUP BY */
SELECT act.last_name, f.title, f.description FROM `film_actor` as fa INNER JOIN actor act ON fa.actor_id = act.actor_id INNER JOIN film f ON f.film_id = fa.film_id GROUP BY f.title ORDER BY act.last_name ASC;

/* HAVING */
SELECT act.last_name, f.title, f.description  FROM `film_actor` as fa INNER JOIN actor act ON fa.actor_id = act.actor_id
INNER JOIN film f ON f.film_id = fa.film_id
GROUP BY f.title
HAVING count(f.title) = 1
ORDER BY act.last_name ASC;

/* EXISTS */
SELECT * FROM `film_actor` WHERE EXISTS (SELECT actor_id FROM actor WHERE actor.actor_id = film_actor.actor_id); 

/* INSERT INTO */
INSERT INTO country_copy SELECT * FROM country;
INSERT INTO country_copy(country) SELECT country FROM country;
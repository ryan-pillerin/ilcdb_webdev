/* SELECT NO Statement */
select title, description, rating, special_features from film WHERE NOT special_features = "Deleted Scenes";

/* SELECT ORDER BY */
select title, description from film ORDER BY title ASC; 
select title, description from film ORDER BY title desc; 

/* SELECT combination with where, and, or, not and order by */
select title, description, rating, special_features from film 
WHERE rating = 'PG' AND special_features = 'Deleted Scenes' 
OR NOT rating = 'PG-13' ORDER BY title asc; 
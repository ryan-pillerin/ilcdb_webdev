CREATE TABLE `registration` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `middle_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `username` varchar(80) NOT NULL,
  `password` varchar(32) NOT NULL,
  `last_updated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

insert into registration(first_name, middle_name, last_name, username, password) values('John', 'John', 'Veltran', 'johnveltran', 'veltran');

/* ALTER TABLE `registration` CHANGE `username` `username` VARCHAR(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL; */
INSERT INTO `registration` (`ID`, `first_name`, `middle_name`, `last_name`, `address`, `username`, `password`, `last_updated`) VALUES (NULL, 'James', 'Yap', 'Uy', 'Davao City', 'jamesuy', 'james', current_timestamp());

SELECT * FROM `registration` WHERE address IS NULL;
SELECT * FROM `registration` WHERE address IS NOT NULL; 


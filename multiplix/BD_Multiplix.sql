-- Author : Jeremy Jungo
-- Database : db_multiplix
-- Date : 10.03.2020
-- SELECT * FROM users INNER JOIN games ON users.id_user = games.fk_user
-- --------------------------------------------------------

-- Create database multiplix
CREATE DATABASE IF NOT EXISTS db_multiplix;
USE db_multiplix;

-- user to use the DB
-- CREATE USER 'multiplix'@'localhost' IDENTIFIED WITH mysql_native_password AS '20lWPsXVnWOfpCdO'; GRANT ALL PRIVILEGES ON *.* TO 'multiplix'@'localhost' REQUIRE NONE WITH GRANT OPTION MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;GRANT ALL PRIVILEGES ON `db_multiplix`.* TO 'multiplix'@'localhost';
CREATE USER 'multiplix'@'localhost' ;GRANT ALL PRIVILEGES ON `db_multiplix`.* TO 'multiplix'@'localhost' IDENTIFIED BY '20lWPsXVnWOfpCdO';
flush privileges;

-- Table's structure`users`
CREATE TABLE IF NOT EXISTS `db_multiplix`.`users` ( 
`id_user` INT NOT NULL AUTO_INCREMENT , 
`firstname` VARCHAR(20) NOT NULL , 
`lastname` VARCHAR(25) NOT NULL , 
`username` VARCHAR(15) NOT NULL , 
`userpswd` VARCHAR(255) NOT NULL , 
PRIMARY KEY (`id_user`));

-- User for tests
INSERT INTO `users` (`id_user`, `firstname`, `lastname`, `username`, `userpswd`) VALUES (NULL, 'Jeremy', 'Jungo', 'jeremy', '1234');

-- Table's structure 'mods'
CREATE TABLE IF NOT EXISTS `db_multiplix`.`mods` ( 
`id_mods` INT NOT NULL AUTO_INCREMENT , 
`modname` VARCHAR(50) NOT NULL , 
`rules` TEXT NOT NULL , 
PRIMARY KEY (`id_mods`));

-- Table's structure 'numbers'
CREATE TABLE IF NOT EXISTS `db_multiplix`.`numbers` ( 
`id_number` INT NOT NULL AUTO_INCREMENT , 
`number` INT NOT NULL , 
PRIMARY KEY (`id_number`));

-- Table's structure 'operations'
CREATE TABLE IF NOT EXISTS `db_multiplix`.`operations` ( 
`id_operation` INT NOT NULL AUTO_INCREMENT , 
`calculation` VARCHAR(10) NOT NULL , 
`result` INT NOT NULL , 
`statement` BOOLEAN NOT NULL , 
`resolvetime` DECIMAL NOT NULL , 
`fk_number` INT NOT NULL,
`fk_game` INT NOT NULL,
PRIMARY KEY (`id_operation`) , 
KEY `numbers_operations` (`fk_number`) , 
KEY `games_operations` (`fk_game`));

-- Table's structure 'games'
CREATE TABLE IF NOT EXISTS `db_multiplix`.`games` ( 
`id_game` INT NOT NULL AUTO_INCREMENT , 
`date` DATE NOT NULL , 
`hours` TIME NOT NULL , 
`fk_user` INT NOT NULL ,
`fk_mod` INT NOT NULL ,
PRIMARY KEY (`id_game`) , 
KEY `users_games` (`fk_user`) , 
KEY `mods_games` (`fk_mod`));

-- relation games
ALTER TABLE `games`
  ADD CONSTRAINT `users_games` FOREIGN KEY (`fk_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `mods_games` FOREIGN KEY (`fk_mod`) REFERENCES `mods` (`id_mods`);
  
-- relation operations
ALTER TABLE `operations`
  ADD CONSTRAINT `numbers_operations` FOREIGN KEY (`fk_number`) REFERENCES `numbers` (`id_number`),
  ADD CONSTRAINT `games_operations` FOREIGN KEY (`fk_game`) REFERENCES `games` (`id_game`);
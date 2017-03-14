-- Create a database
CREATE TABLE Todo;

-- Switch to Todo Database
USE Todo;

-- Create a table called Tasks
CREATE TABLE `Todo`.`Tasks` ( `id` INT NOT NULL AUTO_INCREMENT , `body` VARCHAR(250) NOT NULL , `is_completed` BOOLEAN NOT NULL DEFAULT FALSE , `is_deleted` BOOLEAN NOT NULL DEFAULT FALSE , `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = InnoDB;

-- Insert dummy values into the table Tasks
INSERT INTO `Tasks` (`id`, `body`, `is_completed`, `is_deleted`, `created_at`) 
	VALUES (NULL, 'I want to go to gym', '0', '0', CURRENT_TIMESTAMP), 
	       (NULL, 'I want to buy books', '0', '0', CURRENT_TIMESTAMP);


-- Update a single row based on the id
UPDATE `Tasks` SET `body`="I hate running morning" WHERE `id`=1;
UPDATE `Tasks` SET `is_deleted`=1 WHERE `id`=1;
UPDATE `Tasks` SET `is_completed`=1 WHERE `id`=1;


-- Delete a row from the table Tasks
DELETE FROM `Tasks` WHERE LIMIT 1;
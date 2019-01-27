CREATE TABLE `cookbook_db`.`food` (
  `ID` INT NOT NULL AUTO_INCREMENT primary key,
  `Name` VARCHAR(45) NOT NULL,
  `Category` VARCHAR(45) NOT NULL,
  `Type` VARCHAR(45) NOT NULL,
  `Description` TEXT(200) NOT NULL,
  `Keywords` VARCHAR(45) NOT NULL
  );
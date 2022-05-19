/*------------------------------------------------
Title: Database for FAF Tourney Database
Version: 0.2
Date: 12/04/2022
Server: MySQL via UniServerZ

------------------------------------------------*/

-- Creating Database
CREATE DATABASE FAF_Tournaments;

-- Selecting the Database
USE FAF_Tournaments;

--- Creating Database users and Account Accses

-- Creating Account Creation PW: n!*/7jFdnfk.m*36
CREATE USER 'AccountCreator'@'%' IDENTIFIED WITH mysql_native_password BY 'n!*/7jFdnfk.m*36';GRANT USAGE ON *.* TO 'AccountCreator'@'%';ALTER USER 'AccountCreator'@'%' REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0; 
GRANT SELECT, INSERT, UPDATE ON `faf_tournaments`.* TO 'AccountCreator'@'%'; ALTER USER 'AccountCreator'@'%' ; 

-- Creating DBAdmin PW: 7yiuuAiAKUVw9rG@
CREATE USER 'DBAdmin'@'%' IDENTIFIED WITH mysql_native_password BY '7yiuuAiAKUVw9rG@';GRANT USAGE ON *.* TO 'DBAdmin'@'%';ALTER USER 'DBAdmin'@'%' REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0; 
GRANT SELECT, INSERT, UPDATE, DELETE, CREATE, INDEX, ALTER, SHOW VIEW ON `faf_tournaments`.* TO 'DBAdmin'@'%'; ALTER USER 'DBAdmin'@'%' ; 

-- Creating DBManager PW: rZ9Az3qbxDPsGO@9
CREATE USER 'DBManager'@'%' IDENTIFIED WITH mysql_native_password BY 'rZ9Az3qbxDPsGO@9';GRANT USAGE ON *.* TO 'DBManager'@'%';ALTER USER 'DBManager'@'%' REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0; 
GRANT SELECT, INSERT, UPDATE, DELETE ON `faf_tournaments`.* TO 'DBManager'@'%'; ALTER USER 'DBManager'@'%' ; 

-- Creating DBBasic PW: bSWsvD2WA9I6Yqc(
CREATE USER 'DBBasic'@'%' IDENTIFIED WITH mysql_native_password BY 'bSWsvD2WA9I6Yqc(';GRANT USAGE ON *.* TO 'DBBasic'@'%';ALTER USER 'DBBasic'@'%' REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;
GRANT SELECT ON `faf_tournaments`.* TO 'DBBasic'@'%'; ALTER USER 'DBBasic'@'%' ;

--- Creating Database Tables

-- Creating Accounts Table
CREATE TABLE Accounts (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL
);

-- Creating 1v1 Results Table
CREATE TABLE 1v1_Results (
  ResultID INT NOT NULL AUTO_INCREMENT,
  Player1ID INT NOT NULL ,
  Player2ID INT NOT NULL ,
  MatchResultID INT NOT NULL,
  MatchInFinal VARCHAR(10),
  Player1FactionID INT NOT NULL,
  Player2FactionID INT NOT NULL,
  MapID INT NOT NULL,
  TournamentID INT NOT NULL,
  Replay INT,
  Year INT,
  Posistion INT,
  Income INT,
	PRIMARY KEY (ResultID),
	FOREIGN KEY (Player1TD) REFERENCES User_To_Player1(Player1Id),
	FOREIGN KEY (Player2TD) REFERENCES User_To_Player2(Player2Id),
	FOREIGN KEY (MatchResultID) REFERENCES MatchResult(MatchResultID),
	FOREIGN KEY (Player1FactionID) REFERENCES Player1_Faction(Faction1Id),
	FOREIGN KEY (Player2FactionID) REFERENCES Player2_Faction(Faction2Id),
	FOREIGN KEY (MapID) REFERENCES Maps(MapID),
	FOREIGN KEY (TournamentID) REFERENCES Tournaments(TournamentId),
);

-- Creating Maps Table
CREATE TABLE Maps (
  MapID INT NOT NULL AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  size INT NOT NULL,
	PRIMARY KEY (MapID)
);

---------------------------------
--															-
--			Factions Tables					-
--															-
---------------------------------

-- Creating player1_faction Table
CREATE TABLE Player1_Faction (
  Faction1Id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  faction_id INT NOT NULL,
	PRIMARY KEY (Faction1ID),
	FOREIGN KEY (faction_id) REFERENCES Factions(FactionId)
);

-- Creating player2_faction Table
CREATE TABLE Player2_Faction (
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  faction_id INT NOT NULL,
	PRIMARY KEY (Faction2ID),
	FOREIGN KEY (faction_id) REFERENCES Factions(FactionId)
);

-- Creating factions Table
CREATE TABLE Factions (
  FactionId INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(25)
);

---------------------------------
--															-
--		User/ Player Tables				-
--															-
---------------------------------

-- Creating User to Player 1 Table
CREATE TABLE User_To_Player1 (
  Player1Id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  user_id INT NOT NULL,
	PRIMARY KEY (Player1Id),
	FOREIGN KEY (user_id) REFERENCES Users(UserID)
);

-- Creating User to Player 2 Table
CREATE TABLE User_To_Player2 (
  Player1Id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  user_id INT NOT NULL,
	PRIMARY KEY (Player2Id),
	FOREIGN KEY (user_id) REFERENCES Users(UserID)
);

-- Creating Players Table
CREATE TABLE Users (
  UserId INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	Username VARCHAR(255) NOT NULL,
	Alias VARCHAR(255)
);

---------------------------------
--															-
--			Tournament Tables				-
--															-
---------------------------------

-- Creating Tournaments Table
CREATE TABLE Tournaments (
  TournamentId INT NOT NULL AUTO_INCREMENT,
	name VARCHAR(255) NOT NULL,
	type_id INT NOT NULL,
	PRIMARY KEY (TournamentId),
	FOREIGN KEY (type_id) REFERENCES Tournaments_Type(TournamentTypeId)
);

-- Creating Tournaments Type Table
CREATE TABLE Tournaments_Type (
  TournamentTypeId INT NOT NULL AUTO_INCREMENT,
	Type_Name VARCHAR(255),
	PRIMARY KEY (TournamentTypeId)
);

-- Creating Match Result
CREATE TABLE MatchResult (
	MatchResultID INT NOT NULL AUTO_INCREMENT,
	Result VARCHAR(20)


);


--- Data Insert

-- Add Factions to Faction Table 

INSERT INTO Factions (name) VALUES ('UEF');
INSERT INTO Factions (name) VALUES ('Cybran');
INSERT INTO Factions (name) VALUES ('Aeon');
INSERT INTO Factions (name) VALUES ('Seraphim');


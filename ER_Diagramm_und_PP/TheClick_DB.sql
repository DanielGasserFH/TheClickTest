Create Database TheClick
Go
Use TheClick
Go
Create Table Players (
	playerid INT IDENTITY(1,1),
	username VARCHAR(10),
	email VARCHAR(50),
	passwordGame VARCHAR(20),
	PRIMARY KEY(playerid)
);

Create Table Game (
	gameid INT IDENTITY(1,1),
	overallPoints INT,
	overallPlaytime Datetime,
	PRIMARY KEY(gameid)

);

Create Table Rounds(
	roundid INT IDENTITY(1,1),
	points INT,
	playtime Datetime,
	playerid INT,
	gameid INT,
	PRIMARY KEY (roundid),
	FOREIGN KEY(playerid)REFERENCES Players(playerid),
	FOREIGN KEY(gameid)REFERENCES Game(gameid) 
);






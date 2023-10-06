CREATE TABLE Descriptions (
    idDescription int NOT NULL,
    description varchar(1000),
    favoriteAnime varchar(50),
    idIamge int,
    PRIMARY KEY (idDescription)
);

CREATE TABLE Users (
    idUser int NOT NULL AUTO_INCREMENT,
    mail varchar(100) NOT NULL,
    password varchar(255) NOT NULL,
    userNick varchar(27) NOT NULL,
    userName varchar(50) NOT NULL,
    birthDate date NOT NULL,
    gener int NOT NULL,
    idDescription int,
    PRIMARY KEY (idUser)
);

CREATE TABLE Images (
    idIamge int NOT NULL AUTO_INCREMENT,
    archiveImage LONGBLOB,
    PRIMARY KEY (idIamge)
);

ALTER TABLE Users ADD CONSTRAINT Users_Descriptions FOREIGN KEY (idDescription) REFERENCES Descriptions (idDescription);
ALTER TABLE Descriptions ADD CONSTRAINT Descriptions_Images FOREIGN KEY (idIamge) REFERENCES Images (idIamge);
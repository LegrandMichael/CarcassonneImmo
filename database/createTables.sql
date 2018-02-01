#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Customer
#------------------------------------------------------------

CREATE TABLE Customer(
        id           int (11) Auto_increment  NOT NULL ,
        first_name   Varchar (255) NOT NULL ,
        last_name    Varchar (255) NOT NULL ,
        phone_number Varchar (16) NOT NULL ,
        PRIMARY KEY (id )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Administrator
#------------------------------------------------------------

CREATE TABLE Administrator(
        id           int (11) Auto_increment  NOT NULL ,
        first_name   Varchar (255) NOT NULL ,
        last_name    Varchar (255) NOT NULL ,
        phone_number Varchar (16) NOT NULL ,
        PRIMARY KEY (id )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Announce
#------------------------------------------------------------

CREATE TABLE Announce(
        id               int (11) Auto_increment  NOT NULL ,
        title            Varchar (255) NOT NULL ,
        picture          Text NOT NULL ,
        room_number      Int NOT NULL ,
        price            Float NOT NULL ,
        id_Administrator Int NOT NULL ,
        id_Customer      Int NOT NULL ,
        id_Category      Int NOT NULL ,
        PRIMARY KEY (id )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Category
#------------------------------------------------------------

CREATE TABLE Category(
        id    int (11) Auto_increment  NOT NULL ,
        title Varchar (255) NOT NULL ,
        id_1  Int NOT NULL ,
        PRIMARY KEY (id )
)ENGINE=InnoDB;

ALTER TABLE Announce ADD CONSTRAINT FK_Announce_id_Administrator FOREIGN KEY (id_Administrator) REFERENCES Administrator(id);
ALTER TABLE Announce ADD CONSTRAINT FK_Announce_id_Customer FOREIGN KEY (id_Customer) REFERENCES Customer(id);
ALTER TABLE Announce ADD CONSTRAINT FK_Announce_id_Category FOREIGN KEY (id_Category) REFERENCES Category(id);
ALTER TABLE Category ADD CONSTRAINT FK_Category_id_1 FOREIGN KEY (id_1) REFERENCES Category(id);

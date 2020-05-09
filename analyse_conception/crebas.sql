/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     09/05/2020 22:18:20                          */
/*==============================================================*/


drop table if exists Abonnes;

drop table if exists Paiement;

drop table if exists Users;

/*==============================================================*/
/* Table: Abonnes                                               */
/*==============================================================*/
create table Abonnes
(
   idAbonnees           int not null,
   nom                  varchar(254),
   prenom               varchar(254),
   dateNaissance        datetime,
   professiion          varchar(254),
   sexe                 varchar(254),
   inscritLe            datetime,
   createdAt            datetime,
   updatedAt            datetime,
   photo                int,
   cin                  int,
   primary key (idAbonnees),
   key AK_idAbonnes (idAbonnees)
);

/*==============================================================*/
/* Table: Paiement                                              */
/*==============================================================*/
create table Paiement
(
   id                   int not null,
   user_id              int not null,
   idAbonnees           int not null,
   dateDe               datetime,
   dateA                datetime,
   tarifMois            numeric(8,0),
   remise               numeric(8,0),
   montant              numeric(8,0),
   createdAt            dateTime,
   updatedAt            datetime,
   typePaiement         varchar(254),
   primary key (id),
   key AK_Identifier_1 (id)
);

/*==============================================================*/
/* Table: Users                                                 */
/*==============================================================*/
create table Users
(
   id                   int not null,
   login                varchar(254),
   passe                varchar(254),
   nom                  varchar(254),
   email                varchar(254),
   role                 varchar(254),
   primary key (id),
   key AK_Identifier_1 (id)
);

alter table Paiement add constraint FK_association2 foreign key (user_id)
      references Users (id) on delete restrict on update restrict;

alter table Paiement add constraint FK_effetuerPaiement foreign key (idAbonnees)
      references Abonnes (idAbonnees) on delete restrict on update restrict;


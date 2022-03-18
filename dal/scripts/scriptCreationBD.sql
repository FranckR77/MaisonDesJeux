create table Jeu
(
    id SERIAL primary key not null,
    nom varchar(255),
    lienImage varchar(255),
    trancheAge varchar(255),
    nbPoints int
);

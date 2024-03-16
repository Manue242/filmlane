DELIMITER //

create or replace trigger vérifie_date_naissanceacteur
before insert or update on Acteur
for each row
begin
    if new.date_naiss_acteur > CURDATE() then
        SIGNAL SQLSTATE '45000'
        set MESSAGE_TEXT = 'La date de naissance ne peut pas être supérieure à la date actuelle.';
    end if;
end;

//

DELIMITER ;

DELIMITER //

create or replace trigger vérifie_date_naissancerealisateur
before insert or update on Réalisateur
for each row
begin
    if new.date_naiss_rea > CURDATE() then
        signal sqlstate '45000'
        set MESSAGE_TEXT = 'La date de naissance ne peut pas être supérieure à la date actuelle.';
    end if;
end;

//

DELIMITER ;


CREATE OR REPLACE PROCEDURE InsererUtilisateur(
    p_Id_user INT,
    p_nom_user VARCHAR2,
    p_mot_de_passe VARCHAR2,
    p_email VARCHAR2
)
AS
BEGIN
    INSERT INTO Utilisateur (Id_user, nom_user, mot_de_passe, email)
    VALUES (p_Id_user, p_nom_user, p_mot_de_passe, p_email);
    
    COMMIT; -- Confirmer la transaction
END InsererUtilisateur;
/


CREATE OR REPLACE PROCEDURE InsererParticipationDebat(
    p_Id_user INT,
    p_Id_debat INT
)
AS
BEGIN
    INSERT INTO ParticipationDebat (Id_user, Id_debat)
    VALUES (p_Id_user, p_Id_debat);
    
    COMMIT; -- Confirmer la transaction
END InsererParticipationDebat;
/


CREATE OR REPLACE PROCEDURE InsererParticipationEven(
    p_Id_even INT,
    p_Id_user INT
)
AS
BEGIN
    INSERT INTO ParticipationEven (Id_even, Id_user)
    VALUES (p_Id_even, p_Id_user);
    
    COMMIT; -- Confirmer la transaction
END InsererParticipationEven;
/
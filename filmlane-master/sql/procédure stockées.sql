
DELIMITER //

CREATE PROCEDURE InsererUtilisateur(
    IN p_Id_user INT,
    IN p_nom_user VARCHAR(255),
    IN p_mot_de_passe VARCHAR(255),
    IN p_email VARCHAR(255)
)
BEGIN
    INSERT INTO Utilisateur (Id_user, nom_user, mot_de_passe, email)
    VALUES (p_Id_user, p_nom_user, p_mot_de_passe, p_email);
END;
//

DELIMITER ;

CALL InsererUtilisateur(1, 'John', 'motdepasse', 'john@example.com');




DELIMITER //

DROP PROCEDURE IF EXISTS InsererParticipationDebat;
CREATE PROCEDURE InsererParticipationDebat(
    IN p_Id_user INT,
    IN p_Id_debat INT
)
BEGIN
    INSERT INTO ParticipationDebat (Id_user, Id_debat)
    VALUES (p_Id_user, p_Id_debat);
END;
//

DELIMITER ;

DELIMITER //

CREATE PROCEDURE InsererParticipationDebat(
    p_Id_user INT,
    p_Id_debat INT
)
BEGIN
    INSERT INTO ParticipationDebat (Id_user, Id_debat)
    VALUES (p_Id_user, p_Id_debat);
END //

DELIMITER ;


CREATE OR REPLACE PROCEDURE InsererParticipationEven(
    p_Id_even INT,
    p_Id_user INT
)
AS
BEGIN
    INSERT INTO ParticipationEven (Id_even, Id_user)
    VALUES (p_Id_even, p_Id_user);
    
    COMMIT; -- Confirmer la transaction
END //

SELECT `vardas`, `pavarde` FROM `autoriai`;


SELECT CONCAT(UPPER(`vardas`), ' ', LOWER(`pavarde`)) FROM `autoriai`
SELECT `pavadinimas`, ROUND(`kaina`) AS 'suapvalinta_kaina' FROM `knygos`


SELECT * FROM `autoriai` WHERE `vardas` = 'Jonas'
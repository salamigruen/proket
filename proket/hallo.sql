CREATE DATABASE IF NOT EXISTS uni;

USE uni;

CREATE TABLE IF NOT EXISTS Universitaeten (
    UNr INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(100) NOT NULL,
    Gruendungsjahr INT,
    Strasse VARCHAR(100),
    Hausnummer VARCHAR(20),
    PLZ VARCHAR(10),
    Stadt VARCHAR(100),
    Bundesland VARCHAR(100)
);

INSERT INTO Universitaeten (Name, Gruendungsjahr, Strasse, Hausnummer, PLZ, Stadt, Bundesland) VALUES
('Universität A', 1950, 'Musterstraße', '123', '12345', 'Musterstadt', 'Musterland'),
('Universität B', 1965, 'Beispielweg', '456', '54321', 'Beispielstadt', 'Beispielland'),
('Universität C', 1978, 'Testgasse', '789', '98765', 'Teststadt', 'Testland');

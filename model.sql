DROP TABLE IF EXISTS users CASCADE;
DROP TABLE IF EXISTS contact CASCADE;

CREATE TABLE users (
    nom VARCHAR(64) NOT NULL,
    prenom VARCHAR(64) NOT NULL,
    login VARCHAR(64) NOT NULL,
    password VARCHAR(64) NOT NULL,
    role VARCHAR(64) NOT NULL
);

CREATE TABLE contact (
    nom VARCHAR(64) NOT NULL,
    login VARCHAR(64) NOT NULL,
    subject VARCHAR(64) NOT NULL,
    message VARCHAR(300) NOT NULL
);

INSERT INTO users (nom, prenom, login, password, role) VALUES
('Guillet', 'Thomas', 'tguillet@wargame.com', 'test123', 'user'),
('Charrier', 'Clément', 'ccharrier@wargame.com', 'test123', 'user'),
('admin', 'admin', 'admin@wargame.com', 'admin123', 'admin');

INSERT INTO contact (nom, login, subject, message) VALUES
('Lionel Messi', 'messi@ballondor.com', 'Super site !', 'Le site est vraiment bien chapeau thomas pour le front'),
('Cristiano Ronaldo', 'CR7@ballondor.com', 'Super site ! mais', 'Le site est vraiment bien chapeau thomas pour le front mais je dois avouer que messi est meilleur que moi.'),
('Pionel Pessi', 'pessi@ratio.com', 'Super site mais....', 'menfou + palu + ratio');

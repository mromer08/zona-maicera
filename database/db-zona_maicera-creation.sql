DROP DATABASE IF EXISTS zona_maicera;

CREATE SCHEMA zona_maicera DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci;


USE zona_maicera;

CREATE TABLE users (
  id INT(11) NOT NULL AUTO_INCREMENT,
  name VARCHAR(50) NOT NULL,
  email VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL,
  PRIMARY KEY (id)
);


CREATE TABLE games (
  id INT(11) NOT NULL AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  description TEXT NOT NULL,
  difficulty ENUM('easy', 'normal', 'hard') NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE scores (
  id INT(11) NOT NULL AUTO_INCREMENT,
  game_id INT(11) NOT NULL,
  user_id INT(11) NOT NULL,
  total INT(3) NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (game_id) REFERENCES game(id),
  FOREIGN KEY (user_id) REFERENCES user(id)
);

CREATE TABLE questions (
  id INT(11) NOT NULL AUTO_INCREMENT,
  title VARCHAR(100) NOT NULL,
  game_id INT(11) NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (game_id) REFERENCES game(id)
);

CREATE TABLE answers (
  id INT(11) NOT NULL AUTO_INCREMENT,
  title VARCHAR(50) NOT NULL,
  question_id INT(11) NOT NULL,
  is_correct BOOLEAN NOT NULL DEFAULT FALSE,
  PRIMARY KEY (id),
  FOREIGN KEY (question_id) REFERENCES question(id)
);

-- password: 1234
INSERT INTO users (name, email, password) VALUES ('mromer', 'mromer@gmail.com', '$2y$10$7hkVNsvra84LC.CaAXmOKOWdOGteaLoBOx0bS8AevqVC3tCE50Ptu');

-- Inserta el juego
INSERT INTO games (name, description, difficulty)
VALUES ('Trivia Maíz', 'Un juego de preguntas y respuestas sobre el maíz', 'normal');

-- Obtiene el ID del juego insertado
SET @game_id = 1;

-- Inserta las preguntas y respuestas
INSERT INTO questions (title, game_id)
VALUES ('¿En qué continente se originó el maíz?', @game_id);
SET @question_id1 = LAST_INSERT_ID();
INSERT INTO answers (title, question_id, is_correct)
VALUES ('Asia', @question_id1, 0);
INSERT INTO answers (title, question_id, is_correct)
VALUES ('América', @question_id1, 1);
INSERT INTO answers (title, question_id, is_correct)
VALUES ('África', @question_id1, 0);

INSERT INTO questions (title, game_id)
VALUES ('¿Cuál es el nombre científico del maíz?', @game_id);
SET @question_id2 = LAST_INSERT_ID();
INSERT INTO answers (title, question_id, is_correct)
VALUES ('Zea mays', @question_id2, 1);
INSERT INTO answers (title, question_id, is_correct)
VALUES ('Triticum aestivum', @question_id2, 0);
INSERT INTO answers (title, question_id, is_correct)
VALUES ('Hordeum vulgare', @question_id2, 0);

INSERT INTO questions (title, game_id)
VALUES ('¿Qué es el maíz?', @game_id);
SET @question_id3 = LAST_INSERT_ID();
INSERT INTO answers (title, question_id, is_correct)
VALUES ('Un cereal', @question_id3, 1);
INSERT INTO answers (title, question_id, is_correct)
VALUES ('Una leguminosa', @question_id3, 0);
INSERT INTO answers (title, question_id, is_correct)
VALUES ('Una fruta', @question_id3, 0);

INSERT INTO questions (title, game_id)
VALUES ('¿En qué países se consume más maíz?', @game_id);
SET @question_id4 = LAST_INSERT_ID();
INSERT INTO answers (title, question_id, is_correct)
VALUES ('Estados Unidos, China y Rusia', @question_id4, 0);
INSERT INTO answers (title, question_id, is_correct)
VALUES ('México, Guatemala y Sudáfrica', @question_id4, 1);
INSERT INTO answers (title, question_id, is_correct)
VALUES ('India, Brasil y Argentina', @question_id4, 0);

INSERT INTO questions (title, game_id)
VALUES ('¿Cuántos años hace que se cultivó el maíz por primera vez?', @game_id);
SET @question_id4 = LAST_INSERT_ID();
INSERT INTO answers (title, question_id, is_correct)
VALUES ('100 años', @question_id4, 0);
INSERT INTO answers (title, question_id, is_correct)
VALUES ('1,000 años', @question_id4, 0);
INSERT INTO answers (title, question_id, is_correct)
VALUES ('10.000 años', @question_id4, 1);

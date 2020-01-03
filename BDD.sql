

CREATE TABLE MOTOR (
                id_motor INT AUTO_INCREMENT NOT NULL,
                fecha DATETIME NOT NULL,
                encendido INT NOT NULL,
                PRIMARY KEY (id_motor)
);


CREATE TABLE TEMPERATURA (
                id_temperatura INT AUTO_INCREMENT NOT NULL,
                fecha DATETIME NOT NULL,
                grado INT NOT NULL,
                PRIMARY KEY (id_temperatura)
);

-- INSERT INTO temperatura (fecha,grado) VALUES(CURRENT_TIMESTAMP(),22)
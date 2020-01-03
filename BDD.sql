
CREATE TABLE MOTOR (
                id_motor INT AUTO_INCREMENT NOT NULL,
                fecha DATE NOT NULL,
                encendido INT NOT NULL,
                PRIMARY KEY (id_motor)
);


CREATE TABLE TEMPERATURA (
                id_temperatura INT AUTO_INCREMENT NOT NULL,
                fecha DATE NOT NULL,
                grado DECIMAL(2,2) NOT NULL,
                PRIMARY KEY (id_temperatura)
);



CREATE TABLE PRESION (
                id_presion INT AUTO_INCREMENT NOT NULL,
                fecha DATETIME NOT NULL,
                presion INT NOT NULL,
                PRIMARY KEY (id_presion)
);


CREATE TABLE HUMEDAD (
                id_humedad INT AUTO_INCREMENT NOT NULL,
                fecha DATETIME NOT NULL,
                humedad INT NOT NULL,
                PRIMARY KEY (id_humedad)
);


CREATE TABLE TEMPERATURA (
                id_temperatura INT AUTO_INCREMENT NOT NULL,
                fecha DATETIME NOT NULL,
                temperatura INT NOT NULL,
                PRIMARY KEY (id_temperatura)
);
-- INSERT INTO temperatura (fecha,grado) VALUES(CURRENT_TIMESTAMP(),22)
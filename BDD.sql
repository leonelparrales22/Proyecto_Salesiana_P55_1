

CREATE TABLE ACTIVADORES (
                id_activador INT AUTO_INCREMENT NOT NULL,
                nombre VARCHAR(20) NOT NULL,
                estado BOOLEAN NOT NULL,
                PRIMARY KEY (id_activador)
);

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


INSERT INTO temperatura (fecha,temperatura) VALUES(CURRENT_TIMESTAMP(),22);
INSERT INTO temperatura (fecha,temperatura) VALUES(CURRENT_TIMESTAMP(),23);
INSERT INTO temperatura (fecha,temperatura) VALUES(CURRENT_TIMESTAMP(),24);
INSERT INTO temperatura (fecha,temperatura) VALUES(CURRENT_TIMESTAMP(),25);
INSERT INTO temperatura (fecha,temperatura) VALUES(CURRENT_TIMESTAMP(),26);
INSERT INTO temperatura (fecha,temperatura) VALUES(CURRENT_TIMESTAMP(),27);
INSERT INTO temperatura (fecha,temperatura) VALUES(CURRENT_TIMESTAMP(),28);
INSERT INTO temperatura (fecha,temperatura) VALUES(CURRENT_TIMESTAMP(),27);
INSERT INTO temperatura (fecha,temperatura) VALUES(CURRENT_TIMESTAMP(),26);
INSERT INTO temperatura (fecha,temperatura) VALUES(CURRENT_TIMESTAMP(),25);
INSERT INTO temperatura (fecha,temperatura) VALUES(CURRENT_TIMESTAMP(),24);
INSERT INTO temperatura (fecha,temperatura) VALUES(CURRENT_TIMESTAMP(),23);
INSERT INTO temperatura (fecha,temperatura) VALUES(CURRENT_TIMESTAMP(),18);
INSERT INTO temperatura (fecha,temperatura) VALUES(CURRENT_TIMESTAMP(),17);
INSERT INTO temperatura (fecha,temperatura) VALUES(CURRENT_TIMESTAMP(),22);

INSERT INTO presion (fecha,presion) VALUES(CURRENT_TIMESTAMP(),22);
INSERT INTO presion (fecha,presion) VALUES(CURRENT_TIMESTAMP(),23);
INSERT INTO presion (fecha,presion) VALUES(CURRENT_TIMESTAMP(),24);
INSERT INTO presion (fecha,presion) VALUES(CURRENT_TIMESTAMP(),25);
INSERT INTO presion (fecha,presion) VALUES(CURRENT_TIMESTAMP(),26);
INSERT INTO presion (fecha,presion) VALUES(CURRENT_TIMESTAMP(),27);
INSERT INTO presion (fecha,presion) VALUES(CURRENT_TIMESTAMP(),28);
INSERT INTO presion (fecha,presion) VALUES(CURRENT_TIMESTAMP(),27);
INSERT INTO presion (fecha,presion) VALUES(CURRENT_TIMESTAMP(),26);
INSERT INTO presion (fecha,presion) VALUES(CURRENT_TIMESTAMP(),25);
INSERT INTO presion (fecha,presion) VALUES(CURRENT_TIMESTAMP(),24);
INSERT INTO presion (fecha,presion) VALUES(CURRENT_TIMESTAMP(),23);
INSERT INTO presion (fecha,presion) VALUES(CURRENT_TIMESTAMP(),18);
INSERT INTO presion (fecha,presion) VALUES(CURRENT_TIMESTAMP(),17);
INSERT INTO presion (fecha,presion) VALUES(CURRENT_TIMESTAMP(),22);

INSERT INTO humedad (fecha,humedad) VALUES(CURRENT_TIMESTAMP(),22);
INSERT INTO humedad (fecha,humedad) VALUES(CURRENT_TIMESTAMP(),23);
INSERT INTO humedad (fecha,humedad) VALUES(CURRENT_TIMESTAMP(),24);
INSERT INTO humedad (fecha,humedad) VALUES(CURRENT_TIMESTAMP(),25);
INSERT INTO humedad (fecha,humedad) VALUES(CURRENT_TIMESTAMP(),26);
INSERT INTO humedad (fecha,humedad) VALUES(CURRENT_TIMESTAMP(),27);
INSERT INTO humedad (fecha,humedad) VALUES(CURRENT_TIMESTAMP(),28);
INSERT INTO humedad (fecha,humedad) VALUES(CURRENT_TIMESTAMP(),27);
INSERT INTO humedad (fecha,humedad) VALUES(CURRENT_TIMESTAMP(),26);
INSERT INTO humedad (fecha,humedad) VALUES(CURRENT_TIMESTAMP(),25);
INSERT INTO humedad (fecha,humedad) VALUES(CURRENT_TIMESTAMP(),24);
INSERT INTO humedad (fecha,humedad) VALUES(CURRENT_TIMESTAMP(),23);
INSERT INTO humedad (fecha,humedad) VALUES(CURRENT_TIMESTAMP(),18);
INSERT INTO humedad (fecha,humedad) VALUES(CURRENT_TIMESTAMP(),17);
INSERT INTO humedad (fecha,humedad) VALUES(CURRENT_TIMESTAMP(),22);
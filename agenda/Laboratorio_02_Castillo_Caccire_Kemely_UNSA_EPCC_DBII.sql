
CREATE TABLE contacto (
    id int NOT NULL AUTO_INCREMENT ,
    nombre varchar(50) NOT NULL,
    apellidos varchar(50) NOT NULL,
    fecha date NOT NULL,
    domicilio varchar(50) NULL,
    primary key(id)
);

CREATE TABLE email (
    ide int NOT NULL,
    email varchar(50) NOT NULL UNIQUE,
    tipoe varchar(20) NOT NULL,
    CONSTRAINT FOREIGN KEY (ide) REFERENCES contacto(id)
    ON DELETE CASCADE
    ON UPDATE CASCADE
);

CREATE TABLE telefono (
    idt int NOT NULL,
    telefono int NOT NULL,
    tipot varchar(20) NOT NULL,
    CONSTRAINT FOREIGN KEY (idt) REFERENCES contacto(id)
    ON DELETE CASCADE
    ON UPDATE CASCADE
);

INSERT INTO contacto (id, nombre,apellidos,fecha,domicilio) VALUES 
('1', 'Antonio','Arjona','1970-06-10','CALLE AGUSTIN LARA NO. 69-B'),
('2', 'Carlota','Cerezo','1945-05-01','AV. INDEPENDENCIA NO. 241'),
('3', 'Laura','Lopez','1983-03-17','CALLE ALDAMA NO 156'),
('4', 'Pedro','Perez','1975-09-30','AV. JESUS CARRANZA NO. 991');

INSERT INTO contacto (nombre,apellidos,fecha,domicilio)
VALUES ('Lars','Monsen','2000-10-17','CALLE BENITO JUAREZ NO.495');

INSERT INTO contacto (nombre,apellidos,fecha,domicilio)
VALUES ('María','Alvarez','1995-11-11','AV. 20 DE NOVIEMBRE NO 1320');

INSERT INTO telefono (idt,telefono,tipot)VALUES
('1','611111111','Trabajo fijo'),
('1','931111111','Particular móvil'),
('3','913333333','Particular fijo'),
('4','913333333','Particular fijo'),
('4','644444444','Trabajo móvil');


INSERT INTO email (ide,email,tipoe)VALUES
('1','a@hotmail.com','Particular'),
('1','a@gmail.com','Trabajo'),
('2','c@hotmail.com','Particular'),
('3','l@gmail.com','Trabajo');


CREATE TABLE usuarios (
    id integer PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    apellido VARCHAR(255) NOT NULL,
    fecha_nacimiento DATE NOT NULL,
    salario_basico float NOT NULL
);

CREATE TYPE sueldos AS(
    id2 INTEGER PRIMARY KEY,
    nombre2 VARCHAR(255) NOT NULL,
    apellido2 VARCHAR(255) NOT NULL,
    fecha_nacimiento2 DATE NOT NULL,
    salario_basico2 float NOT NULL
);

CREATE OR REPLACE FUNCTION insertarUsuarioCondicion(integer, varchar, varchar, date, float)returns varchar AS $$
    DECLARE
    salario_basico float;
    BEGIN   

    salario_basico := $5;

    if salario_basico > 1000 THEN
    insert into usuarios values($1,$2,$3,$4, $5);
    INSERT INTO sueldos (id2, nombre2, apellido2, fecha_nacimiento2, salario_basico2)
    VALUES ($1, $2, $3, $4, $5);
    return 'ok';
    END IF;
    END;
$$LANGUAGE plpgsql;

'Jhon','Garcia', '2008-05-07', '200'




SELECT e.id_encuentro, t.nombres, t.apellidos, e.ten_id_tenista, e.ten_id_tenista2 FROM encuentros e join tenistas t on t.id_tenista = e.id_tenista;


CREATE VIEW userfaltas AS
select t.nombres, 


insert into Tenistas (id_tenista, id_entrenador, id_ciudad, nombres, apellidos, fecha_nacimiento, identificacion)
 values ('TTTT', 'EN03', 'CI01', 'Santiago', 'Giraldo', '27/11/1987', 1105738282);



SELECT e.fase, t1.nombres AS nomb_ten1, t1.apellidos AS apel_ten1, t2.nombres AS nomb_ten2, 
       t2.apellidos AS apel_ten2, c.nomb_cancha AS cancha, e.duracion, e.fecha, 
       t3.nombres AS nomb_ganador, t3.apellidos AS apel_ganador, p1.set AS puntos_tenista1, p2.set AS puntos_tenista2
FROM encuentros e
JOIN tenistas t1 ON e.ten_id_tenista = t1.id_tenista
JOIN tenistas t2 ON e.ten_id_tenista2 = t2.id_tenista
JOIN tenistas t3 ON e.id_tenista = t3.id_tenista
JOIN canchas c ON e.id_cancha = c.id_cancha
JOIN puntuacion p1 ON e.id_encuentro = p1.id_encuentro and t1.id_tenista = p1.id_tenista
JOIN puntuacion p2 ON e.id_encuentro = p2.id_encuentro and t2.id_tenista = p2.id_tenista;


CREATE OR REPLACE VIEW usertenistas AS
    select nombres, apellidos, identificacion, fecha_nacimiento from tenistas;



CREATE OR REPLACE VIEW admintenistas AS
    select * from tenistas;



CREATE OR REPLACE VIEW userencuentros AS
SELECT e.fase, t1.nombres AS nomb_ten1, t1.apellidos AS apel_ten1, t2.nombres AS nomb_ten2, 
       t2.apellidos AS apel_ten2, c.nomb_cancha AS cancha, e.duracion, e.fecha, 
       t3.nombres AS nomb_ganador, t3.apellidos AS apel_ganador, p1.set AS puntos_tenista1, p2.set AS puntos_tenista2
FROM encuentros e
JOIN tenistas t1 ON e.ten_id_tenista = t1.id_tenista
JOIN tenistas t2 ON e.ten_id_tenista2 = t2.id_tenista
JOIN tenistas t3 ON e.id_tenista = t3.id_tenista
JOIN canchas c ON e.id_cancha = c.id_cancha
JOIN puntuacion p1 ON e.id_encuentro = p1.id_encuentro and t1.id_tenista = p1.id_tenista
JOIN puntuacion p2 ON e.id_encuentro = p2.id_encuentro and t2.id_tenista = p2.id_tenista;
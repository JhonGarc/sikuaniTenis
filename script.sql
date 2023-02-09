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



update tenistas set nombres = "Luis" where nombres = "Juan"; 



SELECT ROW_NUMBER() OVER (ORDER BY COUNT(t.id_tenista) DESC) AS ranking, c.nomb_ciudad,
COUNT(t.id_tenista) AS cantidad_tenistas
FROM ciudades c
JOIN tenistas t ON c.id_ciudad = t.id_ciudad
GROUP BY c.nomb_ciudad
ORDER BY cantidad_tenistas DESC;




//mayor ganador

create view mayorganador as
SELECT row_number() OVER (ORDER BY SUM(CASE WHEN t.id_tenista = e.id_tenista THEN 1 ELSE 0 END) DESC) as ranking,
       concat(t.nombres, ' ', t.apellidos) AS tenista,
       t.identificacion,
       SUM(CASE WHEN t.id_tenista = e.id_tenista THEN 1 ELSE 0 END) as victorias
FROM tenistas t
LEFT JOIN encuentros e
  ON t.id_tenista = e.ten_id_tenista OR t.id_tenista = e.ten_id_tenista2
GROUP BY t.id_tenista, tenista, t.identificacion;


//jugador mas sancionado


SELECT row_number() OVER (ORDER BY count(m.id_tenista) DESC) AS puesto,
       concat(t.nombres, ' ', t.apellidos) AS tenista, COUNT(s.nomb_sancion) AS cantidad_sanciones
FROM tenistas t
LEFT JOIN multa m ON t.id_tenista = m.id_tenista
LEFT JOIN sanciones s ON m.id_sancion = s.id_sancion
GROUP BY tenista
ORDER BY cantidad_sanciones DESC;


//mayor puntuacion tenista
create view mayorpuntuaciontenista as
SELECT row_number() OVER (ORDER BY sum(cast(set as integer)) DESC) AS puesto, 
concat(nombres, ' ', apellidos) AS tenista, date_part('year', age(fecha_nacimiento)) AS edad, sum(cast(set as integer)) as puntuacion_total
FROM tenistas t
JOIN puntuacion p ON t.id_tenista = p.id_tenista
GROUP BY nombres, apellidos, edad, fecha_nacimiento;



create view
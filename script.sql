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
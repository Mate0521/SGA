-- ============================
-- INSERTS DEPARTAMENTO
-- ============================
INSERT INTO departamento (Nombre_Departamento) VALUES
('Ciencias Básicas'),
('Ingeniería'),
('Humanidades'),
('Ciencias Económicas');

-- ============================
-- INSERTS AREA_CON
-- ============================
INSERT INTO area_con (Id_Departamento, Nombre_Area) VALUES
(1, 'Matemáticas'),
(1, 'Física'),
(2, 'Sistemas'),
(2, 'Electrónica'),
(3, 'Psicología'),
(4, 'Administración');

-- ============================
-- INSERTS CARRERA
-- ============================
INSERT INTO carrera (Nombre_Carrera) VALUES
('Ingeniería de Sistemas'),
('Ingeniería Electrónica'),
('Administración de Empresas'),
('Psicología');

-- ============================
-- INSERTS ASIGNATURA
-- ============================
INSERT INTO asignatura (Id_Carrera, Nombre_Asignatura, duracion, Creditos_Teoria, Creditos_Laboratorio) VALUES
(1, 'Programación I', 16, 3, 1),
(1, 'Bases de Datos', 16, 3, 1),
(1, 'Cálculo Diferencial', 16, 3, 0),
(2, 'Circuitos I', 16, 3, 1),
(2, 'Electromagnetismo', 16, 3, 0),
(3, 'Introducción a la Administración', 16, 3, 0),
(3, 'Contabilidad I', 16, 3, 1),
(4, 'Psicología General', 16, 3, 0),
(4, 'Neuropsicología', 16, 3, 0);

-- ============================
-- INSERTS PROFESOR
-- ============================
INSERT INTO profesor (Id_AreaCon, Nombre_Profesor, Correo, Clave, Tel) VALUES
(3, 'Carlos Gómez', 'cgomez@uniloc.edu', MD5('1234'), '3001234567'),
(3, 'Laura Ramírez', 'lramirez@uniloc.edu', MD5('1234'), '3109876543'),
(4, 'Juan Pérez', 'jperez@uniloc.edu', MD5('1234'), '3125557788'),
(5, 'María Torres', 'mtorres@uniloc.edu', MD5('1234'), '3204448899'),
(6, 'Andrés Ríos', 'arios@uniloc.edu', MD5('1234'), '3157772233');

-- ============================
-- INSERTS CURSO
-- ============================
INSERT INTO curso (id_asignatura, lunes, martes, miercoles, jueves, viernes, sabado, domingo) VALUES
(1, '08:00:00', NULL, '08:00:00', NULL, NULL, NULL, NULL),
(2, NULL, '10:00:00', NULL, '10:00:00', NULL, NULL, NULL),
(3, '14:00:00', NULL, NULL, NULL, '14:00:00', NULL, NULL),
(4, NULL, '08:00:00', NULL, '08:00:00', NULL, NULL, NULL),
(5, '09:00:00', NULL, '09:00:00', NULL, NULL, NULL, NULL),
(6, NULL, '13:00:00', NULL, NULL, '13:00:00', NULL, NULL),
(7, '15:00:00', NULL, NULL, NULL, '15:00:00', NULL, NULL),
(8, NULL, NULL, '11:00:00', NULL, '11:00:00', NULL, NULL),
(9, '16:00:00', NULL, NULL, NULL, NULL, '09:00:00', NULL);

-- ============================
-- INSERTS CURSO_PROFESOR
-- ============================
INSERT INTO curso_profesor (id_curso, Id_Profesor) VALUES
(1, 1),
(2, 1),
(3, 2),
(4, 3),
(5, 3),
(6, 4),
(7, 5),
(8, 4),
(9, 5);

-- ============================
-- INSERTS ALUMNO
-- ============================
INSERT INTO alumno (Nombre_Alumno, Correo, Clave) VALUES
('Pedro López', 'pedro@correo.com', MD5('1234')),
('Ana Martínez', 'ana@correo.com', MD5('1234')),
('Jorge Castillo', 'jorge@correo.com', MD5('1234')),
('Luisa Fernández', 'luisa@correo.com', MD5('1234')),
('Mateo Rivas', 'mateo@correo.com', MD5('1234')),
('Daniela Suárez', 'daniela@correo.com', MD5('1234'));

-- ============================
-- INSERTS ALUMNO_HORARIO
-- ============================
INSERT INTO alumno_horario (Id_Alumno, id_curso) VALUES
(1, 1),
(1, 3),
(2, 2),
(2, 5),
(3, 1),
(3, 4),
(4, 6),
(4, 8),
(5, 9),
(6, 7);

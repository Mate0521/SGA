USE UniLocos;

-- ============================
-- 🔹 DEPARTAMENTOS
-- ============================
INSERT INTO Departamento (Nombre_Departamento) VALUES
('Ciencias Básicas'),
('Ingeniería y Tecnología'),
('Ciencias Sociales'),
('Ciencias Económicas y Administrativas');

-- ============================
-- 🔹 CARRERAS
-- ============================
INSERT INTO Carrera (Nombre_Carrera) VALUES
('Ingeniería de Sistemas'),
('Ingeniería Industrial'),
('Administración de Empresas'),
('Psicología');

-- ============================
-- 🔹 ÁREAS DE CONOCIMIENTO
-- ============================
INSERT INTO Area_Con (Id_Departamento, Nombre_Area) VALUES
(1, 'Matemáticas'),
(1, 'Física'),
(2, 'Programación'),
(2, 'Producción y Operaciones'),
(3, 'Psicología Organizacional'),
(4, 'Finanzas y Contabilidad');

-- ============================
-- 🔹 DURACIONES
-- ============================
INSERT INTO Duracion (Nombre_Duracion) VALUES
('Semestral'),
('Anual');

-- ============================
-- 🔹 ASIGNATURAS
-- ============================
INSERT INTO Asignatura (Id_Carrera, Nombre_Asignatura, Id_Duracion, Creditos_Teoria, Creditos_Laboratorio) VALUES
(1, 'Programación I', 1, 3, 2),
(1, 'Bases de Datos', 1, 3, 2),
(2, 'Gestión de la Producción', 1, 3, 1),
(2, 'Investigación de Operaciones', 1, 4, 0),
(3, 'Contabilidad Financiera', 1, 3, 1),
(3, 'Administración General', 1, 4, 0),
(4, 'Psicología del Trabajo', 1, 3, 1),
(4, 'Neuropsicología', 1, 4, 0);

-- ============================
-- 🔹 PROFESORES (claves en MD5)
-- ============================
INSERT INTO Profesor (Id_AreaCon, Nombre_Profesor, Correo, Clave, Tel) VALUES
(3, 'Carlos Pérez', 'cperez@uniloc.edu.co', MD5('1234'), '3001234567'),
(3, 'Laura Torres', 'ltorres@uniloc.edu.co', MD5('1234'), '3009876543'),
(4, 'Andrés Gómez', 'agomez@uniloc.edu.co', MD5('1234'), '3101239876'),
(6, 'María Sánchez', 'msanchez@uniloc.edu.co', MD5('1234'), '3201234567'),
(5, 'Jorge Ramírez', 'jramirez@uniloc.edu.co', MD5('1234'), '3151234567'),
(1, 'Diana López', 'dlopez@uniloc.edu.co', MD5('1234'), '3186543210');

-- ============================
-- 🔹 ASIGNATURA_PROFESOR
-- ============================
INSERT INTO Asignatura_Profesor (Id_Asignatura, Id_Profesor) VALUES
(1, 1),  -- Programación I - Carlos Pérez
(2, 2),  -- Bases de Datos - Laura Torres
(3, 3),  -- Gestión de la Producción - Andrés Gómez
(5, 4),  -- Contabilidad Financiera - María Sánchez
(7, 5),  -- Psicología del Trabajo - Jorge Ramírez
(8, 5);  -- Neuropsicología - Jorge Ramírez

-- ============================
-- 🔹 ALUMNOS (claves en MD5)
-- ============================
INSERT INTO Alumno (Nombre_Alumno, Correo, Clave) VALUES
('Juan Martínez', 'juanmartinez@correo.com', MD5('1234')),
('Ana Rodríguez', 'anarodriguez@correo.com', MD5('1234')),
('Luis Gómez', 'luisgomez@correo.com', MD5('1234')),
('Sofía Torres', 'sofiatorres@correo.com', MD5('1234')),
('Pedro Sánchez', 'pedrosanchez@correo.com', MD5('1234'));

-- ============================
-- 🔹 ALUMNO_ASIGNATURA
-- ============================
INSERT INTO Alumno_Asignatura (Id_Alumno, Id_Asignatura) VALUES
(1, 1),  -- Juan - Programación I
(1, 2),  -- Juan - Bases de Datos
(2, 3),  -- Ana - Gestión de la Producción
(3, 5),  -- Luis - Contabilidad Financiera
(4, 7),  -- Sofía - Psicología del Trabajo
(5, 8);  -- Pedro - Neuropsicología

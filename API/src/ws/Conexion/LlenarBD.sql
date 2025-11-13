USE UniLocos;

-- ========================
-- DEPARTAMENTOS
-- ========================
INSERT INTO Departamento (Nombre_Departamento) VALUES
('Ciencias Básicas'),
('Ingeniería'),
('Humanidades'),
('Administración');

-- ========================
-- CARRERAS
-- ========================
INSERT INTO Carrera (Nombre_Carrera) VALUES
('Ingeniería de Sistemas'),
('Ingeniería Electrónica'),
('Administración de Empresas'),
('Licenciatura en Matemáticas');

-- ========================
-- ÁREAS DE CONOCIMIENTO
-- ========================
INSERT INTO Area_Con (Id_Departamento, Nombre_Area) VALUES
(1, 'Matemáticas'),
(1, 'Física'),
(2, 'Programación y Software'),
(2, 'Electrónica y Telecomunicaciones'),
(3, 'Comunicación y Ética'),
(4, 'Gestión y Finanzas');

-- ========================
-- DURACIÓN
-- ========================
INSERT INTO Duracion (Nombre_Duracion) VALUES
('Semestral'),
('Trimestral'),
('Anual');

-- ========================
-- ASIGNATURAS
-- ========================
INSERT INTO Asignatura (Id_Carrera, Nombre_Asignatura, Id_Duracion, Creditos_Teoria, Creditos_Laboratorio) VALUES
(1, 'Programación I', 1, 3, 1),
(1, 'Bases de Datos', 1, 3, 2),
(1, 'Sistemas Operativos', 1, 3, 2),
(2, 'Electrónica Digital', 1, 3, 2),
(2, 'Circuitos Eléctricos', 1, 3, 1),
(3, 'Administración Financiera', 1, 3, 0),
(3, 'Contabilidad General', 1, 3, 0),
(4, 'Cálculo Diferencial', 1, 3, 1),
(4, 'Álgebra Lineal', 1, 3, 1);

-- ========================
-- PROFESORES (Contraseñas MD5)
-- ========================
-- Las contraseñas en texto plano son: 1234, 5678, 4321, etc.
INSERT INTO Profesor (Id_AreaCon, Nombre_Profesor, Correo, Clave, Foto, Tel) VALUES
(3, 'Carlos Ramírez', 'carlos.ramirez@unilocos.edu', MD5('1234'), 'foto1.jpg', '3104567890'),
(3, 'María López', 'maria.lopez@unilocos.edu', MD5('5678'), 'foto2.jpg', '3001234567'),
(4, 'Jorge Torres', 'jorge.torres@unilocos.edu', MD5('9876'), 'foto3.jpg', '3207896541'),
(6, 'Ana Martínez', 'ana.martinez@unilocos.edu', MD5('admin1'), 'foto4.jpg', '3136549872'),
(1, 'Sofía Hernández', 'sofia.hernandez@unilocos.edu', MD5('math1'), 'foto5.jpg', '3012223344');

-- ========================
-- ASIGNATURA - PROFESOR
-- ========================
INSERT INTO Asignatura_Profesor (Id_Asignatura, Id_Profesor) VALUES
(1, 1),
(2, 2),
(3, 1),
(4, 3),
(5, 3),
(6, 4),
(7, 4),
(8, 5),
(9, 5);

-- ========================
-- ALUMNOS (Contraseñas MD5)
-- ========================
INSERT INTO Alumno (Nombre_Alumno, Correo, Clave, Foto) VALUES
('Juan Pérez', 'juan.perez@unilocos.edu', MD5('alumno1'), 'alum1.jpg'),
('Laura Gómez', 'laura.gomez@unilocos.edu', MD5('alumno2'), 'alum2.jpg'),
('Andrés Díaz', 'andres.diaz@unilocos.edu', MD5('alumno3'), 'alum3.jpg'),
('Camila Suárez', 'camila.suarez@unilocos.edu', MD5('alumno4'), 'alum4.jpg'),
('Mateo Rojas', 'mateo.rojas@unilocos.edu', MD5('alumno5'), 'alum5.jpg');

-- ========================
-- ALUMNO - ASIGNATURA (HORARIO)
-- ========================
INSERT INTO Alumno_Asignatura (Id_Alumno, Id_Asignatura, Dia_Semana, Hora_Inicio, Hora_Fin, Aula) VALUES
(1, 1, 'Lunes', '08:00:00', '10:00:00', 'A101'),
(1, 2, 'Martes', '10:00:00', '12:00:00', 'A102'),
(2, 3, 'Miércoles', '08:00:00', '10:00:00', 'B201'),
(2, 4, 'Jueves', '14:00:00', '16:00:00', 'B202'),
(3, 5, 'Viernes', '09:00:00', '11:00:00', 'C101'),
(3, 6, 'Lunes', '07:00:00', '09:00:00', 'C102'),
(4, 7, 'Martes', '09:00:00', '11:00:00', 'D103'),
(4, 8, 'Miércoles', '13:00:00', '15:00:00', 'D104'),
(5, 9, 'Jueves', '07:00:00', '09:00:00', 'E105');

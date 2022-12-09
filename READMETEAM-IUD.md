Acceso de Usuarios 
1. Carlos / Estudiante => email: carlos.garcia@est.iudigital.edu.co - password: estasifue
2. Esteban / Coordinador => email: esteban.paez@est.iudigital.edu.co - password: laclavefinal

Insert MySQL

INSERT INTO `ea4`.`roles`  VALUES ('1', 'Coordinador', now(), now());
INSERT INTO `ea4`.`roles`  VALUES ('2', 'Docente', now(), now());
INSERT INTO `ea4`.`roles`  VALUES ('3', 'Estudiante', now(), now());

INSERT INTO `ea4`.`users`  VALUES ('1', 'Carlos', 'carlos.garcia@est.iudigital.edu.co', '$2y$10$ojUD66ES6qT27zbsdA7WoOcFTUgt3I1p.h9pH2l2ZweRYY4bcSUKa', '3', now(), now());

INSERT INTO `ea4`.`users`  VALUES ('2', 'Esteban', 'esteban.paez@est.iudigital.edu.co', '$2y$10$ZLKGceQl.rzAyWbr1A1IvOWHYQ3u4tpFaY7sKJs6eODTI05hFgKU6', '1', now(), now());

INSERT INTO `ea4`.`users`  VALUES ('3', 'Daniel', 'daniel.carcamo@iudigital.edu.co', '$2y$10$zx6juIFgRawLp/NwktOKz.46Dj8OPnH4dqGYs35Gu74/mADXmYehe', '2', now(), now());

INSERT INTO `ea4`.`semesters`  VALUES ('1', 'Primer Semestre', now(), now());

INSERT INTO `ea4`.`subjects`  VALUES ('1', 'Álgebra Lineal', '3', '', '8', '8', '1', now(), now());
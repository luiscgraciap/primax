SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `usuarios` (
  `id` int(4) NOT NULL,
  `usuario` text NOT NULL,
  `clave` text NOT NULL,
  `terminal` text NOT NULL,
  `rol` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `usuarios` (`id`, `usuario`, `clave`, `terminal`, `rol`)
VALUES
( 1, 'bucaramanga',   'bucaramanga',   'bucaramanga',   'Administrador'),
( 2, 'buenaventura',  'buenaventura',  'buenaventura',  'Administrador'),
( 3, 'cartagena',     'cartagena',     'cartagena',     'Administrador'),
( 4, 'cartago',       'cartago',       'cartago',       'Administrador'),
( 5, 'galapa',        'galapa',        'galapa',        'Administrador'),
( 6, 'gualanday',     'gualanday',     'gualanday',     'Administrador'),
( 7, 'la_dorada',     'la_dorada',     'la_dorada',     'Administrador'),
( 8, 'mancilla',      'mancilla',      'mancilla',      'Administrador'),
( 9, 'medellin',      'medellin',      'medellin',      'Administrador'),
(10, 'puente_aranda', 'puente_aranda', 'puente_aranda', 'Administrador'),
(11, 'yumbo',         'yumbo',         'yumbo',         'Administrador'),
(12, 'usuario',       'clave',         'bucaramanga',   'Administrador'),
(13, 'usuario',       'clave',         'buenaventura',  'Administrador'),
(14, 'usuario',       'clave',         'cartagena',     'Administrador'),
(15, 'usuario',       'clave',         'cartago',       'Administrador'),
(16, 'usuario',       'clave',         'galapa',        'Administrador'),
(17, 'usuario',       'clave',         'gualanday',     'Administrador'),
(18, 'usuario',       'clave',         'la_dorada',     'Administrador'),
(19, 'usuario',       'clave',         'mancilla',      'Administrador'),
(20, 'usuario',       'clave',         'medellin',      'Administrador'),
(21, 'usuario',       'clave',         'puente_aranda', 'Administrador'),
(22, 'usuario',       'clave',         'yumbo',         'Administrador');

ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);
COMMIT;

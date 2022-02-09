CREATE DATABASE soluci15_primax_bucaramanga;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `formulario01` (
  `consecutivo` int(4) NOT NULL,
  `fecha` text NOT NULL,
  `instalacion` text NOT NULL,
  `certificado` text NOT NULL,
  `ubicacion` text NOT NULL,
  `ats` text NOT NULL,
  `equipo` text NOT NULL,
  `fechaA` date NOT NULL,
  `horainicioA` text NOT NULL,
  `horafinalA` text NOT NULL,
  `descripcion` text NOT NULL,
  `cambio` text NOT NULL,
  `pedidocambio` text NOT NULL,
  `C1` text NOT NULL,
  `C2` text NOT NULL,
  `C3` text NOT NULL,
  `C4` text NOT NULL,
  `C5` text NOT NULL,
  `C6` text NOT NULL,
  `C7` text NOT NULL,
  `C8` text NOT NULL,
  `C9` text NOT NULL,
  `C10` text NOT NULL,
  `C11` text NOT NULL,
  `C12` text NOT NULL,
  `C13` text NOT NULL,
  `C14` text NOT NULL,
  `C15` text NOT NULL,
  `C16` text NOT NULL,
  `C17` text NOT NULL,
  `C18` text NOT NULL,
  `C19` text NOT NULL,
  `C20` text NOT NULL,
  `C21` text NOT NULL,
  `C22` text NOT NULL,
  `C23` text NOT NULL,
  `C24` text NOT NULL,
  `C25` text NOT NULL,
  `C26` text NOT NULL,
  `C27` text NOT NULL,
  `C28` text NOT NULL,
  `C29` text NOT NULL,
  `C30` text NOT NULL,
  `C31` text NOT NULL,
  `C32` text NOT NULL,
  `C33` text NOT NULL,
  `C34` text NOT NULL,
  `C35` text NOT NULL,
  `C36` text NOT NULL,
  `C37` text NOT NULL,
  `C38` text NOT NULL,
  `C39` text NOT NULL,
  `otrasactividades` text NOT NULL,
  `D1` text NOT NULL,
  `numeroD1` text NOT NULL,
  `D2` text NOT NULL,
  `numeroD2` text NOT NULL,
  `D3` text NOT NULL,
  `numeroD3` text NOT NULL,
  `D4` text NOT NULL,
  `numeroD4` text NOT NULL,
  `D5` text NOT NULL,
  `numeroD5` text NOT NULL,
  `D6` text NOT NULL,
  `numeroD6` text NOT NULL,
  `D7` text NOT NULL,
  `numeroD7` text NOT NULL,
  `D8` text NOT NULL,
  `numeroD8` text NOT NULL,
  `D9` text NOT NULL,
  `numeroD9` text NOT NULL,
  `D10` text NOT NULL,
  `numeroD10` text NOT NULL,
  `D11` text NOT NULL,
  `numeroD11` text NOT NULL,
  `D12` text NOT NULL,
  `numeroD12` text NOT NULL,
  `D13` text NOT NULL,
  `numeroD13` text NOT NULL,
  `D14` text NOT NULL,
  `numeroD14` text NOT NULL,
  `D15` text NOT NULL,
  `numeroD15` text NOT NULL,
  `D16` text NOT NULL,
  `numeroD16` text NOT NULL,
  `precauciones` text NOT NULL,
  `empleado` text NOT NULL,
  `companiacp` text NOT NULL,
  `companiact` text NOT NULL,
  `ejecutorG` text NOT NULL,
  `fechaejecG` date NOT NULL,
  `horaejecG` text NOT NULL,
  `inspectorG` text NOT NULL,
  `fechainspG` date NOT NULL,
  `horainspG` text NOT NULL,
  `docum_adic` text NOT NULL,
  `cantidad` text NOT NULL,
  `nombre1` text NOT NULL,
  `nombre2` text NOT NULL,
  `nombre3` text NOT NULL,
  `nombre4` text NOT NULL,
  `nombre5` text NOT NULL,
  `nombre6` text NOT NULL,
  `nombre7` text NOT NULL,
  `aprobadorH` text NOT NULL,
  `fechaaprobH` date NOT NULL,
  `horaaprobH` text NOT NULL,
  `emisorH` text NOT NULL,
  `fechaemisorH` date NOT NULL,
  `horaemisorH` text NOT NULL,
  `completado` text NOT NULL,
  `ejecutorI` text NOT NULL,
  `horaejecI` text NOT NULL,
  `inspectorI` text NOT NULL,
  `horainspI` text NOT NULL,
  `emisorI` text NOT NULL,
  `horaemisorI` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

ALTER TABLE `formulario01`
  ADD PRIMARY KEY (`consecutivo`);

COMMIT;

CREATE DATABASE soluci15_primax_buenaventura;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `formulario01` (
  `consecutivo` int(4) NOT NULL,
  `fecha` text NOT NULL,
  `instalacion` text NOT NULL,
  `certificado` text NOT NULL,
  `ubicacion` text NOT NULL,
  `ats` text NOT NULL,
  `equipo` text NOT NULL,
  `fechaA` date NOT NULL,
  `horainicioA` text NOT NULL,
  `horafinalA` text NOT NULL,
  `descripcion` text NOT NULL,
  `cambio` text NOT NULL,
  `pedidocambio` text NOT NULL,
  `C1` text NOT NULL,
  `C2` text NOT NULL,
  `C3` text NOT NULL,
  `C4` text NOT NULL,
  `C5` text NOT NULL,
  `C6` text NOT NULL,
  `C7` text NOT NULL,
  `C8` text NOT NULL,
  `C9` text NOT NULL,
  `C10` text NOT NULL,
  `C11` text NOT NULL,
  `C12` text NOT NULL,
  `C13` text NOT NULL,
  `C14` text NOT NULL,
  `C15` text NOT NULL,
  `C16` text NOT NULL,
  `C17` text NOT NULL,
  `C18` text NOT NULL,
  `C19` text NOT NULL,
  `C20` text NOT NULL,
  `C21` text NOT NULL,
  `C22` text NOT NULL,
  `C23` text NOT NULL,
  `C24` text NOT NULL,
  `C25` text NOT NULL,
  `C26` text NOT NULL,
  `C27` text NOT NULL,
  `C28` text NOT NULL,
  `C29` text NOT NULL,
  `C30` text NOT NULL,
  `C31` text NOT NULL,
  `C32` text NOT NULL,
  `C33` text NOT NULL,
  `C34` text NOT NULL,
  `C35` text NOT NULL,
  `C36` text NOT NULL,
  `C37` text NOT NULL,
  `C38` text NOT NULL,
  `C39` text NOT NULL,
  `otrasactividades` text NOT NULL,
  `D1` text NOT NULL,
  `numeroD1` text NOT NULL,
  `D2` text NOT NULL,
  `numeroD2` text NOT NULL,
  `D3` text NOT NULL,
  `numeroD3` text NOT NULL,
  `D4` text NOT NULL,
  `numeroD4` text NOT NULL,
  `D5` text NOT NULL,
  `numeroD5` text NOT NULL,
  `D6` text NOT NULL,
  `numeroD6` text NOT NULL,
  `D7` text NOT NULL,
  `numeroD7` text NOT NULL,
  `D8` text NOT NULL,
  `numeroD8` text NOT NULL,
  `D9` text NOT NULL,
  `numeroD9` text NOT NULL,
  `D10` text NOT NULL,
  `numeroD10` text NOT NULL,
  `D11` text NOT NULL,
  `numeroD11` text NOT NULL,
  `D12` text NOT NULL,
  `numeroD12` text NOT NULL,
  `D13` text NOT NULL,
  `numeroD13` text NOT NULL,
  `D14` text NOT NULL,
  `numeroD14` text NOT NULL,
  `D15` text NOT NULL,
  `numeroD15` text NOT NULL,
  `D16` text NOT NULL,
  `numeroD16` text NOT NULL,
  `precauciones` text NOT NULL,
  `empleado` text NOT NULL,
  `companiacp` text NOT NULL,
  `companiact` text NOT NULL,
  `ejecutorG` text NOT NULL,
  `fechaejecG` date NOT NULL,
  `horaejecG` text NOT NULL,
  `inspectorG` text NOT NULL,
  `fechainspG` date NOT NULL,
  `horainspG` text NOT NULL,
  `docum_adic` text NOT NULL,
  `cantidad` text NOT NULL,
  `nombre1` text NOT NULL,
  `nombre2` text NOT NULL,
  `nombre3` text NOT NULL,
  `nombre4` text NOT NULL,
  `nombre5` text NOT NULL,
  `nombre6` text NOT NULL,
  `nombre7` text NOT NULL,
  `aprobadorH` text NOT NULL,
  `fechaaprobH` date NOT NULL,
  `horaaprobH` text NOT NULL,
  `emisorH` text NOT NULL,
  `fechaemisorH` date NOT NULL,
  `horaemisorH` text NOT NULL,
  `completado` text NOT NULL,
  `ejecutorI` text NOT NULL,
  `horaejecI` text NOT NULL,
  `inspectorI` text NOT NULL,
  `horainspI` text NOT NULL,
  `emisorI` text NOT NULL,
  `horaemisorI` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

ALTER TABLE `formulario01`
  ADD PRIMARY KEY (`consecutivo`);

COMMIT;

CREATE DATABASE soluci15_primax_cartagena;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `formulario01` (
  `consecutivo` int(4) NOT NULL,
  `fecha` text NOT NULL,
  `instalacion` text NOT NULL,
  `certificado` text NOT NULL,
  `ubicacion` text NOT NULL,
  `ats` text NOT NULL,
  `equipo` text NOT NULL,
  `fechaA` date NOT NULL,
  `horainicioA` text NOT NULL,
  `horafinalA` text NOT NULL,
  `descripcion` text NOT NULL,
  `cambio` text NOT NULL,
  `pedidocambio` text NOT NULL,
  `C1` text NOT NULL,
  `C2` text NOT NULL,
  `C3` text NOT NULL,
  `C4` text NOT NULL,
  `C5` text NOT NULL,
  `C6` text NOT NULL,
  `C7` text NOT NULL,
  `C8` text NOT NULL,
  `C9` text NOT NULL,
  `C10` text NOT NULL,
  `C11` text NOT NULL,
  `C12` text NOT NULL,
  `C13` text NOT NULL,
  `C14` text NOT NULL,
  `C15` text NOT NULL,
  `C16` text NOT NULL,
  `C17` text NOT NULL,
  `C18` text NOT NULL,
  `C19` text NOT NULL,
  `C20` text NOT NULL,
  `C21` text NOT NULL,
  `C22` text NOT NULL,
  `C23` text NOT NULL,
  `C24` text NOT NULL,
  `C25` text NOT NULL,
  `C26` text NOT NULL,
  `C27` text NOT NULL,
  `C28` text NOT NULL,
  `C29` text NOT NULL,
  `C30` text NOT NULL,
  `C31` text NOT NULL,
  `C32` text NOT NULL,
  `C33` text NOT NULL,
  `C34` text NOT NULL,
  `C35` text NOT NULL,
  `C36` text NOT NULL,
  `C37` text NOT NULL,
  `C38` text NOT NULL,
  `C39` text NOT NULL,
  `otrasactividades` text NOT NULL,
  `D1` text NOT NULL,
  `numeroD1` text NOT NULL,
  `D2` text NOT NULL,
  `numeroD2` text NOT NULL,
  `D3` text NOT NULL,
  `numeroD3` text NOT NULL,
  `D4` text NOT NULL,
  `numeroD4` text NOT NULL,
  `D5` text NOT NULL,
  `numeroD5` text NOT NULL,
  `D6` text NOT NULL,
  `numeroD6` text NOT NULL,
  `D7` text NOT NULL,
  `numeroD7` text NOT NULL,
  `D8` text NOT NULL,
  `numeroD8` text NOT NULL,
  `D9` text NOT NULL,
  `numeroD9` text NOT NULL,
  `D10` text NOT NULL,
  `numeroD10` text NOT NULL,
  `D11` text NOT NULL,
  `numeroD11` text NOT NULL,
  `D12` text NOT NULL,
  `numeroD12` text NOT NULL,
  `D13` text NOT NULL,
  `numeroD13` text NOT NULL,
  `D14` text NOT NULL,
  `numeroD14` text NOT NULL,
  `D15` text NOT NULL,
  `numeroD15` text NOT NULL,
  `D16` text NOT NULL,
  `numeroD16` text NOT NULL,
  `precauciones` text NOT NULL,
  `empleado` text NOT NULL,
  `companiacp` text NOT NULL,
  `companiact` text NOT NULL,
  `ejecutorG` text NOT NULL,
  `fechaejecG` date NOT NULL,
  `horaejecG` text NOT NULL,
  `inspectorG` text NOT NULL,
  `fechainspG` date NOT NULL,
  `horainspG` text NOT NULL,
  `docum_adic` text NOT NULL,
  `cantidad` text NOT NULL,
  `nombre1` text NOT NULL,
  `nombre2` text NOT NULL,
  `nombre3` text NOT NULL,
  `nombre4` text NOT NULL,
  `nombre5` text NOT NULL,
  `nombre6` text NOT NULL,
  `nombre7` text NOT NULL,
  `aprobadorH` text NOT NULL,
  `fechaaprobH` date NOT NULL,
  `horaaprobH` text NOT NULL,
  `emisorH` text NOT NULL,
  `fechaemisorH` date NOT NULL,
  `horaemisorH` text NOT NULL,
  `completado` text NOT NULL,
  `ejecutorI` text NOT NULL,
  `horaejecI` text NOT NULL,
  `inspectorI` text NOT NULL,
  `horainspI` text NOT NULL,
  `emisorI` text NOT NULL,
  `horaemisorI` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

ALTER TABLE `formulario01`
  ADD PRIMARY KEY (`consecutivo`);

COMMIT;

CREATE DATABASE soluci15_primax_cartago;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `formulario01` (
  `consecutivo` int(4) NOT NULL,
  `fecha` text NOT NULL,
  `instalacion` text NOT NULL,
  `certificado` text NOT NULL,
  `ubicacion` text NOT NULL,
  `ats` text NOT NULL,
  `equipo` text NOT NULL,
  `fechaA` date NOT NULL,
  `horainicioA` text NOT NULL,
  `horafinalA` text NOT NULL,
  `descripcion` text NOT NULL,
  `cambio` text NOT NULL,
  `pedidocambio` text NOT NULL,
  `C1` text NOT NULL,
  `C2` text NOT NULL,
  `C3` text NOT NULL,
  `C4` text NOT NULL,
  `C5` text NOT NULL,
  `C6` text NOT NULL,
  `C7` text NOT NULL,
  `C8` text NOT NULL,
  `C9` text NOT NULL,
  `C10` text NOT NULL,
  `C11` text NOT NULL,
  `C12` text NOT NULL,
  `C13` text NOT NULL,
  `C14` text NOT NULL,
  `C15` text NOT NULL,
  `C16` text NOT NULL,
  `C17` text NOT NULL,
  `C18` text NOT NULL,
  `C19` text NOT NULL,
  `C20` text NOT NULL,
  `C21` text NOT NULL,
  `C22` text NOT NULL,
  `C23` text NOT NULL,
  `C24` text NOT NULL,
  `C25` text NOT NULL,
  `C26` text NOT NULL,
  `C27` text NOT NULL,
  `C28` text NOT NULL,
  `C29` text NOT NULL,
  `C30` text NOT NULL,
  `C31` text NOT NULL,
  `C32` text NOT NULL,
  `C33` text NOT NULL,
  `C34` text NOT NULL,
  `C35` text NOT NULL,
  `C36` text NOT NULL,
  `C37` text NOT NULL,
  `C38` text NOT NULL,
  `C39` text NOT NULL,
  `otrasactividades` text NOT NULL,
  `D1` text NOT NULL,
  `numeroD1` text NOT NULL,
  `D2` text NOT NULL,
  `numeroD2` text NOT NULL,
  `D3` text NOT NULL,
  `numeroD3` text NOT NULL,
  `D4` text NOT NULL,
  `numeroD4` text NOT NULL,
  `D5` text NOT NULL,
  `numeroD5` text NOT NULL,
  `D6` text NOT NULL,
  `numeroD6` text NOT NULL,
  `D7` text NOT NULL,
  `numeroD7` text NOT NULL,
  `D8` text NOT NULL,
  `numeroD8` text NOT NULL,
  `D9` text NOT NULL,
  `numeroD9` text NOT NULL,
  `D10` text NOT NULL,
  `numeroD10` text NOT NULL,
  `D11` text NOT NULL,
  `numeroD11` text NOT NULL,
  `D12` text NOT NULL,
  `numeroD12` text NOT NULL,
  `D13` text NOT NULL,
  `numeroD13` text NOT NULL,
  `D14` text NOT NULL,
  `numeroD14` text NOT NULL,
  `D15` text NOT NULL,
  `numeroD15` text NOT NULL,
  `D16` text NOT NULL,
  `numeroD16` text NOT NULL,
  `precauciones` text NOT NULL,
  `empleado` text NOT NULL,
  `companiacp` text NOT NULL,
  `companiact` text NOT NULL,
  `ejecutorG` text NOT NULL,
  `fechaejecG` date NOT NULL,
  `horaejecG` text NOT NULL,
  `inspectorG` text NOT NULL,
  `fechainspG` date NOT NULL,
  `horainspG` text NOT NULL,
  `docum_adic` text NOT NULL,
  `cantidad` text NOT NULL,
  `nombre1` text NOT NULL,
  `nombre2` text NOT NULL,
  `nombre3` text NOT NULL,
  `nombre4` text NOT NULL,
  `nombre5` text NOT NULL,
  `nombre6` text NOT NULL,
  `nombre7` text NOT NULL,
  `aprobadorH` text NOT NULL,
  `fechaaprobH` date NOT NULL,
  `horaaprobH` text NOT NULL,
  `emisorH` text NOT NULL,
  `fechaemisorH` date NOT NULL,
  `horaemisorH` text NOT NULL,
  `completado` text NOT NULL,
  `ejecutorI` text NOT NULL,
  `horaejecI` text NOT NULL,
  `inspectorI` text NOT NULL,
  `horainspI` text NOT NULL,
  `emisorI` text NOT NULL,
  `horaemisorI` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

ALTER TABLE `formulario01`
  ADD PRIMARY KEY (`consecutivo`);

COMMIT;

CREATE DATABASE soluci15_primax_galapa;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `formulario01` (
  `consecutivo` int(4) NOT NULL,
  `fecha` text NOT NULL,
  `instalacion` text NOT NULL,
  `certificado` text NOT NULL,
  `ubicacion` text NOT NULL,
  `ats` text NOT NULL,
  `equipo` text NOT NULL,
  `fechaA` date NOT NULL,
  `horainicioA` text NOT NULL,
  `horafinalA` text NOT NULL,
  `descripcion` text NOT NULL,
  `cambio` text NOT NULL,
  `pedidocambio` text NOT NULL,
  `C1` text NOT NULL,
  `C2` text NOT NULL,
  `C3` text NOT NULL,
  `C4` text NOT NULL,
  `C5` text NOT NULL,
  `C6` text NOT NULL,
  `C7` text NOT NULL,
  `C8` text NOT NULL,
  `C9` text NOT NULL,
  `C10` text NOT NULL,
  `C11` text NOT NULL,
  `C12` text NOT NULL,
  `C13` text NOT NULL,
  `C14` text NOT NULL,
  `C15` text NOT NULL,
  `C16` text NOT NULL,
  `C17` text NOT NULL,
  `C18` text NOT NULL,
  `C19` text NOT NULL,
  `C20` text NOT NULL,
  `C21` text NOT NULL,
  `C22` text NOT NULL,
  `C23` text NOT NULL,
  `C24` text NOT NULL,
  `C25` text NOT NULL,
  `C26` text NOT NULL,
  `C27` text NOT NULL,
  `C28` text NOT NULL,
  `C29` text NOT NULL,
  `C30` text NOT NULL,
  `C31` text NOT NULL,
  `C32` text NOT NULL,
  `C33` text NOT NULL,
  `C34` text NOT NULL,
  `C35` text NOT NULL,
  `C36` text NOT NULL,
  `C37` text NOT NULL,
  `C38` text NOT NULL,
  `C39` text NOT NULL,
  `otrasactividades` text NOT NULL,
  `D1` text NOT NULL,
  `numeroD1` text NOT NULL,
  `D2` text NOT NULL,
  `numeroD2` text NOT NULL,
  `D3` text NOT NULL,
  `numeroD3` text NOT NULL,
  `D4` text NOT NULL,
  `numeroD4` text NOT NULL,
  `D5` text NOT NULL,
  `numeroD5` text NOT NULL,
  `D6` text NOT NULL,
  `numeroD6` text NOT NULL,
  `D7` text NOT NULL,
  `numeroD7` text NOT NULL,
  `D8` text NOT NULL,
  `numeroD8` text NOT NULL,
  `D9` text NOT NULL,
  `numeroD9` text NOT NULL,
  `D10` text NOT NULL,
  `numeroD10` text NOT NULL,
  `D11` text NOT NULL,
  `numeroD11` text NOT NULL,
  `D12` text NOT NULL,
  `numeroD12` text NOT NULL,
  `D13` text NOT NULL,
  `numeroD13` text NOT NULL,
  `D14` text NOT NULL,
  `numeroD14` text NOT NULL,
  `D15` text NOT NULL,
  `numeroD15` text NOT NULL,
  `D16` text NOT NULL,
  `numeroD16` text NOT NULL,
  `precauciones` text NOT NULL,
  `empleado` text NOT NULL,
  `companiacp` text NOT NULL,
  `companiact` text NOT NULL,
  `ejecutorG` text NOT NULL,
  `fechaejecG` date NOT NULL,
  `horaejecG` text NOT NULL,
  `inspectorG` text NOT NULL,
  `fechainspG` date NOT NULL,
  `horainspG` text NOT NULL,
  `docum_adic` text NOT NULL,
  `cantidad` text NOT NULL,
  `nombre1` text NOT NULL,
  `nombre2` text NOT NULL,
  `nombre3` text NOT NULL,
  `nombre4` text NOT NULL,
  `nombre5` text NOT NULL,
  `nombre6` text NOT NULL,
  `nombre7` text NOT NULL,
  `aprobadorH` text NOT NULL,
  `fechaaprobH` date NOT NULL,
  `horaaprobH` text NOT NULL,
  `emisorH` text NOT NULL,
  `fechaemisorH` date NOT NULL,
  `horaemisorH` text NOT NULL,
  `completado` text NOT NULL,
  `ejecutorI` text NOT NULL,
  `horaejecI` text NOT NULL,
  `inspectorI` text NOT NULL,
  `horainspI` text NOT NULL,
  `emisorI` text NOT NULL,
  `horaemisorI` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

ALTER TABLE `formulario01`
  ADD PRIMARY KEY (`consecutivo`);

COMMIT;

CREATE DATABASE soluci15_primax_gualanday;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `formulario01` (
  `consecutivo` int(4) NOT NULL,
  `fecha` text NOT NULL,
  `instalacion` text NOT NULL,
  `certificado` text NOT NULL,
  `ubicacion` text NOT NULL,
  `ats` text NOT NULL,
  `equipo` text NOT NULL,
  `fechaA` date NOT NULL,
  `horainicioA` text NOT NULL,
  `horafinalA` text NOT NULL,
  `descripcion` text NOT NULL,
  `cambio` text NOT NULL,
  `pedidocambio` text NOT NULL,
  `C1` text NOT NULL,
  `C2` text NOT NULL,
  `C3` text NOT NULL,
  `C4` text NOT NULL,
  `C5` text NOT NULL,
  `C6` text NOT NULL,
  `C7` text NOT NULL,
  `C8` text NOT NULL,
  `C9` text NOT NULL,
  `C10` text NOT NULL,
  `C11` text NOT NULL,
  `C12` text NOT NULL,
  `C13` text NOT NULL,
  `C14` text NOT NULL,
  `C15` text NOT NULL,
  `C16` text NOT NULL,
  `C17` text NOT NULL,
  `C18` text NOT NULL,
  `C19` text NOT NULL,
  `C20` text NOT NULL,
  `C21` text NOT NULL,
  `C22` text NOT NULL,
  `C23` text NOT NULL,
  `C24` text NOT NULL,
  `C25` text NOT NULL,
  `C26` text NOT NULL,
  `C27` text NOT NULL,
  `C28` text NOT NULL,
  `C29` text NOT NULL,
  `C30` text NOT NULL,
  `C31` text NOT NULL,
  `C32` text NOT NULL,
  `C33` text NOT NULL,
  `C34` text NOT NULL,
  `C35` text NOT NULL,
  `C36` text NOT NULL,
  `C37` text NOT NULL,
  `C38` text NOT NULL,
  `C39` text NOT NULL,
  `otrasactividades` text NOT NULL,
  `D1` text NOT NULL,
  `numeroD1` text NOT NULL,
  `D2` text NOT NULL,
  `numeroD2` text NOT NULL,
  `D3` text NOT NULL,
  `numeroD3` text NOT NULL,
  `D4` text NOT NULL,
  `numeroD4` text NOT NULL,
  `D5` text NOT NULL,
  `numeroD5` text NOT NULL,
  `D6` text NOT NULL,
  `numeroD6` text NOT NULL,
  `D7` text NOT NULL,
  `numeroD7` text NOT NULL,
  `D8` text NOT NULL,
  `numeroD8` text NOT NULL,
  `D9` text NOT NULL,
  `numeroD9` text NOT NULL,
  `D10` text NOT NULL,
  `numeroD10` text NOT NULL,
  `D11` text NOT NULL,
  `numeroD11` text NOT NULL,
  `D12` text NOT NULL,
  `numeroD12` text NOT NULL,
  `D13` text NOT NULL,
  `numeroD13` text NOT NULL,
  `D14` text NOT NULL,
  `numeroD14` text NOT NULL,
  `D15` text NOT NULL,
  `numeroD15` text NOT NULL,
  `D16` text NOT NULL,
  `numeroD16` text NOT NULL,
  `precauciones` text NOT NULL,
  `empleado` text NOT NULL,
  `companiacp` text NOT NULL,
  `companiact` text NOT NULL,
  `ejecutorG` text NOT NULL,
  `fechaejecG` date NOT NULL,
  `horaejecG` text NOT NULL,
  `inspectorG` text NOT NULL,
  `fechainspG` date NOT NULL,
  `horainspG` text NOT NULL,
  `docum_adic` text NOT NULL,
  `cantidad` text NOT NULL,
  `nombre1` text NOT NULL,
  `nombre2` text NOT NULL,
  `nombre3` text NOT NULL,
  `nombre4` text NOT NULL,
  `nombre5` text NOT NULL,
  `nombre6` text NOT NULL,
  `nombre7` text NOT NULL,
  `aprobadorH` text NOT NULL,
  `fechaaprobH` date NOT NULL,
  `horaaprobH` text NOT NULL,
  `emisorH` text NOT NULL,
  `fechaemisorH` date NOT NULL,
  `horaemisorH` text NOT NULL,
  `completado` text NOT NULL,
  `ejecutorI` text NOT NULL,
  `horaejecI` text NOT NULL,
  `inspectorI` text NOT NULL,
  `horainspI` text NOT NULL,
  `emisorI` text NOT NULL,
  `horaemisorI` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

ALTER TABLE `formulario01`
  ADD PRIMARY KEY (`consecutivo`);

COMMIT;

CREATE DATABASE soluci15_primax_la_dorada;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `formulario01` (
  `consecutivo` int(4) NOT NULL,
  `fecha` text NOT NULL,
  `instalacion` text NOT NULL,
  `certificado` text NOT NULL,
  `ubicacion` text NOT NULL,
  `ats` text NOT NULL,
  `equipo` text NOT NULL,
  `fechaA` date NOT NULL,
  `horainicioA` text NOT NULL,
  `horafinalA` text NOT NULL,
  `descripcion` text NOT NULL,
  `cambio` text NOT NULL,
  `pedidocambio` text NOT NULL,
  `C1` text NOT NULL,
  `C2` text NOT NULL,
  `C3` text NOT NULL,
  `C4` text NOT NULL,
  `C5` text NOT NULL,
  `C6` text NOT NULL,
  `C7` text NOT NULL,
  `C8` text NOT NULL,
  `C9` text NOT NULL,
  `C10` text NOT NULL,
  `C11` text NOT NULL,
  `C12` text NOT NULL,
  `C13` text NOT NULL,
  `C14` text NOT NULL,
  `C15` text NOT NULL,
  `C16` text NOT NULL,
  `C17` text NOT NULL,
  `C18` text NOT NULL,
  `C19` text NOT NULL,
  `C20` text NOT NULL,
  `C21` text NOT NULL,
  `C22` text NOT NULL,
  `C23` text NOT NULL,
  `C24` text NOT NULL,
  `C25` text NOT NULL,
  `C26` text NOT NULL,
  `C27` text NOT NULL,
  `C28` text NOT NULL,
  `C29` text NOT NULL,
  `C30` text NOT NULL,
  `C31` text NOT NULL,
  `C32` text NOT NULL,
  `C33` text NOT NULL,
  `C34` text NOT NULL,
  `C35` text NOT NULL,
  `C36` text NOT NULL,
  `C37` text NOT NULL,
  `C38` text NOT NULL,
  `C39` text NOT NULL,
  `otrasactividades` text NOT NULL,
  `D1` text NOT NULL,
  `numeroD1` text NOT NULL,
  `D2` text NOT NULL,
  `numeroD2` text NOT NULL,
  `D3` text NOT NULL,
  `numeroD3` text NOT NULL,
  `D4` text NOT NULL,
  `numeroD4` text NOT NULL,
  `D5` text NOT NULL,
  `numeroD5` text NOT NULL,
  `D6` text NOT NULL,
  `numeroD6` text NOT NULL,
  `D7` text NOT NULL,
  `numeroD7` text NOT NULL,
  `D8` text NOT NULL,
  `numeroD8` text NOT NULL,
  `D9` text NOT NULL,
  `numeroD9` text NOT NULL,
  `D10` text NOT NULL,
  `numeroD10` text NOT NULL,
  `D11` text NOT NULL,
  `numeroD11` text NOT NULL,
  `D12` text NOT NULL,
  `numeroD12` text NOT NULL,
  `D13` text NOT NULL,
  `numeroD13` text NOT NULL,
  `D14` text NOT NULL,
  `numeroD14` text NOT NULL,
  `D15` text NOT NULL,
  `numeroD15` text NOT NULL,
  `D16` text NOT NULL,
  `numeroD16` text NOT NULL,
  `precauciones` text NOT NULL,
  `empleado` text NOT NULL,
  `companiacp` text NOT NULL,
  `companiact` text NOT NULL,
  `ejecutorG` text NOT NULL,
  `fechaejecG` date NOT NULL,
  `horaejecG` text NOT NULL,
  `inspectorG` text NOT NULL,
  `fechainspG` date NOT NULL,
  `horainspG` text NOT NULL,
  `docum_adic` text NOT NULL,
  `cantidad` text NOT NULL,
  `nombre1` text NOT NULL,
  `nombre2` text NOT NULL,
  `nombre3` text NOT NULL,
  `nombre4` text NOT NULL,
  `nombre5` text NOT NULL,
  `nombre6` text NOT NULL,
  `nombre7` text NOT NULL,
  `aprobadorH` text NOT NULL,
  `fechaaprobH` date NOT NULL,
  `horaaprobH` text NOT NULL,
  `emisorH` text NOT NULL,
  `fechaemisorH` date NOT NULL,
  `horaemisorH` text NOT NULL,
  `completado` text NOT NULL,
  `ejecutorI` text NOT NULL,
  `horaejecI` text NOT NULL,
  `inspectorI` text NOT NULL,
  `horainspI` text NOT NULL,
  `emisorI` text NOT NULL,
  `horaemisorI` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

ALTER TABLE `formulario01`
  ADD PRIMARY KEY (`consecutivo`);

COMMIT;

CREATE DATABASE soluci15_primax_mancilla;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `formulario01` (
  `consecutivo` int(4) NOT NULL,
  `fecha` text NOT NULL,
  `instalacion` text NOT NULL,
  `certificado` text NOT NULL,
  `ubicacion` text NOT NULL,
  `ats` text NOT NULL,
  `equipo` text NOT NULL,
  `fechaA` date NOT NULL,
  `horainicioA` text NOT NULL,
  `horafinalA` text NOT NULL,
  `descripcion` text NOT NULL,
  `cambio` text NOT NULL,
  `pedidocambio` text NOT NULL,
  `C1` text NOT NULL,
  `C2` text NOT NULL,
  `C3` text NOT NULL,
  `C4` text NOT NULL,
  `C5` text NOT NULL,
  `C6` text NOT NULL,
  `C7` text NOT NULL,
  `C8` text NOT NULL,
  `C9` text NOT NULL,
  `C10` text NOT NULL,
  `C11` text NOT NULL,
  `C12` text NOT NULL,
  `C13` text NOT NULL,
  `C14` text NOT NULL,
  `C15` text NOT NULL,
  `C16` text NOT NULL,
  `C17` text NOT NULL,
  `C18` text NOT NULL,
  `C19` text NOT NULL,
  `C20` text NOT NULL,
  `C21` text NOT NULL,
  `C22` text NOT NULL,
  `C23` text NOT NULL,
  `C24` text NOT NULL,
  `C25` text NOT NULL,
  `C26` text NOT NULL,
  `C27` text NOT NULL,
  `C28` text NOT NULL,
  `C29` text NOT NULL,
  `C30` text NOT NULL,
  `C31` text NOT NULL,
  `C32` text NOT NULL,
  `C33` text NOT NULL,
  `C34` text NOT NULL,
  `C35` text NOT NULL,
  `C36` text NOT NULL,
  `C37` text NOT NULL,
  `C38` text NOT NULL,
  `C39` text NOT NULL,
  `otrasactividades` text NOT NULL,
  `D1` text NOT NULL,
  `numeroD1` text NOT NULL,
  `D2` text NOT NULL,
  `numeroD2` text NOT NULL,
  `D3` text NOT NULL,
  `numeroD3` text NOT NULL,
  `D4` text NOT NULL,
  `numeroD4` text NOT NULL,
  `D5` text NOT NULL,
  `numeroD5` text NOT NULL,
  `D6` text NOT NULL,
  `numeroD6` text NOT NULL,
  `D7` text NOT NULL,
  `numeroD7` text NOT NULL,
  `D8` text NOT NULL,
  `numeroD8` text NOT NULL,
  `D9` text NOT NULL,
  `numeroD9` text NOT NULL,
  `D10` text NOT NULL,
  `numeroD10` text NOT NULL,
  `D11` text NOT NULL,
  `numeroD11` text NOT NULL,
  `D12` text NOT NULL,
  `numeroD12` text NOT NULL,
  `D13` text NOT NULL,
  `numeroD13` text NOT NULL,
  `D14` text NOT NULL,
  `numeroD14` text NOT NULL,
  `D15` text NOT NULL,
  `numeroD15` text NOT NULL,
  `D16` text NOT NULL,
  `numeroD16` text NOT NULL,
  `precauciones` text NOT NULL,
  `empleado` text NOT NULL,
  `companiacp` text NOT NULL,
  `companiact` text NOT NULL,
  `ejecutorG` text NOT NULL,
  `fechaejecG` date NOT NULL,
  `horaejecG` text NOT NULL,
  `inspectorG` text NOT NULL,
  `fechainspG` date NOT NULL,
  `horainspG` text NOT NULL,
  `docum_adic` text NOT NULL,
  `cantidad` text NOT NULL,
  `nombre1` text NOT NULL,
  `nombre2` text NOT NULL,
  `nombre3` text NOT NULL,
  `nombre4` text NOT NULL,
  `nombre5` text NOT NULL,
  `nombre6` text NOT NULL,
  `nombre7` text NOT NULL,
  `aprobadorH` text NOT NULL,
  `fechaaprobH` date NOT NULL,
  `horaaprobH` text NOT NULL,
  `emisorH` text NOT NULL,
  `fechaemisorH` date NOT NULL,
  `horaemisorH` text NOT NULL,
  `completado` text NOT NULL,
  `ejecutorI` text NOT NULL,
  `horaejecI` text NOT NULL,
  `inspectorI` text NOT NULL,
  `horainspI` text NOT NULL,
  `emisorI` text NOT NULL,
  `horaemisorI` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

ALTER TABLE `formulario01`
  ADD PRIMARY KEY (`consecutivo`);

COMMIT;

CREATE DATABASE soluci15_primax_medellin;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `formulario01` (
  `consecutivo` int(4) NOT NULL,
  `fecha` text NOT NULL,
  `instalacion` text NOT NULL,
  `certificado` text NOT NULL,
  `ubicacion` text NOT NULL,
  `ats` text NOT NULL,
  `equipo` text NOT NULL,
  `fechaA` date NOT NULL,
  `horainicioA` text NOT NULL,
  `horafinalA` text NOT NULL,
  `descripcion` text NOT NULL,
  `cambio` text NOT NULL,
  `pedidocambio` text NOT NULL,
  `C1` text NOT NULL,
  `C2` text NOT NULL,
  `C3` text NOT NULL,
  `C4` text NOT NULL,
  `C5` text NOT NULL,
  `C6` text NOT NULL,
  `C7` text NOT NULL,
  `C8` text NOT NULL,
  `C9` text NOT NULL,
  `C10` text NOT NULL,
  `C11` text NOT NULL,
  `C12` text NOT NULL,
  `C13` text NOT NULL,
  `C14` text NOT NULL,
  `C15` text NOT NULL,
  `C16` text NOT NULL,
  `C17` text NOT NULL,
  `C18` text NOT NULL,
  `C19` text NOT NULL,
  `C20` text NOT NULL,
  `C21` text NOT NULL,
  `C22` text NOT NULL,
  `C23` text NOT NULL,
  `C24` text NOT NULL,
  `C25` text NOT NULL,
  `C26` text NOT NULL,
  `C27` text NOT NULL,
  `C28` text NOT NULL,
  `C29` text NOT NULL,
  `C30` text NOT NULL,
  `C31` text NOT NULL,
  `C32` text NOT NULL,
  `C33` text NOT NULL,
  `C34` text NOT NULL,
  `C35` text NOT NULL,
  `C36` text NOT NULL,
  `C37` text NOT NULL,
  `C38` text NOT NULL,
  `C39` text NOT NULL,
  `otrasactividades` text NOT NULL,
  `D1` text NOT NULL,
  `numeroD1` text NOT NULL,
  `D2` text NOT NULL,
  `numeroD2` text NOT NULL,
  `D3` text NOT NULL,
  `numeroD3` text NOT NULL,
  `D4` text NOT NULL,
  `numeroD4` text NOT NULL,
  `D5` text NOT NULL,
  `numeroD5` text NOT NULL,
  `D6` text NOT NULL,
  `numeroD6` text NOT NULL,
  `D7` text NOT NULL,
  `numeroD7` text NOT NULL,
  `D8` text NOT NULL,
  `numeroD8` text NOT NULL,
  `D9` text NOT NULL,
  `numeroD9` text NOT NULL,
  `D10` text NOT NULL,
  `numeroD10` text NOT NULL,
  `D11` text NOT NULL,
  `numeroD11` text NOT NULL,
  `D12` text NOT NULL,
  `numeroD12` text NOT NULL,
  `D13` text NOT NULL,
  `numeroD13` text NOT NULL,
  `D14` text NOT NULL,
  `numeroD14` text NOT NULL,
  `D15` text NOT NULL,
  `numeroD15` text NOT NULL,
  `D16` text NOT NULL,
  `numeroD16` text NOT NULL,
  `precauciones` text NOT NULL,
  `empleado` text NOT NULL,
  `companiacp` text NOT NULL,
  `companiact` text NOT NULL,
  `ejecutorG` text NOT NULL,
  `fechaejecG` date NOT NULL,
  `horaejecG` text NOT NULL,
  `inspectorG` text NOT NULL,
  `fechainspG` date NOT NULL,
  `horainspG` text NOT NULL,
  `docum_adic` text NOT NULL,
  `cantidad` text NOT NULL,
  `nombre1` text NOT NULL,
  `nombre2` text NOT NULL,
  `nombre3` text NOT NULL,
  `nombre4` text NOT NULL,
  `nombre5` text NOT NULL,
  `nombre6` text NOT NULL,
  `nombre7` text NOT NULL,
  `aprobadorH` text NOT NULL,
  `fechaaprobH` date NOT NULL,
  `horaaprobH` text NOT NULL,
  `emisorH` text NOT NULL,
  `fechaemisorH` date NOT NULL,
  `horaemisorH` text NOT NULL,
  `completado` text NOT NULL,
  `ejecutorI` text NOT NULL,
  `horaejecI` text NOT NULL,
  `inspectorI` text NOT NULL,
  `horainspI` text NOT NULL,
  `emisorI` text NOT NULL,
  `horaemisorI` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

ALTER TABLE `formulario01`
  ADD PRIMARY KEY (`consecutivo`);

COMMIT;

CREATE DATABASE soluci15_primax_puente_aranda;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `formulario01` (
  `consecutivo` int(4) NOT NULL,
  `fecha` text NOT NULL,
  `instalacion` text NOT NULL,
  `certificado` text NOT NULL,
  `ubicacion` text NOT NULL,
  `ats` text NOT NULL,
  `equipo` text NOT NULL,
  `fechaA` date NOT NULL,
  `horainicioA` text NOT NULL,
  `horafinalA` text NOT NULL,
  `descripcion` text NOT NULL,
  `cambio` text NOT NULL,
  `pedidocambio` text NOT NULL,
  `C1` text NOT NULL,
  `C2` text NOT NULL,
  `C3` text NOT NULL,
  `C4` text NOT NULL,
  `C5` text NOT NULL,
  `C6` text NOT NULL,
  `C7` text NOT NULL,
  `C8` text NOT NULL,
  `C9` text NOT NULL,
  `C10` text NOT NULL,
  `C11` text NOT NULL,
  `C12` text NOT NULL,
  `C13` text NOT NULL,
  `C14` text NOT NULL,
  `C15` text NOT NULL,
  `C16` text NOT NULL,
  `C17` text NOT NULL,
  `C18` text NOT NULL,
  `C19` text NOT NULL,
  `C20` text NOT NULL,
  `C21` text NOT NULL,
  `C22` text NOT NULL,
  `C23` text NOT NULL,
  `C24` text NOT NULL,
  `C25` text NOT NULL,
  `C26` text NOT NULL,
  `C27` text NOT NULL,
  `C28` text NOT NULL,
  `C29` text NOT NULL,
  `C30` text NOT NULL,
  `C31` text NOT NULL,
  `C32` text NOT NULL,
  `C33` text NOT NULL,
  `C34` text NOT NULL,
  `C35` text NOT NULL,
  `C36` text NOT NULL,
  `C37` text NOT NULL,
  `C38` text NOT NULL,
  `C39` text NOT NULL,
  `otrasactividades` text NOT NULL,
  `D1` text NOT NULL,
  `numeroD1` text NOT NULL,
  `D2` text NOT NULL,
  `numeroD2` text NOT NULL,
  `D3` text NOT NULL,
  `numeroD3` text NOT NULL,
  `D4` text NOT NULL,
  `numeroD4` text NOT NULL,
  `D5` text NOT NULL,
  `numeroD5` text NOT NULL,
  `D6` text NOT NULL,
  `numeroD6` text NOT NULL,
  `D7` text NOT NULL,
  `numeroD7` text NOT NULL,
  `D8` text NOT NULL,
  `numeroD8` text NOT NULL,
  `D9` text NOT NULL,
  `numeroD9` text NOT NULL,
  `D10` text NOT NULL,
  `numeroD10` text NOT NULL,
  `D11` text NOT NULL,
  `numeroD11` text NOT NULL,
  `D12` text NOT NULL,
  `numeroD12` text NOT NULL,
  `D13` text NOT NULL,
  `numeroD13` text NOT NULL,
  `D14` text NOT NULL,
  `numeroD14` text NOT NULL,
  `D15` text NOT NULL,
  `numeroD15` text NOT NULL,
  `D16` text NOT NULL,
  `numeroD16` text NOT NULL,
  `precauciones` text NOT NULL,
  `empleado` text NOT NULL,
  `companiacp` text NOT NULL,
  `companiact` text NOT NULL,
  `ejecutorG` text NOT NULL,
  `fechaejecG` date NOT NULL,
  `horaejecG` text NOT NULL,
  `inspectorG` text NOT NULL,
  `fechainspG` date NOT NULL,
  `horainspG` text NOT NULL,
  `docum_adic` text NOT NULL,
  `cantidad` text NOT NULL,
  `nombre1` text NOT NULL,
  `nombre2` text NOT NULL,
  `nombre3` text NOT NULL,
  `nombre4` text NOT NULL,
  `nombre5` text NOT NULL,
  `nombre6` text NOT NULL,
  `nombre7` text NOT NULL,
  `aprobadorH` text NOT NULL,
  `fechaaprobH` date NOT NULL,
  `horaaprobH` text NOT NULL,
  `emisorH` text NOT NULL,
  `fechaemisorH` date NOT NULL,
  `horaemisorH` text NOT NULL,
  `completado` text NOT NULL,
  `ejecutorI` text NOT NULL,
  `horaejecI` text NOT NULL,
  `inspectorI` text NOT NULL,
  `horainspI` text NOT NULL,
  `emisorI` text NOT NULL,
  `horaemisorI` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

ALTER TABLE `formulario01`
  ADD PRIMARY KEY (`consecutivo`);

COMMIT;

CREATE DATABASE soluci15_primax_yumbo;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `formulario01` (
  `consecutivo` int(4) NOT NULL,
  `fecha` text NOT NULL,
  `instalacion` text NOT NULL,
  `certificado` text NOT NULL,
  `ubicacion` text NOT NULL,
  `ats` text NOT NULL,
  `equipo` text NOT NULL,
  `fechaA` date NOT NULL,
  `horainicioA` text NOT NULL,
  `horafinalA` text NOT NULL,
  `descripcion` text NOT NULL,
  `cambio` text NOT NULL,
  `pedidocambio` text NOT NULL,
  `C1` text NOT NULL,
  `C2` text NOT NULL,
  `C3` text NOT NULL,
  `C4` text NOT NULL,
  `C5` text NOT NULL,
  `C6` text NOT NULL,
  `C7` text NOT NULL,
  `C8` text NOT NULL,
  `C9` text NOT NULL,
  `C10` text NOT NULL,
  `C11` text NOT NULL,
  `C12` text NOT NULL,
  `C13` text NOT NULL,
  `C14` text NOT NULL,
  `C15` text NOT NULL,
  `C16` text NOT NULL,
  `C17` text NOT NULL,
  `C18` text NOT NULL,
  `C19` text NOT NULL,
  `C20` text NOT NULL,
  `C21` text NOT NULL,
  `C22` text NOT NULL,
  `C23` text NOT NULL,
  `C24` text NOT NULL,
  `C25` text NOT NULL,
  `C26` text NOT NULL,
  `C27` text NOT NULL,
  `C28` text NOT NULL,
  `C29` text NOT NULL,
  `C30` text NOT NULL,
  `C31` text NOT NULL,
  `C32` text NOT NULL,
  `C33` text NOT NULL,
  `C34` text NOT NULL,
  `C35` text NOT NULL,
  `C36` text NOT NULL,
  `C37` text NOT NULL,
  `C38` text NOT NULL,
  `C39` text NOT NULL,
  `otrasactividades` text NOT NULL,
  `D1` text NOT NULL,
  `numeroD1` text NOT NULL,
  `D2` text NOT NULL,
  `numeroD2` text NOT NULL,
  `D3` text NOT NULL,
  `numeroD3` text NOT NULL,
  `D4` text NOT NULL,
  `numeroD4` text NOT NULL,
  `D5` text NOT NULL,
  `numeroD5` text NOT NULL,
  `D6` text NOT NULL,
  `numeroD6` text NOT NULL,
  `D7` text NOT NULL,
  `numeroD7` text NOT NULL,
  `D8` text NOT NULL,
  `numeroD8` text NOT NULL,
  `D9` text NOT NULL,
  `numeroD9` text NOT NULL,
  `D10` text NOT NULL,
  `numeroD10` text NOT NULL,
  `D11` text NOT NULL,
  `numeroD11` text NOT NULL,
  `D12` text NOT NULL,
  `numeroD12` text NOT NULL,
  `D13` text NOT NULL,
  `numeroD13` text NOT NULL,
  `D14` text NOT NULL,
  `numeroD14` text NOT NULL,
  `D15` text NOT NULL,
  `numeroD15` text NOT NULL,
  `D16` text NOT NULL,
  `numeroD16` text NOT NULL,
  `precauciones` text NOT NULL,
  `empleado` text NOT NULL,
  `companiacp` text NOT NULL,
  `companiact` text NOT NULL,
  `ejecutorG` text NOT NULL,
  `fechaejecG` date NOT NULL,
  `horaejecG` text NOT NULL,
  `inspectorG` text NOT NULL,
  `fechainspG` date NOT NULL,
  `horainspG` text NOT NULL,
  `docum_adic` text NOT NULL,
  `cantidad` text NOT NULL,
  `nombre1` text NOT NULL,
  `nombre2` text NOT NULL,
  `nombre3` text NOT NULL,
  `nombre4` text NOT NULL,
  `nombre5` text NOT NULL,
  `nombre6` text NOT NULL,
  `nombre7` text NOT NULL,
  `aprobadorH` text NOT NULL,
  `fechaaprobH` date NOT NULL,
  `horaaprobH` text NOT NULL,
  `emisorH` text NOT NULL,
  `fechaemisorH` date NOT NULL,
  `horaemisorH` text NOT NULL,
  `completado` text NOT NULL,
  `ejecutorI` text NOT NULL,
  `horaejecI` text NOT NULL,
  `inspectorI` text NOT NULL,
  `horainspI` text NOT NULL,
  `emisorI` text NOT NULL,
  `horaemisorI` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

ALTER TABLE `formulario01`
  ADD PRIMARY KEY (`consecutivo`);

COMMIT;

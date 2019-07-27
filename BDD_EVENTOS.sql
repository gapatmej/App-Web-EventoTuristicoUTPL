-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.25-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para eventos_utpl
CREATE DATABASE IF NOT EXISTS `eventos_utpl` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `eventos_utpl`;

-- Volcando estructura para tabla eventos_utpl.agenda
CREATE TABLE IF NOT EXISTS `agenda` (
  `fecha_actividad` date NOT NULL,
  `actividad1` varchar(500) DEFAULT NULL,
  `actividad2` varchar(500) DEFAULT NULL,
  `actividad3` varchar(500) DEFAULT NULL,
  `actividad4` varchar(500) DEFAULT NULL,
  `actividad5` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`fecha_actividad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla eventos_utpl.agenda: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `agenda` DISABLE KEYS */;
INSERT INTO `agenda` (`fecha_actividad`, `actividad1`, `actividad2`, `actividad3`, `actividad4`, `actividad5`) VALUES
	('2017-11-14', 'Mg. Fernando Caroprese Araque - Colombia\r\nLic. Prof. Zaida Julieta Aramayo Berrios - Bolivia\r\nDr. Mauricio Abdalah Guerrieri - Brasil\r\nModeradora: Lic. Janice Ferrand Seminario', 'Cáncer ginecológico\r\nDr. Manuel Alvarez Larraondo (INEN) Perú\r\nCáncer de mama\r\nDra. Rosario Cueva Pérez - (Hospital Almenara) \r\nPerú\r\nAvances en oncología médica\r\nDr. Fernando Salas Sánchez - (EsSalud) Perú', 'Lic. Geraldina de la Serna - México\r\nLic. Montserrat De Alba Muñoz - México', 'TALLER\r\nLa risa, herramienta para la creación de ambientes \r\npropicios para la enseñanza de la ciencia en \r\ncontextos educativos formal, no formal e informal', 'TALLER\r\nElaboración de proyecto de investigación científica'),
	('2017-11-15', 'Dr. Hugo Chilo Núñez (Gastroenterólogo)\r\nDr. Gonzalo Cabrera Ramírez (traumatólogo)\r\nDr. Enrique Jara Layme (Neumólogo)\r\nModerador Dr. Luis Gutiérrez Celis', ' Dr. Modesto Montoya Zavaleta - (UNI) Perú\r\nDr. Salomón Shamosh Halabe  - (UNAM) México\r\nDr. Julio Macedo Figueroa - (UPP) Perú\r\nModerador: Ing. José Orbegoso López', 'Decrecer con equidad para la sustentabilidad: Un \r\nnuevo clima para el cambio\r\nArq. Mauricio Elio Manzoni González - Argentina\r\nEcoviviendas y aprovechamiento de servicios \r\nambientales a partir de la fungicultura urbana\r\nDr. Nelson Cervantes Forero - Colombia\r\nEcoviviendas y el arte de ensamblar edificaciones \r\ncon la naturaleza\r\nIng. Leandro Foricher Fanuelle - Argentina\r\nModeradora: Mg. Yolanda Gonzalez Gamarra', 'Lic. Valdemar Rodríguez Cayetano- Perú\r\nEcon. Guillermo Pérez Mogollón - Perú', 'Dr. Nelson René Cervantes Forero - Colombia'),
	('2017-11-16', 'Dr. Carlos Casanova Lenti - Perú\r\nDra. Ligia Casanova Tavera - Perú\r\nModerador: Dr. Germán Posadas Narro', 'Dr. Andrés Abad Mechán - Ecuador\r\nDr. Alberto Shamosh Halabe – México/Chile\r\nModerador: Dr. Salomón Shamosh Halabe', 'Mg. Fernando de Lucci Fernald\r\nMg. Emilia Ahón Olguín - Perú\r\nIng. Edgard Puentes Melo - Colombia\r\nModerador: Lic. Christian Marquina Albán', 'Neurobiología del Estrés \r\nDr. Galo Martínez Zavaleta\r\nSindrome de Burnout\r\nDra. Gloria Cueva Vergara\r\nEl estrés como pauta familiar\r\nDr. Lizardo Rodríguez Villacrés\r\nModerador: Dr. Felipe Obeso Reyes', 'La Visión Epistemológica del Dr. David Ferriz Olivares \r\nsobre las Culturas Andinas\r\nAndrés Abad Merchán – Ecuador\r\nEl Tawantinsuyu Milenario\r\nLic. Zadir Milla Euribe - Perú\r\nReflexiones sobre la enseñanza de la Historia de la \r\nAmazonía peruana\r\nLic. José Zumaita Cevallos\r\nModeradora: Lic. Verónica Ramírez Campoblanco'),
	('2017-11-17', 'Organización para la Cooperación y el \r\nDesarrollo Económico (OCDE) \r\nDr. Mariano Castro Sánchez Moreno - Perú\r\nLegislación y Protección del Científico en el \r\ncampo de los Derechos Humanos\r\nDra. Norka Moya Solis - Perú', 'Dr. Antonio Bava (Italia), Francesco Furlan \r\n(Italia),  Andrés Plasencia (Perú), Edgard \r\nPuentes (Colombia)', 'Desarrollo y diseño de un prototipo para la \r\nreducción de contaminación acústica y \r\ngeneración de energía con tecnología fractal', 'La risa, herramienta para la creación de \r\nambientes propicios para la enseñanza de la \r\nciencia en contextos educativos formal, no \r\nformal e informal', 'Uso de Chlorella Pyrenoidosa en la \r\neliminación de malos olores de aguas \r\nresiduales urbanas y determinación de \r\nproteínas');
/*!40000 ALTER TABLE `agenda` ENABLE KEYS */;

-- Volcando estructura para tabla eventos_utpl.cursos
CREATE TABLE IF NOT EXISTS `cursos` (
  `id_curso` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_curso` varchar(100) NOT NULL,
  `descripcion_curso` varchar(1000) NOT NULL,
  `costo_curso` decimal(10,0) NOT NULL,
  `imagen_curso` varchar(50) NOT NULL,
  PRIMARY KEY (`id_curso`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla eventos_utpl.cursos: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `cursos` DISABLE KEYS */;
INSERT INTO `cursos` (`id_curso`, `nombre_curso`, `descripcion_curso`, `costo_curso`, `imagen_curso`) VALUES
	(1, 'Curso de Orientación Vocacional', 'El curso de orientación vocacional busca brindar a los profesionales e interesados en este campo, herramientas cualitativas y cuantitativas concretas para optimizar su acompañamiento a estudiantes que se encuentran en la búsqueda de la mejor decisión para su futuro profesional, una vez culminado el bachillerato.', 80, '1.jpg'),
	(2, 'Fotografía Digital', 'Conocer el procedimiento de la fotografía permitir liberar de la responsabilidad de los dispositivos de captura y que el usuario asuma el control sobre la imagen. Pensar en la imagen y concebir antes del disparo, conscientes de las capacidades y los límites de un aparato del primer paso para la construcción de un mensaje y la perpetuación de un momento.', 80, '2.jpg'),
	(3, 'Derecho Tributario', 'En la actualidad, el conocimiento sobre el derecho tributario es fundamental, no obstante por la amplitud y la tecnicidad de la materia, hay que tratar y debatidos en espacios más amplios. El derecho tributario tiene varias subramas, entre las cuales destacan el derecho constitucional tributario y el derecho internacional tributario que deben ser abordados en el presente curso. Por otra parte, a partir de la vigencia de la Constitución del 2008, es fundamental conocer los cambios que pueden seguir en la política fiscal y tributaria al igual que el actuar de la Administración Tributaria dentro de un marco normativo nuevo.', 80, '3.jpg'),
	(4, 'Marketing Digital', 'El mundo digital es basto y más complicado de lo que se consideran una primera vista. Durante varios años los equipos de la comercialización y de la publicidad se enfocaron en las redes sociales como el único canal de comunicación y de la construcción digital, sin embargo el embargo está cerrado de lado lo siguiente:', 80, '4.jpg'),
	(5, 'Educar para el amor y la sexualidad', 'Educar para el amor permitir al participante tener conocimientos claros y fundamentales sobre la vida del ser humano, cada uno de sus elementos: biológicos, psicológicos, culturales, sociales, profesionales y espirituales. Propone al estudiante lo siguiente:', 80, '5.jpg');
/*!40000 ALTER TABLE `cursos` ENABLE KEYS */;

-- Volcando estructura para tabla eventos_utpl.detalle
CREATE TABLE IF NOT EXISTS `detalle` (
  `id_detalle` int(11) NOT NULL AUTO_INCREMENT,
  `id_inscripcion` int(11) NOT NULL,
  `id_taller` int(11) NOT NULL,
  `valor_unitario` float,
  `taller_descripcion` varchar(50),
  PRIMARY KEY (`id_detalle`),
  KEY `FK1_INSCRIPCION` (`id_inscripcion`),
  KEY `FK2_TALLER` (`id_taller`),
  CONSTRAINT `FK1_INSCRIPCION` FOREIGN KEY (`id_inscripcion`) REFERENCES `inscripcion` (`id_inscripcion`),
  CONSTRAINT `FK2_TALLER` FOREIGN KEY (`id_taller`) REFERENCES `talleres` (`id_taller`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla eventos_utpl.detalle: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `detalle` DISABLE KEYS */;
INSERT INTO `detalle` (`id_detalle`, `id_inscripcion`, `id_taller`, `valor_unitario`, `taller_descripcion`) VALUES
	(14, 3, 2, 25, 'Taller de Serigrafía'),
	(16, 4, 6, 25, 'Taller de Baile: Ritmos Tropicales'),
	(17, 4, 3, 25, 'Taller de Fotografía'),
	(28, 1, 1, 25, 'Taller de Acuarela');
/*!40000 ALTER TABLE `detalle` ENABLE KEYS */;

-- Volcando estructura para tabla eventos_utpl.expositores
CREATE TABLE IF NOT EXISTS `expositores` (
  `id_expositor` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_expositor` varchar(150) DEFAULT '0',
  `detalle_expositor` varchar(5000) DEFAULT '0',
  `nombre_imagen` varchar(50) DEFAULT '0',
  PRIMARY KEY (`id_expositor`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla eventos_utpl.expositores: ~19 rows (aproximadamente)
/*!40000 ALTER TABLE `expositores` DISABLE KEYS */;
INSERT INTO `expositores` (`id_expositor`, `nombre_expositor`, `detalle_expositor`, `nombre_imagen`) VALUES
	(1, 'Dra. Adriana Ocampo.', 'Geóloga planetaria colombiana. Doctora en Ciencias Planetarias por la Universidad Libre de Ámsterdam. Con más de 30 años de experiencia en exploración espacial, es actualmente la ejecutiva encargada del programa Nuevas Fronteras de la NASA, y tiene a su cargo las misiones Juno a Júpiter, Nuevos Horizontes a Plutón y OSIRIS-REx al asteroide Bennu. Fue investigadora senior de la Agencia Espacial Europea (ESA), donde efectuó investigaciones en planetología comparativa y trabajó en las misiones Expreso a Marte y Expreso a Venus. Seleccionada como una de las 50 científicas más importantes del mundo por la prestigiosa revista Discover.', 'Adriana_Ocampo.jpg'),
	(2, 'Mg. Mauricio Manzoni.', 'Arquitecto argentino. Egresado de la Facultad de Arquitectura, Diseño y Urbanismo de la Universidad de Buenos Aires, con Maestría en Desarrollo Sustentable del Foro Latinoamericano de Ciencias Ambientales y la Universidad Nacional de Lanús. Coordinador de la Red Latinoamericana de Ciudades Solidarias, Incluyentes, Saludables y Sustentables (RELAC-SISS). Miembro de la Fundación Invesciencias. Profesor universitario desde hace 25 años en diversas universidades como: Privada de Santa Cruz de la Sierra, Católica Boliviana San Pablo, de Aquino y de Morón. Fue vicepresidente de la Unión de Escuelas y Facultades de Arquitectura de América Latina (UDEFAL) - Región Andina.', 'MauricioManzoni.jpg'),
	(3, 'Arq° Ruben Pesci', 'De nacionalidad argentina, es arquitecto por la Universidad Nacional de La Plata, con posgrado en Historia y Urbanismo en la Facultad de Arquitectura de Roma, y en Proyectación Ambiental en la Universidad de Venecia. Presidente de la Fundación CEPA, es un referente en la temática ambiental en América Latina al haber desarrollado una postura innovadora sobre sustentabilidad y planificación ambiental. Consultor habitual de la Unesco y miembro de la Fundación Le Corbusier de París. Director de la Maestría en Desarrollo Sustentable del convenio entre la Universidad Nacional de Lanús y el Foro Latinoamericano de Ciencias Ambientales (Flacam).', 'RubenPesci.jpg'),
	(4, 'Ph.D. Charitha Pattiaratchi', 'Oriundo de Sri Lanka, es Licenciado en Oceanografía y Matemáticas Aplicadas, Magíster y Ph.D. en Oceanografía Costera por la Universidad de Gales. Profesor de Oceanografía Costera de la Universidad de Australia Occidental desde hace 27 años, es también líder de UWA Coastal Oceanography Group, IMOS Australian National Facility for Ocean Gliders y del proyecto Sea-Serpent. Autor de más de 300 publicaciones, entre artículos y reportes, sobre Oceanografía Costera, ha sido asesor de 45 alumnos de Ph.D. y de 140 estudiantes de honor. Creador de programas de investigación que integran la observación oceánica, el modelado numérico y la síntesis.', 'Exp_Chari.jpg'),
	(5, 'Mg. David Antelo', 'Investigador boliviano. Licenciado en Ciencias de la Ingeniería e Ingeniero Civil Industrial por la Universidad Diego Portales. Máster en Administración de Empresas por INCAE. Investigador de la Universidad Privada de Santa Cruz y Profesor Investigador Asociado de la Universidad Diego Portales. Miembro de la Academia Nacional de Ciencias de Bolivia - Filial Santa Cruz. Desde el 2006 investiga sobre las antiguas civilizaciones precolombinas junto con el equipo del Proyecto Yesusa`Iri, cuyos logros incluyen el descubrimiento y análisis de mapas precolombinos y megageoglifos en los Antis, desciframiento de la Puerta del Sol, las Líneas de Nazca y Samaipata, entre otros.', 'David_Antelo.jpg'),
	(6, 'Dr. Maurício Abdalla Guerrieri', 'De nacionalidad brasileña, es Licenciado en Filosofía por la Pontificia Universidad Católica de Minas Gerais, Magíster y Doctor en Educación por la Universidad Federal de Espíritu Santo. Profesor Asociado del Departamento de Filosofía de la Universidad Federal de Espíritu Santo. Autor de los libros El principio de cooperación: en búsqueda de una nueva racionalidad; Darwin, el sapo y la charca (con Máximo Sandín y Guillermo Agudelo); y La crisis latente del darwinismo.   ', 'Mauricio_Abdalla.jpg'),
	(7, 'Mg. Édgar Puentes.', 'Científico y músico colombiano. Ingeniero de Sonido por la Universidad de Oxford, Licenciado en Pedagogía Musical, Magíster en Educación y músico profesional. Director del Programa de Formación en Conciertos Didácticos de la Orquesta Filarmónica de Bogotá. Ha sido asesor científico en diversos proyectos como Cerebrum, desarrollado por el Dr. Rodolfo Llinás y el Dr. Roberto Amador., y expositor en los Con-cierto Cerebro, que muestran cómo se relacionan la música, el lenguaje y el pensamiento. Se ha desempeñado como catedrático y maestro en universidades como Los Andes, La Sabana, Cesa, Central, Pedagógica y Nacional de Colombia.', 'Edgar_Puentes.jpg'),
	(8, 'Biól. Fernando Caroprese.', 'Investigador colombiano. Biólogo por la Universidad Industrial de Santander (UIS) y egresado del Centro de Investigación de Excelencia CENIVAM. Investigador en bioprospección, fitoquímica, etnobotánica y sistemas productivos sustentables. ', 'Fernando_Caroprese.jpg'),
	(9, 'Psic. Gloria E. Hincapié', 'Docente e investigadora colombiana. Psicóloga especialista en Psicología Clínica por la Universidad de Antioquia. Magíster en Terapia de Pareja y Familia, y en Educación y Desarrollo Humano (Universidad de Manizales). Docente e investigadora de la Universidad Pontificia Bolivariana, la Universidad de Antioquia y la Universidad de La Sabana. Profesional del programa televisivo “Muy Femenino”. Autora de los libros Características de la pubertad, Características de la edad escolar y El extravío de la autoridad. Sus trabajos de investigación se centran en los espacios subjetivos generados en el ciberespacio, las inteligencias múltiples y la plasticidad cerebral.', 'Gloria_Hincapie.jpg'),
	(10, 'Dr. Hernando Gómez', 'Investigador colombiano. Psicólogo por la Pontificia Universidad Javeriana, con especialización en Saneamiento Ambiental y Desarrollo. Officer de la Universidad de Harvard en el Proyecto Zero. Catedrático universitario durante más de 30 años, con experiencia de investigación en temas urbanos, ambientales, megaproyectos, participación y culturas juveniles, derechos humanos y tecnologías de la información y la comunicación. Ha ocupado los siguientes cargos en la Alcaldía Mayor de Bogotá: Secretario Distrital de Desarrollo Económico, Alcalde Local de Chapinero, Director del CODICITI (Comisión Distrital de Ciencia, Tecnología e Innovación), entre otros.', 'HernandoGomez01.jpg'),
	(11, 'Prof. María Elena de Prada', 'Investigadora y profesora cubana. Licenciada en Educación (Especialidad: Historia y Ciencias Sociales) y en Filosofía. Ha cursado cerca de una veintena de estudios de posgrado. Profesora principal de Filosofía para la Medicina de la Universidad de Ciencias Médicas de Las Tunas. Asesora del área de la salud en el Consejo Asesor de las Ciencias Sociales y las Humanidades de la Academia de Ciencias de Cuba. Directora del proyecto Neurociencias, Filosofía, Arte y Medicina desde el 2012. Actualmente investiga en neuroartes en la formación del estudiante de Medicina, percepción y salud mental, epistemología medioambiental y salud.', 'Mara_Elena_de_Prada.jpg'),
	(12, 'Ph.D. Andrés Abad', 'Investigador y académico ecuatoriano. Magíster en Antropología del Desarrollo y en Administración por la Universidad del Azuay. Ph.D. en Administración (área: Los Estudios Organizacionales) por la Universidad Andina Simón Bolívar - Sede Ecuador.  Ha cursado Estudios Internacionales en la Universidad de Nueva York (NYU) y Políticas Culturales en La Maison des Cultures du Monde en París. Profesor, investigador y miembro del Comité Doctoral del Programa en Gestión Tecnológica de la Escuela Politécnica Nacional (EPN). Investigador en antropología, política cultural, gestión cultural, entre otras áreas afines.', 'Andrs_Abad.jpg'),
	(13, 'Dr. Arturo Villavicencio', 'Científico e investigador ecuatoriano. Como miembro del IPCC (Grupo Intergubernamental de Expertos sobre el Cambio Climático) compartió el Premio Nobel de la Paz en 2007. Actualmente es profesor e investigador de la Universidad Andina Simón Bolívar, Sede Ecuador. Ex rector del Instituto de Altos Estudios Nacionales (IAEN) de Ecuador. Tiene formación profesional en Matemáticas y posgrados en Física y Matemáticas por la Universidad Rusa de la Amistad de los Pueblos de Moscú, así como una Maestría y el Diploma de Estudios Avanzados en Economía de la Energía por la Université Pierre Mendes de Grenoble, Francia.', 'Arturo_Villavicencio.jpg'),
	(14, 'Mg. Carlos Huajardo', 'Docente y psicólogo peruano. Psicólogo y Máster en Ciencias de la Educación por la Universidad Nacional de San Agustín. Analista Transaccional certificado por la Asociación Latinoamericana de Análisis Transaccional. Psicoterapeuta en National Counseling Group (Virginia, EE.UU.). Miembro directivo del Departamento de Psicología de la Fundación Invesciencias, Instituto de Investigaciones y Aplicaciones Científicas y Tecnológicas, en EE.UU. Docente en maestrías de psicología clínica, medicina, educación y enfermería en Perú y Bolivia. Docente del Sistema de Relajación Neuromuscular, Emocional y Concentración Mental Ferriz-Ferrière.', 'Carlos_Huajardo.jpg'),
	(15, 'Prof. Jerome C. Glenn', 'Investigador estadounidense. Licenciado en Filosofía por la American University y Máster en Enseñanza de Ciencias Sociales - Futurología de la Antioch University of New England. Co-fundador y director ejecutivo de The Millennium Project, un think tank independiente formado por 56 nodos alrededor del mundo que producen y distribuyen estudios de prospectiva. Creador de The Futures Wheel, un método para la visualización gráfica de las futuras consecuencias directas e indirectas de un cambio o desarrollo particular. Ha sido consultor independiente del Banco Mundial, el UNDP, la UNU, la UNESCO, la FAO, el UNEP, la USAID, así como de diversos gobiernos y corporaciones.', 'Jerome_Glenn.jpg'),
	(16, 'Dra. Judith Kimerling', 'De nacionalidad estadounidense, es abogada ambientalista graduada de la Universidad de Michigan y de la Escuela de Derecho de la Universidad de Yale. Profesora de Derecho y Política Ambiental en la Universidad de la Ciudad de Nueva York, Queens College; autora del libro Crudo amazónico, que expone la realidad de la explotación petrolera en la Amazonía ecuatoriana; y asesora internacional de la alianza Ome Gompote Kiwigimoni Huaorani (Defendemos Nuestro Territorio Huaorani). Ha recibido el Premio Parker-Gentry (2007) a la Excelencia e Innovación en Conservación y Biología Ambiental, así como la Medalla Albertson (2011) en Desarrollo Sostenible.', 'Judith_Kimberling.jpg'),
	(17, 'Dr. Antonio Bava', 'De nacionalidad italiana, es graduado en Medicina y Cirugía de la Universidad de Catania. Trabaja en la Universidad de Trieste, donde ha ocupado diversos cargos directivos y ejerce la docencia desde 1977. Ha publicado más de 150 trabajos en revistas científicas, es autor de los libros Funciones del sistema nervioso y del lenguaje y Asimetrías del encéfalo humano: filogénesis y ontogénesis, así como editor del volumen Prospectivas en el estudio de los primates. Becario de la OTAN mediante el CNR (Consejo Nacional de Investigación de Italia) en 1974 y 1979.Miembro de The New York Academy of Sciences.', 'Dr.Bava_flyer.jpg'),
	(18, 'Ph.D. Claudia Storini', 'Catedrática e investigadora italiana. Licenciada en Derecho y Ciencia Política por la Universidad de Roma La Sapienza, y Ph.D. en Derecho por la Universidad de Valencia. Profesora Titular de Derecho Constitucional de la Universidad Pública de Navarra y directora del Programa Doctoral en Derecho de la Universidad Andina Simón Bolívar - Sede Ecuador. Ha obtenido el reconocimiento de Investigadora del Programa I3 (Incentivación de la Incorporación e Intensificación de la Actividad Investigadora) y trabajado en el Programa Juan de la Cierva, ambos financiados por el entonces Ministerio de Ciencia e Innovación de España.', 'Claudia_Storini.jpg'),
	(19, 'Ph.D. Francesco Furlan', 'De nacionalidad italiana, es Licenciado en Medicina y Cirugía, y Máster en Nutrición Humana por la Universidad de Estudios de Palermo, así como Ph.D. en Neurociencias por la Universidad de Trieste.Director Nacional de la Fundación Invesciencias en Italia, con sede mundial en Caracas, Venezuela.Becario de Investigación en Neurociencias de la SISSA (Escuela Internacional Superior de Estudios Avanzados) y la Universidad de Trieste sobre el Desarrollo del Sistema Nervioso Central. Investigador de las Bases Neurofisiológicas del Sistema de Relajación Neuromuscular, Emocional y de Concentración Mental Ferriz-Ferrière.', 'FrancescoFurlan.jpg');
/*!40000 ALTER TABLE `expositores` ENABLE KEYS */;

-- Volcando estructura para tabla eventos_utpl.inscripcion
CREATE TABLE IF NOT EXISTS `inscripcion` (
  `id_inscripcion` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` varchar(50) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `valor_inscripcion` float NOT NULL,
  `valor_curso` float NOT NULL,
  `valor_total` float NOT NULL,
  PRIMARY KEY (`id_inscripcion`),
  KEY `FK1_USUARIO` (`id_usuario`),
  KEY `FK2:CURSO` (`id_curso`),
  CONSTRAINT `FK1_USUARIO` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`user`),
  CONSTRAINT `FK2:CURSO` FOREIGN KEY (`id_curso`) REFERENCES `cursos` (`id_curso`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla eventos_utpl.inscripcion: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `inscripcion` DISABLE KEYS */;
INSERT INTO `inscripcion` (`id_inscripcion`, `id_usuario`, `id_curso`, `valor_inscripcion`, `valor_curso`, `valor_total`) VALUES
	(1, 'andres', 4, 50, 80, 130),
	(3, 'a', 2, 50, 81.63, 130),
	(4, 'b', 4, 50, 81.63, 130);
/*!40000 ALTER TABLE `inscripcion` ENABLE KEYS */;

-- Volcando estructura para tabla eventos_utpl.mensajes
CREATE TABLE IF NOT EXISTS `mensajes` (
  `id_mensaje` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_mensaje` varchar(50) NOT NULL DEFAULT '0',
  `telefono_mensaje` varchar(15) NOT NULL DEFAULT '0',
  `email_mensaje` varchar(50) NOT NULL DEFAULT '0',
  `asunto_mensaje` varchar(50) NOT NULL DEFAULT '0',
  `descripcion_mensaje` varchar(500) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_mensaje`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla eventos_utpl.mensajes: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `mensajes` DISABLE KEYS */;
INSERT INTO `mensajes` (`id_mensaje`, `nombre_mensaje`, `telefono_mensaje`, `email_mensaje`, `asunto_mensaje`, `descripcion_mensaje`) VALUES
	(1, 'sdasd', 'asd', 'asd@gmail.com', 'asd234 asd', 'sdasd asd asdas'),
	(2, 'asdasd adsasd', '32423423', 'asd@gmail.com', '2342 asd32a asdasdas', 'a asdas asdasa 3w ');
/*!40000 ALTER TABLE `mensajes` ENABLE KEYS */;

-- Volcando estructura para tabla eventos_utpl.noticias
CREATE TABLE IF NOT EXISTS `noticias` (
  `id_noticia` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_noticia` text NOT NULL,
  `descripcion_noticia` varchar(5000) NOT NULL,
  `nombre_imagen` varchar(100) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_noticia`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla eventos_utpl.noticias: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `noticias` DISABLE KEYS */;
INSERT INTO `noticias` (`id_noticia`, `titulo_noticia`, `descripcion_noticia`, `nombre_imagen`) VALUES
	(1, 'Una iniciativa con huella propia: Misión Idente Ecuador', 'Hablar de la Misión Idente Ecuador (MIE), es hacer alusión al reto que asumen cada año, jóvenes con vocación de servicio, que deciden abandonar su rutina y comodidad por iniciar un recorrido a través del Ecuador que les da la oportunidad de ver más allá de sí mismos para brindar ayuda a su prójimo y así constituirse en actores del cambio que anhelan.<br><br>\r\nDejando de un lado la donación de alimentos o materiales, la <strong>MIE se enfoca en una labor que trasciende al bienestar integral de una persona desde su parte espiritual y humana</strong>. De esta manera, la mayor satisfacción de los jóvenes que participan en ella, es obtener un abrazo cálido y una sonrisa sincera luego de haber compartido historias, experiencias de vida y conocimientos.\r\n<br><br>\r\nQuienes han formado parte de esta <strong>aventura de evangelización y servicio</strong>, tienen la certeza de que la <strong>huella que dejan al recorrer las comunidades vulnerables de su país</strong>, no solo <strong>genera un verdadero impacto en la vida de esas personas</strong>, sino también en su propia vida y en la de sus seres queridos.', '1.jpg'),
	(2, '¿Cómo ahorrar dinero si eres universitario?', 'El 31 de octubre de cada año se conmemora el Día Internacional del Ahorro, fecha que tiene por finalidad incentivar un cambio de hábitos y actitudes en las personas referente al uso adecuado  y oportuno del dinero.<br> <br>De acuerdo a la Encuesta Nacional de Ingresos y Gastos en Hogares Urbanos y Rurales 2011-2012 presentada por el Instituto Nacional de Estadística y Censos (INEC), se destaca que el 58,8% de la población ecuatoriana tiene capacidad de ahorro, mientras que el 41,1% registra gastos mayores a sus ingresos, lo que evidencia que aún se debe concientizar sobre los gastos que adquieren un gran número de ecuatorianos.<br> <br>\r\nEl ahorro es una parte esencial que nos centra en la realidad sobre los ingresos y egresos anuales de una familia o una persona para analizar su situación económica. Gracias a este elemento, se pueden plantear metas a futuro, cumplir sueños, prevenir un sinnúmero de inconvenientes  y mejorar nuestra calidad de vida.', '2.jpeg'),
	(3, 'Investigación universitaria busca estrategias para disminuir el índice del embarazo adolescente', 'Entre los temas emergentes a tratar en los países a nivel mundial y más aún en los latinoamericanos, se encuentra el embarazo en adolescentes, ya que en estos países el porcentaje de mujeres que se convierten en madres durante su infancia o adolescencia se ha incrementado vertiginosamente en los últimos años. <br> <br>\r\nOtro foco de preocupación es el matrimonio infantil y precoz, que en Latinoamérica y el Caribe alcanza a un 4 % de mujeres que se casan antes de los 15 años, y un cuarto de la población que se empareja antes de los 18 años (Comercio, 2017).<br> <br>\r\nActualmente, Ecuador es el tercer país de la región andina con los índices más altos de embarazo adolescente, puesto que, en los últimos 10 años, el incremento de partos de adolescentes entre 10 y 14 años fue del 78% y en adolescentes entre 15 a 19 años del 11%, según reportes del Ministerio de Salud Pública del Ecuador (MSP, 2017).<br> <br>\r\nFrente a este panorama, la Universidad Técnica Particular de Loja (UTPL) en su afán de contribuir a la sociedad desde su rol formador, ha impulsado un proyecto de investigación denominado “Factores predisponentes que influyen en el embarazo en adolescentes escolarizados en la ciudad de Loja”, a fin de conocer a profundidad esta problemática y encontrar soluciones que se puedan emprender desde la academia en vinculación con la sociedad.<br> <br>\r\nEl proyecto se impulsó al advertir “todas las consecuencias psicológicas, sociales y culturales que conlleva este tema y, sobre todo, por las características y complicaciones médicas que se pueden presentar en el embarazo adolescente”, manifiestan Ruth Maldonado y Yadira Gavilanes, docentes de la carrera de Medicina de la UTPL.<br> <br>\r\nCon la participación de cinco estudiantes de esta carrera, en meses anteriores se llevó a cabo la primera fase de la investigación, en la que analizando a 640 estudiantes de colegios públicos y privados de Loja –con edades de entre 11 y 19 años– , se determinó que entre las principales consecuencias negativas que trae consigo el embarazo en adolescentes se sitúan el abandono de los estudios por parte de las niñas que se convertirán en madres, las escasas oportunidades de trabajo y el rechazo en los hogares.<br> <br>\r\nFruto de la aplicación de encuestas y test que buscaron medir la ansiedad, el autoestima y la funcionalidad familiar, se obtuvieron los primeros resultados que evidenciaron que un gran porcentaje de las jóvenes analizadas son hijas de madres adolescentes. Adicionalmente, en términos de educación sexual, se vislumbró que todavía existe desconocimiento sobre los métodos anticonceptivos y sobre la planificación familiar.<br> <br>\r\nDesde esta perspectiva, Maldonado y Gavilanes consideran que las estrategias que las instituciones públicas han implementado en torno a la educación sexual, no han logrado disminuir los índices de embarazo adolescente en Ecuador, debido a que se han enfocado principalmente en eliminar el desconocimiento sobre el uso de anticonceptivos, dejando de lado otros factores fundamentales que inciden en esta situación, como aspectos emocionales y circunstancias familiares, sociales, culturales y económicas.<br> <br>\r\nA decir de Maldonado, “se debe tomar en cuenta que el ser humano es un individuo en el cual influyen los diferentes factores socioambientales y culturales de su entorno y, más aún, si le toca enfrentar un embarazo para el que no está preparado”.</span></p>\r\nEste proyecto de investigación implica una segunda fase, en la que se prevé emplear una metodología cualitativa para poder trabajar en conjunto con las adolescentes, los padres de familia y los docentes. El objetivo es generar acciones de prevención a través de la socialización y talleres educativos.\r\n', '3.jpg'),
	(4, 'UTPL inicia campaña de lectura masiva', 'Según los datos recogidos por el Instituto Nacional de Estadísticas y Censos INEC, realizados en el 2012 sobre el nivel de lectura en Ecuador, reveló que el 56,8% de personas no dedica tiempo a la lectura por falta de interés, el 31,7% por falta de tiempo y el 3.2% por problemas de concentración. <br><br>\r\nCon los datos mencionados, se evidencia que solamente el 27% de ecuatorianos tiene el hábito de leer y se determinó que el índice de lectura del ecuatoriano es de 0,5 libros por año; eso quiere decir que se lee la mitad de un libro en un año.<br><br>\r\nBajo esta perspectiva, la sección de Lenguas Hispánicas y Literatura del Departamento de Ciencias de la Educación, liderado por Tania Valdivieso Guerrero y Verónica Sánchez Burneo, docentes de la Universidad Técnica Particular de Loja, emprenden el proyecto “Libro Viajero” con el objetivo de realizar acciones que disminuyan los bajos índices de lectura, generando espacios para promover ese valioso hábito a través de resúmenes innovadores que despierten el interés del público.<br><br>\r\nLibro Viajero es una idea que se desarrolla mediante la difusión de resúmenes realizados por los estudiantes de la materia expresión oral y escrita de Modalidad Presencial, estos extractos serán colocados durante el segundo Festival Internacional de Artes Vivas Loja 2017, en los servicios de transporte público, así como en puntos estratégicos de la ciudad de Loja, siendo el objetivo del proyecto generar espacios de lectura en el ámbito formal y no formal (barrios y lugares públicos), para promover la valoración de la lectura y preservar el patrimonio cultural de nuestra ciudad y país.<br><br>\r\nEl proyecto está dirigido para toda la ciudadanía, en especial para niños y jóvenes, ya que las nuevas generaciones cada vez leen menos y aumenta el temor de que el hábito de la lectura desaparezca; esta iniciativa cuenta además con una versión más interactiva, en la que se puede encontrar todos los resúmenes en un repositorio digital que permite la vinculación con grupos más tecnológicos.<br><br>\r\nLibro Viajero busca la vinculación con la comunidad y despertar el interés por la lectura, a través de libros nacionales y extranjeros, dándole prioridad a las sagas que son las obras literarias que más llaman la atención de los lectores.<br><br>\r\nSi quieres conocer más o ser parte de este proyecto, visita la página <a href="http://www.utpl.edu.ec/libro-viajero">www.utpl.edu.ec/libro-viajero</a> y comienza hacer de la lectura un hábito en tu vida diaria, con la cual podrás mejorar tu escritura y tu vocabulario mediante este programa, recuerda difundir estos contenidos de interés cultural a través de todas tus redes sociales y con tus amigos.<br><br>', '4.jpg'),
	(5, '¿Un millón de dólares y el poder de la energía para transformar el mundo?', 'Sí. Aunque a primera vista parezca una pregunta de publicidad engañosa, en esta ocasión no hay nada más cierto y que ponga a todos con la mira en los siguientes párrafos para saber de qué se trata, más aún si somos de aquellos millennials innovadores, creativos, propositivos y colaborativos que buscamos generar un cambio en el mundo con nuestra acción.<br><br>\r\nResulta que Hult Prize, la competencia estudiantil más grande del mundo para impulsar el bien social a través de la creación de empresas que surjan desde la universidad, se expandió y para este 2018 ha convocado a la mayor parte de instituciones de educación superior a nivel internacional, a fin de retar a los jóvenes para que generen ideas innovadoras que puedan resolver de manera sostenible los desafíos sociales más críticos del siglo XXI.<br><br>\r\nDurante casi una década, Hult Prize ha alineado su filosofía y el planteamiento de sus retos a los Objetivos de Desarrollo Sostenible (ODS) de las Naciones Unidas, permitiéndole esto ser agente impulsor de empresas sociales que, al tiempo que buscan servir y ayudar a la humanidad, también generan una rentabilidad económica.<br><br>\r\nEl mayor beneficio de tomar acción a través de Hult Prize para cambiar el mundo con una idea de negocio innovadora y funcional, es que la iniciativa dona un millón de dólares en capital inicial al equipo ganador para ayudarle a lanzar su empresa social, global y sostenible.<br><br>\r\nEsta es la segunda ocasión que Ecuador forma parte de la competencia mundial y es el país que cuenta con la mayor cantidad de universidades inscritas –después de India– por medio de sus ‘campus director’, jóvenes innovadores y emprendedores que son responsables de organizar e implementar competencias bajo el formato de Hult Prize (inspirar – educar – competir – acelerar – escalar – conectar) dentro de sus campus universitarios, con el objetivo de lograr que los estudiantes, docentes y personal administrativo desarrollen y participen con una idea que solucione el reto de este año.<br><br>', '5.png'),
	(6, 'Academia frente a los nuevos retos económicos del Ecuador', 'Para dimensionar la realidad económica de nuestro país, se debe comprender primero que funcionamos en un sistema de interconexión comercial mundial. Es imposible concebir la idea de los desafíos económicos nacionales, presentes y futuros, sin conocer las situaciones económicas globales que influyen en gran medida en nuestro país. Cerca de cuatro quintos de las exportaciones nacionales se encuentran en la categoría de “materias primas”, es decir, bienes con escaso o ningún valor agregado en su elaboración. De ellos, cinco productos implican casi la totalidad de los ingresos por exportaciones primarias, entre los que destacan: café, banano, flores, camarón y el petróleo; lo que denota una escasa diversificación productiva.<br><br>\r\nDe acuerdo a datos del Banco Central del Ecuador, en el 2016 la economía del país se contrajo en un 1,5%, pero para este año, el panorama es favorecedor y tiene un crecimiento del 1,42% hasta diciembre. Entre las cifras positivas se encuentra a recaudación del primer cuatrimestre de este año que ascendió a 421 millones de dólares, siendo superior a lo obtenido en el mismo periodo de 2016 (4 862 millones).<br><br>\r\nSobre este análisis se percibe que aunque varios son los factores que determinan la estabilidad económica de un país, como las exportaciones e importaciones, el porcentaje del Producto Interno Bruto (PIB), la productividad y generación de empresas, y la existencia de aranceles e impuestos; otros ámbitos como la academia, generan la posibilidad de trabajar en elementos donde el diálogo y el rol de la educación permiten crea espacios para debatir temas y se propongan ideas funcionales que mejoren la eficiencia de un sector productivo, al tiempo que analizan cuáles son las políticas necesarias para que un país fluya bien económicamente.<br><br>\r\nUno de estos análisis lo asume la Universidad Técnica Particular de Loja, a través del docente Leonardo Izquierdo, Director del Área Administrativa, quien presenta los retos a los que se enfrenta el país en materia económica durante el 2017. En su opinión, “el hecho de que la agenda económica ha tomado directrices importantes con la creación de un Comité de Gestión Tributaria para lograr alianzas con el sector público y privado, nos hace entender que el endeudamiento público ecuatoriano registra el 29% del PIB, un aproximado de 30 mil millones de dólares, eso sin sumar la deuda externa y la deuda interna que bordea el 42% del PIB.<br><br>\r\nSobre el papel de la universidad en el seguimiento y análisis de la situación económica  del país, Izquierdo considera que uno de los aspectos a destacar, ahora mismo, es que el Ministro de Finanzas, sea un docente universitario y que permita la participación de las diferentes instituciones de educación superior en las decisiones para el país. “Se ha logrado tener voz en consejos consultivos, diálogos nacionales, planes de desarrollo y vinculación con la generación de políticas públicas”.<br><br>\r\nDesde la UTPL –dice Izquierdo– “hemos trabajado en planes de descentralización y esperamos que desde las universidades como la nuestra, líderes en la región sur del país, se pueda aprovechar el conocimiento que se transfiere y podamos intervenir a corto y mediano plazo”.<br><br>', '6.png');
/*!40000 ALTER TABLE `noticias` ENABLE KEYS */;

-- Volcando estructura para tabla eventos_utpl.ponencias
CREATE TABLE IF NOT EXISTS `ponencias` (
  `id_ponencia` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_ponencia` varchar(500) NOT NULL,
  `lugar_ponencia` varchar(100) NOT NULL,
  `fecha_ponencia` varchar(50) NOT NULL,
  PRIMARY KEY (`id_ponencia`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla eventos_utpl.ponencias: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `ponencias` DISABLE KEYS */;
INSERT INTO `ponencias` (`id_ponencia`, `nombre_ponencia`, `lugar_ponencia`, `fecha_ponencia`) VALUES
	(1, '13th International Congress on Thermal Analysis and Calorimetry ', 'Chia Laguna (Italia)', '12 a 19 de septiembre de 2017'),
	(2, '6th World Congress of the Bernoulli Society & 67th Anual Meeting of the Institute of Mathematical Statistics ', 'Barcelona', '26 a 31 de julio de 2017'),
	(3, 'I Jornadas de Programación y Diseño de Juegos', 'A Coruña', '9 de noviembre de 2017'),
	(4, 'Tercer Congreso Luso-Galego de Medicina Familiar e Comunitaria', 'Guimaraes (Portugal)', 'del 10 al 12 de Junio de 2018'),
	(5, 'XXIV Congreso Nacional de Estadística e Investigación Operativa', 'Almería', 'del 24 al 26 de Junio de 2017'),
	(6, '3rd conference of the International Society for Non-Parametric Statistics ', 'Avignon', '11-16 Junio 2018'),
	(7, 'Galician Seminar of Nonparametric Statistical Inference', 'Santiago de Compostela', '8-9 Junio 2018'),
	(8, 'Machine Learning Workshop Galicia 2018', 'Santiago de Compostela,', '27 de octubre de 2018');
/*!40000 ALTER TABLE `ponencias` ENABLE KEYS */;

-- Volcando estructura para tabla eventos_utpl.ponencia_expositor
CREATE TABLE IF NOT EXISTS `ponencia_expositor` (
  `id_ponencia_expositor` int(11) NOT NULL AUTO_INCREMENT,
  `id_ponencia` int(11) DEFAULT NULL,
  `id_expositor` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_ponencia_expositor`),
  KEY `FK1_PONENCIA` (`id_ponencia`),
  KEY `FK2_EXPOSITOR` (`id_expositor`),
  CONSTRAINT `FK1_PONENCIA` FOREIGN KEY (`id_ponencia`) REFERENCES `ponencias` (`id_ponencia`),
  CONSTRAINT `FK2_EXPOSITOR` FOREIGN KEY (`id_expositor`) REFERENCES `expositores` (`id_expositor`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla eventos_utpl.ponencia_expositor: ~16 rows (aproximadamente)
/*!40000 ALTER TABLE `ponencia_expositor` DISABLE KEYS */;
INSERT INTO `ponencia_expositor` (`id_ponencia_expositor`, `id_ponencia`, `id_expositor`) VALUES
	(1, 1, 2),
	(2, 1, 6),
	(3, 1, 13),
	(4, 2, 8),
	(5, 2, 1),
	(6, 3, 10),
	(7, 4, 18),
	(8, 4, 17),
	(9, 4, 15),
	(10, 5, 10),
	(11, 6, 19),
	(12, 6, 11),
	(13, 7, 15),
	(14, 8, 4),
	(15, 8, 3),
	(16, 8, 1);
/*!40000 ALTER TABLE `ponencia_expositor` ENABLE KEYS */;

-- Volcando estructura para tabla eventos_utpl.talleres
CREATE TABLE IF NOT EXISTS `talleres` (
  `id_taller` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_taller` varchar(100) NOT NULL,
  `descripcion_taller` varchar(500) NOT NULL,
  `costo_taller` decimal(10,0) NOT NULL,
  `imagen_taller` varchar(50) NOT NULL,
  PRIMARY KEY (`id_taller`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla eventos_utpl.talleres: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `talleres` DISABLE KEYS */;
INSERT INTO `talleres` (`id_taller`, `nombre_taller`, `descripcion_taller`, `costo_taller`, `imagen_taller`) VALUES
	(1, 'Taller de Acuarela', 'Los colores de acuarelas se forman con un compuesto de pigmentos secos, en polvo, mezclados con goma arábica y solubles en agua. Los colores preparados se disuelven en agua destilada y se aplican directamente en el papel utilizando los pinceles. La transparencia que al pintar producen los pigmentos diluidos hace que sea difícil corregir algún error, el conocimiento que adquieras en el taller te ayudará a dominar las diferentes técnicas, trucos y recursos que brinda la acuarela.', 25, '1.jpg'),
	(2, 'Taller de Serigrafía', 'En la UTPL se promueven los espacios culturales donde se estimula en los participantes un desarrollo multidisciplinar, se contribuye a su formación integral y se comparten experiencias positivas con otros compañeros.', 25, '2.jpg'),
	(3, 'Taller de Fotografía', 'Las imágenes nos han acompañado desde tiempos inmemoriales, pero es ahora en el siglo XXI donde la imagen se torna omnipresente. En la actualidad, tomar fotografías se ha convertido en un hecho cotidiano e indispensable para nuestra comunicación.', 25, '3.jpg'),
	(4, 'Taller de Cocina', 'El Área de deportes, recreación y cultura te ofrece un taller de cocina para que aprendas a elaborar especialidades tanto de la gastronomía nacional como extranjera.', 25, '4.jpg'),
	(5, 'Taller de Música Clásica', 'En la UTPL se promueven los espacios culturales donde se estimula en los participantes un desarrollo multidisciplinar, se contribuye a su formación integral y se comparten experiencias positivas con otros compañeros.', 25, '5.jpg'),
	(6, 'Taller de Baile: Ritmos Tropicales', 'El baile es el modo de expresión en el que la persona deja fluir sus emociones y sentimientos.', 25, '6.jpg');
/*!40000 ALTER TABLE `talleres` ENABLE KEYS */;

-- Volcando estructura para tabla eventos_utpl.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `user` varchar(50) NOT NULL DEFAULT '0',
  `password` varchar(50) NOT NULL DEFAULT '0',
  `cedula_usuario` bigint(20) NOT NULL DEFAULT '0',
  `nombre_usuario` varchar(50) NOT NULL DEFAULT '0',
  `apellido_usuario` varchar(50) NOT NULL DEFAULT '0',
  `nacionalidad_usuario` varchar(50) NOT NULL DEFAULT '0',
  `direccion_usuario` varchar(100) NOT NULL DEFAULT '0',
  `correo_usuario` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla eventos_utpl.usuarios: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`user`, `password`, `cedula_usuario`, `nombre_usuario`, `apellido_usuario`, `nacionalidad_usuario`, `direccion_usuario`, `correo_usuario`) VALUES
	('a', '123', 234234, 'asdasd', 'a213423', '4234', '234234234', '234234234'),
	('agperalt', '123', 1720238706, 'aNDRES', 'PEralta', 'ecuatoriana', 'direccion', 'asdasda'),
	('andres', 'usr', 1720238706, 'Andres Gabriel', 'Peralta Tomalo', 'ecuatoriana', 'Avigiras y Cesar Teran Lopez', 'gapatmej@gmail.com'),
	('b', '123', 1720238706, 'Andres Gabriel', 'Peralta Tomalo', 'ecuatoriana', 'Avigiras y Cesar Teran Lopez', 'gapatmej@gmail.com'),
	('c', '123', 1720238706, 'Andres Gabriel', 'Peralta Tomalo', 'ecuatoriana', 'Avigiras y Cesar Teran Lopez', 'gapatmej@gmail.com');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

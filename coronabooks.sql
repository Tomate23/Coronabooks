-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-05-2020 a las 13:37:53
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `coronabooks`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idCat` int(11) NOT NULL,
  `nombreCategoria` text NOT NULL,
  `numLibros` int(11) NOT NULL,
  `descripCat` text NOT NULL,
  `icono` text NOT NULL,
  `linkCat` text NOT NULL,
  `descripCat2` text NOT NULL,
  `imgSvg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idCat`, `nombreCategoria`, `numLibros`, `descripCat`, `icono`, `linkCat`, `descripCat2`, `imgSvg`) VALUES
(1, 'Novela de aventuras ', 6, 'La novela de aventuras tiene una estructura bastante rígida, en la que prima el movimiento de un personaje a lo largo de sucesos y geografías distintas.', 'fas fa-horse', 'https://es.wikipedia.org/wiki/Novela_de_aventuras', 'La novela de aventuras es un género literario que narra los viajes, el misterio y el riesgo. Una característica recurrente es la acción presente hasta dominar los escenarios, básica para el desarrollo de la trama. En los argumentos de este tipo de novelas resaltan características cómo, el riesgo, la sorpresa y el misterio', '../img/otras/horse.svg'),
(2, 'Novela policíaca', 6, 'otro subgénero de la novela, y uno de los más frecuentados por lectores y escritores. La novela policíaca tiene unas reglas bastante acotadas.', 'fas fa-search', 'https://es.wikipedia.org/wiki/Novela_polic%C3%ADaca', 'La novela policíaca, policial, detectivesca o, con más amplitud y precisión, la novela criminal, es una clase de textos o género literario dentro de la novela, que es a su vez un subgénero de la narrativa.El protagonista suele ser un investigador privado o detective o un policía novela negra evolucionó y se vulgarizó gracias a su éxito en colecciones populares hacia los subgéneros.', '../img/otras/search.svg'),
(3, 'Poesía', 6, 'Originalmente en las primeras reflexiones occidentales sobre la literatura, las de Platón, la palabra griega correspondiente a «poesía»', 'far fa-heart', 'https://es.wikipedia.org/wiki/Poes%C3%ADa', 'La poesía es un género literario que se caracteriza por ser la más depurada manifestación, por medio de la palabra, de los sentimientos, emociones y reflexiones que puede expresar el ser humano en torno a la belleza, el amor, la vida o la muerte. Como tal, puede estar compuesta tanto en verso como en prosa.', '../img/otras/poethry.svg'),
(4, 'Ciencia Ficción', 6, 'Ciencia ficción es la denominación de uno de los géneros derivados de la literatura de ficción, junto con la literatura fantástica y la narrativa de terror.', 'fas fa-robot', 'https://es.wikipedia.org/wiki/Ciencia_ficci%C3%B3n', 'Es un género especulativo que relata acontecimientos posibles desarrollados en un marco imaginario, cuya verosimilitud se fundamenta narrativamente en los campos de las ciencias físicas, naturales y sociales. La acción puede girar en torno a un abanico grande de posibilidades...', '../img/otras/robot.svg'),
(5, 'Novela Romántica', 6, 'La novela romántica se podría definir, en pocas palabras, como una historia con final feliz. El argumento de la novela suele ser el amor.', 'fas fa-grin-hearts', 'https://es.wikipedia.org/wiki/Romanticismo', 'El Romanticismo es un movimiento cultural que se originó en Alemania y en Reino Unido a finales del siglo xviii como una reacción revolucionaria contra la Ilustración y el Neoclasicismo, confiriendo prioridad a los sentimientos.Considerado como el primer movimiento de cultura Europeo', '../img/otras/love.svg'),
(6, 'Programación', 6, 'En algunos de ellos no se muestra ni una línea de código, otros están escritos en clave de humor,otros son muy técnicos… Pero sin duda te ayudarán.', 'fas fa-laptop-code', 'https://es.wikipedia.org/wiki/Programaci%C3%B3n', 'La programación es el proceso utilizado para idear y ordenar las acciones necesarias para realizar un proyecto, preparar ciertas máquinas o aparatos para que empiecen a funcionar en el momento y en la forma deseados o elaborar programas para su empleo en computadoras.', '../img/otras/code.svg'),
(7, 'populares', 3, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id` int(11) NOT NULL,
  `numeroventa` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `imagen` text NOT NULL,
  `precio` text NOT NULL,
  `cantidad` text NOT NULL,
  `subtotal` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`id`, `numeroventa`, `nombre`, `imagen`, `precio`, `cantidad`, `subtotal`) VALUES
(28, 1, 'Rubén Darío. Poesía completa', 'poesia/RubenDario.jpg', '33.23', '2', '66.46'),
(29, 2, 'House of Darken', 'otras/house.png', '10.71', '1', '10.71'),
(30, 3, 'C/C++. Curso de programación, Miguel Acera', 'code/c++.jpg', '26.65', '1', '26.65');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `idLibro` int(11) NOT NULL,
  `nombreLibro` text NOT NULL,
  `descripLibro` text NOT NULL,
  `precioLibro` double NOT NULL,
  `imagenLibro` text NOT NULL,
  `idCat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`idLibro`, `nombreLibro`, `descripLibro`, `precioLibro`, `imagenLibro`, `idCat`) VALUES
(1, 'Torn', 'Chloe hasn’t had the easiest childhood. With a mother who was absent most of the time, she practically had to raise herself.', 19.99, 'otras/torn.png', 7),
(2, 'House of Darken', 'When Emma moves to Astoria, Oregon, she is given two rules: Don’t cross to “their” side of the street. Discover the other rule...', 10.71, 'otras/house.png', 7),
(3, 'Power of Five', 'Orphaned and sold to a harsh master, Lera’s life is about mucking stalls, avoiding her master’s advance, and steering clear...', 24.71, 'otras/power.jpg', 7),
(4, 'Las aventuras de Tom Sawyer', 'Alguien ha dicho que \"Las aventuras de Tom Sawyer\" es, ante todo, un libro de memorias. Y, en efecto, el relato de las cosas que le suceden a Tom Sawyer en esa pequeña ciudad a orillas del Mississippi...', 6.64, 'aventura/tom2.jpg', 1),
(5, 'Las aventuras de Huckleberry Finn', 'Huckleberry Finn, el amigo de Tom Sawyer, es un muchacho aventurero al que no le gusta la escuela, sino andar por ahí a su aire. Sin embargo, la vida de Huck no es fácil, su padre lo maltrata...', 10.92, 'aventura/finn.jpg', 1),
(6, 'El conde de Montecristo', 'Edición juvenil con ilustraciones. Alejandro Dumas nació en Francia en 1802, quedó huérfano a los cuatro años y su familia se arruinó. Tras trabajar de copista en su juventud siendo conde de su ciudad donde...', 13.01, 'aventura/conde.jpg', 1),
(7, 'La vuelta al mundo en ochenta días', 'Phileas Fogg ha apostado una gran suma de dinero a que es capaz de dar la vuelta al mundo en 80 días, gracias a los distintos medios de locomoción de su época. Una aventura en la que habrá momentos...', 10.92, 'aventura/verne.jpg', 1),
(8, 'Robinson Crusoe, Daniel Defoe', 'Daniel Defoe te deleitará con la historia de Robinson Crusoe, un marinero de York que naufraga y pasa 28 años viviendo en una isla alejada de la civilización. El libro está escrito en forma de autobiografía', 9.5, 'aventura/robin.jpg', 1),
(9, 'Veinte mil leguas de viaje submarino', 'Cuando Verne ideó la construcción del Nautilus, escribió a Hetzel, su editor y amigo: «Le aseguro que su arca estará mejor equipada que la de Noé». Verne, que había visitado ya los centros de la Tierra', 7.59, 'aventura/verne2.jpg', 1),
(10, 'Reina roja, Juan Gómez Jurado', 'Antonia Scott es especial. Muy especial.No es policía ni criminalista. Nunca ha empuñado unarma ni llevado una placa, y, sin embargo, ha resuelto decenas de crímenes.Pero hace un tiempo que Antonia no sabia que hacer en caso de tener...', 19.85, 'policia/reina.jpg', 2),
(11, 'Despiértame cuando acabe septiembre', 'El rastro de un joven español se esfuma por el sur de Inglaterra tras dejar un mensaje de socorro en el teléfono móvil de su madre. Ella, que apenas ha abandonado su pequeño pueblo en contadas ocasiones decide ir en su busca. Hace un año...', 2.84, 'policia/wake.jpg', 2),
(12, 'Asesinos de series, Roberto Sánchez', 'Asesinos de Series\' es el nombre del blog de tres jóvenes (Andrés, Marta y Rubén) que viven juntos en Madrid. Adictos a las series, sueñan con crear su gran éxito internacional: una serie de referencia como podría ser Lost. Andrés se gana la vida...', 3.79, 'policia/serie.jpg', 2),
(13, 'El último día de mi vida, David Orange', 'A Dylan Swift solo le queda un día de vida, 24 horas para cerrar todos los capítulos de su vida y tratar de encontrar a los responsables de la terrible situación en la que se encuentra. Un frenético y adictivo viaje en primera persona...', 6.79, 'policia/thelast.jpg', 2),
(14, 'El día que se perdió la cordura', 'Centro de Boston, 24 de diciembre, un hombre camina desnudo con la cabeza decapitada de una joven. El doctor Jenkins, director del centro psiquiátrico de la ciudad, y Stella Hyden, agente de perfiles del FBI, se adentrarán en...', 4.97, 'policia/day.jpg', 2),
(15, 'El castillo de las estrellas Enrrique Joven', 'Héctor es un joven jesuita que enseña ciencias en un colegio. Forma parte a través de la Red de un grupo que intenta desentrañar los secretos de un libro conocido como Manuscrito Voynich, un libro que tiene existencia real.', 8.97, 'policia/castle.jpg', 2),
(16, 'Rubén Darío. Poesía completa', 'La vida y la obra de Rubén Darío estuvieron marcadas desde su nacimiento por un extraño designio de confusión y equívocos. Su nombre no era su verdadero nombre, sus padres no eran sus verdaderos padres, el país en donde alcanzó la fama.', 33.23, 'poesia/RubenDario.jpg', 3),
(17, 'Todas las puestas de sol que te perdiste', 'Y no es que te las perdieras porque sí. Es que estabas concentrada en otras cosas. Esas cosas de la vida misma. No pasa nada, don’t worry, es normal. No puedes negar que todas necesitamos algún tiempo de descanso...', 4.74, 'poesia/sol.jpg', 3),
(18, 'Cartas que guardo bajo la almohada', 'Cartas que guardo bajo la almohada es una recopilación de cartas escritas como poemas en formato de prosa, con la intención de capturar emociones encontradas, ocultas y a veces herméticas, producto de la soledad nocturna del autor.', 3.99, 'poesia/carta.jpg', 3),
(19, 'Te propongo un pecado, Miguel López', 'Este libro es el eco de esos deseos que nos estimula la persona que nos gusta. Es una propuesta poética que nos invita a transgredir las reglas del pudor, de lo permitido, para entregarnos a ese mundo de vivencias y placeres.', 7.55, 'poesia/sin.jpg', 3),
(20, 'La venganza de las palabras bonitas', 'Víctor Mengual, más conocido como @Bordelicado, se ha hecho conocido en las redes sociales por pintar sus versos sobre la piel.Cada uno de sus versos es una declaración de intenciones, sus frases y sus palabras...', 6.64, 'poesia/words.jpg', 3),
(21, 'Ahora que ya bailas, Miguel Gane', 'Naces, creces, amas, te rompen, aprendes y no mueres hasta que alguien deja de quererte. Estos poemas son la historia de Ella, la que fue callada porque sus gritos resonaban demasiado alto. Ella, que dejó de ser suya porque quien debía liberar su sonrisa.', 6.64, 'poesia/now.jpg', 3),
(22, '11,4 sueños luz, Nicholas Avenon', 'En el París del siglo XXIII donde todo está en venta, las emociones puras son de gran valor para aquellos que no pueden vivirlas. Ariel de Santos es un creador de sueños vívidos, uno de los pocos artistas capaces de modelar...', 11.45, 'Cficcion/luz.jpg', 4),
(23, 'La Sonda Titán: Hard Science Fiction', 'En 2005, la sonda robótica “Huygens” aterriza en la luna de Saturno Titán. Cuarenta años más tarde, un radiotelescopio recibe señales de la lejana luna que solo pueden proceder de una sonda olvidada mucho tiempo atrás', 14.99, 'Cficcion/titan.jpg', 4),
(24, 'El fin de la lucha Alberto Meneses', 'La humanidad está a punto de extinguirse. La guerra contra los navajos está perdida y cada enfrentamiento es un paso más hacia la inevitable aniquilación del ser humano. La única esperanza es huir de la galaxia, y empezar de nuevo.', 20.45, 'Cficcion/lucha.jpg', 4),
(25, 'Harry Potter y el cáliz de fuego J.K.R', 'Otro deplorable verano con los Dursley llega a su fin y Harry está impaciente por regresar a Hogwarts. A sus catorce años, sólo desea ser un joven mago como los demás y dedicarse a aprender nuevos sortilegios y ir a los Mundiales de quidditch.', 8.9, 'Cficcion/goblet.jpg', 4),
(26, 'Nosotros, los octogésimos, Jesus Zamora', 'Mundochenta es un planeta situado en la galaxia enana del Boyero, a 140.000 años luz de la tierra. En esta primera novela de la serie conocerás a sus habitantes (los \"octogésimos\"), a través de una aventura en la mejor esencia del thriller.', 14.64, 'Cficcion/we.jpg', 4),
(27, 'El ruido del fin del mundo, Leticia Martín', 'Ella ignora cómo acabó el mundo, desconoce qué existe más allá del desierto que rodea su asentamiento, con poco más de cien caravanas. Cuando procrear es la principal labor de una mujer, cometió el peor de los pecados: ser estéril.', 13.46, 'Cficcion/last.jpg', 4),
(28, 'Soy una mamá (Contemporánea)', 'Me llamo Estefanía, soy madre de tres hijos y estuve felizmente casada. Mi día a día era siempre el mismo: me levantaba, atendía a mis pequeños, los llevaba al cole, desayunaba con mis amigas, hacía la compra, sacaba a mi perra y me iba al trabajo.', 14.15, 'romantic/mama.jpg', 5),
(29, 'SPA-LARGO PETALO DE MAR', 'En plena Guerra Civil española, el joven médico Víctor Dalmau, junto a su amiga pianista Roser Bruguera, se ven obligados a abandonar Barcelona, exiliarse y cruzar los Pirineos rumbo a Francia. A bordo del Winnipeg, un navío fletado por...', 15.36, 'romantic/lardo.jpg', 5),
(30, 'La fiesta prohibida, Charlotte Byrd', 'La trama inicia dándonos a conocer a Ellie y Caroline, mejores amigas desde la Universidad, ambas estudiaron en Yale y son muy diferentes; mientras que a Ellie le gusta escribir y trabaja en una revista en donde tiene como colega...', 14.55, 'romantic/fiesta.jpg', 5),
(31, 'Los Secretos de un Recuerdo, Andrea Golden', 'Los secretos de la historia de Alicia, una anciana de noventa años que vive en Charleston (Estados Unidos) junto a su nieta Caly, saldrán a la luz... Tendrá que testificar en el último gran juicio que se celebrará en brucelas.', 17.95, 'romantic/secret.jpg', 5),
(32, 'La Vida en tus Palabras, Andrea Golden', 'En su interior encuentran vestigios de un pasado: utensilios de labranza, distintas alforjas repletas de semillas y un decrépito arcón de madera que contiene varios códices en perfecto estado, sorprendentemente...', 7.95, 'romantic/vida.jpg', 5),
(33, 'El zaguán de los besos esquivos', 'En su periplo, une sus pasos a Antonio, un profesor de literatura jubilado y amante del Quijote que intenta escapar del acto que truncó su suerte, y a Daniel, un viejo truhan que conoce todas las malas artes y ayuda a desvelar el secreto...', 20.46, 'romantic/last.jpg', 5),
(34, 'Let Us Python: Python Is Future, Embrace It Fast', 'Most Programmer’s learning Python are usually comfortable with some or the other programming language and are not interested in going through the typical learning curve of learning the first programming language.', 18.15, 'code/python.jpg', 6),
(35, 'JavaScript for Modern Web Development', 'This book will take you on a complete journey of learning web development, starting right with the basics. The book begins with the history of web development and JavaScript, how it has evolved over these years, and how it still keeps growing', 34.31, 'code/javascript.jpg', 6),
(36, 'C/C++. Curso de programación, Miguel Acera', 'C/C++, a diferencia de otros lenguajes, como Java, permite programar desde ensamblador hasta programación orientada a objetos. Esto lo hace perfecto a nivel didáctico y muy potente a nivel profesional. El lenguaje C/C++ se utiliza en...', 26.65, 'code/c++.jpg', 6),
(37, 'Fundamentos de Bases de Datos con MySQL', 'Las Bases de datos son colecciones de información (datos) que se relacionan para crear un sentido y dar más eficiencia a una encuesta, un estudio organizado o la estructura de datos de una empresa.', 20.95, 'code/mysql.jpg', 6),
(38, 'Aprende a programar con Java', 'En este libro aprenderás paso a paso los secretos de la programación orientada a objetos con Java, de forma guiada y con múltiples ejemplos y ejercicios resueltos. Todo reunido en un solo lugar. Así podrás dejar de invertir tiempo en...', 17.55, 'code/java.jpg', 6),
(39, 'Mastering Linux Shell Scripting,: A practical guide', 'Grab your favorite editor and start writing your best Bash scripts step by step. Get to grips with the fundamentals of creating and running a script in normal mode, and in debug mode. Learn about various conditional statements\' code snippets', 28.45, 'code/bash.jpg', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `librosclientes`
--

CREATE TABLE `librosclientes` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` text NOT NULL,
  `precio` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `librosclientes`
--

INSERT INTO `librosclientes` (`id`, `nombre`, `descripcion`, `imagen`, `precio`) VALUES
(10, 'nuevo ', 'este es un ejemplo ', '812279_10 mover BDD old.PNG', 89.23),
(11, 'fggh', 'eyyg', '354358_corona.PNG', 89.23);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `idUser` int(11) NOT NULL,
  `email` text NOT NULL,
  `pass` text NOT NULL,
  `userName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`idUser`, `email`, `pass`, `userName`) VALUES
(1, 'josuevahe@gmail.com', 'roma00josue23', 'tomate23'),
(2, 'Ejemplo2@gmail.com', '1234', 'ejemplo2');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCat`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`idLibro`),
  ADD KEY `idCat` (`idCat`);

--
-- Indices de la tabla `librosclientes`
--
ALTER TABLE `librosclientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idCat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `idLibro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `librosclientes`
--
ALTER TABLE `librosclientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `libros`
--
ALTER TABLE `libros`
  ADD CONSTRAINT `libros_ibfk_1` FOREIGN KEY (`idCat`) REFERENCES `categoria` (`idCat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

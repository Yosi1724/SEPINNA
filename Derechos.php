<?php
	session_start();
	include_once 'dbconnect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>DERECHOS DE LOS NIÑOS, NIÑAS Y ADOLESCENTES DEL ESTADO DE MICHOACÀN</title>
	<p> SEPINNA </p>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="Css/margenes.css" type="text/css" />
	<link rel="stylesheet" href="Css/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" href="css/.css" type="text/css" />

    <link rel="icon" href="/Imagenes/Gobierno/Logo-Silvano.png"  type="image/png" />
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

</head>
<body>

<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Navegacion de derechos</span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">Secretaría Ejecutiva del Sistema Estatal de Protección Integral de Niñas, Niños y Adolecentes</a>
		</div>
		
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<?php if (isset($_SESSION['usr_id'])) { ?>
				<li><p class="navbar-text">Logueado como <i class="btn btn-danger btn-xs" ><b><?php echo $_SESSION['usr_name']; ?></b></i></p></li>
				<li><a href="logout.php">Log Out</a></li>
				<?php } else { ?>
					<li><a href="index.php">Inicio</a></li>
				    <li><a href="index.php">Derechos</a></li>
				    <li><a href="index.php">Noticias</a></li>
				    <li><a href="index.php">Centros de ayuda</a></li>
				     <li><a href="index.php">Educación</a></li>
				    <li><a href="login.php">Login</a></li>
				    <li><a href="register.php">Registro</a></li>
				    <li><a href="institucion.php">Institución educativa</a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
</nav>

<div id="contenedor">

	<img src="Imagenes/Inicio/Niños.jpg" width="200" height="200">
	<h1 style="text-align: justify; font-size: 15px;">Derechos de los niños, niñas y adolescentes</h1>

	<h3 style="text-align: justify;font-size: 12px;"> Los Derechos Humanos de niñas, niños y adolescentes están previstos en la Constitución Política de los Estados Unidos Mexicanos, en los tratados internacionales y en las demás leyes aplicables, esencialmente en la Convención sobre los Derechos del Niño y en la Ley General de los Derechos de Niñas, Niños y Adolescentes la cual reconoce a niñas, niños y adolescentes como titulares de derechos y, en su artículo 13, de manera enunciativa y no limitativa señala los siguientes: </h3>

</div>

<div id="contenedor">

	
	<h2 style="text-align: justify; font-size: 15px;">l. Derecho a la vida, a la supervivencia y al desarrollo</h2>

	<h3 style="text-align: justify;font-size: 12px;"> Las niñas, niños y adolescentes tienen derecho a que se proteja su vida, su supervivencia, su dignidad y a que se garantice su desarrollo integral. No pueden ser privados de la vida bajo ninguna circunstancia. </h3>


	<h2 style="text-align: justify; font-size: 15px;">ll. Derecho de prioridad</h2>

	<h3 style="text-align: justify;font-size: 12px;"> Niñas, niños y adolescentes tienen derecho a que se les asegure de manera prioritaria (antes que a los adultos) el ejercicio pleno de todos sus derechos, para tal efecto siempre se considerará su interés superior. </h3>



	<h2 style="text-align: justify; font-size: 15px;">lll. Derecho a la identidad</h2>

	<h3 style="text-align: justify;font-size: 12px;"> Niñas, niños y adolescentes deben contar con nombre y apellidos, ser inscritos en el registro civil de forma inmediata y gratuita, y se les deberá expedir en forma ágil y sin costo la primera copia certificada de su acta de nacimiento. Siempre que se solicite un cambio de apellidos, tendrán derecho a opinar y a ser tomados en cuenta. La falta de documentación para acreditar su identidad nunca será obstáculo para garantizar sus derechos.

    Deberán contar con nacionalidad; en la medida de lo posible conocer su origen, a efecto de preservar su identidad, pertenencia cultura y relaciones familiares. </h3>


    <h2 style="text-align: justify; font-size: 15px;">lV. Derecho a vivir en familia</h2>

	<h3 style="text-align: justify;font-size: 12px;"> Todas las niñas, niños y adolescentes, tienen derecho a vivir en una familia y no podrán ser separados de ella por falta de recursos para su subsistencia, tampoco podrán ser separados de las personas que los tengan bajo su guarda y custodia, sino por orden de autoridad competente y mediante un debido proceso en el que haya sido tomada en cuenta su opinión y su interés superior. Su institucionalización deberá ser el último recurso que adopte el Estado mexicano para la protección de sus derechos.

    Niñas, niños y adolescentes tienen derecho a convivir con su madre y padre, así como con las familias de aquéllos (incluso cuando algún integrante se encuentre privado de su libertad) en un ambiente libre de violencia, excepto cuando ese derecho sea limitado por autoridad competente en atención a su interés superior.</h3>



    <h2 style="text-align: justify; font-size: 15px;">V. Derecho a la igualdad sustantiva</h2>

	<h3 style="text-align: justify;font-size: 12px;"> Niñas, niños y adolescentes tienen derecho a que se les proporcione un mismo trato y a la igualdad de oportunidades, tomando en consideración sus necesidades específicas para el ejercicio pleno de sus derechos. </h3>


    <h2 style="text-align: justify; font-size: 15px;">Vl. Derecho a no ser discriminado</h2>

	<h3 style="text-align: justify;font-size: 12px;">Niñas, niños y adolescentes tienen derecho a un trato igualitario, nadie puede limitar o restringir sus derechos por su origen étnico, nacional o social, idioma o lengua, edad, género, preferencia sexual, estado civil, religión, opinión, condición económica, circunstancias de nacimiento, discapacidad o estado de salud o cualquier otra condición atribuible a ellos mismos o a su madre, padre, tutor o persona que los tenga bajo guarda y custodia, o a otros miembros de su familia.

    Para garantizar este derecho se deberán tomar en cuenta las necesidades específicas de cada niña, niño y adolescente de manera individual o en grupo, según sea el caso. </h3>

    <h2 style="text-align: justify; font-size: 15px;">Vll. Derecho a vivir en condiciones de bienestar y a un sano desarrollo integral </h2>

	<h3 style="text-align: justify;font-size: 12px;"> Niñas, niños y adolescentes tienen derecho a vivir en un medio ambiente sano y sustentable, y en condiciones que permitan su desarrollo, bienestar, crecimiento saludable y armonioso, tanto físico como mental, material, espiritual, ético, cultural y social. </h3>

	<h2 style="text-align: justify; font-size: 15px;">V.III Derecho a una vida libre de violencia y a la integridad personal </h2>

	<h3 style="text-align: justify;font-size: 12px;"> Niñas, niños y adolescentes tienen derecho a vivir una vida libre de toda forma de violencia y a que se resguarde su integridad personal, a fin de lograr las mejores condiciones de bienestar y el libre desarrollo de su personalidad. </h3>

	<h2 style="text-align: justify; font-size: 15px;">I.X Derecho a la protección de la salud y a la seguridad social.</h2>

	<h3 style="text-align: justify;font-size: 12px;"> Niñas, niños y adolescentes tienen derecho a disfrutar del más alto nivel posible de salud, así como a recibir la prestación de servicios de atención médica gratuita y de calidad, con el fin de prevenir, proteger y restaurar su salud, así como a su seguridad social, que permita hacer efectivo su derecho de prioridad, su interés superior, igualdad sustantiva y no discriminación. </h3>

	<h2 style="text-align: justify; font-size: 15px;">X. Derecho a la inclusión de niñas, niños y adolescentes con discapacidad.</h2>

	<h3 style="text-align: justify;font-size: 12px;"> Niñas, niños y adolescentes con discapacidad deben ejercer plenamente todos y cada uno de sus derechos contenidos en la Constitución Política de los Estado Unidos Mexicanos, Tratados Internacionales y demás leyes aplicables, considerando sus propias necesidades. </h3>

	<h2 style="text-align: justify; font-size: 15px;">XI. Derecho a la educación.</h2>

	<h3 style="text-align: justify;font-size: 12px;"> Niñas, niños y adolescentes tienen derecho a una educación de calidad que contribuya al conocimiento de sus propios derechos y, basada en un enfoque de derechos humanos atendiendo a sus propias necesidades, que garantice el respeto a su dignidad humana; el desarrollo armónico de sus potencialidades y personalidad, y fortalezca el respeto a los derechos humanos y a las libertades fundamentales, en los términos del artículo 3o. de la Constitución Política de los Estados Unidos Mexicanos, la Ley General de Educación y demás ordenamientos aplicables. </h3>

	<h2 style="text-align: justify; font-size: 15px;">XII. Derecho al descanso y al esparcimiento.</h2>

	<h3 style="text-align: justify;font-size: 12px;"> Niñas, niños y adolescentes tienen derecho al descanso, al esparcimiento, al juego y a las actividades recreativas propias de su edad, así como a participar libremente en actividades culturales, deportivas y artísticas, como factores primordiales de su desarrollo y crecimiento.</h3>

	<h2 style="text-align: justify; font-size: 15px;">XIII. Derecho a la libertad de convicciones éticas, pensamiento, conciencia, religión y cultura</h2>

	<h3 style="text-align: justify;font-size: 12px;"> Niñas, niños y adolescentes tienen derecho a la libertad de convicciones éticas, pensamiento, conciencia, religión y cultura, no podrán ser discriminados por ejercer estas libertades.</h3>

	<h2 style="text-align: justify; font-size: 15px;">XIV. Derecho a la libertad de expresión y de acceso a la información.</h2>

	<h3 style="text-align: justify;font-size: 12px;"> Niñas, niños y adolescentes tienen derecho a expresar libremente su opinión, así como a buscar, recibir y difundir información e ideas de todo tipo y por cualquier medio, sin más limitaciones que las establecidas en el artículo 6o. de la Constitución Política de los Estados Unidos Mexicanos.</h3>

	<h2 style="text-align: justify; font-size: 15px;">XV. Derecho de participación.</h2>

	<h3 style="text-align: justify;font-size: 12px;"> Niñas, niños y adolescentes tienen derecho a ser escuchados y tomados en cuenta en los asuntos de su interés, conforme a su edad, desarrollo evolutivo, cognoscitivo y madurez. También deberán ser escuchados y tomados en cuenta en todos los procesos judiciales y de procuración de justicia donde se diriman controversias que les afectan.
	</h3>

</div>

<svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1">
    <defs>
        <filter id="goo"><feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />    
            <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
            <feComposite in="SourceGraphic" in2="goo" operator="atop"/>
        </filter>
    </defs>
</svg>


<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="utf-8">
    <title>Laboratorio 19</title>
  </head>
  <body>
    <section class="content">

        <h2>Bloque de preguntas</h2>

        <h4>¿Qué importancia tiene AJAX en el desarrollo de RIA's (Rich Internet Applications?</h4>
        Mejoran la interaccion cliente-servidor.[1]

        <h4>¿Qué implicaciones de seguridad tiene AJAX? ¿Dónde se deben hacer las validaciones de seguridad, del lado del cliente o del lado del servidor?</h4>
        SQL Injection, XXS, XMLHttpRequest Vulnerabilities, Increased Attack Surface, Client Side Injection Threats, AJAX Bridging, CSRF, Denial of Service, Browser Based Attacks. [2]

        <h4>¿Qué es JSON?</h4>
        JSON (JavaScript Object Notation - Notación de Objetos de JavaScript) es un formato ligero de intercambio de datos.[3]

        <h4>Referencias</h4>
        [1] https://desarrolloweb.com/articulos/atributo-position-css.html<br>
        [2] http://dis.um.es/~lopezquesada/documentos/IES_1213/LMSGI/curso/UT6/libroswebajax/www.librosweb.es/ajax/capitulo7/seguridad.html<br>
        [3] https://www.json.org/json-es.html <br>

        <div>
          <h2>Busca frutas:</h2>
        	<form>
        		<input type="text" id="userInput" onkeyup="sendRequest()">
        	</form>
        	<div id="ajaxResponse"></div>
        </div>
    </section>
  </body>
  <script type="text/javascript" src="ajax.js"></script>
</html>

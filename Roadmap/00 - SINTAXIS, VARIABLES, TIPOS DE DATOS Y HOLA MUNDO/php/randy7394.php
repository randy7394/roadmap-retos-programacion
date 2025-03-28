<?php
/*
 * ¿Preparad@ para aprender o repasar el lenguaje de programación que tú quieras?
 * - Recuerda que todas las instrucciones de participación están en el
 *   repositorio de GitHub.
 *
 * Lo primero... ¿Ya has elegido un lenguaje?
 * - No todos son iguales, pero sus fundamentos suelen ser comunes.
 * - Este primer reto te servirá para familiarizarte con la forma de participar
 *   enviando tus propias soluciones.
 *
 * EJERCICIO:
 * - Crea un comentario en el código y coloca la URL del sitio web oficial del
 *   lenguaje de programación que has seleccionado.
 * - Representa las diferentes sintaxis que existen de crear comentarios
 *   en el lenguaje (en una línea, varias...).
 * - Crea una variable (y una constante si el lenguaje lo soporta).
 * - Crea variables representando todos los tipos de datos primitivos
 *   del lenguaje (cadenas de texto, enteros, booleanos...).
 * - Imprime por terminal el texto: "¡Hola, [y el nombre de tu lenguaje]!"
 *
 * ¿Fácil? No te preocupes, recuerda que esta es una ruta de estudio y
 * debemos comenzar por el principio.
 */

// 1. Esto es un comentario de una sola linea en PHP y la URL del sitio web oficial es https://www.php.net/

/*
  2. Esto es un comentario de varias lineas en PHP
  y se puede extender en varias lineas
*/

// 3. Variables y Constantes

$miVariable = "Mi variable"; // Esto es una variable
define('MY_CONSTANT', "Mi constante"); // Esto es una constante
const MY_OTHER_CONSTANT = "Mi otra constante"; // Esto es otra manera de declarar constantes

// 4. Variables con tipos de datos primitivos
$myInt = 11; // Int
$myFloat = 12.2; // Float
$myString = "Mi string"; // string
$myBool = true; // Boolean
$myBool = false; // Boolean
$nullValue = null; // Null
$undefinedValue = null; // Undefined

// 5. Imprime por terminal el texto: "¡Hola, PHP!"
echo "¡Hola, PHP!";
echo"<br>";
echo gettype($myInt);

echo"<br>";
echo gettype($myFloat);

echo"<br>";
echo gettype($myString);

echo"<br>";
echo gettype($myBool);

echo"<br>";
echo gettype($nullValue);

echo"<br>";
echo gettype($undefinedValue);

?>
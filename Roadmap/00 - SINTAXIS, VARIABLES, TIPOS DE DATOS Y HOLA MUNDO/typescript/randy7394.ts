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

// 1. Esto es un comentario de una linea en TypeScript y la URL del sitio web oficial es https://www.typescriptlang.org/
/*
   2. Esto es un comentario de varias lineas en TypeScript
   y se puede extender en varias lineas
*/

// 3. Variables y Constantes
let myTSVariable = "Mi variable"; // Esto es una variable
const MY_TS_COSNTANT = "Mi constante" // Esto es una constante

// 4. Variables con tipos de datos primitivos
let myTSInt: number = 10; // Number
let stringValue: string = "Mi string en TypeScript"; // String
let booleanValue: boolean = true; // Boolean
booleanValue = false; // Boolean
let myNullValue: null = null; // Null
let myUndefinedValue: undefined = undefined; // Undefined
let bigIntValue: bigint = 123876983432343243234n; // Bigint

// 5. Imprime por terminal el texto: "¡Hola, TypeScript!"
console.log("¡Hola, TypeScript!");
console.log(typeof(myTSInt));
console.log(typeof(stringValue));
console.log(typeof(booleanValue));
console.log(typeof(myNullValue));
console.log(typeof(myUndefinedValue));
console.log(typeof(bigIntValue));
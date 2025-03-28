'''
¿Preparad@ para aprender o repasar el lenguaje de programación que tú quieras?
Recuerda que todas las instrucciones de participación están en el
repositorio de GitHub.

Lo primero... ¿Ya has elegido un lenguaje?
- No todos son iguales, pero sus fundamentos suelen ser comunes.
- Este primer reto te servirá para familiarizarte con la forma de participar
  enviando tus propias soluciones.

EJERCICIO:
- Crea un comentario en el código y coloca la URL del sitio web oficial del
  lenguaje de programación que has seleccionado.
- Representa las diferentes sintaxis que existen de crear comentarios
  en el lenguaje (en una línea, varias...).
- Crea una variable (y una constante si el lenguaje lo soporta).
- Crea variables representando todos los tipos de datos primitivos
  del lenguaje (cadenas de texto, enteros, booleanos...).
- Imprime por terminal el texto: "¡Hola, [y el nombre de tu lenguaje]!"

¿Fácil? No te preocupes, recuerda que esta es una ruta de estudio y
debemos comenzar por el principio.
'''

# 1. Esto es un comentario de una sola linea en Python https://www.python.org/
'''
# 2. Esto es un comentario de varias lineas en Python
  y puede extenderse en varias lineas
'''

# 3. Variables y Constantes
my_variable = "Mi variable" # Esto es una variable
my_variable = "Nuevo valor de mi variable"  # Reasignacion de la variable declarada

# IMPORTANTE: Python no tiene constantes, pero por convención se escriba en Upper Snake Case para indicar que es una.

MY_CONSTANT = "Mi constante"    #Por convencion
MY_CONSTANT = "AHLDJAF;DLKJAS;DLKAF"

# 4. Variables con tipos de datos primitivos
my_int = 1              # Int
my_float = 1.5          # float
my_bool = True          # Boolean
my_bool = False         # Boolean
my_str = "Mi string"    # String
my_other_str = 'Mi otro string' # String
none_value = None       # None

# 5. Imprime por terminal el texto: "¡Hola, [y el nombre de tu lenguaje]!"
print("¡Hola, Python!")
print(type(my_int))
print(type(my_float))
print(type(my_bool))
print(type(my_str))
print(type(my_other_str))
print(type(none_value))
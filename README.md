# PHP Avanzado
### Php. Trabajo y código de como se utilizan las estructuras y funcionalidades consideradas algo avanzadas por W3Schools


## Fecha y Hora
- Sintax:date(format,timestamp que es la fecha y hora)

- Explicaciones: Para obtener una fecha se puede especificar el orden.d - Representa el día del mes (01 a 31), m - Representa un mes (01 a 12), Y - Representa un año (en cuatro dígitos), l ('L' minúscula) - Representa el día de la semana
-Use la date()función para actualizar automáticamente el año de copyright en su sitio web:

- En el tiempo: H - formato de 24 horas de una hora (00 a 23), h - formato de 12 horas de una hora con ceros a la izquierda (01 a 12),, i - Minutos con ceros a la izquierda (00 a 59), s - Segundos con ceros a la izquierda (00 a 59,a - Antemeridiem y Postmeridiem minúsculas (am o pm)
- Se puede establecer la zona horario , date_default_timezone_set
- Sintaxis de MkTime: mktime(hour, minute, second, month, day, year)
- La función PHP mktime()devuelve la marca de tiempo de Unix para una fecha. La marca de tiempo de Unix contiene el número de segundos entre la Época de Unix (1 de enero de 1970 00:00:00 GMT) y la hora especificada.
- La strtotime()función PHP se utiliza para convertir una cadena de fecha legible por humanos en una marca de tiempo de Unix (la cantidad de segundos desde el 1 de enero de 1970 00:00:00 GMT).

## Incluir
- Sintax:include 'filename'; or 'require 'filename';
- Explicaciones: Supongamos que tenemos un archivo de pie de página estándar llamado "footer.php".Para incluir el archivo de pie de página en una página, se escribe : <?php include 'footer.php';?>

- Supongamos que tenemos un archivo llamado "vars.php", con algunas variables definidas, Luego, si incluimos el archivo "vars.php", las variables se pueden usar en el archivo de llamada:

- La require declaración también se usa para incluir un archivo en el código PHP. Sin embargo, hay una gran diferencia entre incluir y requerir; cuando se incluye un archivo con la includedeclaración y PHP no puede encontrarlo, el script continuará ejecutándose.
- Úselo requirecuando la aplicación requiera el archivo. Utilícelo includecuando el archivo no sea necesario y la aplicación deba continuar cuando no se encuentre el archivo.


## Manejo de archivos
- Sintax: echo readfile("archivo");

- Explicaciones: La readfile()función lee un archivo y lo escribe en el búfer de salida. El código PHP para leer el archivo y escribirlo en el búfer de salida es el siguiente (la readfile()función devuelve el número de bytes leídos en caso de éxito)

- La readfile()función es útil si todo lo que quiere hacer es abrir un archivo y leer su contenido.

## Abrir y leer archivos
- Sintax: $myfile = fopen("archivo", "r") or die("Unable to open file!");
echo fread($myfile,filesize("webdictionary.txt"));
fclose($myfile);

- Explicaciones: Un mejor método para abrir archivos es con la fopen()función. Esta función le ofrece más opciones que la readfile()función. El primer parámetro de fopen()contiene el nombre del archivo que se abrirá y el segundo parámetro especifica en qué modo se debe abrir el archivo. El siguiente ejemplo también genera un mensaje si la función fopen() no puede abrir el archivo especificado, al usar "or die"
- La fread()función lee de un archivo abierto. El primer parámetro de fread()contiene el nombre del archivo desde el que leer y el segundo parámetro especifica el número máximo de bytes para leer.
- La fclose()función se utiliza para cerrar un archivo abierto. Es una buena práctica de programación cerrar todos los archivos una vez que haya terminado con ellos. ¡No desea que un archivo abierto se ejecute en su servidor y consuma recursos! El fclose()requiere el nombre del archivo (o una variable que contenga el nombre del archivo) que queremos cerrar:
- La fgets()función se utiliza para leer una sola línea de un archivo.
- La feof()función comprueba si se ha alcanzado el "fin de archivo" (EOF). La feof()función es útil para recorrer datos de longitud desconocida.
- La fgetc()función se utiliza para leer un solo carácter de un archivo.


 
## Crear y escribir archivos
- Sintax:  $myfile = fopen("archivo", "w")

- La fopen()función también se utiliza para crear un archivo. Tal vez es confuso, pero en PHP, un archivo se crea usando la misma función que se usa para abrir archivos. Si usa fopen()en un archivo que no existe, lo creará, dado que el archivo se abre para escribir (w) o agregar (a).
- Explicaciones: La fwrite()función se utiliza para escribir en un archivo. El primer parámetro de fwrite()contiene el nombre del archivo en el que se escribirá y el segundo parámetro es la cadena que se escribirá. Después de que terminamos de escribir, cerramos el archivo usando la fclose()función.
- Ahora que "newfile.txt" contiene algunos datos, podemos mostrar lo que sucede cuando abrimos un archivo existente para escribir. Todos los datos existentes serán BORRADOS y comenzamos con un archivo vacío.
- Puede agregar datos a un archivo utilizando el modo "a". El modo "a" agrega texto al final del archivo, mientras que el modo "w" anula (y borra) el contenido antiguo del archivo.
-
## Subir archivos
- Explicaciones: Se debe crear un formulario para permitir a los usuarios elegir el archivo de imagen que desean cargar.
-Ya en el PHP, se escribe un codigo que limite las posibildiades del archivo a subir.Como si el archivo ya existe, su tamaño, solo permitir ciertos tipos de imagnes, comprobar si es una imagen.

## Cookies
- Sintax: setcookie(name, value, expire, path, domain, secure, httponly);

- Explicaciones
-
-

## Sesiones
- Sintax:
- Explicaciones
-
-

## Filtros
- Sintax:
- Explicaciones
-
-
## Funciones de llamada
- Sintax:
- Explicaciones
-
-

## Json
- Sintax:
- Explicaciones
-
-

## Excepciones
- Sintax:
- Explicaciones
-
-





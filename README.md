# Laboratorio: Carga Automática (Autoload) bajo el Estándar PSR-4
Guía de Puesta en Marcha
Para poner a funcionar este proyecto en tu entorno local, sigue estas instrucciones:

Descarga una copia del repositorio (clónalo).

Abre la consola de comandos (terminal) situándote en el directorio raíz.

Verifica que cuentas con la herramienta Composer instalada en tu equipo.

Ejecuta el comando correspondiente en la raíz para procesar el mapeo de clases y construir el directorio vendor.

Ejecuta el archivo index.php empleando tu servidor web local (por ejemplo, WampServer).

 Organización del Proyecto
app/Controllers/: Directorio destinado a alojar las clases lógicas (como ClienteController.php). El espacio de nombres correspondiente es App\Controllers.

composer.json: Archivo de manifiesto donde se vincula el prefijo de namespace App\ con el directorio físico app/.

index.php: Archivo principal y canal de acceso a la aplicación.

 Capturas y Comprobaciones
Ajustes en composer.json: Muestra de cómo se estructuró la sección de carga automática (autoload) bajo los lineamientos del estándar PSR-4.

Construcción del cargador en consola: Evidencia visual de la ejecución del comando composer dump-autoload, el cual se encarga de estructurar y optimizar el mapa de archivos.

Verificación en el navegador: Comprobación práctica de que el entorno web procesa e inicializa la clase de forma correcta, previniendo por completo los fallos de tipo "Class not found".

 Valoración Técnica y Aprendizajes
A lo largo de esta práctica de laboratorio, se pudieron validar los siguientes beneficios clave:

Código Limpio (Sostenibilidad): Se logra una arquitectura mucho más ordenada. Al incorporar nuevos módulos, modelos o controladores, se evita saturar el script de entrada con bloques interminables de sentencias require o include.

Carga Bajo Demanda (Lazy Loading): Se optimiza el rendimiento del servidor, ya que PHP solo importará el archivo de ClienteController.php cuando el flujo del programa lo requiera explícitamente mediante un new, reduciendo el gasto innecesario de memoria.

Normativa Universal: La adopción de PSR-4 unifica el criterio de organización. Esto permite que cualquier programador externo comprenda de inmediato la distribución de los componentes y la lógica del sistema basándose simplemente en los Namespaces.
## FOOTER
* **Universidad Tecnológica de Panamá** 
* **Facultad de Ingeniería de Sistemas Computacionales**
* **Licenciatura en Desarrollo y Gestión de Software**
* **Asignatura: Desarrollo de Software VII**
* **Profesora: Ing. Irina Fong**
* **Estudiante: Brian Lee**
* **Grupo: 1GS133**
* **Fecha: 29 Abril 2026**

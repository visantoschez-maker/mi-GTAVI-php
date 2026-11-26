# 🐊 Tarea GTA 🐊
###### Víctor Santos Sánchez - 2ºASIR

## 1º- Generar Estrellas ★★★☆☆
He modificado el código para que las estrellas de dificultad se generen mediante una función llamada generarEstrellas($dificultad), a la que se le pasa la dificultad de la misión como parámetro. Dentro de la función, se comprueba si la dificultad es fácil, media o difícil y se devuelve una cadena de emojis de estrellas correspondiente a cada nivel. De esta manera, se evita repetir el código en cada misión, se simplifica su visualización y se mejora la organización y reutilización del código.

## 2º- Añadir nuevos Personajes 🔫
He añadido nuevos personajes al sistema incorporándolos al array donde se almacenan los datos de los personajes, definiendo sus nombres, en este caso Lucia y Jason. De esta forma, la aplicación puede reconocerlos y mostrarlos junto al resto de personajes ya existentes, permitiendo ampliar el contenido sin tener que modificar la estructura principal del código.

## 3º- Obtener la misión más cara $
He creado la función obtenerMisionMasCara($misiones), que recibe el array de misiones y recorre sus elementos para comparar las recompensas, guardando aquella que tenga el valor más alto. De esta manera, la función devuelve la misión con mayor recompensa sin necesidad de ordenar todas las misiones. Después, en resultados.php, he llamado a esta función y he mostrado los datos de la misión obtenida, como su nombre y recompensa, utilizando htmlspecialchars() para escapar el texto y evitar que se interprete código HTML malicioso. Así, se destaca en los resultados la misión que ofrece la recompensa más alta.

## 4º- Añadir comentario al formulario 💬
He añadido un campo de texto llamado comentario al formulario mediante un < textarea >, permitiendo al usuario introducir un comentario y enviarlo junto con el resto de los datos. En procesar.php, he recogido el valor mediante $_POST, comprobando que sea una cadena de texto, limpiando los espacios sobrantes con trim() y validando que no supere los 500 caracteres. Finalmente, en resultados.php, he mostrado el comentario utilizando htmlspecialchars() con ENT_QUOTES y UTF-8, para escapar los caracteres especiales y evitar que se interprete código HTML o JavaScript introducido por el usuario, mejorando así la seguridad de la aplicación.

## 5º- Ordenar de mayor a menor 
He utilizado la función usort() para ordenar el array $misionesFiltradas antes de mostrarlas en pantalla. Mediante una función anónima y el operador de comparación <=>, comparo las recompensas de dos misiones, colocando primero la de mayor valor y después la de menor. De esta forma, las misiones aparecen ordenadas de mayor a menor recompensa antes de recorrerlas con el foreach, evitando tener que ordenarlas manualmente y facilitando su visualización en resultados.php.



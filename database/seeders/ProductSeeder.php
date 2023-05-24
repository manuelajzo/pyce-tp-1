<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('products')->insert([
            [
                "name" => "Cómo pintar cerámica paso a paso",
                // "price" => 780,
                "category" => "tutorial",
                "product_description" => "Antes de empezar con la explicación de la técnica paso a paso, creemos conveniente explicar los distintos tipos de pintura para cerámica que existen. Hablamos de la acrílica, epoxi, látex y barniz. \nAcrílica: Es la más sencilla de usar y requiere una inversión mínima. Su plasticidad y su facilidad de secado hacen que sea una manera limpia, sencilla y efectiva de pintar multitud de objetos y superficies, de distintos materiales, incluida la cerámica. \nEpoxi: Utilizada en baldosas de suelos o paredes, es más costosa de trabajar, pero tiene muy buen resultado en superficies en las que va a haber mucho tráfico de personas. \nLátex: Este tipo de pintura tiene un acabado muy bueno, liso y brillante, pero es muy delicado. \nBarniz: ideal para mantener el color. Una capa de barniz después de la pintura es imprescindible para que el color no salte. Puedes elegir acabado brillo o mate. \nCómo pintar cerámica paso a paso \nLas siguientes instrucciones también se aplican para saber cómo pintar un jarrón, una vasija o cualquier otro objeto de cerámica: \nEl primer paso es limpiar el objeto a conciencia y que quede liso y sin grumos: es muy importante para que la pintura se adhiera más fácilmente. Para ello puedes ayudarte de una lija si lo necesitas, aunque úsala suavemente, podría deformar la pieza; utiliza lijas suaves. Si el objeto lo acabas de crear tú en un molde, usar un rascador es una buena opción, así como una esponja para borrar las líneas y limpiar la superficie. \nEl siguiente paso es seleccionar los pinceles adecuados y los colores que vayas a usar: \n1) el pincel grueso o pincel plano para colorear uniformemente la cerámica y los espacios;
                2) el pincel fino para los detalles;
                3) un lápiz de pintura para líneas y palabras. \nPara obtener el tono deseado, lo más recomendable es darle unas tres capas de pintura al objeto. Lo irás viendo conforme vayas pintando y dejes secar. Es una vez seco cuando verás si el tono que quieres es el deseado o si por el contrario necesita otra capa más de pintura. Si vas a comenzar por dar una capa a todo el objeto, ten cuidado de no excederte con la pintura donde van otros colores. \nEs recomendable pintar en un solo sentido y esperar un tiempo prudente a dejar secar la pintura base antes de pasar a los detalles. Si vas a superponer colores, es mejor comenzar por el color más claro , ya que el color más oscuros se purga sobre el más claro al utilizarlo primero. \nPara decoraciones más precisas, puedes ayudarte de cinta. Con ella puedes pintar líneas rectas. También puedes utilizar plantillas para pintar distintos motivos decorativos. \nSi te equivocas en el proceso, puedes utilizar unas esponjas con un poco de agua, o un poco de algodón humedecido. Si ha pasado más tiempo, utiliza agua más caliente para poder limpiar. \nEl último paso es meter el objeto al horno para que la pintura se acabe de fijar. Deja que se seque 24 horas y luego mételo al horno a 150ºC unos 35 minutos. Una vez termine, deja enfriar el objeto por completo antes de sacarlo. \nPintar un jarrón o cualquier elemento con pintura para cerámica puede ser un gran pasatiempo, además de poder dar una nueva vida a los objetos que tengas en casa. Practica y si no te atreves con la creación de esculturas, puedes empezar pintándolas: un hobbie reconfortante y, a la par, relajante.",
                "image" => "bowlKekko.png",
                "image_description" => "Bowl Kekko color: negro gris y blanco de medidas 16,5cm de diamentro por 5,5cm de alto",
                "created_at" => now(),
                "updated_at" => now()
                
            ],
            [
                "name" => "La toxicidad en los esmaltes cerámicos y su uso en el entorno culinario",
                // "price" => 1000,
                "category" => "esmaltado",
                "product_description" => "La presencia de metales en arcillas y esmaltes hace que a menudo se abra un debate en torno a la toxicidad del material y medio cerámicos.

                No podemos negar dicha presencia. Sin embargo, es importante señalar que el porcentaje en la que estos elementos está presente no siempre es lo suficientemente alto como para producir daños en la salud.
                
                El plomo y el cadmio son los dos componentes más tóxicos que utilizamos en cerámica. El plomo se emplea principalmente en baja temperatura para conseguir que los esmaltes fluyan con facilidad. Hoy en día este fundente ha sido sustituido por «fritas» que no son tóxicas.
                
                El cadmio, por otro lado,  se utiliza para conseguir naranjas y rojos brillantes.
                
                Otros componente como el cobre o el selenio son tóxicos en dosis altas.
                
                No obstante, si queremos asegurarnos de que nuestro esmalte carece de toxicidad, es importante eliminar en la medida de los posible, la presencia de los siguientes componentes: dióxido de manganeso, bario, vanadio, níquel y cromo.
                
                 
                
                Manipulación de los esmaltes 
                Actualmente, los esmaltes comerciales que hay en el mercado no tienen plomo o cadmio. Sin embargo, es importante manipular todos los esmaltes de forma adecuada si se presentan en formato polvo.
                
                En ocasiones pueden contener, por ejemplo, manganeso, que si bien no es tóxico tras la cocción, sí lo es durante la manipulación y la combustión, al ser respirado.
                
                Lo mismo ocurre con ciertas arcillas en polvo, debido a la presencia de metales.
                
                Es importante utilizar una mascarilla y guantes durante la manipulación de los mismos. Evitaremos riesgos y alargaremos la vida útil de nuestros pulmones.
                
                Uso culinario: esmaltes y otros datos a tener en cuenta
                La presencia de cadmio y plomo es lo que hace que un esmalte sea especialmente tóxico y no sirva por tanto, para esmaltar piezas de uso alimentario. No obstante, eliminados ambos, tenemos que tener especial cuidado con las cocciones que hagamos en nuestro horno. Si cocemos con plomo una pieza de uso exclusivamente decorativo, los ladrillos podrán absorber plomo que luego irán desprendiendo durante otras cocciones.

                Si conseguimos una atmósfera lo más neutra posible en el horno, podremos garantizar la ausencia de tóxicos en nuestros objetos de uso culinario.

                Por otro lado, además de los esmaltes, si queremos hacer vajillas u otras piezas para usar en cocina, es importante también hacer pruebas relacionadas con las siguientes áreas:

                Resistencia a la abrasión: comprobar si se raya con facilidad. Suele ocurrir en mayor medida con esmaltes mate.
                Alimentos ácidos. Es importante medir el grado de abrasión por alimentos ácidos de una pieza cerámica. Para ello podemos dejar sobre la pieza una rodaja de limón toda la noche. O sumergirla en vinagre durante tres horas y ver si cambia de color. En ese caso la superficie se verá ligeramente corroída. Esto puede provocar que salgan componentes toxicos de la pieza.
                Prueba de detergentes. Una forma de poner a prueba nuestras piezas frente a jabones y detergentes es poner 50 gramos de carbonato de sodio en un litro de agua, y llevarlo a ebullición. A continuación bajamos el fuego y «cocinamos» la pieza durante 6 horas. Comprobaremos si ha cambiado el color o el brillo.
                Choque térmico. Una forma sencilla de medir esto es colocar nuestra pieza en el congelador durante varias horas. A continuación la meteremos en una olla con agua hirviendo. Este proceso puede repetirse hasta tres veces y observar la resistencia de la pieza.",
                "image" => "tazaBarna.png",
                "image_description" => "Taza Barna color beige, de medidas 9,5 de diametro por 9 de alto",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Consejos para cuidar tus piezas de cerámica artesanal",
                // "price" => 1400,
                "category" => "consejos",
                "product_description" => "Seguro que si compraste una pieza de cerámica artesanal tendrás intención de que permanezca intacta por mucho tiempo. ¡Y realmente una pieza cerámica puede durar miles de años! Por eso las encontramos en tantos museos …
                Aquí te dejo entonces, algunos consejos para que puedas disfrutarlas por los siglos de los siglos!!!
                
                1-      Cuida de no someter tus piezas a grandes diferencias térmicas. ¿A qué me refiero con esto? Por ejemplo, si las utilizas para cocinar o servir alimentos, debes tener cuidado de no introducir algo muy frío si la pieza está caliente, o de apoyarla sobre mármol o granito cuando contiene algo muy caliente (por ejemplo al sacarla del horno).
                
                2-      La cerámica es frágil a los golpes. Esto se da sobre todo si es una pieza con espesores muy delgados. ¡Así que trátala con mucho cuidado!
                
                3-      No dejes tus piezas cerámicas sumergidas en agua. En general tienen una parte que no está esmaltada y absorbe agua, y esto puede generar problemas de craquelado en los esmaltes.
                
                4-      Si la lavas, no apoyes sobre ella elementos pesados. Intenta secarla y guardarla después de utilizarla.
                
                5-      Puedes utilizarla como vajilla, pero asegúrate de que esté realizada con esmalte apto para este fin. En CONO SUR – cerámica artesanal, utilizamos esmaltes aprobados para este uso. Existen otros esmaltes, que en general se deben utilizar solo en objetos decorativos, porque están hechos con sustancias que pueden causar problemas a tu salud (por ejemplo plomo).
                
                6-      La cerámica artesanal en general es apta para utilizar en microondas. Solo debes tener cuidado si tiene detalles dorados o plateados, que pueden estar hechos con pintura que tiene metales en su composición y pueden arruinar tu electrodoméstico.
                
                ",
                "image" => "fuenteKekko.png",
                "image_description" => "Fuente Kekko color negro gris y blanco, de medidas 23 de diámetro por 4 cm de alto",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Técnicas de esmaltado en cerámica: Explorando colores y texturas",
                // "price" => 980,
                "category" => "esmaltado",
                "product_description" => "El esmaltado es una etapa crucial en el proceso cerámico, donde los ceramistas pueden agregar colores vibrantes y texturas interesantes a sus creaciones. En este artículo, exploraremos algunas técnicas populares de esmaltado que permiten a los artistas cerámicos experimentar y lograr resultados sorprendentes.

                Una técnica comúnmente utilizada es el esmaltado con inmersión, donde se sumerge la pieza en un recipiente con esmalte líquido. Esta técnica proporciona una cobertura uniforme y permite crear efectos de color suaves o degradados.
                
                Otra técnica es el esmaltado mediante pincel, que ofrece más control y precisión en la aplicación del esmalte. Los ceramistas pueden utilizar diferentes pinceles para crear trazos, patrones y detalles intrincados en sus piezas.
                
                Además, existen técnicas de esmaltado como el espray, el salpicado y el esmaltado en relieve, que ofrecen resultados únicos en términos de textura y efectos visuales.
                
                El esmaltado en cerámica es un proceso emocionante y creativo que permite a los artistas experimentar con una amplia gama de colores y texturas. Ya sea a través del esmaltado con inmersión, el pincelado o técnicas más audaces, el esmaltado ofrece infinitas posibilidades para embellecer y dar vida a las piezas cerámicas.",
                "image" => "bowlMateo.png",
                "image_description" => "Fuente Mateo color negro gris y blanco, de medidas 16,5 de diámetro por 5,5 de alto",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "La cerámica como terapia creativa: Beneficios para la salud mental",
                // "price" => 700,
                "category" => "salud-mental",
                "product_description" => "La cerámica no solo es una forma de arte, sino también una terapia creativa que puede tener un impacto positivo en nuestra salud mental. En este artículo, exploraremos los beneficios emocionales y psicológicos que la cerámica puede brindar, convirtiéndola en una práctica terapéutica popular.

                La cerámica proporciona un escape de la rutina diaria y promueve la relajación. Al sumergirnos en el proceso creativo de dar forma al barro, nos enfocamos en el presente y dejamos de lado las preocupaciones cotidianas. Este enfoque en el momento presente fomenta la atención plena y reduce el estrés.
                
                Además, trabajar con cerámica nos permite expresarnos de manera única. A través de la creación de formas, texturas y colores, podemos comunicar nuestras emociones y pensamientos de una manera no verbal. Esto puede ser especialmente beneficioso para aquellos que tienen dificultades para expresarse verbalmente.
                
                La cerámica también puede aumentar la autoestima y la confianza en uno mismo. Ver cómo nuestras creaciones toman forma y mejoran con el tiempo nos brinda un sentido de logro y satisfacción personal.
                
                La cerámica como terapia creativa es una forma poderosa de cuidar nuestra salud mental. Nos brinda un espacio para la relajación, la expresión personal y el crecimiento emocional. Si estás buscando una actividad que te ayude a encontrar equilibrio y bienestar, la cerámica puede ser la respuesta.",
                "image" => "tazaLaura.png",
                "image_description" => "Taza Laura color beige y negro de medidas 16,5 de diámetro por 5,5 de alto",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Diferencias entre cerámica artesanal e industrial",
                // "price" => 530,
                "category" => "cerámica",
                "product_description" => "Podríamos definir como cerámica artesanal, aquella que es realizada por un artesano ceramista en forma individual, siendo cada pieza realizada a mano, con su impronta personal. Pueden utilizarse máquinas y herramientas simples, sin el uso de tecnología o de procesos industriales.

                La cerámica industrial se realiza en fábricas, en las que se emplean maquinarias y robots que realizan los procesos necesarios para convertir la materia prima (arcilla), en un objeto cerámico. En este proceso se emplean tecnología y máquinas sofisticadas para realizar producciones automatizadas en masa, a partir de insumos ya procesados.
                
                Si comparamos los dos procesos, el realizado a mano y el industrial, se entiende que el primero tendrá pequeños defectos e imperfecciones, propios del modo en que la pieza fue realizada, en tanto el segundo será un objeto que se acerca mucho a la perfección. ¿Pero es esa perfección lo que estamos buscando?

                Creo que los objetos artesanales tienen una magia especial, en cada uno de ellos se encuentra parte del alma de quien la fabricó, parte del ser humano, ya que la cerámica es una actividad que la humanidad realizó y desarrolló desde el inicio de los tiempos. De esta manera se consiguen objetos especiales y únicos. ¿Será por eso que nos provoca un sentimiento especial cuando tenemos en nuestras manos un objeto de cerámica artesanal? Creo que hay genéticamente un vínculo ancestral con la arcilla y la cerámica que nos remonta a nuestros orígenes, y que nunca una máquina podrá igualar.

                Si comparamos con otros procesos, también se pensaba que los alimentos industrializados irían reemplazando a la comida casera. ¡Y que equivocados estaban! Hoy las comidas hechas en casa y gourmet, son las más apreciadas.

                Lo mismo ocurre con la cerámica artesanal, nunca podrá ser reemplazada por la labor de una máquina, por más perfección que se logre en ella, nunca contendrá el alma del ser humano que ha tocado la arcilla y la ha transformado en un objeto único e irrepetible.",
                "image" => "mateMartha.png",
                "image_description" => "Fuente Meneca color blanco de medidas 7,5 de diámetro por 9cm de alto",
                "created_at" => now(),
                "updated_at" => now()
            ]
        ]);
    }
}

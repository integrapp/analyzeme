analyzeme
=========

Analyzeme is a Proyect from HackDayZgza 2913-06-29:
https://etherpad.mozilla.org/HackDayZgza

Proyecto/Idea: Programa de estadísticas del día a Día
Encargado:  Víctor Jiménez @capitangolo
Objetivo del Proyecto/Idea: Usar información propia para mejorar la vida. Toma de decisiones sobre hábitos de vida saludables con información empírica. 
Día a día hay ciertos aspectos que nos puede interesar controlar. Estado de ánimo, Horas que duermo, Peso, Lo que comemos. Estaría bien crear una app que permita a la gente introducir sus datos y obtener un breve análisis estadístico que de valor a esos datos.
Requisitos: Web, iOS o Android. Conocimientos estadísticos.

Ejemplo de toma de datos:
http://www.instructables.com/files/orig/F3S/6YXN/GHFJXG8Z/F3S6YXNGHFJXG8Z.xls

Datos a tomar:

Peso:
    * Monitorización de uno mismo.
    > Altura
    > Índice de Masa corporal
    > Masa
    > Edad
    < Peso tomado
    < Peso ponderado
    < Relación con IMC
Dieta:
    * Antes de comer algo, saber si podemos comerlo.
    * Saber si nuestra dieta es correcta.
    * Proponer qué debemos comer. 
    > Objetivo: Régimen. No Régimen.
    > Grupos alimenticios.
    > Cantidad. (gramos, plato grande, número de tomates…)
    < Aviso de excesos. (calorías, grasas, etc.)
    < Dieta correctora.
    < Propuesta de dieta.
    < Propuesta de un alimento.
    < Respuesta a ¿Puedo comer esto?
Horas de sueño/Calidad del sueño:
    * Control de las horas de sueño
    * Sensores: Proponer momento de despertar
Fitness:
    * Calorías que quemamos en una sesión
        Ecuación de Harris-Benedict
        Cálculo de metabolismo basal para hombresMB = 66.4730 + (13.7516 x 90P) + (5.0033 x 170A) - (6.7550 x 47
E)
        Cálculo de metabolismo basal para mujeresMB = 655.0955 + (9.5634 x 90P) + (1.8496 x 170A) - (4.6756 x 47E)
    * Proponer ejercicios.
    * Sensores: WiiFit: Saber si estás haciendo bien el ejericio
Posición:
    * Fitness: Ejercicio que haces.
    * Proponer rutas y horarios (evitando tentaciones.).
        * Añadir tareas. (Ir a comprar el pan).
    * Controlar cosas fuera de los hábitos. Estar enfermo, vacaciones, etc… y proponer consejos. Cambiar dieta, etc…
Huella ecológica:
    * Transporte que usas
    * Lo que comes
    * Temperatura de casa
    * Tiempo de ducha (caudalímetro casero?)
Contaminación Lumínica:
Estado de ánimo:
    * A partir de los tweets y del estado de ánimo.
    

Posible uso de datos de aplicaciones de terceros?
Ejemplo:

- Sleep Cycle (uso del acelerómetro en la cama para monitorizar los ciclos de sueño)
- Runkeeper (registro de actividad, rutas, horarios, también monitoriza el peso)

POSIBILIDAD DE USAR SIRI u otro asistente de voz para rellenar los campos. Actualizar los datos por voz. 

YO CUANTIFICADO!!!

Code:
https://github.com/integrapp/analyzeme

Datos:
http://www.bedca.net/bdpub/index.php
http://www.aesan.msc.es/AESAN/docs/docs/come_seguro_y_saludable/guia_alimentacion2.pdf

tabla calorías alimentos http://www.legourmett.cl/tabla-de-calorias-de-alimentos.html

Planificación:

iteración 1:
    * Web
    * Registro de usuario
    * Peso
        * Masa cada día.
        * Nos dice la Aprox. del peso.
    * Dieta
        * Cantidad que comemos de los Grandes Grupos.
        * Nos dice calorías consumidas.
        * Si hemos cubierto bien las necesidades.

Contacto participantes: 
Victor maitol: @capitangolo
Emilio mailto:
Jesus Ángel mailto: @eckelon
Paco Estupiñán mailto: @pacoramon


Enlaces a tablas de calorias por alimentos:
http://www.legourmett.cl/tabla-de-calorias-de-alimentos.html

Tabla de calorías por alimento:
Vino blanco        1 copa (100 ml)        85 
Vino rosado        1 copa (100 ml)        74 
Vino tinto        1 copa (100 ml)        65 
Café c/azucar        1 tacita (50 ml.)        26 
Zumo de naranja natural        1 vaso (200 ml.)        74 
aceite de oliva 1 cda sopera (10gr( 90 kal) 

CEREALES Y DERIVADOS 
100 g calorías 
Arroz hervido        122 
Arroz inflado y tostado        351 
Copos de cereales        311 
Copos de maíz tostado        367 
Galletas "cracker" 447 
Harina blanca        350 
Harina integral        333 
Harina de maíz        354 
Macarrones hervidos        114 
Pan blanco        243 
Pan blanco tostado        299 
Pan integral        228 
Pan negro        242 
Pan tostado al horno        409 
Sémola        352 

• LACTEOS Y HUEVOS 
100 g        calorías 
Yema de huevo        350 
Clara de huevo        37 
Crema doble        462 
Crema sencilla        219 
Huevo frito        230 
Huevo duro        160 
Leche condensada entera        354 
Leche en polvo descremada        326 
Leche fresca entera        66 
Leche fresca descremada        35 
Manteca        793 
Queso cremoso        813 
Queso Cheddar        425 
Queso Camembert        309 
Queso Gruyere        465 
Queso Gouda        340 
Queso Parmesano        420 
Yogur descremado        50 

• ACEITES Y GRASAS 
100 g calorías 
Aceite de oliva        930 
Margarina        795 

• CARNES, AVES, PESCADOS 
100 g calorías 
Costilla de cerdo asada        544 
Costilla de ternera asada        216 
Costilla de cordero asada        500 
Costilla de cordero frita        629 
Churrasco de ternera a la plancha        273 
Pavo asado        196 
Pollo asado        189 
Pollo hervido        203 
Bacalo fresco frito        175 
Bacalao fresco al vapor        97 
Langostinos        104 
Lenguado al vapor        82 
Lenguado frito        274 
Merluza al vapor        82 
Merluza asada        140 
Merluza frita        160 
Sardinas en conserva        294 
Mejillones hervidos        87 
Salmón al vapor        199 
Trucha al vapor        133 
FRUTAS 
100 g calorías 
Aceitunas en salmuera        106 
Palta        88 
Damascos en conserva        106 
Damascos frescos        28 
Cerezas frescas        47 
Damascos secos        183 
Ciruelas frescas        38 
Ciruelas pasas        81 
Dátiles        248 
Frambuesas frescas        17 
Frambuesas en conserva        101 
Frutillas        26 
Higos frescos        41 
Higos secos        214 
Limones        15 
Mandarinas        34 
Duraznos frescos        47 
Duraznos en conserva        87 
Melón        24 
Naranjas        35 
Peras        40 
Piñas        46 
Plátanos        77 
Pomelos        22 
Uvas blancas        63 
Uvas negras        60 

• FRUTOS SECOS 
100 g calorías 
Almendras        598 
Maníes        603 
Coco        365 
Nueces        148 
Nueces de Brasil        644 

• VERDURAS 
100 g calorías 
Achicoria        9 
Alcauciles cocidos        15 
Alubias cocidas        89 
Apio crudo        9 
Berro        15 
Brócoli hervido        14 
Zapallitos cocidos        7 
Cebollas cocidas        13 
Cebollas crudas        23 
Cebollas fritas        355 
Repollo crudo        25 
Repollitos de Bruselas cocidos        16 
Repollo colorado crudo        20 
Coliflor cocida        11 
Colinabos cocidos        11 
Espárragos cocidos        18 
Espinacas cocidas        26 
Arvejas en conserva        86 
Arvejas hervidas        49 
Habas cocidas        43 
Chauchas cocidas        7 
Lechuga        11 
Lentejas        86 
Papas fritas        559 
Papas hervidas        75 
Papas asadas        123 
Pepino        9 
Puerros cocidos        25 
Remolacha        44 
Tomates crudos        14 
Tomates fritos        71 
Zanahorias        21 

• BEBIDAS ALCOHOLICAS 
100 g calorías 
Cerveza común        31 
Sidra        42 
Jerez dulce        135 
Jerez seco        114 
Oporto        152 
Champagne        74 
Vino blanco fuerte        93 
Vino blanco suave        73 
Vino tinto Beaujolais        68 
Vino tinto Borgoña        72 
Vino tinto Chianti        65 
Licores con 70 por ciento de alcohol        222 



TABLA ENERGETICA DE CALORIAS 
Productos        Cantidades        Kcal. 
Grasas y Aceites 
Aceite de oliva        1 c. sopera (10g)        90 
Aceite de coco        1 c. sopera (10g)        135 
Aceite de higado de bacalao        1 c. sopera (10g)        130 
Aceite de germen de trigo        1 c. sopera (10g)        89 
Aceite de girasol        1 c. sopera (10g)        90 
Mantequilla c/sal        1 c. sopera (10g)        77 
Mantequilla s/sal        1 c. sopera (10g)        76 

Lácteos 
Crema de leche        1 c. sopera (15g)        37 
Leche con chocolate        1 vaso (150ml)        185 
Leche condensada        1 c. sopera (20g)        66 
Leche desnatada        1 vaso (200ml)        70 
Leche entera        1 vaso (200ml)        124 
Leche semidesnatada        1 vaso (200ml)        96 
Nata        1 c. sopera (20g)        42 
Cuajada        1 c. sopera (20g)        52 
Danone Dan'Up        Unidad        172 
Yogur desnatado Danone        Unidad        126 
Yogur natural Danone        Unidad        138 

Quesos 
Camembert        50 g        136 
Ementhal        30 g        85 
Gorgonzola        30 g        119 
Gruyere        25 g        93 
Muzarella        15 g        47 
Parmesano        30 g        115 
Ricota        1 c. sopera (20g)        60 
Roqueford        25 g        100 
Crema de queso        1 c. sopera (20g)        25 
Fundido        35 g        124 

Huevos 
Huevo        Unidad        78 
Huevo crudo        Unidad        76 
Huevo frito        Unidad        108 
Clara de huevo cocida        Unidad        13 
Clara de huevo frita        Unidad        22 
Yema de huevo frita        Unidad        85 
Tortilla francesa        1 huevo        104 

Sopas y Cremas 
Crema de Espárragos        1 plato (250ml)        159 
Crema de Champiñones        1 plato (250ml)        216 
Sopa de Cebolla        1 plato (250ml)        173 
Sopa de Tomate        1 plato (250ml)        88 
Sopa de Vegetales        1 plato (250ml)        72 

Pastas 
Canelones        Unidad (100 g)        133 
Spaguettis hervidos        1 plato (160 g)        233 
Macarrones hervidos        1 ración (100 g)        154 
Tallarines hervidos        1 plato (160 g)        456 
Macarrones con salsa de tomate        1 ración (100 g)        104 
Raviolis de carne        1 ración (100 g)        288 
Tortellinis de carne        1 plato (250 g)        931 

Bebidas Alcohólicas 
Aguardiente        1/2 copa (100 ml)        231 
Cerveza        1 jarra (240 ml)        101 
Champagne        1 copa (100 ml)        85 
Sidra        1/2 copa (100 ml)        50 
Coñac        1/2 copa (50 ml)        125 
Rón        1copa (50 ml)        110 
Vermut dulce        1copa (35 ml)        50 
Vermut seco        1 copa (40 ml)        40 
Vino blanco        1 copa (100 ml)        85 
Vino rosado        1 copa (100 ml)        74 
Vino tinto        1 copa (100 ml)        65 
Vodka        1/2 copa (30 ml)        72 
Whisky        1 dosis (100 ml)        240 

Refrescos 
Coca-Cola        1 lata (350 ml)        137 
Fanta        1 lata (350 ml)        189 
Sprite        1 lata (350 ml)        115 

Pescados 
Atún en aceite        1 c. sopera (20 ml)        56 
Bacalao a la parrilla        100 g.        110 
Caviar        100 g.        29 
Gallo        100 g.        109 
Langosta cocida        Unidad (200 g.)        196 
Langostinos        8 unidades (100 g.)        112 
Lenguado a la parrilla        100 g.        90 
Calamares a la romana        100 g.        190 
Merluza hervida        100 g.        97 
Mero        100 g.        96 
Mejillones al vapor        100 g.        79 
Ostras        3 unidades (100 g.)        81 
Róbalo        100 g.        72 
Salmón ahumado        100 g.        204 
Sardinas        2 unidades (100 g.)        134 
Sardinas en aceite        3 unidades (100 g.)        298 
Caviar        100 g.        29 

Carnes y Aves 
Bacon frito        2 lonchas finas (20 g.)        97 
Bistec de cerdo        1 unidad (150 g.)        360 
Cabrito        100 g.        357 
Buey cocido        100 g.        235 
Buey asado        100 g.        288 
Cordero        100 g.        122 
Chuleta de cordero asada        100 g.        356 
Chuleta de cerdo        100 g.        336 
Costillas de cordero        100 g.        352 
Costilla de cerdo        150 g.        390 
Muslo de pollo        100 g.        144 
Muslo de pollo asado c/piel        100 g.        110 
Muslo de pollo asado s/piel        100 g.        98 
Muslo de pollo hervido        100 g.        110 
Higado de buey frito        100 g.        210 
Higado de cordero        100 g.        196 
Higado de pollo        100 g.        124 
Higado de cerdo        100 g.        264 
Higado de ternera        100 g.        256 
Pollo hervido        100 g.        220 
Pollo hervido s/piel        100 g.        188 
Pollo a la parrilla        100 g.        146 
Lomo de cerdo        100 g.        362 
Pato asado c/piel        100 g.        320 
Pato asado s/piel        100 g.        191 
Pechuga de pollo asada        100 g.        109 
Pechuga de pollo asada s/piel        100 g.        98 
Pechuga de pollo hervida        100 g.        109 
Perdíz asada        100 g.        206 
Pierna de cabrito asada        100 g.        357 
Pierna de cordero asada        100 g.        194 
Jamón de cerdo asado        200 g.        393 
Tocino ahumado        20 g.        138 
Ternera hervida        100 g.        230 
Ternera asada        100 g.        231 
Ternera guisada        100 g.        56 

Legumbres y Verduras 
Acelgas hervidas        180 g.        30 
Alcachofas hervidas        Unidad (120 g.)        60 
Arroz blanco hervido        1 c. sopera (20 g.)        26 
Berenjenas        Unidad (250 g.)        489 
Cebolla hervida        Unidad (100 g.)        41 
Escarola        20 g.        7 
Habas hervidas        80 g.        100 
Lentejas hervidas        1 c. sopera (20 g.)        39 
Nabos        100 g.        35 
Pepino        Unidad (150 g.)        5 
Pimiento verde        2 unidades (100 g.)        29 
Rabanitos        100 g.        16 
Tomate        Unidad (100 g.)        20 

Frutas y Frutos Secos 
Almendras        10 unidades (100 g.)        640 
Avellanas        10 unidades (100 g.)        633 
Castañas asadas        100 g.        340 
Cerezas        10 unidades (100 g.)        97 
Higos        Unidad (50 g.)        68 
Higos secos        Unidad (30 g.)        60 
Kiwi        Unidad        46 
Naranja        Unidad        46 
Lima        2 unidades (100 g.)        51 
Limón        Unidad        12 
Melón        1 trozo medio (160 g.)        60 
Nectarina        Unidad (100 g.)        64 
Pera        Unidad (100 g.)        64 
Melocotón        Unidad (150 g.)        63 
Uva blanca        100 g.        76 
Uvas pasas        1 c. sopera (20 g.)        60 

Cafés y Zumos 
Café c/azucar        1 tacita (50 ml.)        26 
Zumo de naranja natural        1 vaso (200 ml.)        74 
Zumo de lima natural        1 vaso (200 ml.)        74 
Zumo de melocotón natural        1 vaso (200 ml.)        64 
Zumo de tomate natural        1 vaso (200 ml.)        23 

Condimentos 
Azucar blanco refinado        1 cucharita rasa (10 g.)        48 
Ajo        1 diente (5 g.)        7 
Comino        1 cucharita rasa (6 g.)        3 
Curry        1 cucharita rasa (6 g.)        11 
Mostaza        1 cucharita rasa (10 g.)        8 
Paprica        1 cucharita rasa (6 g.)        20 
Vinagre        1 c. sopera (10 g.)        2 
Caldo de carne Maggi        1 pastilla        33 


________________________________________        


Condimentos 
Cantidades        Kcal. 
Azucar blanco refinado        1 cucharita rasa (10 g.)        48 
Ajo        1 diente (5 g.)        7 
Comino        1 cucharita rasa (6 g.)        3 
Curry        1 cucharita rasa (6 g.)        11 
Mostaza        1 cucharita rasa (10 g.)        8 
Paprica        1 cucharita rasa (6 g.)        20 
Vinagre        1 c. sopera (10 g.)        2 
Caldo de carne Maggi        1 pastilla        33 
Pescados        
Cantidades        Kcal. 
Atún en aceite        1 c. sopera (20 ml)        56 
Bacalao a la parrilla        100 g.        110 
Caviar        100 g.        29 
Gallo        100 g.        109 
Langosta cocida        Unidad (200 g.)        196 
Langostinos        8 unidades (100 g.)        112 
Lenguado a la parrilla        100 g.        90 
Calamares a la romana        100 g.        190 
Merluza hervida        100 g.        97 
Mero        100 g.        96 
Mejillones al vapor        100 g.        79 
Ostras        3 unidades (100 g.)        81 
Róbalo        100 g.        72 
Salmón ahumado        100 g.        204 
Sardinas        2 unidades (100 g.)        134 
Sardinas en aceite        3 unidades (100 g.)        298 
Caviar        100 g.        29 

Refrescos 
Cantidades        Kcal. 
Coca-Cola        1 lata (350 ml)        137 
Fanta        1 lata (350 ml)        189 
Sprite        1 lata (350 ml)        115 

Uva        68K        100 gr. 
calabaza        24k        
Maíz dulce en conserva        50k        
Rábanos        20k        
Remolacha        40        
tomate        22        
banana        52        
pollo a la parrilla        146        
Sardinas en aceite        298        




Con menos de 100 Kilocalorías 
Abadejo        80        
Endibia        20        
Naranja        40 
Acelgas        10        
Espárragos        20        
Damasco        50        
Espinacas        20        
Ostras        70 
Alcachofas        90        
Frambuesas        40        
Patatas        70 
Apio Cabeza        20        
Fresas        30        
Pepinos        10 
Apio Hojas        10        
Gambas        100        
Pera        60 
Arándanos        40        
Grosellas negras        50        
Bacalao        80        
Grosellas rojas        40        
Pimiento        20 
Berenjena        20 
Guindas        60        
Piña fresca        60 
Berros        40        
Guisantes verdes        80 
Plátano        90 
Berza        40        
Higos frescos        60        

Hinojo        20        
Pomelo        40 
Brocoli        30        
Huevo entero (60 gr. )80        
Puerro        20 
Brrotes de soja        60        
Judías verdes        30        
Rábanos        10 
Calabacín        20        
Calabaza        20        
Kiwi        50        
Refrescos azucarados        50 
Calamar        80        
Langosta        90        
Remolacha        40 

Leche desnatada        40        
Repollo        30 

Leche entera        70        
Requesón no graso        80 

Lechuga        15        
Rodaballo        80 
Cava, vino espumoso        80        
Lenguado        90        
Sandía        40 
Cebollas        30        
Setas comestibles        20 
Cerezas        60        
Ternera magra        100 
Champiñones        20        
Maíz fresco        90        
Tomates        20 
Ciruelas        50        
Mandarina        50        
Uvas        70 
Clara de huevo (35 gr.)        20        
Mango        60        
Vino 11º        70 
Col china        10        
Manzana        60        
Yogur desnatado        40 
Col rizada        20        
Mejillones        60        
Yogur graso 3,5 mg.        70 
Col de Bruselas        40        
Melocotón        40        
Zanahorias        30 
Coles fermentadas        25        
Melón        50        
Zarzamora        40 
Coliflor        20        

Entre 100 y 400 Kilocalorías 
Aguacate        230        
Garbanzos        310        
Pollo        110 
Aguardiente 38º        210        
Germen de trigo        300        
Queso brie 50% mg.        360 
Alubias secas        300        
Guisantes amarillos secos        340        
Queso Camenbert 30% mg.        360 
Anguila        300        
Habas de soja        340        
Queso Camembert 50% mg.        330 
Anguila ahumada        350        
Hígado de cerdo        150        
Queso Camembert 60 mg.        400 
Arenques frescos        220        
Higado de pollo        140        
Queso Edam 30% mg.        230 
Arenque salado o aumado        290        
Jamón cocido        220        
Queso Edam 45% mg.        370 
Arroz        350        
Jamón ahumado        400        
Queso Emmental 45% mg.        400 
Atún        240        
Lentejas        330        
Queso fresco 60 % mg.        350 
Azúcar        400        
Miel        300        
Queso fundido 45% mg.        280 
Caballa        200        
Mollejas de ternera        110        
Queso Gorgonzola 45% mg.        380 
Carne de vacuno        150        
Nata líquida 30 % mg.        320        
Queso Gouda 45% mg.        380 
Carne de vacuno picada        220        
Pan candeal de trigo        250        
Queso parmesano        400 
Castañas        190        
Pan integral de trigo        210 
Queso Roquefort 50% mg.        370 
Cerdo magro        172        
Pan rallado        350        
Requesón 40% mg.        170 
Cerdo paletilla        270        
Pan tostado        370        
Riñones de ternera        130 
Coco        380        
Panceta de cerdo        390        
Salmón        220 
Conejo        160        
Pasas        280        
Salvado de trigo        190 
Copos de avena        380        
Pastas alimenticias        360        
Sardinas        140 
Corn flakes        360        
Pato        240        
Sémola de trigo        330 
Gallina        270        
Pavo        120        
Solomillo de cordero        130 
Gallineta        120        
Pierna de cordero        230        
Trucha asalmonada        110 
Ganso        360        

Más de 400 Kilocalorías 
Aceite de oliva        930        
Mayonesa        770 
Aceites de semillas        930        
Mazapán        500 
Almendras        620        
Morcilla serrana        460 
Avellanas        670        
Nueces        690 
Cacahuetes        610        
Nueces del Brasil        700 
Coco rallado        610        
Piñones        670 
Crema de cacahuetes        610        
Pipas de girasol        600 
Chocolate, cobertura        710        
Pistachos        620 
Chocolate con leche        520        
Queso Gruyère 45% mg.        450 
Galletas de mantequilla        440        
Salami        550 
Manteca de cerdo        960        
Salchichas Cervelat        490 
Mantequilla        770        
Salchichas Frankfurt        480 
Margarina        750

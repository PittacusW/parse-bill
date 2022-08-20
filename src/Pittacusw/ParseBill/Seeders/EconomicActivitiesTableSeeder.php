<?php

namespace Pittacusw\ParseBill\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class EconomicActivitiesTableSeeder extends Seeder {

  /**
   * Auto generated seed file
   *
   * @return void
   */
  public function run() {
    Schema::disableForeignKeyConstraints();
    DB::table('economic_activities')
      ->truncate();

    DB::table('economic_activities')
      ->insert([
                0   =>
                 [
                  'id'         => 1,
                  'code'       => 11111,
                  'name'       => 'CULTIVO DE TRIGO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                1   =>
                 [
                  'id'         => 2,
                  'code'       => 11112,
                  'name'       => 'CULTIVO DE MAIZ',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                2   =>
                 [
                  'id'         => 3,
                  'code'       => 11113,
                  'name'       => 'CULTIVO DE AVENA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                3   =>
                 [
                  'id'         => 4,
                  'code'       => 11114,
                  'name'       => 'CULTIVO DE ARROZ',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                4   =>
                 [
                  'id'         => 5,
                  'code'       => 11115,
                  'name'       => 'CULTIVO DE CEBADA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                5   =>
                 [
                  'id'         => 6,
                  'code'       => 11119,
                  'name'       => 'CULTIVO DE OTROS CEREALES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                6   =>
                 [
                  'id'         => 7,
                  'code'       => 11121,
                  'name'       => 'CULTIVO FORRAJEROS EN PRADERAS NATURALES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                7   =>
                 [
                  'id'         => 8,
                  'code'       => 11122,
                  'name'       => 'CULTIVO FORRAJEROS EN PRADERAS MEJORADAS O SEMBRADAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                8   =>
                 [
                  'id'         => 9,
                  'code'       => 11131,
                  'name'       => 'CULTIVO DE POROTOS O FRIJOL',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                9   =>
                 [
                  'id'         => 10,
                  'code'       => 11132,
                  'name'       => 'CULTIVO, PRODUCCIÓN DE LUPINO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                10  =>
                 [
                  'id'         => 11,
                  'code'       => 11139,
                  'name'       => 'CULTIVO DE OTRAS LEGUMBRES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                11  =>
                 [
                  'id'         => 12,
                  'code'       => 11141,
                  'name'       => 'CULTIVO DE PAPAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                12  =>
                 [
                  'id'         => 13,
                  'code'       => 11142,
                  'name'       => 'CULTIVO DE CAMOTES O BATATAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                13  =>
                 [
                  'id'         => 14,
                  'code'       => 11149,
                  'name'       => 'CULTIVO DE OTROS TUBÉRCULOS N.C.P',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                14  =>
                 [
                  'id'         => 15,
                  'code'       => 11151,
                  'name'       => 'CULTIVO DE RAPS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                15  =>
                 [
                  'id'         => 16,
                  'code'       => 11152,
                  'name'       => 'CULTIVO DE MARAVILLA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                16  =>
                 [
                  'id'         => 17,
                  'code'       => 11159,
                  'name'       => 'CULTIVO DE OTRAS OLEAGINOSAS N.C.P.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                17  =>
                 [
                  'id'         => 18,
                  'code'       => 11160,
                  'name'       => 'PRODUCCIÓN DE SEMILLAS DE CEREALES, LEGUMBRES, OLEAGINOSAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                18  =>
                 [
                  'id'         => 19,
                  'code'       => 11191,
                  'name'       => 'CULTIVO DE REMOLACHA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                19  =>
                 [
                  'id'         => 20,
                  'code'       => 11192,
                  'name'       => 'CULTIVO DE TABACO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                20  =>
                 [
                  'id'         => 21,
                  'code'       => 11193,
                  'name'       => 'CULTIVO DE FIBRAS VEGETALES INDUSTRIALES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                21  =>
                 [
                  'id'         => 22,
                  'code'       => 11194,
                  'name'       => 'CULTIVO DE PLANTAS AROMÁTICAS O MEDICINALES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                22  =>
                 [
                  'id'         => 23,
                  'code'       => 11199,
                  'name'       => 'OTROS CULTIVOS N.C.P.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                23  =>
                 [
                  'id'         => 24,
                  'code'       => 11211,
                  'name'       => 'CULTIVO TRADICIONAL DE HORTALIZAS FRESCAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                24  =>
                 [
                  'id'         => 25,
                  'code'       => 11212,
                  'name'       => 'CULTIVO DE HORTALIZAS EN INVERNADEROS Y CULTIVOS HIDROPONICOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                25  =>
                 [
                  'id'         => 26,
                  'code'       => 11213,
                  'name'       => 'CULTIVO ORGÁNICO DE HORTALIZAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                26  =>
                 [
                  'id'         => 27,
                  'code'       => 11220,
                  'name'       => 'CULTIVO DE PLANTAS VIVAS Y PRODUCTOS DE LA FLORICULTURA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                27  =>
                 [
                  'id'         => 28,
                  'code'       => 11230,
                  'name'       => 'PRODUCCIÓN DE SEMILLAS DE FLORES, PRADOS, FRUTAS Y HORTALIZAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                28  =>
                 [
                  'id'         => 29,
                  'code'       => 11240,
                  'name'       => 'PRODUCCIÓN EN VIVEROS; EXCEPTO ESPECIES FORESTALES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                29  =>
                 [
                  'id'         => 30,
                  'code'       => 11250,
                  'name'       => 'CULTIVO Y RECOLECCIÓN DE HONGOS, TRUFAS Y SAVIA; PRODUCCIÓN DE JARABE DE ARCE DE AZÚCAR Y AZÚCAR',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                30  =>
                 [
                  'id'         => 31,
                  'code'       => 11311,
                  'name'       => 'CULTIVO DE UVA DESTINADA A PRODUCCIÓN DE PISCO Y AGUARDIENTE',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                31  =>
                 [
                  'id'         => 32,
                  'code'       => 11312,
                  'name'       => 'CULTIVO DE UVA DESTINADA A PRODUCCIÓN DE VINO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                32  =>
                 [
                  'id'         => 33,
                  'code'       => 11313,
                  'name'       => 'CULTIVO DE UVA DE MESA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                33  =>
                 [
                  'id'         => 34,
                  'code'       => 11321,
                  'name'       => 'CULTIVO DE FRUTALES EN ÁRBOLES O ARBUSTOS CON CICLO DE VIDA MAYOR A UNA TEMPORADA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                34  =>
                 [
                  'id'         => 35,
                  'code'       => 11322,
                  'name'       => 'CULTIVO DE FRUTALES MENORES EN PLANTAS CON CICLO DE VIDA DE UNA TEMPORADA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                35  =>
                 [
                  'id'         => 36,
                  'code'       => 11330,
                  'name'       => 'CULTIVO DE PLANTAS CUYAS HOJAS O FRUTAS SE UTILIZAN PARA PREPARAR BEBIDAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                36  =>
                 [
                  'id'         => 37,
                  'code'       => 11340,
                  'name'       => 'CULTIVO DE ESPECIAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                37  =>
                 [
                  'id'         => 38,
                  'code'       => 12111,
                  'name'       => 'CRÍA DE GANADO BOVINO PARA LA PRODUCCIÓN LECHERA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                38  =>
                 [
                  'id'         => 39,
                  'code'       => 12112,
                  'name'       => 'CRÍA DE GANADO PARA PRODUCCIÓN DE CARNE, O COMO GANADO REPRODUCTOR',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                39  =>
                 [
                  'id'         => 40,
                  'code'       => 12120,
                  'name'       => 'CRÍA DE GANADO OVINO Y/O EXPLOTACIÓN LANERA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                40  =>
                 [
                  'id'         => 41,
                  'code'       => 12130,
                  'name'       => 'CRÍA DE EQUINOS (CABALLARES, MULARES)',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                41  =>
                 [
                  'id'         => 42,
                  'code'       => 12210,
                  'name'       => 'CRÍA DE PORCINOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                42  =>
                 [
                  'id'         => 43,
                  'code'       => 12221,
                  'name'       => 'CRÍA DE AVES DE CORRAL PARA LA PRODUCCIÓN DE CARNE',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                43  =>
                 [
                  'id'         => 44,
                  'code'       => 12222,
                  'name'       => 'CRÍA DE AVES DE CORRAL PARA LA PRODUCCIÓN DE HUEVOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                44  =>
                 [
                  'id'         => 45,
                  'code'       => 12223,
                  'name'       => 'CRÍA DE AVES FINAS O NO TRADICIONALES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                45  =>
                 [
                  'id'         => 46,
                  'code'       => 12230,
                  'name'       => 'CRÍA DE ANIMALES DOMÉSTICOS; PERROS Y GATOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                46  =>
                 [
                  'id'         => 47,
                  'code'       => 12240,
                  'name'       => 'APICULTURA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                47  =>
                 [
                  'id'         => 48,
                  'code'       => 12250,
                  'name'       => 'RANICULTURA, HELICICULTURA U OTRA ACTIVIDAD CON ANIMALES MENORES O INSECTOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                48  =>
                 [
                  'id'         => 49,
                  'code'       => 12290,
                  'name'       => 'OTRAS EXPLOTACIONES DE ANIMALES NO CLASIFICADOS EN OTRA PARTE, INCLUIDO SUS SUBPRODUCTOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                49  =>
                 [
                  'id'         => 50,
                  'code'       => 13000,
                  'name'       => 'EXPLOTACIÓN MIXTA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                50  =>
                 [
                  'id'         => 51,
                  'code'       => 14011,
                  'name'       => 'SERVICIO DE CORTE Y ENFARDADO DE FORRAJE',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                51  =>
                 [
                  'id'         => 52,
                  'code'       => 14012,
                  'name'       => 'SERVICIO DE RECOLECCIÓN, EMPACADO, TRILLA, DESCASCARAMIENTO Y DESGRANE; Y SIMILARES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                52  =>
                 [
                  'id'         => 53,
                  'code'       => 14013,
                  'name'       => 'SERVICIO DE ROTURACIÓN SIEMBRA Y SIMILARES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                53  =>
                 [
                  'id'         => 54,
                  'code'       => 14014,
                  'name'       => 'DESTRUCCIÓN DE PLAGAS; PULVERIZACIONES, FUMIGACIONES U OTRAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                54  =>
                 [
                  'id'         => 55,
                  'code'       => 14015,
                  'name'       => 'COSECHA, PODA, AMARRE Y LABORES DE ADECUACIÓN DE LA PLANTA U OTRAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                55  =>
                 [
                  'id'         => 56,
                  'code'       => 14019,
                  'name'       => 'OTROS SERVICIOS AGRÍCOLAS N.C.P.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                56  =>
                 [
                  'id'         => 57,
                  'code'       => 14021,
                  'name'       => 'SERVICIOS DE ADIESTRAMIENTO, GUARDERÍA Y CUIDADOS DE MASCOTAS; EXCEPTO ACTIVIDADES VETERINARIAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                57  =>
                 [
                  'id'         => 58,
                  'code'       => 14022,
                  'name'       => 'SERVICIOS GANADEROS, EXCEPTO ACTIVIDADES VETERINARIAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                58  =>
                 [
                  'id'         => 59,
                  'code'       => 15010,
                  'name'       => 'CAZA DE MAMÍFEROS MARINOS; EXCEPTO BALLENAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                59  =>
                 [
                  'id'         => 60,
                  'code'       => 15090,
                  'name'       => 'CAZA ORDINARIA Y MEDIANTE TRAMPAS, Y ACTIVIDADES DE SERVICIOS CONEXAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                60  =>
                 [
                  'id'         => 61,
                  'code'       => 20010,
                  'name'       => 'EXPLOTACIÓN DE BOSQUES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                61  =>
                 [
                  'id'         => 62,
                  'code'       => 20020,
                  'name'       => 'RECOLECCIÓN DE PRODUCTOS FORESTALES SILVESTRES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                62  =>
                 [
                  'id'         => 63,
                  'code'       => 20030,
                  'name'       => 'EXPLOTACIÓN DE VIVEROS DE ESPECIES FORESTALES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                63  =>
                 [
                  'id'         => 64,
                  'code'       => 20041,
                  'name'       => 'SERVICIOS DE FORESTACIÓN',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                64  =>
                 [
                  'id'         => 65,
                  'code'       => 20042,
                  'name'       => 'SERVICIOS DE CORTA DE MADERA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                65  =>
                 [
                  'id'         => 66,
                  'code'       => 20043,
                  'name'       => 'SERVICIOS DE CONTROL DE INCENDIOS FORESTALES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                66  =>
                 [
                  'id'         => 67,
                  'code'       => 20049,
                  'name'       => 'OTRAS ACTIVIDADES DE SERVICIOS CONEXAS A LA SILVICULTURA N.C.P.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                67  =>
                 [
                  'id'         => 68,
                  'code'       => 51010,
                  'name'       => 'CULTIVO DE ESPECIES ACUÁTICAS EN CUERPO DE AGUA DULCE',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                68  =>
                 [
                  'id'         => 69,
                  'code'       => 51020,
                  'name'       => 'REPRODUCCIÓN Y CRIANZAS DE PECES MARINOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                69  =>
                 [
                  'id'         => 70,
                  'code'       => 51030,
                  'name'       => 'CULTIVO, REPRODUCCIÓN Y CRECIMIENTOS DE VEGETALES ACUÁTICOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                70  =>
                 [
                  'id'         => 71,
                  'code'       => 51040,
                  'name'       => 'REPRODUCCIÓN Y CRÍA DE MOLUSCOS Y CRUSTACEOS.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                71  =>
                 [
                  'id'         => 72,
                  'code'       => 51090,
                  'name'       => 'SERVICIOS RELACIONADOS CON LA ACUICULTURA, NO INCLUYE SERVICIOS PROFESIONALES Y DE EXTRACCIÓN',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                72  =>
                 [
                  'id'         => 73,
                  'code'       => 52010,
                  'name'       => 'PESCA INDUSTRIAL',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                73  =>
                 [
                  'id'         => 74,
                  'code'       => 52020,
                  'name'       => 'ACTIVIDAD PESQUERA DE BARCOS FACTORÍAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                74  =>
                 [
                  'id'         => 75,
                  'code'       => 52030,
                  'name'       => 'PESCA ARTESANAL. EXTRACCIÓN DE RECURSOS ACUÁTICOS EN GENERAL; INCLUYE BALLENAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                75  =>
                 [
                  'id'         => 76,
                  'code'       => 52040,
                  'name'       => 'RECOLECCIÓN DE PRODUCTOS MARINOS, COMO PERLAS NATURALES, ESPONJAS, CORALES Y ALGAS.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                76  =>
                 [
                  'id'         => 77,
                  'code'       => 52050,
                  'name'       => 'SERVICIOS RELACIONADOS CON LA PESCA, NO INCLUYE SERVICIOS PROFESIONALES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                77  =>
                 [
                  'id'         => 78,
                  'code'       => 100000,
                  'name'       => 'EXTRACCIÓN, AGLOMERACIÓN DE CARBÓN DE PIEDRA, LIGNITO Y TURBA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                78  =>
                 [
                  'id'         => 79,
                  'code'       => 111000,
                  'name'       => 'EXTRACCIÓN DE PETRÓLEO CRUDO Y GAS NATURAL',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                79  =>
                 [
                  'id'         => 80,
                  'code'       => 112000,
                  'name'       => 'ACTIVIDADES DE SERVICIOS RELACIONADAS CON LA EXTRACCIÓN DE PETRÓLEO Y GAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                80  =>
                 [
                  'id'         => 81,
                  'code'       => 120000,
                  'name'       => 'EXTRACCIÓN DE MINERALES DE URANIO Y TORIO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                81  =>
                 [
                  'id'         => 82,
                  'code'       => 131000,
                  'name'       => 'EXTRACCIÓN DE MINERALES DE HIERRO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                82  =>
                 [
                  'id'         => 83,
                  'code'       => 132010,
                  'name'       => 'EXTRACCIÓN DE ORO Y PLATA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                83  =>
                 [
                  'id'         => 84,
                  'code'       => 132020,
                  'name'       => 'EXTRACCIÓN DE ZINC Y PLOMO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                84  =>
                 [
                  'id'         => 85,
                  'code'       => 132030,
                  'name'       => 'EXTRACCIÓN DE MANGANESO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                85  =>
                 [
                  'id'         => 86,
                  'code'       => 132090,
                  'name'       => 'EXTRACCIÓN DE OTROS MINERALES METALÍFEROS N.C.P.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                86  =>
                 [
                  'id'         => 87,
                  'code'       => 133000,
                  'name'       => 'EXTRACCIÓN DE COBRE',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                87  =>
                 [
                  'id'         => 88,
                  'code'       => 141000,
                  'name'       => 'EXTRACCIÓN DE PIEDRA, ARENA Y ARCILLA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                88  =>
                 [
                  'id'         => 89,
                  'code'       => 142100,
                  'name'       => 'EXTRACCIÓN DE NITRATOS Y YODO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                89  =>
                 [
                  'id'         => 90,
                  'code'       => 142200,
                  'name'       => 'EXTRACCIÓN DE SAL',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                90  =>
                 [
                  'id'         => 91,
                  'code'       => 142300,
                  'name'       => 'EXTRACCIÓN DE LITIO Y CLORUROS, EXCEPTO SAL',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                91  =>
                 [
                  'id'         => 92,
                  'code'       => 142900,
                  'name'       => 'EXPLOTACIÓN DE OTRAS MINAS Y CANTERAS N.C.P.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                92  =>
                 [
                  'id'         => 93,
                  'code'       => 151110,
                  'name'       => 'PRODUCCIÓN, PROCESAMIENTO DE CARNES ROJAS Y PRODUCTOS CÁRNICOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                93  =>
                 [
                  'id'         => 94,
                  'code'       => 151120,
                  'name'       => 'CONSERVACIÓN DE CARNES ROJAS (FRIGORÍFICOS)',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                94  =>
                 [
                  'id'         => 95,
                  'code'       => 151130,
                  'name'       => 'PRODUCCIÓN, PROCESAMIENTO Y CONSERVACIÓN DE CARNES DE AVE Y OTRAS CARNES DISTINTAS A LAS ROJAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                95  =>
                 [
                  'id'         => 96,
                  'code'       => 151140,
                  'name'       => 'ELABORACIÓN DE CECINAS, EMBUTIDOS Y CARNES EN CONSERVA.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                96  =>
                 [
                  'id'         => 97,
                  'code'       => 151210,
                  'name'       => 'PRODUCCIÓN DE HARINA DE PESCADO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                97  =>
                 [
                  'id'         => 98,
                  'code'       => 151221,
                  'name'       => 'FABRICACIÓN DE PRODUCTOS ENLATADOS DE PESCADO Y MARISCOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                98  =>
                 [
                  'id'         => 99,
                  'code'       => 151222,
                  'name'       => 'ELABORACIÓN DE CONGELADOS DE PESCADOS Y MARISCOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                99  =>
                 [
                  'id'         => 100,
                  'code'       => 151223,
                  'name'       => 'ELABORACIÓN DE PRODUCTOS AHUMADOS, SALADOS, DESHIDRATADOS Y OTROS PROCESOS SIMILARES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                100 =>
                 [
                  'id'         => 101,
                  'code'       => 151230,
                  'name'       => 'ELABORACIÓN DE PRODUCTOS EN BASE A VEGETALES ACUÁTICOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                101 =>
                 [
                  'id'         => 102,
                  'code'       => 151300,
                  'name'       => 'ELABORACIÓN Y CONSERVACIÓN DE FRUTAS, LEGUMBRES Y HORTALIZAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                102 =>
                 [
                  'id'         => 103,
                  'code'       => 151410,
                  'name'       => 'ELABORACIÓN DE ACEITES Y GRASAS DE ORIGEN VEGETAL',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                103 =>
                 [
                  'id'         => 104,
                  'code'       => 151420,
                  'name'       => 'ELABORACIÓN DE ACEITES Y GRASAS DE ORIGEN ANIMAL, EXCEPTO LAS MANTEQUILLAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                104 =>
                 [
                  'id'         => 105,
                  'code'       => 151430,
                  'name'       => 'ELABORACIÓN DE ACEITES Y GRASAS DE ORIGEN MARINO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                105 =>
                 [
                  'id'         => 106,
                  'code'       => 152010,
                  'name'       => 'ELABORACIÓN DE LECHE, MANTEQUILLA, PRODUCTOS LÁCTEOS Y DERIVADOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                106 =>
                 [
                  'id'         => 107,
                  'code'       => 152020,
                  'name'       => 'ELABORACIÓN DE QUESOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                107 =>
                 [
                  'id'         => 108,
                  'code'       => 152030,
                  'name'       => 'FABRICACIÓN DE POSTRES A BASE DE LECHE (HELADOS, SORBETES Y OTROS SIMILARES)',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                108 =>
                 [
                  'id'         => 109,
                  'code'       => 153110,
                  'name'       => 'ELABORACIÓN DE HARINAS DE TRIGO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                109 =>
                 [
                  'id'         => 110,
                  'code'       => 153120,
                  'name'       => 'ACTIVIDADES DE MOLIENDA DE ARROZ',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                110 =>
                 [
                  'id'         => 111,
                  'code'       => 153190,
                  'name'       => 'ELABORACIÓN DE OTRAS MOLINERAS Y ALIMENTOS A BASE DE CEREALES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                111 =>
                 [
                  'id'         => 112,
                  'code'       => 153210,
                  'name'       => 'ELABORACIÓN DE ALMIDONES Y PRODUCTOS DERIVADOS DEL ALMIDÓN',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                112 =>
                 [
                  'id'         => 113,
                  'code'       => 153220,
                  'name'       => 'ELABORACIÓN DE GLUCOSA Y OTROS AZÚCARES DIFERENTES DE LA REMOLACHA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                113 =>
                 [
                  'id'         => 114,
                  'code'       => 153300,
                  'name'       => 'ELABORACIÓN DE ALIMENTOS PREPARADOS PARA ANIMALES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                114 =>
                 [
                  'id'         => 115,
                  'code'       => 154110,
                  'name'       => 'FABRICACIÓN DE PAN, PRODUCTOS DE PANADERÍA Y PASTELERÍA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                115 =>
                 [
                  'id'         => 116,
                  'code'       => 154120,
                  'name'       => 'FABRICACIÓN DE GALLETAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                116 =>
                 [
                  'id'         => 117,
                  'code'       => 154200,
                  'name'       => 'ELABORACIÓN DE AZÚCAR DE REMOLACHA O CANA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                117 =>
                 [
                  'id'         => 118,
                  'code'       => 154310,
                  'name'       => 'ELABORACIÓN DE CACAO Y CHOCOLATES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                118 =>
                 [
                  'id'         => 119,
                  'code'       => 154320,
                  'name'       => 'FABRICACIÓN DE PRODUCTOS DE CONFITERÍA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                119 =>
                 [
                  'id'         => 120,
                  'code'       => 154400,
                  'name'       => 'ELABORACIÓN DE MACARRONES, FIDEOS, ALCUZCUZ Y PRODUCTOS FARINACEOS SIMILARES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                120 =>
                 [
                  'id'         => 121,
                  'code'       => 154910,
                  'name'       => 'ELABORACIÓN DE TE, CAFÉ, INFUSIONES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                121 =>
                 [
                  'id'         => 122,
                  'code'       => 154920,
                  'name'       => 'ELABORACIÓN DE LEVADURAS NATURALES O ARTIFICIALES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                122 =>
                 [
                  'id'         => 123,
                  'code'       => 154930,
                  'name'       => 'ELABORACIÓN DE VINAGRES, MOSTAZAS, MAYONESAS Y CONDIMENTOS EN GENERAL',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                123 =>
                 [
                  'id'         => 124,
                  'code'       => 154990,
                  'name'       => 'ELABORACIÓN DE OTROS PRODUCTOS ALIMENTICIOS NO CLASIFICADOS EN OTRA PARTE',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                124 =>
                 [
                  'id'         => 125,
                  'code'       => 155110,
                  'name'       => 'ELABORACIÓN DE PISCOS (INDUSTRIAS PISQUERAS)',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                125 =>
                 [
                  'id'         => 126,
                  'code'       => 155120,
                  'name'       => 'ELABORACIÓN DE BEBIDAS ALCOHÓLICAS Y DE ALCOHOL ETÍLICO A PARTIR DE SUSTANCIAS FERMENTADAS Y OTROS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                126 =>
                 [
                  'id'         => 127,
                  'code'       => 155200,
                  'name'       => 'ELABORACIÓN DE VINOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                127 =>
                 [
                  'id'         => 128,
                  'code'       => 155300,
                  'name'       => 'ELABORACIÓN DE BEBIDAS MALTEADAS, CERVEZAS Y MALTAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                128 =>
                 [
                  'id'         => 129,
                  'code'       => 155410,
                  'name'       => 'ELABORACIÓN DE BEBIDAS NO ALCOHÓLICAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                129 =>
                 [
                  'id'         => 130,
                  'code'       => 155420,
                  'name'       => 'ENVASADO DE AGUA MINERAL NATURAL, DE MANANTIAL Y POTABLE PREPARADA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                130 =>
                 [
                  'id'         => 131,
                  'code'       => 155430,
                  'name'       => 'ELABORACIÓN DE HIELO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                131 =>
                 [
                  'id'         => 132,
                  'code'       => 160010,
                  'name'       => 'FABRICACIÓN DE CIGARROS Y CIGARRILLOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                132 =>
                 [
                  'id'         => 133,
                  'code'       => 160090,
                  'name'       => 'FABRICACIÓN DE OTROS PRODUCTOS DEL TABACO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                133 =>
                 [
                  'id'         => 134,
                  'code'       => 171100,
                  'name'       => 'PREPARACIÓN DE HILATURA DE FIBRAS TEXTILES; TEJEDURA PROD. TEXTILES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                134 =>
                 [
                  'id'         => 135,
                  'code'       => 171200,
                  'name'       => 'ACABADO DE PRODUCTOS TEXTIL',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                135 =>
                 [
                  'id'         => 136,
                  'code'       => 172100,
                  'name'       => 'FABRICACIÓN DE ARTÍCULOS CONFECCIONADOS DE MATERIAS TEXTILES, EXCEPTO PRENDAS DE VESTIR',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                136 =>
                 [
                  'id'         => 137,
                  'code'       => 172200,
                  'name'       => 'FABRICACIÓN DE TAPICES Y ALFOMBRA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                137 =>
                 [
                  'id'         => 138,
                  'code'       => 172300,
                  'name'       => 'FABRICACIÓN DE CUERDAS, CORDELES, BRAMANTES Y REDES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                138 =>
                 [
                  'id'         => 139,
                  'code'       => 172910,
                  'name'       => 'FABRICACIÓN DE TEJIDOS DE USO INDUSTRIAL COMO TEJIDOS IMPREGNADOS, MOLTOPRENE, BATISTA, ETC.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                139 =>
                 [
                  'id'         => 140,
                  'code'       => 172990,
                  'name'       => 'FABRICACIÓN DE OTROS PRODUCTOS TEXTILES N.C.P.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                140 =>
                 [
                  'id'         => 141,
                  'code'       => 173000,
                  'name'       => 'FABRICACIÓN DE TEJIDOS DE PUNTO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                141 =>
                 [
                  'id'         => 142,
                  'code'       => 181010,
                  'name'       => 'FABRICACIÓN DE PRENDAS DE VESTIR TEXTILES Y SIMILARES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                142 =>
                 [
                  'id'         => 143,
                  'code'       => 181020,
                  'name'       => 'FABRICACIÓN DE PRENDAS DE VESTIR DE CUERO NATURAL, ARTIFICIAL, PLÁSTICO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                143 =>
                 [
                  'id'         => 144,
                  'code'       => 181030,
                  'name'       => 'FABRICACIÓN DE ACCESORIOS DE VESTIR',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                144 =>
                 [
                  'id'         => 145,
                  'code'       => 181040,
                  'name'       => 'FABRICACIÓN DE ROPA DE TRABAJO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                145 =>
                 [
                  'id'         => 146,
                  'code'       => 182000,
                  'name'       => 'ADOBO Y TENIDOS DE PIELES; FABRICACIÓN DE ARTÍCULOS DE PIEL',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                146 =>
                 [
                  'id'         => 147,
                  'code'       => 191100,
                  'name'       => 'CURTIDO Y ADOBO DE CUEROS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                147 =>
                 [
                  'id'         => 148,
                  'code'       => 191200,
                  'name'       => 'FABRICACIÓN DE MALETAS, BOLSOS DE MANO Y SIMILARES; ARTÍCULOS DE TALABARTERÍA Y GUARNICIONERÍA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                148 =>
                 [
                  'id'         => 149,
                  'code'       => 192000,
                  'name'       => 'FABRICACIÓN DE CALZADO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                149 =>
                 [
                  'id'         => 150,
                  'code'       => 201000,
                  'name'       => 'ASERRADO Y ACEPILLADURA DE MADERAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                150 =>
                 [
                  'id'         => 151,
                  'code'       => 202100,
                  'name'       => 'FABRICACIÓN DE TABLEROS, PANELES Y HOJAS DE MADERA PARA ENCHAPADO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                151 =>
                 [
                  'id'         => 152,
                  'code'       => 202200,
                  'name'       => 'FABRICACIÓN DE PARTES Y PIEZAS DE CARPINTERÍA PARA EDIFICIOS Y CONSTRUCCIONES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                152 =>
                 [
                  'id'         => 153,
                  'code'       => 202300,
                  'name'       => 'FABRICACIÓN DE RECIPIENTES DE MADERA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                153 =>
                 [
                  'id'         => 154,
                  'code'       => 202900,
                  'name'       => 'FABRICACIÓN DE OTROS PRODUCTOS DE MADERA; ARTÍCULOS DE CORCHO, PAJA Y MATERIALES TRENZABLES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                154 =>
                 [
                  'id'         => 155,
                  'code'       => 210110,
                  'name'       => 'FABRICACIÓN DE CELULOSA Y OTRAS PASTAS DE MADERA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                155 =>
                 [
                  'id'         => 156,
                  'code'       => 210121,
                  'name'       => 'FABRICACIÓN DE PAPEL DE PERIÓDICO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                156 =>
                 [
                  'id'         => 157,
                  'code'       => 210129,
                  'name'       => 'FABRICACIÓN DE PAPEL Y CARTÓN N.C.P.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                157 =>
                 [
                  'id'         => 158,
                  'code'       => 210200,
                  'name'       => 'FABRICACIÓN DE PAPEL Y CARTÓN ONDULADO Y DE ENVASES DE PAPEL Y CARTÓN',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                158 =>
                 [
                  'id'         => 159,
                  'code'       => 210900,
                  'name'       => 'FABRICACIÓN DE OTROS ARTÍCULOS DE PAPEL Y CARTÓN',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                159 =>
                 [
                  'id'         => 160,
                  'code'       => 221101,
                  'name'       => 'EDICIÓN PRINCIPALMENTE DE LIBROS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                160 =>
                 [
                  'id'         => 161,
                  'code'       => 221109,
                  'name'       => 'EDICIÓN DE FOLLETOS, PARTITURAS Y OTRAS PUBLICACIONES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                161 =>
                 [
                  'id'         => 162,
                  'code'       => 221200,
                  'name'       => 'EDICIÓN DE PERIÓDICOS, REVISTAS Y PUBLICACIONES PERIÓDICAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                162 =>
                 [
                  'id'         => 163,
                  'code'       => 221300,
                  'name'       => 'EDICIÓN DE GRABACIONES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                163 =>
                 [
                  'id'         => 164,
                  'code'       => 221900,
                  'name'       => 'OTRAS ACTIVIDADES DE EDICIÓN',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                164 =>
                 [
                  'id'         => 165,
                  'code'       => 222101,
                  'name'       => 'IMPRESIÓN PRINCIPALMENTE DE LIBROS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                165 =>
                 [
                  'id'         => 166,
                  'code'       => 222109,
                  'name'       => 'OTRAS ACTIVIDADES DE IMPRESIÓN N.C.P.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                166 =>
                 [
                  'id'         => 167,
                  'code'       => 222200,
                  'name'       => 'ACTIVIDADES DE SERVICIO RELACIONADA CON LA IMPRESIÓN',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                167 =>
                 [
                  'id'         => 168,
                  'code'       => 223000,
                  'name'       => 'REPRODUCCIÓN DE GRABACIONES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                168 =>
                 [
                  'id'         => 169,
                  'code'       => 231000,
                  'name'       => 'FABRICACIÓN DE PRODUCTOS DE HORNOS COQUE',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                169 =>
                 [
                  'id'         => 170,
                  'code'       => 232000,
                  'name'       => 'FABRICACIÓN DE PRODUCTOS DE REFINACIÓN DE PETRÓLEO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                170 =>
                 [
                  'id'         => 171,
                  'code'       => 233000,
                  'name'       => 'ELABORACIÓN DE COMBUSTIBLE NUCLEAR',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                171 =>
                 [
                  'id'         => 172,
                  'code'       => 241110,
                  'name'       => 'FABRICACIÓN DE CARBÓN VEGETAL, Y BRIQUETAS DE CARBÓN VEGETAL',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                172 =>
                 [
                  'id'         => 173,
                  'code'       => 241190,
                  'name'       => 'FABRICACIÓN DE SUSTANCIAS QUÍMICAS BÁSICAS, EXCEPTO ABONOS Y COMPUESTOS DE NITRÓGENO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                173 =>
                 [
                  'id'         => 174,
                  'code'       => 241200,
                  'name'       => 'FABRICACIÓN DE ABONOS Y COMPUESTOS DE NITRÓGENO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                174 =>
                 [
                  'id'         => 175,
                  'code'       => 241300,
                  'name'       => 'FABRICACIÓN DE PLÁSTICOS EN FORMAS PRIMARIAS Y DE CAUCHO SINTÉTICO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                175 =>
                 [
                  'id'         => 176,
                  'code'       => 242100,
                  'name'       => 'FABRICACIÓN DE PLAGUICIDAS Y OTROS PRODUCTOS QUÍMICOS DE USO AGROPECUARIO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                176 =>
                 [
                  'id'         => 177,
                  'code'       => 242200,
                  'name'       => 'FABRICACIÓN DE PINTURAS, BARNICES Y PRODUCTOS DE REVESTIMIENTO SIMILARES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                177 =>
                 [
                  'id'         => 178,
                  'code'       => 242300,
                  'name'       => 'FABRICACIÓN DE PRODUCTOS FARMACEUTICOS, SUSTANCIAS QUÍMICAS MEDICINALES Y PRODUCTOS BOTÁNICOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                178 =>
                 [
                  'id'         => 179,
                  'code'       => 242400,
                  'name'       => 'FABRICACIONES DE JABONES Y DETERGENTES, PREPARADOS PARA LIMPIAR, PERFUMES Y PREPARADOS DE TOCADOR',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                179 =>
                 [
                  'id'         => 180,
                  'code'       => 242910,
                  'name'       => 'FABRICACIÓN DE EXPLOSIVOS Y PRODUCTOS DE PIROTECNIA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                180 =>
                 [
                  'id'         => 181,
                  'code'       => 242990,
                  'name'       => 'FABRICACIÓN DE OTROS PRODUCTOS QUÍMICOS N.C.P.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                181 =>
                 [
                  'id'         => 182,
                  'code'       => 243000,
                  'name'       => 'FABRICACIÓN DE FIBRAS MANUFACTURADAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                182 =>
                 [
                  'id'         => 183,
                  'code'       => 251110,
                  'name'       => 'FABRICACIÓN DE CUBIERTAS Y CÁMARAS DE CAUCHO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                183 =>
                 [
                  'id'         => 184,
                  'code'       => 251120,
                  'name'       => 'RECAUCHADO Y RENOVACIÓN DE CUBIERTAS DE CAUCHO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                184 =>
                 [
                  'id'         => 185,
                  'code'       => 251900,
                  'name'       => 'FABRICACIÓN DE OTROS PRODUCTOS DE CAUCHO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                185 =>
                 [
                  'id'         => 186,
                  'code'       => 252010,
                  'name'       => 'FABRICACIÓN DE PLANCHAS, LÁMINAS, CINTAS, TIRAS DE PLÁSTICO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                186 =>
                 [
                  'id'         => 187,
                  'code'       => 252020,
                  'name'       => 'FABRICACIÓN DE TUBOS, MANGUERAS PARA LA CONSTRUCCIÓN',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                187 =>
                 [
                  'id'         => 188,
                  'code'       => 252090,
                  'name'       => 'FABRICACIÓN DE OTROS ARTÍCULOS DE PLÁSTICO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                188 =>
                 [
                  'id'         => 189,
                  'code'       => 261010,
                  'name'       => 'FABRICACIÓN, MANIPULADO Y TRANSFORMACIÓN DE VIDRIO PLANO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                189 =>
                 [
                  'id'         => 190,
                  'code'       => 261020,
                  'name'       => 'FABRICACIÓN DE VIDRIO HUECO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                190 =>
                 [
                  'id'         => 191,
                  'code'       => 261030,
                  'name'       => 'FABRICACIÓN DE FIBRAS DE VIDRIO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                191 =>
                 [
                  'id'         => 192,
                  'code'       => 261090,
                  'name'       => 'FABRICACIÓN DE ARTÍCULOS DE VIDRIO N.C.P.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                192 =>
                 [
                  'id'         => 193,
                  'code'       => 269101,
                  'name'       => 'FABRICACIÓN DE PRODUCTOS DE CERÁMICA NO REFRACTARIA PARA USO NO ESTRUCTURAL CON FINES ORNAMENTALES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                193 =>
                 [
                  'id'         => 194,
                  'code'       => 269109,
                  'name'       => 'FABRICACIÓN DE PRODUCTOS DE CERÁMICA NO REFRACTARIA PARA USO NO ESTRUCTURAL N.C.P.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                194 =>
                 [
                  'id'         => 195,
                  'code'       => 269200,
                  'name'       => 'FABRICACIÓN DE PRODUCTOS DE CERÁMICAS REFRACTARIA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                195 =>
                 [
                  'id'         => 196,
                  'code'       => 269300,
                  'name'       => 'FABRICACIÓN DE PRODUCTOS DE ARCILLA Y CERÁMICAS NO REFRACTARIAS PARA USO ESTRUCTURAL',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                196 =>
                 [
                  'id'         => 197,
                  'code'       => 269400,
                  'name'       => 'FABRICACIÓN DE CEMENTO, CAL Y YESO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                197 =>
                 [
                  'id'         => 198,
                  'code'       => 269510,
                  'name'       => 'ELABORACIÓN DE HORMIGÓN, ARTÍCULOS DE HORMIGÓN Y MORTERO (MEZCLA PARA CONSTRUCCIÓN)',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                198 =>
                 [
                  'id'         => 199,
                  'code'       => 269520,
                  'name'       => 'FABRICACIÓN DE PRODUCTOS DE FIBROCEMENTO Y ASBESTOCEMENTO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                199 =>
                 [
                  'id'         => 200,
                  'code'       => 269530,
                  'name'       => 'FABRICACIÓN DE PANELES DE YESO PARA LA CONSTRUCCIÓN',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                200 =>
                 [
                  'id'         => 201,
                  'code'       => 269590,
                  'name'       => 'FABRICACIÓN DE ARTÍCULOS DE CEMENTO Y YESO N.C.P.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                201 =>
                 [
                  'id'         => 202,
                  'code'       => 269600,
                  'name'       => 'CORTE, TALLADO Y ACABADO DE LA PIEDRA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                202 =>
                 [
                  'id'         => 203,
                  'code'       => 269910,
                  'name'       => 'FABRICACIÓN DE MEZCLAS BITUMINOSAS A BASE DE ASFALTO, DE BETUNES NATURALES, Y PRODUCTOS SIMILARES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                203 =>
                 [
                  'id'         => 204,
                  'code'       => 269990,
                  'name'       => 'FABRICACIÓN DE OTROS PRODUCTOS MINERALES NO METÁLICOS N.C.P',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                204 =>
                 [
                  'id'         => 205,
                  'code'       => 271000,
                  'name'       => 'INDUSTRIAS BASICAS DE HIERRO Y ACERO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                205 =>
                 [
                  'id'         => 206,
                  'code'       => 272010,
                  'name'       => 'ELABORACIÓN DE PRODUCTOS DE COBRE EN FORMAS PRIMARIAS.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                206 =>
                 [
                  'id'         => 207,
                  'code'       => 272020,
                  'name'       => 'ELABORACIÓN DE PRODUCTOS DE ALUMINIO EN FORMAS PRIMARIAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                207 =>
                 [
                  'id'         => 208,
                  'code'       => 272090,
                  'name'       => 'FABRICACIÓN DE PRODUCTOS PRIMARIOS DE METALES PRECIOSOS Y DE OTROS METALES NO FERROSOS N.C.P.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                208 =>
                 [
                  'id'         => 209,
                  'code'       => 273100,
                  'name'       => 'FUNDICIÓN DE HIERRO Y ACERO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                209 =>
                 [
                  'id'         => 210,
                  'code'       => 273200,
                  'name'       => 'FUNDICIÓN DE METALES NO FERROSOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                210 =>
                 [
                  'id'         => 211,
                  'code'       => 281100,
                  'name'       => 'FABRICACIÓN DE PRODUCTOS METÁLICOS DE USO ESTRUCTURAL',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                211 =>
                 [
                  'id'         => 212,
                  'code'       => 281211,
                  'name'       => 'FABRICACIÓN DE RECIPIENTES DE GAS COMPRIMIDO O LICUADO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                212 =>
                 [
                  'id'         => 213,
                  'code'       => 281219,
                  'name'       => 'FABRICACIÓN DE TANQUES, DEPÓSITOS Y RECIPIENTES DE METAL N.C.P.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                213 =>
                 [
                  'id'         => 214,
                  'code'       => 281280,
                  'name'       => 'REPARACIÓN DE TANQUES, DEPÓSITOS Y RECIPIENTES DE METAL',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                214 =>
                 [
                  'id'         => 215,
                  'code'       => 281310,
                  'name'       => 'FABRICACIÓN DE GENERADORES DE VAPOR, EXCEPTO CALDERAS DE AGUA CALIENTE PARA CALEFACCIÓN',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                215 =>
                 [
                  'id'         => 216,
                  'code'       => 281380,
                  'name'       => 'REPARACIÓN DE GENERADORES DE VAPOR, EXCEPTO CALDERAS DE AGUA CALIENTE PARA CALEFACCIÓN CENTRAL',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                216 =>
                 [
                  'id'         => 217,
                  'code'       => 289100,
                  'name'       => 'FORJA, PRENSADO, ESTAMPADO Y LAMINADO DE METAL; INCLUYE PULVIMETALURGIA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                217 =>
                 [
                  'id'         => 218,
                  'code'       => 289200,
                  'name'       => 'TRATAMIENTOS Y REVESTIMIENTOS DE METALES; OBRAS DE INGENIERÍA MECÁNICA EN GENERAL',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                218 =>
                 [
                  'id'         => 219,
                  'code'       => 289310,
                  'name'       => 'FABRICACIÓN DE ARTÍCULOS DE CUCHILLERÍA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                219 =>
                 [
                  'id'         => 220,
                  'code'       => 289320,
                  'name'       => 'FABRICACIÓN DE HERRAMIENTAS DE MANO Y ARTÍCULOS DE FERRETERÍA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                220 =>
                 [
                  'id'         => 221,
                  'code'       => 289910,
                  'name'       => 'FABRICACIÓN DE CABLES, ALAMBRES Y PRODUCTOS DE ALAMBRE',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                221 =>
                 [
                  'id'         => 222,
                  'code'       => 289990,
                  'name'       => 'FABRICACIÓN DE OTROS PRODUCTOS ELABORADOS DE METAL N.C.P.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                222 =>
                 [
                  'id'         => 223,
                  'code'       => 291110,
                  'name'       => 'FABRICACIÓN DE MOTORES Y TURBINAS, EXCEPTO PARA AERONAVES, VEHÍCULOS AUTOMOTORES Y MOTOCICLETAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                223 =>
                 [
                  'id'         => 224,
                  'code'       => 291180,
                  'name'       => 'REPARACIÓN DE MOTORES Y TURBINAS, EXCEPTO PARA AERONAVES, VEHÍCULOS AUTOMOTORES Y MOTOCICLETAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                224 =>
                 [
                  'id'         => 225,
                  'code'       => 291210,
                  'name'       => 'FABRICACIÓN DE BOMBAS, GRIFOS, VÁLVULAS, COMPRESORES, SISTEMAS HIDRÁULICOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                225 =>
                 [
                  'id'         => 226,
                  'code'       => 291280,
                  'name'       => 'REPARACIÓN DE BOMBAS, COMPRESORES, SISTEMAS HIDRÁULICOS, VÁLVULAS Y ARTÍCULOS DE GRIFERÍA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                226 =>
                 [
                  'id'         => 227,
                  'code'       => 291310,
                  'name'       => 'FABRICACIÓN DE COJINETES, ENGRANAJES, TRENES DE ENGRANAJES Y PIEZAS DE TRANSMISIÓN',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                227 =>
                 [
                  'id'         => 228,
                  'code'       => 291380,
                  'name'       => 'REPARACIÓN DE COJINETES, ENGRANAJES, TRENES DE ENGRANAJES Y PIEZAS DE TRANSMISIÓN',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                228 =>
                 [
                  'id'         => 229,
                  'code'       => 291410,
                  'name'       => 'FABRICACIÓN DE HORNOS, HOGARES Y QUEMADORES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                229 =>
                 [
                  'id'         => 230,
                  'code'       => 291480,
                  'name'       => 'REPARACIÓN DE HORNOS, HOGARES Y QUEMADORES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                230 =>
                 [
                  'id'         => 231,
                  'code'       => 291510,
                  'name'       => 'FABRICACIÓN DE EQUIPO DE ELEVACIÓN Y MANIPULACIÓN',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                231 =>
                 [
                  'id'         => 232,
                  'code'       => 291580,
                  'name'       => 'REPARACIÓN DE EQUIPO DE ELEVACIÓN Y MANIPULACIÓN',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                232 =>
                 [
                  'id'         => 233,
                  'code'       => 291910,
                  'name'       => 'FABRICACIÓN DE OTRO TIPO DE MAQUINARIAS DE USO GENERAL',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                233 =>
                 [
                  'id'         => 234,
                  'code'       => 291980,
                  'name'       => 'REPARACIÓN OTROS TIPOS DE MAQUINARIA Y EQUIPOS DE USO GENERAL',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                234 =>
                 [
                  'id'         => 235,
                  'code'       => 292110,
                  'name'       => 'FABRICACIÓN DE MAQUINARIA AGROPECUARIA Y FORESTAL',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                235 =>
                 [
                  'id'         => 236,
                  'code'       => 292180,
                  'name'       => 'REPARACIÓN DE MAQUINARIA AGROPECUARIA Y FORESTAL',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                236 =>
                 [
                  'id'         => 237,
                  'code'       => 292210,
                  'name'       => 'FABRICACIÓN DE MÁQUINAS HERRAMIENTAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                237 =>
                 [
                  'id'         => 238,
                  'code'       => 292280,
                  'name'       => 'REPARACIÓN DE MÁQUINAS HERRAMIENTAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                238 =>
                 [
                  'id'         => 239,
                  'code'       => 292310,
                  'name'       => 'FABRICACIÓN DE MAQUINARIA METALÚRGICA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                239 =>
                 [
                  'id'         => 240,
                  'code'       => 292380,
                  'name'       => 'REPARACIÓN DE MAQUINARIA PARA LA INDUSTRIA METALÚRGICA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                240 =>
                 [
                  'id'         => 241,
                  'code'       => 292411,
                  'name'       => 'FABRICACIÓN DE MAQUINARIA PARA MINAS Y CANTERAS Y PARA OBRAS DE CONSTRUCCIÓN',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                241 =>
                 [
                  'id'         => 242,
                  'code'       => 292412,
                  'name'       => 'FABRICACIÓN DE PARTES PARA MÁQUINAS DE SONDEO O PERFORACIÓN',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                242 =>
                 [
                  'id'         => 243,
                  'code'       => 292480,
                  'name'       => 'REPARACIÓN DE MAQUINARIA PARA LA EXPLOTACIÓN DE PETRÓLEO, MINAS, CANTERAS, Y OBRAS DE CONSTRUCCIÓN',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                243 =>
                 [
                  'id'         => 244,
                  'code'       => 292510,
                  'name'       => 'FABRICACIÓN DE MAQUINARIA PARA LA ELABORACIÓN DE ALIMENTOS, BEBIDAS Y TABACOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                244 =>
                 [
                  'id'         => 245,
                  'code'       => 292580,
                  'name'       => 'REPARACIÓN DE MAQUINARIA PARA LA ELABORACIÓN DE ALIMENTOS, BEBIDAS Y TABACOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                245 =>
                 [
                  'id'         => 246,
                  'code'       => 292610,
                  'name'       => 'FABRICACIÓN DE MAQUINARIA PARA LA ELABORACIÓN DE PRENDAS TEXTILES, PRENDAS DE VESTIR Y CUEROS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                246 =>
                 [
                  'id'         => 247,
                  'code'       => 292680,
                  'name'       => 'REPARACIÓN DE MAQUINARIA PARA LA INDUSTRIA TEXTIL, DE LA CONFECCIÓN, DEL CUERO Y DEL CALZADO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                247 =>
                 [
                  'id'         => 248,
                  'code'       => 292710,
                  'name'       => 'FABRICACIÓN DE ARMAS Y MUNICIONES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                248 =>
                 [
                  'id'         => 249,
                  'code'       => 292780,
                  'name'       => 'REPARACIÓN DE ARMAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                249 =>
                 [
                  'id'         => 250,
                  'code'       => 292910,
                  'name'       => 'FABRICACIÓN DE OTROS TIPOS DE MAQUINARIAS DE USO ESPECIAL',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                250 =>
                 [
                  'id'         => 251,
                  'code'       => 292980,
                  'name'       => 'REPARACIÓN DE OTROS TIPOS DE MAQUINARIA DE USO ESPECIAL',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                251 =>
                 [
                  'id'         => 252,
                  'code'       => 293000,
                  'name'       => 'FABRICACIÓN DE APARATOS DE USO DOMÉSTICO N.C.P.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                252 =>
                 [
                  'id'         => 253,
                  'code'       => 300010,
                  'name'       => 'FABRICACIÓN Y ARMADO DE COMPUTADORES Y HARDWARE EN GENERAL',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                253 =>
                 [
                  'id'         => 254,
                  'code'       => 300020,
                  'name'       => 'FABRICACIÓN DE MAQUINARIA DE OFICINA, CONTABILIDAD, N.C.P.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                254 =>
                 [
                  'id'         => 255,
                  'code'       => 311010,
                  'name'       => 'FABRICACIÓN DE MOTORES, GENERADORES Y TRANSFORMADORES ELÉCTRICOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                255 =>
                 [
                  'id'         => 256,
                  'code'       => 311080,
                  'name'       => 'REPARACIÓN DE MOTORES, GENERADORES Y TRANSFORMADORES ELÉCTRICOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                256 =>
                 [
                  'id'         => 257,
                  'code'       => 312010,
                  'name'       => 'FABRICACIÓN DE APARATOS DE DISTRIBUCIÓN Y CONTROL',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                257 =>
                 [
                  'id'         => 258,
                  'code'       => 312080,
                  'name'       => 'REPARACIÓN DE APARATOS DE DISTRIBUCIÓN Y CONTROL',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                258 =>
                 [
                  'id'         => 259,
                  'code'       => 313000,
                  'name'       => 'FABRICACIÓN DE HILOS Y CABLES AISLADOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                259 =>
                 [
                  'id'         => 260,
                  'code'       => 314000,
                  'name'       => 'FABRICACIÓN DE ACUMULADORES DE PILAS Y BATERÍAS PRIMARIAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                260 =>
                 [
                  'id'         => 261,
                  'code'       => 315010,
                  'name'       => 'FABRICACIÓN DE LÁMPARAS Y EQUIPO DE ILUMINACIÓN',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                261 =>
                 [
                  'id'         => 262,
                  'code'       => 315080,
                  'name'       => 'REPARACIÓN DE EQUIPO DE ILUMINACIÓN',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                262 =>
                 [
                  'id'         => 263,
                  'code'       => 319010,
                  'name'       => 'FABRICACIÓN DE OTROS TIPOS DE EQUIPO ELÉCTRICO N.C.P.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                263 =>
                 [
                  'id'         => 264,
                  'code'       => 319080,
                  'name'       => 'REPARACIÓN DE OTROS TIPOS DE EQUIPO ELÉCTRICO N.C.P.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                264 =>
                 [
                  'id'         => 265,
                  'code'       => 321010,
                  'name'       => 'FABRICACIÓN DE COMPONENTES ELECTRÓNICOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                265 =>
                 [
                  'id'         => 266,
                  'code'       => 321080,
                  'name'       => 'REPARACIÓN DE COMPONENTES ELECTRÓNICOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                266 =>
                 [
                  'id'         => 267,
                  'code'       => 322010,
                  'name'       => 'FABRICACIÓN DE TRANSMISORES DE RADIO Y TELEVISIÓN, APARATOS PARA TELEFONÍA Y TELEGRAFÍA CON HILOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                267 =>
                 [
                  'id'         => 268,
                  'code'       => 322080,
                  'name'       => 'REPARACIÓN DE TRANSMISORES DE RADIO Y TELEVISIÓN, APARATOS PARA TELEFONÍA Y TELEGRAFÍA CON HILOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                268 =>
                 [
                  'id'         => 269,
                  'code'       => 323000,
                  'name'       => 'FABRICACIÓN DE RECEPTORES (RADIO Y TV); APARATOS DE GRABACIÓN Y REPRODUCCIÓN (AUDIO Y VIDEO)',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                269 =>
                 [
                  'id'         => 270,
                  'code'       => 331110,
                  'name'       => 'FABRICACIÓN DE EQUIPO MÉDICO Y QUIRÚRGICO, Y DE APARATOS ORTOPÉDICOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                270 =>
                 [
                  'id'         => 271,
                  'code'       => 331120,
                  'name'       => 'LABORATORIOS DENTALES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                271 =>
                 [
                  'id'         => 272,
                  'code'       => 331180,
                  'name'       => 'REPARACIÓN DE EQUIPO MÉDICO Y QUIRÚRGICO, Y DE APARATOS ORTOPÉDICOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                272 =>
                 [
                  'id'         => 273,
                  'code'       => 331210,
                  'name'       => 'FABRICACIÓN DE INSTRUMENTOS Y APARATOS PARA MEDIR, VERIFICAR, ENSAYAR, NAVEGAR Y OTROS FINES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                273 =>
                 [
                  'id'         => 274,
                  'code'       => 331280,
                  'name'       => 'REPARACIÓN DE INSTRUMENTOS Y APARATOS PARA MEDIR, VERIFICAR, ENSAYAR, NAVEGAR Y OTROS FINES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                274 =>
                 [
                  'id'         => 275,
                  'code'       => 331310,
                  'name'       => 'FABRICACIÓN DE EQUIPOS DE CONTROL DE PROCESOS INDUSTRIALES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                275 =>
                 [
                  'id'         => 276,
                  'code'       => 331380,
                  'name'       => 'REPARACIÓN DE EQUIPOS DE CONTROL DE PROCESOS INDUSTRIALES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                276 =>
                 [
                  'id'         => 277,
                  'code'       => 332010,
                  'name'       => 'FABRICACIÓN Y/O REPARACIÓN DE LENTES Y ARTÍCULOS OFTALMOLÓGICOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                277 =>
                 [
                  'id'         => 278,
                  'code'       => 332020,
                  'name'       => 'FABRICACIÓN DE INSTRUMENTOS DE OPTICA N.C.P. Y EQUIPOS FOTOGRÁFICOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                278 =>
                 [
                  'id'         => 279,
                  'code'       => 332080,
                  'name'       => 'REPARACIÓN DE INSTRUMENTOS DE OPTICA N.C.P Y EQUIPO FOTOGRÁFICOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                279 =>
                 [
                  'id'         => 280,
                  'code'       => 333000,
                  'name'       => 'FABRICACIÓN DE RELOJES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                280 =>
                 [
                  'id'         => 281,
                  'code'       => 341000,
                  'name'       => 'FABRICACIÓN DE VEHÍCULOS AUTOMOTORES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                281 =>
                 [
                  'id'         => 282,
                  'code'       => 342000,
                  'name'       => 'FABRICACIÓN DE CARROCERÍAS PARA VEHÍCULOS AUTOMOTORES; FABRICACIÓN DE REMOLQUES Y SEMI REMOLQUES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                282 =>
                 [
                  'id'         => 283,
                  'code'       => 343000,
                  'name'       => 'FABRICACIÓN DE PARTES Y ACCESORIOS PARA VEHÍCULOS AUTOMOTORES Y SUS MOTORES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                283 =>
                 [
                  'id'         => 284,
                  'code'       => 351110,
                  'name'       => 'CONSTRUCCIÓN Y REPARACIÓN DE BUQUES; ASTILLEROS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                284 =>
                 [
                  'id'         => 285,
                  'code'       => 351120,
                  'name'       => 'CONSTRUCCIÓN DE EMBARCACIONES MENORES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                285 =>
                 [
                  'id'         => 286,
                  'code'       => 351180,
                  'name'       => 'REPARACIÓN DE EMBARCACIONES MENORES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                286 =>
                 [
                  'id'         => 287,
                  'code'       => 351210,
                  'name'       => 'CONSTRUCCIÓN DE EMBARCACIONES DE RECREO Y DEPORTE',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                287 =>
                 [
                  'id'         => 288,
                  'code'       => 351280,
                  'name'       => 'REPARACIÓN DE EMBARCACIONES DE RECREO Y DEPORTES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                288 =>
                 [
                  'id'         => 289,
                  'code'       => 352000,
                  'name'       => 'FABRICACIÓN DE LOCOMOTORAS Y DE MATERIAL RODANTE PARA FERROCARRILES Y TRANVÍAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                289 =>
                 [
                  'id'         => 290,
                  'code'       => 353010,
                  'name'       => 'FABRICACIÓN DE AERONAVES Y NAVES ESPACIALES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                290 =>
                 [
                  'id'         => 291,
                  'code'       => 353080,
                  'name'       => 'REPARACIÓN DE AERONAVES Y NAVES ESPACIALES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                291 =>
                 [
                  'id'         => 292,
                  'code'       => 359100,
                  'name'       => 'FABRICACIÓN DE MOTOCICLETAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                292 =>
                 [
                  'id'         => 293,
                  'code'       => 359200,
                  'name'       => 'FABRICACIÓN DE BICICLETAS Y DE SILLONES DE RUEDAS PARA INVALIDOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                293 =>
                 [
                  'id'         => 294,
                  'code'       => 359900,
                  'name'       => 'FABRICACIÓN DE OTROS EQUIPOS DE TRANSPORTE N.C.P.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                294 =>
                 [
                  'id'         => 295,
                  'code'       => 361010,
                  'name'       => 'FABRICACIÓN DE MUEBLES PRINCIPALMENTE DE MADERA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                295 =>
                 [
                  'id'         => 296,
                  'code'       => 361020,
                  'name'       => 'FABRICACIÓN DE OTROS MUEBLES N.C.P., INCLUSO COLCHONES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                296 =>
                 [
                  'id'         => 297,
                  'code'       => 369100,
                  'name'       => 'FABRICACIÓN DE JOYAS Y PRODUCTOS CONEXOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                297 =>
                 [
                  'id'         => 298,
                  'code'       => 369200,
                  'name'       => 'FABRICACIÓN DE INSTRUMENTOS DE MÚSICA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                298 =>
                 [
                  'id'         => 299,
                  'code'       => 369300,
                  'name'       => 'FABRICACIÓN DE ARTÍCULOS DE DEPORTE',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                299 =>
                 [
                  'id'         => 300,
                  'code'       => 369400,
                  'name'       => 'FABRICACIÓN DE JUEGOS Y JUGUETES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                300 =>
                 [
                  'id'         => 301,
                  'code'       => 369910,
                  'name'       => 'FABRICACIÓN DE PLUMAS Y LÁPICES DE TODA CLASE Y ARTÍCULOS DE ESCRITORIO EN GENERAL',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                301 =>
                 [
                  'id'         => 302,
                  'code'       => 369920,
                  'name'       => 'FABRICACIÓN DE BROCHAS, ESCOBAS Y CEPILLOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                302 =>
                 [
                  'id'         => 303,
                  'code'       => 369930,
                  'name'       => 'FABRICACIÓN DE FÓSFOROS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                303 =>
                 [
                  'id'         => 304,
                  'code'       => 369990,
                  'name'       => 'FABRICACIÓN DE ARTÍCULOS DE OTRAS INDUSTRIAS N.C.P.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                304 =>
                 [
                  'id'         => 305,
                  'code'       => 371000,
                  'name'       => 'RECICLAMIENTO DE DESPERDICIOS Y DESECHOS METÁLICOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                305 =>
                 [
                  'id'         => 306,
                  'code'       => 372010,
                  'name'       => 'RECICLAMIENTO DE PAPEL',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                306 =>
                 [
                  'id'         => 307,
                  'code'       => 372020,
                  'name'       => 'RECICLAMIENTO DE VIDRIO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                307 =>
                 [
                  'id'         => 308,
                  'code'       => 372090,
                  'name'       => 'RECICLAMIENTO DE OTROS DESPERDICIOS Y DESECHOS N.C.P.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                308 =>
                 [
                  'id'         => 309,
                  'code'       => 401011,
                  'name'       => 'GENERACIÓN HIDROELÉCTRICA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                309 =>
                 [
                  'id'         => 310,
                  'code'       => 401012,
                  'name'       => 'GENERACIÓN EN CENTRALES TERMOELÉCTRICA DE CICLOS COMBINADOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                310 =>
                 [
                  'id'         => 311,
                  'code'       => 401013,
                  'name'       => 'GENERACIÓN EN OTRAS CENTRALES TERMOELÉCTRICAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                311 =>
                 [
                  'id'         => 312,
                  'code'       => 401019,
                  'name'       => 'GENERACIÓN EN OTRAS CENTRALES N.C.P.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                312 =>
                 [
                  'id'         => 313,
                  'code'       => 401020,
                  'name'       => 'TRANSMISIÓN DE ENERGÍA ELÉCTRICA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                313 =>
                 [
                  'id'         => 314,
                  'code'       => 401030,
                  'name'       => 'DISTRIBUCIÓN DE ENERGIA ELÉCTRICA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                314 =>
                 [
                  'id'         => 315,
                  'code'       => 402000,
                  'name'       => 'FABRICACIÓN DE GAS; DISTRIBUCIÓN DE COMBUSTIBLES GASEOSOS POR TUBERÍAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                315 =>
                 [
                  'id'         => 316,
                  'code'       => 403000,
                  'name'       => 'SUMINISTRO DE VAPOR Y AGUA CALIENTE',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                316 =>
                 [
                  'id'         => 317,
                  'code'       => 410000,
                  'name'       => 'CAPTACIÓN, DEPURACIÓN Y DISTRIBUCIÓN DE AGUA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                317 =>
                 [
                  'id'         => 318,
                  'code'       => 451010,
                  'name'       => 'PREPARACIÓN DEL TERRENO, EXCAVACIONES Y MOVIMIENTOS DE TIERRAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                318 =>
                 [
                  'id'         => 319,
                  'code'       => 451020,
                  'name'       => 'SERVICIOS DE DEMOLICIÓN Y EL DERRIBO DE EDIFICIOS Y OTRAS ESTRUCTURAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                319 =>
                 [
                  'id'         => 320,
                  'code'       => 452010,
                  'name'       => 'CONSTRUCCIÓN DE EDIFICIOS COMPLETOS O DE PARTES DE EDIFICIOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                320 =>
                 [
                  'id'         => 321,
                  'code'       => 452020,
                  'name'       => 'OBRAS DE INGENIERÍA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                321 =>
                 [
                  'id'         => 322,
                  'code'       => 453000,
                  'name'       => 'ACONDICIONAMIENTO DE EDIFICIOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                322 =>
                 [
                  'id'         => 323,
                  'code'       => 454000,
                  'name'       => 'OBRAS MENORES EN CONSTRUCCIÓN (CONTRATISTAS, ALBANILES, CARPINTEROS)',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                323 =>
                 [
                  'id'         => 324,
                  'code'       => 455000,
                  'name'       => 'ALQUILER DE EQUIPO DE CONSTRUCCIÓN O DEMOLICIÓN DOTADO DE OPERARIOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                324 =>
                 [
                  'id'         => 325,
                  'code'       => 501010,
                  'name'       => 'VENTA AL POR MAYOR DE VEHÍCULOS AUTOMOTORES (IMPORTACIÓN, DISTRIBUCIÓN) EXCEPTO MOTOCICLETAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                325 =>
                 [
                  'id'         => 326,
                  'code'       => 501020,
                  'name'       => 'VENTA O COMPRAVENTA AL POR MENOR DE VEHÍCULOS AUTOMOTORES NUEVOS O USADOS; EXCEPTO MOTOCICLETAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                326 =>
                 [
                  'id'         => 327,
                  'code'       => 502010,
                  'name'       => 'SERVICIO DE LAVADO DE VEHÍCULOS AUTOMOTORES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                327 =>
                 [
                  'id'         => 328,
                  'code'       => 502020,
                  'name'       => 'SERVICIOS DE REMOLQUE DE VEHÍCULOS (GRUAS)',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                328 =>
                 [
                  'id'         => 329,
                  'code'       => 502080,
                  'name'       => 'MANTENIMIENTO Y REPARACIÓN DE VEHÍCULOS AUTOMOTORES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                329 =>
                 [
                  'id'         => 330,
                  'code'       => 503000,
                  'name'       => 'VENTA DE PARTES, PIEZAS Y ACCESORIOS DE VEHÍCULOS AUTOMOTORES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                330 =>
                 [
                  'id'         => 331,
                  'code'       => 504010,
                  'name'       => 'VENTA DE MOTOCICLETAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                331 =>
                 [
                  'id'         => 332,
                  'code'       => 504020,
                  'name'       => 'VENTA DE PIEZAS Y ACCESORIOS DE MOTOCICLETAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                332 =>
                 [
                  'id'         => 333,
                  'code'       => 504080,
                  'name'       => 'REPARACIÓN DE MOTOCICLETAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                333 =>
                 [
                  'id'         => 334,
                  'code'       => 505000,
                  'name'       => 'VENTA AL POR MENOR DE COMBUSTIBLE PARA AUTOMOTORES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                334 =>
                 [
                  'id'         => 335,
                  'code'       => 511010,
                  'name'       => 'CORRETAJE DE PRODUCTOS AGRÍCOLAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                335 =>
                 [
                  'id'         => 336,
                  'code'       => 511020,
                  'name'       => 'CORRETAJE DE GANADO (FERIAS DE GANADO)',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                336 =>
                 [
                  'id'         => 337,
                  'code'       => 511030,
                  'name'       => 'OTROS TIPOS DE CORRETAJES O REMATES N.C.P. (NO INCLUYE SERVICIOS DE MARTILLERO)',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                337 =>
                 [
                  'id'         => 338,
                  'code'       => 512110,
                  'name'       => 'VENTA AL POR MAYOR DE ANIMALES VIVOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                338 =>
                 [
                  'id'         => 339,
                  'code'       => 512120,
                  'name'       => 'VENTA AL POR MAYOR DE PRODUCTOS PECUARIOS (LANAS, PIELES, CUEROS SIN PROCESAR); EXCEPTO ALIMENTOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                339 =>
                 [
                  'id'         => 340,
                  'code'       => 512130,
                  'name'       => 'VENTA AL POR MAYOR DE MATERIAS PRIMAS AGRÍCOLAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                340 =>
                 [
                  'id'         => 341,
                  'code'       => 512210,
                  'name'       => 'MAYORISTA DE FRUTAS Y VERDURAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                341 =>
                 [
                  'id'         => 342,
                  'code'       => 512220,
                  'name'       => 'MAYORISTAS DE CARNES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                342 =>
                 [
                  'id'         => 343,
                  'code'       => 512230,
                  'name'       => 'MAYORISTAS DE PRODUCTOS DEL MAR (PESCADO, MARISCOS, ALGAS)',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                343 =>
                 [
                  'id'         => 344,
                  'code'       => 512240,
                  'name'       => 'MAYORISTAS DE VINOS Y BEBIDAS ALCOHÓLICAS Y DE FANTASÍA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                344 =>
                 [
                  'id'         => 345,
                  'code'       => 512250,
                  'name'       => 'VENTA AL POR MAYOR DE CONFITES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                345 =>
                 [
                  'id'         => 346,
                  'code'       => 512260,
                  'name'       => 'VENTA AL POR MAYOR DE TABACO Y PRODUCTOS DERIVADOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                346 =>
                 [
                  'id'         => 347,
                  'code'       => 512290,
                  'name'       => 'VENTA AL POR MAYOR DE HUEVOS, LECHE, ABARROTES, Y OTROS ALIMENTOS N.C.P.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                347 =>
                 [
                  'id'         => 348,
                  'code'       => 513100,
                  'name'       => 'VENTA AL POR MAYOR DE PRODUCTOS TEXTILES, PRENDAS DE VESTIR Y CALZADO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                348 =>
                 [
                  'id'         => 349,
                  'code'       => 513910,
                  'name'       => 'VENTA AL POR MAYOR DE MUEBLES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                349 =>
                 [
                  'id'         => 350,
                  'code'       => 513920,
                  'name'       => 'VENTA AL POR MAYOR DE ARTÍCULOS ELÉCTRICOS Y ELECTRÓNICOS PARA EL HOGAR',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                350 =>
                 [
                  'id'         => 351,
                  'code'       => 513930,
                  'name'       => 'VENTA AL POR MAYOR DE ARTÍCULOS DE PERFUMERÍA, COSMÉTICOS, JABONES Y PRODUCTOS DE LIMPIEZA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                351 =>
                 [
                  'id'         => 352,
                  'code'       => 513940,
                  'name'       => 'VENTA AL POR MAYOR DE PAPEL Y CARTÓN',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                352 =>
                 [
                  'id'         => 353,
                  'code'       => 513951,
                  'name'       => 'VENTA AL POR MAYOR DE LIBROS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                353 =>
                 [
                  'id'         => 354,
                  'code'       => 513952,
                  'name'       => 'VENTA AL POR MAYOR DE REVISTAS Y PERIÓDICOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                354 =>
                 [
                  'id'         => 355,
                  'code'       => 513960,
                  'name'       => 'VENTA AL POR MAYOR DE PRODUCTOS FARMACEUTICOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                355 =>
                 [
                  'id'         => 356,
                  'code'       => 513970,
                  'name'       => 'VENTA AL POR MAYOR DE INSTRUMENTOS CIENTÍFICOS Y QUIRÚRGICOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                356 =>
                 [
                  'id'         => 357,
                  'code'       => 513990,
                  'name'       => 'VENTA AL POR MAYOR DE OTROS ENSERES DOMÉSTICOS N.C.P.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                357 =>
                 [
                  'id'         => 358,
                  'code'       => 514110,
                  'name'       => 'VENTA AL POR MAYOR DE COMBUSTIBLES LÍQUIDOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                358 =>
                 [
                  'id'         => 359,
                  'code'       => 514120,
                  'name'       => 'VENTA AL POR MAYOR DE COMBUSTIBLES SÓLIDOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                359 =>
                 [
                  'id'         => 360,
                  'code'       => 514130,
                  'name'       => 'VENTA AL POR MAYOR DE COMBUSTIBLES GASEOSOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                360 =>
                 [
                  'id'         => 361,
                  'code'       => 514140,
                  'name'       => 'VENTA AL POR MAYOR DE PRODUCTOS CONEXOS A LOS COMBUSTIBLES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                361 =>
                 [
                  'id'         => 362,
                  'code'       => 514200,
                  'name'       => 'VENTA AL POR MAYOR DE METALES Y MINERALES METALÍFEROS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                362 =>
                 [
                  'id'         => 363,
                  'code'       => 514310,
                  'name'       => 'VENTA AL POR MAYOR DE MADERA NO TRABAJADA Y PRODUCTOS RESULTANTES DE SU ELABORACIÓN PRIMARIA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                363 =>
                 [
                  'id'         => 364,
                  'code'       => 514320,
                  'name'       => 'VENTA AL POR MAYOR DE MATERIALES DE CONSTRUCCIÓN, ARTÍCULOS DE FERRETERÍA Y RELACIONADOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                364 =>
                 [
                  'id'         => 365,
                  'code'       => 514910,
                  'name'       => 'VENTA AL POR MAYOR DE PRODUCTOS QUÍMICOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                365 =>
                 [
                  'id'         => 366,
                  'code'       => 514920,
                  'name'       => 'VENTA AL POR MAYOR DE DESECHOS METÁLICOS (CHATARRA)',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                366 =>
                 [
                  'id'         => 367,
                  'code'       => 514930,
                  'name'       => 'VENTA AL POR MAYOR DE INSUMOS VETERINARIOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                367 =>
                 [
                  'id'         => 368,
                  'code'       => 514990,
                  'name'       => 'VENTA AL POR MAYOR DE OTROS PRODUCTOS INTERMEDIOS, DESPERDICIOS Y DESECHOS N.C.P.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                368 =>
                 [
                  'id'         => 369,
                  'code'       => 515001,
                  'name'       => 'VENTA AL POR MAYOR DE MAQUINARIA AGRÍCOLA Y FORESTAL',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                369 =>
                 [
                  'id'         => 370,
                  'code'       => 515002,
                  'name'       => 'VENTA AL POR MAYOR DE MAQUINARIA METALÚRGICA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                370 =>
                 [
                  'id'         => 371,
                  'code'       => 515003,
                  'name'       => 'VENTA AL POR MAYOR DE MAQUINARIA PARA LA MINERÍA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                371 =>
                 [
                  'id'         => 372,
                  'code'       => 515004,
                  'name'       => 'VENTA AL POR MAYOR DE MAQUINARIA PARA LA CONSTRUCCIÓN',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                372 =>
                 [
                  'id'         => 373,
                  'code'       => 515005,
                  'name'       => 'VENTA AL POR MAYOR DE MAQUINARIA PARA LA ELABORACIÓN DE ALIMENTOS, BEBIDAS Y TABACO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                373 =>
                 [
                  'id'         => 374,
                  'code'       => 515006,
                  'name'       => 'VENTA AL POR MAYOR DE MAQUINARIA PARA TEXTILES Y CUEROS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                374 =>
                 [
                  'id'         => 375,
                  'code'       => 515007,
                  'name'       => 'VENTA AL POR MAYOR DE MÁQUINAS Y EQUIPOS DE OFICINA; INCLUYE MATERIALES CONEXOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                375 =>
                 [
                  'id'         => 376,
                  'code'       => 515008,
                  'name'       => 'VENTA AL POR MAYOR DE MAQUINARIA Y EQUIPO DE TRANSPORTE EXCEPTO VEHÍCULOS AUTOMOTORES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                376 =>
                 [
                  'id'         => 377,
                  'code'       => 515009,
                  'name'       => 'VENTA AL POR MAYOR DE MAQUINARIA, HERRAMIENTAS, EQUIPO Y MATERIALES N.C.P.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                377 =>
                 [
                  'id'         => 378,
                  'code'       => 519000,
                  'name'       => 'VENTA AL POR MAYOR DE OTROS PRODUCTOS N.C.P.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                378 =>
                 [
                  'id'         => 379,
                  'code'       => 521111,
                  'name'       => 'GRANDES ESTABLECIMIENTOS (VENTA DE ALIMENTOS); HIPERMERCADOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                379 =>
                 [
                  'id'         => 380,
                  'code'       => 521112,
                  'name'       => 'ALMACENES MEDIANOS (VENTA DE ALIMENTOS); SUPERMERCADOS, MINIMARKETS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                380 =>
                 [
                  'id'         => 381,
                  'code'       => 521120,
                  'name'       => 'ALMACENES PEQUENOS (VENTA DE ALIMENTOS)',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                381 =>
                 [
                  'id'         => 382,
                  'code'       => 521200,
                  'name'       => 'GRANDES TIENDAS - PRODUCTOS DE FERRETERÍA Y PARA EL HOGAR',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                382 =>
                 [
                  'id'         => 383,
                  'code'       => 521300,
                  'name'       => 'GRANDES TIENDAS - VESTUARIO Y PRODUCTOS PARA EL HOGAR',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                383 =>
                 [
                  'id'         => 384,
                  'code'       => 521900,
                  'name'       => 'VENTA AL POR MENOR DE OTROS PRODUCTOS EN PEQUENOS ALMACENES NO ESPECIALIZADOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                384 =>
                 [
                  'id'         => 385,
                  'code'       => 522010,
                  'name'       => 'VENTA AL POR MENOR DE BEBIDAS Y LICORES (BOTILLERÍAS)',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                385 =>
                 [
                  'id'         => 386,
                  'code'       => 522020,
                  'name'       => 'VENTA AL POR MENOR DE CARNES (ROJAS, BLANCAS, OTRAS) PRODUCTOS CÁRNICOS Y SIMILARES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                386 =>
                 [
                  'id'         => 387,
                  'code'       => 522030,
                  'name'       => 'COMERCIO AL POR MENOR DE VERDURAS Y FRUTAS (VERDULERÍA)',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                387 =>
                 [
                  'id'         => 388,
                  'code'       => 522040,
                  'name'       => 'VENTA AL POR MENOR DE PESCADOS, MARISCOS Y PRODUCTOS CONEXOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                388 =>
                 [
                  'id'         => 389,
                  'code'       => 522050,
                  'name'       => 'VENTA AL POR MENOR DE PRODUCTOS DE PANADERÍA Y PASTELERÍA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                389 =>
                 [
                  'id'         => 390,
                  'code'       => 522060,
                  'name'       => 'VENTA AL POR MENOR DE ALIMENTOS PARA MASCOTAS Y ANIMALES EN GENERAL',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                390 =>
                 [
                  'id'         => 391,
                  'code'       => 522070,
                  'name'       => 'VENTA AL POR MENOR DE AVES Y HUEVOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                391 =>
                 [
                  'id'         => 392,
                  'code'       => 522090,
                  'name'       => 'VENTA AL POR MENOR DE PRODUCTOS DE CONFITERÍAS, CIGARRILLOS, Y OTROS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                392 =>
                 [
                  'id'         => 393,
                  'code'       => 523111,
                  'name'       => 'FARMACIAS - PERTENECIENTES A CADENA DE ESTABLECIMIENTOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                393 =>
                 [
                  'id'         => 394,
                  'code'       => 523112,
                  'name'       => 'FARMACIAS INDEPENDIENTES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                394 =>
                 [
                  'id'         => 395,
                  'code'       => 523120,
                  'name'       => 'VENTA AL POR MENOR DE PRODUCTOS MEDICINALES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                395 =>
                 [
                  'id'         => 396,
                  'code'       => 523130,
                  'name'       => 'VENTA AL POR MENOR DE ARTÍCULOS ORTOPÉDICOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                396 =>
                 [
                  'id'         => 397,
                  'code'       => 523140,
                  'name'       => 'VENTA AL POR MENOR DE ARTÍCULOS DE TOCADOR Y COSMÉTICOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                397 =>
                 [
                  'id'         => 398,
                  'code'       => 523210,
                  'name'       => 'VENTA AL POR MENOR DE CALZADO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                398 =>
                 [
                  'id'         => 399,
                  'code'       => 523220,
                  'name'       => 'VENTA AL POR MENOR DE PRENDAS DE VESTIR EN GENERAL, INCLUYE ACCESORIOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                399 =>
                 [
                  'id'         => 400,
                  'code'       => 523230,
                  'name'       => 'VENTA AL POR MENOR DE LANAS, HILOS Y SIMILARES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                400 =>
                 [
                  'id'         => 401,
                  'code'       => 523240,
                  'name'       => 'VENTA AL POR MENOR DE MALETERÍAS, TALABARTERÍAS Y ARTÍCULOS DE CUERO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                401 =>
                 [
                  'id'         => 402,
                  'code'       => 523250,
                  'name'       => 'VENTA AL POR MENOR DE ROPA INTERIOR Y PRENDAS DE USO PERSONAL',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                402 =>
                 [
                  'id'         => 403,
                  'code'       => 523290,
                  'name'       => 'COMERCIO AL POR MENOR DE TEXTILES PARA EL HOGAR Y OTROS PRODUCTOS TEXTILES N.C.P.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                403 =>
                 [
                  'id'         => 404,
                  'code'       => 523310,
                  'name'       => 'VENTA AL POR MENOR DE ARTÍCULOS ELECTRODOMÉSTICOS Y ELECTRÓNICOS PARA EL HOGAR',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                404 =>
                 [
                  'id'         => 405,
                  'code'       => 523320,
                  'name'       => 'VENTA AL POR MENOR DE CRISTALES, LOZAS, PORCELANA, MENAJE (CRISTALERÍAS)',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                405 =>
                 [
                  'id'         => 406,
                  'code'       => 523330,
                  'name'       => 'VENTA AL POR MENOR DE MUEBLES; INCLUYE COLCHONES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                406 =>
                 [
                  'id'         => 407,
                  'code'       => 523340,
                  'name'       => 'VENTA AL POR MENOR DE INSTRUMENTOS MUSICALES (CASA DE MÚSICA)',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                407 =>
                 [
                  'id'         => 408,
                  'code'       => 523350,
                  'name'       => 'VENTA AL POR MENOR DE DISCOS, CASSETTES, DVD Y VIDEOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                408 =>
                 [
                  'id'         => 409,
                  'code'       => 523360,
                  'name'       => 'VENTA AL POR MENOR DE LÁMPARAS, APLIQUÉS Y SIMILARES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                409 =>
                 [
                  'id'         => 410,
                  'code'       => 523390,
                  'name'       => 'VENTA AL POR MENOR DE APARATOS, ARTÍCULOS, EQUIPO DE USO DOMÉSTICO N.C.P.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                410 =>
                 [
                  'id'         => 411,
                  'code'       => 523410,
                  'name'       => 'VENTA AL POR MENOR DE ARTÍCULOS DE FERRETERÍA Y MATERIALES DE CONSTRUCCIÓN',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                411 =>
                 [
                  'id'         => 412,
                  'code'       => 523420,
                  'name'       => 'VENTA AL POR MENOR DE PINTURAS, BARNICES Y LACAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                412 =>
                 [
                  'id'         => 413,
                  'code'       => 523430,
                  'name'       => 'COMERCIO AL POR MENOR DE PRODUCTOS DE VIDRIO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                413 =>
                 [
                  'id'         => 414,
                  'code'       => 523911,
                  'name'       => 'COMERCIO AL POR MENOR DE ARTÍCULOS FOTOGRÁFICOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                414 =>
                 [
                  'id'         => 415,
                  'code'       => 523912,
                  'name'       => 'COMERCIO AL POR MENOR DE ARTÍCULOS ÓPTICOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                415 =>
                 [
                  'id'         => 416,
                  'code'       => 523921,
                  'name'       => 'COMERCIO POR MENOR DE JUGUETES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                416 =>
                 [
                  'id'         => 417,
                  'code'       => 523922,
                  'name'       => 'COMERCIO AL POR MENOR DE LIBROS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                417 =>
                 [
                  'id'         => 418,
                  'code'       => 523923,
                  'name'       => 'COMERCIO AL POR MENOR DE REVISTAS Y DIARIOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                418 =>
                 [
                  'id'         => 419,
                  'code'       => 523924,
                  'name'       => 'COMERCIO DE ARTÍCULOS DE SUMINISTROS DE OFICINAS Y ARTÍCULOS DE ESCRITORIO EN GENERAL',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                419 =>
                 [
                  'id'         => 420,
                  'code'       => 523930,
                  'name'       => 'COMERCIO AL POR MENOR DE COMPUTADORAS, SOFTWARES Y SUMINISTROS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                420 =>
                 [
                  'id'         => 421,
                  'code'       => 523941,
                  'name'       => 'COMERCIO AL POR MENOR DE ARMERÍAS, ARTÍCULOS DE CAZA Y PESCA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                421 =>
                 [
                  'id'         => 422,
                  'code'       => 523942,
                  'name'       => 'COMERCIO AL POR MENOR DE BICICLETAS Y SUS REPUESTOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                422 =>
                 [
                  'id'         => 423,
                  'code'       => 523943,
                  'name'       => 'COMERCIO AL POR MENOR DE ARTÍCULOS DEPORTIVOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                423 =>
                 [
                  'id'         => 424,
                  'code'       => 523950,
                  'name'       => 'COMERCIO AL POR MENOR DE ARTÍCULOS DE JOYERÍA, FANTASÍAS Y RELOJERÍAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                424 =>
                 [
                  'id'         => 425,
                  'code'       => 523961,
                  'name'       => 'VENTA AL POR MENOR DE GAS LICUADO EN BOMBONAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                425 =>
                 [
                  'id'         => 426,
                  'code'       => 523969,
                  'name'       => 'VENTA AL POR MENOR DE CARBÓN, LENA Y OTROS COMBUSTIBLES DE USO DOMÉSTICO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                426 =>
                 [
                  'id'         => 427,
                  'code'       => 523991,
                  'name'       => 'COMERCIO AL POR MENOR DE ARTÍCULOS TÍPICOS (ARTESANÍAS)',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                427 =>
                 [
                  'id'         => 428,
                  'code'       => 523992,
                  'name'       => 'VENTA AL POR MENOR DE FLORES, PLANTAS, ÁRBOLES, SEMILLAS, ABONOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                428 =>
                 [
                  'id'         => 429,
                  'code'       => 523993,
                  'name'       => 'VENTA AL POR MENOR DE MASCOTAS Y ACCESORIOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                429 =>
                 [
                  'id'         => 430,
                  'code'       => 523999,
                  'name'       => 'VENTAS AL POR MENOR DE OTROS PRODUCTOS EN ALMACENES ESPECIALIZADOS N.C.P.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                430 =>
                 [
                  'id'         => 431,
                  'code'       => 524010,
                  'name'       => 'COMERCIO AL POR MENOR DE ANTIGUEDADES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                431 =>
                 [
                  'id'         => 432,
                  'code'       => 524020,
                  'name'       => 'COMERCIO AL POR MENOR DE ROPA USADA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                432 =>
                 [
                  'id'         => 433,
                  'code'       => 524090,
                  'name'       => 'COMERCIO AL POR MENOR DE ARTÍCULOS Y ARTEFACTOS USADOS N.C.P.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                433 =>
                 [
                  'id'         => 434,
                  'code'       => 525110,
                  'name'       => 'VENTA AL POR MENOR EN EMPRESAS DE VENTA A DISTANCIA POR CORREO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                434 =>
                 [
                  'id'         => 435,
                  'code'       => 525120,
                  'name'       => 'VENTA AL POR MENOR EN EMPRESAS DE VENTA A DISTANCIA VÍA TELEFÓNICA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                435 =>
                 [
                  'id'         => 436,
                  'code'       => 525130,
                  'name'       => 'VENTA AL POR MENOR EN EMPRESAS DE VENTA A DISTANCIA VÍA INTERNET; COMERCIO ELECTRÓNICO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                436 =>
                 [
                  'id'         => 437,
                  'code'       => 525200,
                  'name'       => 'VENTA AL POR MENOR EN PUESTOS DE VENTA Y MERCADOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                437 =>
                 [
                  'id'         => 438,
                  'code'       => 525911,
                  'name'       => 'VENTA AL POR MENOR REALIZADA POR INDEPENDIENTES EN TRANSPORTE PÚBLICO (LEY 20.388)',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                438 =>
                 [
                  'id'         => 439,
                  'code'       => 525919,
                  'name'       => 'VENTA AL POR MENOR NO REALIZADA EN ALMACENES DE PRODUCTOS PROPIOS N.C.P.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                439 =>
                 [
                  'id'         => 440,
                  'code'       => 525920,
                  'name'       => 'MÁQUINAS EXPENDEDORAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                440 =>
                 [
                  'id'         => 441,
                  'code'       => 525930,
                  'name'       => 'VENTA AL POR MENOR A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                441 =>
                 [
                  'id'         => 442,
                  'code'       => 525990,
                  'name'       => 'OTROS TIPOS DE VENTA AL POR MENOR NO REALIZADA EN ALMACENES N.C.P.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                442 =>
                 [
                  'id'         => 443,
                  'code'       => 526010,
                  'name'       => 'REPARACIÓN DE CALZADO Y OTROS ARTÍCULOS DE CUERO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                443 =>
                 [
                  'id'         => 444,
                  'code'       => 526020,
                  'name'       => 'REPARACIONES ELÉCTRICAS Y ELECTRÓNICAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                444 =>
                 [
                  'id'         => 445,
                  'code'       => 526030,
                  'name'       => 'REPARACIÓN DE RELOJES Y JOYAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                445 =>
                 [
                  'id'         => 446,
                  'code'       => 526090,
                  'name'       => 'OTRAS REPARACIONES DE EFECTOS PERSONALES Y ENSERES DOMÉSTICOS N.C.P.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                446 =>
                 [
                  'id'         => 447,
                  'code'       => 551010,
                  'name'       => 'HOTELES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                447 =>
                 [
                  'id'         => 448,
                  'code'       => 551020,
                  'name'       => 'MOTELES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                448 =>
                 [
                  'id'         => 449,
                  'code'       => 551030,
                  'name'       => 'RESIDENCIALES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                449 =>
                 [
                  'id'         => 450,
                  'code'       => 551090,
                  'name'       => 'OTROS TIPOS DE HOSPEDAJE TEMPORAL COMO CAMPING, ALBERGUES, POSADAS, REFUGIOS Y SIMILARES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                450 =>
                 [
                  'id'         => 451,
                  'code'       => 552010,
                  'name'       => 'RESTAURANTES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                451 =>
                 [
                  'id'         => 452,
                  'code'       => 552020,
                  'name'       => 'ESTABLECIMIENTOS DE COMIDA RÁPIDA (BARES, FUENTES DE SODA, GELATERÍAS, PIZZERÍAS Y SIMILARES)',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                452 =>
                 [
                  'id'         => 453,
                  'code'       => 552030,
                  'name'       => 'CASINOS Y CLUBES SOCIALES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                453 =>
                 [
                  'id'         => 454,
                  'code'       => 552040,
                  'name'       => 'SERVICIOS DE COMIDA PREPARADA EN FORMA INDUSTRIAL',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                454 =>
                 [
                  'id'         => 455,
                  'code'       => 552050,
                  'name'       => 'SERVICIOS DE BANQUETES, BODAS Y OTRAS CELEBRACIONES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                455 =>
                 [
                  'id'         => 456,
                  'code'       => 552090,
                  'name'       => 'SERVICIOS DE OTROS ESTABLECIMIENTOS QUE EXPENDEN COMIDAS Y BEBIDAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                456 =>
                 [
                  'id'         => 457,
                  'code'       => 601001,
                  'name'       => 'TRANSPORTE INTERURBANO DE PASAJEROS POR FERROCARRILES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                457 =>
                 [
                  'id'         => 458,
                  'code'       => 601002,
                  'name'       => 'TRANSPORTE DE CARGA POR FERROCARRILES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                458 =>
                 [
                  'id'         => 459,
                  'code'       => 602110,
                  'name'       => 'TRANSPORTE URBANO DE PASAJEROS VÍA FERROCARRIL (INCLUYE METRO)',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                459 =>
                 [
                  'id'         => 460,
                  'code'       => 602120,
                  'name'       => 'TRANSPORTE URBANO DE PASAJEROS VÍA AUTOBUS (LOCOMOCIÓN COLECTIVA)',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                460 =>
                 [
                  'id'         => 461,
                  'code'       => 602130,
                  'name'       => 'TRANSPORTE INTERURBANO DE PASAJEROS VÍA AUTOBUS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                461 =>
                 [
                  'id'         => 462,
                  'code'       => 602140,
                  'name'       => 'TRANSPORTE URBANO DE PASAJEROS VÍA TAXI COLECTIVO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                462 =>
                 [
                  'id'         => 463,
                  'code'       => 602150,
                  'name'       => 'SERVICIOS DE TRANSPORTE ESCOLAR',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                463 =>
                 [
                  'id'         => 464,
                  'code'       => 602160,
                  'name'       => 'SERVICIOS DE TRANSPORTE DE TRABAJADORES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                464 =>
                 [
                  'id'         => 465,
                  'code'       => 602190,
                  'name'       => 'OTROS TIPOS DE TRANSPORTE REGULAR DE PASAJEROS POR VÍA TERRESTRE N.C.P.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                465 =>
                 [
                  'id'         => 466,
                  'code'       => 602210,
                  'name'       => 'TRANSPORTES POR TAXIS LIBRES Y RADIOTAXIS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                466 =>
                 [
                  'id'         => 467,
                  'code'       => 602220,
                  'name'       => 'SERVICIOS DE TRANSPORTE A TURISTAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                467 =>
                 [
                  'id'         => 468,
                  'code'       => 602230,
                  'name'       => 'TRANSPORTE DE PASAJEROS EN VEHÍCULOS DE TRACCIÓN HUMANA Y ANIMAL',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                468 =>
                 [
                  'id'         => 469,
                  'code'       => 602290,
                  'name'       => 'OTROS TIPOS DE TRANSPORTE NO REGULAR DE PASAJEROS N.C.P.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                469 =>
                 [
                  'id'         => 470,
                  'code'       => 602300,
                  'name'       => 'TRANSPORTE DE CARGA POR CARRETERA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                470 =>
                 [
                  'id'         => 471,
                  'code'       => 603000,
                  'name'       => 'TRANSPORTE POR TUBERÍAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                471 =>
                 [
                  'id'         => 472,
                  'code'       => 611001,
                  'name'       => 'TRANSPORTE MARÍTIMO Y DE CABOTAJE DE PASAJEROS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                472 =>
                 [
                  'id'         => 473,
                  'code'       => 611002,
                  'name'       => 'TRANSPORTE MARÍTIMO Y DE CABOTAJE DE CARGA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                473 =>
                 [
                  'id'         => 474,
                  'code'       => 612001,
                  'name'       => 'TRANSPORTE DE PASAJEROS POR VÍAS DE NAVEGACIÓN INTERIORES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                474 =>
                 [
                  'id'         => 475,
                  'code'       => 612002,
                  'name'       => 'TRANSPORTE DE CARGA POR VÍAS DE NAVEGACIÓN INTERIORES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                475 =>
                 [
                  'id'         => 476,
                  'code'       => 621010,
                  'name'       => 'TRANSPORTE REGULAR POR VÍA AÉREA DE PASAJEROS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                476 =>
                 [
                  'id'         => 477,
                  'code'       => 621020,
                  'name'       => 'TRANSPORTE REGULAR POR VÍA AÉREA DE CARGA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                477 =>
                 [
                  'id'         => 478,
                  'code'       => 622001,
                  'name'       => 'TRANSPORTE NO REGULAR POR VÍA AÉREA DE PASAJEROS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                478 =>
                 [
                  'id'         => 479,
                  'code'       => 622002,
                  'name'       => 'TRANSPORTE NO REGULAR POR VÍA AÉREA DE CARGA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                479 =>
                 [
                  'id'         => 480,
                  'code'       => 630100,
                  'name'       => 'MANIPULACIÓN DE LA CARGA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                480 =>
                 [
                  'id'         => 481,
                  'code'       => 630200,
                  'name'       => 'SERVICIOS DE ALMACENAMIENTO Y DEPÓSITO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                481 =>
                 [
                  'id'         => 482,
                  'code'       => 630310,
                  'name'       => 'TERMINALES TERRESTRES DE PASAJEROS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                482 =>
                 [
                  'id'         => 483,
                  'code'       => 630320,
                  'name'       => 'ESTACIONAMIENTO DE VEHÍCULOS Y PARQUÍMETROS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                483 =>
                 [
                  'id'         => 484,
                  'code'       => 630330,
                  'name'       => 'PUERTOS Y AEROPUERTOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                484 =>
                 [
                  'id'         => 485,
                  'code'       => 630340,
                  'name'       => 'SERVICIOS PRESTADOS POR CONCESIONARIOS DE CARRETERAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                485 =>
                 [
                  'id'         => 486,
                  'code'       => 630390,
                  'name'       => 'OTRAS ACTIVIDADES CONEXAS AL TRANSPORTE N.C.P.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                486 =>
                 [
                  'id'         => 487,
                  'code'       => 630400,
                  'name'       => 'AGENCIAS Y ORGANIZADORES DE VIAJES; ACTIVIDADES DE ASISTENCIA A TURISTAS N.C.P.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                487 =>
                 [
                  'id'         => 488,
                  'code'       => 630910,
                  'name'       => 'AGENCIAS DE ADUANAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                488 =>
                 [
                  'id'         => 489,
                  'code'       => 630920,
                  'name'       => 'AGENCIAS DE TRANSPORTE',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                489 =>
                 [
                  'id'         => 490,
                  'code'       => 641100,
                  'name'       => 'ACTIVIDADES POSTALES NACIONALES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                490 =>
                 [
                  'id'         => 491,
                  'code'       => 641200,
                  'name'       => 'ACTIVIDADES DE CORREO DISTINTAS DE LAS ACTIVIDADES POSTALES NACIONALES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                491 =>
                 [
                  'id'         => 492,
                  'code'       => 642010,
                  'name'       => 'SERVICIOS DE TELEFONÍA FIJA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                492 =>
                 [
                  'id'         => 493,
                  'code'       => 642020,
                  'name'       => 'SERVICIOS DE TELEFONÍA MÓVIL',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                493 =>
                 [
                  'id'         => 494,
                  'code'       => 642030,
                  'name'       => 'PORTADORES TELEFÓNICOS (LARGA DISTANCIA NACIONAL E INTERNACIONAL)',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                494 =>
                 [
                  'id'         => 495,
                  'code'       => 642040,
                  'name'       => 'SERVICIOS DE TELEVISIÓN NO ABIERTA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                495 =>
                 [
                  'id'         => 496,
                  'code'       => 642050,
                  'name'       => 'PROVEEDORES DE INTERNET',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                496 =>
                 [
                  'id'         => 497,
                  'code'       => 642061,
                  'name'       => 'CENTROS DE LLAMADOS; INCLUYE ENVÍO DE FAX',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                497 =>
                 [
                  'id'         => 498,
                  'code'       => 642062,
                  'name'       => 'CENTROS DE ACCESO A INTERNET',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                498 =>
                 [
                  'id'         => 499,
                  'code'       => 642090,
                  'name'       => 'OTROS SERVICIOS DE TELECOMUNICACIONES N.C.P.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                499 =>
                 [
                  'id'         => 500,
                  'code'       => 651100,
                  'name'       => 'BANCA CENTRAL',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
               ]);
    DB::table('economic_activities')
      ->insert([
                0   =>
                 [
                  'id'         => 501,
                  'code'       => 651910,
                  'name'       => 'BANCOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                1   =>
                 [
                  'id'         => 502,
                  'code'       => 651920,
                  'name'       => 'FINANCIERAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                2   =>
                 [
                  'id'         => 503,
                  'code'       => 651990,
                  'name'       => 'OTROS TIPOS DE INTERMEDIACIÓN MONETARIA N.C.P.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                3   =>
                 [
                  'id'         => 504,
                  'code'       => 659110,
                  'name'       => 'LEASING FINANCIERO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                4   =>
                 [
                  'id'         => 505,
                  'code'       => 659120,
                  'name'       => 'LEASING HABITACIONAL',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                5   =>
                 [
                  'id'         => 506,
                  'code'       => 659210,
                  'name'       => 'FINANCIAMIENTO DEL FOMENTO DE LA PRODUCCIÓN',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                6   =>
                 [
                  'id'         => 507,
                  'code'       => 659220,
                  'name'       => 'ACTIVIDADES DE CRÉDITO PRENDARIO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                7   =>
                 [
                  'id'         => 508,
                  'code'       => 659231,
                  'name'       => 'FACTORING',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                8   =>
                 [
                  'id'         => 509,
                  'code'       => 659232,
                  'name'       => 'SECURITIZADORAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                9   =>
                 [
                  'id'         => 510,
                  'code'       => 659290,
                  'name'       => 'OTROS INSTITUCIONES FINANCIERAS N.C.P.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                10  =>
                 [
                  'id'         => 511,
                  'code'       => 659911,
                  'name'       => 'ADMINISTRADORAS DE FONDOS DE INVERSIÓN',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                11  =>
                 [
                  'id'         => 512,
                  'code'       => 659912,
                  'name'       => 'ADMINISTRADORAS DE FONDOS MUTUOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                12  =>
                 [
                  'id'         => 513,
                  'code'       => 659913,
                  'name'       => 'ADMINISTRADORAS DE FICES (FONDOS DE INVERSIÓN DE CAPITAL EXTRANJERO)',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                13  =>
                 [
                  'id'         => 514,
                  'code'       => 659914,
                  'name'       => 'ADMINISTRADORAS DE FONDOS PARA LA VIVIENDA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                14  =>
                 [
                  'id'         => 515,
                  'code'       => 659915,
                  'name'       => 'ADMINISTRADORAS DE FONDOS PARA OTROS FINES Y/O GENERALES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                15  =>
                 [
                  'id'         => 516,
                  'code'       => 659920,
                  'name'       => 'SOCIEDADES DE INVERSIÓN Y RENTISTAS DE CAPITALES MOBILIARIOS EN GENERAL',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                16  =>
                 [
                  'id'         => 517,
                  'code'       => 660101,
                  'name'       => 'PLANES DE SEGURO DE VIDA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                17  =>
                 [
                  'id'         => 518,
                  'code'       => 660102,
                  'name'       => 'PLANES DE REASEGUROS DE VIDA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                18  =>
                 [
                  'id'         => 519,
                  'code'       => 660200,
                  'name'       => 'ADMINISTRADORAS DE FONDOS DE PENSIONES (AFP)',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                19  =>
                 [
                  'id'         => 520,
                  'code'       => 660301,
                  'name'       => 'PLANES DE SEGUROS GENERALES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                20  =>
                 [
                  'id'         => 521,
                  'code'       => 660302,
                  'name'       => 'PLANES DE REASEGUROS GENERALES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                21  =>
                 [
                  'id'         => 522,
                  'code'       => 660400,
                  'name'       => 'ISAPRES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                22  =>
                 [
                  'id'         => 523,
                  'code'       => 671100,
                  'name'       => 'ADMINISTRACIÓN DE MERCADOS FINANCIEROS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                23  =>
                 [
                  'id'         => 524,
                  'code'       => 671210,
                  'name'       => 'CORREDORES DE BOLSA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                24  =>
                 [
                  'id'         => 525,
                  'code'       => 671220,
                  'name'       => 'AGENTES DE VALORES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                25  =>
                 [
                  'id'         => 526,
                  'code'       => 671290,
                  'name'       => 'OTROS SERVICIOS DE CORRETAJE',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                26  =>
                 [
                  'id'         => 527,
                  'code'       => 671910,
                  'name'       => 'CÁMARA DE COMPENSACIÓN',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                27  =>
                 [
                  'id'         => 528,
                  'code'       => 671921,
                  'name'       => 'ADMINISTRADORA DE TARJETAS DE CRÉDITO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                28  =>
                 [
                  'id'         => 529,
                  'code'       => 671929,
                  'name'       => 'EMPRESAS DE ASESORÍA, CONSULTORÍA FINANCIERA Y DE APOYO AL GIRO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                29  =>
                 [
                  'id'         => 530,
                  'code'       => 671930,
                  'name'       => 'CLASIFICADORES DE RIESGOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                30  =>
                 [
                  'id'         => 531,
                  'code'       => 671940,
                  'name'       => 'CASAS DE CAMBIO Y OPERADORES DE DIVISA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                31  =>
                 [
                  'id'         => 532,
                  'code'       => 671990,
                  'name'       => 'OTRAS ACTIVIDADES AUXILIARES DE LA INTERMEDIACIÓN FINANCIERA N.C.P.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                32  =>
                 [
                  'id'         => 533,
                  'code'       => 672010,
                  'name'       => 'CORREDORES DE SEGUROS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                33  =>
                 [
                  'id'         => 534,
                  'code'       => 672020,
                  'name'       => 'AGENTES Y LIQUIDADORES DE SEGUROS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                34  =>
                 [
                  'id'         => 535,
                  'code'       => 672090,
                  'name'       => 'OTRAS ACTIVIDADES AUXILIARES DE LA FINANCIACIÓN DE PLANES DE SEGUROS Y DE PENSIONES N.C.P.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                35  =>
                 [
                  'id'         => 536,
                  'code'       => 701001,
                  'name'       => 'ARRIENDO DE INMUEBLES AMOBLADOS O CON EQUIPOS Y MAQUINARIAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                36  =>
                 [
                  'id'         => 537,
                  'code'       => 701009,
                  'name'       => 'COMPRA, VENTA Y ALQUILER (EXCEPTO AMOBLADOS) DE INMUEBLES PROPIOS O ARRENDADOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                37  =>
                 [
                  'id'         => 538,
                  'code'       => 702000,
                  'name'       => 'CORREDORES DE PROPIEDADES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                38  =>
                 [
                  'id'         => 539,
                  'code'       => 711101,
                  'name'       => 'ALQUILER DE AUTOS Y CAMIONETAS SIN CHOFER',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                39  =>
                 [
                  'id'         => 540,
                  'code'       => 711102,
                  'name'       => 'ALQUILER DE OTROS EQUIPOS DE TRANSPORTE POR VÍA TERRESTRE SIN OPERARIOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                40  =>
                 [
                  'id'         => 541,
                  'code'       => 711200,
                  'name'       => 'ALQUILER DE TRANSPORTE POR VÍA ACUÁTICA SIN TRIPULACIÓN',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                41  =>
                 [
                  'id'         => 542,
                  'code'       => 711300,
                  'name'       => 'ALQUILER DE EQUIPO DE TRANSPORTE POR VÍA AÉREA SIN TRIPULANTES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                42  =>
                 [
                  'id'         => 543,
                  'code'       => 712100,
                  'name'       => 'ALQUILER DE MAQUINARIA Y EQUIPO AGROPECUARIO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                43  =>
                 [
                  'id'         => 544,
                  'code'       => 712200,
                  'name'       => 'ALQUILER DE MAQUINARIA Y EQUIPO DE CONSTRUCCIÓN E INGENIERÍA CIVIL',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                44  =>
                 [
                  'id'         => 545,
                  'code'       => 712300,
                  'name'       => 'ALQUILER DE MAQUINARIA Y EQUIPO DE OFICINA (SIN OPERARIOS NI SERVICIO ADMINISTRATIVO)',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                45  =>
                 [
                  'id'         => 546,
                  'code'       => 712900,
                  'name'       => 'ALQUILER DE OTROS TIPOS DE MAQUINARIAS Y EQUIPOS N.C.P.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                46  =>
                 [
                  'id'         => 547,
                  'code'       => 713010,
                  'name'       => 'ALQUILER DE BICICLETAS Y ARTÍCULOS PARA DEPORTES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                47  =>
                 [
                  'id'         => 548,
                  'code'       => 713020,
                  'name'       => 'ARRIENDO DE VIDEOS, JUEGOS DE VIDEO, Y EQUIPOS REPRODUCTORES DE VIDEO, MÚSICA Y SIMILARES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                48  =>
                 [
                  'id'         => 549,
                  'code'       => 713030,
                  'name'       => 'ALQUILER DE MOBILIARIO PARA EVENTOS (SILLAS, MESAS, MESONES, VAJILLAS, TOLDOS Y RELACIONADOS)',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                49  =>
                 [
                  'id'         => 550,
                  'code'       => 713090,
                  'name'       => 'ALQUILER DE OTROS EFECTOS PERSONALES Y ENSERES DOMÉSTICOS N.C.P.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                50  =>
                 [
                  'id'         => 551,
                  'code'       => 722000,
                  'name'       => 'ASESORES Y CONSULTORES EN INFORMÁTICA (SOFTWARE)',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                51  =>
                 [
                  'id'         => 552,
                  'code'       => 724000,
                  'name'       => 'PROCESAMIENTO DE DATOS Y ACTIVIDADES RELACIONADAS CON BASES DE DATOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                52  =>
                 [
                  'id'         => 553,
                  'code'       => 725000,
                  'name'       => 'MANTENIMIENTO Y REPARACIÓN DE MAQUINARIA DE OFICINA, CONTABILIDAD E INFORMÁTICA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                53  =>
                 [
                  'id'         => 554,
                  'code'       => 726000,
                  'name'       => 'EMPRESAS DE SERVICIOS INTEGRALES DE INFORMÁTICA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                54  =>
                 [
                  'id'         => 555,
                  'code'       => 731000,
                  'name'       => 'INVESTIGACIONES Y DESARROLLO EXPERIMENTAL EN EL CAMPO DE LAS CIENCIAS NATURALES Y LA INGENIERÍA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                55  =>
                 [
                  'id'         => 556,
                  'code'       => 732000,
                  'name'       => 'INVESTIGACIONES Y DESARROLLO EXPERIMENTAL EN EL CAMPO DE LAS CIENCIAS SOCIALES Y LAS HUMANIDADES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                56  =>
                 [
                  'id'         => 557,
                  'code'       => 741110,
                  'name'       => 'SERVICIOS JURÍDICOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                57  =>
                 [
                  'id'         => 558,
                  'code'       => 741120,
                  'name'       => 'SERVICIO NOTARIAL',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                58  =>
                 [
                  'id'         => 559,
                  'code'       => 741130,
                  'name'       => 'CONSERVADOR DE BIENES RAICES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                59  =>
                 [
                  'id'         => 560,
                  'code'       => 741140,
                  'name'       => 'RECEPTORES JUDICIALES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                60  =>
                 [
                  'id'         => 561,
                  'code'       => 741190,
                  'name'       => 'ARBITRAJES, SÍNDICOS, PERITOS Y OTROS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                61  =>
                 [
                  'id'         => 562,
                  'code'       => 741200,
                  'name'       => 'ACTIVIDADES DE CONTABILIDAD, TENEDURÍA DE LIBROS Y AUDITORÍA; ASESORAMIENTOS TRIBUTARIOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                62  =>
                 [
                  'id'         => 563,
                  'code'       => 741300,
                  'name'       => 'INVESTIGACIÓN DE MERCADOS Y REALIZACIÓN DE ENCUESTAS DE OPINIÓN PÚBLICA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                63  =>
                 [
                  'id'         => 564,
                  'code'       => 741400,
                  'name'       => 'ACTIVIDADES DE ASESORAMIENTO EMPRESARIAL Y EN MATERIA DE GESTIÓN',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                64  =>
                 [
                  'id'         => 565,
                  'code'       => 742110,
                  'name'       => 'SERVICIOS DE ARQUITECTURA Y TÉCNICO RELACIONADO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                65  =>
                 [
                  'id'         => 566,
                  'code'       => 742121,
                  'name'       => 'EMPRESAS DE SERVICIOS GEOLÓGICOS Y DE PROSPECCIÓN',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                66  =>
                 [
                  'id'         => 567,
                  'code'       => 742122,
                  'name'       => 'SERVICIOS PROFESIONALES EN GEOLOGÍA Y PROSPECCIÓN',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                67  =>
                 [
                  'id'         => 568,
                  'code'       => 742131,
                  'name'       => 'EMPRESAS DE SERVICIOS DE TOPOGRAFÍA Y AGRIMENSURA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                68  =>
                 [
                  'id'         => 569,
                  'code'       => 742132,
                  'name'       => 'SERVICIOS PROFESIONALES DE TOPOGRAFÍA Y AGRIMENSURA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                69  =>
                 [
                  'id'         => 570,
                  'code'       => 742141,
                  'name'       => 'SERVICIOS DE INGENIERÍA PRESTADOS POR EMPRESAS N.C.P.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                70  =>
                 [
                  'id'         => 571,
                  'code'       => 742142,
                  'name'       => 'SERVICIOS DE INGENIERÍA PRESTADOS POR PROFESIONALES N.C.P.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                71  =>
                 [
                  'id'         => 572,
                  'code'       => 742190,
                  'name'       => 'OTROS SERVICIOS DESARROLLADOS POR PROFESIONALES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                72  =>
                 [
                  'id'         => 573,
                  'code'       => 742210,
                  'name'       => 'SERVICIO DE REVISIÓN TÉCNICA DE VEHÍCULOS AUTOMOTORES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                73  =>
                 [
                  'id'         => 574,
                  'code'       => 742290,
                  'name'       => 'OTROS SERVICIOS DE ENSAYOS Y ANALISIS TÉCNICOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                74  =>
                 [
                  'id'         => 575,
                  'code'       => 743001,
                  'name'       => 'EMPRESAS DE PUBLICIDAD',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                75  =>
                 [
                  'id'         => 576,
                  'code'       => 743002,
                  'name'       => 'SERVICIOS PERSONALES EN PUBLICIDAD',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                76  =>
                 [
                  'id'         => 577,
                  'code'       => 749110,
                  'name'       => 'SERVICIOS SUMINISTRO DE PERSONAL; EMPRESAS SERVICIOS TRANSITORIOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                77  =>
                 [
                  'id'         => 578,
                  'code'       => 749190,
                  'name'       => 'SERVICIOS DE RECLUTAMIENTO DE PERSONAL',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                78  =>
                 [
                  'id'         => 579,
                  'code'       => 749210,
                  'name'       => 'ACTIVIDADES DE INVESTIGACIÓN',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                79  =>
                 [
                  'id'         => 580,
                  'code'       => 749221,
                  'name'       => 'SERVICIOS INTEGRALES DE SEGURIDAD',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                80  =>
                 [
                  'id'         => 581,
                  'code'       => 749222,
                  'name'       => 'TRANSPORTE DE VALORES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                81  =>
                 [
                  'id'         => 582,
                  'code'       => 749229,
                  'name'       => 'SERVICIOS PERSONALES RELACIONADOS CON SEGURIDAD',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                82  =>
                 [
                  'id'         => 583,
                  'code'       => 749310,
                  'name'       => 'EMPRESAS DE LIMPIEZA DE EDIFICIOS RESIDENCIALES Y NO RESIDENCIALES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                83  =>
                 [
                  'id'         => 584,
                  'code'       => 749320,
                  'name'       => 'DESRATIZACIÓN Y FUMIGACIÓN NO AGRÍCOLA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                84  =>
                 [
                  'id'         => 585,
                  'code'       => 749401,
                  'name'       => 'SERVICIOS DE REVELADO, IMPRESIÓN, AMPLIACIÓN DE FOTOGRAFÍAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                85  =>
                 [
                  'id'         => 586,
                  'code'       => 749402,
                  'name'       => 'ACTIVIDADES DE FOTOGRAFÍA PUBLICITARIA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                86  =>
                 [
                  'id'         => 587,
                  'code'       => 749409,
                  'name'       => 'SERVICIOS PERSONALES DE FOTOGRAFÍA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                87  =>
                 [
                  'id'         => 588,
                  'code'       => 749500,
                  'name'       => 'SERVICIOS DE ENVASADO Y EMPAQUE',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                88  =>
                 [
                  'id'         => 589,
                  'code'       => 749911,
                  'name'       => 'SERVICIOS DE COBRANZA DE CUENTAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                89  =>
                 [
                  'id'         => 590,
                  'code'       => 749912,
                  'name'       => 'EVALUACIÓN Y CALIFICACIÓN DEL GRADO DE SOLVENCIA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                90  =>
                 [
                  'id'         => 591,
                  'code'       => 749913,
                  'name'       => 'ASESORÍAS EN LA GESTIÓN DE LA COMPRA O VENTA DE PEQUENAS Y MEDIANAS EMPRESAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                91  =>
                 [
                  'id'         => 592,
                  'code'       => 749921,
                  'name'       => 'DISENADORES DE VESTUARIO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                92  =>
                 [
                  'id'         => 593,
                  'code'       => 749922,
                  'name'       => 'DISENADORES DE INTERIORES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                93  =>
                 [
                  'id'         => 594,
                  'code'       => 749929,
                  'name'       => 'OTROS DISENADORES N.C.P.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                94  =>
                 [
                  'id'         => 595,
                  'code'       => 749931,
                  'name'       => 'EMPRESAS DE TAQUIGRAFÍA, REPRODUCCIÓN, DESPACHO DE CORRESPONDENCIA, Y OTRAS LABORES DE OFICINA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                95  =>
                 [
                  'id'         => 596,
                  'code'       => 749932,
                  'name'       => 'SERVICIOS PERSONALES DE TRADUCCIÓN, INTERPRETACIÓN Y LABORES DE OFICINA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                96  =>
                 [
                  'id'         => 597,
                  'code'       => 749933,
                  'name'       => 'EMPRESAS DE TRADUCCIÓN E INTERPRETACIÓN',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                97  =>
                 [
                  'id'         => 598,
                  'code'       => 749934,
                  'name'       => 'SERVICIOS DE FOTOCOPIAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                98  =>
                 [
                  'id'         => 599,
                  'code'       => 749940,
                  'name'       => 'AGENCIAS DE CONTRATACIÓN DE ACTORES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                99  =>
                 [
                  'id'         => 600,
                  'code'       => 749950,
                  'name'       => 'ACTIVIDADES DE SUBASTA (MARTILLEROS)',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                100 =>
                 [
                  'id'         => 601,
                  'code'       => 749961,
                  'name'       => 'GALERÍAS DE ARTE',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                101 =>
                 [
                  'id'         => 602,
                  'code'       => 749962,
                  'name'       => 'FERIAS DE EXPOSICIONES CON FINES EMPRESARIALES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                102 =>
                 [
                  'id'         => 603,
                  'code'       => 749970,
                  'name'       => 'SERVICIOS DE CONTESTACIÓN DE LLAMADAS (CALL CENTER)',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                103 =>
                 [
                  'id'         => 604,
                  'code'       => 749990,
                  'name'       => 'OTRAS ACTIVIDADES EMPRESARIALES N.C.P.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                104 =>
                 [
                  'id'         => 605,
                  'code'       => 751110,
                  'name'       => 'GOBIERNO CENTRAL',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                105 =>
                 [
                  'id'         => 606,
                  'code'       => 751120,
                  'name'       => 'MUNICIPALIDADES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                106 =>
                 [
                  'id'         => 607,
                  'code'       => 751200,
                  'name'       => 'ACTIVIDADES DEL PODER JUDICIAL',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                107 =>
                 [
                  'id'         => 608,
                  'code'       => 751300,
                  'name'       => 'ACTIVIDADES DEL PODER LEGISLATIVO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                108 =>
                 [
                  'id'         => 609,
                  'code'       => 752100,
                  'name'       => 'RELACIONES EXTERIORES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                109 =>
                 [
                  'id'         => 610,
                  'code'       => 752200,
                  'name'       => 'ACTIVIDADES DE DEFENSA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                110 =>
                 [
                  'id'         => 611,
                  'code'       => 752300,
                  'name'       => 'ACTIVIDADES DE MANTENIMIENTO DEL ORDEN PÚBLICO Y DE SEGURIDAD',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                111 =>
                 [
                  'id'         => 612,
                  'code'       => 753010,
                  'name'       => 'ACTIVIDADES DE PLANES DE SEGURIDAD SOCIAL DE AFILIACIÓN OBLIGATORIA RELACIONADOS CON SALUD',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                112 =>
                 [
                  'id'         => 613,
                  'code'       => 753020,
                  'name'       => 'CAJAS DE COMPENSACIÓN',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                113 =>
                 [
                  'id'         => 614,
                  'code'       => 753090,
                  'name'       => 'OTRAS ACTIVIDADES DE PLANES DE SEGURIDAD SOCIAL DE AFILIACIÓN OBLIGATORIA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                114 =>
                 [
                  'id'         => 615,
                  'code'       => 801010,
                  'name'       => 'ESTABLECIMIENTOS DE ENSEÑANZA PREESCOLAR',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                115 =>
                 [
                  'id'         => 616,
                  'code'       => 801020,
                  'name'       => 'ESTABLECIMIENTOS DE ENSEÑANZA PRIMARIA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                116 =>
                 [
                  'id'         => 617,
                  'code'       => 802100,
                  'name'       => 'ESTABLECIMIENTOS DE ENSEÑANZA SECUNDARIA DE FORMACIÓN GENERAL',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                117 =>
                 [
                  'id'         => 618,
                  'code'       => 802200,
                  'name'       => 'ESTABLECIMIENTOS DE ENSEÑANZA SECUNDARIA DE FORMACIÓN TÉCNICA Y PROFESIONAL',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                118 =>
                 [
                  'id'         => 619,
                  'code'       => 803010,
                  'name'       => 'UNIVERSIDADES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                119 =>
                 [
                  'id'         => 620,
                  'code'       => 803020,
                  'name'       => 'INSTITUTOS PROFESIONALES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                120 =>
                 [
                  'id'         => 621,
                  'code'       => 803030,
                  'name'       => 'CENTROS DE FORMACIÓN TÉCNICA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                121 =>
                 [
                  'id'         => 622,
                  'code'       => 809010,
                  'name'       => 'ESTABLECIMIENTOS DE ENSEÑANZA PRIMARIA Y SECUNDARIA PARA ADULTOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                122 =>
                 [
                  'id'         => 623,
                  'code'       => 809020,
                  'name'       => 'ESTABLECIMIENTOS DE ENSEÑANZA PREUNIVERSITARIA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                123 =>
                 [
                  'id'         => 624,
                  'code'       => 809030,
                  'name'       => 'EDUCACIÓN EXTRAESCOLAR (ESCUELA DE CONDUCCIÓN, MÚSICA, MODELAJE, ETC.)',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                124 =>
                 [
                  'id'         => 625,
                  'code'       => 809041,
                  'name'       => 'EDUCACIÓN A DISTANCIA (INTERNET, CORRESPONDENCIA, OTRAS)',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                125 =>
                 [
                  'id'         => 626,
                  'code'       => 809049,
                  'name'       => 'SERVICIOS PERSONALES DE EDUCACIÓN',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                126 =>
                 [
                  'id'         => 627,
                  'code'       => 851110,
                  'name'       => 'HOSPITALES Y CLÍNICAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                127 =>
                 [
                  'id'         => 628,
                  'code'       => 851120,
                  'name'       => 'CLÍNICAS PSIQUIATRICAS, CENTROS DE REHABILITACIÓN, ASILOS Y CLÍNICAS DE REPOSO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                128 =>
                 [
                  'id'         => 629,
                  'code'       => 851211,
                  'name'       => 'SERVICIOS DE MÉDICOS EN FORMA INDEPENDIENTE',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                129 =>
                 [
                  'id'         => 630,
                  'code'       => 851212,
                  'name'       => 'ESTABLECIMIENTOS MÉDICOS DE ATENCIÓN AMBULATORIA (CENTROS MÉDICOS)',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                130 =>
                 [
                  'id'         => 631,
                  'code'       => 851221,
                  'name'       => 'SERVICIOS DE ODONTÓLOGOS EN FORMA INDEPENDIENTE',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                131 =>
                 [
                  'id'         => 632,
                  'code'       => 851222,
                  'name'       => 'CENTROS DE ATENCIÓN ODONTOLÓGICA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                132 =>
                 [
                  'id'         => 633,
                  'code'       => 851910,
                  'name'       => 'LABORATORIOS CLÍNICOS; INCLUYE BANCOS DE SANGRE',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                133 =>
                 [
                  'id'         => 634,
                  'code'       => 851920,
                  'name'       => 'OTROS PROFESIONALES DE LA SALUD',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                134 =>
                 [
                  'id'         => 635,
                  'code'       => 851990,
                  'name'       => 'OTRAS ACTIVIDADES EMPRESARIALES RELACIONADAS CON LA SALUD HUMANA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                135 =>
                 [
                  'id'         => 636,
                  'code'       => 852010,
                  'name'       => 'ACTIVIDADES DE CLÍNICAS VETERINARIAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                136 =>
                 [
                  'id'         => 637,
                  'code'       => 852021,
                  'name'       => 'SERVICIOS DE MÉDICOS VETERINARIOS EN FORMA INDEPENDIENTE',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                137 =>
                 [
                  'id'         => 638,
                  'code'       => 852029,
                  'name'       => 'SERVICIOS DE OTROS PROFESIONALES INDEPENDIENTES EN EL ÁREA VETERINARIA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                138 =>
                 [
                  'id'         => 639,
                  'code'       => 853100,
                  'name'       => 'SERVICIOS SOCIALES CON ALOJAMIENTO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                139 =>
                 [
                  'id'         => 640,
                  'code'       => 853200,
                  'name'       => 'SERVICIOS SOCIALES SIN ALOJAMIENTO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                140 =>
                 [
                  'id'         => 641,
                  'code'       => 900010,
                  'name'       => 'SERVICIOS DE VERTEDEROS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                141 =>
                 [
                  'id'         => 642,
                  'code'       => 900020,
                  'name'       => 'BARRIDO DE EXTERIORES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                142 =>
                 [
                  'id'         => 643,
                  'code'       => 900030,
                  'name'       => 'RECOGIDA Y ELIMINACIÓN DE DESECHOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                143 =>
                 [
                  'id'         => 644,
                  'code'       => 900040,
                  'name'       => 'SERVICIOS DE EVACUACIÓN DE RILES Y AGUAS SERVIDAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                144 =>
                 [
                  'id'         => 645,
                  'code'       => 900050,
                  'name'       => 'SERVICIOS DE TRATAMIENTO DE RILES Y AGUAS SERVIDAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                145 =>
                 [
                  'id'         => 646,
                  'code'       => 900090,
                  'name'       => 'OTRAS ACTIVIDADES DE MANEJO DE DESPERDICIOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                146 =>
                 [
                  'id'         => 647,
                  'code'       => 911100,
                  'name'       => 'ACTIVIDADES DE ORGANIZACIONES EMPRESARIALES Y DE EMPLEADORES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                147 =>
                 [
                  'id'         => 648,
                  'code'       => 911210,
                  'name'       => 'COLEGIOS PROFESIONALES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                148 =>
                 [
                  'id'         => 649,
                  'code'       => 911290,
                  'name'       => 'ACTIVIDADES DE OTRAS ORGANIZACIONES PROFESIONALES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                149 =>
                 [
                  'id'         => 650,
                  'code'       => 912000,
                  'name'       => 'ACTIVIDADES DE SINDICATOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                150 =>
                 [
                  'id'         => 651,
                  'code'       => 919100,
                  'name'       => 'ACTIVIDADES DE ORGANIZACIONES RELIGIOSAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                151 =>
                 [
                  'id'         => 652,
                  'code'       => 919200,
                  'name'       => 'ACTIVIDADES DE ORGANIZACIONES POLÍTICAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                152 =>
                 [
                  'id'         => 653,
                  'code'       => 919910,
                  'name'       => 'CENTROS DE MADRES Y UNIDADES VECINALES Y COMUNALES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                153 =>
                 [
                  'id'         => 654,
                  'code'       => 919920,
                  'name'       => 'CLUBES SOCIALES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                154 =>
                 [
                  'id'         => 655,
                  'code'       => 919930,
                  'name'       => 'SERVICIOS DE INSTITUTOS DE ESTUDIOS, FUNDACIONES, CORPORACIONES DE DESARROLLO (EDUCACIÓN, SALUD)',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                155 =>
                 [
                  'id'         => 656,
                  'code'       => 919990,
                  'name'       => 'ACTIVIDADES DE OTRAS ASOCIACIONES N.C.P.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                156 =>
                 [
                  'id'         => 657,
                  'code'       => 921110,
                  'name'       => 'PRODUCCIÓN DE PELÍCULAS CINEMATOGRÁFICAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                157 =>
                 [
                  'id'         => 658,
                  'code'       => 921120,
                  'name'       => 'DISTRIBUIDORA CINEMATOGRÁFICAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                158 =>
                 [
                  'id'         => 659,
                  'code'       => 921200,
                  'name'       => 'EXHIBICIÓN DE FILMES Y VIDEOCINTAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                159 =>
                 [
                  'id'         => 660,
                  'code'       => 921310,
                  'name'       => 'ACTIVIDADES DE TELEVISIÓN',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                160 =>
                 [
                  'id'         => 661,
                  'code'       => 921320,
                  'name'       => 'ACTIVIDADES DE RADIO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                161 =>
                 [
                  'id'         => 662,
                  'code'       => 921411,
                  'name'       => 'SERVICIOS DE PRODUCCIÓN DE RECITALES Y OTROS EVENTOS MUSICALES MASIVOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                162 =>
                 [
                  'id'         => 663,
                  'code'       => 921419,
                  'name'       => 'SERVICIOS DE PRODUCCIÓN TEATRAL Y OTROS N.C.P.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                163 =>
                 [
                  'id'         => 664,
                  'code'       => 921420,
                  'name'       => 'ACTIVIDADES EMPRESARIALES DE ARTISTAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                164 =>
                 [
                  'id'         => 665,
                  'code'       => 921430,
                  'name'       => 'ACTIVIDADES ARTÍSTICAS; FUNCIONES DE ARTISTAS, ACTORES, MÚSICOS, CONFERENCISTAS, OTROS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                165 =>
                 [
                  'id'         => 666,
                  'code'       => 921490,
                  'name'       => 'AGENCIAS DE VENTA DE BILLETES DE TEATRO, SALAS DE CONCIERTO Y DE TEATRO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                166 =>
                 [
                  'id'         => 667,
                  'code'       => 921911,
                  'name'       => 'INSTRUCTORES DE DANZA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                167 =>
                 [
                  'id'         => 668,
                  'code'       => 921912,
                  'name'       => 'ACTIVIDADES DE DISCOTECAS, CABARET, SALAS DE BAILE Y SIMILARES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                168 =>
                 [
                  'id'         => 669,
                  'code'       => 921920,
                  'name'       => 'ACTIVIDADES DE PARQUES DE ATRACCIONES Y CENTROS SIMILARES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                169 =>
                 [
                  'id'         => 670,
                  'code'       => 921930,
                  'name'       => 'ESPECTÁCULOS CIRCENSES, DE TÍTERES U OTROS SIMILARES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                170 =>
                 [
                  'id'         => 671,
                  'code'       => 921990,
                  'name'       => 'OTRAS ACTIVIDADES DE ENTRETENIMIENTO N.C.P.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                171 =>
                 [
                  'id'         => 672,
                  'code'       => 922001,
                  'name'       => 'AGENCIAS DE NOTICIAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                172 =>
                 [
                  'id'         => 673,
                  'code'       => 922002,
                  'name'       => 'SERVICIOS PERIODÍSTICOS PRESTADO POR PROFESIONALES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                173 =>
                 [
                  'id'         => 674,
                  'code'       => 923100,
                  'name'       => 'ACTIVIDADES DE BIBLIOTECAS Y ARCHIVOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                174 =>
                 [
                  'id'         => 675,
                  'code'       => 923200,
                  'name'       => 'ACTIVIDADES DE MUSEOS Y PRESERVACIÓN DE LUGARES Y EDIFICIOS HISTÓRICOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                175 =>
                 [
                  'id'         => 676,
                  'code'       => 923300,
                  'name'       => 'ACTIVIDADES DE JARDINES BOTÁNICOS Y ZOOLÓGICOS Y DE PARQUES NACIONALES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                176 =>
                 [
                  'id'         => 677,
                  'code'       => 924110,
                  'name'       => 'EXPLOTACIÓN DE INSTALACIONES ESPECIALIZADAS PARA LAS PRACTICAS DEPORTIVAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                177 =>
                 [
                  'id'         => 678,
                  'code'       => 924120,
                  'name'       => 'ACTIVIDADES DE CLUBES DE DEPORTES Y ESTADIOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                178 =>
                 [
                  'id'         => 679,
                  'code'       => 924131,
                  'name'       => 'FUTBOL PROFESIONAL',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                179 =>
                 [
                  'id'         => 680,
                  'code'       => 924132,
                  'name'       => 'FUTBOL AMATEUR',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                180 =>
                 [
                  'id'         => 681,
                  'code'       => 924140,
                  'name'       => 'HIPÓDROMOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                181 =>
                 [
                  'id'         => 682,
                  'code'       => 924150,
                  'name'       => 'PROMOCIÓN Y ORGANIZACIÓN DE ESPECTÁCULOS DEPORTIVOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                182 =>
                 [
                  'id'         => 683,
                  'code'       => 924160,
                  'name'       => 'ESCUELAS PARA DEPORTES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                183 =>
                 [
                  'id'         => 684,
                  'code'       => 924190,
                  'name'       => 'OTRAS ACTIVIDADES RELACIONADAS AL DEPORTE N.C.P.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                184 =>
                 [
                  'id'         => 685,
                  'code'       => 924910,
                  'name'       => 'SISTEMAS DE JUEGOS DE AZAR MASIVOS.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                185 =>
                 [
                  'id'         => 686,
                  'code'       => 924920,
                  'name'       => 'ACTIVIDADES DE CASINO DE JUEGOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                186 =>
                 [
                  'id'         => 687,
                  'code'       => 924930,
                  'name'       => 'SALAS DE BILLAR, BOWLING, POOL Y JUEGOS ELECTRÓNICOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                187 =>
                 [
                  'id'         => 688,
                  'code'       => 924940,
                  'name'       => 'CONTRATACIÓN DE ACTORES PARA CINE, TV, Y TEATRO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                188 =>
                 [
                  'id'         => 689,
                  'code'       => 924990,
                  'name'       => 'OTROS SERVICIOS DE DIVERSIÓN Y ESPARCIMIENTOS N.C.P.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                189 =>
                 [
                  'id'         => 690,
                  'code'       => 930100,
                  'name'       => 'LAVADO Y LIMPIEZA DE PRENDAS DE TELA Y DE PIEL, INCLUSO LAS LIMPIEZAS EN SECO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                190 =>
                 [
                  'id'         => 691,
                  'code'       => 930200,
                  'name'       => 'PELUQUERÍAS Y SALONES DE BELLEZA',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                191 =>
                 [
                  'id'         => 692,
                  'code'       => 930310,
                  'name'       => 'SERVICIOS FUNERARIOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                192 =>
                 [
                  'id'         => 693,
                  'code'       => 930320,
                  'name'       => 'SERVICIOS EN CEMENTERIOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                193 =>
                 [
                  'id'         => 694,
                  'code'       => 930330,
                  'name'       => 'SERVICIOS DE CARROZAS FÚNEBRES (TRANSPORTE DE CADÁVERES)',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                194 =>
                 [
                  'id'         => 695,
                  'code'       => 930390,
                  'name'       => 'OTRAS ACTIVIDADES DE SERVICIOS FUNERARIOS Y OTRAS ACTIVIDADES CONEXAS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                195 =>
                 [
                  'id'         => 696,
                  'code'       => 930910,
                  'name'       => 'ACTIVIDADES DE MANTENIMIENTO FÍSICO CORPORAL (BAÑOS, TURCOS, SAUNAS)',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                196 =>
                 [
                  'id'         => 697,
                  'code'       => 930990,
                  'name'       => 'OTRAS ACTIVIDADES DE SERVICIOS PERSONALES N.C.P.',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                197 =>
                 [
                  'id'         => 698,
                  'code'       => 950001,
                  'name'       => 'HOGARES PRIVADOS INDIVIDUALES CON SERVICIO DOMÉSTICO',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                198 =>
                 [
                  'id'         => 699,
                  'code'       => 950002,
                  'name'       => 'CONSEJO DE ADMINISTRACIÓN DE EDIFICIOS Y CONDOMINIOS',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                199 =>
                 [
                  'id'         => 700,
                  'code'       => 990000,
                  'name'       => 'ORGANIZACIONES Y ÓRGANOS EXTRATERRITORIALES',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
               ]);
    Schema::enableForeignKeyConstraints();
  }
}
<?php

namespace Pittacusw\ParseBill\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CountiesTableSeeder extends Seeder {

  /**
   * Auto generated seed file
   *
   * @return void
   */
  public function run() {
    Schema::disableForeignKeyConstraints();
    DB::table('counties')
      ->truncate();

    DB::table('counties')
      ->insert([
                0   =>
                 [
                  'id'            => 1,
                  'sii_branch_id' => 2,
                  'name'          => 'Iquique',
                  'code'          => 1101,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                1   =>
                 [
                  'id'            => 2,
                  'sii_branch_id' => 2,
                  'name'          => 'Alto Hospicio',
                  'code'          => 1107,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                2   =>
                 [
                  'id'            => 3,
                  'sii_branch_id' => 2,
                  'name'          => 'Pozo Almonte',
                  'code'          => 1401,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                3   =>
                 [
                  'id'            => 4,
                  'sii_branch_id' => 2,
                  'name'          => 'Camiña',
                  'code'          => 1402,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                4   =>
                 [
                  'id'            => 5,
                  'sii_branch_id' => 2,
                  'name'          => 'Colchane',
                  'code'          => 1403,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                5   =>
                 [
                  'id'            => 6,
                  'sii_branch_id' => 2,
                  'name'          => 'Huara',
                  'code'          => 1404,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                6   =>
                 [
                  'id'            => 7,
                  'sii_branch_id' => 2,
                  'name'          => 'Pica',
                  'code'          => 1405,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                7   =>
                 [
                  'id'            => 8,
                  'sii_branch_id' => 3,
                  'name'          => 'Antofagasta',
                  'code'          => 2101,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                8   =>
                 [
                  'id'            => 9,
                  'sii_branch_id' => 3,
                  'name'          => 'Mejillones',
                  'code'          => 2102,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                9   =>
                 [
                  'id'            => 10,
                  'sii_branch_id' => 3,
                  'name'          => 'Sierra Gorda',
                  'code'          => 2103,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                10  =>
                 [
                  'id'            => 11,
                  'sii_branch_id' => 6,
                  'name'          => 'Tal-tal',
                  'code'          => 2104,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                11  =>
                 [
                  'id'            => 12,
                  'sii_branch_id' => 4,
                  'name'          => 'Calama',
                  'code'          => 2201,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                12  =>
                 [
                  'id'            => 13,
                  'sii_branch_id' => 4,
                  'name'          => 'Ollagüe',
                  'code'          => 2202,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                13  =>
                 [
                  'id'            => 14,
                  'sii_branch_id' => 4,
                  'name'          => 'San Pedro de Atacama',
                  'code'          => 2203,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                14  =>
                 [
                  'id'            => 15,
                  'sii_branch_id' => 5,
                  'name'          => 'Tocopilla',
                  'code'          => 2301,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                15  =>
                 [
                  'id'            => 16,
                  'sii_branch_id' => 5,
                  'name'          => 'María Elena',
                  'code'          => 2302,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                16  =>
                 [
                  'id'            => 17,
                  'sii_branch_id' => 7,
                  'name'          => 'Copiapó',
                  'code'          => 3101,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                17  =>
                 [
                  'id'            => 18,
                  'sii_branch_id' => 7,
                  'name'          => 'Caldera',
                  'code'          => 3102,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                18  =>
                 [
                  'id'            => 19,
                  'sii_branch_id' => 7,
                  'name'          => 'Tierra Amarilla',
                  'code'          => 3103,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                19  =>
                 [
                  'id'            => 20,
                  'sii_branch_id' => 8,
                  'name'          => 'Chañaral',
                  'code'          => 3201,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                20  =>
                 [
                  'id'            => 21,
                  'sii_branch_id' => 8,
                  'name'          => 'Diego de Almagro',
                  'code'          => 3202,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                21  =>
                 [
                  'id'            => 22,
                  'sii_branch_id' => 9,
                  'name'          => 'Vallenar',
                  'code'          => 3301,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                22  =>
                 [
                  'id'            => 23,
                  'sii_branch_id' => 9,
                  'name'          => 'Alto del Carmen',
                  'code'          => 3302,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                23  =>
                 [
                  'id'            => 24,
                  'sii_branch_id' => 9,
                  'name'          => 'Freirina',
                  'code'          => 3303,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                24  =>
                 [
                  'id'            => 25,
                  'sii_branch_id' => 9,
                  'name'          => 'Huasco',
                  'code'          => 3304,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                25  =>
                 [
                  'id'            => 26,
                  'sii_branch_id' => 10,
                  'name'          => 'La Serena',
                  'code'          => 4101,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                26  =>
                 [
                  'id'            => 27,
                  'sii_branch_id' => 13,
                  'name'          => 'Coquimbo',
                  'code'          => 4102,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                27  =>
                 [
                  'id'            => 28,
                  'sii_branch_id' => 10,
                  'name'          => 'Andacollo',
                  'code'          => 4103,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                28  =>
                 [
                  'id'            => 29,
                  'sii_branch_id' => 10,
                  'name'          => 'La Higuera',
                  'code'          => 4104,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                29  =>
                 [
                  'id'            => 30,
                  'sii_branch_id' => 10,
                  'name'          => 'Paihuano',
                  'code'          => 4105,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                30  =>
                 [
                  'id'            => 31,
                  'sii_branch_id' => 10,
                  'name'          => 'Vicuña',
                  'code'          => 4106,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                31  =>
                 [
                  'id'            => 32,
                  'sii_branch_id' => 12,
                  'name'          => 'Illapel',
                  'code'          => 4201,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                32  =>
                 [
                  'id'            => 33,
                  'sii_branch_id' => 12,
                  'name'          => 'Canela',
                  'code'          => 4202,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                33  =>
                 [
                  'id'            => 34,
                  'sii_branch_id' => 12,
                  'name'          => 'Los Vilos',
                  'code'          => 4203,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                34  =>
                 [
                  'id'            => 35,
                  'sii_branch_id' => 12,
                  'name'          => 'Salamanca',
                  'code'          => 4204,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                35  =>
                 [
                  'id'            => 36,
                  'sii_branch_id' => 11,
                  'name'          => 'Ovalle',
                  'code'          => 4301,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                36  =>
                 [
                  'id'            => 37,
                  'sii_branch_id' => 11,
                  'name'          => 'Combarbalá',
                  'code'          => 4302,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                37  =>
                 [
                  'id'            => 38,
                  'sii_branch_id' => 11,
                  'name'          => 'Monte Patria',
                  'code'          => 4303,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                38  =>
                 [
                  'id'            => 39,
                  'sii_branch_id' => 11,
                  'name'          => 'Punitaqui',
                  'code'          => 4304,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                39  =>
                 [
                  'id'            => 40,
                  'sii_branch_id' => 11,
                  'name'          => 'Río Hurtado',
                  'code'          => 4305,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                40  =>
                 [
                  'id'            => 41,
                  'sii_branch_id' => 14,
                  'name'          => 'Valparaíso',
                  'code'          => 5101,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                41  =>
                 [
                  'id'            => 42,
                  'sii_branch_id' => 14,
                  'name'          => 'Casablanca',
                  'code'          => 5102,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                42  =>
                 [
                  'id'            => 43,
                  'sii_branch_id' => 14,
                  'name'          => 'Concón',
                  'code'          => 5103,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                43  =>
                 [
                  'id'            => 44,
                  'sii_branch_id' => 14,
                  'name'          => 'Juan Fernández',
                  'code'          => 5104,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                44  =>
                 [
                  'id'            => 45,
                  'sii_branch_id' => 14,
                  'name'          => 'Puchuncaví',
                  'code'          => 5105,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                45  =>
                 [
                  'id'            => 46,
                  'sii_branch_id' => 14,
                  'name'          => 'Quintero',
                  'code'          => 5107,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                46  =>
                 [
                  'id'            => 47,
                  'sii_branch_id' => 14,
                  'name'          => 'Viña del Mar',
                  'code'          => 5109,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                47  =>
                 [
                  'id'            => 48,
                  'sii_branch_id' => 14,
                  'name'          => 'Isla de Pascua',
                  'code'          => 5201,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                48  =>
                 [
                  'id'            => 49,
                  'sii_branch_id' => 19,
                  'name'          => 'Los Andes',
                  'code'          => 5301,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                49  =>
                 [
                  'id'            => 50,
                  'sii_branch_id' => 19,
                  'name'          => 'Calle Larga',
                  'code'          => 5302,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                50  =>
                 [
                  'id'            => 51,
                  'sii_branch_id' => 19,
                  'name'          => 'Rinconada',
                  'code'          => 5303,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                51  =>
                 [
                  'id'            => 52,
                  'sii_branch_id' => 19,
                  'name'          => 'San Esteban',
                  'code'          => 5304,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                52  =>
                 [
                  'id'            => 53,
                  'sii_branch_id' => 15,
                  'name'          => 'La Ligua',
                  'code'          => 5401,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                53  =>
                 [
                  'id'            => 54,
                  'sii_branch_id' => 15,
                  'name'          => 'Cabildo',
                  'code'          => 5402,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                54  =>
                 [
                  'id'            => 55,
                  'sii_branch_id' => 15,
                  'name'          => 'Papudo',
                  'code'          => 5403,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                55  =>
                 [
                  'id'            => 56,
                  'sii_branch_id' => 15,
                  'name'          => 'Petorca',
                  'code'          => 5404,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                56  =>
                 [
                  'id'            => 57,
                  'sii_branch_id' => 15,
                  'name'          => 'Zapallar',
                  'code'          => 5405,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                57  =>
                 [
                  'id'            => 58,
                  'sii_branch_id' => 17,
                  'name'          => 'Quillota',
                  'code'          => 5501,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                58  =>
                 [
                  'id'            => 59,
                  'sii_branch_id' => 17,
                  'name'          => 'La Calera',
                  'code'          => 5502,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                59  =>
                 [
                  'id'            => 60,
                  'sii_branch_id' => 17,
                  'name'          => 'Hijuelas',
                  'code'          => 5503,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                60  =>
                 [
                  'id'            => 61,
                  'sii_branch_id' => 17,
                  'name'          => 'La Cruz',
                  'code'          => 5504,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                61  =>
                 [
                  'id'            => 62,
                  'sii_branch_id' => 17,
                  'name'          => 'Nogales',
                  'code'          => 5506,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                62  =>
                 [
                  'id'            => 63,
                  'sii_branch_id' => 16,
                  'name'          => 'San Antonio',
                  'code'          => 5601,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                63  =>
                 [
                  'id'            => 64,
                  'sii_branch_id' => 16,
                  'name'          => 'Algarrobo',
                  'code'          => 5602,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                64  =>
                 [
                  'id'            => 65,
                  'sii_branch_id' => 16,
                  'name'          => 'Cartagena',
                  'code'          => 5603,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                65  =>
                 [
                  'id'            => 66,
                  'sii_branch_id' => 16,
                  'name'          => 'El Quisco',
                  'code'          => 5604,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                66  =>
                 [
                  'id'            => 67,
                  'sii_branch_id' => 16,
                  'name'          => 'El Tabo',
                  'code'          => 5605,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                67  =>
                 [
                  'id'            => 68,
                  'sii_branch_id' => 16,
                  'name'          => 'Santo Domingo',
                  'code'          => 5606,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                68  =>
                 [
                  'id'            => 69,
                  'sii_branch_id' => 18,
                  'name'          => 'San Felipe',
                  'code'          => 5701,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                69  =>
                 [
                  'id'            => 70,
                  'sii_branch_id' => 18,
                  'name'          => 'Catemu',
                  'code'          => 5702,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                70  =>
                 [
                  'id'            => 71,
                  'sii_branch_id' => 18,
                  'name'          => 'Llay Llay',
                  'code'          => 5703,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                71  =>
                 [
                  'id'            => 72,
                  'sii_branch_id' => 18,
                  'name'          => 'Panquehue',
                  'code'          => 5704,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                72  =>
                 [
                  'id'            => 73,
                  'sii_branch_id' => 18,
                  'name'          => 'Putaendo',
                  'code'          => 5705,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                73  =>
                 [
                  'id'            => 74,
                  'sii_branch_id' => 18,
                  'name'          => 'Santa María',
                  'code'          => 5706,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                74  =>
                 [
                  'id'            => 75,
                  'sii_branch_id' => 20,
                  'name'          => 'Quilpué',
                  'code'          => 5801,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                75  =>
                 [
                  'id'            => 76,
                  'sii_branch_id' => 17,
                  'name'          => 'Limache',
                  'code'          => 5802,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                76  =>
                 [
                  'id'            => 77,
                  'sii_branch_id' => 17,
                  'name'          => 'Olmué',
                  'code'          => 5803,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                77  =>
                 [
                  'id'            => 78,
                  'sii_branch_id' => 20,
                  'name'          => 'Villa Alemana',
                  'code'          => 5804,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                78  =>
                 [
                  'id'            => 79,
                  'sii_branch_id' => 21,
                  'name'          => 'Rancagua',
                  'code'          => 6101,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                79  =>
                 [
                  'id'            => 80,
                  'sii_branch_id' => 21,
                  'name'          => 'Codegua',
                  'code'          => 6102,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                80  =>
                 [
                  'id'            => 81,
                  'sii_branch_id' => 21,
                  'name'          => 'Coinco',
                  'code'          => 6103,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                81  =>
                 [
                  'id'            => 82,
                  'sii_branch_id' => 21,
                  'name'          => 'Coltauco',
                  'code'          => 6104,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                82  =>
                 [
                  'id'            => 83,
                  'sii_branch_id' => 21,
                  'name'          => 'Doñihue',
                  'code'          => 6105,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                83  =>
                 [
                  'id'            => 84,
                  'sii_branch_id' => 21,
                  'name'          => 'Graneros',
                  'code'          => 6106,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                84  =>
                 [
                  'id'            => 85,
                  'sii_branch_id' => 24,
                  'name'          => 'Las Cabras',
                  'code'          => 6107,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                85  =>
                 [
                  'id'            => 86,
                  'sii_branch_id' => 21,
                  'name'          => 'Machalí',
                  'code'          => 6108,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                86  =>
                 [
                  'id'            => 87,
                  'sii_branch_id' => 21,
                  'name'          => 'Malloa',
                  'code'          => 6109,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                87  =>
                 [
                  'id'            => 88,
                  'sii_branch_id' => 21,
                  'name'          => 'Mostazal',
                  'code'          => 6110,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                88  =>
                 [
                  'id'            => 89,
                  'sii_branch_id' => 21,
                  'name'          => 'Olivar',
                  'code'          => 6111,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                89  =>
                 [
                  'id'            => 90,
                  'sii_branch_id' => 24,
                  'name'          => 'Peumo',
                  'code'          => 6112,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                90  =>
                 [
                  'id'            => 91,
                  'sii_branch_id' => 24,
                  'name'          => 'Pichidegua',
                  'code'          => 6113,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                91  =>
                 [
                  'id'            => 92,
                  'sii_branch_id' => 21,
                  'name'          => 'Quinta de Tilcoco',
                  'code'          => 6114,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                92  =>
                 [
                  'id'            => 93,
                  'sii_branch_id' => 21,
                  'name'          => 'Rengo',
                  'code'          => 6115,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                93  =>
                 [
                  'id'            => 94,
                  'sii_branch_id' => 21,
                  'name'          => 'Requínoa',
                  'code'          => 6116,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                94  =>
                 [
                  'id'            => 95,
                  'sii_branch_id' => 24,
                  'name'          => 'San Vicente',
                  'code'          => 6117,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                95  =>
                 [
                  'id'            => 96,
                  'sii_branch_id' => 25,
                  'name'          => 'Pichilemu',
                  'code'          => 6201,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                96  =>
                 [
                  'id'            => 97,
                  'sii_branch_id' => 25,
                  'name'          => 'La Estrella',
                  'code'          => 6202,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                97  =>
                 [
                  'id'            => 98,
                  'sii_branch_id' => 25,
                  'name'          => 'Litueche',
                  'code'          => 6203,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                98  =>
                 [
                  'id'            => 99,
                  'sii_branch_id' => 25,
                  'name'          => 'Marchihue',
                  'code'          => 6204,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                99  =>
                 [
                  'id'            => 100,
                  'sii_branch_id' => 21,
                  'name'          => 'Navidad',
                  'code'          => 6205,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                100 =>
                 [
                  'id'            => 101,
                  'sii_branch_id' => 25,
                  'name'          => 'Paredones',
                  'code'          => 6206,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                101 =>
                 [
                  'id'            => 102,
                  'sii_branch_id' => 22,
                  'name'          => 'San Fernando',
                  'code'          => 6301,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                102 =>
                 [
                  'id'            => 103,
                  'sii_branch_id' => 23,
                  'name'          => 'Chépica',
                  'code'          => 6302,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                103 =>
                 [
                  'id'            => 104,
                  'sii_branch_id' => 22,
                  'name'          => 'Chimbarongo',
                  'code'          => 6303,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                104 =>
                 [
                  'id'            => 105,
                  'sii_branch_id' => 23,
                  'name'          => 'Lolol',
                  'code'          => 6304,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                105 =>
                 [
                  'id'            => 106,
                  'sii_branch_id' => 22,
                  'name'          => 'Nancagua',
                  'code'          => 6305,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                106 =>
                 [
                  'id'            => 107,
                  'sii_branch_id' => 23,
                  'name'          => 'Palmilla',
                  'code'          => 6306,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                107 =>
                 [
                  'id'            => 108,
                  'sii_branch_id' => 23,
                  'name'          => 'Peralillo',
                  'code'          => 6307,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                108 =>
                 [
                  'id'            => 109,
                  'sii_branch_id' => 22,
                  'name'          => 'Placilla',
                  'code'          => 6308,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                109 =>
                 [
                  'id'            => 110,
                  'sii_branch_id' => 23,
                  'name'          => 'Pumanque',
                  'code'          => 6309,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                110 =>
                 [
                  'id'            => 111,
                  'sii_branch_id' => 23,
                  'name'          => 'Santa Cruz',
                  'code'          => 6310,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                111 =>
                 [
                  'id'            => 112,
                  'sii_branch_id' => 26,
                  'name'          => 'Talca',
                  'code'          => 7101,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                112 =>
                 [
                  'id'            => 113,
                  'sii_branch_id' => 28,
                  'name'          => 'Constitución',
                  'code'          => 7102,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                113 =>
                 [
                  'id'            => 114,
                  'sii_branch_id' => 26,
                  'name'          => 'Curepto',
                  'code'          => 7103,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                114 =>
                 [
                  'id'            => 115,
                  'sii_branch_id' => 28,
                  'name'          => 'Empedrado',
                  'code'          => 7104,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                115 =>
                 [
                  'id'            => 116,
                  'sii_branch_id' => 26,
                  'name'          => 'Maule',
                  'code'          => 7105,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                116 =>
                 [
                  'id'            => 117,
                  'sii_branch_id' => 26,
                  'name'          => 'Pelarco',
                  'code'          => 7106,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                117 =>
                 [
                  'id'            => 118,
                  'sii_branch_id' => 26,
                  'name'          => 'Pencahue',
                  'code'          => 7107,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                118 =>
                 [
                  'id'            => 119,
                  'sii_branch_id' => 26,
                  'name'          => 'Río Claro',
                  'code'          => 7108,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                119 =>
                 [
                  'id'            => 120,
                  'sii_branch_id' => 26,
                  'name'          => 'San Clemente',
                  'code'          => 7109,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                120 =>
                 [
                  'id'            => 121,
                  'sii_branch_id' => 26,
                  'name'          => 'San Rafael',
                  'code'          => 7110,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                121 =>
                 [
                  'id'            => 122,
                  'sii_branch_id' => 29,
                  'name'          => 'Cauquenes',
                  'code'          => 7201,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                122 =>
                 [
                  'id'            => 123,
                  'sii_branch_id' => 29,
                  'name'          => 'Chanco',
                  'code'          => 7202,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                123 =>
                 [
                  'id'            => 124,
                  'sii_branch_id' => 29,
                  'name'          => 'Pelluhue',
                  'code'          => 7203,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                124 =>
                 [
                  'id'            => 125,
                  'sii_branch_id' => 31,
                  'name'          => 'Curicó',
                  'code'          => 7301,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                125 =>
                 [
                  'id'            => 126,
                  'sii_branch_id' => 31,
                  'name'          => 'Hualañé',
                  'code'          => 7302,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                126 =>
                 [
                  'id'            => 127,
                  'sii_branch_id' => 31,
                  'name'          => 'Licantén',
                  'code'          => 7303,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                127 =>
                 [
                  'id'            => 128,
                  'sii_branch_id' => 31,
                  'name'          => 'Molina',
                  'code'          => 7304,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                128 =>
                 [
                  'id'            => 129,
                  'sii_branch_id' => 31,
                  'name'          => 'Rauco',
                  'code'          => 7305,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                129 =>
                 [
                  'id'            => 130,
                  'sii_branch_id' => 31,
                  'name'          => 'Romeral',
                  'code'          => 7306,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                130 =>
                 [
                  'id'            => 131,
                  'sii_branch_id' => 31,
                  'name'          => 'Sagrada Familia',
                  'code'          => 7307,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                131 =>
                 [
                  'id'            => 132,
                  'sii_branch_id' => 31,
                  'name'          => 'Teno',
                  'code'          => 7308,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                132 =>
                 [
                  'id'            => 133,
                  'sii_branch_id' => 31,
                  'name'          => 'Vichuquén',
                  'code'          => 7309,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                133 =>
                 [
                  'id'            => 134,
                  'sii_branch_id' => 27,
                  'name'          => 'Linares',
                  'code'          => 7401,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                134 =>
                 [
                  'id'            => 135,
                  'sii_branch_id' => 27,
                  'name'          => 'Colbún',
                  'code'          => 7402,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                135 =>
                 [
                  'id'            => 136,
                  'sii_branch_id' => 27,
                  'name'          => 'Longaví',
                  'code'          => 7403,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                136 =>
                 [
                  'id'            => 137,
                  'sii_branch_id' => 30,
                  'name'          => 'Parral',
                  'code'          => 7404,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                137 =>
                 [
                  'id'            => 138,
                  'sii_branch_id' => 30,
                  'name'          => 'Retiro',
                  'code'          => 7405,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                138 =>
                 [
                  'id'            => 139,
                  'sii_branch_id' => 26,
                  'name'          => 'San Javier',
                  'code'          => 7406,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                139 =>
                 [
                  'id'            => 140,
                  'sii_branch_id' => 27,
                  'name'          => 'Villa Alegre',
                  'code'          => 7407,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                140 =>
                 [
                  'id'            => 141,
                  'sii_branch_id' => 27,
                  'name'          => 'Yerbas Buenas',
                  'code'          => 7408,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                141 =>
                 [
                  'id'            => 142,
                  'sii_branch_id' => 32,
                  'name'          => 'Concepción',
                  'code'          => 8101,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                142 =>
                 [
                  'id'            => 143,
                  'sii_branch_id' => 32,
                  'name'          => 'Coronel',
                  'code'          => 8102,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                143 =>
                 [
                  'id'            => 144,
                  'sii_branch_id' => 32,
                  'name'          => 'Chiguayante',
                  'code'          => 8103,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                144 =>
                 [
                  'id'            => 145,
                  'sii_branch_id' => 32,
                  'name'          => 'Florida',
                  'code'          => 8104,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                145 =>
                 [
                  'id'            => 146,
                  'sii_branch_id' => 32,
                  'name'          => 'Hualqui',
                  'code'          => 8105,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                146 =>
                 [
                  'id'            => 147,
                  'sii_branch_id' => 32,
                  'name'          => 'Lota',
                  'code'          => 8106,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                147 =>
                 [
                  'id'            => 148,
                  'sii_branch_id' => 32,
                  'name'          => 'Penco',
                  'code'          => 8107,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                148 =>
                 [
                  'id'            => 149,
                  'sii_branch_id' => 32,
                  'name'          => 'San Pedro de la Paz',
                  'code'          => 8108,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                149 =>
                 [
                  'id'            => 150,
                  'sii_branch_id' => 32,
                  'name'          => 'Santa Juana',
                  'code'          => 8109,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                150 =>
                 [
                  'id'            => 151,
                  'sii_branch_id' => 36,
                  'name'          => 'Talcahuano',
                  'code'          => 8110,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                151 =>
                 [
                  'id'            => 152,
                  'sii_branch_id' => 32,
                  'name'          => 'Tomé',
                  'code'          => 8111,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                152 =>
                 [
                  'id'            => 153,
                  'sii_branch_id' => 36,
                  'name'          => 'Hualpén',
                  'code'          => 8112,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                153 =>
                 [
                  'id'            => 154,
                  'sii_branch_id' => 37,
                  'name'          => 'Lebu',
                  'code'          => 8201,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                154 =>
                 [
                  'id'            => 155,
                  'sii_branch_id' => 32,
                  'name'          => 'Arauco',
                  'code'          => 8202,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                155 =>
                 [
                  'id'            => 156,
                  'sii_branch_id' => 37,
                  'name'          => 'Cañete',
                  'code'          => 8203,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                156 =>
                 [
                  'id'            => 157,
                  'sii_branch_id' => 37,
                  'name'          => 'Contulmo',
                  'code'          => 8204,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                157 =>
                 [
                  'id'            => 158,
                  'sii_branch_id' => 37,
                  'name'          => 'Curanilahue',
                  'code'          => 8205,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                158 =>
                 [
                  'id'            => 159,
                  'sii_branch_id' => 37,
                  'name'          => 'Los Álamos',
                  'code'          => 8206,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                159 =>
                 [
                  'id'            => 160,
                  'sii_branch_id' => 37,
                  'name'          => 'Tirúa',
                  'code'          => 8207,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                160 =>
                 [
                  'id'            => 161,
                  'sii_branch_id' => 34,
                  'name'          => 'Los Ángeles',
                  'code'          => 8301,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                161 =>
                 [
                  'id'            => 162,
                  'sii_branch_id' => 34,
                  'name'          => 'Antuco',
                  'code'          => 8302,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                162 =>
                 [
                  'id'            => 163,
                  'sii_branch_id' => 34,
                  'name'          => 'Cabrero',
                  'code'          => 8303,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                163 =>
                 [
                  'id'            => 164,
                  'sii_branch_id' => 34,
                  'name'          => 'Laja',
                  'code'          => 8304,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                164 =>
                 [
                  'id'            => 165,
                  'sii_branch_id' => 34,
                  'name'          => 'Mulchén',
                  'code'          => 8305,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                165 =>
                 [
                  'id'            => 166,
                  'sii_branch_id' => 34,
                  'name'          => 'Nacimiento',
                  'code'          => 8306,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                166 =>
                 [
                  'id'            => 167,
                  'sii_branch_id' => 34,
                  'name'          => 'Negrete',
                  'code'          => 8307,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                167 =>
                 [
                  'id'            => 168,
                  'sii_branch_id' => 34,
                  'name'          => 'Quilaco',
                  'code'          => 8308,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                168 =>
                 [
                  'id'            => 169,
                  'sii_branch_id' => 34,
                  'name'          => 'Quilleco',
                  'code'          => 8309,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                169 =>
                 [
                  'id'            => 170,
                  'sii_branch_id' => 34,
                  'name'          => 'San Rosendo',
                  'code'          => 8310,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                170 =>
                 [
                  'id'            => 171,
                  'sii_branch_id' => 34,
                  'name'          => 'Santa Bárbara',
                  'code'          => 8311,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                171 =>
                 [
                  'id'            => 172,
                  'sii_branch_id' => 34,
                  'name'          => 'Tucapel',
                  'code'          => 8312,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                172 =>
                 [
                  'id'            => 173,
                  'sii_branch_id' => 34,
                  'name'          => 'Yumbel',
                  'code'          => 8313,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                173 =>
                 [
                  'id'            => 174,
                  'sii_branch_id' => 34,
                  'name'          => 'Alto Biobío',
                  'code'          => 8314,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                174 =>
                 [
                  'id'            => 175,
                  'sii_branch_id' => 33,
                  'name'          => 'Chillán',
                  'code'          => 8401,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                175 =>
                 [
                  'id'            => 176,
                  'sii_branch_id' => 33,
                  'name'          => 'Bulnes',
                  'code'          => 8402,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                176 =>
                 [
                  'id'            => 177,
                  'sii_branch_id' => 33,
                  'name'          => 'Cobquecura',
                  'code'          => 8403,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                177 =>
                 [
                  'id'            => 178,
                  'sii_branch_id' => 33,
                  'name'          => 'Coelemu',
                  'code'          => 8404,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                178 =>
                 [
                  'id'            => 179,
                  'sii_branch_id' => 33,
                  'name'          => 'Coihueco',
                  'code'          => 8405,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                179 =>
                 [
                  'id'            => 180,
                  'sii_branch_id' => 33,
                  'name'          => 'Chillán Viejo',
                  'code'          => 8406,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                180 =>
                 [
                  'id'            => 181,
                  'sii_branch_id' => 33,
                  'name'          => 'El Carmen',
                  'code'          => 8407,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                181 =>
                 [
                  'id'            => 182,
                  'sii_branch_id' => 33,
                  'name'          => 'Ninhue',
                  'code'          => 8408,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                182 =>
                 [
                  'id'            => 183,
                  'sii_branch_id' => 35,
                  'name'          => 'Ñiquén',
                  'code'          => 8409,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                183 =>
                 [
                  'id'            => 184,
                  'sii_branch_id' => 33,
                  'name'          => 'Pemuco',
                  'code'          => 8410,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                184 =>
                 [
                  'id'            => 185,
                  'sii_branch_id' => 33,
                  'name'          => 'Pinto',
                  'code'          => 8411,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                185 =>
                 [
                  'id'            => 186,
                  'sii_branch_id' => 33,
                  'name'          => 'Portezuelo',
                  'code'          => 8412,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                186 =>
                 [
                  'id'            => 187,
                  'sii_branch_id' => 33,
                  'name'          => 'Quillón',
                  'code'          => 8413,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                187 =>
                 [
                  'id'            => 188,
                  'sii_branch_id' => 33,
                  'name'          => 'Quirihue',
                  'code'          => 8414,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                188 =>
                 [
                  'id'            => 189,
                  'sii_branch_id' => 33,
                  'name'          => 'Ránquil',
                  'code'          => 8415,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                189 =>
                 [
                  'id'            => 190,
                  'sii_branch_id' => 35,
                  'name'          => 'San Carlos',
                  'code'          => 8416,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                190 =>
                 [
                  'id'            => 191,
                  'sii_branch_id' => 35,
                  'name'          => 'San Fabián',
                  'code'          => 8417,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                191 =>
                 [
                  'id'            => 192,
                  'sii_branch_id' => 33,
                  'name'          => 'San Ignacio',
                  'code'          => 8418,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                192 =>
                 [
                  'id'            => 193,
                  'sii_branch_id' => 35,
                  'name'          => 'San Nicolás',
                  'code'          => 8419,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                193 =>
                 [
                  'id'            => 194,
                  'sii_branch_id' => 33,
                  'name'          => 'Treguaco',
                  'code'          => 8420,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                194 =>
                 [
                  'id'            => 195,
                  'sii_branch_id' => 33,
                  'name'          => 'Yungay',
                  'code'          => 8421,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                195 =>
                 [
                  'id'            => 196,
                  'sii_branch_id' => 38,
                  'name'          => 'Temuco',
                  'code'          => 9101,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                196 =>
                 [
                  'id'            => 197,
                  'sii_branch_id' => 38,
                  'name'          => 'Carahue',
                  'code'          => 9102,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                197 =>
                 [
                  'id'            => 198,
                  'sii_branch_id' => 38,
                  'name'          => 'Cunco',
                  'code'          => 9103,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                198 =>
                 [
                  'id'            => 199,
                  'sii_branch_id' => 41,
                  'name'          => 'Curarrehue',
                  'code'          => 9104,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                199 =>
                 [
                  'id'            => 200,
                  'sii_branch_id' => 38,
                  'name'          => 'Freire',
                  'code'          => 9105,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                200 =>
                 [
                  'id'            => 201,
                  'sii_branch_id' => 38,
                  'name'          => 'Galvarino',
                  'code'          => 9106,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                201 =>
                 [
                  'id'            => 202,
                  'sii_branch_id' => 38,
                  'name'          => 'Gorbea',
                  'code'          => 9107,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                202 =>
                 [
                  'id'            => 203,
                  'sii_branch_id' => 38,
                  'name'          => 'Lautaro',
                  'code'          => 9108,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                203 =>
                 [
                  'id'            => 204,
                  'sii_branch_id' => 38,
                  'name'          => 'Loncoche',
                  'code'          => 9109,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                204 =>
                 [
                  'id'            => 205,
                  'sii_branch_id' => 38,
                  'name'          => 'Melipeuco',
                  'code'          => 9110,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                205 =>
                 [
                  'id'            => 206,
                  'sii_branch_id' => 38,
                  'name'          => 'Nueva Imperial',
                  'code'          => 9111,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                206 =>
                 [
                  'id'            => 207,
                  'sii_branch_id' => 38,
                  'name'          => 'Padre las Casas',
                  'code'          => 9112,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                207 =>
                 [
                  'id'            => 208,
                  'sii_branch_id' => 38,
                  'name'          => 'Perquenco',
                  'code'          => 9113,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                208 =>
                 [
                  'id'            => 209,
                  'sii_branch_id' => 38,
                  'name'          => 'Pitrufquén',
                  'code'          => 9114,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                209 =>
                 [
                  'id'            => 210,
                  'sii_branch_id' => 41,
                  'name'          => 'Pucón',
                  'code'          => 9115,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                210 =>
                 [
                  'id'            => 211,
                  'sii_branch_id' => 38,
                  'name'          => 'Saavedra',
                  'code'          => 9116,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                211 =>
                 [
                  'id'            => 212,
                  'sii_branch_id' => 38,
                  'name'          => 'Teodoro Schmidt',
                  'code'          => 9117,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                212 =>
                 [
                  'id'            => 213,
                  'sii_branch_id' => 38,
                  'name'          => 'Toltén',
                  'code'          => 9118,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                213 =>
                 [
                  'id'            => 214,
                  'sii_branch_id' => 38,
                  'name'          => 'Vilcún',
                  'code'          => 9119,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                214 =>
                 [
                  'id'            => 215,
                  'sii_branch_id' => 41,
                  'name'          => 'Villarrica',
                  'code'          => 9120,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                215 =>
                 [
                  'id'            => 216,
                  'sii_branch_id' => 38,
                  'name'          => 'Cholchol',
                  'code'          => 9121,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                216 =>
                 [
                  'id'            => 217,
                  'sii_branch_id' => 39,
                  'name'          => 'Angol',
                  'code'          => 9201,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                217 =>
                 [
                  'id'            => 218,
                  'sii_branch_id' => 39,
                  'name'          => 'Collipulli',
                  'code'          => 9202,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                218 =>
                 [
                  'id'            => 219,
                  'sii_branch_id' => 40,
                  'name'          => 'Curacautín',
                  'code'          => 9203,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                219 =>
                 [
                  'id'            => 220,
                  'sii_branch_id' => 39,
                  'name'          => 'Ercilla',
                  'code'          => 9204,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                220 =>
                 [
                  'id'            => 221,
                  'sii_branch_id' => 40,
                  'name'          => 'Lonquimay',
                  'code'          => 9205,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                221 =>
                 [
                  'id'            => 222,
                  'sii_branch_id' => 39,
                  'name'          => 'Los Sauces',
                  'code'          => 9206,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                222 =>
                 [
                  'id'            => 223,
                  'sii_branch_id' => 40,
                  'name'          => 'Lumaco',
                  'code'          => 9207,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                223 =>
                 [
                  'id'            => 224,
                  'sii_branch_id' => 39,
                  'name'          => 'Purén',
                  'code'          => 9208,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                224 =>
                 [
                  'id'            => 225,
                  'sii_branch_id' => 39,
                  'name'          => 'Renaico',
                  'code'          => 9209,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                225 =>
                 [
                  'id'            => 226,
                  'sii_branch_id' => 40,
                  'name'          => 'Traiguén',
                  'code'          => 9210,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                226 =>
                 [
                  'id'            => 227,
                  'sii_branch_id' => 40,
                  'name'          => 'Victoria',
                  'code'          => 9211,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                227 =>
                 [
                  'id'            => 228,
                  'sii_branch_id' => 46,
                  'name'          => 'Puerto Montt',
                  'code'          => 10101,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                228 =>
                 [
                  'id'            => 229,
                  'sii_branch_id' => 46,
                  'name'          => 'Calbuco',
                  'code'          => 10102,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                229 =>
                 [
                  'id'            => 230,
                  'sii_branch_id' => 47,
                  'name'          => 'Cochamó',
                  'code'          => 10103,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                230 =>
                 [
                  'id'            => 231,
                  'sii_branch_id' => 47,
                  'name'          => 'Fresia',
                  'code'          => 10104,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                231 =>
                 [
                  'id'            => 232,
                  'sii_branch_id' => 47,
                  'name'          => 'Frutillar',
                  'code'          => 10105,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                232 =>
                 [
                  'id'            => 233,
                  'sii_branch_id' => 46,
                  'name'          => 'Los Muermos',
                  'code'          => 10106,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                233 =>
                 [
                  'id'            => 234,
                  'sii_branch_id' => 47,
                  'name'          => 'Llanquihue',
                  'code'          => 10107,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                234 =>
                 [
                  'id'            => 235,
                  'sii_branch_id' => 46,
                  'name'          => 'Maullín',
                  'code'          => 10108,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                235 =>
                 [
                  'id'            => 236,
                  'sii_branch_id' => 47,
                  'name'          => 'Puerto Varas',
                  'code'          => 10109,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                236 =>
                 [
                  'id'            => 237,
                  'sii_branch_id' => 50,
                  'name'          => 'Castro',
                  'code'          => 10201,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                237 =>
                 [
                  'id'            => 238,
                  'sii_branch_id' => 48,
                  'name'          => 'Ancud',
                  'code'          => 10202,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                238 =>
                 [
                  'id'            => 239,
                  'sii_branch_id' => 50,
                  'name'          => 'Chonchi',
                  'code'          => 10203,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                239 =>
                 [
                  'id'            => 240,
                  'sii_branch_id' => 50,
                  'name'          => 'Curaco de Vélez',
                  'code'          => 10204,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                240 =>
                 [
                  'id'            => 241,
                  'sii_branch_id' => 50,
                  'name'          => 'Dalcahue',
                  'code'          => 10205,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                241 =>
                 [
                  'id'            => 242,
                  'sii_branch_id' => 50,
                  'name'          => 'Puqueldón',
                  'code'          => 10206,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                242 =>
                 [
                  'id'            => 243,
                  'sii_branch_id' => 50,
                  'name'          => 'Queilén',
                  'code'          => 10207,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                243 =>
                 [
                  'id'            => 244,
                  'sii_branch_id' => 50,
                  'name'          => 'Quellón',
                  'code'          => 10208,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                244 =>
                 [
                  'id'            => 245,
                  'sii_branch_id' => 48,
                  'name'          => 'Quemchi',
                  'code'          => 10209,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                245 =>
                 [
                  'id'            => 246,
                  'sii_branch_id' => 48,
                  'name'          => 'Quinchao',
                  'code'          => 10210,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                246 =>
                 [
                  'id'            => 247,
                  'sii_branch_id' => 49,
                  'name'          => 'Osorno',
                  'code'          => 10301,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                247 =>
                 [
                  'id'            => 248,
                  'sii_branch_id' => 49,
                  'name'          => 'Puerto Octay',
                  'code'          => 10302,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                248 =>
                 [
                  'id'            => 249,
                  'sii_branch_id' => 49,
                  'name'          => 'Purranque',
                  'code'          => 10303,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                249 =>
                 [
                  'id'            => 250,
                  'sii_branch_id' => 49,
                  'name'          => 'Puyehue',
                  'code'          => 10304,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                250 =>
                 [
                  'id'            => 251,
                  'sii_branch_id' => 49,
                  'name'          => 'Río Negro',
                  'code'          => 10305,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                251 =>
                 [
                  'id'            => 252,
                  'sii_branch_id' => 49,
                  'name'          => 'San Juan de la Costa',
                  'code'          => 10306,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                252 =>
                 [
                  'id'            => 253,
                  'sii_branch_id' => 49,
                  'name'          => 'San Pablo',
                  'code'          => 10307,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                253 =>
                 [
                  'id'            => 254,
                  'sii_branch_id' => 51,
                  'name'          => 'Chaitén',
                  'code'          => 10401,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                254 =>
                 [
                  'id'            => 255,
                  'sii_branch_id' => 51,
                  'name'          => 'Futaleufú',
                  'code'          => 10402,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                255 =>
                 [
                  'id'            => 256,
                  'sii_branch_id' => 46,
                  'name'          => 'Hualaihué',
                  'code'          => 10403,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                256 =>
                 [
                  'id'            => 257,
                  'sii_branch_id' => 51,
                  'name'          => 'Palena',
                  'code'          => 10404,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                257 =>
                 [
                  'id'            => 258,
                  'sii_branch_id' => 52,
                  'name'          => 'Coyhaique',
                  'code'          => 11101,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                258 =>
                 [
                  'id'            => 259,
                  'sii_branch_id' => 53,
                  'name'          => 'Lago Verde',
                  'code'          => 11102,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                259 =>
                 [
                  'id'            => 260,
                  'sii_branch_id' => 53,
                  'name'          => 'Aysén',
                  'code'          => 11201,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                260 =>
                 [
                  'id'            => 261,
                  'sii_branch_id' => 53,
                  'name'          => 'Cisnes',
                  'code'          => 11202,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                261 =>
                 [
                  'id'            => 262,
                  'sii_branch_id' => 53,
                  'name'          => 'Guaitecas',
                  'code'          => 11203,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                262 =>
                 [
                  'id'            => 263,
                  'sii_branch_id' => 52,
                  'name'          => 'Cochrane',
                  'code'          => 11301,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                263 =>
                 [
                  'id'            => 264,
                  'sii_branch_id' => 52,
                  'name'          => 'O\'Higgins',
                  'code'          => 11302,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                264 =>
                 [
                  'id'            => 265,
                  'sii_branch_id' => 55,
                  'name'          => 'Tortel',
                  'code'          => 11303,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                265 =>
                 [
                  'id'            => 266,
                  'sii_branch_id' => 54,
                  'name'          => 'Chile Chico',
                  'code'          => 11401,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                266 =>
                 [
                  'id'            => 267,
                  'sii_branch_id' => 52,
                  'name'          => 'Río Ibáñez',
                  'code'          => 11402,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                267 =>
                 [
                  'id'            => 268,
                  'sii_branch_id' => 56,
                  'name'          => 'Punta Arenas',
                  'code'          => 12101,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                268 =>
                 [
                  'id'            => 269,
                  'sii_branch_id' => 56,
                  'name'          => 'Laguna Blanca',
                  'code'          => 12102,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                269 =>
                 [
                  'id'            => 270,
                  'sii_branch_id' => 56,
                  'name'          => 'Río Verde',
                  'code'          => 12103,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                270 =>
                 [
                  'id'            => 271,
                  'sii_branch_id' => 56,
                  'name'          => 'San Gregorio',
                  'code'          => 12104,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                271 =>
                 [
                  'id'            => 272,
                  'sii_branch_id' => 56,
                  'name'          => 'Cabo de Hornos',
                  'code'          => 12201,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                272 =>
                 [
                  'id'            => 273,
                  'sii_branch_id' => 56,
                  'name'          => 'Antártica',
                  'code'          => 12202,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                273 =>
                 [
                  'id'            => 274,
                  'sii_branch_id' => 58,
                  'name'          => 'Porvenir',
                  'code'          => 12301,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                274 =>
                 [
                  'id'            => 275,
                  'sii_branch_id' => 58,
                  'name'          => 'Primavera',
                  'code'          => 12302,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                275 =>
                 [
                  'id'            => 276,
                  'sii_branch_id' => 58,
                  'name'          => 'Timaukel',
                  'code'          => 12303,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                276 =>
                 [
                  'id'            => 277,
                  'sii_branch_id' => 57,
                  'name'          => 'Natales',
                  'code'          => 12401,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                277 =>
                 [
                  'id'            => 278,
                  'sii_branch_id' => 57,
                  'name'          => 'Torres del Paine',
                  'code'          => 12402,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                278 =>
                 [
                  'id'            => 279,
                  'sii_branch_id' => 59,
                  'name'          => 'Santiago',
                  'code'          => 13101,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                279 =>
                 [
                  'id'            => 280,
                  'sii_branch_id' => 62,
                  'name'          => 'Cerrillos',
                  'code'          => 13102,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                280 =>
                 [
                  'id'            => 281,
                  'sii_branch_id' => 60,
                  'name'          => 'Cerro Navia',
                  'code'          => 13103,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                281 =>
                 [
                  'id'            => 282,
                  'sii_branch_id' => 43,
                  'name'          => 'Conchalí',
                  'code'          => 13104,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                282 =>
                 [
                  'id'            => 283,
                  'sii_branch_id' => 68,
                  'name'          => 'El Bosque',
                  'code'          => 13105,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                283 =>
                 [
                  'id'            => 284,
                  'sii_branch_id' => 60,
                  'name'          => 'Estación Central',
                  'code'          => 13106,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                284 =>
                 [
                  'id'            => 285,
                  'sii_branch_id' => 43,
                  'name'          => 'Huechuraba',
                  'code'          => 13107,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                285 =>
                 [
                  'id'            => 286,
                  'sii_branch_id' => 43,
                  'name'          => 'Independencia',
                  'code'          => 13108,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                286 =>
                 [
                  'id'            => 287,
                  'sii_branch_id' => 66,
                  'name'          => 'La Cisterna',
                  'code'          => 13109,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                287 =>
                 [
                  'id'            => 288,
                  'sii_branch_id' => 67,
                  'name'          => 'La Florida',
                  'code'          => 13110,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                288 =>
                 [
                  'id'            => 289,
                  'sii_branch_id' => 66,
                  'name'          => 'La Granja',
                  'code'          => 13111,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                289 =>
                 [
                  'id'            => 290,
                  'sii_branch_id' => 66,
                  'name'          => 'La Pintana',
                  'code'          => 13112,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                290 =>
                 [
                  'id'            => 291,
                  'sii_branch_id' => 64,
                  'name'          => 'La Reina',
                  'code'          => 13113,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                291 =>
                 [
                  'id'            => 292,
                  'sii_branch_id' => 63,
                  'name'          => 'Las Condes',
                  'code'          => 13114,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                292 =>
                 [
                  'id'            => 293,
                  'sii_branch_id' => 63,
                  'name'          => 'Lo Barnechea',
                  'code'          => 13115,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                293 =>
                 [
                  'id'            => 294,
                  'sii_branch_id' => 66,
                  'name'          => 'Lo Espejo',
                  'code'          => 13116,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                294 =>
                 [
                  'id'            => 295,
                  'sii_branch_id' => 60,
                  'name'          => 'Lo Prado',
                  'code'          => 13117,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                295 =>
                 [
                  'id'            => 296,
                  'sii_branch_id' => 64,
                  'name'          => 'Macul',
                  'code'          => 13118,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                296 =>
                 [
                  'id'            => 297,
                  'sii_branch_id' => 62,
                  'name'          => 'Maipú',
                  'code'          => 13119,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                297 =>
                 [
                  'id'            => 298,
                  'sii_branch_id' => 64,
                  'name'          => 'Ñuñoa',
                  'code'          => 13120,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                298 =>
                 [
                  'id'            => 299,
                  'sii_branch_id' => 66,
                  'name'          => 'Pedro Aguirre Cerda',
                  'code'          => 13121,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                299 =>
                 [
                  'id'            => 300,
                  'sii_branch_id' => 64,
                  'name'          => 'Peñalolén',
                  'code'          => 13122,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                300 =>
                 [
                  'id'            => 301,
                  'sii_branch_id' => 65,
                  'name'          => 'Providencia',
                  'code'          => 13123,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                301 =>
                 [
                  'id'            => 302,
                  'sii_branch_id' => 60,
                  'name'          => 'Pudahuel',
                  'code'          => 13124,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                302 =>
                 [
                  'id'            => 303,
                  'sii_branch_id' => 43,
                  'name'          => 'Quilicura',
                  'code'          => 13125,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                303 =>
                 [
                  'id'            => 304,
                  'sii_branch_id' => 60,
                  'name'          => 'Quinta Normal',
                  'code'          => 13126,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                304 =>
                 [
                  'id'            => 305,
                  'sii_branch_id' => 43,
                  'name'          => 'Recoleta',
                  'code'          => 13127,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                305 =>
                 [
                  'id'            => 306,
                  'sii_branch_id' => 60,
                  'name'          => 'Renca',
                  'code'          => 13128,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                306 =>
                 [
                  'id'            => 307,
                  'sii_branch_id' => 66,
                  'name'          => 'San Joaquín',
                  'code'          => 13129,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                307 =>
                 [
                  'id'            => 308,
                  'sii_branch_id' => 66,
                  'name'          => 'San Miguel',
                  'code'          => 13130,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                308 =>
                 [
                  'id'            => 309,
                  'sii_branch_id' => 66,
                  'name'          => 'San Ramón',
                  'code'          => 13131,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                309 =>
                 [
                  'id'            => 310,
                  'sii_branch_id' => 63,
                  'name'          => 'Vitacura',
                  'code'          => 13132,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                310 =>
                 [
                  'id'            => 311,
                  'sii_branch_id' => 67,
                  'name'          => 'Puente Alto',
                  'code'          => 13201,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                311 =>
                 [
                  'id'            => 312,
                  'sii_branch_id' => 67,
                  'name'          => 'Pirque',
                  'code'          => 13202,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                312 =>
                 [
                  'id'            => 313,
                  'sii_branch_id' => 67,
                  'name'          => 'San José de Maipo',
                  'code'          => 13203,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                313 =>
                 [
                  'id'            => 314,
                  'sii_branch_id' => 43,
                  'name'          => 'Colina',
                  'code'          => 13301,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                314 =>
                 [
                  'id'            => 315,
                  'sii_branch_id' => 43,
                  'name'          => 'Lampa',
                  'code'          => 13302,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                315 =>
                 [
                  'id'            => 316,
                  'sii_branch_id' => 43,
                  'name'          => 'Tiltil',
                  'code'          => 13303,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                316 =>
                 [
                  'id'            => 317,
                  'sii_branch_id' => 68,
                  'name'          => 'San Bernardo',
                  'code'          => 13401,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                317 =>
                 [
                  'id'            => 318,
                  'sii_branch_id' => 69,
                  'name'          => 'Buin',
                  'code'          => 13402,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                318 =>
                 [
                  'id'            => 319,
                  'sii_branch_id' => 68,
                  'name'          => 'Calera de Tango',
                  'code'          => 13403,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                319 =>
                 [
                  'id'            => 320,
                  'sii_branch_id' => 69,
                  'name'          => 'Paine',
                  'code'          => 13404,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                320 =>
                 [
                  'id'            => 321,
                  'sii_branch_id' => 61,
                  'name'          => 'Melipilla',
                  'code'          => 13501,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                321 =>
                 [
                  'id'            => 322,
                  'sii_branch_id' => 61,
                  'name'          => 'Alhué',
                  'code'          => 13502,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                322 =>
                 [
                  'id'            => 323,
                  'sii_branch_id' => 60,
                  'name'          => 'Curacaví',
                  'code'          => 13503,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                323 =>
                 [
                  'id'            => 324,
                  'sii_branch_id' => 61,
                  'name'          => 'María Pinto',
                  'code'          => 13504,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                324 =>
                 [
                  'id'            => 325,
                  'sii_branch_id' => 61,
                  'name'          => 'San Pedro',
                  'code'          => 13505,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                325 =>
                 [
                  'id'            => 326,
                  'sii_branch_id' => 62,
                  'name'          => 'Talagante',
                  'code'          => 13601,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                326 =>
                 [
                  'id'            => 327,
                  'sii_branch_id' => 62,
                  'name'          => 'El Monte',
                  'code'          => 13602,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                327 =>
                 [
                  'id'            => 328,
                  'sii_branch_id' => 62,
                  'name'          => 'Isla de Maipo',
                  'code'          => 13603,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                328 =>
                 [
                  'id'            => 329,
                  'sii_branch_id' => 62,
                  'name'          => 'Padre Hurtado',
                  'code'          => 13604,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                329 =>
                 [
                  'id'            => 330,
                  'sii_branch_id' => 62,
                  'name'          => 'Peñaflor',
                  'code'          => 13605,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                330 =>
                 [
                  'id'            => 331,
                  'sii_branch_id' => 42,
                  'name'          => 'Valdivia',
                  'code'          => 14101,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                331 =>
                 [
                  'id'            => 332,
                  'sii_branch_id' => 42,
                  'name'          => 'Corral',
                  'code'          => 14102,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                332 =>
                 [
                  'id'            => 333,
                  'sii_branch_id' => 44,
                  'name'          => 'Lanco',
                  'code'          => 14103,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                333 =>
                 [
                  'id'            => 334,
                  'sii_branch_id' => 42,
                  'name'          => 'Los Lagos',
                  'code'          => 14104,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                334 =>
                 [
                  'id'            => 335,
                  'sii_branch_id' => 42,
                  'name'          => 'Máfil',
                  'code'          => 14105,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                335 =>
                 [
                  'id'            => 336,
                  'sii_branch_id' => 42,
                  'name'          => 'Mariquina',
                  'code'          => 14106,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                336 =>
                 [
                  'id'            => 337,
                  'sii_branch_id' => 42,
                  'name'          => 'Paillaco',
                  'code'          => 14107,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                337 =>
                 [
                  'id'            => 338,
                  'sii_branch_id' => 45,
                  'name'          => 'Panguipulli',
                  'code'          => 14108,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                338 =>
                 [
                  'id'            => 339,
                  'sii_branch_id' => 42,
                  'name'          => 'La Unión',
                  'code'          => 14201,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                339 =>
                 [
                  'id'            => 340,
                  'sii_branch_id' => 42,
                  'name'          => 'Futrono',
                  'code'          => 14202,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                340 =>
                 [
                  'id'            => 341,
                  'sii_branch_id' => 70,
                  'name'          => 'Lago Ranco',
                  'code'          => 14203,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                341 =>
                 [
                  'id'            => 342,
                  'sii_branch_id' => 42,
                  'name'          => 'Río Bueno',
                  'code'          => 14204,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                342 =>
                 [
                  'id'            => 343,
                  'sii_branch_id' => 1,
                  'name'          => 'Arica',
                  'code'          => 15101,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                343 =>
                 [
                  'id'            => 344,
                  'sii_branch_id' => 1,
                  'name'          => 'Camarones',
                  'code'          => 15102,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                344 =>
                 [
                  'id'            => 345,
                  'sii_branch_id' => 1,
                  'name'          => 'Putre',
                  'code'          => 15201,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
                345 =>
                 [
                  'id'            => 346,
                  'sii_branch_id' => 1,
                  'name'          => 'General Lagos',
                  'code'          => 15202,
                  'created_at'    => NULL,
                  'updated_at'    => NULL,
                 ],
               ]);
    Schema::enableForeignKeyConstraints();
  }
}
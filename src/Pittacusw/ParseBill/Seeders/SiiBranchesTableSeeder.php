<?php

namespace Pittacusw\ParseBill\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class SiiBranchesTableSeeder extends Seeder {

  /**
   * Auto generated seed file
   *
   * @return void
   */
  public function run() {
    Schema::disableForeignKeyConstraints();
    DB::table('sii_branches')
      ->truncate();

    DB::table('sii_branches')
      ->insert([
                0  =>
                 [
                  'id'         => 1,
                  'name'       => 'Arica',
                  'created_at' => '2020-11-26 14:21:41',
                  'updated_at' => '2020-11-26 14:21:41',
                 ],
                1  =>
                 [
                  'id'         => 2,
                  'name'       => 'Iquique',
                  'created_at' => '2020-11-26 14:21:42',
                  'updated_at' => '2020-11-26 14:21:42',
                 ],
                2  =>
                 [
                  'id'         => 3,
                  'name'       => 'Antofagasta',
                  'created_at' => '2020-11-26 14:21:42',
                  'updated_at' => '2020-11-26 14:21:42',
                 ],
                3  =>
                 [
                  'id'         => 4,
                  'name'       => 'Calama',
                  'created_at' => '2020-11-26 14:21:42',
                  'updated_at' => '2020-11-26 14:21:42',
                 ],
                4  =>
                 [
                  'id'         => 5,
                  'name'       => 'Tocopilla',
                  'created_at' => '2020-11-26 14:21:42',
                  'updated_at' => '2020-11-26 14:21:42',
                 ],
                5  =>
                 [
                  'id'         => 6,
                  'name'       => 'Tal-Tal',
                  'created_at' => '2020-11-26 14:21:42',
                  'updated_at' => '2020-11-26 14:21:42',
                 ],
                6  =>
                 [
                  'id'         => 7,
                  'name'       => 'Copiapó',
                  'created_at' => '2020-11-26 14:21:42',
                  'updated_at' => '2020-11-26 14:21:42',
                 ],
                7  =>
                 [
                  'id'         => 8,
                  'name'       => 'Chañaral',
                  'created_at' => '2020-11-26 14:21:42',
                  'updated_at' => '2020-11-26 14:21:42',
                 ],
                8  =>
                 [
                  'id'         => 9,
                  'name'       => 'Vallenar',
                  'created_at' => '2020-11-26 14:21:42',
                  'updated_at' => '2020-11-26 14:21:42',
                 ],
                9  =>
                 [
                  'id'         => 10,
                  'name'       => 'La Serena',
                  'created_at' => '2020-11-26 14:21:42',
                  'updated_at' => '2020-11-26 14:21:42',
                 ],
                10 =>
                 [
                  'id'         => 11,
                  'name'       => 'Ovalle',
                  'created_at' => '2020-11-26 14:21:42',
                  'updated_at' => '2020-11-26 14:21:42',
                 ],
                11 =>
                 [
                  'id'         => 12,
                  'name'       => 'Illapel',
                  'created_at' => '2020-11-26 14:21:43',
                  'updated_at' => '2020-11-26 14:21:43',
                 ],
                12 =>
                 [
                  'id'         => 13,
                  'name'       => 'Coquimbo',
                  'created_at' => '2020-11-26 14:21:43',
                  'updated_at' => '2020-11-26 14:21:43',
                 ],
                13 =>
                 [
                  'id'         => 14,
                  'name'       => 'Valparaíso',
                  'created_at' => '2020-11-26 14:21:43',
                  'updated_at' => '2020-11-26 14:21:43',
                 ],
                14 =>
                 [
                  'id'         => 15,
                  'name'       => 'La Ligua',
                  'created_at' => '2020-11-26 14:21:43',
                  'updated_at' => '2020-11-26 14:21:43',
                 ],
                15 =>
                 [
                  'id'         => 16,
                  'name'       => 'San Antonio',
                  'created_at' => '2020-11-26 14:21:43',
                  'updated_at' => '2020-11-26 14:21:43',
                 ],
                16 =>
                 [
                  'id'         => 17,
                  'name'       => 'Quillota',
                  'created_at' => '2020-11-26 14:21:43',
                  'updated_at' => '2020-11-26 14:21:43',
                 ],
                17 =>
                 [
                  'id'         => 18,
                  'name'       => 'San Felipe',
                  'created_at' => '2020-11-26 14:21:43',
                  'updated_at' => '2020-11-26 14:21:43',
                 ],
                18 =>
                 [
                  'id'         => 19,
                  'name'       => 'Los Andes',
                  'created_at' => '2020-11-26 14:21:43',
                  'updated_at' => '2020-11-26 14:21:43',
                 ],
                19 =>
                 [
                  'id'         => 20,
                  'name'       => 'Villa Alemana',
                  'created_at' => '2020-11-26 14:21:43',
                  'updated_at' => '2020-11-26 14:21:43',
                 ],
                20 =>
                 [
                  'id'         => 21,
                  'name'       => 'Rancagua',
                  'created_at' => '2020-11-26 14:21:43',
                  'updated_at' => '2020-11-26 14:21:43',
                 ],
                21 =>
                 [
                  'id'         => 22,
                  'name'       => 'San Fernando',
                  'created_at' => '2020-11-26 14:21:43',
                  'updated_at' => '2020-11-26 14:21:43',
                 ],
                22 =>
                 [
                  'id'         => 23,
                  'name'       => 'Santa Cruz',
                  'created_at' => '2020-11-26 14:21:43',
                  'updated_at' => '2020-11-26 14:21:43',
                 ],
                23 =>
                 [
                  'id'         => 24,
                  'name'       => 'San Vicente de Tagua Tagua',
                  'created_at' => '2020-11-26 14:21:43',
                  'updated_at' => '2020-11-26 14:21:43',
                 ],
                24 =>
                 [
                  'id'         => 25,
                  'name'       => 'Pichilemu',
                  'created_at' => '2020-11-26 14:21:43',
                  'updated_at' => '2020-11-26 14:21:43',
                 ],
                25 =>
                 [
                  'id'         => 26,
                  'name'       => 'Talca',
                  'created_at' => '2020-11-26 14:21:43',
                  'updated_at' => '2020-11-26 14:21:43',
                 ],
                26 =>
                 [
                  'id'         => 27,
                  'name'       => 'Linares',
                  'created_at' => '2020-11-26 14:21:43',
                  'updated_at' => '2020-11-26 14:21:43',
                 ],
                27 =>
                 [
                  'id'         => 28,
                  'name'       => 'Constitución',
                  'created_at' => '2020-11-26 14:21:44',
                  'updated_at' => '2020-11-26 14:21:44',
                 ],
                28 =>
                 [
                  'id'         => 29,
                  'name'       => 'Cauquenes',
                  'created_at' => '2020-11-26 14:21:44',
                  'updated_at' => '2020-11-26 14:21:44',
                 ],
                29 =>
                 [
                  'id'         => 30,
                  'name'       => 'Parral',
                  'created_at' => '2020-11-26 14:21:44',
                  'updated_at' => '2020-11-26 14:21:44',
                 ],
                30 =>
                 [
                  'id'         => 31,
                  'name'       => 'Curicó  ',
                  'created_at' => '2020-11-26 14:21:44',
                  'updated_at' => '2020-11-26 14:21:44',
                 ],
                31 =>
                 [
                  'id'         => 32,
                  'name'       => 'Concepción',
                  'created_at' => '2020-11-26 14:21:44',
                  'updated_at' => '2020-11-26 14:21:44',
                 ],
                32 =>
                 [
                  'id'         => 33,
                  'name'       => 'Chillán',
                  'created_at' => '2020-11-26 14:21:44',
                  'updated_at' => '2020-11-26 14:21:44',
                 ],
                33 =>
                 [
                  'id'         => 34,
                  'name'       => 'Los Ángeles',
                  'created_at' => '2020-11-26 14:21:44',
                  'updated_at' => '2020-11-26 14:21:44',
                 ],
                34 =>
                 [
                  'id'         => 35,
                  'name'       => 'San Carlos',
                  'created_at' => '2020-11-26 14:21:44',
                  'updated_at' => '2020-11-26 14:21:44',
                 ],
                35 =>
                 [
                  'id'         => 36,
                  'name'       => 'Talcahuano',
                  'created_at' => '2020-11-26 14:21:44',
                  'updated_at' => '2020-11-26 14:21:44',
                 ],
                36 =>
                 [
                  'id'         => 37,
                  'name'       => 'Lebu',
                  'created_at' => '2020-11-26 14:21:44',
                  'updated_at' => '2020-11-26 14:21:44',
                 ],
                37 =>
                 [
                  'id'         => 38,
                  'name'       => 'Temuco',
                  'created_at' => '2020-11-26 14:21:44',
                  'updated_at' => '2020-11-26 14:21:44',
                 ],
                38 =>
                 [
                  'id'         => 39,
                  'name'       => 'Angol',
                  'created_at' => '2020-11-26 14:21:44',
                  'updated_at' => '2020-11-26 14:21:44',
                 ],
                39 =>
                 [
                  'id'         => 40,
                  'name'       => 'Victoria',
                  'created_at' => '2020-11-26 14:21:44',
                  'updated_at' => '2020-11-26 14:21:44',
                 ],
                40 =>
                 [
                  'id'         => 41,
                  'name'       => 'Villarrica',
                  'created_at' => '2020-11-26 14:21:44',
                  'updated_at' => '2020-11-26 14:21:44',
                 ],
                41 =>
                 [
                  'id'         => 42,
                  'name'       => 'Valdivia',
                  'created_at' => '2020-11-26 14:21:44',
                  'updated_at' => '2020-11-26 14:21:44',
                 ],
                42 =>
                 [
                  'id'         => 43,
                  'name'       => 'Santiago norte',
                  'created_at' => '2020-11-26 14:21:44',
                  'updated_at' => '2020-11-26 14:21:44',
                 ],
                43 =>
                 [
                  'id'         => 44,
                  'name'       => 'Lanco',
                  'created_at' => '2020-11-26 14:21:45',
                  'updated_at' => '2020-11-26 14:21:45',
                 ],
                44 =>
                 [
                  'id'         => 45,
                  'name'       => 'Panguipulli',
                  'created_at' => '2020-11-26 14:21:45',
                  'updated_at' => '2020-11-26 14:21:45',
                 ],
                45 =>
                 [
                  'id'         => 46,
                  'name'       => 'Puerto Montt',
                  'created_at' => '2020-11-26 14:21:45',
                  'updated_at' => '2020-11-26 14:21:45',
                 ],
                46 =>
                 [
                  'id'         => 47,
                  'name'       => 'Puerto Varas',
                  'created_at' => '2020-11-26 14:21:45',
                  'updated_at' => '2020-11-26 14:21:45',
                 ],
                47 =>
                 [
                  'id'         => 48,
                  'name'       => 'Ancud',
                  'created_at' => '2020-11-26 14:21:45',
                  'updated_at' => '2020-11-26 14:21:45',
                 ],
                48 =>
                 [
                  'id'         => 49,
                  'name'       => 'Osorno',
                  'created_at' => '2020-11-26 14:21:45',
                  'updated_at' => '2020-11-26 14:21:45',
                 ],
                49 =>
                 [
                  'id'         => 50,
                  'name'       => 'Castro',
                  'created_at' => '2020-11-26 14:21:45',
                  'updated_at' => '2020-11-26 14:21:45',
                 ],
                50 =>
                 [
                  'id'         => 51,
                  'name'       => 'Chaitén',
                  'created_at' => '2020-11-26 14:21:45',
                  'updated_at' => '2020-11-26 14:21:45',
                 ],
                51 =>
                 [
                  'id'         => 52,
                  'name'       => 'Coyhaique',
                  'created_at' => '2020-11-26 14:21:45',
                  'updated_at' => '2020-11-26 14:21:45',
                 ],
                52 =>
                 [
                  'id'         => 53,
                  'name'       => 'Aysén',
                  'created_at' => '2020-11-26 14:21:45',
                  'updated_at' => '2020-11-26 14:21:45',
                 ],
                53 =>
                 [
                  'id'         => 54,
                  'name'       => 'Chile Chico',
                  'created_at' => '2020-11-26 14:21:45',
                  'updated_at' => '2020-11-26 14:21:45',
                 ],
                54 =>
                 [
                  'id'         => 55,
                  'name'       => 'Cochrane',
                  'created_at' => '2020-11-26 14:21:45',
                  'updated_at' => '2020-11-26 14:21:45',
                 ],
                55 =>
                 [
                  'id'         => 56,
                  'name'       => 'Punta Arenas',
                  'created_at' => '2020-11-26 14:21:46',
                  'updated_at' => '2020-11-26 14:21:46',
                 ],
                56 =>
                 [
                  'id'         => 57,
                  'name'       => 'Puerto Natales',
                  'created_at' => '2020-11-26 14:21:46',
                  'updated_at' => '2020-11-26 14:21:46',
                 ],
                57 =>
                 [
                  'id'         => 58,
                  'name'       => 'Porvenir',
                  'created_at' => '2020-11-26 14:21:46',
                  'updated_at' => '2020-11-26 14:21:46',
                 ],
                58 =>
                 [
                  'id'         => 59,
                  'name'       => 'Santiago Centro',
                  'created_at' => '2020-11-26 14:21:46',
                  'updated_at' => '2020-11-26 14:21:46',
                 ],
                59 =>
                 [
                  'id'         => 60,
                  'name'       => 'Santiago Poniente',
                  'created_at' => '2020-11-26 14:21:46',
                  'updated_at' => '2020-11-26 14:21:46',
                 ],
                60 =>
                 [
                  'id'         => 61,
                  'name'       => 'Melipilla',
                  'created_at' => '2020-11-26 14:21:46',
                  'updated_at' => '2020-11-26 14:21:46',
                 ],
                61 =>
                 [
                  'id'         => 62,
                  'name'       => 'Maipú',
                  'created_at' => '2020-11-26 14:21:46',
                  'updated_at' => '2020-11-26 14:21:46',
                 ],
                62 =>
                 [
                  'id'         => 63,
                  'name'       => 'Santiago Oriente',
                  'created_at' => '2020-11-26 14:21:46',
                  'updated_at' => '2020-11-26 14:21:46',
                 ],
                63 =>
                 [
                  'id'         => 64,
                  'name'       => 'Nuñoa',
                  'created_at' => '2020-11-26 14:21:46',
                  'updated_at' => '2020-11-26 14:21:46',
                 ],
                64 =>
                 [
                  'id'         => 65,
                  'name'       => 'Providencia',
                  'created_at' => '2020-11-26 14:21:47',
                  'updated_at' => '2020-11-26 14:21:47',
                 ],
                65 =>
                 [
                  'id'         => 66,
                  'name'       => 'Santiago Sur',
                  'created_at' => '2020-11-26 14:21:47',
                  'updated_at' => '2020-11-26 14:21:47',
                 ],
                66 =>
                 [
                  'id'         => 67,
                  'name'       => 'La Florida',
                  'created_at' => '2020-11-26 14:21:47',
                  'updated_at' => '2020-11-26 14:21:47',
                 ],
                67 =>
                 [
                  'id'         => 68,
                  'name'       => 'San Bernardo',
                  'created_at' => '2020-11-26 14:21:47',
                  'updated_at' => '2020-11-26 14:21:47',
                 ],
                68 =>
                 [
                  'id'         => 69,
                  'name'       => 'Buin',
                  'created_at' => '2020-11-26 14:21:47',
                  'updated_at' => '2020-11-26 14:21:47',
                 ],
                69 =>
                 [
                  'id'         => 70,
                  'name'       => 'La unión',
                  'created_at' => '2020-11-26 14:21:47',
                  'updated_at' => '2020-11-26 14:21:47',
                 ],
               ]);
    Schema::enableForeignKeyConstraints();
  }
}
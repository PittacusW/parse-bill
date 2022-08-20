<?php

namespace Pittacusw\ParseBill\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class TransfersTypesTableSeeder extends Seeder {

  /**
   * Auto generated seed file
   *
   * @return void
   */
  public function run() {
    Schema::disableForeignKeyConstraints();
    DB::table('transfers_types')
      ->truncate();

    DB::table('transfers_types')
      ->insert([
                0 =>
                 [
                  'id'   => 1,
                  'name' => 'Operación constituye venta',
                  'code' => 1,
                 ],
                1 =>
                 [
                  'id'   => 2,
                  'name' => 'Ventas por efectuar',
                  'code' => 2,
                 ],
                2 =>
                 [
                  'id'   => 3,
                  'name' => 'Consignaciones',
                  'code' => 3,
                 ],
                3 =>
                 [
                  'id'   => 4,
                  'name' => 'Entrega gratuita',
                  'code' => 4,
                 ],
                4 =>
                 [
                  'id'   => 5,
                  'name' => 'Traslados internos',
                  'code' => 5,
                 ],
                5 =>
                 [
                  'id'   => 6,
                  'name' => 'Otros traslados no venta',
                  'code' => 6,
                 ],
                6 =>
                 [
                  'id'   => 7,
                  'name' => 'Guía de devolución',
                  'code' => 7,
                 ],
                7 =>
                 [
                  'id'   => 8,
                  'name' => 'Traslado para exportación. (no venta)',
                  'code' => 8,
                 ],
                8 =>
                 [
                  'id'   => 9,
                  'name' => 'Venta para exportación',
                  'code' => 9,
                 ],
               ]);
    Schema::enableForeignKeyConstraints();
  }
}
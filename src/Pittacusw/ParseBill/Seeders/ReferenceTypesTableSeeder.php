<?php

namespace Pittacusw\ParseBill\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ReferenceTypesTableSeeder extends Seeder {

  /**
   * Auto generated seed file
   *
   * @return void
   */
  public function run() {
    Schema::disableForeignKeyConstraints();
    DB::table('reference_types')
      ->truncate();

    DB::table('reference_types')
      ->insert([
                0 =>
                 [
                  'id'         => 1,
                  'name'       => 'Anula documento de referencia',
                  'code'       => 1,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                1 =>
                 [
                  'id'         => 2,
                  'name'       => 'Corrige texto documento de referencia',
                  'code'       => 2,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                2 =>
                 [
                  'id'         => 3,
                  'name'       => 'Corrige montos',
                  'code'       => 3,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
               ]);
    Schema::enableForeignKeyConstraints();
  }
}
<?php

namespace Pittacusw\ParseBill\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AdditionalTaxesTableSeeder extends Seeder {

  /**
   * Auto generated seed file
   *
   * @return void
   */
  public function run() {
    Schema::disableForeignKeyConstraints();
    DB::table('additional_taxes')
      ->truncate();

    DB::table('additional_taxes')
      ->insert([
                0  =>
                 [
                  'id'         => 1,
                  'name'       => 'Joyas y Piedras',
                  'code'       => 23,
                  'type'       => 'Adicional',
                  'amount'     => '15.00',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                1  =>
                 [
                  'id'         => 2,
                  'name'       => 'Licores y Destilados',
                  'code'       => 24,
                  'type'       => 'Adicional',
                  'amount'     => '31.50',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                2  =>
                 [
                  'id'         => 3,
                  'name'       => 'Vinos',
                  'code'       => 25,
                  'type'       => 'Adicional',
                  'amount'     => '20.50',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                3  =>
                 [
                  'id'         => 4,
                  'name'       => 'Cervezas',
                  'code'       => 26,
                  'type'       => 'Adicional',
                  'amount'     => '20.50',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                4  =>
                 [
                  'id'         => 5,
                  'name'       => 'Bebidas y minerales',
                  'code'       => 27,
                  'type'       => 'Adicional',
                  'amount'     => '10.00',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                5  =>
                 [
                  'id'         => 6,
                  'name'       => 'Caviar y Tapices',
                  'code'       => 44,
                  'type'       => 'Adicional',
                  'amount'     => '15.00',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                6  =>
                 [
                  'id'         => 7,
                  'name'       => 'Bebidas azucaradas',
                  'code'       => 271,
                  'type'       => 'Adicional',
                  'amount'     => '18.00',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                7  =>
                 [
                  'id'         => 8,
                  'name'       => 'Iva Faena. Carne',
                  'code'       => 17,
                  'type'       => 'Anticipado',
                  'amount'     => '5.00',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                8  =>
                 [
                  'id'         => 9,
                  'name'       => 'Iva Ant. Carne',
                  'code'       => 18,
                  'type'       => 'Anticipado',
                  'amount'     => '5.00',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                9  =>
                 [
                  'id'         => 10,
                  'name'       => 'Iva Ant. Harina',
                  'code'       => 19,
                  'type'       => 'Anticipado',
                  'amount'     => '12.00',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                10 =>
                 [
                  'id'         => 11,
                  'name'       => 'Diesel',
                  'code'       => 28,
                  'type'       => 'Especifico',
                  'amount'     => '0.00',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                11 =>
                 [
                  'id'         => 12,
                  'name'       => 'Diesel Transportistas',
                  'code'       => 29,
                  'type'       => 'Especifico',
                  'amount'     => '0.00',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                12 =>
                 [
                  'id'         => 13,
                  'name'       => 'Gasolina',
                  'code'       => 35,
                  'type'       => 'Especifico',
                  'amount'     => '0.00',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                13 =>
                 [
                  'id'         => 14,
                  'name'       => 'IVA retenido total',
                  'code'       => 15,
                  'type'       => 'Retencion',
                  'amount'     => '19.00',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                14 =>
                 [
                  'id'         => 15,
                  'name'       => 'Iva Ret. Trigo',
                  'code'       => 30,
                  'type'       => 'Retencion',
                  'amount'     => '4.00',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                15 =>
                 [
                  'id'         => 16,
                  'name'       => 'Iva Ret. Trigo',
                  'code'       => 34,
                  'type'       => 'Retencion',
                  'amount'     => '4.00',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                16 =>
                 [
                  'id'         => 17,
                  'name'       => 'Tabacos',
                  'code'       => NULL,
                  'type'       => 'Puros',
                  'amount'     => '53.00',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                17 =>
                 [
                  'id'         => 18,
                  'name'       => 'Tabacos',
                  'code'       => NULL,
                  'type'       => 'Cigarrillos',
                  'amount'     => '62.00',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                18 =>
                 [
                  'id'         => 19,
                  'name'       => 'Tabacos',
                  'code'       => NULL,
                  'type'       => 'Elaborados',
                  'amount'     => '60.00',
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
               ]);
    Schema::enableForeignKeyConstraints();
  }
}
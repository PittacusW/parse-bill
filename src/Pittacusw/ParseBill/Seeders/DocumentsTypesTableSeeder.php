<?php

namespace Pittacusw\ParseBill\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DocumentsTypesTableSeeder extends Seeder {

  /**
   * Auto generated seed file
   *
   * @return void
   */
  public function run() {
    Schema::disableForeignKeyConstraints();
    DB::table('documents_types')
      ->truncate();

    DB::table('documents_types')
      ->insert([
                0   =>
                 [
                  'id'         => 1,
                  'name'       => 'Factura mercaderia no nacional',
                  'code'       => 1,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                1   =>
                 [
                  'id'         => 2,
                  'name'       => 'Nota de disminucion de venta no nacional',
                  'code'       => 2,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                2   =>
                 [
                  'id'         => 3,
                  'name'       => 'Factura proforma',
                  'code'       => 5,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                3   =>
                 [
                  'id'         => 4,
                  'name'       => 'Boleta de honorarios electronica',
                  'code'       => 12,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                4   =>
                 [
                  'id'         => 5,
                  'name'       => 'Boleta de honorarios',
                  'code'       => 13,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                5   =>
                 [
                  'id'         => 6,
                  'name'       => 'Boleta honorarios de terceros electronica',
                  'code'       => 14,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                6   =>
                 [
                  'id'         => 7,
                  'name'       => 'Boleta honorarios de terceros',
                  'code'       => 15,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                7   =>
                 [
                  'id'         => 8,
                  'name'       => 'Factura de inicio',
                  'code'       => 29,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                8   =>
                 [
                  'id'         => 9,
                  'name'       => 'Factura',
                  'code'       => 30,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                9   =>
                 [
                  'id'         => 10,
                  'name'       => 'Factura exenta',
                  'code'       => 32,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                10  =>
                 [
                  'id'         => 11,
                  'name'       => 'Factura electronica',
                  'code'       => 33,
                  'electronic' => 1,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                11  =>
                 [
                  'id'         => 12,
                  'name'       => 'Factura exenta electronica',
                  'code'       => 34,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                12  =>
                 [
                  'id'         => 13,
                  'name'       => 'Boleta',
                  'code'       => 35,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                13  =>
                 [
                  'id'         => 14,
                  'name'       => 'Boleta exenta',
                  'code'       => 38,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                14  =>
                 [
                  'id'         => 15,
                  'name'       => 'Boleta electronica',
                  'code'       => 39,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                15  =>
                 [
                  'id'         => 16,
                  'name'       => 'Liquidacion factura',
                  'code'       => 40,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                16  =>
                 [
                  'id'         => 17,
                  'name'       => 'Boleta exenta electronica',
                  'code'       => 41,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                17  =>
                 [
                  'id'         => 18,
                  'name'       => 'Liquidacion factura electronica',
                  'code'       => 43,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                18  =>
                 [
                  'id'         => 19,
                  'name'       => 'Factura de compra',
                  'code'       => 45,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                19  =>
                 [
                  'id'         => 20,
                  'name'       => 'Factura de compra electronica',
                  'code'       => 46,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                20  =>
                 [
                  'id'         => 21,
                  'name'       => 'Vales comprobantes de pago medios electronico',
                  'code'       => 48,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                21  =>
                 [
                  'id'         => 22,
                  'name'       => 'Guia de despacho',
                  'code'       => 50,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                22  =>
                 [
                  'id'         => 23,
                  'name'       => 'GuÍa de ajuste de inventario',
                  'code'       => 51,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                23  =>
                 [
                  'id'         => 24,
                  'name'       => 'Guia de despacho electronica',
                  'code'       => 52,
                  'electronic' => 1,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                24  =>
                 [
                  'id'         => 25,
                  'name'       => 'Nota de debito',
                  'code'       => 55,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                25  =>
                 [
                  'id'         => 26,
                  'name'       => 'Nota de debito electronica',
                  'code'       => 56,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                26  =>
                 [
                  'id'         => 27,
                  'name'       => 'Nota de credito',
                  'code'       => 60,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                27  =>
                 [
                  'id'         => 28,
                  'name'       => 'Nota de credito electronica',
                  'code'       => 61,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                28  =>
                 [
                  'id'         => 29,
                  'name'       => 'Factura de exportacion',
                  'code'       => 101,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                29  =>
                 [
                  'id'         => 30,
                  'name'       => 'Facturas de venta exenta a zona franca',
                  'code'       => 102,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                30  =>
                 [
                  'id'         => 31,
                  'name'       => 'Liquidacion',
                  'code'       => 103,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                31  =>
                 [
                  'id'         => 32,
                  'name'       => 'Notas de debito de exportacion',
                  'code'       => 104,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                32  =>
                 [
                  'id'         => 33,
                  'name'       => 'Boleta liquidación',
                  'code'       => 105,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                33  =>
                 [
                  'id'         => 34,
                  'name'       => 'Notas de credito de exportacion',
                  'code'       => 106,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                34  =>
                 [
                  'id'         => 35,
                  'name'       => 'Solicitud registro de factura',
                  'code'       => 108,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                35  =>
                 [
                  'id'         => 36,
                  'name'       => 'Facturas a turistas extranjeros',
                  'code'       => 109,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                36  =>
                 [
                  'id'         => 37,
                  'name'       => 'Factura exportacion electronica',
                  'code'       => 110,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                37  =>
                 [
                  'id'         => 38,
                  'name'       => 'Nota de debito exportacion electronica',
                  'code'       => 111,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                38  =>
                 [
                  'id'         => 39,
                  'name'       => 'Nota de credito exportacion electronica',
                  'code'       => 112,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                39  =>
                 [
                  'id'         => 40,
                  'name'       => 'Factura de compra territorio preferencial ley',
                  'code'       => 175,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                40  =>
                 [
                  'id'         => 41,
                  'name'       => 'Venta a empresa del territorio preferencial 1',
                  'code'       => 180,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                41  =>
                 [
                  'id'         => 42,
                  'name'       => 'Factura de compra territorio preferencial ley',
                  'code'       => 185,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                42  =>
                 [
                  'id'         => 43,
                  'name'       => 'Documento interno pasivo',
                  'code'       => 300,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                43  =>
                 [
                  'id'         => 44,
                  'name'       => 'Documento interno activo',
                  'code'       => 302,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                44  =>
                 [
                  'id'         => 45,
                  'name'       => 'Compra abonada',
                  'code'       => 303,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                45  =>
                 [
                  'id'         => 46,
                  'name'       => 'Interno venta',
                  'code'       => 305,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                46  =>
                 [
                  'id'         => 47,
                  'name'       => 'Interno compras',
                  'code'       => 306,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                47  =>
                 [
                  'id'         => 48,
                  'name'       => 'Nota de cobro',
                  'code'       => 309,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                48  =>
                 [
                  'id'         => 49,
                  'name'       => 'Gasto tributario sin comprobante',
                  'code'       => 320,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                49  =>
                 [
                  'id'         => 50,
                  'name'       => 'Patentes comerciales',
                  'code'       => 401,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                50  =>
                 [
                  'id'         => 51,
                  'name'       => 'Permisos de circulacion',
                  'code'       => 402,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                51  =>
                 [
                  'id'         => 52,
                  'name'       => 'Contribuciones de bienes raíces',
                  'code'       => 403,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                52  =>
                 [
                  'id'         => 53,
                  'name'       => 'Seguros obligatorios',
                  'code'       => 404,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                53  =>
                 [
                  'id'         => 54,
                  'name'       => 'Peajes',
                  'code'       => 405,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                54  =>
                 [
                  'id'         => 55,
                  'name'       => 'Viaticos',
                  'code'       => 406,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                55  =>
                 [
                  'id'         => 56,
                  'name'       => 'Vale por',
                  'code'       => 407,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                56  =>
                 [
                  'id'         => 57,
                  'name'       => 'Infracciones de transito',
                  'code'       => 408,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                57  =>
                 [
                  'id'         => 58,
                  'name'       => 'Infracciones empresariales',
                  'code'       => 409,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                58  =>
                 [
                  'id'         => 59,
                  'name'       => 'Otros',
                  'code'       => 410,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                59  =>
                 [
                  'id'         => 60,
                  'name'       => 'Giros de impuestos',
                  'code'       => 411,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                60  =>
                 [
                  'id'         => 61,
                  'name'       => 'Impuestos al credito',
                  'code'       => 412,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                61  =>
                 [
                  'id'         => 62,
                  'name'       => 'Multas del sii',
                  'code'       => 413,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                62  =>
                 [
                  'id'         => 63,
                  'name'       => 'Otorgamiento de credito',
                  'code'       => 414,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                63  =>
                 [
                  'id'         => 64,
                  'name'       => 'Renovacion de creditos',
                  'code'       => 415,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                64  =>
                 [
                  'id'         => 65,
                  'name'       => 'Cancelaciones de creditos',
                  'code'       => 416,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                65  =>
                 [
                  'id'         => 66,
                  'name'       => 'Correccion monetaria',
                  'code'       => 450,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                66  =>
                 [
                  'id'         => 67,
                  'name'       => 'Depreciacion activos fijos',
                  'code'       => 451,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                67  =>
                 [
                  'id'         => 68,
                  'name'       => 'Guia interna',
                  'code'       => 500,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                68  =>
                 [
                  'id'         => 69,
                  'name'       => 'Orden de trabajo produccion',
                  'code'       => 600,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                69  =>
                 [
                  'id'         => 70,
                  'name'       => 'Cotizacion',
                  'code'       => 777,
                  'electronic' => 1,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                70  =>
                 [
                  'id'         => 71,
                  'name'       => 'Nota de venta',
                  'code'       => 780,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                71  =>
                 [
                  'id'         => 72,
                  'name'       => 'Nota de venta exportacion',
                  'code'       => 781,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                72  =>
                 [
                  'id'         => 73,
                  'name'       => 'Orden de compra',
                  'code'       => 801,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                73  =>
                 [
                  'id'         => 74,
                  'name'       => 'Contrato',
                  'code'       => 803,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                74  =>
                 [
                  'id'         => 75,
                  'name'       => 'Resolución',
                  'code'       => 804,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                75  =>
                 [
                  'id'         => 76,
                  'name'       => 'Anticipos remuneraciones',
                  'code'       => 888,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                76  =>
                 [
                  'id'         => 77,
                  'name'       => 'Liquidacion de sueldo',
                  'code'       => 890,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                77  =>
                 [
                  'id'         => 78,
                  'name'       => 'Factura exenta a empresa del territorio prefe',
                  'code'       => 901,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                78  =>
                 [
                  'id'         => 79,
                  'name'       => 'Conocimiento de embarque',
                  'code'       => 902,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                79  =>
                 [
                  'id'         => 80,
                  'name'       => 'Documento Único de salida',
                  'code'       => 903,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                80  =>
                 [
                  'id'         => 81,
                  'name'       => 'Factura de traspaso',
                  'code'       => 904,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                81  =>
                 [
                  'id'         => 82,
                  'name'       => 'Factura de reexpedición',
                  'code'       => 905,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                82  =>
                 [
                  'id'         => 83,
                  'name'       => 'Boletas venta módulos zf',
                  'code'       => 906,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                83  =>
                 [
                  'id'         => 84,
                  'name'       => 'Facturas venta módulo zf',
                  'code'       => 907,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                84  =>
                 [
                  'id'         => 85,
                  'name'       => 'Facturas venta módulo zf',
                  'code'       => 909,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                85  =>
                 [
                  'id'         => 86,
                  'name'       => 'Solicitud traslado zona franca',
                  'code'       => 910,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                86  =>
                 [
                  'id'         => 87,
                  'name'       => 'Declaración de ingreso a zona franca primaria',
                  'code'       => 911,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                87  =>
                 [
                  'id'         => 88,
                  'name'       => 'Declaracion de ingreso',
                  'code'       => 914,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                88  =>
                 [
                  'id'         => 89,
                  'name'       => 'Ventas de nacionales pasajes sin factura',
                  'code'       => 919,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                89  =>
                 [
                  'id'         => 90,
                  'name'       => 'Otros registros no documentados aumenta débito',
                  'code'       => 920,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                90  =>
                 [
                  'id'         => 91,
                  'name'       => 'Otros registros no documentados disminuyen débito',
                  'code'       => 922,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                91  =>
                 [
                  'id'         => 92,
                  'name'       => 'Ventas de internacionales pasajes sin factura',
                  'code'       => 924,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                92  =>
                 [
                  'id'         => 95,
                  'name'       => 'Proceso ChileCompra',
                  'code'       => 805,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                93  =>
                 [
                  'id'         => 96,
                  'name'       => 'Ficha ChileCompra',
                  'code'       => 806,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                94  =>
                 [
                  'id'         => 97,
                  'name'       => 'DUS',
                  'code'       => 807,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                95  =>
                 [
                  'id'         => 98,
                  'name'       => 'B/L (Conocimiento de embarque)',
                  'code'       => 808,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                96  =>
                 [
                  'id'         => 99,
                  'name'       => 'AWB (Air Will Bill)',
                  'code'       => 809,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                97  =>
                 [
                  'id'         => 100,
                  'name'       => 'MIC/DTA',
                  'code'       => 810,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                98  =>
                 [
                  'id'         => 101,
                  'name'       => 'Carta de Porte',
                  'code'       => 811,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                99  =>
                 [
                  'id'         => 102,
                  'name'       => 'Resolución del SNA donde califica Servicios de Exportación',
                  'code'       => 812,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                100 =>
                 [
                  'id'         => 103,
                  'name'       => 'Pasaporte',
                  'code'       => 813,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                101 =>
                 [
                  'id'         => 104,
                  'name'       => 'Certificado de Depósito Bolsa Prod. Chile.',
                  'code'       => 814,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                102 =>
                 [
                  'id'         => 105,
                  'name'       => 'Vale de Prenda Bolsa Prod. Chile',
                  'code'       => 815,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                103 =>
                 [
                  'id'         => 107,
                  'name'       => 'Anticipo u Otros',
                  'code'       => 99,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                104 =>
                 [
                  'id'         => 108,
                  'name'       => 'Cheque',
                  'code'       => NULL,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                105 =>
                 [
                  'id'         => 109,
                  'name'       => 'Vale vista',
                  'code'       => NULL,
                  'electronic' => 0,
                  'created_at' => NULL,
                  'updated_at' => NULL,
                 ],
                106 =>
                 [
                  'id'         => 110,
                  'name'       => 'Nota de venta',
                  'code'       => 802,
                  'electronic' => 0,
                  'created_at' => '2021-12-24 14:26:55',
                  'updated_at' => '2021-12-24 14:26:55',
                 ],
               ]);
    Schema::enableForeignKeyConstraints();
  }
}
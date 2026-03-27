<?php

namespace Pittacusw\ParseBill\Tests;

use Barryvdh\DomPDF\ServiceProvider as DomPdfServiceProvider;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Orchestra\Testbench\TestCase as Orchestra;
use Pittacusw\ParseBill\ParseBillServiceProvider;
use Pittacusw\ParseBill\Support\LookupCache;

abstract class TestCase extends Orchestra {

  protected function getPackageProviders($app): array {
    return [
      DomPdfServiceProvider::class,
      ParseBillServiceProvider::class,
    ];
  }

  protected function defineEnvironment($app): void {
    $app['config']->set('app.key', 'base64:9gFJ3NV+M2Gw6OV4xJe2X6FugmU6W1k7Dbmd8r3H4XA=');
    $app['config']->set('cache.default', 'array');
    $app['config']->set('database.default', 'testing');
    $app['config']->set('database.connections.testing', [
      'driver'   => 'sqlite',
      'database' => ':memory:',
      'prefix'   => '',
    ]);
    $app['config']->set('queue.default', 'sync');
    $app['config']->set('view.compiled', sys_get_temp_dir());
    $app['config']->set('dompdf.public_path', base_path());
    $app['config']->set('dompdf.options.font_dir', sys_get_temp_dir());
    $app['config']->set('dompdf.options.font_cache', sys_get_temp_dir());
    $app['config']->set('dompdf.options.temp_dir', sys_get_temp_dir());
    $app['config']->set('dompdf.options.chroot', base_path());
  }

  protected function setUp(): void {
    parent::setUp();

    LookupCache::reset();
    $this->createTables();
    $this->seedReferenceData();
  }

  protected function tearDown(): void {
    LookupCache::reset();

    Schema::dropIfExists('additional_taxes');
    Schema::dropIfExists('documents_types');
    Schema::dropIfExists('counties');
    Schema::dropIfExists('sii_branches');

    parent::tearDown();
  }

  protected function fixture(string $name): string {
    return (string) file_get_contents($this->fixturePath($name));
  }

  protected function fixturePath(string $name): string {
    return __DIR__ . DIRECTORY_SEPARATOR . 'Fixtures' . DIRECTORY_SEPARATOR . $name;
  }

  protected function createTables(): void {
    Schema::create('sii_branches', function(Blueprint $table) {
      $table->id();
      $table->string('name')->nullable();
      $table->timestamps();
    });

    Schema::create('counties', function(Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('sii_branch_id')->nullable();
      $table->string('name')->nullable();
      $table->integer('code')->nullable();
      $table->timestamps();
    });

    Schema::create('documents_types', function(Blueprint $table) {
      $table->id();
      $table->string('name')->nullable();
      $table->integer('code')->unique()->nullable();
      $table->boolean('electronic')->default(false);
      $table->timestamps();
    });

    Schema::create('additional_taxes', function(Blueprint $table) {
      $table->id();
      $table->string('name')->nullable();
      $table->integer('code')->unique()->nullable();
      $table->string('type')->nullable();
      $table->decimal('amount')->nullable();
      $table->timestamps();
    });
  }

  protected function seedReferenceData(): void {
    DB::table('sii_branches')->insert([
      'id'         => 1,
      'name'       => 'Santiago Centro',
      'created_at' => null,
      'updated_at' => null,
    ]);

    DB::table('counties')->insert([
      'id'            => 1,
      'sii_branch_id' => 1,
      'name'          => 'Santiago',
      'code'          => 13101,
      'created_at'    => null,
      'updated_at'    => null,
    ]);

    DB::table('documents_types')->insert([
      [
        'id'         => 11,
        'name'       => 'Factura electronica',
        'code'       => 33,
        'electronic' => true,
        'created_at' => null,
        'updated_at' => null,
      ],
      [
        'id'         => 15,
        'name'       => 'Boleta electronica',
        'code'       => 39,
        'electronic' => true,
        'created_at' => null,
        'updated_at' => null,
      ],
      [
        'id'         => 24,
        'name'       => 'Guia de despacho electronica',
        'code'       => 52,
        'electronic' => true,
        'created_at' => null,
        'updated_at' => null,
      ],
    ]);

    DB::table('additional_taxes')->insert([
      'id'         => 7,
      'name'       => 'Bebidas azucaradas',
      'code'       => 271,
      'type'       => 'Adicional',
      'amount'     => 18,
      'created_at' => null,
      'updated_at' => null,
    ]);
  }
}

<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        $this->call(BukuSeeder::class);
        $this->call(GenreSeeder::class);
        $this->call(IsiSeeder::class);
        $this->call(StrukturSeeder::class);
        $this->call(SiswaSeeder::class);
        $this->call(GajiSeeder::class);
        $this->call(MahasiswaSeeder::class);

		# Kita akan beri nama Seeder dengan 'SeederRelasi'
		$this->call('RelasiSeeder');
		# Tampilkan informasi berikut bila Seeder telah dilakukan
		$this->command->info('SeederRelasi berhasil.');

    }
}

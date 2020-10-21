<?php

use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$provinces = [
    		'11' => 'Aceh',
    		'12' => 'Sumatera Utara',
    		'13' => 'Sumatera Barat',
    		'14' => 'Riau',
    		'15' => 'Jambi',
    		'16' => 'Sumatera Selatan',
    		'17' => 'Bengkulu',
    		'18' => 'Lampung',
    		'19' => 'Kepulauan Bangka Belitung',
    		'21' => 'Kepulauan Riau',
    		'31' => 'DKI Jakarta',
    		'32' => 'Jawa Barat',
    		'33' => 'Jawa Tengah',
    		'34' => 'DI Yogyakarta',
    		'35' => 'Jawa Timur',
    		'36' => 'Banten',
    		'51' => 'Bali',
    		'52' => 'Nusa Tenggara Barat',
    		'53' => 'Nusa Tenggara Timur',
    		'61' => 'Kalimantan Barat',
    		'62' => 'Kalimantan Tengah',
    		'63' => 'Kalimantan Selatan',
    		'64' => 'Kalimantan Timur',
    		'65' => 'Kalimantan Utara',
    		'71' => 'Sulawesi Utara',
    		'72' => 'Sulawesi Tengah',
    		'73' => 'Sulawesi Selatan',
    		'74' => 'Sulawesi Tenggara',
    		'75' => 'Gorontalo',
    		'76' => 'Sulawesi Barat',
    		'81' => 'Maluku',
    		'82' => 'Maluku Utara',
    		'92' => 'Papua',
    		'91' => 'Papua Barat'
    	];

    	foreach ($provinces as $key => $province) {
    		DB::table('provinces')->insert([
    			'id' => $key,
    			'name' => $province,
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		]);
    	}
    }
}

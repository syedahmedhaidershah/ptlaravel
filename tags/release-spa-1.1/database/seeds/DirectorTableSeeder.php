<?php

use Illuminate\Database\Seeder;

class DirectorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		\DB::table('director')->truncate();
        $now = \Carbon\Carbon::now()->toDateTimeString();
		\DB::table('director')->insert(array (
			0 => array(
                'country_id' => '150',
		        'name' => 'LEE TECK MENG',
		        'nric' => 'Example',
                'created_at'  => $now,
                'updated_at'  => $now,
			),
			1 => array(
                'country_id' => '150',
		        'name' => 'try2',
		        'nric' => 'try2',
                'created_at'  => $now,
                'updated_at'  => $now,
			),
			2 => array(
                'country_id' => '150',
		        'name' => 'try3',
		        'nric' => 'try3',
                'created_at'  => $now,
                'updated_at'  => $now,
			),
			3 => array(
                'country_id' => '150',
		        'name' => 'try4',
		        'nric' => 'try4',
                'created_at'  => $now,
                'updated_at'  => $now,
			),
			4 => array(
                'country_id' => '150',
		        'name' => 'try5',
		        'nric' => 'try5',
                'created_at'  => $now,
                'updated_at'  => $now,
			),
			5 => array(
                'country_id' => '150',
		        'name' => 'try6',
		        'nric' => 'try6',
                'created_at'  => $now,
                'updated_at'  => $now,
			),
			6 => array(
                'country_id' => '150',
		        'name' => 'try2',
		        'nric' => 'try2',
                'created_at'  => $now,
                'updated_at'  => $now,
			),
			7 => array(
                'country_id' => '150',
		        'name' => 'try8',
		        'nric' => 'try8',
                'created_at'  => $now,
                'updated_at'  => $now,
			),
			8 => array(
                'country_id' => '150',
		        'name' => 'try9',
		        'nric' => 'try9',
                'created_at'  => $now,
                'updated_at'  => $now,
			),
			9 => array(
                'country_id' => '150',
		        'name' => 'try10',
		        'nric' => 'try10',
                'created_at'  => $now,
                'updated_at'  => $now,
			),
			10 => array(
                'country_id' => '150',
		        'name' => 'try11',
		        'nric' => 'try11',
                'created_at'  => $now,
                'updated_at'  => $now,
			),
			11 => array(
                'country_id' => '150',
		        'name' => 'try12',
		        'nric' => 'try12',
                'created_at'  => $now,
                'updated_at'  => $now,
			),
			12 => array(
                'country_id' => '150',
		        'name' => 'try13',
		        'nric' => 'try13',
                'created_at'  => $now,
                'updated_at'  => $now,
			),
			13 => array(
                'country_id' => '150',
		        'name' => 'try14',
		        'nric' => 'try14',
                'created_at'  => $now,
                'updated_at'  => $now,
			),
			14 => array(
                'country_id' => '150',
		        'name' => 'try15',
		        'nric' => 'try15',
                'created_at'  => $now,
                'updated_at'  => $now,
			),
			15 => array(
                'country_id' => '150',
		        'name' => 'try16',
		        'nric' => 'try16',
                'created_at'  => $now,
                'updated_at'  => $now,
			),
			16 => array(
                'country_id' => '150',
		        'name' => 'try17',
		        'nric' => 'try17',
                'created_at'  => $now,
                'updated_at'  => $now,
			),
			17 => array(
                'country_id' => '150',
		        'name' => 'try18',
		        'nric' => 'try18',
                'created_at'  => $now,
                'updated_at'  => $now,
			),
			18 => array(
                'country_id' => '150',
		        'name' => 'try19',
		        'nric' => 'try19',
                'created_at'  => $now,
                'updated_at'  => $now,
			),
			19 => array(
                'country_id' => '150',
		        'name' => 'try20',
		        'nric' => 'try20',
                'created_at'  => $now,
                'updated_at'  => $now,
			),
			20 => array(
                'country_id' => '150',
		        'name' => 'try21',
		        'nric' => 'try21',
                'created_at'  => $now,
                'updated_at'  => $now,
			),
			21 => array(
                'country_id' => '150',
		        'name' => 'try22',
		        'nric' => 'try22',
                'created_at'  => $now,
                'updated_at'  => $now,
			),
			22 => array(
                'country_id' => '150',
		        'name' => 'try23',
		        'nric' => 'try23',
                'created_at'  => $now,
                'updated_at'  => $now,
			),
			23 => array(
                'country_id' => '150',
		        'name' => 'try24',
		        'nric' => 'try24',
                'created_at'  => $now,
                'updated_at'  => $now,
			),
			24 => array(
                'country_id' => '150',
		        'name' => 'try25',
		        'nric' => 'try25',
                'created_at'  => $now,
                'updated_at'  => $now,
			),
			25 => array(
                'country_id' => '150',
		        'name' => 'try26',
		        'nric' => 'try26',
                'created_at'  => $now,
                'updated_at'  => $now,
			),
			26 => array(
                'country_id' => '150',
		        'name' => 'try27',
		        'nric' => 'try27',
                'created_at'  => $now,
                'updated_at'  => $now,
			),
			27 => array(
                'country_id' => '150',
		        'name' => 'try28',
		        'nric' => 'try28',
                'created_at'  => $now,
                'updated_at'  => $now,
			),
			28 => array(
                'country_id' => '150',
		        'name' => 'try29',
		        'nric' => 'try29',
                'created_at'  => $now,
                'updated_at'  => $now,
			),
			29 => array(
                'country_id' => '150',
		        'name' => 'try30',
		        'nric' => 'try30',
                'created_at'  => $now,
                'updated_at'  => $now,
			),
			30 => array(
                'country_id' => '150',
		        'name' => 'try31',
		        'nric' => 'try31',
                'created_at'  => $now,
                'updated_at'  => $now,
			),
			31 => array(
                'country_id' => '150',
		        'name' => 'try32',
		        'nric' => 'try32',
                'created_at'  => $now,
                'updated_at'  => $now,
			),
			32 => array(
                'country_id' => '150',
		        'name' => 'try33',
		        'nric' => 'try33',
                'created_at'  => $now,
                'updated_at'  => $now,
			),
			33 => array(
                'country_id' => '150',
		        'name' => 'try34',
		        'nric' => 'try34',
                'created_at'  => $now,
                'updated_at'  => $now,
			),
			34 => array(
                'country_id' => '150',
		        'name' => 'try35',
		        'nric' => 'try35',
                'created_at'  => $now,
                'updated_at'  => $now,
			),
			35 => array(
                'country_id' => '150',
		        'name' => 'try36',
		        'nric' => 'try36',
                'created_at'  => $now,
                'updated_at'  => $now,
			),
			36 => array(
                'country_id' => '150',
		        'name' => 'try37',
		        'nric' => 'try37',
                'created_at'  => $now,
                'updated_at'  => $now,
			),
			37 => array(
                'country_id' => '150',
		        'name' => 'try38',
		        'nric' => 'try38',
                'created_at'  => $now,
                'updated_at'  => $now,
			),
			38 => array(
                'country_id' => '150',
		        'name' => 'try39',
		        'nric' => 'try39',
                'created_at'  => $now,
                'updated_at'  => $now,
			),
			39 => array(
                'country_id' => '150',
		        'name' => 'try40',
		        'nric' => 'try40',
                'created_at'  => $now,
                'updated_at'  => $now,
			),
			40 => array(
                'country_id' => '150',
		        'name' => 'try41',
		        'nric' => 'try41',
                'created_at'  => $now,
                'updated_at'  => $now,
			),
			41 => array(
                'country_id' => '150',
		        'name' => 'try42',
		        'nric' => 'try42',
                'created_at'  => $now,
                'updated_at'  => $now,
			),
			42 => array(
                'country_id' => '150',
		        'name' => 'try43',
		        'nric' => 'try43',
                'created_at'  => $now,
                'updated_at'  => $now,
			),
			43 => array(
                'country_id' => '150',
		        'name' => 'try44',
		        'nric' => 'try44',
                'created_at'  => $now,
                'updated_at'  => $now,
			),
			44 => array(
                'country_id' => '150',
		        'name' => 'try45',
		        'nric' => 'try45',
                'created_at'  => $now,
                'updated_at'  => $now,
			),
			45 => array(
                'country_id' => '150',
		        'name' => 'try46',
		        'nric' => 'try46',
                'created_at'  => $now,
                'updated_at'  => $now,
			),
			46 => array(
                'country_id' => '150',
		        'name' => 'try47',
		        'nric' => 'try47',
                'created_at'  => $now,
                'updated_at'  => $now,
			),
			47 => array(
                'country_id' => '150',
		        'name' => 'try48',
		        'nric' => 'try48',
                'created_at'  => $now,
                'updated_at'  => $now,
			),
				48 => array(
                'country_id' => '150',
		        'name' => 'try49',
		        'nric' => 'try49',
                'created_at'  => $now,
                'updated_at'  => $now,
			),
				49 => array(
                'country_id' => '150',
		        'name' => 'try50',
		        'nric' => 'try50',
                'created_at'  => $now,
                'updated_at'  => $now,
            ),
		        50 => array(
                'country_id' => '150',
		        'name' => 'try51',
		        'nric' => 'try51',
                'created_at'  => $now,
                'updated_at'  => $now,
            ),
                51 => array(
                'country_id' => '150',
		        'name' => 'try52',
		        'nric' => 'try52',
                'created_at'  => $now,
                'updated_at'  => $now,
            ),
		));
    }
}
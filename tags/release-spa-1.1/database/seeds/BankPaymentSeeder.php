<?php

use Illuminate\Database\Seeder;

class BankPaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
	    $now = \Carbon\Carbon::now()->toDateTimeString();

	/*
	    // \DB::table('merchant')->truncate();
	    \DB::table('merchant')->insert(array(
			0 => array(
	        'user_id' => '1',
			'company_name' => 'KLEENSO RESOURCES SDN BHD',
	        'gst' => 'EXAMPLE',
	        'business_reg_no' => '645400-X',
	        'country_id' => '150',
	        'business_type' => 'sdn_bhd',
	        'address_id' => '1',
	        'office_no' => '+603 8023 1668',
			'mobile_no' => 'Example',
			'oshop_name' => 'KLEENSO',
			'oshop_address_id' => '0',
			'description' => 'Kleenso Resources Sdn Bhd is involved in the manufacturing and marketing of total cleaning solution products. We manufacture full range of cleaning solution products under our house brand Kleenso and also our own Pesso brand of pest repellant products. <br><br> In addition to our own brands, we are also authorised distributors for other trusted brands including 3M, Dupont and ABC.<br><br><h3><u>Our Vision</u></h3><br>To be an innovative manufacturer, to market and promote the knowledge of healthy lifestyle in total cleaning solution products ranging from home care, skin care, car care to industrial care.<br><br><h3><u>Our Mission</u></h3><br>To beautify and enhance humanity through healthy, quality, environmental friendly solutions at affordable prices.',
			'license' => '1',
			'coverage' => 'internationally',
			'ownership' => '0',
			'category_id' => '5',
			'planned_sales' => '0',
			'bank_id' => '1',
			'return_policy' => '<p>Example</p>',
			'remarks' => 'Example',
			'oshop_logo_1' => 'kleenso60.png',
			'osmall_commission' => 5.00,
			'mc_sales_staff_id' => 0,
			'referral_sales_staff_id' => 0,
			'smm_quota_max' => 1,
			'mc_sales_staff_commission' => 0,
			'mc_with_ref_sales_staff_commission' => 0,
			'referral_sales_staff_commission' => 0,
			'mcp1_sales_staff_commission' => 0,
			'mcp2_sales_staff_commission' => 0,
			'smm_sales_staff_commission' => 0,
			'psh_sales_staff_commission' => 0,
			'str_sales_staff_commission' => 0,
	        'created_at'  => $now,
	        'updated_at'  => $now,
	        ),
	        1 => array(
	        'user_id' => '2',
			'company_name' => 'try2',
	        'gst' => 'EXAMPLE',
	        'business_reg_no' => 'try2',
	        'country_id' => '150',
	        'business_type' => 'sdn_bhd',
	        'address_id' => '2',
	        'office_no' => 'try2',
			'mobile_no' => 'Example',
			'oshop_name' => 'Ideahom',
			'oshop_address_id' => '0',
			'description' => 'try2',
			'license' => '1',
			'coverage' => 'internationally',
			'ownership' => '0',
			'category_id' => '5',
			'planned_sales' => '0',
			'bank_id' => '2',
			'return_policy' => '<p>Example</p>',
			'remarks' => 'Example',
			'oshop_logo_1' => 'Ideahom.png',
			'osmall_commission' => 6.00,
			'mc_sales_staff_id' => 1,
			'referral_sales_staff_id' => 4,
			'smm_quota_max' => 1,
			'mc_sales_staff_commission' => 3,
			'mc_with_ref_sales_staff_commission' => 4,
			'referral_sales_staff_commission' => 3,
			'mcp1_sales_staff_commission' => 1,
			'mcp2_sales_staff_commission' => 2,
			'smm_sales_staff_commission' => 5,
			'psh_sales_staff_commission' => 3,
			'str_sales_staff_commission' => 4,
	        'created_at'  => $now,
	        'updated_at'  => $now,
	        ),
	        2 => array(
	        'user_id' => '3',
			'company_name' => 'try3',
	        'gst' => 'EXAMPLE',
	        'business_reg_no' => 'try3',
	        'country_id' => '150',
	        'business_type' => 'sdn_bhd',
	        'address_id' => '3',
	        'office_no' => 'try3',
			'mobile_no' => 'Example',
			'oshop_name' => 'Thermos',
			'oshop_logo_1' => 'Thermos.png',
			'oshop_address_id' => '0',
			'description' => 'try3',
			'license' => '1',
			'coverage' => 'internationally',
			'ownership' => '0',
			'category_id' => '5',
			'planned_sales' => '0',
			'bank_id' => '3',
			'return_policy' => '<p>Example</p>',
			'remarks' => 'Example',
			'osmall_commission' => 6.00,
			'mc_sales_staff_id' => 2,
			'referral_sales_staff_id' => 3,
			'smm_quota_max' => 1,
			'mc_sales_staff_commission' => 5,
			'mc_with_ref_sales_staff_commission' => 6,
			'referral_sales_staff_commission' => 2,
			'mcp1_sales_staff_commission' => 3,
			'mcp2_sales_staff_commission' => 2,
			'smm_sales_staff_commission' => 5,
			'psh_sales_staff_commission' => 3,
			'str_sales_staff_commission' => 4,
	        'created_at'  => $now,
	        'updated_at'  => $now,
	        ),
	        3 => array(
	        'user_id' => '4',
			'company_name' => 'try4',
	        'gst' => 'EXAMPLE',
	        'business_reg_no' => 'try4',
	        'country_id' => '150',
	        'business_type' => 'sdn_bhd',
	        'address_id' => '4',
	        'office_no' => 'try4',
			'mobile_no' => 'Example',
			'oshop_name' => 'Osafe Fire In',
			'oshop_logo_1' => 'Osafe Fire In.png',
			'oshop_address_id' => '0',
			'description' => 'try4',
			'license' => '1',
			'coverage' => 'internationally',
			'ownership' => '0',
			'category_id' => '5',
			'planned_sales' => '0',
			'bank_id' => '4',
			'return_policy' => '<p>Example</p>',
			'remarks' => 'Example',
			'osmall_commission' => 3.00,
			'mc_sales_staff_id' => 2,
			'referral_sales_staff_id' => 1,
			'smm_quota_max' => 1,
			'mc_sales_staff_commission' => 2,
			'mc_with_ref_sales_staff_commission' => 4,
			'referral_sales_staff_commission' => 3,
			'mcp1_sales_staff_commission' => 2,
			'mcp2_sales_staff_commission' => 4,
			'smm_sales_staff_commission' => 1,
			'psh_sales_staff_commission' => 2,
			'str_sales_staff_commission' => 3,
	        'created_at'  => $now,
	        'updated_at'  => $now,
	        ),
	        4 => array(
	        'user_id' => '5',
			'company_name' => 'try5',
	        'gst' => 'EXAMPLE',
	        'business_reg_no' => 'try5',
	        'country_id' => '150',
	        'business_type' => 'sdn_bhd',
	        'address_id' => '5',
	        'office_no' => 'try5',
			'mobile_no' => 'Example',
			'oshop_name' => 'Minotti',
			'oshop_logo_1' => 'Minotti.png',
			'oshop_address_id' => '0',
			'description' => '',
			'license' => '1',
			'coverage' => 'internationally',
			'ownership' => '0',
			'category_id' => '5',
			'planned_sales' => '0',
			'bank_id' => '5',
			'return_policy' => '<p>Example</p>',
			'remarks' => 'Example',
			'osmall_commission' => 6.00,
			'mc_sales_staff_id' => 4,
			'referral_sales_staff_id' => 3,
			'smm_quota_max' => 1,
			'mc_sales_staff_commission' => 5,
			'mc_with_ref_sales_staff_commission' => 6,
			'referral_sales_staff_commission' => 2,
			'mcp1_sales_staff_commission' => 3,
			'mcp2_sales_staff_commission' => 2,
			'smm_sales_staff_commission' => 5,
			'psh_sales_staff_commission' => 3,
			'str_sales_staff_commission' => 4,
	        'created_at'  => $now,
	        'updated_at'  => $now,
	        )
		));

		// \DB::table('product')->truncate();
		\DB::table('product')->insert(array(
			0 => array (
                'name' => '9-in-1-blue-900ml',
                'brand_id' => '1',
                'category_id' => '5',
                'subcat_id' => '84',
                'subcat_level' => '1',
		        'photo_1' => '9-in-1-blue-900ml.jpg',
                'free_delivery' => '0',
                'del_worldwide' => '2000',
                'del_west_malaysia' => '1500',
                'del_sabah_labuan' => '1300',
                'del_sarawak' => '1100',
                'cov_country_id' => '150',
                'cov_state_id' => 11,
                'cov_city_id' => 2467,
		        'retail_price' => '1200',
                'original_price' => '1580',
                'available' => '100',
                'owarehouse_moq' => 5,
                 'owarehouse_price' => '120',
                'owarehouse_ave_unit_price'=>100,
                'product_details' => 'test',
                'type' => 'product',
		        'owarehouse_duration' => 7,
		        'smm_selected' => 0,
		        'mc_sales_staff_id' => 0,
		        'referral_sales_staff_id' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ),
            1 => array (
                'name' => 'Eco-Glassware-stain-remover-200g',
                'brand_id' => '1',
                'category_id' => '5',
                'subcat_id' => '84',
                'subcat_level' => '1',
		        'photo_1' => 'Eco-Glassware-stain-remober-200g.jpg',
                'free_delivery' => '0',
                'del_worldwide' => '2000',
                'del_west_malaysia' => '1500',
                'del_sabah_labuan' => '1300',
                'del_sarawak' => '1100',
                'cov_country_id' => '150',
                'cov_state_id' => 11,
                'cov_city_id' => 2467,
		        'retail_price' => '1400',
                'original_price' => '1420',
                'available' => '100',
                'owarehouse_moq' => 5,
                'owarehouse_price' => '120',
                'owarehouse_ave_unit_price'=>100,
                'product_details' => 'test',
                'type' => 'product',
		        'owarehouse_duration' => 7,
		        'smm_selected' => 0,
		        'mc_sales_staff_id' => 2,
		        'referral_sales_staff_id' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ),
            2 => array (
                'name' => 'Eco-Tiles-Stain-Remover-200g',
                'brand_id' => '1',
                'category_id' => '5',
                'subcat_id' => '84',
                'subcat_level' => '1',
		        'photo_1' => 'Eco-Tiles-Stain-Remover-200g.jpg',
                'free_delivery' => '0',
                'del_worldwide' => '2000',
                'del_west_malaysia' => '1500',
                'del_sabah_labuan' => '1300',
                'del_sarawak' => '1100',
                'cov_country_id' => '150',
                'cov_state_id' => 11,
                'cov_city_id' => 2467,
		        'retail_price' => '1600',
                'original_price' => '200',
                'available' => '100',
                'owarehouse_moq' => 5,
                'owarehouse_price' => '120',
                'owarehouse_ave_unit_price'=>100,
                'product_details' => 'test',
                'type' => 'product',
		        'owarehouse_duration' => 7,
		        'smm_selected' => 0,
		        'mc_sales_staff_id' => 4,
		        'referral_sales_staff_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ),
            3 => array (
                'name' => 'Green-Tube-Termite-Monitor',
                'brand_id' => '1',
                'category_id' => '5',
                'subcat_id' => '78',
                'subcat_level' => '1',
		        'photo_1' => 'Green-Tube-Termite-Monitor.jpg',
                'free_delivery' => '0',
                'del_worldwide' => '2000',
                'del_west_malaysia' => '1500',
                'del_sabah_labuan' => '1300',
                'del_sarawak' => '1100',
                'cov_country_id' => '150',
                'cov_state_id' => 11,
                'cov_city_id' => 2467,
		        'retail_price' => '1800',
                'original_price' => '2000',
                'available' => '100',
                'owarehouse_moq' => 5,
                'owarehouse_price' => '120',
                'owarehouse_ave_unit_price'=>100,
                'product_details' => 'test',
                'type' => 'product',
		        'owarehouse_duration' => 7,
		        'smm_selected' => 0,
		        'mc_sales_staff_id' => 2,
		        'referral_sales_staff_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ),
            4 => array (
                'name' => 'kleenso-9-in-1-pink-900ml',
                'brand_id' => '1',
                'category_id' => '5',
                'subcat_id' => '84',
                'subcat_level' => '1',
		        'photo_1' => 'kleenso-9-in-1-pink-900ml.jpg',
                'free_delivery' => '0',
                'del_worldwide' => '2000',
                'del_west_malaysia' => '1500',
                'del_sabah_labuan' => '1300',
                'del_sarawak' => '1100',
                'cov_country_id' => '0',
                'cov_state_id' => 11,
                'cov_city_id' => 2467,
		        'retail_price' => '2000',
                'original_price' => '2000',
                'available' => '100',
                'owarehouse_moq' => 5,
                'owarehouse_price' => '120',
                'owarehouse_ave_unit_price'=>100,
                'product_details' => 'test',
                'type' => 'product',
		        'owarehouse_duration' => 7,
		        'smm_selected' => 0,
		        'mc_sales_staff_id' => 3,
		        'referral_sales_staff_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ),
		));
		*/

		\DB::table('porder')->truncate();
		\DB::table('porder')->insert(array(
			0 => array (
                'user_id' => 1,
                'courier_id' => 1,
                'address_id' => 1,
                'payment_id' => 1,
                'checkout_tstamp' => $now,
                'delivery_tstamp' => $now,
                'receipt_tstamp' => $now,
                'created_at' => $now,
                'updated_at' => $now,
            ),
            1 => array (
                'user_id' => 2,
                'courier_id' => 1,
                'address_id' => 1,
                'payment_id' => 2,
                'checkout_tstamp' => $now,
                'delivery_tstamp' => $now,
                'receipt_tstamp' => $now,
                'created_at' => $now,
                'updated_at' => $now,
            ),
            2 => array (
                'user_id' => 3,
                'courier_id' => 1,
                'address_id' => 1,
                'payment_id' => 3,
                'checkout_tstamp' => $now,
                'delivery_tstamp' => $now,
                'receipt_tstamp' => $now,
                'created_at' => $now,
                'updated_at' => $now,
            )
		));

		\DB::table('payment')->truncate();
		\DB::table('payment')->insert(array(
			0 => array (
                'receivable' => 2600,
                'osmall_commission' => 0,
                'status' => '',
                'note' => '',
                'consignment' => '',
                'created_at' => $now,
                'updated_at' => $now,
            ),
            1 => array (
                'receivable' => 8600,
                'osmall_commission' => 3,
                'status' => '',
                'note' => '',
                'consignment' => '',
                'created_at' => $now,
                'updated_at' => $now,
            ),
            2 => array (
                'receivable' => 5800,
                'osmall_commission' => 2,
                'status' => '',
                'note' => '',
                'consignment' => '',
                'created_at' => $now,
                'updated_at' => $now,
            ),
		));

		\DB::table('orderproduct')->truncate();
		\DB::table('orderproduct')->insert(array(
			0 => array (
                'porder_id' => 1,
                'product_id' => 1,
                'quantity' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ),
            1 => array (
                'porder_id' => 1,
                'product_id' => 2,
                'quantity' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ),
            2 => array (
                'porder_id' => 2,
                'product_id' => 2,
                'quantity' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ),
            3 => array (
                'porder_id' => 2,
                'product_id' => 1,
                'quantity' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ),
            4 => array (
                'porder_id' => 2,
                'product_id' => 3,
                'quantity' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ),
            5 => array(
                'porder_id' => 3,
                'product_id' => 3,
                'quantity' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ),
            6 => array(
                'porder_id' => 3,
                'product_id' => 2,
                'quantity' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ),
		));
	}
}

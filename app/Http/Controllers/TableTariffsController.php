<?php


namespace App\Http\Controllers;

use App\MobileTariff;
use App\MobileTariffGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class TableTariffsController extends Controller
{
    public function index(Request $request)
    {
        $table = MobileTariff::all();
        return view('table.tariffs',['table'=>$table, 'ins' => 0]);
    }
    public function ins (Request $request) {
        return 'Rejected !';
        $table = MobileTariff::all();
        $DBnew = DB::connection('pgsqlnew');
        return view('table.tariffs',['table'=>$table, 'ins' => 1, 'DBnew'=> $DBnew]);
    }
    public function new(Request $request)
    {
        return 'Rejected !';
        $DBnew = Schema::connection('pgsqlnew');
        $DBnew->create('mobile_tariff_json', function($table)
            {
                $table->increments('id');
                $table->integer('section_id')->nullable();
                $table->integer('mobile_tariff_type_id')->nullable();
                $table->string('title');
                $table->string('slug');
                $table->text('content');
                $table->string('locale');
                $table->integer('transl_group_id')->unsigned();

                $table->json('jsonbin')->nullable();

                $table->tinyInteger('status')->nullable();
                $table->integer('sort')->nullable();
                $table->timestamp('created_at');
                $table->timestamp('updated_at');
                $table->text('old_parameters');
                $table->integer('esb_id');
                $table->integer('activation_business_mobile')->default(0);
                $table->integer('unit')->nullable();
                $table->integer('group_id')->nullable();

            });
//        $res = $DBnew->table('categories')->select('id');  dd($res);
          return 'Table New was created';
    }

}
/*
CREATE TABLE `mobile_tariffs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `section_id` int(10) unsigned DEFAULT NULL,
  `mobile_tariff_type_id` int(10) DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transl_group_id` int(10) unsigned NOT NULL,

  `featured` tinyint(1) NOT NULL,
  `recommended` tinyint(1) NOT NULL,
  `subscription_fee` double(10,2) DEFAULT NULL,
  `tariff_fee` double(10,2) DEFAULT NULL,
  `tariff_fee_period` tinyint(4) DEFAULT NULL,
  `outgoing_calls_price` double(10,2) DEFAULT NULL,
  `outgoing_calls_within_network_price` double(10,2) DEFAULT NULL,
  `within_inner_network_limit_in_minutes` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `outgoing_calls_within_tariff_plan_price` double(10,2) DEFAULT NULL,
  `outgoing_calls_within_сorporate_group_price` double(10,2) DEFAULT NULL,
  `outgoing_international_calls_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `outgoing_calls_included_limit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `outgoing_calls_included_limit_period` tinyint(4) DEFAULT NULL,
  `outgoing_calls_within_tariff_plan_included_limit` int(11) DEFAULT NULL,
  `incoming_calls_price` double(10,2) DEFAULT NULL,
  `internet_traffic_price` double(10,2) DEFAULT NULL,
  `internet_traffic_included_limit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `internet_traffic_included_limit_period` tinyint(4) DEFAULT NULL,
  `sms_price` double(10,2) DEFAULT NULL,
  `sms_international_price` double(10,2) DEFAULT NULL,
  `sms_included_limit` int(11) DEFAULT NULL,
  `sms_included_limit_period` tinyint(4) DEFAULT NULL,
  `first_two_minutes_price` double(10,2) DEFAULT NULL,
  `after_first_two_minutes_price` double(10,2) DEFAULT NULL,
  `1_200_minute_price` double(10,2) DEFAULT NULL,
  `201_400_minute_price` double(10,2) DEFAULT NULL,
  `after_401_minute_price` double(10,2) DEFAULT NULL,
  `ziyonet_and_internet_speed` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ziyonet_traffic_limit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activate_ussd_command` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activate_sms_label` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activate_sms_command` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activate_personal_account_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,

  `status` tinyint(3) unsigned NOT NULL,
  `sort` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `old_parameters` text COLLATE utf8mb4_unicode_ci,
  `esb_id` int(11) DEFAULT NULL,
  `activation_business_mobile` tinyint(1) NOT NULL DEFAULT '0',
  `unit` int(11) DEFAULT NULL,
  `group_id` int(10) unsigned DEFAULT NULL,

  PRIMARY KEY (`id`),
  UNIQUE KEY `mobile_tariffs_locale_transl_group_id_unique` (`locale`,`transl_group_id`),
  KEY `mobile_tariffs_status_index` (`status`),
  KEY `mobile_tariffs_sort_index` (`sort`),
  KEY `mobile_tariffs_mobile_tariff_type_id_foreign` (`mobile_tariff_type_id`),
  KEY `mobile_tariffs_section_id_foreign` (`section_id`),
  KEY `mobile_tariffs_group_id_foreign` (`group_id`),
  CONSTRAINT `mobile_tariffs_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `mobile_tariff_groups` (`id`),
  CONSTRAINT `mobile_tariffs_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=325 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
 */

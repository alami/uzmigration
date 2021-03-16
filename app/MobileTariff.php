<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class MobileTariff extends Model
{
    protected $fillable = [
        'section_id', 'mobile_tariff_type_id',
        'title', 'slug', 'content', 'locale', 'transl_group_id',
        'featured', 'recommended',
        'subscription_fee', 'tariff_fee', 'tariff_fee_period',
        'outgoing_calls_price', 'outgoing_calls_within_network_price', 'outgoing_calls_within_tariff_plan_price',
        'outgoing_calls_within_сorporate_group_price', 'outgoing_international_calls_price',
        'outgoing_calls_included_limit', 'outgoing_calls_included_limit_period',
        'outgoing_calls_within_tariff_plan_included_limit','within_inner_network_limit_in_minutes',
        'incoming_calls_price',
        'internet_traffic_price', 'internet_traffic_included_limit', 'internet_traffic_included_limit_period',
        'sms_price', 'sms_international_price', 'sms_included_limit', 'sms_included_limit_period',
        'first_two_minutes_price', 'after_first_two_minutes_price',
        '1_200_minute_price', '201_400_minute_price', 'after_401_minute_price',
        'ziyonet_and_internet_speed', 'ziyonet_traffic_limit',
        'activate_ussd_command', 'activate_sms_label', 'activate_sms_command', 'activate_personal_account_link',
        'status', 'sort', 'old_parameters', 'activation_business_mobile',
        'esb_id', 'group_id' ,'unit',
    ];

    protected $attributes = [
        'featured' => 0,
        'recommended' => 0,
    ];

}

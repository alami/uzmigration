    @include('table.nav')
    <?php $cols = [
        'section_id','mobile_tariff_type_id','title','slug','content','locale','transl_group_id',

        'featured','recommended', 'subscription_fee', 'tariff_fee', 'tariff_fee_period',
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

        'status', 'sort', 'created_at', 'updated_at', 'old_parameters',
        'esb_id',
        'activation_business_mobile', 'unit', 'group_id'
        ]; ///err not null - esb_id ; old_parameters ; slug
    ?>
    <table>
        <thead>
        <tr>
            @foreach([0,1,2,3,5,6,40,41,42,43,45,46,47,48] as $iname)
                <th> {{$cols[$iname]}} </th>
            @endforeach
            <th>JsonBin</th>
        </tr>
        </thead>
        <tbody>
<?php       if($ins) $data = array();
//        ['name' => 'John', 'age' => 25],
//        ['name' => 'Maria', 'age' => 31],
//            DB::table('table_name')->insert($data);
?>
        @foreach($table as $row)
<?php       if($ins) $arritem = array() ?>
            <tr>
                @foreach([0,1,2,3,5,6,40,41,42,43,45,46,47,48] as $iname)
                    <td> {{$row->{$cols[$iname]} }} </td>
                    <?php if($ins) $arritem [$cols[$iname]] = $row->{$cols[$iname]}; ?>
                @endforeach
                <td>
                <?php  //+ 4 + 44 + jsonbin
                    $str="{";
                if ($row->featured) $str.=" \"featured\":$row->featured,";
                if ($row->recommended) $str.=" \"recommended\":$row->recommended,";
if ($row->subscription_fee) $str.=" \"subscription_fee\":$row->subscription_fee,";
if ($row->tariff_fee) $str.=" \"tariff_fee\":$row->tariff_fee,";
if ($row->tariff_fee_period) $str.=" \"tariff_fee_period\":$row->tariff_fee_period,";
if ($row->outgoing_calls_price) $str.=" \"outgoing_calls_price\":$row->outgoing_calls_price,";
if ($row->outgoing_calls_within_network_price) $str.=" \"outgoing_calls_within_network_price\":$row->outgoing_calls_within_network_price,";
if ($row->outgoing_calls_within_tariff_plan_price) $str.=" \"outgoing_calls_within_tariff_plan_price\":$row->outgoing_calls_within_tariff_plan_price,";
if ($row->outgoing_calls_within_сorporate_group_price) $str.=" \"outgoing_calls_within_сorporate_group_price\":$row->outgoing_calls_within_сorporate_group_price,";
if ($row->outgoing_international_calls_price) $str.=" \"outgoing_international_calls_price\":\"$row->outgoing_international_calls_price\",";
if ($row->outgoing_calls_included_limit) $str.=" \"outgoing_calls_included_limit\":\"$row->outgoing_calls_included_limit\",";
if ($row->outgoing_calls_included_limit_period) $str.=" \"outgoing_calls_included_limit_period\":$row->outgoing_calls_included_limit_period,";
if ($row->outgoing_calls_within_tariff_plan_included_limit) $str.=" \"outgoing_calls_within_tariff_plan_included_limit\":$row->outgoing_calls_within_tariff_plan_included_limit,";
if ($row->within_inner_network_limit_in_minutes) $str.=" \"within_inner_network_limit_in_minutes\":\"$row->within_inner_network_limit_in_minutes\",";
if ($row->incoming_calls_price) $str.=" \"incoming_calls_price\":$row->incoming_calls_price,";
if ($row->internet_traffic_price) $str.=" \"internet_traffic_price\":$row->internet_traffic_price,";
if ($row->internet_traffic_included_limit) $str.=" \"internet_traffic_included_limit\":\"$row->internet_traffic_included_limit\",";
if ($row->internet_traffic_included_limit_period) $str.=" \"internet_traffic_included_limit_period\":$row->internet_traffic_included_limit_period,";
if ($row->sms_price) $str.=" \"sms_price\":$row->sms_price,";
if ($row->sms_international_price) $str.=" \"sms_international_price\":$row->sms_international_price,";
if ($row->sms_included_limit) $str.=" \"sms_included_limit\":$row->sms_included_limit,";
if ($row->sms_included_limit_period) $str.=" \"sms_included_limit_period\":$row->sms_included_limit_period,";
if ($row->first_two_minutes_price) $str.=" \"first_two_minutes_price\":$row->first_two_minutes_price,";
if ($row->after_first_two_minutes_price) $str.=" \"after_first_two_minutes_price\":$row->after_first_two_minutes_price,";
if ($row->{"1_200_minute_price"}) $str.=" \"1_200__minute_price\":".$row->{"1_200_minute_price"}.",";
if ($row->{"201_400_minute_price"}) $str.=" \"201_400_minute_price\":".$row->{"201_400_minute_price"}.",";
if ($row->after_401_minute_price) $str.=" \"after_401_minute_price\":$row->after_401_minute_price,";
if ($row->ziyonet_and_internet_speed) $str.=" \"ziyonet_and_internet_speed\":\"$row->ziyonet_and_internet_speed\",";
if ($row->ziyonet_traffic_limit) $str.=" \"ziyonet_traffic_limit\":\"$row->ziyonet_traffic_limit\",";
if ($row->activate_ussd_command) $str.=" \"activate_ussd_command\":\"$row->activate_ussd_command\",";
if ($row->activate_sms_label) $str.=" \"activate_sms_label\":\"$row->activate_sms_label\",";
if ($row->activate_sms_command) $str.=" \"activate_sms_command\":\"$row->activate_sms_command\",";
if ($row->activate_personal_account_link) $str.=" \"activate_personal_account_link\":\"$row->activate_personal_account_link\",";
                    $last = strlen($str)-1;
                    if ($last==0) {
                        $str = null;
                    }
                    elseif ($str[$last]==',') {
                        $str[$last] = '}';
                    }
                ?>
                    {{$str}}
                </td>
            </tr>
            <?php
            if($ins) {
                $arritem [$cols[4]] = $row->{$cols[4]};
                $arritem [$cols[44]] = $row->{$cols[44]};
                $arritem ['jsonbin'] = $str;
            }
            $data [] = $arritem;
            ?>
        @endforeach
        </tbody>
    </table></blockquote>
    <?php
//    dd($data);die();
    if($ins) $DBnew->table('mobile_tariff_json')->insert($data);
    ?>
    </body>
</html>

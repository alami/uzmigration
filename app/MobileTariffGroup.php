<?php


namespace App;


class MobileTariffGroup extends \Illuminate\Database\Eloquent\Model
{
    protected $fillable = [
        'parent_id',
        'status',
        'title',
        'slug',
        'locale',
        'transl_group_id',
        'subtitle',
        'excerpt',
        'type',
        'preview_image_id',
        'detail_image_id',
        'section_id',
        'sort',
        'content',
        'color',
        'esb_id'
    ];
}

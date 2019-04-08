<?php
/**
 * * Summary File ${NAME}
 *
 * Description File ${NAME}
 *
 * @author Faeze Eshaghi
 * Date: 4/8/2019
 * Time: 2:13 AM
 * @version 1.0.0
 */

namespace Modules\Main\Models\Currency;


use Modules\Main\Models\CurrencyCategory\ModelCurrencyCategory;
use Modules\Main\Models\CurrencyCategoryMap\ModelCurrencyCategoryMap;
use Modules\Main\Models\CurrencyPrice\ModelCurrencyPrice;

trait TraitRelationsCurrencyModel
{
    protected function relations()
    {
        $this->hasMany(
            'id',
            ModelCurrencyCategoryMap::class,
            'currency_id'
        );

        $this->hasManyToMany(
            'id',
            ModelCurrencyCategoryMap::class,
            'currency_id', 'category_id',
            ModelCurrencyCategory::class,
            'id'
        );

        $this->hasMany(
            'id',
            ModelCurrencyPrice::class,
            'currency_id'
        );

    }
}
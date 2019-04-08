<?php
/**
 * * Summary File ${NAME}
 *
 * Description File ${NAME}
 *
 * @author Faeze Eshaghi
 * Date: 4/8/2019
 * Time: 3:19 AM
 * @version 1.0.0
 */
namespace Modules\Main\Models\CurrencyCategoryMap;

use Modules\Main\Models\Currency\ModelCurrency;
use Modules\Main\Models\CurrencyCategory\ModelCurrencyCategory;

trait TraitRelationsCurrencyCategoryMapModel
{
    protected function relations()
    {
        $this->belongsTo(
            'currency_id',
            ModelCurrency::class,
            'id'
        );

        $this->belongsTo(
            'category_id',
            ModelCurrencyCategory::class,
            'id'
        );

    }
}
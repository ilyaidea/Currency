<?php
/**
 * * Summary File ${NAME}
 *
 * Description File ${NAME}
 *
 * @author Faeze Eshaghi
 * Date: 4/8/2019
 * Time: 3:23 AM
 * @version 1.0.0
 */
namespace Modules\Main\Models\CurrencyPrice;

use Modules\Main\Models\Currency\ModelCurrency;

trait TraitRelationsCurrencyPriceModel
{
    protected function relations()
    {
        $this->belongsTo(
            'currency_id',
            ModelCurrency::class,
            'id'
        );
    }
}
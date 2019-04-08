<?php
/**
 * * Summary File ${NAME}
 *
 * Description File ${NAME}
 *
 * @author Faeze Eshaghi
 * Date: 4/8/2019
 * Time: 3:21 AM
 * @version 1.0.0
 */
namespace Modules\Main\Models\CurrencyPrice;

use Lib\Events\IModelEvents;
use Phalcon\Mvc\Model;

class ModelCurrencyPrice extends Model implements IModelEvents
{
    use TraitPropertiesCurrencyPriceModel;
    use TraitRelationsCurrencyPriceModel;
    use TraitEventsCurrencyPriceModel;
    use TraitValidationsCurrencyPriceModel;

    /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
     * Initialize Method
     */

    public function initilize()
    {
        $this->setSource('ilya_currency_Price');
    }
}
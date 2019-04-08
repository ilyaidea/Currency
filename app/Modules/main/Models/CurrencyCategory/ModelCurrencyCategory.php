<?php
/**
 * * * * Summary File ${NAME}
 *
 * Description File ${NAME}
 *
 * @author Faeze Eshaghi
 * Date: 4/8/2019
 * Time: 2:38 AM
 * @version 1.0.0
 */
namespace Modules\Main\Models\CurrencyCategory;

use Lib\Events\IModelEvents;
use Phalcon\Mvc\Model;

class ModelCurrencyCategory extends Model implements IModelEvents
{
    use TraitPropertiesCurrencyCategoryModel;
    use TraitRelationsCurrencyCategoryModel;
    use TraitEventsCurrencyCategoryModel;
    use TraitValidationsCurrencyCategoryModel;

    /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
     * Initialize Method
     */

    public function initilize()
    {
        $this->setSource('ilya_currency_category');
    }
}
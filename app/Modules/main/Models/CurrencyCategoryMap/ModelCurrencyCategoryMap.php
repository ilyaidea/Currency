<?php
/**
 * * Summary File ${NAME}
 *
 * Description File ${NAME}
 *
 * @author Faeze Eshaghi
 * Date: 4/8/2019
 * Time: 3:17 AM
 * @version 1.0.0
 */
namespace Modules\Main\Models\CurrencyCategoryMap;

use Lib\Events\IModelEvents;
use Phalcon\Mvc\Model;

class ModelCurrencyCategoryMap extends Model implements IModelEvents
{
    use TraitPropertiesCurrencyCategoryMapModel;
    use TraitRelationsCurrencyCategoryMapModel;
    use TraitEventsCurrencyCategoryMapModel;
    use TraitValidationsCurrencyCategoryMapModel;

    /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
     * Initialize Method
     */

    public function initilize()
    {
        $this->setSource('ilya_currency_category_map');
    }
}
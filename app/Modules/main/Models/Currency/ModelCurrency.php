<?php
/**
 * * * * Summary File ${NAME}
 *
 * Description File ${NAME}
 *
 * @author Faeze Eshaghi
 * Date: 4/8/2019
 * Time: 1:48 AM
 * @version 1.0.0
 */
namespace Modules\Main\Models\Currency;

use Lib\Events\IModelEvents;
use Phalcon\Mvc\Model;

class ModelCurrency extends Model implements IModelEvents
{
    use TraitPropertiesCurrencyModel;
    use TraitRelationsCurrencyModel;
    use TraitEventsCurrencyModel;
    use TraitValidationsCurrencyModel;

    /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
     * Initialize Method
     */

    public function initilize()
    {
        $this->setSource('ilya_currency');
    }
}
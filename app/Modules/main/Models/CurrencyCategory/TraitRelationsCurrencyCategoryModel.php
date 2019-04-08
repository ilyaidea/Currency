<?php
/**
 * * Summary File ${NAME}
 *
 * Description File ${NAME}
 *
 * @author Faeze Eshaghi
 * Date: 4/8/2019
 * Time: 2:44 AM
 * @version 1.0.0
 */
namespace Modules\Main\Models\CurrencyCategory;


trait TraitRelationsCurrencyCategoryModel
{
    protected function relations()
    {
        $this->belongsTo(
            'parent_id',
            self::class,
            'id',
            [
                'alias' => 'Parent',
                'foreignKey' => [
                    'allowNulls' => true,
                    'message' => 'The parent_id does not exist'
                ]
            ]
        );

        $this->hasMany(
            'id',
            self::class,
            'parent_id',
            [
                'alias' => 'Childs',
                'foreignKey' => [
                    'message' => 'The Page could not be deleted because other pages are using it'
                ]
            ]
        );
    }
}
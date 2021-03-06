<?php
/**
 * * Summary File ${NAME}
 *
 * Description File ${NAME}
 *
 * @author Faeze Eshaghi
 * Date: 4/8/2019
 * Time: 2:11 AM
 * @version 1.0.0
 */
namespace Modules\Main\Models\Currency;


trait TraitPropertiesCurrencyModel
{
    private $id;
    private $title;
    private $position;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param mixed $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

}
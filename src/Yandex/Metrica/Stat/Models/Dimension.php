<?php

namespace Yandex\Metrica\Stat\Models;

use Yandex\Common\Model;

class Dimension extends Model
{

    protected $id = null;

    protected $name = null;

    protected $directId = null;

    protected $mappingClasses = [];

    protected $propNameMap = [
        'direct_id' => 'directId'
    ];

    /**
     * Retrieve the id property
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the id property
     *
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Retrieve the name property
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the name property
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Retrieve the directId property
     *
     * @return string|null
     */
    public function getDirectId()
    {
        return $this->directId;
    }

    /**
     * Set the directId property
     *
     * @param string $directId
     * @return $this
     */
    public function setDirectId($directId)
    {
        $this->directId = $directId;
        return $this;
    }
}

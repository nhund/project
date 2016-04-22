<?php
/**
 * Created by PhpStorm.
 * User: nhu
 * Date: 4/22/16
 * Time: 2:37 PM
 */

namespace App\Book;


class Book
{
    /**
     * @var String
     */
    public $name;

    /**
     * @var number
     */
    public $id;

    /**
     * @var String
     */
    public $description;

    /**
     * @param $name String
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return String
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return number
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return String
     */
    public function getDescription()
    {
        return $this->description;
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: nhu
 * Date: 4/22/16
 * Time: 2:37 PM
 */

namespace App\Book;


class BookFactory
{
    /**
     * @param $rawData
     * @return Book
     */
    public function build($rawData)
    {
        $book = new Book();
        $book->setId($rawData->id)
             ->setDescription($rawData->content)
             ->setName($rawData->title)
        ;
        return $book;
    }

    /**
     * @param $rawData
     * @return []
     */
    public function buildMany($rawData)
    {
        return array_map(function($row){
            return $this->build($row);
        }, $rawData);
    }
}
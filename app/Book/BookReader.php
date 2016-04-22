<?php
/**
 * Created by PhpStorm.
 * User: nhu
 * Date: 4/22/16
 * Time: 2:37 PM
 */

namespace App\Book;


class BookReader
{
    /**
     * @param Book $book
     * @return array
     */
    public function read(Book $book)
    {
        return [
            'id'      => $book->getId(),
            'name'    => $book->getName(),
            'content' => $book->getDescription()
        ];
    }
}
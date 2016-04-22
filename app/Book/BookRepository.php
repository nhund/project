<?php
namespace App\Book;
use Illuminate\Database\Connection;

/**
 * Created by PhpStorm.
 * User: nhu
 * Date: 4/22/16
 * Time: 2:36 PM
 */
class BookRepository
{
    const TABLE_BOOK = 'books';

    /**
     * BookRepository constructor.
     * @param Connection $connection
     * @param BookFactory $bookFactory
     * @param BookReader $bookReader
     */
    public function __construct(Connection $connection, BookFactory $bookFactory, BookReader $bookReader)
    {
        $this->connection  = $connection;
        $this->bookFactory = $bookFactory;
        $this->bookReader  = $bookReader;
    }

    /**
     * @return Book|null
     */
    public function getAll()
    {
        $rawDataBook = $this->connection->table(self::TABLE_BOOK)->select()->get();

        if(! $rawDataBook){
            return null;
        }

        return $this->bookFactory->buildMany($rawDataBook);
    }

    /**
     * @param Book $book
     * @return Book
     */
    public function store(Book $book)
    {
        $rawData = $this->bookReader->read($book);
        $this->connection->table(self::TABLE_BOOK)->insert($rawData);
        return $book;
    }

    /**
     * @param $id
     * @return int
     */
    public function delete($id)
    {
        return $this->connection->table(self::TABLE_BOOK)->where('id', '=', $id)->delete();
    }

    /**
     * @param $id
     * @return Book|null
     */
    public function findById($id)
    {
        $rawData = $this->connection->table(self::TABLE_BOOK)->select()->where('id', '=', $id)->get();

        if( ! $rawData){
            return null;
        }
        return $this->bookFactory->build($rawData);
    }
}
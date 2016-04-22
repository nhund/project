<?php
/**
 * Created by PhpStorm.
 * User: nhu
 * Date: 4/22/16
 * Time: 3:10 PM
 */

namespace App\Http\Controllers;

use App\Book\Book;
use App\Book\BookRepository;
use Illuminate\Support\Facades\Request;

class BookController extends Controller
{
    public $bookRepository;

    public function __construct(BookRepository $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }

    public function getAll()
    {
        dd($this->bookRepository->getAll());
    }

    public function insert(Request $request)
    {
        $name = request()->input('name');
        $description = request()->input('description');

        $book = new Book();
        $book->setName($name);
        $book->setDescription($description);

        $this->bookRepository->store($book);
    }
}
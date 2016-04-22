<?php
/**
 * Created by PhpStorm.
 * User: nhu
 * Date: 4/22/16
 * Time: 3:02 PM
 */

namespace App\Book;


use Illuminate\Support\ServiceProvider;

class BookServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(BookRepository::class, function(){
            $bookRepository = new BookRepository(\DB::connection(), new BookFactory(), new BookReader());
            return $bookRepository;
        });
    }
}
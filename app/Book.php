<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /**
     * Get the search result.
     *
     * @param  string  $key
     * @return array  [Book]
     */
    public static function search($key) {
        return self::searchBooks($key);
    }

    /**
     * Get the search result from http://www.books.com.tw/.
     *
     * @param  string  $key
     * @return array  [Book]
     */
    private static function searchBooks($key) {

        // TODO: get book's info
        $book = new static;
        $books[] = $book;

        return $books;
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Author;
use App\Book;
use App\BorrowLog;
use App\User;

class BooksSeeder extends Seeder
{
    public function run()
    {
        //sample pennulis
        $author1 = Author::create(['name'=>'Muhammad Jordi']);
        $author2 = Author::create(['name'=>'rudi wildantoro L']);
        $author3 = Author::create(['name'=>'Rizal Saepul M']);

        //sample buku
        $book1 = Book::create(['title'=>'Kupinang Kau dengan Bismillah','amount'=>3, 'author_id'=>$author1->id]);
        $book2 = Book::create(['title'=>'Omar Bin Khotob','amount'=>2, 'author_id'=>$author2->id]);
        $book3 = Book::create(['title'=>'Cinta di atas sejadah','amount'=>4, 'author_id'=>$author3->id]);
        $book4 = Book::create(['title'=>'Man Jadda Wa Jadda','amount'=>3, 'author_id'=>$author3->id]);

        //sample meminjam buku 
        $member = User::where('email', 'member@gmail.com')->first();
        BorrowLog::create(['user_id'=> $member->id, 'book_id'=>$book1->id, 'is_returned'=>0]);
        BorrowLog::create(['user_id'=> $member->id, 'book_id'=>$book2->id, 'is_returned'=>0]);
        BorrowLog::create(['user_id'=> $member->id, 'book_id'=>$book3->id, 'is_returned'=>1]);
    }
}

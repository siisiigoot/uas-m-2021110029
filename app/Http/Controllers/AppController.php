<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Transaction;
use Illuminate\Http\Request;

class AppController extends Controller
{
    //
    function index(){
        $jumlahTransactions = Transaction::count();
        $jumlahAccounts = Account::count();
        return view('index',compact('jumlahTransactions','jumlahAccounts'));
    }
}

// public function index()
// {
//     //
//     $jumlahBuku = Book::count();
//     $jumlahPenulis = Author::count();
//     $allAuthors = Author::all();
//     $allAuthors->loadCount('books');
//     return view('dashboard', compact('jumlahBuku','jumlahPenulis'));
// }  
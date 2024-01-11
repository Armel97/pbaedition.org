<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends BaseController
{
    public function getBooks(){
        $books = Book::whereStatus('Actif')->whereType('Les livres')->paginate(9);
        return  $this->sendResponse($books,'Livres recupérés avec succès.');

    }
    public function getBooksByCategory($id){
        $books = Book::whereStatus('Actif')->whereType('Les livres')->whereCategoryId($id)->paginate(200);
        return  $this->sendResponse($books,'Livres recupérés avec succès.');

    }
    public function getBookAParaitre(){
        $books = Book::whereStatus('Actif')->whereType('A paraître')->paginate(9);
        return  $this->sendResponse($books,'Livres recupérés avec succès.');
    }
    public function getBookLivresHippo(){
        $books = Book::whereStatus('Actif')->whereType('LivresHippo')->orderBy('created_at','DESC')->paginate(9);
        return  $this->sendResponse($books,'Livres recupérés avec succès.');
    }
    public function getBookAParaitreForHome(){
        $books = Book::whereStatus('Actif')->whereType('A paraître')->orderBy('created_at', 'DESC')->get();
        return  $this->sendResponse($books,'3 Livres recupérés avec succès.');
    }
    public function getBookAParaitreForFooter(){
        $books = Book::whereStatus('Actif')->whereType('A paraître')->orderBy('created_at', 'DESC')->take(2)->get();
        return  $this->sendResponse($books,'3 Livres recupérés avec succès.');
    }
    public function getBookNouveauteForHome(){
        $books = Book::whereStatus('Actif')->whereType('Nouveautés')->orderBy('created_at', 'DESC')->get();
        return  $this->sendResponse($books,'3 Livres recupérés avec succès.');
    }
    public function getBookLivresForHome(){
        $books = Book::whereStatus('Actif')->whereType('Les livres')->orderBy('created_at', 'DESC')->get();
        return  $this->sendResponse($books,'3 Livres recupérés avec succès.');
    }
    public function getBookNouveautes(){
        $books = Book::whereStatus('Actif')->whereType('Nouveautés')->paginate(9);
        return  $this->sendResponse($books,'Livres recupérés avec succès.');

    }
    public function storeLivre(Request $request) {
        $request->validate([
            'category_id'=>'required'
        ]);

        if($request->hasFile('image')){
            $image=$request->file('image');
            $realImage =time().'.'.$image->getClientOriginalExtension();
            $dest=public_path('/books');
            $image->move($dest,$realImage);
        }else {
            $realImage =null;
        }
        $request['image']= $realImage;
        $book = new Book;
        $book->image = $realImage;
        $book->title = $request->title;
        $book->description = $request->description;
        $book->promotion_price = $request->promotion_price;
        $book->real_price = $request->real_price;
        $book->type = $request->type;
        $book->category_id = $request->category_id;
        $book->status = $request->status;
        $book->author = $request->author;
        $book->save();
        return redirect()->back()->with('success', 'Livre créé avec succès');

    }
}

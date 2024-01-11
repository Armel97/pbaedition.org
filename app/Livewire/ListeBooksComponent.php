<?php

namespace App\Livewire;

use App\Models\Book;
use App\Models\Category;
use App\Models\Subscriber;
use App\Notifications\NewBookNotification;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class ListeBooksComponent extends Component
{
    use WithPagination;
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';
    public $searchTerm;

    public $book_id, $title, $author, $real_price, $promotion_price, $image, $oldImage, $newImage, $description, $category_id, $status, $type; 

    public function mount(Book $book)
    {
        $this->book_id = $book->id;
        $this->image = $book->image;
    }
    protected function rules(){
        return [
            'title' =>'required|unique:books,title,'. $this->book_id,
            'real_price' =>'',
            'promotion_price' =>'',
            'description' =>'',
            'category_id' =>'required',
            'author' =>'required',
            'status' =>'required',
            'type' =>'required',
            'image' =>'image|max:1024',
        ];


        
    }
    public function editBook(int $book_id){

        $this->resetValidation();

        $book = Book::find($book_id);
        $this->book_id = $book->id;
        $this->title = $book->title;
        $this->real_price = $book->real_price;
        $this->promotion_price = $book->promotion_price;
        $this->description = $book->description;
        $this->category_id = $book->category_id;
        $this->status = $book->status;
        $this->author = $book->author;
        $this->type = $book->type;
        $this->newImage = $book->image;
        $this->oldImage = $book->image;
        // dd($this->image);

        // if (!$book->image) {
        //     $this->image = '';
        // }
       
    }
    public function createBook(){
        $validateData = $this->validate();
        
        if($this->image){
            $realImage =time().'.'.$this->image->getClientOriginalExtension();
            $this->image->storeAs('books', $realImage, 'public');
        }else {
            $realImage ='';
        }
        
        $book = Book::create([
            'title'=>$validateData['title'],
            'promotion_price'=>$validateData['promotion_price'],
            'real_price'=>$validateData['real_price'],
            'description'=>$validateData['description'],
            'type'=>$validateData['type'],
            'status'=>$validateData['status'],
            'author'=>$validateData['author'],
            'image'=>$realImage,
            'category_id'=>$validateData['category_id'],
        ]);

        // $subscribers->notify(new NewBookNotification($book));
        $subscribers = Subscriber::orderBy('id')->get()->pluck('email');

        Notification::route('mail', $subscribers) //Sending mail to subscribers
        ->notify((new NewBookNotification($book))->delay(now()->addMinutes(1))); //With new post
        // DispatchJob::dispatch();

        $this->dispatch('postCreated', [
            'type' => 'inlineForm',
        ]);
        $this->dispatch('swal:modal', [
            'type' => 'success',
            'message' => 'Enregistrement',
            'text' => 'Livre enregistré avec succès!'
        ]);
        $this->reset(); 
        $this->image = null;
        $this->resetValidation();

    }

    public function searchData()
    {
        $searchTerm = '%'.$this->searchTerm.'%';

        $categories = Category::all();
        $books = Book::with('category')->where('title','like', $searchTerm)->orderBy('id', 'DESC')->paginate(10);

    }

    public function updateBook(){
        $validateData = $this->validate([
            'title' =>'required|unique:books,title,'. $this->book_id,
            'real_price' =>'',
            'promotion_price' =>'',
            'description' =>'',
            'category_id' =>'required',
            'author' =>'required',
            'status' =>'required',
            'type' =>'required',
        ]);

        $book = Book::whereId($this->book_id)->first();

        if($this->image){
            if(Storage::exists("public/books/$book->image")) {
                Storage::delete("public/books/$book->image");
            }
            $realImage =time().'.'.$this->image->getClientOriginalExtension();
            $this->image->storeAs('books', $realImage, 'public');

        }else {
            $realImage =$book->image;
        }

        
        $book->update([
            'title'=>$validateData['title'],
            'promotion_price'=>$validateData['promotion_price'],
            'real_price'=>$validateData['real_price'],
            'description'=>$validateData['description'],
            'type'=>$validateData['type'],
            'status'=>$validateData['status'],
            'author'=>$validateData['author'],
            'image'=>$realImage,
            'category_id'=>$validateData['category_id'],
        ]);
        session()->flash('success', 'Livre modifié avec succès');
        $this->dispatch('postUpdated', [
            'type' => 'inlineFormUpdate',
        ]);
        $this->dispatch('swal:modal', [
            'type' => 'success',
            'message' => 'Modification',
            'text' => 'Livre modifié avec succès!'
        ]);
        $this->resetValidation();

    }
    public function deleteBook(int $book_id){
        $this->book_id = $book_id;
    }
    public function destroyBook(){
        $book = Book::find($this->book_id);
        if ($book->image) {
            if(Storage::exists("public/books/$book->image")) {
                Storage::delete("public/books/$book->image");
            }
        }
       
        $book = Book::find($this->book_id)->delete();
        $this->dispatch('deleteElement', [
            'type' => 'inlineFormDelete',
        ]);
        $this->dispatch('swal:modal', [
            'type' => 'success',
            'message' => 'Suppression',
            'text' => 'Livre supprimé avec succès!'
        ]);

        $this->resetValidation();
    }
    
     /**
     * Write code on Method
     *
     * @return response()
     */
    public function alertSuccess()
    {
        $this->dispatch('swal:modal', [
            'type' => 'success',
            'message' => 'User Created Successfully!',
            'text' => 'It will list on users table soon.'
        ]);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function alertConfirm()
    {
        $this->dispatch('swal:confirm', [
            'type' => 'warning',
            'message' => 'Are you sure?',
            'text' => 'If deleted, you will not be able to recover this imaginary file!'
        ]);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function remove()
    {
        /* Write Delete Logic */
        $this->dispatch('swal:modal', [
            'type' => 'success',
            'message' => 'User Delete Successfully!',
            'text' => 'It will not list on users table soon.'
        ]);
    }
    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';

        $categories = Category::all();
        $books = Book::with('category')->where('title','like', $searchTerm)->orderBy('id', 'DESC')->paginate(10);

        return view('livewire.liste-books-component', compact('books', 'categories'));
    }
}

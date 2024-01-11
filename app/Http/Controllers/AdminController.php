<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Distributeur;
use App\Models\Subscriber;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {

        $distributeurs_total = count(Distributeur::all());
        // dd($distributeurs_total);

        $teams_total = count(Team::all());
        $subscribers_total = count(Subscriber::all());
        $users_total = count(User::all());
        $livres_total = count(Book::all());
        $livres_total_aparaitre = count(Book::whereType('A paraître')->get());
        $livres_total_nouveaute = count(Book::whereType('Nouveautés')->get());
        $livres_total_autres = count(Book::whereType('Les livres')->get());
        $livres_total_livrehyppo = count(Book::whereType('LivresHippo')->get());
        $livres_category_total = count(Category::all());

        return view('backend.dashboard', compact(
        'livres_total', 
        'livres_category_total', 
        'livres_total_aparaitre',
        'livres_total_nouveaute',
        'livres_total_autres',
        'livres_total_livrehyppo',
        'users_total',
        'subscribers_total',
        'teams_total',
        'distributeurs_total',
    ));
    }
    public function users()
    {
        $users = User::paginate();
        // dd($users);
        return view('backend.user', compact('users'));
    }

    public function livres()
    {
        $categories = Category::all();
        $users = [];
        // dd($users);
        return view('backend.livres', compact('users', 'categories'));
    }

    public function categoryLivre()
    {
        $categories = Category::paginate();
        // dd($categories);
        return view('backend.category-livres', compact('categories'));
    }

    public function storeCategory(Request $request)
    {
        $request->validate([
            'libelle' => 'required',
        ]);
        $category = Category::create($request->all());

        // $this->dispatch('category-livres');

        return redirect()->back()->with('success', 'Catégorie ajoutée avec succès');
    }
    public function destroy($id)
    {
        // Find the item by its ID
        $category = Category::findOrFail($id);

        // Delete the category
        $category->delete();

        // Optionally, you can redirect back to a page or return a response
        return redirect()->back()->with('success', 'Catégorie de livre supprimé avec succès');
    }
}

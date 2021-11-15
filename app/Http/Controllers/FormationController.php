<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormationPictureUpdateRequest;
use App\Http\Requests\FormationUpdateRequest;
use App\Http\Requests\StoreFormationRequest;
use App\Models\Category;
use App\Models\Chapter;
use App\Models\ChapterFormation;
use App\Models\Formation;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class FormationController extends Controller
{
    public function index()
    {
        $formations = Formation::where('publicationStatus', 1)->get();
        return view('home-page', compact('formations'));
    }

    public function formationCategory($category)
    {
        $category = Category::where('name', $category)->first();
        $formations = Formation::where(['category_id' => $category->id, 'publicationStatus' => 1])->get();
        return view('home-page', compact('formations'));

    }

    public function details($id)
    {
        $formation = Formation::find($id);
        $author = User::find($formation->author);
        $category = Category::find($formation->category_id);
        $chapterFormation = ChapterFormation::where('formation_id', $formation->id)->get();
        $chaptersArray = array();
        foreach ($chapterFormation as $item){
            $chapter = Chapter::find($item->chapter_id);
            array_push($chaptersArray, $chapter);
        }

        return view('formations.details', compact(
            'formation',
            'author',
            'category',
            'chaptersArray'
        ));
    }

    public function userFormations()
    {
        $user = Auth::user();
        if($user->role->name == 'admin'){
            $formations = Formation::all();
        }
        else{
            $formations = Formation::where('author', $user->id)->get();
        }
        return view('formations.user-formations-list', compact('user', 'formations'));
    }

    public function updateFormationDetails($id)
    {
        $formation = Formation::find($id);
        $categories = Category::all();

        return view('formations.user-update-formation', compact(
            'formation',
            'categories',
        ));
    }

    public function updateFormation($id, FormationUpdateRequest $request)
    {
        $params = $request->validated();
        $formation = Formation::find($id);
        $publicationStatus = isset($params['publicationStatus']);
        $formation->update([
            'title' => $params['title'],
            'description' => $params['description'],
            'presentation' => $params['presentation'],
            'price' => $params['price'],
            'publicationStatus' => $publicationStatus,
        ]);
        return redirect()->route('update-formation-details', $id);
    }

    public function updateFormationPicture($id, FormationPictureUpdateRequest $request)
    {
        $params = $request->validated();
        $formation = Formation::find($id);

        if(Storage::exists("public/$formation->img")){
            Storage::delete("public/$formation->img");
        }
        $file = Storage::put('public', $params['picture']);
        $params['picture'] = substr($file, 7);
        $formation->img = $params['picture'];
        $formation->save();
        return redirect()->route('update-formation-details', $id);
    }

    public function deleteFormation($id)
    {
        $formation = Formation::find($id);
        if(Storage::exists("public/$formation->img")){
            Storage::delete("/public/$formation->img");
        }
        $formation->delete();
        return redirect()->route('dashboard');
    }

    public function newFormation()
    {
        return view('formations.user-new-formation');
    }

    public function storeFormation(StoreFormationRequest $request)
    {
        dd('hey');
        $params = $request->validated();
        dd($params);
        $file = Storage::put('public', $params['picture']);
        $params['picture'] = substr($file, 7);
        Formation::create($params);

        return redirect()->route('dashboard');
    }

}

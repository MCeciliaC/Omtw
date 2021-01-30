<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Question;
use App\Category;

class abmController extends Controller
{
  public function list(){
    $mail= auth()->user()->email;
    if($mail != 'admin@hotmail.com'){
      return redirect('home');
    }
    $category= Category::all();
    $questions= Question::all();
    $vac= compact("category", "questions");
    return view("abm", $vac);
  }

  public function showModify($id){
    $mail= auth()->user()->email;
    if($mail != 'admin@hotmail.com'){
      return redirect('home');
    }
    $question = Question::find($id);
    // dd($question);
    $category= Category::all();
    $questions= Question::all();
    $vac= compact("category", "questions","question");
    return view("abm", $vac);
  }

    public function insert(Request $form){
      $form->validate([
        "text"=>'required',
        "category"=>'required',
        'vof'=>'required'
      ]);
        $newQues = new Question();
        $newQues->text=$form->text;
        $newQues->category_id=$form->category;
        $newQues->value=$form->vof;
// return $form;
        $newQues-> save();

        return back()->with('mensaje', 'pregunta agregada');
    }

    public function modify(Request $form){
      $question = Question::find($form->id);
      $question->text=$form->text;
      $question->category_id=$form->category;
      $question->value=$form->vof;
      $question-> save();
      return redirect("/abm")->with('mensaje', 'pregunta modificada');
    }
    public function delete(Request $form){
      $question = Question::find($form->id);
      $question->text=$form->text;
      $question->category_id=$form->category;
      $question->value=$form->vof;
      $question-> delete();
      return redirect("/abm")->with('mensaje', 'pregunta eliminada');
    }
}

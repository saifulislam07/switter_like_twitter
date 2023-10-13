<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'content' => 'required|min:3|max:240',
        ]);

        $idea = Idea::create([
            'content' => request()->get('content', ''),
        ]);

        return redirect()->route('dashboard')->with('success', 'Idea Created successfully!');
    }

    public function destroy(Idea $id)
    {
        $id->delete();
        // $idea = Idea::where('id', $id)->firstOrFail()->delete();
        return redirect()->route('dashboard')->with('success', 'Idea Deleted successfully!');
    }

    public function show(Idea $idea)
    {
        return view('pages.ideas.show', compact('idea'));
    }

    public function edit(Idea $idea)
    {
        $editing = true;
        return view('pages.ideas.show', compact('idea', 'editing'));
    }
    public function update(Idea $idea)
    {
        request()->validate([
            'content' => 'required|min:3|max:240',
        ]);

        $idea->content = request()->get('content', '');
        $idea->save();
        return redirect()->route('ideas.show', $idea->id)->with('success', 'Idea Updated successfully!');
    }
}

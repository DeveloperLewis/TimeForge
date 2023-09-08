<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Entry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EntriesController extends Controller
{
    public function index()
    {
        $entries = Entry::where('user_id', auth::id())
            ->orderBy('updated_at','DESC')
            ->paginate(12);

        return view('pages.dashboard.entries', [
            'entries' => $entries
        ]);
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'description' => ['min:5', 'max:1000'],
            'category' => ['integer']
        ]);

        $formFields['user_id'] = Auth::id();

        //Validate that only the user linked category id's can be selected, frontend and backend
        if(isset($request->category_id))
        {
            $formFields['category_id'] = $request->category_id;
        }

        $formFields['time_performed'] = 0;

        Entry::create($formFields);

        return redirect('/dashboard/entries');
    }

    public function edit(Request $request, Entry $entry)
    {
        if($entry->user_id != auth()->id())
        {
            abort(403, 'Unauthorized Action');
        }

        $formFields = $request->validate([
           'time_performed' => ['required', 'integer']
        ]);

        $entry->update(['time_performed' => $formFields['time_performed']]);
    }
}

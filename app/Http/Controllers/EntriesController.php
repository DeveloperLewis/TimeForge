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
        $entries = Entry::latest()->paginate(6);

        return view('pages.dashboard.entries', [
            'entries' => $entries
        ]);
    }

    public function create(Request $request)
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
}

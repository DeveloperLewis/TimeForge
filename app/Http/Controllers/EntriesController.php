<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Entry;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EntriesController extends Controller
{
    public function index()
    {
        $entries = Entry::where('user_id', auth::id())
            ->orderBy('updated_at','DESC')
            ->paginate(12);

        //Get project names, make upper case and remove duplicates
        $projectsList = [];

        foreach($entries as $entry)
        {
            if ($entry->project != null)
            {
                $projectsList[] = $entry->project;
            }
        }

        $projectsList = array_change_key_case($projectsList, CASE_UPPER);
        $projectsList = array_unique($projectsList);

        return view('pages.dashboard.entries', [
            'entries' => $entries,
            'projects' => $projectsList
        ]);
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => ['string', 'required', 'min:3', 'max:40'],
            'reward_tier' => ['string', 'required', 'min:3', 'max:7'],
            'project' => ['string', 'min:1', 'max:15']
        ]);

        $formFields['user_id'] = Auth::id();

        $formFields['time_performed'] = 0;

        Entry::create($formFields);

        return redirect('/dashboard/entries');
    }

    public function updateTime(Request $request, Entry $entry)
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

    public function destroy(Entry $entry)
    {
        if($entry->user_id != auth()->id())
        {
            abort(403, 'Unauthorized Action');
        }

        $entry->delete();

        return redirect('/dashboard/entries');
    }
}

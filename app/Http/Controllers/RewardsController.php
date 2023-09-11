<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Reward;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RewardsController extends Controller
{
    public function index()
    {
        $rewards = Reward::where('user_id', auth::id())->get();

        return view('pages.dashboard.reward.index', [
            'rewards' => $rewards
        ]);
    }

    public function create()
    {
        return view('pages.dashboard.reward.new');
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => ['string', 'required', 'min:3', 'max:40'],
            'cooldown' => ['integer', 'required', 'min:0', 'max:43800'],
            'cost' => ['integer', 'required', 'min:0', 'max:9000']
        ]);

        $formFields['user_id'] = Auth::id();

        Reward::create($formFields);

        return redirect('/dashboard/rewards');
    }
}

<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Plan;

class SiteController extends Controller
{
    public function index() {

        $plans = Plan::with('details')->orderBy('price', 'ASC')->get();

        return view('site.pages.home.index', compact('plans'));
    }

    public function plan($urlPlan) {

        if (!$plan = Plan::where('url', $urlPlan)->first()) {
            return redirect()->back();
        }

        session()->put('plan', $plan);

        return redirect()->route('register');
    }
}

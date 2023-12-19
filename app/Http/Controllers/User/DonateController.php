<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Donate;
use Illuminate\Http\Request;

class DonateController extends Controller
{
    public function __invoke()
    {
        $stats = Donate::query()->where('amount', '>', 100)->count();

        $stats = Donate::query()->sum('amount');

        $stats = [
            'total_count'  => Donate::query()->count(),
            'total_amount' => Donate::query()->sum('amount'),
            'avg_amount'   => Donate::query()->avg('amount'),
            'min_amount'   => Donate::query()->min('amount'),
            'max_amount'   => Donate::query()->max('amount'),
        ];

        $stats = Donate::query()
            ->selectRaw('count(*) as total_count')
            ->selectRaw('sum(amount)')
            ->get();

        return view('user.donates.index', compact('stats'));
    }
}

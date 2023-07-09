<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Prediction;
use Illuminate\Http\Request;

class PredictionController extends Controller
{
    public function index() {
        $predictions = Prediction::paginate(20);
        $excellent = Prediction::where('prediction', 'excellent')->count();
        $best = Prediction::where('prediction', 'best')->count();
        $very_good = Prediction::where('prediction', 'very good')->count();
        $good = Prediction::where('prediction', 'good')->count();
        $average = Prediction::where('prediction', 'average')->count();
        $fair = Prediction::where('prediction', 'fair')->count();
        $bad = Prediction::where('prediction', 'bad')->count();

        return view('admin.components.prediction.index', compact('predictions', 'excellent', 'best', 'very_good', 'good', 'average', 'fair', 'bad'));
    }
}

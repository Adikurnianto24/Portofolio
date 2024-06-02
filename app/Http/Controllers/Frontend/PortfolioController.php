<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;

class PortfolioController extends Controller
{
    public function show($id)
    {
        $portfolio = Portfolio::find($id);

        if (!$portfolio) {
            return redirect('/')->with('error', 'Portofolio tidak ditemukan.');
        }

        // Tentukan tampilan berdasarkan ID
        switch ($id) {
            case 1:
                $portfolio->RecyclerApp1 = 'recyclerview1.png';
                $portfolio->RecyclerApp2 = 'recyclerview2.png';
                $portfolio->RecyclerApp3 = 'recyclerview3.png';
                $portfolio->RecyclerApp4 = 'recyclerview4.png';
                $portfolio->RecyclerApp5 = 'recyclerview5.png';
                $portfolio->RecyclerApp6 = 'recyclerview6.png';
                $view = 'portfolio.details1';
                break;
            case 2:
                $portfolio->Github1 = 'Github1.png';
                $portfolio->Github2 = 'Github2.png';
                $portfolio->Github3 = 'Github3.png';
                $portfolio->Github4 = 'Github4.png';
                $portfolio->Github5 = 'Github5.png';
                $portfolio->Github6 = 'Github6.png';
                $portfolio->Github7 = 'Github7.png';
                $portfolio->Github8 = 'Github8.png';
                $portfolio->Github9 = 'Github9.png';
                $portfolio->Github10 = 'Github10.png';
                $portfolio->Github11 = 'Github11.png';
                $portfolio->Github12 = 'Github12.png';
                $portfolio->Github13 = 'Github13.png';
                $view = 'portfolio.details2';
                break;
            case 3:
                $portfolio->CancerScan1 = 'CancerScan1.png';
                $portfolio->CancerScan2 = 'CancerScan2.png';
                $portfolio->CancerScan3 = 'CancerScan3.png';
                $portfolio->CancerScan4 = 'CancerScan4.png';
                $portfolio->CancerScan5 = 'CancerScan5.png';
                $portfolio->CancerScan6 = 'CancerScan6.png';
                $portfolio->CancerScan7 = 'CancerScan7.png';
                $portfolio->CancerScan8 = 'CancerScan8.png';
                $portfolio->CancerScan9 = 'CancerScan9.png';
                $portfolio->CancerScan10 = 'CancerScan10.png';
                $portfolio->CancerScan11 = 'CancerScan11.png';
                $portfolio->CancerScan12 = 'CancerScan12.png';
                $portfolio->CancerScan13 = 'CancerScan13.png';
                $view = 'portfolio.details3';
                break;
            case 4:
                $portfolio->StoryScape1 = 'StoryScape1.png';
                $portfolio->StoryScape2 = 'StoryScape2.png';
                $portfolio->StoryScape3 = 'StoryScape3.png';
                $portfolio->StoryScape4 = 'StoryScape4.png';
                $portfolio->StoryScape5 = 'StoryScape5.png';
                $portfolio->StoryScape6 = 'StoryScape6.png';
                $portfolio->StoryScape7 = 'StoryScape7.png';
                $portfolio->StoryScape8 = 'StoryScape8.png';
                $portfolio->StoryScape9 = 'StoryScape9.png';
                $portfolio->StoryScape10 = 'StoryScape10.png';
                $portfolio->StoryScape11 = 'StoryScape11.png';
                $portfolio->StoryScape12 = 'StoryScape12.png';
                $portfolio->StoryScape13 = 'StoryScape13.png';
                $view = 'portfolio.details4';
                break;
            case 5:
                $portfolio->RukunWarga1 = 'RukunWarga1.png';
                $portfolio->RukunWarga2 = 'RukunWarga2.png';
                $portfolio->RukunWarga3 = 'RukunWarga3.png';
                $portfolio->RukunWarga4 = 'RukunWarga4.png';
                $portfolio->RukunWarga5 = 'RukunWarga5.png';
                $portfolio->RukunWarga6 = 'RukunWarga6.png';
                $portfolio->RukunWarga7 = 'RukunWarga7.png';
                $portfolio->RukunWarga8 = 'RukunWarga8.png';
                $portfolio->RukunWarga9 = 'RukunWarga9.png';
                $portfolio->RukunWarga10 = 'RukunWarga10.png';
                $portfolio->RukunWarga11 = 'RukunWarga11.png';
                $portfolio->RukunWarga12 = 'RukunWarga12.png';
                $portfolio->RukunWarga13 = 'RukunWarga13.png';
                $view = 'portfolio.details5';
                break;
            // Tambahkan case untuk ID lainnya
            default:
                return redirect('/')->with('error', 'Portofolio tidak ditemukan.');
        }

        return view($view, compact('portfolio'));
    }
}
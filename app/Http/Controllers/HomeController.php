<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\PortofolioModel;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['portofolio'] = PortofolioModel::all();
        return view('welcome', $data);
    }
}

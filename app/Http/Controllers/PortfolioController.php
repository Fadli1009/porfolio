<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Languages;
use App\Models\Resume;
use App\Models\Profile;
use App\Models\Projects;
use App\Models\Skil;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function header()
    {
        $data = Profile::first();
        $about = About::first();
        // dd($data);
        return view('portfolio.pages.about.about', compact('data', 'about'));
    }
    public function resume()
    {
        $resume = Resume::all();
        $skil = Skil::all();
        $lang = Languages::all();
        return view('portfolio.pages.resume.index', compact('resume', 'skil', 'lang'));
    }
    public function projects()
    {
        $project = Projects::all();
        return view('portfolio.pages.projects.index', compact('project'));
    }
    public function contact()
    {
        return view('portfolio.pages.contact.index');
    }
    public function contactFunc(Request $request)
    {
        $val = $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'isi' => 'required',
            'nomorHp' => 'required',
            'alamat' => 'required'
        ]);
        Contact::create($val);
        toastr()->success('Pesan anda berhasil terkirim');
        return redirect()->back();
    }
}

<?php
namespace App\Http\Controllers;
use App\Parti;
use Illuminate\Http\Request;
class PartiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $pagination = 9;

        $partis = Parti::orderBy('created_at','asc')->paginate($pagination);

        return view('parti')->with([
            'partis' => $partis
        ]);
    }

    public function show($id)
    {
        $partis = Parti::where('id', $id)->firstOrFail();
        return view('post')->with([
            'partis' => $partis,
        ]);
    }
}
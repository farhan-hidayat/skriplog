<?php

namespace App\Http\Controllers\Dashboard;

use Alert;
use App\Http\Controllers\Controller;
use App\Models\Faculty;
use App\Models\Major;
use App\Models\Thesis;
use Illuminate\Http\Request;

class ThesisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function skripsi()
    {
        if (request()->ajax()) {

            $query = Thesis::with('major')->where('category', 'Skripsi');
            $i = 1;

            return DataTables()->of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <div class="btn-group">
                            <div class="dropdown">
                                <button class="mb-1 mr-1 btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                                    Aksi
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="' . route('details', $item->id) . '">
                                        Sunting
                                    </a>
                                    <form action="' . route('destroy_skripsi', $item->id) . '" method="POST">
                                        ' . method_field('delete') . csrf_field() . '
                                        <button type="submit" class="dropdown-item text-danger" data-confirm-delete="true">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>';
                })
                ->addColumn('no', function ($item) use (&$i) {
                    return $i++;
                })
                ->rawColumns(['action', 'no'])
                ->make();
        }

        $title = 'Hapus Data!';
        $text = "Apakah Anda Yakin Ingin Menghapus Data?";
        confirmDelete($title, $text);


        return view('pages.dashboard.skripsi');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tesis()
    {
        if (request()->ajax()) {

            $query = Thesis::with('major')->where('category', 'Tesis');
            $i = 1;

            return DataTables()->of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <div class="btn-group">
                            <div class="dropdown">
                                <button class="mb-1 mr-1 btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                                    Aksi
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="' . route('details', $item->id) . '">
                                        Sunting
                                    </a>
                                    <form action="' . route('destroy_tesis', $item->id) . '" method="POST">
                                        ' . method_field('delete') . csrf_field() . '
                                        <button type="submit" class="dropdown-item text-danger" data-confirm-delete="true">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>';
                })
                ->addColumn('no', function ($item) use (&$i) {
                    return $i++;
                })
                ->rawColumns(['action', 'no'])
                ->make();
        }

        $title = 'Hapus Data!';
        $text = "Apakah Anda Yakin Ingin Menghapus Data?";
        confirmDelete($title, $text);

        return view('pages.dashboard.tesis');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'thesis' => Thesis::with('faculty', 'major')->find($id),
            'faculties' => Faculty::all(),
            'majors' => Major::all()
        ];
        return view('pages.dashboard.details', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroySkripsi($id)
    {
        Thesis::destroy($id);
        return redirect()->route('skripsi')->with('toast_success', 'Data Berhasil Dihapus');
    }

    public function destroyTesis($id)
    {
        Thesis::destroy($id);

        return redirect()->route('tesis')->with('toast_success', 'Data Berhasil Dihapus');
    }
}

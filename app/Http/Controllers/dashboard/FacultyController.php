<?php

namespace App\Http\Controllers\Dashboard;

use Alert;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Http\Requests\FacultyRequest;
use App\Models\Faculty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {

            $query = Faculty::query();
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
                                    <a class="dropdown-item" href="' . route('faculties.edit', $item->id) . '">
                                        Sunting
                                    </a>
                                    <a href="' . route('faculties.destroy', $item->id) . '" class="dropdown-item text-danger" data-confirm-delete="true">Hapus</a>
                                </div>
                            </div>
                        </div>';
                })
                ->editColumn('icons', function ($item) {
                    return $item->icons ? '<img src="' . Storage::url($item->icons) . '" style="max-height: 40px;" />' : '';
                })
                ->addColumn('no', function ($item) use (&$i) {
                    return $i++;
                })
                ->rawColumns(['action', 'icons', 'no'])
                ->make();
        }

        $title = 'Hapus Data!';
        $text = "Apakah Anda Yakin Ingin Menghapus Data?";
        confirmDelete($title, $text);

        return view('pages.dashboard.category.faculties.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.dashboard.category.faculties.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FacultyRequest $request)
    {
        $data = $request->all();
        // return $data;
        $data['slug'] = Str::slug($data['name']);

        $data['icons'] = $request->file('icons')->store(
            'assets/faculty',
            'public'
        );

        Faculty::create($data);

        return redirect()->route('faculties.index')->with('toast_success', 'Data Berhasil Ditambahkan');
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
    public function edit(Faculty $faculty)
    {
        return view('pages.dashboard.category.faculties.edit', compact('faculty'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FacultyRequest $request, Faculty $faculty)
    {
        $data = $request->all();

        if ($request->hasFile('icons')) {
            $path = $request->file('icons')->store(
                'assets/faculty',
                'public'
            );
        }

        $data = [
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'icons' => isset($path) ? $path : $faculty->icons
        ];

        $faculty->update($data);

        return redirect()->route('faculties.index')->with('toast_success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faculty $faculty)
    {
        $faculty->delete();

        return redirect()->route('faculties.index')->with('toast_success', 'Data Berhasil Dihapus');
    }
}

<?php

namespace App\Http\Controllers\Dashboard;

use Alert;
use App\Http\Controllers\Controller;
use App\Http\Requests\ThesisRequest;
use App\Mail\SendMail;
use App\Models\Faculty;
use App\Models\Major;
use App\Models\Thesis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
                                        Verifikasi
                                    </a>
                                    <a href="' . route('destroy_skripsi', $item->id) . '" class="dropdown-item text-danger" data-confirm-delete="true">Hapus</a>
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
                                        Verifikasi
                                    </a>
                                    <a href="' . route('destroy_tesis', $item->id) . '" class="dropdown-item text-danger" data-confirm-delete="true">Hapus</a>
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
        $data = $request->all();

        $thesis = Thesis::find($id);
        $thesis->update($data);

        if ($request->status == 'Publish') {
            $pesan = '<h1><p><b>Data sesuai dengan ketentuan</b></p></h1>';
            $pesan .= '<p>Silahkan periksa kembali data anda pada link berikut:</p>';
            $pesan .= '<p><a href="' . route('edit-upload', $request->no) . '">Verifikasi</a></p>';
            $data_email = [
                'massage' => $pesan,
            ];
            Mail::to($request->email)->send(new SendMail($data_email));
        } else {
            $pesan = '<h1><p><b>Data tidak sesuai dengan ketentuan</b></p></h1>';
            $pesan .= '<p>Silahkan periksa kembali data anda pada link berikut:</p>';
            $pesan .= '<p><a href="' . route('edit-upload', $request->no) . '">Verifikasi</a></p>';
            $data_email = [
                'massage' => $pesan
            ];
            Mail::to($request->email)->send(new SendMail($data_email));
        }

        return redirect()->route('dashboard')->with('toast_success', 'Data Berhasil Diubah');
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

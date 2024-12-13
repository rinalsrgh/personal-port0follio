<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class ProjectController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$project = DB::table('project')->get();
 
    	// mengirim data pegawai ke view index
    	return view('dashboard',['project' => $project]);
 
    }

	public function index1()
    {
        $project = DB::table('project')->get();
        return response()->json($project);
    }

    public function tambah()
    {
        return view('tambah');
    }

    public function store(Request $request)
    {
        DB::table('project')->insert([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'link' => $request->link,
            'image' => $request->image
        ]);
        return redirect('/project');
    }

    public function edit($id)
    {
        $project = DB::table('project')->where('id', $id)->get();
        return view('ubah', ['project' => $project]);
    }

    public function update(Request $request)
    {
        DB::table('project')->where('id', $request->id)->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'link' => $request->link,
            'image' => $request->image
        ]);
        return redirect('/project');
    }

    public function hapus($id)
    {
        DB::table('project')->where('id', $id)->delete();
        return redirect('/project');
    }
}
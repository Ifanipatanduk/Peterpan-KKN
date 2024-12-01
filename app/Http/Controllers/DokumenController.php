<?php

namespace App\Http\Controllers;
use App\Models\DokumenKegiatan;
use App\Models\laporanKegiatan;
use App\Models\LogbookKegiatan;
use App\Models\NilaiKKN;
use Illuminate\Http\Request;

class DokumenController extends Controller
{
    public function dokumen()
    {
        $dokumens = DokumenKegiatan::all(); // Data rencana kelompok
        $logbooks = LogbookKegiatan::all(); // Data logbook kelompok
        $laporans = LaporanKegiatan::all(); // Data laporan kelompok
        return view('layouts.dokumenKetua', compact('dokumens', 'logbooks', 'laporans'));
    }
    //rencana Ketua
    public function rencanaKetua()
    {
        $dokumens = DokumenKegiatan::all();
        return view('ketua.rencanaKetua', compact('dokumens')); 
    }

    public function formrencana()
    {
        return view('ketua.formrencana'); 
    }
    
    public function show($nama_file)
    {
        $path = storage_path('app/files/' . $nama_file);
        if (!file_exists($path)) {
            abort(404, 'File not found');
        }
        $fileContent = file_get_contents($path);
        return response($fileContent, 200)->header('Content-type', 'application/pdf');
    }
    
    public function simpan(Request $request)
    {
        $validasi = $request->validate([
            'judul' => 'required', 
            'deskripsi' => 'required',
            'file' => 'required|file',
        ]);
        $uploadedFile = $request->file('file');
        $filePath = $uploadedFile->storeAs('files', $uploadedFile->getClientOriginalName()); 

        DokumenKegiatan::create([
            'Judul' => $validasi['judul'],
            'Deskripsi' => $validasi['deskripsi'],
            'File' => $filePath,
            'nama_asli' => $uploadedFile->getClientOriginalName(),            
        ]);
        return redirect()->route('DokumenController.rencanaKetua')->with('success', 'Rencana Kegiatan Berhasil Disimpan!');
    }

    public function deletedokumen($id)
    {
        $dokumens = DokumenKegiatan::find($id);
        if (!$dokumens) {
            return redirect()->back()->with('alert', 'Rencana Kegiatan tidak ditemukan!');
        }
        if ($dokumens->file) {
            Storage::disk('public')->delete($dokumens->file);
        }
        $dokumens->delete();
        return redirect()->route('DokumenController.rencanaKetua')->with('alert', 'Rencana Kegiatan Berhasil Dihapus!');
    }

    //laporan ketua 

    public function laporanKetua()
    {
        $dokumens = LaporanKegiatan::all();
        return view('ketua.laporanketua', compact('dokumens')); 
    }

    public function formlaporan()
    {
        return view('ketua.formlaporan');
    }

    public function simpanLaporan(Request $request)
    {
        $validasi = $request->validate([
            'judul' => 'required', 
            'deskripsi' => 'required',
            'file' => 'required|file',
        ]);
        $uploadedFile = $request->file('file');
        $filePath = $uploadedFile->storeAs('files', $uploadedFile->getClientOriginalName()); 

        LaporanKegiatan::create([
            'Judul' => $validasi['judul'],
            'Deskripsi' => $validasi['deskripsi'],
            'File' => $filePath,
            'nama_asli' => $uploadedFile->getClientOriginalName(),
        ]);
        return redirect()->route('DokumenController.laporanKetua')->with('success', 'Rencana Kegiatan Berhasil Disimpan!');
    }

    public function deleteLaporan($id)
    {
        $dokumens = LaporanKegiatan::find($id);
        if (!$dokumens)
        {
            return redirect()->back()->with('alert', "Laporan Kegiatan Tidak Ditemukan!");
        }
        if ($dokumens->file)
        {
            Storage::disk('public')->delete($dokumens->file);
        }
        $dokumens->delete();
        return redirect()->route('DokumenController.laporanKetua')->with('alert', 'Laporan Kegiatan Berhasil Dihapus!');
    }    

    //logbook ketua
    public function logbookketua()
    {
        $dokumens = LogbookKegiatan::all();
        return view('ketua.logbookketua', compact('dokumens'));
    }

    public function formlogbook()
    {
        return view('ketua.formlogbook');
    }    

    public function simpanlogbook(Request $request)
    {
        $validasi = $request->validate([
            'tanggal' => 'required',
            'waktu_mulai' => 'required',
            'waktu_selesai' => 'required',
            'deskripsi' => 'required',
        ]);
    
        LogbookKegiatan::create([
            'tanggal_kegiatan' => $validasi['tanggal'], 
            'waktu_mulai' => $validasi['waktu_mulai'],
            'waktu_selesai' => $validasi['waktu_selesai'],
            'deskripsi' => $validasi['deskripsi'],
        ]);        
        return redirect()->route('DokumenController.logbookketua')->with('success', 'Logbook Kegiatan Berhasil Disimpan!');
    }

    public function deleteLogbook($id)
    {
        $dokumens = LogbookKegiatan::find($id);
        if (!$dokumens) {
            return redirect()->back()->with('alert', "Logbook Kegiatan tidak ditemukan!");
        }
        if ($dokumens->file) {
            Storage::disk('public')->delete($dokumens->file);
        }
        $dokumens->delete();
        return redirect()->route('DokumenController.logbookketua')->with('alert', 'Logbook Kegiatan Berhasil Dihapus!');
    } 

    //nilaiKKN 
    public function nilaiKKN()
    {
        $dokumens = NilaiKKN::all();
        return view('dosen.nilaiKKN', compact('dokumens'));
    }

    public function formNilai()
    {
        return view('dosen.formNilai');
    }

    public function simpanNilai(Request $request)
    {
        $validasi = $request->validate([
            'nilai' => 'required', 
        ]);
        DokumenKegiatan::create([
            'Nilai' => $validasi['nilai'],    
        ]);
        return redirect()->route('DokumenController.nilaiKKN')->with('success', 'Nilai KKN Berhasil Disimpan!');
    }
}

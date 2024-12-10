<?php

namespace App\Http\Controllers;
use App\Models\RencanaKegiatan;
use App\Models\laporanKegiatan;
use App\Models\LogbookKegiatan;
use App\Models\NilaiKKN;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\JenisKKN;
use App\Models\KelompokKKN;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DokumenController extends Controller
{

    //Ketua Kelompok
    public function dashboardketua()
    {
        return view('ketua.dashboardketua'); 
    }
    
    public function dokumenKetuaKelompok()
    {
        return view('ketua.dokumenKetuaKelompok');
    }
    
    //rencana ketua
    public function rencanaKetua()
    {
        $dokumens = RencanaKegiatan::all();
        return view('ketua.rencanaKetua', compact('dokumens')); 
    }

    public function formrencana()
    {
        return view('ketua.formrencana'); 
    }
    
    public function show($id)
    {
        $dokumen = RencanaKegiatan::findOrFail($id);
        $filePath = 'app/public/' . $dokumen->File; // Tambahkan path lengkap
    
        if (file_exists(storage_path($filePath))) {
            return response()->file(storage_path($filePath));
        }
    
        return abort(404, 'File tidak ditemukan.');
    }

    
    public function simpan(Request $request)
    {
        $validasi = $request->validate([
            'judul' => 'required', 
            'deskripsi' => 'required',
            'file' => 'required|file',
        ]);

        $uploadedFile = $request->file('file');
        $filePath = $uploadedFile->storeAs('files', $uploadedFile->getClientOriginalName(), 'public');

        RencanaKegiatan::create([
            'Judul' => $validasi['judul'],
            'Deskripsi' => $validasi['deskripsi'],
            'File' => $filePath, // Simpan tanpa "public/"
            'Nama_asli' => $uploadedFile->getClientOriginalName(),            
        ]);

        return redirect()->route('DokumenController.rencanaKetua')->with('success', 'Rencana Kegiatan Berhasil Disimpan!');
    }

    // public function simpan(Request $request)
    // {
    //     $validasi = $request->validate([
    //         'judul' => 'required', 
    //         'deskripsi' => 'required',
    //         'file' => 'required|file',
    //     ]);
    //     $uploadedFile = $request->file('file');
    //     $filePath = $uploadedFile->storeAs('files', $uploadedFile->getClientOriginalName());

    //     RencanaKegiatan::create([
    //         'Judul' => $validasi['judul'],
    //         'Deskripsi' => $validasi['deskripsi'],
    //         'File' => $filePath,
    //         'Nama_asli' => $uploadedFile->getClientOriginalName(),            
    //     ]);
    //     return redirect()->route('DokumenController.rencanaKetua')->with('success', 'Rencana Kegiatan Berhasil Disimpan!');
    // }

    public function deletedokumen($id_rencana)
    {
        $dokumens = RencanaKegiatan::find($id_rencana);
        if (!$dokumens) {
            return redirect()->back()->with('alert', 'Rencana Kegiatan tidak ditemukan!');
        }
        if ($dokumens->file) {
            Storage::disk('public')->delete($dokumens->file);
        }
        $dokumens->delete();
        return redirect()->route('DokumenController.rencanaKetua')->with('alert', 'Rencana Kegiatan Berhasil Dihapus!');
    }

    //lihat rencana
        public function lihatRencana($id_kelompok)
        {
            $rencana = RencanaKegiatan::where('id_kelompok', $id_kelompok)->get();
            return view('rencana.index', compact('rencana'));
        }

    //laporan ketua 
    public function laporanKetua()
    {
        $dokumens = LaporanKegiatan::all();
        return view('ketua.laporanKetua', compact('dokumens')); 
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
            'Nama_asli' => $uploadedFile->getClientOriginalName(),
        ]);
        return redirect()->route('DokumenController.laporanKetua')->with('success', 'Rencana Kegiatan Berhasil Disimpan!');
    }

    public function deleteLaporan($id_laporan)
    {
        $dokumens = LaporanKegiatan::find($id_laporan);
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
        return view('ketua.logbookKetua', compact('dokumens'));
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
            'Tanggal_kegiatan' => $validasi['tanggal'], 
            'Waktu_mulai' => $validasi['waktu_mulai'],
            'Waktu_selesai' => $validasi['waktu_selesai'],
            'Deskripsi' => $validasi['deskripsi'],
        ]);        
        return redirect()->route('DokumenController.logbookketua')->with('success', 'Logbook Kegiatan Berhasil Disimpan!');
    }

    public function deleteLogbook($id_logbook)
    {
        $dokumens = LogbookKegiatan::find($id_logbook);
        if (!$dokumens) {
            return redirect()->back()->with('alert', "Logbook Kegiatan tidak ditemukan!");
        }
        if ($dokumens->file) {
            Storage::disk('public')->delete($dokumens->file);
        }
        $dokumens->delete();
        return redirect()->route('DokumenController.logbookketua')->with('alert', 'Logbook Kegiatan Berhasil Dihapus!');
    } 

    //Dosen - NilaiKKN 
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
        NilaiKKN::create([
            'Nilai' => $validasi['nilai'],    
        ]);
        return redirect()->route('DokumenController.nilaiKKN')->with('success', 'Nilai KKN Berhasil Disimpan!');
    }

    //Admin
    //Data Dosen
    public function dashboardAdmin()
    {
        return view ('admin.dashboardAdmin');
    }

    public function datadosen()
    {
        $dokumens = Dosen::all();
        return view('admin.datadosen', compact('dokumens'));
    }

    public function formtambahdosen()
    {
        return view('admin.formtambahdosen');
    }

    public function simpandosen(Request $request)
    {
        $validasi = $request->validate([
            'nama_dosen' => 'required',
            'email' => 'required',
            'kontak' => 'required',
            'jenis_kelamin' => 'required',
            'fakultas' => 'required',
        ]);
        
        Dosen::create([
            'Nama' => $validasi['nama_dosen'],
            'Email' => $validasi['email'],
            'Kontak' => $validasi ['kontak'],
            'Jenis_kelamin' => $validasi ['jenis_kelamin'],
            'Fakultas' => $validasi ['fakultas'],
        ]);
        return redirect()->route('DokumenController.datadosen')->with('success', 'Data Dosen Berhasil Disimpan!');
    }

    public function deletedatadosen($id_dosen)
    {
        $dokumens = Dosen::find($id_dosen);
        if (!$dokumens) {
            return redirect()->back()->with('alert', "Data Dosen Kegiatan tidak ditemukan!");
        }
        if ($dokumens->file) {
            Storage::disk('public')->delete($dokumens->file);
        }
        $dokumens->delete();
        return redirect()->route('DokumenController.datadosen')->with('success', 'Data Dosen Berhasil Disimpan!');
    } 

    //Data Mahasiswa
    public function datamahasiswa()
    {
        $dokumens = Mahasiswa::all();
        return view ('admin.datamahasiswa', compact('dokumens'));
    }

    public function formtambahmahasiswa()
    {
        return view('admin.formtambahmahasiswa');
    }

    public function simpanmahasiswa(Request $request)
    {
        $validasi = $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'email' => 'required', 
            'kontak' => 'required', 
            'jenis_kelamin' => 'required', 
            'prodi' => 'required', 
            'fakultas' => 'required', 
        ]);

        Mahasiswa::create([
            'nim' => $validasi['nim'],
            'Nama' => $validasi['nama'],
            'Email' => $validasi['email'],
            'Kontak' => $validasi['kontak'],
            'Jenis_kelamin' => $validasi['jenis_kelamin'],
            'Prodi' => $validasi['prodi'],
            'Fakultas' => $validasi['fakultas'],
        ]);
        return redirect()->route('DokumenController.datamahasiswa')->with('success', "Data Mahasiswa Berhasil Ditambahkan");
    }

    public function deletemahasiswa($nim)
    {
        $dokumens = Mahasiswa::find($nim);
        if (!$dokumens) {
            return redirect()->back()->with('alert', "Data mahasiswa Kegiatan tidak ditemukan!");
        }
        if ($dokumens->file) {
            Storage::disk('public')->delete($dokumens->file);
        }
        $dokumens->delete();
        return redirect()->route('DokumenController.datamahasiswa')->with('success', 'Data Mahasiswa Berhasil Disimpan!');
    }

    //JenisKKN
    public function jenisKKN()
    {
        $dokumens = JenisKKN::all();
        return view('admin.jenisKKN', compact('dokumens'));
    }

    public function formtambahKKN()
    {
        return view('admin.formtambahKKN');
    }

    public function simpanKKN(Request $request)
        {
            $validasi = $request->validate([
                'jenis' => 'required',
                'deskripsi' => 'required',
                'wilayah' => 'required',
                'provinsi' => 'required',
                'kabupaten' => 'required',
                'kecamatan' => 'required',
                'kelurahan' => 'required',
                'tanggal_mulai' => 'required|date',
                'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
            ]);

            JenisKKN::create([
                'Jenis' => $validasi['jenis'],
                'Deskripsi' => $validasi['deskripsi'],
                'Wilayah' => $validasi['wilayah'],
                'Provinsi' => $validasi['provinsi'],
                'Kabupaten' => $validasi['kabupaten'],
                'Kecamatan' => $validasi['kecamatan'],
                'Kelurahan' => $validasi['kelurahan'],
                'Tanggal_mulai' => $validasi['tanggal_mulai'],
                'Tanggal_selesai' => $validasi['tanggal_selesai'],
            ]);
            return redirect()->route('DokumenController.jenisKKN')->with('success', "Jenis KKN Berhasil Ditambahkan");
        }

    public function deleteKKN($id_kkn)
    {
        $dokumens = JenisKKN::find($id_kkn);
        if (!$dokumens) {
            return redirect()->back()->with('alert', "Jenis KKN tidak ditemukan!");
        }
        if ($dokumens->file) {
            Storage::disk('public')->delete($dokumens->file);
        }
        $dokumens->delete();
        return redirect()->route('DokumenController.jenisKKN')->with('success', 'Jenis KKN Berhasil Disimpan!');
    }

    // form tambah kelompok
    public function kelompokKKN()
    {
        $dokumens = KelompokKKN::all();
        return view('admin.kelompokKKN', compact('dokumens'));
    }

    public function formtambahkelompok()
    {
        $jenisKKNList =JenisKKN::all();
        $dosenList = Dosen::all();
        return view('admin.formtambahkelompok', compact('jenisKKNList', 'dosenList'));
    }
    
    public function simpanDataKelompok(Request $request)
    {
        $validasi = $request->validate([
            'nama_kelompok' => 'required',
            'nama_dosen' => 'required',
            'jenis' => 'required',
            'wilayah' => 'required',
            'provinsi' => 'required',
            'kabupaten' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
        ]);

        KelompokKKN::create([
            'Nama' => $validasi['nama_kelompok'],
            'id_dosen' => $validasi['nama_dosen'],
            'Wilayah' => $validasi['wilayah'],
            'Provinsi' => $validasi['provinsi'],
            'Kabupaten' => $validasi['kabupaten'],
            'Kecamatan' => $validasi['kecamatan'],
            'Kelurahan' => $validasi['kelurahan'],
        ]);
        return redirect()->route('DokumenController.kelompokKKN')->with('success', "Jenis KKN Berhasil Ditambahkan");
    }
}


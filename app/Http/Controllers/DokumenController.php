<?php

namespace App\Http\Controllers;
use App\Models\semesterAktif;
use App\Models\RencanaKegiatan;
use App\Models\laporanKegiatan;
use App\Models\LogbookKegiatan;
use App\Models\NilaiKKN;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\JenisKKN;
use App\Models\KelompokKKN;
use App\Models\AnggotaKelompok;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DokumenController extends Controller
{
    //UBAH PASSWORD
    public function ubahPassword()
    {
        return view('layouts.ubahPassword');
    }

    //DASHBOARD KETUA
    public function dashboardketua()
    {
        return view('ketua.dashboardketua'); 
    }

    //MENU DASHBOARD KETUA KELOMPOK
    public function dokumenKetuaKelompok()
    {
        $rencanas = RencanaKegiatan::all();
        $logbooks = LogbookKegiatan::all();
        $laporans = LaporanKegiatan::all();
        return view('ketua.dokumenKetuaKelompok', compact('rencanas', 'logbooks', 'laporans'));
    }

    public function dokumenAnggota()
    {
        $rencanas = RencanaKegiatan::all();
        $logbooks = LogbookKegiatan::all();
        $laporans = LaporanKegiatan::all();
        return view('anggota.dokumenAnggota', compact('rencanas', 'logbooks', 'laporans'));
    }
    
    public function dokumenDosen()
    {
        $rencanas = RencanaKegiatan::all();
        $logbooks = LogbookKegiatan::all();
        $laporans = LaporanKegiatan::all();
        return view('dosen.dokumenDosen', compact('rencanas', 'logbooks', 'laporans'));
    }
    
    public function dokumenAdmin()
    {
        $rencanas = RencanaKegiatan::all();
        $logbooks = LogbookKegiatan::all();
        $laporans = LaporanKegiatan::all();
        return view('admin.dokumenAdmin', compact('rencanas', 'logbooks', 'laporans'));
    }
    
    //MENU RENCANA KETUA KELOMPOK
    public function rencanaKetua()
    {
        $rencanas = RencanaKegiatan::all(); 
        return view('ketua.dokumenKetuaKelompok', compact('rencanas'));  
    }
    
    public function formrencana()
    {
        return view('ketua.formrencana'); 
    }

    public function editRencana($id_rencana)
    {
        $rencana = RencanaKegiatan::findOrFail($id_rencana);
        return view('ketua.editRencana', compact('rencana'));
    }    

    public function updateRencana(Request $request, $id_rencana)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'file' => 'required', 
        ]);
    
        $rencana = RencanaKegiatan::findOrFail($id_rencana);
        $rencana->Judul = $request->judul;
        $rencana->Deskripsi = $request->deskripsi;
    
        if ($request->hasFile('file')) {
            if ($rencana->File) {
                Storage::disk('public')->delete($rencana->File);
            }
    
            $uploadedFile = $request->file('file');
            $filePath = $uploadedFile->storeAs('files', $uploadedFile->getClientOriginalName(), 'public');
            $rencana->File = $filePath;
            $rencana->Nama_asli = $uploadedFile->getClientOriginalName();
        }
        $rencana->save();

        return redirect()->route('DokumenController.dokumenKetuaKelompok')->with('alert', 'Rencana Kelompok Berhasil Diupdate');
    }
    

    public function show($id)
    {
        $rencana = RencanaKegiatan::find($id) ?? LaporanKegiatan::find($id);

        if (!$rencana) {
            return abort(404, 'Dokumen tidak ditemukan.');
        }

        $filePath = storage_path('app/public/' . $rencana->File);

        if (file_exists($filePath)) {
            return response()->file($filePath, [
                'Content-Disposition' => 'inline',
            ]);
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
            'File' => $filePath, 
            'Nama_asli' => $uploadedFile->getClientOriginalName(),            
        ]);

        return redirect()->route('DokumenController.dokumenKetuaKelompok')->with('success', 'Rencana Kegiatan Berhasil Disimpan!');
    }

    public function deleteRencana($id_rencana)
    {
        $rencanas = RencanaKegiatan::find($id_rencana);
        if (!$rencanas) {
            return redirect()->back()->with('alert', 'Rencana Kegiatan tidak ditemukan!');
        }
        if ($rencanas->file) {
            Storage::disk('public')->delete($rencanas->file);
        }
        $rencanas->delete();
        return redirect()->route('DokumenController.dokumenKetuaKelompok')->with('alert', 'Rencana Kegiatan Berhasil Dihapus!');
    }
    

    //LAPORAN KETUA KELOMPOK
    public function laporanketua()
    {
        $laporans = LogbookKegiatan::all();
        return view('ketua.dokumenKetuaKelompok', compact('laporans'));
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
        $filePath = $uploadedFile->storeAs('files', $uploadedFile->getClientOriginalName(), 'public');

        LaporanKegiatan::create([
            'Judul' => $validasi['judul'],
            'Deskripsi' => $validasi['deskripsi'],
            'File' => $filePath, 
            'Nama_asli' => $uploadedFile->getClientOriginalName(),            
        ]);

        return redirect()->route('DokumenController.dokumenKetuaKelompok')->with('success', 'Laporan Kegiatan Berhasil Disimpan!');
    }


    public function editLaporan($id_laporan)
    {
        $laporan = LaporanKegiatan::findOrFail($id_laporan);
        return view('ketua.editLaporan', compact('laporan'));
    }

    public function updateLaporan(Request $request, $id_laporan)
    {
        $request->validate([
            'judul'=>'required', 
            'deskripsi'=>'required', 
            'file'=>'required', 
        ]);

        $laporan= LaporanKegiatan::findOrFail($id_laporan);
        $laporan->Judul = $request->judul;
        $laporan->Deskripsi = $request->deskripsi;
        $laporan->Nama_asli = $request->file;
        $laporan->save();

        return redirect()->route('DokumenController.dokumenKetuaKelompok', $id_laporan)->with('alert', 'Laporan Kegiatan Berhasil Ditambahkan');
    }

    public function deleteLaporan($id_laporan)
    {
        $laporans = LaporanKegiatan::find($id_laporan);
        if (!$laporans)
        {
            return redirect()->back()->with('alert', "Laporan Kegiatan Tidak Ditemukan!");
        }
        if ($laporans->file)
        {
            Storage::disk('public')->delete($laporans->file);
        }
        $laporans->delete();
        return redirect()->route('DokumenController.dokumenKetuaKelompok')->with('alert', 'Laporan Kegiatan Berhasil Dihapus!');
    }    

    //LOGBOOK KETUA KELOMPOK
    public function logbookketua()
    {
        $logbooks = LogbookKegiatan::all();
        return view('ketua.dokumenKetuaKelompok', compact('logbooks'));
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
        return redirect()->route('DokumenController.dokumenKetuaKelompok')->with('success', 'Logbook Kegiatan Berhasil Disimpan!');
    }

    public function editLogbook($id_logbook)
    {
        $logbook = LogbookKegiatan::findOrFail($id_logbook);
        return view('ketua.editLogbook', compact('logbook'));
    }

    public function updateLogbook(Request $request, $id_logbook)
    {
        $request->validate([
            'tanggal' => 'required',
            'waktu_mulai' => 'required',
            'waktu_selesai' => 'required',
            'deskripsi' => 'required',
        ]);

        $logbook = LogbookKegiatan::findOrFail($id_logbook);
        $logbook->Tanggal_kegiatan = $request->tanggal;
        $logbook->Waktu_mulai = $request->waktu_mulai;
        $logbook->Waktu_selesai = $request->waktu_selesai;
        $logbook->Deskripsi = $request->deskripsi;
        $logbook->save();

        return redirect()->route('DokumenController.dokumenKetuaKelompok')->with('alert', 'Logbook Kegiatan Berhasil Diperbarui');
    }

    public function deleteLogbook($id_logbook)
    {
        $logbook = LogbookKegiatan::find($id_logbook);
        if (!$logbook) {
            return redirect()->back()->with('alert', 'Logbook tidak ditemukan!');
        }
        $logbook->delete();
        return redirect()->route('DokumenController.dokumenKetuaKelompok')->with('alert', 'Logbook berhasil dihapus!');
    }
    

    //HALAMAN DOSEN
    public function dataAnggotaKelompok()
    {
        $anggotaKelompok = AnggotaKelompok::with('mahasiswa')->get();
        return view('dosen.dataAnggotaKelompok', compact('anggotaKelompok'));
    }
    
    //Dosen - NilaiKKN 
    public function nilaiKKN()
    {
        $anggotaKelompok = AnggotaKelompok::with(['mahasiswa', 'nilaiKKN'])->get();
        return view('dosen.nilaiKKN', compact('anggotaKelompok'));
    }

    public function formNilai($nim)
    {
        $nilaiKKN = NilaiKKN::all();
        $anggota = AnggotaKelompok::with('mahasiswa')->where('nim', $nim)->firstOrFail();
        return view('dosen.formNilai', compact( 'nilaiKKN', 'anggota'));
    }

    public function simpanNilai(Request $request)
    {
        $validatedData = $request->validate([
            'nim' => 'required|exists:anggota_kelompok,nim',
            'nilai' => 'required', 
        ]);
    
        $anggota = AnggotaKelompok::where('nim', $validatedData['nim'])->firstOrFail();
    
        $nilaiKKN = NilaiKKN::create([
            'Nilai' => $validatedData['nilai'],
        ]);
    
        return redirect()->route('DokumenController.nilaiKKN')->with('success', 'Nilai KKN berhasil disimpan.');
    }
    

    //ADMIN 
    //MENU RENCANA KETUA KELOMPOK
    public function semesterAktif()
    {
        $semesters = SemesterAktif::all(); 
        return view('admin.semesterAktif', compact('semesters'));  
    }

    public function formSemester()
    {
        return view('admin.formSemester');
    }

    public function simpanSemester(Request $request)
    {
        $validasi = $request->validate([
            'nama' => 'required',
        ]);
        
        semesterAktif::create([
            'Nama' => $validasi['nama'],
        ]);
        return redirect()->route('DokumenController.semesterAktif')->with('success', 'Data Semester Berhasil Disimpan!');
    }

    public function deleteSemester($id_semester)
    {
        $semesters = SemesterAktif::find($id_semester);
        if (!$semesters) {
            return redirect()->back()->with('alert', "Data Semester tidak ditemukan!");
        }
        $semesters->delete();
        return redirect()->route('DokumenController.semesterAktif')->with('alert', 'Data Semester Berhasil Dihapus!');

    }

    public function dokumenKelompokAdmin()
    {
        $rencanas = RencanaKegiatan::all();
        $logbooks = LogbookKegiatan::all();
        $laporans = LaporanKegiatan::all();
        return view ('admin.dokumenKelompokAdmin', compact('rencanas', 'logbooks', 'laporans'));
    }

    public function editSemester($id_semester)
    {
        $semesters = SemesterAktif::findOrFail($id_semester);
        return view('admin.editSemester', ['semester' => $semesters]);
    }

    public function updateSemester(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
        ]);
    
        $semester = SemesterAktif::findOrFail($id); 
        $semester->Nama = $request->nama;
        $semester->save();
    
        return redirect()->route('DokumenController.semesterAktif')->with('success', 'Data Semester Berhasil Diupdate!');
    }
    

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

    public function editDosen($id_dosen)
    {
        $dokumens = Dosen::findOrFail($id_dosen);
        return view('admin.editDosen', ['dokumen' => $dokumens]);
    }


    public function updateDosen(Request $request, $id_dosen)
    {
        $request->validate([
            'nama_dosen' => 'required|string|max:255',
            'email' => 'required|email',
            'kontak' => 'required|string|max:15',
            'jenis_kelamin' => 'required|in:Laki-Laki,Perempuan',
            'fakultas' => 'required|string',
        ]);

        $dokumen = Dosen::findOrFail($id_dosen);
        $dokumen->Nama = $request->nama_dosen;
        $dokumen->Email = $request->email;
        $dokumen->Kontak = $request->kontak;
        $dokumen->Jenis_kelamin = $request->jenis_kelamin;
        $dokumen->Fakultas = $request->fakultas;
        $dokumen->save();

      return redirect()->route('DokumenController.datadosen', $id_dosen)->with('alert', 'Data Dosen Berhasil Diupdate!');
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
        return redirect()->route('DokumenController.datadosen')->with('success', 'Data Dosen Berhasil Dihapus!');
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
    
    public function editMahasiswa($nim)
    {
        $dokumens = Mahasiswa::findOrFail($nim);
        return view('admin.editMahasiswa', ['dokumen' => $dokumens]);
    }

    public function updateMahasiswa(Request $request, $nim)
    {
        $request->validate([
            'nama'=> 'required', 
            'email' => 'required', 
            'kontak' => 'required', 
            'jenis_kelamin' => 'required', 
            'prodi' => 'required', 
            'fakultas' => 'required',
        ]);

        $dokumen = Mahasiswa::findOrFail($nim);
        $dokumen->Nama = $request->nama;
        $dokumen->Email = $request->email;
        $dokumen->Kontak = $request->kontak;
        $dokumen->Jenis_kelamin = $request->jenis_kelamin;
        $dokumen->Prodi = $request->prodi;
        $dokumen->Fakultas = $request->fakultas;
        $dokumen->save();

        return redirect()->route('DokumenController.datamahasiswa', $nim)->with('alert', 'Data Mahasiswa Berhasil Diupdate');
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
        $semesterList = SemesterAktif::all();
        return view('admin.formtambahKKN', compact('semesterList'));
    }

    public function simpanKKN(Request $request)
        {
            $validasi = $request->validate([
                'jenis' => 'required',
                'semester' => 'required',
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
                'Semester' => $validasi['semester'],
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

    // public function editJenisKKN($id_kkn)
    // {
    //     $dokumen = JenisKKN::findOrFail($id_kkn);  
    //     return view('admin.jenisKKN', ['dokumen' => $dokumen]);
    // }
        
    // public function updateJenisKKN(Request $request, $id_kkn)
    // {
    //     $request->validate([
    //         'jenis' => 'required', 
    //         'deskripsi' => 'required', 
    //         'wilayah' => 'required', 
    //         'provinsi' => 'required', 
    //         'kabupaten' => 'required', 
    //         'kelurahan' => 'required', 
    //         'kecamatan' => 'required', 
    //         'tanggal_mulai' => 'required', 
    //         'tanggal_selesai' => 'required',
    //     ]);
    
    //     $dokumen = JenisKKN::findOrFail($id_kkn);  
    //     $dokumen->Jenis = $request->jenis;
    //     $dokumen->Deskripsi = $request->deskripsi;
    //     $dokumen->Wilayah = $request->wilayah;
    //     $dokumen->Provinsi = $request->provinsi;
    //     $dokumen->Kabupaten = $request->kabupaten;
    //     $dokumen->Kelurahan = $request->kelurahan;
    //     $dokumen->Kecamatan = $request->kecamatan;
    //     $dokumen->Tanggal_mulai = $request->tanggal_mulai;
    //     $dokumen->Tanggal_selesai = $request->tanggal_selesai;
    //     $dokumen->save();  
    
    //     return redirect()->route('DokumenController.jenisKKN')->with('alert', 'Jenis KKN Berhasil Diupdate');
    // }    

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
        return redirect()->route('DokumenController.jenisKKN')->with('success', 'Jenis KKN Berhasil Dihapus!');
    }

    public function daftarKelompokKKN()
    {
        $dokumens = KelompokKKN::all(); 
        return view('admin.daftarKelompokKKN', compact('dokumens'));
    }

    public function formtambahkelompok()
    {
        $jenisKKNList = JenisKKN::all();
        $dosenList = Dosen::all();
        $mahasiswaList = Mahasiswa::all();
        return view('admin.formtambahkelompok', compact('jenisKKNList', 'dosenList', 'mahasiswaList'));
    }

    public function simpanDaftarKelompokKKN(Request $request)
    {
        $validasi = $request->validate([
            'nama_kelompok' => 'required|string|max:30',
            'jenis' => 'required|string|max:50',
            'nama_dosen' => 'required|string|max:50',
            'nama_mahasiswa' => 'required|string|max:50',
            'wilayah' => 'required|string|max:100',
            'provinsi' => 'required|string|max:50',
            'kabupaten' => 'required|string|max:50',
            'kecamatan' => 'required|string|max:50',
            'kelurahan' => 'required|string|max:50',
        ]);

        KelompokKKN::create([
            'Nama' => $validasi['nama_kelompok'],
            'Jenis' => $validasi['jenis'],
            'Nama_dosen' => $validasi['nama_dosen'],
            'Nama_mahasiswa' => $validasi['nama_mahasiswa'],
            'Wilayah' => $validasi['wilayah'],
            'Provinsi' => $validasi['provinsi'],
            'Kabupaten' => $validasi['kabupaten'],
            'Kecamatan' => $validasi['kecamatan'],
            'Kelurahan' => $validasi['kelurahan'],
        ]);

        return redirect()->route('DokumenController.daftarKelompokKKN')->with('success', "Kelompok KKN Berhasil Ditambahkan");
    }

    public function showKelompokKKN($id_kkn)
    {
        Log::info("Memasuki method showKelompokKKN dengan id_kkn: " . $id_kkn);
        $dokumen = KelompokKKN::where('id_kkn', $id_kkn)->first();
        if (!$dokumen) {
            Log::info("Dokumen tidak ditemukan untuk id_kkn: " . $id_kkn);
            return redirect()->back()->with('alert', 'Data tidak ditemukan');
        }
        return view('admin.daftarKelompokKKN', compact('dokumen'));
    }

    public function deleteDaftarKelompokKKN($id_kelompok)
    {
        $dokumens = KelompokKKN::find($id_kelompok);
        if (!$dokumens) {
            return redirect()->back()->with('alert', "Daftar Kelompok KKN tidak ditemukan!");
        }
        if ($dokumens->file) {
            Storage::disk('public')->delete($dokumens->file);
        }
        $dokumens->delete();
        return redirect()->route('DokumenController.daftarKelompokKKN')->with('success', 'Daftar Kelompok KKN Berhasil Dihapus!');
    }

    public function anggotaKelompok()
    {
        return $this->hasMany(AnggotaKelompok::class, 'nim', 'nim');
    }

    public function formtambahanggota($id_kelompok)
    {
        $dataAnggota = AnggotaKelompok::where('id_kelompok', $id_kelompok)->pluck('nim');
        $mahasiswalist = Mahasiswa::whereNotIn('nim', $dataAnggota)->get();
        $anggotaKelompok = AnggotaKelompok::where('id_kelompok', $id_kelompok)->with('mahasiswa')->get();
        return view('admin.formtambahanggota', ['mahasiswalist' => $mahasiswalist, 'id_kelompok' => $id_kelompok, 'anggotaKelompok' => $anggotaKelompok]);
    }
    
    public function simpanAnggotaKelompok(Request $request)
    {

        $validatedData = $request->validate([
            'id_kelompok' => 'required|exists:kelompok_kkn,id_kelompok',
            'nim' => 'required|exists:mahasiswa,nim',
            'jabatan' => 'nullable|in:Ketua Kelompok,Anggota Kelompok', 
        ]);
    

        $dataMahasiswa = AnggotaKelompok::where('id_kelompok', $validatedData['id_kelompok'])
                                        ->where('nim', $validatedData['nim'])
                                        ->exists();
    
        if ($dataMahasiswa) {
            return redirect()->back()->with('error', 'Mahasiswa sudah tergabung dalam kelompok ini.');
        }
    

        $anggotaKelompok = AnggotaKelompok::create([
            'id_kelompok' => $validatedData['id_kelompok'],
            'nim' => $validatedData['nim'],
            'jabatan' => $request->input('jabatan') ?: 'Anggota Kelompok',  
        ]);
    

        if ($request->input('jabatan') === 'Ketua Kelompok') {

            Ketua::where('id_kelompok', $validatedData['id_kelompok'])->delete();
    
 
            $ketua = new Ketua();
            $ketua->anggota_kelompok_id = $anggotaKelompok->id;  
            $ketua->save();
        }
    
        return redirect()->route('DokumenController.formtambahanggota', ['id' => $validatedData['id_kelompok']])
                        ->with('success', 'Mahasiswa berhasil ditambahkan!');
    }


    
    public function showDataAnggotaKelompok($id_kelompok)
    {
        $anggotaKelompok = AnggotaKelompok::where('id_kelompok', $id_kelompok)->with('mahasiswa')->get();
        if ($anggotaKelompok->isEmpty()) {
            return redirect()->back()->with('alert', 'Data Anggota Kelompok Tidak Ditemukan.');
        }
        return view('admin.dataAnggotaKelompok', compact('anggotaKelompok', 'id_kelompok'));
    }


    public function hapusAnggotaKelompok(Request $request, $id_kelompok)
    {
        $nim = $request->input('nim');
        $anggota = AnggotaKelompok::where('nim', $nim)->where('id_kelompok', $id_kelompok)->firstOrFail();
        $anggota->delete();
    
        return redirect()->route('DokumenController.formtambahanggota', $id_kelompok)->with('success', 'Anggota berhasil dihapus');
    }

    public function daftarAnggotaKelompok(Request $request, $id_kelompok)
    {
        // Validasi input
        $validatedData = $request->validate([
            'jabatan' => 'nullable|exists:anggota_kelompok,id_anggota',
        ]);
    

        AnggotaKelompok::where('id_kelompok', $id_kelompok)->update(['jabatan' => 'Anggota Kelompok']);


        if ($request->has('jabatan')) {
            AnggotaKelompok::where('id_anggota', $validatedData['jabatan'])
                ->update(['jabatan' => 'Ketua Kelompok']);
        }
            

        return redirect()->route('DokumenController.showDataAnggotaKelompok', $id_kelompok)
            ->with('success', 'Struktur organisasi berhasil diperbarui!');
    }
    

    //DASHBOARD ANGGOTA KELOMPOK
    public function dashboardAnggota()
    {   
        return view('anggota.dashboardAnggota');
    }

    //DOKUMEN ANGGOTA KELOMPOK
    public function dokumenAnggotaKelompok()
    {
        $rencanas = RencanaKegiatan::all();
        $logbooks = LogbookKegiatan::all();
        $laporans = LaporanKegiatan::all();
        return view('anggota.dokumenKetuaKelompok', compact('rencanas', 'logbooks', 'laporans'));
    }
    
    public function index()
    {
        return view('postingan.index');
    }

    public function createpostingan()
    {
        return view ('postingan.createpostingan');
    }

    public function komentar()
    {
        return view ('postingan.komentar');
    }

    public function rencanaAnggota()
    {
        $rencanas = RencanaKegiatan::all(); 
        return view('anggota.rencanaAnggota', compact('rencanas'));  
    }

    public function logbookAnggota()
    {
        $logbooks = LogbookKegiatan::all(); 
        return view('anggota.logbookAnggota', compact('logbooks'));  
    }

    public function laporanAnggota()
    {
        $laporans = LaporanKegiatan::all(); 
        return view('anggota.laporanAnggota', compact('laporans'));  
    }

        //Dosen - NilaiKKN 
        public function nilaiMahasiswa()
        {
            $anggotaKelompok = AnggotaKelompok::with(['mahasiswa', 'nilaiKKN'])->get();
            return view('admin.nilaiMahasiswa', compact('anggotaKelompok'));
        }
    
        public function niliaTambah($nim)
        {
            $anggota = AnggotaKelompok::with('mahasiswa')->where('nim', $nim)->firstOrFail();
            return view('admin.formNilai', compact('anggota'));
        }

        public function dataNilai()
        {
            $anggotaKelompok = AnggotaKelompok::with('mahasiswa')->get();
            return view('admin.nilaiMahasiswa', compact('anggotaKelompok'));
        }
}


<?php

namespace App\Http\Controllers;

use App\Models\Santri; // Pastikan model Santri sudah ada
use App\Helpers\FruitHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Str;



class SantriController extends Controller
{
    public function index(Request $request)
    {
        // Dapatkan input pencarian jika ada
        $search = $request->input('search');

        // Ambil data dari tabel santri dengan pencarian, relasi, dan pagination
        $santri = Santri::with(['kamar.asrama'])
            ->when($search, function ($query, $search) {
                return $query->where('nama_santri', 'like', "%{$search}%")
                             ->orWhere('alamat', 'like', "%{$search}%")
                             ->orWhere('kota', 'like', "%{$search}%");
            })
            ->orderBy('nama_santri', 'asc')
            ->paginate(20); // Batasi 20 data per halaman

        // Kirim data ke view
        return view('santri', compact('santri', 'search'));
        
    }

    public function show($id)
    {
        $santri = Santri::with(['kamar.asrama'])->findOrFail($id);
        
        // Transform jenis_kelamin menggunakan gender_label
        $santri->jenis_kelamin = gender_label($santri->jenis_kelamin);

         // Tranform format tanggal
        $santri->tanggal_lahir = format_tanggal($santri->tanggal_lahir);
        $santri->tanggal_masuk_pondok = format_tanggal($santri->tanggal_masuk_pondok);
        $santri->tanggal_keluar_pondok = format_tanggal($santri->tanggal_keluar_pondok);
        $santri->tanggal_masuk_mts = format_tanggal($santri->tanggal_masuk_mts);
        $santri->tanggal_masuk_ma = format_tanggal($santri->tanggal_masuk_ma);
        $santri->tanggal_lulus_mts = format_tanggal($santri->tanggal_lulus_mts);
        $santri->tanggal_lulus_ma = format_tanggal($santri->tanggal_lulus_ma);

        return response()->json($santri);
    }

    public function store(Request $request)
    {
        // Validasi input data santria
        $validated = $request->validate([
            'nama_santri'           => 'required|string|max:50',
            'nik'                   => 'required|string|max:16',
            'nisn'                  => 'nullable|string|max:20',
            'jenis_kelamin'         => 'required|in:L,P',
            'tempat_lahir'          => 'required|string|max:50',
            'tanggal_lahir'         => 'required|date',
            'alamat'                => 'required|string|max:255',
            'kota'                  => 'required|string|max:50',
            'status'                => 'required|in:R,SR,S',
            'pendidikan'            => 'required|in:1,2,3,99',
            'kelas'                 => 'required|in:7,8,9,10,11,12,00',
            'sekolah_asal'          => 'nullable|string|max:30',
            'alamat_sekolah_asal'   => 'nullable|string|max:255',
            'tanggal_masuk_pondok'  => 'required|date',
            'tanggal_keluar_pondok' => 'nullable|date',
            'tanggal_masuk_mts'     => 'nullable|date',
            'tanggal_keluar_mts'    => 'nullable|date',
            'tanggal_masuk_ma'      => 'nullable|date',
            'tanggal_keluar_ma'     => 'nullable|date',
            'hp_santri'             => 'nullable|string|max:15',
            'hobi'                  => 'nullable|string|max:30',
            'email'                 => 'required|email|max:30',
            'nama_ayah'             => 'required|string|max:50',
            'hp_ayah'               => 'required|string|max:20',
            'hidup_ayah'            => 'required|in:1,0',
            'kerja_ayah'            => 'required|string|max:50',
            'nama_ibu'              => 'required|string|max:50',
            'hp_ibu'                => 'required|string|max:20',
            'hidup_ibu'             => 'required|in:1,0',
            'kerja_ibu'             => 'required|string|max:50',
            'nama_wali'             => 'required|string|max:50',
            'hp_wali'               => 'required|string|max:20',
            'status_wali'           => 'required|in:1,2,3,4',
    ]);

    // Menyimpan data santri ke database
    santri::create([
            'nama_santri'           => $validated['nama_santri'],
            'nik'                   => $validated['nik'],
            'nisn'                  => $validated['nisn'],
            'jenis_kelamin'         => $validated['jenis_kelamin'],
            'tempat_lahir'          => $validated['tempat_lahir'],
            'tanggal_lahir'         => $validated['tanggal_lahir'],
            'alamat'                => $validated['alamat'],
            'kota'                  => $validated['kota'],
            'status'                => $validated['status'],
            'pendidikan'            => $validated['pendidikan'],
            'kelas'                 => $validated['kelas'],
            'sekolah_asal'          => $validated['sekolah_asal'],
            'alamat_sekolah_asal'   => $validated['alamat_sekolah_asal'],
            'tanggal_masuk_pondok'  => $validated['tanggal_masuk_pondok'],
            'hp_santri'             => $validated['hp_santri'],
            'email'                 => $validated['email'],
            'hobi'                  => $validated['hobi'],
            'nama_ayah'             => $validated['nama_ayah'],
            'hp_ayah'               => $validated['hp_ayah'],
            'hidup_ayah'            => $validated['hidup_ayah'],
            'kerja_ayah'            => $validated['kerja_ayah'],
            'nama_ibu'              => $validated['nama_ibu'],
            'hp_ibu'                => $validated['hp_ibu'],
            'hidup_ibu'             => $validated['hidup_ibu'],
            'kerja_ibu'             => $validated['kerja_ibu'],
            'nama_wali'             => $validated['nama_wali'],
            'hp_wali'               => $validated['hp_wali'],
            'status_wali'           => $validated['status_wali'],
        ]);

    // Redirect kembali ke halaman dengan pesan sukses
    return redirect()->route('santri.index')->with('sweetalert', 'Data santri berhasil ditambahkan!');
    }


    public function updateFoto (Request $request)
    {
        // Validasi file upload
        $validated = $request->validate([
            'foto'      => 'image|mimes:jpg,png,jpeg,gif|max:2048',
            'ktp'       => 'image|mimes:jpg,png,jpeg,gif|max:2048',
            'kk'        => 'image|mimes:jpg,png,jpeg,gif|max:2048',
            'ijazah'    => 'image|mimes:jpg,png,jpeg,gif|max:2048',
        ]);

        // Ambil ID santri dari request (misalnya dikirim sebagai input tersembunyi)
        $santriId = $request->input('hidden_id');

        // Cari data santri berdasarkan ID
        $santri = Santri::findOrFail($santriId);

        // Proses file upload
        if ($request->hasFile('foto')) {
    $file = $request->file('foto');
    $filename = Str::random(10) . '.' . $file->getClientOriginalExtension(); // Nama file acak dengan ekstensi file asli
    $file->storeAs('foto/santri', $filename, 'public'); // Menyimpan file dengan nama acak di folder foto/santri
    $santri->foto = $filename; // Simpan hanya nama file (bukan path) di database
    }

        if ($request->hasFile('ktp')) {
            $ktpPath = $request->file('ktp')->store('foto/ktp', 'public');
            $santri->ktp = $ktpPath;
        }

        if ($request->hasFile('kk')) {
            $kkPath = $request->file('kk')->store('foto/kk', 'public');
            $santri->kk = $kkPath;
        }

        if ($request->hasFile('ijazah')) {
            $ijazahPath = $request->file('ijazah')->store('foto/ijazah', 'public');
            $santri->ijazah = $ijazahPath;
        }

        // Simpan perubahan
        $santri->save();

        // Kembali ke halaman sebelumnya atau halaman yang diinginkan
        return redirect()->back()->with('success', 'Data santri berhasil diupdate!');
    }

    public function updateKamar(Request $request)
{
     //debug jika diprelukan
    //dd($request->all());

     // Ambil id santri dari request
    $santriId = $request->input('idsantri-sankam');
    $id_kamar = $request->input('id_kamar'); // Ambil id_kamar dari input form
    
    // Temukan santri berdasarkan id
    $santri = Santri::find($santriId);

    // Pastikan santri ditemukan
    if ($santri) {
        // Update kolom id_kamar dengan $id_kamar
        $santri->id_kamar = $id_kamar;
        
        // Simpan perubahan ke database
        $santri->save();

        // Return response atau redirect sesuai kebutuhan
        return redirect()->route('santri.index')->with('sweetalert', 'Data kamar untuk santri berhasil diperbarui');
    } else {
        // Jika santri tidak ditemukan
        return redirect()->route('santri.index')->with('error', 'Santri tidak ditemukan');
    }
}



    
}

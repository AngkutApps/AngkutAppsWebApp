<?php

namespace App\Http\Controllers;

use App\Articel;
use App\Driver;
use Illuminate\Http\Request;
use Alert;
use App\Message;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function news()
    {
        $articleGet = Articel::first();

        $articles = Articel::orderBy('id', 'DESC')->paginate(4);
        return view('news', compact('articles', 'articleGet'));
    }

    public function daftarPete()
    {
        return view('daftar.pete');
    }

    public function storePete(Request $request)
    {
        $this->validate($request, [
            'image' => 'required'
        ]);

        if ($request->password == $request->passwordtwo) {

            $image = $request->image;
            $imageName = time() . $image->getClientOriginalName();
            $image->move('asset_backend/img/upload/drivers', $imageName);

            $driver = [
                'name' => $request->name,
                'kabkota' =>  $request->kabkota,
                'hp' => $request->hp,
                'email' => $request->email,
                'password' => $request->password,
                'nikktp' => $request->nikktp,
                'noplat' => $request->noplat,
                'merkmobil' => $request->merkmobil,
                'image' => 'asset_backend/img/upload/drivers/' . $imageName,
                'jenisdriver' => 'pete-pete',
                'sumber' => $request->sumber
            ];
            Driver::create($driver);
            alert()->success('Sukses', 'Daftar Berhasil');
            return redirect()->back();
        } else {
            alert()->error('Error', 'Password tidak sama');
            return redirect()->back();
        }
    }

    public function daftarDaerah()
    {
        return view('daftar.daerah');
    }

    public function storeDaerah(Request $request)
    {
        $this->validate($request, [
            'image' => 'required'
        ]);

        if ($request->password == $request->passwordtwo) {

            $image = $request->image;
            $imageName = time() . $image->getClientOriginalName();
            $image->move('asset_backend/img/upload/drivers', $imageName);

            $driver = [
                'name' => $request->name,
                'kabkota' =>  $request->kabkota,
                'hp' => $request->hp,
                'email' => $request->email,
                'password' => $request->password,
                'nikktp' => $request->nikktp,
                'noplat' => $request->noplat,
                'merkmobil' => $request->merkmobil,
                'image' => 'asset_backend/img/upload/drivers/' . $imageName,
                'jenisdriver' => 'Mobil Daerah',
                'sumber' => $request->sumber
            ];
            Driver::create($driver);
            alert()->success('Sukses', 'Daftar Berhasil');
            return redirect()->back();
        } else {
            alert()->error('Error', 'Password tidak sama');
            return redirect()->back();
        }
    }

    public function daftarBus()
    {
        return view('daftar.bus');
    }

    public function storeBus(Request $request)
    {
        $this->validate($request, [
            'image' => 'required'
        ]);

        if ($request->password == $request->passwordtwo) {

            $image = $request->image;
            $imageName = time() . $image->getClientOriginalName();
            $image->move('asset_backend/img/upload/drivers', $imageName);

            $driver = [
                'name' => $request->name,
                'kabkota' =>  $request->kabkota,
                'hp' => $request->hp,
                'email' => $request->email,
                'password' => $request->password,
                'nikktp' => $request->nikktp,
                'noplat' => $request->noplat,
                'merkmobil' => $request->merkmobil,
                'image' => 'asset_backend/img/upload/drivers/' . $imageName,
                'jenisdriver' => 'Mobil Bus',
                'sumber' => $request->sumber
            ];
            Driver::create($driver);
            alert()->success('Sukses', 'Daftar Berhasil');
            return redirect()->back();
        } else {
            alert()->error('Error', 'Password tidak sama');
            return redirect()->back();
        }
    }

    public function layanan()
    {
        return view('layanan');
    }

    public function cekTarif()
    {
        alert()->info('Info', 'Fitur Coming Soon');
        return redirect()->back();
    }

    public function bantuan()
    {
        $messages = Message::paginate(4);
        return view('bantuan', compact('messages'));
    }
}

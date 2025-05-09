<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ksiazka;
//use App\Http\Requests\NowaKsiazkaRequest;

class KsiazkaController extends Controller
{
    // Metoda do wyświetlania wszystkich książek
    public function index()
    {
        $ksiazki = Ksiazka::all();
        return view('ksiazki.index', compact('ksiazki'));
    }

    //Metoda do wyszukiwania książek
    public function wyszukaj()
    {
        return view('ksiazki.wyszukaj');
    }

    // Metoda do pokazywania wynikow wyszukiwania
    public function wyniki(Request $request)
    {
        $tytul = $request->input('tytul');
        $autor = $request->input('autor');
        $kategoria = $request->input('kategoria');

        $ksiazki = Ksiazka::when($tytul, function ($query) use ($tytul) {
            return $query->where('tytul', 'like', "%$tytul%");
        })->when($autor, function ($query) use ($autor) {
            return $query->where('autor', 'like', "%$autor%");
        })->when($kategoria, function ($query) use ($kategoria) {
            return $query->where('kategoria', 'like', "%$kategoria%");
        })->get();

        return view('ksiazki.wyniki', compact('ksiazki'));
    }

    // Metoda do wypożyczania książki
    public function wypozycz(Ksiazka $ksiazka)
    {
        // Sprawdź, czy książka jest dostępna do wypożyczenia
        if ($ksiazka->dostepnosc) {
            // Oznacz książkę jako wypożyczoną
            $ksiazka->fill(['dostepnosc' => false])->save();

            return redirect()->back()->with('success', 'Książka została wypożyczona.');
        } else {
            return redirect()->back()->with('error', 'Książka jest już wypożyczona.');
        }
    }

    // Metoda do zwracania książki
    public function zwroc(Ksiazka $ksiazka)
    {
        // Sprawdź, czy książka jest aktualnie wypożyczona
        if (!$ksiazka->dostepnosc) {
            // Oznacz książkę jako zwróconą
            $ksiazka->update(['dostepnosc' => true]);

            return redirect()->back()->with('success', 'Książka została zwrócona.');
        } else {
            return redirect()->back()->with('error', 'Książka nie jest wypożyczona.');
        }
    }

    public function dodaj()
{
    return view('ksiazki.dodaj');
}

// Walidacja i zapis nowej książki do bazy danych
public function zapisz(NowaKsiazkaRequest $request)
{
    // Sprawdź, czy użytkownik jest zalogowany
    if (!auth()->check()) {
        // Jeżeli nie jest zalogowany, możesz dostosować zachowanie tutaj (np. przekierowanie do strony logowania).
        return redirect()->route('login')->with('error', 'Musisz być zalogowany, aby dodać nową książkę.');
    }


    Ksiazka::create([
        'tytul' => $request->tytul,
        'autor' => $request->autor,
        'rok_wydania' => $request->rok_wydania,
        'kategoria' => $request->kategoria,
        'status' => false, // Nowa książka, więc status na false
    ]);

    $ksiazka = new Ksiazka([
        'tytul' => $request->input('tytul'),
        'autor' => $request->input('autor'),
        'rok_wydania' => $request->input('rok_wydania'),
        'kategoria' => $request->input('kategoria'),
    ]);

    $ksiazka->save();


    return redirect()->route('ksiazki.index')->with('success', 'Nowa książka została dodana.');
}

}

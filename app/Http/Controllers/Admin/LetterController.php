<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Letter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LetterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $letters = Letter::all();
        return view('letters.index', compact('letters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('letters.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        //dd($data);
        $letter = new Letter();
        $data = $this->validation($request->all());
        $letter->fill($data);
        $letter->save();
        return redirect()->route('letters.show', $letter->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $letter = Letter::findOrFail($id);
        return view('letters.show', compact('letter'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Letter $letter)
    {
        return view('letters.edit', compact('letter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Letter $letter)
    {
        $data = $request->all();
        $formData = $this->validation($request->all());
        $letter->update($data);
        return redirect()->route('letters.show', $letter->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Letter $letter)
    {
        $letter->delete();
        return redirect()->route('letters.index');
    }

    private function validation($data)
    {
        //{$validator = Validator::make($data,[//REGOLE],[//MSG]);}
        $validationResult = Validator::make(
            $data,
            [
                'name' => 'required|min:5|max:50',
                'surname' => 'required|min:5|max:50',
                'address' => 'required',
                'city' => 'required|min:5|max:100',
                'arrival_date' => 'required',
                'present' => 'required|min:5|max:250',
                'letter_text' => 'nullable',
                'goodness_rating' => 'required',
                'present_was_delivered' => 'nullable'
            ],
            [
                'name.required' => 'Il nome è obbligatorio',
                'name.min' => 'Il nome deve essere di minimo :min lettere',
                'name.max' => 'Il nome deve essere di massimo :max lettere',
                'surname.required' => 'Il cognome è obbligatorio',
                'surname.min' => 'Il cognome deve essere di minimo :min lettere',
                'surname.max' => 'Il cognome deve essere di massimo :max lettere',
                'address.required' => 'L\'indirizzo è obbligatorio',
                'city.required' => 'La città è obbligatorio',
                'city.min' => 'La città deve essere di minimo :min lettere',
                'city.max' => 'La città deve essere di minimo :max lettere',
                'arrival_date.required' => 'La data di arrivo è obbligatoria',
                'present.required' => 'Il regalo è obbligatorio',
                'present.min' => 'Il regalo deve essere di minimo :min lettere',
                'present.max' => 'Il regalo deve essere di minimo :max lettere',
                'goodness_rating.required' => 'La valutazione di bontà è obbligatoria',
            ]
        )->validate();
        return $validationResult;
    }
}

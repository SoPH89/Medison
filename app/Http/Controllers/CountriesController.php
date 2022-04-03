<?php

namespace App\Http\Controllers;

use App\Models\Countries;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CountriesController extends Controller
{
    public static function index()
    {
        $countries = Countries::all();
        return view('countries.show')->with('countries', $countries);
    }

    public function create()
    {
        return view('countries.create');
    }

    public function store(Request $request)
    {
        $countries = new Countries();
        $user = Auth::user();
        if ( $request->name && $request->iso && $user->id ) {
            $countries->user_id = $user->id;
            $countries->Name = $request->name;
            $countries->ISO = $request->iso;
            $countries->save();
            return redirect('dashboard')->with('flash_message', 'Country Addedd!');
        } else {
            return redirect('dashboard')->with('flash_message', 'All fields needed to be filled!');
        }

    }

    public function show($id)
    {
        $country = Countries::find($id);
        return view('countries.show')->with('countries', $country);
    }

    public static function edit($id)
    {
        $country = countries::find($id);
        return view('countries.edit')->with('country', $country);
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        if ( $request->id && $request->name && $request->iso && $user->id ) {
            $country = Countries::find( $request->id );
            $country->user_id = $user->id;
            $country->Name = $request->name;
            $country->ISO = $request->iso;
            $country->update();
            return redirect('dashboard')->with('flash_message', 'Country Updated!');
        } else {
            return redirect('dashboard')->with('flash_message', 'All fields needed to be filled!');
        }
    }

    public function destroy($id)
    {
        Countries::destroy($id);
        return redirect('student')->with('flash_message', 'Student deleted!');
    }
}
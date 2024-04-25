<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CityController extends Controller
{
    function __construct(){
        $this->middleware(function ($request, $next) {
            if (!Auth::check() || !Auth::user()->isAdmin()) {
                return redirect()->route('index');
            }

            return $next($request);
        });
    }

    public function cities(){
        $output['cities'] = City::all();
        $output['edit'] = false;
        return view('admin/admin-cities', $output);
    }

    public function city_store(Request $request){
        $this->validate($request, [
            'title' => 'required'
        ]);
        City::create([
            'title' => $request['title'],
        ]);
        return back()->with('success', 'New city '.$request['title'].' created successfully.');
    }

    public function city_delete($id){
        $name = '';
        $row = City::query()->find($id);
        $name = $row->title;
        $row->delete();
        return back()->with('success', 'City '.$name.' deleted successfully.');
    }

    public function city_edit($id){
        $output['city'] = City::query()->find($id);
        $output['cities'] = City::all();
        $output['edit'] = true;
        return view('admin/admin-cities', $output);
    }

    public function city_update(Request $request, $id){
        $this->validate($request, [
            'title' => 'required'
        ]);
        $city = City::query()->find($id);
        $city->update([
            'title' => $request['title'],
        ]);
        return redirect()->route('admin.cities')->with('success', 'City '.$request['title'].' updated successfully.');
    }
}

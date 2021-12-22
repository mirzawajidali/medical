<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;
use App\Models\State;
use Illuminate\Http\Request;

class Location extends Controller
{
    //Cities
    public function cities(){
        $cities = City::get();
        return view('admin.locations.city.cities',compact('cities'));
    }

    //Add City
    public function city_add(){
        return view('admin.locations.city.city-add');
    }

    //Added City
    public function city_added(Request $request){
        $request->validate([
            'name' => 'required',
        ],[
            'name.required' => 'Please Enter City name'
        ]);

        $city = new City();
        $city->name = $request->name;
        $city->status = $request->status;
        $added_city = $city->save();
        if($added_city){
            return back()->with('success','City added successfully!',3);
        }else{
            return back()->with('error','Something went wrong!',3);
        }
    }

    //Delte City
    public function city_delete($id){
        $city = City::find($id);
        $city_deleted = $city->delete();

        if($city_deleted){
            return back()->with('success','City deleted successfully!',3);
        }else{
            return back()->with('error','Sorry! Something went wrong!',3);
        }
    }

    //Countries
    public function countries(){
        $countries = Country::get();
        return view('admin.locations.country.countries',compact('countries'));
    }

    //Add Country
    public function country_add(){
        return view('admin.locations.country.country-add');
    }

    //Added City
    public function country_added(Request $request){
        $request->validate([
            'name' => 'required',
        ],[
            'name.required' => 'Please Enter Country name'
        ]);

        $country = new Country();
        $country->name = $request->name;
        $country->status = $request->status;
        $added_country = $country->save();
        if($added_country){
            return back()->with('success','Country added successfully!',3);
        }else{
            return back()->with('error','Something went wrong!',3);
        }
    }

    //Delte Country
    public function country_delete($id){
        $country = Country::find($id);
        $country_deleted = $country->delete();

        if($country_deleted){
            return back()->with('success','Country deleted successfully!',3);
        }else{
            return back()->with('error','Sorry! Something went wrong!',3);
        }
    }

    //States
    public function states(){
        $states = State::get();
        return view('admin.locations.state.states',compact('states'));
    }

    //Add State
    public function state_add(){
        return view('admin.locations.state.state-add');
    }

    //Added State
    public function state_added(Request $request){
        $request->validate([
            'name' => 'required',
        ],[
            'name.required' => 'Please Enter State name'
        ]);

        $state = new State();
        $state->name = $request->name;
        $state->status = $request->status;
        $added_state = $state->save();
        if($added_state){
            return back()->with('success','State added successfully!',3);
        }else{
            return back()->with('error','Something went wrong!',3);
        }
    }

    //Delte State
    public function state_delete($id){
        $state = State::find($id);
        $state_deleted = $state->delete();

        if($state_deleted){
            return back()->with('success','State deleted successfully!',3);
        }else{
            return back()->with('error','Sorry! Something went wrong!',3);
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Validation\Rules\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['cars'] = Car::all();
        return view('index', $data);
    }

    public function catalog()
    {
        $data['cars'] = Car::all();
        return view('catalog', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'merk' => ['string', 'max:255'],
            'car_pict' => [File::types(['jpg', 'jpeg', 'png', 'gif'])->max(12 * 1024)],
            'stock' => ['numeric'],
            'capacity' => ['numeric'],
            'transmission' => ['numeric'],
            'fuel' => ['string', 'max:255'],
            'rate' => ['numeric'],
            'price' => ['numeric'],
        ]);

        $car = Car::create([
            'merk' => $request->merk,
            'car_pict' => Storage::putFile('car_pict', $request->file('car_pict')),
            'stock' => $request->stock,
            'capacity' => $request->capacity,
            'transmission' => $request->transmission,
            'fuel' => $request->fuel,
            'rate' => $request->rate,
            'price' => $request->price,
        ]);
        return redirect('/index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $request->validate([
        //     'merk' => ['string', 'max:255'],
        //     'car_pict' => [File::types(['jpg', 'jpeg', 'png', 'gif'])->max(12 * 1024)],
        //     'stock' => ['numeric'],
        //     'capacity' => ['numeric'],
        //     'transmission' => ['numeric'],
        //     'fuel' => ['string', 'max:255'],
        //     'rate' => ['numeric'],
        //     'price' => ['numeric'],
        // ]);

        $car = Car::find($id);
        if($request->merk){
            $car->merk = $request->merk;
        }
        if($request->stock){
            $car->stock = $request->stock;
        }
        if($request->capacity){
            $car->capacity = $request->capacity;
        }
        if($request->transmission){
            $car->transmission = $request->transmission;
        }
        if($request->fuel){
            $car->fuel = $request->fuel;
        }
        if($request->rate){
            $car->rate = $request->rate;
        }
        if($request->price){
            $car->price = $request->price;
        }
        
        if($request->file("car_pict")){
            if($car->car_pict && Storage::exists($car->car_pict)){
                Storage::delete($car->car_pict);
            }
            $car->car_pict = Storage::putFile('car_pict', $request->file('car_pict'));

        }
        $car->save();
        return redirect('/index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Car::destroy($id);

        return redirect('/index');
    }
}

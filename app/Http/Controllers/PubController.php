<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;
use App\Models\Drink;

class PubController extends Controller
{
    public function index() {
        $drinks = Drink::with("type")->get();

        return view("new_drink", [
            "drinks" => $drinks
        ]);
    }

    public function newDrink() {
        return view("new-drink");
    }

    public function storeDrink(REQUEST $request) {
        $type = $request->type;
        $type_id = 0;
        $drink = new Drink;

        $drink->product = $request->product;
        $drink->price = $request->price;
        $drink->type_id = $type_id;
        $drink->save();

        $request->session()->flash("succes","sikeres írás");
        return redirect("/");
    }

    // public function showDrink(REQUEST $request) {
    //     $product = $request->product;
    //     $drink = Drink::with("type")->where("product", $product)->get();

    //     return view("new_drink", [
    //         "drink" => $drink
    //     ]);
    // }

    // public function showUpdateDrink(REQUEST $request) {
    //     $product = $request->product;
    //     $drink = Drink::with("type")->where("product", $product)->get();

    //     return view("update_drink", [
    //         "drink" => $drink
    //     ]);
    // }

    // public function updateDrink(REQUEST $request) {
    //     $type = $request->type;
    //     // $type = Type::where("type", $type)->get();
    //     $type_id = 0;

    //     $drink = new Drink;
    //     $drink->product = $request->product;
    //     $drink->price = $request->price;
    //     $drink->type_id = $type_id;

    //     $drink->save();
    //     return redirect("/");
    // }
}

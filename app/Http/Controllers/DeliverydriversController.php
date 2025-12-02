<?php

namespace App\Http\Controllers;
use App\Http\Requests\DeliverydriversRequest;
use App\Models\Deliverydriver;
use Illuminate\Http\Request;

class DeliverydriversController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $deliveryDrivers = Deliverydriver::all();
        return view('deliverydrivers.index', compact('deliveryDrivers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('deliverydrivers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DeliverydriversRequest $request)
    {
        
        Deliverydriver::create($request->all());
        return redirect()->route('deliverydrivers.index');

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
        $deliveryDriver = Deliverydriver::findOrFail($id);
        return view('deliverydrivers.edit', compact('deliveryDriver'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DeliverydriversRequest $request, string $id)
    {
        $deliveryDriver = Deliverydriver::findOrFail($id);
        $deliveryDriver->update($request->all());
        return redirect()->route('deliverydrivers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deliveryDriver = Deliverydriver::findOrFail($id);
        $deliveryDriver->delete();
        return redirect()->route('deliverydrivers.index');
    }
}

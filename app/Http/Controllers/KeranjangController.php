<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = [
            ['nama' => 'Red Hoodie', 'size' => 'All Size', 'harga' => 90000, 'gambar' => 'red_hoodie.jpg'],
            ['nama' => 'Blazer', 'size' => 'All Size', 'harga' => 75000, 'gambar' => 'blazer.jpg'],
            ['nama' => 'Running Pants NIKE', 'size' => 'Size M', 'harga' => 65000, 'gambar' => 'nike_running.jpg'],
            ['nama' => 'Flower Dress', 'size' => 'All Size', 'harga' => 65000, 'gambar' => 'flower_dress.jpg'],
            ['nama' => 'Celana Pendek', 'size' => 'Size S', 'harga' => 45000, 'gambar' => 'celana_pendek.jpg'],
            ['nama' => 'Sweater H&M', 'size' => 'Size L', 'harga' => 150000, 'gambar' => 'sweater_hm.jpg'],
            ['nama' => 'Atasan', 'size' => 'All Size', 'harga' => 20000, 'gambar' => 'atasan.jpg'],
            ['nama' => 'Kemeja', 'size' => 'All Size', 'harga' => 45000, 'gambar' => 'kemeja.jpg'],
        ];

        return view("keranjang/index", compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

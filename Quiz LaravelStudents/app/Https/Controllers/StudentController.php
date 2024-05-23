<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Student $product) {
        return view('Murid.modules.products.index', [
            "data" => $product->all()
        ]);
    }
    public function edit(Student $product) {
        return view('Murid.modules.products.edit', [
            "student" => $product
        ]);
    }
    public function getDataByID(Student $product) {
        return view('Murid.modules.products.show', [
            "data" => $product
        ]);
    }

    public function store(Request $request) {
        $validateData = $request->validate([
            "fullname" => "required|max:50",
            "npm" => "required|max:12",
            "email" => "required|max:50",
            "prodi" => "required|max:50",
        ]);

        Student::create($validateData);

        return redirect('/')->with('success', "Data sukses disimpan");
    }

    public function update(Request $request, Student $product) {
        $validateData = $request->validate([
            "fullname" => "required|max:50",
            "npm" => "required|max:12",
            "email" => "required|max:50",
            "prodi" => "required|max:50",
        ]);

        $product->where("id", $product->id)->update($validateData);

        return redirect('/')->with('success', "Data sukses Diedit");
    }

    public function destroy(Student $product){
        $product->delete($product->id);
        return redirect('/')->with('success', "Data berhasil Dihapus");
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Material;
use App\Models\Type;
use App\Models\Category;

class TypeAndCategory
{
    public function getData()
    {
        $data = array();
        $data['types'] = Type::all();
        $data['categories'] = Category::all();
        return $data;
    }
}

class MaterialController extends Controller
{
    private $repository;
    public function __construct(TypeAndCategory $repository)
    {
        $this->repository = $repository;
    }

    public function insertMaterial(Request $request)
    {
        DB::table('materials')->insert([
            'name' => $request->material_name,
            'type_id' => "2",
            'category_id' => "2",
            'amount' => $request->amount,
            'link_to_material' => $request->link,
        ]);
        return "Success";
    }

    public function showMaterials()
    {
        $materials = Material::all();
        return view('materials', ['material_list' => $materials]);
    }

    public function selectTypeAndCategory()
    {
        return view('materials')->with(['type_category_list' => $this->repository->getData()]);
    }
}

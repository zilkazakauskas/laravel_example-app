@extends('base')
@section('main')
    {{-- {{ $material_list }} --}}

    {{-- {{ $type_list ?? '' }} --}}

    {{-- @foreach ($material_list as $item)
        <div>
            {{ $item->name }}
        </div>
    @endforeach --}}

    <h2>Register new material</h2>
    <form method="POST" action="/tryToInsert">
        @csrf
        <p><input type="text" name="material_name" placeholder="material name"></p>
        <p><input type="number" name="amount" placeholder="amount"></p>
        <p><input type="text" name="link" placeholder="link to material"></p>
        <div>
        <label for="type_id">Select Type</label>
        <select name="type_id">
            @foreach ($type_category_list['types'] as $type)
                <option value="{{ $type['id'] }}">{{ $type['name'] }}</option>
            @endforeach
        </select>
        </div>
        <div>
        <label for="category_id">Select Category</label>
        <select name="category_id">
            @foreach ($type_category_list['categories'] as $category)
                <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
            @endforeach
        </select>
        </div>
        <input type="submit" name="submit" value="Submit">
    </form>
@endsection

@extends('layouts.dashboard')


@section('content')


<div class="container mt-5">
        <h1 class="mb-4">تعديل فئة </h1>

        <form action="{{ route('admin.categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">اسم الفئة</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $category->name) }}" required>
            </div>
            <div class="mb-3">
                <label for="display_order" class="form-label">ترتيب العرض</label>
                <input type="number" class="form-control" id="display_order" name="display_order" value="{{ old('display_order', $category->display_order) }}" required>
            </div>
            <button type="submit" class="btn btn-primary">تعديل</button>
            <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">عودة</a>
        </form>
    </div>

    
@endsection
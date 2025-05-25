@extends('layouts.dashboard')


@section('content')


<div class="container mt-5">
        <h1 class="mb-4">إضافة صنف او منتج جديد</h1>

        <form action="{{ route('admin.items.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">اسم المنتج</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label"> السعر</label>
                <input type="number" class="form-control" id="price" name="price" required>
            </div>
               <div class="mb-3">
                <label for="price" class="form-label"> وصف المنتج</label>
                <input type="text" class="form-control" id="description" name="description" required>

               </div>
               <div class="mb-3">
              <label for="category_id" class="form-label">Category</label>

                <select class="form-select" id="category_id" name="category_id" required>
                    <option value="" disabled selected>Select a Category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
               </div>
            <button type="submit" class="btn btn-primary">إضافة</button>
            <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">عودة</a>
        </form>
    </div>

    
@endsection
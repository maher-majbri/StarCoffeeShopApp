@extends('layouts.dashboard')


@section('content')


<div class="container mt-5">
        <h1 class="mb-4">إضافة فئة جديدة</h1>

        <form action="{{ route('admin.categories.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">اسم الفئة</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="display_order" class="form-label">ترتيب العرض</label>
                <input type="number" class="form-control" id="display_order" name="display_order" required>
            </div>
            <button type="submit" class="btn btn-primary">إضافة</button>
            <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">عودة</a>
        </form>
    </div>

    
@endsection
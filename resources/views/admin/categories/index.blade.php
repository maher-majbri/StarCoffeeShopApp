@extends('layouts.dashboard')


@section('content')


 <div class="container mt-5">
        <h1 class="mb-4">قائمة الفئات</h1>

        <a href="{{route('admin.categories.create')}}" class="btn btn-primary"> Add new </a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>الاسم</th>
                    <th>ترتيب العرض</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->display_order }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


@endsection
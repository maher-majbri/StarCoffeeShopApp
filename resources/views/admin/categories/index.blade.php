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
                    <ht>العمليات</ht>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->display_order }}</td>
                        <td>
                            <a class="btn btn-warning" href="{{ route('admin.categories.edit', $category->id)  }}" >تعديل</a>
                            <form  action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this category?')">حذف</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


@endsection
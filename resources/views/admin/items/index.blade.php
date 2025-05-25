@extends('layouts.dashboard')


@section('content')


 <div class="container mt-5">
        <h1 class="mb-4">قائمة الاصناف</h1>

        <a href="{{route('admin.items.create')}}" class="btn btn-primary"> Add new </a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>الاسم</th>
                    <th>السعر </th>
                    <th>التصنيف </th>
                    <ht>العمليات</ht>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->category->name }}</td>
                        <td>
                            <a class="btn btn-warning" href="{{ route('admin.items.edit', $item->id)  }}" >تعديل</a>
                            <form  action="{{ route('admin.items.destroy', $item->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?')">حذف</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


@endsection
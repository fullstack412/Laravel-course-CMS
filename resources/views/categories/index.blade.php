@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-end mb-2">
    <a href="{{ route('categories.create') }}" class="btn btn-success float-right">Add Category</a>
</div>
<div class="card card-default">
    <div class="card-header">Categories</div>
    <div class="card-body">
        <table class="table">
            <thead>
                <th>Name</th>
            </thead>
            <body>
                @foreach($categories as $category)
                <tr>
                    <td>
                        {{ $category->name }}
                    </td>
                </tr>
                @endforeach
            </body>
        </table>
    </div>
</div>
@endsection

@extends('layouts.master')
@section('title', 'Blog Dashboard')

@section('content')
    <div class="container-fluid px-4">
        <div class="card mt-4">
            <div class="card-body">
                @if (session('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif

                <table id="myDataTable" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>
                                Post Name
                            </th>
                            <th>
                                Status
                            </th>
                            <th>
                                Edit
                            </th>
                            <th>
                                Delete
                            </th>
                        </tr>

                    </thead>
                    <tbody>
                        @foreach ($posts as $item)
                            <tr>
                                <td>
                                    {{ $item->name }}
                                </td>

                                <td>
                                    {{ $item->status == '1' ? 'Hidden' : 'Shown' }}
                                </td>

                                <td>
                                    <a href="{{ url('admin/post/' . $item->id) }}" class="btn bg-white border text-black">
                                        Edit
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ url('admin/delete-post/' . $item->id) }}"
                                        class="btn bg-white border text-black">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>

                </table>
            </div>
        </div>
    </div>

@endsection

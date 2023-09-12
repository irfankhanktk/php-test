@extends('layouts.app')

@section('content')
<div class="container">
    <div>
        <table class="table">
            <thead style="background:gray">
                <tr>
                    <th class="text-center">
                        Name
                    </th>
                    <th class="text-center">
                        Image
                    </th>
                    <th class="text-center">
                        Email
                    </th>
                    <th class="text-center">
                        Phone
                    </th>
                    <th class="text-center">
                        Actions
                    </th>
                </tr>
            </thead>
            @foreach ($contacts as $c)
            <tbody>
                <tr>
                    <td class="text-center">
                        <img style="object-fit: cover;border-radius:40px;"
                            src="http://127.0.0.1:8000/images/{{$c->image }}" height="40px" width="40px">
                    </td>
                    <td class="text-center">{{ $c->name }}</td>
                    <td class="text-center">{{ $c->email }}</td>
                    <td class="text-center">{{ $c->phone }}</td>
                    <td class="text-center">
                        <a href="{{ url('/edit?id=' .$c->id)}}" class="btn btn-xs btn-info">Edit
                        </a>
                        <a href="{{ url('details?id=' . $c->id)}}" class="btn btn-xs btn-primary">Details
                        </a>
                        <a href="{{ url('/delete?id=' . $c->id)}}" class="btn btn-xs btn-danger">Delete
                        </a>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>

    </div>
</div>

@endsection

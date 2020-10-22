@extends('sentences.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel Test</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="/"> View Table</a>
                <a class="btn btn-success" href="{{ route('sentences.create') }}"> Create New Sentence</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Position</th>
            <th>Styling</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($sentences as $sentence)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $sentence->name }}</td>
            <td>{{ $sentence->position }}</td>
            <td>{{ $sentence->styling }}</td>
            <td>
                <form action="{{ route('sentences.destroy',$sentence->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('sentences.show',$sentence->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('sentences.edit',$sentence->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $sentences->links() !!}

@endsection

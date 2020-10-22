@extends('layout')

@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel Test</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('sentences.index') }}"> Manage Sentences</a>
            </div>
        </div>
</div>
<div class="container">
<div class="row">
    <table class="table table-bordered mt-2">
        <tr>
            <td>@foreach($sentences as $sentence)
                    @if ($sentence->position == '1,1')
                        <p style="{{ $sentence->styling }}">{{ $sentence->name }}</p>
                    @endif
                @endforeach
            </td>
            <td>@foreach($sentences as $sentence)
                    @if ($sentence->position == '2,1')
                        <p style="{{ $sentence->styling }}">{{ $sentence->name }}</p>
                    @endif
                @endforeach
            </td>
            <td>
                @foreach($sentences as $sentence)
                    @if ($sentence->position == '3,1')
                        <p style="{{ $sentence->styling }}">{{ $sentence->name }}</p>
                    @endif
                @endforeach
            </td>
            <td>
                @foreach($sentences as $sentence)
                    @if ($sentence->position == '4,1')
                        <p style="{{ $sentence->styling }}">{{ $sentence->name }}</p>
                    @endif
                @endforeach
            </td>
        </tr>
        <tr>
            <td>
                @foreach($sentences as $sentence)
                    @if ($sentence->position == '1,2')
                        <p style="{{ $sentence->styling }}">{{ $sentence->name }}</p>
                    @endif
                @endforeach
            </td>
            <td>
                @foreach($sentences as $sentence)
                    @if ($sentence->position == '2,2')
                        <p style="{{ $sentence->styling }}">{{ $sentence->name }}</p>
                    @endif
                @endforeach
            </td>
            <td>
                @foreach($sentences as $sentence)
                    @if ($sentence->position == '3,2')
                        <p style="{{ $sentence->styling }}">{{ $sentence->name }}</p>
                    @endif
                @endforeach
            </td>
            <td>
                @foreach($sentences as $sentence)
                    @if ($sentence->position == '4,2')
                        <p style="{{ $sentence->styling }}">{{ $sentence->name }}</p>
                    @endif
                @endforeach
            </td>
        </tr>
        <tr>
            <td>
                @foreach($sentences as $sentence)
                    @if ($sentence->position == '1,3')
                        <p style="{{ $sentence->styling }}">{{ $sentence->name }}</p>
                    @endif
                @endforeach
            </td>
            <td>
                @foreach($sentences as $sentence)
                    @if ($sentence->position == '2,3')
                        <p style="{{ $sentence->styling }}">{{ $sentence->name }}</p>
                    @endif
                @endforeach
            </td>
            <td>
                @foreach($sentences as $sentence)
                    @if ($sentence->position == '3,3')
                        <p style="{{ $sentence->styling }}">{{ $sentence->name }}</p>
                    @endif
                @endforeach
            </td>
            <td>
                @foreach($sentences as $sentence)
                    @if ($sentence->position == '4,3')
                        <p style="{{ $sentence->styling }}">{{ $sentence->name }}</p>
                    @endif
                @endforeach
            </td>
        </tr>
        <tr>
            <td>
                @foreach($sentences as $sentence)
                    @if ($sentence->position == '1,4')
                        <p style="{{ $sentence->styling }}">{{ $sentence->name }}</p>
                    @endif
                @endforeach
            </td>
            <td>
                @foreach($sentences as $sentence)
                    @if ($sentence->position == '2,4')
                        <p style="{{ $sentence->styling }}">{{ $sentence->name }}</p>
                    @endif
                @endforeach
            </td>
            <td>
                @foreach($sentences as $sentence)
                    @if ($sentence->position == '3,4')
                        <p style="{{ $sentence->styling }}">{{ $sentence->name }}</p>
                    @endif
                @endforeach
            </td>
            <td>
                @foreach($sentences as $sentence)
                    @if ($sentence->position == '4,4')
                        <p style="{{ $sentence->styling }}">{{ $sentence->name }}</p>
                    @endif
                @endforeach
            </td>
        </tr>
    </table>
</div>
</div>

@endsection


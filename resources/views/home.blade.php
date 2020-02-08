@extends('layouts.app2')

@section('content')
            <div id="app">
                <example-component :chanpionDatas="{{ $chanpions }}"></example-component>
            </div>
@endsection

@extends('layouts.app2')

@section('content')
            <div id="app1">
                <example-component :chanpionDatas="{{ $chanpions }}"></example-component>
            </div>
@endsection

@extends('layouts.app2')

@section('content')
            <div id="app1">
                <example-component :chanpionDatas="{{ $chanpions }}" :tagDatas="{{ $tags }}" :skillDatas="{{ $skills }}"></example-component>
            </div>
@endsection

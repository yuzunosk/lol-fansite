@extends('layouts.app2')

@section('content')
            <div id="app1">
                <example-component :chanpionDatas="{{ $chanpions }}" :tagDatas="{{ $tagBoxs }}" :skillDatas="{{ $skills }}" :tags="{{ $tags }}"></example-component>
            </div>
@endsection

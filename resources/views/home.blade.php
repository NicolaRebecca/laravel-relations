@extends('layouts.app')

@section('content')
<div class="container">
<table class="table">
<thead>
    <tr>
    <th scope="col">#</th>
    <th scope="col">title</th>
    <th scope="col">date</th>
    <th scope="col">article</th>
    <th scope="col">picture</th>
    </tr>
</thead>
<tbody>
    @foreach($articles as $article)
        <tr>
            <th scope="row">{{$article->id}}</th>
            <td>{{$article->title}}</td>
            <td>{{$article->created_at}}</td>
            <td>{{$article->picture}}</td>
            <td><img src="{{$article->picture}}" alt=""></td>
            <td>
                <!-- <a href="{{ route('article.show', $article) }}"> -->
                    <!-- <button class="btn btn-primary"><i class="bi bi-zoom-in"></i></button>     -->
                <!-- </a> -->
            
            </td>
        </tr>
    @endforeach
</tbody>
</table>
</div>
@endsection

@extends('layout.master')

@section('title', 'News')

@section('content')
    <main role="main" class="container">
        <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <h2 class="display-4 font-italic">News: <br>{{ $novelty->title }}</h2>
            </div>
        </div>
        <div>
            <p class="blog-post-meta">By <a href="#">{{ $novelty->user->name }}</a> on {{ $novelty->created_at }}</p>
            <p>{{ $novelty->content }}</p>
            <h4>Teams:</h4>
            <ul>
                @foreach ($novelty->teams as $team)
                    <li>
                        <a href="{{ route('teams-index', [ 'team' => $team ]) }}">{{ $team->name }}</a>
                    </li>
                @endforeach
            </ul>
    </div>
    </main><!-- /.container -->
@endsection
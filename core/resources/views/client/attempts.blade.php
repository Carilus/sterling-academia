@extends('layouts.app')
@section('title', 'MyTests - Client Area')
@section('content')
    <style>
        .loading {
            position: relative;
        }

        .loading::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border: 3px solid #ccc;
            border-top-color: #333;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            animation: spin 1s ease-in-out infinite;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }

        .pagination {
            display: flex;
            justify-content: center;
        }

        .pagination>.page-item>.page-link {
            color: #6cb2fd;
            background-color: #fff;
            border: 1px solid #dee2e6;
        }

        .pagination>.page-item>.page-link:hover,
        .pagination>.page-item>.page-link:focus {
            color: #6cb2fd;
            background-color: #e9ecef;
            border-color: #dee2e6;
        }

        .pagination>.page-item.active>.page-link {
            z-index: 3;
            color: #fff;
            background-color: #6cb2fd;
            border-color: #6cb2fd;
        }

        .pagination>.page-item.disabled>.page-link {
            color: #6c757d;
            pointer-events: none;
            cursor: auto;
            background-color: #fff;
            border-color: #dee2e6;
        }

        .score {
            font-size: 15px;
        }
    </style>
    <main id="main" class="main">
        <div class="table-responsive">
            <table class="table table-nowrap mb-0"
                data-list='{"valueNames": ["id","topic", "score", "totalQ", "correct", "date", "view"]}'>
                <thead class="thead-light">
                    <tr>
                        <th class="">
                            <a href="javascript: void(0);" class="text-muted list-sort" data-sort="id">
                                ID
                            </a>
                        </th>
                        <th>
                            <a href="javascript: void(0);" class="text-muted list-sort" data-sort="topic">
                                Topic
                            </a>
                        </th>
                        <th>
                            <a href="javascript: void(0);" class="text-muted list-sort" data-sort="score">
                                Score
                            </a>
                        </th>
                        <th>
                            <a class="text-muted" data-sort="totalQ">
                                Total Questions
                            </a>
                        </th>
                        <th>
                            <a class="text-muted" data-sort="correct">
                                Correct Answers
                            </a>
                        </th>
                        <th>
                            <a class="text-muted" data-sort="date">
                                Date & Time Taken
                            </a>
                        </th>
                        <th>
                            <a class="text-muted" data-sort="view">
                                Review
                            </a>
                        </th>

                    </tr>
                </thead>

                <tbody class="list">
                    @foreach ($attempts as $attempt)
                        <tr>
                            <td class="id">{{ $attempt->id }}</td>
                            <td class="topic">{!! $attempt->topic_name !!}</td>
                            <td class="score"><b>{{ round($attempt->score, 0) }} %</b></td>
                            <td class="totalQ">{{ $attempt->total_questions }}</td>
                            <td class="correct">{{ $attempt->correct_answers }}</td>
                            <td class="date">{{ $attempt->created_at->diffForHumans() }}</td>
                            <td class="view"><a href="{{ route('reviewTest', $attempt->id) }}"><button
                                        class="btn btn-success" type="submit">Review</button></a></td>

                        </tr>
                    @endforeach

                </tbody>
            </table>
            <div class="pagination justify-content-center">
                {{ $attempts->links() }}
            </div>
        </div>
    </main>
@endsection

@extends('main')

@section('container')
    <div class="row">
        <button class="quick-button">
            <img src="{{asset('assets/Shape (Stroke).svg')}}">
        </button>
        <button class="sub-quick-button inbox">
            <img src="{{ asset('assets/question_answer_24px.svg')}}" alt="inbox">
        </button>
        <button class="sub-quick-button task">
            <img src="{{ asset('assets/chrome_reader_mode_24px.svg')}}" alt="task">
        </button>

    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {


        });
    </script>
    <script>
        $('body').on('click', '.quick-button', function() {
            $('.sub-quick-button').toggle();
        })
    </script>
@endsection

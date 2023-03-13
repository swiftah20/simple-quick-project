@extends('main')

@section('container')
    <div class="row">
        <button class="quick-button">
            <img src="{{ asset('assets/Shape (Stroke).svg') }}">
        </button>
        <button class="sub-quick-button inbox d-none">
            <svg width="22" height="22" viewBox="0 0 26 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M18.0371 0.926147H1.66673C0.974137 0.926147 0.407471 1.49281 0.407471 2.18541V19.815L5.44451 14.778H18.0371C18.7297 14.778 19.2964 14.2113 19.2964 13.5187V2.18541C19.2964 1.49281 18.7297 0.926147 18.0371 0.926147ZM16.7779 3.44458V12.2594H4.39933L3.65637 13.0024L2.926 13.7327V3.44458H16.7779ZM21.8149 5.96321H24.3334C25.026 5.96321 25.5927 6.52987 25.5927 7.22247V26.1114L20.5556 21.0743H6.70376C6.01117 21.0743 5.4445 20.5077 5.4445 19.8151V17.2965H21.8149V5.96321Z"
                    fill="#8885FF" />
            </svg>
        </button>
        <button class="sub-quick-button task d-none">
            <svg width="26" height="20" viewBox="0 0 26 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M3.11114 0.666748H23.1111C24.3334 0.666748 25.3334 1.66675 25.3334 2.88897V17.3334C25.3334 18.5556 24.3334 19.5556 23.1111 19.5556H3.11114C1.88892 19.5556 0.888916 18.5556 0.888916 17.3334V2.88897C0.888916 1.66675 1.88892 0.666748 3.11114 0.666748ZM3.11114 2.88897V17.3334H12V2.88897H3.11114ZM23.1111 17.3334H14.2222V2.88897H23.1111V17.3334ZM22 6.77786H15.3334V8.44453H22V6.77786ZM15.3334 9.55564H22V11.2223H15.3334V9.55564ZM22 12.3334H15.3334V14.0001H22V12.3334Z"
                    fill="#F8B76B" />
            </svg>
        </button>
        <button class="btn btn-primary" id="klik"> klik </button>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {


        });
    </script>
    <script>
        function toggleSubQuickButton() {
            if ($('.sub-quick-button').hasClass('d-none')) {
                $('.sub-quick-button').removeClass('d-none');
            } else {
                $('.sub-quick-button').addClass('d-none');
            }
        }

        function animateSubQuick() {
            if ($('.inbox').hasClass('inbox-animate-in') && $('.task').hasClass('task-animate-in')) {
                $('.inbox').removeClass('inbox-animate-in');
                $('.inbox').addClass('inbox-animate-out');
                $('.task').removeClass('task-animate-in');
                $('.task').addClass('task-animate-out');
            } else {
                $('.inbox').addClass('inbox-animate-in');
                $('.inbox').removeClass('inbox-animate-out');
                $('.task').addClass('task-animate-in');
                $('.task').removeClass('task-animate-out');
            }
        }

        $('body').on('click', '.quick-button', function() {
            toggleSubQuickButton();
            animateSubQuick();
        })

        $('body').on('click', '.inbox', function() {
            $('.svg-inbox-active').removeClass('d-none');
            $('#tes').show();
        })

        // $('#modalInbox').on('shown.bs.modal', function() {
        //     $('#modalInbox').trigger('focus')
        // })

        $('#klik').on('click', function() {
            $('#tes').show();
        });

        $('body').on('click', '#klik', function() {
            alert('woi')
        })
    </script>
@endsection

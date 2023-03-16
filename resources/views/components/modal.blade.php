<div class="modal fade" id="modalBox" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-inbox" role="document">
        <div class="modal-content h-100">
            <div class="modal-content-inbox">
                @include('content.inbox-content')
            </div>
            <div class="modal-content-chat d-none">
                @include('content.chat-content')
            </div>
        </div>
    </div>

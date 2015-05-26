@if (Session::has('flash_notification.message'))
    @if (Session::has('flash_notification.overlay'))
        @include('flash::modal', ['modalClass' => 'flash-modal', 'title' => Session::get('flash_notification.title'), 'body' => Session::get('flash_notification.message')])
    @else
        <div class="alert alert-{{ Session::get('flash_notification.level') }} alert-msg">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

            {{ Session::get('flash_notification.message') }}
        </div>
    @endif
@endif

<style>
    .alert-msg{
        width: 100%;
        margin: 0 auto;
        text-align: center;
        font-weight: bold;
    }
</style>

<script>
    $('div.alert').delay(5000).slideUp(300);
</script>
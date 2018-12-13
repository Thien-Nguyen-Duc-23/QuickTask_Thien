<div class="col-lg-12">
    @if(Session::has('message'))
        <div class="alert alert-{!! Session::get('flag') !!}">
            {!! Session::get('message') !!}
        </div>
    @endif
</div>

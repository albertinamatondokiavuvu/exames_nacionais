
@if (isset($errors) && count($errors) > 0)
<div class="text-center mt-4 mb-4 alert-danger">
    @foreach ($errors->all() as $erro)
    <h5>{{ $erro }}</h5>
    @endforeach
</div>
@endif

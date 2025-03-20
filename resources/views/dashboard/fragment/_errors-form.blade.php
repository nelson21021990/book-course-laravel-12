@if ($errors->any())
@foreach ($errors->all() as $er)
<div>
    {{$er}}
</div>
    
@endforeach

@endif
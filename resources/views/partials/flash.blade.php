@if($flash=session('success'))
<div class="alert alert-success" id="flash">
	{{$flash}}
</div>

@elseif($flash=session('danger'))
<div class="alert alert-danger" id="flash">
	{{$flash}}
</div>
@elseif($flash=session('warning'))
<div class="alert alert-warning" id="flash">
	{{$flash}}
</div>
@endif
<!-- @extends('layouts.app')-->

@section('content')
<div class="container">
        <div class="col-md-10 col-md-offset-1">
		<div>
		<form method="POST" action="{{ route('books.update',[$book->id]) }}">
		@method("PATCH")
		@csrf
		<input type="hidden" name="id" value="{{ $book->id }}">
		<input type="hidden" name="page" value="1"> <br>
		Nombre: <input type="text" name="name" value="{{ $book->name }}">
		Código: <input type="text" name="code" value="{{ $book->code }}"> <br>
		Número: <input type="text" name="num" value="{{ $book->num }}"><br>
		<button type="submit" class="btn btn-outline-primary btn-sm" > Actualizar </button> 
		</form>
		</div>
		<hr size="8px" color="black" />
            </div>
        </div>
</div>
@endsection

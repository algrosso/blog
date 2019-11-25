<!-- @extends('layouts.app')-->

@section('content')
<div class="container">
        <div class="col-md-10 col-md-offset-1">
		<div>
		<form method="POST" action="{{ route('books.store')}}">
		@method("POST")
		@csrf
		Nombre: <input type="text" name="name" value="La bella y la bestia">
		Código: <input type="text" name="code" value="B.520-34-7"> <br>
		Número: <input type="text" name="num" value=""><br>
		<button type="submit" class="btn btn-outline-primary btn-sm" name='Register'> Nuevo </button> 
		</form>
		</div>
		<hr size="8px" color="black" />
            </div>
        </div>
</div>
@endsection

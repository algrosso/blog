<!-- @extends('layouts.app') -->

@section('content')

<div class="container">
 <div class="row">
  <div class="col-md-10 col-md-offset-1">
    <h4>Libros</h4>
  </div>
  <div class="col-md-10 col-md-offset-1 text-right">
    <a href="{{ route('books.create') }}" class="btn btn-outline-secondary btn-sm">Nuevo</a> 
  </div>
</div>
        <div class="col-md-10 col-md-offset-1">
              @foreach ($books as $book)
		<div class="contenido" style="float:left; width:80px; height:100px;">
		<img src="https://loremflickr.com/40/40?{{ $book->id }}" 
                     style="width:40px; height:40px; border-radius:50%; margin-right:15px; margin-top:15px">
		</div>
		<div>
		<ul style="list-style: none;">
    		  <li class="item">{{ $book->name }}</li>
		  <li class="item"> {{ $book-> code }} </li>
		  <li class="item"> {{ $book-> num }} </li>
		  <button type="button" class="btn btn-outline-primary btn-sm" 
                          onclick="location.href = '{{ route('books.edit', [$book->id]) }}'"> Editar </button> 
                  <form accept-charset="UTF-8" action="{{ route('books.destroy', [$book->id]) }}" method="POST">
		    @method('DELETE')
		    @csrf
                    <button type="submit" class="btn btn-outline-danger btn-sm"> Borrar </button>
		  </form>
		</ul>
		</div>
		<hr size="8px" color="black" />
	      @endforeach
            </div>
            {{ $books->links() }}
        </div>
</div>
@endsection

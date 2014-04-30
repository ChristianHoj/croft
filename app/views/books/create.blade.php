@section('content')
<h2>Create new book</h2>

{{ Form::model($book, array('route' => array('books.store', $book))) }}

<p>
  {{ Form::label('title', 'Book Title'); }}
  {{ Form::text('title'); }}
</p>

<p>
  {{ Form::label('description', 'Book Description'); }}
  {{ Form::textarea('description'); }}
</p>

{{ Form::submit('Create book'); }}
{{ Form::close() }}
@stop

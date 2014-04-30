<h2>Books</h2>

@foreach($books as $book)
  <p>{{ link_to_route('books.show', $book->title, array('id' => $book->id)) }}</p>
@endforeach

<p>{{ link_to_route('books.create', 'Add book') }}</p>

<!DOCTYPE html>
<head>
  <style>
    table, th, td {
    border: 1px solid black;
  }
  </style>
</head>
<body>
  <table style="width:100%">
    <tr>
      <th>El.paštas</th>
      <th>Knyga</th>
      <th>Autorius</th>
      <th>Data</th>
    </tr>
@foreach ($books as $book)
    <tr>
      <td>{{ $book->email }}</td>
      <td>{{ $book->pavadinimas }}</td>
      <td>{{ $book->autorius }}</td>
      <td>{{ $book->data }}</td>
    </tr>
@endforeach
@if (count($books) == 0)

<h2>Čia dar nieko nėra</h2>

@endif
  </table>
</body>
</html>
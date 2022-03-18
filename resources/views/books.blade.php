<!DOCTYPE html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <style>
    table, th, td {
    border: 1px solid black;
  }
  </style>
</head>
<body>
  <table style="width:100%" class="table">
  <thead class="thead-dark">  
    <tr>
      <th scope="col">El.paštas</th>
      <th scope="col">Knyga</th>
      <th scope="col">Autorius</th>
      <th scope="col">Data</th>
    </tr>
  <thread>
@foreach ($books as $book)
    <tr>
      <td scope="row">{{ $book->email }}</td>
      <td scope="row">{{ $book->pavadinimas }}</td>
      <td scope="row">{{ $book->autorius }}</td>
      <td scope="row">{{ $book->data }}</td>
    </tr>
@endforeach
@if (count($books) == 0)

<h2>Čia dar nieko nėra</h2>

@endif
  </table>
</body>
</html>
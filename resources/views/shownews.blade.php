<!DOCTYPE html>
<html lang="en">
<head>
  <title>News list</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>list</h2>
  <p>The .table-hover class enables a hover state on table rows:</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>title</th>
        <th>content</th>
        <th>Published</th>
        <th>ُedit</th>
      </tr>
    </thead>
    <tbody>
    @foreach($News as $data)
      <tr>
        <td>{{ $data->newstitle }}</td> 
        <td>{{ $data->content }}</td>
        <td> @if($data->published )  
             true
            @else
              false
            @endif
            </td>
            <td><a href="editNews/{{ $data->id }}">Edit</a></td>
            <td><a href="newsdetails/{{ $data->id }}">show</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
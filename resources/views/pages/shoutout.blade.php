<h1> Shoutout to : {{$text}} </h1>

<table border="1">
  <tr>
    <th>No.</th>
    <th> Color </th>
    <th> Description </th>
 </tr>
  @foreach($colors as $color => $description)
  <tr>
    <td>
      {{ $loop->iteration }}
    </td>
    <td>
      {{ $color }}
    </td>
    <td>
      {{ $description }}
    </td>
  </tr>
  @endforeach
</table>

<h1>
   Artist and song list 
 {{-- {{ $artist}} --}}
</h1>
@foreach ($artist as $x )
<h2> {{ $x->name }} </h2>
    
@endforeach

<table>
    <tr>
        <th> Artist Name </th>
        <th> Release Date</th>
        <th> Song Title</th>
    </tr>
    @foreach ($artist as $x)
    <tr>
        <td> {{ $x->name}} </td>
        @foreach ($x->song as $songdata )
        <td>{{ $songdata->title }} </td> 
        <td>{{ $songdata->release_year }} </td>            
        @endforeach
       
    </tr>
        
    @endforeach
</table>
<h2> {{$song}} </h2>

<table>
    <tr>
        <th> Song Name </th>
        <th> Release Date</th>
        <th> Artist Name</th>
    </tr>
    @foreach ($song as $x)
    <tr>
        <td> {{ $x->title}} </td>
        <td> {{ $x->release_year}} </td>
        <td> {{ $x->artist->name}} </td>
        
       


    

              
       
    </tr>
        
    @endforeach
</table>
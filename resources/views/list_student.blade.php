<a href="uj-ital"><button>Új</button></a>

<form action="keres" method="get">
    <input type="text" name="name">
    <button type="submit">Keresés</button>
</form>

<form action="show-update-drink" method="get">
    <input type="text" name="name">
    <button type="submit">Frissítés</button>
</form>

<form action="delete-drink" method="get">
    <input type="text" name="name">
    <button type="submit">Törlés</button>
</form>


<table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Név</th>
        <th>Ár</th>
        <!--<th>Mennyiség</th>-->
      </tr>
    </thead>
    <tbody>
      @foreach( $drinks as $drinks )
         <tr>
           <td>{{ $drink->id }}</td>
           <td>{{ $drink->product }}</td>
           <td>{{ $drink->price }}</td>
           <!-- <td>{{ $drink->amount }}</td> -->
           <td>{{ $drink->type->type }}</td>
         </tr>
      @endforeach
    </tbody>
  </table>
<h1>Töltse ki a mezőket</h1>

@if(session()->has("sucess"))
    <h3>{{ session("success") }}</h3>
@endif

<form action="update-drink" method="post">
    @csrf
    <p>
        <label for="">Termék neve:</label>
        <input type="text" name="product" value="{{$drink->product}}">
    </p>
    <p>
        <label for="">Ár:</label>
        <input type="text" name="price" value="{{$drink->price}}">
    </p>
    <!-- <p>
        <label for="">Mennyiség:</label>
        <input type="text" name="amount" value="{{$dirnk->amount}}">
    </p> -->
    <button type="submit">Frissítés</button>
</form>
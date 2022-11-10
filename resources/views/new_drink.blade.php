<h1>Töltse ki a mezőket</h1>

@if(session()->has("sucess"))
    <h3>{{ session("success") }}</h3>
@endif

<form action="submit-drink" method="post">
    @csrf
    <p>
        <label for="">Termék neve:</label>
        <input type="text" name="product" placeholder="product">
    </p>
    <p>
        <label for="">Ár:</label>
        <input type="text" name="price" placeholder="price">
    </p>
    <p>
        <label for="">Típus:</label>
        <input type="text" name="type" placeholder="type">
    </p>
    <button type="submit">Submit</button>
</form>
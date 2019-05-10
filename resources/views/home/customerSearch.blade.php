<link rel="stylesheet" href="{{ asset('css/customerSearch.css') }}">
<div class="form">
    <div class="form-2">
        <div>
            <h3>Find homes in Ha Noi on Aribnb</h3>
            <p>Discover entire home end private rooms perfect for any trip.</p>
        </div>
        <form method="get" action="{{ route('searchCustomer') }}">
            @csrf
            <p>WHERE</p>
            <div class="input-1">
                <input type="text" placeholder="AnyWhere" class="input-2" name="address" required>
            </div>
            <div class="form-3">
                <div>
                    <p>CHECK-IN</p>
                    <input type="date" class="date">
                    to
                    <input type="date" class="date">
                </div>
            </div>
            <div class="input-1">
                <p>Bathroom</p>
                <input type="number" placeholder="Bathroom" class="input-2" name="bathroom" required>
            </div>
            <div class="input-1">
                <p>Bedroom</p>
                <input type="number" placeholder="Bedroom" class="input-2" name="bedroom" required>
            </div>
            <div class="input-1">
                <p>About Price</p>
                <input type="number" placeholder="form" name="price" required>
                to
                <input type="number" placeholder="to" name="price-2" required>
            </div>
            <div class="button">
                <button type="submit">Search</button>
            </div>
        </form>
    </div>
</div>

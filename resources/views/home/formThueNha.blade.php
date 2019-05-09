<link rel="stylesheet" href="{{ asset('css/thueNha.css') }}">
<div class="form">
    <div class="form-2">
        <div>
            <h3>Booking Home in Ha Noi</h3>
            <p>Discover entire home end private rooms perfect for any trip.</p>
        </div>
        <form method="post">
            @csrf
            <div class="input-1">
                <p>Email</p>
                <input type="email" placeholder="Email" class="input-2" name="email" required value="{{ Auth::user()->email }}">
            </div>
            <div class="form-3">
                <div>
                    <p>CHECK-IN</p>
                    <input type="date" class="date" name="check-in">
                    to
                    <input type="date" class="date" name="check-out">
                </div>
            </div>
            <div class="button">
                <button onclick="alert('ban da dat nha thanh cong')">Book</button>
            </div>
            <button onclick="window.history.go(-1); return false;"><< Back</button>
        </form>
    </div>
</div>


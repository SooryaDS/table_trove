<!DOCTYPE html>
<html>
<head>
    <title>Restaurant Register</title>
</head>
<body>
    <form method="POST" action="{{ route('restaurant.register') }}">
        @csrf
        <div>
            <label>Restaurant Name:</label>
            <input type="text" name="name" required>
        </div>
        <div>
            <label>Email:</label>
            <input type="email" name="email" required>
        </div>
        <div>
            <label>Contact Number:</label>
            <input type="text" name="contact_number" required>
        </div>
        <div>
            <label>Address:</label>
            <input type="text" name="address" required>
        </div>
        <div>
            <label>Cuisine Type:</label><br>
            <input type="checkbox" name="cuisine_type[]" value="Indian"> Indian<br>
            <input type="checkbox" name="cuisine_type[]" value="Sri Lankan"> Sri Lankan<br>
            <input type="checkbox" name="cuisine_type[]" value="Mexican"> Mexican<br>
            <input type="checkbox" name="cuisine_type[]" value="Japanese"> Japanese<br>
        </div>
        <div>
            <label>Password:</label>
            <input type="password" name="password" required>
        </div>
        <div>
            <label>Confirm Password:</label>
            <input type="password" name="password_confirmation" required>
        </div>
        <button type="submit">Register</button>
    </form>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</body>
</html>

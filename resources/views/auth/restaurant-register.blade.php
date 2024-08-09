<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
<<<<<<< HEAD
            background: url('{{ asset('images/wallpaper2.jpg') }}') no-repeat center center fixed;
=======
            background: url('{{ asset('images/wallpaper4.jpg') }}') no-repeat center center fixed;
>>>>>>> 6c6e3d365ad8c86361073d2302430daeac28e5bc
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .register-container {
<<<<<<< HEAD
            margin-top: 500px;
            background-color: #2a1d25;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 300px;
            width: 100%;
            color: white;
            opacity: 0.9;
        }
        .register-container h2 {
            margin-bottom: 10px;
            font-size: 24px;
=======
            background-color: #2a1d25;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
            max-width: 400px;
            width: 100%;
            color: white;
            opacity: 0.95;
        }
        .register-container h2 {
            margin-bottom: 20px;
            font-size: 28px;
>>>>>>> 6c6e3d365ad8c86361073d2302430daeac28e5bc
            text-align: center;
            color: #e4cfdc;
        }
        .register-container label {
            display: block;
            margin-bottom: 8px;
<<<<<<< HEAD
            font-size: 14px;
=======
            font-size: 16px;
>>>>>>> 6c6e3d365ad8c86361073d2302430daeac28e5bc
            color: #fff;
        }
        .register-container input[type="text"],
        .register-container input[type="email"],
        .register-container input[type="password"] {
<<<<<<< HEAD
            width: 90%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 15px;
            font-size: 14px;
            background-color: #ead8f4;
        }
        .logo-container {
            margin: 10px 0;
        }
        .logo-container img {
            width: 170px;
            height: 75px;
            display: block;
            margin: 0 auto;
        }
        .register-container button {
            width: 50%;
            padding: 10px;
            margin: 0 auto;
            display: block;
            background-color: #9e1e8b;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
=======
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            background-color: #ead8f4;
        }
        .logo-container {
            margin: 20px 0;
            text-align: center;
        }
        .logo-container img {
            width: 150px;
            height: auto;
        }
        .register-container button {
            width: 100%;
            padding: 15px;
            margin: 20px 0;
            display: block;
            background-color: #9e1e8b;
            border: none;
            border-radius: 8px;
            color: #fff;
            font-size: 18px;
>>>>>>> 6c6e3d365ad8c86361073d2302430daeac28e5bc
            cursor: pointer;
            font-weight: bold;
            transition: 0.3s;
        }
        .register-container button:hover {
            background-color: #892abc;
        }
        .register-container .no-account {
<<<<<<< HEAD
            margin-top: 15px;
=======
            margin-top: 20px;
>>>>>>> 6c6e3d365ad8c86361073d2302430daeac28e5bc
            text-align: center;
        }
        .register-container .no-account a {
            color: #007bff;
            text-decoration: none;
        }
        .register-container .no-account a:hover {
            text-decoration: underline;
        }
<<<<<<< HEAD
=======
        .cuisine-options {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 15px;
        }
        .cuisine-options label {
            font-size: 14px;
        }
>>>>>>> 6c6e3d365ad8c86361073d2302430daeac28e5bc
    </style>
</head>
<body>
    <div class="register-container">
        <div class="logo-container">
            <img src="{{ asset('images/logo.png') }}" alt="Logo"> <!-- Replace 'logo.png' with your logo image path -->
        </div>
        <h2>Restaurant Register</h2>
        <form id="register-form" method="POST" action="{{ route('restaurant.register') }}">
            @csrf
            <label for="name">Restaurant Name</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="contact_number">Contact Number</label>
            <input type="text" id="contact_number" name="contact_number" required>

            <label for="address">Address</label>
            <input type="text" id="address" name="address" required>

            <label for="cuisine_type">Cuisine Type</label>
            <div class="cuisine-options">
                <div>
                    <input type="checkbox" id="indian" name="cuisine_type[]" value="Indian">
                    <label for="indian">Indian</label>
                </div>
                <div>
                    <input type="checkbox" id="srilankan" name="cuisine_type[]" value="Sri Lankan">
                    <label for="srilankan">Sri Lankan</label>
                </div>
                <div>
                    <input type="checkbox" id="mexican" name="cuisine_type[]" value="Mexican">
                    <label for="mexican">Mexican</label>
                </div>
                <div>
                    <input type="checkbox" id="japanese" name="cuisine_type[]" value="Japanese">
                    <label for="japanese">Japanese</label>
                </div>
            </div>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <label for="password_confirmation">Confirm Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>

            <button type="submit">Register</button>
        </form>
        <div class="no-account">
            <p>Already have an account? <a href="{{ route('restaurant.login') }}">Login here</a></p>
        </div>
    </div>
</body>
</html>

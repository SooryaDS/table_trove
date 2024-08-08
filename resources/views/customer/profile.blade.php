<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('{{ asset("images/wallpaper1.jpg") }}') no-repeat center center fixed;
            margin: 0;
            padding: 0;
            background-color: #cd9cc0;
        }
        .profile-card {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 10px;
            color: #fff;
            max-width: 600px;
            margin: 50px auto;
        }
        .profile-card h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .profile-card img {
            display: block;
            margin: 0 auto 20px;
            border-radius: 50%;
            max-width: 150px;
        }
        .profile-card form {
            display: flex;
            flex-direction: column;
        }
        .profile-card form .form-group {
            margin-bottom: 15px;
        }
        .profile-card form .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .profile-card form .form-group input,
        .profile-card form .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .profile-card form .form-group input[type="file"] {
            padding: 3px;
        }
        .profile-card form button {
            padding: 10px;
            border: none;
            background-color: #5cb85c;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .profile-card form button:hover {
            background-color: #4cae4c;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <img src="{{ asset('images/logo.png') }}" alt="Logo" onclick="location.href='/dashboard'">
            <ul>
                <li><a href="#">Restaurants</a></li>
                <li><a href="#">Reservations</a></li>
            </ul>
        </nav>
        <div class="search-bar">
            <input type="text" placeholder="Search...">
            <div class="profile-icon" onclick="location.href='/profile'">
                 <img src="{{ asset('images/profile.jpg') }}" alt="Profile">
            </div>
        </div>
    </header>
    <div class="profile-card">
        <h2>User Profile</h2>
        <img src="{{ asset($user->profile->profile_image ?? 'images/profile.jpg') }}" alt="Profile Image">
        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="{{ $user->name }}">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="{{ $user->email }}">
            </div>
            <div class="form-group">
                <label for="contact_number">Contact Number:</label>
                <input type="text" id="contact_number" name="contact_number" value="{{ $user->profile->contact_number ?? '' }}">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password">
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirm Password:</label>
                <input type="password" id="password_confirmation" name="password_confirmation">
            </div>
            <div class="form-group">
                <label for="profile_image">Profile Image:</label>
                <input type="file" id="profile_image" name="profile_image">
            </div>
            <div class="form-group">
                <label for="allergies">Allergies:</label>
                <select id="allergies" name="allergies[]" multiple>
                    <option value="Peanuts" {{ in_array('Peanuts', $user->profile->allergies ?? []) ? 'selected' : '' }}>Peanuts</option>
                    <option value="Shellfish" {{ in_array('Shellfish', $user->profile->allergies ?? []) ? 'selected' : '' }}>Shellfish</option>
                    <option value="Dairy" {{ in_array('Dairy', $user->profile->allergies ?? []) ? 'selected' : '' }}>Dairy</option>
                    <option value="Gluten" {{ in_array('Gluten', $user->profile->allergies ?? []) ? 'selected' : '' }}>Gluten</option>
                    <option value="Soy" {{ in_array('Soy', $user->profile->allergies ?? []) ? 'selected' : '' }}>Soy</option>
                    <option value="Eggs" {{ in_array('Eggs', $user->profile->allergies ?? []) ? 'selected' : '' }}>Eggs</option>
                    <option value="Tree Nuts" {{ in_array('Tree Nuts', $user->profile->allergies ?? []) ? 'selected' : '' }}>Tree Nuts</option>
                    <option value="Fish" {{ in_array('Fish', $user->profile->allergies ?? []) ? 'selected' : '' }}>Fish</option>
                    <option value="Wheat" {{ in_array('Wheat', $user->profile->allergies ?? []) ? 'selected' : '' }}>Wheat</option>
                    <option value="Sesame" {{ in_array('Sesame', $user->profile->allergies ?? []) ? 'selected' : '' }}>Sesame</option>
                    <option value="Other" {{ in_array('Other', $user->profile->allergies ?? []) ? 'selected' : '' }}>Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="preferences">Dietary Preferences:</label>
                <select id="preferences" name="preferences[]" multiple>
                    <option value="Vegetarian" {{ in_array('Vegetarian', $user->profile->preferences ?? []) ? 'selected' : '' }}>Vegetarian</option>
                    <option value="Vegan" {{ in_array('Vegan', $user->profile->preferences ?? []) ? 'selected' : '' }}>Vegan</option>
                    <option value="Keto" {{ in_array('Keto', $user->profile->preferences ?? []) ? 'selected' : '' }}>Keto</option>
                    <option value="Paleo" {{ in_array('Paleo', $user->profile->preferences ?? []) ? 'selected' : '' }}>Paleo</option>
                    <option value="Pescatarian" {{ in_array('Pescatarian', $user->profile->preferences ?? []) ? 'selected' : '' }}>Pescatarian</option>
                    <option value="Gluten-Free" {{ in_array('Gluten-Free', $user->profile->preferences ?? []) ? 'selected' : '' }}>Gluten-Free</option>
                    <option value="Other" {{ in_array('Other', $user->profile->preferences ?? []) ? 'selected' : '' }}>Other</option>
                </select>
            </div>
            <button type="submit">Update Profile</button>
        </form>
    </div>
</body>
</html>

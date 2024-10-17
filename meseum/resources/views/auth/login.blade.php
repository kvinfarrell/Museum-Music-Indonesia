<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        body {
            background: url("Img/background.jpg") no-repeat center center fixed;
            background-size: cover;
            font-family: 'Roboto', sans-serif;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
        }
        .card {
            border-radius: 16px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.9); /* Semi-transparent white background */
            position: relative;
        }
        .card-header {
            background-color: #343a40;
            border-radius: 16px 16px 0 0 !important;
            border-bottom: none;
            color: #fff;
            padding: 10px;
            text-align: center;
            position: relative;
        }
        .card-header h3 {
            margin: 0;
        }
        .card-body {
            padding: 2rem;
        }
        .form-label {
            font-weight: 500;
        }
        .form-control:focus {
            box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.25);
            border-color: #38a1db;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            font-weight: 500;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
        .alert {
            margin-bottom: 1rem;
            padding: 1rem;
            border-radius: 0.5rem;
            display: flex;
            align-items: center;
        }
        .alert-icon {
            margin-right: 10px;
            font-size: 1.25rem;
        }
        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
        .close-btn {
            position: absolute;
            top: 0px;
            right: 10px;
            background: transparent;
            border: none;
            color: #fff;
            font-size: 1.5rem;
            cursor: pointer;
        }
        @media (max-width: 576px) {
            .card {
                border-radius: 12px;
            }
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="card-header">
            <button type="button" class="close-btn" onclick="goBack()">&times;</button>
            <h3>Selamat Datang</h3>
            <h5>Museum Musik Indonesia</h5>
        </div>
        <div class="card-body">
            <!-- Display Success Message -->
            @if (session('status'))
                <div class="alert alert-success">
                    <span class="alert-icon">&#9989;</span>
                    <div>
                        {{ session('status') }}
                    </div>
                </div>
            @endif

            <!-- Display Validation Errors -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <span class="alert-icon">&#9888;</span>
                    <div>
                        @foreach ($errors->all() as $error)
                            {{ $error }}
                        @endforeach
                    </div>
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Username -->
                <div class="mb-3">
                    <label for="name" class="form-label">Username</label>
                    <input type="text" id="name" name="name" class="form-control" required autofocus>
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>

    </div>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

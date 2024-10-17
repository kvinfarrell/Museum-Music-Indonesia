<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
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
            background-color: rgba(255, 255, 255, 0.9);
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
        .card-body {
            padding: 2rem;
        }
        .input-group-text {
            cursor: pointer;
        }
        .alert {
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="card-header">
            <h3>Ganti Password Admin</h3>
            <h6>Museum Musik Indonesia</h6>
        </div>
        <div class="card-body">
            <!-- Display Success or Error Messages -->
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            <form method="POST" action="{{ route('change-password') }}">
                @csrf

                <!-- Current Password -->
                <div class="mb-3">
                    <label for="current_password" class="form-label">Password Lama</label>
                    <input type="password" id="current_password" name="current_password" class="form-control" required>
                </div>

                <!-- New Password -->
                <div class="mb-3">
                    <label for="new_password" class="form-label">Password Baru</label>
                    <div class="input-group">
                        <input type="password" id="new_password" name="new_password" class="form-control" required>
                        {{-- <span class="input-group-text" onclick="togglePasswordVisibility('new_password', this)">
                            <img src="/Img/show.png" class="img-fluid" style="width: 20px; height: 20px;" alt="Show Password">
                        </span> --}}
                    </div>
                </div>

                <!-- Confirm New Password -->
                <div class="mb-3">
                    <label for="new_password_confirmation" class="form-label">Konfirmasi Password Baru</label>
                    <div class="input-group">
                        <input type="password" id="new_password_confirmation" name="new_password_confirmation" class="form-control" required>
                        {{-- <span class="input-group-text" onclick="togglePasswordVisibility('new_password_confirmation', this)">
                            <img src="/Img/show.png" class="img-fluid" style="width: 20px; height: 20px;" alt="Show Password">
                        </span> --}}
                    </div>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Simpan Password Baru</button>
                </div>
            </form>
        </div>
    </div>

    {{-- <script>
        function togglePasswordVisibility(fieldId, element) {
            const passwordField = document.getElementById(fieldId);
            const fieldType = passwordField.getAttribute('type');

            if (fieldType === 'password') {
                passwordField.setAttribute('type', 'text');
                element.innerHTML = '<img src="/Img/hide.png" class="img-fluid" style="width: 20px; height: 20px;" alt="Hide Password" />';
            } else {
                passwordField.setAttribute('type', 'password');
                element.innerHTML = '<img src="/Img/show.png" class="img-fluid" style="width: 20px; height: 20px;" alt="Show Password" />';
            }
        }
    </script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

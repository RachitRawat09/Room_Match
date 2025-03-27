<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }
        .container {
            max-width: 900px;
        }
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 100%;
            height: 90vh;
        }
        .left-section img {
            border-radius: 10px;
            width: 100%;
            height: auto;
        }
        .right-section {
            padding: 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .btn-toggle {
            width: 100%;
            display: flex;
        }
        .btn-toggle button {
            flex: 1;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card d-flex flex-row">
            <div class="col-md-6 left-section d-flex flex-column justify-content-center p-4">
                <h2>RoomMatch connects you with compatible roommates and verified landlords for a better living experience.</h2>
                <p><strong>AI-Powered Matching</strong> - Find roommates based on lifestyle, preferences, and compatibility.</p>
                <p><strong>Verified Listings</strong> - All properties and landlords are verified for your safety.</p>
                <img src="https://t3.ftcdn.net/jpg/08/23/42/34/360_F_823423411_l5nwHDEz9FIvRIFzlqpkvg9kFkX6Gwt8.jpg" class="img-fluid rounded" alt="House">
            </div>
            <div class="col-md-6 right-section">
                <h3 class="text-center">Welcome Back</h3>
                <p class="text-center">Sign in to your RoomMatch account to continue your journey</p>
                <div class="btn-toggle mb-3">
                    <button class="btn btn-light">Login</button>
                    <button class="btn btn-secondary">Register</button>
                </div>
                <form action="login.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Enter your username" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
                    </div>
                    <button type="submit" class="btn btn-dark w-100">Login</button>
                </form>
                <p class="text-center mt-3">Don't have an account? <a href="register.php">Register now</a></p>
            </div>
        </div>
    </div>
</body>
</html>
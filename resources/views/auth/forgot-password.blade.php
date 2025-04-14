<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forgot Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0 text-center">Forgot Password</h4>
                </div>
                <div class="card-body">
                    <div id="success-message" class="alert alert-success d-none"></div>

                    <form id="forgot-password-form">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address:</label>
                            <input type="email" name="email" id="email" class="form-control" required>
                            <small id="error-message" class="text-danger d-none"></small>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Send Reset Link</button>
                    </form>
                    
                    <div class="text-center mt-3">
                        <a href="{{route('login')}}">Back to Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById("forgot-password-form").addEventListener("submit", function(event) {
        event.preventDefault();
        var email = document.getElementById("email").value;
        var errorMessage = document.getElementById("error-message");
        var successMessage = document.getElementById("success-message");

        if (!email.includes("@")) {
            errorMessage.textContent = "Please enter a valid email address.";
            errorMessage.classList.remove("d-none");
            return;
        }

        errorMessage.classList.add("d-none");
        successMessage.textContent = "Password reset link has been sent!";
        successMessage.classList.remove("d-none");
    });
</script>

</body>
</html>

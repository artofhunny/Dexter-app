<x-layout>
<!-- Registration Form -->
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow p-4" style="width: 400px;">
        <h3 class="text-center mb-4">Register</h3>
        
        <form action="{{'/register'}}" method="POST">
            @csrf
            <!-- Name -->
            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                @error('name')
                    <p class="error">{{$message}}</p>
                @enderror
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                @error('email')
                <p class="error">{{$message}}</p>
            @enderror
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                @error('password')
                <p class="error">{{$message}}</p>
            @enderror
            </div>

            <!-- Confirm Password -->
            <div class="mb-3">
                <label for="confirm_password" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="confirm_password" name="password_confirmation" placeholder="Confirm your password" required>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary w-100">Register</button>

            <!-- Already have an account? -->
            <div class="text-center mt-3">
                <small>Already have an account? <a href="login.html">Login</a></small>
            </div>
        </form>
    </div>
</div>

</x-layout>
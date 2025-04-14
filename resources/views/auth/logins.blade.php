<x-layout>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow p-4" style="width: 400px;">
            <h3 class="text-center mb-4">Login</h3>
    
            <form action="{{route('login')}}" method="POST">
                @csrf
                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                    @error('email')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
    
                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                    @error('password')
                    <div class="error">{{ $message }}</div>
                    @enderror
                </div>
    
         

                @error('failed')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
    
                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary w-100">Login</button>
    
                <!-- Forgot Password & Register Link -->
                <div class="text-center mt-3">
                    <small><a href="{{route('password.request')}}">Forgot Password?</a></small> <br>
                    <small>Don't have an account? <a href="register.html">Register</a></small>
                </div>
            </form>
        </div>
    </div>
</x-layout>
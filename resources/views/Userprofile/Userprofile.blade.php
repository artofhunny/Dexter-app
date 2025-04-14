<x-layout>
    <div class="container mt-5">
        <div class="card shadow p-4">
            <h2 class="fw-bold mb-4">Edit Profile</h2>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <form action="{{ route('profile.update', ['id' => $user->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <!-- Profile Image -->
                <div class="mb-3 text-center">
                    <img src="{{ Auth::user()->profile_image ? asset('storage/' . Auth::user()->profile_image) : 'https://via.placeholder.com/150' }}" 
                        class="rounded-circle shadow-sm" width="120" height="120" alt="Profile Image">
                    <input type="file" name="profile_image" class="form-control mt-3">
                </div>

                <!-- Name (Read-only) -->
                <div class="mb-3">
                    <label class="form-label fw-bold">Name</label>
                    <input type="text" class="form-control" value="{{ Auth::user()->name }}" readonly>
                </div>

                <!-- Email (Read-only) -->
                <div class="mb-3">
                    <label class="form-label fw-bold">Email</label>
                    <input type="email" class="form-control" value="{{ Auth::user()->email }}" readonly>
                </div>

                <!-- Address -->
                <div class="mb-3">
                    <label class="form-label fw-bold">Address</label>
                    <input type="text" name="address" class="form-control" value="{{ old('address', Auth::user()->address) }}">
                </div>

                <!-- Mobile Number -->
                <div class="mb-3">
                    <label class="form-label fw-bold">Mobile Number</label>
                    <input type="text" name="mobile_number" class="form-control" value="{{ old('mobile_number', Auth::user()->mobile_number) }}">
                </div>

                <button type="submit" class="btn btn-primary w-100"><i class="fas fa-save"></i> Update Profile</button>
            </form>
        </div>
    </div>
</x-layout>

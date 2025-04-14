
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white text-center">
                    <h4>Edit User: {{ $user->name }}</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.user.update', ['id' => $user->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label fw-bold">Full Name</label>
                            <input type="text" class="form-control" value="{{ $user->name }}" disabled>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Email</label>
                            <input type="email" class="form-control" value="{{ $user->email }}" disabled>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Address</label>
                            <input type="text" name="address" value="{{ $user->address }}" class="form-control" placeholder="Enter address">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Mobile Number</label>
                            <input type="text" name="mobile_number" value="{{ $user->mobile_number }}" class="form-control" placeholder="Enter mobile number">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Profile Image</label>
                            <input type="file" name="profile_image" class="form-control" id="profileImageInput">
                            @if($user->profile_image)
                                <div class="mt-2">
                                    <img id="profilePreview" src="{{ asset('storage/' . $user->profile_image) }}" width="120" class="rounded shadow border">
                                </div>
                            @endif
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-success">Update User</button>
                            <a href="{{ route('wa.admin') }}" class="btn btn-secondary">Cancel</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Image Preview Script -->
<script>
document.getElementById('profileImageInput').addEventListener('change', function(event) {
    let reader = new FileReader();
    reader.onload = function(){
        let preview = document.getElementById('profilePreview');
        if (preview) {
            preview.src = reader.result;
        } else {
            let img = document.createElement('img');
            img.id = 'profilePreview';
            img.src = reader.result;
            img.width = 120;
            img.classList.add('rounded', 'shadow', 'border', 'mt-2');
            document.querySelector('.mb-3').appendChild(img);
        }
    };
    reader.readAsDataURL(event.target.files[0]);
});
</script>
</body>
</html>


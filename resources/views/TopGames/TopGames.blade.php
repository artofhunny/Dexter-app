<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Game Upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 20px;
        }
        
        .upload-container {
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        
        .form-title {
            color: #2c3e50;
            margin-bottom: 25px;
            text-align: center;
            font-weight: 600;
        }
        
        .image-upload-box {
            border: 2px dashed #ced4da;
            border-radius: 6px;
            padding: 20px;
            text-align: center;
            margin-bottom: 15px;
            transition: all 0.3s;
            height: 300px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        
        .image-upload-box:hover {
            border-color: #3498db;
        }
        
        .image-upload-box img {
            max-width: 100%;
            max-height: 200px;
            margin-bottom: 10px;
            display: none;
        }
        
        .upload-icon {
            font-size: 48px;
            color: #7f8c8d;
            margin-bottom: 15px;
        }
        
        .btn-home {
            background-color: #2c3e50;
            color: white;
            margin-top: 20px;
        }
        
        .btn-home:hover {
            background-color: #1a252f;
            color: white;
        }
        
        .btn-submit {
            background-color: #3498db;
            color: white;
            margin-top: 20px;
        }
        
        .btn-submit:hover {
            background-color: #2980b9;
            color: white;
        }
        
        .image-preview-container {
            position: relative;
            width: 100%;
        }
        
        .remove-image {
            position: absolute;
            top: 5px;
            right: 5px;
            background-color: rgba(255, 0, 0, 0.7);
            color: white;
            border: none;
            border-radius: 50%;
            width: 25px;
            height: 25px;
            font-size: 12px;
            cursor: pointer;
            display: none;
        }
        
        .url-input {
            margin-top: 10px;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="upload-container">
        <h2 class="form-title">Top Game</h2>
        
        <form method="POST" action="{{ route('topGame.store') }}" enctype="multipart/form-data" id="hotOffersForm">
            @csrf            
            <div class="row">
                <!-- Offer 1 -->
                <div class="col-md-4">
                    <div class="image-upload-box" id="uploadBox1">
                        <div class="image-preview-container">
                            <img id="preview1" src="" alt="Preview">
                            <button type="button" class="remove-image" onclick="removeImage(1)">×</button>
                        </div>
                        <div class="upload-content">
                            <div class="upload-icon">
                                <i class="fas fa-cloud-upload-alt"></i>
                            </div>
                            <p>Upload Image 1</p>
                            <input type="file" name="offer_image_1" id="offerImage1" accept="image/*" class="d-none" onchange="previewImage(this, 1)">
                            <label for="offerImage1" class="btn btn-sm btn-outline-primary mt-2">Choose File</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="url" name="offer_url_1" class="form-control url-input" placeholder="Enter URL for Offer 1">
                    </div>
                </div>
                
                <!-- Offer 2 -->
                <div class="col-md-4">
                    <div class="image-upload-box" id="uploadBox2">
                        <div class="image-preview-container">
                            <img id="preview2" src="" alt="Preview">
                            <button type="button" class="remove-image" onclick="removeImage(2)">×</button>
                        </div>
                        <div class="upload-content">
                            <div class="upload-icon">
                                <i class="fas fa-cloud-upload-alt"></i>
                            </div>
                            <p>Upload Image 2</p>
                            <input type="file" name="offer_image_2" id="offerImage2" accept="image/*" class="d-none" onchange="previewImage(this, 2)">
                            <label for="offerImage2" class="btn btn-sm btn-outline-primary mt-2">Choose File</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="url" name="offer_url_2" class="form-control url-input" placeholder="Enter URL for Offer 2">
                    </div>
                </div>
                
                <!-- Offer 3 -->
                <div class="col-md-4">
                    <div class="image-upload-box" id="uploadBox3">
                        <div class="image-preview-container">
                            <img id="preview3" src="" alt="Preview">
                            <button type="button" class="remove-image" onclick="removeImage(3)">×</button>
                        </div>
                        <div class="upload-content">
                            <div class="upload-icon">
                                <i class="fas fa-cloud-upload-alt"></i>
                            </div>
                            <p>Upload Image 3</p>
                            <input type="file" name="offer_image_3" id="offerImage3" accept="image/*" class="d-none" onchange="previewImage(this, 3)">
                            <label for="offerImage3" class="btn btn-sm btn-outline-primary mt-2">Choose File</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="url" name="offer_url_3" class="form-control url-input" placeholder="Enter URL for Offer 3">
                    </div>
                </div>
            </div>
            
            <div class="d-flex justify-content-between">
                <a href="/" class="btn btn-home">
                    <i class="fas fa-home"></i> Home Page
                </a>
                <button type="submit" class="btn btn-submit">
                    <i class="fas fa-save"></i> Save Offers
                </button>
            </div>
        </form>
    </div>

    <script>
        function previewImage(input, boxNumber) {
            const preview = document.getElementById(`preview${boxNumber}`);
            const uploadBox = document.getElementById(`uploadBox${boxNumber}`);
            const removeBtn = uploadBox.querySelector('.remove-image');
            const uploadContent = uploadBox.querySelector('.upload-content');

            if (input.files && input.files[0]) {
                const reader = new FileReader();

                reader.onload = function (e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                    removeBtn.style.display = 'block';
                    uploadContent.style.display = 'none';
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function removeImage(boxNumber) {
            const input = document.getElementById(`offerImage${boxNumber}`);
            const preview = document.getElementById(`preview${boxNumber}`);
            const uploadBox = document.getElementById(`uploadBox${boxNumber}`);
            const removeBtn = uploadBox.querySelector('.remove-image');
            const uploadContent = uploadBox.querySelector('.upload-content');

            input.value = '';
            preview.src = '';
            preview.style.display = 'none';
            removeBtn.style.display = 'none';
            uploadContent.style.display = 'block';
        }
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Photo and Select Category</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Upload Photo and Select Category</h2>
        <form action="{{ route('addphoto') }}" method="post" enctype="multipart/form-data">
            @csrf <!-- This is necessary for Laravel to handle the form submission securely -->

            <div class="form-group">
                <label for="photo">Upload Photo:</label>
                <input type="file" class="form-control-file" id="photo" name="photo" accept="image/*" required>
            </div>

            <div class="form-group">
                <label for="category">Select Category:</label>
                <select class="form-control" id="category" name="category" required>
                    <option value="">--Select Category--</option>
                    <option value="skills">Skills</option>
                    <option value="education">Education</option>
                    <option value="financial">Financial</option>
                    <option value="health">Health</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

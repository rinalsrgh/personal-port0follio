<!DOCTYPE html>
<html>
<head>
    <title>Edit Project Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Edit Project Data</h2>
    @foreach($project as $p)
    <form action="/project/update" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $p->id }}">
        <div class="form-group">
            <label for="judul">Title:</label>
            <input type="text" class="form-control" id="judul" name="judul" value="{{ $p->judul }}">
        </div>
        <div class="form-group">
            <label for="deskripsi">Description:</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi">{{ $p->deskripsi }}</textarea>
        </div>
        <div class="form-group">
            <label for="link">Link:</label>
            <input type="text" class="form-control" id="link" name="link" value="{{ $p->link }}">
        </div>
        <div class="form-group">
            <label for="image">Image URL:</label>
            <input type="text" class="form-control" id="image" name="image" value="{{ $p->image }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    @endforeach
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

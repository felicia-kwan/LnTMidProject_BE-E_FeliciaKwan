<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Input</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('readBook')}}">View</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
        <form action="{{route('updatingBook', $book->id)}}" method="POST">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="Judul" class="form-label">Judul</label>
            <input type="text" class="form-control" id="Judul" name="Judul" value="{{$book->Judul}}">
        </div>
        <div class="mb-3">
            <label for="Author" class="form-label">Author</label>
            <input type="text" class="form-control" id="Author" name="Author" value="{{$book->Author}}">
        </div>
        <div class="mb-3">
        <label for="JumlahHalaman" class="form-label">Jumlah Halaman</label>
        <input type="number" class="form-control" id="JumlahHalaman" name="JumlahHalaman" value="{{$book->JumlahHalaman}}">
        </div>
        <div class="mb-3">
            <label for="TahunTerbit" class="form-label">Tahun Terbit</label>
            <input type="number" class="form-control" id="TahunTerbit" name="TahunTerbit" value="{{$book->TahunTerbit}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

</head>

<body>
    <h1>Home</h1>

    <div class="container">
    <form action="{{ route('formsubmitted')}}" method="post">
        @csrf
        <label for="fullname" class="form-label">Full name:</label>
        <input type="text" id="fullname" class="form-control" name="fullname" placeholder="Enter your full name" required>
        <br><br>
        <label for="email" class="form-label">Email:</label>
        <input type="text" id="email" name="email" class="form-control" placeholder="Enter your email" required>
        <br><br>
        <button type="submit">Submit</button>
    </form>
    </div>

</body>

</html>
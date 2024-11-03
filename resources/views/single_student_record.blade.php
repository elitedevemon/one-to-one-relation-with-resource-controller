<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Single student record</title>
</head>

<body>
  <h2>Name: {{ $student->name }}</h2>
  <h2>Email: {{ $student->contact->email }}</h2>
  <h2>Phone: {{ $student->contact->phone }}</h2>
  <h2>Date of birth: {{ $student->dob }}</h2>
  <h2>Address: {{ $student->contact->address }}</h2>
</body>

</html>

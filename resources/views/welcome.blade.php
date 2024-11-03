<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>One to One relation</title>
</head>

<body>
  <form action="{{ route('student.store') }}" method="post">
    @csrf
    <input type="text" name="name" id="name" placeholder="name">
    <input type="text" name="email" id="email" placeholder="email">
    <input type="number" name="phone" id="phone" placeholder="phone">
    <input type="date" name="dob" id="dob" placeholder="date of birth">
    <input type="text" name="address" id="address" placeholder="address">
    <input type="submit" value="submit">
  </form>

</body>

</html>

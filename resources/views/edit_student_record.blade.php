<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Edit Student Record</title>
</head>

<body>
  <form action="{{ route('student.update', $student->id) }}" method="post">
    @csrf
    @method('PUT')
    <input type="text" name="name" id="name" placeholder="name" value="{{ $student->name }}">
    <input type="text" name="email" id="email" placeholder="email" value="{{ $student->contact->email }}">
    <input type="number" name="phone" id="phone" placeholder="phone" value="{{ $student->contact->phone }}">
    <input type="date" name="dob" id="dob" placeholder="date of birth" value="{{ $student->dob }}">
    <input type="text" name="address" id="address" placeholder="address" value="{{ $student->contact->address }}">
    <input type="submit" value="submit">
  </form>
</body>

</html>

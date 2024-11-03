<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Student Record</title>
</head>

<body>
  <a href="{{ route('student.create') }}">Create Student</a>
  <table border="1">
    <thead>
      <th>SI</th>
      <th>Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Dob</th>
      <th>Address</th>
      <th>Show</th>
      <th>Edit</th>
      <th>Delete</th>
    </thead>
    <tbody>
      @forelse ($students as $student)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $student->name }}</td>
          <td>{{ $student->contact->email }}</td>
          <td>{{ $student->contact->phone }}</td>
          <td>{{ $student->dob }}</td>
          <td>{{ $student->contact->address }}</td>
          <td><a href="{{ route('student.show', $student->id) }}">Show</a></td>
          <td><a href="{{ route('student.edit', $student->id) }}">Edit</a></td>
          <td>
            <form action="{{ route('student.destroy', $student->id) }}" method="post">
              @csrf
              @method('DELETE')
              <input type="submit" value="Delete" />
            </form>
          </td>
        </tr>
      @empty
        <tr>
          <h3>No record found</h3>
        </tr>
      @endforelse
    </tbody>
  </table>
</body>

</html>

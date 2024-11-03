<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentRecordController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $students = Student::with('contact')->get();
    return view('student_record', compact('students'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('welcome');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(StudentRequest $request)
  {
    $student = Student::create([
      'name' => $request->name,
      'dob' => $request->dob
    ]);

    $student->contact()->create([
      'email' => $request->email,
      'phone' => $request->phone,
      'address' => $request->address
    ]);

    return redirect()->route('student.index');
    ;
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    $student = Student::with('contact')->findOrFail($id);
    return view('single_student_record', compact('student'));
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    $student = Student::with('contact')->findOrFail($id);
    return view('edit_student_record', compact('student'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    $student = Student::with('contact')->findOrFail($id);
    $student->update([
      'name' => $request->name,
      'dob' => $request->dob
    ]);
    $student->contact()->update([
      'email' => $request->email,
      'phone' => $request->phone,
      'address' => $request->address,
    ]);

    return redirect()->route('student.index');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    // When we delete only students table record, it'll delete also the contact table record aumatically. cause we have used the cascadeOnUpdate and cascadeOnDelete method into our migration file with the foreignIn "student_id".

    $student = Student::findOrFail($id);
    $student->delete();
    return back();
  }
}
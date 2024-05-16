<?php 

$this->extend('layout/main');
$this->section('body');


?>

<h1>Add Student</h1>
<!-- by adding enctype="multipart/form-data" the form will acccept file  -->
<form action="/students/store" method="post" enctype="multipart/form-data">
<div class="mb-3">
  <label for="studentName" class="form-label">Student Name</label>
  <input type="text" class="form-control" name="studentName">
</div>

<div class="mb-3">
  <label for="studentNum" class="form-label">Student Number</label>
  <input type="text" class="form-control" name="studentNum" value="<?= $studentNumber; ?>" readonly>
</div>

<div class="mb-3">
  <label for="studentSection" class="form-label">Student Section</label>
  <input type="text" class="form-control" name="studentSection" >
</div>

<div class="mb-3">
  <label for="studentCourse" class="form-label">Student Course</label>
  <input type="text" class="form-control" name="studentCourse" >
</div>

<div class="mb-3">
  <label for="studentBatch" class="form-label">Student Batch</label>
  <input type="text" class="form-control" name="studentBatch" >
</div>

<div class="mb-3">
  <label for="studentGradeLevel" class="form-label">Student Grade Level</label>
  <input type="text" class="form-control" name="studentGradeLevel" >
</div>

<div class="mb-3">
  <label for="studentProfile" class="form-label">Student Profile</label>
  <input type="file" class="form-control" name="studentProfile" >
</div>


<button type="submit" class="btn btn-primary">
    Add
</button>
</form>



<?php $this->endSection();?>
<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\StudentModel;

class StudentsController extends BaseController
{
    public function index()
    {
        return view('students/list');
    }

    public function createStudent()
    {   
        $data['studentNumber'] = '2024_'.uniqid();
        return view('students/add', $data);
    }

    public function storeStudent()
    {
      $insertStudents = new StudentModel();


      // get file from user input
        if($img = $this->request->getFile('studentProfile')){
            if($img->isValid() && !$img->hasMoved()){
                $newProfileImageName = $img->getRandomName();
                $img->move('uploads/',$newProfileImageName);
            }
        }

      // this data array has the 
      // dbnames and the names of the input text
      $data = array(
        'student_name' => $this->request->getVar('studentName'),
        'student_id' => $this->request->getVar('studentNum'),
        'student_section' => $this->request->getVar('studentSection'),
        'student_course' => $this->request->getVar('studentCourse'),
        'student_batch' => $this->request->getVar('studentBatch'),
        'student_grade_level' => $this->request->getVar('studentGradeLevel'),
        'student_profile' => $newProfileImageName,
      );

      // this insert() is a shorten insert into 
      $insertStudents->insert($data);

      // after inserting, it will redirect and will show the messsage if success.
      return redirect()->to('/students')->with('success', 'Student Added Successfully!');
    }

    public function editStudent()
    {
        return view('students/edit');
    }

    public function updateStudent()
    {
       
    }

    public function deleteStudent()
    {
       
    }
}

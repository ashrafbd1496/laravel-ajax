<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('photo')){

            $img = $request->file('photo');
            $unique_name = md5(time().rand()).'.'. $img->getClientOriginalExtension();
            $img -> move(public_path('media/students'), $unique_name);
        }


      Student::create([

          'name'    =>$request->name,
          'roll'    =>$request->roll,
          'cell'    =>$request->cell,
          'email'   =>$request->email,
          'photo'   =>$unique_name,

      ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function allStudent(){

       $all_data = Student::all();
        $i =1;
        foreach ($all_data as $data){

            ?>

            <tr>
                <td><?php echo $i; $i++; ?></td>
                <td><?php echo $data ->name ?></td>
                <td><?php echo $data ->roll ?></td>
                <td><?php echo $data ->email ?></td>
                <td><?php echo $data ->cell ?></td>
                <td><img src="media/students/<?php echo $data ->photo ?>" alt=""></td>
                <td>
                    <a class="btn btn-sm btn-info" href="#">View</a>
                    <a class="btn btn-sm btn-warning" href="#">Edit</a>
                    <a class="btn btn-sm btn-danger" href="#">Delete</a>
                </td>
            </tr>

            <?php


        }
    }



}

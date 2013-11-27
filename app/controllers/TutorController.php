<?php

class TutorController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
        //
        return View::make("tutors.index");
	}
	public function getSignup()
	{
		return View::make("tutors.signup");
	}
	public function postSignup()
	{
		$firstname = Input::get('firstname');
		$lastname = Input::get('lastname');
		$year = Input::get('year');
		$course = Input::get('course');
		$description = Input::get('description');
		DB::table('tutors')->insert(
    		array('firstname' => $firstname, 'lastname' => $lastname, 'year' => $year, 'course' => $course,'description' => $description)
		);
		return Redirect::to('/');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}

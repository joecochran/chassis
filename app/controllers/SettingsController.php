<?php

class SettingsController extends BaseController {

	/**
	 * Page Repository
	 *
	 * @var Page
	 */
	protected $setting;

	public function __construct(Setting $setting)
	{
		$this->setting = $setting;
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return $this->page->all();;
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $input = Inpu::all();
        // validation
        return $this->setting->create($input);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = array_except(Input::all(), '_method');
        $setting = $this->setting->find($id);
        $setting->update($input);
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

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
        $this->beforeFilter('auth');
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $settings = $this->setting->all();
        return View::make('settings.index', compact('settings'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('settings.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $creator = new Harlo\Setting\Creator($this);
        return $creator->create(Input::all());
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $updater = new Harlo\Setting\Updater($this);
        return $updater->update($id, array_except(Input::all(), '_method'));
	}
	/**
	 * Return a form for editing resource;
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function edit($id)
    {
        $setting = $this->setting->find($id);
        return View::make('settings.edit', compact('setting'));
    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $setting = $this->setting->find($id)->delete();
        return Redirect::route('settings.index');
	}

    // Shitty success methods that I will look into replacing. Am thinking of 
    // creating a generic create and edit success method that they all call.
    public function createSettingSuccess()
    {
	    return Redirect::route('settings.index');
    }
    public function createSettingFails()
    {
		return Redirect::route('settings.create')->withInput()->withErrors($validation)->with('message', 'there were validation errors.');
    }
    public function updateSettingSuccess()
    {
	    return Redirect::route('settings.index');
    }
    public function updateSettingFails($validation, $id)
    {
		return Redirect::route('settings.edit', $id)->withInput()->withErrors($validation)->with('message', 'There were validation errors.');
    }
}

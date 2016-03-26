<?php
class AdminController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	/* function Login*/

	public function showLogin()
	{
		return View::make('session.login');
	}

	public function doLogin(){
		$rules = array(

			'username'    => 'required|min:3',

			'password' => 'required|alphaNum|min:3'

			);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {

			return Redirect::to('login')

			->withErrors($validator) 

			->withInput(Input::except('password')); 

		} else{

			$userdata = array(

				'username' 	=> Input::get('username'),

				'password' 	=> Input::get('password')

				);

			if (Auth::attempt($userdata)) {

				return Redirect::intended('admin/dashboard#dashboard/index');

			} else {	

				return Redirect::to('login');

			}

		}

	}

/* function Logout*/

	public function doLogout(){
		Auth::logout(); // log the user out of our application
		return Redirect::to('login'); // redirect the user to the login screen
	}
/******* End Login Logout *******/
	public function admin(){
		return View::make('admin.main');
	}
	public function index(){
		return View::make('admin.index');
	}
	public function category(){
		$category=menu::get();
		return View::make('admin.category.index')->with('category',$category);
	}
	public function edit_category($id){
		$id = menu::find($id);
		return View::make('admin.category.edit')->with('id',$id);
	}
	public function post_edit_category(){
		$input=Input::all();
      	
      	$id=Input::get('id');

      	$admin=menu::find($id);
      	$admin->title = Input::get('title');
      	$admin->title_en = Input::get('title_en');
      	
     	if($admin->save())
		{
		    return Redirect::to("admin/dashboard#category");
		}
	}
	
	/* function Users*/

	public function user(){
		$user= User::get();
		return View::make('admin.users.index')->with('user',$user);
	}

	public function delete_users($id){

		$xoa=User::find($id);

		$xoa->delete();

		return Redirect::to('admin/users')->with('delete_sc',"Delete Successfully");

	}



	public function edit_user($id){

		

		$id=User::find($id);

		return View::make('admin.users.edit_users',compact('id'));

	}



	public function post_edit_user(){

		$input=Input::all();

		$id=Input::get('id');

		$user=User::find($id);

		$password=Input::get('password');

		$user->username = $input['username'];

		$user->password = Hash::make($password);

		$rules = array(

			'password' => 'required|alphaNum|min:3'

			);

		$validator = Validator::make($input, $rules);	

		if($validator->fails())

		{

			return Redirect::back()->withErrors($validator)->withInput(Input::except('password'));	

		}

		else{

			if($user->save())

			{

				return Redirect::to('admin/dashboard#user')->with('update_post_tk',"Update Successfully");

			}

			else

			{

				return Redirect::intended('/')->with('up_post_f','False To Update !');

			}	

		}

		

	}



	public function create_users(){

		$profile= profile::where('user_id',"=",1)->get();

		return View::make('admin.users.create_users')->with('profile',$profile);

	}



	public function post_create_users(){

		$input=Input::all();

		$input_username = Input::get('username');

		$input_account= Input::get('email');

		$input_password=Input::get('password');

		$rules = array(

			'email'    => 'required|min:5|max:8|unique:Users',

			'password' => 'required|alphaNum|min:3'

			);

		$validator = Validator::make($input, $rules);	

		if($validator->fails())

		{

			return Redirect::to('admin/create_users')->withErrors($validator)->withInput(Input::except('password'));	

		}

		else

		{

			$result = User::create(array(

				'username'		=> $input_username,

				'email'			=> $input_account,

				'password'		=>	Hash::make($input_password),

				'role'			=>	1,	

				'name'			=> 'ADMIN'));

		}

		if ($result) {

			return Redirect::to('admin/users')->with('Create_sc',"Create A Account Successfully"); 		

		}

	}
	
}

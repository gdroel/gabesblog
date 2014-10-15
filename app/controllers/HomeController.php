<?php

class HomeController extends BaseController {

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

	public function index()
	{

		$posts = Post::orderBy('id','DESC')->paginate(10);

		return View::make('blog.index',compact('posts'));
	}

	public function showCreate(){

		return View::make('blog.create');
	}

	public function doCreate(){

		$post = new Post();

		$post->title=Input::get('title');
		$post->body=Input::get('body');
		$post->slug=Post::slugify(Input::get('title'));

		$post->save();

		return Redirect::action('HomeController@index');
	}

	public function show(Post $post){

		$posts=Post::all();

		$nextposts = Post::where('id', '>', $post->id)->min('id');

		return View::make('blog.show', compact('post','posts','nextposts'));
	}

	public function showLogin(){

		return View::make('blog.login');
	}

	public function doLogin()
	{
		// validate the info, create rules for the inputs
		$rules = array(
			'email'    => 'required|email', // make sure the email is an actual email
			'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
		);

		// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);

		// if the validator fails, redirect back to the form
		if ($validator->fails()) {
			return Redirect::action('HomeController@showLogin')
				->withErrors($validator) // send back all errors to the login form
				->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
		} else {

			// create our user data for the authentication
			$userdata = array(
				'email' 	=> Input::get('email'),
				'password' 	=> Input::get('password')
			);

			// attempt to do the login
			if (Auth::attempt($userdata)) {

				return Redirect::action('HomeController@showCreate');

			} else {	 	

				return Redirect::action('HomeController@showLogin');

			}

		}
	}

	public function doLogout()
	{
		Auth::logout(); // log the user out of our application
		return Redirect::to('login'); // redirect the user to the login screen
	}

	public function postSearch()
	{

	$q = Input::get('search');

	$posts = Post::whereRaw(
		"MATCH(title,body) AGAINST(? IN BOOLEAN MODE)", 
		array($q)
	)->paginate(10);

	return View::make('blog.index', compact('posts'));

	}

	public function showEdit(Post $post){

		return View::make('blog.edit', compact('post'));

	}

	public function doEdit(){

		$post = Post::where('slug', Input::get('slug'))->first();
	    $post->title        = Input::get('title');
	    $post->body    		= Input::get('body');
	    $post->save();

	    return Redirect::action('HomeController@index');
	}

	public function email(){

    	$body = Input::get('body');
    	$email = Input::get('email');

    	Mail::send('emails.contact', compact('body','email'), function($message) {

    	$message->from(Input::get('email'), Input::get('name'));
	    $message->to('gdroel@gmail.com', 'Gabe')
	        ->subject(Input::get('subject'));
        });

        return Redirect::back();

	}
}

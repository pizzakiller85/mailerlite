<?php

class SubscriberController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default User Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
    
	public function getSubscribers()
    {
        $groupsApi = (new MailerLiteApi\MailerLite("5a223ecd46d57b0d6b3afd0ad89b7492"))->groups();

        $subscribers = $groupsApi->getSubscribers(9448136);
        return View::make('subscribers')->with('subscribers', $subscribers);;
    }
	
	public function storeSubscriber()
	{
        $groupsApi = (new MailerLiteApi\MailerLite("5a223ecd46d57b0d6b3afd0ad89b7492"))->groups();
    
        $name = Input::get('name');
        $name_last = Input::get('name_last');
        $company = Input::get('company');
        
        $emailAddress = Input::get('emailAddress');
        
        $subscriber = [
            'email' => $emailAddress,
            'fields' => [
                'name' => $name,
                'last_name' => $name_last,
                'company' => $company
            ]
        ];
            
        $response = $groupsApi->addSubscriber(9448136, $subscriber); // Change GROUP_ID with ID of group you want to add subscriber to
        
        return "added: " . $emailAddress;
    }
}

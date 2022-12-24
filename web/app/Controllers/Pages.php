<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Pages extends Controller
{
   
    public function index()
    {
       
        // echo "hi";
        // exit();
        // var_dump($response);
        
        // helper(['curl']);
		
		// $rest_api_base_url = 'https://reqres.in';
		
		// //GET - list of users
		// $get_endpoint = '/api/users';
		
		// $response = perform_http_request('GET', $rest_api_base_url . $get_endpoint);
		
		// $data['users'] = $response;
		
		// //GET - single user
		// $get_endpoint = '/api/users/2';
		
		// $response = perform_http_request('GET', $rest_api_base_url . $get_endpoint);
		
		// $data['user'] = $response;
		
		// //POST - create new user
		// $post_endpoint = '/api/users';
		
		// $request_data = json_encode(array("name" => "Soumitra", "job" => "Blog Author", "avatar" => "https://roytuts.com/about/"));
		
		// $response = perform_http_request('POST', $rest_api_base_url . $post_endpoint, $request_data);
		
		// $data['new_user'] = $response;
		
		// //PUT - update user
		// $put_endpoint = '/api/users';
		
		// $request_data = json_encode(array("name" => "Soumitra", "job" => "Roy Tutorials Author", "avatar" => "https://roytuts.com/about/"));
		
		// $response = perform_http_request('PUT', $rest_api_base_url . $put_endpoint, $request_data);
		
		// $data['update_user'] = $response;
        
        

        // //return view('pages/view');
        // echo view('templates/header', $data);
        // echo view('pages/'.$page, $data);
        // echo view('templates/footer', $data);

    }
    
    
    public function view($page = 'home')
    {
        if ( ! is_file(APPPATH.'/Views/pages/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }
    
        $data['title'] = ucfirst($page); // Capitalize the first letter
        
        // // get data from google sheet start

        // $client = new \Google_Client();


        // $client->setApplicationName('Google Sheets API');
        // $client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
        // $client->setAccessType('offline');
        // // credentials.json is the key file we downloaded while setting up our Google Sheets API
        // $path = '../data/credentials.json';
        // $client->setAuthConfig(APPPATH.''.$path);
        // // print(APPPATH.''.$path);
        // // configure the Sheets Service
        // $service = new \Google_Service_Sheets($client);

        // $spreadsheetId = '14Hsr4YpAenO2L12UJASIw2wxAw6Nr3deKfDMLgChgzU';
        // // $spreadsheet = $service->spreadsheets->get($spreadsheetId);
        // /// var_dump($spreadsheet);

        // $range = 'Home!A1:F10';
        // $response = $service->spreadsheets_values->get($spreadsheetId, $range);
        // $values = $response->getValues();
        // // var_dump($values);
        // // echo $values[1][0];

        // //print_r($values);
        // //exit();

        // $data["google_sheet_data"] = $values;

        // // get data from google sheet end
        // //print_r($data["google_sheet_data"]);
        // //exit();
        

        //  helper(['curl']);
		
		// // $rest_api_base_url = 'https://reqres.in';
        // $rest_api_base_url = 'http://localhost:1337/';

		
		// //GET - list of users
		// // $get_endpoint = '/api/users';

        // $get_endpoint_news_items = 'api/news-items/';

		
		// $response = perform_http_request('GET', $rest_api_base_url . $get_endpoint_news_items);
		
		// $data['news_items'] = $response;

        // //print_r($data['news_items']);
        
		
		// $get_endpoint_why_charusat = 'api/why-charusat/';
		
		// $response = perform_http_request('GET', $rest_api_base_url . $get_endpoint_why_charusat);
		
		// $data['why_charusat'] = $response;

        
        // $get_endpoint_unique_initiative = 'api/unique-initiative';
		
		// $response = perform_http_request('GET', $rest_api_base_url . $get_endpoint_unique_initiative);
		
		// $data['unique_initiative'] = $response;



		// //POST - create new user
		// $post_endpoint = '/api/users';
		
		// $request_data = json_encode(array("name" => "Soumitra", "job" => "Blog Author", "avatar" => "https://roytuts.com/about/"));
		
		// $response = perform_http_request('POST', $rest_api_base_url . $post_endpoint, $request_data);
		
		// $data['new_user'] = $response;
		
		// //PUT - update user
		// $put_endpoint = '/api/users';
		
		// $request_data = json_encode(array("name" => "Soumitra", "job" => "Roy Tutorials Author", "avatar" => "https://roytuts.com/about/"));
		
		// $response = perform_http_request('PUT', $rest_api_base_url . $put_endpoint, $request_data);
		
		// $data['update_user'] = $response;
        
       echo view('templates/header', $data);
       echo view('pages/'.$page, $data);
       echo view('templates/footer', $data);
    }   

   

    
}


?>
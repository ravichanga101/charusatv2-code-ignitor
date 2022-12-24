<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Pages extends Controller
{
   
    public function index()
    {
       // return view('pages/view');
    }
    
    
    public function view($page = 'home')
    {
        if ( ! is_file(APPPATH.'/Views/pages/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }
    
        $data['title'] = ucfirst($page); // Capitalize the first letter
        
        // get data from google sheet start

        $client = new \Google_Client();


        $client->setApplicationName('Google Sheets API');
        $client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
        $client->setAccessType('offline');
        // credentials.json is the key file we downloaded while setting up our Google Sheets API
        $path = '../data/credentials.json';
        $client->setAuthConfig(APPPATH.''.$path);
        // print(APPPATH.''.$path);
        // configure the Sheets Service
        $service = new \Google_Service_Sheets($client);

        $spreadsheetId = '14Hsr4YpAenO2L12UJASIw2wxAw6Nr3deKfDMLgChgzU';
        // $spreadsheet = $service->spreadsheets->get($spreadsheetId);
        /// var_dump($spreadsheet);

        $range = 'Home!A1:F10';
        $response = $service->spreadsheets_values->get($spreadsheetId, $range);
        $values = $response->getValues();
        //var_dump($values);
        // echo $values[1][0];

        //print_r($values);
        //exit();

        $data["google_sheet_data"] = $values;

        // get data from google sheet end
        
        echo view('templates/header', $data);
        echo view('pages/'.$page, $data);
        echo view('templates/footer', $data);
    }   
}


?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_film_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->load->database();

    }


    public function add_film_details($film_id)
    {
        $apikey = 'b72jenmb77t3qmcw4ufmnvac';




// construct the query with our apikey and the query we want to make

 $endpoint ='http://api.rottentomatoes.com/api/public/v1.0/movies/'.$film_id.'.json?apikey='.$apikey;

// setup curl to make a call to the endpoint
        $session = curl_init($endpoint);

// indicates that we want the response back
        curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

// exec curl and get the data back
        $data = curl_exec($session);

// remember to close the curl session once we are finished retrieveing the data
        curl_close($session);

// decode the json data to make it easier to parse the php
        $search_results = json_decode($data,true);
        if ($search_results === NULL) die('Error parsing json');

// play with the data!
        $movies = $search_results;
      // print_r($movies);

       if(isset($movies['ratings']['critics_rating'])){  $crating=$movies['ratings']['critics_rating'];    }
        else {$crating='0';}

        if ($movies['ratings']['critics_score']==null || -1){ $cscore='0';    }
        else {  $cscore=$movies['ratings']['critics_score'];    }

        if(isset($movies['ratings']['audience_rating'])){  $arating=$movies['ratings']['audience_rating'];    }
        else {$arating='0';}


        $film_details = array(
                'title' => $movies['title'],
                'tomato_id' => $movies['id'],
                'year' => $movies['year'],
                'runtime'=> $movies['runtime'],
                'critics_rating'=> $crating,
            'critics_score'=> $cscore,
               'audience_rating'=> $arating,
              'audience_score'=> $movies['ratings']['audience_score'],
                'synopsis'=> $movies['synopsis'],
                //'tomato_link'=> $movies->
            'poster_small'=> $movies['posters']['detailed'],
             'poster_big'=> $movies['posters']['original'],


               );
print_r($movies['genres'][0]);

        if(isset($movies['genres'][0])){  $crating=$movies['ratings']['critics_rating'];    }
        else {$crating='0';}


        $film_genre = array(
            'tomato_id' => $movies['id'],
            'tomato_id' => $movies['genres'],

            );

        $this->db->where('tomato_id',$movies['id']);
        $res = $this->db->get('film');
        if ($res->num_rows() >= 1) {
            return "This film already exists in the database";
        }
else {
            $this->db->insert('film', $film_details );
           // $this->db->insert('film_genre', $film_genre );
}

    }

}


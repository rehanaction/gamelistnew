<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Movie extends CI_Controller {



	public function index()
	{
		  $this->load->library('curl');
          $url  = 'https://api.rawg.io/api/games?key=36aac5b975144102a260d3508ee33476&dates=2019-09-01,2019-09-30&platforms=18,1,7';
          $ch = curl_init($url);
          curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
         // curl_setopt($ch, CURLOPT_POSTFIELDS, 'key=36aac5b975144102a260d3508ee33476&dates=2019-09-01,2019-09-30&platforms=18,1,7');
          curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
          curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false);
          //curl_setopt($ch, CURLOPT_VERBOSE, true);
          //curl_setopt($ch, CURLINFO_HEADER_OUT, true);
          //curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
          //curl_setopt($ch, CURLOPT_HEADER, true);
         // print_r($ch);
          $result = json_decode(curl_exec($ch),true);
         // $info = curl_getinfo($ch);
          //print_r($info['request_header']);
          curl_close($ch);
        // print_r($result);
          
          $data['result'] = $result['results'];
          $data['url']=$result['next'];
          //print_r($data);

         $this->load->view('v_index_movie_list',$data);

        
	}



}
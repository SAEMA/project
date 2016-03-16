<?php    
function twitter_page ($search){

    # first we remove unwanted tags, for 
    # security reasons only and remove unwanted space.

    if($search ==""){
        exit;
    } else {
        //echo "<h2>" . $search . "</h2><br>";

        # wikipedia URL
        $url = "https://mobile.twitter.com/" . $search;

        # initialize curl
        $ch = curl_init();

        # Get the user agent of the visitor...

        $user_agent = "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1";
        $_referer ="http://www.google.com"; 

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_USERAGENT,$user_agent);
        curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 0);
        curl_setopt ($ch, CURLOPT_AUTOREFERER, 1);
        curl_setopt($ch,CURLOPT_REFERER,$_referer); 
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);



        $definition = curl_exec($ch);

        $cellphone = "You are on Twitter Mobile because you are using an old version of Internet Explorer. Learn more";
        $definition = str_replace($cellphone, "More information about Twitter ", $definition);
        $definition = str_replace('href="', ' target="_blank" href="', $definition);
        $definition = str_replace('action="', 'target="_blank" action="https://mobile.twitter.com/', $definition);
        $definition = str_replace("href='", " target='_blank' href='", $definition);
        $definition = str_replace('https://mobile.twitter.com/', 'https://twitter.com/', $definition);
        $definition = str_replace('href="/', 'href="https://twitter.com/', $definition);
        $definition = str_replace('class="tweet-text"', 'class="tweet-text" style="color:rgb(0,0,0);"', $definition);



        $needle = '<div class="w-mediaonebox">';
        $pos = strpos ($definition, $needle);
        $definition=substr($definition,$pos, strlen($definition));



        echo "<div class=\"w-mediaonebox\">\n" . $definition; 


        curl_close($ch);
        echo "</div>";

    } 
}



if(isset($twitter)){

    twitter_page($twitter); 

}
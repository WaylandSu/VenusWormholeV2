<?PHP 

  header("eve.trustme:http://www.delorie.com:81/*::delorie",false);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>测试</title>
 <script>
	
	window.onerror = function(msg,url,line)
	{
		alert("onError:"+msg+"\nUrl:"+url+"\nLine:"+line);
	};
	
	function DEBUG( obj )
	{
		//if(RELEASE)return;
		//if ( obj instanceof Object) 
		{
			var type = typeof( obj );
			for(each in obj) 
			{
				if(obj.hasOwnProperty(each)) 
				{
					alert(type+"." + each + " = " + obj[each]);
				}
				else 
				{
					alert(type+"." + "prototype." +  each + " = " + obj[each]);
				}
			}
		}
		//else if( obj instanceof String )
		//{
		//	alert( obj );
		//}
	};
	
	var name = "0漩涡0";
 </script>
</head>
<body>

<a href="http://www.metamend.com/seo-tools/http-header-request-viewer.html" 
title="HTTP Header Request Viewer by Metamend">HTTP Header Request Viewer</a>
<img src="M:\MyWebsite\School Projects\SurewayPersonalWebsite\951_copy.gif"></img>
<iframe src="www.baidu.com"></iframe>
<iframe src="http://www.delorie.com:81/some/url.txt"></iframe>

 <button type="button" onclick="alert(CCPEVE.requestTrust);">CCPEVE</button>

  <a href='javascript:CCPEVE.showInfo(1377,254173564);'>venus爱神</a><br>
   <button type="button" onclick="CCPEVE.requestTrust('http://www.delorie.com:81/')">Request Trust</button>
  <input type='text' id="inputKeyword"/>
  <button type="button" onclick="var keyword= $('#inputKeyword').attr('value');alert(keyword);CCPEVE.joinChannel(keyword);">joinChannel</button>
  <button type="button" onclick="CCPEVE.openEveMail();">打开邮件</button>
  <br>
  <button type="button" onclick="CCPEVE.joinMailingList('0漩涡0')">0漩涡0</button>
  <button type="button" onclick="CCPEVE.joinMailingList(escape('0漩涡0').replace(/%/g,'\\'))">Join Mail List</button>
  <button type="button" onclick="CCPEVE.joinMailingList(encodeURI('0漩涡0'))">Join Mail List</button>
  <button type="button" onclick="CCPEVE.joinMailingList(encodeURIComponent('0漩涡0'))">Join Mail List</button>
<br>
  <button type="button" onclick="alert('0漩涡0')">alert</button>
  <button type="button" onclick="alert(escape('0漩涡0').replace(/%/g,'\\'));">escape</button>
  <button type="button" onclick="alert(encodeURI('0漩涡0'));">encodeURI</button>
  <button type="button" onclick="alert(encodeURIComponent('0漩涡0'));">encodeURIComponent</button>
 <br>
  <button type="button" onclick="CCPEVE.showInfo(597)">Show Info (Punisher)</button>
  <button type="button" onclick="CCPEVE.showPreview(597)">Show Preview (Punisher)</button>
  <button type="button" onclick="CCPEVE.showMap(30000142)">Show Map</button>
  <button type="button" onclick="CCPEVE.showMarketDetails(34)">Show Market Details</button>
  <button type="button" onclick="CCPEVE.setDestination(30000142)">Set Destination</button>
  <button type="button" onclick="CCPEVE.addWaypoint(30003410)">Add Waypoint</button>  
  <br><br>
  <button type="button" onclick="CCPEVE.sendMail(1377254173564,'dsadsa','ffds')">sendMail</button>
  <button type="button" onclick="CCPEVE.bookmark(1000115)">bookmark</button>
  <button type="button" onclick="CCPEVE.createContract(1)">Create Auction Contract</button>
  <button type="button" onclick="CCPEVE.buyType(34)">Buy Item</button>
  <button type="button" onclick="CCPEVE.findInContracts(24445)">Find In Contracts</button>
  <button type="button" onclick="CCPEVE.addToMarketQuickBar(34)">Add To MarketQuickBar</button>
  <button type="button" onclick="CCPEVE.addContact(254173564)">Add Contact</button>
  <button type="button" onclick="CCPEVE.removeContact(3018672)">Remove Contact</button>
  <button type="button" onclick="CCPEVE.addCorpContact(3018672)">Remove CorpContact</button>
  <button type="button" onclick="CCPEVE.removeCorpContact(3018672)">Remove CorpContact</button>
  <button type="button" onclick="CCPEVE.block(254173564)">Block</button>
  <button type="button" onclick="CCPEVE.addBounty(254173564)">addBounty</button>
  <button type="button" onclick="CCPEVE.inviteToFleet(254173564)">inviteToFleet</button>
  <button type="button" onclick="CCPEVE.startConversation(254173564)">startConversation</button>
  <button type="button" onclick="CCPEVE.showContracts(254173564)">showContracts</button>
  <button type="button" onclick="CCPEVE.showOnMap(1000115)">showOnMap</button>
  <button type="button" onclick="CCPEVE.editMember(3018672)">editMember</button>
  <button type="button" onclick="CCPEVE.awardDecoration(3018672)">awardDecoration</button>
  <button type="button" onclick="CCPEVE.sendMail(1000115)">sendMail</button>
  <button type="button" onclick="CCPEVE.showContents(1000115)">showContents</button>
  <button type="button" onclick="http_header();">HTTP HEADER</button>
  
  
  <div id='Content'>
  
  
  </div>

  
  <?PHP
	echo $_SERVER['EVE_TRUSTED'];
  ?>

  <!-- 
// echo $_SERVER['HTTP_MY_HEADER'];

/*
  	foreach (  $GLOBALS as $name => $value ) 
    	{
 		echo $name."  =  ".$value."<br>";
	}
        
        echo "----------------------------------------------------_ENV<br>";
  	foreach (  $_ENV as $name => $value) 
   	{
 		echo $name."  =  ".$value."<br>";
    	}
        
        echo "----------------------------------------------------HTTP_ENV_VARS<br>";
  	foreach (  $HTTP_ENV_VARS as $name => $value) 
   	{
 		echo $name."  =  ".$value."<br>";
    	}
        
        echo "----------------------------------------------------_POST<br>";
  	foreach (  $_POST as $name => $value) 
   	{
 		echo $name."  =  ".$value."<br>";
    	}        
        
        echo "----------------------------------------------------HTTP_POST_VAR<br>";
  	foreach (  $HTTP_POST_VARS as $name => $value) 
   	{
 		echo $name."  =  ".$value."<br>";
    	}        
        
        echo "----------------------------------------------------_GET<br>";
  	foreach (  $_GET as $name => $value) 
   	{
 		echo $name."  =  ".$value."<br>";
    	}        
        
        echo "----------------------------------------------------HTTP_GET_VARS<br>";
  	foreach (  $HTTP_GET_VARS as $name => $value) 
   	{
 		echo $name."  =  ".$value."<br>";
	}        
        echo "----------------------------------------------------_COOKIE<br>";
  	foreach (  $_COOKIE as $name => $value) 
   	{
 		echo $name."  =  ".$value."<br>";
    	}          
        
                echo "----------------------------------------------------HTTP_COOKIE_VARS <br>";
  	foreach (  $HTTP_COOKIE_VARS as $name => $value) 
   	{
 		echo $name."  =  ".$value."<br>";
    	}        
        
                echo "----------------------------------------------------_SERVER<br>";
  	foreach (  $_SERVER as $name => $value) 
   	{
 		echo $name."  =  ".$value."<br>";
    	}        
        
                echo "----------------------------------------------------HTTP_SERVER_VARS<br>";
  	foreach (  $HTTP_SERVER_VARS  as $name => $value) 
   	{
 		echo $name."  =  ".$value."<br>";
    	}        
        
                echo "----------------------------------------------------_FILES<br>";
  	foreach (  $_FILES as $name => $value) 
   	{
 		echo $name."  =  ".$value."<br>";
    	}        
        
                echo "----------------------------------------------------HTTP_POST_FILES<br>";
  	foreach (  $HTTP_POST_FILES as $name => $value) 
   	{
 		echo $name."  =  ".$value."<br>";
    	}        
        
                echo "----------------------------------------------------_REQUEST<br>";
  	foreach (  $_REQUEST as $name => $value) 
   	{
 		echo $name."  =  ".$value."<br>";
    	}        
        
*/

//$file=file_get_contents("php://input"); 
//echo $file;      
//     foreach ($file as $key => $value) 
//{
          //if ('HTTP_' == substr($key, 0, 5)) 
                  //{
          //		$headers[str_replace('_', '-', substr($key, 5))] = $value;
          //}
                
          //   echo $key."  =  ".$value."<br>";
                 
          //}
        
 
	foreach (getallheaders() as $name => $value) 
        {
    		echo $name.":". $value."<br>";
	}
        
          //foreach (  $HTTP_RAW_POST_DATA as $name => $value) 
          //{
          //echo "$name: $value\n";
          //}
       
/*    
        

	foreach (getallheaders() as $name => $value) 
        {
    		echo "$name: $value\n";
	}

        $headers = array();
	foreach ($_SERVER as $key => $value) 
        {
    		if ('HTTP_' == substr($key, 0, 5)) 
                {
        		$headers[str_replace('_', '-', substr($key, 5))] = $value;
    		}
                
                echo $key."  =  ".$value."<br>";
          
	}
        
*/
        
        
/*	

require_once("include/igbclass_v2.php");
        $IGBUser = new IGB();
	
	if(!$IGBUser->IsMiniBrowser())
	{
		$host  = $_SERVER['HTTP_HOST'];
		$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
          	//header("Location: http://$host$uri/noigb.php");
                echo "IsMiniBrowser failed<br>";
          //echo $IGBUser->UserName();
	}
        else
        {
        	 echo $IGBUser->UserName();
        }
        $IGBUser->RequestTrust("You must add this site to your trusted sites list in order to gain access!");
        if($IGBUser->IsTrusted())
        {
        	echo "Trusted<br>";
        }
        else
        {
        	echo "Not Trusted<br>";
        }
        
  echo $_SERVER['HTTP_HOST'];
      echo $_SERVER['EVE_TRUSTED']." - This header will have the value Yes.<br>";
      echo $_SERVER['EVE_SERVERIP']." - This header will have a string containing the IP address of the server to which the end user is currently connected.<br>";
      echo $HTTP_SERVER_VARS['EVE_CHARNAME']." - This header will have a string containing the end user’s character’s name.<br>";
      echo $_SERVER['EVE_CHARID']." - This header will have an integer containing the end user’s character ID number. This number is unique to each character in EVE.<br>";
      echo $_SERVER['HTTP_EVE_CORPNAME']." - This header will have a string containing the end user’s corporation’s name.<br>";
      echo $_SERVER['HTTP_EVE_CORPID']." - This header will have an integer containing the end user’s corporation ID number. This number is unique to each corporation in EVE.<br>";
      echo $_SERVER['HTTP_EVE_ALLIANCENAME']." - This header will have a string containing the end user’s alliance name. If the character is not in an alliance, this header will be set to 'None'.<br>";
      echo $_SERVER['HTTP_EVE_ALLIANCEID']." - This header will have an integer containing the end user’s alliance ID number. This number is unique to each alliance in EVE. If the character is not in an alliance, this header will be set to None.<br>";
      echo $_SERVER['HTTP_EVE_REGIONNAME']." - This header will contain the name of the region in which the end user’s character is presently located.<br>";
      echo $_SERVER['HTTP_EVE_CONSTELLATIONNAME']." - This header will contain the name of the constellation in which the end user’s character is presently located.<br>";
      echo $_SERVER['HTTP_EVE_SOLARSYSTEMNAME']." - This header will contain the name of the solar system in which the end user’s character is presently located.<br>";
      echo $_SERVER['HTTP_EVE_STATIONNAME']." - This header will contain the name of the station in which the end user’s character is presently located. If the character is in space, or otherwise not at a station, this header will be set to 'None'.<br>";
      echo $_SERVER['HTTP_EVE_STATIONID']." - This header will contain the unique identifier number assigned to the station at which the user’s character is presently located. If the character is in space, or otherwise not in a station, this header will not be present. *Note* This header does not appear to be used.<br>";
      echo $_SERVER['HTTP_EVE_CORPROLE']." - This header will contain an integer which is the set of corporation role bits combined via binary-OR operations that have been granted to the current user’s character by his/her corporation. If the character does not have any roles, this will be the number zero.<br>";
      echo $_SERVER['HTTP_EVE_SOLARSYSTEMID']." - This header will contain the id of the solar system in which the end user’s character is presently located.<br>";
      echo $_SERVER['HTTP_EVE_WARFACTIONID']." - This header will contain the users warfaction id<br>";
      echo $_SERVER['HTTP_EVE_SHIPID']." - This header will contain the users ship id<br>";
      echo $_SERVER['HTTP_EVE_SHIPNAME']." - This header will contain the users ship name<br>";
      echo $_SERVER['HTTP_EVE_SHIPTYPEID']." - This header will contain the users ship type id<br>";
      echo $_SERVER['HTTP_EVE_SHIPTYPENAME']." - This header will contain the users ship type nam <br>";
*/
  ?> -->
  </body>
  </html>
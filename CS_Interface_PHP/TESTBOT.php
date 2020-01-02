
<!DOCTYPE HTML>
<html>
  <head>
    <title>
      CHATSCRIPT SERVER
    </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style type="text/css">

      html, body {
	margin: 0 auto;
	padding: 0;
	text-align: left;
	font-family: sans-serif;
	font-size: 14px;
	font-style: normal;
	font-weight: normal;
      }

      h1 {
	font-family: sans-serif;
	margin: 10px 0 0 0;
	font-size: 20px;
	line-height: 20px;
	color: #700000;
	float: left;
      }

      h3 {
	color: black;
	font-size: 14px;
	margin: 0;
      }

      h4 {
	font-size: 14px;
	margin: 0;
      }

	.container {
		margin: 0 auto;
		width: 80vw;
    }
      
      #topPanel {
        min-width: 200px;
        min-height: 200px;
		height: 50vh;
		width: 100%;
		padding-top: 20px;
      }	
	
	  #main .container {
	  	overflow: hidden;
	  }
	  
      #chatbox {
        width: 65%;
        height: 100%;
		float:  right;
		margin: 20px 0 30px 5%;
      }

      #responseHolder {
		width: 100%;
		height: 100%;       
		overflow: auto;
    		background-color: #D1D1D1;
		border-radius: 5px;
		float: left;
		padding: 20px;
		box-sizing: border-box;
      }

      .avatarHolder {
		border-radius: 5px;
		width: 30%;
		height: 100%;
		max-height: 50vh;
		padding: 0;
		float: left;
		margin: 20px 0 30px 0;
      }

	#avatarImage {
		max-height: 50vh;
		height: auto;
	}

      #formPanel {
		width: 100%:
		border-radius: 5px;
		border: 1px solid #790E03;
		clear: both;
		padding: 20px;
		overflow: hidden;
      }

      #frmChat {
		min-width: 220px;
		min-height: 200px;
		width: 100%;
		overflow: hidden;
		margin: 0px auto;
      }

	  #frmChat h4 {
		display: inline;
		float: left;
		padding-top: 7px;
		margin: 20px 0s;
	  }
	
      #txtUser {
        float: left;
        display: inline;
		width: 40%;
		height: 25px;
		padding-left: 10px;
        margin-left: 20px;
        border: 1px solid #c2c2c2;
        border-radius: 5px;
        font-size: 14px;
      }

      #txtMessage {
        width: 60%;
        height: 50px;
        padding-left: 10px;
		margin-left: 20px;
		float: left;
		display: inline;
        border: 1px solid #c2c2c2;
        border-radius: 5px;
        overflow: auto;
        font-size: 14px;
      }

      #send {
		height: 40px;
		width: 10%;
		min-width: 80px;
		background-color: #960000;
		color: white;
		border: none;
		border-radius: 5px;
		margin-left: 20px;
		border-radius: 5px;
      }
    
      #send:hover {
	background-color: #666666;
	color: white;
      }
      
      #speechcontainer {
	min-width: 200px;
	min-height: 100px;
	margin-top: 5px;
	border: none;
	width: 100%;
	height: 100px;
	padding: 10px 0;
	font: Arial;
	font-size: 10pt;
	font-style: normal;
	font-weight: normal;
	color: black;
	float: left;
	padding: 0 0 50px 0;
      }

      #button_panel {
        width: 80%;
      }

      #btnMicrophone { 
	margin: 10px;
	float: left;
	background-color: #D0D0D0;
	border: none;
	border-radius: 5px;	
      }

      #btnMicrophone:hover {
	background-color: gray;
      }

      #results {
	font-family: cursive,Arial;
	font-size: 14pt;
	font-style: italic;
	font-weight: normal;
	color: darkgrey;
        margin: 10px;
      }

      #divautosend {
	margin-top: 5px;
        width: 120px;	
	float: left;
      }

      #divttsenabled {
	margin-top: 5px;
        width: 120px;	
        float: left;
      }

      .logo img {
	height: 32px;
	float: right;
      }

      .logo .container {
	padding: 20px 0;
	overflow: hidden;
      }

      .line {
	background-color: #700000;
	color: white;
	height: 20px;
      }

      .formRow {
	width: 100%;
	float: right;
      }
      
      hr{
		margin-bottom: 10px;
      }

      .footer p {	
        margin: 0px auto;
		font-size: 8px;
		line-height: 20px;
        margin-top: 30px;
		background-color: #700000;
		height: 20px;
		width: 100%;
		color: white;
		text-align: center;
      }

	@media only screen and (max-width: 700px) {
		h4, p {
			font-size: 12px;
		}
		
		#txtMessage {
			float: right;
			width: calc(100% - 100px);
			height: 70px;
		}
		
		#send {
			clear: both;
			width: 80px;
			margin: 10px 0;
			float: right;
			display: block;
		}
	}

@media only screen and (max-width: 550px) {
		h1 {
			clear: both;
		}
		
		.logo img {
			float: left;
			margin-bottom: 10px;
		}
		
		#topPanel h4 {
			text-align: center;
		}
		
		#formPanel p {
			margin-right: 20px;
		}

		#txtUser, #txtMessage {
			width: 80%;
			margin: 10px 20px;
			float: right;
		}

		#send {
			margin-right: 20px;
		}
		
		.avatarHolder {
			width: 30%;
			height: auto;
			margin: 20px 35% 0 35%;
		}
		
		#topPanel {
			height: 30vh;
		}

		#chatbox {
			width: 100%;
			clear: both;
		}
	}
	
    </style>
    <script type="text/javascript">
	var cbAutoSend = 'checked';
	var cbTTSEnabled = 'checked';
    </script>
  </head>
  <body>
      <div class="logo"><div class="container">
      	<img src="C:/Users/kyucheol/Pictures/Camera Roll/WIN_20190718_17_13_03_Pro.jpg"/><h1>My TESTBOT</h1>
      </div></div>
      
      <div class="line"></div>
      
      <div class="main"><div class="container"> <!-- start MAIN and CONTAINER -->
      	
      	<div id="topPanel"> <!-- start TOP PANEL -->
      		<h4>Your BOT IS READY TO CHAT.</h4>
      		<div class="avatarHolder"><img id="avatarImage" src="C:/Users/kyucheol/Pictures/Camera Roll/WIN_20190718_17_13_03_Pro.jpg" alt="avatar image" height="auto" width="100%" style="border-radius: 12px;" > </div>
      		<div id="chatbox">
      			<div id="responseHolder"></div>
      		</div>
     	</div> <!-- end topPanel -->
     	
     	<div id="formPanel"> <!-- start FORM PANEL -->
     		<form id="frmChat" action="#" > <!-- start FORM -->
     			<div class="formRow"> <!-- start FORM ROW 1 -->
     				<h4>My Log in Name:</h4>
     				<input type="text" id="txtUser" name="user" size="10" value=""/>
     				<input type="hidden" name="send"/>
     			</div> <!-- end FORM ROW 1 -->
     			<div class="formRow"> <!-- start FORM ROW 2 -->
     				<p>To speak with your BOT, enter your message below.</p>
     			</div> <!-- end FORM ROW 2 -->
     			<div class="formRow"> <!-- start FORM ROW 3 -->
     				<h4>Message:</h4>
     				<input type="text" name="message" id="txtMessage"/><input type="submit" name="send" value="Send" id="send" />
     			</div> <!-- end FORM ROW 3 -->

      <!-----Added this section for Speech Recognition--------------------------------------------------->
 
      			<div id="speechcontainer"> <!-- start SPEECH CONTAINER -->
  					<div id="info"><p>If you would like to use your microphone to speak directly with the patient, click on the microphone icon below and begin speaking.</p>
  					</div>
  					<div id="button_panel">
    	  				<button id="btnMicrophone" type="button" value="microphone" onclick="microphoneClick()">
    	  				<img id="start_img" src="mic.gif" alt="Start"></button> 
        				</div>
        				<div id="results">
          				<span id="final_span" class="final"></span>
          				<span id="interim_span" class="interim"></span><p>
        				</div>
      			</div> <!-- end SPEECH CONTAINER -->
	
    		</form> <!-- end FORM -->

    <!------These checkboxes placed outside of the frmChat so they are not serialized and sent to the Chatscript server.------->
        <div id="divautosend">
			<input type="checkbox" name="autosend" value="checked" checked onclick="if (this.checked) {cbAutoSend = this.value} else { cbAutoSend = '' }"/> Autosend
        </div>
        <div id="divttsenabled">
			<input type="checkbox" name="TTSnabled" value="checked" checked onclick="if (this.checked) {cbTTSEnabled = this.value} else { cbTTSEnabled = '' }"/> TTS Enabled
    	</div>
    </div> <!-- end FORM PANEL -->
    </div> <!-- end CONTAINER -->
    </div> <!-- end MAIN -->
    
    <div class="footer">
    	<p>2015 &copy; SOME FOOTER HERE</p>
	<!--<HR/> 
	<div>        
	PHP Chatbot Client Version 1.1 updated by Alaric Schenck 7/14/2015 
	<a href="https://urldefense.proofpoint.com/v2/url?u=https-3A__github.com_AlaricSchenck_Alarics-2Dchatscript-2Ddeli&d=BQMGAg&c=k9MF1d71ITtkuJx-PdWme51dKbmfPEvxwt8SFEkBfs4&r=I7IAKNnEi5IR8HnO-uvuc_tuWm3PbOKcTZLYbxndJy8&m=KRqDtuKAKyBlXLbDsta76oV10QA8JfcKtgKxlScTC_U&s=0fxZhc5ry5ODM4TTdyXQKY-5WXSpGH6jn8Afr7E6-D8&e=">Github Client Files</a>
	Powered by Chatscript by Bruce Wilcox.  
        <a href="https://urldefense.proofpoint.com/v2/url?u=http-3A__sourceforge.net_projects_chatscript_&d=BQMGAg&c=k9MF1d71ITtkuJx-PdWme51dKbmfPEvxwt8SFEkBfs4&r=I7IAKNnEi5IR8HnO-uvuc_tuWm3PbOKcTZLYbxndJy8&m=KRqDtuKAKyBlXLbDsta76oV10QA8JfcKtgKxlScTC_U&s=gYJze2r2_PXs8j47QCMUbvCLTxYzsnaUiKIpr70FYDU&e=">Download Chatscript</a> 
        </div>-->
    </div>

    <!--------------------------------------------------------------------------------------------------->
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript">
var botName = 'ekcbot';		// change this to your bot name
// declare timer variables
var alarm = null;
var callback = null;
var loopback = null;
$(function(){
	$('#frmChat').submit(function(e){
	// this function overrides the form's submit() method, allowing us to use AJAX calls to communicate with the ChatScript server
	e.preventDefault();  // Prevent the default submit() method
	var name = $('#txtUser').val();
        if (name == '') {
		alert('Please provide your name.');
		document.getElementById('txtUser').focus();
         }
	var chatLog = $('#responseHolder').html();
	var youSaid = '<strong>' + name + ':</strong> ' + $('#txtMessage').val() + "<br>\n";
	update(youSaid);
	var data = $(this).serialize();
	sendMessage(data);
	$('#txtMessage').val('').focus();
	});
	// any user typing cancels loopback or callback for this round 
	$('#txtMessage').keypress(function(){
        window.clearInterval(loopback);
        window.clearTimeout(callback);
        });
		
});
function sendMessage(data){ //Sends inputs to the ChatScript server, and returns the response-  data - a JSON string of input information
$.ajax({
	url: 'ui_TESTBOT.php',
	dataType: 'text',
	data: data,
    type: 'post',
    success: function(response){
		processResponse(parseCommands(response));
    },
    error: function(xhr, status, error){
		alert('oops? Status = ' + status + ', error message = ' + error + "\nResponse = " + xhr.responseText);
    }
  });
}
function parseCommands(response){ // Response is data from CS server. This processes OOB commands sent from the CS server returning the remaining response w/o oob commands
	var len  = response.length;
	var i = -1;
	while (++i < len )
	{
		if (response.charAt(i) == ' ' || response.charAt(i) == '\t') continue; // starting whitespace
		if (response.charAt(i) == '[')  break;	                         // we have an oob starter
		return response;						// there is no oob data 
	}
	if ( i == len) return response; // no starter found
	var user = $('#txtUser').val();
     
	// walk string to find oob data and when ended return rest of string
	var start = 0;
	while (++i < len )
	{
		if (response.charAt(i) == ' ' || response.charAt(i) == ']') // separation
		{
			if (start != 0) // new oob chunk
			{
				var blob = response.slice(start,i);
				start = 0;
				var commandArr = blob.split('=');
				if (commandArr.length == 1) continue;	// failed to split left=right
				var command = commandArr[0]; // left side is command 
				var interval = (commandArr.length > 1) ? commandArr[1].trim() : -1;
// right side is millisecond count
				if (interval == 0)  /* abort timeout item */
				{ 
					switch (command){
						case 'alarm':
							window.clearTimeout(alarm);
							alarm = null;
							break;
						case 'callback':
							window.clearTimeout(callback);
							callback = null;
							break;
						case 'loopback':
							window.clearInterval(loopback);
							loopback = null;
							break;
					}
				}
				else if (interval == -1) interval = -1; // do nothing
				else
				{
					var timeoutmsg = {user: user, send: true, message: '[' + command + ' ]'}; // send naked command if timer goes off 
					switch (command) {
						case 'alarm':
							alarm = setTimeout(function(){sendMessage(timeoutmsg );}, interval);
							break;
						case 'callback':
							callback = setTimeout(function(){sendMessage(timeoutmsg );}, interval);
							break;
						case 'loopback':
							loopback = setInterval(function(){sendMessage(timeoutmsg );}, interval);
							break;
                                                case 'avatar' :
                                                        document.getElementById("avatarImage").src = "images/" + interval;
                                                        break;
					}
				}
			} // end new oob chunk
			if (response.charAt(i) == ']') return response.slice(i + 2); // return rest of string, skipping over space after ] 
		} // end if
		else if (start == 0) start = i;	// begin new text blob
	} // end while
	return response;	// should never get here
 }
 
function update(text){ // text is  HTML code to append to the 'chat log' div. This appends the input text to the response div
	var chatLog = $('#responseHolder').html();
	$('#responseHolder').html(chatLog + text);
	var rhd = $('#responseHolder');
	var h = rhd.get(0).scrollHeight;
	rhd.scrollTop(h);
}
// TTS code taken and modified from here:
// http://stephenwalther.com/archive/2015/01/05/using-html5-speech-recognition-and-text-to-speech
//---------------------------------------------------------------------------------------------------
// say a message
function speak(text, callback) {
    if ( cbTTSEnabled == 'checked' ) {
    	var u = new SpeechSynthesisUtterance();
		// get the voice
    	var voices = window.speechSynthesis.getVoices();
    	var selectedVoice = voices.filter(function (voice) {
	    	return voice.name == 'Google UK English Male';
    	})[0];
    	
    	// create the utterance
		u.text = text;
     	//u.lang = 'en-US';
    	u.lang = 'en-GB';
    	u.voice = selectedVoice;  
       	u.rate = .85;  
    	u.pitch = .9;  
    	u.volume = .5;  
 
	u.onend = function () {
        	if (callback) {
            	callback();
        	}
	};
 
    	u.onerror = function (e) {
        	if (callback) {
            		callback(e);
        	}
    	};
 
    	speechSynthesis.speak(u);
    }
}
//-----End of TTS Code Block-----------------------------------------------------------------------------
function processResponse(response) { // given the final CS text, converts the parsed response from the CS server into HTML code for adding to the response holder div
	//response = replace('\n','<br>\n');
	//var botSaid = '<strong>' + botName + ':</strong> ' + response + "<br>\n";
	var botSaid = '<strong>' + botName + ':</strong> ' + response + "<br>\n";
	update(botSaid);
	speak(response);
}
// Continuous Speech recognition code taken and modified from here:
// https://github.com/GoogleChrome/webplatform-samples/tree/master/webspeechdemo
//----------------------------------------------------------------------------------------------------
var final_transcript = '';
var recognizing = false;
var ignore_onend;
var start_timestamp;
if (!('webkitSpeechRecognition' in window)) {
  info.innerHTML = "You need to use Google Chrome to use speech to text functionality. Everything else should still work as expected.";
} else {
  btnMicrophone.style.display = 'inline-block';
  var recognition = new webkitSpeechRecognition();
  recognition.continuous = true;
  recognition.interimResults = true;
  recognition.lang = 'en-US';
  recognition.onstart = function() {
    recognizing = true;
    info.innerHTML =  " Speak now.";
    start_img.src = 'mic-animate.gif';
  };
  recognition.onerror = function(event) {
    if (event.error == 'no-speech') {
      start_img.src = 'mic.gif';
      info.innerHTML = "You did not say anything.";
      ignore_onend = true;
    }
    if (event.error == 'audio-capture') {
      start_img.src = 'mic.gif';
      info.innerHTML = "You need a microphone.";
      ignore_onend = true;
    }
    if (event.error == 'not-allowed') {
      if (event.timeStamp - start_timestamp < 100) {
	//Added more detailed message to unblock access to microphone.
        info.innerHTML = " I am blocked. In Chrome go to settings. Click Advanced Settings at the bottom. Under Privacy click the Content Settings button. Under Media click Manage Exceptions Button. Remove this site from the blocked sites list. ";
      } else {
        info.innerHTML = "You did not click the allow button."
      }
      ignore_onend = true;
    }
  };
  recognition.onend = function() {
    recognizing = false;
    if (ignore_onend) {
      return;
    }
    start_img.src = 'mic.gif';
    if (!final_transcript) {
      info.innerHTML = "Click on the microphone icon and begin speaking.";
      return;
    }
    info.innerHTML = "";
   
  };
  recognition.onresult = function(event) {
    var interim_transcript = '';
    for (var i = event.resultIndex; i < event.results.length; ++i) {
      if (event.results[i].isFinal) {
        final_transcript += event.results[i][0].transcript;
	//----Added this section to integrate with Chatscript submit functionality-----
	processFinalTranscript(final_transcript);
	final_transcript ='';
	//-----------------------------------------------------------------------------
      } else {
        interim_transcript += event.results[i][0].transcript;
      }
    } 
    final_span.innerHTML = final_transcript;
    interim_span.innerHTML = interim_transcript;  
  };
}
function microphoneClick(event) {
  if (recognizing) {
    recognition.stop();
    return;
  }
  final_transcript = '';
  txtMessage.value = '';
  recognition.start();
  ignore_onend = false;
  final_span.innerHTML = '';
  interim_span.innerHTML = '';
  start_img.src = 'mic-slash.gif';
  info.innerHTML = " Click the Allow button above to enable your microphone.";
  start_timestamp = event.timeStamp;
  
}
function capitalize(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
}
function processFinalTranscript(transcript) {
	
	transcript = transcript.trim();	
	
	var lastWord = transcript.split(" ").slice(-1);
	if ( lastWord == 'cancel') { 
		final_span.innerHTML = '';
                interim_span.innerHTML = '';
		return; 
		}
	else {
		var lastLetter = transcript.slice(-1);
		var firstWord =  transcript.split(' ')[0];
		var punctuation = '.';
		if ( ['who','what','where','how','why','did','do','does','will','can', 'could','would','should','is','are','am','shall',			'whom'].indexOf(firstWord) > -1) { punctuation = '?'; }
		if ( ['.', '?', '!', ',',':',';'].indexOf(lastLetter ) < 0) { transcript += punctuation; }
		transcript = capitalize(transcript);
        	txtMessage.value = transcript;
		final_span.innerHTML = '';
        	interim_span.innerHTML = '';
		if (cbAutoSend == 'checked') { frmChat(); }
	}
}
//End of Continuous Speech Recognition Block
//----------------------------------------------------------------------------------------------------
</script>
</body>
</html>
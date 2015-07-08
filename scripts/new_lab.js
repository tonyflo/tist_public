/*
 * @brief Leverages ajax via javascript to support new lab
 */

/* @brief The event handler that reacts to the new lab button being pressed
 */
function new_lab()
{
   document.getElementById("status").style.color="blue";
   document.getElementById("status").innerHTML = "Working...";
   ajax_new_lab_request();
} //end new_lab()


function getQueryVariable(variable) {
  var query = window.location.search.substring(1);
  var vars = query.split("&");
  for (var i=0;i<vars.length;i++) {
    var pair = vars[i].split("=");
    if (pair[0] == variable) {
      return pair[1];
    }
  }
  return 0;
}

/* @brief Create the XMLHttpRequest object, according browser
 */
function get_XmlHttp()
{
   // create the variable that will contain the instance of the
   // XMLHttpRequest object (initially with null value)
   var xmlHttp = null;

   // for Forefox, IE7+, Opera, Safari, ...
   if(window.XMLHttpRequest)
   {
      xmlHttp = new XMLHttpRequest();
   }
   // for Internet Explorer 5 or 6
   else if(window.ActiveXObject)
   {
      xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
   }

   return xmlHttp;
} //end get_XmlHttp()

/* @brief Sends data to a php file, via POST, and displays the received answer.
 * Specifically, queries the db given an email and password and returns a valid
 * pk
 */
function ajax_new_lab_request()
{
   var lab_name =  document.getElementById("lab_name").value;
   var date_founded =  document.getElementById("date_founded").value;
   var mission_statement =  document.getElementById("mission_statement").value;
   var lab_link =  document.getElementById("lab_link").value;
   var user_id = document.getElementById("user_id").value;
   var institution_id = getQueryVariable("institution_id");

   if(institution_id==0) {
      document.getElementById("status").style.color="red";
      document.getElementById("status").innerHTML = "Unknown error. Institution not known.";
      return;
   }

   // call the function for the XMLHttpRequest instance
   var request =  get_XmlHttp();

   // create pairs index=value with data that must be sent to server
   var the_data = 'lab_name=' + lab_name +
	'&' + 'date_founded=' + date_founded +
	'&' + 'mission_statement=' + mission_statement +
	'&' + 'institution_id=' + institution_id +
	'&' + 'user_id=' + user_id +
	'&' + 'lab_link=' + lab_link;

   // set the request
   request.open("POST", "scripts/new_lab.php", true);

   //adds a header to tell the PHP script to recognize the data as is sent
   //via POST
   request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

   // calls the send() method with datas as parameter
   request.send(the_data);

   // Check request status
   request.onreadystatechange = function()
   {
      var response = request.responseText;
      var lab_id = parseInt(response);
      if (request.readyState == 4) {
         if(lab_id <= 0)
         {
            document.getElementById("status").style.color="red";
            if(response == -5)
            {
               document.getElementById("status").innerHTML = "Email not found";
            }
            else if(response == -6)
            {
               document.getElementById("status").innerHTML = "Invalid password";
            }
            else
            {
               document.getElementById("status").innerHTML = "Unknown error";
		alert(request.responseText);
            }
         }
         else
         {
            document.getElementById("status").innerHTML =  "Lab created";
            document.getElementById("status").style.color="green";
		alert(request.responseText);
         }
      }
   }
} //end ajax_new_lab_request()

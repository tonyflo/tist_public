/*
 * @brief Leverages ajax via javascript to support new project
 */

/* @brief The event handler that reacts to the join project button being pressed
 */
function join_the_project()
{
   document.getElementById("status").style.color="blue";
   document.getElementById("status").innerHTML = "Working...";
   ajax_join_project_request();
} //end join_the_project()

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
function ajax_join_project_request()
{
   var job_title = document.getElementById("job_title").value;
   var discipline_id = document.getElementById("selected_discipline_id").value;
   var contribution_description = document.getElementById("contribution_description").value;
   var date_start = document.getElementById("date_start").value;
   var date_end = document.getElementById("date_end").value;
   var user_id = document.getElementById("user_id").value;
   var lab_id = document.getElementById("lab_id").value;
   var project_id = document.getElementById("project_id").value;

   // call the function for the XMLHttpRequest instance
   var request =  get_XmlHttp();

   // create pairs index=value with data that must be sent to server
   var the_data = 'job_title=' + job_title +
	'&' + 'discipline_id=' + discipline_id +
	'&' + 'contribution_description=' + contribution_description +
	'&' + 'date_start=' + date_start +
	'&' + 'date_end=' + date_end +
	'&' + 'project_id=' + project_id +
	'&' + 'lab_id=' + lab_id +
	'&' + 'user_id=' + user_id;

   // set the request
   request.open("POST", "scripts/join_project.php", true);

   //adds a header to tell the PHP script to recognize the data as is sent
   //via POST
   request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

   // calls the send() method with datas as parameter
   request.send(the_data);

   // Check request status
   request.onreadystatechange = function()
   {
      var response = request.responseText;
      if (request.readyState == 4) {
         if(response <= 0)
         {
            document.getElementById("status").style.color="red";
            if(response == -4)
            {
               document.getElementById("status").innerHTML = "Missing information";
            }
            else if(response == -13)
            {
               document.getElementById("status").innerHTML = "Unable to associate user with lab";
            }
            else if(response == -18)
            {
               document.getElementById("status").innerHTML = "Unable to associate the user with project";
            }
            else if(response == -19)
            {
               document.getElementById("status").innerHTML = "No relationship between project and lab";
            }
            else
            {
               document.getElementById("status").innerHTML = "Unknown error";
            }
         }
         else
         {
            document.getElementById("status").innerHTML =  "Project joined";
            document.getElementById("status").style.color="green";
         }
      }
   }
} //end ajax_join_project_request()

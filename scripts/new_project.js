/*
 * @brief Leverages ajax via javascript to support new project
 */

/* @brief The event handler that reacts to the new project button being pressed
 */
function new_project()
{
   document.getElementById("status").style.color="blue";
   document.getElementById("status").innerHTML = "Working...";
   ajax_new_project_request();
} //end new_project()

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
function ajax_new_project_request()
{
   var project_name =  document.getElementById("project_name").value;
   var date_start =  document.getElementById("date_start").value;
   var summary_science =  document.getElementById("summary_science").value;
   var summary_impact =  document.getElementById("summary_impact").value;
   var state_id =  document.getElementById("state_id").value;
   var link_website =  document.getElementById("link_website").value;
   var user_id = document.getElementById("user_id").value;
   var institution_id = document.getElementById("institution_id").value;
   var lab_id = document.getElementById("lab_id").value;

   // call the function for the XMLHttpRequest instance
   var request =  get_XmlHttp();

   // create pairs index=value with data that must be sent to server
   var the_data = 'project_name=' + project_name +
	'&' + 'date_start=' + date_start +
	'&' + 'summary_science=' + summary_science +
	'&' + 'summary_impact=' + summary_impact +
	'&' + 'state_id=' + state_id +
	'&' + 'institution_id=' + institution_id +
	'&' + 'lab_id=' + lab_id +
	'&' + 'user_id=' + user_id +
	'&' + 'link_website=' + link_website;

   // set the request
   request.open("POST", "scripts/new_project.php", true);

   //adds a header to tell the PHP script to recognize the data as is sent
   //via POST
   request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

   // calls the send() method with datas as parameter
   request.send(the_data);

   // Check request status
   request.onreadystatechange = function()
   {
      var response = request.responseText;
      var project_id = parseInt(response);
      if (request.readyState == 4) {
         if(project_id <= 0)
         {
            document.getElementById("status").style.color="red";
            if(response == -4)
            {
               document.getElementById("status").innerHTML = "Missing information";
            }
            else if(response == -12)
            {
               document.getElementById("status").innerHTML = "Unable to associate project with lab";
            }
            else if(response == -13)
            {
               document.getElementById("status").innerHTML = "Unable to associate user with member";
            }
            else if(response == -14)
            {
               document.getElementById("status").innerHTML = "Unable to create the project";
            }
            else if(response == -15)
            {
               document.getElementById("status").innerHTML = "Project already exists at this lab";
            }
            else
            {
               document.getElementById("status").innerHTML = "Unknown error";
            }
         }
         else
         {
            document.getElementById("status").innerHTML =  "Lab created";
            document.getElementById("status").style.color="green";
         }
      }
   }
} //end ajax_new_project_request()

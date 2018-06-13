'use strict';

/*
 * when the window is loaded: set the page and add the events
 */
 this.addEventListener("load", startUp, false);

 /*
  * window is loaded
  */
 function startUp()
 {
     this.addEventListener("click", clickEvents, false);

     /* a Flag is Selected: The Search starts */
     function clickEvents(event)
     {
         if (event.target.id == "emailIcon")
         {
             // if PhotoBox is Enabled (No displayNone class)
             if (!document.getElementById("documentaries").classList.contains("displayNone"))
             {
                 // Disable Photo Box and Email Button
                 document.getElementById("documentaries").classList.add("displayNone");
                 // Enable Email Box
                 document.getElementById("emailBox").classList.remove("displayNone");

                 document.getElementById("mailText").focus;
             }
         }
         else if (event.target.id == "sendButton")
         {
             if (document.getElementById("mailText").value)
             {
                 processSendMail();
                 processClearMail();
                 returnBack();
             }
             else
             {
                 document.getElementById("mailTextError").innerHTML = "Please Enter Your Message to Send!";
             }
         }
         else if (event.target.id == "clearButton")
         {
             processClearMail();
         }
         else if (event.target.id == "returnButton")
         {
             processClearMail();
             returnBack();
         }
     }

     function returnBack()
     {
         // Show Photo Box
         document.getElementById("documentaries").classList.remove("displayNone");
         // Hide Email Box
         document.getElementById("emailBox").classList.add("displayNone");
     }
 }

 function processSendMail()
 {
     var xhttpLogin = new XMLHttpRequest();
     var formLoginData = new FormData(); // Currently empty
     formLoginData.append("toMailAddress", "mferten@mfeweb.com");
     formLoginData.append("fromMailAddress", "mferten@mfeweb.com");
     formLoginData.append("mailMessage", document.getElementById("mailText").value);
     xhttpLogin.onreadystatechange = function()
     {
         if (xhttpLogin.readyState == 4 && xhttpLogin.status == 200)
         {
             // Initialize the entry columns
             document.getElementById("mailText").value = "";
         }
     };
     xhttpLogin.open("POST", "ajax/sendAnE_Mail", true);
     xhttpLogin.setRequestHeader('X-CSRF-TOKEN', document.getElementsByName('csrf-token')[0].getAttribute('content'));
     xhttpLogin.send(formLoginData);
 }

 function processClearMail()
 {
     document.getElementById("mailTextError").innerHTML = "";
     document.getElementById("mailText").value = "";
 }

# Wax and Skin Care


## ToDo
# 🚩Create a Notification URL

The notification URL receives event notifications from Square. These notifications come as JSON data from a POST request. The notification URL must confirm the successful receipt of the data. Applications need at least one reachable notification URL to receive and process webhook events from Square. The notification URL is specified on the Webhooks page of your application in the Developer Dashboard

* 🔹 The notification URL must do the following:

* 🔹 Receive a POST event notification.

* 🔹 Respond with a 2xx HTTP status within 10 seconds.

* 🔹 Require that connections use HTTPS.

* 🔹 Store the event notification data safely.

* 🔹 Use the generated idempotency value that's included as the event_id field in the body of each event notification. Design your application to use this value to bypass processing if it's a repeated value.

* 🔹 Use message versioning. If your application passes Square event data to another application, you should add versioning to the data to avoid duplication and to make auditing of the data transfer easier.

You can use a server endpoint as a notification URL or you can create a serverless endpoint on services such as Amazon Web Services (AWS) or Google Cloud Platform. You can test a notification URL with sites such as webhook.site.You add the notification URL to the webhooks information for your application in Subscribe to Event Notifications.


🚩Add some code👇🏼for the native Android "back" button.
```JavaScript
document.addEventListener("backbutton", onBackKeyDown, false);
function onBackKeyDown() {
    //Retrieve app's history
    var history = App.getHistory();
    //Check that there's only one screen in history (the current one):
    if ( history.length === 1 ) {
        //Check that this element is the default (home) screen:
        var history_screen = history[0];
        if ( TemplateTags.getDefaultRouteLink().replace('#','') === history_screen.fragment ) {
            //Only one element in history and this element is default screen: exit app on back button:
            navigator.app.exitApp();
            return;

        }
    }
    //History has at least one previous element: just go back to it:
    navigator.app.backHistory();
}
document.addEventListener("backbutton", onBackKeyDown, false);
function onBackKeyDown() {
    //Retrieve app's history
    var history = App.getHistory();
     //Check that there's only one screen in history (the current one):
    if ( history.length === 1 ) {
        //Check that this element is the default (home) screen:
        var history_screen = history[0];
        if ( TemplateTags.getDefaultRouteLink().replace('#','') === history_screen.fragment ) {
            //Only one element in history and this element is default screen: exit app on back button:
            navigator.app.exitApp();
            return;
        }
    }
     //History has at least one previous element: just go back to it:
    navigator.app.backHistory();
}
```

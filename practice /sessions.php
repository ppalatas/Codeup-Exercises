<!--
Sessions are a way to store data over multiple pages


For instance:
    isset() is saying, if a variable has been set

    so on your login page, once they submit the form and are logged in,
    you would say $_SESSION['is_logged_in'] = "true";

    This is setting a cookie named 'is_logged_in' and the value equal to "true"
    
    If we have a login page that we only want to display for users that are NOT logged in,
    we would say:
    
    if(isset($_SESSION['is_logged_in']) !== "true")
    {
        display_page_here();
    }

    In the above statement, we are checking to see if the variable hasn't been set

    In this case, display_page_here(); would be a function that displays your page



-->

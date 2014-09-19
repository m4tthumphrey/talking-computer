Run the following command from with the directory that contiains index.php

`php -S 192.168.66.1:8000`

Don't forget to update the IP address to the IP of the computer. 

Then hit http://192.168.66.1:8000/<phrase to say> using cURL or simply from within your browser ie:

`curl http://192.168.11.3:8000/?message=hello-there`

You can also set the voice by appending `&voice=<voice>` to the end of the request.
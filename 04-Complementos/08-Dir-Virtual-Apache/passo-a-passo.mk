 caminho
 -- 
 C:\xampp\apache\conf\extra\httpd-vhosts

Descomenta estas linhas
 ##<VirtualHost *:80>
    ##ServerAdmin webmaster@dummy-host2.example.com
    ##DocumentRoot "D:/xampp/htdocs/dummy-host2.example.com"
    ##ServerName dummy-host2.example.com
    ##ErrorLog "logs/dummy-host2.example.com-error.log"
    ##CustomLog "logs/dummy-host2.example.com-access.log" common
	#adcionar depois do customlog
	#para permitir 
	<Directory "D:/xampp/htdocs/Aulas-PHP-Udemy/04-Complementos/08-Dir-Virtual-Apache/website">
        Order allow,deny
        Allow from all
        Require all granted
    </Directory>

##</VirtualHost>

# edita o hosts no C:\Windows\System32\drivers\etc
127.0.0.1 local.cursophp7.com.br



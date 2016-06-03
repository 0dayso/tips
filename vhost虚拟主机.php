#
# Virtual Hosts
#
# If you want to maintain multiple domains/hostnames on your
# machine you can setup VirtualHost containers for them. Most configurations
# use only name-based virtual hosts so the server doesn't need to worry about
# IP addresses. This is indicated by the asterisks in the directives below.
#
# Please see the documentation at 
# <URL:http://httpd.apache.org/docs/2.2/vhosts/>
# for further details before you try to setup virtual hosts.
#
# You may use the command line option '-S' to verify your virtual host
# configuration.

#
# Use name-based virtual hosting.
#
NameVirtualHost *:80

#
# VirtualHost example:
# Almost any Apache directive may go into a VirtualHost container.
# The first VirtualHost section is used for all requests that do not
# match a ServerName or ServerAlias in any <VirtualHost> block.

#��һ��վ��localhost
<VirtualHost *:80>
    ServerName localhost
    DocumentRoot "H:/amp/Apache/htdocs"
    <Directory "H:/amp/Apache/htdocs">
        Options Indexes
        AllowOverride All
        Order Deny,Allow
        Allow from All
        DirectoryIndex index.php index.html main.php
    </Directory>
</VirtualHost>

#�ڶ���վ��www.dy.com
<VirtualHost *:80>
    ServerName www.dy.com
    ServerAlias www.Dy.com Dy.com dy.com
    DocumentRoot "H:/www"
    <Directory "H:/www">
        Options Indexes
        AllowOverride All
        Order Deny,Allow
        Allow from All
        DirectoryIndex index.php index.html main.php
    </Directory>
</VirtualHost>

#������վ��(phpmyadminվ��)
<VirtualHost *:80>
    ServerName www.myadmin.com
    ServerAlias www.myadmin.com
    DocumentRoot "H:/amp/phpMyAdmin4.1.9"
    <Directory "H:/amp/phpMyAdmin4.1.9">
        Options Indexes
        AllowOverride All
        Order Deny,Allow
        Allow from All
        DirectoryIndex index.php index.html main.php
    </Directory>
</VirtualHost>

#���ĸ�վ��(php38վ��)
<VirtualHost *:80>
    ServerName www.php38.com
    ServerAlias php38.com
    DocumentRoot "H:/php38"
    <Directory "H:/php38">
        Options Indexes
        AllowOverride All
        Order Deny,Allow
        Allow from All
        DirectoryIndex index.php index.html main.php
    </Directory>
</VirtualHost>





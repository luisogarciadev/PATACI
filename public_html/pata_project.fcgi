#!/home8/pataacoco/local_usr/bin/python
 
import sys
import os
 
sys.path.insert(0, "/home8/pataacco/local_usr/lib/python2.7/site-packages")
sys.path.append("/home8/pataacco/django_projects/pata_project")
 
os.environ["DJANGO_SETTINGS_MODULE"] = "pata_project.settings"
 
from django.core.servers.fastcgi import runfastcgi
runfastcgi(method="threaded", daemonize="false")

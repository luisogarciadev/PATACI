#!/home8/pataacco/.virtualenvs/pataapp/bin/python  
import sys, os

# Add a custom Python path.  
sys.path.insert(0, "/home8/pataacco/.virtualenvs/pataapp")  
sys.path.insert(13, "/home8/pataacco/django_projects/myproject")  
os.environ['DJANGO_SETTINGS_MODULE'] = 'myproject.settings'  
from django.core.servers.fastcgi import runfastcgi  
runfastcgi(method="threaded", daemonize="false")
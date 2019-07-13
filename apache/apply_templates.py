import os, re, sys
from jinja2 import Environment, FileSystemLoader, select_autoescape

"""
Apply Default Values to Jinja Templates


This script applies default values to 
mediawiki LocalSettings.php file.

The configuration templates are useful for Ansible,
but this is useful for experiments/one-offs.

All configuration files are for charlesreid1.com
docker pod, nginx, and realted infrastructure.
"""


# Where templates live
TEMPLATEDIR = '.'

# Where rendered templates will go
OUTDIR = '.'

# Should existing files be overwritten
OVERWRITE = True

env = Environment(loader=FileSystemLoader('.'))

tfile = 'charlesreid1.wiki.conf.j2'
rfile = 'charlesreid1.wiki.conf'

content = env.get_template(tfile).render({
    "server_name_default" : "charlesreid1.com",
    "admin_email" : "charles@charlesreid1.com"
})

# Write to file
if os.path.exists(rfile) and not OVERWRITE:
    raise Exception("Error: file %s already exists!"%(rfile))
else:
    with open(rfile,'w') as f:
        f.write(content)


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

tfile = 'LocalSettings.php.j2'

content = env.get_template(tfile).render({})

# Write to file
with open('LocalSettings.php','w') as f:
    f.write(content)


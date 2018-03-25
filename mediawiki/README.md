# mediawiki config files

Note: you should modify `root.password.php.example`
to include your own root password, and rename it 
to `root.password.php`.

There is a script to do this in the [d-mediawiki](https://charlesreid1.com:3000/docker/d-mediawiki) repo.

It is expected that this container 
will utilize docker secrets to pass
the mysql password into the container.

If this is the case, the mysql password
will be located at `/run/secrets/<name of mysql secret>`.

You can use the following perl one-liner 
to replace the password placeholder `DUMMY`
with the real password contained in
the secret file:

```
RUN /usr/bin/perl -p -e "s/DUMMY/`cat /run/secrets/mysql_root_password`/g" \
    /var/www/html/root.password.php.example > /var/www/htm/root.password.php
```

**THIS SHOIULD BE EXECUTEED FROM THE MEDIAWIKI CONTAINER DOCKERFILE.**

See Dockerfile in [d-mediawiki](https://charlesreid1.com:3000/docker/d-mediawiki) repo.


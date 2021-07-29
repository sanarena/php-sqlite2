# PHP-SQLite2 Polyfill

Recently I was working on a very legacy project of mine where I was using SQLite2, that project was developed before SQLite3 released in 2004.
Since it was a hobby project, I never got around upgrading it's codes to SQLite 3. I keep the project online just as a memorial for myself, and used to Install legacy sqlite extension on my PHP servers until recently where legacy sqlite extension no longer support newer PHP versions.

So here is a very simple (limited) polyfill that use SQLite3 class to re-create SQLite2 functions for PHP.
Please note that this is not a complete polyfill and I have only included functions that I was using in my old project.

If you added a new function to this polyfill, please feel free to create a pull request.

Since this polyfill use SQLite3, you need to upgrade legacy SQLite2 database files to SQLite3:

sqlite old.sqlite2 .dump | sqlite3 new.sqlite3
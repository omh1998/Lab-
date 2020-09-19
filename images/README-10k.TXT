
Table set SSTIC04-10000
----------------------

INFO:

This table set is made of 4 perfect rainbow tables with an initial
number of 350'000'000 chains. At length 10000 there are about
15'400'000 perfect chains left. Each table has a success rate of
85.2%, resulting in 99.95% of success rate for the table set.

The average number of hash operations needed to recover a password is
15.3 million. The maximum number of operations is 297 million.

The total size of the tables is 388MB. If you have only 250MB of RAM
and many passwords to crack you may want to try the -n 3 option to use
only 3 tables in parallel at a time.

USAGE:

Unzip the files into a directory (e.g. 10000/). Run ophcrack with
following parameters:

./ophcrack -d 10000/ -t 10000 -n 4 -s <hash_file>



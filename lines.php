<?php
$lines = array(
  array(
    'line'        => 'sudo !!',
    'tag'         => 'bash',
    'description' => 'Where it all began. Re-run the previous command, but as sudo.'
  ),
  array(
    'line'        => 'echo "!!" > foo.sh',
    'tag'         => 'utility',
    'description' => 'Create a script out of your previous command. Useful for saving your favorite one-liners!'
  ),
  array(
    'line'        => 'echo "<span class="hl">STRING</span>" | rev',
    'tag'         => 'string',
    'description' => 'Reverse the letters of any <code>STRING</code>. <code>STRING</code> becomes <code>GNIRTS</code>.'
  ),
  array(
    'line'        => 'grep -ril "SEARCH" DIR',
    'tag'         => 'grep',
    'description' => 'Open all the files under the directory <code>DIR</code> and look for instances of the word <code>STRING</code>.'
  ),
  array(
    'line'        => 'cp <span class="hl">FILE</span>{,.bak}',
    'tag'         => 'files',
    'description' => 'Quickly make a <code>.bak</code> backup of a single file named <code>FILE</code>.'
  ),
  array(
    'line'        => 'ssh sshtron.zachlatta.com',
    'tag'         => 'fun',
    'description' => 'Play Tron with others!'
  ),
  array(
    'line'        => 'for i in *; do mv -if $i `echo $i | tr \'A-Z\' \'a-z\'`; done',
    'tag'         => 'files',
    'description' => 'Rename all files in current directory to lowercase.'
  ),
  array(
    'line'        => 'ls -l | awk \'/^\-/ { print $5,$9 }\' | sort -nr | awk \'{print $2}\'',
    'tag'         => 'listing',
    'description' => 'Display all files in the current directory, sorted by size, from largest to smallest. Use <code>sort -n</code> for smallest to largest.'
  ),
  array(
    'line'        => 'apropos . | shuf -n 1 | awk \'{print$1}\' | xargs man',
    'tag'         => 'weird',
    'description' => 'Open a random man page.'
  ),
  array(
    'line'        => 'watch grep \"cpu MHz\" /proc/cpuinfo',
    'tag'         => 'system',
    'description' => 'Monitor your real-time CPU usage. Press <code>Ctrl+C</code> to exit.'
  ),
  array(
    'line'        => 'while sleep 1;do tput sc;tput cup 0 $(($(tput cols)-29));date;tput rc;done &',
    'tag'         => 'utility',
    'description' => 'Show the date/time on the top-right corner of the current terminal.'
  ),
  array(
    'line'        => 'install -b -m 777 /dev/null <span class="hl">FILE</span>',
    'tag'         => 'files',
    'description' => 'Create a new file <code>FILE</code> with permissions <code>777</code>. The <code>-b</code> argument will make a backup of the file if it already exists.'
  ),
  array(
    'line'        => 'telnet towel.blinkenlights.nl',
    'tag'         => 'fun',
    'description' => 'Watch Star Wars IV. In your terminal. In ASCII. You better believe it.'
  ),
  array(
    'line'        => 'curl ifconfig.me',
    'tag'         => 'network',
    'description' => 'Get your current external IP. You can also try <code>curl  icanhazip.com</code> as an alternative if <code>ifconfig.me</code> doesn\'t work.'
  ),
  array(
    'line'        => 'wget --random-wait -r -p -e robots=off -U mozilla <span class="hl">WEBSITE.COM</span>',
    'tag'         => 'network',
    'description' => 'Download an entire website with <code>wget</code>. This will download all assets, including images, so use with care.'
  ),
  array(
    'line'        => 'history | awk \'{a[$4]++}END{for(i in a){print a[i] " " i}}\' | sort -rn | head',
    'tag'         => 'utility',
    'description' => 'Show your 10 most-used terminal commands.'
  ),
  array(
    'line'        => 'rm !(*.foo|*.bar|*.baz)',
    'tag'         => 'files',
    'description' => 'Delete all the files in a folder that <strong>don\'t</strong> end in one of the extensions supplied.'
  ),
  array(
    'line'        => 'mkdir <span class="hl">FOLDER</span> && cd $_',
    'tag'         => 'files',
    'description' => 'Create the folder <code>FOLDER</code> and enter it.'
  ),
  array(
    'line'        => 'awk \'/\'$(date -d "1 hours ago" "+%d\\/%b\\/%Y:%H:%M")\'/,/\'$(date "+%d\\/%b\\/%Y:%H:%M")\'/ { print $0 }\' <span class="h1">/var/log/httpd/access_log</span>',
    'tag'         => 'files',
    'description' => 'Last 60 minutes of Apache logs'
  ),
  array(
    'line'        => 'curl wttr.in',
    'tag'         => 'utility',
    'description' => 'Check the weather from your terminal'
  ),
);

// https://www.commandlinefu.com/commands/browse/sort-by-votes
// https://arturoherrero.com/command-line-one-liners/
// https://www.datagenx.net/2015/09/linux-one-liners-1.html
// https://pastebin.com/sDinHfK8

$tags = array(
  'files' => array(
    'color' => 'red'
  ),
  'loop' => array(
    'color' => 'orange'
  ),
  'network' => array(
    'color' => 'purple'
  ),
  'disk' => array(
    'color' => 'teal'
  ),
  'fun' => array(
    'color' => 'pink'
  ),
  'weird' => array(
    'color' => 'green'
  ),
  'grep' => array(
    'color' => 'blue'
  ),
  'listing' => array(
    'color' => 'indigo'
  ),
  'string' => array(
    'color' => 'red'
  ),
  'bash' => array(
    'color' => 'orange'
  ),
  'utility' => array(
    'color' => 'purple'
  ),
  'system'  => array(
    'color' => 'teal'
  ),
);

// http://www.samcodes.co.uk/project/markov-namegen/

$ids = array (
  'bobcatshark',
  'wildebeet',
  'raverfish',
  'swalrush',
  'tigeon',
  'albat',
  'vulturtle',
  'mineapig',
  'beaverine',
  'narwig',
  'primatee',
  'waterfish',
  'vamprey',
  'raccoot',
  'partricken',
  'firebat',
  'hermonkey',
);
?>

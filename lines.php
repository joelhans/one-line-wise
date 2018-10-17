<?php
$lines = array(
  array(
    'line'        => 'sudo !!',
    'tag'         => 'bash',
    'description' => 'Where it all began. Re-run the previous command, but as sudo.'
  ),
  array(
    'line'        => 'echo "<span class="hl">STRING</span>" | rev',
    'tag'         => 'string',
    'description' => 'Reverse the letters of any <code>STRING</code>. <code>STRING</code> becomes <code>GNIRTS</code>.'
  ),
  array(
    'line'        => 'find <span class="hl">DIR</span>/* -exec grep -il "<span class="hl">SEARCH</span>" \'{}\' \; -print',
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
    'line'        => 'for i in `ls -1`; do mv $i "${i,,}" ; done',
    'tag'         => 'files',
    'description' => 'Rename all files in current directory to lowercase.'
  ),
  array(
    'line'        => 'ls -l | grep \'^-\' | awk \'{print $5,$9}\' | sort -nr | awk \'{print $2}\'',
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
    'description' => 'Get your current external IP.'
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
  'system' => array(
    'color' => 'purple'
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

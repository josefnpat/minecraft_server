<?php
$title = "The Penguinista welcomes you!";
function memory_usage(){
  $raw = `free -mt`;
  return "<pre>$raw</pre>";
}
$imgs = glob('maps/*.png');
$current_tn = array_pop($imgs);
$current_map = array_pop($imgs);
preg_match("@[0-9]+@",$current_map,$matches);
$current = $matches[0];

?><html>
  <head>
    <title><?php echo $title; ?></title>
    <script src="js/mcSkinRenderer.js" type="text/javascript"></script>
    <style>
      html {
        padding: 40px;
        color: #FFF;
        background-color: #000;
        font-family: sans-serif;
      }
      .wrap {
        width: 960px;
        margin: 0px auto;
      }
      .block, .wideblock {
        color: #CCC;
        background-color: #333;
        float: left;
        padding: 20px;
        margin: 10px;
      }
      .block {
        width: 420px;
      }
      .block img {
        max-width: 420px;
      }
      .wideblock {
        width: 900px;
      }
    </style>
  </head>
  <body>
    <div class="wrap">
      <h1><?php echo $title; ?></h1>
      <div class="wideblock">
        <h2>Status</h2>
        <p><?php

function get_pid($file){
  $exe = "pgrep -f \"$file\"";
  $pids = explode("\n",trim(`$exe`));
  if(count($pids) > 1){
    return $pids[1];
  } else {
    return false;
  }
  print_r($pids);
}

function echo_status($file){
  echo "<p><code>$file</code> &mdash; ";
  if($pid = get_pid($file)){
    echo "Running [$pid]";
  } else {
    echo "Not Running";
  }
  echo "</p>";
}

echo_status("minecraft_server.jar");
echo_status("daemon_server.sh");
echo_status("daemon_c10t.sh");
echo_status("daemon_backup.sh");

?></p>
      </div>
      <div class="block">
        <h2>Map</h2>
        <p>Last update: <?php echo date("r",$current); ?></p>
        <a href="<?php echo $current_map; ?>"><img src="<?php echo $current_tn; ?>" /></a>
      </div>
      <div class="block">
        <h2>Minecart Map</h2>
        <pre><?php
          $loc = file_get_contents("locations.txt");
          echo $ret = preg_replace("@\[(.+?)\]@","<img height=16 src=\"images/\${1}.png\" />",$loc);
        ?></pre>
      </div>
      <div class="block">
        <h2>White List</h2>
        <p><?php
$users = file("white-list.txt");
foreach($users as $user){
  $user = trim($user);
  echo '<p><img class="skin" src="http://www.minecraft.net/skin/'.$user.'.png"/> '.$user.'</p>';
}
?>
        </p>
      </div>
      <div class="wideblock">
        <h2>Log:</h2>
        <pre><?php echo `tail server.log`; ?></pre>
        <p><a href="server.log">server.log</a></p>
      </div>
      <div class="wideblock">
        <h2>Memory usage</h2>
        <p><?php echo memory_usage(); ?></p>
      </div>
    </div>
    <script type="text/javascript">
      renderMCSkins('skin', 1);
    </script>
  </body>
</html>
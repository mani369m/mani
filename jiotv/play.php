<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="https://img.icons8.com/doodle/480/000000/circled-play.png" type="image/gif" sizes="16x16">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script type="text/javascript" src="https://content.jwplatform.com/libraries/IDzF9Zmk.js"></script>
  <script type="text/javascript">
    jwplayer.key = "Khpp2dHxlBJHC8MCmLnBuV2jK/DwDnJMniwF6EO9HC/riJ712ZmbHg==";
  </script>

  <link rel="stylesheet" href="https://cdn.jwplayer.com/skins/NFLX/nflx.css">
  <link rel="stylesheet" href="assets/style.css">
  <title>Video Player</title>
  <meta name="referrer" content="no-referrer">
  <style>
    body {
      background-color: #000000
    }

    #myElement {
      height: 600px !important;
      width: 740px;
    }
  </style>
</head>
<body>
  <div id="myElement" style="height: auto; text-align: center;"></div>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
?>

<script type="text/JavaScript">
    const urlParams = new URLSearchParams(window.location.search);
    const id = urlParams.get('id');

    const imageUrl = 'https://jiotv.catchup.cdn.jio.com/dare_images/images/' + id + '.png';

    jwplayer("myElement").setup({
        "file": "api.php?id=" + id,
        "skin": {
            "name": "nflx"
        },
        "skinUrl": "https://cdn.jwplayer.com/skins/NFLX/nflx.css",
        "image": imageUrl,
        "type": "hls",
        "captions": {
            "color": '#ffb800',
            "fontSize": 30,
            "backgroundOpacity": 0
        },
        "sharing": {
            "sites": ['facebook', 'twitter']
        }
    });
</script>
</body>
</html>

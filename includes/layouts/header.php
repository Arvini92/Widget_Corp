<?php 
    if(!isset($layout_context))
    {
        $layout_context = "public";
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Widget Corp <?php if ($layout_context == "admin") { echo 
        "Admin";} ?></title>
    <link rel="stylesheet" href="stylesheets/public.css" madia="all" rel="stylesheet" type="text/css">
</head>
<body>
   <div id="header">
        <h1>Widget Corp <?php if ($layout_context == "admin") { echo 
        "Admin";} ?></h1>
   </div>
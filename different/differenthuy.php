<!-- <?php
/*
You are provided a boolean variable $member
Use $member with php code in <body> so that
if $member = true, html will look the same as member_view.png
if $member = false, html will look the same as non_member_view.png

Css is provided in style.css. DO NOT change css or add new css rules in html and style.css
*/

$member = true; //this value should make html like member_view.png
// $member = false; //this value should make html like non_member_view.png

?> -->

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Serving different content</title>
<link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="wrapper">
<header class="both">
<h1>Nonesuch Club</h1>
<p>Welcome one and all to a really exclusive club for PHP developers. So exclusive, it doesn't exist!</p>
</header>

<?php
if($member == false){
echo(
"<section class='non-members'>
<h2>Become a Member</h2>
<p>Useful information for non-members. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae doloribus esse itaque necessitatibus nobis placeat repellat temporibus voluptas. Architecto maxime quisquam soluta veniam? Aliquid consequuntur cum eligendi enim, natus non!</p>
<p>Accusamus animi architecto asperiores aspernatur at dolor eaque error est illum ipsam libero nam nemo nisi, officiis pariatur quae quidem quod sed sunt totam velit veniam vero voluptas voluptatem voluptatibus?</p>
</section>"
);
} else {
echo(
"<section class='members'>
<h2>Members&apos; News</h2>
<p>For members&apos;s eyes only. Amet at, cum delectus deserunt dolorem doloribus ea esse eum eveniet facilis fuga illo in itaque iusto laudantium minus molestiae necessitatibus nobis, non obcaecati odit ratione repellendus rerum. Odit, placeat.</p>
<ul>
<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>");}

<?php
$name = "Ivan Ivanov";
$address = "201 Lenina Street, apt. 25, Moscow, 215315, Russia";
$phone_number = "+7-ХХХ-ХХХ-ХХХХ";
$m_status = "Single";
$date_of_birth = "25th July 1985";
$natioanlity = "Russian";
$email = "your.name@gmail.com";
?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CV</title>
    <!-- Latest compiled and minified CSS-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="bootstrap-social-gh-pages/bootstrap-social.css" rel="stylesheet">
    <!-- Optional theme
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">-->

    <!-- Latest compiled and minified JavaScript
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>-->
</head>
<body>
      <div class="col-sm-12 col-md-8 col-lg-6">
          <h2>Photo</h2>
          <img src="images/id.png" class="img-responsive img-thumbnail">
      </div>
      <div class="col-sm-12 col-md-8 col-lg-6">
          <h2>Personal information</h2>
          <dl class="dl-horizontal">
              <dt>Name</dt>
              <dd><?=$name?></dd>
              <dt>Address</dt>
              <dd><?=$address?></dd>
              <dt>Phone number</dt>
              <dd><?=$phone_number?></dd>
              <dt>Marital status</dt>
              <dd><?=$m_status?></dd>
              <dt>Date of birth</dt>
              <dd><?=$date_of_birth?></dd>
              <dt>Nationality</dt>
              <dd><?=$natioanlity?></dd>
              <dt>Email</dt>
              <dd><?=$email?></dd>
          </dl>
      </div>
      <div class="col-sm-12 col-md-4 col-lg-6">
          <h2>Objective</h2>
          <p>I am seeking a competitive and challenging environment where I can use my ability to communicate with people and take advantage of my knowledge of English.</p>
      </div>
      <div class="col-sm-12 col-md-4 col-lg-6">
          <h2>Education</h2>
          <p>Moscow State University of Instrument Engineering and Computer Science, 2001—2006 (Degree in Computer Science and computer facilities; Master’s degree in Computer science)</p>
      </div>
      <div class="col-sm-12 col-md-4 col-lg-6">
          <h2>Additional qualifications</h2>
          <p>September — December 2014; Programming in Java courses at the Solution Training Centre, Moscow, Russia</p>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-12">
          <h2>Work experience</h2>
          <table class="table table-striped table-hover">
              <tr>
                  <th>Place of work</th>
                  <th>Time</th>
                  <th>Title</th>
                  <th>Responsibilities</th>
              </tr>
              <tr><td>Company Name 1, Krasnodar, Russia</td><td>2007-2011</td><td>Assistant manager</td><td><ul>
                  <li>Providing main office with office supplies</li>
                  <li>Analyzing large data sets collected through all departments</li>
                  <li>Preparing financial forecasts</li>
                  <li>Preparing reports for the board of management</li>
              </ul></td></tr>
              <tr><td>Company Name 2, Moscow, Russia</td><td>2012-present</td><td>Financial analyst</td><td><ul>
                  <li>Preparing business plans</li>
                  <li>Planning investment activities and budget</li>
                  <li>Analyzing data sets collected through all departments</li>
                  <li>Preparing financial forecasts</li>
                  <li>Preparing reports for the board of management</li>
              </ul></td></tr>
          </table>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-2">
          <a href="http://www.twitter.com/" class="btn btn-block btn-social btn-twitter">
              <span class="fa fa-twitter"></span>Find me at Twitter
          </a>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-2">
          <a href="http://www.vk.com/" class="btn btn-block btn-social btn-vk">
              <span class="fa fa-vk"></span>Find me at VK
          </a>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-2">
          <a href="http://www.facebook.com/" class="btn btn-block btn-social btn-facebook">
              <span class="fa fa-facebook"></span> Find me at Facebook
          </a>
      </div>
</body>
</html>
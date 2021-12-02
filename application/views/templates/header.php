<!DOCTYPE html>
<html lang="fr">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo base_url('assets/style.css" type="text/css" media="screen');?>"/>
        <link rel="icon" href="<?php echo base_url('assets/img/favicon.png');?>"/>
        <title>CodeIgniter playground</title>
</head>
<body>
        <header>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <a class="navbar-brand" href="/">
                        <img src="<?php echo base_url('assets/img/logo.png');?>" width="30" height="30" alt="logo" class="mr-3">
                         CI Playground
                        </a>
                        
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                <div class="navbar-nav">
                                        <a class="nav-item nav-link" href="<?php echo site_url('news/'); ?>">Articles</a>
                                </div>
                        </div>
                </nav>
        </header>
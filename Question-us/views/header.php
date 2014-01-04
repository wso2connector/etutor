<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>eTutor</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>sb-admin/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="<?php echo base_url(); ?>sb-admin/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>sb-admin/font-awesome/css/font-awesome.min.css">
</head>
<style type="text/css">
    .votecard {
        background: url(images/sprite.png) no-repeat 0 0;
        padding: 4px;
        width: 63px;
        height: 43px;
        text-align: center;
    }

    .votecard div {
        position: relative;
        overflow: hidden;
        width: 63px;
        height: 43px;
    }

    .votecard em {
        display: block;
        position: relative;
        width: 63px;
        height: 33px;
        padding: 6px 0 6px 0;
        font: normal 24px/24px "Helvetica Neue", "Helvetica", "Arial", Sans-serif;
        color: #45453f;
    }

    .votecard strong {
        font-weight: bold;
    }

    .votecard span {
        font-size: 10px;
        line-height: 10px;
        display: block;
        color: #9a9a94;
    }

    a.voteaction {
        margin: 0 0 0 3px;
        display: block;
        text-indent: -9999px;
        width: 71px;
        height: 21px;
        background: url(images/sprite.png) no-repeat -3px -75px;
    }

    a.voteaction:hover {
        outline: none;
        background-position: -3px -54px;
    }

    a.voted,
    a.voted:hover {
        outline: none;
        background-position: -3px -96px;
        cursor: default;
    }

</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.0/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        /* create a node for the flip-to number */
        $(".votecard em").clone().appendTo(".votecard div");
        /* increment that by 1 */
        var node = $(".votecard em:last strong")
        node.text(parseInt(node.text()) + 1);


        function flip(obj) {
            obj.prev().find("em").animate({
                top: '-=45'
            }, 200);
            obj.toggleClass("voted", true);
        }

        $('.voteaction').bind({
            click: function (event) {
                event.preventDefault()
            },
            mouseup: function () {
                flip($(this));
                $(this).unbind('mouseup');
            }
        });

    });
</script>
<script type="text/javascript">
    var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
    document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
    try {
        var pageTracker = _gat._getTracker("UA-8108740-1");
        pageTracker._trackPageview();
    } catch (err) {
    }</script>
<body>
<div id="wrapper">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="home.html">Admin</a>
        </div>

        <!-- Collect the nav links, Search, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li><a href="<?php echo site_url() . "/home/"; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="<?php echo site_url() . "/add_post/"; ?>"><i class="fa fa-font"></i> Ask a Question</a>
                </li>
                <li><a href="<?php echo site_url() . "/question_list/"; ?>"><i class="fa fa-table"></i> Question
                        List</a></li>
                <li><a href="<?php echo site_url() . "/member_list/"; ?>"><i class="fa fa-edit"></i> Members</a></li>
                <li><a href="<?php echo site_url() . "/search/"; ?>"><i class="fa fa-font"></i> Search</a></li>
                <li><a href="<?php echo site_url() . "/register/"; ?>"><i class="fa fa-desktop"></i> Join Now</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right navbar-user">
                <li class="dropdown messages-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Messages
                        <span class="badge">7</span> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-header">7 New Messages</li>
                        <li class="message-preview">
                            <a href="#">
                                <span class="avatar"><img src="http://placehold.it/50x50"></span>
                                <span class="name">Nimashi Perera:</span>
                                <span class="message">Hey there, I wanted to ask you something...</span>
                                <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li class="message-preview">
                            <a href="#">
                                <span class="avatar"><img src="http://placehold.it/50x50"></span>
                                <span class="name">Nimashi Perera:</span>
                                <span class="message">Hey there, I wanted to ask you something...</span>
                                <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li class="message-preview">
                            <a href="#">
                                <span class="avatar"><img src="http://placehold.it/50x50"></span>
                                <span class="name">Nimashi Perera:</span>
                                <span class="message">Hey there, I wanted to ask you something...</span>
                                <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#">View Inbox <span class="badge">7</span></a></li>
                    </ul>
                </li>
                <li class="dropdown alerts-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> Alerts <span
                            class="badge">3</span> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Default <span class="label label-default">Default</span></a></li>
                        <li><a href="#">Primary <span class="label label-primary">Primary</span></a></li>
                        <li><a href="#">Success <span class="label label-success">Success</span></a></li>
                        <li><a href="#">Info <span class="label label-info">Info</span></a></li>
                        <li><a href="#">Warning <span class="label label-warning">Warning</span></a></li>
                        <li><a href="#">Danger <span class="label label-danger">Danger</span></a></li>
                        <li class="divider"></li>
                        <li><a href="#">View All</a></li>
                    </ul>
                </li>
                <li class="dropdown user-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>
                        <?php
                        $username = $this->session->userdata('username');
                        if(isset($username)) {
                            echo $username;
                        }
                        else echo anchor('login', 'Login');?>
                        <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><i class="fa fa-user"></i> <?php
                                $username = $this->session->userdata('username');
                                if(isset($username)) {
                                    echo $username;
                                }
                                else echo anchor('login', 'Login');?></li>
                        <li><a href="#"><i class="fa fa-envelope"></i> Inbox <span class="badge">7</span></a></li>
                        <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
                        <li class="divider"></li>
                        <li><a href="login/logout"><i class="fa fa-power-off">Log Out</i></a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>
    <div id="page-wrapper">
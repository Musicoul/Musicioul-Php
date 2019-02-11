<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Musicoul</title>
    <!-- <link rel="stylesheet" href="https://aui-cdn.atlassian.com/aui-adg/6.0.9/css/aui.min.css" media="all"> -->
    <!-- <link rel="stylesheet" href="https://aui-cdn.atlassian.com/aui-adg/6.0.9/css/aui-experimental.min.css" media="all"> -->

    <!-- <link rel="stylesheet" href="button.css">
    <link rel="stylesheet" href="adg.header.css">
    <link rel="stylesheet" href="aui.navigation.css">
    <link rel="stylesheet" href="aui.typography.css">
    <link rel="stylesheet" href="aui.avatars.css">
    <link rel="stylesheet" href="aui.dropdown.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/@atlassian/aui@8.1.0/dist/aui/aui-prototyping.css" />

</head>

<body>
    <header id="header" role="banner">
        <!-- App Header goes inside #header -->
        <nav class="aui-header aui-dropdown2-trigger-group" role="navigation" data-aui-responsive="true">
            <div class="aui-header-primary">
                <h1 id="logo" class="aui-header-logo aui-header-logo-textonly"><a href="https://example.com/"><span
                            class="aui-header-logo-device">AUI</span></a></h1>
                <ul class="aui-nav">

                    <li><a href="#dropdown2-jira3" aria-owns="dropdown2-jira3" aria-haspopup="true" class="aui-dropdown2-trigger"
                            aria-controls="dropdown2-header7" aria-expanded="false">Menu</a>

                        <div class="aui-dropdown2 aui-style-default aui-dropdown2-in-header aui-layer" id="dropdown2-jira3"
                            data-aui-dropdown2="">
                            <div class="aui-dropdown2-section">
                                <ul>
                                    <li><a href="https://example.com/">Item 1</a></li>
                                    <li><a href="https://example.com/">Item 2</a></li>
                                    <li><a href="https://example.com/">Item 3</a></li>
                                    <li><a href="https://example.com/">Item 4</a></li>
                                    <li><a href="https://example.com/">Item 5</a></li>
                                </ul>
                            </div>
                            <div class="aui-dropdown2-section">
                                <ul>
                                    <li><a href="https://example.com/">Item 6</a></li>
                                    <li><a href="https://example.com/">Item 7</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <!-- You can also use a split button in this location, if more than one primary action is required. -->
                    <li style="display: none;"><a id="aui-responsive-header-dropdown-trigger-1" class="  aui-dropdown2-trigger"
                            aria-controls="aui-responsive-header-dropdown-content-1" aria-haspopup="true" role="button"
                            tabindex="0" href="#" aria-expanded="false">More</a>

                        <div id="aui-responsive-header-dropdown-content-1" class="aui-dropdown2 aui-style-default aui-layer"
                            role="menu" aria-hidden="true" data-aui-dropdown2="">
                            <div role="presentation">
                                <div class="aui-dropdown2-section">
                                    <ul id="aui-responsive-header-dropdown-list-1"></ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a class="aui-button aui-button-primary" href="https://example.com/">Action</a></li>
                </ul>
            </div>
            <div class="aui-header-secondary">
                <ul class="aui-nav">
                    <li>
                        <form class="aui-quicksearch" method="post" action="/foo">
                            <label class="assistive" for="quicksearchid">Search</label>
                            <input type="search" name="quicksearchname" placeholder="Quick Search" class="search" id="quicksearchid">
                        </form>
                    </li>
                    <li><a href="#dropdown2-header7" aria-owns="dropdown2-header7" aria-haspopup="true" class="aui-dropdown2-trigger-arrowless aui-dropdown2-trigger"
                            aria-controls="dropdown2-header7" aria-expanded="false"><span class="aui-icon aui-icon-small aui-iconfont-help">Help</span></a>

                        <div class="aui-dropdown2 aui-style-default aui-dropdown2-in-header aui-layer" id="dropdown2-header7"
                            data-aui-dropdown2="">
                            <div class="aui-dropdown2-section">
                                <ul>
                                    <li><a href="https://example.com/" class="active">Online help</a></li>
                                    <li><a href="https://example.com/">Keyboard shortcuts</a></li>
                                    <li><a href="https://example.com/">About</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li><a href="#dropdown2-header9" aria-owns="dropdown2-header9" aria-haspopup="true" class="aui-dropdown2-trigger-arrowless aui-dropdown2-trigger"
                            aria-controls="dropdown2-header9" aria-expanded="false">
                            <div class="aui-avatar aui-avatar-small">
                                <div class="aui-avatar-inner">
                                    <img src="../docs/images/avatar-person.svg">
                                </div>
                            </div>
                        </a>

                        <div class="aui-dropdown2 aui-style-default aui-dropdown2-in-header aui-layer" id="dropdown2-header9"
                            data-aui-dropdown2="">
                            <div class="aui-dropdown2-section">
                                <ul>
                                    <li><a href="https://example.com/" class="active">Profile</a></li>
                                    <li><a href="https://example.com/">Extensions</a></li>
                                </ul>
                            </div>
                            <div class="aui-dropdown2-section">
                                <ul>
                                    <li><a href="https://example.com/">Use Agile by default</a></li>
                                </ul>
                            </div>
                            <div class="aui-dropdown2-section">
                                <ul>
                                    <li><a href="https://example.com/">Log out</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
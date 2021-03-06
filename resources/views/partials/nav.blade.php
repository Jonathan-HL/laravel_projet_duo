<header id="masthead" class="site-header site-header-fill">

    <nav id="primary-navigation" class="site-navigation">

        <div class="container-fluid">

            <div class="navbar-header">

                <a href="/" class="site-title yellow-text">Business Perfect</a>

            </div><!-- /.navbar-header -->

            <div class="main-menu" id="perfect-navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class=" {{ Request::is('/') ? 'active' : '' }}">
                        <a href={{ route("home") }}>Home</a></li>
                    </li>
                    <li class="{{ Request::is('blog') ? 'active' : '' }}">
                        <a href={{ route("blog") }}>Blog </a>
                    </li>
                    <li class="{{ Request::is('portfolio') ? 'active' : '' }}">
                        <a href={{ route("portfolio") }}>Portfolio</a>
                    </li>
                    <li class="{{ Request::is('contact') ? 'active' : '' }}">
                        <a href={{ route("contact") }}>Contact</a>
                    </li>
                    <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
                        <a href={{ route("dashboard") }}>DashBoard</a>
                    </li>
                </ul><!-- /.navbar-nav -->
            </div><!-- /.navbar-collapse -->

        </div>

    </nav><!-- /.site-navigation -->

</header><!-- /#masthead -->

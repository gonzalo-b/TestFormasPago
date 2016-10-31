<!-- Navigation -->
<?php $url = explode("/", request()->url()); ?>
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ url('home') }}"> Laravel Test App</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{ Auth::user()->name }} <b class="caret"></b></a>
            <ul class="dropdown-menu">
                {{--<li>--}}
                    {{--<a href="{{url('users/'.Auth::user()->id)}}"><i class="fa fa-fw fa-user"></i> Profile</a>--}}
                {{--</li>--}}

                {{--<li class="divider"></li>--}}
                <li>
                    <a href="{{ url('/logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                    <i class="fa fa-fw fa-power-off"></i> Log Out
                    </a>
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </li>
    </ul>
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li  {{(in_array('formasdepago', $url)) ? 'class=active' : ''  }}>
                    <a href="{{ url('/formasdepago') }}"><i class="fa fa-fw fa-credit-card"></i> Formas de Pago </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
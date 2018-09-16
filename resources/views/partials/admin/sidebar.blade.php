<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Menu</li>
            <li class="active treeview menu-open">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Jobs</span>
                    <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{ route('admin.job.list') }}"><i class="fa fa-circle-o"></i> Current Jobs</a>
                    </li>
                    <li class="active">
                        <a href="{{ route('admin.job.create') }}"><i class="fa fa-circle-o"></i> Create</a>
                    </li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

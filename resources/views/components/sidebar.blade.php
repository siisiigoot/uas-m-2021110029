<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu" id="side-menu">
                <li class="menu-title">Main</li>
                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect">
                        <i class="mdi mdi-home"></i><span class="badge badge-primary float-right"></span> <span> Dashboard </span>
                    </a>
                </li>
                <li class="menu-title">ACCOUNTS</li>
                <li>
                    <a href="{{ route('accounts.index') }}" class="waves-effect">
                        <i class="mdi mdi-account-multiple"></i>
                        <span>
                            Accounts
                            <span class="badge badge-success float-right">6</span>
                        </span>
                    </a>
                </li>
                <li class="menu-title">TRANSACTIONS</li>
                <li>
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="mdi mdi-monitor-multiple"></i>
                        <span>
                            Transactions
                            <span class="float-right menu-arrow">
                                <span class="badge badge-success float-right">6</span>
                            </span>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left -->
</div>
<!-- Left Sidebar End -->
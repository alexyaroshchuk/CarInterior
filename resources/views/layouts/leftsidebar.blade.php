<!-- Left Sidebar  -->
<?php
use App\Role;
$role = new Role();
?>
<div class="left-sidebar">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                @if(App\Role::isManager())
                        <li><a href="/computer">Computer</a></li>
                        <li><a href="/lease">Lease</a></li>
                        <li><a href="/tariff">Tariff</a></li>
                        <li><a href="/typeComputer">Type Computer</a></li>
                @endif
                @if(App\Role::isAdmin())
                    <li><a href="/computer">Computer</a></li>
                        <li><a href="/lease">Lease</a></li>
                        <li><a href="/tariff">Tariff</a></li>
                        <li><a href="/typeComputer">Type Computer</a></li>
                        <li><a href="/staff">Staff</a></li>
                @endif
                @if(App\Role::isClient())
                        <li><a href="/lease">Lease</a></li>
                        <li><a href="/tariff">Tariff</a></li>
                    @endif
            </ul>
        </nav>
    </div>
</div>

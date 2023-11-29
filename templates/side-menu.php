<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">Menu</li>
                <li id="parentli">
                    <a href="dashboard"><i class="fa fa-home" aria-hidden="true"></i> <span class="side-txt"> Dashboard</span></a>
                </li>
                <li id="parentli" class="submenu">
                    <a href="javascript:void(0);"><i class="fa fa-desktop" aria-hidden="true"></i> <span class="side-txt"> Hub </span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li id="parentli">
                            <a href="hub-registration"><i class="fa fa-registered" aria-hidden="true"></i> <span class="side-txt"> Hub Registration</span></a>
                        </li>
                        <li id="parentli">

                            <a href="hub-view"><i class="fa fa-eye-slash" aria-hidden="true"></i> <span class="side-txt"> View Hubs</span></a>
                        </li>
                    </ul>
                </li>
                <li id="parentli">
                    <a href="aggregation-reg"><i class="fa fa-bullseye" aria-hidden="true"></i> <span class="side-txt"> Aggregation</span></a>
                </li>
                <li id="parentli">
                    <a href="chat.html"><i class="fa fa-users" aria-hidden="true"></i> <span class="side-txt d-flex"> Users <span class="menu-arrow"></span> <span class="badge badge-pill bg-primary">5</span></span></a>
                </li>
                <li id="parentli">
                    <a href="contacts.html"><i class="fa fa-address-book" aria-hidden="true"></i> <span class="side-txt"> Farmer </span></a>
                </li>
                <li id="parentli">
                    <a href="tasks.html"><i class="fa fa-globe" aria-hidden="true"></i> <span class="side-txt"> Seasons </span></a>
                </li>
                <li id="parentli" class="submenu">
                    <a href="#"><i class="fa fa-sign-language" aria-hidden="true"></i><span class="side-txt"> Extension Services</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li id="parentli"><a href="blog.html">Blog</a></li>
                        <li id="parentli"><a href="blog-details.html">Blog View</a></li>
                        <li id="parentli"><a href="add-blog.html">Add Blog</a></li>
                        <li id="parentli"><a href="edit-blog.html">Edit Blog</a></li>
                    </ul>
                </li>
                <li id="parentli">
                    <a href="tickets.html"><i class="fa fa-book" aria-hidden="true"></i><span class="side-txt">Training</span></a>
                </li>
                <li id="parentli">
                    <a href="settings.html"><i class="fa fa-university" aria-hidden="true"></i><span class="side-txt">Price Distribution</span></a>
                </li>
                <li id="parentli" class="submenu">
                    <a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="side-txt"> Buying</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li id="parentli"><a href="voice-call.html">Voice Call</a></li>
                        <li id="parentli"><a href="video-call.html">Video Call</a></li>
                        <li id="parentli"><a href="incoming-call.html">Incoming Call</a></li>
                    </ul>
                </li>
                <li id="parentli" class="submenu">
                    <a href="#"><i class="fa fa-credit-card" aria-hidden="true"></i><span class="side-txt"> Payments</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li id="parentli"><a href="compose.html">Compose Mail</a></li>
                        <li id="parentli"><a href="inbox.html">Inbox</a></li>
                        <li id="parentli"><a href="mail-view.html">Mail View</a></li>
                    </ul>
                </li>
                <li id="parentli" class="submenu">
                    <a href="#"><i class="fa fa-spinner" aria-hidden="true"> </i><span class="side-txt"> Loading</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li id="parentli"><a href="compose.html">Compose Mail</a></li>
                        <li id="parentli"><a href="inbox.html">Inbox</a></li>
                        <li id="parentli"><a href="mail-view.html">Mail View</a></li>
                    </ul>
                </li>
                <li id="parentli" class="submenu">
                    <a href="#"><i class="fa fa-truck" aria-hidden="true"></i><span class="side-txt"> Offloading</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li id="parentli"><a href="compose.html">Compose Mail</a></li>
                        <li id="parentli"><a href="inbox.html">Inbox</a></li>
                        <li id="parentli"><a href="mail-view.html">Mail View</a></li>
                    </ul>
                </li>
                <li id="parentli" class="submenu">
                    <a href="#"><i class="fa fa-address-card" aria-hidden="true"></i><span class="side-txt"> Rural Workers</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li id="parentli"><a href="compose.html">Compose Mail</a></li>
                        <li id="parentli"><a href="inbox.html">Inbox</a></li>
                        <li id="parentli"><a href="mail-view.html">Mail View</a></li>
                    </ul>
                </li>
                <li id="parentli" class="submenu">
                    <a href="#"><i class="fa fa-list" aria-hidden="true"></i><span class="side-txt"> Input Finance</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li id="parentli"><a href="compose.html">Compose Mail</a></li>
                        <li id="parentli"><a href="inbox.html">Inbox</a></li>
                        <li id="parentli"><a href="mail-view.html">Mail View</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        // Get the current page URL
        var currentUrl = window.location.href;

        // Loop through each menu item
        $('#sidebar-menu ul li a').each(function() {
            var menuItemUrl = $(this).attr('href');

            // Check if the current page URL contains the menu item URL
            if (currentUrl.includes(menuItemUrl)) {
                console.log("currentUrl", currentUrl)
                console.log("menuItemUrl=> ", menuItemUrl)
                // Add the "active" class to the parent li
                $(this).closest('li').addClass('active');
            }
        });
    });
</script>
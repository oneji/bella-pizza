<div class="mobile-menu-wrapper">
    <div class="menu-main-nav-menu-container">
        <ul id="menu-main-nav-menu-1" class="mobile-menu">
            <li class="menu-item {{ Route::currentRouteName() === 'site.home' ? 'current-menu-item current_page_item' : null }}"><a href="{{ route('site.home') }}">Home</a></li>
            <li class="menu-item {{ Route::currentRouteName() === 'site.menu' ? 'current-menu-item current_page_item' : null }}"><a href="menu.html">Menu</a></li>
            <li class="menu-item {{ Route::currentRouteName() === 'site.size-guide' ? 'current-menu-item current_page_item' : null }}"><a href="sizeguide.html">Size guide</a></li>
            <li class="menu-item {{ Route::currentRouteName() === 'site.about' ? 'current-menu-item current_page_item' : null }}"><a href="about.html">About us</a></li>
            <li class="menu-item {{ Route::currentRouteName() === 'site.contact' ? 'current-menu-item current_page_item' : null }}"><a href="contact.html">Contact</a></li>
         </ul>
    </div>
</div>
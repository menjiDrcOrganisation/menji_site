<nav x-data="{ open: false, scrolled: false }" 
     @scroll.window="scrolled = window.scrollY > 10" 
     :class="{'glass-effect shadow-lg': scrolled, 'bg-transparent': !scrolled}" 
     class="fixed w-full z-50 transition-all duration-300 ease-in-out">
    
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20 items-center">
            <!-- Logo & Desktop Navigation -->
            <div class="flex items-center">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}" class="flex items-center gap-3 group">
                        <div class="logo-container relative">
                            <div class="logo-shape w-10 h-10 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-xl flex items-center justify-center shadow-lg group-hover:shadow-indigo-500/25 group-hover:scale-105 transition-all duration-300">
                                <span class="text-white font-bold text-lg">M</span>
                            </div>
                            <div class="absolute -inset-1 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-xl blur opacity-20 group-hover:opacity-30 transition-opacity duration-300"></div>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-xl font-bold bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">Menji DRC</span>
                            <span class="text-xs text-gray-500 font-medium">Digital Solutions</span>
                        </div>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-2 sm:-my-px sm:ms-12 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="nav-item">
                        <i class="bi bi-speedometer2 mr-2"></i>
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    
                    <x-nav-link href="{{ route('admin.posts.create') }}" :active="request()->routeIs('admin.posts.create')" class="nav-item">
                        <i class="bi bi-plus-circle mr-2"></i>
                        {{ __('Ajouter article') }}
                    </x-nav-link>
                    
                    <x-nav-link href="{{ route('admin.posts.voir') }}" :active="request()->routeIs('admin.posts.voir')" class="nav-item">
                        <i class="bi bi-journals mr-2"></i>
                        {{ __('Gestion articles') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Right Side (User Dropdown & Tools) -->
            <div class="hidden sm:flex sm:items-center sm:ms-6 gap-3">
                <!-- Quick Actions -->
                <div class="flex items-center gap-2 px-3 py-1 bg-gray-50/50 rounded-full">
                    <!-- Stats Button -->
                    <button class="p-2 rounded-full text-gray-600 hover:text-indigo-600 hover:bg-indigo-50 transition-all duration-200 tooltip" data-tooltip="Statistiques">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                    </button>
                    
                    <!-- Notification Bell -->
                    <button class="relative p-2 rounded-full text-gray-600 hover:text-indigo-600 hover:bg-indigo-50 transition-all duration-200 tooltip" data-tooltip="Notifications">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                        <span class="absolute top-1 right-1 h-2 w-2 bg-red-500 rounded-full animate-pulse"></span>
                    </button>
                    
                    <!-- Search Button -->
                    <button class="p-2 rounded-full text-gray-600 hover:text-indigo-600 hover:bg-indigo-50 transition-all duration-200 tooltip" data-tooltip="Recherche">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                </div>

                <!-- Divider -->
                <div class="h-6 w-px bg-gray-200 mx-1"></div>

                <!-- User Dropdown -->
                <x-dropdown align="right" width="56">
                    <x-slot name="trigger">
                        <button class="user-profile-btn group">
                            <div class="avatar-container">
                                <div class="avatar-initials">
                                    {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                                </div>
                                <div class="avatar-ring"></div>
                            </div>
                            <div class="user-info">
                                <span class="user-name">{{ Auth::user()->name }}</span>
                                <span class="user-role">Administrateur</span>
                            </div>
                            <svg class="dropdown-chevron" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- User Header -->
                        <div class="user-dropdown-header">
                            <div class="user-dropdown-avatar">
                                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                            </div>
                            <div class="user-dropdown-info">
                                <p class="user-dropdown-name">{{ Auth::user()->name }}</p>
                                <p class="user-dropdown-email">{{ Auth::user()->email }}</p>
                            </div>
                        </div>
                        
                        <!-- Dropdown Items -->
                        <div class="dropdown-items">
                            <x-dropdown-link :href="route('profile.edit')" class="dropdown-item">
                                <i class="bi bi-person-circle mr-3"></i>
                                <span>{{ __('Mon Profil') }}</span>
                            </x-dropdown-link>
                            
                            <x-dropdown-link href="#" class="dropdown-item">
                                <i class="bi bi-gear mr-3"></i>
                                <span>{{ __('Paramètres') }}</span>
                            </x-dropdown-link>
                            
                            <x-dropdown-link href="#" class="dropdown-item">
                                <i class="bi bi-shield-check mr-3"></i>
                                <span>{{ __('Sécurité') }}</span>
                            </x-dropdown-link>
                            
                            <x-dropdown-link href="#" class="dropdown-item">
                                <i class="bi bi-bell mr-3"></i>
                                <span>{{ __('Notifications') }}</span>
                            </x-dropdown-link>
                        </div>
                        
                        <div class="dropdown-divider"></div>
                        
                        <!-- Additional Actions -->
                        <div class="dropdown-items">
                            <x-dropdown-link href="#" class="dropdown-item">
                                <i class="bi bi-question-circle mr-3"></i>
                                <span>{{ __('Aide & Support') }}</span>
                            </x-dropdown-link>
                            
                            <x-dropdown-link href="#" class="dropdown-item">
                                <i class="bi bi-chat-left-text mr-3"></i>
                                <span>{{ __('Feedback') }}</span>
                            </x-dropdown-link>
                        </div>
                        
                        <div class="dropdown-divider"></div>

                        <!-- Logout -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item logout-btn">
                                <i class="bi bi-box-arrow-right mr-3"></i>
                                <span>{{ __('Déconnexion') }}</span>
                            </button>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Mobile menu button -->
            <div class="sm:hidden flex items-center gap-3">
                <!-- Mobile Notification -->
                <button class="relative p-2 rounded-full text-gray-600 hover:text-indigo-600 hover:bg-indigo-50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                    <span class="absolute top-1 right-1 h-2 w-2 bg-red-500 rounded-full animate-pulse"></span>
                </button>
                
                <!-- Mobile menu toggle -->
                <button @click="open = ! open" 
                        class="mobile-menu-btn">
                    <span class="sr-only">Menu</span>
                    <div class="hamburger" :class="{'open': open}">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Navigation Menu -->
    <div x-show="open" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 -translate-y-4"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-4"
         class="mobile-menu">
        <div class="mobile-menu-container">
            <!-- Mobile User Info -->
            <div class="mobile-user-info">
                <div class="mobile-avatar">
                    {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                </div>
                <div>
                    <div class="mobile-user-name">{{ Auth::user()->name }}</div>
                    <div class="mobile-user-email">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <!-- Mobile Navigation Links -->
            <div class="mobile-nav-links">
                <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="mobile-nav-item">
                    <i class="bi bi-speedometer2"></i>
                    <span>{{ __('Dashboard') }}</span>
                </x-responsive-nav-link>
                
                <x-responsive-nav-link href="{{ route('admin.posts.create') }}" :active="request()->routeIs('admin.posts.create')" class="mobile-nav-item">
                    <i class="bi bi-plus-circle"></i>
                    <span>{{ __('Ajouter article') }}</span>
                </x-responsive-nav-link>
                
                <x-responsive-nav-link href="{{ route('admin.posts.voir') }}" :active="request()->routeIs('admin.posts.voir')" class="mobile-nav-item">
                    <i class="bi bi-journals"></i>
                    <span>{{ __('Gestion articles') }}</span>
                </x-responsive-nav-link>
            </div>

            <!-- Mobile User Menu -->
            <div class="mobile-user-menu">
                <x-responsive-nav-link :href="route('profile.edit')" class="mobile-menu-item">
                    <i class="bi bi-person-circle"></i>
                    <span>{{ __('Mon Profil') }}</span>
                </x-responsive-nav-link>
                
                <x-responsive-nav-link href="#" class="mobile-menu-item">
                    <i class="bi bi-gear"></i>
                    <span>{{ __('Paramètres') }}</span>
                </x-responsive-nav-link>
                
                <x-responsive-nav-link href="#" class="mobile-menu-item">
                    <i class="bi bi-shield-check"></i>
                    <span>{{ __('Sécurité') }}</span>
                </x-responsive-nav-link>
                
                <x-responsive-nav-link href="#" class="mobile-menu-item">
                    <i class="bi bi-bell"></i>
                    <span>{{ __('Notifications') }}</span>
                </x-responsive-nav-link>
                
                <!-- Logout -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="mobile-logout-btn">
                        <i class="bi bi-box-arrow-right"></i>
                        <span>{{ __('Déconnexion') }}</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</nav>

<style>
    /* Glass Effect */
    .glass-effect {
        background: rgba(255, 255, 255, 0.85);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    }
    
    /* Logo */
    .logo-container {
        position: relative;
    }
    
    .logo-shape {
        position: relative;
        z-index: 10;
    }
    
    /* Navigation Items */
    .nav-item {
        @apply relative px-4 py-2.5 rounded-lg text-gray-600 font-medium transition-all duration-200 flex items-center;
    }
    
    .nav-item:hover {
        @apply text-indigo-600 bg-indigo-50;
    }
    
    .nav-item.active {
        @apply text-indigo-600 bg-gradient-to-r from-indigo-50 to-purple-50;
    }
    
    .nav-item.active::before {
        content: '';
        position: absolute;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        width: 3px;
        height: 60%;
        background: linear-gradient(to bottom, #6366f1, #8b5cf6);
        border-radius: 0 3px 3px 0;
    }
    
    /* User Profile Button */
    .user-profile-btn {
        @apply flex items-center gap-3 px-3 py-2.5 rounded-xl transition-all duration-200;
        background: linear-gradient(135deg, rgba(99, 102, 241, 0.1), rgba(139, 92, 246, 0.1));
        border: 1px solid rgba(99, 102, 241, 0.2);
    }
    
    .user-profile-btn:hover {
        background: linear-gradient(135deg, rgba(99, 102, 241, 0.15), rgba(139, 92, 246, 0.15));
        border-color: rgba(99, 102, 241, 0.3);
        transform: translateY(-1px);
        box-shadow: 0 4px 12px rgba(99, 102, 241, 0.1);
    }
    
    .avatar-container {
        position: relative;
    }
    
    .avatar-initials {
        @apply w-9 h-9 rounded-full flex items-center justify-center text-white font-semibold text-sm;
        background: linear-gradient(135deg, #6366f1, #8b5cf6);
    }
    
    .avatar-ring {
        @apply absolute inset-0 rounded-full border-2 border-indigo-100;
        animation: pulse-ring 2s infinite;
    }
    
    @keyframes pulse-ring {
        0% { transform: scale(1); opacity: 1; }
        50% { transform: scale(1.05); opacity: 0.7; }
        100% { transform: scale(1); opacity: 1; }
    }
    
    .user-info {
        @apply text-left;
    }
    
    .user-name {
        @apply text-sm font-semibold text-gray-800 block;
    }
    
    .user-role {
        @apply text-xs text-gray-500 block;
    }
    
    .dropdown-chevron {
        @apply w-4 h-4 text-gray-400 transition-transform duration-200;
    }
    
    .user-profile-btn:hover .dropdown-chevron {
        @apply text-indigo-500 transform rotate-180;
    }
    
    /* Dropdown Styles */
    .user-dropdown-header {
        @apply px-4 py-3 flex items-center gap-3;
        background: linear-gradient(135deg, #f8fafc, #f1f5f9);
        border-bottom: 1px solid #e2e8f0;
    }
    
    .user-dropdown-avatar {
        @apply w-10 h-10 rounded-full flex items-center justify-center text-white font-semibold;
        background: linear-gradient(135deg, #6366f1, #8b5cf6);
    }
    
    .user-dropdown-name {
        @apply font-semibold text-gray-800;
    }
    
    .user-dropdown-email {
        @apply text-sm text-gray-500;
    }
    
    .dropdown-items {
        @apply py-2;
    }
    
    .dropdown-item {
        @apply flex items-center px-4 py-3 text-gray-700 hover:text-indigo-600 hover:bg-indigo-50 transition-colors duration-150;
    }
    
    .dropdown-divider {
        @apply h-px bg-gray-100 my-2;
    }
    
    .logout-btn {
        @apply text-red-600 hover:text-red-700 hover:bg-red-50;
    }
    
    /* Tooltip */
    .tooltip {
        position: relative;
    }
    
    .tooltip::after {
        content: attr(data-tooltip);
        position: absolute;
        bottom: 100%;
        left: 50%;
        transform: translateX(-50%);
        background: #1f2937;
        color: white;
        padding: 6px 10px;
        border-radius: 6px;
        font-size: 12px;
        white-space: nowrap;
        opacity: 0;
        visibility: hidden;
        transition: all 0.2s ease;
        z-index: 100;
    }
    
    .tooltip:hover::after {
        opacity: 1;
        visibility: visible;
        bottom: calc(100% + 8px);
    }
    
    .tooltip::before {
        content: '';
        position: absolute;
        bottom: 100%;
        left: 50%;
        transform: translateX(-50%);
        border: 4px solid transparent;
        border-top-color: #1f2937;
        opacity: 0;
        visibility: hidden;
        transition: all 0.2s ease;
        z-index: 100;
    }
    
    .tooltip:hover::before {
        opacity: 1;
        visibility: visible;
        bottom: calc(100% + 0px);
    }
    
    /* Mobile Menu Button */
    .mobile-menu-btn {
        @apply p-2 rounded-xl bg-indigo-50 text-indigo-600 hover:bg-indigo-100 transition-all duration-200;
    }
    
    .hamburger {
        @apply relative w-5 h-4;
    }
    
    .hamburger span {
        @apply absolute block w-full h-0.5 bg-current rounded-full transition-all duration-300;
    }
    
    .hamburger span:nth-child(1) {
        top: 0;
    }
    
    .hamburger span:nth-child(2) {
        top: 50%;
        transform: translateY(-50%);
    }
    
    .hamburger span:nth-child(3) {
        bottom: 0;
    }
    
    .hamburger.open span:nth-child(1) {
        transform: rotate(45deg);
        top: 50%;
    }
    
    .hamburger.open span:nth-child(2) {
        opacity: 0;
    }
    
    .hamburger.open span:nth-child(3) {
        transform: rotate(-45deg);
        bottom: 50%;
    }
    
    /* Mobile Menu */
    .mobile-menu {
        @apply absolute w-full bg-white shadow-2xl rounded-b-2xl z-40 border-t border-gray-100;
    }
    
    .mobile-menu-container {
        @apply py-4;
    }
    
    .mobile-user-info {
        @apply px-6 py-4 flex items-center gap-3 border-b border-gray-100;
    }
    
    .mobile-avatar {
        @apply w-12 h-12 rounded-full flex items-center justify-center text-white font-semibold text-lg;
        background: linear-gradient(135deg, #6366f1, #8b5cf6);
    }
    
    .mobile-user-name {
        @apply font-semibold text-gray-800;
    }
    
    .mobile-user-email {
        @apply text-sm text-gray-500;
    }
    
    .mobile-nav-links {
        @apply px-4 py-2;
    }
    
    .mobile-nav-item {
        @apply flex items-center gap-3 px-4 py-3 rounded-xl text-gray-700 hover:text-indigo-600 hover:bg-indigo-50 transition-colors duration-150 mb-1;
    }
    
    .mobile-nav-item.active {
        @apply text-indigo-600 bg-indigo-50;
    }
    
    .mobile-user-menu {
        @apply px-4 py-2 border-t border-gray-100 mt-2;
    }
    
    .mobile-menu-item {
        @apply flex items-center gap-3 px-4 py-3 rounded-xl text-gray-700 hover:text-indigo-600 hover:bg-indigo-50 transition-colors duration-150 mb-1;
    }
    
    .mobile-logout-btn {
        @apply w-full flex items-center gap-3 px-4 py-3 rounded-xl text-red-600 hover:text-red-700 hover:bg-red-50 transition-colors duration-150;
    }
</style>

<script>
    // Tooltip initialization
    document.addEventListener('DOMContentLoaded', function() {
        const tooltips = document.querySelectorAll('.tooltip');
        
        tooltips.forEach(tooltip => {
            tooltip.addEventListener('mouseenter', function() {
                const tooltipText = this.getAttribute('data-tooltip');
                const tooltipEl = document.createElement('div');
                tooltipEl.className = 'fixed z-50 px-2 py-1 text-xs font-medium text-white bg-gray-900 rounded shadow-lg';
                tooltipEl.textContent = tooltipText;
                document.body.appendChild(tooltipEl);
                
                const rect = this.getBoundingClientRect();
                tooltipEl.style.top = (rect.top - tooltipEl.offsetHeight - 8) + 'px';
                tooltipEl.style.left = (rect.left + rect.width / 2 - tooltipEl.offsetWidth / 2) + 'px';
                
                this._tooltipElement = tooltipEl;
            });
            
            tooltip.addEventListener('mouseleave', function() {
                if (this._tooltipElement) {
                    this._tooltipElement.remove();
                    this._tooltipElement = null;
                }
            });
        });
    });
</script>
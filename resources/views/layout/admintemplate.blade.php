<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>@yield("titlename")</title> 
    <link rel="stylesheet" href="{{ asset('style2.css') }}">
    <style> </style> 
</head> 
<body> 
<div class="dashboard"> 
    <div class="sidebar"> 
        
        <div class="nav-links">
            <a href="{{route('dashboard')}}">DASHBOARD</a> 
            <a href="{{route('showenquiries')}}">SHOW ENQUIRY</a> 
            <a href="{{route('addproject')}}">ADD PROJECTS</a> 
        </div>

        <div class="nav-right">
            <div class="search-box">
                <input type="text" placeholder="Search...">
            </div>
            <div class="admin-profile">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                <span>Admin</span>
            </div>
        </div>
    </div> 
    
    <div class="content"> 
        @yield("contantarea") 
    </div> 
</div> 
<script src="{{ asset('script2.js') }}"></script>
</body> 
</html>

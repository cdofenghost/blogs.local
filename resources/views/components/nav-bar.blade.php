<header>
    <a href="/" style="width: 100%">
        <button class="home-button">Space & Science: The Blog</button>
    </a>
    <a href="/category/Rocket Science" style="width: 100%">
        <button class="category-button">Rocket Science</button>
    </a>
    <a href="/category/Physics" style="width: 100%">
        <button class="category-button">Physics</button>
    </a>
    <a href="/category/IT Stuff" style="width: 100%">
        <button class="category-button">IT Stuff</button>
    </a>

    @auth
        @if (auth()->user()->role === "admin")
        <a href='/admin'>
            <button class="user-button" style="display: flex; align-items: center;">
                <i class="fas fa-user" style="margin-right: 8px;"></i>{{ auth()->user()->name }}
            </button>
        </a>
        @else
        <a>
            <button class="user-button" style="display: flex; align-items: center;">
                <i class="fas fa-user" style="margin-right: 8px;"></i>{{ auth()->user()->name }}
            </button>
        </a>
        @endif
    <form action="/user/logout" method="POST">
        @csrf
        <button class="category-button" style="display: flex; align-items: center;">
            <i class='fas fa-user' style="margin-right: 8px"></i>
            Logout
        </button>
    </form>
    @else
    <a href="/user/register" style="text-decoration: none;">
        <button class="category-button" style="display: flex; align-items: center;">
            <i class='fas fa-user' style="margin-right: 8px"></i>
            Register
        </button>
    </a>
    @endauth
    
</header>
<nav class="bg-black text-white py-4">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-2xl font-bold">Task Tracker</h1>
        <ul class="flex space-x-4">
            <li><a href="/" class="hover:underline p-4">Home</a></li>
            <li><a href="/about" class="hover:underline p-4">About</a></li>
            @if(Auth::user())
            <form action="{{ route('logout') }}" method="POST" class="inline">
                @csrf
                <button type="submit" class="hover:underline">Logout</button>
            </form>
            @else
            <li><a href="login" class="hover:underline p-4">Login</a></li>
            <li><a href="register" class="hover:underline p-4">Register</a></li>
            @endif
        </ul>
    </div>
</nav>
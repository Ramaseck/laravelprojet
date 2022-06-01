<footer>

        <p class="text-gray-400">&copy; copyright{{date('Y')}} 

            &middot;
            @if(!Route:: is ('about'))
            <a href="{{route('about')}}" class="text-indigo-500 hover:text-indigo-700 underline">About-Us</a></p>
            @endif
    </footer>
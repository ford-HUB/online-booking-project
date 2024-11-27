<div>
    <h1>Welcome to user page </h1><br>
    <p> Name: {{auth()->user()->name}} <br>
        gmail: {{ auth()->user()->email }} <br>
        role: {{ auth()->user()->role }}
    </p>

    <form action=" {{ route('logout') }} " method="post">
        @csrf
        <button type="submit">logout account</button>
    </form>
</div>

<div>
    <h1 class="text-3xl font-bold underline">Hello world!</h1>
</div>
<p>My Name is {{ $name }} {{ $surname }}</p>
<p> Year : {{ $year }}</p>

<p>{{ strtoupper($name . '' . $surname) }}</p>
<p>{{ Illuminate\Support\str::after('Hello World', 'Hello') }}</p>
<p>{{PHP_VERSION}}</p>
<p>{!! $job !!}</p>

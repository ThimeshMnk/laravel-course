<div>
    <h1 class="text-3xl font-bold underline">Hello world!</h1>
</div>

<script>
  const hobbies = {{\Illuminate\Support\Js::from($hobbies)}};
</script>

@verbatim
    <div>

        Name: {{ name }}
        Age: {{ age }}
        Job: {{ job }}
        Hobbies: {{ Hobbies }}
    </div>
@endverbatim

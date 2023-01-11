<style>
    body{
        font-family: Arial, Helvetica, sans-serif;

    }
    p{
        font-weight: 600;
        font-size: 24px;
        color: red;
    }
</style>
<p>
    category:{{ $category->name }} created
</p>
<p>
    <a href="{{ route('category.show',$category->id) }}">
        {{ $category->name }}
    </a>


</p>


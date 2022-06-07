<h3>Posts from {{$user->name}}:</h3>

<div class="row row-cols-4">
    @foreach($posts as $post)
        <div class="col">
            @include('partials.post-card')
        </div>
    @endforeach
</div>
